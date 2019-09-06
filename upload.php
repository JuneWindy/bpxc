<?php

if($_FILES["file"]["error"])
{
    echo $_FILES["file"]["error"];
    return 0;
}
else
{
    //没有出错
    //加限制条件
    //判断上传文件类型为png或jpg且大小不超过1024000B

    if(($_FILES["file"]["type"]=="image/png"||$_FILES["file"]["type"]=="image/jpeg")&&$_FILES["file"]["size"]<1024000)
    {
        $dir="./img/ex";
        $dh=opendir($dir);
        while ($file=readdir($dh)) {
              $fullpath=$dir."/".$file;
              if(!is_dir($fullpath)) {
                 unlink($fullpath);
              } 
        }    
        closedir($dh);
               
        //防止文件名重复
        $filename ="./img/ex/".$_FILES["file"]["name"];
        //转码，把utf-8转成gb2312,返回转换后的字符串， 或者在失败时返回 FALSE。
        $filename =iconv("UTF-8","gb2312",$filename);
        //保存文件,   move_uploaded_file 将上传的文件移动到新位置
        move_uploaded_file($_FILES["file"]["tmp_name"],$filename);//将临时地址移动到指定地址
    }
    else
    {
        echo"文件类型不对";
        return 0;
    }


}