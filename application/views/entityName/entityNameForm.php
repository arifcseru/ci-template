<!-- /**
 * Class : entityNameForm (entityNameForm View)
 * Entity Name Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $entityName->id;
// $field1 = $entityName->field1;
$name = $entityName->name;
$description = $entityName->description;
$EntityDetails = $entityName->EntityDetails;
$number = $entityName->number;


$isApproved = $entityName->isApproved;
$createdBy = $entityName->createdBy;
$createdDate = $entityName->createdDate;

$updatedBy = $entityName->updatedBy;
$updatedDate = $entityName->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title">Entity Name Form</h4>
				<p class="card-category">Please Fillup the form</p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>entityName/create"
					method="post" id="createEntityName" role="form"-->
					<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> 

					<div class="mdc-layout-grid__inner">
						
<!-- Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Name<span style='color:red'>*</span></label> 
									<input required="" type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" />
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Description<span style='color:red'>*</span></label> 
									<textarea required="" rows="5" class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
								</div>
							</div>
						</div>
<!-- Number -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Number<span style='color:red'>*</span></label> 
									<input required="" type="text" class="form-control" id="number" name="number" value="<?php echo $number; ?>" />
								</div>
							</div>
						</div>
						<!-- Another Row -->

						<div class="card"><div class="card-header card-header-info"><h4><b>Entity Details</b><button class="btn btn-success btn-sm pull-right" onclick="addEntityDetailsRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><script>var userData = [
    <?php foreach ($users as $key=>$value) {
		  echo "'".$value->fullName."',";
	}?>];
var userSelectOptions =     <?php foreach ($users as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->fullName."</option>'+";	}?> ';'
  </script><table id="entityDetailsTable" class="table table-hover"><tr><th>User Id</th>
<th>Text Box</th>
<th>Date</th>
<th>Number</th>
<th>Boolean</th>
<th>Text</th>
<th>Action</th></thead></tr><?php
                            if (!empty($entityDetailss)) {
                                foreach ($entityDetailss as $index => $entityDetails) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="entityDetails_userId_<?php echo $index;?>" value="<?php echo $entityDetails->userId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose user</option>
    <?php foreach ($users as $key=>$value) {
		if($key==$entityDetails->userId)
{  echo "<option selected value=".$value->id.">".$value->fullName."</option>";}
		 else { echo "<option value=".$value->id.">".$value->fullName."</option>";}
	}?></select>	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Text Box</label> 
	<input required="" type="text" class="form-control" id="entityDetails_textBox_<?php echo $index;?>" value="<?php echo $entityDetails->textBox; ?>" name="entityDetails[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Date</label> 
	<input required="" type="date" class="form-control" id="entityDetails_date_<?php echo $index;?>" value="<?php echo $entityDetails->date; ?>" name="entityDetails[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Number</label> 
	<input required="" type="number" class="form-control" id="entityDetails_number_<?php echo $index;?>" value="<?php echo $entityDetails->number; ?>" name="entityDetails[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Boolean</label> 
	<input required="" type="checkbox" class="form-control" id="entityDetails_boolean_<?php echo $index;?>" value="<?php echo $entityDetails->boolean; ?>" name="entityDetails[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Text</label> 
	<textarea required="" class="form-control" id="entityDetails_text_<?php echo $index;?>" name="entityDetails[]"><?php echo $entityDetails->text; ?></textarea>
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteEntityDetailsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="entityDetails_userId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose user</option>
    <?php foreach ($users as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->fullName."</option>";
	}?></select>
			</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating">Text Box</label> 
		<input required="" type="text" class="form-control" id="entityDetails_textBox_0" name="entityDetails[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating">Date</label> 
		<input required="" type="date" class="form-control" id="entityDetails_date_0" name="entityDetails[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating">Number</label> 
		<input required="" type="number" class="form-control" id="entityDetails_number_0" name="entityDetails[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating">Boolean</label> 
		<input required="" type="checkbox" class="form-control" id="entityDetails_boolean_0" name="entityDetails[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating">Text</label> 
		<textarea required="" class="form-control" id="entityDetails_text_0" name="entityDetails[]"></textarea>
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteEntityDetailsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div>
						
								
						<button onclick="saveEntityName()" class="btn btn-success pull-right">Save</button>
						<button onclick="loadEntityNameListUI()" class='btn btn-warning pull-left'> Cancel</button>
						<div class="clearfix"></div>
						* Required field
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
					<?php

if ($id != null) {
        ?>
					<div class="card">
			<!-- div class="card-avatar">
							<a href="#pablo"> <img class="img"
								src="../assets/img/faces/marc.jpg">
							</a>
						</div-->
			<div class="card-header card-header-info">
				<h6 class="card-title">Special Links</h6>
			</div>
			<div class="card-body">
			 				<?php
        if ($isApproved == "1") {
            ?>
							<button disabled class="btn btn-info">Approved</button>
							 <?php
        } else {
            ?>
							<button class="btn btn-success"  onclick="approveEntityName(<?php echo $id;?>)">Approve</button>
							<?php
        }
        ?>
							 <button class="btn btn-danger"  onclick="deleteEntityName(<?php echo $id;?>)">Delete</button>
			</div>
		</div>
					<?php }?>
				</div>
</div>

<script src="<?php echo base_url(); ?>js/entityName/entityNameActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
	</script>