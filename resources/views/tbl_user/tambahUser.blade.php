@extends('template.layout')

@section('title','Daftar User')

@section('content')


<div class="rows">
    <div class="col-lg-12">
        <br>
        <hr>
        <div class="card">
            <form action="POST" action='{{url("/user/saveuser")}}'>
                <div class="card-header">
                    <h1>Tambah User.</h1>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control-name" placeholder="asep setiawan" required autocomplete="false">
                        <input type="password" name="password" required>

                        <label for="">admin</label>
                        <input type="radio" name="role" required value="admin">

                        <label for="">operator</label>
                        <input type="radio" name="role" required value="operator">
                        @csrf
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection