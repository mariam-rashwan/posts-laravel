@extends('layouts.app')

@section('title') show @endsection

@section('content')


<div class="container" >

  <h2>Data show </h2>
  <div class="row">

  <table class="table">

        <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
              </tr>
            </thead>
            <tbody>
      <tr>
          <td> {{$post->id}}</td>
             <td>  {{$post->title}}</td>
       
              <td>  {{$post->description}} </td>

             <td> {{$post->user->name}}</td>

             <td> {{$post->created_at->format('Y-m-d H:i:s')}}</td>

</tbody>
</table>
</div>          
</div>
@endsection