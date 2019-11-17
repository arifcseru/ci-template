<?php 
/**
 * Class : PfLoanInstallmentModel (PfLoanInstallmentModel Model)
 * Pf Loan Installment Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PfLoanInstallmentModel extends CI_Model {
		public $id;
        //public $field1;
		
public $pfLoanId;
public $installment;
public $monthNo;
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
           return $this->db->count_all("pf_loan_installment");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pf_loan_installment',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pf_loan_installment',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('pf_loan_installment');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('pf_loan_installment');
            $this->db->close();
            $pfLoanInstallments = $query->result();
            $pfLoanInstallment = null;
            if (sizeOf($pfLoanInstallments)) {
                $pfLoanInstallment = $pfLoanInstallments[0];
            }
            return $pfLoanInstallment;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pf_loan_installment');
            $this->db->close();
            $pfLoanInstallments = $query->result();
            $pfLoanInstallment = null;
            if (sizeOf($pfLoanInstallments)) {
                $pfLoanInstallment = $pfLoanInstallments[0];
            }
            return $pfLoanInstallment;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pf_loan_installment');
            $this->db->close();
            return $query->result();
        }

        public function create($pfLoanInstallment) {
			$this->load->database();
			//$this->id    = $pfLoanInstallment['id']; 
			//$this->field1    = $pfLoanInstallment['field1']; 
			$this->pfLoanId    = $pfLoanInstallment['pfLoanId']; 
$this->installment    = $pfLoanInstallment['installment']; 
$this->monthNo    = $pfLoanInstallment['monthNo']; 
$this->transactionDate    = $pfLoanInstallment['transactionDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $pfLoanInstallment['createdBy'];
			$this->updatedBy  = $pfLoanInstallment['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('pf_loan_installment', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($pfLoanInstallment){
			$this->load->database();
			$this->id    = $pfLoanInstallment['id'];
			
			//$this->field1    = $entity['field1'];
			$this->pfLoanId    = $pfLoanInstallment['pfLoanId']; 
$this->installment    = $pfLoanInstallment['installment']; 
$this->monthNo    = $pfLoanInstallment['monthNo']; 
$this->transactionDate    = $pfLoanInstallment['transactionDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $pfLoanInstallment['createdBy'];
            $this->updatedBy  = $pfLoanInstallment['updatedBy'];
            
			$this->db->update('pf_loan_installment', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($pfLoanInstallment){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('pf_loan_installment', $pfLoanInstallment, array('id' => $pfLoanInstallment->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM pf_loan_installment WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM pf_loan_installment WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}