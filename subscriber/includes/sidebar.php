<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span id="dashboard">Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="postDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span id="posts">Posts</span>
    </a>
    <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="postDropdown">
      <a class="dropdown-item" id="all-posts" href="./posts.php">View All Posts</a>
      <a class="dropdown-item" id="add-posts" href="./posts.php?source=add_post">Add Post</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./category.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span id="categories">Categories</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./comments.php">
      <i class="fas fa-fw fa-table"></i>
      <span id="comments">Comments</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="profile.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span id="profile">Profile</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="password.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span id="change-password">Change Password</span>
    </a>
  </li>
</ul>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    let menu = document.getElementById("dropdown-menu")
    if (window.location.href.includes("index.php")) {
      document.getElementById("dashboard").style.color = "green"
    }

    if (window.location.href.includes("posts.php?source=add_post")) {
      menu.classList.add('show')
      document.getElementById("posts").style.color = "green"
      document.getElementById("add-posts").classList.add('active')
    } else {
      if (window.location.href.includes("posts.php")) {
        menu.classList.add('show')
        document.getElementById("posts").style.color = "green"
        document.getElementById("all-posts").classList.add('active')
      }
    }

    if (window.location.href.includes("category.php")) {
      document.getElementById("categories").style.color = "green"
    }

    if (window.location.href.includes("comments.php")) {
      document.getElementById("comments").style.color = "green"
    }

    if (window.location.href.includes("profile.php")) {
      document.getElementById("profile").style.color = "green"
    }

    if (window.location.href.includes("password.php")) {
      document.getElementById("change-password").style.color = "green"
    }
  })
</script>