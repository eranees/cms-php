<div class="card my-4">
  <h5 class="card-header">Recent</h5>
  <div class="card-body">
    <?php
    $query = "SELECT * FROM posts ORDER BY post_date DESC LIMIT 4";
    $select_all_posts_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
      $post_id = $row['post_id'];
      $post_title = $row['post_title'];
      $post_user = $row['post_user'];
      $post_date = $row['post_date'];
      $post_image = $row['post_image'];
      $post_content = $row['post_content'];
    ?>
      <div class="card mb-4">
        <img class="card-img-top" src="images/<?php echo $post_image; ?>" alt="Post Image">
        <div class="card-body">
          <h5 class="card-title"><?php echo $post_title; ?></h5>
          <p class="card-text">
            <?php
            if (strlen($post_content) > 50) {
              echo substr($post_content, 0, 20) . '...';
            } else {
              echo $post_content;
            }
            ?>
          </p>
          <a href="post.php?p_id=<?php echo $post_id; ?>" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
          Posted on <?php echo $post_date; ?> by <?php echo $post_user; ?>
        </div>
      </div>
    <?php } ?>
  </div>
</div>