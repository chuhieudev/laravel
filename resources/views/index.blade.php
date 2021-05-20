<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') </title>
    <meta name="description" content="@yeild('meta_desc')"/>
    <meta name="keyword" content="@yeild('meta_keyword')"/>
    <base href="{{ asset('') }}/">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/stylepage.css')}}">

</head>
<body>
    <script src="https://kit.fontawesome.com/033df7c00d.js" crossorigin="anonymous"></script>
       @yield('content') 
</body>
</html>