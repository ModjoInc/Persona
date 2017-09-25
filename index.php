<?php include './libs/mail.php' ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>El Maaza Gomez Habib is looking for an internship</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <nav>
          <ul>
            <li><a href="#intro">Intro</a></li>
            <li><a href="#one">What I Do</a></li>
            <li><a href="#two">Who I Am</a></li>
            <li><a href="#three">Why Base ?</a></li>
            <li><a href="#work">My Work</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </header>

    <!-- Intro -->
      <section id="intro" class="main style2 fullscreen">
        <div class="content">
          <header>
            <p><sub><?php if (isset($message2)) {echo $message2;} ?></sub></p>
            <h2>Hello Base...</h2>
            <p><?php if (isset($message2)) {echo '...and hello to you <strong>' . $_POST['nom'] . '</strong> !';} ?></p>
          </header>
          <p>I'm Habib, a trainee web developer. I enrolled in a coding course in April 2017 (<a href="http://becode.org" target="_blank">Becode</a>) and I <strong>loved</strong> it so much that I decided to change my career path and dedicated 100% of my time and energy to my new passion...And now i would like to give <strong>BASE</strong> some of that good energy!</p>
          <footer>
            <a href="#one" class="button style2 down">More</a>
          </footer>
        </div>
      </section>

    <!-- One -->
      <section id="one" class="main style2 right dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>What I Do</h2>
          </header>
          <p>At Becode we've learned to learn the code and crack it. Since it is new for me, I'm unravelling the path and I enjoy discovering every step.</p>
          <p>The Front End part is what I am most <em>excited</em> about. I adore <strong>CSS/SASS and the design part</strong>, although I know there is a lot more for me to master <em>(I would like to learn more about UX)</em>.</p>
          <p>I learned some <strong>Javascript</strong> , <strong>JQuery</strong>, <strong>PHP</strong>, MySql, Symfony,etc.</p>
          <p>
          <a href="https://www.linkedin.com/in/habib-el-maaza-gomez-59082165/" class="icon fa-linkedin" target="_blank"><span class="label"> LinkedIn </span></a> ||
            <a href="https://github.com/ModjoInc/Persona" class="icon fa-github" target="_blank"><span class="label"> Repo of this webapp on Github </span></a></p>
        </div>
        <!-- <a href="#two">Next</a> -->
      </section>

    <!-- Two -->
      <section id="two" class="main style2 left dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>Who I Am</h2>
          </header>
          <p>My background is in Psychological studies and I carry with me the sense for <strong>fine-tuning human relationships</strong>. It helps me to understand and respond quickly while team working. Also, it helps a lot to follow the needs and wishes of the clients.</p>
          <p>When friends and colleagues talk about me, they describe me as a mainly as <strong>friendly mediator</strong>. My optimistic nature drive me to get along with (almost) everybody.</p>
          <p>I'm also a <strong>hacker</strong>... with good intentions. I enjoy spending hours in cracking a code, trying to find a solution to some coding mystery.</p>
          <p>Not to mention, I am a gamer and when I'm not gaming I read... a lot.</p>
        </div>
        <!-- <a href="#three">Next</a> -->
      </section>

      <section id="three" class="main style2 right dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>Why Base?</h2>
          </header>
          <p><a href="https://twitter.com/pixeline?lang=es">One of our coaches</a> at Becode mentioned Base when we were discussing the potentials internships. He praised your agency and I became curious. So I googled you and waouww! The stuff you have done...</p>
          <p>I have to admit that I was intimidated at first. But then I went all <em>'Leroooooy'</em> on this. If I have to do an internship, it is of my best interest to <strong>aim for the top</strong>.</p>
          <p>And voilà!</p>
        </div>
        <!-- <a href="#work">Next</a> -->
      </section>

    <!-- Work -->
      <section id="work" class="main style3 primary">
        <div class="content">
          <header>
            <h2>My Work</h2>
            <p>Now let me show you some of the side projects I developed in Becode and before that.</p>
            <p></p>
          </header>
          <div class="content">
            <img src="./images/thumbs/01.jpg" alt="projet1">
            <p><a href="http://practicebulgarian.com/becode/interview/">Prototype</a></p>
            <p>Création d'une webapp selon un modèle MVC et POO, built from scratch.</p>
          </div>
          <hr>
          <div class="content">
            <img src="./images/thumbs/02.jpg" alt="projet2">
            <p><a href="http://practicebulgarian.com/becode/Degroof&Petercam/">Projet Degroof&Petercam Foundation</a></p>
            <p>Site créé lors d'un hackaton de 4 heures par une équipe de 4 étudiants Becode pour la fondation D&P.</p>
          </div>
        </div>
      </section>

    <!-- Contact -->
      <section id="contact" class="main style3 secondary">
        <div class="content">
          <header>
            <h2>Ping Me</h2>
            <p>Feel free to send me your thoughts</p>
          </header>
          <div class="box">
            <form method="post">
              <div class="field half first"><input type="text" name="nom" placeholder="Name" /></div>
              <div class="field half"><input type="email" name="email" placeholder="Email" /></div>
              <div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
              <ul class="actions">
                <li><input type="submit" value="Send Message" name="submit"/></li>
              </ul>
            </form>
          </div>
        </div>
      </section>

    <!-- Footer -->
      <footer id="footer">

        <!-- Icons -->
          <ul class="actions">
            <li><a href="https://www.linkedin.com/in/habib-el-maaza-gomez-59082165/" class="icon fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
            <li><a href="https://github.com/ModjoInc/Persona" class="icon fa-github" target="_blank"><span class="label">Repo of this webapp on Github</span></a></li>
            <li><a href="tel:+32472906755" class="icon fa-phone"><span class="label">Call me</span></a></li>
          </ul>

        <!-- Menu -->
          <ul class="menu">
            <li>&copy; 2017 Habib El Maaza Gomez</li><li>Mail: <a href="mailto:habibem@gmail.com">habibem@gmail.com</a></li>
          </ul>

      </footer>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.poptrox.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
        console.log("🤘🤘 Hi my fellow wizard🕵️🕵️! Doing some reco work? I built this webapp on Skel, using vanilla front-end technologies like HTML5, SASS and Javascript.");
      </script>

  </body>
</html>