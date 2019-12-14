@extends('layouts.app-admin')


@section('sidebar-active', 'volunteer')
@section('title', 'Relawan')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['#' => 'Relawan']
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
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $i => $val)
                                        <tr>
                                            <td>{{ ($i+1) }}</td>
                                            <td>{{ $val->name }}</td>
                                            <td>{{ $val->email }}</td>
                                            <td>{{ $val->updated_at }}</td>
                                            <td>
                                                <a class="btn btn-success"
                                                   href="">
                                                    Terima Sebagai Relawan
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger"
                                                   href="">
                                                    Tolak Sebagai Relawan
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
