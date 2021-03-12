<?php
    require('php/head.php');
?>
<body id="bg-img">

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
                <li class="nav-item current">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
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

    <main id="home">
        <h1 class="lg-heading">
            Michaël <span class="text-secondary">Redant</span> 
        </h1>
        <h2 class="sm-heading">
            Web Developer, Designer, Optometrist & Entrepeneur
        </h2>
        <div class="icons">
            <a href="https://www.facebook.com/mredant1/">
            <i class="fab fa-facebook fa-2x"></i>
            </a>

            <a href="https://www.instagram.com/m_redant/">
            <i class="fab fa-instagram fa-2x"></i>
            </a>
            
            <a href="https://www.linkedin.com/in/michael-redant/">
            <i class="fab fa-linkedin fa-2x"></i>
            </a>

            <a href="https://github.com/MichaelRedant">
            <i class="fab fa-github fa-2x"></i>
            </a>
        </div>
    </main>
    <?php
    require('php/lower.php');
    ?>