<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/template/header_link'); ?>

<body class="sidebar-fixed">
  <div id="app">
    <?php $this->load->view('admin/template/header'); ?>

    <?php $this->load->view('admin/template/sidebar'); ?>
    <!--START PAGE HEADER -->
    <main>
      <div class="container-fluid site-width">
        <div class="row">
          <div class="col-sm-10  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
              <div class="w-sm-100 mr-auto">
                <h4 class="mb-0"><?= $title ?></h4>
              </div>
            </div>
          </div>
        </div>
        <section class="page-content container-fluid">
          <div class="row">


            <div class="col-lg-3 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tax %</label>
                      <input type="number" class="form-control" name="data_value" value="<?= $extra_data['data_value'] ?>" name="tax">
                      <?php
                      if ($this->session->has_userdata('msg')) {
                        echo $this->session->userdata('msg');
                        $this->session->unset_userdata('msg');
                      }
                      ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
                <div class="col-md-6"></div>
              </div>
              <!--END PAGE CONTENT -->
            </div>
          </div>
      </div>
      <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>