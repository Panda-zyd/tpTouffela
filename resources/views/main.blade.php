<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <script src="https://kit.fontawesome.com/10027750d5.js" crossorigin="anonymous"></script>--}}
    <title>@yield('title', 'Crud App')</title>
</head>
<body>
<div id="content" style="display: none" class="mb-10">@yield('content')</div>
</body>
<script>
    window.onload = function(){
        document.getElementById('content').style.display = "block";
    }
</script>
</html>
