

<?php 

  function doctors(){
    $doctors = [
      [
          'img' => 'images/team1.jpg',
          'name' => 'Hennry',
          'MBBS' => 'MBBS'
      ],
      [
          'img' => 'images/team2.jpg',
          'name' => 'Hennry',
          'MBBS' => 'MBBS'
      ],
      [
          'img' => 'images/team3.jpg',
          'name' => 'Hennry',
          'MBBS' => 'MBBS'
      ],
    ];

    foreach($doctors as $doctor){
      echo'<div class="item">
        <div class="box">
          <div class="img-box">
            <img src="'. $doctor['img'] .'" alt="">
          </div>
          <div class="detail-box">
            <h5>
              '. $doctor['name'] .'
            </h5>
            <h6>
              '. $doctor['MBBS'] .'
            </h6>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>';
    }
  }

?>