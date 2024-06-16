<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "hi";
die();
if (isset($_POST['create_post'])) {
  $post_title = escape($_POST['post_title']);
  $post_category_id = escape($_POST['post_category_id']);
  $post_status = escape($_POST['post_status']);
  $post_user = escape($_SESSION['username']);
  $post_tags = escape($_POST['post_tags']);
  $post_content = escape($_POST['post_content']);
  $post_date = date('Y-m-d'); // Use 'Y-m-d' for MySQL date format

  $post_image = $_FILES['post_image']['name'];
  $post_temp_image = $_FILES['post_image']['tmp_name'];
  $location = "../images/$post_image";
  move_uploaded_file($post_temp_image, $location);

  $query = "INSERT INTO posts(post_title, post_category_id, post_status, post_user, post_image, post_tags, post_content, post_date) ";
  $query .= "VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = mysqli_prepare($connection, $query);
  if (!$stmt) {
    die("Prepare statement failed: " . mysqli_error($connection));
  }

  mysqli_stmt_bind_param($stmt, "ssssssss", $post_title, $post_category_id, $post_status, $post_user, $post_image, $post_tags, $post_content, $post_date);
  mysqli_stmt_execute($stmt);

  if (mysqli_stmt_affected_rows($stmt) >= 1) {
    echo "<p>New post created successfully.</p>";
    mysqli_stmt_close($stmt);
    header("Location: posts.php");
  } else {
    die("Error: " . mysqli_stmt_error($stmt));
  }
}
