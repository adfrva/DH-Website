<?php include("./includes/header.php");

  if(isset($_GET['search'])){
    $keyword = mysqli_real_escape_string($db, $_GET["search"]);
    $query = "SELECT * FROM posts WHERE keywords LIKE '$keyword%'";
    $posts = $db->query($query);
  }else{
    echo "<p>Missing Keywords Brah</p>";
  }
?>

<hr>

<?php
  include("./includes/sidebar.php");
?>

<div class="col-lg-8 col-lg-pull-4">

  <?php if($posts->num_rows > 0){ ?>
  <blockquote>
    Search Results for '<?php echo @$_GET['search']; ?>'
  </blockquote>

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

  <a href="single.php?post=<?php echo $row['id'] ?>" class="btn btn-primary">Read More</a>

  <!--End of Content-->
  <hr>
  <?php
      }//End of While
    }//End of if
  ?>

  <?php }else{ ?>
  <blockquote>
    No Matching Posts for '<?php echo @$_GET['search']; ?>'
  </blockquote>
  <?php } ?>

</div>



<?php
  include("./includes/footer.php");
?>
