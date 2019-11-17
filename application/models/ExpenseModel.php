<?php 
/**
 * Class : ExpenseModel (ExpenseModel Model)
 * Expense Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ExpenseModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $expenseTypeId;
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
           return $this->db->count_all("expense");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('expense',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('expense',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('expense');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('expense');
            $this->db->close();
            $expenses = $query->result();
            $expense = null;
            if (sizeOf($expenses)) {
                $expense = $expenses[0];
            }
            return $expense;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('expense');
            $this->db->close();
            $expenses = $query->result();
            $expense = null;
            if (sizeOf($expenses)) {
                $expense = $expenses[0];
            }
            return $expense;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('expense');
            $this->db->close();
            return $query->result();
        }

        public function create($expense) {
			$this->load->database();
			//$this->id    = $expense['id']; 
			//$this->field1    = $expense['field1']; 
			$this->employeeId    = $expense['employeeId']; 
$this->expenseTypeId    = $expense['expenseTypeId']; 
$this->amount    = $expense['amount']; 
$this->transactionDate    = $expense['transactionDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $expense['createdBy'];
			$this->updatedBy  = $expense['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('expense', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($expense){
			$this->load->database();
			$this->id    = $expense['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $expense['employeeId']; 
$this->expenseTypeId    = $expense['expenseTypeId']; 
$this->amount    = $expense['amount']; 
$this->transactionDate    = $expense['transactionDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $expense['createdBy'];
            $this->updatedBy  = $expense['updatedBy'];
            
			$this->db->update('expense', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($expense){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('expense', $expense, array('id' => $expense->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM expense WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM expense WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}