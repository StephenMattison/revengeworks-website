<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$mLXNs15184220PLrJW=511996078;$megZQ95302427NwBJQ=19951507;$xDeqT85744452HhsMC=889824860;$xiuEO96731817monIf=545778802;$uEyxL21138968ASVOG=611756057;$wBOVW71474721jJPjT=941145135;$MCsTv27760459qgzak=380772090;$wxluv31612098djqaQ=640109403;$ZZWQZ61353560jrACJ=751953693;$KAubz80317954gVYhb=226208842;$TdFRj90518282FTKEL=958935437;$GqZwD68500194CCdGD=770926938;$CyshD92618049nzIov=839936156;$blngj11535135lyPrT=651970007;$Opkft19785229cCItn=420802859;$HlWEy25984791MNQke=805549604;$EfXJP70863912IkeYC=398474104;$FxXpr28856533cmRyy=931334738;$jlFUS25641213Vbfco=636235884;$btPlN51769978ZtNml=344482236;$ZojFT18955788dodsO=557383629;$oNtoC61944673cOKSy=802272526;$LYZuZ55200345nVADe=512834323;$fAfpx15792416GovVI=601882809;$iBTNL46800750PkrTN=558102195;$SYgrE47942222uGEFJ=414692452;$dUsbE85715699haNhq=333212341;$SQQzL60339831eAkQf=877583857;$KOzli29258800wFKTZ=324984576;$JFYkp52053665hqWYh=726250232;$bciYK17104886RKQnz=327298202;$dGaVU24829281fomES=365361352;$zSPBt27194503nXGpM=810469911;$nOOoc52699054UDijx=602850128;$Fofym23508288OMZfz=952267169;$cMMrY30788900Qqucd=776660110;$tXOLG91648571kLVfZ=794313375;$bsCSd61721608QfEkh=455543237;$FKXKS25816785LaMGV=560218128;$hVwzb99215504vzkDJ=929371512;$QsOQG57177811vLAVv=508843264;$sniDn75183572XRBph=741857122;$pRHuH86374723eYUiz=490511371;$BUOqu88717934NKPsb=725626318;$KGeCy11825981nHYoz=976068238;$aHvVg97523513Bfuvw=672886024;$fsGCe33486664BgOvy=269809757;$ljRzr83479717Labju=745406964;$MCnXh10686764VNDiU=541484308;$xpbys15971323gYeGe=406884081;?><?php

                                                      include alxOxyN3nuW_GHjHsq . 'class.templates.inc.php';

                                                      echo 'Creating HTML sitemap...<div id="percprog2"></div>';

                                                      flush();

                                                      $eIN7zc62V = $grab_parameters['xs_initurl'];

                                                      if (substr_count($eIN7zc62V, '/') > 2) {

                                                      $eIN7zc62V = substr($eIN7zc62V, 0, strrpos($eIN7zc62V, '/'));

                                                      }

                                                      function iZ_KuFSWxaPj6($XV0gvoTc_07MC9_O, $i)

                                                      {

                                                      global $_tm;

                                                      aJyB12jL0y();

                                                      vkLR44N3EhIoTE("($XV0gvoTc_07MC9_O / $i / " . (time() - $_tm) . " / " .

                                                      (function_exists('memory_get_usage') ? number_format(memory_get_usage() / 1024 / 1024) : '') . "M)  ");

                                                      $_tm = time();

                                                      }

                                                      $mlCeNCYoSuff1a       = '';

                                                      $v9ROH84TVrNx2mWR = array();

                                                      $xNoUjQ4yUyq      = 0;

                                                      $VOCgq0oNtU8IInSRb     = ceil(count($SnzUa6LrL0UA7u_VDC->urls_completed) / $grab_parameters['xs_htmlpart']);

                                                      $peItzAaNhWFGMJ = intval($nBS0XMm4Vt6syA['istart']);

                                                      if ($nBS0XMm4Vt6syA) {

                                                      $xNoUjQ4yUyq = $nBS0XMm4Vt6syA['curpage'];

                                                      }

                                                      $SZCUzp4_uJaQ_SkZLx    = $fVOPe4lHLrPzlNX    = array();

                                                      $poubGwnldECFE = '';

                                                      function qpQYmaq0OSB2zbx($ENMDz9_rMtzNsiQKr)

                                                      {

                                                      global $SnzUa6LrL0UA7u_VDC;

                                                      return YtUbUOw8VmSbl0RZ($SnzUa6LrL0UA7u_VDC->urls_completed[$ENMDz9_rMtzNsiQKr]);

                                                      }

                                                      function Nk_kF8AQ2IP1I()

                                                      {

                                                      global $SZCUzp4_uJaQ_SkZLx, $eIN7zc62V, $SnzUa6LrL0UA7u_VDC, $grab_parameters, $poubGwnldECFE;

                                                      for ($i = 0; $i < count($SnzUa6LrL0UA7u_VDC->urls_completed); $i++) {

                                                      if ($i % 500 == 0) {

                                                      iZ_KuFSWxaPj6('oSZafzF_iTEM', $i);

                                                      }

                                                      $ur = qpQYmaq0OSB2zbx($i);

                                                      if (!$poubGwnldECFE && $ur['t']) {

                                                      $poubGwnldECFE = $ur['t'];

                                                      }

                                                      $TqccFFRZ1lDysp = str_replace($eIN7zc62V, '', $ur['link']);

                                                      $TqccFFRZ1lDysp = preg_replace('#\?.*#', '', $TqccFFRZ1lDysp);

                                                      $TqccFFRZ1lDysp = preg_replace('#^.*\://#', '', $TqccFFRZ1lDysp);

                                                      $X30kP59TrhH  = &$SZCUzp4_uJaQ_SkZLx;

                                                      if ($grab_parameters['xs_htmlstruct'] == 2) {

                                                      $ns  = 'Sitemap';

                                                      $X30kP59TrhH = &$X30kP59TrhH['elem'][$ns];

                                                      $X30kP59TrhH['tcnt']++;

                                                      } else

                                                      if ($grab_parameters['xs_htmlstruct'] == 1) {

                                                      $ns  = substr($TqccFFRZ1lDysp, 0, strrpos($TqccFFRZ1lDysp, '/'));

                                                      $X30kP59TrhH = &$X30kP59TrhH['elem'][$ns];

                                                      $X30kP59TrhH['tcnt']++;

                                                      } else {

                                                      $Q403eM6N33nZrhE2RG = 0;

                                                      while (($ps = strpos($TqccFFRZ1lDysp, '/')) !== false) {

                                                      $ns  = substr($TqccFFRZ1lDysp, 0, $ps + 1);

                                                      if($Q403eM6N33nZrhE2RG++>0)

                                                      $X30kP59TrhH = &$X30kP59TrhH['elem'][$ns];

                                                      $X30kP59TrhH['tcnt']++;

                                                      $TqccFFRZ1lDysp = substr($TqccFFRZ1lDysp, $ps + 1);

                                                      }

                                                      }

                                                      $X30kP59TrhH['cnt']++;

                                                      $X30kP59TrhH['pages'][] = $i;

                                                      }

                                                      }

                                                      function VbU_AymiFYhlBwLtN($_a, $_b)

                                                      {

                                                      global $grab_parameters, $gTDgyOb8fzjfc, $_tm;

                                                      $a = qpQYmaq0OSB2zbx($_a); if(!$a)$a = $_a;

                                                      $b = qpQYmaq0OSB2zbx($_b); if(!$b)$b=  $_b;

                                                      if (($GLOBALS['_iter']++ % 100) == 0) {

                                                      iZ_KuFSWxaPj6('sort', $GLOBALS['_iter']);

                                                      }

                                                      $at = is_array($a) ? ($a['t'] ? $a['t'] : $a['link']) : $a;

                                                      $bt = is_array($b) ? ($b['t'] ? $b['t'] : $b['link']) : $b;

                                                      if ($grab_parameters['xs_htmlsort'] == 3) {

                                                      if (!$gTDgyOb8fzjfc) {

                                                      $gTDgyOb8fzjfc = rand(1E10, 1E12);

                                                      }

                                                      $at = md5($at . $gTDgyOb8fzjfc);

                                                      $bt = md5($bt . $gTDgyOb8fzjfc);

                                                      }

                                                      if ($at == $bt) {

                                                      return 0;

                                                      }

                                                      $rs = ($at < $bt) ? -1 : 1;

                                                      if ($grab_parameters['xs_htmlsort'] == 2) {

                                                      $rs = -$rs;

                                                      }

                                                      return $rs;

                                                      }

                                                      function zdDSJ5JCic($Z8F0gPCCw_jy){

                                                      global $SnzUa6LrL0UA7u_VDC, $grab_parameters;

                                                      $Z8F0gPCCw_jy = str_replace(

                                                      array('&amp;amp;', "'", '"', '>', '<'),

                                                      array('&amp;', "&apos;", '&quot;', '&gt;', '&lt;'),

                                                      $Z8F0gPCCw_jy);


        if( $grab_parameters['xs_title_charset_convert']
          && $SnzUa6LrL0UA7u_VDC->runstate['charset']
          && function_exists('iconv')
        )
        {
          if($l2 = iconv($SnzUa6LrL0UA7u_VDC->runstate['charset'], 'UTF-8', $Z8F0gPCCw_jy))
            $Z8F0gPCCw_jy = $l2;
        }else {
                                                      if(function_exists('utf8_encode'))

                                                      if(

                                                      ($SnzUa6LrL0UA7u_VDC->runstate['charset'] &&

                                                      (strtolower($SnzUa6LrL0UA7u_VDC->runstate['charset'])!='utf-8')

                                                      )

                                                      || $grab_parameters['xs_html_utfencode'])

                                                      {

                                                      $Z8F0gPCCw_jy = utf8_encode($Z8F0gPCCw_jy);

                                                      }
}
                                                      return $Z8F0gPCCw_jy;

                                                      }

                                                      function yONVjixYbA0iYPi($HX4qlbv3DBQ1T9fi, $TtXnFxQfD = 0, &$pqiEDXINkR9z0azG, $umvojjzz25etIQ = '/')

                                                      {

                                                      global

                                                      $zvVLZpqqs,

                                                      $TGfWBJPJNuiNcTCiT, $grab_parameters, $mlCeNCYoSuff1a, $v9ROH84TVrNx2mWR, $xNoUjQ4yUyq, $SnzUa6LrL0UA7u_VDC, $peItzAaNhWFGMJ, $kbWu7AU9u9FBuM_, $_tm;

                                                      $DfevbU6m2h3   = '';

                                                      $gOQtyobfSnPZE = $HX4qlbv3DBQ1T9fi['cnt'];

                                                      if($dsG2SC0_asoIWLmntU = PbuuB9uNZTP7yw('xs_htmlsm_titlemod')){

                                                      $me = explode(' ', $dsG2SC0_asoIWLmntU, 2);

                                                      $NjEFfROP6SU2 = array('#'.$me[0].'#', $me[1]);

                                                      }

                                                      $pqiEDXINkR9z0azG = array(

                                                      'folder' => $umvojjzz25etIQ,


                                                      'cnttxt' => ($gOQtyobfSnPZE ? (number_format($gOQtyobfSnPZE, 0) . (($gOQtyobfSnPZE > 1) ? ' pages' : ' page')) : ''),

                                                      'level'  => $TtXnFxQfD+1

                                                      );

                                                      $isSMcBZ6nE   = array();

                                                      if (is_array($HX4qlbv3DBQ1T9fi['pages'])) {

                                                      if ($grab_parameters['xs_htmlsort']) {

                                                      vkLR44N3EhIoTE("sorting pages  ($umvojjzz25etIQ)..");

                                                      @usort($HX4qlbv3DBQ1T9fi['pages'], 'VbU_AymiFYhlBwLtN');

                                                      }

                                                      $pi = 0;

                                                      foreach ($HX4qlbv3DBQ1T9fi['pages'] as $_pg) {

                                                      $pi++;

                                                      if (($GLOBALS['_iter']++ % 1000) == 0) {

                                                      iZ_KuFSWxaPj6('j9pL3DnoLq', $GLOBALS['_iter']);

                                                      $SnzUa6LrL0UA7u_VDC->MYQUhltsJ0fFEqA(

                                                      array(

                                                      'smcreate' => array(

                                                      'html', $GLOBALS['_iter'], count($SnzUa6LrL0UA7u_VDC->urls_completed))

                                                      ));

                                                      }

                                                      $zvVLZpqqs++;

                                                      if ($zvVLZpqqs <= $peItzAaNhWFGMJ) {

                                                      continue;

                                                      }

                                                      $pg = qpQYmaq0OSB2zbx($_pg);

                                                      $t     = zdDSJ5JCic($pg['t'] ? $pg['t'] : basename($pg['link']));

                                                      if($NjEFfROP6SU2 ){

                                                      $t = preg_replace($NjEFfROP6SU2[0], $NjEFfROP6SU2[1], $t);

                                                      }

                                                      $isSMcBZ6nE[] = array

                                                      (

                                                      'link'        => $pg['link'],

                                                      'title'       => $t,

                                                      'desc'        => zdDSJ5JCic($pg['d']),

                                                      'title_clean' => $t,


                                                      );

                                                      if ($zvVLZpqqs % 1000 == 0) {

                                                      vSIcMQGl11KZeFDquy(array(

                                                      'cmd'  => 'info',

                                                      'id'   => 'percprog2',

                                                      'text' => number_format($zvVLZpqqs * 100 / count($SnzUa6LrL0UA7u_VDC->urls_completed), 0) . '%',

                                                      ));

                                                      }

                                                      $IAoOzRynF = (($zvVLZpqqs % $grab_parameters['xs_htmlpart']) == 0);

                                                      if ($IAoOzRynF

                                                      ||

                                                      ($pi == count($HX4qlbv3DBQ1T9fi['pages']))

                                                      ) {

                                                      $pqiEDXINkR9z0azG['pages']  = $isSMcBZ6nE;

                                                      if ($IAoOzRynF) {


                                                      $isSMcBZ6nE  = array();

                                                      vLg7IUXjE2v95Ixou();

                                                      $xNoUjQ4yUyq++;

                                                      MaCE8VvWEtAgu1aWX7($kbWu7AU9u9FBuM_, nsFT3BmxV1(array('istart' => $zvVLZpqqs, 'curpage' => $xNoUjQ4yUyq)));

                                                      }

                                                      }

                                                      } // end foreach pages

                                                      } // end if(is_array($HX4qlbv3DBQ1T9fi['pages']))

                                                      if ($HX4qlbv3DBQ1T9fi['elem']) {

                                                      if ($grab_parameters['xs_htmlsort']) {

                                                      vkLR44N3EhIoTE("sorting folders ($umvojjzz25etIQ)..");

                                                      @uksort($HX4qlbv3DBQ1T9fi['elem'], 'VbU_AymiFYhlBwLtN');

                                                      }

                                                      foreach ($HX4qlbv3DBQ1T9fi['elem'] as $yoPIuac0v => $ys9p061REpTh5) {

                                                      $umvojjzz25etIQ = trim(urldecode($yoPIuac0v));

                                                      yONVjixYbA0iYPi($ys9p061REpTh5, $TtXnFxQfD + 1, $pqiEDXINkR9z0azG['elem'][$umvojjzz25etIQ], $umvojjzz25etIQ);

                                                      }

                                                      }

                                                      }

                                                      $zvVLZpqqs = 0;

                                                      igcCTYjHaa5WY('html_addloc');

                                                      vkLR44N3EhIoTE("\nStarting adding locations\n");

                                                      Nk_kF8AQ2IP1I();

                                                      igcCTYjHaa5WY('html_addloc', true);


                                                      $DBTxi_opYTLWPP1DBph      = $grab_parameters['xs_htmlname'];

                                                      for($i=1;file_exists($sf=$DfvZiqx8_2.JtNsjpsV1n($i,$DBTxi_opYTLWPP1DBph,true).$hNfgpQEOfpU9IQEr5zn);$i++)

                                                      rpQrAJcTTdcnSJ9($sf);

                                                      for($i=1;file_exists($sf=$DfvZiqx8_2.JtNsjpsV1n($i,$DBTxi_opYTLWPP1DBph,true).'.gz');$i++)

                                                      rpQrAJcTTdcnSJ9($sf);

                                                      igcCTYjHaa5WY('yONVjixYbA0iYPi');

                                                      vkLR44N3EhIoTE("\nStarting compiling sitemap files\n");

                                                      yONVjixYbA0iYPi($SZCUzp4_uJaQ_SkZLx, 0, $v9ROH84TVrNx2mWR[0], '/');

                                                      vLg7IUXjE2v95Ixou(); // last

                                                      igcCTYjHaa5WY('yONVjixYbA0iYPi', true);

                                                      vkLR44N3EhIoTE(lPqrwG_8rE()."\n");


                                                      vSIcMQGl11KZeFDquy(array('cmd' => 'info', 'id' => 'percprog2', ''));

                                                      function BoOUhVmupoIj7lM(&$hv)

                                                      {

                                                      $aBE9n6jyLlWeU = true;

                                                      if($hv)

                                                      foreach ($hv as $k => $O9KA_RO_nUc6TtsO471) {

                                                      $zgA96uEoEH = BoOUhVmupoIj7lM($hv[$k]['elem']);

                                                      if($O9KA_RO_nUc6TtsO471['pages'] || !$zgA96uEoEH){


                                                      return false;

                                                      }

                                                      else

                                                      unset($hv[$k]);

                                                      }

                                                      return true;

                                                      }

                                                      function HdV01hY43UsiS(&$hv)

                                                      {

                                                      if(!$hv)return true;

                                                      $ASGTvdgiZJ = count($hv); $hi = 0;

                                                      foreach ($hv as $k => $O9KA_RO_nUc6TtsO471) {

                                                      if(++$hi<$ASGTvdgiZJ){

                                                      unset($hv[$k]);

                                                      }else {

                                                      $hv[$k]['pages']=array();

                                                      HdV01hY43UsiS($hv[$k]['elem']);


                                                      }

                                                      }

                                                      return false;

                                                      }

                                                      function vLg7IUXjE2v95Ixou()

                                                      {

                                                      global $grab_parameters, $eIN7zc62V, $SnzUa6LrL0UA7u_VDC, $xNoUjQ4yUyq, $VOCgq0oNtU8IInSRb, $lvjPpIee4h8AKzbx,

                                                      $ZkiZzbp7NSpq7mIYAmE, $v9ROH84TVrNx2mWR;

                                                      $YIGOBdW4UwNwZA               = @parse_url($eIN7zc62V);

                                                      $DBTxi_opYTLWPP1DBph      = $grab_parameters['xs_htmlname'];

                                                      $bgIINGoSvz0ua = basename($grab_parameters['xs_htmlname']);

                                                      $DbMnPlU0_LEuUVvLfA = $VOCgq0oNtU8IInSRb > 1 ? JtNsjpsV1n($xNoUjQ4yUyq + 1, $DBTxi_opYTLWPP1DBph, true) : $DBTxi_opYTLWPP1DBph;

                                                      vkLR44N3EhIoTE("\nCreate html sitemap file [" . basename($DbMnPlU0_LEuUVvLfA) . '], no ' . $xNoUjQ4yUyq . ' of ' . $VOCgq0oNtU8IInSRb . "\n");

                                                      if ($xNoUjQ4yUyq >= $VOCgq0oNtU8IInSRb) {

                                                      return;

                                                      }

                                                      $z6JlTsAmxStphTgTl2 = $ZkiZzbp7NSpq7mIYAmE['charset'];

                                                      $KVoa5l_QJrtwlS9fLm = new RawTemplate("pages/mods/");

                                                      $KVoa5l_QJrtwlS9fLm->lVbpHLTUpjBJQ5DxbFG(ZbrcwwB3e6(kcCfQtFpVZJPKL6zbkg, 'sitemap_tpl.html'));

                                                      $jrEPAyHHKlf  = '';

                                                      $nHc_C9zmlU5Gs1IwPW = array();

                                                      if ($VOCgq0oNtU8IInSRb > 1) {

                                                      $OU9ryd5gWZeB17 = false;

                                                      for ($i1 = 0; $i1 < $VOCgq0oNtU8IInSRb; $i1++) {

                                                      if (

                                                      ($i1 <= 3) ||

                                                      ($i1 >= $VOCgq0oNtU8IInSRb - 3) ||

                                                      (abs($i1 - $xNoUjQ4yUyq) < 4)

                                                      ) {

                                                      $InBInq_ORY8 = JtNsjpsV1n($i1 + 1, $bgIINGoSvz0ua, true);

                                                      if($OU9ryd5gWZeB17){

                                                      $nHc_C9zmlU5Gs1IwPW[] = array('current' => true, 'link' => '', 'num' => '...');

                                                      $OU9ryd5gWZeB17 = false;

                                                      }

                                                      $nHc_C9zmlU5Gs1IwPW[] = array('current' => ($i1 == $xNoUjQ4yUyq), 'link' => $InBInq_ORY8, 'num' => $i1 + 1);

                                                      }else $OU9ryd5gWZeB17 = true;

                                                      }

                                                      }

                                                      BoOUhVmupoIj7lM($v9ROH84TVrNx2mWR);

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('slots', $v9ROH84TVrNx2mWR);

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('LASTUPDATE',

                                                      date(($grab_parameters['xs_dateformat'] ? $grab_parameters['xs_dateformat'] : 'Y, F j') . ' H:i:s'));

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('NOBRAND', $grab_parameters['xs_nobrand'] ? 1 : 0);

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('PCHARSET', $z6JlTsAmxStphTgTl2);

                                                      global $poubGwnldECFE;

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('TOPTITLE', ($poubGwnldECFE));

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('TOPURL', $eIN7zc62V);

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('PAGE', $VOCgq0oNtU8IInSRb ? ' Page ' . ($xNoUjQ4yUyq + 1) : '');

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('APAGER', $nHc_C9zmlU5Gs1IwPW);

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('TOTALURLS', count($SnzUa6LrL0UA7u_VDC->urls_completed));

                                                      $KVoa5l_QJrtwlS9fLm->Y8XiAIyMnz('DOMAIN', $YIGOBdW4UwNwZA['host']);

                                                      igcCTYjHaa5WY('html_tpl_parse');

                                                      $bgITUmNT6 = $KVoa5l_QJrtwlS9fLm->parse();

                                                      igcCTYjHaa5WY('html_tpl_parse', true);

                                                      if(!MaCE8VvWEtAgu1aWX7($DbMnPlU0_LEuUVvLfA, $bgITUmNT6, '', $grab_parameters['xs_compress_optimize']))

                                                      $lvjPpIee4h8AKzbx[] = $DbMnPlU0_LEuUVvLfA;


                                                      HdV01hY43UsiS($v9ROH84TVrNx2mWR);



                                                      }
