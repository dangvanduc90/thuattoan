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

//// array_column
//$samples = array(
//    'a' => array(
//        'id' => 2135,
//        'first_name' => 'John',
//        'last_name' => 'Doe',
//    ),
//    'b' => array(
//        'id' => 3245,
//        'first_name' => 'Sally',
//        'last_name' => 'Smith'
//    ),
//    'c' => array(
//        'id' => 5342,
//        'first_name' => 'Jane',
//        'last_name' => 'Jones'
//    ),
//    'd' => array(
//        'id' => 5623,
//        'first_name' => 'Peter',
//        'last_name' => 'Doe'
//    )
//);
//
//$result = array_column($samples, 'first_name', 'id');
//
//$arr = array(3, 3, 10, 5, 4, 1, 44, 20, 23, 65, 25);
//$arr1 = array('a' => 42, 'b' => 47, 'c' => 3, 'd' => 34, 'e' => 5, 'f' => 7);
//$arr2 = array('a' => 42, 'b' => 7, 'c' => 3, 'd' => 24, 'e' => 47);
//$arr2 = array('a' => 47, 'b' => 17, 'c' => 22, 'd' => 3, 'e' => 42);
//
//// array_filter cach 1
//function callback($item)
//{
//    return $item % 5 === 0;
//}
//
//$result = array_filter($arr, 'callback');
//// array_filter cach 2
//$result = array_filter($arr, function ($item) {
//    return $item % 5 === 0;
//});
//
//$result = array_change_key_case($samples, CASE_UPPER);
//$result = array_count_values($arr);
//$result = array_diff($arr1, $arr2);
//$result = array_diff_assoc($arr1, $arr2);
//$result = array_diff_key($arr1, $arr2);
//$result = array_fill(0, 9, 'dangvanduc90d');
//$result = array_fill_keys($arr, 'dangvanduc90');
//$result = array_filter($samples, function ($value) {
//    return $value['id'] == 2135;
//});
////$result = array_flip($arr);
//$result = array_intersect($arr1, $arr2);
//$result = array_intersect_assoc($arr1, $arr2);
//$result = array_keys($samples, array(
//    'id' => 2135,
//    'first_name' => 'John',
//    'last_name' => 'Doe',
//));
//$result = array_map(function ($value1, $value2) {
//    return [$value1, $value2];
//}, $arr, $arr2);
//$result = array_merge($arr1, $arr2);
//$result = array_merge_recursive($arr1, $arr2);
//$result = array_rand($arr, 2);
//$result = array_slice($arr, -3, 2);
//$input = array("red", "green", "blue", "yellow", "pink", "black");
//array_splice($input, 0);
//$result = array_slice($input, 0);
//var_dump($result);
//var_dump($input);

/*  ============ SECTION 1 ============ */
//$variableName = 'foo';
//$bar = "dang";
//$foo = 'bar';
//echo ${$foo}; // dang
//echo $$foo; // dang

/*  ============ SECTION 2 ============ */

//function add($a, $b) {
//    return $a + $b;
//}
//$funcName = 'add';
//echo $funcName(2, 4);

/*  ============ SECTION 3 ============ */

//$fooBar = 'baz';
//$varPrefix = 'foo';
//echo ${$varPrefix . 'Bar'}; // Also outputs "baz
//
//$value = 'dangvanduc';
//$variableNamePart1 = 'a';
//$variableNamePart2 = 'b';
//
//${$variableNamePart1 . $variableNamePart2} = $value;
//echo ${$variableNamePart1 . $variableNamePart2};

/* Section 3.3: User-defined global variables
 *  ============ SECTION 4 ============ */

//$amount_of_log_calls = 0;
//function log_message($message) {
//    // Accessing global variable from function scope
//    // requires this explicit statement
//    global $amount_of_log_calls;
//    // This change to the global variable is permanent
//    $amount_of_log_calls += 1;
//
////    // cach 2
////    // is a superglobal variable.
////    $GLOBALS['amount_of_log_calls'] += 1;
//    echo $message;
//}
//// When in the global scope, regular global variables can be used
//// without explicitly stating 'global $variable;'
//echo $amount_of_log_calls; // 0
//log_message("First log message!");
//echo '<br>';
//echo $amount_of_log_calls; // 1
//log_message("Second log message!");
//echo '<br>';
//echo $amount_of_log_calls; // 2

/*
 *  ============ SECTION 5 ============ */

