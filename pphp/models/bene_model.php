
    <?php
    require_once("../models/dbconnection.php");
    class bene_model extends dbconnection{
        private $id;
        private $names;
        private $dob;
        private $addrex;
        private $email;
        private $phone;
        private $ngo_id;
    public function __construct($id=null,$names="",$dob="",$addrex="",$email="",$phone="",$ngo_id=""){
        parent::__construct();
            $this->id=$id;
            $this->$names=$names;
            $this->dob=$dob;
            $this->addrex=$addrex;
            $this->email=$email;
            $this->phone=$phone;
            $this->ngo_id=$ngo_id;
        }
        
        public function save(){
            try{
              
                $stm= $this->db->prepare("INSERT INTO benene(names,dob,addrex,email,phone,ngo_id) VALUES(?,?,?,?,?,?)");
            $stm->execute([$this->names,$this->dob,$this->addrex,$this->email,$this->phone,$this->ngo_id]);
            $working='<span style="color:#9dc08b";>successfully registered</span>';
            return $working;
            }
            catch(Exception $e){
                return $e->getMessage();
            }
        }
    }
?>
<!-- <script>
    alert('successfully registered.');
</script> -->