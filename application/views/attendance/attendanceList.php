<!-- /**
 * Class : attendanceList (attendanceForm List)
 * Attendance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header card-header-info">
				<div class="form-group pull-left">
					<h4 class="card-title ">Attendance List</h4>
					<p class="card-category">Attendance List Data</p>
				</div>
				<div class="form-group pull-right">
					<button class="btn btn-info btn-sm" onclick="loadAttendanceFormUI()"><i class="fa fa-plus"></i> Add New</button>
					<a class="btn btn-warning btn-sm" target="__BLANK" href="<?php echo base_url(); ?>attendance/allData"><i class="fa fa-print"></i> Print</a>
				</div>
			</div>

			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead class="text-info">
							<tr>
								<!-- th>Field 1</th-->
								<th>Attendance Type</th>
<th>Attendance Date</th>
<th>Attendance Time</th>

								<th>Created Date</th>
								<th>Action Buttons</th>
							</tr>
						</thead>
						<tbody>
                    <?php
                    if (! empty($attendanceList)) {
                        foreach ($attendanceList as $record) {
                            ?>
                    <tr>
								<!-- td><?php echo $record->field1 ?></td-->
								<td><?php echo $record->attendanceType ?></td>
<td><?php echo $record->attendanceDate ?></td>
<td><?php echo $record->attendanceTime ?></td>

								<td><?php 
								//echo date_format($record->createdDate, 'd/m/Y');
								echo date("d-m-Y", strtotime($record->createdDate)) ;
								
								?></td>

								<td>
									<div class="form-group">
											<?php
                            if ($record->isApproved == "1") {
                                ?>
											<a class="btn btn-info btn-sm" href="#"><i
											class="fa fa-check-circle"></i></a>
											 <?php
                            } else {
                                ?>
											<button class="btn btn-success btn-sm"  onclick="approveAttendance(<?php echo $record->id;?>)"><i class="fa fa-check"></i></button>
											<?php
                            }
                            ?>
											
											<button class="btn btn-info btn-sm" onclick="loadAttendanceFormUIToView(<?php echo $record->id;?>)"><i class="fa fa-eye"></i></button> 
											<button class="btn btn-warning btn-sm" onclick="loadAttendanceFormUIToEdit(<?php echo $record->id;?>)"><i class="fa fa-pencil"></i></button> 
											<a target="__BLANK" class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>attendance/report/<?php echo $record->id;?>"><i class="fa fa-print"></i></a> 
											<button class="btn btn-danger btn-sm" onclick="deleteAttendance(<?php echo $record->id;?>)"><i class="fa fa-trash"></i></button>
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

<script type="text/javascript"
	src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "attendanceList/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
<script src="<?php echo base_url(); ?>js/attendance/attendanceActions.js" type="text/javascript"></script>

