<!-- /**
 * Class : applicantInfoList (applicantInfoForm List)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header card-header-info">
				<div class="form-group pull-left">
					<h4 class="card-title "><?php echo $this->lang->line('content_applicantInfoList_label'); ?></h4>
					<p class="card-category"><?php echo $this->lang->line('content_listFormSubtitle_label'); ?></p>
				</div>
				<div class="form-group pull-right">
					<button class="btn btn-info btn-sm" onclick="loadApplicantInfoFormUI()">
						<i class="fa fa-plus"></i> <?php echo $this->lang->line('content_addNew_label'); ?>
					</button>
					<a class="btn btn-warning btn-sm" target="__BLANK" href="<?php echo base_url(); ?>applicantInfo/allData"><i class="fa fa-print"></i> <?php echo $this->lang->line('content_print_label'); ?></a>
				</div>
			</div>

			<div class="card-body">
				<div class="table-responsive">
					<table id="applicantInfoTable" class="table table-hover">
						<thead class="text-info">
							<tr>
								<!-- th>Field 1</th-->
								<th><?php echo $this->lang->line('content_applicantInfo_enrollmentId_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_firstName_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_lastName_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_gender_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_eduQualification_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_contactNo_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_postingId_label'); ?></th>

								<th><?php echo $this->lang->line('content_createdDate_label'); ?></th>
								<th><?php echo $this->lang->line('content_actionButtons_label'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (!empty($applicantInfoList)) {
								foreach ($applicantInfoList as $record) {
									?>
									<tr>
										<!-- td><?php echo $record->field1 ?></td-->
										<td><?php echo $record->enrollmentId ?></td>
<td><?php echo $record->firstName ?></td>
<td><?php echo $record->lastName ?></td>
<td><?php echo $record->gender ?></td>
<td><?php echo $record->eduQualification ?></td>
<td><?php echo $record->contactNo ?></td>
<td><?php echo $record->postingId ?></td>

										<td><?php
													//echo date_format($record->createdDate, 'd/m/Y');
													echo date("d-m-Y", strtotime($record->createdDate));

													?></td>

										<td>
											<div class="form-group">
												<?php
														if ($record->isApproved == "1") {
															?>
													<a class="btn btn-info btn-sm" href="#"><i class="fa fa-check-circle"></i></a>
												<?php
														} else {
															?>
													<button class="btn btn-success btn-sm" onclick="approveApplicantInfo(<?php echo $record->id; ?>)"><i class="fa fa-check"></i></button>
												<?php
														}
														?>

												<button class="btn btn-info btn-sm" onclick="loadApplicantInfoFormUIToView(<?php echo $record->id; ?>)"><i class="fa fa-eye"></i></button>
												<button class="btn btn-warning btn-sm" onclick="loadApplicantInfoFormUIToEdit(<?php echo $record->id; ?>)"><i class="fa fa-pencil"></i></button>
												<a target="__BLANK" class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>applicantInfo/report/<?php echo $record->id; ?>"><i class="fa fa-print"></i></a>
												<button class="btn btn-danger btn-sm" onclick="deleteApplicantInfo(<?php echo $record->id; ?>)"><i class="fa fa-trash"></i></button>
											</div>

										</td>
									</tr>

							<?php
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('ul.pagination li a').click(function(e) {
			e.preventDefault();
			var link = jQuery(this).get(0).href;
			var value = link.substring(link.lastIndexOf('/') + 1);
			//jQuery("#searchList").attr("action", baseURL + "applicantInfoList/" + value);
			//jQuery("#searchList").submit();
		});
		$('#applicantInfoTable').DataTable();
	});
</script>
<script src="<?php echo base_url(); ?>js/applicantInfo/applicantInfoActions.js" type="text/javascript"></script>