@extends('layouts.admin')

@section('content')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Manajemen SMK IT Baitul Aziz</h4>
                    </div>
                    <a href="{{ route('manajemen.create') }}" class="text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3">
                        <i class="btn-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </i>
                        <span>Tambahkan Guru</span>
                    </a>
                </div>
                @if(count($gurus) > 0)
                <div class="container-fluid content-inner mt-n5 py-0">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Data Manajemen Sekolah</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                                            <thead>
                                                <tr>
                                                    <th>Foto</th>
                                                    <th>Nama Guru</th>
                                                    <th>Jabatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($gurus as $guru)
                                                <tr>
                                                    <td><img src="{{ asset('storage/' . $guru->image) }}" alt="Foto guru" class="img-fluid" style="height: 150px;"></td>
                                                    <td>{{ $guru->nama }}</td>
                                                    <td>{{$guru->jabatan }}</td>
                                                    <td>
                                                        <a href="{{ route('manajemen.edit', ['id' => $guru->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ route('manajemen.destroy', $guru->id) }}" method="POST" class="d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="container py-5 text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 mb-4">
                            <div class="card bg-white rounded shadow">
                                <div class="p-4">
                                    <p>Data belum ditambahkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection