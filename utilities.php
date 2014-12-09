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

function domains($hosts_file,$dev_tld){
    if (file_exists($hosts_file)) {
        $filtered = array_filter(file($hosts_file),function($e){ return strpos($e,'::1') !== FALSE; });
        $mDomains = array_map(function($line){return explode(' ',$line);},$filtered);
        $aDomains = array_reduce($mDomains,'array_merge',array());
        $domains = array_filter($aDomains,function($e)use($dev_tld){ return strpos($e,$dev_tld) !== FALSE; });
        array_walk($domains,function(&$d){$d = htmlspecialchars(trim($d));});
        $domains = array_filter($domains,function($e)use($dev_tld){ return strpos($e,$dev_tld) !== FALSE; });
    }else{
        $domains = [];
    }
    return $domains;
}

?>
