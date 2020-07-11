@extends('layout.master')
@section('content')
@component('layout.components.title')
show page
@endcomponent
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead class="text-center">
                    <th scope="col" class="">#</th>
                    <th scope="col" class="">Name</th>
                    <th scope="col" class="">Email</th>
                    <th scope="col" class="">Created Date</th>
                    <th scope="col" class="">Updated Date</th>
                </thead>

                <tbody class="text-center">
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->update_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection