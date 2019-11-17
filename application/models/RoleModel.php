<?php 
/**
 * Class : RoleModel (RoleModel Model)
 * Role Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class RoleModel extends CI_Model {
		public $id;
        //public $field1;
		
public $name;
public $description;
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
           return $this->db->count_all("role");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('role',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('role',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('role');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('role');
            $this->db->close();
            $roles = $query->result();
            $role = null;
            if (sizeOf($roles)) {
                $role = $roles[0];
            }
            return $role;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('role');
            $this->db->close();
            $roles = $query->result();
            $role = null;
            if (sizeOf($roles)) {
                $role = $roles[0];
            }
            return $role;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('role');
            $this->db->close();
            return $query->result();
        }

        public function create($role) {
			$this->load->database();
			//$this->id    = $role['id']; 
			//$this->field1    = $role['field1']; 
			$this->name    = $role['name']; 
$this->description    = $role['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $role['createdBy'];
			$this->updatedBy  = $role['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('role', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($role){
			$this->load->database();
			$this->id    = $role['id'];
			
			//$this->field1    = $entity['field1'];
			$this->name    = $role['name']; 
$this->description    = $role['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $role['createdBy'];
            $this->updatedBy  = $role['updatedBy'];
            
			$this->db->update('role', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($role){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('role', $role, array('id' => $role->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM role WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM role WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}