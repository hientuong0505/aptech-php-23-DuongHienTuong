@foreach($users as $user)
<h1> Ten nguoi dung
    <a href="users/{{$user->id}}">{{$user->name}}</a>
</h1>
@endforeach