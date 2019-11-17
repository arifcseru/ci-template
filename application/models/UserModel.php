<?php 
/**
 * Class : UserModel (UserModel Model)
 * User Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class UserModel extends CI_Model {
		public $id;
        //public $field1;
		
public $fullName;
public $email;
public $password;
public $confirmPassword;
public $roleId;
public $mobileNumber;
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
           return $this->db->count_all("user");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('user',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('user',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('user');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('user');
            $this->db->close();
            $users = $query->result();
            $user = null;
            if (sizeOf($users)) {
                $user = $users[0];
            }
            return $user;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('user');
            $this->db->close();
            $users = $query->result();
            $user = null;
            if (sizeOf($users)) {
                $user = $users[0];
            }
            return $user;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('user');
            $this->db->close();
            return $query->result();
        }

        public function create($user) {
			$this->load->database();
			//$this->id    = $user['id']; 
			//$this->field1    = $user['field1']; 
			$this->fullName    = $user['fullName']; 
$this->email    = $user['email']; 
$this->password    = $user['password']; 
$this->confirmPassword    = $user['confirmPassword']; 
$this->roleId    = $user['roleId']; 
$this->mobileNumber    = $user['mobileNumber']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $user['createdBy'];
			$this->updatedBy  = $user['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('user', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($user){
			$this->load->database();
			$this->id    = $user['id'];
			
			//$this->field1    = $entity['field1'];
			$this->fullName    = $user['fullName']; 
$this->email    = $user['email']; 
$this->password    = $user['password']; 
$this->confirmPassword    = $user['confirmPassword']; 
$this->roleId    = $user['roleId']; 
$this->mobileNumber    = $user['mobileNumber']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $user['createdBy'];
            $this->updatedBy  = $user['updatedBy'];
            
			$this->db->update('user', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($user){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('user', $user, array('id' => $user->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM user WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM user WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}