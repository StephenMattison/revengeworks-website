<?php

$site_url = $grab_parameters['xs_initurl'];

if(!function_exists('xml_extra_video_step1'))
{
function xml_extra_video_step1(&$ent, $cn, &$imlist)
{
    preg_match_all('#var flashvars=\{url:"(.*?XML\.php)[^>]*?id:"(\d+)#is',
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
  $purl = parse_url($site_url);

  if(!$lfetch)
  $lfetch = new HTTPFetch();


    if(preg_match('#XML\.php#',$varr['playerloc']))
    {
      $cl = $varr['playerloc'] . '?module=video&action=getFile&id='.$varr['vid'];
      $fc = $lfetch->fetch($cl,0,0,0,'',array('anytype'=>true));
      $fc = $fc['content'];

      $cl = 'http://'.$purl['host'].'/flash/modules/video/files/';
      if(preg_match('#file="(.*?)"#', $fc, $fm));
        $varr['contentloc'] = str_replace('&','&amp;',$cl.$fm[1]);
      if(preg_match('#image="(.*?)"#i', $fc, $fm));
        $varr['thumb'] = $cl.$fm[1];
      if(preg_match('#time="(.*?)"#i', $fc, $fm));
        $varr['dur'] = intval($fm[1]/1000);
    $varr['playerloc'] = '';
  }
}


}
