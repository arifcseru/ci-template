<?php 
/**
 * Class : TrainingInfoModel (TrainingInfoModel Model)
 * Training Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class TrainingInfoModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $courseId;
public $shortCode;
public $description;
public $supervisorId;
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
           return $this->db->count_all("training_info");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('training_info',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('training_info',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('training_info');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('training_info');
            $this->db->close();
            $trainingInfos = $query->result();
            $trainingInfo = null;
            if (sizeOf($trainingInfos)) {
                $trainingInfo = $trainingInfos[0];
            }
            return $trainingInfo;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('training_info');
            $this->db->close();
            $trainingInfos = $query->result();
            $trainingInfo = null;
            if (sizeOf($trainingInfos)) {
                $trainingInfo = $trainingInfos[0];
            }
            return $trainingInfo;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('training_info');
            $this->db->close();
            return $query->result();
        }

        public function create($trainingInfo) {
			$this->load->database();
			//$this->id    = $trainingInfo['id']; 
			//$this->field1    = $trainingInfo['field1']; 
			$this->employeeId    = $trainingInfo['employeeId']; 
$this->courseId    = $trainingInfo['courseId']; 
$this->shortCode    = $trainingInfo['shortCode']; 
$this->description    = $trainingInfo['description']; 
$this->supervisorId    = $trainingInfo['supervisorId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $trainingInfo['createdBy'];
			$this->updatedBy  = $trainingInfo['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('training_info', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($trainingInfo){
			$this->load->database();
			$this->id    = $trainingInfo['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $trainingInfo['employeeId']; 
$this->courseId    = $trainingInfo['courseId']; 
$this->shortCode    = $trainingInfo['shortCode']; 
$this->description    = $trainingInfo['description']; 
$this->supervisorId    = $trainingInfo['supervisorId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $trainingInfo['createdBy'];
            $this->updatedBy  = $trainingInfo['updatedBy'];
            
			$this->db->update('training_info', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($trainingInfo){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('training_info', $trainingInfo, array('id' => $trainingInfo->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM training_info WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM training_info WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}