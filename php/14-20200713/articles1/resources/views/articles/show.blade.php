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
                    <th scope="col" class="">Title</th>
                    <th scope="col" class="">Description</th>
                    <th scope="col" class="">Created Date</th>
                    <th scope="col" class="">Updated Date</th>
                </thead>

                <tbody class="text-center">
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->description}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->update_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection