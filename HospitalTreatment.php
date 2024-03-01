<?php
function printThreatment() : void {
    $threatments = [
        [
            'icon'=>'images/t1.png',
            'title'=>'Nephrologist Care',
            'subtitle'=>'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link'=>'Read More',
        ],
        [
            'icon'=>'images/t2.png',
            'title'=>'Eye Care',
            'subtitle'=>'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link'=>'Read More', 
        ],
        [
            'icon'=>'images/t3.png',
            'title'=>'Pediatrician Clinic',
            'subtitle'=>'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link'=>'Read More',
        ],
        [
            'icon'=>'images/t4.png',
            'title'=>'Parental Care',
            'subtitle'=>'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link'=>'Read More',
        ],
    ];
    foreach($threatments as $threatment){
        echo '<div class="col-md-6 col-lg-3">
                <div class="box ">
                  <div class="img-box">
                    <img src="'.$threatment['icon'].'" alt="">
                      </div>
                        <div class="detail-box">
                          <h4>'.$threatment['title'].'</h4>
                          <p>'.$threatment['subtitle'].'</p>
                          <a href="">'.$threatment['link'].'</a>
                        </div>
                      </div>
                </div>
              ';
      }
}