<?php
    require('php/head.php');
?>
    <header>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <nav class="menu">
            <div class="menu-branding">
               <div class="portrait"></div>
            </div>
            <ul class="menu-nav">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item ">
                    <a href="about.php" class="nav-link">About Me</a>
                </li>
                <li class="nav-item current">
                    <a href="work.php" class="nav-link">My Work</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">How To Reach Me</a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="work">
        <h1 class="lg-heading">
            My <span class="text-secondary">Work</span> 
        </h1>
        <h2 class="sm-heading">
            Check out some of my projects...
        </h2>
        <div class="projects">
            <div class="item">
                <a href="#!"> <img src="img/project1.jpg" alt="project1"></a>
               <a href="#" class="btn-light">
                   <i class="fas fa-eye">Project</i>
               </a>
               <a href="#" class="btn-dark">
                <i class="fab fa-github">Github</i>
            </a>
            </div>
            
            <div class="item">
                <a href="#!"> <img src="img/project2.jpg" alt="project1"></a>
               <a href="#" class="btn-light">
                   <i class="fas fa-eye">Project</i>
               </a>
               <a href="#" class="btn-dark">
                <i class="fab fa-github">Github</i>
            </a>
            </div>        

            <div class="item">
                <a href="#!"> <img src="img/project3.jpg" alt="project1"></a>
               <a href="#" class="btn-light">
                   <i class="fas fa-eye">Project</i>
               </a>
               <a href="#" class="btn-dark">
                <i class="fab fa-github">Github</i>
            </a>
            </div>        

            <div class="item">
                <a href="#!"> <img src="img/project4.jpg" alt="project1"></a>
               <a href="#" class="btn-light">
                   <i class="fas fa-eye">Project</i>
               </a>
               <a href="#" class="btn-dark">
                <i class="fab fa-github">Github</i>
            </a>
            </div>        

            <div class="item">
                <a href="#!"> <img src="img/project5.jpg" alt="project1"></a>
               <a href="#" class="btn-light">
                   <i class="fas fa-eye">Project</i>
               </a>
               <a href="#" class="btn-dark">
                <i class="fab fa-github">Github</i>
            </a>
            </div>        
        </div>
    </main>
    <?php
    require('php/lower.php');
    ?>