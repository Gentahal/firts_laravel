@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card">
                <div class="card-header">Input nama siswa</div>
                <div class="card-body">
                    <form action="{{route('siswa.update',[$siswa->id])}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label class="label-form">Nama</label>
                            <input type="text" required value="{{ $siswa->nama }}" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Jurusan</label>
                            <select required name="id_kelas" class="form-control">
                                <option value="{{ $siswa->kelas->id }}"->{{ $siswa->kelas->nama }} / {{ $siswa->kelas->jurusan }}</option>
                                @foreach($kelas as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }} / {{ $row->jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required value="{{ $siswa->alamat }}" name="alamat">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Tambahkan</button>
                            <button type="reset" class="btn btn-danger">hapus</button>
                            <a href="/siswa" class="btn btn-warning">Back</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection