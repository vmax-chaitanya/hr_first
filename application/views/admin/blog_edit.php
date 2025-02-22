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
                                    <?php //echo form_open_multipart('admin/banner/create'); 
                                    ?>

                                    <form class="form-sample" method="POST"
                                        action="<?php echo site_url('admin/blog/update/' . $blog['id']); ?>"
                                        enctype="multipart/form-data">
                                        <p class="card-description">Blog Details</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="title"
                                                            value="<?php echo $blog['title']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status" required>
                                                            <option value="1" <?php echo ($blog['status'] == '1') ? 'selected' : ''; ?>>Active</option>
                                                            <option value="2" <?php echo ($blog['status'] == '2') ? 'selected' : ''; ?>>In-Active</option>
                                                            <option value="3" <?php echo ($blog['status'] == '3') ? 'selected' : ''; ?>>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="image">
                                                        <?php if ($blog['image']): ?>
                                                            <img src="<?php echo base_url('' . $blog['image']); ?>"
                                                                alt="Blog Image" width="150">
                                                        <?php else: ?>
                                                            No Image
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Banner Image</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" class="form-control" name="banner_image"
                                                                >
                                                            <?php if ($blog['banner_image']): ?>
                                                                <img src="<?php echo base_url('' . $blog['banner_image']); ?>"
                                                                    alt="Blog Image" width="150">
                                                            <?php else: ?>
                                                                No Image
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                          
                                            <!-- <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Created By</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="created_by"
                                                            value="<?php echo $blog['created_by']; ?>" required>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">About</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="about"
                                                            rows="4"><?php echo $blog['about']; ?></textarea>
                                                        <?php echo form_error('about', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" rows="4"
                                                            id="editor"><?php echo $blog['description']; ?></textarea>
                                                        <?php echo form_error('description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Name</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="meta_name" rows="6"  ><?php echo $blog['meta_name']; ?></textarea>
                                                        <?php echo form_error('meta_name', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="meta_description" rows="6"  ><?php echo $blog['meta_description']; ?></textarea>
                                                        <?php echo form_error('meta_description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="meta_keywords" rows="6"  ><?php echo $blog['meta_keywords']; ?></textarea>
                                                        <?php echo form_error('meta_keywords', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <input type="hidden" class="form-control" name="old_image"
                                                    value="<?php echo $blog['image']; ?>">
                                                <input type="hidden" class="form-control" name="old_banner_image"
                                                    value="<?php echo $blog['banner_image']; ?>">
                                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                                <a href="<?php echo site_url('admin/blog'); ?>"
                                                    class="btn btn-light">Cancel</a>
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