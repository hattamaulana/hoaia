@extends('layouts.app-admin')


@section('sidebar-active', 'message')
@section('title', '')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['#' => 'Message']
        ]])
    @endcomponent
@endsection

@section('content')
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Compose New Message</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <input class="form-control" placeholder="To:">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Subject:">
            </div>
            <div class="form-group">
                <textarea id="compose-textarea" class="form-control" style="height: 300px"></textarea>
            </div>
            <div class="form-group">
                <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="float-right">
                <a href="{{ route('admin.message') }}"
                   class="btn btn-success">
                    <i class="far fa-envelope"></i> Send
                </a>
            </div>
            <a href="{{ route('admin.message') }}"
               class="btn btn-outline-danger">
                <i class="fas fa-times"></i> Discard
            </a>
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
