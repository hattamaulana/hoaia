@extends('layouts.app-admin')


@section('sidebar-active', 'message')
@section('title', 'Pesan dari Pengguna')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['#' => 'Message']
        ]])
    @endcomponent
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pesan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pengirim</th>
                        <th>Pesan</th>
                        <th>Waktu</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td class="mailbox-name">
                            <a href="{{ route('admin.message.detail', 1) }}"
                               class="text-black-50">
                                Alexander Pierce
                            </a>
                        </td>

                        <td class="mailbox-subject">
                            <a href="{{ route('admin.message.detail', 1) }}"
                               class="text-black-50 ">
                                AdminLTE 3.0 Issue- Trying to find a solution to this problem...
                            </a>
                        </td>
                        <td class="mailbox-date">5 mins ago</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer p-0">
            <div class="mailbox-controls">
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                    1-50/200
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
