<?php
    session_start();
    if (isset($_SESSION["status"])) {
        $status = $_SESSION["status"];
    }    
    if (isset($_SESSION["job"])) {
        $job = $_SESSION["job"];
    }    
    $_SESSION["status"]="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Careers | Service IT+</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="author" content="SemiColonWeb" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../images/header/favicons.png">
    
    
    <!-- bootstrap & jquery css & js  -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">	
    <script src="../js/jquery1.11.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<!-- header css & js  -->
	<script type="text/javascript" src="../js/header2.js"></script>
	<script type="text/javascript" src="../js/fontawesome-all.min.js"></script>
	<link rel="stylesheet" href="../css/header.css" type="text/css" />
	<link rel="stylesheet" href="../css/careers.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    
<!--   <script type="text/javascript" src="../js/eModal.min.js"></script>-->
    <!--------  aot  --------->
    <link rel="stylesheet" href="../css/aos.css">

<!--    <script type="text/javascript" src="//beta.serviceitplus.com/livechat/php/app.php?widget-init.js"></script>-->
</head>

<style>
    .fadeIn{
        -webkit-animation: fadeIn 4s; /* Safari 4+ */
		-moz-animation:    fadeIn 4s; /* Fx 5+ */
		-o-animation:      fadeIn 4s; /* Opera 12+ */
		animation:         fadeIn 4s; /* IE 10+, Fx 29+ */
    }
    .carousel-inner > .item {
    position: relative;
    display: none;
    -webkit-transition: 4s ease-in-out left;
    -moz-transition: 4s ease-in-out left;
    -o-transition: 4s ease-in-out left;
    transition: 4s ease-in-out left;
}
</style>
<script type='text/javascript'>
    function hideNotif(){
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
    }   
