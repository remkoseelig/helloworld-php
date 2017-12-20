<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hello World </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
  <style>
    #devon {
      margin-top: 50px;
      margin-bottom: 150px;
    }
    .col-centered {
      float: none;
      margin: 0 auto;
    }
  </style>
  <div class="container-fluid">
    <div id="devon" class="row">
        <div class="col-centered">
          <a href="https://devon.nl"><img src="images/devon.png"></a>
        </div>
    </div>
    <div class="row">
      <div class="col-centered">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Hello_world_c.svg/640px-Hello_world_c.svg.png">
      </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-centered">
        Hostname: <?php echo gethostname(); ?><br/>
      IP Address: <?php echo getHostByName(getHostName()); ?><br/>
      </div>
  </div>

</body>
</html>
