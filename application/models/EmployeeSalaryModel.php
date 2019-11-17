<?php 
/**
 * Class : EmployeeSalaryModel (EmployeeSalaryModel Model)
 * Employee Salary Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmployeeSalaryModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $amount;
public $taxPercent;
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
           return $this->db->count_all("employee_salary");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee_salary',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee_salary',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('employee_salary');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('employee_salary');
            $this->db->close();
            $employeeSalarys = $query->result();
            $employeeSalary = null;
            if (sizeOf($employeeSalarys)) {
                $employeeSalary = $employeeSalarys[0];
            }
            return $employeeSalary;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee_salary');
            $this->db->close();
            $employeeSalarys = $query->result();
            $employeeSalary = null;
            if (sizeOf($employeeSalarys)) {
                $employeeSalary = $employeeSalarys[0];
            }
            return $employeeSalary;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee_salary');
            $this->db->close();
            return $query->result();
        }

        public function create($employeeSalary) {
			$this->load->database();
			//$this->id    = $employeeSalary['id']; 
			//$this->field1    = $employeeSalary['field1']; 
			$this->employeeId    = $employeeSalary['employeeId']; 
$this->amount    = $employeeSalary['amount']; 
$this->taxPercent    = $employeeSalary['taxPercent']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $employeeSalary['createdBy'];
			$this->updatedBy  = $employeeSalary['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('employee_salary', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($employeeSalary){
			$this->load->database();
			$this->id    = $employeeSalary['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $employeeSalary['employeeId']; 
$this->amount    = $employeeSalary['amount']; 
$this->taxPercent    = $employeeSalary['taxPercent']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $employeeSalary['createdBy'];
            $this->updatedBy  = $employeeSalary['updatedBy'];
            
			$this->db->update('employee_salary', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($employeeSalary){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('employee_salary', $employeeSalary, array('id' => $employeeSalary->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM employee_salary WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM employee_salary WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}