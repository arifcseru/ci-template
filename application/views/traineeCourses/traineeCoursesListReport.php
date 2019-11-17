<!-- /**
 * Class : traineeCoursesList (traineeCoursesForm List)
 * Trainee Courses Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<!DOCTYPE html>

<head>
    <title><?php echo $this->lang->line('content_traineeCoursesReport_label'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="stylesheet/text">
        .header {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
        font-size: 35px;
    }
    
  </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <h2><?php echo $this->lang->line('header_title_label'); ?> </h2>
                    <h2>Company: <?php echo $pageTitle; ?></h2>
                    <h4><?php echo $this->lang->line('content_traineeCoursesListReportHeader_label'); ?> </h4>
                    <h6><?php echo $this->lang->line('content_generatedDate_label'); ?>: <?php
                                                                                            $createdDate  = date('Y-m-d H:i:s');
                                                                                            echo date("d/m/Y", strtotime($createdDate));
                                                                                            ?></h6>
                    <h6><?php echo $this->lang->line('content_generatedBy_label'); ?><?php echo $createdByUserName; ?></h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="text-info">
                            <tr>
                                <!-- th>Field 1</th-->
                                
                                <th><?php echo $this->lang->line('content_createdDate_label'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($traineeCoursesList)) {
                                foreach ($traineeCoursesList as $record) {
                                    ?>
                                    <tr>
                                        <!-- td><?php echo $record->field1 ?></td-->
                                        
                                        <td><?php echo date("d-m-Y", strtotime($record->createdDate)) ?></td>

                                        <td>
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

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('ul.pagination li a').click(function(e) {
                e.preventDefault();
                var link = jQuery(this).get(0).href;
                var value = link.substring(link.lastIndexOf('/') + 1);
                jQuery("#searchList").attr("action", baseURL + "traineeCoursesList/" + value);
                jQuery("#searchList").submit();
            });
        });
    </script>
    </div>
</body>

</html>