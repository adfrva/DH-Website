<?php
  include("./includes/header.php");
  include("./includes/sidebar.php");
?>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 col-sm-push-2" id="dashboard">
          <h1>Posts</h1>
          <a href="newPost.php" class="btn btn-info btn-lg">Add New Post</a>

          <div class="table-responsive">

            <form method="post">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Select</th>
                  <th>Date Posted</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Keywords/Tags</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" name="checkbox[]"></td>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>Tags</td>
                  <td><a href="#"class="btn btn-warning">Edit</a></td>
                </tr>
              </tbody>
            </table>

            <select name="action">
              <option>Delete</option>
              <option>Clone</option>
            </select>

            <button type="submit" name="apply" class="btn btn-default">Apply Changes</button>

          </form>

          </div>

          </div>
        </main>

<?php
  include("./includes/footer.php");
?>
