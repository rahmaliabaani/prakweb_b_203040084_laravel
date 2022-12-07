@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">Category Type</h2>

        <div class="container mt-4">
          <div class="row">
            <h5>{{ $category->name }}</h5>
            <a href="/dashboard/categories">Back to my categories</a>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection