<?php
    if(!(isset($_COOKIE['islogin'])&& $_COOKIE['islogin']==1)) {
        echo "<script>alert('验证失败');window.location.href='login1.php'</script>";
        exit();
    }
?>
<html>
<head>
</head>
<body>
<?php
 echo"欢迎".$_COOKIE["username"]."来到本网站";
 echo"<br/>";
?>
<a href="login1.php">退出</a>
</body>
</html>
