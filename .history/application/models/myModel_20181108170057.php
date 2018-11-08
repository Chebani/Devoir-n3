<?php 
    class MyModel extends CI_Model{
        function getLesVilles($idRegion){
            $sql = $this->db->query("select * from ville where numRegion=$idRegion");
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
    function addPoints($points,$region,$ville){
        $sql = $this->db->query("update ville set scoreVille =(scoreVille + 5) WHERE idVille =$ville");
        return $sql->result();
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