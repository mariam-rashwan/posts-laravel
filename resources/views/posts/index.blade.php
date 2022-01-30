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
                <th scope="row">1</th>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['posted_by'] }}</td>
                <td>{{ $post['created_at'] }}</td>
                <td>
                    <a href="{{ route('posts.index') }}" class="btn btn-info text-light">View</a>
                    <a href="{{ route('posts.edit') }}" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>

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
    