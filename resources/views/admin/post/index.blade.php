@extends('layouts.admin')

@section('breadcrumbs')
    <div class="col-sm-6">
        <h1 class="m-0">Post</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Post</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header bg-dark text-light">
                    <h3 class="card-title" style="line-height: 36px;">Post List</h3>
                    <a href="{{ route('posts.create') }}"
                        class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                            class="fas fa-plus"></i>&nbsp;Create Post</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @each('livewire.tag.list', $tags, 'tag', 'components.notfound') --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    @livewireScripts
@endsection

@section('style')
    @livewireStyles
@endsection
