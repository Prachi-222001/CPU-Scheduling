<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Operating System Algorithms Virtual Representation</title>
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php">Operating System</a>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-window-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="docs.php">DESCRIPTION</a></li>
                    <li><a href="login.php">CALCULATOR</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    

                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>
                Visualize CPU Scheduling Algorithms
            </h1>
            <p>
                Virtual representation for all type of Scheduling algorithm which will help you to understand algorithm better way...

                <br>Start Visualization Now.
            </p>
            <a href="login.php" class="hero-btn">GET STARTED</a>
        </div>
    </section>

    <section class="course">
        <h1>Need of Algorithm</h1>
        <p>Main purposes of CPU Scheduling Algorithm which is listed below</p>

        <div class="row" data-aos="zoom-in-up">
            <div class="course-colomn" >
                <h3>CPU Utilization</h3>
                <p>CPU scheduling is a process that allows one process to use the CPU while the execution of another process is on hold due to unavailability of any resource like I/O etc, thereby making full use of CPU. The aim of CPU scheduling is to maximize CPU utilization by making the system efficient, fast, and fair.</p>
            </div>
            <div class="course-colomn" >
                <h3>Max Performance</h3>
                <p>To make out the best use of the CPU and not to waste any CPU cycle, the CPU would be working most of the time(Ideally 100% of the time). Considering a real system, CPU usage should range from 40% (lightly loaded) to 90% (heavily loaded.)</p>
            </div>
            <div class="course-colomn" >
                <h3>Time Minimizing</h3>
                <p>There are many very different types of algorithms for different different tasks. By using them we can minimize waiting time, response time and turnaround time of processes. like turnaround time is minimized if most processes finish their next cpu burst within one time quantum.</p>

            </div>
        </div>
    </section>

    
    


    <section class="cta" data-aos="zoom-in-up">
        <h1>Learn about all types of Algorithm<br> Click Below!</h1>
        <a href="./docs.php" class="hero-btn">Click Here</a>
    </section>

    
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

        function gotoDocs(){
            location.href = ("docs.php");
        }
    </script>

    <!-- animation for cards -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 100, // offset (in px) from the original trigger point
        duration: 800
      }
      );
    </script>
</body>

</html>