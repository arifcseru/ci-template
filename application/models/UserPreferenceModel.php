<?php 
/**
 * Class : UserPreferenceModel (UserPreferenceModel Model)
 * User Preference Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class UserPreferenceModel extends CI_Model {
		public $id;
        //public $field1;
		
public $applicationTitle;
public $metaTags;
public $userId;
public $activeCompanyId;
public $language;
public $activeRole;
public $showNotification;
public $showEmail;
public $showTask;
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
           return $this->db->count_all("user_preference");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('user_preference',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('user_preference',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('user_preference');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('user_preference');
            $this->db->close();
            $userPreferences = $query->result();
            $userPreference = null;
            if (sizeOf($userPreferences)) {
                $userPreference = $userPreferences[0];
            }
            return $userPreference;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('user_preference');
            $this->db->close();
            $userPreferences = $query->result();
            $userPreference = null;
            if (sizeOf($userPreferences)) {
                $userPreference = $userPreferences[0];
            }
            return $userPreference;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('user_preference');
            $this->db->close();
            return $query->result();
        }

        public function create($userPreference) {
			$this->load->database();
			//$this->id    = $userPreference['id']; 
			//$this->field1    = $userPreference['field1']; 
			$this->applicationTitle    = $userPreference['applicationTitle']; 
$this->metaTags    = $userPreference['metaTags']; 
$this->userId    = $userPreference['userId']; 
$this->activeCompanyId    = $userPreference['activeCompanyId']; 
$this->language    = $userPreference['language']; 
$this->activeRole    = $userPreference['activeRole']; 
$this->showNotification    = $userPreference['showNotification']; 
$this->showEmail    = $userPreference['showEmail']; 
$this->showTask    = $userPreference['showTask']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $userPreference['createdBy'];
			$this->updatedBy  = $userPreference['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('user_preference', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($userPreference){
			$this->load->database();
			$this->id    = $userPreference['id'];
			
			//$this->field1    = $entity['field1'];
			$this->applicationTitle    = $userPreference['applicationTitle']; 
$this->metaTags    = $userPreference['metaTags']; 
$this->userId    = $userPreference['userId']; 
$this->activeCompanyId    = $userPreference['activeCompanyId']; 
$this->language    = $userPreference['language']; 
$this->activeRole    = $userPreference['activeRole']; 
$this->showNotification    = $userPreference['showNotification']; 
$this->showEmail    = $userPreference['showEmail']; 
$this->showTask    = $userPreference['showTask']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $userPreference['createdBy'];
            $this->updatedBy  = $userPreference['updatedBy'];
            
			$this->db->update('user_preference', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($userPreference){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('user_preference', $userPreference, array('id' => $userPreference->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM user_preference WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM user_preference WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}