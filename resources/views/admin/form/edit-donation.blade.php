@extends('layouts.app-admin')


@section('sidebar-active', 'donation')
@section('title', 'Edit Data Donasi')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['/admin/donation' => 'Donasi'],
            ['#' => 'Tambah']
        ]])
    @endcomponent
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Form Untuk membuat Donasi
            </h3>
        </div>

        <form role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Title Donasi</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="name">Target Benih Pohon yang diharapkan</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="name">Target Uang Donasi yang diharapkan</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label>Tambahkan Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection
