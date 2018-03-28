<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  </head>

  <body>
    <main>
      <!-- Header -->
    <?php 
      include("header.php"); 
    ?>
      <!-- End Header -->

      <!-- Promo Block -->
      <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <div class="divimage dzsparallaxer--target w-100 g-bg-pos-top-center g-bg-cover g-bg-black-opacity-0_1--after" style="height: 140%; background-image: url(assets/img-temp/1920x1080/img3.jpg);"></div>

        <div class="container g-color-white g-pt-100 g-pb-40">
          <div class="g-mb-50">
            <span class="d-block g-color-white-opacity-0_8 g-font-weight-300 g-font-size-20">Best hand-made</span>
            <h3 class="g-color-white g-font-size-50 g-font-size-90--md g-line-height-1_2 mb-0">Innovative.</h3>
            <p class="g-color-white g-font-weight-600 g-font-size-20 text-uppercase">Trends 2018</p>
          </div>

          <div class="d-flex justify-content-end">
            <ul class="u-list-inline g-bg-gray-dark-v1 g-font-weight-300 g-rounded-50 g-py-5 g-px-20">
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-white g-color-primary--hover" href="index.php">Home</a>
                <i class="g-color-white-opacity-0_5 g-ml-5">/</i>
              </li>
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-white g-color-primary--hover" href="products.php">Products</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Promo Block -->

      <!-- Products -->
      <div class="container">
        <div class="row">
          <!-- Content -->
          <div class="col-md-9 order-md-2">
            <div class="g-pl-15--lg">
              <!-- Filters -->
              <div class="d-flex justify-content-end align-items-center g-brd-bottom g-brd-gray-light-v4 g-pt-40 g-pb-20">
                <!-- Show -->
                <div class="g-mr-60">
                  <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Show:</h2>

                  <!-- Secondary Button -->
                  <div class="d-inline-block btn-group g-line-height-1_2">
                    <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      9
                    </button>
                    <div class="dropdown-menu rounded-0">
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">All</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">5</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">15</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">20</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">25</a>
                    </div>
                  </div>
                  <!-- End Secondary Button -->
                </div>
                <!-- End Show -->

                <!-- Sort By -->
                <div class="g-mr-60">
                  <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Sort by:</h2>

                  <!-- Secondary Button -->
                  <div class="d-inline-block btn-group g-line-height-1_2">
                    <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bestseller
                    </button>
                    <div class="dropdown-menu rounded-0">
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Bestseller</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Trending</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Price low to high</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">price high to low</a>
                    </div>
                  </div>
                  <!-- End Secondary Button -->
                </div>
                <!-- End Sort By -->

                <!-- Sort By -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v3 g-brd-black--hover g-color-gray-dark-v5 g-color-black--hover" href="page-list-filter-left-sidebar-1.html">
                      <i class="icon-list"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-icon-v2 u-icon-size--xs g-brd-primary g-color-primary" href="page-grid-filter-left-sidebar-1.html">
                      <i class="icon-grid"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Sort By -->
              </div>
              <!-- End Filters -->

              <!-- Products -->
              <div class="row g-pt-30 g-mb-50">
                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img1.jpg" alt="Image Description">

                    <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Summer shorts
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                      <span class="d-block g-color-black g-font-size-17">$52.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img2.jpg" alt="Image Description">

                    <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Stylish shirt
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                      <span class="d-block g-color-black g-font-size-17">$99.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img3.jpg" alt="Image Description">

                    <figcaption class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold Out</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Classic jacket
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                      <span class="d-block g-color-black g-font-size-17">$49.99</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img4.jpg" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Wool lined parka
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                      <span class="d-block g-color-black g-font-size-17">$82.37</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img5.jpg" alt="Image Description">

                    <figcaption class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold Out</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Hooded jeans
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                      <span class="d-block g-color-black g-font-size-17">$35.99</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img6.jpg" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Waterproof jacket
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                      <span class="d-block g-color-black g-font-size-17">$105.99</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img7.jpg" alt="Image Description">

                    <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>

                    <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Classic T-shirt
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                      <span class="d-block g-color-black g-font-size-17">$11.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img8.jpg" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Blue skirt
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                      <span class="d-block g-color-black g-font-size-17">$34.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="assets/img-temp/480x700/img9.jpg" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                          Cotton workwear
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                      <span class="d-block g-color-black g-font-size-17">$11.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>
              </div>
              <!-- End Products -->

              <hr class="g-mb-60">

              <!-- Pagination -->
              <nav class="g-mb-100" aria-label="Page Navigation">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item hidden-down">
                    <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded-circle g-pa-5" href="#!">1</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">2</a>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">3</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <span class="g-width-30 g-height-30 g-color-gray-dark-v5 g-font-size-12 rounded-circle g-pa-5">...</span>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">15</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5 g-ml-15" href="#!" aria-label="Next">
                      <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                  <li class="list-inline-item float-right">
                    <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page 1 of 15</span>
                  </li>
                </ul>
              </nav>
              <!-- End Pagination -->
            </div>
          </div>
          <!-- End Content -->

          <!-- Filters -->
          <div class="col-md-3 order-md-1 g-brd-right--lg g-brd-gray-light-v4 g-pt-40">
            <div class="g-pr-15--lg g-pt-60">
              <!-- Categories -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Categories</h3>

                <ul class="list-unstyled">
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Clothes
                      <span class="float-right g-font-size-12">202</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">T-shirts
                      <span class="float-right g-font-size-12">44</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Shirts
                      <span class="float-right g-font-size-12">398</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Shorts
                      <span class="float-right g-font-size-12">56</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Jackets
                      <span class="float-right g-font-size-12">71</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Shoes
                      <span class="float-right g-font-size-12">943</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Glasses
                      <span class="float-right g-font-size-12">109</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Classic
                      <span class="float-right g-font-size-12">88</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Trending
                      <span class="float-right g-font-size-12">111</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Accessories
                      <span class="float-right g-font-size-12">5</span></a>
                  </li>
                </ul>
              </div>
              <!-- End Categories -->

              <hr>

              <!-- Pricing -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Pricing</h3>

                <div class="text-center">
                  <span class="d-block g-color-primary mb-4">$(<span id="rangeSliderAmount3">0</span>)</span>
                  <div id="rangeSlider1" class="u-slider-v1-3"
                       data-result-container="rangeSliderAmount3"
                       data-range="true"
                       data-default="180, 320"
                       data-min="0"
                       data-max="500"></div>
                </div>
              </div>
              <!-- End Pricing -->

              <hr>

              <!-- Brand -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Brand</h3>

                <ul class="list-unstyled">
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Mango <span class="float-right g-font-size-13">24</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Gucci <span class="float-right g-font-size-13">334</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Adidas <span class="float-right g-font-size-13">18</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Nike <span class="float-right g-font-size-13">6</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Puma <span class="float-right g-font-size-13">71</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Zara <span class="float-right g-font-size-13">9</span>
                    </label>
                  </li>
                </ul>
              </div>
              <!-- End Brand -->

              <hr>

              <!-- Size -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Size</h3>

                <ul class="list-unstyled">
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      S <span class="float-right g-font-size-13">24</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      M <span class="float-right g-font-size-13">334</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      L <span class="float-right g-font-size-13">18</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      XL <span class="float-right g-font-size-13">6</span>
                    </label>
                  </li>
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      XXL <span class="float-right g-font-size-13">71</span>
                    </label>
                  </li>
                </ul>
              </div>
              <!-- End Size -->

              <hr>

              <!-- Color -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Color</h3>

                <!-- Checkbox -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mr-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-primary rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                  <li class="list-inline-item g-mx-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-beige rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                  <li class="list-inline-item g-mx-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-black rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                  <li class="list-inline-item g-mx-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-yellow rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                  <li class="list-inline-item g-mx-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-blue rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                  <li class="list-inline-item g-mx-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-purple rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                  <li class="list-inline-item g-mx-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-brown rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                  <li class="list-inline-item g-ml-10">
                    <label class="form-check-inline u-check">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                      <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                        <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-gray-dark-v4 rounded-circle"></i>
                      </span>
                    </label>
                  </li>
                </ul>
                <!-- End Checkbox -->
              </div>
              <!-- End Color -->

              <hr>

              <!-- Rating -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Rating</h3>

                <ul class="js-rating u-rating-v1 g-font-size-20 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i>
                  </li>
                </ul>
              </div>
              <!-- End Rating -->

              <hr>

              <button class="btn btn-block u-btn-black g-font-size-12 text-uppercase g-py-12 g-px-25" type="button">Reset</button>
            </div>
          </div>
          <!-- End Filters -->
        </div>
      </div>
      <!-- End Products -->

      <!-- Call to Action -->
      <div class="g-bg-primary">
        <div class="container g-py-20">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Shipping</span>
                  <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Returns</span>
                  <span class="d-block g-color-white-opacity-0_8">No Questions Asked</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free 24</span>
                  <span class="d-block g-color-white-opacity-0_8">Days Storage</span>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Call to Action -->
    <!-- footer start -->
    <?php 
    include("footer.php");
    ?>
    <!-- End footer -->
  </body>

<!-- Mirrored from htmlstream.com/preview/unify-v2.4/e-commerce/page-grid-filter-left-sidebar-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 07:44:29 GMT -->
</html>
