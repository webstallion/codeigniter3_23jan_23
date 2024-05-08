<?php 
// 	class ChatUser{
// 		private $user_id;
// 		//private $user_name;
// 		private $user_email;
// 		private $user_password;
// 		private $user_profile;
// 		private $user_status;
// 		private $user_created_on;
// 		private $user_verification_code;
// 		private $user_login_status;
// 		function setUserName($user_name){
// 			$this->user_name=$user_name;
// 		}

// 		function save_data(){
// 			echo $this->user_name;
// 		}
// 	}

// $user_object=new ChatUser;
// $user_object->setUserName('pawan ');
// $user_object->save_data();

// Service factory
// class emp{
// 	private $id;
// 	private $sal;
// 	private $dob;
// 	public function __construct($id, $sal, $dob){
// 		$this->id=$id;
// 		$this->sal=$sal;
// 		$this->dob=$dob;
// 	}

// 	public function getEmpDetails(){
// 		return $this->id.' _ '.$this->sal.' _ '.$this->dob.'<br>';
// 	}
// }

//duplicate array, unique array, array missing
// $array_value=array(10,20,40,20,40);
// $array_count=count($array_value);
// $duplicate_array=array();
// for($i=0;$i<$array_count; $i++){
// 	$duplicate_array[$array_value[$i]]=$array_value[$i];
// 	var_dump($duplicate_array);
// }


// class empFactory{
// 	public static function createEmp($id, $sal, $dob){
// 		return new emp($id, $sal, $dob);
// 	}
// }
// $obj=empFactory::createEmp(1,"65k", "25-10-2020");
// echo $obj->getEmpDetails();

//class Study{
// 	// public function index(){
// 	// 	log_message('error', 'error msg in this line');
// 	// 	log_message('debug', 'error msg in this line');
// 	// 	log_message('info', 'Index Method Called');
// 	// 	echo "index";
// 	// }

// class Study{
//  public $firstName='Pawan';
// 	public $second_name='Sharma';
// 	public function getFirstname($firstName){
// 		echo $this->firstName=$firstName;
// 	}

// 	public function getSecondname(){
// 		echo $this->firstName;
// 	}
// }
// $obj=new Study;
// $obj->getFirstname('raaj');
// $obj->getSecondname();



//public methods and variables
// class Base{
// 	private $name;
// 	public function __construct($n){
// 		echo $this->name=$n;
// 	}

// 	public function show(){
// 		echo "Your name: ".$this->name;
// 	}
// }

// $obj=new Base('Yahoo Baba');
// $obj->name="technical data";
// $obj->show();

//protected methods and variables
// class Base{
// 	protected $name;
// 	public function __construct($n){
// 		$this->name=$n;
// 	}

// 	protected function show(){
// 		echo "Your name: ".$this->name;
// 	}
// }


// class Derived extends Base{
// 	public function get(){
// 		echo "Your name: ".$this->name;
// 	}
// }
// $obj=new Derived('Yahoo Baba');
// //$obj->name="papappa";
// $obj->get();



//private methods and variables
// class Base{
// private $name;
// public function __construct($n){
// $this->name=$n;
// }

// protected function show(){
// echo "Your name: ".$this->name;
// }
// }


// class Derived extends Base{
// public function get(){
// echo "Your name: ".$this->name;
// }
// }
// $obj=new Derived('Yahoo Baba');
// $obj->name="papappa";
// $obj->get();


//constructor and destructor method
// class abc{
// 	public function __destruct(){
// 		echo "This is destruct function";
// 	}

// 	public function __construct(){
// 		echo "This is construction function 2";
// 	}
// 	public function hello(){
// 		echo "Hello Everyone";
// 	}
// }

// $test= new abc();

//Abstract Class
// abstract class parentClass{
// 	public $name;
// 	abstract public function calc($a, $b);
// }

// class childClass extends parentClass{
// 	public function calc($c,$d){
// 		echo "Hello";
// 	}
// }

// $obj=new childClass();
// $obj->calc(10,20);


//Interface
// interface parent1{
// function calc($a,$b);
// }
// interface parent2{
// function sub($c,$d);
// }

// class childClass implements parent1,parent2{
// public function calc($a,$b){
// echo $a+$b.'<br>';
// }

// public function sub($c,$d){
// echo $c-$d;
// }
// }

// $obj=new childClass();
// $obj->calc(10,20);
// $obj->sub(20,10);


//static members and methods
// class test{
// 	static function abc($f , $l){
// 		echo $f .','.$l;
// 	}
// }
// test::abc("jeewak" , "kumar");

// class personal{
// 	public static $name="Yahoo Baba";
// 	public static function show(){
// 		echo self::$name;
// 	}
// }

// echo personal::$name;
// personal::show();

// class personal{
// public static $name="Yahoo Baba";
// }

// class account extends personal{
// public function show(){
// echo parent::$name;
// }
// }

// $obj= new account();
// $obj->show();

//Encapsulation
// class abc{
// 	private $name='pawan kumar';
// 	public function showName($newName){
// 		$this->name = $newName;
// 		return $this->name;
// 	}
// }
// //instantiate object
// $obj = new abc();
// echo $obj->showName("Jeewak kumar");


