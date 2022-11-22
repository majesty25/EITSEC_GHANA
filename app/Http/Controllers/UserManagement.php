<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Generator\StringManipulation\Pass\Pass;

class UserManagement extends Controller
{
    public function register(Request $request)
    {
        $user = [
            'firstName' => $request->input('fname'),
            'lastName' => $request->input('lname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password'),
            'repeatPassword' => $request->input('rep_password')
        ];
        $query = "INSERT INTO users(firstName, lastName, email, phone, password)
                  VALUES('$user[firstName]', '$user[lastName]', '$user[email]', '$user[phone]', '$user[password]')";
        DB::insert($query);
        return view('login');
    }


    /**
     * Authenticate user and logs user in
     */
    public function signin(Request $request)
    {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $query = "SELECT * FROM users
                   WHERE email = '$login[email]' AND password = '$login[password]'
                 ";
        $user = DB::select($query);

        if ($user === []) {
            return "<h1>Login Failed!</h1> <a href='/login'>Try again</a>";
        }
        $request->session()->put("user", $user[0]->id);
        return redirect('/');
    }


    /**
     * Returns the view that allow user to send invoice
     */
    public function sendInvoice()
    {
        if (session()->has("user")) {
            return view('dashboard');
        } else {
            return redirect('login');
        }
    }


    /**
     * Returns the sent invoice view
     */
    public function viewInvoice()
    {
        if (session()->has('user')) {
            $query = "select * from invoices";
            $invoice = DB::select($query);
            return view('invoices', ['invoice' => $invoice]);
        } else {
            return  redirect('/login');
        }
    }

    /**
     * Removes sent invoice from database
     */
    public function removeInvoice(Request $request)
    {
        $query = "delete from invoices where id = ?";
        DB::delete($query, [$request->id]);
        $query = "select * from invoices";
        $invoice = DB::select($query);
        return view('invoices', ['invoice' => $invoice]);
    }

    /**
     * Returns the login view
     */
    public function login()
    {
        if (session()->has('user')) {
            return redirect('/');
        }
        return view('login');
    }


    /**
     * Clears user session if there is any
     * Returns the login view
     */
    public function logout()
    {
        if (session()->has('user')) {
            session()->pull('user');
        }
        return redirect('/login');
    }

    /**
     * Returns the sign up view
     */
    public function signup()
    {
        if (session()->has('user')) {
            return redirect("/");
        }
        return view("signup");
    }
}