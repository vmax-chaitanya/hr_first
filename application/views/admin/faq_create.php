<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('includes/styles.php'); ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('includes/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <?php include('includes/settings.php'); ?>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include('includes/side_menu.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Horizontal Two column</h4>
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php //echo form_open_multipart('admin/banner/create'); ?>

                                    <form class="form-sample" method="POST"
                                        action="<?php echo site_url('admin/faq/create'); ?>"
                                        enctype="multipart/form-data">
                                        <p class="card-description">FAQ Info</p>
                                        <div class="row">
                                            <!-- <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Type</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="type">
                                                            <option value="1">Static</option>
                                                            <option value="2">Dynamic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Page ID</label>
                                                    <div class="col-sm-9">
                                                        <input type="hidden" class="form-control" name="page_id"
                                                            value="<?php echo $service_id; ?>" />
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Question</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="question"
                                                            value="<?php echo set_value('question'); ?>" />
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status">
                                                            <option value="1">Active</option>
                                                            <option value="2">In-Active</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Question</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="question" rows="4"
                                                            required><?php echo set_value('question'); ?></textarea>
                                                        <?php echo form_error('question', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Answer</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="answer" rows="4"
                                                            required><?php echo set_value('answer'); ?></textarea>
                                                        <?php echo form_error('answer', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9">
                                            </div>
                                            <div class="col-md-3">
                                            <input type="hidden" class="form-control" name="page_id"
                                                            value="<?php echo $service_id; ?>" />
                                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                                <button class="btn btn-light">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('includes/footer.php'); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('includes/scripts.php'); ?>
    <!-- End custom js for this page-->
</body>




</html>