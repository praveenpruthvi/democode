<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layout/header"); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php $this->load->view("layout/sidebar"); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          
        <?php $this->load->view("layout/headerContent"); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 bp">
              Users
              <button class="btn btn-primary btn-sm float-right" onclick="loadUserTypes();">User Types</button>
          </h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                  Users List
                  <span class="float-right"> <button class="btn btn-primary btn-sm" onclick="loadAddUser();"> <i class="fa fa-plus"></i> </button> </span>
              </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div id="listContent" class="col-md-12">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view("layout/footerContent"); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php $this->load->view("layout/footer"); ?>
    <script>
        $(document).ready(function(){
            loadUserDetails();
        });
        
        function loadUserTypes(){
            $.get("<?= base_url("user/loadUserTypes"); ?>",function(responseData){
                $("#listContent").html(responseData);
            });
        }

        function loadUserDetails(){
            $.get("<?= base_url("user/getUsersData"); ?>",function(responseData){
                $("#listContent").html(responseData);
            });
        }
        
        function loadAddUser(){
            $.get("<?= base_url("user/loadAddUser"); ?>",function(responseData){
                $("#listContent").html(responseData);
            });
        }
    </script>
</body>
</html>