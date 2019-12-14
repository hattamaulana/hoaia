@extends('layouts.app-admin')


@section('sidebar-active', 'forest')
@section('title', 'Hutan')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['#' => 'Hutan']
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
                                   href="{{ route('admin.forest.add') }}" >
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
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{ ($key + 1) }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->description }}</td>
                                            <td>
                                                <a class="btn btn-tool bg-warning"
                                                   href="{{ route('admin.forest.edit', $value->id) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-tool bg-danger"
                                                   href="{{ route('admin.forest.destroy', $value->id) }}">
                                                    <i class="fas fa-minus"></i>
                                                </a>
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
    </section>
@endsection
