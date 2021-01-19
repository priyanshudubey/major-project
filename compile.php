<?php

	$languageID=$_POST["language"];
		switch($languageID)
			{
				case "c":
				{
					include("compilers/c.php");
					break;
				}
				case "cpp":
				{
					include("compilers/cpp.php");
					break;
				}
				case "python3.2":
				{
					include("compilers/python32.php");
					break;
				}
			}
?>
