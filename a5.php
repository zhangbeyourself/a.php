<?php
/**
 * Created by PhpStorm.
 * User: ZC
 * Date: 2018-3-5
 * Time: 14:25
 */
setcookie('cool','123',time()+3600,'/','',true);//只能通过https传输，url没加htpps就不能显示该cookie
setcookie('cook','123',time()+3600,'/','',false);