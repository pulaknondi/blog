@extends('user.dashboard.layout')
@section('content')     

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Data Table</h5>
        </div><!-- sl-page-title -->
       
        <div class="card pd-20 pd-sm-40">
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="text-center">
                    <span>
                        <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid m-0">
                            <input type="checkbox" id="checkAll"><span></span>
                        </label>
                    </span>
                  </th>
                  <th class="wd-15p">User Name</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Slug</th>
                  <th class="wd-15p">Description</th>
                  <th class="wd-20p">Category</th>
                  <th class="wd-15p">Status</th>
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
                  <td class="text-center">
                        <span>
                            <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid m-0">
                                <input type="checkbox" class="check-item" name="selected[]" value="{{ $row->id }}"><span></span>
                            </label>
                        </span>
                  </td>
                  <td>{{ $row->user->name}}</td>
                  <td>{{ $row->title }}</td>
                  <td>{{ $row->slug }}</td>
                  <td>{{ $row->details }}</td>
                  <td>{{ $row->name }}</td>
                  <td>@if($row->status == 1)
                  	 <span class="badge badge-success">Active</span>
                  	@else
                  	<span class="badge badge-danger">Inactive</span>
                  	@endif
                </td>
                  <td><a href="{{ route('user.post.edit.page',$id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                  	<a href="" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->   
@endsection