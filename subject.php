<?php 
require_once 'admin/config.php';


  if (isset($_GET['n'])) {
    $category_permalink = $_GET['n'];
    $sql = "SELECT * FROM categories WHERE category_permalink = '$category_permalink'";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    $response = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      $dataResTitle = $response['category_title'];
      $ebook = $response['ebook'];
      $subjectId = $response['category_id'];
      $lecturesUrl = "subject.php?n=$category_permalink&d=lectures";
      $summariesUrl = "subject.php?n=$category_permalink&d=summaries";
      $examsUrl = "subject.php?n=$category_permalink&d=exams";

if ( isset($_GET['d']) && !empty($_GET['d']) ) {
    $dataType = $_GET['d'];

    $query = "SELECT * FROM items WHERE subject='$subjectId' and data_type='$dataType' ";
    $result2 = mysqli_query($conn, $query) or die(mysql_error());


    }



    }else{
      $dataResTitle = "ليس هناك بيانات لعرضها";
    }


  }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$dataResTitle?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bubbles.css">
	<script type="text/javascript" src="assets/js/bubbles.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>
		.navbar{
	  background-color: var(--bs-blue);
	  color: var(--bs-light);
	}
    #date {

  }
	</style>
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index"><button class="btn text-primary" ><img src="assets/images/svg/pulse-life.svg" height="30" width="30"></button> Nursing Fayoum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
<?php 
  $sql = "SELECT * FROM categories";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $categoryTitle = $row['category_title'];
      $category_permalink = $row['category_permalink'];
      echo "<li class='nav-item'>
          <a class='nav-link' href='subject.php?n=$category_permalink'>$categoryTitle</a>
        </li>";
    }

  }

?>
<!-- 
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
 -->
          <div class="navbar-nav ms-auto">
             <a href="admin/index"> <button class="btn btn-primary" style="margin-bottom:5px;">Admin</button></a>
          </div>

      </ul>
    </div>
  </div>
</nav>
</header>



