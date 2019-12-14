@extends('layouts.app-admin')


@section('sidebar-active', 'forest')
@section('title', 'Tambah Data Hutan')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['/admin/hutan' => 'Hutan'],
            ['#' => 'Tambah']
        ]])
    @endcomponent
@endsection

@section('content')
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Form Untuk Menambah data Hutan.
        </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" enctype="multipart/form-data" action="{{ route('admin.forest.new') }}">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama Hutan</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="name">Lokasi Hutan</label>
                <input type="text" class="form-control" id="name" name="location">
            </div>

            <div class="form-group">
                <label for="name">Negara</label>
                <input type="text" class="form-control" id="name" name="country">
            </div>

            <div class="form-group">
                <label for="name">Luas Hutan</label>
                <input type="text" class="form-control" id="name" name="large">
            </div>

            <div class="form-group">
                <label>Textarea</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imgurl">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Publish</button>
        </div>
    </form>
</div>
@endsection
