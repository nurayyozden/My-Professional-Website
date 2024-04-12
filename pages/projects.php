<?php

// getting projects boxes
// $proj_ids = exec_sql_query(
//   $db,
//   "SELECT projects.id AS 'projects.id' FROM projects;")->fetchAll();


// $filter_param = $_GET['filter'] ?? NULL; // untrusted

// original SQL query with no filters
$sql_select_query = "SELECT projects.id AS 'projects.id', projects.title AS 'projects.title', projects.time as 'projects.time', projects.cover_image AS 'projects.cover_image'
FROM projects";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="/" class="back-button">Back</a>
        <h1>Projects</h1>
    </header>

    <!-- Main content -->
    <div class="projects-container">




  <div class="posts">
    <?php
    // final query with filters

    // where SQL query was
    $result = exec_sql_query(
      $db,
      $sql_select_query);


    $records = $result->fetchAll();


//     $sql_select_query = "SELECT projects.id AS 'projects.id', projects.title AS 'projects.title', projects.time as 'projects.time'
// FROM projects";

    foreach ($records as $record) { ?>
            <div class="project-box">
                <h4 class="project-title"><?php echo htmlspecialchars($record["projects.title"]); ?></h4>
                <p class="project-time"><?php echo htmlspecialchars($record['projects.time']); ?></p>
                <a href="/project_spec?<?php echo http_build_query(array(
                    'id' => $record['projects.id'])); ?>">
                <?php $image_location = '/public/uploads/images/' . $record['projects.cover_image'];?>
                <img class="cover-image" src="<?php echo htmlspecialchars($image_location); ?>"
                alt=<?php echo htmlspecialchars($record["projects.title"]); ?>>

                </a>
            </div>
          <?php } ?>


    </div>

    <!-- Your JavaScript files, if any -->
</body>
</html>
