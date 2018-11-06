<?php
	if (empty($_POST['email']) === false)
	{
		$email = htmlentities(strip_tags($_POST['email']));
 
		$logname = 'private/email_list.txt';
		
		$logcontents = file_get_contents($logname);
 
		if (strpos($logcontents, $email))
		{
			// They are already subscribed.
			header('Location: https://vanilla.cash');
		}
		else
		{
			$filecontents = $email.',';
			$fileopen = fopen($logname,'a+');
			$filewrite = fwrite($fileopen,$filecontents);
			$fileclose = fclose($fileopen);
		
			if (!$fileopen or !$filewrite or !$fileclose)
			{
				die('Error occured');
			}
			else
			{
				// Success
				header('Location: https://vanilla.cash');
			}
		}	
	}
	else
	{
		// No email field.
		header('Location: https://vanilla.cash');
	}
?>
