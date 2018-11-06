<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" href="images/icon.png" />
<title>Vcash - Decentralized Money</title>
<!-- Custom styles for this template -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Fixed navbar -->
<?php require 'inc/navbar.php'; ?>
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <!-- Message -->
  <?php include 'inc/message.php'; ?>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">Network</li>
  </ul>
  <!-- -->
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <div>
             This is a live (core) network overview. It is updated every 60 seconds by a decentralized network crawler.
          </div>
          <br>
          <div>
            <ul>
              <li>Version - The node version.</li>
              <li>Protocol - The node Protocol.</li>
              <li>Height - The node's current block height.</li>
              <li>Uptime - The node uptime in seconds.</li>
              <li>Last Update - The last time in seconds the node has contacted us.</li>
              <li>Last Probe - The last time in seconds the we have contacted the node.</li>
              <li>RTT - The node round trip time in seconds.</li>
              <li>UDP Bps(In) - The UDP Bytes Per Second Inbound.</li>
              <li>UDP Bps(Out) - The UDP Bytes Per Second Outbound.</li>
              <li>TCP Open - Indicates if the public TCP port is open/reachable.</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <?php include("network/status.php"); ?>
        </div>
      </div>
      <br>
      <div>
        <?php include("network/chart.php"); ?>
      </div>
    </div>
  </div>
  <!-- -->
  <!-- Newsletter -->
  <?php require 'inc/newsletter.php'; ?>
  <!-- Footer -->
  <?php require 'inc/footer.php'; ?>
</div>
<!-- /container -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
<script>
    $(function ()
    {   
      console.log("Loading...");
      $('[data-toggle="popover"]').popover();
    });
  </script>
</body>
</html>