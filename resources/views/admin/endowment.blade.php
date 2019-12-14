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
                                Data Transaksi
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
                                    @foreach($data as $i => $val)
                                        <tr>
                                            <td>{{ ($i + 1) }}</td>
                                            <td>{{ $val->user->name }}</td>
                                            <td>{{ $val->user->email }}m</td>
                                            <td>{{ $val->created_at }}</td>
                                            <td>
                                                @if($val->type == 'benih')
                                                    {{ $val->endowment }} Benih
                                                @else
                                                    Rp {{ $val->endowment }}
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-success"
                                                   href="">
                                                    Konfirmasi
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
