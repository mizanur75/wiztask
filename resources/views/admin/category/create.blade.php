@extends('layouts.app')

@section('title','Category')

@push('css')

@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Create Category</h4> -->

  <!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="row">
      <!-- Form controls -->
      <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="col-md-12">
          <div class="card mb-4">
            <h5 class="card-header">Create Category</h5>
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder=""
                  name="name"
                />
              </div>
              <small class="text-light d-block">Status</small>
              <div class="form-check form-check-inline mt-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="status"
                  id="inlineRadio1"
                  value="0"
                />
                <label class="form-check-label" for="inlineRadio1">Active</label>
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="status"
                  id="inlineRadio2"
                  value="1"
                />
                <label class="form-check-label" for="inlineRadio2">Deactive</label>
              </div>
              <div class="form-check form-check-inline mt-3">
                <button class="btn btn-sm btn-success">Create</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection

@push('js')

@endpush