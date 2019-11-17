<?php 
/**
 * Class : ExpepnseTypeModel (ExpepnseTypeModel Model)
 * Expepnse Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ExpepnseTypeModel extends CI_Model {
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
           return $this->db->count_all("expepnse_type");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('expepnse_type',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('expepnse_type',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('expepnse_type');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('expepnse_type');
            $this->db->close();
            $expepnseTypes = $query->result();
            $expepnseType = null;
            if (sizeOf($expepnseTypes)) {
                $expepnseType = $expepnseTypes[0];
            }
            return $expepnseType;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('expepnse_type');
            $this->db->close();
            $expepnseTypes = $query->result();
            $expepnseType = null;
            if (sizeOf($expepnseTypes)) {
                $expepnseType = $expepnseTypes[0];
            }
            return $expepnseType;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('expepnse_type');
            $this->db->close();
            return $query->result();
        }

        public function create($expepnseType) {
			$this->load->database();
			//$this->id    = $expepnseType['id']; 
			//$this->field1    = $expepnseType['field1']; 
			$this->name    = $expepnseType['name']; 
$this->description    = $expepnseType['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $expepnseType['createdBy'];
			$this->updatedBy  = $expepnseType['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('expepnse_type', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($expepnseType){
			$this->load->database();
			$this->id    = $expepnseType['id'];
			
			//$this->field1    = $entity['field1'];
			$this->name    = $expepnseType['name']; 
$this->description    = $expepnseType['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $expepnseType['createdBy'];
            $this->updatedBy  = $expepnseType['updatedBy'];
            
			$this->db->update('expepnse_type', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($expepnseType){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('expepnse_type', $expepnseType, array('id' => $expepnseType->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM expepnse_type WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM expepnse_type WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}