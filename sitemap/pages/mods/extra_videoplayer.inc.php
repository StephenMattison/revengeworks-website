<?php

$site_url = $grab_parameters['xs_initurl'];

if(!function_exists('xml_extra_video_step1'))
{
function xml_extra_video_step1(&$ent, $cn, &$imlist)
{
    preg_match_all('#(settingsFile: ")(.*?)"[^>]*videoPlayer.swf#is',
      $cn, $aima, PREG_SET_ORDER);

    foreach($aima as $im)
    {
      if(!$imlist[$im[2]]++)
      $ent['v'][] = array($ent['link'].$im[1],$im[2]);
    }
}

function xml_extra_video_step2(&$varr, $params)
{
  global $site_url, $lfetch;
  $purl = parse_url($site_url);

  if(!$lfetch)
  $lfetch = new HTTPFetch();


    if(preg_match('#settingsFile#',$varr['playerloc']))
    {
      $cl = preg_replace('#/[^/]+$#', '/', $varr['playerloc']) . $varr['vid'];
      $fc = $lfetch->fetch($cl,0,0,0,'',array('anytype'=>true));
      $fc = $fc['content'];

      $cl = 'http://'.$purl['host'].'/flash/modules/video/files/';
      if(preg_match('#<videoPath value="(.*?)"#', $fc, $fm));
        $varr['contentloc'] = str_replace('&','&amp;',$cl.$fm[1]);
      if(preg_match('#<thumbImage value="(.*?)"#i', $fc, $fm));
        $varr['thumb'] = $cl.$fm[1];
      if(preg_match('#<totalTime value="(.*?)"#i', $fc, $fm));
        $varr['dur'] = intval($fm[1]);
    $varr['playerloc'] = '';
  }
}


}
