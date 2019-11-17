<?php 
/**
 * Class : HolidayTypeModel (HolidayTypeModel Model)
 * Holiday Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class HolidayTypeModel extends CI_Model {
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
           return $this->db->count_all("holiday_type");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('holiday_type',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('holiday_type',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('holiday_type');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('holiday_type');
            $this->db->close();
            $holidayTypes = $query->result();
            $holidayType = null;
            if (sizeOf($holidayTypes)) {
                $holidayType = $holidayTypes[0];
            }
            return $holidayType;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('holiday_type');
            $this->db->close();
            $holidayTypes = $query->result();
            $holidayType = null;
            if (sizeOf($holidayTypes)) {
                $holidayType = $holidayTypes[0];
            }
            return $holidayType;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('holiday_type');
            $this->db->close();
            return $query->result();
        }

        public function create($holidayType) {
			$this->load->database();
			//$this->id    = $holidayType['id']; 
			//$this->field1    = $holidayType['field1']; 
			$this->name    = $holidayType['name']; 
$this->description    = $holidayType['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $holidayType['createdBy'];
			$this->updatedBy  = $holidayType['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('holiday_type', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($holidayType){
			$this->load->database();
			$this->id    = $holidayType['id'];
			
			//$this->field1    = $entity['field1'];
			$this->name    = $holidayType['name']; 
$this->description    = $holidayType['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $holidayType['createdBy'];
            $this->updatedBy  = $holidayType['updatedBy'];
            
			$this->db->update('holiday_type', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($holidayType){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('holiday_type', $holidayType, array('id' => $holidayType->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM holiday_type WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM holiday_type WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}