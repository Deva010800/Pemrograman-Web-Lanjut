@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Daftar Anggota Poktan</h1>
    </div>   <!--End Page Header -->
</div>  
<div class="row">
    <div class="col-lg-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-success">
            <div class="panel-heading">
                Tabel Anggota
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr >
                                <th class="text-center">No</th>
                                <th class="text-center">ID Anggota</th>
                                <th class="text-center">Nama Anggota</th>
                                <th class="text-center">ID Poktan</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">No Hp</th>
                                <th class="text-center" colspan="2">Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Anggota as $in=>$val)
                            <tr>
                                <td class="text-center">{{$in+1}}</td>
                                <td class="text-center">{{$val->id_anggota}}</td>
                                <td class="text-center">{{$val->nama_anggota}}</td>
                                <td class="text-center">{{$val->id_poktan}}</td>
                                <td class="text-center">{{$val->jk}}</td>
                                <td class="text-center">{{$val->tempat_lahir}}</td>
                                <td class="text-center">{{$val->tanggal_lahir}}</td>
                                <td class="text-center">{{$val->alamat}}</td>
                                <td class="text-center">{{$val->no_hp}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$Anggota->links()}}
                </div>
            </div>
            <div class="panel-footer"></div>
        </div>
        <!-- End  Kitchen Sink -->
    </div>           
</div>

@endsection
           