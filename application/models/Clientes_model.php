<?php
class Clientes_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->table = "clientes";
    }
  
     public function create($data){
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }
    
    public function read_all(){
        $this->db->select("*");
        $this->db->from($this->table);
        $query = $this->db->get();
        return json_encode($query->result());
    }
    
    public function read($campos,$condicion){
        $this->db->select($campos);
        $this->db->from($this->table);
        $this->db->where($condicion);
        $query = $this->db->get();
        return json_encode($query->result());

    }
    
    public function read_order($campos,$condicion,$orden){
        $this->db->select($campos);
        $this->db->from($this->table);
        $this->db->order_by($orden);
        if($condicion != 'NULL'){
            $this->db->where($condicion);
        }
        $query = $this->db->get();
        return json_encode($query->result());

    }
    
    public function update($data,$condicion){
        $this->db->where($condicion);
        $this->db->update($this->table,$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }
    
    public function delete($condicion){
        $this->db->where($condicion);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    
    }
}
?>