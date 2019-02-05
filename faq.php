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
    <li>
    <a href="index.php">Home </a>
    </li>
    <li class="active">Frequently Asked Questions </li>
  </ul>
  <div class="panel panel-default">
    <div class="panel-body">
      <h3 id="panels-alternatives">What is a blockchain? </h3>
      <p>
        It is an irreversible ledger where transactions are stored as part of network consolidation and security.
      </p>
      <h3 id="panels-alternatives">Is Vcash a clone of Bitcoin? </h3>
      <p>
        No, it was built over a period of several years using Peercoin as a reference implementation for interoperability and backwards compatibility purposes, therefore it brings an alternative codebase to the cryptocurrency ecosystem.
      </p>
      <h3 id="panels-alternatives">Where can I buy Vcash? </h3>
      <p>
        Vcash Currently listed only on the <a href="https://zapple.com/exchange" target="_blank">Zapple</a>, Vcash Was unlisted from <a href="https://poloniex.com/exchange#btc_xvc" target="_blank">Poloniex</a> and <a href="https://bittrex.com/Market/Index?MarketName=BTC-XVC" target="_blank">Bittrex </a>.
      </p>
      <h3 id="panels-alternatives">Why is interest only 0.7%? </h3>
      <p>
        Interest via Proof-of-Stake is not meant for user incentive instead it used to secure the network and recoup destroyed transaction fees. The chosen percentage along with the destruction of transaction fees makes for long term low inflation.
      </p>
      <h3 id="panels-alternatives">When will Vcash reach a 1% annual inflation rate? </h3>
      <p>
        2019
      </p>
      <h3 id="panels-alternatives">Is the Vcash network encrypted? </h3>
      <p>
        Yes, all communications pathways are encrypted using strong algorithms. Because of this not even your ISP can decipher the contents of your communications.
      </p>
      <h3 id="panels-alternatives">What is the purpose of using the User Datagram Protocol (UDP)? </h3>
      <p>
        TCP was not designed with broadcast networks in mind. Therefore UDP is used to scale the realtime properties of the network. This decreases network latency significantly while easing the load on the TCP channels.
      </p>
      <h3 id="panels-alternatives">What is ZeroTime? </h3>
      <p>
        With other crypto-currencies you must wait for some time to pass before the coins are truly yours and spendable. ZeroTime is a breakthrough technology that allows a recipient to immediately not only own the coins but be able to spend them immediately. Furthermore they may be re-spent many times between other recipients before being consolidated into the ledger. Please refer to the <a href="https://github.com/openvcash/papers/blob/master/zerotime.pdf">white paper </a> for additional information.
      </p>
      <h3 id="panels-alternatives">What is ChainBlender? </h3>
      <p>
       Client-side blending system. Forms a single transaction from multiple parties by merging similar inputs and outputs, and relaying these operations in an encrypted manner between the participants. The middleman is reduced to a blind relay and the participants are unable to reconstruct the original inputs from the blended transaction. Please refer to the <a href="https://github.com/openvcash/papers/blob/master/chainblender.pdf">white paper </a> for additional information.
      </p>
      <h3 id="panels-alternatives">Why is there so much FUD (Fear Uncertainty Doubt) and disinformation surrounding this project? </h3>
      <p>
        In such a competitive space it is natural for people to spread rumors, troll, perform dis-information campaigns (spread intentionally false or inaccurate information deliberately) or DoS attacks in attempt to discredit your project because of their own fears.
      </p>
      <h3 id="panels-alternatives">Is there a wiki for Vcash? </h3>
      <p>
        The wiki can be found <a href="https://vanilla.cash/docs">here </a>.
      </p>
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
<script src="js/jquery.min.js">
    </script>
<script src="js/bootstrap.min.js">
    </script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
<script>
        $(function() {
            console.log("Loading...");
            $('[data-toggle="popover"]').popover();
        });
    </script>
</body>
</html>
