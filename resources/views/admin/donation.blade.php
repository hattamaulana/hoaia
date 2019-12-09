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
                            <a class="btn btn-tool bg-primary"
                               href="" >
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
                                    <th>Target Benih Terkumpul</th>
                                    <th>Target Uang Terkumpul</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Alas Purwo</td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>1000 Benih</td>
                                <td>Rp 1.000.000.000</td>
                                <td>
                                    <a class="btn btn-tool bg-warning"
                                       href="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-tool bg-danger"
                                       href="">
                                        <i class="fas fa-minus"></i>
                                    </a>
                                </td>
                            </tr>
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
