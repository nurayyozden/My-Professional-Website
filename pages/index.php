<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="public/styles/site.css" />
  <title>Home</title>

</head>

<body class="body-home">



<div class="home-content">

    <div class="profile-pic">
        <img class="home-img" src="public/uploads/images/profile_pic.jpeg" alt="Nuray image">
    </div>

    <div class="content">
        <h1>Hi, I'm Nuray</h1>
        <a href="nuray_y_ozden_resume.pdf" download="nuray_y_ozden_resume.pdf" class="download-link">Download Resume</a>
    </div>

</div>




<div id="projects-anchor"></div>
<div class="projects-and-experiences" >

    <a href="/projects" class="image-link">
            <img class="home-img" src="public/uploads/images/projects.jpeg" alt="Projects">
            <div class="overlay">Projects</div>
    </a>
<a href="/experiences" class="image-link">
            <img class="home-img" src="public/uploads/images/experiences.jpeg" alt="Experiences">
            <div class="overlay">Experiences</div>
    </a>


</div>

<!-- Timeline section -->

<div id="timeline-anchor" class="timeline">
    <h1 class="timeline-header">My Timeline</h1>

    <section class="timeline-wrapper">
            <div class="middle-line"></div>

            <div class="box box-top">
                <div class="date">
                    <p>20</p>
                    <p>DEC</p>
                </div>
                <div class="box-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
            </div>

            <div class="box box-bottom">
                <div class="date">
                    <p>11</p>
                    <p>AUG</p>
                </div>
                <div class="box-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
            </div>

        </section>
</div>

</body>
</html>