//$x = 4;
//$y = 7;
//echo "The total is: ", $x + $y, ' $';

/*
 *  ============ SECTION 6 ============ */

//define('BASEDIR', __DIR__); // using magic constant to define normal constant
//class Definition_Class {
//    public function say(){
//        echo '__CLASS__ value: ' . __CLASS__ . "\n";
//        echo '<br>';
//        echo 'get_called_class() value: ' . get_called_class() . "\n";
//        echo '<br>';
//        echo 'get_class($this) value: ' . get_class($this) . "\n";
//        echo '<br>';
//        echo 'get_class() value: ' . get_class() . "\n";
//        echo '<br>';
//        echo "We are in the file:" , __FILE__ , "\n";
//        echo '<br>';
//        echo "Our script is located in the:" , __DIR__ , "\n";
//        echo '<br>';
//        echo "Our script is located in the:" , dirname(__FILE__) , "\n";
//        echo '<br>';
//        $view = 'page';
//        $viewFile = BASEDIR . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $view;
//        echo $viewFile;
//        echo '<br>';
//    }
//}
//
//$trick = new Definition_Class();
//$trick->say();

/*
 *  ============ SECTION 7 ============ */

//$name = $_POST['name'] ?? $trick ?? 'nobody';
//echo $name;

//$firstName = "John";
//$lastName = "Doe";
//echo ($firstName ?? "Unknown") . " " . ($lastName ?? "");

// List files
//$output = shell_exec('node -v');
//echo "<pre>$output</pre>";

//$output = `node -v`;
//echo "<pre>$output</pre>";

/*
 *  ============ SECTION 8 ============ */

//class MyClass {
//}
//$o1 = new MyClass();
//$o2 = new MyClass();
//$name = 'MyClass';
//// in the cases below, $a gets boolean value true
//$a = $o1 instanceof MyClass;
//var_dump($a);
//$a = $o1 instanceof $name;
//var_dump($a);
//$a = $o1 instanceof $o2;
//var_dump($a);

/*
 *  ============ SECTION 9 ============ */

//$foo = 'hi';
//$bar = &$foo;
//$bar = 'hello';
//var_dump($foo);
//var_dump($bar);

//function parent(&$var) {
//    echo $var;
//    $var = "updated";
//}
//function &child() {
//    static $a = "test";
//    return $a;
//}
//$var = 'idontknow';
//parent(child()); // returns "test"
//parent(child()); // returns "updated"
//parent($var);
//parent($var);

//$arr = array(1, 2, 3, 4, 5);
//foreach($arr as &$num) {
//    $num++;
//}
//var_dump($arr);

//$var = 5;
//function add(&$var) {
//    $var++;
//}
//add($var);
//var_dump($var);

//function pluralize(&$word)
//{
//    if (substr($word, -1) == 'y') {
//        $word = substr($word, 0, -1) . 'ies';
//    } else {
//        $word .= 's';
//    }
//}
//$word = 'Story';
//pluralize($word);
//print $word;

/*
 *  ============ SECTION 11 ============ */

//$people = ['Tim', 'Tony', 'Turanga'];
//$foods = ['chicken', 'beef', 'slurm'];
//$rs = array_map(function($person, $food) {
//    return "$person likes $food\n";
//}, $people, $foods);
//var_dump($rs);

//$multidimensionalArray = [
//    ['foo', 'bar'],
//    ['fizz', 'buzz'],
//];
//$associativeArrayKeys = array_column($multidimensionalArray, 0);
//$associativeArrayValues = array_column($multidimensionalArray, 1);
//$associativeArray = array_combine($associativeArrayKeys, $associativeArrayValues);
//var_dump($associativeArray);

/*
 *  ============ SECTION 12 ============ */

//$now = new DateTime();
//$now->setTimezone(new DateTimeZone('+7'));
////var_dump($now->format('Y/m/d H:i:s'));
////var_dump(date_format($now, 'Y/m/d H:i:s'));
//
//$twoYearsAgo = new DateTime("2014-01-18 20:05:56");
//$diff = $now->diff($twoYearsAgo);
//var_dump(date('Y/m/d H:i:s'));

/*
 *  ============ SECTION 13 ============ */

//$externalVariable = "Hello";
//$secondExternalVariable = "Foo";
//$myFunction = function() use ($externalVariable, $secondExternalVariable) {
//    var_dump($externalVariable, $secondExternalVariable); // returns two error notice, since the variables aren´t defined
//};
//$myFunction();

