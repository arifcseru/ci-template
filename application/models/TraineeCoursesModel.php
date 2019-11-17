<?php 
/**
 * Class : TraineeCoursesModel (TraineeCoursesModel Model)
 * Trainee Courses Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class TraineeCoursesModel extends CI_Model {
		public $id;
        //public $field1;
		
public $courseId;
public $applicantInfoId;
public $shortCode;
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
           return $this->db->count_all("trainee_courses");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('trainee_courses',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('trainee_courses',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('trainee_courses');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('trainee_courses');
            $this->db->close();
            $traineeCoursess = $query->result();
            $traineeCourses = null;
            if (sizeOf($traineeCoursess)) {
                $traineeCourses = $traineeCoursess[0];
            }
            return $traineeCourses;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('trainee_courses');
            $this->db->close();
            $traineeCoursess = $query->result();
            $traineeCourses = null;
            if (sizeOf($traineeCoursess)) {
                $traineeCourses = $traineeCoursess[0];
            }
            return $traineeCourses;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('trainee_courses');
            $this->db->close();
            return $query->result();
        }

        public function create($traineeCourses) {
			$this->load->database();
			//$this->id    = $traineeCourses['id']; 
			//$this->field1    = $traineeCourses['field1']; 
			$this->courseId    = $traineeCourses['courseId']; 
$this->applicantInfoId    = $traineeCourses['applicantInfoId']; 
$this->shortCode    = $traineeCourses['shortCode']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $traineeCourses['createdBy'];
			$this->updatedBy  = $traineeCourses['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('trainee_courses', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($traineeCourses){
			$this->load->database();
			$this->id    = $traineeCourses['id'];
			
			//$this->field1    = $entity['field1'];
			$this->courseId    = $traineeCourses['courseId']; 
$this->applicantInfoId    = $traineeCourses['applicantInfoId']; 
$this->shortCode    = $traineeCourses['shortCode']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $traineeCourses['createdBy'];
            $this->updatedBy  = $traineeCourses['updatedBy'];
            
			$this->db->update('trainee_courses', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($traineeCourses){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('trainee_courses', $traineeCourses, array('id' => $traineeCourses->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM trainee_courses WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM trainee_courses WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}