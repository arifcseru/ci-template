<!-- /**
 * Class : frontPageFormView (frontPageForm View)
 * Front Page Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $frontPage->id;
//$field1 = $frontPage->field1;
$title = $frontPage->title;
$heading = $frontPage->heading;
$headline = $frontPage->headline;
$description = $frontPage->description;
$specialLink = $frontPage->specialLink;
$linkType = $frontPage->linkType;
$detailsLink = $frontPage->detailsLink;
$detailsLinkText = $frontPage->detailsLinkText;
$contactUsHeadline = $frontPage->contactUsHeadline;
$footerMessage = $frontPage->footerMessage;
$footerLink = $frontPage->footerLink;
$facebookLink = $frontPage->facebookLink;
$githubLink = $frontPage->githubLink;
$twitterLink = $frontPage->twitterLink;
$linkedInLink = $frontPage->linkedInLink;
$Features = $frontPage->Features;
$Characteristics = $frontPage->Characteristics;
$Projects = $frontPage->Projects;
$PricingPlan = $frontPage->PricingPlan;
$Team = $frontPage->Team;


$createdBy = $frontPage->createdBy;
$createdDate = $frontPage->createdDate;

$updatedBy = $frontPage->updatedBy;
$updatedDate = $frontPage->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
		<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_frontPageForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>frontPage/create" method="post" id="createFrontPage" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

				<input type="hidden" value="0" name="isApproved" id="isApproved" />
				<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

				<div class="mdc-layout-grid__inner">
					
<!-- Title -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_title_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" />
								</div>
							</div>
						</div>
<!-- Heading -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_heading_label'); ?><span style='color:red'>*</span></label> 
									<textarea required="" disabled rows="5" class="form-control" id="heading" name="heading"><?php echo $heading; ?></textarea>
								</div>
							</div>
						</div>
<!-- Headline -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_headline_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="headline" name="headline"><?php echo $headline; ?></textarea>
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_description_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
								</div>
							</div>
						</div>
<!-- Special Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_specialLink_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="specialLink" name="specialLink" value="<?php echo $specialLink; ?>" />
								</div>
							</div>
						</div>
<!-- Link Type -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_linkType_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="linkType" name="linkType" value="<?php echo $linkType; ?>" />
								</div>
							</div>
						</div>
<!-- Details Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_detailsLink_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="detailsLink" name="detailsLink" value="<?php echo $detailsLink; ?>" />
								</div>
							</div>
						</div>
<!-- Details Link Text -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_detailsLinkText_label'); ?><span style='color:red'>*</span></label> 
									<textarea required="" disabled rows="5" class="form-control" id="detailsLinkText" name="detailsLinkText"><?php echo $detailsLinkText; ?></textarea>
								</div>
							</div>
						</div>
<!-- Contact Us Headline -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_contactUsHeadline_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="contactUsHeadline" name="contactUsHeadline" value="<?php echo $contactUsHeadline; ?>" />
								</div>
							</div>
						</div>
<!-- Footer Message -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_footerMessage_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="footerMessage" name="footerMessage"><?php echo $footerMessage; ?></textarea>
								</div>
							</div>
						</div>
<!-- Footer Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_footerLink_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="footerLink" name="footerLink" value="<?php echo $footerLink; ?>" />
								</div>
							</div>
						</div>
<!-- Facebook Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_facebookLink_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="facebookLink" name="facebookLink" value="<?php echo $facebookLink; ?>" />
								</div>
							</div>
						</div>
<!-- Github Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_githubLink_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="githubLink" name="githubLink" value="<?php echo $githubLink; ?>" />
								</div>
							</div>
						</div>
<!-- Twitter Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_twitterLink_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="twitterLink" name="twitterLink" value="<?php echo $twitterLink; ?>" />
								</div>
							</div>
						</div>
<!-- Linked In Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_linkedInLink_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="linkedInLink" name="linkedInLink" value="<?php echo $linkedInLink; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					

					<button class="btn btn-success" onclick="loadFrontPageFormUIToEdit(<?php echo $id; ?>)"><?php echo $this->lang->line('content_edit_label'); ?></button>
					<button class='btn btn-warning' onclick="loadFrontPageListUI()"> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<div class="clearfix"></div>
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
		<?php if ($id != null) {
			?>
			<!-- div class="card">
						<div class="card-header card-header-info">
							<h6 class="card-title">Special Links</h6>
						</div>
						<div class="card-body">
							 <a class="btn btn-success" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'frontPage/approve/' . $id; ?>">Approve</a>
                             <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'frontPage/delete/' . $id; ?>">Delete</a>
                         </div>
					</div-->
		<?php } ?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/frontPage/frontPageActions.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>