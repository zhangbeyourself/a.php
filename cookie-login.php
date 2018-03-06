<?php
/**
 * Created by PhpStorm.
 * User: ZC
 * Date: 2018-3-6
 * Time: 16:00
 */
    function clearcookies(){
        setcookie('username',time()-3600);
        setcookie('islogin',time()-3600);
        }
    if($_GET["action"]=="login"){
        clearcookies();
        if($_POST["username"]=="admin" && $_POST["password"]=="123456"){
        setcookie('username',$_POST["username"],time()+7*24*60*60);
        setcookie('islogin','1',time()+7*24*60*60);
//        echo"登录成功";
        header("location:login2.php");
        }
        else{
            die('用户名或密码错误！');
        }
    }