<?php 
/**
 * Class : CourseModel (CourseModel Model)
 * Course Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class CourseModel extends CI_Model {
		public $id;
        //public $field1;
		
public $shortCode;
public $description;
public $applicantInfoId;
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
           return $this->db->count_all("course");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('course',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('course',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('course');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('course');
            $this->db->close();
            $courses = $query->result();
            $course = null;
            if (sizeOf($courses)) {
                $course = $courses[0];
            }
            return $course;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('course');
            $this->db->close();
            $courses = $query->result();
            $course = null;
            if (sizeOf($courses)) {
                $course = $courses[0];
            }
            return $course;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('course');
            $this->db->close();
            return $query->result();
        }

        public function create($course) {
			$this->load->database();
			//$this->id    = $course['id']; 
			//$this->field1    = $course['field1']; 
			$this->shortCode    = $course['shortCode']; 
$this->description    = $course['description']; 
$this->applicantInfoId    = $course['applicantInfoId']; 
$this->supervisorId    = $course['supervisorId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $course['createdBy'];
			$this->updatedBy  = $course['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('course', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($course){
			$this->load->database();
			$this->id    = $course['id'];
			
			//$this->field1    = $entity['field1'];
			$this->shortCode    = $course['shortCode']; 
$this->description    = $course['description']; 
$this->applicantInfoId    = $course['applicantInfoId']; 
$this->supervisorId    = $course['supervisorId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $course['createdBy'];
            $this->updatedBy  = $course['updatedBy'];
            
			$this->db->update('course', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($course){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('course', $course, array('id' => $course->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM course WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM course WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}