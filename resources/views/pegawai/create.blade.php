@extends('layouts.admin_template')
@section('title')
    Member
@endsection
@section('head')
    Member
@endsection
@section('desc')
    Create
@endsection
@section('content')
    <div class="box box-success">
        <div class="box-headers">
            @include('layouts/alert-validate')
        </div>
        <div class="box-body">
            <form action="{{ route('pegawai.store') }}" method="POST" role="form">
                @method('post')
                @include('pegawai.form')
            </form>
        </div>
    </div>
@endsection