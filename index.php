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
  <div class="jumbotron" align="center">
    <h1><img src="images/icon.png" height="128" width="128"></h1>
    <h2>Vcash</h2>
    <h4>A decentralized currency for the internet.</h4>
    <a class="btn btn-success" href="getting_started.php" role="button">Getting Started</a>
    <a class="btn btn-warning" href="wallets.php" role="button">Wallets</a>
    <a class="btn btn-danger" href="https://vcash.community" role="button">Community</a>
  </div>
  <div class="row marketing">
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="glyphicon glyphicon-info-sign"></span> What is Vcash?
        </div>
        <div class="panel-body">
           Vcash is a decentralized currency for the internet. It enables you to send money to anywhere in the world instantly for almost no cost.
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="glyphicon glyphicon-question-sign"></span> Why Vcash?
        </div>
        <div class="panel-body">
           Vcash was engineered to be <strong>innovative</strong> and <strong>forward-thinking</strong>. It prevents <strong>eavesdropping</strong> and <strong> censorship</strong>, promotes <strong>decentralized</strong>, <strong>energy efficient</strong> and <strong>instant</strong> network transactions.
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="list-group">
        <a class="list-group-item" data-toggle="popover" data-placement="bottom" title="Technology" data-content="Vcash has invented many breakthrough technologies such as ZeroTime to provide sub-second (safely confirmed) transactions and Node Incentives to ensure the network remains robust. Currently we are exploring the area of Darknets."/>
        <h4 class="list-group-item-heading">Technology</h4>
        <p class="list-group-item-text">
           ZeroTime, Node Incentives and Darknets.
        </p>
        </a>
        <a class="list-group-item" data-toggle="popover" data-placement="bottom" title="Competency" data-content="Vcash is not a descendant of Bitcoin. While it shares the same basic network and cryptographic principles it's code is written using a backwards compatible but modern approach using C++11. The Vcash developer has over 15 years of experience designing and deploying large scale autonomous peer-to-peer systems.">
        <h4 class="list-group-item-heading">Competency</h4>
        <p class="list-group-item-text">
           Engineered to have breakthrough performance and long-term stability.
        </p>
        </a>
        <a class="list-group-item">
        <h4 class="list-group-item-heading" data-toggle="popover" data-placement="bottom" title="Transparency" data-content="Anyone can download the source code and check it out for themselves. This makes the software more secure because it is peer reviewed by a large scale audience.">Transparency</h4>
        <p class="list-group-item-text">
           The network protocols and source code are open for peer review.
        </p>
        </a>
      </div>
    </div>
  </div>
  <div class="well">
    <div class="row">
      <div class="col-md-4 col-sm-4 text-center">
        <div>
          <img src="images/secure.png" width="32" height="32"></img>
          <h4>
          <b>Secure and Private</b>
          </h4>
        </div>
        <p class="text-center">
           An encrypted 3-tier network utilising widely deployed standards based algorithms.
        </p>
      </div>
      <div class="col-md-4 col-sm-4 text-center">
        <div>
          <img src="images/clock.png" width="32" height="32"></img>
          <h4>
          <b>Instant</b>
          </h4>
        </div>
        <p class="text-center">
           Payments are recieved instantly by the recipient thanks to ZeroTime.
        </p>
      </div>
      <div class="col-md-4 col-sm-4 text-center">
        <div">
        <img src="images/groups.png" width="32" height="32"></img>
        <h4>
        <b>Peer to Peer</b>
        </h4>
      </div>
      <p class="text-center">
         Using a decentralised network there is no 3rd party to trust.
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 text-center">
        <div>
          <img src="images/globe_earth.png" width="32" height="32"></img>
          <h4>
          <b>Global</b>
          </h4>
        </div>
        <p class="text-center">
           Transactions have no borders.
        </p>
      </div>
      <div class="col-md-4 col-sm-4 text-center">
        <div>
          <img src="images/cheap_2.png" width="32" height="32"></img>
          <h4>
          <b>Low Fees</b>
          </h4>
        </div>
        <p class="text-center">
           Lower than banks or credit cards.
        </p>
      </div>
      <div class="col-md-4 col-sm-4 text-center">
        <div">
        <img src="images/github_copyrighted.png" width="32" height="32"></img>
        <h4>
        <b>Open and Free</b>
        </h4>
      </div>
      <p class="text-center">
         Open source code allows anyone to contribute.
      </p>
    </div>
  </div>
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
