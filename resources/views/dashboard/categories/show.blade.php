@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">Category Type</h2>

        <div class="container">
          <div class="row">
            <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span>Back to my categories</a>
            {{-- @foreach ($categories as $category)
              <h5>{{ $category->name }}</h5>
            @endforeach --}}
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection