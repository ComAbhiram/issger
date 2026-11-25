<?php

// For germany digital marketing

// $dataRegion = 'germany';

// $dataType = 'data-dm';



// For germany wed designing

// $dataRegion = 'germany'; 

// $dataType   = 'data-dm';



if (is_page('digital-marketing')) {

    $dataRegion = 'germany';
    $dataType   = 'data-dm';
} elseif (is_page('e-commerce')) {

    $dataRegion = 'germany';
    $dataType   = 'data-e-commerce';
} else {

    // Landing page: Digital Marketing Düsseldorf (web design data stays in data/germany/data-web)
    $dataRegion = 'germany';
    $dataType   = 'data-dm';
}
