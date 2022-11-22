<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    /**
     *  This controller function sends email to client
     *  and stores form data into database
     **/
    public function sendEmail(Request $request)
    {
        $currentTime = Carbon::now();
        $date = $currentTime->toDateString();
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'file' => $request->file('file')
        ];
        Mail::to($data['email'])->send(new SendMail($data));
        $query = "insert into invoices(date,receiver_name, receiver_email, receiver_phone)
        values('$date', '$request->name', '$request->email', '{$request->phone}')";
        DB::insert($query);
        $query = "select * from invoices";
        $invoice = DB::select($query);
        return view('invoices', ['invoice' => $invoice]);
    }
}