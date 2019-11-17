<?php 
/**
 * Class : DepartmentModel (DepartmentModel Model)
 * Department Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class DepartmentModel extends CI_Model {
		public $id;
        //public $field1;
		
public $branchId;
public $name;
public $shortCode;
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
           return $this->db->count_all("department");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('department',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('department',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('department');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('department');
            $this->db->close();
            $departments = $query->result();
            $department = null;
            if (sizeOf($departments)) {
                $department = $departments[0];
            }
            return $department;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('department');
            $this->db->close();
            $departments = $query->result();
            $department = null;
            if (sizeOf($departments)) {
                $department = $departments[0];
            }
            return $department;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('department');
            $this->db->close();
            return $query->result();
        }

        public function create($department) {
			$this->load->database();
			//$this->id    = $department['id']; 
			//$this->field1    = $department['field1']; 
			$this->branchId    = $department['branchId']; 
$this->name    = $department['name']; 
$this->shortCode    = $department['shortCode']; 
$this->description    = $department['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $department['createdBy'];
			$this->updatedBy  = $department['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('department', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($department){
			$this->load->database();
			$this->id    = $department['id'];
			
			//$this->field1    = $entity['field1'];
			$this->branchId    = $department['branchId']; 
$this->name    = $department['name']; 
$this->shortCode    = $department['shortCode']; 
$this->description    = $department['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $department['createdBy'];
            $this->updatedBy  = $department['updatedBy'];
            
			$this->db->update('department', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($department){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('department', $department, array('id' => $department->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM department WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM department WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}