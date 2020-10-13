@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered text-dark">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($articles as $article)
                    <tr class="text-center">
                        <td><strong>{{$article->id}}</strong></td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->description}}</td>
                        <td class="d-flex align-items-center justify-content-around">
                            <form action="{{route('articles.show',$article->id)}}" method="get">
                                <button class="btn btn-sm btn-primary rounded-0">
                                  Show
                                </button>
                            </form>

                            <form action="{{route('articles.edit',$article->id)}}" method="get">
                                <button class="btn btn-sm btn-secondary rounded-0">
                                  Edit
                                </button>
                            </form>

                            <form action="{{route('articles.destroy',$article->id)}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-sm btn-danger rounded-0">
                                    <i class="fas fa-trash-alt fa-2x"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{--  <div class="d-flex justify-content-center">{{ $article->appends(['sort' => 'votes'])->links() }}</div>  --}}
        </div>
    </div>
</div>

@endsection