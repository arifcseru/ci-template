<?php 
/**
 * Class : CompanyBalanceModel (CompanyBalanceModel Model)
 * Company Balance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class CompanyBalanceModel extends CI_Model {
		public $id;
        //public $field1;
		
public $companyProfileId;
public $initialBalance;
public $currentBalance;
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
           return $this->db->count_all("company_balance");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('company_balance',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('company_balance',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('company_balance');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('company_balance');
            $this->db->close();
            $companyBalances = $query->result();
            $companyBalance = null;
            if (sizeOf($companyBalances)) {
                $companyBalance = $companyBalances[0];
            }
            return $companyBalance;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('company_balance');
            $this->db->close();
            $companyBalances = $query->result();
            $companyBalance = null;
            if (sizeOf($companyBalances)) {
                $companyBalance = $companyBalances[0];
            }
            return $companyBalance;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('company_balance');
            $this->db->close();
            return $query->result();
        }

        public function create($companyBalance) {
			$this->load->database();
			//$this->id    = $companyBalance['id']; 
			//$this->field1    = $companyBalance['field1']; 
			$this->companyProfileId    = $companyBalance['companyProfileId']; 
$this->initialBalance    = $companyBalance['initialBalance']; 
$this->currentBalance    = $companyBalance['currentBalance']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $companyBalance['createdBy'];
			$this->updatedBy  = $companyBalance['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('company_balance', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($companyBalance){
			$this->load->database();
			$this->id    = $companyBalance['id'];
			
			//$this->field1    = $entity['field1'];
			$this->companyProfileId    = $companyBalance['companyProfileId']; 
$this->initialBalance    = $companyBalance['initialBalance']; 
$this->currentBalance    = $companyBalance['currentBalance']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $companyBalance['createdBy'];
            $this->updatedBy  = $companyBalance['updatedBy'];
            
			$this->db->update('company_balance', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($companyBalance){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('company_balance', $companyBalance, array('id' => $companyBalance->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM company_balance WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM company_balance WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}