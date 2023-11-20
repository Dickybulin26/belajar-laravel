@extends('template.layout')

@section('title','Daftar Jenis Surat')

@section('content')


<div class="rows">
    <div class="col-lg-12">
        <span>Daftar Jenis Surat</span>
        <br>
        <a href="{{url('/jenissurat/tambah')}}">
            <button class="btn btn-success">Tambah Surat</button>
        </a>
        <hr>
        <table class="table table-hovered table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenis_surat as $js)
                <tr>
                    <td>#</td>
                    <td>{{$js-jenis_surat}}</td>
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