<?php

function getDiscount($price,$discount){

    return ($price - ($price * $discount));
}

function getRate($star){
  

  for( $i = 0; $i < 5; $i++ )
  {
      if( floor( $star )-$i >= 1 )
      { echo '<small class="fa fa-star text-primary mr-1"></small>'; }
      elseif( $star-$i > 0 )
      { echo '<small class="fa fa-star-half-alt text-primary mr-1"></small>'; }
      else
      { echo'<small class="far fa-star text-primary mr-1"></small>'; }
  }

}



?>


