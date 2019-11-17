<?php 
/**
 * Class : ProvidendFundModel (ProvidendFundModel Model)
 * Providend Fund Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ProvidendFundModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $monthlyAmount;
public $installmentMonths;
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
           return $this->db->count_all("providend_fund");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('providend_fund',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('providend_fund',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('providend_fund');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('providend_fund');
            $this->db->close();
            $providendFunds = $query->result();
            $providendFund = null;
            if (sizeOf($providendFunds)) {
                $providendFund = $providendFunds[0];
            }
            return $providendFund;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('providend_fund');
            $this->db->close();
            $providendFunds = $query->result();
            $providendFund = null;
            if (sizeOf($providendFunds)) {
                $providendFund = $providendFunds[0];
            }
            return $providendFund;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('providend_fund');
            $this->db->close();
            return $query->result();
        }

        public function create($providendFund) {
			$this->load->database();
			//$this->id    = $providendFund['id']; 
			//$this->field1    = $providendFund['field1']; 
			$this->employeeId    = $providendFund['employeeId']; 
$this->monthlyAmount    = $providendFund['monthlyAmount']; 
$this->installmentMonths    = $providendFund['installmentMonths']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $providendFund['createdBy'];
			$this->updatedBy  = $providendFund['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('providend_fund', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($providendFund){
			$this->load->database();
			$this->id    = $providendFund['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $providendFund['employeeId']; 
$this->monthlyAmount    = $providendFund['monthlyAmount']; 
$this->installmentMonths    = $providendFund['installmentMonths']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $providendFund['createdBy'];
            $this->updatedBy  = $providendFund['updatedBy'];
            
			$this->db->update('providend_fund', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($providendFund){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('providend_fund', $providendFund, array('id' => $providendFund->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM providend_fund WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM providend_fund WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}