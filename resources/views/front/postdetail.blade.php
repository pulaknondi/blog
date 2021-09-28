@extends('site.component.layout')
@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1> {{ $data->title }}</h1>
                            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">{{ $data->user->name}}</a>
                                on {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('Y.m.d') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>   
 <!-- Post Content-->
 <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>{{ $data->details }}</p>
                        <a href=""><img class="img-fluid" src="{{ asset('storage/image/' .$data->photo) }} " alt="..."></a>
                    </div>
                </div>
            </div>
        </article>
@endsection