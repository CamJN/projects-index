<?php
defined( 'runtime' ) or die;

function title($d){
    $parts = explode('.',$d);
    array_pop($parts);
    return implode('.',$parts);
}

function elapsed($d,$sites_dir){
    return distance_of_time_in_words(filemtime($sites_dir.title($d)."/."), null, true).' ago';
}

function gh_url($contacts){
    $filtered = array_filter($contacts,function($c){return $c['title'] === 'GitHub'; });
    if(count($filtered) > 0){
        $url = array_pop($filtered)['link'];
    }else{
        $url = 'https://github.com/CamJN/';
    }
    return $url.'projects-index';
}

?>
