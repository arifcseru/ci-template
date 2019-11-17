<?php 
/**
 * Class : CharacteristicsModel (CharacteristicsModel Model)
 * Characteristics Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class CharacteristicsModel extends CI_Model {
		public $id;
        //public $field1;
		
public $icon;
public $title;
public $description;
public $frontPageId;
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
           return $this->db->count_all("characteristics");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('characteristics',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('characteristics',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('characteristics');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('characteristics');
            $this->db->close();
            $characteristicss = $query->result();
            $characteristics = null;
            if (sizeOf($characteristicss)) {
                $characteristics = $characteristicss[0];
            }
            return $characteristics;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('characteristics');
            $this->db->close();
            $characteristicss = $query->result();
            $characteristics = null;
            if (sizeOf($characteristicss)) {
                $characteristics = $characteristicss[0];
            }
            return $characteristics;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('characteristics');
            $this->db->close();
            return $query->result();
        }

        public function create($characteristics) {
			$this->load->database();
			//$this->id    = $characteristics['id']; 
			//$this->field1    = $characteristics['field1']; 
			$this->icon    = $characteristics['icon']; 
$this->title    = $characteristics['title']; 
$this->description    = $characteristics['description']; 
$this->frontPageId    = $characteristics['frontPageId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $characteristics['createdBy'];
			$this->updatedBy  = $characteristics['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('characteristics', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($characteristics){
			$this->load->database();
			$this->id    = $characteristics['id'];
			
			//$this->field1    = $entity['field1'];
			$this->icon    = $characteristics['icon']; 
$this->title    = $characteristics['title']; 
$this->description    = $characteristics['description']; 
$this->frontPageId    = $characteristics['frontPageId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $characteristics['createdBy'];
            $this->updatedBy  = $characteristics['updatedBy'];
            
			$this->db->update('characteristics', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($characteristics){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('characteristics', $characteristics, array('id' => $characteristics->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM characteristics WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM characteristics WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}