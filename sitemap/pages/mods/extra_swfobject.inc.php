<?php

return;
$site_url = $grab_parameters['xs_initurl'];

if(!function_exists('xml_extra_video_step1'))
{
function xml_extra_video_step1(&$ent, $cn, &$imlist)
{
    preg_match_all('#\.addVariable\(\"file\",\"(/content/(\d+)/.+\.flv)#is',
      $cn, $aima, PREG_SET_ORDER);
    foreach($aima as $im)
    {
      if(!$imlist[$im[2]]++)
      $ent['v'][] = array($im[1],$im[2]);
    }
}

function xml_extra_video_step2(&$varr, $params)
{
  global $site_url;

    if(preg_match('#^/content/#',$varr['playerloc']))
    {
      $varr['thumb'] = $site_url . '/content/'.$varr['vid'].'/thumb0.jpg';
      $varr['contentloc'] = $site_url . $varr['playerloc'];
      $varr['playerloc'] = '';
  }
}


}