/*
 *  ============ SECTION 14 ============ */

//$name = 'Joel';
//echo "<p>We need more {$name}s to help us!</p>";
//echo "<p>We need more $names to help us!</p>";

//$foo = 'Hello world';
//echo $foo[0]; // returns 'w'

/*
 *  ============ SECTION 15 ============ */

//class MathValues {
//    const PI = M_PI;
//    const PHI = 1.61803;
//}
//$area = MathValues::PI * MathValues::PHI;
//echo $area;

//function bar() { return 2; };
//define('BAR', bar());
//class Foo {
//    const BEER = BAR;
//}
//var_dump(Foo::BEER);

/*
 *  ============ SECTION 15 ============ */

// ghi de
//class Horse {
//    public static function whatToSay() {
//        echo 'Neigh!';
//    }
//    public static function speak() {
//        self::whatToSay();
//    }
//}
//class MrEd extends Horse {
//    public static function whatToSay()
//    {
//        echo "Hello World";
//    }
//}
//Horse::whatToSay();
//MrEd::whatToSay();

/*
 *  ============ SECTION 15 ============ */

//class Foo {
//    function __construct($args) {
//        echo 'parent';
//    }
//}
//class Bar extends Foo {
//    function __construct($args) {
//        parent::__construct($args);
//    }
//}
//$bar = new Bar('asd');

//interface Animal {
//    public function makeNoise();
//}
//class Cat implements Animal {
//    public function makeNoise()
//    {
//        return $this->meow();
//    }
//
//    private function meow()
//    {
//        return 'meow';
//    }
//}
//class Dog implements Animal {
//    public function makeNoise()
//    {
//        return $this->bark();
//    }
//
//    private function bark()
//    {
//        return 'bark';
//    }
//}
//
//$dog = new Dog();
//$cat = new Cat();
//echo $dog->makeNoise();
//echo $cat->makeNoise();

//class Person {
//    private $name;
//    public function __construct($name) {
//        $this->name = $name;
//    }
//    public function getName() {
//        return $this->name;
//    }
//    public function getTitle() {
//        return $this->getName()." the person";
//    }
//    public function sayHello() {
//        echo "Hello, I'm ".$this->getTitle()."<br/>";
//    }
//    public function sayGoodbye() {
//        echo "Goodbye from ".self::getTitle()."<br/>";
//    }
//}
//class Geek extends Person {
//    public function __construct($name) {
//        parent::__construct($name);
//    }
//    public function getTitle() {
//        return $this->getName()." the geek";
//    }
//}
//$geekObj = new Geek("Ludwig");
//$geekObj->sayHello();
//$geekObj->sayGoodbye();

//class Car {
//    protected static $brand = 'unknown';
//
//    public static function brand() {
//        return self::$brand."\n";
//    }
//}
//class Mercedes extends Car {
//    protected static $brand = 'Mercedes';
//}
//class BMW extends Car {
//    protected static $brand = 'BMW';
//}
//echo (new Car)->brand();
//echo (new BMW)->brand();
//echo (new Mercedes)->brand();

//class Shape {
//    public $sides = 0;
//
//    public function __construct($sides) {
//        $this->sides = $sides;
//    }
//
//    public function description() {
//        return "A shape with $this->sides sides.";
//    }
//}
//
//class Square extends Shape {
//    public $sideLength = 0;
//
//    public function __construct($sideLength) {
//        parent::__construct(4);
//        $this->sideLength = $sideLength;
//    }
//
//    public function perimeter() {
//        return $this->sides * $this->sideLength;
//    }
//
//    public function area() {
//        return $this->sideLength * $this->sideLength;
//    }
//}
//
//$mySquare = new Square(10);
//print $mySquare->description(); // A shape with 4 sides
//echo '<br>';
//print $mySquare->perimeter(); // 40
//echo '<br>';
//print $mySquare->area(); // 100

/*
 *  ============ SECTION 15 ============ */

//abstract class Centaur {
//    public $str;
//    abstract public function stun();
//}
//interface Morphing {
//    function wave();
//}
//trait Talk {
//    public $phrase = 'Well...';
//
//    protected function speak()
//    {
//        return $this->phrase;
//    }
//}
//
//class Horse {}
//
//class MrEd extends Horse implements Morphing {
//    use Talk {
//        speak as public;
//    }
//
//    public function setPhrase($phrase) {
//        $this->phrase = $phrase;
//    }
//
//    function wave()
//    {
//
//    }
//}
//$mrEd  = new MrEd();
//echo $mrEd->speak();

