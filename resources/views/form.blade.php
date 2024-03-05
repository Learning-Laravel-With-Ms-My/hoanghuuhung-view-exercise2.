<form action="/post?id=1" method="POST">

    <p>Username</p>
    <div>
        <input type="text" name="username" value="{{ old('username')}}" >
    </div>

    <p>Password</p>
    <div>
        <input type="password" name="password">
    </div>

    <br>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div>
        <button type="submit">Login</button>
    </div>
</form>