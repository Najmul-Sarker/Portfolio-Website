<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Md.Najmul Sarker - Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Najmul</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url(<?php echo $main->bc_img?>)">
            <div class="container">
                <div class="masthead-heading">{{ $main->title }}</div>
                <div class="masthead-subheading text-uppercase">{{ $main->sub_title }}</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{ url($main->resume) }}">Resume</a>
            </div>
        </header>
        {{-- <!-- Services-->I change services section with skills --}}
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Skills</h2>
                    <h3 class="section-subheading text-muted">My Skills are:</h3>
                </div>
                <div class="row text-center">
                    @if (count($services) > 0)
                    @foreach ($services as $service )
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="<?php echo $service->icon?> fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">{{ $service->title }}</h4>
                            <p class="text-muted">{{ $service->description }}</p>
                        </div>
                    @endforeach
                        
                    @endif
                    
                    
                    
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-- I change portfolio with my work-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">My Work</h2>
                    <h3 class="section-subheading text-muted">Here is my Project.</h3>
                </div>
                <div class="row">
                    @if (count($portfolios)>0)
                    @foreach ($portfolios as $portfolio )

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $portfolio->id ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url($portfolio->small_image) }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $portfolio->client }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $portfolio->category }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        
                    @endif
                    
                </div>
            </div>
        </section>
        <!-- About--About Section Change with Education-->
        <section class="page-section" id="about">
            <div class="container">

                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Education</h2>
                    <h3 class="section-subheading text-muted">My Educational Qualifications</h3>
                </div>
        <?php
        foreach($abouts as $key=> $about){
          if($key%2 == 0){
            ?>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url($about->image) }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>{{ $about->title1 }}</h4>
                            <h4 class="subheading">{{ $about->title2 }}</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $about->description }}</p></div>
                    </div>
                </li>
            </ul>

            <?php
          }else {
            ?>
            <ul class="timeline">
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url($about->image) }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>{{ $about->title1 }}</h4>
                            <h4 class="subheading">{{ $about->title2 }}</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $about->description }}</p></div>
                    </div>
                </li>


                </ul>
            
        
        <?php
          }
          ?>
            
            <?php
          }
          ?>
          
            
                {{-- @if (count($abouts)>0)
                    @foreach ($abouts as $about)
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url($about->image) }}" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{ $about->title1 }}</h4>
                                    <h4 class="subheading">{{ $about->title2 }}</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">{{ $about->description }}</p></div>
                            </div>
                        </li> --}}
                        
                        {{-- <li class="timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url($about->image) }}" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{ $about->title1 }}</h4>
                                    <h4 class="subheading">{{ $about->title2 }}</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">{{ $about->description }}</p></div>
                            </div>
                        </li> --}}
                        
                    {{-- </ul>
                        
                    @endforeach
                    
                @endif --}}
                
            </div>
        </section>
        <!-- Team-->
        
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.microsoft.com/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.google.com/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.facebook.com/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.ibm.com/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Me</h2>
                    <h3 class="section-subheading text-muted">Feel free to send a message</h3>
                </div>
                <form action="{{ route('admin.contact.store') }}" method="POST">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <!-- Name input-->
                                <input class="form-control" name="name" id="name" type="text" placeholder="Write Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group mb-2">
                                <!-- Email address input-->
                                <input class="form-control" name="email" id="email" type="email" placeholder="Write Your Email *" data-sb-validations="required,email" />
                                {{-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> --}}
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="number" id="phone" type="tel" placeholder="Write Your Phone Number *" data-sb-validations="required" />
                                {{-- <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Write Your Message *" data-sb-validations="required"></textarea>
                                {{-- <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> --}}
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    {{-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> --}}
                    <!-- Submit Button-->
                    <div class="text-center">@include('alert.messages')
                        <button class="btn btn-primary btn-xl text-uppercase" name="submit"  type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        {{-- <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section> --}}
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/najmul.sarkar.501/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/najmul944/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->

        @if (count($portfolios)>0)
                    @foreach ($portfolios as $portfolio )

                    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $portfolio->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Project details-->
                                                <h2 class="text-uppercase">{{ $portfolio->title }}</h2>
                                                <p class="item-intro text-muted">{{ $portfolio->sub_title }}</p>
                                                <img class="img-fluid d-block mx-auto" src="{{ url($portfolio->big_image) }}" alt="..." />
                                                <p>{{ $portfolio->description }}</p>
                                                <ul class="list-inline">
                                                    <li>
                                                        <strong>Date:</strong> {{ $portfolio->created_at->toDateString() }}
                                                    </li>
                                                    <li>
                                                        <strong>Client:</strong>
                                                        {{ $portfolio->client }}
                                                    </li>
                                                    <li>
                                                        <strong>Category:</strong>
                                                        {{ $portfolio->category }}
                                                    </li>
                                                </ul>
                                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                    <i class="fas fa-xmark me-1"></i>
                                                    Close Project
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    @endif
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
