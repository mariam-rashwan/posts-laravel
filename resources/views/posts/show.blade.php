@extends('layouts.app')

@section('title') show @endsection

@section('content')

        <div class="container" >
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titlr:</strong>
                {{$post->title}}
            </div>
        </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titlr:</strong>
                {{$post->description}}
            </div>
        </div>
            

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select class="form-control">
                    <option value="1">ahmed</option>
                    <option value="2">mohamed</option>
                </select>
            </div>
            
</div>
@endsection