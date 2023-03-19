<section id = "collection" class = "py-5">
    <div class = "container">
        <div class = "title text-center">
            <h2 class = "position-relative d-inline-block">New Collection</h2>
        </div>

        <!-- <div class = "row g-0">
            <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">All</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".best">Best Sellers</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">Featured</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">New Arrival</button>
            </div> -->

            <div class = "collection-list mt-4 row gx-0 gy-3">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend//imagess/w1.jpg') }}" height="300px" width="280px" class = "w-100">
                        {{-- <img src = "{{ asset('ui/frontend/imagess/w1.jpg" height="300px" width="280px" class = "w-100"> --}}
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Realme Smart Watch</p>
                        <span class = "fw-bold">1600 Tk</span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend/imagess/w2.jpg') }}" height="300px" width="280px" class = "w-100">
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Smart Watch</p>
                        <span class = "fw-bold">3400 Tk</span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend/imagess/w3.jpg') }}"height="300px" width="280px" class = "w-100">
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Smart Watch</p>
                        <span class = "fw-bold">2800 Tk</span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend/imagess/w5.webp') }}" height="300px" width="280px" class = "w-100">
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star-half-alt"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Smart Watch</p>
                        <span class = "fw-bold">3500 Tk/span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend/imagess/w4.webp') }}" height="300px" width="280px" class = "w-100">
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Smart Watch</p>
                        <span class = "fw-bold">1400 Tk</span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend/imagess/i17.jpg') }}" height="300px" width="280px"class = "w-100">
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Smart Watch</p>
                        <span class = "fw-bold">1200 Tk</span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend/imagess/w8.webp') }}"height="300px" width="280px" class = "w-100">
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Smart Watch</p>
                        <span class = "fw-bold">2500 Tk</span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class = "collection-img position-relative">
                        <img src = "{{ asset('ui/frontend/imagess/i8.jpg') }}" height="300px" width="280px"class = "w-100">
                        <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star-half-alt"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">Smart Watch</p>
                        <span class = "fw-bold">1500 Tk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>