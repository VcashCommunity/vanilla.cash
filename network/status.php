<?php

	$text = @file_get_contents(dirname(__FILE__) . "/peers.json");

	if ($text && strlen($text))
	{
		$json = json_decode($text);
		
		$num_total = 0;
		$num_firewalled = 0;
		$num_peers = 0;
		$num_super_peers = 0;
		$num_block_heights = 0;
		$num_highest_block_height = 0;
		$num_average_rtt = 0;

		// Create the table.
		foreach($json as $key => $value)
		{
			foreach ($value as $key => $value)
			{
				foreach ($value as $key => $value)
				{
					if ($key == "height")
					{
						if ($value > 0)
						{
							$num_block_heights += $value;

							$num_total += 1;
						}

						if ($value > $num_highest_block_height)
						{
							$num_highest_block_height = $value;
						}
					}
				    else if ($key == "tcp_open" && $value == "false")
					{
						$num_firewalled += 1;
					}
				    else if ($key == "super_peer" && $value == "false")
					{
						$num_peers += 1;
					}
				    else if ($key == "super_peer" && $value == "true")
					{
						$num_super_peers += 1;
					}
					else if ($key == "rtt")
					{
						$num_average_rtt += $value;
					}
				}

		    }
		}

		$percentage = 0.0;

		if ($num_highest_block_height > 0)
		{
			$percentage = number_format(ceil($num_block_heights / $num_total) / $num_highest_block_height * 100, 2, '.', '');
		}

		if ($percentage > 95)
		{
			echo "<h4><span class=\"label label-success\">Network health is Excellent (" . $percentage . "%)</span></h4>";
		}
		else if ($percentage > 85.0)
		{
			echo "<h4><span class=\"label label-warning\">Network health is OK (" . $percentage . "%)</span></h4>";
		}
		else if ($percentage > 75.0)
		{
			echo "<h4><span class=\"label label-danger\">Network health is Poor (" . $percentage . "%)</span></h4>";
		}
		else
		{
			echo "<h4><span class=\"label label-default\">Network health is Bad (" . $percentage . "%)</span></h4>";
		}

		echo "<h4><span class=\"label label-default\">" . $num_super_peers . " public peers, " . $num_peers . " firewalled peers, " . ($num_super_peers + $num_peers) . " total" . "</span></h4>";

		echo "<h4><span class=\"label label-default\">Average round trip time: " . number_format(($num_average_rtt / $num_total), 2, ".", '') . " ms</span></h4>";

		echo "<h4><span class=\"label label-default\">Block height: " . $num_highest_block_height . ", average: " . ceil(($num_block_heights / $num_total)) . "</span></h4>";

	}
?>