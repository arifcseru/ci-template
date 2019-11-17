<!-- /**
 * Class : frontPageForm (frontPageForm View)
 * Front Page Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $frontPage->id;
// $field1 = $frontPage->field1;
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


$isApproved = $frontPage->isApproved;

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
				<!-- form role="form" action="<?php echo base_url() ?>frontPage/create"
					method="post" id="createFrontPage" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					
<!-- Title -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_title_label'); ?></label> 
									<input required="" type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" />
								</div>
							</div>
						</div>
<!-- Heading -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_heading_label'); ?><span style='color:red'>*</span></label> 
									<textarea required="" rows="5" class="form-control" id="heading" name="heading"><?php echo $heading; ?></textarea>
								</div>
							</div>
						</div>
<!-- Headline -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_headline_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="headline" name="headline"><?php echo $headline; ?></textarea>
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_description_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
								</div>
							</div>
						</div>
<!-- Special Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_specialLink_label'); ?></label> 
									<input required="" type="text" class="form-control" id="specialLink" name="specialLink" value="<?php echo $specialLink; ?>" />
								</div>
							</div>
						</div>
<!-- Link Type -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_linkType_label'); ?></label> 
									<input required="" type="text" class="form-control" id="linkType" name="linkType" value="<?php echo $linkType; ?>" />
								</div>
							</div>
						</div>
<!-- Details Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_detailsLink_label'); ?></label> 
									<input required="" type="text" class="form-control" id="detailsLink" name="detailsLink" value="<?php echo $detailsLink; ?>" />
								</div>
							</div>
						</div>
<!-- Details Link Text -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_detailsLinkText_label'); ?><span style='color:red'>*</span></label> 
									<textarea required="" rows="5" class="form-control" id="detailsLinkText" name="detailsLinkText"><?php echo $detailsLinkText; ?></textarea>
								</div>
							</div>
						</div>
<!-- Contact Us Headline -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_contactUsHeadline_label'); ?></label> 
									<input required="" type="text" class="form-control" id="contactUsHeadline" name="contactUsHeadline" value="<?php echo $contactUsHeadline; ?>" />
								</div>
							</div>
						</div>
<!-- Footer Message -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_footerMessage_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="footerMessage" name="footerMessage"><?php echo $footerMessage; ?></textarea>
								</div>
							</div>
						</div>
<!-- Footer Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_footerLink_label'); ?></label> 
									<input required="" type="text" class="form-control" id="footerLink" name="footerLink" value="<?php echo $footerLink; ?>" />
								</div>
							</div>
						</div>
<!-- Facebook Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_facebookLink_label'); ?></label> 
									<input required="" type="text" class="form-control" id="facebookLink" name="facebookLink" value="<?php echo $facebookLink; ?>" />
								</div>
							</div>
						</div>
<!-- Github Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_githubLink_label'); ?></label> 
									<input required="" type="text" class="form-control" id="githubLink" name="githubLink" value="<?php echo $githubLink; ?>" />
								</div>
							</div>
						</div>
<!-- Twitter Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_twitterLink_label'); ?></label> 
									<input required="" type="text" class="form-control" id="twitterLink" name="twitterLink" value="<?php echo $twitterLink; ?>" />
								</div>
							</div>
						</div>
<!-- Linked In Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_linkedInLink_label'); ?></label> 
									<input required="" type="text" class="form-control" id="linkedInLink" name="linkedInLink" value="<?php echo $linkedInLink; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					<div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_frontPage_features_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addFeaturesRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><table id="featuresTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_frontPage_icon_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_title_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_description_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($featuress)) {
                                foreach ($featuress as $index => $features) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Icon</label> 
	<input required="" type="text" class="form-control" id="features_icon_<?php echo $index;?>" value="<?php echo $features->icon; ?>" name="features[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Title</label> 
	<input required="" type="text" class="form-control" id="features_title_<?php echo $index;?>" value="<?php echo $features->title; ?>" name="features[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_description_label'); ?></label> 
	<textarea required="" class="form-control" id="features_description_<?php echo $index;?>" name="features[]"><?php echo $features->description; ?></textarea>
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteFeaturesRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_icon_label'); ?></label> 
		<input required="" type="text" class="form-control" id="features_icon_0" name="features[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_title_label'); ?></label> 
		<input required="" type="text" class="form-control" id="features_title_0" name="features[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_description_label'); ?></label> 
		<textarea required="" class="form-control" id="features_description_0" name="features[]"></textarea>
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteFeaturesRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div><div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_frontPage_characteristics_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addCharacteristicsRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><table id="characteristicsTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_frontPage_icon_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_title_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_description_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($characteristicss)) {
                                foreach ($characteristicss as $index => $characteristics) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Icon</label> 
	<input required="" type="text" class="form-control" id="characteristics_icon_<?php echo $index;?>" value="<?php echo $characteristics->icon; ?>" name="characteristics[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Title</label> 
	<input required="" type="text" class="form-control" id="characteristics_title_<?php echo $index;?>" value="<?php echo $characteristics->title; ?>" name="characteristics[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_description_label'); ?></label> 
	<textarea required="" class="form-control" id="characteristics_description_<?php echo $index;?>" name="characteristics[]"><?php echo $characteristics->description; ?></textarea>
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteCharacteristicsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_icon_label'); ?></label> 
		<input required="" type="text" class="form-control" id="characteristics_icon_0" name="characteristics[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_title_label'); ?></label> 
		<input required="" type="text" class="form-control" id="characteristics_title_0" name="characteristics[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_description_label'); ?></label> 
		<textarea required="" class="form-control" id="characteristics_description_0" name="characteristics[]"></textarea>
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteCharacteristicsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div><div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_frontPage_projects_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addProjectsRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><table id="projectsTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_frontPage_name_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_shortDetails_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_features_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($projectss)) {
                                foreach ($projectss as $index => $projects) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Name</label> 
	<input required="" type="text" class="form-control" id="projects_name_<?php echo $index;?>" value="<?php echo $projects->name; ?>" name="projects[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_shortDetails_label'); ?></label> 
	<textarea required="" class="form-control" id="projects_shortDetails_<?php echo $index;?>" name="projects[]"><?php echo $projects->shortDetails; ?></textarea>
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_features_label'); ?></label> 
	<textarea required="" class="form-control" id="projects_features_<?php echo $index;?>" name="projects[]"><?php echo $projects->features; ?></textarea>
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteProjectsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_name_label'); ?></label> 
		<input required="" type="text" class="form-control" id="projects_name_0" name="projects[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_shortDetails_label'); ?></label> 
		<textarea required="" class="form-control" id="projects_shortDetails_0" name="projects[]"></textarea>
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_features_label'); ?></label> 
		<textarea required="" class="form-control" id="projects_features_0" name="projects[]"></textarea>
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteProjectsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div><div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_frontPage_pricingPlan_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addPricingPlanRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><table id="pricingPlanTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_frontPage_type_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_rate_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_unit_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_buyLink_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($pricingPlans)) {
                                foreach ($pricingPlans as $index => $pricingPlan) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Type</label> 
	<input required="" type="text" class="form-control" id="pricingPlan_type_<?php echo $index;?>" value="<?php echo $pricingPlan->type; ?>" name="pricingPlan[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Rate</label> 
	<input required="" type="text" class="form-control" id="pricingPlan_rate_<?php echo $index;?>" value="<?php echo $pricingPlan->rate; ?>" name="pricingPlan[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Unit</label> 
	<input required="" type="text" class="form-control" id="pricingPlan_unit_<?php echo $index;?>" value="<?php echo $pricingPlan->unit; ?>" name="pricingPlan[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Buy Link</label> 
	<input required="" type="text" class="form-control" id="pricingPlan_buyLink_<?php echo $index;?>" value="<?php echo $pricingPlan->buyLink; ?>" name="pricingPlan[]">
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deletePricingPlanRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_type_label'); ?></label> 
		<input required="" type="text" class="form-control" id="pricingPlan_type_0" name="pricingPlan[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_rate_label'); ?></label> 
		<input required="" type="text" class="form-control" id="pricingPlan_rate_0" name="pricingPlan[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_unit_label'); ?></label> 
		<input required="" type="text" class="form-control" id="pricingPlan_unit_0" name="pricingPlan[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_buyLink_label'); ?></label> 
		<input required="" type="text" class="form-control" id="pricingPlan_buyLink_0" name="pricingPlan[]" value="">
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deletePricingPlanRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div><div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_frontPage_team_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addTeamRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><table id="teamTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_frontPage_memberName_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_designation_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_about_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_githubLink_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_twitterLink_label'); ?></th>
<th><?php echo $this->lang->line('content_frontPage_facebookLink_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($teams)) {
                                foreach ($teams as $index => $team) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Member Name</label> 
	<input required="" type="text" class="form-control" id="team_memberName_<?php echo $index;?>" value="<?php echo $team->memberName; ?>" name="team[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Designation</label> 
	<input required="" type="text" class="form-control" id="team_designation_<?php echo $index;?>" value="<?php echo $team->designation; ?>" name="team[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_about_label'); ?></label> 
	<textarea required="" class="form-control" id="team_about_<?php echo $index;?>" name="team[]"><?php echo $team->about; ?></textarea>
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Github Link</label> 
	<input required="" type="text" class="form-control" id="team_githubLink_<?php echo $index;?>" value="<?php echo $team->githubLink; ?>" name="team[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Twitter Link</label> 
	<input required="" type="text" class="form-control" id="team_twitterLink_<?php echo $index;?>" value="<?php echo $team->twitterLink; ?>" name="team[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Facebook Link</label> 
	<input required="" type="text" class="form-control" id="team_facebookLink_<?php echo $index;?>" value="<?php echo $team->facebookLink; ?>" name="team[]">
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTeamRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_memberName_label'); ?></label> 
		<input required="" type="text" class="form-control" id="team_memberName_0" name="team[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_designation_label'); ?></label> 
		<input required="" type="text" class="form-control" id="team_designation_0" name="team[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_about_label'); ?></label> 
		<textarea required="" class="form-control" id="team_about_0" name="team[]"></textarea>
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_githubLink_label'); ?></label> 
		<input required="" type="text" class="form-control" id="team_githubLink_0" name="team[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_twitterLink_label'); ?></label> 
		<input required="" type="text" class="form-control" id="team_twitterLink_0" name="team[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_facebookLink_label'); ?></label> 
		<input required="" type="text" class="form-control" id="team_facebookLink_0" name="team[]" value="">
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTeamRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div>

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveFrontPage()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadFrontPageListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadFrontPageListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

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
							<button class="btn btn-success" onclick="approveFrontPage(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteFrontPage(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/frontPage/frontPageActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>