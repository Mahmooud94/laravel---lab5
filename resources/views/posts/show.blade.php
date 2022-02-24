@extends("site_layouts.app")
@section("content")
    <ul>
        <li>{{ $id }}</li>
        <li>{{ $title }}</li>
        <li>{{ $description }}</li>
        <li>{{ $created_at}}</li>
        <li>{{ $updated_at }}</li>
    </ul>
@endsection