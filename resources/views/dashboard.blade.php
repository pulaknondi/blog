@extends('user.dashboard.layout')
@section('content')     
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Blog</a>
        <a class="breadcrumb-item" href="index.html">Posts</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post Here</h6>

          <div class="row">
            <div class="col-lg">
             <textarea rows="3" class="form-control" placeholder="Title"></textarea>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
            <textarea rows="3" class="form-control" placeholder="Description"></textarea>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
            <select class="form-control select2" data-placeholder="Choose Option" name="category">
                <option label="Choose Category"></option>
                <option value="1" >Publish</option>
            </select>
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
            </div><!-- col -->
            
          </div><!-- row -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
@endsection