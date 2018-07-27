<?php
  include("./includes/header.php");
  $query = "SELECT * FROM posts"; //Get all posts from database

  $posts = $db -> query($query);
?>

<div class="blog-header">
  <h1 class="blog-title">Not So Drunk History</h1>
  <p class="lead blog-description">But I'm Not A Historian</p>
</div>

<hr>

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
  <h1 class="blog-post-title"> <a href="single.php?post=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a> </h1>

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
    echo html_cut($body, 400);
  ?>
  <br>
  <br>
  <a href="single.php?post=<?php echo $row['id'] ?>" class="btn btn-primary">Read More</a>

  <!--End of Content-->
  <hr>
  <?php
      }//End of While
    }//End of if
  ?>
</div>

<?php
  include("./includes/footer.php");
?>
