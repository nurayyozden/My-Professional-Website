<?php


// original SQL query with no filters
$sql_select_query = "SELECT projects.id AS 'projects.id', projects.title AS 'projects.title', projects.time as 'projects.time', projects.cover_image AS 'projects.cover_image'
FROM projects";
?>



<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="public/styles/site.css" />
  <title>Projects</title>

</head>

<body class="body-pe">
    <!-- Header -->
    <header>
        <a href="/" class="back-button">Back</a>
        <h1>Projects</h1>
    </header>

    <!-- Main content -->
    <div class="pe-container">

    <?php

    $result = exec_sql_query(
      $db,
      $sql_select_query);


    $records = $result->fetchAll();


    foreach ($records as $record) { ?>
            <div class="pe-box">
                <h4 class="pe-title"><?php echo htmlspecialchars($record["projects.title"]); ?></h4>
                <p class="pe-time"><?php echo htmlspecialchars($record['projects.time']); ?></p>
                <a href="/project-spec?<?php echo http_build_query(array(
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
