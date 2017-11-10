<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Spec IT Login</title>
  
  
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/style_login.css') }}">
    <style>
        
        .login input[type=submit]{
            width: 260px;
            height: 35px;
            background: #fff;
            border: 1px solid #fff;
            cursor: pointer;
            border-radius: 2px;
            color: #a18d6c;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 6px;
            margin-top: 10px;
        }

        .login input[type=submit]:hover{
            opacity: 0.8;
        }

        .login input[type=submit]:active{
            opacity: 0.6;
        }

        .login input[type=submit]:focus{
            outline: none;
        }
        
    </style>
  
    <script src="{{ URL::asset('public/js/prefixfree.min.js') }}"></script>
</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Login</div>
		</div>
		<br>
		<form action="{{route('login')}}" method="post" class="login" enctype="multipart/form-data">
                {{csrf_field()}}
                <p class="text-error">{{$errors->first('username')}}</p>
                <p class="text-error">{{$errors->first('password')}}</p>
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login">
		</form>
  <script src="{{ URL::asset('public/js/jquery.min.js') }}"></script>

  
</body>
</html>
