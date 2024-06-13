<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dallas Family Clinic</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo">Dallas Family Clinic</a>


    <div class="navbar">
  <a href="../pages/home.php" style="font-size:20px">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Doctors
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../pages/doctor_add.php">Add Doctors</a>
      <a href="../pages/doctor_view.php">View Doctors</a>
      
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Patients
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../pages/patient_add.php">Add Patients</a>
      <a href="../pages/patient_view.php">View Patients</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Medicine
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../pages/medicine_add.php">Add Medicine</a>
      <a href="../pages/medicine_view.php">View Medicine</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Bed
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../pages/bed_add.php">Add Bed</a>
      <a href="../pages/bed_view.php">View Bed</a>
      
    </div>
  </div> 
</div>
        
 <a href="../pages/login.php" class="fas fa-user" style="font-size:25px;"> Login</a>
   

</header>
<script src="script.js"></script>   
</body>
</html>
