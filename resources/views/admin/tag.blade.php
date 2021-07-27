@extends('layouts.admin')

@section('breadcrumbs')
    <div class="col-sm-6">
        <h1 class="m-0">Tag</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Tag</li>
        </ol>
    </div>
@endsection

@section('content')
    @livewire('tag.tag')
@endsection


@section('script')
    @livewireScripts
@endsection

@section('style')
    @livewireStyles
@endsection
