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
    <li class="active">News</li>
  </ul>
  <!-- -->
  <div class="panel panel-default">
    <div class="panel-body">
      <p>
        <a name="0020">
        <h3 id="panels-alternatives">Vcash is now only maintained by its former enthusiasts!</h3>
        </a>
        <h4>by Wallison Alves | February 5, 2019 | Development Updates</h4>
        <p>
          Vcash does not have any major developers, not even the old developers are active, no big exchange, the site that was maintained by xCoreDev was also turned off, and now there is only one community keeping the Vcash blockchain alive. Vcash leaves a legacy that is: "A true blockchain will never die!". Version 0.6.0.4 binaries are outdated bootstrap nodes, update their nodes through the <a href="https://github.com/vcashcommunity/vcash/tree/vanilla">vanilla</a>, branch source code. Current users of 0.5.0 and versions will have to resynchronize the chain. Make backups before any action!!!
        </p>
      </p>
      <p>
        <a name="0019">
        <h3 id="panels-alternatives">Version 0.6.0.4 Released</h3>
        </a>
        <h4>by Vcash | June 09, 2017 | Development Updates</h4>
        <p>
          Version 0.6.0.4 has been released. The complete changelog is below. You can download version 0.6.0.4 <a href="wallets.php">here</a>.
          <ul>
            <li>TCP protocol version and minimum version increment.</li>
            <li>UDP message version and minimum version increment.</li>
            <li>ListAccounts RPC method.</li>
            <li>DecodeRawTransaction RPC method.</li>
            <li>SendRawTransaction RPC method.</li>
            <li>GetAddressesByAccount RPC method.</li>
            <li>Checkpoint sync fix.</li>
            <li>CScripts loading fix.</li>
            <li>Incentive's "Questionable Winner" blocks will be rejected at height 705000.</li>
            <li>Edited ban rules.</li>
            <li>macOS release of wxVcash & daemon.</li>
            <li><a href="https://github.com/openvcash/vcash-electron" target="_blank">Vcash-Electron</a> by whphhg.</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0018">
        <h3 id="panels-alternatives">Version 0.6.0.3 Released</h3>
        </a>
        <h4>by Vcash | April 11, 2017 | Development Updates</h4>
        <p>
          Version 0.6.0.3 has been released. The complete changelog is below. You can download version 0.6.0.3 <a href="wallets.php">here</a>.
          <ul>
            <li>TCP protocol version and minimum version increment.</li>
            <li>UDP message version and minimum version increment.</li>
            <li>Pretty print JSON for the config file.</li>
            <li>Checkpoints update.</li>
            <li>GetBlock RPC update with verbose parameter.</li>
            <li>New Incentive winners & DoS connections rules once block #658000 will be reached.</li>
            <li>Bug fixes.</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0017">
        <h3 id="panels-alternatives">Version 0.6.0.2 Released</h3>
        </a>
        <h4>by Vcash | March 27, 2017 | Development Updates</h4>
        <p>
          Version 0.6.0.2 has been released. The complete changelog is below. You can download version 0.6.0.2 <a href="wallets.php">here</a>.
          <ul>
            <li>TCP protocol version increment.</li>
            <li>UDP message version increment.</li>
            <li>Bootstrap nodes update.</li>
            <li>Checkpoints update.</li>
            <li>Non-latin Windows usernames compatibility.</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0016">
        <h3 id="panels-alternatives">Version 0.6.0.1 Released</h3>
        </a>
        <h4>by Vcash | March 26, 2017 | Development Updates</h4>
        <p>
          Version 0.6.0.1 has been released. The complete changelog is below. You can download version 0.6.0.1 <a href="wallets.php">here</a>.
          <ul>
            <li>Block version increment.</li>
            <li>Removed collateral stake.</li>
            <li>Updated boostrap nodes & peers discovery url.</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0015">
        <h3 id="panels-alternatives">Community Version 0.5.1 Deployment Started</h3>
        </a>
        <h4>by xCore | February 5, 2017 | Development Updates</h4>
        <p>
          The community version 0.5.1 has been pushed to github. Linux users can already run the upgrade. I published the Windows daemons on the <a href="wallets.php">Wallets</a> page. The prebuilt GUI version will be pushed during the next 24h. More info tomorrow. Have a great Update time !
        </p>
      </p>
      <p>
        <a name="0014">
        <h3 id="panels-alternatives">Version 0.5.0 Released</h3>
        </a>
        <h4>by John Connor | November 22, 2016 | Development Updates</h4>
        <p>
          Version 0.5.0 has been released. The complete changelog is below. You can download version 0.5.0 <a href="wallets.php">here</a>.
          <ul>
            <li>HD Keychain's are now used by default for new installations.</li>
            <li>Added new RPC call "incentive" (see Wiki for more details).</li>
            <li>Bug Fixes</li>
            <li>Added ZeroLedger (SPV+) Client binaries to the <a href="wallets.php">wallets</a> page.</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0013">
        <h3 id="panels-alternatives">Version 0.4.9 Released</h3>
        </a>
        <h4>by John Connor | October 24, 2016 | Development Updates</h4>
        <p>
          Version 0.4.9 has been released. The complete changelog is below. You can download version 0.4.9 <a href="wallets.php">here</a>.
          <ul>
            <li>Added support for HD Keychain that can be restored from a seed (This feature is disabled in configuration by default).</li>
            <li>Database can now be configured to run in-memory or memory-mapped.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0012">
        <h3 id="panels-alternatives">Version 0.4.8 Released</h3>
        </a>
        <h4>by John Connor | September 19, 2016 | Development Updates</h4>
        <p>
          Version 0.4.8 has been released. The complete changelog is below. You can download version 0.4.8 <a href="wallets.php">here</a>.
          <ul>
            <li>Migrated to Berkeley DB 6.1.29.</li>
            <li>Code now supports Deterministic Wallets.</li>
            <li>New Incentive Synchronise protocol.</li>
            <li>The RPC server now uses a dedicated thread.</li>
            <li>Implemented ZeroLedger Core.</li>
            <li>GUI's now handle vcash: links.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0011">
        <h3 id="panels-alternatives">Version 0.4.7 Released</h3>
        </a>
        <h4>by John Connor | June 10, 2016 | Development Updates</h4>
        <p>
          Version 0.4.7 has been released. The complete changelog is below. You can download version 0.4.7 <a href="wallets.php">here</a>.
          <ul>
            <li>Autonomous block size (∞ TPS).</li>
            <li>More descriptive user agent fields.</li>
            <li>Reduced ZeroTime vote traffic.</li>
            <li>Added ability to import/export the blockchain from/to a single file.</li>
            <li>Transactions are now limited to 100 Kilobytes.</li>
            <li>Improved support for ZeroLedger based clients.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0010">
        <h3 id="panels-alternatives">Version 0.4.6 Released</h3>
        </a>
        <h4>by John Connor | May 10, 2016 | Development Updates</h4>
        <p>
          Version 0.4.6 has been released. The complete changelog is below. You can download version 0.4.6 <a href="wallets.php">here</a>.
          <ul>
            <li>Finalised support for ZeroLedger based clients.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0009">
        <h3 id="panels-alternatives">Version 0.4.5 Released</h3>
        </a>
        <h4>by John Connor | April 22, 2016 | Development Updates</h4>
        <p>
          Version 0.4.5 has been released. The complete changelog is below. You can download version 0.4.5 <a href="wallets.php">here</a>.
          <ul>
            <li>Finalised rebranding from Vanillacoin to Vcash.</li>
            <li>Includes full BIP-0037 support.</li>
            <li>Rewrote Berkley database support.</li>
            <li>Deployed Reward V3.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0008">
        <h3 id="panels-alternatives">Version 0.4.4 Released</h3>
        </a>
        <h4>by John Connor | March 11, 2016 | Development Updates</h4>
        <p>
          Version 0.4.4 has been released. The complete changelog is below. You can download version 0.4.4 <a href="wallets.php">here</a>.
          <ul>
            <li>Started rebranding from Vanillacoin to Vcash.</li>
            <li>Includes ChainBlender R2 protocol.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0007">
        <h3 id="panels-alternatives">Version 0.4.3 Released</h3>
        </a>
        <h4>by John Connor | January 27, 2016 | Development Updates</h4>
        <p>
          Version 0.4.3 has been released. The complete changelog is below. You can download version 0.4.3 <a href="wallets.php">here</a>.
          <ul>
            <li>Added Blake256 as the default Proof-of-Work algorithm.</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0006">
        <h3 id="panels-alternatives">Version 0.4.2 Released</h3>
        </a>
        <h4>by John Connor | January 3, 2016 | Development Updates</h4>
        <p>
          Version 0.4.2 has been released. The complete changelog is below. You can download version 0.4.2 <a href="wallets.php">here</a>.
          <ul>
            <li>Incentive nodes must now run the latest version in order to be rewarded.</li>
            <li>Includes the Proof-of-Work Reward v2 algorithm.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0005">
        <h3 id="panels-alternatives">Version 0.4.1 Released</h3>
        </a>
        <h4>by John Connor | December 11, 2015 | Development Updates</h4>
        <p>
          Version 0.4.1 has been released. The complete changelog is below. You can download version 0.4.1 <a href="wallets.php">here</a>.
          <ul>
            <li>Enforce clock drift on transactions.</li>
            <li>Allow invalid transactions in wallet.</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0004">
        <h3 id="panels-alternatives">Version 0.4.0 Released</h3>
        </a>
        <h4>by John Connor | December 7, 2015 | Development Updates</h4>
        <p>
          Version 0.4.0 has been released. This version includes many overhauls to core mechanics and transport layers focusing on performance and efficiency. Additionally it brings new end-user features. The complete changelog is below. You can download version 0.4.0 <a href="wallets.php">here</a>.
          <ul>
            <li>Improved incentive node probing.</li>
            <li>Added new RPC call "getnetworkinfo".</li>
            <li>Ability to dump all private keys and addresses to a CSV (comma separated value) file through RPC "dumpwallet".</li>
            <li>Reduced memory usage.</li>
            <li>Improved Berkley Database Performance.</li>
            <li>Synchronised RPC for multiple core threads.</li>
            <li>ZeroTime locked transactions now prefer on-chain inputs over off-chain inputs.</li>
            <li>Now uses multiple threads for processing asynchronous IO.</li>
            <li>Reduced voting traffic for both Node Incentives and ZeroTime.</li>
            <li>Incentivised nodes must now either disable Proof-of-Stake or maintain a locked wallet.</li>
            <li>Automatic Rotating Wallet Backups at startup (no more than every 24 hours).</li>
            <li>Coin Auto-Denomination through RPC <a href="#">"walletdenominate"</a>.</li>
            <li>Improved wallet handling of keypool size changes.</li>
            <li>Performance improvements</li>
            <li>Bug Fixes</li>
          </ul>
        </p>
      </p>
      <p>
        <a name="0003">
        <h3 id="panels-alternatives">Version 0.3.9 Released</h3>
        </a>
        <h4>by John Connor | October 29, 2015 | Development Updates</h4>
        <p>
          Version 0.3.9 has been released. This version includes many overhauls to core mechanics and transport layers focusing on performance and efficiency. Additionaly this upgrade includes general bug fixes. You can download version 0.3.9 <a href="wallets.php">here</a>.
        </p>
      </p>
      <p>
        <a name="0002">
        <h3 id="panels-alternatives">Version 0.3.8 Released</h3>
        </a>
        <h4>by John Connor | October 15, 2015 | Development Updates</h4>
        <p>
          Version 0.3.8 is now ready. This version supports the ability to change your wallet password and remotely lock non-ZeroTime transactions by right clicking on an unconfirmed transaction and clicking "Lock". Additionaly this upgrade includes general bug fixes and performance improvements. You can download version 0.3.8 <a href="wallets.php">here</a>.
        </p>
      </p>
      <p>
        <a name="0001">
        <h3 id="panels-alternatives">Version 0.3.7 Released</h3>
        </a>
        <h4>by John Connor | September 28, 2015 | Development Updates</h4>
        <p>
          Today we have released version 0.3.7 as a mandatory upgrade. This means everyone must upgrade to the latest version. This upgrade brings enforcement of incentive payments as well as collateral backed voting. Incentive payment enforcment goes into effect at block #220000 and collateral backed voting goes into effect at block #220000 respectively. Additionaly this upgrade includes general bug fixes and performance improvements. More information regarding Node Incentives can be found at <a href="https://vanilla.cash/docs">the wiki</a>. You can download version 0.3.7 <a href="wallets.php">here</a>.
        </p>
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
