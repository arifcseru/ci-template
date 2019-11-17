<!-- /**
 * Class : courseForm (courseForm View)
 * Course Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $course->id;
// $field1 = $course->field1;
$Subject = $course->Subject;
$shortCode = $course->shortCode;
$description = $course->description;
$applicantInfoId = $course->applicantInfoId;
$supervisorId = $course->supervisorId;


$isApproved = $course->isApproved;

$createdBy = $course->createdBy;
$createdDate = $course->createdDate;

$updatedBy = $course->updatedBy;
$updatedDate = $course->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_courseForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>course/create"
					method="post" id="createCourse" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					
<!-- Short Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_shortCode_label'); ?></label> 
									<input required="" type="text" class="form-control" id="shortCode" name="shortCode" value="<?php echo $shortCode; ?>" />
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_description_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
								</div>
							</div>
						</div><div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="applicantInfoId" name="applicantInfoId">
                         <option value="0">Select Applicant Info</option>
                          <?php
                           if(!empty($applicantInfos)){
                               foreach ($applicantInfos as $applicantInfo){
                                                    ?>
                                                    <option value="<?php echo $applicantInfo->id; ?>" <?php if($applicantInfo->id == $id) {echo "selected=selected";} ?>><?php echo $applicantInfo->lastName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>
<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="supervisorId" name="supervisorId">
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

					<!-- Another Row -->

					<div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_course_subject_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addSubjectRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><script>var employeeData = [
    <?php foreach ($employees as $key=>$value) {
		  echo "'".$value->lastName."',";
	}?>];
var employeeSelectOptions =     <?php foreach ($employees as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->lastName."</option>'+";	}?> ';'
  </script><table id="subjectTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_course_title_label'); ?></th>
<th><?php echo $this->lang->line('content_course_description_label'); ?></th>
<th><?php echo $this->lang->line('content_course_classDate_label'); ?></th>
<th><?php echo $this->lang->line('content_course_startHour_label'); ?></th>
<th><?php echo $this->lang->line('content_course_duration_label'); ?></th>
<th><?php echo $this->lang->line('content_course_teacherId_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($subjects)) {
                                foreach ($subjects as $index => $subject) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Title</label> 
	<input required="" type="text" class="form-control" id="subject_title_<?php echo $index;?>" value="<?php echo $subject->title; ?>" name="subject[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_description_label'); ?></label> 
	<textarea required="" class="form-control" id="subject_description_<?php echo $index;?>" name="subject[]"><?php echo $subject->description; ?></textarea>
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Class Date</label> 
	<input required="" type="date" class="form-control" id="subject_classDate_<?php echo $index;?>" value="<?php echo $subject->classDate; ?>" name="subject[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Start Hour</label> 
	<input required="" type="text" class="form-control" id="subject_startHour_<?php echo $index;?>" value="<?php echo $subject->startHour; ?>" name="subject[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Duration</label> 
	<input required="" type="number" class="form-control" id="subject_duration_<?php echo $index;?>" value="<?php echo $subject->duration; ?>" name="subject[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="subject_teacherId_<?php echo $index;?>" value="<?php echo $subject->teacherId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		if($key==$subject->teacherId)
{  echo "<option selected value=".$value->id.">".$value->lastName."</option>";}
		 else { echo "<option value=".$value->id.">".$value->lastName."</option>";}
	}?></select>	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteSubjectRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_title_label'); ?></label> 
		<input required="" type="text" class="form-control" id="subject_title_0" name="subject[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_description_label'); ?></label> 
		<textarea required="" class="form-control" id="subject_description_0" name="subject[]"></textarea>
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_classDate_label'); ?></label> 
		<input required="" type="date" class="form-control" id="subject_classDate_0" name="subject[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_startHour_label'); ?></label> 
		<input required="" type="text" class="form-control" id="subject_startHour_0" name="subject[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_course_duration_label'); ?></label> 
		<input required="" type="number" class="form-control" id="subject_duration_0" name="subject[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="subject_teacherId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->lastName."</option>";
	}?></select>
			</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteSubjectRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div>

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveCourse()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadCourseListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadCourseListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

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
							<button class="btn btn-success" onclick="approveCourse(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteCourse(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/course/courseActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>