<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Guest book</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/guestbook.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/register-login.js"></script>
    <script src="/js/message-validation.js"></script>
  </head>

  <body>
    @include ('layouts.nav')
    <div class="blog-header" id="header">
      <div class="container">
        <h1 class="blog-title">The guest book</h1>
        <p class="lead blog-description">An example guest book.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @yield ('content')
      </div>
    </div>
    
  </body>
</html>


