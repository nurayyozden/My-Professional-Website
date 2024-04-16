<?php
$id = $_GET['id'];

// get the experience data from experiences table

$exp = exec_sql_query(
  $db,
  "SELECT experiences.id AS 'experiences.id', experiences.title AS 'experiences.title', experiences.company AS 'experiences.company', experiences.time AS 'experiences.time', experiences.second_image AS 'experiences.second_image', experiences.description AS 'experiences.description', experiences.extra_content as 'experiences.extra_content'
  FROM experiences
  WHERE experiences.id = :exp_id",
  array(
      ':exp_id' => $id, // tainted
    )
);

$exp = $exp->fetchAll();

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

<header>
        <a href="/" class="back-button">Back</a>
    </header>

<?php foreach ($exp as $exp) { ?>
    <h2><?php echo htmlspecialchars($exp['experiences.title']); ?></h2>
    <h4><?php echo htmlspecialchars($exp['experiences.company']); ?></h4>
    <h5><?php echo htmlspecialchars($exp['experiences.time']); ?></h5>
    <?php if ($exp["experiences.second_image"] != null) { ?>
    <?php $image_location = '/public/uploads/images/' . $exp['experiences.second_image'];?>
    <img class="second-image" src="<?php echo htmlspecialchars($image_location); ?>" alt=<?php echo htmlspecialchars($exp["experiences.second_image"]); ?>> <?php } ?>
    <p><?php echo htmlspecialchars($exp['experiences.description']); ?></p>

<?php } ?>

</body>

</html>
