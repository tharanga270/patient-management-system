<?php
/*
 *  test Model class Generated by Prologics Framework
 */

class test_model extends model{
    
    function __construct() {
        parent::__construct();
    }   

     /*========================================*/
    /*=====CRUD(CREAD,READ,UPDATE,DELETE)=====*/
    /*========================================*/

    /*CREATE(C) new patient*/
    function addPatientDetails($data){
        $postData = array(
            'name'=>$data['name'],
            'age'=>$data['age'],
            'sex'=>$data['sex'],
            'diseases'=>$data['diseases'],
            'date'=>$data['setdate']
        );
        
        $sucs = $this->db->insert('patients', $postData);

        if($sucs){
            $msg = "Data was successfully inserted!!";
            header("Location: ".URL."dashboard");
        }else{
            //session::destroy();
            //header("Location: " . URL . "index"); 
            echo "data was not successfully inserted!!!";
        }
    }
    /*READ(R) read all the patient details records*/
    function viewPatientDetails(){
        return $this->db->select("SELECT * FROM patients");
    }
    /*READ(R) read single patient*/
    function viewsinglePatient($id){
        $setId = implode(" ",$id);
        $sth = $this->db->prepare("SELECT * FROM patients WHERE id=$setId");
        $sth->execute();
        return $sth->fetch();
        //return $this->db->select("SELECT * FROM userinfo WHERE id=:id",array(':id'=>$setId),PDO::FETCH_ORI_FIRST);       
    }

    /*UPDATE(U) update single patient record*/
    function editPatient($data){
        $postData = array(
            'name'=>$data['name'],
            'age'=>$data['age'],
            'sex'=>$data['sex'],
            'diseases'=>$data['diseases'],
            'date'=>$data['setdate']
        );
        //print_r($postData);
        //die();
        $setId = implode(" ",$data['id']);
        $sucs = $this->db->update('patients', $postData, "id=$setId");

        if($sucs){
            header("Location: " . URL . "dashboard");
        }else{
            echo "data was not successfully Updated!!!";
        }
    }

    /*DELETE(D) delete single patient record*/
    function deletePatient($id) {
        $setId = implode("",$id);
        $sucs = $this->db->delete('patients',"id= $setId");

        if($sucs){
            header("Location: ".URL."dashboard");
        }else{
            echo "Not Deleted!!";
        }
    }  

    /*Search Details*/
    function searchDetails(){
        $get_text = $_POST['txt_search'];
        $sth = $this->db->prepare("SELECT * FROM patients WHERE name LIKE '$get_text%' ");
        $sth->execute();
        return $sth->fetch();
    }
    
}

