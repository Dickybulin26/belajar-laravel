@extends('template.layout')

@section('title','Tambah Jenis Surat')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <hr>
        <div class="card">
            <form method="POST" id="formTambah" action="{{url('jenissurat/simpan')}}">
                <div class="card-header">
                    <h1>Tambah Jenis Surat</h1>
                </div>
                <div class="card-body">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Nama Jenis Surat</label>
                            <input type="text" name="jenis_surat" class="form-control">
                            @csrf
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection