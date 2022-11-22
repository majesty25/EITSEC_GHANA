@extends('layout')
@section('content')
<style>
.ACTIVE {
    background-color: dodgerblue;
}
</style>
<div class="col-sm-8 p-3">
    <div class="container-fluid pt-5">
        <div class="container mt-3">
            <h2>Send invoice to client</h2>
            <form action="/send" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" mb-3">
                    <label for="email">Full Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name">
                </div>
                <div class=" mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Phone:</label>
                    <input type="tel" class="form-control" id="pwd" placeholder="Enter Phone number" name="phone">
                </div>

                <div class="mb-3">
                    <label for="pwd">Invoice file:</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection