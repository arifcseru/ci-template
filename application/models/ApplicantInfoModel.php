<?php 
/**
 * Class : ApplicantInfoModel (ApplicantInfoModel Model)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ApplicantInfoModel extends CI_Model {
		public $id;
        //public $field1;
		
public $jobApplicationId;
public $enrollmentId;
public $firstName;
public $lastName;
public $fatherName;
public $motherName;
public $spouseName;
public $nationality;
public $gender;
public $age;
public $profilePic;
public $signature;
public $nidImage;
public $eduQualification;
public $bloodGroup;
public $religion;
public $address;
public $streetAddress;
public $district;
public $policeStation;
public $postCode;
public $chairmanName;
public $contactNo;
public $postingId;
public $email;
public $password;
public $isJoined;
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
           return $this->db->count_all("applicant_info");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('applicant_info',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('applicant_info',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('applicant_info');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('applicant_info');
            $this->db->close();
            $applicantInfos = $query->result();
            $applicantInfo = null;
            if (sizeOf($applicantInfos)) {
                $applicantInfo = $applicantInfos[0];
            }
            return $applicantInfo;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('applicant_info');
            $this->db->close();
            $applicantInfos = $query->result();
            $applicantInfo = null;
            if (sizeOf($applicantInfos)) {
                $applicantInfo = $applicantInfos[0];
            }
            return $applicantInfo;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('applicant_info');
            $this->db->close();
            return $query->result();
        }

        public function create($applicantInfo) {
			$this->load->database();
			//$this->id    = $applicantInfo['id']; 
			//$this->field1    = $applicantInfo['field1']; 
			$this->jobApplicationId    = $applicantInfo['jobApplicationId']; 
$this->enrollmentId    = $applicantInfo['enrollmentId']; 
$this->firstName    = $applicantInfo['firstName']; 
$this->lastName    = $applicantInfo['lastName']; 
$this->fatherName    = $applicantInfo['fatherName']; 
$this->motherName    = $applicantInfo['motherName']; 
$this->spouseName    = $applicantInfo['spouseName']; 
$this->nationality    = $applicantInfo['nationality']; 
$this->gender    = $applicantInfo['gender']; 
$this->age    = $applicantInfo['age']; 
$this->profilePic    = $applicantInfo['profilePic']; 
$this->signature    = $applicantInfo['signature']; 
$this->nidImage    = $applicantInfo['nidImage']; 
$this->eduQualification    = $applicantInfo['eduQualification']; 
$this->bloodGroup    = $applicantInfo['bloodGroup']; 
$this->religion    = $applicantInfo['religion']; 
$this->address    = $applicantInfo['address']; 
$this->streetAddress    = $applicantInfo['streetAddress']; 
$this->district    = $applicantInfo['district']; 
$this->policeStation    = $applicantInfo['policeStation']; 
$this->postCode    = $applicantInfo['postCode']; 
$this->chairmanName    = $applicantInfo['chairmanName']; 
$this->contactNo    = $applicantInfo['contactNo']; 
$this->postingId    = $applicantInfo['postingId']; 
$this->email    = $applicantInfo['email']; 
$this->password    = $applicantInfo['password']; 
$this->isJoined    = $applicantInfo['isJoined']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $applicantInfo['createdBy'];
			$this->updatedBy  = $applicantInfo['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('applicant_info', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($applicantInfo){
			$this->load->database();
			$this->id    = $applicantInfo['id'];
			
			//$this->field1    = $entity['field1'];
			$this->jobApplicationId    = $applicantInfo['jobApplicationId']; 
$this->enrollmentId    = $applicantInfo['enrollmentId']; 
$this->firstName    = $applicantInfo['firstName']; 
$this->lastName    = $applicantInfo['lastName']; 
$this->fatherName    = $applicantInfo['fatherName']; 
$this->motherName    = $applicantInfo['motherName']; 
$this->spouseName    = $applicantInfo['spouseName']; 
$this->nationality    = $applicantInfo['nationality']; 
$this->gender    = $applicantInfo['gender']; 
$this->age    = $applicantInfo['age']; 
$this->profilePic    = $applicantInfo['profilePic']; 
$this->signature    = $applicantInfo['signature']; 
$this->nidImage    = $applicantInfo['nidImage']; 
$this->eduQualification    = $applicantInfo['eduQualification']; 
$this->bloodGroup    = $applicantInfo['bloodGroup']; 
$this->religion    = $applicantInfo['religion']; 
$this->address    = $applicantInfo['address']; 
$this->streetAddress    = $applicantInfo['streetAddress']; 
$this->district    = $applicantInfo['district']; 
$this->policeStation    = $applicantInfo['policeStation']; 
$this->postCode    = $applicantInfo['postCode']; 
$this->chairmanName    = $applicantInfo['chairmanName']; 
$this->contactNo    = $applicantInfo['contactNo']; 
$this->postingId    = $applicantInfo['postingId']; 
$this->email    = $applicantInfo['email']; 
$this->password    = $applicantInfo['password']; 
$this->isJoined    = $applicantInfo['isJoined']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $applicantInfo['createdBy'];
            $this->updatedBy  = $applicantInfo['updatedBy'];
            
			$this->db->update('applicant_info', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($applicantInfo){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('applicant_info', $applicantInfo, array('id' => $applicantInfo->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM applicant_info WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM applicant_info WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}