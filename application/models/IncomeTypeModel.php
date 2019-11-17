<?php 
/**
 * Class : IncomeTypeModel (IncomeTypeModel Model)
 * Income Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class IncomeTypeModel extends CI_Model {
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
           return $this->db->count_all("income_type");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('income_type',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('income_type',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('income_type');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('income_type');
            $this->db->close();
            $incomeTypes = $query->result();
            $incomeType = null;
            if (sizeOf($incomeTypes)) {
                $incomeType = $incomeTypes[0];
            }
            return $incomeType;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('income_type');
            $this->db->close();
            $incomeTypes = $query->result();
            $incomeType = null;
            if (sizeOf($incomeTypes)) {
                $incomeType = $incomeTypes[0];
            }
            return $incomeType;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('income_type');
            $this->db->close();
            return $query->result();
        }

        public function create($incomeType) {
			$this->load->database();
			//$this->id    = $incomeType['id']; 
			//$this->field1    = $incomeType['field1']; 
			$this->name    = $incomeType['name']; 
$this->description    = $incomeType['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $incomeType['createdBy'];
			$this->updatedBy  = $incomeType['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('income_type', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($incomeType){
			$this->load->database();
			$this->id    = $incomeType['id'];
			
			//$this->field1    = $entity['field1'];
			$this->name    = $incomeType['name']; 
$this->description    = $incomeType['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $incomeType['createdBy'];
            $this->updatedBy  = $incomeType['updatedBy'];
            
			$this->db->update('income_type', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($incomeType){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('income_type', $incomeType, array('id' => $incomeType->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM income_type WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM income_type WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}