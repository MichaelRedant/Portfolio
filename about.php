<?php
    require('php/head.php');
?>
<body>

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
                <li class="nav-item current">
                    <a href="about.php" class="nav-link">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="work.php" class="nav-link">My Work</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">How To Reach Me</a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="about">
        <h1 class="lg-heading">
            About <span class="text-secondary">Me</span> 
        </h1>
        <h2 class="sm-heading">
            Let me tell you a few things...
        </h2>
        <div class="about-info">
            <img src="img/profileXs.png" alt="Profile picture" class="bio-image">
            <div class="bio">
                <h3 class="text-secondary">BIO</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique distinctio harum illo velit omnis unde!
                </p>
            </div>
            <div class="job job-1">
                <h3>123 Webshop</h3>
                <h6>Full Stack Developer</h6>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi non quisquam id. Numquam, beatae reprehenderit!
                </p>
            </div>
            <div class="job job-2">
                <h3>Designers ABC</h3>
                <h6>Front End Developer</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint animi officia ea, dolorem aliquid inventore.</p>
            </div>
            <div class="job job-3">
                <h3>Webworks</h3>
                <h6>Graphic Designer</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem aspernatur eligendi rem recusandae praesentium delectus!</p>
            </div>
        
        </div>
    </main>
    <?php
    require('php/lower.php');
    ?>