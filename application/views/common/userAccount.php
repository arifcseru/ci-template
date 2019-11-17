<!-- /**
 * Class : index.php (index to page load)
 * Applicant Info Actions
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
		<div class="container-fluid" id="holidayTypeContainer">
			<!-- /**
 * Class : userForm (userForm View)
 * User Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
			<?php

			$id = $user->id;
			// $field1 = $user->field1;
			$fullName = $user->fullName;
			$email = $user->email;
			$password = $user->password;
			$confirmPassword = $user->confirmPassword;
			$roleId = $user->roleId;
			$CompanyProfile = $user->CompanyProfile;
			$mobileNumber = $user->mobileNumber;


			$isApproved = $user->isApproved;
			$createdBy = $user->createdBy;
			$createdDate = $user->createdDate;

			$updatedBy = $user->updatedBy;
			$updatedDate = $user->updatedDate;
			?>
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header card-header-info">
							<h4 class="card-title">User Form</h4>
							<p class="card-category">Please Fillup the form</p>
						</div>
						<div class="card-body">
							<!-- form role="form" action="<?php echo base_url() ?>user/create"
					method="post" id="createUser" role="form"-->
							<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

							<div class="mdc-layout-grid__inner">

								<!-- Full Name -->
								<div class="row">


									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<label class="bmd-label-floating">Full Name</label>
											<input required="" type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $fullName; ?>" />
										</div>
									</div>
								</div>
								<!-- Email -->
								<div class="row">


									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<label class="bmd-label-floating">Email</label>
											<input required="" type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
										</div>
									</div>
								</div>
								<!-- Password -->
								<div class="row">


									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<label class="bmd-label-floating">Password</label>
											<input required="" type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" />
										</div>
									</div>
								</div>
								<!-- Confirm Password -->
								<div class="row">


									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<label class="bmd-label-floating">Confirm Password</label>
											<input required="" type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="<?php echo $confirmPassword; ?>" />
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group bmd-form-group">
										<select required="" class="form-control basic-select2" id="roleId" name="roleId">
											<option value="0">Select Role</option>
											<?php
											if (!empty($roles)) {
												foreach ($roles as $role) {
													?>
													<option value="<?php echo $role->id; ?>" <?php if ($role->id == $id) {
																											echo "selected=selected";
																										} ?>><?php echo $role->name ?></option>
											<?php
												}
											}
											?>
										</select> </div>
								</div>

								<!-- Mobile Number -->
								<div class="row">


									<div class="col-md-12">
										<div class="form-group bmd-form-group">
											<label class="bmd-label-floating">Mobile Number</label>
											<input required="" type="text" class="form-control" id="mobileNumber" name="mobileNumber" value="<?php echo $mobileNumber; ?>" />
										</div>
									</div>
								</div>
								<!-- Another Row -->

								<div class="card">
									<div class="card-header card-header-info">
										<h4><b>Company Profile</b><button class="btn btn-success btn-sm pull-right" onclick="addCompanyProfileRow()"><i class="fa fa-plus"></i></button></h4>
									</div>
									<div class="card-body">
										<table id="companyProfileTable" class="table table-hover">
											<tr>
												<th>Name</th>
												<th>Address</th>
												<th>Established Date</th>
												<th>Email</th>
												<th>Author Name</th>
												<th>Action</th>
												</thead>
											</tr><?php
													if (!empty($companyProfiles)) {
														foreach ($companyProfiles as $index => $companyProfile) {
															?>
													<tr>
														<td>
															<div class="form-group bmd-form-group">
																<label class="bmd-label-floating">Name</label>
																<input required="" type="text" class="form-control" id="companyProfile_name_<?php echo $index; ?>" value="<?php echo $companyProfile->name; ?>" name="companyProfile[]">
															</div>
														</td>
														<td>
															<div class="form-group bmd-form-group">
																<label class="bmd-label-floating">Address</label>
																<textarea required="" class="form-control" id="companyProfile_address_<?php echo $index; ?>" name="companyProfile[]"><?php echo $companyProfile->address; ?></textarea>
															</div>
														</td>
														<td>
															<div class="form-group bmd-form-group">
																<label class="bmd-label-floating">Established Date</label>
																<input required="" type="date" class="form-control" id="companyProfile_establishedDate_<?php echo $index; ?>" value="<?php echo $companyProfile->establishedDate; ?>" name="companyProfile[]">
															</div>
														</td>
														<td>
															<div class="form-group bmd-form-group">
																<label class="bmd-label-floating">Email</label>
																<input required="" type="text" class="form-control" id="companyProfile_email_<?php echo $index; ?>" value="<?php echo $companyProfile->email; ?>" name="companyProfile[]">
															</div>
														</td>
														<td>
															<div class="form-group bmd-form-group">
																<label class="bmd-label-floating">Author Name</label>
																<input required="" type="text" class="form-control" id="companyProfile_authorName_<?php echo $index; ?>" value="<?php echo $companyProfile->authorName; ?>" name="companyProfile[]">
															</div>
														</td>

														<td><button class="btn btn-danger btn-sm" onclick="deleteCompanyProfileRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>
													</tr>
												<?php
													}
												} else { ?>
												<tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0" />
													<td>
														<div class="form-group bmd-form-group">
															<label class="bmd-label-floating">Name</label>
															<input required="" type="text" class="form-control" id="companyProfile_name_0" name="companyProfile[]" value="">
														</div>
													</td>
													<td>
														<div class="form-group bmd-form-group">
															<label class="bmd-label-floating">Address</label>
															<textarea required="" class="form-control" id="companyProfile_address_0" name="companyProfile[]"></textarea>
														</div>
													</td>
													<td>
														<div class="form-group bmd-form-group">
															<label class="bmd-label-floating">Established Date</label>
															<input required="" type="date" class="form-control" id="companyProfile_establishedDate_0" name="companyProfile[]" value="">
														</div>
													</td>
													<td>
														<div class="form-group bmd-form-group">
															<label class="bmd-label-floating">Email</label>
															<input required="" type="text" class="form-control" id="companyProfile_email_0" name="companyProfile[]" value="">
														</div>
													</td>
													<td>
														<div class="form-group bmd-form-group">
															<label class="bmd-label-floating">Author Name</label>
															<input required="" type="text" class="form-control" id="companyProfile_authorName_0" name="companyProfile[]" value="">
														</div>
													</td>

													<td><button class="btn btn-danger btn-sm" onclick="deleteCompanyProfileRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>
												</tr> <?php	                         } ?>
										</table>
									</div>
								</div>


								<button onclick="saveUser()" class="btn btn-success pull-right">Save</button>

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

				</div>
			</div>

		</div>
	</div>


	<?php $this->load->view('materials2/includes/common-footer.php'); ?>
</div>

<script src="<?php echo base_url(); ?>js/common/commonRequestActions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/common/commonNavigations.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.basic-select2').select2();
        $('.basic-multiple-select2').select2();
    });
</script>