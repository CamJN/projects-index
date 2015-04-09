<?php
defined( 'runtime' ) or die;

$hosts_file= "/etc/hosts";
$dev_tld = '.dev';
$sites_dir = '/Users/camdennarzt/Sites/';
$title = 'CJN';
$name = 'Camden Narzt';

$prod_domains = array(
    array('title' => "Metabolistics Inc.",
          'link'=>"https://www.metabolistics.com",
          'img'=>"https://metabolistics.dev/metabolistics.dev.png"
    ),
    array('title' => "King Of Strain",
          'link'=>"http://kingofstrain.com",
          'img'=>"http://kingofstrain.dev/kingofstrain.dev.png"
    ),
    array('title' => "MoteScan for WiTAP™",
          'link'=>"http://mote.scanimetrics.com",
          'img'=>"http://mote.scanimetrics.dev/mote.scanimetrics.dev.png"
    ),
    array('title' => "NMR Data Access Portal",
          'link'=>"https://nmr.metabolistics.com",
          'img'=>"http://nmr.metabolistics.dev/nmr.metabolistics.dev.png",
    ),
    array('title' => "Silver's Shadows Splash Page",
          'link'=>"http://splash.silversshadows.com",
          'img'=>"http://splash.silversshadows.dev/splash.silversshadows.dev.png"
    ),
    array('title' => "Are We Small Yet",
          'link'=>"http://camjn.github.io/arewesmallyet",
          'img'=>"http://arewesmallyet.dev/arewesmallyet.dev.png"
    ),
    array('title' => "Metabolistics Crowdfunding",
          'link'=>"http://crowdfunding.metabolistics.com",
          'img'=>"http://crowdfunding.metabolistics.dev/crowdfunding.metabolistics.dev.png"
    )
);

$contacts = array(
    array('title'=>"Twitter",'link'=>"https://twitter.com/CamJN"),
    array('title'=>"Email",'link'=>"mailto:admin@silversshadows.com"),
    array('title'=>"GitHub",'link'=>"https://github.com/CamJN/")
);
