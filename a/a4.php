<?php
/**
 * Created by PhpStorm.
 * User: ZC
 * Date: 2018-3-5
 * Time: 13:57
 */
//setcookie('test','1243',time()+3600);//当前目录下有效
setcookie('test5','1243',time()+3600,'/test/a/');//根目录下有效
var_dump($_COOKIE);
