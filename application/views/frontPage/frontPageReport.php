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
<!DOCTYPE html>

<head>
	<title><?php echo $this->lang->line('content_frontPageListReport_label'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="stylesheet/text">
		.header {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
        font-size: 35px;
    }
    
  </style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="row">
						<div class="col-md-12">
							<div class="header">
							
								<h2><?php echo $this->lang->line('header_title_label'); ?> </h2>
								<h2>Company: <?php echo $pageTitle; ?></h2>
								<h4><?php echo $this->lang->line('content_frontPageReportHeader_label'); ?></h4>
								<h6><?php echo $this->lang->line('content_generatedDate_label'); ?>: <?php
																										$createdDate  = date('Y-m-d H:i:s');
																										echo date("d/m/Y", strtotime($createdDate));
																										?></h6>
								<h6><?php echo $this->lang->line('content_generatedBy_label'); ?>: <?php echo $createdByUserName; ?></h6>
							</div>
						</div>
					</div>

					<div class="card-body">
						<!-- form role="form" action="<?php echo base_url() ?>frontPage/create"
					method="post" id="createFrontPage" role="form"-->
						<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

						<input type="hidden" value="0" name="isApproved" id="isApproved" />
						<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

						<div class="mdc-layout-grid__inner">
							
<!-- Title -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_title_label'); ?></label> 
									<?php echo $title; ?>
								</div>
							</div>
						</div>
<!-- Heading -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_heading_label'); ?><span style='color:red'>*</span></label> 
									<?php echo $heading; ?>
								</div>
							</div>
						</div>
<!-- Headline -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_headline_label'); ?></label> 
									<?php echo $headline; ?>
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_description_label'); ?></label> 
									<?php echo $description; ?>
								</div>
							</div>
						</div>
<!-- Special Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_specialLink_label'); ?></label> 
									<?php echo $specialLink; ?>
								</div>
							</div>
						</div>
<!-- Link Type -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_linkType_label'); ?></label> 
									<?php echo $linkType; ?>
								</div>
							</div>
						</div>
<!-- Details Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_detailsLink_label'); ?></label> 
									<?php echo $detailsLink; ?>
								</div>
							</div>
						</div>
<!-- Details Link Text -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_detailsLinkText_label'); ?><span style='color:red'>*</span></label> 
									<?php echo $detailsLinkText; ?>
								</div>
							</div>
						</div>
<!-- Contact Us Headline -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_contactUsHeadline_label'); ?></label> 
									<?php echo $contactUsHeadline; ?>
								</div>
							</div>
						</div>
<!-- Footer Message -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_footerMessage_label'); ?></label> 
									<?php echo $footerMessage; ?>
								</div>
							</div>
						</div>
<!-- Footer Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_footerLink_label'); ?></label> 
									<?php echo $footerLink; ?>
								</div>
							</div>
						</div>
<!-- Facebook Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_facebookLink_label'); ?></label> 
									<?php echo $facebookLink; ?>
								</div>
							</div>
						</div>
<!-- Github Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_githubLink_label'); ?></label> 
									<?php echo $githubLink; ?>
								</div>
							</div>
						</div>
<!-- Twitter Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_twitterLink_label'); ?></label> 
									<?php echo $twitterLink; ?>
								</div>
							</div>
						</div>
<!-- Linked In Link -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_frontPage_linkedInLink_label'); ?></label> 
									<?php echo $linkedInLink; ?>
								</div>
							</div>
						</div>
							<!-- Another Row -->

							<!-- reportsGeneratesChildTabsHtml -->

						</div>
						<!-- </form> -->
					</div>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url(); ?>js/frontPage/frontPageActions.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.basic-select2').select2();
				$('.basic-multiple-select2').select2();
			});
		</script>

	</div>
</body>

</html>