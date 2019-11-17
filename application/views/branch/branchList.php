<!-- /**
 * Class : branchList (branchForm List)
 * Branch Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header card-header-info">
				<div class="form-group pull-left">
					<h4 class="card-title "><?php echo $this->lang->line('content_branchList_label'); ?></h4>
					<p class="card-category"><?php echo $this->lang->line('content_listFormSubtitle_label'); ?></p>
				</div>
				<div class="form-group pull-right">
					<button class="btn btn-info btn-sm" onclick="loadBranchFormUI()">
						<i class="fa fa-plus"></i> <?php echo $this->lang->line('content_addNew_label'); ?>
					</button>
					<a class="btn btn-warning btn-sm" target="__BLANK" href="<?php echo base_url(); ?>branch/allData"><i class="fa fa-print"></i> <?php echo $this->lang->line('content_print_label'); ?></a>
				</div>
			</div>

			<div class="card-body">
				<div class="table-responsive">
					<table id="branchTable" class="table table-hover">
						<thead class="text-info">
							<tr>
								<!-- th>Field 1</th-->
								<th><?php echo $this->lang->line('content_branch_name_label'); ?></th>
<th><?php echo $this->lang->line('content_branch_address_label'); ?></th>
<th><?php echo $this->lang->line('content_branch_establishedDate_label'); ?></th>

								<th><?php echo $this->lang->line('content_createdDate_label'); ?></th>
								<th><?php echo $this->lang->line('content_actionButtons_label'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (!empty($branchList)) {
								foreach ($branchList as $record) {
									?>
									<tr>
										<!-- td><?php echo $record->field1 ?></td-->
										<td><?php echo $record->name ?></td>
<td><?php echo $record->address ?></td>
<td><?php echo $record->establishedDate ?></td>

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
													<button class="btn btn-success btn-sm" onclick="approveBranch(<?php echo $record->id; ?>)"><i class="fa fa-check"></i></button>
												<?php
														}
														?>

												<button class="btn btn-info btn-sm" onclick="loadBranchFormUIToView(<?php echo $record->id; ?>)"><i class="fa fa-eye"></i></button>
												<button class="btn btn-warning btn-sm" onclick="loadBranchFormUIToEdit(<?php echo $record->id; ?>)"><i class="fa fa-pencil"></i></button>
												<a target="__BLANK" class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>branch/report/<?php echo $record->id; ?>"><i class="fa fa-print"></i></a>
												<button class="btn btn-danger btn-sm" onclick="deleteBranch(<?php echo $record->id; ?>)"><i class="fa fa-trash"></i></button>
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
			//jQuery("#searchList").attr("action", baseURL + "branchList/" + value);
			//jQuery("#searchList").submit();
		});
		$('#branchTable').DataTable();
	});
</script>
<script src="<?php echo base_url(); ?>js/branch/branchActions.js" type="text/javascript"></script>