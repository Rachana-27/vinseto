<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Cover Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Fjalla+One&family=Patua+One&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/event.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Infrastructure</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="/event">Event</a>
        <a class="nav-link" href="/dashboard">Dashboard</a>
        <a class="nav-link" href="/bookings">booking</a>
      </nav>
      </div>
      </header>
      <div class="container">
      <form method="post" action="bookingcontroller">
    {{@csrf_field()}}
  <div class="form-group">
  
    <label for="exampleFormControlInput1">Hall Name</label>
    <input type="text" name="hallname" class="form-control" id="exampleFormControlInput1" value="<?php echo $_POST['hallname']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">event date</label>
    <input type="text" name="eventdate" class="form-control" id="exampleFormControlInput2" value="<?php echo $_POST['date']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Event Name</label>
    <input type="text" name="eventname" class="form-control" id="exampleFormControlInput3" value="<?php echo $_POST['eventname']; ?>">
  </div>
  <div class="form-group">
  <p>choose time slots</p>
  <div id="evdisable" >
  <div class="checkbox" name="timeslot">
      <label><input type="checkbox" value="0">9:00 - 10:00 </label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="1">11:00 - 12:00</label>
    </div>
    <div class="checkbox disabled">
      <label><input type="checkbox" value="2" >1:00 - 2:00</label>
    </div>
    </div>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-sm">book now</button>
                      </div>
   </form>
    </div>
  

  <main role="main" class="inner cover">
  
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!--<script type="text/javascript" src="{{ asset('js/event.js') }}"></script>-->
</body>
<footer class="container">
  
  <p class="float-right" style="padding-top: 40px;"><a href="#">Back to top</a></p>
  <p class="float-left" style="padding-top: 40px;">&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</html>