//    document.getElementByClass("val-con").style.opacity = "0";
//    setTimeout(function () {
//        $('.val-con').show().addClass('animated fadeIn');}, 750
//    );
//    setTimeout(function () {
//        $('.val-con2').show().addClass('animated fadeIn');}, 1200
//    );
        $(document).ready(function(){
        $('#values').bind('slide.bs.carousel', function (e) {
            console.log('slide event!');
            
                setTimeout(function () {
                    $('.val-con.one').show().addClass('animated fadeIn');}, 750
                );    
                setTimeout(function () {
                    $('.val-con2.one').show().addClass('animated fadeIn');}, 1500
                );
        });
        })
    </script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#application').submit(function() {
         $('#page-loader').show(); 
          return true;
        });
    });
    
    function myFunction() {
      var element = document.getElementById("excellence");
      element.classList.toggle("blacktext");
      element.classList.toggle("graytext");
}
</script>
<style>/* raleway font css */
 @font-face{font-family:Raleway;font-style:normal;font-weight:400;src:local('Raleway'),local('Raleway-Regular'),url(../fonts/raleway.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Raleway;font-style:normal;font-weight:400;src:local('Raleway'),local('Raleway-Regular'),url(../fonts/raleway.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
 </style>
<body oncontextmenu=”return false” class="noselect" onload="<?php if ($status=="success"){echo "hideNotif()";}?>">
<!--<body oncontextmenu=”return false” onload="window.onbeforeunload = function () {window.scrollTo(0, 0);}">-->
<div id="page-loader"><div class="loader-cont"><i class="fa fa-spinner fa-spin" style="font-size:6rem;color:#f16a21;"></i></div></div>
<div class="body-wrapper">
<div class="body-container">
<?php include "../header.php" ?>
    <div class="block banner">
        <div class="text-container">
<!--            <p id="bannertitle">CAREERS</p>    -->
            <p id="bannertitle"  data-aos="zoom-in-up" data-aos-offset="100" data-aos-duration="600" data-aos-once="true">Make Career Growth Happen</p>
<!--            <p id="bannerTagline">Join Us at ServiceIT+</p>-->
        </div>
    </div>
    <div class="block first">
        <div class="title">Why Join <font>ServiceIT+</font></div>
        <div class="description">As much as we value our external clients, we give value to our internal clients relations just the same. We help our members grow in their career and increase their competency as professionals. We offer different training and seminars for the continuous learning and personal growth of our staff. The company recognizes high performances and celebrates the achievements of the team. <br></div>
        <div class="tagline">Here in ServiceIT+, we bring fun into the business.</div>
    </div>    
<script>
$(document).ready(function(){
  $('.owl-one').owlCarousel({
    autoWidth:true,
    center: true,
    loop:true,
    items:4,
    URLhashListener:true,
    startPosition: 'buffer',
    mouseDrag:false,
})
});
</script>
<style>
   
    .owl-dots{
        margin-top:-25px;
    }
</style>
<!--
    <div class="block second small">
        <div class="title">
            <h1>Core <FONT>Values</FONT></h1>
        </div>
    </div>
-->
    
    <div class="block third" style="display:none">
        <div class="title">Join <FONT>Our Teams</FONT></div>
        <div class="teams">
            <img src="../images/careers/sales.jpg" alt="" class="icon">
            <div class="title">Sales</div>
            <div class="positions">
               <ul class="fa-ul">
                   <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(1)><i class="fa-li fa fa-briefcase"></i>Account Manager</li>
<!--                   <li data-toggle="modal" data-target="#myModal" onClick=test()><i class="fa-li fa fa-briefcase"></i>Account Manager</li>-->
                   <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(2)><i class="fa-li fa fa-briefcase"></i>Business Development Manager</li>
                   <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(3)><i class="fa-li fa fa-briefcase"></i>Sales and Marketing Manager</li>
                   <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(4)><i class="fa-li fa fa-briefcase"></i>Sales and Marketing Executive</li>
               </ul>
            </div>
        </div>
        <div class="teams">
            <img src="../images/careers/tech.jpg" alt="" class="icon">
            <div>
                <div class="title">Technology</div>
                <div class="positions">
                    <ul class="fa-ul">
                       <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(5)><i class="fa-li fa fa-briefcase"></i>Solutions Architect</li>
                       <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(6)><i class="fa-li fa fa-briefcase"></i>Solutions Specialist I</li>
                       <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(7)><i class="fa-li fa fa-briefcase"></i>Solutions Specialist II</li>
                       <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(8)><i class="fa-li fa fa-briefcase"></i>Support Specialist I</li>
                   </ul>
                </div>
            </div>
            
        </div>
        <div class="teams">
            <img src="../images/careers/hr.jpg" alt="" class="icon">
            <div class="title">Human Resources</div>
            <div class="positions">
               <ul class="fa-ul">
                   <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(9)><i class="fa-li fa fa-briefcase"></i>Recruitment Staff</li>
                   <li data-toggle="modal" data-target="#myModal" onClick=changeTitle(10)><i class="fa-li fa fa-briefcase"></i>Human Resources Manager</li>
                   <li style="opacity:0"><i class="fa-li fa fa-briefcase"></i>asd</li>
                   <li style="opacity:0"><i class="fa-li fa fa-briefcase"></i>asd</li>
               </ul>
            </div>
        </div>
    </div>
    <div class="block fifth">
        <div class="title">Career <FONT>Opportunities</FONT></div>
        <div class="jobs-container">
        <?php
            $con = mysqli_connect('localhost','root','','sit_db');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            mysqli_select_db($con,"`careers`");
            $sql="select * from careers where status = 'active'";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result)) {
        //        echo $row['job_title']."<br>";
                echo "<div class='card' data-toggle='modal' data-target='#myModal' onClick=changeTitle(".$row['ID'].")>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>".$row['job_title']."</h5>";
                echo "<h6 class='card-subtitle mb-2'>".$row['department']." Department</h6>";
                echo "</div>";
                echo "</div>";
            }
        ?>
        </div>
    </div>
    <div class="block fourth">
        <div class="title">Our <FONT>Internship Program</FONT></div>
        <div class="description">Our Internship Program are best for individuals who wish to develop hands on experience  and gain relevant knowledge and skills required to enter the field of Information Technology. </div>
        <div class="apply-now-text"><u><font data-toggle="modal" data-target="#myModal" onClick="changeTitle(0)">Apply Now</font></u> and be part of our Internship Program!</div>
    </div>
<?php include "../footer.php" ?> 
</div>
</div>
<!--------------------------------  NOTIF DIV  ------------------------------->
<div class="alert alert-success alert-dismissable success <?php  if($status=="success"){echo "show";}else{echo "fade";}?>">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Success!</strong> You have successfully applied for the position <?php echo $job; ?>.
</div>
</body>
</html>

<!------------------- MODAL ------------------------------>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
<!-------------------------   MODAL HEADER   -------------------------------->
      <div class="modal-header">
        <h5 class="modal-title" id="modal.title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<!-------------------------   MODAL BODY   -------------------------------->
        <div class="modal-body">
            <div class="job-desc">
               <div class="job-desc-inner" id="job.desc">
               </div>                
            </div>
            <HR></HR>r
            <div class="appli-form-wrapper">
                <div class="appli-form-cont">
                   <div class="form-title">Apply Now!</div>
                    <form id="application" action='../careers-email.php' method='post' enctype='multipart/form-data'>
                       <input type="text" style="display:none;" id="txtPosition" name="txtPosition" readonly required>
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" autocomplete="off" required>                   
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" autocomplete="off" required>                    
                        <input type="email" id="emailAdd" name="emailAdd" placeholder="Email Address" autocomplete="off" required>   
                        <input type="text" id="contactNo" name="contactNo" placeholder="Contact Number" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                        <div class="box">
                            <input type="file" name="file-1" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="application/pdf,application/msword,image/*" required/>
                            <label for="file-1" id="uploadLabel" required><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span id="test">Upload Your Resume&hellip;</span></label>
                        </div>
                    </form>                
                    <input type="Submit" form="application" class="btn btn-success" value="Submit Application" onClick="loader()">
<!--                    <button type="submit" form="application" id="submit" class="btn btn-success" value="Submit Application"></button>-->
                </div>                
            </div>
        </div>
<!-------------------------   MODAL FOOTER   -------------------------------->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function test(){
        $.get("http://localhost/website/careers/test.html",function(data){
            $(".job-desc").html(data);
        });
    }
    function changeTitle(x){
            document.getElementById("application").reset();
            document.getElementById("test").innerHTML = "Upload Your Resume";
        if(x==0){
            document.getElementById("modal.title").innerHTML = "Intern";
            document.getElementById("txtPosition").value = "Intern";
            $.get("../careers/jobDescriptions/intern.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==1){
            document.getElementById("modal.title").innerHTML = "Account Manager";
            document.getElementById("txtPosition").value = "Account Manager";
            $.get("../careers/jobDescriptions/account-manager.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==2){
            document.getElementById("modal.title").innerHTML = "Business Development Manager";
            document.getElementById("txtPosition").value = "Business Development Manager";
            $.get("../careers/jobDescriptions/buss-devt-manager.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==3){
            document.getElementById("modal.title").innerHTML = "Sales and Marketing Manager";
            document.getElementById("txtPosition").value = "Sales and Marketing Manager";
            $.get("../careers/jobDescriptions/sales&marketingMngr.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==4){
            document.getElementById("modal.title").innerHTML = "Sales and Marketing Executive";
            document.getElementById("txtPosition").value = "Sales and Marketing Executive";
            $.get("../careers/jobDescriptions/sales&marketingExec.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==5){
            document.getElementById("modal.title").innerHTML = "Solutions Architect";
            document.getElementById("txtPosition").value = "Solutions Architect";
            $.get("../careers/jobDescriptions/solutionsArchitect.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==6){
            document.getElementById("modal.title").innerHTML = "Solutions Specialist I";
            document.getElementById("txtPosition").value = "Solutions Specialist I";
            $.get("../careers/jobDescriptions/solutionsSpecialist1.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==7){
            document.getElementById("modal.title").innerHTML = "Solutions Specialist II";
            document.getElementById("txtPosition").value = "Solutions Specialist II";
            $.get("../careers/jobDescriptions/solutionsSpecialist2.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==8){
            document.getElementById("modal.title").innerHTML = "Support Specialist I";
            document.getElementById("txtPosition").value = "Support Specialist I";
            $.get("../careers/jobDescriptions/supportSpecialist1.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==9){
            document.getElementById("modal.title").innerHTML = "Recruitment Staff";
            document.getElementById("txtPosition").value = "Recruitment Staff";
            $.get("../careers/jobDescriptions/recruitmentStaff.html",function(data){
                $(".job-desc").html(data);
            });
        }else if(x==10){
            document.getElementById("modal.title").innerHTML = "Human Resources Manager";
            document.getElementById("txtPosition").value = "Human Resources Manager";
            $.get("../careers/jobDescriptions/hrManager.html",function(data){
                $(".job-desc").html(data);
            });
        }        
    }
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });
</script>
<script src="../js/aos.js"></script>
<script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
</script>