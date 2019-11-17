<?php 
/**
 * Class : EmployeePositionModel (EmployeePositionModel Model)
 * Employee Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmployeePositionModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $jobPositionId;
public $description;
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
           return $this->db->count_all("employee_position");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee_position',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee_position',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('employee_position');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('employee_position');
            $this->db->close();
            $employeePositions = $query->result();
            $employeePosition = null;
            if (sizeOf($employeePositions)) {
                $employeePosition = $employeePositions[0];
            }
            return $employeePosition;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee_position');
            $this->db->close();
            $employeePositions = $query->result();
            $employeePosition = null;
            if (sizeOf($employeePositions)) {
                $employeePosition = $employeePositions[0];
            }
            return $employeePosition;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee_position');
            $this->db->close();
            return $query->result();
        }

        public function create($employeePosition) {
			$this->load->database();
			//$this->id    = $employeePosition['id']; 
			//$this->field1    = $employeePosition['field1']; 
			$this->employeeId    = $employeePosition['employeeId']; 
$this->jobPositionId    = $employeePosition['jobPositionId']; 
$this->description    = $employeePosition['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $employeePosition['createdBy'];
			$this->updatedBy  = $employeePosition['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('employee_position', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($employeePosition){
			$this->load->database();
			$this->id    = $employeePosition['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $employeePosition['employeeId']; 
$this->jobPositionId    = $employeePosition['jobPositionId']; 
$this->description    = $employeePosition['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $employeePosition['createdBy'];
            $this->updatedBy  = $employeePosition['updatedBy'];
            
			$this->db->update('employee_position', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($employeePosition){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('employee_position', $employeePosition, array('id' => $employeePosition->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM employee_position WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM employee_position WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}