//interface Logger {
//    function log($message);
//}
//trait LoggableTrait {
//    protected $logger;
//    public function setLogger(Logger $logger) {
//        $this->logger = $logger;
//    }
//    public function log($message) {
//        if ($this->logger) {
//            $this->logger->log($message);
//        }
//    }
//}
//class Foo {
//    use LoggableTrait;
//}
//class Bar {
//    use LoggableTrait;
//}

/*
 * Type hinting
 *  ============ SECTION 16 ============ */

//interface Enrollable {
//    public function getName();
//};
//
//interface Attendable{
//    public function getName();
//};
//
//class Chris implements Enrollable
//{
//    public $name = 'Chris';
//
//    public function getName()
//    {
//        return $this->name;
//    }
//}
//
//class UniversityOfEdinburgh implements Attendable
//{
//    public $name = 'University of Edinburgh';
//
//    public function getName()
//    {
//        return $this->name;
//    }
//}
//
//function enroll(Enrollable $enrollee, Attendable $premises)
//{
//    echo $enrollee->getName() . ' is being enrolled at ' . $premises->getName();
//}
//
//$chris = new Chris();
//$edinburgh = new UniversityOfEdinburgh();
//enroll($chris, $edinburgh);

//function add(?int $a, int $b = 0) : int {
//    return $b ? $a + $b : $a;
//}
//var_dump(add(12, 2));

/*
 *  ============ SECTION 18 ============ */

////$url = 'http://www.example.com/page?foo=1&bar=baz#anchor';
//$url = 'http://example.com/project/controller/action/param1/param2';
//$parts = parse_url($url);
//$parameters = array(
//    'parameter1' => 'foo',
//    'parameter2' => 'bar',
//);
//
//$queryString = http_build_query($parameters);
//
//$urlArr = parse_url('http://example.com/project/controller/action/param1/param2');
//$urlArr['sections'] = explode('/', $urlArr['path']);
//$last = end($urlArr['sections']);
//var_dump(dirname($url));


/*
 *  ============ SECTION 19 ============ */

//interface SQLQueryBuilder
//{
//    public function select(string $table, array $field) : SQLQueryBuilder;
//    public function where(string $field, string $value, string $operator = '') : SQLQueryBuilder;
//    public function limit(int $start, int $offset): SQLQueryBuilder;
//    public function getSQL(): string;
//}
//
//class MysqlQueryBuilder implements SQLQueryBuilder {
//
//    protected $query;
//
//    protected function reset() {
//        $this->query = new \stdClass;
//    }
//
//    public function select(string $table, array $field): SQLQueryBuilder
//    {
//        $this->reset();
//        $this->query->base = "select " . implode(",", $field) . " from " . $table;
//        $this->query->type = "select";
//
//        return $this;
//    }
//
//    public function where(string $field, string $value, string $operator = ''): SQLQueryBuilder
//    {
//        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
//            throw new Exception("WHERE can only be added to SELECT or UPDATE or DELETE");
//        }
//        $this->query->where[] = "$field $operator '$value'";
//
//        return $this;
//    }
//
//    public function limit(int $start, int $offset): SQLQueryBuilder
//    {
//        if (!in_array($this->query->type, ['select'])) {
//            throw new \Exception("LIMIT can only be added to SELECT");
//        }
//        $this->query->limit = " LIMIT " . $start . "," . $offset;
//
//        return $this;
//    }
//
//    public function getSQL(): string
//    {
//        $query = $this->query;
//        $sql = $query->base;
//        if (!empty($query->where)) {
//            $sql .= " WHERE " . implode(" AND ", $query->where);
//        }
//        if (isset($query->limit)) {
//            $sql .= $query->limit;
//        }
//        $sql .= ";";
//        return $sql;
//    }
//}
//
//class PostgresQueryBuilder extends MysqlQueryBuilder {
//    public function limit(int $start, int $offset): SQLQueryBuilder
//    {
//        parent::limit($start, $offset);
//        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;
//
//        return $this;
//    }
//}
//
//function clientCode(SQLQueryBuilder $queryBuilder) {
//    $query = $queryBuilder
//        ->select("users", ["name", "email"])
//        ->where("age", 18, ">")
//        ->limit(0, 10)
//        ->getSQL();
//    echo $query;
//}
//clientCode(new MysqlQueryBuilder());

