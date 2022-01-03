<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
   integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
   crossorigin="anonymous">

   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>welcome</title>
</head>
<body>
    <h1 class="text-3xl bg-dark text-light text-center py-4 underline rounded-b-md" >laravel 8 CRUD WEB APP</h1>
    <div class="container">
        <br>
        @yield('content')
    </div>
</body>
</html>