
<header class="header-area navbar-fixed-top">
   <div class="container custom-header">
      <div class="row">
          <div id="menuzord" class="menuzord">
             <a href="index.php" class="menuzord-brand"><img class="logoStyle" src="images/myLogo.png" alt="">{{company}}</a>
             <div class="header-contact">
                  <ul>
                        <li ng-repeat="n in top_menu">
                                <a href={{n.link}}>{{n.name}}</a>
                        </li>
                  </ul>
             </div>
             <div class="header-search">
                  <ul>
                      <li class="filter-search"><i class="fa fa-search"></i></li>
                      <li class="right_menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                      <li class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                  <div class="add-to-cart-content">
                      <div class="recent-post shop-right-thumb add-cart-thumb">
                          <h3><a href="#">Personal Branding</a></h3>
                          <p> 1 x $ 65.00</p>
                          <img src="images/shop-right-book-1.png" alt="">
                          <span><a href="#"><img src="images/shop-cart-cross.png" alt=""></a></span>
                      </div>
                      <div class="recent-post shop-right-thumb add-cart-thumb">
                          <h3><a href="#">Marketing</a></h3>
                          <p>1 x $ 65.00</p>
                          <img src="images/shop-right-book-1.png" alt="">
                          <span><a href="#"><img src="images/shop-cart-cross.png" alt=""></a></span>
                      </div>
                      <p>Subtotal:<span>$145.00</span></p>
                      <button type="button" class="btn btn-dm">View Cart</button>
                      <button type="button" class="btn btn-dm">Checkout</button>
                  </div>
             </div>
             <ul class="menuzord-menu menuzord-menu-bg">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about.php">ABOUT</a></li>
                  <li><a href="solution-1.html">Products</a>
                      <ul class="dropdown">
                          <li><a href="solution-blocks.html">Analytics</a></li>
                          <li><a href="case-studies.html">Consultancy</a></li>
                          <li><a href="case-study-single.html">Hosting</a></li>
                          <li><a href="solution-2.html">Web App</a></li>
                          <li><a href="solution-1.html">Website</a></li>
                      </ul>
                  </li>
                  <li><a href="plans.html">Our Clients</a></li>
                  <li><a href="blog-standard-right-sidebar.html">BLOG</a>
                      <ul class="dropdown blog-dropdown">
                          <li><a href="blog-2-column.html">Blog Grid</a>
                              <ul class="dropdown">
                                  <li><a href="blog-2-column.html">Blog Grid 2 Column</a></li>
                                  <li><a href="blog-3-column.html">Blog Grid 3 Column</a></li>
                                  <li><a href="blog-4-column.html">Blog Grid 4 Column</a></li>
                                  <li><a href="blog-2-column-left-sidebar.html">Left Sidebar</a></li>
                                  <li><a href="blog-2-column-right-sidebar.html">Right Sidebar</a></li>
                              </ul>
                          </li>
                          <li><a href="blog-standard-right-sidebar.html">Blog Standard</a>
                              <ul class="dropdown">
                                  <li><a href="blog-standard-fullwidth.html">Full Width</a></li>
                                  <li><a href="blog-standard-without-sidebar.html">Without Sidebar</a></li>
                                  <li><a href="blog-standard-right-sidebar.html">Right Sidebar</a></li>
                                  <li><a href="blog-standard-left-sidebar.html">Left Sidebar</a></li>
                              </ul>
                          </li>
                           <li><a href="blog-minimal-2-column-full-width.html">Blog Minimal</a>
                              <ul class="dropdown">
                                  <li><a href="blog-minimal-2-column-full-width.html">Full Width</a></li>
                                  <li><a href="blog-minimal-2-column-right-sidebar.html">Right Sidebar</a></li>
                                  <li><a href="blog-minimal-2-column-left-sidebar.html">Left Sidebar</a></li>
                              </ul>
                          </li>
                          <li><a href="blog-single-post-right-sidebar.html">Single Post</a>
                              <ul class="dropdown">
                                  <li><a href="blog-single-post-full-width.html">Full Width</a></li>
                                  <li><a href="blog-single-post-without-sidebar.html">Without Sidebar</a></li>
                                  <li><a href="blog-single-post-right-sidebar.html">Right Sidebar</a></li>
                                  <li><a href="blog-single-post-left-sidebar.html">Left Sidebar</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>

                  <li><a href="#">Contact</a>
                      <ul class="dropdown">
                          <li><a href="contact.php">Contact Us</a></li>
                          <li><a href="contact.php">Request Quotes</a></li>
                      </ul>
                  </li>
             </ul>
          </div>
      </div>
   </div>
</header>
