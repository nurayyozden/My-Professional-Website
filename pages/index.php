<?php

// // tags by ids in the types table
// $tag_ids = exec_sql_query(
//   $db,
//   "SELECT types.id AS 'types.id' FROM types;")->fetchAll();


// $filter_param = $_GET['filter'] ?? NULL; // untrusted

// // original SQL query with no filters
// $sql_select_clause = "SELECT posts.id AS 'posts.id', posts.name AS 'posts.name', posts.file_ext as 'posts.file_ext'
// FROM posts";
// $sql_where_clause = ''; // No order by default

// ?>


<?php include 'header.php'; ?>

<!DOCTYPE html>



<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="public/styles/site.css" />
  <title>Home</title>

</head>

<body>



<div class="home-content">

    <div class="profile-pic">
        <img src="public/uploads/images/profile_pic.jpeg" alt="Nuray image">
    </div>

    <div class="content">
        <h1>Hi, I'm Nuray</h1>
        <a href="nuray_y_ozden_resume.pdf" download="nuray_y_ozden_resume.pdf" class="download-link">Download Resume</a>
    </div>

</div>




<div id="projects-anchor"></div>
<div class="projects-and-experiences" >

    <a href="/projects" class="image-link">
            <img src="public/uploads/images/projects.jpeg" alt="Projects">
            <div class="overlay">Projects</div>
    </a>
<a href="/experiences" class="image-link">
            <img src="public/uploads/images/experiences.jpeg" alt="Experiences">
            <div class="overlay">Experiences</div>
    </a>


</div>








<!-- Timeline section -->
<div id="timeline-anchor"></div>




</body>
</html>
