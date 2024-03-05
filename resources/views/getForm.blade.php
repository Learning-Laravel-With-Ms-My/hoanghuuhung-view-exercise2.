<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>';
</head>
<body>
    <form action="getform" method="POST" >
        <div class="container">
            <div class="row">
                <div class="col-1">Name</div>
                <div class="col-4"><input type="text" name="name" placeholder="enter your name" ></div>
            </div>
            <div class="row">
                <div class="col-1">User name</div>
                <div class="col-4"><input type="text" name="username" placeholder="enter username" ></div>
            </div>
            <div class="row">
                <div class="col-1">Password</div>
                <div class="col-4"><input type="text" name="password" placeholder="enter password" ></div>
            </div>
            <input type="hidden" name="_token" id="" value="<?php echo csrf_token(); ?>" >
            <button class="" type="submit" >Register</button>
        </div>
    </form>
</body>
</html>