<?php
  include("./includes/header.php");
  include("./includes/sidebar.php");
?>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 col-sm-push-2" id="dashboard">
          <h1>Dashboard</h1>

          <h2>Recent Posts</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date Posted</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td><a href="#"class="btn btn-warning">Edit</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td><a href="#"class="btn btn-warning">Edit</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td><a href="#"class="btn btn-warning">Edit</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td><a href="#"class="btn btn-warning">Edit</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td><a href="#"class="btn btn-warning">Edit</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
              </tbody>
            </table>
          </div>

          <h2>Recent Comments</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Comment</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td><a href="#"class="btn btn-success">Approve</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td><a href="#"class="btn btn-success">Approve</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td><a href="#"class="btn btn-success">Approve</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td><a href="#"class="btn btn-success">Approve</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td><a href="#"class="btn btn-success">Approve</a> / <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>

<?php
  include("./includes/footer.php");
?>
