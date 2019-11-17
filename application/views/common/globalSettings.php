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
 * Class : userPreferenceForm (userPreferenceForm View)
 * User Preference Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
            <?php

            $id = $userPreference->id;
            // $field1 = $userPreference->field1;
            $userId = $userPreference->userId;
            $activeCompanyId = $userPreference->activeCompanyId;
            $language = $userPreference->language;
            $activeRole = $userPreference->activeRole;
            $showNotification = $userPreference->showNotification;
            $showEmail = $userPreference->showEmail;
            $showTask = $userPreference->showTask;
            $applicationTitle = $userPreference->applicationTitle;
            $metaTags = $userPreference->metaTags;


            $isApproved = $userPreference->isApproved;
            $createdBy = $userPreference->createdBy;
            $createdDate = $userPreference->createdDate;

            $updatedBy = $userPreference->updatedBy;
            $updatedDate = $userPreference->updatedDate;
            ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">User Preference Form</h4>
                            <p class="card-category">Please Fillup the form</p>
                        </div>
                        <div class="card-body">
                            <!-- form role="form" action="<?php echo base_url() ?>userPreference/create"
					method="post" id="createUserPreference" role="form"-->
                            <input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

                            <div class="mdc-layout-grid__inner">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <select disabled="disabled" required="" class="form-control basic-select2" id="userId" name="userId">
                                            <option value="0">Select User</option>
                                            <?php
                                            if (!empty($users)) {
                                                foreach ($users as $user) {
                                                    ?>
                                                    <option value="<?php echo $user->id; ?>" <?php if ($user->id == $id) {
                                                                                                            echo "selected=selected";
                                                                                                        } ?>><?php echo $user->fullName ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <select required="" class="form-control basic-select2" id="activeCompanyId" name="activeCompanyId">
                                            <option value="0">Select Company Profile</option>
                                            <?php
                                            if (!empty($companyProfiles)) {
                                                foreach ($companyProfiles as $companyProfile) {
                                                    ?>
                                                    <option value="<?php echo $companyProfile->id; ?>" <?php if ($companyProfile->id == $id) {
                                                                                                                    echo "selected=selected";
                                                                                                                } ?>><?php echo $companyProfile->name ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select> </div>
                                </div>

                                <!-- Language -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Language<span style='color:red'>*</span></label>
                                            <input required="" type="text" class="form-control" id="language" name="language" value="<?php echo $language; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <select required="" class="form-control basic-select2" id="activeRole" name="activeRole">
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

                                <!-- Show Notification -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Show Notification</label>
                                            <input required="" type="text" class="form-control" id="showNotification" name="showNotification" value="<?php echo $showNotification; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Show Email -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Show Email</label>
                                            <input required="" type="text" class="form-control" id="showEmail" name="showEmail" value="<?php echo $showEmail; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Show Task -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Show Task</label>
                                            <input required="" type="text" class="form-control" id="showTask" name="showTask" value="<?php echo $showTask; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Application Title -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Application Title</label>
                                            <input required="" type="text" class="form-control" id="applicationTitle" name="applicationTitle" value="<?php echo $applicationTitle; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Meta Tags -->
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Meta Tags</label>
                                            <input required="" type="text" class="form-control" id="metaTags" name="metaTags" value="<?php echo $metaTags; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Another Row -->




                                <button onclick="saveUserPreference()" class="btn btn-success pull-right">Save</button>

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