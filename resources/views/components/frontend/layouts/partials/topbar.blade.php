<nav class = "navbar navbar-expand-lg navbar-light bg-light py-4 fixed-top">
  <div class = "container">
      <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "{{ route('frontend.index') }}">
          <img src = "{{ asset('ui/frontend/imagess/logoo.png') }}" alt = "site icon">
          <span class = "text-uppercase fw-lighter ms-2">Time Travel</span>
      </a>

      <div class = "order-lg-2 nav-btns">
          <button type = "button" class = "btn position-relative">
              <i class = "fa fa-shopping-cart"></i>
              <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
          </button>
          <button type = "button" class = "btn position-relative">
              <i class = "fa fa-heart"></i>
              <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
          </button>
          <button type = "button" class = "btn position-relative">
              <i class = "fa fa-search"></i>
          </button>
      </div>

      <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
          <span class = "navbar-toggler-icon"></span>
      </button>

      <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
          
          <ul class = "navbar-nav mx-auto text-center">
              <li class = "nav-item px-2 py-2">
                  <a class = "nav-link text-uppercase text-dark" href = "{{ route('frontend.index') }}">home</a>
              </li>
              <li class = "nav-item px-2 py-2">
                  <!-- <a class = "nav-link text-uppercase text-dark" href = "#collection">Category</a> -->
                  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
                      <!-- <div class="container-fluid"> -->
                        <ul class="navbar-nav" style="font-size: 1rem; color: black;">
                          <!-- Dropdown -->
                          <li class="nav-item dropdown">
                            <a
                              class="nav-link dropdown-toggle"
                              href="#"
                              id="navbarDropdownMenuLink"
                              role="button"
                              data-mdb-toggle="dropdown"
                              aria-expanded="false"
                            >
                              CATEGORY
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li>
                                <a class="dropdown-item" href="category.html">Watch Collection for Male</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="category1.html">Watch Collection for Female</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="category2.html">Watch Collection for Children</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      <!-- </div> -->
                    <!-- </nav> -->
              </li>
              <li class = "nav-item px-2 py-2">
                  <a class = "nav-link text-uppercase text-dark" href = "#special">specials</a>
              </li>
              <!-- <li class = "nav-item px-2 py-2">
                  <a class = "nav-link text-uppercase text-dark" href = "#blogs">blogs</a>
              </li> -->
              <li class = "nav-item px-2 py-2">
                  <a class = "nav-link text-uppercase text-dark" href = "about.html">about us</a>
              </li>
              <li class = "nav-item px-2 py-2 border-0">
                  <a class = "nav-link text-uppercase text-dark" href = "contact.html">Contact</a>
              </li>
          </ul>
      </div>
  </div>
</nav>