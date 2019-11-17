<?php 
/**
 * Class : BranchModel (BranchModel Model)
 * Branch Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class BranchModel extends CI_Model {
		public $id;
        //public $field1;
		
public $companyProfileId;
public $name;
public $address;
public $establishedDate;
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
           return $this->db->count_all("branch");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('branch',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('branch',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('branch');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('branch');
            $this->db->close();
            $branchs = $query->result();
            $branch = null;
            if (sizeOf($branchs)) {
                $branch = $branchs[0];
            }
            return $branch;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('branch');
            $this->db->close();
            $branchs = $query->result();
            $branch = null;
            if (sizeOf($branchs)) {
                $branch = $branchs[0];
            }
            return $branch;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('branch');
            $this->db->close();
            return $query->result();
        }

        public function create($branch) {
			$this->load->database();
			//$this->id    = $branch['id']; 
			//$this->field1    = $branch['field1']; 
			$this->companyProfileId    = $branch['companyProfileId']; 
$this->name    = $branch['name']; 
$this->address    = $branch['address']; 
$this->establishedDate    = $branch['establishedDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $branch['createdBy'];
			$this->updatedBy  = $branch['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('branch', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($branch){
			$this->load->database();
			$this->id    = $branch['id'];
			
			//$this->field1    = $entity['field1'];
			$this->companyProfileId    = $branch['companyProfileId']; 
$this->name    = $branch['name']; 
$this->address    = $branch['address']; 
$this->establishedDate    = $branch['establishedDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $branch['createdBy'];
            $this->updatedBy  = $branch['updatedBy'];
            
			$this->db->update('branch', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($branch){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('branch', $branch, array('id' => $branch->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM branch WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM branch WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}