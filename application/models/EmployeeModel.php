<?php 
/**
 * Class : EmployeeModel (EmployeeModel Model)
 * Employee Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmployeeModel extends CI_Model {
		public $id;
        //public $field1;
		
public $companyProfileId;
public $applicantId;
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
public $email;
public $managerId;
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
           return $this->db->count_all("employee");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('employee',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('employee');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('employee');
            $this->db->close();
            $employees = $query->result();
            $employee = null;
            if (sizeOf($employees)) {
                $employee = $employees[0];
            }
            return $employee;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee');
            $this->db->close();
            $employees = $query->result();
            $employee = null;
            if (sizeOf($employees)) {
                $employee = $employees[0];
            }
            return $employee;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('employee');
            $this->db->close();
            return $query->result();
        }

        public function create($employee) {
			$this->load->database();
			//$this->id    = $employee['id']; 
			//$this->field1    = $employee['field1']; 
			$this->companyProfileId    = $employee['companyProfileId']; 
$this->applicantId    = $employee['applicantId']; 
$this->firstName    = $employee['firstName']; 
$this->lastName    = $employee['lastName']; 
$this->fatherName    = $employee['fatherName']; 
$this->motherName    = $employee['motherName']; 
$this->spouseName    = $employee['spouseName']; 
$this->nationality    = $employee['nationality']; 
$this->gender    = $employee['gender']; 
$this->age    = $employee['age']; 
$this->profilePic    = $employee['profilePic']; 
$this->signature    = $employee['signature']; 
$this->nidImage    = $employee['nidImage']; 
$this->eduQualification    = $employee['eduQualification']; 
$this->bloodGroup    = $employee['bloodGroup']; 
$this->religion    = $employee['religion']; 
$this->address    = $employee['address']; 
$this->streetAddress    = $employee['streetAddress']; 
$this->district    = $employee['district']; 
$this->policeStation    = $employee['policeStation']; 
$this->postCode    = $employee['postCode']; 
$this->chairmanName    = $employee['chairmanName']; 
$this->contactNo    = $employee['contactNo']; 
$this->email    = $employee['email']; 
$this->managerId    = $employee['managerId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $employee['createdBy'];
			$this->updatedBy  = $employee['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('employee', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($employee){
			$this->load->database();
			$this->id    = $employee['id'];
			
			//$this->field1    = $entity['field1'];
			$this->companyProfileId    = $employee['companyProfileId']; 
$this->applicantId    = $employee['applicantId']; 
$this->firstName    = $employee['firstName']; 
$this->lastName    = $employee['lastName']; 
$this->fatherName    = $employee['fatherName']; 
$this->motherName    = $employee['motherName']; 
$this->spouseName    = $employee['spouseName']; 
$this->nationality    = $employee['nationality']; 
$this->gender    = $employee['gender']; 
$this->age    = $employee['age']; 
$this->profilePic    = $employee['profilePic']; 
$this->signature    = $employee['signature']; 
$this->nidImage    = $employee['nidImage']; 
$this->eduQualification    = $employee['eduQualification']; 
$this->bloodGroup    = $employee['bloodGroup']; 
$this->religion    = $employee['religion']; 
$this->address    = $employee['address']; 
$this->streetAddress    = $employee['streetAddress']; 
$this->district    = $employee['district']; 
$this->policeStation    = $employee['policeStation']; 
$this->postCode    = $employee['postCode']; 
$this->chairmanName    = $employee['chairmanName']; 
$this->contactNo    = $employee['contactNo']; 
$this->email    = $employee['email']; 
$this->managerId    = $employee['managerId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $employee['createdBy'];
            $this->updatedBy  = $employee['updatedBy'];
            
			$this->db->update('employee', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($employee){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('employee', $employee, array('id' => $employee->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM employee WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM employee WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}