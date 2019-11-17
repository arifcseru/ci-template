<?php 
/**
 * Class : SubjectModel (SubjectModel Model)
 * Subject Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class SubjectModel extends CI_Model {
		public $id;
        //public $field1;
		
public $title;
public $description;
public $classDate;
public $startHour;
public $duration;
public $courseId;
public $teacherId;
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
           return $this->db->count_all("subject");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('subject',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('subject',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('subject');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('subject');
            $this->db->close();
            $subjects = $query->result();
            $subject = null;
            if (sizeOf($subjects)) {
                $subject = $subjects[0];
            }
            return $subject;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('subject');
            $this->db->close();
            $subjects = $query->result();
            $subject = null;
            if (sizeOf($subjects)) {
                $subject = $subjects[0];
            }
            return $subject;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('subject');
            $this->db->close();
            return $query->result();
        }

        public function create($subject) {
			$this->load->database();
			//$this->id    = $subject['id']; 
			//$this->field1    = $subject['field1']; 
			$this->title    = $subject['title']; 
$this->description    = $subject['description']; 
$this->classDate    = $subject['classDate']; 
$this->startHour    = $subject['startHour']; 
$this->duration    = $subject['duration']; 
$this->courseId    = $subject['courseId']; 
$this->teacherId    = $subject['teacherId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $subject['createdBy'];
			$this->updatedBy  = $subject['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('subject', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($subject){
			$this->load->database();
			$this->id    = $subject['id'];
			
			//$this->field1    = $entity['field1'];
			$this->title    = $subject['title']; 
$this->description    = $subject['description']; 
$this->classDate    = $subject['classDate']; 
$this->startHour    = $subject['startHour']; 
$this->duration    = $subject['duration']; 
$this->courseId    = $subject['courseId']; 
$this->teacherId    = $subject['teacherId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $subject['createdBy'];
            $this->updatedBy  = $subject['updatedBy'];
            
			$this->db->update('subject', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($subject){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('subject', $subject, array('id' => $subject->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM subject WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM subject WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}