<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
    @endif
<form action="{{route('reg')}}" method="post" role="form">
    {{csrf_field()}}
    <legend>Register</legend>

    <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username...">
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password...">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email...">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
</body>
</html>