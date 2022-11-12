<?php include 'include/header.php'?>
    <!-- Home Section desig -->
    <section class="home" id="home">
        <div class="home-text">
            <div class="slide">
                <span class="one">Hello</span>
                <span class="two">I`m</span>
            </div>
            <h1>Xhemali</h1>
            <h3>Web <span>Developer</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam doloribus a quasi eum.</p>
            <a href="#" class="btn">Say Hi</a>
            <a href="#" class="btn2"><span><i class="bx bx-play"></i></span>Watch My Work</a>
        </div>
    </section>
    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="./assets/img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <h4>Creative UI/UX Designer!</h4>
            <p>Check out 10 Best Design's updates for the top web design & development companies for your needs by reviewing our list & development companies! Find the best web design. Web Design Consulting. Comprehensive Directory. Top Reviewed Design Firms. Types: Enterprise Design Firms, Startup Design Firms, Custom Design Firms, eCommerce Design Firms, App Design Firms. Custom Web Solution. 24x7 Customer Support. Secure Payment Gateway. Get A Free Web Quote. 24/7 Chat Support. Services: Web Page Design, Landing Page Design, App development, Mobile Website Design</p>
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
            <div class="box">
                <div class="s-icons">
                    <i class="bx bx-mobile-alt"></i>
                </div>
                <h3>Web Design</h3>
                <p>One way to categorize the activities is in terms of the professional’s area of expertise such as competitive analysis, corporate strategy.</p>
                <a href="#" class="read">Read More</a>
            </div>

            <div class="box">
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
            </div>
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
            <h4>If You Have Any Project In Your Mind.</h4>
            <p>I`m a UI\UX Designer -creating blog & brave interface design for companies all across the world.</p>
            <div class="list">
                <li><a href="#"><?=$personal_info['phone']?></a></li>
                <li><a href="#"><?=$personal_info['email']?></a></li>
                <li><a href="#">Like Share & Subsribe</a></li>
            </div>
            <div class="contact-icons">
                <a href="<?= $personal_info['facebook'] ?>" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="#<?=$personal_info['twitter']?>"><i class='bx bxl-twitter'></i></a>
                <a href="<?=$personal_info['instagram']?>"><i class='bx bxl-instagram-alt'></i></a>
                <a href="<?=$personal_info['youtube'] ?>"><i class='bx bxl-youtube'></i></a>
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
 <?php include 'include/footer.php';?>