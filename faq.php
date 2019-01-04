<!DOCTYPE html>
<html lang="en">

  <?php include "header.php" ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">GMF
        <small>action plan</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"><u>Action Plan</u></li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">ACTION PLAN</a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              <p>Description written here.</p>
              <b>Weely Program: <a href="">Click!</a></b>
              <b>What we plan in the future.</b>
              <a href="#">Plan</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">REPORTS
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
               <p>Description written here.</p>
              <b>Click to view the report:</b>
              <a href="#">PRESIDENTIAL REPORT</a>
              <a href="GMF RAPORT.docx">ANIMATION REPORT</a>
              <a href="#">SPIRITUAL REPORT</a>
              <a href="#">FELLOWSHIP REPORT</a>
              <a href="#">SECRETARIAL REPORT</a>
              <a href="#">SECRETARIAL REPORT</a>
              <a href="loginadmin.php">Administrator</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">PROPERTIES</a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
             <p>Description written here.</p>
             <b>Click to view the properties:</b>
              <a href="GMF.docx">WRITTEN SONGS</a><br>
              <b>Click to view the other properties:</b>
              <a href="#">OTHERS</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
