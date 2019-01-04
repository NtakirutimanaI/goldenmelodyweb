<!DOCTYPE html>
<html lang="en">

 <?php include "header.php" ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">GMF
        <small>Audio Albums</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Audios</li>
      </ol>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="audio.png" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Audio 1 album</h2>
              <p class="card-text">This album was done and Launched during the year of.......!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Here!</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="audio3.png" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Audio 2</h2>
              <p class="card-text">This album was done and Launched during the year of.......!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Here!</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="audio4.png" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Audio 4</h2>
              <p class="card-text">This album was done and Launched during the year of.......!s</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Here!</a>
            </div>
          </div>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Upload Here</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Next &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="https://www.facebook.com">Facebook</a>
                    </li>
                    <li>
                      <a href="https://www.whatsapp.com">Whatsapp</a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com">Instagram</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="https://www.twitter.com">Twitter</a>
                    </li>
                    <li>
                      <a href="https://www.tunein.com">Tunein</a>
                    </li>
                    <li>
                      <a href="#">Other location</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new gmf card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
