@extends("site_layouts.app")
@section("content")
<form action="/posts/{{$id}}" method="post">
  @csrf
  @method("PATCH")
  <div class="mb-3">
    <label class="form-label">Your ID</label>
    <input type="text" class="form-control"  name="id" value="{{ $id }}">
    <div id="emailHelp" class="form-text">We'll never share your ID with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Post Title</label>
    <input type="text" class="form-control" name="title" value="{{ $title }}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{ $description }}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@include("shared.errors")

@endsection