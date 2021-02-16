<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Matthew Beech - Portfolio</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/index.css" />
  </head>
  <body>
    <div class="page-container">
      <section id="home">
        <header>
          <h1>Hello, i'm <span class="text-name">Matt.</span></h1>
          <h2>An aspiring <span class="text-role">Web Developer</span> from South Yorkshire with a passion in backend development.</h2>
        </header>

        <div class="btn-wrapper">
          <a class="btn" href="#projects">See My Work</a>
        </div>
      </section>

      <section id="about-me">
        <h3>About Me</h3>

        <div class="content">
          <div id="profile-photo">
            <div class="image-container">
              <img src="./images/grand-canyon.jpg" alt="Grand Canyon Photo" />
              <div class="profile-photo-caption">Enjoying life at the Grand Canyon</div>
            </div>
          </div>

          <div id="about-me-section">
            <p>
              My name is Matthew Beech but my mates like to call me Beechy or even sometimes… Peech (Not sure where that one came from). I'm a University of Hull Graduate where I studied Web Design &
              Development.
            </p>
            <p>
              It was at University where I found my true calling... writing code, especially server side code. There was something about writing code and seeing it come to life on your screen that
              gave me immense gratification, it still does!
            </p>
            <p>I'm constantly learning about existing and emerging web technologies form reading books and watching online video courses to ensure my skills are always up to date.</p>
            <p>
              When not developing my skill set you can see me at the <span class="strike-through">gym</span>, <span class="strike-through">football</span>, <span class="strike-through">pub</span>,
              jumping out of a plane over Verdansk. I also enjoy eating out, cooking and walks with the pooch.
            </p>
            <p>
              Download my CV <a class="download-link" href="./files/cv.pdf" download><span class="download">here.</span></a>
            </p>
          </div>

          <div id="skill-section">
            <h4>Skills</h4>
            <ul>
              <li>HTML, CSS & Sass</li>
              <li>JavaScript, jQuery & Ajax</li>
              <li>PHP & Laravel</li>
              <li>MySql</li>
              <li>Relational Database Design</li>
              <li>Responsive Design</li>
              <li>Workflow tools - Gulp, Webpack, Vagrant</li>
              <li>Package managers - NPM, Yarn, Composer</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="projects">
        <h3>What I Can Do</h3>
        <div class="content">
          <div id="plateful">
            <div class="project-header">
              <div class="image-container">
                <img src="./images/plateful-screenshot.jpg" alt="Project Screenshot" />
              </div>
            </div>

            <div class="project-info">
              <h4>Plateful</h4>

              <p>Plateful is a content management system built using Laravel where users are able to create their own food recipes and calculate the nutrition information for each recipe.</p>
              <p>
                I created this application as a personal tool to help me achieve my health related goals and more importantly, to learn the Laravel framework. From developing the web application I
                gained valuable experience using an MVC framework as well as learning other crucial concepts of the Laravel framework such as relationships between models and eloquent.
              </p>

              <div class="btn-wrapper">
                <a class="btn" href="#projects">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php
      // define variables and set to empty values
      $inputValues = [
        'name' => '',
        'email' => '',
        'message' => ''
      ];

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputValues['name'] = test_input($_POST["name"]);
        $inputValues['email'] = test_input($_POST["email"]);
        $inputValues['message'] = test_input($_POST["message"]);
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      print_r($inputValues);
      ?>


      <section id="contact-me">
        <h3>Get In Touch</h3>
        <div class="content">
          <h4><span class="look-at-me underline">Currently seeking work</span> so I would love to hear from you :)</h4>
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" />
            </div>

            <div>
              <label for="email">Email Address:</label>
              <input type="text" id="email" name="email" />
            </div>

            <div>
              <label for="message">Message:</label>
              <textarea id="message" name="message" rows="10"></textarea>
            </div>

            <input type="submit" class="btn" name="submit" value="Send Message" />
          </form>
        </div>
      </section>
      <footer>© Matthew Beech</footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="./js/index.js"></script>
  </body>
</html>
