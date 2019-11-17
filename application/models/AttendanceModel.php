<?php 
/**
 * Class : AttendanceModel (AttendanceModel Model)
 * Attendance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class AttendanceModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $attendanceType;
public $attendanceDate;
public $attendanceTime;
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
           return $this->db->count_all("attendance");
        }

       public function getPaginated($limit, $start){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('attendance',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('attendance',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('attendance');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('attendance');
            $this->db->close();
            $attendances = $query->result();
            $attendance = null;
            if (sizeOf($attendances)) {
                $attendance = $attendances[0];
            }
            return $attendance;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('attendance');
            $this->db->close();
            return $query->result();
        }

        public function create($attendance) {
			$this->load->database();
			//$this->id    = $attendance['id']; 
			//$this->field1    = $attendance['field1']; 
			$this->employeeId    = $attendance['employeeId']; 
$this->attendanceType    = $attendance['attendanceType']; 
$this->attendanceDate    = $attendance['attendanceDate']; 
$this->attendanceTime    = $attendance['attendanceTime']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $attendance['createdBy'];
			$this->updatedBy  = $attendance['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('attendance', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($attendance){
			$this->load->database();
			$this->id    = $attendance['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $attendance['employeeId']; 
$this->attendanceType    = $attendance['attendanceType']; 
$this->attendanceDate    = $attendance['attendanceDate']; 
$this->attendanceTime    = $attendance['attendanceTime']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $attendance['createdBy'];
            $this->updatedBy  = $attendance['updatedBy'];
            
			$this->db->update('attendance', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($attendance){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('attendance', $attendance, array('id' => $attendance->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM attendance WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM attendance WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}