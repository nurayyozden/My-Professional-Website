<?php
$id = $_GET['id'];

// get the project data from projects table

$project = exec_sql_query(
  $db,
  "SELECT projects.id AS 'projects.id', projects.title AS 'projects.title', projects.company AS 'projects.company', projects.time AS 'projects.time', projects.second_image AS 'projects.second_image', projects.description AS 'projects.description', projects.extra_content as 'projects.extra_content'
  FROM projects
  WHERE projects.id = :project_id",
  array(
      ':project_id' => $id, // tainted
    )
);

$project = $project->fetchAll();

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
    </header>

<?php foreach ($project as $project) { ?>
    <h2><?php echo htmlspecialchars($project['projects.title']); ?></h2>
    <h4><?php echo htmlspecialchars($project['projects.company']); ?></h4>
    <h5><?php echo htmlspecialchars($project['projects.time']); ?></h5>
    <?php if ($project["projects.second_image"] != null) { ?>
    <?php $image_location = '/public/uploads/images/' . $project['projects.second_image'];?>
    <img class=second-image src="<?php echo htmlspecialchars($image_location); ?>" alt=<?php echo htmlspecialchars($project["projects.second_image"]); ?>> <?php } ?>
    <p><?php echo htmlspecialchars($project['projects.description']); ?></p>

<?php } ?>

</body>

</html>
