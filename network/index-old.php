<h1>Peer Network</h1>

<hr />

<?php

	$page = $_GET['p'];

	if (isset($page))
	{
		if ($page == "chart")
		{
			include("chart.php");
		}
		else
		{
			echo "Pick one";
		}
	}
	else
	{
		echo "Pick one";
	}
?>
