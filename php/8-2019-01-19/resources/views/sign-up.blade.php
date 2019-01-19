<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="{{asset('sign-up-success')}}" method="POST">
    {{csrf_field()}}
    <input type="text" name="ten">
    <input type="text" name="abc">
    <button type="submit">click me</button>
  </form>
</body>

</html>
