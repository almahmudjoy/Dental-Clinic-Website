<?php 
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

$select_service = $conn->prepare("SELECT * FROM `services`");
$select_service->execute();
$fetch_service_count = $select_service->rowCount(); 

$select_employee = $conn->prepare("SELECT * FROM `employee`");
$select_employee->execute();
$fetch_employee_count = $select_employee->rowCount(); 

$select_appointment = $conn->prepare("SELECT * FROM `appointments`"); 
$select_appointment->execute();
$fetch_appointment = $select_appointment->rowCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentiCare - Dental Clinic Website</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">

</head>
<body>

    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing<br>
               Lorem ipsum, dolor sit amet consectetur adipisicing</p>
               <span><a href="home.php">Home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
        </div>
    </div>


    <div class="about">
        <div class="box-container">
            <div class="box">
                <span>about denticare</span>
                <h2>Where Expertise Meets Compassion Your Journey to Optimal Oral Health</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minima fugiat consectetur non, 
                    iusto maxime ducimus quaerat quidem voluptate aut fugit itaque. Incidunt amet quis, 
                    culpa dignissimos fugiat commodi distinctio.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minima fugiat consectetur non, 
                    iusto maxime ducimus quaerat quidem voluptate aut fugit itaque. Incidunt amet quis, 
                    culpa dignissimos fugiat commodi distinctio.</p>
            </div>
            <div class="box">
                <img src="image/about.avif">
            </div>
        </div>
    </div>

    <div class="event">
        <div class="heading">
            <h1>the <span>dental & oral health</span>summit</h1>
            <p>innovative ideas in dentistry</p>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/about.png">
            </div>
            <div class="box">
                <h2>Dental health current research</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    iusto accusamus eos obcaecati, hic non quo, perferendis amet dicta delectus molestiae 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    ipsam ea porro vero illum soluta consectetur.</p>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/about.png">
            </div>
            <div class="box">
                <h2>Dental health current research</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    iusto accusamus eos obcaecati, hic non quo, perferendis amet dicta delectus molestiae 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    ipsam ea porro vero illum soluta consectetur.</p>
            </div>
        </div>
         <div class="box-container">
           
            <div class="box">
                <h2>oral hygine - the role of mouthwash</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    iusto accusamus eos obcaecati, hic non quo, perferendis amet dicta delectus molestiae 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque doloribus, 
                    ipsam ea porro vero illum soluta consectetur.</p>
            </div>
            <div class="box">
                <img src="image/about0.png">
            </div>
        </div>
    </div>
    <div class="role">
        <div class="box-container">
            <div class="box">
                <h1>The Role of Dental Implants</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda ea repudiandae doloremque 
                    reiciendis illum? Sequi impedit eveniet explicabo labore architecto ullam? Officiis nesciunt 
                    aliquam consectetur, maxime molestias recusandae sit? Dolor.</p>
            </div>
            <div class="box">
                <img src="image/about1.jpg">
            </div>
        </div>
        <div class="box-container">
        <div class="box">
                <img src="image/about2.jpg">
            </div>
            <div class="box">
                <h1>Dental Implants is Dentistry</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda ea repudiandae doloremque 
                    reiciendis illum? Sequi impedit eveniet explicabo labore architecto ullam? Officiis nesciunt 
                    aliquam consectetur, maxime molestias recusandae sit? Dolor.</p>
            </div>
            
        </div>
    </div>

    <div class="skill-container">
        <div class="heading">
            <span>out dental services</span>
            <h1>in numbers</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque doloribus quod provident nihil voluptas. 
                Explicabo recusandae repudiandae ullam eos iste molestiae id magni eius iure, 
                adipisci ea, sit cupiditate quisquam.</p>
        </div>
        <div class="container">
            <!-- progress bar start -->
            <div class="progress-bar">
                <div class="progress">
                    <span class="title timer" date-form="0" date-to="99" date-speed="1800">,<img src="image/counter (1).png"></span>
                    <div class="overlay"></div>
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <h1>99%</h1>
                <h4>client satisfaction</h4>
            </div>
             <!-- progress bar start -->
             <div class="progress-bar">
                <div class="progress">
                    <span class="title timer" date-form="0" date-to="70" date-speed="1500">,<img src="image/icon (7).png"></span>
                    <div class="overlay"></div>
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <h1>97%</h1>
                <h4>intervention success</h4>
            </div>
             <!-- progress bar start -->
             <div class="progress-bar">
                <div class="progress">
                    <span class="title timer" date-form="0" date-to="100" date-speed="1500">,<img src="image/counter (3).png"></span>
                    <div class="overlay"></div>
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <h1>100%</h1>
                <h4>happy with staff</h4>
            </div>
             <!-- progress bar start -->
             <div class="progress-bar">
                <div class="progress">
                    <span class="title timer" date-form="0" date-to="85" date-speed="1800">,<img src="image/counter (2).png"></span>
                    <div class="overlay"></div>
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <h1>97%</h1>
                <h4>quick recovery</h4>
            </div>
             <!-- progress bar start -->
        </div>
    </div>

    <div class="testimonial-container">
        <div class="heading">
            <span>clients with</span>
            <h1>reason to smile</h1>
        </div>
        <div class="container">
            <div class="testimonial-item active">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam0.webp">
                <h1>john smith</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ratione 
                odio quam commodi voluptas. Blanditiis totam illo, sint dolorem illum harum 
                aperiam et quaerat dolores voluptate nobis recusandae corporis quis.
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam.webp">
                <h1>aiyman doe</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ratione 
                odio quam commodi voluptas. Blanditiis totam illo, sint dolorem illum harum 
                aperiam et quaerat dolores voluptate nobis recusandae corporis quis.
            </div>

            <div class="testimonial-item">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam1.webp">
                <h1>selena ansari</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ratione 
                odio quam commodi voluptas. Blanditiis totam illo, sint dolorem illum harum 
                aperiam et quaerat dolores voluptate nobis recusandae corporis quis.
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam2.webp">
                <h1>alweena smith</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ratione 
                odio quam commodi voluptas. Blanditiis totam illo, sint dolorem illum harum 
                aperiam et quaerat dolores voluptate nobis recusandae corporis quis.
            </div>
            <div class="left-arrow" onclick="rightSlide()"><i class="bx bx-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="leftSlide()"><i class="bx bx-right-arrow-alt"></i></div>
        </div>
    </div>




    <?php include 'components/user_footer.php'; ?>

    <!-- SweetAlert CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Custom JS Link -->
    <script type="text/javascript" src="/js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>
</html>