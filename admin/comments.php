<?php
  include("./includes/header.php");
  include("./includes/sidebar.php");
?>
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 col-sm-push-2" id="dashboard">
  <h1>Comments</h1>

    <div class="table-responsive">

      <form method="post">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>Select</th>
              <th>Name</th>
              <th>Post</th>
              <th>Comment</th>
              <th>Status</th>
              <th>Reply</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" name="checkbox[]"></td>
              <td>Nerd</td>
              <td>Barack Obama</td>
              <td>Hey you suck butt</td>
              <td><button class="btn btn-success">Approved</button></td>
              <td><a href="#"class="btn btn-info">Reply</a>
                  <textarea rows="2" cols="15"></textarea></td>
            </tr>
          </tbody>
        </table>

        <select name="action">
          <option>Delete</option>
          <option>Approve</option>
        </select>

        <button type="submit" name="apply" class="btn btn-default">Apply Changes</button>

      </form>

    </div>

  </div>
</main>

<?php
  include("./includes/footer.php");
?>
