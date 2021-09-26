@extends('user.dashboard.layout')
 @section('content')     

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Blog</a>
        <a class="breadcrumb-item" href="index.html">Category</a>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
        <form action="{{route('user.category.post')}}" method="post">
            @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Category Name: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" name="cat_name"  placeholder="Enter category">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Category Slug: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="cat_slug"  placeholder="Enter category slug">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                <button type="submit" class="form-control btn btn-primary">Post Submit</button>
                </div>
              </div><!-- col-4 -->
              
            </div><!-- row -->
          </div><!-- form-layout -->
        </form>
        </div><!-- card -->

        
      </div><!-- sl-pagebody -->    
       
@endsection