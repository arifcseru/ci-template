<?php 
/**
 * Class : EmpTrainingModel (EmpTrainingModel Model)
 * Emp Training Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmpTrainingModel extends CI_Model {
		public $id;
        //public $field1;
		
public $courseId;
public $employeeId;
public $title;
public $approverId;
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
           return $this->db->count_all("emp_training");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('emp_training',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('emp_training',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('emp_training');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('emp_training');
            $this->db->close();
            $empTrainings = $query->result();
            $empTraining = null;
            if (sizeOf($empTrainings)) {
                $empTraining = $empTrainings[0];
            }
            return $empTraining;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('emp_training');
            $this->db->close();
            $empTrainings = $query->result();
            $empTraining = null;
            if (sizeOf($empTrainings)) {
                $empTraining = $empTrainings[0];
            }
            return $empTraining;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('emp_training');
            $this->db->close();
            return $query->result();
        }

        public function create($empTraining) {
			$this->load->database();
			//$this->id    = $empTraining['id']; 
			//$this->field1    = $empTraining['field1']; 
			$this->courseId    = $empTraining['courseId']; 
$this->employeeId    = $empTraining['employeeId']; 
$this->title    = $empTraining['title']; 
$this->approverId    = $empTraining['approverId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $empTraining['createdBy'];
			$this->updatedBy  = $empTraining['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('emp_training', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($empTraining){
			$this->load->database();
			$this->id    = $empTraining['id'];
			
			//$this->field1    = $entity['field1'];
			$this->courseId    = $empTraining['courseId']; 
$this->employeeId    = $empTraining['employeeId']; 
$this->title    = $empTraining['title']; 
$this->approverId    = $empTraining['approverId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $empTraining['createdBy'];
            $this->updatedBy  = $empTraining['updatedBy'];
            
			$this->db->update('emp_training', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($empTraining){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('emp_training', $empTraining, array('id' => $empTraining->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM emp_training WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM emp_training WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}