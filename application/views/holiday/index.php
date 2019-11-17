<!-- /**
 * Class : index.php (index to page load)
 * Holiday Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<div id="loadingDiv"></div>

<div class="main-panel">
	<!-- Navbar -->
	<?php $this->load->view('materials2/includes/top-navigations.php'); ?>
	<!-- End Navbar -->
	<div class="content">
		<div class="container-fluid" id="holidayContainer">
			<div class="row">
				<div class="col-md-12">
					<div class="card">

						<div class="card-header card-header-info">
							<div class="form-group pull-left">
								<h4 class="card-title "><?php echo $this->lang->line('content_holidayList_label'); ?></h4>
								<p class="card-category"><?php echo $this->lang->line('content_listFormSubtitle_label'); ?></p>
							</div>
							<div class="form-group pull-right">
								<button class="btn btn-info btn-sm" onclick="loadHolidayFormUI()">
									<i class="fa fa-plus"></i> <?php echo $this->lang->line('content_addNew_label'); ?>
								</button>
								<a class="btn btn-warning btn-sm" target="__BLANK" href="<?php echo base_url(); ?>holiday/allData"><i class="fa fa-print"></i> <?php echo $this->lang->line('content_print_label'); ?></a>
							</div>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table id="holidayTable" class="table table-hover">
									<thead class="text-info">
										<tr>
											<!-- th>Field 1</th-->
											<th><?php echo $this->lang->line('content_holiday_holidayTypeId_label'); ?></th>
<th><?php echo $this->lang->line('content_holiday_fromDate_label'); ?></th>
<th><?php echo $this->lang->line('content_holiday_thruDate_label'); ?></th>

											<th><?php echo $this->lang->line('content_createdDate_label'); ?></th>
											<th><?php echo $this->lang->line('content_actionButtons_label'); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php
										if (!empty($holidayList)) {
											foreach ($holidayList as $record) {
												?>
												<tr>
													<!-- td><?php echo $record->field1 ?></td-->
													<td><?php echo $record->holidayTypeId ?></td>
<td><?php echo $record->fromDate ?></td>
<td><?php echo $record->thruDate ?></td>

													<td><?php echo date("d-m-Y", strtotime($record->createdDate)) ?></td>

													<td>
														<div class="form-group">
															<?php
																	if ($record->isApproved == "1") {
																		?>
																<a class="btn btn-info btn-sm" href="#"><i class="fa fa-check-circle"></i></a>
															<?php
																	} else {
																		?>
																<button class="btn btn-success btn-sm" onclick="approveHoliday(<?php echo $record->id; ?>)">
																	<i class="fa fa-check"></i>
																</button>
															<?php
																	}
																	?>

															<button class="btn btn-info btn-sm" onclick="loadHolidayFormUIToView(<?php echo $record->id; ?>)">
																<i class="fa fa-eye"></i>
															</button>
															<button class="btn btn-warning btn-sm" onclick="loadHolidayFormUIToEdit(<?php echo $record->id; ?>)">
																<i class="fa fa-pencil"></i>
															</button>
															<a target="__BLANK" class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>holiday/report/<?php echo $record->id; ?>"><i class="fa fa-print"></i></a>
															<button class="btn btn-danger btn-sm" onclick="deleteHoliday(<?php echo $record->id; ?>)">
																<i class="fa fa-trash"></i>
															</button>
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
		</div>
	</div>
	<?php $this->load->view('materials2/includes/common-footer.php'); ?>
</div>

<script src="<?php echo base_url(); ?>js/holiday/holidayActions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/holiday/holidayNavigations.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
		$('#holidayTable').DataTable();
	});
</script>