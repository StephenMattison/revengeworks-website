<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$ORSnO46340645DFPGE=669372534;$jIJTH45978813LbVSa=986012951;$SrvVF18022821kILUm=889982737;$LHhXb63134197ClESL=186154424;$oxpIn86362337XtEPZ=239421864;$VAjPi43902755FTGRu=744481755;$itzuJ35720091VzraK=126819981;$sYKdB15248274UqLCL=794331762;$MBTYa46503073GjPHi=803461044;$QJMod42944829VXLFl=272464695;$ytCXQ85221092imQLr=654052703;$qeSND80486920DMslx=519352862;$MJhuK33333778CWhRC=656356821;$aYOIF55676395ItuMN=408359918;$eFMqo39332209MjDEo=710364073;$KzOHl60795283gEmHn=256108086;$Etdwx99836917BiSIE=206266056;$DiKwx99170293rkzCW=305618111;$FieIW92454861EUkBm=509742962;$afUze73136690dpoTy=17742322;$WLeoB53964302CPRnv=484328273;$HHLvu14478879KjEDm=864271587;$sMEPT58730150pWScD=380044482;$mrAfX38637215NFlKI=226087928;$NPRmU19211778OyFyV=918187849;$hAVfT53562422CgFja=726661716;$GQbRW37202563InxZv=70022310;$CblLj40765466kSKRp=109148824;$jMLus49006478gOghI=118790161;$llGkn25649266OvnyQ=867247099;$NOqWX58655179CzMbx=568342126;$aSQnT25258449TzMiJ=151874221;$urQEM10792009KoUKE=807944848;$PXjzY68746530OcuqU=894952949;$AkSma14317446SyGEv=643785437;$eCeBH34889500HAPLI=46347184;$LfIiG79769151vnaGf=61206677;$xkgXU60391651lhZgN=29913851;$xzsAg83885101tabBi=770456123;$CraDU18328731SZqWn=955111331;$fnWrW55099302KNRZw=944017045;$pgtjE22322220AoxtG=678134454;$UBKIY68115374ArDNw=749967433;$Jfciy29166505nLBAo=97835223;$IetdE24600990CmsvQ=683104221;$tQUUr90059432HbQnc=666541544;$bKjxK37577533kDFBS=766310039;$ZsRHL25397191hghCS=556194353;$DadRy92973780YQCpq=121489993;$ugTrE46000825MvwrI=799772469;?><?php function aJyB12jL0y() { global $WPDTL7Y930dpTAAp64j, $HtyDL7rxrmsM6ry, $VN3txKSF8K, $grab_parameters; $ctime = time(); if(($ctime - $VN3txKSF8K) > 15) gcuKYpFZswZHtXzrW(); $VN3txKSF8K = $ctime; if(!function_exists('getrusage'))return; if(!isset($HtyDL7rxrmsM6ry)){ $HtyDL7rxrmsM6ry = explode('|',$grab_parameters['xs_cpumon']); } if(!is_array($HtyDL7rxrmsM6ry)||!$HtyDL7rxrmsM6ry[0])return; $gFeKSvfmdj1boqceErh = microtime(true); if(($frA94pWouaF8fSLwr=$gFeKSvfmdj1boqceErh-$WPDTL7Y930dpTAAp64j[1]) < $HtyDL7rxrmsM6ry[3])return; $zBKvnOSi0FEs = getrusage(); $YYH3siyDrYV0Mh = $zBKvnOSi0FEs["ru_utime.tv_sec"] + $zBKvnOSi0FEs["ru_utime.tv_usec"] / 1e6; $mxogSSXHlPvpRWrBo = 0; if($WPDTL7Y930dpTAAp64j){ $l8Yt3hvDKfLdq = ($YYH3siyDrYV0Mh - $WPDTL7Y930dpTAAp64j[0]); $mxogSSXHlPvpRWrBo = 100 * $l8Yt3hvDKfLdq / $frA94pWouaF8fSLwr; } if($mxogSSXHlPvpRWrBo>$HtyDL7rxrmsM6ry[0]) { vkLR44N3EhIoTE("\n<br>CPU monitor sleep: ".number_format($mxogSSXHlPvpRWrBo,2)."% (". number_format($l8Yt3hvDKfLdq,2)." / ".number_format($frA94pWouaF8fSLwr,2). " / ".number_format($gFeKSvfmdj1boqceErh-$WPDTL7Y930dpTAAp64j[2],2)." ) ". (number_format(memory_get_usage()/1024).'K')); $WPDTL7Y930dpTAAp64j[2] = $gFeKSvfmdj1boqceErh+$HtyDL7rxrmsM6ry[1]; usleep($HtyDL7rxrmsM6ry[1]*1000000); vkLR44N3EhIoTE(".. go\n<br>"); }else if($frA94pWouaF8fSLwr > $HtyDL7rxrmsM6ry[2]) { $WPDTL7Y930dpTAAp64j[0] = $YYH3siyDrYV0Mh; $WPDTL7Y930dpTAAp64j[1] = $gFeKSvfmdj1boqceErh; } } function gcuKYpFZswZHtXzrW() { $JMLYbNE4a86Hwoy = array( bvxoWXIyZCcaoVlsa.SJOvDnZG6, bvxoWXIyZCcaoVlsa.EZOR9LhvVo7xa ); Vcp4zPz8NAEN6NuY('Touch: '.bvxoWXIyZCcaoVlsa.SJOvDnZG6); foreach($JMLYbNE4a86Hwoy as $lg) { if(file_exists($lg)){ touch($lg); } } }   function jq0_dPdwEeVJx() { global $Eq5NMryhXgE; $Eq5NMryhXgE = Chc71NhY5JoN1v(bvxoWXIyZCcaoVlsa.'debug.log','a'); vkLR44N3EhIoTE( str_repeat('=',60)."\n".date('Y-m-d H:i:s')."\n\n"); } function ESoP44ub2hlLG4Qk9() { $e = new Exception; var_dump($e->getTraceAsString()); } function vkLR44N3EhIoTE($tO61nGihjvsMc9W7U, $Z4_FBmJclPJ35W = '') { global $Eq5NMryhXgE,$sPE7jAlLab__cdg,$_udbg_tm; if(!$_udbg_tm)$_udbg_tm = microtime(true); $_t = number_format(microtime(true)-$_udbg_tm,1); $ROQWHoj7cXN = $_GET['ddbg'.$Z4_FBmJclPJ35W]; if($ROQWHoj7cXN){ if($Eq5NMryhXgE){ lMiVC3oEhO2($Eq5NMryhXgE, preg_replace('#<\w[^>]*?>#','',$tO61nGihjvsMc9W7U));

                                                    }

                                                    echo $sPE7jAlLab__cdg ? preg_replace('#<\w[^>]*?>#','',$tO61nGihjvsMc9W7U) : '| '.$_t .' |<br>'.$tO61nGihjvsMc9W7U;

                                                    flush();

                                                    if(function_exists('ob_flush'))ob_flush();

                                                    }

                                                    }

                                                    function oAdbV55PF2a8onybDx()

                                                    {

                                                    $bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

                                                    $ggSfQPKuLRcCeTz8sXn = '';

                                                    foreach($bt as $i=>$d)

                                                    if($i>0)

                                                    {

                                                    $ggSfQPKuLRcCeTz8sXn .= $d['file'].' at '.$d['line']."\n";

                                                    }

                                                    return $ggSfQPKuLRcCeTz8sXn;

                                                    }

                                                    function rpQrAJcTTdcnSJ9($gc2DKJQViT342)

                                                    {

                                                    global $grab_parameters;

                                                    Vcp4zPz8NAEN6NuY('Del: '.$gc2DKJQViT342);

                                                    if($grab_parameters['xs_filewmove'] && file_exists($gc2DKJQViT342) ){

                                                    $C4tqDYCVCKt8OL2v = tempnam("/tmp", "sgtmp");

                                                    if(file_exists($C4tqDYCVCKt8OL2v))unlink($C4tqDYCVCKt8OL2v);

                                                    if(file_exists($gc2DKJQViT342))rename($gc2DKJQViT342, $C4tqDYCVCKt8OL2v);

                                                    return !file_exists($C4tqDYCVCKt8OL2v) || unlink($C4tqDYCVCKt8OL2v);

                                                    }else {


                                                    return @unlink($gc2DKJQViT342);

                                                    }

                                                    }

                                                    function OZfmEecZq($f){if(function_exists('file_get_contents'))return file_get_contents($f);else return implode('',file($f));}

                                                    function Chc71NhY5JoN1v($gc2DKJQViT342, $jCrJmnCqaP = '')

                                                    {

                                                    global $grab_parameters;

                                                    Vcp4zPz8NAEN6NuY('Open for writing: '.$gc2DKJQViT342);

                                                    if($grab_parameters['xs_filewmove'] && file_exists($gc2DKJQViT342) ){

                                                    $INTjZBuk9YJDNIv3tL = ($jCrJmnCqaP == 'a') ? file_get_contents($gc2DKJQViT342) : '';

                                                    rpQrAJcTTdcnSJ9($gc2DKJQViT342);

                                                    $pf = fopen($gc2DKJQViT342, 'w');

                                                    if($INTjZBuk9YJDNIv3tL){

                                                    lMiVC3oEhO2($pf, $INTjZBuk9YJDNIv3tL);

                                                    }

                                                    return $pf;

                                                    }

                                                    else {

                                                    $pf = fopen($gc2DKJQViT342, 'w');

                                                    return $pf;

                                                    }

                                                    }

                                                    function fELbf1EDRBgn($gc2DKJQViT342)

                                                    {

                                                    return md5($gc2DKJQViT342);

                                                    }

                                                    function RdIwDjy0tsAEGHTGLlZ($MVTj1xeQ6, $BLHmpK8lX)

                                                    {

                                                    $yoPIuac0v = UsDwe8sQl . substr($MVTj1xeQ6,0,2) . '/';

                                                    if(!file_exists($yoPIuac0v))

                                                    mkdir($yoPIuac0v, 0755);

                                                    $pf = Chc71NhY5JoN1v($yoPIuac0v . $MVTj1xeQ6.'.txt','w');

                                                    lMiVC3oEhO2($pf, lJzLiBpZHNp($BLHmpK8lX));

                                                    fclose($pf);

                                                    }

                                                    function rWndOREMqfd2Wj($MVTj1xeQ6)

                                                    {

                                                    $fl = UsDwe8sQl . substr($MVTj1xeQ6,0,2) . '/' . $MVTj1xeQ6 . '.txt';

                                                    if(!file_exists($fl))

                                                    return array();

                                                    $M4xqqqSJewTZiXRza = tSVH9XRZbaKn($fl);

                                                    return YtUbUOw8VmSbl0RZ($M4xqqqSJewTZiXRza);

                                                    }

                                                    function lJzLiBpZHNp($zBKvnOSi0FEs)

                                                    {


                                                    $ggSfQPKuLRcCeTz8sXn = '';

                                                    if(function_exists('json_encode'))

                                                    $ggSfQPKuLRcCeTz8sXn = json_encode ($zBKvnOSi0FEs, defined('JSON_UNESCAPED_UNICODE') ? JSON_UNESCAPED_UNICODE : 0);

                                                    if(!$ggSfQPKuLRcCeTz8sXn)

                                                    $ggSfQPKuLRcCeTz8sXn = serialize($zBKvnOSi0FEs);

                                                    return $ggSfQPKuLRcCeTz8sXn;

                                                    }

                                                    function YtUbUOw8VmSbl0RZ($zBKvnOSi0FEs)

                                                    {

                                                    if(is_array($zBKvnOSi0FEs))

                                                    return $zBKvnOSi0FEs;

                                                    if($zBKvnOSi0FEs[1]==':')

                                                    return unserialize($zBKvnOSi0FEs);

                                                    if(($zBKvnOSi0FEs[0]=='{') || ($zBKvnOSi0FEs[0]=='[') || ($zBKvnOSi0FEs[0]=='"'))

                                                    return json_decode ($zBKvnOSi0FEs, true);

                                                    else

                                                    return $zBKvnOSi0FEs;

                                                    }

                                                    function nsFT3BmxV1($zBKvnOSi0FEs)

                                                    {

                                                    return lJzLiBpZHNp($zBKvnOSi0FEs);

                                                    }

                                                    function dvcNBqqHGk66v($zBKvnOSi0FEs)

                                                    {

                                                    return YtUbUOw8VmSbl0RZ($zBKvnOSi0FEs);

                                                    }

                                                    function JtNsjpsV1n($i,$DBTxi_opYTLWPP1DBph,$POsdks9YI=false)

                                                    {

                                                    if($POsdks9YI && $i<2) return $DBTxi_opYTLWPP1DBph;

                                                    return $i ? preg_replace('#(.*)\.#','$01'.$i.'.',$DBTxi_opYTLWPP1DBph) : $DBTxi_opYTLWPP1DBph;

                                                    }

                                                    function MaCE8VvWEtAgu1aWX7($gc2DKJQViT342, $Tnfg9kufN4Im, $q07jKU2aqT=bvxoWXIyZCcaoVlsa, $Q5lwzfqvjQjmKnBVwT = false)

                                                    {

                                                    vkLR44N3EhIoTE("\n<br>Save file start: $gc2DKJQViT342\n". number_format(memory_get_usage()/1024)."K\n",3);

                                                    $xATUBdcLMQlkbD3RZl = false;

                                                    if($Q5lwzfqvjQjmKnBVwT){

                                                    if(function_exists('gzopen')){

                                                    if(!strstr($gc2DKJQViT342,'.log'))

                                                    $gc2DKJQViT342 .= '.gz';

                                                    if(!$pf = gzopen($q07jKU2aqT.$gc2DKJQViT342,"w"))

                                                    return false;

                                                    gzwrite($pf, $Tnfg9kufN4Im);

                                                    gzclose($pf);

                                                    $xATUBdcLMQlkbD3RZl = true;

                                                    }else

                                                    if(function_exists('gzencode')){

                                                    $HgMnwWWtmF = gzencode($Tnfg9kufN4Im, 1);

                                                    unset($Tnfg9kufN4Im);

                                                    $Tnfg9kufN4Im = $HgMnwWWtmF;

                                                    if(!strstr($gc2DKJQViT342,'.log'))

                                                    $gc2DKJQViT342 .= '.gz';

                                                    }

                                                    }

                                                    if(!$xATUBdcLMQlkbD3RZl){

                                                    if(!$pf = Chc71NhY5JoN1v($q07jKU2aqT.$gc2DKJQViT342,"w"))

                                                    return false;

                                                    lMiVC3oEhO2($pf, $Tnfg9kufN4Im);

                                                    fclose($pf);

                                                    }

                                                    vkLR44N3EhIoTE("\n<br>Save file complete: $gc2DKJQViT342\n".  number_format(memory_get_usage()/1024)."K\n",3);

                                                    @chmod($q07jKU2aqT.$gc2DKJQViT342, 0666);

                                                    unset($Tnfg9kufN4Im);

                                                    return $gc2DKJQViT342;

                                                    }

                                                    function tSVH9XRZbaKn($gc2DKJQViT342, $DenIRzOm3pWohshM4r = false)

                                                    {

                                                    vkLR44N3EhIoTE("\n<br>Read file start: $gc2DKJQViT342\n". number_format(memory_get_usage()/1024)."K\n",3);

                                                    if($DenIRzOm3pWohshM4r && file_exists($fn = $gc2DKJQViT342.'.gz'))

                                                    $gc2DKJQViT342 = $fn;

                                                    Vcp4zPz8NAEN6NuY('Read: '.$gc2DKJQViT342);

                                                    $fc = @file_get_contents($gc2DKJQViT342);

                                                    if($DenIRzOm3pWohshM4r){

                                                    if((ord($fc[0])==0x1f)&&(ord($fc[1])==0x8b)){

                                                    if(function_exists('gzinflate')){

                                                    if($J0dYqXt05 = gzinflate(substr($fc,10)))

                                                    $fc = $J0dYqXt05;

                                                    }

                                                    else

                                                    if(function_exists('gzdecode'))if($J0dYqXt05 = gzdecode($fc))$fc = $J0dYqXt05;

                                                    if(!$J0dYqXt05)$fc = '';

                                                    }

                                                    }

                                                    vkLR44N3EhIoTE("\n<br>Read file complete: $gc2DKJQViT342 (".number_format(strlen($fc)/1024)."K)\n". number_format(memory_get_usage()/1024)."K\n",3);

                                                    return $fc;

                                                    }

                                                    function UrOl0tTeYCkGMBxxHk9($ktaFRgxiq62u)

                                                    {

                                                    return YtUbUOw8VmSbl0RZ(tSVH9XRZbaKn(bvxoWXIyZCcaoVlsa.$ktaFRgxiq62u, true));

                                                    }

                                                    function Vcp4zPz8NAEN6NuY($s)

                                                    {

                                                    }

                                                    function gtM_YNTPY8YQ()

                                                    {

                                                    $xuKE3tvXX = array();

                                                    Vcp4zPz8NAEN6NuY('Get log list: '.bvxoWXIyZCcaoVlsa);

                                                    $pd = opendir(bvxoWXIyZCcaoVlsa);

                                                    while($fn=readdir($pd))

                                                    if(preg_match('#^\d+.*?\.log$#',$fn))

                                                    $xuKE3tvXX[] = $fn;

                                                    closedir($pd);

                                                    sort($xuKE3tvXX);

                                                    return $xuKE3tvXX;

                                                    }

                                                    function ZeFlXonNC8A9nTqx($tm) {

                                                    $tm = intval($tm);

                                                    $h = intval($tm/60/60);

                                                    $tm -= $h*60*60;

                                                    $m = intval($tm/60);

                                                    $tm -= $m*60;

                                                    $s = $tm;

                                                    if($s<10)$s="0$s";

                                                    if($m<10)$m="0$m";

                                                    return "$h:$m:$s";

                                                    }

                                                    function kh2hwYgXZfTHhnji2Hp($AJFcY8RYz, $ug1xRIriyOz_QAX) {

                                                    if(strstr($ug1xRIriyOz_QAX, '://'))return $ug1xRIriyOz_QAX;

                                                    if($AJFcY8RYz[strlen($AJFcY8RYz)-1] == '/' && $ug1xRIriyOz_QAX[0] == '/')

                                                    $ug1xRIriyOz_QAX = substr($ug1xRIriyOz_QAX, 1);

                                                    if($AJFcY8RYz[strlen($AJFcY8RYz)-1] == '/' && $AJFcY8RYz[strlen($AJFcY8RYz)-2] == '/' )

                                                    $AJFcY8RYz = substr($AJFcY8RYz, 0, strlen($AJFcY8RYz)-1);

                                                    return $AJFcY8RYz . $ug1xRIriyOz_QAX;



                                                    }

                                                    function xAeKju_Og6BSV(){

                                                    global $hqtuXcw1lZ4viAAG3, $e6Pzi1w4tX0;

                                                    $ctime = time();

                                                    if(($ctime - $hqtuXcw1lZ4viAAG3) > PbuuB9uNZTP7yw('xs_interrupt_interval',3)){

                                                    $hqtuXcw1lZ4viAAG3 = $ctime;

                                                    if(file_exists($XUvIlvB2YRdbVwBJq = bvxoWXIyZCcaoVlsa.N0MW0Wx6mQ)){

                                                    $e6Pzi1w4tX0 = filesize($XUvIlvB2YRdbVwBJq) ? file_get_contents($XUvIlvB2YRdbVwBJq) : $XUvIlvB2YRdbVwBJq;

                                                    }

                                                    }

                                                    return $e6Pzi1w4tX0;

                                                    }

                                                    function URR1B_zoXCwL() {

                                                    $_dump_file = bvxoWXIyZCcaoVlsa.SJOvDnZG6;


                                                    if(file_exists($_dump_file) ) {

                                                    @unlink(bvxoWXIyZCcaoVlsa.ZKQmr7OJR5Al2APqoaS);

                                                    @rename($_dump_file, bvxoWXIyZCcaoVlsa.ZKQmr7OJR5Al2APqoaS);

                                                    }

                                                    }

                                                    function PbuuB9uNZTP7yw($xguRrOFlH, $EBPr6eBkwy9 = false) {

                                                    global $grab_parameters;

                                                    return isset($grab_parameters[$xguRrOFlH])  ? $grab_parameters[$xguRrOFlH] : $EBPr6eBkwy9;

                                                    }

                                                    function QKuF4bQRKP7nw_UDcU($dr) {

                                                    $dr = preg_replace('#\?.*#', '', $dr);

                                                    $dr = preg_replace('#\#.*#', '', $dr);

                                                    if($dr[strlen($dr)-1]!='/' && $dr)

                                                    {

                                                    $dr=str_replace('\\','/',dirname($dr));

                                                    if($dr[strlen($dr)-1]!='/')$dr.='/';

                                                    }

                                                    return kh2hwYgXZfTHhnji2Hp($dr, '');

                                                    }

                                                    function URGWktSxSxJ($XJtWAVmBTXcICX4yKLW,$whnReUl5sID_8i) {

                                                    return QKuF4bQRKP7nw_UDcU(strstr($whnReUl5sID_8i,'://') ? $whnReUl5sID_8i : $XJtWAVmBTXcICX4yKLW . $whnReUl5sID_8i);

                                                    }

                                                    function Hcet3S4jmDKp69l($q07jKU2aqT, $hni1iaVDE)

                                                    {

                                                    Vcp4zPz8NAEN6NuY('Clear dir: '.$q07jKU2aqT);

                                                    $pd = opendir($q07jKU2aqT);

                                                    if($pd)

                                                    while($fn = readdir($pd))

                                                    if(is_file($q07jKU2aqT.$fn) && preg_match('#'.$hni1iaVDE.'$#',$fn))

                                                    {

                                                    @rpQrAJcTTdcnSJ9($q07jKU2aqT.$fn);

                                                    }else

                                                    if($fn[0]!='.'&&is_dir($q07jKU2aqT.$fn))

                                                    {

                                                    Hcet3S4jmDKp69l($q07jKU2aqT.$fn.'/', $hni1iaVDE);

                                                    @rmdir($q07jKU2aqT.$fn);

                                                    }

                                                    closedir($pd);

                                                    }

                                                    function lMiVC3oEhO2($pf, $M4xqqqSJewTZiXRza)

                                                    {

                                                    global $grab_parameters;


                                                    if($grab_parameters['xs_write_disable'] ){

                                                    }

                                                    return @fwrite($pf, $M4xqqqSJewTZiXRza);

                                                    }

                                                    function gWUyr5kHZW($LF1TQzkzl8vdQsTk, $VfoZIHwvppID93dLX)

                                                    {

                                                    $ws = "<xmlsitemaps_settings>";

                                                    foreach($VfoZIHwvppID93dLX as $k=>$v)

                                                    if(strstr($k,'xs_'))

                                                    $ws .= "\n\t<option name=\"$k\">$v</option>";

                                                    $ws .= "\n</xmlsitemaps_settings>";

                                                    $pf = Chc71NhY5JoN1v($LF1TQzkzl8vdQsTk,'w');

                                                    lMiVC3oEhO2($pf, $ws);

                                                    fclose($pf);

                                                    }

                                                    function dtsOCLvIeYMEsoGb($LF1TQzkzl8vdQsTk, &$VfoZIHwvppID93dLX, $ovWNxfBu_bcStdE0W = false)

                                                    {

                                                    $fl = tSVH9XRZbaKn($LF1TQzkzl8vdQsTk);

                                                    preg_match_all('#<option name="(.*?)">(.*?)</option>#is', $fl, $IaG0HPnRpTj34mfTp, PREG_SET_ORDER);

                                                    foreach($IaG0HPnRpTj34mfTp as $m)

                                                    if(!$ovWNxfBu_bcStdE0W || $m[2])

                                                    {

                                                    $VfoZIHwvppID93dLX[$m[1]] = $m[2];

                                                    }

                                                    return $fl && (count($IaG0HPnRpTj34mfTp)>0);

                                                    }

                                                    function eCuhqSzChM3N90B2UJ($xguRrOFlH, $mUQqtHIzdwJwFdSLf7 = true)

                                                    {

                                                    global $grab_parameters, $hNfgpQEOfpU9IQEr5zn;

                                                    return

                                                    str_replace(basename($grab_parameters['xs_smurl']), $grab_parameters[$xguRrOFlH],

                                                    $grab_parameters['xs_smurl']).($mUQqtHIzdwJwFdSLf7 ? $hNfgpQEOfpU9IQEr5zn : '');

                                                    }

                                                    function ZbrcwwB3e6($q07jKU2aqT, $f2)

                                                    {

                                                    $f1 = preg_replace('#(\.[^\.]+$)#', '2$01', $f2);

                                                    return @file_exists($q07jKU2aqT.$f1) ? $f1 : $f2;

                                                    }

                                                    function w5pLADMslf0F5YLxbnD() {

                                                    global $vh_O4q2SWbqUIUz22Z4;

                                                    $DfevbU6m2h3 = '';$_ss=0;

                                                    if($vh_O4q2SWbqUIUz22Z4)

                                                    foreach($vh_O4q2SWbqUIUz22Z4 as $XV0gvoTc_07MC9_O=>$ta){

                                                    if(count($ta)){

                                                    $_s = array_sum($ta)/count($ta);

                                                    $_ss+=$_s;

                                                    $DfevbU6m2h3 .= $XV0gvoTc_07MC9_O.' = '.count($ta).', '.number_format($_s,2)."s \n ";

                                                    }

                                                    }

                                                    return '['.number_format($_ss,2).'s] '.$DfevbU6m2h3;

                                                    }

                                                    function Ij3zzuYUboJ($XV0gvoTc_07MC9_O, $mm3rqd6SukHo = false) {

                                                    global $vh_O4q2SWbqUIUz22Z4, $VDso46mdE5V4;

                                                    if(!isset($vh_O4q2SWbqUIUz22Z4[$XV0gvoTc_07MC9_O]))

                                                    $vh_O4q2SWbqUIUz22Z4[$XV0gvoTc_07MC9_O] = array();

                                                    if($mm3rqd6SukHo){

                                                    if($VDso46mdE5V4[$XV0gvoTc_07MC9_O]){

                                                    $t = microtime(true) - $VDso46mdE5V4[$XV0gvoTc_07MC9_O];

                                                    $VDso46mdE5V4[$XV0gvoTc_07MC9_O] = 0;

                                                    array_push($vh_O4q2SWbqUIUz22Z4[$XV0gvoTc_07MC9_O], $t);

                                                    if(count($vh_O4q2SWbqUIUz22Z4[$XV0gvoTc_07MC9_O])>PbuuB9uNZTP7yw('xs_perf_counter',20))

                                                    array_shift($vh_O4q2SWbqUIUz22Z4[$XV0gvoTc_07MC9_O]);

                                                    }

                                                    }else {

                                                    $VDso46mdE5V4[$XV0gvoTc_07MC9_O] = microtime(true);

                                                    }

                                                    }

                                                    function lPqrwG_8rE() {

                                                    global $krF76wJHKUTcl;

                                                    $DfevbU6m2h3 = '';$_ss=0;

                                                    if($krF76wJHKUTcl)

                                                    foreach($krF76wJHKUTcl as $XV0gvoTc_07MC9_O=>$ta){

                                                    $_ss+=$ta[1];

                                                    $DfevbU6m2h3 .= $XV0gvoTc_07MC9_O.' = '.($ta[0]).', '.number_format($ta[1],2)."s \n ";

                                                    }

                                                    return 'total ['.number_format($_ss,2).'s] '."\n".$DfevbU6m2h3;

                                                    }

                                                    function igcCTYjHaa5WY($XV0gvoTc_07MC9_O, $mm3rqd6SukHo = false) {

                                                    if(!$_GET['ddbg'])return;

                                                    global $krF76wJHKUTcl, $sJVgORf_o6TzV, $ub4e2WFtlmQbGD;

                                                    if(!$XV0gvoTc_07MC9_O)$XV0gvoTc_07MC9_O = $ub4e2WFtlmQbGD;

                                                    if(!isset($krF76wJHKUTcl[$XV0gvoTc_07MC9_O]))

                                                    $krF76wJHKUTcl[$XV0gvoTc_07MC9_O] = array();

                                                    if($mm3rqd6SukHo){

                                                    if($sJVgORf_o6TzV[$XV0gvoTc_07MC9_O]){

                                                    $t = microtime(true) - $sJVgORf_o6TzV[$XV0gvoTc_07MC9_O];

                                                    unset($sJVgORf_o6TzV[$XV0gvoTc_07MC9_O]);

                                                    $krF76wJHKUTcl[$XV0gvoTc_07MC9_O][0]++;

                                                    $krF76wJHKUTcl[$XV0gvoTc_07MC9_O][1]+=$t;



                                                    }

                                                    }else {

                                                    $sJVgORf_o6TzV[$XV0gvoTc_07MC9_O] = microtime(true);

                                                    }

                                                    }
