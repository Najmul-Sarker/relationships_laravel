<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "{{ asset('ui/frontend/css/main.css') }}">
    
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href=""> -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
/>
          <!-- Google Fonts -->
      <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
       rel="stylesheet"
/>
   <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet"
   />
</head>
<body>
    
    <!-- navbar -->
    <x-frontend.layouts.partials.topbar/>
    <!-- end of navbar -->
    {{ $slot }}
    <!-- header -->
    
    <!-- end of header -->

    <!-- collection -->
    
    <!-- end of collection -->

    <!-- special products -->
    
    <!-- end of special products -->

    <!-- blogs -->
    <section id = "offers" class = "py-5">
        <div class = "container">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <span class = "text-white">Discount Up To 30%</span>
                    <h2 class = "mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    <a href = "#" class = "btn">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->
    <section>
        <div>
            <h1></h1>
        </div>
    </section>

    <!-- blogs -->
    <!-- <section>
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4" style="color: darkslategrey; ">Customer Review</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              Here are some reviews of our regular and happy customer!!!!!!
            </p>
          </div>
        </div>
      
        <div class="row text-center">
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Samantha</h5>
            <h6 class="text-primary mb-3">Graphics Designer</h6>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>As I am a regular customer of this shop, I just love their unique collection. And also I can say that it's my passion to collect different designer watch. And I loved to buy watch from this shop......
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Lucy</h5>
            <h6 class="text-primary mb-3">Web Designer</h6>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>As I am a regular customer of this shop, I just love their unique collection. And also I can say that it's my passion to collect different designer watch. And I loved to buy watch from this shop......
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3" style="color: darkslategray;">Smith</h5>
            <h6 class="text-primary mb-3">Software Engineer</h6>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>As I am a regular customer of this shop, I just love their unique collection. And also I can say that it's my passion to collect different designer watch. And I loved to buy watch from this shop......
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
        </div>
      </section> -->

    <!-- about us -->
    <!-- <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class = "lead text-muted">Time Travel watches are crafted from the finest raw materials and assembled with scrupulous attention  </p>
                    <p>Explore the Time Travel collection of prestigious, high-precision timepieces. Time Travel offers a wide assortment of Classic and Professional watch models to suit any wrist. Discover the broad selection of Time Travel watches to find a perfect combination of style and functionality..</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "{{ asset('ui/frontend/imagess/wa4.jpg') }}" height="260px" width="430px" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section> -->
    <!-- end of about us -->

    <!-- popular -->
    <section id = "popular" class = "py-5">
        <div class = "container">
            <div class = "title text-center pt-3 pb-5">
                <h2 class = "position-relative d-inline-block ms-4">Most Selling Products Of This Year</h2>
            </div>

            <div class = "row">
                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Top Rated Watch</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i8.jpg') }}"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>3500 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i1.jpg') }}"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>4500 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i9.jpg') }}" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>4000 Tk</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Best Selling Watch</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i11.jpg') }}" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>3600 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i16.jpeg') }}" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2900 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i18.jpg') }}"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>3500 Tk</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">On Sale Watch</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i15.jpg') }}" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2600 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i17.jpg') }}" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2800 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "{{ asset('ui/frontend/imagess/i23.jpg') }}" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2500 Tk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of popular -->

    <!-- newsletter -->
    <x-frontend.layouts.partials.elements.newsletter/>
    <!-- end of newsletter -->

    <!-- footer -->
    <x-frontend.layouts.partials.footer/>
    <!-- end of footer -->




    <!-- jquery -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src = "{{ asset('ui/frontend/js/jquery-3.6.0.js') }}"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>
    <!-- custom js -->
    <script src = "{{ asset('ui/frontend/js/script.js') }}"></script>
</body>
</html>