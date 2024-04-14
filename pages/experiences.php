<?php


// original SQL query with no filters
$sql_select_query = "SELECT experiences.id AS 'experiences.id', experiences.title AS 'experiences.title', experiences.time as 'experiences.time', experiences.cover_image AS 'experiences.cover_image'
FROM experiences";
?>



<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="public/styles/site.css" />
  <title>Nuray's Professional Website</title>

</head>

<body class="body-pe">
    <!-- Header -->
    <header>
        <a href="/" class="back-button">Back</a>
        <h1>Experiences</h1>
    </header>

    <!-- Main content -->
    <div class="pe-container">

    <?php
    // final query with filters

    // where SQL query was
    $result = exec_sql_query(
      $db,
      $sql_select_query);


    $records = $result->fetchAll();


    foreach ($records as $record) { ?>
            <div class="pe-box">
                <h4 class="pe-title"><?php echo htmlspecialchars($record["experiences.title"]); ?></h4>
                <p class="pe-time"><?php echo htmlspecialchars($record['experiences.time']); ?></p>
                <a href="/exp-spec?<?php echo http_build_query(array(
                    'id' => $record['experiences.id'])); ?>">
                <?php $image_location = '/public/uploads/images/' . $record['experiences.cover_image'];?>
                <img class="cover-image" src="<?php echo htmlspecialchars($image_location); ?>"
                alt=<?php echo htmlspecialchars($record["experiences.title"]); ?>>

                </a>
            </div>
          <?php } ?>


    </div>

    <!-- Your JavaScript files, if any -->
</body>
</html>
