<!-- /**
 * Class : index.php (index to page load)
 * Entity Name Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<div id="loadingDiv"></div>

<div class="main-panel">
	<!-- Navbar -->
	<nav
		class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<a class="navbar-brand" href="<?php echo base_url(); ?>entityName">Admin
					Panel >> Entity Name</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				aria-controls="navigation-index" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="sr-only">Toggle navigation</span> <span
					class="navbar-toggler-icon icon-bar"></span> <span
					class="navbar-toggler-icon icon-bar"></span> <span
					class="navbar-toggler-icon icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end">
				<!-- form class="navbar-form">
					<span class="bmd-form-group"><div class="input-group no-border">
							<input type="text" value="" class="form-control"
								placeholder="Search...">
							<button type="submit"
								class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i>
								<div class="ripple-container"></div>
							</button>
						</div></span>
				</form-->
				<ul class="navbar-nav">
					<!-- li class="nav-item"><a class="nav-link" href="#pablo"> <i
							class="material-icons">dashboard</i>
							<p class="d-lg-none d-md-block">Stats</p>
					</a></li-->
					<!-- li class="nav-item dropdown"><a class="nav-link"
						href="http://example.com" id="navbarDropdownMenuLink"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">notifications</i> <span
							class="notification">5</span>
							<p class="d-lg-none d-md-block">Some Actions</p>
					</a>
						<div class="dropdown-menu dropdown-menu-right"
							aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Mike John responded to your
								email</a> <a class="dropdown-item" href="#">You have 5 new tasks</a>
							<a class="dropdown-item" href="#">You're now friend with Andrew</a>
							<a class="dropdown-item" href="#">Another Notification</a> <a
								class="dropdown-item" href="#">Another One</a>
						</div></li-->
					<li class="nav-item dropdown"><a class="nav-link" href="#pablo"
						id="navbarDropdownProfile" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false"> <i
							class="material-icons">person</i>
							<p class="d-lg-none d-md-block">Account</p>
					</a>
						<div class="dropdown-menu dropdown-menu-right"
							aria-labelledby="navbarDropdownProfile">
							<a class="dropdown-item"
								href="<?php echo base_url(); ?>userProfile">Profile</a> <a
								class="dropdown-item"
								href="<?php echo base_url(); ?>companyProfile">Settings</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url(); ?>logout">Log
								out</a>
						</div></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	<div class="content">
		<div class="container-fluid" id="entityNameContainer">
			<div class="row">
				<div class="col-md-12">
					<div class="card">

						<div class="card-header card-header-info">
							<div class="form-group pull-left">
								<h4 class="card-title ">Entity Name List</h4>
								<p class="card-category">Entity Name List Data</p>
							</div>
							<div class="form-group pull-right">
								<button class="btn btn-info btn-sm" onclick="loadEntityNameFormUI()">
									<i class="fa fa-plus"></i> Add New
								</button>
								<a class="btn btn-warning btn-sm" target="__BLANK" href="<?php echo base_url(); ?>entityName/allData"><i class="fa fa-print"></i> Print</a>
							</div>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead class="text-info">
										<tr>
											<!-- th>Field 1</th-->
											<th>Name</th>
<th>Description</th>
<th>Number</th>

											<th>Created Date</th>
											<th>Action Buttons</th>
										</tr>
									</thead>
									<tbody>
                    <?php
                    if (! empty($entityNameList)) {
                        foreach ($entityNameList as $record) {
                            ?>
                    <tr>
											<!-- td><?php echo $record->field1 ?></td-->
											<td><?php echo $record->name ?></td>
<td><?php echo $record->description ?></td>
<td><?php echo $record->number ?></td>

											<td><?php echo date("d-m-Y", strtotime($record->createdDate)) ?></td>

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
											<button class="btn btn-success btn-sm"
														onclick="approveEntityName(<?php echo $record->id;?>)">
														<i class="fa fa-check"></i>
													</button>
											<?php
                            }
                            ?>
											
											<button class="btn btn-info btn-sm" onclick="loadEntityNameFormUIToView(<?php echo $record->id;?>)">
														<i class="fa fa-eye"></i>
													</button>
													<button class="btn btn-warning btn-sm"
														onclick="loadEntityNameFormUIToEdit(<?php echo $record->id;?>)">
														<i class="fa fa-pencil"></i>
													</button>
													<a target="__BLANK" class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>entityName/report/<?php echo $record->id;?>"><i class="fa fa-print"></i></a> 
													<button class="btn btn-danger btn-sm"
														onclick="deleteEntityName(<?php echo $record->id;?>)">
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
	<footer class="footer">
		<div class="container-fluid">
			<nav class="float-left">
				<ul>
					<li><a href="<?php echo base_url(); ?>"> Company Limited </a></li>
					<li><a href="<?php echo base_url(); ?>aboutus"> About Us </a></li>
					<li><a href="<?php echo base_url(); ?>latest"> Blog </a></li>
					<li><a href="<?php echo base_url(); ?>license"> Licenses </a></li>
				</ul>
			</nav>
			<div class="copyright float-right">
				©
				<script>
              document.write(new Date().getFullYear())
            </script>
				, made with <i class="material-icons">favorite</i> by <a
					href="<?php echo base_url(); ?>" target="_blank">Company Limited</a>
				Solutions is our moto.
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url(); ?>js/common_actions.js"
	type="text/javascript"></script>
<script
	src="<?php echo base_url(); ?>js/entityName/entityNameActions.js"
	type="text/javascript"></script>
<script
	src="<?php echo base_url(); ?>js/entityName/entityNameNavigations.js"
	type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
	</script>