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

		echo "<div class=\"table-responsive\">";

		echo "<table class=\"table\"><tbody>";
	
		// Create the table header.
		foreach($json as $key => $value)
		{
			echo "<tr>";

			// Get the keys for the first object.
			foreach ($value[0] as $key => $value)
			{
				if ($key == "endpoint")
				{
					echo "<th>" . ucfirst("id") . "</th>";
				}
				else if ($key == "udp_bps_inbound")
				{
					echo "<th>" . ucfirst("UDP Bps(In)") . "</th>";
				}
				else if ($key == "udp_bps_outbound")
				{
					echo "<th>" . ucfirst("UDP Bps(Out)") . "</th>";
				}
				else if ($key == "tcp_open")
				{
					echo "<th>" . ucfirst("TCP Open") . "</th>";
				}
				else if ($key == "last_update")
				{
					echo "<th>" . ucfirst("Last Update") . "</th>";
				}
				else if ($key == "last_probed")
				{
					echo "<th>" . ucfirst("Last Probed") . "</th>";
				}
				else if ($key == "rtt")
				{
					echo "<th>" . ucfirst("RTT") . "</th>";
				}
				else if ($key == "super_peer")
				{
					//echo "<th>" . ucfirst("Public") . "</th>";
				}
				else
				{
					echo "<th>" . ucfirst($key) . "</th>";
				}
			}

			echo "</tr>";
		}

		// Create the table.
		foreach($json as $key => $value)
		{
			foreach ($value as $key => $value)
			{
				echo "<tr>";

				foreach ($value as $key => $value)
				{
					if ($key == "endpoint")
					{
						echo "<td >" . ceil(crc32($value) / 1000000) % 999 . "</td>";
					}
					else if ($key == "height")
					{
						echo "<td>" . $value . "</td>";

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
					else if ($key == "protocol" && $value < 60040)
					{
						echo "<td class=\"danger\">" . $value . "</td>";
					}
					else if ($key == "last_update" && $value > "3600")
					{
						echo "<td class=\"danger\">" . $value . "</td>";
					}
					else if ($key == "last_update" && $value < "3600")
					{
						echo "<td class=\"success\">" . $value . "</td>";
					}
					else if ($key == "rtt" && $value < "1000")
					{
						echo "<td class=\"success\">" . $value . "</td>";
					}
					else if ($key == "rtt" && $value > "1000")
					{
						echo "<td class=\"danger\">" . $value . "</td>";
					}
					else if ($key == "uptime" && $value < "28800")
					{
						echo "<td class=\"warning\">" . $value . "</td>";
					}
					else if ($key == "uptime" && $value > "28800")
					{
						echo "<td class=\"success\">" . $value . "</td>";
					}
				    else if ($key == "udp_bps_inbound" && $value > "8096")
					{
						echo "<td class=\"danger\">" . $value . "</td>";
					}
				    else if ($key == "udp_bps_inbound" && $value < "8096")
					{
						echo "<td class=\"success\">" . $value . "</td>";
					}
				    else if ($key == "udp_bps_outbound" && $value > "8096")
					{
						echo "<td class=\"danger\">" . $value . "</td>";
					}
				    else if ($key == "udp_bps_outbound" && $value < "8096")
					{
						echo "<td class=\"success\">" . $value . "</td>";
					}
				    else if ($key == "tcp_open" && $value == "true")
					{
						echo "<td class=\"success\">" . $value . "</td>";
					}
				    else if ($key == "tcp_open" && $value == "false")
					{
						echo "<td class=\"danger\">" . $value . "</td>";

						$num_firewalled += 1;
					}
				    else if ($key == "last_probed" && $value == "-1")
					{
						echo "<td class=\"warning\">" . "Never" . "</td>";
					}
				    else if ($key == "last_probed" && $value > "900")
					{
						echo "<td class=\"danger\">" . $value . "</td>";
					}
				    else if ($key == "last_probed" && $value < "900")
					{
						echo "<td class=\"success\">" . $value . "</td>";
					}
				    else if ($key == "super_peer" && $value == "false")
					{
						//echo "<td class=\"danger\">" . $value . "</td>";

						$num_peers += 1;
					}
				    else if ($key == "super_peer" && $value == "true")
					{
						//echo "<td class=\"success\">" . $value . "</td>";

						$num_super_peers += 1;
					}
					else
					{
						echo "<td>" . $value . "</td>";
					}
				}

				echo "</tr>";
		    }
		}
		
		echo "</table></tbody>";

		echo "</div>";
	}
	else
	{
		echo "No statistics available.";
	}
?>