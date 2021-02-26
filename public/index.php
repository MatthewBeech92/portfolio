<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Matthew Beech - Portfolio</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./css/styles.css" /> 

  </head>
  <body>
    <div class="font-nunito">
      <section id="home" class="min-h-screen py-0 text-white text-center flex-col-center bg-grey-800 bg-opacity-90">
        <header class="relative max-w-2xl">
          <div id="header-text" class="relative py-8">
            <h1 class="mb-6 text-3xl">Hello, I'm <span class="text-teal-500 underline">Matt.</span></h1>
            <h2 class="text-2xl mb-0">An aspiring <span class="text-blue-500">Web Developer</span> from South Yorkshire with a passion in backend development.</h2>
          </div>
          <a class="btn btn-primary mt-8 absolute absolute-x-center" href="#projects">See My Work</a>
        </header>
      </section>

      <section id="about-me" class="bg-grey-50">
        <h2 class="font-bold">About Me</h2>

        <div class="content 2xl:flex 2xl:justify-evenly 2xl:max-w-screen-2xl">
          <div id="profile-photo" class="relative mb-8 w-full h-full 2xl:max-w-xl 2xl:transform 2xl:-rotate-3 2xl:transition 2xl:hover:rotate-0">
            <div class="aspect-w-3 aspect-h-2 rounded shadow-lg bg-white border-8 border-b-48 border-white">
              <img class="rounded" src="./images/grand-canyon.jpg" alt="Grand Canyon Photo" />
            </div>
            <div class="font-caveat absolute bottom-0 h-12 w-full flex-col-center text-xl">Enjoying life at the Grand Canyon</div>
          </div>

          <div id="bio" class="2xl:max-w-xl">
            <div id="about-me-section" class="md:mb-6">
              <p>
                My name is Matthew Beech but my mates like to call me Beechy or even sometimes… Peech (Not sure where that one came from). I'm a University of Hull Graduate where I studied Web Design
                & Development.
              </p>
              <p>
                It was at University where I found my true calling... writing code, especially server side code. There was something about writing code and seeing it come to life on your screen that
                gave me immense gratification, it still does!
              </p>
              <p>I'm constantly learning about existing and emerging web technologies form reading books and watching online video courses to ensure my skills are always up to date.</p>
              <p>
                When not developing my skill set you can see me at the <span class="line-through">gym</span>, <span class="line-through">football</span>, <span class="line-through">pub</span>,
                jumping out of a plane over Verdansk. I also enjoy eating out, cooking and walks with the pooch.
              </p>
              <p>
                Download my CV <a class="font-bold text-blue-600 cursor-pointer hover:underline" href="./files/cv.pdf" download>here.</a>
              </p>
            </div>

            <div id="skills" class="md:border-2 md:border-teal-600 md:p-6 md:bg-white md:rounded md:inline-block">
              <h3 class="text-teal-600 font-bold underline mb-4">Skills</h3>
                <ul class="list-disc pl-4">
                  <li>HTML</li>
                  <li>CSS, Sass, Tailwind CSS</li>
                  <li>JavaScript, jQuery & Ajax</li>
                  <li>PHP & Laravel</li>
                  <li>MySql</li>
                  <li>Relational Database Design</li>
                  <li>Responsive Design</li>
                  <li>Git</li>
                  <li>Workflow tools - Gulp, Webpack, Vagrant</li>
                  <li>Package managers - NPM, Yarn, Composer</li>
                </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="projects" class="bg-grey-100">
        <h2 class="font-bold">What I Can Do</h2>

        <div class="content 2xl:max-w-screen-2xl">
          <div id="plateful" class="2xl:flex 2xl:justify-evenly">
            <div class="w-full 2xl:max-w-xl">
              <div class="mb-6 aspect-w-3 aspect-h-2 2xl:mb-0">
                <img class="shadow rounded 2xl:max-w-xl" src="./images/plateful-screenshot.jpg" alt="Project Screenshot" />
              </div>
            </div>
    
            <div class="2xl:max-w-xl">
              <div class="project-header flex mb-4">
                <h3 class="inline-block">Plateful</h3>
                <a title="View project on GitHub" href="https://github.com/MatthewBeech92/plateful"><img class="inline-block ml-2" src="./images/icons/github-logo.svg" alt="Github Icon" /></a>
              </div>
              
              <p>Plateful is a content management system built using Laravel where users are able to create their own food recipes and calculate the nutrition information for each recipe.</p>
              <p>
                I created this application as a personal tool to help me achieve my health related goals and more importantly, to learn the Laravel framework. From developing the web application I
                gained valuable experience using an MVC framework as well as learning other crucial concepts of the Laravel framework such as relationships between models and eloquent.
              </p>
    
              <a class="btn btn-secondary border-blue-700 text-blue-700 hover:bg-blue-700 hover:text-white" href="http://www.plateful.matthewbeechwebdesign.co.uk">View Project</a>
            </div>
          </div>
        </div>
      </section>

      <section id="contact-me" class="bg-grey-200">
        <h2 class="font-bold">Get In Touch</h2>
          <h3 class="text-center mb-8"><span class="text-teal-600">Currently seeking work</span> so I would love to hear from you :)</h3>
          <form id="contact-form" class="content" method="post">
            <div>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" />
            </div>

            <div>
              <label for="email">Email Address:</label>
              <input type="text" id="email" name="email" />
            </div>

            <div class="mb-6 2xl:w-full">
              <label for="message">Message:</label>
              <textarea id="message" class="resize-none" name="message" rows="10"></textarea>
            </div>

            <input type="submit" name="submit" value="Send Message" class="btn btn-secondary text-teal-600 border-teal-600 hover:bg-teal-600 hover:text-white w-full" />
          </form>
        
      </section>

      <footer class="bg-grey-900 text-white text-center text-sm py-2">© 2021 Matthew Beech</footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="./js/index.js"></script>
  </body>
</html>
