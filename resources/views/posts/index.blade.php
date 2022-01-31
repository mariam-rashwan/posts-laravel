@extends('layouts.app')

@section('title')Index @endsection

@section('content')

        <br>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($allPosts as $post)
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ isset($post->user) ? $post->user->name : 'Not Found' }}</td>
                {{-- @dd($post->created_at) carbon object --}}
                <td>{{ $post->created_at }}</td>
                <td>
                <td>
             
                <form action="{{ route('posts.destroy',$post>id) }}" method="POST">
                    <a href="{{ route('posts.index' , $post->id) }}" class="btn btn-info text-light">View</a>
                    <a href="{{ route('posts.update',$post->id)}}" class="btn btn-primary">Edit</a>

                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                  
                      @csrf
                    @method('DELETE')
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <br>
          <div class="d-grid gap-4 col-12 mx-auto ">
   
<a href="{{ route('posts.create') }}" class="btn btn-success ">Create Post</a>
        </div>
        <br>

        <div class="btn-toolbar mt-4" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
  <button type="button" class="btn btn-outline-success"><<</button>
    <button type="button" class="btn btn-outline-success">1</button>
    <button type="button" class="btn btn-outline-success">2</button>
    <button type="button" class="btn btn-outline-success">3</button>
    <button type="button" class="btn btn-outline-success">>></button>
  </div>
@endsection
    