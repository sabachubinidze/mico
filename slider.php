<?php
function generateSliderSection(): void {
    // Define carousel items
    $carouselItems = array(
        array(
            'heading' => 'Mico',
            'subheading' => 'Hospital',
            'text' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
            'image' => 'images/slider-img.jpg'
        ),
        array(
            'heading' => 'Mico',
            'subheading' => 'Hospital',
            'text' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
            'image' => 'images/slider-img.jpg'
        ),
        array(
            'heading' => 'Mico',
            'subheading' => 'Hospital',
            'text' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
            'image' => 'images/slider-img.jpg'
        )
    );

    // Output the slider section
    echo '<section class="slider_section ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">';
    
    // Loop through carousel items
    foreach ($carouselItems as $key => $item) {
        echo '<div class="carousel-item ' . ($key === 0 ? 'active' : '') . '">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      ' . $item['heading'] . ' <br>
                      <span>
                        ' . $item['subheading'] . '
                      </span>
                    </h1>
                    <p>
                      ' . $item['text'] . '
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="' . $item['image'] . '" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>';
    }
    
    echo '</div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>';
}



?>
