<?php 
if (!isset($_SESSION['user'])) {
  if (isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
  }else{
    header('location:welcome.php');
    exit();
  }
}

?>
<!DOCTYPE html>
<html lang="zh-CN">
  <!-- header部分 -->
  	<?php require_once 'public/layouts/header.php' ?>

  	<body>
  	<!-- 导航栏 -->
  	<?php require_once 'public/layouts/nav.php' ?>
  	<?php require_once 'config.php' ?>

  	<div class="container">
      	<div class="content">
          	<div class="starter-template">
	          	<h1>胜率列表</h1>
				<?php
					$db = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die('数据库连接异常');
				    $sql = "SELECT username, totalsabo, winsabo, totalchess, winchess FROM players";
				    $result = $db->query($sql);
				    $self = $_SESSION['user'];
				    echo "<table  width='500' border='3'>";
				    echo "<tr>"; 
				    echo '<th align="center">用户名</th>    <th align="center">Saboteur总局数</th>   <th align="center">Saboteur胜利局数</th>   <th align="center">Chess总局数</th>    <th align="center">Chess胜利局数</th>';
				    echo "</tr>";
				    while($row = mysqli_fetch_array($result))
				    {
				      	if($row['username'] == $self){
					      	echo "<tr>"; 
					        echo "<td><b>" . $row['username'] . "</td> <td>" . $row['totalsabo'] . "</td> <td>" . $row['winsabo'] . "</td> <td>" . $row['totalchess'] . "</td> <td>" . $row['winchess']  . "</b></td>";
					      	echo "</tr>";
					  	}
					  	else{
					  		echo "<tr>"; 
					        echo "<td>" . $row['username'] . "</td> <td>" . $row['totalsabo'] . "</td> <td>" . $row['winsabo'] . "</td> <td>" . $row['totalchess'] . "</td> <td>" . $row['winchess'] . "</td>";
					      	echo "</tr>";
					  	}
				    }
				    echo "</table>";
				    $result->free();
				    $db->close();
				?>

				<li><a role="button" href="index.php" >返回/Back</a></li>

			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="public/js/check.js"></script>

	</body>
</html>