// Design Pattern: Command
//class Light {
//    public function switchOn()
//    {
//        echo "Switch light on";
//    }
//    public function switchOff()
//    {
//        echo "Switch light off";
//    }
//}
//
//interface Command {
//    function execute();
//}
//
//class CommandOn implements Command {
//    protected $light;
//
//    public function __construct(Light $light)
//    {
//        $this->light = $light;
//    }
//
//    public function execute()
//    {
//        $this->light->switchOn();
//    }
//}
//class CommandOff implements Command {
//    protected $light;
//
//    public function __construct(Light $light)
//    {
//        $this->light = $light;
//    }
//
//    public function execute()
//    {
//        $this->light->switchOff();
//    }
//}
//class RemoteControl {
//    private $command;
//
//    public function setCommand(Command $command)
//    {
//        $this->command = $command;
//    }
//
//    public function pressButton()
//    {
//        $this->command->execute();
//    }
//}
//$light = new Light();
//$cm1 = new CommandOn($light);
//$cm2 = new CommandOff($light);
//$rc = new RemoteControl();
//$rc->setCommand($cm1);
//$rc->pressButton();
//
//$rc->setCommand($cm2);
//$rc->pressButton();

// quachsonCategories Design Pattern, JavaPosted on 2011-04-222 Comments
// Adapter Pattern
//class FishingBoat {
//    public function sail()
//    {
//        echo "sail...";
//    }
//    public function fish()
//    {
//        echo "fish...";
//    }
//}
//
//interface BattleShip {
//    function fire();
//    function move();
//}
//
//class BattleFishingBoat implements BattleShip {
//    private $fishingBoat;
//
//    public function __construct(FishingBoat $fishingBoat)
//    {
//        $this->fishingBoat = $fishingBoat;
//    }
//
//    function fire()
//    {
//        echo "Fire...";
//    }
//
//    function move()
//    {
//        $this->fishingBoat->sail();
//    }
//}
//
//$boat = new BattleFishingBoat(new FishingBoat());
//$boat->fire();
//$boat->move();

// Facade Pattern
//class CPU {
//    public function boot()
//    {
//        echo "boot...";
//    }
//}
//class RAM {
//    public function load()
//    {
//        echo "load...";
//    }
//}
//class HardDrive {
//    public function init()
//    {
//        echo "init...";
//    }
//}
//class Computer {
//    private $cpu, $ram, $hardDrive;
//
//    public function __construct(CPU $CPU, RAM $RAM, HardDrive $hardDrive)
//    {
//        $this->cpu = $CPU;
//        $this->ram = $RAM;
//        $this->hardDrive = $hardDrive;
//    }
//
//    public function start()
//    {
//        $this->cpu->boot();
//        $this->ram->load();
//        $this->hardDrive->init();
//    }
//}

//// Design Pattern: Decorator
//class Number {
//    public function print()
//    {
//        echo rand(1, 9999);
//    }
//}
//
//class Decorator {
//    private $number;
//    public function __construct(Number $number)
//    {
//        $this->number = $number;
//        $this->number->print();
//    }
//}
//
//$decorator = new Decorator(new Number());

// // THUAT TOAN SAP XEP
// // Bubble Sort
// echo '<pre>';
// $arr = [
//     5,
//     3,
//     1,
//     6,
//     7,
//     2,
//     4,
// ];
// $n = count($arr);
// $counter = 0;
// for ($i = 0; $i < $n; $i++) {
//     for ($j = 0; $j < $n; $j++) {
//         if ($arr[$i] < $arr[$j]) {
//             // swap
//             $z = $arr[$i];
//             $arr[$i] = $arr[$j];
//             $arr[$j] = $z;
//         }
//     }
//     ++$counter;
//     print_r('looped: ' . $counter);
//     echo '<br>';
// }
// print_r($arr);

//$arr = [
//    1,
//    53,
//    23,
//    85,
//    34,
//    8,
//    51,
//    98,
//    2,
//    64,
//    64,
//    64,
//    64,
//];
//
//echo '<pre>';
//
////var_dump(array_count_values($arr));
//
//$rs = [];
//foreach ($arr as $num) {
//    if (isset($rs[$num])) {
//        $rs[$num] = $rs[$num] + 1;
//    } else {
//        $rs[$num] = 1;
//    }
//}
//var_dump($rs);
//die();



include dirname(__FILE__) . '/legit.php';
Legit::initialize();

var_dump(Legit::systemRegistry('elasticsearch/order'));