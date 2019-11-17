<?php 
/**
 * Class : FeaturesModel (FeaturesModel Model)
 * Features Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class FeaturesModel extends CI_Model {
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
           return $this->db->count_all("features");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('features',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('features',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('features');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('features');
            $this->db->close();
            $featuress = $query->result();
            $features = null;
            if (sizeOf($featuress)) {
                $features = $featuress[0];
            }
            return $features;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('features');
            $this->db->close();
            $featuress = $query->result();
            $features = null;
            if (sizeOf($featuress)) {
                $features = $featuress[0];
            }
            return $features;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('features');
            $this->db->close();
            return $query->result();
        }

        public function create($features) {
			$this->load->database();
			//$this->id    = $features['id']; 
			//$this->field1    = $features['field1']; 
			$this->icon    = $features['icon']; 
$this->title    = $features['title']; 
$this->description    = $features['description']; 
$this->frontPageId    = $features['frontPageId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $features['createdBy'];
			$this->updatedBy  = $features['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('features', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($features){
			$this->load->database();
			$this->id    = $features['id'];
			
			//$this->field1    = $entity['field1'];
			$this->icon    = $features['icon']; 
$this->title    = $features['title']; 
$this->description    = $features['description']; 
$this->frontPageId    = $features['frontPageId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $features['createdBy'];
            $this->updatedBy  = $features['updatedBy'];
            
			$this->db->update('features', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($features){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('features', $features, array('id' => $features->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM features WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM features WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}