@extends('user.dashboard.layout')
@section('content')     
@php
$id = $ct_id;

@endphp
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Blog</a>
        <a class="breadcrumb-item" href="index.html">Category</a>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
        <form action="{{ route('user.category.update',$id)}}" method="post">
          @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Category Name: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" name="cat_name" value="{{ $data->name }}"  placeholder="Enter category">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Category Slug: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="cat_slug" value="{{ $data->slug }}" placeholder="Enter category slug">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                <select class="form-control select2" data-placeholder="Choose Option" name="cat_status">
                        <option label="Choose Option"></option>
                        <option value="1" >Publish</option>
                        <option value="0" >Unpublish</option>
                    </select>
                    </div>
              </div><!-- col-4 -->
              <div class="form-layout-footer">
              <button type="submit" class="form-control btn btn-primary"> Submit</button>
              
              </div>
              
            </div><!-- row -->
          </div><!-- form-layout -->
        </form>
        </div><!-- card -->

        
      </div><!-- sl-pagebody -->    
      
@endsection