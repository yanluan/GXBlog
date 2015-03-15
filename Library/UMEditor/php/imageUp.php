<?php
    header("Content-Type:text/html;charset=utf-8");
    error_reporting( E_ERROR | E_WARNING );
    date_default_timezone_set("Asia/chongqing");
    include "Uploader.class.php";
    $root = dirname(dirname(dirname(dirname(__FILE__))));
    $C = require_once $root . '/config.inc.php';
    
    //上传配置
    //文件保存目录路径
    $save_path = $C['UPLOAD_PATH'] . "/";
    //文件保存目录URL
    $save_url = $C['SITE_URL'] . $C['UPLOAD_DIR'] . "/";
    
    $config = array(
        "savePath" => $C['UPLOAD_PATH'],             //存储文件夹
        "uploadPath" => $C['UPLOAD_DIR'],  
        "maxSize" => 1000 ,                   //允许的文件最大尺寸，单位KB
        "allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp" )  //允许的文件格式
    );
    
    //上传文件目录
    $Path = $config['savePath'];

    //背景保存在临时目录中
    $config[ "savePath" ] = $Path;
    $up = new Uploader( "upfile" , $config );
    $type = $_REQUEST['type'];
    $callback=$_GET['callback'];

    $info = $up->getFileInfo();
    /**
     * 返回数据
     */
    if($callback) {
        echo '<script>'.$callback.'('.json_encode($info).')</script>';
    } else {
        echo json_encode($info);
    }
