@extends('layouts.app')

@section('title','Category')

@push('css')

@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All Blogs</h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="card-header">
      <a href="{{route('blogs.create')}}" class="btn btn-sm btn-success">Create New</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#Sl</th>
            <th>Image</th>
            <th>Category Name</th>
            <th>Title</th>
            <th>Details</th>
            <th>SLug</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($blogs as $blog)
          <tr>
            <td>{{$loop->index +1}}</td>
            <td><img src="{{asset('blog/'.$blog->photo)}}" style="height: 100px;"></td>
            <td>{{$blog->category->name}}</td>
            <td>{{$blog->title}}</td>
            <td>{!!$blog->details!!}</td>
            <td>{{$blog->slug}}</td>
            <td>
              @if($blog->status == 1)
              <span class="badge bg-label-danger me-1">Deactive</span>
              @else
              <span class="badge bg-label-success me-1">Active</span>
              @endif
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('js')

@endpush