@extends("site_layouts.app")
@section("content")
<form action="/posts" method="post">
  @csrf
  <div class="mb-3">
    <label  class="form-label">Post Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

@include("shared.errors")
@endsection