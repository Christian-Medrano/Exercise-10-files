<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makeFruit($type) {
  if ($type == 'lemon') {
    $numRating = 5;
    $valid = true;
    $starRating = '&#9733; &#9733; &#9733; &#9733; &#9733; &#9734; &#9734; &#9734; &#9734; &#9734;';
  } else if ($type == 'apple') {
    $numRating = 8;
    $valid = true;
    $description = '&#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9734; &#9734;';
  } else if ($type == 'banana') {
    $numRating = 7;
    $valid = true;
    $starRating = '&#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9734; &#9734; &#9734;';
  } else if ($type == 'orange') {
    $numRating = 9;
    $valid = true;
    $starRating = '&#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9734;';
  } else if ($type == 'pear') {
    $numRating = 4;
    $valid = true;
    $starRating = '&#9733; &#9733; &#9733; &#9733; &#9734; &#9734; &#9734; &#9734; &#9734; &#9734;';
  } else if ($type == 'cherry') {
    $numRating = 6;
    $valid = true;
    $starRating = '&#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9734; &#9734; &#9734; &#9734;';
  } else if ($type == 'strawberry') {
    $numRating = 6;
    $valid = true;
    $starRating = '&#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9734; &#9734; &#9734; &#9734;';
  } else if ($type == 'pomegranate') {
    $numRating = 9;
    $valid = true;
    $starRating = '&#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9734;';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p>Deliciousness Rating:</p>
          <p class="card-text">'.$starRating.' '.$numRating.'/10</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>Sorry, hat fruit is currently not in our database. Please try another.</p>
      </div>
    ');
  }
}
