  <!--Meta-->
  <?php $this->load->view('backend/template/meta')?>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url("assets/template/backend/dist")?>
    /img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php $this->load->view('backend/template/navbar')?>
  <!-- /.navbar -->

  <!-- Sidebar -->
  <?php $this->load->view('backend/template/sidebar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
  
    <!-- /.content -->
  </div>
  <!-- footer -->
  <?php $this->load->view('backend/template/footer')?>

</div>
<!-- ./wrapper -->

<!-- JS -->
<?php $this->load->view('backend/template/js')?>
</body>
</html>
