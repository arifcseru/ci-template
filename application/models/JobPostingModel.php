<?php 
/**
 * Class : JobPostingModel (JobPostingModel Model)
 * Job Posting Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class JobPostingModel extends CI_Model {
		public $id;
        //public $field1;
		
public $positionName;
public $shortCode;
public $description;
public $jobPositionId;
public $postingDate;
public $expireDate;
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
           return $this->db->count_all("job_posting");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('job_posting',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('job_posting',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('job_posting');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('job_posting');
            $this->db->close();
            $jobPostings = $query->result();
            $jobPosting = null;
            if (sizeOf($jobPostings)) {
                $jobPosting = $jobPostings[0];
            }
            return $jobPosting;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('job_posting');
            $this->db->close();
            $jobPostings = $query->result();
            $jobPosting = null;
            if (sizeOf($jobPostings)) {
                $jobPosting = $jobPostings[0];
            }
            return $jobPosting;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('job_posting');
            $this->db->close();
            return $query->result();
        }

        public function create($jobPosting) {
			$this->load->database();
			//$this->id    = $jobPosting['id']; 
			//$this->field1    = $jobPosting['field1']; 
			$this->positionName    = $jobPosting['positionName']; 
$this->shortCode    = $jobPosting['shortCode']; 
$this->description    = $jobPosting['description']; 
$this->jobPositionId    = $jobPosting['jobPositionId']; 
$this->postingDate    = $jobPosting['postingDate']; 
$this->expireDate    = $jobPosting['expireDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $jobPosting['createdBy'];
			$this->updatedBy  = $jobPosting['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('job_posting', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($jobPosting){
			$this->load->database();
			$this->id    = $jobPosting['id'];
			
			//$this->field1    = $entity['field1'];
			$this->positionName    = $jobPosting['positionName']; 
$this->shortCode    = $jobPosting['shortCode']; 
$this->description    = $jobPosting['description']; 
$this->jobPositionId    = $jobPosting['jobPositionId']; 
$this->postingDate    = $jobPosting['postingDate']; 
$this->expireDate    = $jobPosting['expireDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $jobPosting['createdBy'];
            $this->updatedBy  = $jobPosting['updatedBy'];
            
			$this->db->update('job_posting', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($jobPosting){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('job_posting', $jobPosting, array('id' => $jobPosting->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM job_posting WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM job_posting WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}