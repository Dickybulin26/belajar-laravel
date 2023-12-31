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
                    <td>{{$js->id_jenis_surat}}</td>
                    <td>{{$js->jenis_surat}}</td>
                    <td>
                        <a href="{{url('/jenissurat/edit/'.$js->id_jenis_surat)}}">
                            <btn class="btn btn-primary">Edit</btn>
                        </a>
                        <btn class="btn btn-danger hpsBtn" attr-id="{{$js->id_jenis_surat}}">Hapus</btn>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('footer')
<script type="module">
    $('.table tbody').on('click','.hpsBtn',function(event){
        event.preventDefault();
        event.stopImmediatePropagation();
        let idJnsSurat = $(this).closest('.hpsBtn').attr('attr-id');
        // alert(idJnsSurat);
        swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            showCancelButton: true,
            confirmButtonText: 'Setuju',
            cancelButtonText: 'Batal',
            confirmButtonColor: 'red'
        }).then((result)=> {
            if(result.isConfirmed){
                //* Jalankan ajax request untuk hapus
                axios.post('/jenissurat/hapus',{
                    'id_jenis_surat' : idJnsSurat //* error di "id_jenis_surat"
                }).then(function(response){
                    if(response.status){
                        swal.fire({
                            title: 'Berhasil!',
                            text: response.data.pesan,
                            icon: 'success'
                        }).then(()=>{
                            window.location.reload();  
                        });
                    } else {
                        alert(response.data.pesan);
                    }
                }).catch(function(error){
                    swal.fire({
                        title: 'Gagal!',
                        text: 'Data Gagal Dihapus!',
                        icon: 'error'
                    });
                });
            } else {
                //* Close Modal Puppup Event
            }
        }).catch(function(error){
            swal.fire({
                        title: 'Gagal!',
                        text: 'Data Gagal Dihapus!',
                        icon: 'error'
                    });
        });
    });
</script>

@endsection