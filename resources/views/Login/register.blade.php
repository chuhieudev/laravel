<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #444;
    font-family: calibri;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
}

.login {
    text-align: center;
    position: relative;
    width: 280px;
}

input, button,select,option {
    width: 100%;
    border: 0;
    border-radius: 20px;
}

input,select{
    border-bottom: 2px solid #444;
    padding: 12px 40px 12px 20px;
}


input, button, .group i, p, a, select{
    font-size: 13.3333px;
    font-weight: 600;
}

.group{
    margin-bottom: 10px;
    position: relative;
}

.group i{
    position: absolute;
    top: 15px;
    right: 20px;
}

button {
    padding: 12px;
    background-image: linear-gradient(to right, #ff1464, purple);
    margin-bottom: 20px;
    cursor: pointer;
}

button, button i{
    color: #ffffff;
}

button i{
    margin-right: 5px;
}

p{
    margin-bottom: 20px;
}

i.fa.fa-empire, a{
    color: #ff1464;
}

i.fa.fa-empire{
    font-size: 60px;
    margin-bottom: 20px;

}

h2{
    margin-bottom: 20px;
}

input:focus, input:focus::placeholder, input:focus+i{
    color: #ff1464;
}

input:focus, button:focus{
    outline: 0;
}


body:before, body:after{
    content: "";
    position: absolute;
    height: 300px;
    width: 500px;
}

body:before{
    background-image: linear-gradient(to right, #ff1464, purple);
    bottom: 0;
    left: 0;
    clip-path: polygon(0 0, 0 100%, 100% 100%);
}

body:after{
    background-image: linear-gradient(to right, purple, #ff1464);
    top: 0;
    right: 0;
    clip-path: polygon(100% 0, 0 0, 100% 100%);
}
select{
    color: black;
    cursor: pointer;
}
@media (max-width: 767px){
    body:before, body:after{
        height: 150px;
        width: 300px;
    }
}
    </style>
</head>
</head>
<body>
    <div class="login">
        <i class="fa fa-empire"></i>
        <h2>Register</h2>
        @if(Session::has('error'))
            <div class="alert alert-warning">{{Session::get('error')}}</div>
        @endif
        <form action="{{route('login.register.process')}}" method="POST" id="registe-form">
            @csrf 
            <div class="group"><input type="text" placeholder="Username" name="username"id="username" required><i class="fa fa-user"></i></div>
            <div class="group"><input type="password" placeholder="Password" name="password"id="password" required minlength="6"><i class="fa fa-lock display"></i></div>
            <div class="group"><input type="password" placeholder="re-Password" name="re_password"id="re-password"required ><i class="fa fa-lock"></i></div>
            <div class="group"><input type="email" placeholder="email" name="email"id="email"reqired value="{{request('email')}}"></div>
            <div class="group"><input type="text" placeholder="Phone" name="Phone"id="Phone"reqired value="{{request('Phone')}}"></i></div>
            <div class="group">
                <select name="gender" id="gender">
                    <option value="1"name="Nam">Nam</option>
                    <option value="2"name="Nữ">Nữ</option>
                    <option value="3"name="Khác">Khác</option>
                </select>
            </div>
            <div class="group"><input type="text" placeholder="Address" name="Address"id="Address"reqired value="{{request('Address')}}"></div>
            <button> <i class="fa fa-send"></i>Đăng Kí</button>
        </form>
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