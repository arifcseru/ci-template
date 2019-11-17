<?php 
/**
 * Class : PricingPlanModel (PricingPlanModel Model)
 * Pricing Plan Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PricingPlanModel extends CI_Model {
		public $id;
        //public $field1;
		
public $type;
public $rate;
public $unit;
public $buyLink;
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
           return $this->db->count_all("pricing_plan");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pricing_plan',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('pricing_plan',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('pricing_plan');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('pricing_plan');
            $this->db->close();
            $pricingPlans = $query->result();
            $pricingPlan = null;
            if (sizeOf($pricingPlans)) {
                $pricingPlan = $pricingPlans[0];
            }
            return $pricingPlan;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pricing_plan');
            $this->db->close();
            $pricingPlans = $query->result();
            $pricingPlan = null;
            if (sizeOf($pricingPlans)) {
                $pricingPlan = $pricingPlans[0];
            }
            return $pricingPlan;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('pricing_plan');
            $this->db->close();
            return $query->result();
        }

        public function create($pricingPlan) {
			$this->load->database();
			//$this->id    = $pricingPlan['id']; 
			//$this->field1    = $pricingPlan['field1']; 
			$this->type    = $pricingPlan['type']; 
$this->rate    = $pricingPlan['rate']; 
$this->unit    = $pricingPlan['unit']; 
$this->buyLink    = $pricingPlan['buyLink']; 
$this->frontPageId    = $pricingPlan['frontPageId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $pricingPlan['createdBy'];
			$this->updatedBy  = $pricingPlan['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('pricing_plan', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($pricingPlan){
			$this->load->database();
			$this->id    = $pricingPlan['id'];
			
			//$this->field1    = $entity['field1'];
			$this->type    = $pricingPlan['type']; 
$this->rate    = $pricingPlan['rate']; 
$this->unit    = $pricingPlan['unit']; 
$this->buyLink    = $pricingPlan['buyLink']; 
$this->frontPageId    = $pricingPlan['frontPageId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $pricingPlan['createdBy'];
            $this->updatedBy  = $pricingPlan['updatedBy'];
            
			$this->db->update('pricing_plan', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($pricingPlan){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('pricing_plan', $pricingPlan, array('id' => $pricingPlan->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM pricing_plan WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM pricing_plan WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}