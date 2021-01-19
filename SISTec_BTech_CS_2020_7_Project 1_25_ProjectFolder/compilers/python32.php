<?php
	$CC="python";
	$code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="main.py";
	$filename_in="input.txt";
	$filename_out="Output.txt";
	$filename_error="error.txt";
	$command=$CC." ".$filename_code." > ".$filename_out;
	$command_error=$command." 2>".$filename_error;

	
	$file_error=fopen($filename_error,"w+");
	fclose($file_error);
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("chmod 777 $filename_error");
	$error=file_get_contents($filename_error);
	if(trim($input)==""){
		shell_exec($command_error);
	$error=file_get_contents($filename_error);
	}
	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			shell_exec($command);
			$output=file_get_contents($filename_out);
		}
		else
		{
			$command="cat input.txt | python main.py > Output.txt";
			$output=shell_exec($command);
			$output=file_get_contents($filename_out);
		}
		echo "<pre>$output</pre>";
	}
	else
	{
		echo "<pre>$error</pre>";
	}
	// exec("del $filename_code");
	// exec("del *.txt");
?>
