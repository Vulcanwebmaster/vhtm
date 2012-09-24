<?php
//KHAI BÁO ĐƯỜNG DẪN VẬT LÝ
defined('APPLICATION_PATH')
||define('APPLICATION_PATH',
realpath(dirname(__FILE__) . '/application'));

//KHAI BÁO VÙNG CẤU HÌNH CHO ỨNG DỤNG TRONG TẬP TIN CẤU HÌNH
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV',
(getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV')
: 'production'));

//KHAI BÁO ĐƯỜNG DẪN TỚI THƯ VIỆN
set_include_path(APPLICATION_PATH . '/../library');

//NẠP LỚP ZEND_APPLICATION
require_once 'Zend/Application.php';

//KHỞI TẠO ĐỐI TƯỢNG ZEN_APPLICATION VÀ ĐỌC FILE CẤU HÌNH
$application = new Zend_Application(
APPLICATION_ENV,
APPLICATION_PATH . '/configs/application.ini'
);

//KHỞI ĐỘNG ỨNG DỤNG
$application->bootstrap()->run();
?>