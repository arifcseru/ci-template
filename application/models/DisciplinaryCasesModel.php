<?php 
/**
 * Class : DisciplinaryCasesModel (DisciplinaryCasesModel Model)
 * Disciplinary Cases Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class DisciplinaryCasesModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $caseName;
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
           return $this->db->count_all("disciplinary_cases");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('disciplinary_cases',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('disciplinary_cases',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('disciplinary_cases');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('disciplinary_cases');
            $this->db->close();
            $disciplinaryCasess = $query->result();
            $disciplinaryCases = null;
            if (sizeOf($disciplinaryCasess)) {
                $disciplinaryCases = $disciplinaryCasess[0];
            }
            return $disciplinaryCases;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('disciplinary_cases');
            $this->db->close();
            $disciplinaryCasess = $query->result();
            $disciplinaryCases = null;
            if (sizeOf($disciplinaryCasess)) {
                $disciplinaryCases = $disciplinaryCasess[0];
            }
            return $disciplinaryCases;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('disciplinary_cases');
            $this->db->close();
            return $query->result();
        }

        public function create($disciplinaryCases) {
			$this->load->database();
			//$this->id    = $disciplinaryCases['id']; 
			//$this->field1    = $disciplinaryCases['field1']; 
			$this->employeeId    = $disciplinaryCases['employeeId']; 
$this->caseName    = $disciplinaryCases['caseName']; 
$this->description    = $disciplinaryCases['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $disciplinaryCases['createdBy'];
			$this->updatedBy  = $disciplinaryCases['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('disciplinary_cases', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($disciplinaryCases){
			$this->load->database();
			$this->id    = $disciplinaryCases['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $disciplinaryCases['employeeId']; 
$this->caseName    = $disciplinaryCases['caseName']; 
$this->description    = $disciplinaryCases['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $disciplinaryCases['createdBy'];
            $this->updatedBy  = $disciplinaryCases['updatedBy'];
            
			$this->db->update('disciplinary_cases', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($disciplinaryCases){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('disciplinary_cases', $disciplinaryCases, array('id' => $disciplinaryCases->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM disciplinary_cases WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM disciplinary_cases WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}