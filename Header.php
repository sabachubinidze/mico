<?php
function generateHeader(): void {
    // Header top content
    $headerTop = array(
        array('icon' => 'fa fa-phone', 'text' => 'Call : +01 123455678990', 'url' => '#'),
        array('icon' => 'fa fa-envelope', 'text' => 'Email : demo@gmail.com', 'url' => '#'),
        array('icon' => 'fa fa-map-marker', 'text' => 'Location', 'url' => '#')
    );

    // Navigation links
    $navLinks = array(
        array('url' => 'index.html', 'label' => 'Home', 'active' => true),
        array('url' => 'about.html', 'label' => 'About', 'active' => false),
        array('url' => 'treatment.html', 'label' => 'Treatment', 'active' => false),
        array('url' => 'doctor.html', 'label' => 'Doctors', 'active' => false),
        array('url' => 'testimonial.html', 'label' => 'Testimonial', 'active' => false),
        array('url' => 'contact.html', 'label' => 'Contact Us', 'active' => false)
    );

    // Generate header HTML
    echo '<header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">';
    
    // Generate header top content
    foreach ($headerTop as $item) {
        echo '<a href="' . $item['url'] . '">
              <i class="' . $item['icon'] . '" aria-hidden="true"></i>
              <span>' . $item['text'] . '</span>
            </a>';
    }
    
    echo '</div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">';
                
    // Generate navigation links
    foreach ($navLinks as $link) {
        echo '<li class="nav-item ' . ($link['active'] ? 'active' : '') . '">
                    <a class="nav-link" href="' . $link['url'] . '">' . $link['label'] . ' ' . ($link['active'] ? '<span class="sr-only">(current)</span>' : '') . '</a>
                </li>';
    }
    
    echo '</ul>
              </div>
              <div class="quote_btn-container">
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Login</span>
                </a>
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Sign Up</span>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>';
}



?>



