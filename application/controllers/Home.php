<?php defined("BASEPATH") or exit("No,Direct Scrips Access not Allowed...");?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
class Home extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Database");
		$this->load->library("form_validation");
		
	}
	public function index(){


		
	
			if($this->input->post("email",true)){
				$email=$this->input->post("email");
			   $chek_data=$this->Database->check_user("user",$email);
			  foreach($chek_data as $result){
				  echo $result->email."|";
			  }
		   }
		   $data['menu']=$this->Database->get_menu();
	
		   
		 
		  
		$this->load->view("header");
		$this->load->view("home",$data);
		$this->load->view("footer");
	
	}
	public function read_menu($id=null){
		$con_into_arr=explode("-",$id);
		
		$con_into_str=implode(" ",$con_into_arr);
;
		$data['menu_data']=$this->Database->get_data_by_id($con_into_str);
		$data['menu']=$this->Database->get_menu();

		if(isset($_REQUEST['samim'])){
			echo $_REQUEST['samim'];
		}
		else{
			echo "Not";
		}


		$this->load->view("header");
		$this->load->view("home",$data);
		
		$this->load->view("menu_read",$data);
		$this->load->view("footer");
	}

	public function new_reg(){
		if($this->input->post("submit")){
			$this->load->library("form_validation");
			$fname=$this->input->post("fname",true);
			$lname=$this->input->post("lname",true);
			$email=$this->input->post("email",true);
			$phone=$this->input->post("phone",true);
			$this->form_validation->set_rules("fname","Fname","required");
			$this->form_validation->set_rules("lname","Lname","required");
			$this->form_validation->set_rules("email","Email","required");
			$this->form_validation->set_rules("phone","Phone","required");
			if($this->form_validation->run()){
				$data=array(
					"fname"=>$fname,
					"lname"=>$lname,
					"email"=>$email,
					"phone"=>$phone
		
				);
				$this->session->set_flashdata("Message","<span>Registration Success</span>");
				$this->db->insert("new_reg",$data);
				redirect("Home/new_reg");
			}
			else{
				$this->session->set_flashdata("Message","<span>Registration Success</span>");
				redirect("Home/new_reg");
			}
		
		}
		$this->load->view("header");
		$this->load->view("menu_read");
		$this->load->view("home");
		$this->load->view("footer");
		}
	
}













?>