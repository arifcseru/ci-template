<!-- /**
 * Class : attendanceFormView (attendanceForm View)
 * Attendance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
 $id = $attendance->id;
 //$field1 = $attendance->field1;
 $employeeId = $attendance->employeeId;
$attendanceType = $attendance->attendanceType;
$attendanceDate = $attendance->attendanceDate;
$attendanceTime = $attendance->attendanceTime;

 
 $createdBy = $attendance->createdBy;
 $createdDate = $attendance->createdDate;
 
 $updatedBy = $attendance->updatedBy;
 $updatedDate = $attendance->updatedDate;
?>
<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header card-header-info">
							<h4 class="card-title"> Attendance Form</h4>
							<p class="card-category"> Please Fillup the form</p>
						</div>
						<div class="card-body">
							<!-- form role="form" action="<?php echo base_url() ?>attendance/create" method="post" id="createAttendance" role="form"-->
             					<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> 
             					<input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> 
             					<input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />
             					
             					<input type="hidden" value="0" name="isApproved" id="isApproved" />
             					<input type="hidden" value="0" name="isDeleted" id="isDeleted" />
													
							<div class="mdc-layout-grid__inner">
								<div class="col-md-12">
				<div class="form-group bmd-form-group">
					<select required="" class="form-control basic-select2" id="employeeId" name="employeeId">
                       <option value="">Select Employee</option>
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

<!-- Attendance Type -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Attendance Type</label> 
									<input required="" disabled type="text" class="form-control" id="attendanceType" name="attendanceType" value="<?php echo $attendanceType; ?>" />
								</div>
							</div>
						</div>
<!-- Attendance Date -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label">Attendance Date</label> 
									<input required="" disabled type="date" class="form-control" id="attendanceDate" name="attendanceDate" value="<?php echo $attendanceDate; ?>" />
								</div>
							</div>
						</div>
<!-- Attendance Time -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Attendance Time</label> 
									<input required="" disabled type="text" class="form-control" id="attendanceTime" name="attendanceTime" value="<?php echo $attendanceTime; ?>" />
								</div>
							</div>
						</div>
								<!-- Another Row -->
								
								
								
									<button class="btn btn-success" onclick="loadAttendanceFormUIToEdit(<?php echo $id;?>)">Edit</button>
									<button class='btn btn-warning' onclick="loadAttendanceListUI()"> Cancel</button>
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
				<h6 class="card-title">Audit Log Info</h6>
			</div>
			<div class="card-body">
				<h6 class="card-category text-gray">Created By</h6>
				<h4 class="card-title"><?php echo $createdByUserName; ?></h4>

				<h6 class="card-category text-gray">Created Date</h6>
				<h4 class="card-title">
					<?php 
						echo date("d/m/Y", strtotime($createdDate));
					?>
				</h4>

				<h6 class="card-category text-gray">Updated By</h6>
				<h4 class="card-title"><?php echo $updatedByUserName; ?></h4>

				<h6 class="card-category text-gray">Updated Date</h6>
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
							 <a class="btn btn-success" onclick="return confirm('Are you sure?')" href="<?php echo base_url().'attendance/approve/'.$id; ?>">Approve</a>
                             <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url().'attendance/delete/'.$id; ?>">Delete</a>
                         </div>
					</div-->
					<?php }?>
				</div>
			</div>

<script src="<?php echo base_url(); ?>js/attendance/attendanceActions.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
	</script>