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
//require_once ('DatabaseManager.php');
//use Database\DatabaseManager;
//
//$db1 = DatabaseManager::createSingletonObject();
//$db2 = DatabaseManager::createSingletonObject();
//
////$db1 = new DatabaseManager();
////$db2 = new DatabaseManager();
//var_dump($db1);
//var_dump($db2);

/*
 * Nguyen-Ly-Composition-over-Inheritance
 *  =============== SESSION 4 ===============
 */
//require_once ('MallardDuck.php');
//
//$duck = new MallardDuck();
//echo $duck->flyBehaviour->fly();
//echo $duck->flyBehaviour->is_check;

///*
// * trait
// *  =============== SESSION 6 ===============
// */
//
//trait Admin {
//    public function checkLogin()
//    {
//        return "Check login check";
//    }
//
//    public function isAdmin()
//    {
//        return "Ok Admin";
//    }
//}
//trait Authenticate
//{
//    public function checkLogin()
//    {
//        return "Check login Authenticate";
//    }
//
//    public function isAdmin()
//    {
//        return "Ok Authenticate";
//    }
//}
//
//class User {
//    use Admin, Authenticate {
//        Authenticate::checkLogin insteadof Admin;
//        Admin::isAdmin insteadof Authenticate;
//    }
//    public function check() {
//        return $this->checkLogin();
//    }
//}
//$user = new User();
//echo $user->check();


/*
 * magic method
 *  =============== SESSION 7 ===============
 */

class ClassName {
    public $name = '';
    public function __construct()
    {
        echo "__construct has been called<br>";
    }
    public function __set($key, $value)
    {
        echo "__set Setting $key to $value<br>";
    }
    public function __get($name)
    {
        echo "__get name is: $name<br>";
    }
    public function __isset($name)
    {
        echo "__isset name is: $name<br>";
    }
    public function __invoke(...$value)
    {
        echo "__invoke has been called ".json_encode($value)."<br>";
    }
    public function __unset($name)
    {
        echo "__unset name is: $name<br>";
    }
    // Phương thức __call() sẽ được gọi khi bạn gọi tới một phương thức nào đó không tồn tại trong đối tượng
    public function __call($name, $arguments)
    {
        echo "__call has been called $name with ".json_encode($arguments)."<br>";
    }
    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic has been called $name with ".json_encode($arguments)."<br>";
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "__toString has been called<br>";
    }
    public function __sleep()
    {
        echo "__sleep has been called<br>";
        // Thông thường khi chúng ta serialize() một đối tượng thì nó sẽ trả về tất cả các thuộc tính trong đối tượng đó
        //Nhưng nếu sử dụng __sleep() thì chúng ta có thể quy định được các thuộc tính có thể trả về.
        return array('name');
    }
    public function __wakeup()
    {
        $this->name;
        echo "__wakeup has been called<br>";
    }
    public function __clone()
    {
        echo "__clone has been called<br>";
    }
//    public static function __set_state($an_array)
//    {
//        echo "__set_state has been called with ".json_encode($an_array)."<br>";
//    }
    public function __debugInfo()
    {
        echo "__debugInfo has been called<br>";
    }
    public function __destruct()
    {
        echo "__destruct has been called<br>";
    }

    public static function testCall() {
        return 'testCall';
    }
}

$class = new ClassName(); // __construct
$class->username = 'dangvanduc90'; // __set
echo $class->username; // __get
isset($class->username); // __isset
$class('name', 'dangvanduc90'); // __invoke
unset($class->username); // __unset
echo $class->methodNotExist('dd'); // __call
ClassName::username('da'); // __callStatic
echo $class; // __toString
$var = serialize($class); // Phương thức __sleep() sẽ được gọi khi chúng ta thực hiện serialize() đối tượng.
//unserialize($var); // __wakeup also call __destruct too
$class1 = clone $class; // __clone
//var_export($class); // __set_state
var_dump($class); // __debugInfo
unset($class); // __destruct