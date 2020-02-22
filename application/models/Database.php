<?php defined("BASEPATH") or exit("No,Direct Script Access is Allowed...");?>
<?php
class Database extends CI_Model{
	public function check_user($table,$email){
		$query=$this->db->select("*")->from($table)->where("email",$email)->get();
		$result=$query->result();
		return $result;
	}
	public function get_menu(){
		$query=$this->db->get("menu");
		$result=$query->result();
		return $result;
	}
	public function get_data_by_id($menu_value){
		$query=$this->db->like("menu_value",$menu_value)->get("menu");
		$result=$query->result();
		return $result;
	}
}
















?>