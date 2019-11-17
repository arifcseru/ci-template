<?php 
/**
 * Class : InterviewInfoModel (InterviewInfoModel Model)
 * Interview Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class InterviewInfoModel extends CI_Model {
		public $id;
        //public $field1;
		
public $applicantInfoId;
public $interviewType;
public $shortCode;
public $totalMarks;
public $obtainedMarks;
public $description;
public $interviewerId;
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
           return $this->db->count_all("interview_info");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('interview_info',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('interview_info',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('interview_info');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('interview_info');
            $this->db->close();
            $interviewInfos = $query->result();
            $interviewInfo = null;
            if (sizeOf($interviewInfos)) {
                $interviewInfo = $interviewInfos[0];
            }
            return $interviewInfo;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('interview_info');
            $this->db->close();
            $interviewInfos = $query->result();
            $interviewInfo = null;
            if (sizeOf($interviewInfos)) {
                $interviewInfo = $interviewInfos[0];
            }
            return $interviewInfo;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('interview_info');
            $this->db->close();
            return $query->result();
        }

        public function create($interviewInfo) {
			$this->load->database();
			//$this->id    = $interviewInfo['id']; 
			//$this->field1    = $interviewInfo['field1']; 
			$this->applicantInfoId    = $interviewInfo['applicantInfoId']; 
$this->interviewType    = $interviewInfo['interviewType']; 
$this->shortCode    = $interviewInfo['shortCode']; 
$this->totalMarks    = $interviewInfo['totalMarks']; 
$this->obtainedMarks    = $interviewInfo['obtainedMarks']; 
$this->description    = $interviewInfo['description']; 
$this->interviewerId    = $interviewInfo['interviewerId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $interviewInfo['createdBy'];
			$this->updatedBy  = $interviewInfo['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('interview_info', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($interviewInfo){
			$this->load->database();
			$this->id    = $interviewInfo['id'];
			
			//$this->field1    = $entity['field1'];
			$this->applicantInfoId    = $interviewInfo['applicantInfoId']; 
$this->interviewType    = $interviewInfo['interviewType']; 
$this->shortCode    = $interviewInfo['shortCode']; 
$this->totalMarks    = $interviewInfo['totalMarks']; 
$this->obtainedMarks    = $interviewInfo['obtainedMarks']; 
$this->description    = $interviewInfo['description']; 
$this->interviewerId    = $interviewInfo['interviewerId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $interviewInfo['createdBy'];
            $this->updatedBy  = $interviewInfo['updatedBy'];
            
			$this->db->update('interview_info', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($interviewInfo){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('interview_info', $interviewInfo, array('id' => $interviewInfo->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM interview_info WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM interview_info WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}