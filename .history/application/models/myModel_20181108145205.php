<?php 
    class MyModel extends CI_Model{
        function getAllConf(){
            $sql = $this->db->query("select IDCONFERENCE, TITRE from conference GROUP BY IDCONFERENCE, TITRE");
            return $sql->result();
        }

        function getMesRegion($admin){
            if($admin == 'admin'){
            $sql = $this->db->query("select * from region");
            return $sql->result();
        }else{
            $sql = $this->db->query("select idRegion, nomRegion, scoreRegion FROM region WHERE idRegion = 1");
            return $sql->result();
        }
    }
        public function insererLeMetierParId($metier){
    
            $this->db->insert('concerner', $metier);
          }
        
          public function login_user($nomUser){

            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('nomUser',$nomUser);
        
            if($query=$this->db->get())
            {
              return $query->row_array();
            }
            else{
              return false;
            }
        
        
          }
    }
?>