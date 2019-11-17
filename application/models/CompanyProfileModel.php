<?php 
/**
 * Class : CompanyProfileModel (CompanyProfileModel Model)
 * Company Profile Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class CompanyProfileModel extends CI_Model {
		public $id;
        //public $field1;
		
public $userId;
public $name;
public $address;
public $establishedDate;
public $email;
public $authorName;
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
           return $this->db->count_all("company_profile");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('company_profile',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('company_profile',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('company_profile');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('company_profile');
            $this->db->close();
            $companyProfiles = $query->result();
            $companyProfile = null;
            if (sizeOf($companyProfiles)) {
                $companyProfile = $companyProfiles[0];
            }
            return $companyProfile;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('company_profile');
            $this->db->close();
            $companyProfiles = $query->result();
            $companyProfile = null;
            if (sizeOf($companyProfiles)) {
                $companyProfile = $companyProfiles[0];
            }
            return $companyProfile;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('company_profile');
            $this->db->close();
            return $query->result();
        }

        public function create($companyProfile) {
			$this->load->database();
			//$this->id    = $companyProfile['id']; 
			//$this->field1    = $companyProfile['field1']; 
			$this->userId    = $companyProfile['userId']; 
$this->name    = $companyProfile['name']; 
$this->address    = $companyProfile['address']; 
$this->establishedDate    = $companyProfile['establishedDate']; 
$this->email    = $companyProfile['email']; 
$this->authorName    = $companyProfile['authorName']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $companyProfile['createdBy'];
			$this->updatedBy  = $companyProfile['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('company_profile', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($companyProfile){
			$this->load->database();
			$this->id    = $companyProfile['id'];
			
			//$this->field1    = $entity['field1'];
			$this->userId    = $companyProfile['userId']; 
$this->name    = $companyProfile['name']; 
$this->address    = $companyProfile['address']; 
$this->establishedDate    = $companyProfile['establishedDate']; 
$this->email    = $companyProfile['email']; 
$this->authorName    = $companyProfile['authorName']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $companyProfile['createdBy'];
            $this->updatedBy  = $companyProfile['updatedBy'];
            
			$this->db->update('company_profile', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($companyProfile){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('company_profile', $companyProfile, array('id' => $companyProfile->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM company_profile WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM company_profile WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}