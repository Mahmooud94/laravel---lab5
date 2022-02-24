@extends("site_layouts.app")

@section("content")
<a href="{{route('posts.create')}}">Add Post</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">User ID</th>
            <th scope="col">Username</th>
            <th scope="col">User Email</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{ $post->user->id }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->user->email }}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['description']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>{{$post['updated_at']}}</td>
            <td><a href="/posts/{{ $post->id }}">Show</a></td>
            <td><a href="/posts/{{ $post->id }}/edit">Edit</a></td>
            <td>
                <form action="/posts/{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" name="delete">
                </form>
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
@endsection