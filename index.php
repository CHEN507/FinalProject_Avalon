<?php include_once "database.php";
    session_start();
    $sql = "SELECT * FROM `mes`";
    $sql_2 = "SELECT * FROM `member`";
    $sql_3 = "SELECT * FROM `comments`";
	$result = mysqli_query($con , $sql) or die('MySQL query error');
    $result_2 = mysqli_query($con , $sql_2) or die('MySQL query error');
    $result_3 = mysqli_query($con , $sql_3) or die('MySQL query error');
    $row_2 = mysqli_fetch_array($result_2);
?>


<html>
<head>
	<meta charset="UTF-8">
	<title>誰是網軍</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="container">
		<h1>誰是網軍</h1>
        
		<span>
            <a href="intro.php">遊戲簡介</a>
            <a href="lobby.php">遊戲大廳</a>
			<?php if(isset($_SESSION["id"])){?>
				<a href="account.php?method=logout">登出</a>
                <a href="modify_mem.php">修改資料</a>
				<a href="new_mes.php">新增文章</a>
                積分:<?php echo $_SESSION["points"]; ?>
			<?php }else{?>
				<a href="login.php">登入</a>
				<a href="signup.php">註冊</a>
			<?php }?>
		</span>
        
		
    </div> 
    
</body>
</html>