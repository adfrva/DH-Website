<?php
  include("includes/header.php");
  include("includes/sidebar.php");
?>

<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 col-sm-push-2" id="dashboard">
  <h1 class="page-header">Add New Post</h1>

  <div class="table-responsive">
    <form method="post">
      <div class="form-group">
        <label>
          Posts Title:
        </label>

        <input class="form-control" type="text" name="title" />
      </div>

      <div class="form-group">
        <label>
          Posts Author:
        </label>

        <input class="form-control" type="text" name="author" />
      </div>

      <div class="form-group">
        <label>
          Posts Body:
        </label>

        <textarea name="body" class="form-control" rows=6></textarea>
      </div>

      <div class="form-group">
        <label>
          Posts Keywords:
        </label>

        <input class="form-control" type="text" name="keywords" />
      </div>

      <button type="submit" name="addPost" class="btn btn-default">Add Post</button>
    </form>
  </div>
</main>

<?php
  include("includes/footer.php");
?>
