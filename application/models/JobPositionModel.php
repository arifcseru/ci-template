<?php 
/**
 * Class : JobPositionModel (JobPositionModel Model)
 * Job Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class JobPositionModel extends CI_Model {
		public $id;
        //public $field1;
		
public $departmentId;
public $positionName;
public $shortCode;
public $description;
public $isActive;
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
           return $this->db->count_all("job_position");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('job_position',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('job_position',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('job_position');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('job_position');
            $this->db->close();
            $jobPositions = $query->result();
            $jobPosition = null;
            if (sizeOf($jobPositions)) {
                $jobPosition = $jobPositions[0];
            }
            return $jobPosition;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('job_position');
            $this->db->close();
            $jobPositions = $query->result();
            $jobPosition = null;
            if (sizeOf($jobPositions)) {
                $jobPosition = $jobPositions[0];
            }
            return $jobPosition;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('job_position');
            $this->db->close();
            return $query->result();
        }

        public function create($jobPosition) {
			$this->load->database();
			//$this->id    = $jobPosition['id']; 
			//$this->field1    = $jobPosition['field1']; 
			$this->departmentId    = $jobPosition['departmentId']; 
$this->positionName    = $jobPosition['positionName']; 
$this->shortCode    = $jobPosition['shortCode']; 
$this->description    = $jobPosition['description']; 
$this->isActive    = $jobPosition['isActive']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $jobPosition['createdBy'];
			$this->updatedBy  = $jobPosition['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('job_position', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($jobPosition){
			$this->load->database();
			$this->id    = $jobPosition['id'];
			
			//$this->field1    = $entity['field1'];
			$this->departmentId    = $jobPosition['departmentId']; 
$this->positionName    = $jobPosition['positionName']; 
$this->shortCode    = $jobPosition['shortCode']; 
$this->description    = $jobPosition['description']; 
$this->isActive    = $jobPosition['isActive']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $jobPosition['createdBy'];
            $this->updatedBy  = $jobPosition['updatedBy'];
            
			$this->db->update('job_position', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($jobPosition){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('job_position', $jobPosition, array('id' => $jobPosition->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM job_position WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM job_position WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}