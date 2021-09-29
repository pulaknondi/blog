@extends('site.component.layout')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Blog</h1>
                  
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-8">
        
        @foreach($data as $row)
      
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{ route('user.posts',$row->slug) }}">
                    <h2 class="post-title">{{ $row->title }}</h2>
                    <h3 class="post-subtitle">{{ Str::limit($row->details, 30) }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="{{ route('front.name.post',$row->user->id)}}">{{ $row->user->name}}</a>
                    on {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M Y') }}
                </p>
                <p class="post-meta">Category : <a href="{{ route('front.category.post',$row->catslug)}}">{{ $row->name }}</a></p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
        @endforeach   
            <!-- Pager-->
            <div class="d-flex justify-content-center">

        </div>
        </div>
        <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
        <h4 class="fst-italic">About</h4>
        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>
         
        <div class="p-4">
        <h4 class="fst-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
           
            @for ($j = 0; $j <= 5; $j++)
            <li><a href="{{ route('post.monthwise', date('Y-m',strtotime(-$j.' month'))) }}">{{ date("F Y", strtotime(" -$j month")); }}</a></li>
            @endfor   
        </ol>
        </div>

        <div class="p-4">
        <h4 class="fst-italic">Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
        </div>
    </div>
</div>
</div>
</div>
        
@endsection
