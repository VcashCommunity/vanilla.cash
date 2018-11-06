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
    <li class="active">Wallets</li>
  </ul>
  <!-- Marketing -->
  <div class="row marketing">
    <div class="col-lg-6">
      <ul class="nav nav-pills">
        <li class="active" data-target="wx_container"><a href="#" data-toggle="tab">wxVcashGUI</a></li>
        <li data-target="electron_container"><a href="#" data-toggle="tab">Vcash-Electron</a></li>
        <li data-target="coinomi_container"><a href="#" data-toggle="tab">Coinomi</a></li>
        <li data-target="daemon_container"><a href="#" data-toggle="tab">Daemon</a></li>
      </ul>
      <!-- -->
      <div style="margin-bottom: 15px;">
      </div>
      <!-- -->
      <div class="container_content_left" id="wx_container">
        <div class="list-group">
          <li class="list-group-item">
          <p class="list-group-item-text">
             Built with <a href="https://github.com/openvcash/wxVcashGUI" target="_blank">wxVcashGUI</a>.
          </p>
          </li>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-windows fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-info btn-small" href="wallet.php?platform=win64">Windows (64)</a>
                  </p>
                  <p class="list-group-item-text">
                    <a href="https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcash-0.6.0.4-sha256.asc">GPG Signatures</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    Windows 2008 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-apple fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-danger btn-small" href="wallet.php?platform=macos">macOS</a>
                  </p>
                  <p class="list-group-item-text">
                    <a href="https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcash-0.6.0.4-sha256.asc">GPG Signatures</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    macOS 10.9 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-linux fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-warning btn-small" href="https://github.com/openvcash/wxVcashGUI/releases/latest">GNU/Linux</a>
                  </p>
                  <p class="list-group-item-text">
                    <a href="https://pgp.mit.edu/pks/lookup?op=get&search=0x85219EDEBA381B8C" target="_blank">xCore's GPG</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    Github's repository to build yourself.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
        </div>
      </div>
      <div class="container_content_left" id="electron_container">
        <div class="list-group">
          <li class="list-group-item">
          <p class="list-group-item-text">
             Built with <a href="https://github.com/openvcash/vcash-electron" target="_blank">Vcash-Electron</a>.
          </p>
          </li>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-windows fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-info btn-small" href="https://github.com/openvcash/vcash-electron/releases/latest">Windows</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    Windows 2008 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-apple fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-danger btn-small" href="https://github.com/openvcash/vcash-electron/releases/latest">macOS</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    macOS 10.9 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-linux fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-warning btn-small" href="https://github.com/openvcash/vcash-electron/releases/latest">GNU/Linux</a>
                  </p>
                  <p class="list-group-item-text">
                    <a href="https://pgp.mit.edu/pks/lookup?op=get&search=0x5810890F1F3082A9" target="_blank">whphhg's GPG</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    Github's repository to build yourself.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
        </div>
      </div>
            <!-- /example -->
      <div class="container_content_left" id="coinomi_container">
        <div class="list-group">
          <li class="list-group-item">
          <p class="list-group-item-text">
             Built with <a href="https://www.coinomi.com/downloads" target="_blank">Coinomi</a>.
          </p>
          </li>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-android fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-info btn-small" href="wallet.php?platform=mobile">Android</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    Android KitKat 4.1 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-apple fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-danger btn-small" href="wallet.php?platform=mobile">iOS</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    iOS 9.2 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
        </div>
      </div>
      <div class="container_content_left" id="daemon_container">
        <div class="list-group">
          <li class="list-group-item">
          <p class="list-group-item-text">
             Built with <a href="https://github.com/openvcash/vcash" target="_blank">Vcash</a>.
          </p>
        </li>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-windows fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-info btn-small" href="wallet.php?platform=win64d">Windows (64)</a>
                  </p>
                  <p>
                    <a class="btn btn-info btn-small" href="wallet.php?platform=win32d">Windows (32)</a>
                  </p>
                  <p class="list-group-item-text">
                    <a href="https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcash-0.6.0.4-sha256.asc">GPG Signatures</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    Windows 2008 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-apple fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-danger btn-small" href="wallet.php?platform=macosd">macOS</a>
                  </p>
                  <p class="list-group-item-text">
                    <a href="https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcash-0.6.0.4-sha256.asc">GPG Signatures</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    macOS 10.9 or higher required.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <table class="table table-hover" align="center">
              <tbody>
              <tr>
                <td/>
                <td style="vertical-align:middle">
                  <p class="fa fa-linux fa-4x">
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p>
                    <a class="btn btn-warning btn-small" href="wallet.php?platform=linux">GNU/Linux</a>
                  </p>
                  <p class="list-group-item-text">
                    <a href="https://pgp.mit.edu/pks/lookup?op=get&search=0x85219EDEBA381B8C" target="_blank">xCore's GPG</a>
                  </p>
                </td>
                <td style="vertical-align:middle">
                  <p class="list-group-item-text">
                    Github's repository to build yourself.
                  </p>
                </td>
              </tr>
              </tbody>
              </table>
            </div>
            <!-- /example -->
          </div>
      </div>
    </div>
    <!-- -->
  </div>
  <!--</div>-->
  <!-- -->
  <div class="col-lg-6 container_content_right" id="wx_container_right" align="center">
    <div class="well well-lg">
      <div class="bs-component" style="margin-bottom: 15px;">
        <img src="images/screenshotWxWidgets.gif" width="420" height="326" class="img-thumbnail"><br>
      </div>
    </div>
  </div>
  <!-- -->
  <div class="col-lg-6 container_content_right" id="electron_container_right" align="center">
    <div class="well well-lg">
      <div class="bs-component" style="margin-bottom: 15px;">
        <img src="images/screenshotElectron.gif" width="420" height="334" class="img-thumbnail"><br>
      </div>
    </div>
  </div>
  <!-- -->
  <div class="col-lg-6 container_content_right" id="coinomi_container_right" align="center">
    <div class="well well-lg">
      <div class="bs-component" style="margin-bottom: 15px;">
        <img src="images/screenshotCoinomi.png" width="420" class="img-thumbnail"><br>
      </div>
    </div>
  </div>
</div>
<!-- -->
  <div class="col-lg-6 container_content_right" id="daemon_container_right" align="center">
    <div class="well well-lg">
      <div class="bs-component" style="margin-bottom: 15px;">
        <img src="images/screenshotDaemon.gif" width="420" class="img-thumbnail"><br>
      </div>
    </div>
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
    $(document).ready(function()
    {
        $('#electron_container').hide();
       $('#coinomi_container').hide();
      $('#daemon_container').hide();
        $('#electron_container_right').hide();
      $('#daemon_container_right').hide();
      $('#coinomi_container_right').hide();
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
