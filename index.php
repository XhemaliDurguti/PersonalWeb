<?php include 'include/header.php' ?>
<!-- Home Section desig -->
<section class="home" id="home">
    <div class="home-text">
        <div class="slide">
            <span class="one">Hello</span>
            <span class="two">I`m</span>
        </div>
        <h1><?= $name ?></h1>
        <h3><?= $tit[0] . ' ' . $tit[1] ?> <span><?= $tit[2] ?></span></h3>
        <p><?= substr($desc, 0, 70) ?></p>
        <a href="#contact" class="btn">Say Hi</a>
        <a href="#portfolio" class="btn2"><span><i class="bx bx-play"></i></span>Watch My Work</a>
    </div>
</section>
<!-- about section design -->
<!-- about section design -->
<section class="about" id="about">
    <div class="about-img">
        <img src="./assets/img/<?= $image ?>" alt="">
    </div>
    <div class="about-text">
        <h2>About <span>Me</span></h2>
        <h4><?= $title ?></h4>
        <p><?= substr($desc, 0, 600) ?></p>
        <a href="#" class="btn">More About</a>
    </div>
</section>
<!-- service section design -->
<section class="services" id="services">
    <div class="main-text">
        <p>What i am Expert In</p>
        <h2><span>My</span> Services</h2>
    </div>

    <div class="services-content">
        <?php
        $sql1 = "SELECT * FROM services WHERE id LIMIT 3";
        $res1 = mysqli_query($con, $sql1);
        while ($services_info = mysqli_fetch_array($res1)) {
            $id = $services_info['id'];
            $icon = $services_info['icon'];
            $title = $services_info['title'];
            $desc = $services_info['description'];

        ?>

            <div class="box">
                <div class="s-icons">
                    <i class="<?= $icon ?>"></i>
                </div>
                <h3><?= $title ?></h3>
                <p><?= $desc ?></p>
                <a href="<?=$id?>" class="read">Read More</a>
            </div>
        <?php
        }
        ?>

        <!-- <div class="box">
            <div class="s-icons">
                <i class="bx bx-code-alt"></i>
            </div>
            <h3>Web development</h3>
            <p>One way to categorize the activities is in terms of the professional’s area of expertise such as competitive analysis, corporate strategy.</p>
            <a href="#" class="read">Read More</a>
        </div>

        <div class="box">
            <div class="s-icons">
                <i class="bx bx-edit-alt"></i>
            </div>
            <h3>Creative Design</h3>
            <p>One way to categorize the activities is in terms of the professional’s area of expertise such as competitive analysis, corporate strategy.</p>
            <a href="#" class="read">Read More</a>
        </div> -->
    </div>
</section>
<!-- Portfolio section design -->
<section class="portfoli" id="portfolio">
    <div class="main-text">
        <p>Portfolio</p>
        <h2><span>Latest</span> Project</h2>
    </div>
    <div class="portfolio-content">
        <div class="row">
            <img src="./assets/img/project-1.jpg" />
            <div class="layer">
                <h5>Visual Design</h5>
                <p>Check out 10 Best Design's updates for the top web design & development companies.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="row">
            <img src="./assets/img/project-1.jpg" />
            <div class="layer">
                <h5>Visual Design</h5>
                <p>Check out 10 Best Design's updates for the top web design & development companies.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="row">
            <img src="./assets/img/project-2.jpg" />
            <div class="layer">
                <h5>Visual Design</h5>
                <p>Check out 10 Best Design's updates for the top web design & development companies.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="row">
            <img src="./assets/img/project-3.jpg" />
            <div class="layer">
                <h5>Visual Design</h5>
                <p>Check out 10 Best Design's updates for the top web design & development companies.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="row">
            <img src="./assets/img/blog1.png" />
            <div class="layer">
                <h5>Visual Design</h5>
                <p>Check out 10 Best Design's updates for the top web design & development companies.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="row">
            <img src="./assets/img/project-1.jpg" />
            <div class="layer">
                <h5>Visual Design</h5>
                <p>Check out 10 Best Design's updates for the top web design & development companies.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

    </div>
</section>
<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="contact-text">
        <h2>Contact <span>Me!</span></h2>
        <h4><?= $slogan ?></h4>
        <p><?= $title ?></p>
        <div class="list">
            <li><a href="#"><?= $phone ?></a></li>
            <li><a href="#"><?= $email ?></a></li>
            <li><a href="#">Like Share & Subsribe</a></li>
        </div>
        <div class="contact-icons">
            <a href="<?= $facebook ?>" target="_blank"><i class='bx bxl-facebook'></i></a>
            <a href="<?= $twiter ?>" target="_blank"><i class='bx bxl-twitter'></i></a>
            <a href="<?= $insta ?>" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
            <a href="<?= $youtube ?>" target="_blank"><i class='bx bxl-youtube'></i></a>
        </div>
    </div>
    <div class="contact-form">
        <form action="">
            <input type="name" placeholder="Your Name" required />
            <input type="email" placeholder="Your Email Addres" required />
            <input type="" placeholder="Your Mobile Number" required />
            <textarea name="" id="" cols="35" rows="10" placeholder="Your Message Here...."></textarea>
            <input type="submit" value="Send Message" class="submit" required>
        </form>
    </div>
</section>
<?php include 'include/footer.php'; ?>