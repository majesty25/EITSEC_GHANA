@extends('layout')
@section('content')
<style>
.ACTIVE2 {
    background-color: dodgerblue;
}
</style>
<div class="col-sm-8 p-3">
    <div class="container-fluid pt-5">
        <div class="container mt-3">
            <h2>Sent Invoices</h2>
            <p>This table shows all the invoices sent to clients</p>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Receiver's Name</th>
                        <th>Receiver's Email</th>
                        <th>Receiver's Phone</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($invoice as $invoice)
                    <tr>
                        <td>{{$invoice->receiver_name}}</td>
                        <td>{{$invoice->receiver_email}}</td>
                        <td>{{$invoice->receiver_phone}}</td>
                        <td>{{$invoice->date}}</td>
                        <td>
                            <form action="/delete" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$invoice->id}}">
                                <button class="btn btn-primary" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>

@endsection