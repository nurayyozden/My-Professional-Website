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
        <h1>Experiences</h1>
    </header>

    <!-- Main content -->
    <div class="projects-container">
        <?php
        // PHP code to fetch and display projects/experiences
        // Example:
        $projects = [
            "Project 1",
            "Project 2",
            "Project 3",
            "Project 4",
            "Project 5",
            // Add more projects as needed
        ];

        foreach ($projects as $project) {
            // Start a new row after every 4 projects
            if ($i % 4 == 0) {
                echo "<div class='row'>";
            }
            echo "<div class='project-box'>$project</div>";
            $i++;
            // Close the row after every 4 projects
            if ($i % 4 == 0 || $i == count($projects)) {
                echo "</div>";
            }
        }
        ?>
    </div>

    <!-- Your JavaScript files, if any -->
</body>
</html>
