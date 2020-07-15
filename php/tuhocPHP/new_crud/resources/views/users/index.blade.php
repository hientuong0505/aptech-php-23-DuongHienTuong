@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr class="text-center">
                        <td><strong>{{$user->id}}</strong></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="d-flex align-items-center justify-content-around">
                            <form action="{{route('users.show',$user->id)}}" method="get">
                                <button class="btn btn-sm btn-primary rounded-0">
                                  Show
                                </button>
                            </form>

                            <form action="{{route('users.edit',$user->id)}}" method="get">
                                <button class="btn btn-sm btn-secondary rounded-0">
                                  Edit
                                </button>
                              </form>

                            <form action="{{route('users.destroy',$user->id)}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-sm btn-danger rounded-0">
                                  Delete
                                </button>
                              </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $users->appends(['sort' => 'votes'])->links() }}</div>
        </div>
    </div>
</div>

@endsection