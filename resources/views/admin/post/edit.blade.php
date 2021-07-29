@extends('layouts.admin')

@section('breadcrumbs')
    <div class="col-sm-6">
        <h1 class="m-0">Post</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Post</a></li>
            <li class="breadcrumb-item active">Edit Post</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header bg-dark text-light">
                    <h3 class="card-title" style="line-height: 36px;">Edit Post</h3>
                    <a href="{{ route('posts.index') }}"
                        class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                            class="fas fa-arrow-left"></i>&nbsp;Back</a>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('posts.update', $post->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        <div class="row justify-content-center pt-3 pb-4">
                            <div class="col-md-8">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input value="{{ $post->title }}" name="title" type="text"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Enter Title">
                                            @error('title') <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Category <span class="text-danger">*</span></label>
                                            <select name="category_id"
                                                class="select2bs4 w-100 @error('category_id') is-invalid @enderror">
                                                @foreach ($categories as $category)
                                                    <option {{ $category->id == $post->category_id ? 'selected' : '' }}
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id') <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tag</label>

                                            <select name="tags[]" class="select2bs4 @error('tags') is-invalid @enderror"
                                                style="width: 100%;" multiple data-placeholder="Select Tag">
                                                @foreach ($tags as $tag)
                                                    <option {{ $post->tags->contains('id', $tag->id) ? 'selected' : '' }}
                                                        value="{{ $tag->id }}">
                                                        {{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('tags') <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span> @enderror

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea rows="5" type="text" class="form-control" name="short_description"
                                                placeholder="Write short description of post... ">{{ $post->short_description }}</textarea>
                                            @error('short_description') <span class="invalid-feedback d-block"
                                                role="alert"><strong>{{ $message }}</strong></span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="editor2" type="text" class="form-control" name="long_description"
                                                placeholder="Write long description of post... ">{{ $post->long_description }}</textarea>
                                            @error('long_description') <span class="invalid-feedback d-block"
                                                role="alert"><strong>{{ $message }}</strong></span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 offset-3 text-center">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-plus"></i> Update Post
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center mt-3">
                                    <label class="form-lebel mb-3">Thumbnail Image</label> <br>

                                    @if ($post->thumbnail)
                                        <img width="300px" height="300px" id="image" class="img-fluid"
                                            src="{{ asset($post->thumbnail) }}" alt="image"
                                            style="border: 1px solid #adb5bd;margin: 0 auto;padding: 3px;">
                                    @else
                                        <img width="300px" height="300px" id="image" class="img-fluid"
                                            src="{{ asset('backend/image/default-post.png') }}" alt="image"
                                            style="border: 1px solid #adb5bd;margin: 0 auto;padding: 3px;">
                                    @endif

                                    <div class="upload-btn-wrapper mt-3">
                                        <input name="thumbnail"
                                            onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                            id="hiddenImgInput" type="file" hidden />
                                        <button onclick="$('#hiddenImgInput').click()" class="btn btn-info"
                                            type="button">Choose an image</button>
                                    </div>
                                    @error('thumbnail') <span class="invalid-feedback d-block"
                                        role="alert"><strong>{{ $message }}</strong></span> @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }

        .select2-results__option[aria-selected=true] {
            display: none;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
            color: #fff;
            border: 1px solid #fff;
            background: #007bff;
            border-radius: 30px;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }

    </style>
@endsection

@section('script')
    <script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/ckeditor/ckeditor.js"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
