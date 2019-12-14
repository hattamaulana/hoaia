@extends('layouts.app-admin')


@section('sidebar-active', 'donation')
@section('title', 'Tambah Data Donasi')
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

        <form role="form" method="post" action="{{ route('admin.donation.new') }}" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Title Donasi</label>
                    <input type="text" class="form-control" id="name" name="title">
                </div>

                <div class="form-group">
                    <label for="name">Target Benih Pohon yang diharapkan</label>
                    <input type="text" class="form-control" id="name" name="plant">
                </div>

                <div class="form-group">
                    <label for="name">Target Uang Donasi yang diharapkan</label>
                    <input type="text" class="form-control" id="name" name="money">
                </div>

                <div class="form-group">
                    <label>Tambahkan Deskripsi</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="imgurl" class="custom-file-input" id="exampleInputFile">
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
