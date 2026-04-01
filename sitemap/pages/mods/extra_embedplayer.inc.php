<?php

$site_url = $grab_parameters['xs_initurl'];

if(!function_exists('xml_extra_video_step1'))
{
function xml_extra_video_step1(&$ent, $cn, &$imlist)
{
    preg_match_all('#(new SWFObject[^>]*?\.addVariable\("config", "([^"]*?)")#is',
      $cn, $aima, PREG_SET_ORDER);
    foreach($aima as $im)
    {
      if(!$imlist[$im[2]]++)
      $ent['v'][] = array($im[1],$im[2]);
    }
}

function xml_extra_video_step2(&$varr, $params)
{
  global $site_url, $lfetch;

  if(!$lfetch)
  $lfetch = new HTTPFetch();


    if(preg_match('#^new SWFObject#',$varr['playerloc']))
    {
      $cl = $varr['vid'];
      $fc = $lfetch->fetch($varr['vid']);
      $fc = $fc['content'];
      if(preg_match('#Name="FLVPath" Value="(.*?)"#', $fc, $fm));
      $varr['contentloc'] = $fm[1];
      if(preg_match('#Name="FirstFrameAs".*?Url="(.*?)"#i', $fc, $fm));
      $varr['thumb'] = $fm[1];
      $varr['playerloc'] = '';
  }
}


}