<?php 
require_once 'admin/config.php';


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>كلية التمريض - جامعة الفيوم</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bubbles.css">
	<script type="text/javascript" src="assets/js/bubbles.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css">
<script type="text/javascript" src="assets/js/sweetalert2.min.js"></script>

	<style>
		.navbar{
	  background-color: var(--bs-blue);
	  color: var(--bs-light);
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
    <h1 class="TypeWrite text-center p-2 mt-5 text-primary headtext">Welcome To Faculty of Nursing, Fayoum University. Unofficial Studying Website.</h1>
<div id="particles-js"></div>


	<section class="courses">
		<div class="row">

      <div class="col-lg-4">
        <div class="card course bg-transparent">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Clinical Medical nursing</h5>
            <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/nurse-girl.svg" style="width:180px;height:180px;"></button>
            <p class="card-text">Clinical Medical nursing.</p>
          <a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=nursing-medical">اضغط هنا</a>
          </div>
        </div>
      </div>

    
      <div class="col-lg-4">
        <div class="card course bg-transparent">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Pharmacology</h5>
            <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/pills-pill.svg" style="width:180px;height:180px;"></button>
            <p class="card-text">Pharmacology.</p>
          <a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=pharmacology">اضغط هنا</a>
          </div>
        </div>
      </div>

    
			<div class="col-lg-4">
				<div class="card course bg-transparent">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Cardiology</h5>
				    <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/cardiogram.svg" style="width:180px;height:180px;"></button>
				    <p class="card-text">Cardiology.</p>
					<a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=cardiology">اضغط هنا</a>
				  </div>
				</div>
			</div>

		
			<div class="col-lg-4">
				<div class="card course bg-transparent">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Neurology</h5>
				    <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/brain.svg" style="width:180px;height:180px;"></button>
				    <p class="card-text">Neurology.</p>
					<a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=neurology">اضغط هنا</a>
				  </div>
				</div>
			</div>

    
      <div class="col-lg-4">
        <div class="card course bg-transparent">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Dermatology</h5>
            <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/pimples-skin.svg" style="width:180px;height:180px;"></button>
            <p class="card-text">Dermatology.</p>
          <a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=dermatology">اضغط هنا</a>
          </div>
        </div>
      </div>

    
    
      <div class="col-lg-4">
        <div class="card course bg-transparent">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Pulmonology</h5>
            <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/lungs.svg" style="width:180px;height:180px;"></button>
            <p class="card-text">Pulmonology.</p>
          <a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=pulmonology">اضغط هنا</a>
          </div>
        </div>
      </div>

    
      <div class="col-lg-4">
        <div class="card course bg-transparent">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Medical pathology</h5>
            <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/stomach.svg" style="width:180px;height:180px;"></button>
            <p class="card-text">Medical pathology.</p>
          <a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=medical-pathology">اضغط هنا</a>
          </div>
        </div>
      </div>

    
      <div class="col-lg-4">
        <div class="card course bg-transparent">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">English</h5>
            <button class="btn text-primary" type="button" disabled="" style="font-weight:bold;"><img src="assets/images/svg/language.svg" style="width:180px;height:180px;"></button>
            <p class="card-text">English.</p>
          <a class="btn btn-outline-primary btn-md shadow" href="subject.php?n=english">اضغط هنا</a>
          </div>
        </div>
      </div>

    
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

 <script type="text/javascript">
Swal.fire({
  title: '<span style="#3dc99a">أسألكم الدعاء لأختي بالرحمة والمغفرة 💚</span><br> اللهم إنّي أسألك أن ترزقني علمًا نافعًا، وأن تنفعني بما علّمتني وأنت تزيدني علمًا، وأن تهبني من لدنك عقلًا منيرًا، ونفسًا منشرحة مقبلة على الدراسة والتحصيل العلمي برغبةٍ وحب، واجعلني يا ربّي سريع الحفظ حاد الذهن، واجعل ما رزقتني من العلم حجةً لي لا عليّ .',
  text: 'بُرمج بكل 💗 بواسطة عبدالرحمن محمد',
  confirmButtonText: 'أغلاق',
  cancelButtonText: 'لا',
  showCloseButton: true
})

 </script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
