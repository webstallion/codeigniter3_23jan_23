 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Interview extends CI_Controller {
	function __construct() { 
		parent::__construct();
		$this->load->model('gen_model');
	}
	//use of grouping
	public function index(){
		$data1=$this->gen_model->get_all_date('employee');
		$data2=$this->gen_model->get_all_data2();
		$data3=$this->gen_model->get_all_data3();
		$data4=$this->gen_model->get_all_data4();
		$data5=$this->gen_model->get_all_data5();
		$data6=$this->gen_model->get_all_data6();
		$data7=$this->gen_model->get_all_data7();
		$data8=$this->gen_model->get_all_data8();
		$data9=$this->gen_model->get_all_data9();
		$data10=$this->gen_model->get_all_data10();
		dump($data10);
	}
	public function austerpvt(){
		// if(2=='2'){
		// 	echo 'true';
		// }else{
		// 	echo 'false';
		// }
	}

	public function variable(){
		$php="Program";
		$call="php";
		echo $$call;
	}

	public function phpErrors(){
		$x=10;
		echo $y;
	}

	function tryCatch($n){
		try{
			if($n<=0){
				throw new Exception("Enter the valid number.");
			}
			$div=2 / $n;
			echo $div;
		}catch(Exception $e){
			echo $e->getMessage();
		}
	}
	tryCatch(2);

	function array_sorting(){
		$food= array('orange', 'banana', 'grapes', 'apple');
		dump($food);
		krsort($food);
		dump($food);
	}

	public function error_handling(){
		log_message('error', 'error message in this line');
		log_message('debug', 'debug message in this line');
		log_message('info', 'Index method called');
	}
}
