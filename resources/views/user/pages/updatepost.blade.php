@extends('user.dashboard.layout')
@section('content')     
@php  
    $uid = auth()->user()->id;
    $id = $post_id;
@endphp
 <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Blog</a>
        <a class="breadcrumb-item" href="index.html">Posts</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Post Here</h6>
          <form action="{{ route('user.post.update',$id)}}" method="post" enctype="multipart/form-data">
          @csrf
         
          <div class="row">
            <div class="col-lg">
              <textarea rows="3" class="form-control" name="title" placeholder="Title">{{$data->title}}</textarea>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <input type="text" class="form-control" value="{{$data->slug}}" placeholder="Slug" name="slug">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <select class="form-control select2" data-placeholder="Choose Option" name="category">
                  <option label="Choose Category"></option>
                    @foreach($cat as $c)
                    <option value="{{  $c->id }}" >{{  $c->name}}</option>
                    @endforeach
                  
              </select>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <select class="form-control select3" data-placeholder="Status" name="status">
                  <option label="Choose Category"></option>
                    <option value="1" >Publish</option>
                    <option value="0" >UnPublish</option>
              </select>
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <textarea rows="3" class="form-control" name="details" placeholder="Description">{{$data->details}}</textarea>
            </div><!-- col -->
            <div class="col-lg">
              <input type="file" name="image" class="form-control">
            </div>
          </div><!-- row -->
          <div class="row mg-t-20">
            <div class="col-lg">
            <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div><!-- row -->
          </form>
        </div><!-- card -->
      </div><!-- sl-pagebody -->
       
@endsection