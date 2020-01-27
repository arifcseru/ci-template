<!-- /**
 * Class : companyProfileForm (companyProfileForm View)
 * Company Profile Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $companyProfile->id;
// $field1 = $companyProfile->field1;
$userId = $companyProfile->userId;
$name = $companyProfile->name;
$address = $companyProfile->address;
$establishedDate = $companyProfile->establishedDate;
$email = $companyProfile->email;
$authorName = $companyProfile->authorName;


$isApproved = $companyProfile->isApproved;

$createdBy = $companyProfile->createdBy;
$createdDate = $companyProfile->createdDate;

$updatedBy = $companyProfile->updatedBy;
$updatedDate = $companyProfile->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_companyProfileForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>companyProfile/create"
					method="post" id="createCompanyProfile" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="userId" name="userId">
                         <option value="0">Select User</option>
                          <?php
                           if(!empty($users)){
                               foreach ($users as $user){
                                                    ?>
                                                    <option value="<?php echo $user->id; ?>" <?php if($user->id == $id) {echo "selected=selected";} ?>><?php echo $user->fullName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

<!-- Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_companyProfile_name_label'); ?></label> 
									<input required="" type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" />
								</div>
							</div>
						</div>
<!-- Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_companyProfile_address_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="address" name="address"><?php echo $address; ?></textarea>
								</div>
							</div>
						</div>
<!-- Established Date -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label"><?php echo $this->lang->line('content_companyProfile_establishedDate_label'); ?></label> 
									<input required="" type="date" class="form-control" id="establishedDate" name="establishedDate" value="<?php echo $establishedDate; ?>" />
								</div>
							</div>
						</div>
<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_companyProfile_email_label'); ?></label> 
									<input required="" type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
								</div>
							</div>
						</div>
<!-- Author Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_companyProfile_authorName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="authorName" name="authorName" value="<?php echo $authorName; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveCompanyProfile()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadCompanyProfileListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadCompanyProfileListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

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
							<button class="btn btn-success" onclick="approveCompanyProfile(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteCompanyProfile(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/companyProfile/companyProfileActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>