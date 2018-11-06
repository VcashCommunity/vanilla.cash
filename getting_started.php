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
		<li class="active">Getting Started</li>
	</ul>
	<!-- Marketing -->
	<div class="row marketing">
		<div class="col-lg-6">
			<ul class="nav nav-pills">
				<li class="active" data-target="sending_coins_container"><a href="#" data-toggle="tab">Sending Coins</a></li>
				<li data-target="video_container"><a href="#" data-toggle="tab">Receiving Coins</a></li>
				<li data-target="giveaway_container"><a href="#" data-toggle="tab">Mining Coins</a></li>
			</ul>
			<!-- -->
			<div style="margin-bottom: 15px;">
			</div>
			<!-- -->
			<div class="container_content_left" id="sending_coins_container">
				<div class="list-group">
					<li class="list-group-item">
					<!--<h4 class="list-group-item-heading">Sending coins</h4>-->
					<p class="list-group-item-text">
						 To send coins enter the amount to pay to the address and click send. A small transaction fee will be deducted and your coins will be sent.
					</p>
					</li>
				</div>
			</div>
			<div class="container_content_left" id="video_container">
				<div class="list-group">
					<li class="list-group-item">
					<p class="list-group-item-text">
						 To receive coins click the gear icon, select the Addresses tab, copy the default address and give it to the sender.
					</p>
					</li>
				</div>
			</div>
			<div class="container_content_left" id="giveaway_container">
				<div class="list-group">
					<li class="list-group-item">
					<!--<h4 class="list-group-item-heading">Sending coins</h4>-->
					<p class="list-group-item-text">
						 To mine for coins there are two options available, solo or pooled mining.
					</p>
					<br>
					<p class="list-group-item-text">
						 For solo mining click the gear icon and select the Mining tab then click start. Your hash rate will be displayed after a short time. To stop mining click the stop button. If you are using the command line client use the --mine-cpu=1 option.
					</p>
					<br>
					<p>
						<i>* Please note that solo mining is no longer viable due to the current difficulty and pooled mining is recommended.</i>
					</p>
				</p>
				<p class="list-group-item-text">
					 For pooled mining go to <a href="https://pool.vanilla.cash" target="_blank">pool.vanilla.cash</a>
					or <a href="https://pool.vcash.info" target="_blank">pool.vcash.info</a>
					. Other mining pools may be found on the forums. Mining software and tools may be found <a href="https://vcash.community/index.php?board=3.0">here</a>.
				</p>
				</li>
			</div>
		</div>
		<!-- -->
	</div>
	<!--</div>-->
	<!-- -->
	<div class="col-lg-6 container_content_right" id="sending_coins_container_right" align="center">
		<div class="well well-lg">
			<div class="bs-component" style="margin-bottom: 15px;">
				<img src="images/getting_started_osx_01.png" width="413" height="326" class="img-thumbnail"><br>
			</div>
		</div>
	</div>
	<!-- -->
	<div class="col-lg-6 container_content_right" id="video_container_right" align="center">
		<div class="well well-lg">
			<div class="bs-component" style="margin-bottom: 15px;">
				<img src="images/getting_started_osx_receiving.png" width="349" height="334" class="img-thumbnail"><br>
			</div>
		</div>
	</div>
	<!-- -->
	<div class="col-lg-6 container_content_right" id="giveaway_container_right" align="center">
		<div class="well well-lg">
			<div class="bs-component" style="margin-bottom: 15px;">
				<img src="images/getting_started_osx_mining.png" width="349" height="334" class="img-thumbnail"><br>
			</div>
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
		$(document).ready(function()
		{
		    $('#video_container').hide();
			$('#giveaway_container').hide();
		    $('#video_container_right').hide();
			$('#giveaway_container_right').hide();
		    $('.nav-pills li').click(function()
			{
		        var target = "#" + $(this).data("target");
				console.log(target);
		        $(".container_content_left").not(target).hide();
		        $(target).show();
				target = "#" + $(this).data("target") + "_right";
				console.log(target);
		        $(".container_content_right").not(target).hide();
		        $(target).show();
		    });
		});
	</script>
</body>
</html>
