<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Basic Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oxygen'>

  <link rel="stylesheet" href="/vendor/admin/login/css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Oxygen:400,300,700" rel="stylesheet" type="text/css"/>
  <link href="https://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>

  <div class="signin cf">
    <div class="avatar"></div>
    <form action="{{ route('Admin.doLogin') }}" method="POST">
      @csrf
      
      <div class="inputrow">
        <input type="text" id="name" name="email" placeholder="Email" value="{{old('email')}}" />
        <label class="ion-person" for="name"></label>
      @if($errors -> has('email'))
        <span style="color: red; font-size: 14px">{{$errors->first('email')}}</span>
      @endif
      </div>
      
      <div class="inputrow">
        <input type="password" id="pass" name="password" placeholder="Password" value="{{ old('password') }}" />
        <label class="ion-locked" for="pass"></label>
      @if($errors -> has('password'))
        <span style="color: red; font-size: 14px">{{$errors->first('password')}}</span>
      @endif
      </div>
      <input type="checkbox" name="remember" id="remember"/>
      <label class="radio" for="remember">Stay Logged In</label>
      <input type="submit" value="Login"/>
      <a href="{{ route('admin.register') }}"><input type="button" value="Register"></a>
    </form>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="/vendor/admin/login/js/index.js"></script>

</body>

</html>
