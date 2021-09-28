@extends('site.component.layout')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Blog</h1>
                   
                    
                   
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-8">
        @foreach($post as $row)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{ route('user.post.detail',$row->id) }}">
                    <h2 class="post-title">{{ $row->title }}</h2>
                    <h3 class="post-subtitle">{{ Str::limit($row->details, 30) }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">{{ $row->user->name}}</a>
                    on {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M Y') }}
                </p>
                <p class="post-meta">Category : <a href="{{ route('user.category.post',$row->id)}}">{{ $row->name }}</a></p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
        @endforeach   
            <!-- Pager-->
            <div class="d-flex justify-content-center">

        </div>
        </div>
        
@endsection