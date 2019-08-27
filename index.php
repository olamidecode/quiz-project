<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Trivia question</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Online Quiz</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Trivia questions</h1>
        <!-- <h2 class="text-white-50 mx-auto mt-2 mb-5">DID YOU KNOW: It takes 12hrs for your food to digest.</h2> -->
        <a href="#projects" class="btn btn-primary js-scroll-trigger">TO the questions</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Good luck</h2>
          <p class="text-white-50">DID YOU KNOW :A sneeze travels out your mouth at over 100 m.p.h.</p>
          <p class="text-white-50">DID YOU KNOW :It is physically impossible for you to lick your elbow.</p>
          <p class="text-white-50">DID YOU KNOW :Your heart beats over 100,000 times a day.</p>
  
        </div>
      </div>
     
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Questions -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>The Questions</h4>
            <!-- <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p> -->
          </div>
          <?php 

$questions = array(
    1 => array(
        'question' => '1. Who programmed the first computer game "Spacewar!" in 1962 ?',
        'answers' => array(
            'A' => 'Steave Russell',
            'B' => 'Konard Zuse',
            'C' => 'Alan Emtage',
            'D' => 'Tim Berners-Lee'
        ),
        'correctAnswer' => 'A'
    ),
    2 => array(
        'question' => '2. Who is known as the father of supercomputing?',
        'answers' => array(
            'A' => 'David J. Brown',
            'B' => 'Gene Amdahl',
            'C' => 'Adam Dunkels',
            'D' => 'Seymour Cray'
        ),
        'correctAnswer' => 'D'
    ),

    3 => array(
        'question' => '3. Who created the C programming Language ?',
        'answers' => array(
            'A' => 'Ken Thompson',
            'B' => 'Dennis Ritchie',
            'C' => 'Robin Milner',
            'D' => 'Frieder Nake'
        ),
        'correctAnswer' => 'B'
    ),

    4 => array(
        'question' => '4. When was NASSCOM (National Association of Software and Services Companies) established',
        'answers' => array(
            'A' => '1988',
            'B' => '1997',
            'C' => '1993',
            'D' => '1882'
        ),
        'correctAnswer' => 'A'
    ),

    5 => array(
        'question' => '5. Who is known as the father of internet',
        'answers' => array(
            'A' => 'Alan Perlis',
            'B' => 'Jean E. Sammet',
            'C' => 'Vint Cerf',
            'D' => 'Steve Lawrence'
        ),
        'correctAnswer' => 'C'
    ),

    6 => array(
        'question' => '6. Which one is the first high level programming language',
        'answers' => array(
            'A' => 'C',
            'B' => 'COBOL',
            'C' => 'FORTAN',
            'D' => 'C++'
        ),
        'correctAnswer' => 'C'
    ),
    
    7 => array(
        'question' => '7. Which one is the first word processor application',
        'answers' => array(
            'A' => 'MS WORD',
            'B' => 'APPLE i WORK',
            'C' => 'SUN STAROFFICE',
            'D' => 'WORDSTAR'
        ),
        'correctAnswer' => 'D'
    ),
    
    8 => array(
        'question' => '8. Which one is the current fastest Supercomputer in India',
        'answers' => array(
            'A' => 'AADITYA',
            'B' => 'SAGA-220',
            'C' => 'SAHASRAT',
            'D' => 'HP APOLLO 6000'
        ),
        'correctAnswer' => 'C'
    ),
    
    9 => array(
        'question' => '9. India"s first Super Computer PARAM 8000 was installed in',
        'answers' => array(
            'A' => '1988',
            'B' => '1991',
            'C' => '1995',
            'D' => '1982'
        ),
        'correctAnswer' => 'B'
    ),
    
    10 => array(
        'question' => '10. Who developed Java Programming Language',
        'answers' => array(
            'A' => 'James Gosling',
            'B' => 'Douglas Engelbhart',
            'C' => 'Edmund M. Clarke',
            'D' => 'James D. Foley'
        ),
        'correctAnswer' => 'A'
    ),

    11 => array(
        'question' => '11. Which one is volatile memory in a computer system',
        'answers' => array(
            'A' => 'HardDisk',
            'B' => 'RAM',
            'C' => 'ROM',
            'D' => 'Optical Drive'
        ),
        'correctAnswer' => 'B'
    ),

    12 => array(
        'question' => '12. One Terabyte (1 TB) is equal to ',
        'answers' => array(
            'A' => '1028GB',
            'B' => '1012GB',
            'C' => '1000GB',
            'D' => '1024GB'
        ),
        'correctAnswer' => 'D'
    ),

    13 => array(
        'question' => '13. Who first developed QWERTY keyboard used in computers and phones',
        'answers' => array(
            'A' => 'Raphael Finkel',
            'B' => 'Wim Ebbinkhuijsen',
            'C' => 'Shafi Goldwasser',
            'D' => 'Christopher Latham Sholes'
        ),
        'correctAnswer' => 'D'
    ),

    14 => array(
        'question' => '14. Which operating system is developed and used by Apple Inc',
        'answers' => array(
            'A' => 'Windows',
            'B' => 'Android',
            'C' => 'iOS',
            'D' => 'UNIX'
        ),
        'correctAnswer' => 'C'
    ),

    15 => array(
        'question' => '15. Linus Torvalds develop which operating system',
        'answers' => array(
            'A' => 'Windows',
            'B' => 'Mac OS',
            'C' => 'UNIX',
            'D' => 'Linux'
        ),
        'correctAnswer' => 'D'
    ),

    16 => array(
        'question' => '16. Which one is the first search engine in internet',
        'answers' => array(
            'A' => 'Google',
            'B' => 'Archie',
            'C' => 'Altavista',
            'D' => 'WAIS'
        ),
        'correctAnswer' => 'B'
    ),
   
    17 => array(
        'question' => '17. Number of bit used by the IPv6 address ',
        'answers' => array(
            'A' => '32 bit',
            'B' => '64 bit',
            'C' => '128 bit',
            'D' => '256 bit'
        ),
        'correctAnswer' => 'C'
    ),
   
    18 => array(
        'question' => '18. Which one is the first web browser invented in 1990',
        'answers' => array(
            'A' => 'Internet Explorer',
            'B' => 'Mosaic',
            'C' => 'Mozilla',
            'D' => 'Nexus'
        ),
        'correctAnswer' => 'D'
    ),
   
    19 => array(
        'question' => '19. Which of the following programming language is used to create programs like applets? ',
        'answers' => array(
            'A' => 'COBOL',
            'B' => 'LANGUAGE',
            'C' => 'JAVA',
            'D' => 'BASIC'
        ),
        'correctAnswer' => 'C'
    ),
   
    20 => array(
        'question' => '20. First computer virus is known as ',
        'answers' => array(
            'A' => 'Rabbit',
            'B' => 'Creeper Virus',
            'C' => 'Elk Cloner',
            'D' => 'SCA Virus'
        ),
        'correctAnswer' => 'B'
    ),

);
$videoName;
if (isset($_POST['answers'])){
    $answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($questions as $questionNo => $value){
        // Echo the question
        echo "<h2>$value[question]</h2>";

        if ($answers[$questionNo] != $value['correctAnswer']){
             echo '<h3>You answered: <span style="color: red;">'.$value['answers'][$answers[$questionNo]].'</span><br></h3>' ; // Replace style with a class
             echo '<h3>Correct answer: <span style="color: green;">'.$value['answers'][$value['correctAnswer']].'</span></h3>' ;
        } else {
            echo '<h3>Correct answer: <span style="color: green;">'.$value['answers'][$answers[$questionNo]].'</span><br></h3>' ; // Replace style with a class
            echo '<h3>You are correct: <span style="color: green;">'.$value['answers'][$answers[$questionNo]].'</span></h3>' ;
            $counter++;

        }
               
        echo '<br /><hr>'; 
         if ($counter=="") 
        { 
            $counter='0';
            $results = "<h2>Your score: $counter/20</h2>"; 
        }
            else 
        {                        
      $results = "<h2>Your score: $counter/20</h2>"; 
                                }
            }                                                     
    echo $results;
    echo '<br /><hr>'; 
if ($counter < 10){
    echo "<h2>You failed &#x1F602 &#x1F602 &#x1F602</h2>";
    echo '<br /><hr>'; 
    
} else {
    echo "<h2>Well Done &#128521 &#128521 &#128521</h2>";
    echo '<br /><hr>'; 
    
}
} else {  
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
    <?php foreach ($questions as $questionNo => $value){ ?>

        <h4><?php echo $value['question']; ?></h4>
        <?php 
            foreach ($value['answers'] as $letter => $answer){ 
            $Label = 'question-'.$questionNo.'-answers-'.$letter;
            echo '<br /><hr>'; 
        ?>
        <div> 
            <h3>
            <input type="radio" name="answers[<?php echo $questionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $letter; ?>) <?php echo $answer; ?> </label>
            </h3>
        </div>

    <?php } ?>

    <?php }echo '<br />';  ?>
    <input type="submit" class="button" value="Submit Quiz" />
    </form>
<?php 
}
?>

          
          
        </div>
      </div>

      
    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Thank you for doing our quiz for more contact us!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">230 Voortrekker road Maitland</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">olaakinde16@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">0788212452</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/i.am.olamidee/?hl=en" class="mx-2">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
