@extends('user.dashboard.layout')
@section('content')     

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Data Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Cat name</th>
                  <th class="wd-15p">Cat Slug</th>
                  <th class="wd-20p">Publish</th>
                  <th class="wd-15p">Date</th>
                  <th class="wd-10p">Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $row)
                @php
                $id = $row->id;
                $status=$row->status;
                @endphp
                <tr>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->slug }}</td>
                  <td>@if($row->status == 1)
                  	 <span class="badge badge-success">Active</span>
                  	@else
                  	<span class="badge badge-danger">Inactive</span>
                  	@endif
                </td>
                  <td>{{$row->created_at}}</td>
                  <td><a href="{{ route('user.category.edit.page',$id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                  	<a href="{{ route('user.category.delate',$id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

      </div><!-- sl-pagebody -->   
@endsection