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

//class ClassName {
//    public $name = '';
//    public function __construct()
//    {
//        echo "__construct has been called<br>";
//    }
//    public function __set($key, $value)
//    {
//        echo "__set Setting $key to $value<br>";
//    }
//    public function __get($name)
//    {
//        echo "__get name is: $name<br>";
//    }
//    public function __isset($name)
//    {
//        echo "__isset name is: $name<br>";
//    }
//    public function __invoke(...$value)
//    {
//        echo "__invoke has been called ".json_encode($value)."<br>";
//    }
//    public function __unset($name)
//    {
//        echo "__unset name is: $name<br>";
//    }
//    // Phương thức __call() sẽ được gọi khi bạn gọi tới một phương thức nào đó không tồn tại trong đối tượng
//    public function __call($name, $arguments)
//    {
//        echo "__call has been called $name with ".json_encode($arguments)."<br>";
//    }
//    public static function __callStatic($name, $arguments)
//    {
//        echo "__callStatic has been called $name with ".json_encode($arguments)."<br>";
//    }
//    public function __toString()
//    {
//        return "__toString has been called<br>";
//    }
//    public function __sleep()
//    {
//        echo "__sleep has been called<br>";
//        // Thông thường khi chúng ta serialize() một đối tượng thì nó sẽ trả về tất cả các thuộc tính trong đối tượng đó
//        //Nhưng nếu sử dụng __sleep() thì chúng ta có thể quy định được các thuộc tính có thể trả về.
//        return array('name');
//    }
//    public function __wakeup()
//    {
//        $this->name;
//        echo "__wakeup has been called<br>";
//    }
//    public function __clone()
//    {
//        echo "__clone has been called<br>";
//    }
////    public static function __set_state($an_array)
////    {
////        echo "__set_state has been called with ".json_encode($an_array)."<br>";
////    }
//    public function __debugInfo()
//    {
//        echo "__debugInfo has been called<br>";
//    }
//    public function __destruct()
//    {
//        echo "__destruct has been called<br>";
//    }
//
//    public static function testCall() {
//        return 'testCall';
//    }
//}
//
//$class = new ClassName(); // __construct
//$class->username = 'dangvanduc90'; // __set
//echo $class->username; // __get
//isset($class->username); // __isset
//$class('name', 'dangvanduc90'); // __invoke
//unset($class->username); // __unset
//echo $class->methodNotExist('dd'); // __call
//ClassName::username('da'); // __callStatic
//echo $class; // __toString
//$var = serialize($class); // Phương thức __sleep() sẽ được gọi khi chúng ta thực hiện serialize() đối tượng.
////unserialize($var); // __wakeup also call __destruct too
//$class1 = clone $class; // __clone
////var_export($class); // __set_state
//var_dump($class); // __debugInfo
//unset($class); // __destruct

/*
 * array function
 *  =============== SESSION 7 ===============
 */

// array_column
$samples = array(
    'a' => array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    'b' => array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith'
    ),
    'c' => array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones'
    ),
    'd' => array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe'
    )
);

$result = array_column($samples, 'first_name', 'id');

$arr = array(3, 3, 10, 5, 4, 1, 44, 20, 23, 65, 25);
$arr1 = array('a' => 42, 'b' => 47, 'c' => 3, 'd' => 34, 'e' => 5, 'f' => 7);
$arr2 = array('a' => 42, 'b' => 7, 'c' => 3, 'd' => 24, 'e' => 47);
$arr2 = array('a' => 47, 'b' => 17, 'c' => 22, 'd' => 3, 'e' => 42);

// array_filter cach 1
function callback($item)
{
    return $item % 5 === 0;
}

$result = array_filter($arr, 'callback');
// array_filter cach 2
$result = array_filter($arr, function ($item) {
    return $item % 5 === 0;
});

$result = array_change_key_case($samples, CASE_UPPER);
$result = array_count_values($arr);
$result = array_diff($arr1, $arr2);
$result = array_diff_assoc($arr1, $arr2);
$result = array_diff_key($arr1, $arr2);
$result = array_fill(0, 9, 'dangvanduc90d');
$result = array_fill_keys($arr, 'dangvanduc90');
$result = array_filter($samples, function ($value) {
    return $value['id'] == 2135;
});
//$result = array_flip($arr);
$result = array_intersect($arr1, $arr2);
$result = array_intersect_assoc($arr1, $arr2);
$result = array_keys($samples, array(
    'id' => 2135,
    'first_name' => 'John',
    'last_name' => 'Doe',
));
$result = array_map(function ($value1, $value2) {
    return [$value1, $value2];
}, $arr, $arr2);
$result = array_merge($arr1, $arr2);
$result = array_merge_recursive($arr1, $arr2);
$result = array_rand($arr, 2);
$result = array_slice($arr, -3, 2);
$input = array("red", "green", "blue", "yellow", "pink", "black");
array_splice($input, 0);
$result = array_slice($input, 0);
var_dump($result);
var_dump($input);