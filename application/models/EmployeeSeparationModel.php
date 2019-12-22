<?php 
/**
 * Class : EmployeeSeparationModel (EmployeeSeparationModel Model)
 * Employee Separation Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmployeeSeparationModel extends CI_Model {
		public $id;
        //public $field1;
		
public $name;
public $separationMessage;
public $separationDate;
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
           return $this->db->count_all("employee_separation");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee_separation',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee_separation',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('employee_separation');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('employee_separation');
            $this->db->close();
            $employeeSeparations = $query->result();
            $employeeSeparation = null;
            if (sizeOf($employeeSeparations)) {
                $employeeSeparation = $employeeSeparations[0];
            }
            return $employeeSeparation;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee_separation');
            $this->db->close();
            $employeeSeparations = $query->result();
            $employeeSeparation = null;
            if (sizeOf($employeeSeparations)) {
                $employeeSeparation = $employeeSeparations[0];
            }
            return $employeeSeparation;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee_separation');
            $this->db->close();
            return $query->result();
        }

        public function create($employeeSeparation) {
			$this->load->database();
			//$this->id    = $employeeSeparation['id']; 
			//$this->field1    = $employeeSeparation['field1']; 
			$this->name    = $employeeSeparation['name']; 
$this->separationMessage    = $employeeSeparation['separationMessage']; 
$this->separationDate    = $employeeSeparation['separationDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $employeeSeparation['createdBy'];
			$this->updatedBy  = $employeeSeparation['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('employee_separation', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($employeeSeparation){
			$this->load->database();
			$this->id    = $employeeSeparation['id'];
			
			//$this->field1    = $entity['field1'];
			$this->name    = $employeeSeparation['name']; 
$this->separationMessage    = $employeeSeparation['separationMessage']; 
$this->separationDate    = $employeeSeparation['separationDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $employeeSeparation['createdBy'];
            $this->updatedBy  = $employeeSeparation['updatedBy'];
            
			$this->db->update('employee_separation', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($employeeSeparation){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('employee_separation', $employeeSeparation, array('id' => $employeeSeparation->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM employee_separation WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM employee_separation WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}