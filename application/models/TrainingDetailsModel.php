<?php 
/**
 * Class : TrainingDetailsModel (TrainingDetailsModel Model)
 * Training Details Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class TrainingDetailsModel extends CI_Model {
		public $id;
        //public $field1;
		
public $subjectId;
public $hourNo;
public $classDate;
public $isAttend;
public $remarks;
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
           return $this->db->count_all("training_details");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('training_details',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('training_details',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('training_details');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('training_details');
            $this->db->close();
            $trainingDetailss = $query->result();
            $trainingDetails = null;
            if (sizeOf($trainingDetailss)) {
                $trainingDetails = $trainingDetailss[0];
            }
            return $trainingDetails;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('training_details');
            $this->db->close();
            $trainingDetailss = $query->result();
            $trainingDetails = null;
            if (sizeOf($trainingDetailss)) {
                $trainingDetails = $trainingDetailss[0];
            }
            return $trainingDetails;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('training_details');
            $this->db->close();
            return $query->result();
        }

        public function create($trainingDetails) {
			$this->load->database();
			//$this->id    = $trainingDetails['id']; 
			//$this->field1    = $trainingDetails['field1']; 
			$this->subjectId    = $trainingDetails['subjectId']; 
$this->hourNo    = $trainingDetails['hourNo']; 
$this->classDate    = $trainingDetails['classDate']; 
$this->isAttend    = $trainingDetails['isAttend']; 
$this->remarks    = $trainingDetails['remarks']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $trainingDetails['createdBy'];
			$this->updatedBy  = $trainingDetails['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('training_details', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($trainingDetails){
			$this->load->database();
			$this->id    = $trainingDetails['id'];
			
			//$this->field1    = $entity['field1'];
			$this->subjectId    = $trainingDetails['subjectId']; 
$this->hourNo    = $trainingDetails['hourNo']; 
$this->classDate    = $trainingDetails['classDate']; 
$this->isAttend    = $trainingDetails['isAttend']; 
$this->remarks    = $trainingDetails['remarks']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $trainingDetails['createdBy'];
            $this->updatedBy  = $trainingDetails['updatedBy'];
            
			$this->db->update('training_details', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($trainingDetails){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('training_details', $trainingDetails, array('id' => $trainingDetails->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM training_details WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM training_details WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}