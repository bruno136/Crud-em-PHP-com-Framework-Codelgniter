<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model
{

	private $_table = "cliente";

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function add($data)
	{
		$this->db->insert($this->_table,$data);
	}

	public function edit_data($where){
		return $this->db->get_where($this->_table,$where)->result();
	}

	public function update($where,$data){
		$this->db->where($where);
		$this->db->update($this->_table,$data);
	}

	public function delete($where)
	{
		return $this->db->delete($this->_table, $where);
	}

}
?>
