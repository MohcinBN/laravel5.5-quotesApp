@extends('master')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      Add New Quote
    </div>
    <div class="card-body">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br>
      @endif
      <form method="post" action="{{ route('quots.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Author name:</label>
          <input type="text" class="form-control" name="author"/>
        </div>
        <div class="form-group">
          <label for="price">The quote :</label>
          <textarea id="message" class="form-control" placeholder="Enter the quote" required="required" aria-invalid="false" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
  </div>
</div>

@endsection