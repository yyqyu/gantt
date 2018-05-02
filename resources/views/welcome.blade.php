<form action="/login" method="POST">
    {{ csrf_field() }}
    <input type="text" name="email">
    <input type="password" name="password">
    <button>Login</button>
</form>