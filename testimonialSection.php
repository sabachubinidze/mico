<?php
function printTestimonial() : void {
    $testimonials = [
        [
            'ClientName' => 'Morijorch',
            'title' => 'Default model text',
            'subtitle' => 'Editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various',     
        ],
        [
            'ClientName' => 'Rochak',
            'title' => 'Default model text',
            'subtitle' => 'Various editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.',
        ],
        [
            'ClientName' => 'Brad Johns',
            'title' => 'Default model text',
            'subtitle' => 'Editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various',
        ],
    ]; 

    $active = true; 

    foreach ($testimonials as $testimonial) {
        $activeClass = $active ? 'active' : ''; 
        echo '<div class="carousel-item ' . $activeClass . '">
                <div class="box">
                    <div class="client_info">
                        <div class="client_name">
                            <h5>' . $testimonial['ClientName'] . '</h5>
                            <h6>' . $testimonial['title'] . '</h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>' . $testimonial['subtitle'] . '</p>
                </div>
              </div>';

        $active = false; 
    }
}
