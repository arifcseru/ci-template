<?php 
/**
 * Class : PfLoanModel (PfLoanModel Model)
 * Pf Loan Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PfLoanModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $installment;
public $transactionDate;
public $installmentFrom;
public $installmentTo;
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
           return $this->db->count_all("pf_loan");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pf_loan',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pf_loan',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('pf_loan');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('pf_loan');
            $this->db->close();
            $pfLoans = $query->result();
            $pfLoan = null;
            if (sizeOf($pfLoans)) {
                $pfLoan = $pfLoans[0];
            }
            return $pfLoan;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pf_loan');
            $this->db->close();
            $pfLoans = $query->result();
            $pfLoan = null;
            if (sizeOf($pfLoans)) {
                $pfLoan = $pfLoans[0];
            }
            return $pfLoan;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pf_loan');
            $this->db->close();
            return $query->result();
        }

        public function create($pfLoan) {
			$this->load->database();
			//$this->id    = $pfLoan['id']; 
			//$this->field1    = $pfLoan['field1']; 
			$this->employeeId    = $pfLoan['employeeId']; 
$this->installment    = $pfLoan['installment']; 
$this->transactionDate    = $pfLoan['transactionDate']; 
$this->installmentFrom    = $pfLoan['installmentFrom']; 
$this->installmentTo    = $pfLoan['installmentTo']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $pfLoan['createdBy'];
			$this->updatedBy  = $pfLoan['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('pf_loan', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($pfLoan){
			$this->load->database();
			$this->id    = $pfLoan['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $pfLoan['employeeId']; 
$this->installment    = $pfLoan['installment']; 
$this->transactionDate    = $pfLoan['transactionDate']; 
$this->installmentFrom    = $pfLoan['installmentFrom']; 
$this->installmentTo    = $pfLoan['installmentTo']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $pfLoan['createdBy'];
            $this->updatedBy  = $pfLoan['updatedBy'];
            
			$this->db->update('pf_loan', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($pfLoan){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('pf_loan', $pfLoan, array('id' => $pfLoan->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM pf_loan WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM pf_loan WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}