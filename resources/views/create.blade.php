<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($errors->all())
    @foreach($errors->all() as $error)
        {{'* ' . $error}}
    @endforeach
@endif
<form method="post">
    {{csrf_field()}}
    <input type="text" name="number">
    <input type="text" name="input">
    <input type="submit" value="Kiem Tra">
</form>
</body>
</html>