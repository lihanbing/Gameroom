<?php 
/**
* login
*/
class Login
{
	// public $email;
	public $username;
	public $password;
	public $rem;
	// public $code;
	function __construct()
	{
		if (!isset($_POST['login'])) {
			echo "<script>alert('You access the page does not exist!');history.go(-1);</script>";
			exit();
		}
		require '../config.php';

		$this->username = $_POST['username'];
		$this->password = $_POST['password'];
		// $this->code = $_POST['code'];
		$this->rem = $_POST['rem'];
	}

	// public  function  checkMail(){
	// 	//验证邮箱格式
	// 	$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
	// 	if (!preg_match($pattern,$this->email)) {
	// 		echo "<script>alert('Email format incorrect.please try again!');history.go(-1);</script>";
	// 		exit();
	// 	}
	// }
	public function checkName()
	{
		$length = strlen($this->username);
		if (trim($this->username) == '' || $length < 2 || $length > 20) {
			echo "<script>alert('UserName format incorrect.please try again!');history.go(-1);</script>";
			exit();
		}
	}

	public function checkPwd()
	{
		//验证密码格式
		if (!trim($this->password) == '') {
			$strlen = strlen($this->password);
			if ($strlen < 6 || $strlen > 20) {
				echo "<script>alert('Password length of illegal.please try again!');history.go(-1);</script>";
				exit();
			}else{
				$this->password = md5($this->password);
			}
		}else{
			echo "<script>alert('Password cannot be blank.please try again!');history.go(-1);</script>";
			exit();
		}
	}

	// public function checkCode()
	// {
	// 	//验证码处理
	// 	if ($this->code != $_SESSION['code']) {
	// 		echo "<script>alert('Verification code is not correct.please try again!');history.go(-1);</script>";
	// 		exit();
	// 	}
	// }

	public function checkUser()
	{
		//数据库验证
		$db = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die('数据库连接异常');
		$sql = "SELECT username FROM players WHERE username = '".$this->username."' and password = '".$this->password."'";
		$resultori = mysqli_fetch_row($db->query($sql));
		$result = $resultori[0];
		if (!$result) {
			echo "<script>alert('Email or password is incorrect.please try again!');history.go(-1);</script>";
			exit();
		}else{
			$sqlicon = "SELECT iconid FROM players WHERE username = '".$this->username."' and password = '".$this->password."'";
			$resulticon = mysqli_fetch_row($db->query($sqlicon));
			$iconid = $resulticon[0];
			$_SESSION['iconid'] = $iconid;
			$db->close();
			$_SESSION['user'] = $result;
			if ($this->rem == 1) {
			  $_SESSION['rem'] = '1';
			}
			echo "<script>alert('Login Success!');location.href = '/Gameroom/index.php'</script>";
			exit();
		}
	}

	public function doLogin()
	{
		// $this->checkCode();
		$this->checkName();
		$this->checkPwd();
		$this->checkUser();
	}
}

$login = new Login();
$login->doLogin();

