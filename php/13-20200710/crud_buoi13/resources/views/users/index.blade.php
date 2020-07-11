<h2>Ten Nguoi Dung</h2>

@foreach($users as $user)

<div style="display:flex">
    <h4 style="margin-right: 15px"><i>{{$user->name}}</i></h4>
    {{-- <a href="users/{{$user->id}}">{{$user->name}}</a> --}}

    <form action="users/{{$user->id}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Xoa</button>
    </form>

    <form action="/users/{{$user->id}}/edit" method="GET">
        {{-- <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <button type="submit">Edit</button>
    </form>

    <form action="users/{{$user->id}}" method="GET">
        {{-- <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <button type="submit">Show</button>
    </form>

</div>
<hr>

@endforeach