<div class="container">
  <?php 

      if (!isset($_GET['d'])) {
        echo "<h1 class='TypeWrite text-center p-2 mt-5'>$dataResTitle</h1><div id='particles-js'></div>";
      }else if (isset($_GET['d']) && $_GET['d'] == "lectures") {
        echo "<div class='d-flex flex-column mb-4'>
        <h1 class='TypeWrite text-center p-2 mt-5 text-primary'>Lectures OF  <strong class='text-success'>$dataResTitle</strong></h1>
        <a class='btn btn-primary mx-auto' href='$ebook' target='_blank'>Download E-Book</a>
        </div>";
      }else if (isset($_GET['d']) && $_GET['d'] == "summaries") {
        echo "<h1 class='TypeWrite text-center p-2 mt-5 text-primary'>Summaries OF <strong class='text-success'>$dataResTitle</strong></h1>";
      }else if (isset($_GET['d']) && $_GET['d'] == "exams") {
        echo "<h1 class='TypeWrite text-center p-2 mt-5 text-primary'>Exams OF <strong class='text-success'>$dataResTitle</strong></h1>";
      }

  ?>
    



	<section class="courses" style="margin-bottom:50px;">
		<div class="row">

      <?php 

      if (!isset($_GET['d'])) {
        echo "      <div class='col-lg-4'>
        <div class='card course bg-transparent'>
          <div class='card-body'>
            <h5 class='card-title font-weight-bold'>Lectures</h5>
            <button class='btn text-primary' type='button' disabled='' style='font-weight:bold;'><img src='assets/images/svg/conference-lecture.svg' style='width:180px;height:180px;'></button>
            <p class='card-text'>Lectures.</p>
          <a class='btn btn-outline-primary btn-md shadow' href='$lecturesUrl'>اضغط هنا</a>
          </div>
        </div>
      </div>

    
      <div class='col-lg-4'>
        <div class='card course bg-transparent'>
          <div class='card-body'>
            <h5 class='card-title font-weight-bold'>Summaries</h5>
            <button class='btn text-primary' type='button' disabled='' style='font-weight:bold;'><img src='assets/images/svg/writing-note.svg' style='width:180px;height:180px;'></button>
            <p class='card-text'>Summaries.</p>
          <a class='btn btn-outline-primary btn-md shadow' href='$summariesUrl'>اضغط هنا</a>
          </div>
        </div>
      </div>
    
      <div class='col-lg-4'>
        <div class='card course bg-transparent'>
          <div class='card-body'>
            <h5 class='card-title font-weight-bold'>Exams</h5>
            <button class='btn text-primary' type='button' disabled='' style='font-weight:bold;'><img src='assets/images/svg/exam.svg' style='width:180px;height:180px;'></button>
            <p class='card-text'>Exams.</p>
          <a class='btn btn-outline-primary btn-md shadow' href='$examsUrl'>اضغط هنا</a>
          </div>
        </div>
      </div>

      ";
      }else if (isset($_GET['d']) && $_GET['d'] == "lectures") {
            




        echo "
<div class='accordion' id='accordionPanelsStayOpenExample'>
        ";

      while ($row = mysqli_fetch_assoc($result2)) {
      $data_title = $row['title'];
      $itemId = $row['item_id'];
      $content = $row['content'];
      $author = $row['author'];
      $dataDate = $row['created_at'];
        echo "
  <div class='accordion-item'>
    <h2 class='accordion-header' id='panelsStayOpen-headingTwo'>
      <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#d-$itemId' aria-expanded='false' aria-controls='panelsStayOpen-collapseTwo'>
        $data_title
      </button>
    </h2>
    <div id='d-$itemId' class='accordion-collapse collapse' aria-labelledby='$itemId'>
      <div class='accordion-body'>
         $content</br>
         <div class='d-flex'>By : <label class='date'>$author</label></div>
         <div class='d-flex flex-row-reverse'><label class='date'>$dataDate</label>Date : </div>
         
      </div>
    </div>
  </div>

        ";
      }

        echo "</div>";

      }else if (isset($_GET['d']) && $_GET['d'] == "summaries") {
                echo "
        <div class='accordion' id='accordionPanelsStayOpenExample'>
                ";

              while ($row = mysqli_fetch_assoc($result2)) {
              $data_title = $row['title'];
              $itemId = $row['item_id'];
              $content = $row['content'];
              $author = $row['author'];
              $dataDate = $row['created_at'];
                echo "
          <div class='accordion-item'>
            <h2 class='accordion-header' id='panelsStayOpen-headingTwo'>
              <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#d-$itemId' aria-expanded='false' aria-controls='panelsStayOpen-collapseTwo'>
                $data_title
              </button>
            </h2>
            <div id='d-$itemId' class='accordion-collapse collapse' aria-labelledby='$itemId'>
              <div class='accordion-body'>
                 $content</br>
                 <div class='d-flex'>By : <label class='date'>$author</label></div>
                 <div class='d-flex flex-row-reverse'><label class='date'>$dataDate</label>Date : </div>
         
              </div>
            </div>
          </div>

                ";
              }

                echo "</div>";
      }else if (isset($_GET['d']) && $_GET['d'] == "exams") {
                echo "
        <div class='accordion' id='accordionPanelsStayOpenExample'>
                ";

              while ($row = mysqli_fetch_assoc($result2)) {
              $data_title = $row['title'];
              $itemId = $row['item_id'];
              $content = $row['content'];
              $author = $row['author'];
              $dataDate = $row['created_at'];
                echo "
          <div class='accordion-item'>
            <h2 class='accordion-header' id='panelsStayOpen-headingTwo'>
              <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#d-$itemId' aria-expanded='false' aria-controls='panelsStayOpen-collapseTwo'>
                $data_title
              </button>
            </h2>
            <div id='d-$itemId' class='accordion-collapse collapse' aria-labelledby='$itemId'>
               $content</br>
               <div class='d-flex'>By : <label class='date'>$author</label></div>
               <div class='d-flex flex-row-reverse'><label class='date'>$dataDate</label>Date : </div>
         
            </div>
          </div>

                ";
              }

                echo "</div>";
      }

      ?>






    

		</div>


	</section>
</div>
<?php include 'footer.php' ;?>
 

 <script type="text/javascript">
 	particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": ["#BD10E0","#B8E986","#50E3C2","#FFD300","#E86363"]
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#b6b2b2"
      }
    },
    "opacity": {
      "value": 0.5211089197812949,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 8.017060304327615,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 12.181158184520175,
        "size_min": 0.1,
        "sync": true
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#c8c8c8",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "bounce",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
 </script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>