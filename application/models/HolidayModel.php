<?php 
/**
 * Class : HolidayModel (HolidayModel Model)
 * Holiday Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class HolidayModel extends CI_Model {
		public $id;
        //public $field1;
		
public $title;
public $description;
public $holidayTypeId;
public $fromDate;
public $thruDate;
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
           return $this->db->count_all("holiday");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('holiday',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('holiday',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('holiday');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('holiday');
            $this->db->close();
            $holidays = $query->result();
            $holiday = null;
            if (sizeOf($holidays)) {
                $holiday = $holidays[0];
            }
            return $holiday;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('holiday');
            $this->db->close();
            $holidays = $query->result();
            $holiday = null;
            if (sizeOf($holidays)) {
                $holiday = $holidays[0];
            }
            return $holiday;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('holiday');
            $this->db->close();
            return $query->result();
        }

        public function create($holiday) {
			$this->load->database();
			//$this->id    = $holiday['id']; 
			//$this->field1    = $holiday['field1']; 
			$this->title    = $holiday['title']; 
$this->description    = $holiday['description']; 
$this->holidayTypeId    = $holiday['holidayTypeId']; 
$this->fromDate    = $holiday['fromDate']; 
$this->thruDate    = $holiday['thruDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $holiday['createdBy'];
			$this->updatedBy  = $holiday['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('holiday', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($holiday){
			$this->load->database();
			$this->id    = $holiday['id'];
			
			//$this->field1    = $entity['field1'];
			$this->title    = $holiday['title']; 
$this->description    = $holiday['description']; 
$this->holidayTypeId    = $holiday['holidayTypeId']; 
$this->fromDate    = $holiday['fromDate']; 
$this->thruDate    = $holiday['thruDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $holiday['createdBy'];
            $this->updatedBy  = $holiday['updatedBy'];
            
			$this->db->update('holiday', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($holiday){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('holiday', $holiday, array('id' => $holiday->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM holiday WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM holiday WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}