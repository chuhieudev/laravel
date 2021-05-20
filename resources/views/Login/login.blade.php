<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<body>
    <div class="login">
        <i class="fa fa-empire"></i>
        <h2>Login</h2>
        @if(Session::has('massage'))
            <div class="alert alert-success">{{Session::get('massage')}}</div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-warning">{{Session::get('error')}}</div>
        @endif
        <form action="{{route('login.check')}}" method="POST">
            @csrf 
            <div class="group"><input type="text" placeholder="Email" name="Email" required><i class="fa fa-user"></i></div>
            <div class="group"><input type="password" placeholder="Password" name="password" id="password" required><i class="fa fa-lock display"></i></div>
            <button> <i class="fa fa-send"></i>Login</button>
        </form>
        <p class="fs">Forgot <a href="#">Password</a> ? </p>
        <p class="ss">Don't have an account? <a href="{{route('login.register')}}">Signup</a></p>
    </div>
    <script>
        $(function(){
         $('.display').click(function(){
             var atr=$('#password').attr("type");
             if(atr=="password"){
                 $('#password').attr("type","text");
             }else $('#password').attr("type","password");
     });
 });
     </script>
</body>
</html>