<?php 
/**
 * Class : JobApplicationModel (JobApplicationModel Model)
 * Job Application Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class JobApplicationModel extends CI_Model {
		public $id;
        //public $field1;
		
public $jobPositionId;
public $firstName;
public $lastName;
public $applicantPhoneNo;
public $email;
public $expectedSalary;
public $message;
public $skills;
public $resumeFileAddress;
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
           return $this->db->count_all("job_application");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('job_application',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('job_application',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('job_application');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('job_application');
            $this->db->close();
            $jobApplications = $query->result();
            $jobApplication = null;
            if (sizeOf($jobApplications)) {
                $jobApplication = $jobApplications[0];
            }
            return $jobApplication;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('job_application');
            $this->db->close();
            $jobApplications = $query->result();
            $jobApplication = null;
            if (sizeOf($jobApplications)) {
                $jobApplication = $jobApplications[0];
            }
            return $jobApplication;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('job_application');
            $this->db->close();
            return $query->result();
        }

        public function create($jobApplication) {
			$this->load->database();
			//$this->id    = $jobApplication['id']; 
			//$this->field1    = $jobApplication['field1']; 
			$this->jobPositionId    = $jobApplication['jobPositionId']; 
$this->firstName    = $jobApplication['firstName']; 
$this->lastName    = $jobApplication['lastName']; 
$this->applicantPhoneNo    = $jobApplication['applicantPhoneNo']; 
$this->email    = $jobApplication['email']; 
$this->expectedSalary    = $jobApplication['expectedSalary']; 
$this->message    = $jobApplication['message']; 
$this->skills    = $jobApplication['skills']; 
$this->resumeFileAddress    = $jobApplication['resumeFileAddress']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $jobApplication['createdBy'];
			$this->updatedBy  = $jobApplication['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('job_application', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($jobApplication){
			$this->load->database();
			$this->id    = $jobApplication['id'];
			
			//$this->field1    = $entity['field1'];
			$this->jobPositionId    = $jobApplication['jobPositionId']; 
$this->firstName    = $jobApplication['firstName']; 
$this->lastName    = $jobApplication['lastName']; 
$this->applicantPhoneNo    = $jobApplication['applicantPhoneNo']; 
$this->email    = $jobApplication['email']; 
$this->expectedSalary    = $jobApplication['expectedSalary']; 
$this->message    = $jobApplication['message']; 
$this->skills    = $jobApplication['skills']; 
$this->resumeFileAddress    = $jobApplication['resumeFileAddress']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $jobApplication['createdBy'];
            $this->updatedBy  = $jobApplication['updatedBy'];
            
			$this->db->update('job_application', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($jobApplication){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('job_application', $jobApplication, array('id' => $jobApplication->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM job_application WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM job_application WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}