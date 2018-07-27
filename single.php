<?php
  include("./includes/header.php");
  if(isset($_GET['post'])){
    $id = mysqli_real_escape_string($db, $_GET['post']);
    $query = "SELECT * FROM posts WHERE id='$id'";
  }

  $posts = $db->query($query);

  if(isset($_POST['post_comment'])){
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $comment = mysqli_real_escape_string($db, $_POST['comment']);

    $query = "INSERT INTO comments (name,comment,post) VALUES('$name', '$comment', '$id')";

    $db->query($query);
    header("Location:single.php?post=$id");
    exit();
  }

  $query = "SELECT * FROM comments WHERE post='$id' AND status='1'";
  $comments = $db->query($query);
?>

<?php
  include("./includes/sidebar.php");
?>

<!-- Post Content Column -->
<div class="col-lg-8 col-lg-pull-4">

  <?php
  if($posts->num_rows > 0){
    while($row = $posts->fetch_assoc()){
  ?>

  <!-- Title -->
  <h1 class="blog-post-title"><?php echo $row['title']; ?></h1>

  <!-- Author -->
  <p class="lead" style="color: #393c42">by <?php echo $row['author'] ?></p>

  <hr>

  <!-- Date/Time -->
  <p>Posted on <?php echo $row['date'] ?></p>

  <hr>
  <!-- Preview Image -->
  <img class="img-fluid rounded" src=<?php echo $row['image'] ?> alt="" width=100%>
  <hr>

  <!-- Post Content -->
  <?php
    $body = $row['body'];
    echo $body;
  ?>
  <!--End of Content-->
  <hr>
  <?php
      }//End of While
    }//End of if
  ?>
</div>

<h3><?php echo $comments->num_rows;?> Comments</h3>

<hr>

<div>
  <!-- Comments Form -->
  <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
      <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder = "Name">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" name="comment"></textarea>
        </div>
        <button type="submit" name="post_comment" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <hr>

  <?php while($comment = $comments->fetch_assoc()){

    if($comment['is_admin'] != 1){
  ?>
  <!-- Single Comment -->
  <div class="media mb-4">

    <!-- User image -->
    <!-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> -->
    <div class="media-body">
      <h5 class="mt-0"><?php echo $comment['name']; ?></h5>
      <?php echo $comment['comment']; ?>
    </div>
    <hr>
  </div>
  <?php }else{ ?>

    <!-- Single Comment -->
    <div class="media mb-4">

      <!-- User image -->
      <!-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> -->
      <div class="media-body">
        <h5 class="mt-0"><?php echo $comment['name']; ?> ~~|Admin|</h5>
          <?php echo $comment['comment']; ?>
      </div>
      <hr>
    </div>

  <?php } } ?>

</div>

<div style="padding: 10px"></div>

<?php
  include("./includes/footer.php");
?>
