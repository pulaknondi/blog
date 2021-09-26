@extends('site.component.layout')

@section('content')
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
        @foreach($data as $row)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">{{ $row->title }}</h2>
                    <h3 class="post-subtitle">{{ Str::limit($row->details, 30) }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">{{ $row->user->name}}</a>
                    on {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('Y.m.d') }}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
        @endforeach   
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
@endsection