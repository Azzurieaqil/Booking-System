<?php
	$db = mysqli_connect('localhost','root','','eklinik');
	if(isset($_POST['go'])) {
		$nama = $_POST['name'];
		$class = $_POST['kelas'];
		$kad = $_POST['ic'];
		$hostel = $_POST['asrama'];
		$reason = $_POST['aduan'];
		
		$sql = "INSERT INTO borang(Nama, Kelas, ic, asrama, aduan, waktuketibaan, tarikh) values ('$nama','$class','$kad', '$hostel', '$reason', 'PENDING', 'PENDING')";
		if(mysqli_query($db, $sql));
		
		header('index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SPPKK &mdash; Website by Pablo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="h2 mb-0">SPPKK<span></span> <span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">HOME</a></li>
                <li><a href="#about-section" class="nav-link">FORM</a></li>
                <li><a href="#training-section" class="nav-link">WAITING LIST</a></li>
                <li><a href="#services-section" class="nav-link">REPORT</a></li>
<!--            <li><a href="login.php" class="nav-link">LOGOUT</a></li>  -->               
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url('images/kl-campus.jpg');" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row">

          <div class="col-md-6 mt-lg-5 ml-auto text-left align-self-end align-self-md-center" font="arial">
            <h1>BOOKING TRANSPORTATION TO CLINIC</h1>
            
          </div>
            
        </div>
      </div>
    </div>  

    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
            <h2 class="text-white">REMINDER </h2>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="mr-3"><i class="fas fa-clock fa-50px" style='font-size:80px'></i></div>
            <div>
              <h3 class="text-white h4">Booking Time</h3>
              <p class="text-special">Available booking time at 9.00 am to 11.00 am.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="mr-3"><i class='fab fa-wpforms' style='font-size:80px'></i></div>
            <div>
              <h3 class="text-white h4">Info </h3>
              <p class="text-special">Inform lecturer before booking.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-lg-5 ml-auto mb-5 order-md-2" data-aos="fade">
            
          </div>
          <div class="col-lg-12 order-md-1" data-aos="fade"><br>
            <CENTER><h2 class="section-title mb-3">FILL THE FORM</h2>
            <p class="lead">This form only for students only.<br></p><p></CENTER><br>
          <form action="" class="p-5 bg-white" method="post" id="formKau">
              
              <h2 class="h4 text-black mb-5">Form to request transportation</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Full Name</label>
                  <input type="text" id="fname" name="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Course</label>
                  <input type="text" id="lname" name="kelas" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black">Student ID</label> 
                  <input type="text" id="ic" name="ic" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Hostel</label> 
                 <br>
				  <select name="asrama">
							<option value="No">--Choose--</option>
							<option value="Yes">Yes</option>
							<option value="Noy">No</option>
				  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message" >Reason</label> 
                  <textarea id="message" name="aduan" cols="30" rows="7" class="form-control" placeholder="Sickness Suspect" required></textarea>
                  <br> <label class="text-black">Van Capacity</label>
                  <br> 
<?php
    $sql1 = "select * FROM kapasiti ORDER BY id DESC";
    $query1 = mysqli_query($db,$sql1);
    $row1 = mysqli_fetch_array($query1);
    $kapasiti = $row1['kapasiti'];
?>
<?php echo $kapasiti; ?> / 12
                  <br>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                  <input style="display: none;" type="text" value="Hantar" name="go">
                  <a class="btn btn-primary btn-md text-white" onclick="padanMu()">Book</a>


                </div>
              </div>
            </form>
            <p class="mb-4">Please fill every field*</p>
          
          </div>
          
        </div>
      </div>
    </section>
  
<script type="text/javascript">
  function padanMu() {
    window.alert("Request date");
    document.getElementById('formKau').submit();
  }
</script>



            	<style>
* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #3A4971;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid ##3A4971;
}

.content-table  { text-align: center }


</style>
             
  <section  id="training-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center"><BR><br><br>
            <h2 class="section-title mb-3">WAITING LIST</h2>
          </div>  
        </div>
         <center>   <table class="content-table">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Course</th>
      <th>Time Arrival</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $db = mysqli_connect('localhost','root','','eklinik');
  $sql = "SELECT * FROM borang";
  $res = mysqli_query($db, $sql);
  $count = 0;
  while($row = mysqli_fetch_array($res)): ?>
 <?php 
  $id = $row['id_unithep'];
  $nama = $row['Nama'];
  $class = $row['Kelas'];
  $kad = $row['ic'];
  $hostel = $row['asrama'];
  $reason = $row['aduan'];
  $tarikh = $row['tarikh'];
  $waktuketibaan = $row['waktuketibaan'];

  $count++;
?>
    <tr>
      <td><?php echo $count; ?></td>
      <td><?php echo $nama; ?></td>
      <td><?php echo $class; ?></td>
      <?php if ($waktuketibaan == 'PENDING'): ?>
        <td><font color="red"><?php echo $waktuketibaan; ?></td>
      <?php else: ?> 
        <td><font color="grey"><?php echo $waktuketibaan; ?></td>
      <?php endif ?>

      <?php if ($tarikh == 'PENDING'): ?>
        <td><font color="red"><?php echo $tarikh; ?></td>
      <?php else: ?> 
        <td><font color="grey"><?php echo $tarikh; ?></td>
      <?php endif ?>

    </tr><?php endwhile; ?>
  </tbody>
</table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    
  
    <section  id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center"><BR><br><br>
            <h2 class="section-title mb-3">REPORT</h2>
          </div>
        </div>
              
        <center>   <table class="content-table">
        <div class="col-md-3">
       <select name="laporan" onchange="searchMe(this.value)">
       <option value="test">--Choose Date--</option> 
            <option value="Jan">January</option>
            <option value="Feb">February</option>
            <option value="Mar">March</option>
            <option value="Apr">April</option>
            <option value="May">May</option>
            <option value="Jun">June</option>
            <option value="Jul">July</option>
            <option value="Aug">August</option>
            <option value="Sep">September</option>
            <option value="Oct">October</option>
            <option value="Nov">November</option>
            <option value="Dis">December</option>
          </select>
        
      </div>

  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Course</th>
      <th>Student ID</th>
      <th>Hostel</th>
      <th>Reason</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $db = mysqli_connect('localhost','root','cloudcomputing','cloudcomputing');
  $sql = "SELECT * FROM borang";
  $res = mysqli_query($db, $sql);
  $count = 0;
  while($row = mysqli_fetch_array($res)): ?>
 <?php 
  $id = $row['id_unithep'];
  $nama = $row['Nama'];
  $class = $row['Kelas'];
  $kad = $row['ic'];
  $hostel = $row['asrama'];
  $reason = $row['aduan'];
  $tarikh = $row['tarikh'];

  $count++;
?>
    <tr class="bulanan">
      <td><?php echo $count; ?></td>
      <td><?php echo $nama; ?></td>
      <td><?php echo $class; ?></td>
      <td><?php echo $kad; ?></td>
      <td><?php echo $hostel; ?></td>
      <td><?php echo $reason; ?></td>
     
     

      <?php if ($tarikh == 'PENDING'): ?>
        <td class="laporan"><font color="red"><?php echo $tarikh; ?></td>
      <?php else: ?> 
        <td class="laporan"><font color="grey">

      <?php 
      $tarikh = strtotime($tarikh);
      $tarikh = date('d-M-Y', $tarikh);
      echo $tarikh; ?></td>

      <?php endif ?>
    </tr><?php endwhile; ?>
  </tbody>
</table>

<!-- <input type="submit" value="Print" onclick="PrintElem('contents')" class="btn btn-primary btn-md text-white">  -->
<a onclick="PrintElem('services-section')" class="btn btn-primary btn-md text-white">Print</a>

  <script type="text/javascript">
    function PrintElem(elem)
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close(); 

    //window.location = 'index.php';

    return true;
}
</script> <br>
            
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

      <section class="site-section border-bottom bg-light" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center"><BR>
            <h2 class="section-title mb-3">Health Care Organization</h2>
            <p class="lead">Lecturer Incharge for Healthcare</p>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="images/about_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Jam Smith</h3>
                <span class="position">Head of Student Affairs</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Kate Upton</h3>
                <span class="position">Assistant of Student Affairs</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
             
                <img src="images/person_5.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <br><h3>Jacob Williams</h3>
                <span class="position">Head of Discipline</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid" width="150%">
              </figure>
              <div class="p-3">
                <br><h3>Jack Daniels</h3>
                <span class="position">Head of Counseling</span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p class="mb-5">Transportation application system to the clinic in an online and systematic way. </p> <br>

                <h2 class="footer-heading mb-4">Developer</h2>
                
                  <div class="input-group mb-3">
                    <p class="mb-5">Azzurie Aqil bin Dajhiary dan Bill Gates</p>
                    <div class="input-group-append">
                    </div>
                  </div>
                </form>

              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Link</h2>
                <ul class="list-unstyled">
                  <li><a href="#home-section">Home</a></li>
                  <li><a href="#team-section">Health Care Organization</a></li>
                  <li><a href="#about-section">Form</a></li>
                  <li><a href="#training-section">Waiting List</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-5">
              <img src="images/ucsi.jpg" alt="" class="img-fluid mb-4">
              <h2 class="footer-heading mb-4">History</h2>
              <p>Developed in 2021 from Group PowerH.</p>
            </div>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
         &copy;<script>document.write(new Date().getFullYear());</script> UCSI | Developed <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >PowerH</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>

  <!-- function sort by -->
  <script type="text/javascript">
    var rw = document.getElementsByClassName('bulanan');
    var nm = document.getElementsByClassName('laporan');
    function searchMe(value) {
        value = value.toUpperCase();
        if ((value == "")||(value == null)) {
            for (var i = 0; i < nm.length; i++) {
                rw[i].style.display = 'table-row';
                nm[i].style.fontWeight = 'normal';
            }
        }else {
          if(value == "TEST") {
            for (var i = 0; i < nm.length; i++) {
              rw[i].style.display = 'table-row';  
            }
          }else {
            for (var i = 0; i < nm.length; i++) {
                var s = nm[i].innerHTML.toUpperCase().includes(value);
                if (s == true) {
                    rw[i].style.display = 'table-row';
                    nm[i].style.fontWeight = 'bold';
                }else {
                    rw[i].style.display = 'none';
                }
            }
          }
        }
    }
</script>
    
  </body>
</html>

