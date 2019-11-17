<?php 
/**
 * Class : PfDetailsModel (PfDetailsModel Model)
 * Pf Details Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PfDetailsModel extends CI_Model {
		public $id;
        //public $field1;
		
public $providendFundId;
public $employeeId;
public $monthNo;
public $empAmount;
public $companyAmount;
		public $isApproved;
		public $isDeleted;
		public $createdBy;
		public $updatedBy;
		public $createdDate;
		public $updatedDate;

        public function __construct(){
                parent::__construct();
        }
        public function record_count() {
           return $this->db->count_all("pf_details");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pf_details',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pf_details',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('pf_details');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('pf_details');
            $this->db->close();
            $pfDetailss = $query->result();
            $pfDetails = null;
            if (sizeOf($pfDetailss)) {
                $pfDetails = $pfDetailss[0];
            }
            return $pfDetails;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pf_details');
            $this->db->close();
            $pfDetailss = $query->result();
            $pfDetails = null;
            if (sizeOf($pfDetailss)) {
                $pfDetails = $pfDetailss[0];
            }
            return $pfDetails;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pf_details');
            $this->db->close();
            return $query->result();
        }

        public function create($pfDetails) {
			$this->load->database();
			//$this->id    = $pfDetails['id']; 
			//$this->field1    = $pfDetails['field1']; 
			$this->providendFundId    = $pfDetails['providendFundId']; 
$this->employeeId    = $pfDetails['employeeId']; 
$this->monthNo    = $pfDetails['monthNo']; 
$this->empAmount    = $pfDetails['empAmount']; 
$this->companyAmount    = $pfDetails['companyAmount']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $pfDetails['createdBy'];
			$this->updatedBy  = $pfDetails['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('pf_details', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($pfDetails){
			$this->load->database();
			$this->id    = $pfDetails['id'];
			
			//$this->field1    = $entity['field1'];
			$this->providendFundId    = $pfDetails['providendFundId']; 
$this->employeeId    = $pfDetails['employeeId']; 
$this->monthNo    = $pfDetails['monthNo']; 
$this->empAmount    = $pfDetails['empAmount']; 
$this->companyAmount    = $pfDetails['companyAmount']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $pfDetails['createdBy'];
            $this->updatedBy  = $pfDetails['updatedBy'];
            
			$this->db->update('pf_details', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($pfDetails){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('pf_details', $pfDetails, array('id' => $pfDetails->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM pf_details WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM pf_details WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}