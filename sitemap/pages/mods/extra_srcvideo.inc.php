<?php

$site_url = $grab_parameters['xs_initurl'];

if(!function_exists('xml_extra_video_step1'))
{
function xml_extra_video_step1(&$ent, $cn, &$imlist)
{
    preg_match_all('#(<embed src="(video/[^"]*\.swf)")#is',
      $cn, $aima, PREG_SET_ORDER);
    foreach($aima as $im)
    {
      if(!$imlist[$im[2]]++)
      $ent['v'][] = array($ent['link'].'srcvideo',$im[2]);
    }
}

function xml_extra_video_step2(&$varr, $params)
{
  global $site_url;

    if(preg_match('#srcvideo#',$varr['playerloc']))
    {
      $varr['contentloc'] = preg_replace('#/[^/]+$#', '/', $varr['playerloc']) . $varr['vid'];
      $varr['playerloc'] = '';
  }
}


}