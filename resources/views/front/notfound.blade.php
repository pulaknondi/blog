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
    
    <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
        <h4 class="fst-italic">About</h4>
        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>
         
        <div class="p-4">
        <h4 class="fst-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            <!-- @foreach($data as $row)
            <li>
                <a href="{{ route('front.date.post',$row->created_at) }}">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M Y') }}</a>
                <a href="{{ route('front.date.post',$row->created_at) }}">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M Y') }}</a>
            </li>
            @endforeach -->
            <li><a href="{{ route('post.monthwise', 'januery') }}">Januery 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'february') }}">february 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'march') }}">march 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'april') }}">april 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'may') }}">may 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'june') }}">june 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'july') }}">july 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'august') }}">august 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'september') }}">september 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'october') }}">october 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'november') }}">november 2021</a></li>
            <li><a href="{{ route('post.monthwise', 'december') }}">december 2021</a></li>
            
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
