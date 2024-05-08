<?php 
 	class Procedure extends CI_Controller{
 	 	public function __construct(){
			parent::__construct();
			$this->load->model('gen_model');
		}

		public function index(){
			//$this->data['employees']=$this->gen_model->get_stored_procedure();
			//$this->data['employees']=$this->gen_model->get_stored_procedure2();
			//$this->data['employees']=$this->gen_model->get_stored_procedure3();
			//$this->data['employees']=$this->gen_model->get_stored_procedure4();
			// if($this->gen_model->insert_data_stored_procedure()){
			// 	echo "success";
			// }else{
			// 	echo "not success";
			// }
			//echo "<pre>";
			//dump($this->data['employees']);die();
			//$this->load->view('procedure', $this->data);
		}

		public function index_data(){
			//$a="pawan";
			//echo $a[0];
			//$a="10";
			//$b=true;
			//echo $b;
			//$c=$a+$b;
			//echo $c;
			//echo "<pre>";
			//echo $a;
		}

		public function Stored_Procedure(){
			//$this->data['employees']=$this->gen_model->get_stored_procedure_14_july1();
			$this->data['employees']=$this->gen_model->get_stored_procedure_17_july1();
			dump($this->data['employees']);die();
		}
}