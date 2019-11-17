<?php 
/**
 * Class : IncomeModel (IncomeModel Model)
 * Income Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class IncomeModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $incomeTypeId;
public $amount;
public $transactionDate;
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
           return $this->db->count_all("income");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('income',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('income',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('income');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('income');
            $this->db->close();
            $incomes = $query->result();
            $income = null;
            if (sizeOf($incomes)) {
                $income = $incomes[0];
            }
            return $income;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('income');
            $this->db->close();
            $incomes = $query->result();
            $income = null;
            if (sizeOf($incomes)) {
                $income = $incomes[0];
            }
            return $income;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('income');
            $this->db->close();
            return $query->result();
        }

        public function create($income) {
			$this->load->database();
			//$this->id    = $income['id']; 
			//$this->field1    = $income['field1']; 
			$this->employeeId    = $income['employeeId']; 
$this->incomeTypeId    = $income['incomeTypeId']; 
$this->amount    = $income['amount']; 
$this->transactionDate    = $income['transactionDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $income['createdBy'];
			$this->updatedBy  = $income['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('income', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($income){
			$this->load->database();
			$this->id    = $income['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $income['employeeId']; 
$this->incomeTypeId    = $income['incomeTypeId']; 
$this->amount    = $income['amount']; 
$this->transactionDate    = $income['transactionDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $income['createdBy'];
            $this->updatedBy  = $income['updatedBy'];
            
			$this->db->update('income', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($income){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('income', $income, array('id' => $income->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM income WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM income WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}