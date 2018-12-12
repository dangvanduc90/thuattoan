<?php

/*
 *  =============== SESSION 1 ===============
 */
//function phepCong($a, $b) {
//    return $a + $b;
//}
//
//function phepNhan($a, $b) {
//    return $a * $b;
//}
//function tinhtoan($callback, $a, $b) {
//    if (is_callable($callback)) {
//        return $callback($a, $b);
//    }
//}
//echo tinhtoan('phepNhan', 2, 5);

/*
 *  =============== SESSION 2 ===============
 */

//// Hàm ẩn danh lambda
//$hello = function ()
//{
//    return "Hello world";
//};
//echo $hello();

//function shout($message) {
//    if (is_callable($message)) {
//       echo $message();
//    }
//}
//shout(function () {
//    return 'alo';
//});

//// closure
//$user = 'dangvanduc90';
//$hello = function() use (&$user) {
//    $user = 'quydo2';
//    return $user;
//};
//echo $hello();
//echo $user;

//// An array of names
//$users = ['Thỏ 7 màu', 'Đậu đỏ', 'Gấu AK', 'Bé đội xô'];
//array_walk($users, function (&$name, $key) {
//    $name = $name . 'dang';
//});
//var_dump($users);

/*
 *  =============== SESSION 3 ===============
 */
require_once ('DatabaseManager.php');
use Database\DatabaseManager;

$db1 = DatabaseManager::createSingletonObject();
$db2 = DatabaseManager::createSingletonObject();

//$db1 = new DatabaseManager();
//$db2 = new DatabaseManager();
var_dump($db1);
var_dump($db2);