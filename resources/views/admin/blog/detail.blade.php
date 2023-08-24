@extends('admin.template.base')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <h2 class="page-title">
                    Detail Blog
                </h2>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    @if ($blog->image)
                        <img src="{{ asset($blog->image) }}">
                    @endif
                    <hr class="my-2">
                    <h1 class="mb-2">{{ $blog->title }}</h1>
                    <p>{!! nl2br($blog->body) !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
