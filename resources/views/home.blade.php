@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-2">
                <div class="card-header">Database Kelas</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $row)
                                <tr>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->jurusan}}</td>
                                <td>
                                    <form action="{{route('kelas.destroy',[$row->id])}}" method="post" onSubmit="return confirm('Apakah kamu yakin akan menghapus data ini?')">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="{{route('kelas.edit',[$row->id])}}"  class="btn btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
             <div class="card">
                <div class="card-header">Nama kelas</div>
                <div class="card-body">
                    <form action="{{route('kelas.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="label-form">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection