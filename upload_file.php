<?php

  	require_once 'config.php';

	// if ((($_FILES["file"]["type"] == "image/gif")
	// || ($_FILES["file"]["type"] == "image/png")
	// || ($_FILES["file"]["type"] == "image/jpeg")
	// || ($_FILES["file"]["type"] == "image/pjpeg"))
	// && ($_FILES["file"]["size"] < 70000))
	if (($_FILES["file"]["type"] == "image/png")
	&& ($_FILES["file"]["size"] < 150000))
	{
	  if ($_FILES["file"]["error"] > 0)
	  {
	    echo "<script>alert('Return Code: " . $_FILES["file"]["error"] . "<br />');location.href = '/Gameroom';</script>";
	  }
	  else
	  {
	    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
	    echo "Type: " . $_FILES["file"]["type"] . "<br />";
	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

	  	  $db = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die('数据库连接异常');
	      $sql = "SELECT iconmax FROM iconmax";
	      $resultori = mysqli_fetch_row($db->query($sql));
	      $curiconidx = $resultori[0];

	      $curiconidx = $curiconidx+1;

	      
	  	move_uploaded_file($_FILES["file"]["tmp_name"], "public/img/enemies/icon (" . $curiconidx . ").png" );

	  	$sql = "UPDATE players SET iconid='" . $curiconidx . "' where username = '" . $_SESSION['user'] . "'";
	  	$result = $db->query($sql);
	  	if ($result) {
		    $sql = "UPDATE iconmax SET iconmax='" . $curiconidx . "'";
		      $result1 = $db->query($sql);
		      if ($result1) {
		      	$_SESSION['iconid'] = $curiconidx;
		        $db->close();
		        echo "<script>alert('Icon has been modified successfully');location.href = '/Gameroom';</script>";
		        exit();
		      }else{
		        echo $db->error;
		        exit();
		      }
		}
		else{
	        echo $db->error;
	        exit();
	    }
	  }
	}
	else
	  {
	  echo "<script>alert('Invalid file');location.href = '/Gameroom';</script>";
	  }
