@extends('layout.master')
@section('content')
@component('layout.components.title')
    edit page
@endcomponent

<div class="container mt-3">
    <div class="row">
      <div class="col-12 ">
        <form action="{{route('articles.update',$article->id)}}" method="post">

          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" name="_method" value="put">
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="name">title</label>
            <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name"
              value="{{$article->title}}">
          </div>

          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="email">description</label>
            <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email"
              value="{{$article->description}}">
          </div>

          <div class="form-group ">
            <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
              save
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>

@endsection