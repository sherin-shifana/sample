<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v4-alpha.getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>

    <div class="container">

      <form method="post" action="{{url('/home')}}" >
        {{ csrf_field() }}
        <div class="form-group">
          <label for="inputId4">Name</label>
          <input type="text" class="form-control" name="name" id="inputId4">
        </div>
        <div class="form-group">
          <label for="inputDate4">Date</label>
          <input type="date" class="form-control" name="date" id="inputDate4">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </form>

    </div>
  </body>
</html>
