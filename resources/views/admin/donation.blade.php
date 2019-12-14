@extends('layouts.app-admin')


@section('sidebar-active', 'donation')
@section('title', 'Donation')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['#' => 'Donation']
        ]])
    @endcomponent
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <a class="btn btn-tool bg-success"
                               href="{{ route('admin.donation.add') }}" >
                                <i class="fas fa-plus"></i>
                                Tambah data
                            </a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Hutan</th>
                                    <th>Deskripsi</th>
                                    <th>Target Benih</th>
                                    <th>Target Uang</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $i => $val)
                                    <tr>
                                        <td>{{ ($i + 1) }}</td>
                                        <td>{{ $val->title }}</td>
                                        <td>{{ $val->description }}</td>
                                        <td>{{ $val->plant }} Benih</td>
                                        <td>Rp {{ $val->money }}</td>
                                        <td>
                                            <a class="btn btn-tool bg-warning"
                                               href="{{ route('admin.donation.edit', 1) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-tool bg-danger"
                                               href="{{ route('admin.donation.destroy', 1) }}">
                                                <i class="fas fa-minus"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div>
    </section>
@endsection