// Polymorphism
// abstract class class1{
// 	abstract function fun1();
// }

// class class2 extends class1{
// 	function fun1(){
// 		echo "Fun1";
// 	}
// }

// class class3 extends class1{
// 	function fun1(){
// 		echo "Fun2";
// 	}
// }

// $obj=new class3();
// $obj->fun1();

// interface class1{
// function fun1();
// }

// class class2 implements class1{
// function fun1(){
// echo "Fun1";
// }
// }

// class class3 implements class1{
// function fun1(){
// echo "Fun2";
// }
// }

// $obj=new class3();
// $obj->fun1();

//overridding
// class base{
// 	public $name="Parent Class";
// 	public function calc($a, $b){
// 		return $a*$b;
// 	}
// }

// class derived extends base{
// 	public $name="Child Class";
// 	public function calc($a, $b){
// 		return $a+$b;
// 	}
// }

// $obj=new derived();
// echo $obj->name;
// echo $obj->calc(10,20);
 
//Traits
// trait hello{
// 	public function sayhello(){
// 		echo "Hello everyone<br>";
// 	}
// }
// trait bye{
// 	public function saybye(){
// 		echo "bye bye everyone";
// 	}
// }
// class base{
// 	use hello,bye;
// }

// trait hello{
// 	public function sayhello(){
// 		return "Hello everyone<br>";
// 	}
// }

// trait bye{
// 	public function saybye(){
// 		return "Bye Bye Everyone";
// 	}
// }

// class base{
// 	use hello,bye;
// }

// $trait=new base();
// echo $trait->sayhello();
// echo $trait->saybye(); 
// $test= new base();
// $test->sayhello();
// $test->saybye();

// trait hello{
// 	public function sayhello(){
// 		echo "Hello evrone<br>";
// 	}

// 	public function sayHii(){
// 		echo "Hii evrone";
// 	}
// }

// class base{
// 	use hello;
// }

// $test= new base();
// $test->sayhello();
// $test->sayHii();


// strstr() returns part of a given string from the first occurrence of a given substring to the end of the string. For example: strstr("user@example.com","@") will return "@example.com".
// stristr() is idential to strstr() except that it is case insensitive.

// $lastname = 'Singh';
// $string = "This is pankaj kumar.";
// $string = ereg_replace('kumar', $lastname, $string);
// echo $string;   


// func_num_args() function returns the number of parameters passed in.
// echo substr("Hello world",7);
// orld output

//$duplicate_array=array(10,20,30,10,40,20,50,30);
// $remove_duplicate_array=array();
// foreach ($duplicate_array as $single_value) {
// 	if(!in_array($single_value,$remove_duplicate_array)){
// 		$remove_duplicate_array[]=$single_value;
// 	}
// }
// print_r($remove_duplicate_array);


// $duplicate_array=array(10,20,30,10,40,20,50,30);
// $remove_duplicate_array=array();
// foreach ($duplicate_array as $single_value) {
// 	$remove_duplicate_array[$single_value]=$single_value;
// }
// print_r($remove_duplicate_array);

// $blank_array=array();
// foreach ($duplicate_array as $value_arr) {
// 	foreach ($blank_array as $arr) {
// 		if($arr==$value_arr){
// 			continue 2;
// 		}
// 	}
// 	$blank_array[]=$value_arr;
// }
// print_r($blank_array);

//continue and break statement
// for($i=1;$i<=10;$i++){
// 	if($i==3){
// 		continue;
// 	}
// 	echo $i.' ';
// }

// for($a=1;$a<=10;$a++){
// 	if($a==3){
// 		break;
// 	}
// 	echo $a.' ';
// }

// function tryCatch($n){
// 	try{
// 		if($n<=0){
// 			throw new Exception("Enter the valid number.");
// 		}
// 		$div=2 / $n;
// 		echo $div;
// 	}catch(Exception $e){
// 		echo $e->getMessage();
// 	}
// }
// tryCatch(2);


	// define("PI", 3.14);
	// echo PI;
	// echo constant("PI");

	// function sample(){
	// 	$numargs=func_num_args();
	// 	echo "Number of arguments:". $numargs;
	// }
	// sample(6,8,10);

	// $Hello="Welcome to simplilearn";
	// $var="Hello";
	// echo $var." ".$$var;

	// $a='1';
	// $b=&$a;
	// $b="2".$b;
	// echo $a.", ".$b;

	//Findout Largest and Second largest element from array
	// $a=array(10,20,52,105,56,189,96);
	// $c=0;
	// foreach($a as $b)
	// {
	// 	echo $b.'<pre>';
	// 	if($b>$c){
	// 		$c=$b;
	// 	}
	// }
	// echo $c;

// class Study extends CI_Controller{
// 	public function ABC(){
// 		$data=['x'=>'A', 'y'=>'B', 'z'=>'C'];
// 		foreach ($data as $key => $value) {
// 			$key_d=[];
// 			$key_d[]=$key;
// 			$key_d[]=$value;
// 			//$output[]=$key_d;
// 		}
// 		dump($key_d);
// 	}
// }
?>