@extends('template.layout')

@section('title','Daftar User')

@section('content')


<div class="rows">
    <div class="col-lg-12">
        <span>Daftar User</span>
        <br>
        <a href="{{url('/user/tambahuser')}}">
            <button class="btn btn-success">Tambah User</button>
        </a>
        <hr>
        <table class="table table-hovered table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tbl_user as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->role}}</td>
                    <td>
                        <btn class="btn btn-danger">Hapus</btn>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection