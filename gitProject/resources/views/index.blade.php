
<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link href="style.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ route('welcome')}}">Web site</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About me</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">

                <img src="20210220232014.jpg" alt="" />



            </div>
        </header>

        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

                <div class="divider-custom">
                     <h4> <br />
                     Here, I want to tell you a little information about myself. I think you will read to the end. I live in the city of Kentau.  <br /> <br />   As a student, I am quite busy on weekdays. However, at weekends, I have much free time, so I usually spend it on relaxing to prepare for a coming busy week. First of all, in my free time, I like playing some sports, such as soccer, badminton or basketball, with my friends. Sport not only makes me stronger but also connects me with my friends who have the same hobbies. <br />  <br />  We sometimes go riding in order that we can combine sporting activity and sightseeing. If the weather is not fine enough for me to hang out with my friends, I like to read books. I have a big bookshelf with many kinds of books but I prefer science books. Through these books, my knowledge is gradually enlarged.  </h4>
                </div>


            </div>
        </section>

        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-white">About me <br /></h2>
            <h2></h2>


                <div class="row">
                    <div class="col-lg-4 ml-auto"><h5 class="lead1">
                        <br />
                       Welcome to my small website. I am a sophomore at SDU, majoring in Information Systems. Although I did not excel in my studies, I study at an average level. I do not plan to work in this specialty in the future. I want to start my own business. But time will tell.<br />
                   <br /></p></div>
                    <div class="col-lg-4 mr-auto"><h5 class="lead1"><br />I am the third child in my family. My father works in a medical center. My mother is a housewife. I have two brothers and two younger sisters. My older brother is married. She has three lovely children. My second brother works in Korea. My sisters go to school. Although my life has gone smoothly, there have been some difficult and complicated events. But isn't life so interesting?!<br /><br /></p></div>

                </div>
                </div>

                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="">
                        <i class="fas fa-download mr-2"></i>
                        Download Info!
                    </a>
                </div>
            </div>
        </section>

        <section class="page-section" id="contact">
            <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                </div>
                </div>
            </div>
        </section>

        <footer class="footer text-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                           Almaty, Kaskelen
                            <br />
                           SDU
                        </p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-whatsapp"></i></a>
                    </div>

                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">My Email</h4>
                        <p class="lead mb-0">
                           190103296@stu.sdu.sdu.kz
                             <br /> gaukhar222@mail.ru
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright py-4 text-center text-white">
            <div class="container"><big>Copyright © Your Website 2020</big></div>
        </div>

        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>



        <script src="scripts.js"></script>
          <script src="contact_me.php"></script>
    </body>
</html>
