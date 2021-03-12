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
                    <a href="Index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item ">
                    <a href="about.php" class="nav-link">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="work.php" class="nav-link">My Work</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php current" class="nav-link">How To Reach Me</a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="contact">
        <h1 class="lg-heading">
            Contact <span class="text-secondary">Me</span> 
        </h1>
        <h2 class="sm-heading">
            This is how you can reach me...
        </h2>
        <div class="boxes">
            <div>
                <span class="text-secondary">Email: 
                </span><br><a href="mailto:michael.redant2@telenet.be">Xinu B.V.</a>
            </div>
            <div>
                <span class="text-secondary">Phone: 
                </span><br><a href="tel:+32496908503">0496.90.85.03</a>
            </div>
            <div>
                <span class="text-secondary">Address: 
                </span><address>Kattestraat 27 9300 Aalst</address>
            </div>
        </div>
    </main>
    <?php
    require('php/lower.php');
    ?>