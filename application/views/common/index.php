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
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Holiday Type Form</h4>
                            <p class="card-category">Please Fillup the form</p>
                        </div>
                        <div class="card-body">
                            <!-- form role="form" action="<?php echo base_url() ?>holidayType/create"
					method="post" id="createHolidayType" role="form"-->
                            <input type="hidden" value="" name="id" id="id" />

                            <div class="mdc-layout-grid__inner">

                                <!-- Name -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Name<span style='color:red'>*</span></label>
                                            <input required="" type="text" class="form-control" id="name" name="name" value="" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <textarea required="" rows="5" class="form-control" id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Another Row -->




                                <button onclick="saveHolidayType()" class="btn btn-success pull-right">Save</button>
                                <button onclick="loadHolidayTypeListUI()" class='btn btn-warning pull-left'> Cancel</button>
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

<script src="<?php echo base_url(); ?>js/applicantInfo/applicantInfoActions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/applicantInfo/applicantInfoNavigations.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.basic-selec2').select2();
        $('.basic-multiple-select2').select2();
        $('#applicantInfoTable').DataTable();
    });
</script>