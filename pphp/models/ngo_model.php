<?php
    require_once("../models/dbconnection.php");
    class ngo_model extends dbconnection{
        private $id;
        private $org_name;
        private $email;
        private $username;
        private $pwd;
        private $addressee;
        private $phone;
        private $web;

        public function __construct($id=null, $org_name="",$email="",$username="",$pwd="",$addressee="",$phone="",$web=""){
            parent::__construct();
            $this->id=$id;
            $this->org_name=$org_name;
            $this->email=$email;
            $this->username=$username;
            $this->pwd=$pwd;
            $this->addressee=$addressee;
            $this->phone=$phone;
            $this->web=$web;
        }
        public function save(){
            try{
                $stm=$this->db->prepare("INSERT INTO ngoo(org_name,email,username,pwd,addressee,phone,web) VALUES (?,?,?,?,?,?,?)");
                $stm->execute([$this->org_name,$this->email,$this->username,$this->pwd,$this->addressee,$this->phone,$this->web]);
                // return "success";
            }catch(Exception $e){
                    return $e->getMessage();
            }
        }

    }

?>
<script>
    alert('successfully registered.');
</script>