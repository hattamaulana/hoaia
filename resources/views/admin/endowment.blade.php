@extends('layouts.app-admin')


@section('sidebar-active', 'endowment')
@section('title', 'Donation')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['#' => 'Sumbangan']
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
                            <h3 class="card-title">
                                Data Request Menjadi Relawan
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Tanggal Pendaftaran </th>
                                    <th>Donasi</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mahatta Maulana</td>
                                    <td>mahatta.maulana@gmail.com</td>
                                    <td>10 September 2013</td>
                                    <td>
                                        30 Benih
                                    </td>
                                    <td>
                                        <a class="btn btn-success"
                                           href="">
                                            Konfirmasi
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
