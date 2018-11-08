<?php 
    class MyModel extends CI_Model{
        function getAllConf(){
            $sql = $this->db->query("select IDCONFERENCE, TITRE from conference GROUP BY IDCONFERENCE, TITRE");
            return $sql->result();
        }

        function getMetiersNonConcernes($idConference){
            $sql = $this->db->query("select metier.IDMETIER, metier.LIBELLEMETIER FROM metier WHERE metier.IDMETIER not IN (SELECT concerner.IDMETIER from concerner WHERE concerner.IDCONFERENCE =$idConference)");
            return $sql->result();
        }

        public function insererLeMetierParId($metier){
    
            $this->db->insert('concerner', $metier);
          }
    }
?>