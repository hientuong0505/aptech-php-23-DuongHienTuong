<h1>Tao nguoi dung</h1>
<form action="/users" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
        <label for="name">Ten</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Thu Dien Tu</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Mat Khau</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">Tao</button>
</form>