<?php
$a = htmlspecialchars($_REQUEST["a"]);
$myname = htmlspecialchars($_REQUEST["myname"]);
$rtmp = join("",file("mylocal.txt"));
$f = null;
if (count(explode($myname,$rtmp)) == 3)
{
    $newstr = explode($myname,$rtmp);
    $newstr[1] = $a;
    $f = join($myname,$newstr);
}
else
{
//    if (str_contains($myname,$rtmp))
//    {
//        $rtmp = str_replace($myname,"",$rtmp);
//    }
    $f = $rtmp."\r\n".$myname.$a.$myname;
}
$myfile = fopen("mylocal.txt","w");
fwrite($myfile,$f);

echo $f;