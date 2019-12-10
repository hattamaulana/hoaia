@extends('layouts.app-admin')


@section('sidebar-active', 'forest')
@section('title', 'Edit Data Hutan')
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
                Form Untuk Mengedit data Hutan.
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Hutan</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="name">Lokasi Hutan</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="name">Negara</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="name">Luas Hutan</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label>Textarea</label>
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
