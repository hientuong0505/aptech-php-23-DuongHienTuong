<h1>Sua nguoi dung ID {{$user->id}}</h1>
<form action="/users/{{$user->id}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
        <label for="name">Ten</label>
        <input type="text" name="name" id="name" value="{{$user->name}}">
    </div>
    <div>
        <label for="email">Thu Dien Tu</label>
        <input type="email" name="email" id="email" value="{{$user->email}}">
    </div>
    <div>
        <label for="password">Mat Khau</label>
        <input type="password" name="password" id="password"  value="{{$user->password}}">
    </div>
    <button type="submit">Update</button>
</form>