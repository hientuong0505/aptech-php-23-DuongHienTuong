@foreach($users as $user)

<div style="display:flex"> Ten nguoi dung
    <a href="users/{{$user->id}}">{{$user->name}}</a>

    <form action="users/{{$user->id}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Xoa</button>
    </form>

</div>

@endforeach