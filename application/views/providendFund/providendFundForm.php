<!-- /**
 * Class : providendFundForm (providendFundForm View)
 * Providend Fund Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $providendFund->id;
// $field1 = $providendFund->field1;
$employeeId = $providendFund->employeeId;
$monthlyAmount = $providendFund->monthlyAmount;
$installmentMonths = $providendFund->installmentMonths;
$PfDetails = $providendFund->PfDetails;


$isApproved = $providendFund->isApproved;

$createdBy = $providendFund->createdBy;
$createdDate = $providendFund->createdDate;

$updatedBy = $providendFund->updatedBy;
$updatedDate = $providendFund->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_providendFundForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>providendFund/create"
					method="post" id="createProvidendFund" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="employeeId" name="employeeId">
                         <option value="0">Select Employee</option>
                          <?php
                           if(!empty($employees)){
                               foreach ($employees as $employee){
                                                    ?>
                                                    <option value="<?php echo $employee->id; ?>" <?php if($employee->id == $id) {echo "selected=selected";} ?>><?php echo $employee->lastName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

<!-- Monthly Amount -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_providendFund_monthlyAmount_label'); ?></label> 
									<input required="" type="text" class="form-control" id="monthlyAmount" name="monthlyAmount" value="<?php echo $monthlyAmount; ?>" />
								</div>
							</div>
						</div>
<!-- Installment Months -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_providendFund_installmentMonths_label'); ?></label> 
									<input required="" type="number" class="form-control" id="installmentMonths" name="installmentMonths" value="<?php echo $installmentMonths; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					<div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_providendFund_pfDetails_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addPfDetailsRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><script>var employeeData = [
    <?php foreach ($employees as $key=>$value) {
		  echo "'".$value->lastName."',";
	}?>];
var employeeSelectOptions =     <?php foreach ($employees as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->lastName."</option>'+";	}?> ';'
  </script><table id="pfDetailsTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_providendFund_employeeId_label'); ?></th>
<th><?php echo $this->lang->line('content_providendFund_monthNo_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($pfDetailss)) {
                                foreach ($pfDetailss as $index => $pfDetails) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="pfDetails_employeeId_<?php echo $index;?>" value="<?php echo $pfDetails->employeeId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		if($key==$pfDetails->employeeId)
{  echo "<option selected value=".$value->id.">".$value->lastName."</option>";}
		 else { echo "<option value=".$value->id.">".$value->lastName."</option>";}
	}?></select>	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Month No</label> 
	<input required="" type="text" class="form-control" id="pfDetails_monthNo_<?php echo $index;?>" value="<?php echo $pfDetails->monthNo; ?>" name="pfDetails[]">
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deletePfDetailsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="pfDetails_employeeId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->lastName."</option>";
	}?></select>
			</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_providendFund_monthNo_label'); ?></label> 
		<input required="" type="text" class="form-control" id="pfDetails_monthNo_0" name="pfDetails[]" value="">
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deletePfDetailsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div>

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveProvidendFund()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadProvidendFundListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadProvidendFundListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

					<?php
					} ?>
					<div class="clearfix"></div>
					* <?php echo $this->lang->line('content_formRequired_label'); ?>
				</div>
				<!-- </form> -->
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<!-- div class="card-avatar">
							<a href="#pablo"> <img class="img"
								src="../assets/img/faces/marc.jpg">
							</a>
						</div-->
			<div class="card-header card-header-info">
				<h6 class="card-title"><?php echo $this->lang->line('content_auditLogInfo_label'); ?></h6>
			</div>
			<div class="card-body">
				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_createdBy_label'); ?></h6>
				<h4 class="card-title"><?php echo $createdByUserName; ?></h4>

				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_createdDate_label'); ?></h6>
				<h4 class="card-title">
					<?php
					echo date("d/m/Y", strtotime($createdDate));
					?>
				</h4>

				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_updatedBy_label'); ?></h6>
				<h4 class="card-title"><?php echo $updatedByUserName; ?></h4>

				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_updatedDate_label'); ?></h6>
				<h4 class="card-title">
					<?php
					echo date("d/m/Y", strtotime($updatedDate));
					?>
				</h4>

				<!-- p class="card-description">Don't be scared of the truth because
								we need to restart the human foundation in truth And I love you
								like Kanye loves Kanye I love Rick Owens’ bed design but the
								back is...</p-->
			</div>
		</div>

		<?php
		if ($role!=null && $role == ROLE_APPROVER_ADMIN) {
			if ($id != null) {
				?>
				<div class="card">
					<!-- div class="card-avatar">
							<a href="#pablo"> <img class="img"
								src="../assets/img/faces/marc.jpg">
							</a>
						</div-->
					<div class="card-header card-header-info">
						<h6 class="card-title"><?php echo $this->lang->line('content_specialLinks_label'); ?></h6>
					</div>
					<div class="card-body">
						<?php
								if ($isApproved == "1") {
									?>
							<button disabled class="btn btn-info"><?php echo $this->lang->line('content_approved_label'); ?></button>
						<?php
								} else {
									?>
							<button class="btn btn-success" onclick="approveProvidendFund(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteProvidendFund(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/providendFund/providendFundActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>