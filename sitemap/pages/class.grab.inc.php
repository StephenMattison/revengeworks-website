<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$oBwJr30275820LIrWr=19974073;$dPKhb89335967olaIo=148655288;$ljobc75787168oAcLa=581334285;$YYNwK48708384sJHYM=573589709;$AHZxX25797563paRpZ=370509158;$jqvFj90237308kEbtA=814853632;$vFZGe86620046IxNCT=599023045;$KaNUf38539490sBnbK=511001948;$skeDA64166277pYTMK=885503198;$bYCZN17345584Kkxvm=724199119;$yylCM78808418ZIvOg=631652898;$FqwYG77572695UxuoH=888164452;$imJnE31586392WbmJN=74598005;$IfAzB91405995CpgZg=180405502;$LQISp94690316quHZb=214986893;$yMwtA31354522AlVPl=280838305;$RzloW80476495nlSvh=932261057;$XQwPE77411508UVSty=673277597;$MHxYj75596180wrxEO=131185931;$MAvAl48417354yMaLq=238626647;$bFNnK95920957EjGCZ=866158856;$MyLAT10451413jKxsh=711182522;$oiLtU74489033EVkHy=674069980;$ReOSz47438082YWxuS=669801075;$fpFSS11341159PtpqE=34162952;$Ckdfe44610814Sbvat=421843016;$SHiVL86064379tnCJM=805918540;$cxACE46605594shaaj=487727494;$FZzPw63646274uwOcd=909241107;$PEqAB60498026CQDvw=290919348;$TVVVH68624519prwJC=505093364;$JKchc35959867Uwdyn=602125720;$kjMBU42110056vPeoY=131814613;$rapNv86878884LinQm=9866930;$Jqnda57773176jmEUZ=641568788;$xTVqo68177863TJLLN=407077779;$KwaKn56714433bRYNG=460072213;$gTCnx83770474zZgwe=784804110;$OXqdn37680002svuQF=278937464;$IJOed18129836xdLwC=79312592;$QtdCF96744811nOrBr=507354874;$TMllT91472449ldidu=769910988;$xHRye83976711oJlfU=66523504;$kagBE11674242GYWnx=338303172;$MramJ37391105bBmrb=868082292;$jgWln49548196GLnQo=692667466;$OTEQN76368275TYMSJ=990124122;$fjtdT63050380WfRZW=527769072;$KgYZI83467023ZSveZ=661395473;$zbcwD80036592bhOWl=160980958;?><?php class SiteCrawler { var $BbatTlcCA3qF6 = false; var $xh7xGXSeUzeCP = array(); var $X76u1YKBMGYbXmzi6sH = array(); var $VfoZIHwvppID93dLX = array(); var $efXLLuVoF = false; var $L2rCBT7py = false; var $dRZNnqQ1_jjsHXyWr = array(); var $x15LfqXVsH = array(); var $dHTbiGOWabI = ''; var $jQoJt4jbidpLqql5 = ''; var $uPpYhEkqINo8sf = ''; var $v0ytSBWER = ''; var $fDnipljGUu9Bc6PDXm = ''; var $dFmphpI8PB__iRNY = ''; var $r7kkCXZmM = ''; var $mdOyL9CXFQ = ''; var $XJtWAVmBTXcICX4yKLW = ''; var $pt4sSPNr0D6OHM = ''; var $gGtCbFmm6 = 0; var $urls_completed = array(); var $sm_base = array(); var $y5E6XiZB3w2DW4XFY = 0; var $ctime = 0; var $pl = 0; var $mu = 0; var $num_processed = 0; var $num_links_current_batch = 0; var $num_urls_processed_in_current_batch = 0; var $tsize = 0; var $links_level = 0; var $Pdj58vIT8BE = 0; var $nettime = 0; var $ErNM9AZCiImK1Rc5 = 0; var $fetch_no = 0; var $MQyFhCsDG = 0; var $addedcnt = array(); var $sm_sessions = array(); var $bNcLzoKBNg3E = array(); var $progpar = array(); var $wPtVNoRUIS4a = array(); var $runstate = array(); var $ref_links_list = array(); var $ref_links_tmp = array(); var $ref_links_tmp2 = array(); function MYQUhltsJ0fFEqA($bG2WlKqeur1PTkfnCwn = false, $qZPxxtLizmO_ = false) { global $O5KGcmOfedFfF, $grab_parameters, $K5qP9_ZsHx, $m8, $qoearNA2OC4n; $kjx27n7e2gtPSg9T9=microtime(true); $this->ctime = $kjx27n7e2gtPSg9T9 - $this->MQyFhCsDG; $_ut = ($this->ctime - $O5KGcmOfedFfF > 5); if( $_ut || $qZPxxtLizmO_ || ( ( (($this->num_links_current_batch==$this->num_urls_processed_in_current_batch) || ($this->pl==0) || ($this->num_processed==1) || ($this->num_processed%$grab_parameters['xs_progupdate'])==0) || ($this->gGtCbFmm6>=$this->y5E6XiZB3w2DW4XFY) ) && ($this->num_processed != $this->bNcLzoKBNg3E['num_processed']) && !$bG2WlKqeur1PTkfnCwn ) ) { $this->bNcLzoKBNg3E['num_processed'] = $this->num_processed; $O5KGcmOfedFfF = $this->ctime; $this->mu = function_exists('memory_get_usage') ? memory_get_usage() : '-'; $K5qP9_ZsHx = max($K5qP9_ZsHx, $this->mu); if($this->mu>$m8+1000000){ $m8 = $this->mu; $cc = ' style="color:red"'; }else $cc=''; if(intval($this->mu)) $this->mu = number_format($this->mu/1024,1).' Kb'; vkLR44N3EhIoTE("\n(<span".$cc.">memory".($cc?' up':'').": $this->mu</span>)<br>\n"); $this->progpar = array( $this->ctime, // 0. running time
                                                             str_replace($this->pt4sSPNr0D6OHM, '', $this->dFmphpI8PB__iRNY),  // 1. current URL
                                                             $this->pl,                    // 2. urls left
                                                             $this->num_processed,                    // 3. processed urls
                                                             $this->tsize,                 // 4. bandwidth usage
                                                             $this->links_level,           // 5. depth level
                                                             $this->mu,                    // 6. memory usage
                                                             $this->gGtCbFmm6, // 7. added in sitemap
                                                             $this->Pdj58vIT8BE,     // 8. in the queue
                                                             $this->nettime,  // 9. network time
                                                             $this->ErNM9AZCiImK1Rc5, // 10. last net time
                                                             $this->fetch_no, // 11. fetched urls
                                                             $this->addedcnt, // 12. number of added images/videos/etc
                                                             ); end($this->sm_sessions); $mS1VsjnfSS = key($this->sm_sessions); if(!$this->sm_sessions[$mS1VsjnfSS]['progress_start']){ $this->sm_sessions[$mS1VsjnfSS]['progress_start'] = $this->progpar; } $this->sm_sessions[$mS1VsjnfSS]['progress_end'] = $this->progpar; if($this->VfoZIHwvppID93dLX['bgexec']){ if(((time()-$qoearNA2OC4n)>PbuuB9uNZTP7yw('xs_state_interval',5)) || $qZPxxtLizmO_) { if($this->fetch_no) { $qoearNA2OC4n = time(); $this->progpar[] = w5pLADMslf0F5YLxbnD(); if($bG2WlKqeur1PTkfnCwn){ $this->progpar[] = $bG2WlKqeur1PTkfnCwn; } MaCE8VvWEtAgu1aWX7(EZOR9LhvVo7xa,nsFT3BmxV1($this->progpar)); } } } if($this->BbatTlcCA3qF6 && (!$this->X76u1YKBMGYbXmzi6sH['f'] || $_ut)) { call_user_func($this->BbatTlcCA3qF6,$this->progpar); } } else { call_user_func($this->BbatTlcCA3qF6,array('cmd'=>'ping', 'bg' => $this->VfoZIHwvppID93dLX['bgexec'])); } return $this->progpar; } function di2D_OaG10yV86yGItL() { global $grab_parameters; if($grab_parameters['xs_prev_sm_base']){ MaCE8VvWEtAgu1aWX7('sm_base.db',lJzLiBpZHNp($this->sm_base),bvxoWXIyZCcaoVlsa,true); } } function HgZvwGaI0() { global $grab_parameters; if($grab_parameters['xs_prev_sm_base']){ if($this->basecachemask) foreach($this->urls_completed as $b_pbe8WWqjqbWNds8xT){ $aOvWXeFfIfo = $this->ZIQK3KPtc0($b_pbe8WWqjqbWNds8xT); $Lsf4ci3EC3mj2n8qj = $this->MeaBM9UY1($aOvWXeFfIfo['link']); if(preg_match('#('.$this->basecachemask.')#',$Lsf4ci3EC3mj2n8qj)) if(!isset($this->sm_base[$Lsf4ci3EC3mj2n8qj])) { $this->sm_base[$Lsf4ci3EC3mj2n8qj] = $aOvWXeFfIfo; } } } } function KCutKSZHXX($em6ve6zQigPwbfb) { global $grab_parameters; if($grab_parameters['xs_prev_sm_base']){ vkLR44N3EhIoTE("\nRestoring sm_base\n"); if($Uevf9cSXZFXFriosRM = @tSVH9XRZbaKn(bvxoWXIyZCcaoVlsa.'sm_base.db',true)){ vkLR44N3EhIoTE("\nUnpacked sm_base size: ".(strlen($Uevf9cSXZFXFriosRM))."\n"); $Uevf9cSXZFXFriosRM = YtUbUOw8VmSbl0RZ($Uevf9cSXZFXFriosRM); } vkLR44N3EhIoTE("\nFound URLs in sm_base: ".count($Uevf9cSXZFXFriosRM)."\n"); $this->sm_base = array(); if($Uevf9cSXZFXFriosRM) { if($this->basecachemask) foreach($Uevf9cSXZFXFriosRM as $_k=>$_v){ $Lsf4ci3EC3mj2n8qj = $this->MeaBM9UY1($_k); $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($_k, $this->XJtWAVmBTXcICX4yKLW); if(!$CdAC6qYRiSkI_) if(preg_match('#('.$this->basecachemask.')#',$Lsf4ci3EC3mj2n8qj)) { $this->sm_base[$Lsf4ci3EC3mj2n8qj] = $_v; } } } unset($Uevf9cSXZFXFriosRM); vkLR44N3EhIoTE("\nFiltered after cache mask: ".count($this->sm_base)."\n"); if($em6ve6zQigPwbfb){ } } } function nmnHUFMGxB8Wvcgi($bm = false){ if($bm && isset($bm[1])&& $bm[1]&&($bm[1][0]!='.')){   $this->p3vZTa3uCvnUpt6($bm[1], $this->dFmphpI8PB__iRNY); $this->mdOyL9CXFQ = QKuF4bQRKP7nw_UDcU($bm[1]); } else{ $this->mdOyL9CXFQ = QKuF4bQRKP7nw_UDcU(strstr($this->dFmphpI8PB__iRNY,'://') ? $this->dFmphpI8PB__iRNY : $this->XJtWAVmBTXcICX4yKLW . $this->dFmphpI8PB__iRNY);
                                                             } } function oYWNfSZP9eu1TNn($K71jAZIWNQat1l9V){ return strstr($K71jAZIWNQat1l9V,'text/html') || strstr($K71jAZIWNQat1l9V,'/xhtml'); } function M9UDoZnr88yzGF($nm, $cn){ preg_match('#<input[^>]*name="'.$nm.'"[^>]*value="(.*?)"#is', $cn, $_inpm); return $_inpm[1]; } function k_Di0xtC9xvsgV1($cn, $dp){ global $grab_parameters,$UJjrKVyISUwJOP6Upz; $uov8mNwJcXEXRaYOj5g = array(); vkLR44N3EhIoTE("\n*** Parse JS - ".$this->dFmphpI8PB__iRNY.", ($dp)\n", 2); if(strstr($cn, '__VIEWSTATE')){ $ViCs58KTudTV6k0X = rand(1E5,1E6); preg_match_all('#<form[^>]*action="([^>]*?)".*?</form>#is', $cn, $_vsm); foreach($_vsm[0] as $i=>$_vm) { if(!preg_match('#<input[^>]*?"__VIEWSTATE"#is', $_vm)) continue; $_action = $_vsm[1][$i]; $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($_action, $this->dFmphpI8PB__iRNY); if($CdAC6qYRiSkI_ == 1) continue; $_fex2 = $this->QaHti3kjXdppde2($_action); if($_fex2['f'])continue; $LbCqLLiPzt4rJwiwe = array('__VIEWSTATE','__VIEWSTATEGENERATOR','__EVENTVALIDATION'); $g2fDJDz_Tawj = array(); foreach($LbCqLLiPzt4rJwiwe as $p) $g2fDJDz_Tawj[$p] = $this->M9UDoZnr88yzGF($p, $_vm); preg_match_all('#<input[^>]*type="hidden"[^>]*name="([^>]*?)"[^>]*value="([^>]*?)"#is', $_vm, $_vpar); foreach($_vpar[0] as $_vpi=>$_vpv) { if(!$g2fDJDz_Tawj[$_vpar[1][$_vpi]]) $g2fDJDz_Tawj[$_vpar[1][$_vpi]] = $_vpar[2][$_vpi]; } preg_match_all('#__doPostBack(\(.*?\))#is', $_vm, $_dpball); $g1hSZNkHzKVMV_ = array(); foreach($_dpball[1] as $_dpb) { $_dpb = stripslashes(str_replace('&#39;',"'",$_dpb)); if(preg_match('#\'(.*?)\'(?:\s*\,\'(.*?)\')?#', $_dpb, $_a)){ if(!$this->LmI8z6dXpXyZk('xs_parse_js_only_act', $_a[1], true)) continue; if(!$this->LmI8z6dXpXyZk('xs_parse_js_only_act2', $_a[1].$_a[2], true)) continue; $zAPTdPnJ2tPjbmSI = $_action .' -> '. $_a[1]. '/'. $_a[2]; if($iQfjIky4_ = PbuuB9uNZTP7yw('xs_parse_js_allowdup',false)){ if(preg_match('#'.$iQfjIky4_.'#',$_a[1].$_a[2])) $zAPTdPnJ2tPjbmSI = $this->dFmphpI8PB__iRNY.'/'.$ViCs58KTudTV6k0X.' -> '.$zAPTdPnJ2tPjbmSI; } if($this->wPtVNoRUIS4a[$zAPTdPnJ2tPjbmSI]++) continue; $_fex2 = $this->QaHti3kjXdppde2($_a[1]); if(!$_fex2['f'] ) $g1hSZNkHzKVMV_[] = array($_a,$zAPTdPnJ2tPjbmSI); } } foreach($g1hSZNkHzKVMV_ as $jp){ $_a = $jp[0]; $zAPTdPnJ2tPjbmSI = $jp[1]; $VfoZIHwvppID93dLX = $g2fDJDz_Tawj; $VfoZIHwvppID93dLX['__EVENTTARGET'] = $_a[1]; $VfoZIHwvppID93dLX['__EVENTARGUMENT'] = $_a[2]; $pNZSwatJOAqRvqu = $UJjrKVyISUwJOP6Upz->fetch($_action, 0, false, false, http_build_query($VfoZIHwvppID93dLX,'','&'), array('contenttype'=>'application/x-www-form-urlencoded')); $this->MYQUhltsJ0fFEqA(); vkLR44N3EhIoTE("\n(js post $dp) $zAPTdPnJ2tPjbmSI\nlast - ".$pNZSwatJOAqRvqu['last_url'] ); if(($_action != $pNZSwatJOAqRvqu['last_url'])){ $uov8mNwJcXEXRaYOj5g[] = $pNZSwatJOAqRvqu['last_url']; }else { $uov8mNwJcXEXRaYOj5g = array_merge($uov8mNwJcXEXRaYOj5g, $this->v67O66mm3($pNZSwatJOAqRvqu['content'], $dp+1)); } vkLR44N3EhIoTE("\n>> llist ".count($uov8mNwJcXEXRaYOj5g).", ".$uov8mNwJcXEXRaYOj5g[0]."\n"); } } } return $uov8mNwJcXEXRaYOj5g; } function v67O66mm3(&$cn, $dp = 0, $W7vOufXV1e = 0){ global $grab_parameters,$UJjrKVyISUwJOP6Upz; if(!$W7vOufXV1e) $W7vOufXV1e= PbuuB9uNZTP7yw('xs_parsehtml_maxdepth',5); vkLR44N3EhIoTE("\n* Parse HTML - ".$this->dFmphpI8PB__iRNY.", ($dp/$W7vOufXV1e) [".strlen($cn)."]\n", 2); if($dp > $W7vOufXV1e)return array(); if(preg_match_all('#<(?:div|span)\s[^>]*?(?:data-|\s)src\s*=\s*["\']([^>]*?)("|\')#is', $cn, $y99N3SqLl)) { foreach($y99N3SqLl[1] as $i=>$HfPM5GkHGV2eOk1V) { $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($HfPM5GkHGV2eOk1V, $this->dFmphpI8PB__iRNY); if($CdAC6qYRiSkI_ == 1) continue; $_fex2 = $this->QaHti3kjXdppde2($HfPM5GkHGV2eOk1V); if($_fex2['f'])continue; $diiL9dd0kLKKv2M = $UJjrKVyISUwJOP6Upz->fetch($HfPM5GkHGV2eOk1V, 0, false, false); if($this->oYWNfSZP9eu1TNn($diiL9dd0kLKKv2M['headers']['content-type'])){ $bx9BEVVps6S08ExV = $y99N3SqLl[0][$i]; $wqEGID3RlAtyZQkxnw = strpos($cn, $bx9BEVVps6S08ExV); if ($wqEGID3RlAtyZQkxnw !== false) { $cn = substr_replace($cn, $diiL9dd0kLKKv2M['content'], $wqEGID3RlAtyZQkxnw, strlen($bx9BEVVps6S08ExV)); } } } } $CmPm1Fpo93uXVpBV = $grab_parameters['xs_utf8_enc'] ? 'isu':'is'; $_t = 'a|area|go'; $_t .= '|link'; preg_match_all('#<(?:'.$_t.')(?:[^>]*?\s)href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\"\\\\>]+))[^>]*>#is'.$CmPm1Fpo93uXVpBV, $cn, $am); preg_match_all('#<option(?:[^>]*?)?value\s*=\s*"(http[^"]*)#is'.$CmPm1Fpo93uXVpBV, $cn, $Qx81iOY7G1AmC); $_sc = '(?:i?frame)'; preg_match_all('#<'.$_sc.'\s[^>]*?src\s*=\s*["\']?(.*?)("|>|\')#is', $cn, $L2HmGWTj9H); preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#'.$CmPm1Fpo93uXVpBV, $cn, $T9v4StE5HjmB1); if($grab_parameters['xs_parse_swf']) preg_match_all('#<object[^>]*application/x-shockwave-flash[^>]*data\s*=\s*["\']([^"\'>]+).*?>#'.$CmPm1Fpo93uXVpBV, $cn, $bgYmeX9cSafS);

                                                            else $bgYmeX9cSafS = array(array(),array());


                                                            preg_match_all('#<a[^>]*?onclick\s*=\s*"[^"]*\.load\(\'([^\']*)#'.$CmPm1Fpo93uXVpBV, $cn, $Op3rnGOxK);


                                                            preg_match_all('#"url"\:"(http[^"]*)#is'.$CmPm1Fpo93uXVpBV, $cn, $auBcw7gnCx);

                                                            $uov8mNwJcXEXRaYOj5g = array();

                                                            $H4tQMPyGoPl90rESIQ = 'stylesheet|publisher';

                                                            if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])

                                                            $H4tQMPyGoPl90rESIQ .= '|nofollow';

                                                            for($i=0;$i<count($am[1]);$i++)

                                                            {

                                                            if(!preg_match('#rel\s*=\s*["\']?\s*('.$H4tQMPyGoPl90rESIQ.')#i', $am[0][$i]))

                                                            $uov8mNwJcXEXRaYOj5g[] = $am[1][$i];

                                                            }

                                                            $uov8mNwJcXEXRaYOj5g = @array_merge(

                                                            $uov8mNwJcXEXRaYOj5g,


                                                            $am[2],$am[3],

                                                            $L2HmGWTj9H[1],$T9v4StE5HjmB1[1],

                                                            $Qx81iOY7G1AmC[1],$Op3rnGOxK[1],

                                                            $auBcw7gnCx[1],

                                                            $bgYmeX9cSafS[1]);

                                                            if($dp < $W7vOufXV1e)

                                                            if($grab_parameters['xs_parse_js'] &&

                                                            $this->LmI8z6dXpXyZk('xs_parse_js_only', $this->dFmphpI8PB__iRNY, true)

                                                            ){

                                                            $LE3JCxZPtiP_9nLz = $this->k_Di0xtC9xvsgV1($cn, $dp);

                                                            $uov8mNwJcXEXRaYOj5g = @array_merge($uov8mNwJcXEXRaYOj5g, $LE3JCxZPtiP_9nLz);

                                                            }

                                                            vkLR44N3EhIoTE("\n* Parsed [".count($uov8mNwJcXEXRaYOj5g)."] URLs\n", 2);

                                                            return $uov8mNwJcXEXRaYOj5g;

                                                            }

                                                            function cbAmyIinmC($eJt5kPD64){


                                                            return preg_replace('#^(www|\w)\.#', '', $eJt5kPD64);

                                                            }

                                                            function UhyUUXN9ZzPeW1($pWYHzkloHUs) {

                                                            if(preg_match('#^(.*?\://[^/]*)#', $pWYHzkloHUs, $Ynf20ClU6T1F6bBE))

                                                            return strtolower($Ynf20ClU6T1F6bBE[1]) .  substr($pWYHzkloHUs, strlen($Ynf20ClU6T1F6bBE[1]));

                                                            else

                                                            return $pWYHzkloHUs;

                                                            }

                                                            function MeaBM9UY1($pWYHzkloHUs)

                                                            {

                                                            return preg_replace('#^.*?'.preg_quote($this->XJtWAVmBTXcICX4yKLW,'#').'#','',$pWYHzkloHUs);

                                                            }

                                                            function p3vZTa3uCvnUpt6(&$a, $whnReUl5sID_8i, $b381QxsWK = '')

                                                            {

                                                            global $grab_parameters;

                                                            $r7kkCXZmM = $this->r7kkCXZmM;

                                                            $mdOyL9CXFQ = $this->mdOyL9CXFQ;

                                                            $a1 = $a;

                                                            $a = str_replace(

                                                            array('&trade;','&#38;','&#038;','&amp;','&#x3a;','&#x3A;','&#x2f;', '&#x2F;','&#x2e;', '&#x2E;'),

                                                            array('%E2%84%A2', '&', '&', '&', ':', ':', '/', '/','.','.')

                                                            ,$a);



                                                            if(strstr($whnReUl5sID_8i,'://')) {

                                                            $r7kkCXZmM = preg_replace('#(:\/\/.*?)\/.*$#', '$01', $mdOyL9CXFQ);


                                                            }

                                                            $vAVVgklzv = parse_url($this->XJtWAVmBTXcICX4yKLW);

                                                            if($vAVVgklzv['scheme'] && substr($a, 0, 2) == '//')

                                                            $a = $vAVVgklzv['scheme'].':'.$a;




                                                            $hcGHdOKuTfzh = @parse_url($a);

                                                            $_scheme = strtolower($hcGHdOKuTfzh['scheme']);

                                                            if($_scheme && ($_scheme!='http')&& ($_scheme!='https')) {

                                                            $CdAC6qYRiSkI_ = 1;

                                                            }else {

                                                            $a = str_replace(':80/', '/', $a);

                                                            $a = str_replace(':443/', '/', $a);

                                                            if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$whnReUl5sID_8i).$a;

                                                            if($grab_parameters['xs_inc_ajax'] && strstr($a,'#!')){

                                                            $mdOyL9CXFQ = preg_replace('#\#.*$#', '', $mdOyL9CXFQ);

                                                            if($a[0] != '/' && !strstr($a,':/'))

                                                            $a = $mdOyL9CXFQ . preg_replace('#^([^\#]*?/)?([^/\#]*)?(\#.*)?$#', '$2', $whnReUl5sID_8i).$a;

                                                            }

                                                            if(preg_match('#^https?(:|&\#58;)#is',$a)){

                                                            if(preg_match('#://[^/]*$#is',$a))

                                                            $a .= '/';

                                                            $a = preg_replace('#(://[^/]*/)/#is','$01',$a);

                                                            }

                                                            else if($a&& $a[0]=='/')$a = $r7kkCXZmM.$a;

                                                            else $a = $mdOyL9CXFQ.$a;

                                                            if($a[0]=='/')$a = $r7kkCXZmM.$a;

                                                            $a=str_replace('/./','/',$a);

                                                            $a=preg_replace('#/\.$#','/',$a);

                                                            if(substr($a,-2) == '..')$a.='/';

                                                            if(strstr($a,'../')){

                                                            preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa);

                                                            do{

                                                            $ap = $aa[2];

                                                            $aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1);

                                                            }while($aa[2]!=$ap);

                                                            $a = $aa[1].$aa[2];

                                                            }

                                                            $a = preg_replace('#/\./#','/',$a);

                                                            $a = preg_replace('#([^&])\#'.($grab_parameters['xs_inc_ajax']?'([^\!]|$)':'').'.*$#','$01',$a);


                                                            $a = preg_replace('#^(/)/+#','\\1',$a);

                                                            $a = preg_replace('#[\r\n]+#s','',$a);


                                                            if($grab_parameters['xs_cleanurls'])

                                                            $a = @preg_replace($grab_parameters['xs_cleanurls'],'',$a);

                                                            if($grab_parameters['xs_lowercase_urls']){

                                                            $a = strtolower($a);

                                                            }

                                                            if($grab_parameters['xs_custom_replace']){

                                                            global $NwRtNLZbZeBYCC7G9;

                                                            if(!isset($NwRtNLZbZeBYCC7G9)){

                                                            $_ar = preg_split('#[\r\n]+#', trim($grab_parameters['xs_custom_replace']));

                                                            $NwRtNLZbZeBYCC7G9 = array();

                                                            foreach($_ar as $v){

                                                            $me = explode(' ', $v);

                                                            if($me[0]&& $me[1])$NwRtNLZbZeBYCC7G9['#'.$me[0].'#'] = $me[1];

                                                            }

                                                            }

                                                            if($NwRtNLZbZeBYCC7G9){

                                                            $a = @preg_replace(array_keys($NwRtNLZbZeBYCC7G9),array_values($NwRtNLZbZeBYCC7G9),$a);

                                                            }

                                                            }

                                                            if($grab_parameters['xs_cleanpar'])

                                                            {

                                                            do {

                                                            $IQtFMf8egLC = $a;

                                                            $a = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,\*]*$#i','',$a);

                                                            $a = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,\*]*&#i','$1',$a);

                                                            }while($a != $IQtFMf8egLC);

                                                            $a = @preg_replace('#\?\&?$#','',$a);

                                                            }


                                                            $CdAC6qYRiSkI_ = (strtolower(substr($a,0,strlen($this->XJtWAVmBTXcICX4yKLW)) ) != strtolower($this->XJtWAVmBTXcICX4yKLW)) ? 1 : 0;

                                                            if(($CdAC6qYRiSkI_==1) && $grab_parameters['xs_allow_subdomains']){

                                                            $hcGHdOKuTfzh = @parse_url($a);

                                                            if($hcGHdOKuTfzh['host'] &&


                                                            preg_match($qq='#^(.*?\.)?'.preg_quote($this->cbAmyIinmC($vAVVgklzv['host']),'#').'$#', $hcGHdOKuTfzh['host'])

                                                            ){

                                                            $CdAC6qYRiSkI_ = 2;

                                                            }

                                                            }

                                                            if(($CdAC6qYRiSkI_==1) && $grab_parameters['xs_allow_extscheme']){

                                                            $_i2 = preg_replace('#^.*?://#','',$this->XJtWAVmBTXcICX4yKLW);

                                                            $_a2 = preg_replace('#^.*?://#','',$a);

                                                            if(!$CdAC6qYRiSkI_ = strtolower(substr($_a2,0,strlen($_i2)) ) != strtolower($_i2))

                                                            $CdAC6qYRiSkI_ = 2;

                                                            }

                                                            if(($CdAC6qYRiSkI_==1) && $b381QxsWK) {


                                                            $zIhAWBLQQgZfcnf6 = $this->dKG3tu1DO($b381QxsWK);


                                                            if($zIhAWBLQQgZfcnf6 && preg_match('#('.$zIhAWBLQQgZfcnf6.')#', $a))

                                                            $CdAC6qYRiSkI_ = 2;

                                                            }

                                                            }

                                                            vkLR44N3EhIoTE("<br/>($a -- [$a1] -- (isext) $CdAC6qYRiSkI_ - (initdir) ".$this->XJtWAVmBTXcICX4yKLW." (iurl) $whnReUl5sID_8i - (top) $r7kkCXZmM - (ibase) $mdOyL9CXFQ - (tophosts) [".$this->cbAmyIinmC($vAVVgklzv['host']).", ".$hcGHdOKuTfzh['host']."])<br>\n",3);

                                                            return $CdAC6qYRiSkI_;

                                                            }

                                                            function Wl34h4cTGnxwfTe8tK($whnReUl5sID_8i){

                                                            return strstr($whnReUl5sID_8i,'://') ? $whnReUl5sID_8i : $this->XJtWAVmBTXcICX4yKLW . $whnReUl5sID_8i;

                                                            }

                                                            function LmI8z6dXpXyZk($lduo6GjBWebKy68P, $whnReUl5sID_8i, $IqJNQizw7kM0KkmtT2Y = true){

                                                            global $iQpw0KAL5jJxXK0XcE,$grab_parameters;

                                                            $yETh9nESiRRj = $IqJNQizw7kM0KkmtT2Y;

                                                            if($grab_parameters[$lduo6GjBWebKy68P]){

                                                            if(!isset($iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P])){

                                                            $iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P] = $grab_parameters[$lduo6GjBWebKy68P];

                                                            if(!preg_match('#[\*\$]#',$iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P]))

                                                            $iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P] = preg_quote($iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P],'#');

                                                            $iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P] = '#'.str_replace(' ', '|', $iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P]).'#';

                                                            }

                                                            $yETh9nESiRRj = preg_match($iQpw0KAL5jJxXK0XcE[$lduo6GjBWebKy68P],$whnReUl5sID_8i);

                                                            }

                                                            return $yETh9nESiRRj;

                                                            }

                                                            function dKG3tu1DO($GN2iamQX97S){

                                                            if(!isset($this->xh7xGXSeUzeCP[$GN2iamQX97S])){

                                                            $this->xh7xGXSeUzeCP[$GN2iamQX97S] = trim($GN2iamQX97S) ?

                                                            preg_replace(

                                                            '#(^|\|)/#',

                                                            '$01(?:^|/)',

                                                            preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($GN2iamQX97S),'*')?$s:preg_quote($s,'#')))

                                                            ) : '';

                                                            }

                                                            return $this->xh7xGXSeUzeCP[$GN2iamQX97S];

                                                            }

                                                            function Y6u4quQjciw($Bxzmy7heJ4eN8W, $whnReUl5sID_8i) {

                                                            $f = false;

                                                            if($Bxzmy7heJ4eN8W)

                                                            foreach($Bxzmy7heJ4eN8W as $bm)

                                                            {

                                                            if($f = ($f || preg_match('#^('.$bm.')#', $whnReUl5sID_8i, $_imatch)))

                                                            break;

                                                            }

                                                            return $f ? $_imatch[1] : 0;

                                                            }

                                                            function jInxFiW5A($whnReUl5sID_8i) {

                                                            $bm = $this->Y6u4quQjciw($this->uPpYhEkqINo8sf, $whnReUl5sID_8i);

                                                            if($bm)

                                                            {

                                                            $DisikiAlSl0XXp = $this->Y6u4quQjciw($this->botmatch_allow, $whnReUl5sID_8i);

                                                            return $DisikiAlSl0XXp ? false : $bm;

                                                            }

                                                            return false;

                                                            }

                                                            function QaHti3kjXdppde2(&$whnReUl5sID_8i) {

                                                            global $grab_parameters;

                                                            $us = '';

                                                            if(isset($this->x15LfqXVsH[$whnReUl5sID_8i]))

                                                            $whnReUl5sID_8i =$this->x15LfqXVsH[$whnReUl5sID_8i];

                                                            $f = $this->efXLLuVoF && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$whnReUl5sID_8i);

                                                            if($f&&!$us)$us = 'excl-ext';

                                                            if($this->dHTbiGOWabI&&!$f)$f=$f||@preg_match('#('.$this->dHTbiGOWabI.')#',$whnReUl5sID_8i);

                                                            if($f&&!$us)$us = 'excl-mask';

                                                            if($this->jQoJt4jbidpLqql5 && $f && $grab_parameters['xs_incl_force'])

                                                            $f = !preg_match('#('.$this->jQoJt4jbidpLqql5.')#',$whnReUl5sID_8i);

                                                            $f = $f || $this->jInxFiW5A($this->v0ytSBWER . $whnReUl5sID_8i);

                                                            if($f&&!$us)$us = 'excl-bot';

                                                            $f2 = false;

                                                            $aOvWXeFfIfo = false;

                                                            if(!$f)

                                                            {

                                                            $f2 = $this->L2rCBT7py && preg_match('#'.$grab_parameters['xs_inc_skip'].'#i',$whnReUl5sID_8i);


                                                            if($this->jQoJt4jbidpLqql5 && !$f2) {

                                                            $f2 = $f2||(preg_match('#('.$this->jQoJt4jbidpLqql5.')#',$whnReUl5sID_8i));


                                                            }

                                                            if($grab_parameters['xs_parse_only'] && !$f2 && $whnReUl5sID_8i && ($whnReUl5sID_8i!='/'))

                                                            {


                                                            $f2 = $f2 || !$this->LmI8z6dXpXyZk('xs_parse_only', $whnReUl5sID_8i, true);


                                                            }

                                                            }

                                                            $f3 = false;

                                                            if($this->noincmask)$f3=@preg_match('#('.$this->noincmask.')#',$whnReUl5sID_8i);

                                                            return array('f' => $f, 'f2' => $f2, 'f3' => $f3, 'uskip' => $us);

                                                            }

                                                            function OGyl6W6MLC6wtI1AP(&$whnReUl5sID_8i) {


                                                            global $grab_parameters;

                                                            $f = $this->LmI8z6dXpXyZk('xs_botapi_exclude', $whnReUl5sID_8i, false) || // matches exclude

                                                            !$this->LmI8z6dXpXyZk('xs_botapi_parse_only', $whnReUl5sID_8i, true); // OR not matches "parse only"

                                                            return $f;

                                                            }

                                                            function SC4Q4sTng7g($aOvWXeFfIfo) {

                                                            return ($aOvWXeFfIfo);


                                                            }

                                                            function ZIQK3KPtc0($aOvWXeFfIfo) {

                                                            return YtUbUOw8VmSbl0RZ($aOvWXeFfIfo);

                                                            }

                                                            function qCZp4N9BOU3PSSkc($KF_FZ0A6txR, $whnReUl5sID_8i){

                                                            global $grab_parameters;

                                                            $szEe9KoKI = max(1, intval($grab_parameters['xs_maxref']));

                                                            if(!isset($this->ref_links_tmp[$KF_FZ0A6txR]) )

                                                            $this->ref_links_tmp[$KF_FZ0A6txR] = array();

                                                            if(count($this->ref_links_tmp[$KF_FZ0A6txR]) < $szEe9KoKI)

                                                            $this->ref_links_tmp[$KF_FZ0A6txR][] = $whnReUl5sID_8i;

                                                            if(

                                                            $grab_parameters['xs_ref_list_store'] &&

                                                            ($_rlmax = $grab_parameters['xs_ref_list_max'])

                                                            ){

                                                            if(!isset($this->ref_links_list[$KF_FZ0A6txR]) && count($this->ref_links_list)<$_rlmax){

                                                            $this->ref_links_list[$KF_FZ0A6txR] = array();

                                                            }

                                                            if(isset($this->ref_links_list[$KF_FZ0A6txR]))

                                                            {

                                                            $this->ref_links_list[$KF_FZ0A6txR][-1]++;

                                                            if(count($this->ref_links_list[$KF_FZ0A6txR]) <= $szEe9KoKI) {

                                                            if(!in_array($this->dFmphpI8PB__iRNY, $this->ref_links_list[$KF_FZ0A6txR]))

                                                            $this->ref_links_list[$KF_FZ0A6txR][] = $whnReUl5sID_8i;

                                                            }

                                                            }

                                                            }

                                                            }



                                                            function RDFNNoqQR($VfoZIHwvppID93dLX) {

                                                            global $grab_parameters,$UJjrKVyISUwJOP6Upz,$K5qP9_ZsHx;


                                                            error_reporting(E_ALL&~E_NOTICE);

                                                            $this->VfoZIHwvppID93dLX = $VfoZIHwvppID93dLX;

                                                            @set_time_limit($grab_parameters['xs_exec_time']);

                                                            if($this->VfoZIHwvppID93dLX['bgexec'])

                                                            {

                                                            ignore_user_abort(true);

                                                            }

                                                            register_shutdown_function('UZFLetRTaaTZJ7i');

                                                            if(function_exists('ini_set'))

                                                            {

                                                            @ini_set("zlib.output_compression", 0);

                                                            @ini_set("output_buffering", 0);

                                                            }


                                                            $this->MYQUhltsJ0fFEqA(0,true);


                                                            $this->MQyFhCsDG = microtime(true);

                                                            $starttime = $nHv6wISm3pAu2P = time();

                                                            $K5qP9_ZsHx = $this->nettime = 0;

                                                            $this->pt4sSPNr0D6OHM = $this->VfoZIHwvppID93dLX['initurl'];

                                                            $this->y5E6XiZB3w2DW4XFY = $this->VfoZIHwvppID93dLX['maxpg']>0 ? $this->VfoZIHwvppID93dLX['maxpg'] : 1E10;

                                                            $ObUlvdOFaX7qEqqa65d = $this->VfoZIHwvppID93dLX['maxdepth'] ? $this->VfoZIHwvppID93dLX['maxdepth'] : -1;

                                                            $this->BbatTlcCA3qF6 = $this->VfoZIHwvppID93dLX['progress_callback'];

                                                            $this->dHTbiGOWabI = $this->dKG3tu1DO($grab_parameters['xs_excl_urls']);

                                                            $this->jQoJt4jbidpLqql5 = $this->dKG3tu1DO($grab_parameters['xs_incl_urls']);

                                                            $this->noincmask = $this->dKG3tu1DO($grab_parameters['xs_noincl_urls']);

                                                            $this->baseincmask = $this->dKG3tu1DO($grab_parameters['xs_prev_sm_incl']);

                                                            $this->basecachemask = $this->dKG3tu1DO($grab_parameters['xs_prev_sm_cache']);

                                                            $DThtFRYoxVIvqEhuC = $UFIKR2PfS = array();

                                                            $mPmaQuDsJizWRce2 = '';

                                                            $nSOAGVWxzn2 = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']);

                                                            $this->allowcode = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#';

                                                            $this->badreqcode = '#400|429'.($grab_parameters['xs_badreq_httpcode']?'|'.$grab_parameters['xs_badreq_httpcode']:'').'#';

                                                            $this->interruptcode = (($_tmp=$grab_parameters['xs_interrupt_httpcode'])?'#'.$_tmp.'#':'');

                                                            if($grab_parameters['xs_memsave'])

                                                            {

                                                            if(!file_exists(UsDwe8sQl))

                                                            mkdir(UsDwe8sQl, 0777);

                                                            else

                                                            if($this->VfoZIHwvppID93dLX['resume']=='')

                                                            Hcet3S4jmDKp69l(UsDwe8sQl, '.txt');

                                                            }

                                                            foreach($nSOAGVWxzn2 as $ia)

                                                            if($ia)

                                                            {

                                                            $is = explode(',', $ia);

                                                            if($is[0][0]=='$')

                                                            $fhQZMYX8FgVU = substr($is[0], 1);

                                                            else

                                                            $fhQZMYX8FgVU = str_replace(array('\\^', '\\$'), array('^','$'), preg_quote($is[0],'#'));

                                                            $UFIKR2PfS[] = $fhQZMYX8FgVU;


                                                            $DThtFRYoxVIvqEhuC[] =

                                                            array('lm' => $is[1], 'f' => $is[2], 'p' => $is[3]);

                                                            }

                                                            if($UFIKR2PfS)

                                                            $mPmaQuDsJizWRce2 = '('.implode(')|(',$UFIKR2PfS).')';

                                                            $YIGOBdW4UwNwZA = parse_url($this->pt4sSPNr0D6OHM);

                                                            if(!$YIGOBdW4UwNwZA['path']){$this->pt4sSPNr0D6OHM.='/';$YIGOBdW4UwNwZA = parse_url($this->pt4sSPNr0D6OHM);}

                                                            $VZ12kfFbqq0LKfCpL = 0;

                                                            do {

                                                            $pNZSwatJOAqRvqu = $UJjrKVyISUwJOP6Upz->fetch($this->pt4sSPNr0D6OHM, 0, true, false, '', array('getinfo'=>true));// the first request is to skip session id

                                                            $Yr9IdZt7_1QZHU4f = !preg_match($this->allowcode,$pNZSwatJOAqRvqu['code']);

                                                            }while($Yr9IdZt7_1QZHU4f && ($VZ12kfFbqq0LKfCpL++ <2));



                                                            $this->runstate['info'] = $pNZSwatJOAqRvqu['info'];

                                                            if($Yr9IdZt7_1QZHU4f)

                                                            {

                                                            $Yr9IdZt7_1QZHU4f = '';

                                                            foreach($pNZSwatJOAqRvqu['headers'] as $k=>$v)

                                                            $Yr9IdZt7_1QZHU4f .= $k.': '.$v.'<br />';

                                                            return array(

                                                            'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$this->pt4sSPNr0D6OHM.''.

                                                            ($pNZSwatJOAqRvqu['errormsg']?'<br><b>Error message:</b> '.$pNZSwatJOAqRvqu['errormsg']:'').

                                                            '<br><b>HTTP Code:</b><br>'.$pNZSwatJOAqRvqu['protoline'].

                                                            '<br><b>HTTP headers:</b><br>'.$Yr9IdZt7_1QZHU4f.

                                                            '<br><b>HTTP output:</b><br>'.$pNZSwatJOAqRvqu['content']

                                                            ,

                                                            );

                                                            }

                                                            $this->p3vZTa3uCvnUpt6($pNZSwatJOAqRvqu['last_url'], $this->pt4sSPNr0D6OHM);

                                                            $this->pt4sSPNr0D6OHM = $pNZSwatJOAqRvqu['last_url'];



                                                            $this->urls_completed = array();

                                                            $urls_ext = array();

                                                            $this->urls_404 = array();

                                                            $this->r7kkCXZmM = $YIGOBdW4UwNwZA['scheme'].'://'.$YIGOBdW4UwNwZA['host'].((!$YIGOBdW4UwNwZA['port'] || ($YIGOBdW4UwNwZA['port']=='80'))?'':(':'.$YIGOBdW4UwNwZA['port']));

                                                            $this->num_processed = $this->tsize = $retrno = $m8HTpd_0s = $N0PX75BqtEcrjK = $this->fetch_no = 0;

                                                            $this->XJtWAVmBTXcICX4yKLW = kh2hwYgXZfTHhnji2Hp($this->r7kkCXZmM.'/', QKuF4bQRKP7nw_UDcU($YIGOBdW4UwNwZA['path']));

                                                            $zt5SdssJ2ruKuB = parse_url($this->XJtWAVmBTXcICX4yKLW);

                                                            $this->v0ytSBWER = preg_replace('#^.+://[^/]+#', '', $this->XJtWAVmBTXcICX4yKLW);

                                                            $this->dRZNnqQ1_jjsHXyWr = $UJjrKVyISUwJOP6Upz->fetch($this->pt4sSPNr0D6OHM,0,true,true);

                                                            $rRLhr_xXo5 = str_replace($this->XJtWAVmBTXcICX4yKLW,'',$this->pt4sSPNr0D6OHM);

                                                            $urls_list_full = array($rRLhr_xXo5=>1);

                                                            if(!$rRLhr_xXo5)$rRLhr_xXo5='';

                                                            $urls_list = array($rRLhr_xXo5=>1);

                                                            $urls_list2 = $urls_list_skipped = array();

                                                            $this->x15LfqXVsH = array();

                                                            $this->links_level = 0;

                                                            $zoHtm2VLB = $this->ref_links_tmp = $this->ref_links_tmp2 = $this->ref_links_list = array();

                                                            $cxB6VOAXb9rZlRg7Gh = 0;



                                                            $gyXDN4HLn0 = $this->y5E6XiZB3w2DW4XFY;

                                                            if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20;

                                                            $this->uPpYhEkqINo8sf = array();

                                                            $this->botmatch_allow = array();

                                                            if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])

                                                            {

                                                            $h1y09q4tisyr5MRcb = $UJjrKVyISUwJOP6Upz->fetch($this->r7kkCXZmM.'/robots.txt');

                                                            if($this->r7kkCXZmM.'/' != $this->XJtWAVmBTXcICX4yKLW)

                                                            {



                                                            }

                                                            $ra=preg_split('#user-agent:\s*#im',$h1y09q4tisyr5MRcb['content']);

                                                            $OWV7dMMypIpOpDg=$YSfKHhiOxxRMiLYPmt=array();

                                                            $frPj9g0eEcRwPs = false;

                                                            for($i=1;$i<count($ra);$i++){

                                                            preg_match('#^(\S+)(.*)$#s',$ra[$i],$fOu4ix8nRfXogpzMch);

                                                            $FFRRUtstdX = preg_match('#^googlebot$#is',$fOu4ix8nRfXogpzMch[1]);

                                                            $hQjyrv_s8XoJIPPz = ($fOu4ix8nRfXogpzMch[1]=='*');

                                                            if(!$hQjyrv_s8XoJIPPz&&!$FFRRUtstdX)

                                                            continue;

                                                            if($hQjyrv_s8XoJIPPz && $frPj9g0eEcRwPs)

                                                            continue;

                                                            if($FFRRUtstdX){


                                                            $frPj9g0eEcRwPs = true;

                                                            $OWV7dMMypIpOpDg = $YSfKHhiOxxRMiLYPmt = array();

                                                            }

                                                            preg_match_all('#^disallow:\s*([^\#\r\n]*)#im',$fOu4ix8nRfXogpzMch[2],$rm);

                                                            for($pi=0;$pi<count($rm[1]);$pi++)

                                                            if($rm[1][$pi])

                                                            $OWV7dMMypIpOpDg[] =

                                                            str_replace('\\$','$',

                                                            str_replace(' ','',

                                                            str_replace('\\*','.*',

                                                            preg_quote($rm[1][$pi],'#')

                                                            )));

                                                            preg_match_all('#^allow:\s*(\S*)#im',$fOu4ix8nRfXogpzMch[2],$rm);

                                                            for($pi=0;$pi<count($rm[1]);$pi++)

                                                            if($rm[1][$pi] && ($rm[1][$pi]!='/')) {

                                                            $YSfKHhiOxxRMiLYPmt[] =

                                                            str_replace('\\$','$',

                                                            str_replace('\\*','.*',

                                                            str_replace(' ','',

                                                            preg_quote($rm[1][$pi],'#')

                                                            )));

                                                            }

                                                            }

                                                            for($i=0;$i<count($OWV7dMMypIpOpDg);$i+=200)

                                                            $this->uPpYhEkqINo8sf[]=implode('|', array_slice($OWV7dMMypIpOpDg, $i,200));

                                                            for($i=0;$i<count($YSfKHhiOxxRMiLYPmt);$i+=200)

                                                            $this->botmatch_allow[]=implode('|', array_slice($YSfKHhiOxxRMiLYPmt, $i,200));

                                                            }

                                                            if($grab_parameters['xs_inc_ajax'])

                                                            $grab_parameters['xs_proto_skip'] = str_replace(

                                                            '\#', '\#(?:[^\!]|$)', $grab_parameters['xs_proto_skip']);

                                                            $this->efXLLuVoF = $grab_parameters['xs_exc_skip']!='\\.()';

                                                            $this->L2rCBT7py = $grab_parameters['xs_inc_skip']!='\\.()';

                                                            $grab_parameters['xs_inc_skip'] .= '(?:$|\?)';

                                                            $grab_parameters['xs_exc_skip'] .= '(?:$|\?)';

                                                            if($grab_parameters['xs_debug']) {

                                                            $_GET['ddbg']=1;

                                                            jq0_dPdwEeVJx();

                                                            }

                                                            $SCGPJTgqZmX8OnRKi = 0;

                                                            $this->nmnHUFMGxB8Wvcgi();

                                                            $this->num_urls_processed_in_current_batch = 0;

                                                            $this->num_links_current_batch = 1;


                                                            MaCE8VvWEtAgu1aWX7(N0MW0Wx6mQ,'');

                                                            $em6ve6zQigPwbfb = false;

                                                            if($this->VfoZIHwvppID93dLX['resume']!=''){

                                                            vkLR44N3EhIoTE("\nRestoring session\n");

                                                            $jpy9uM8UAI1rKgZ = @dvcNBqqHGk66v(tSVH9XRZbaKn(bvxoWXIyZCcaoVlsa . SJOvDnZG6, true));

                                                            if($jpy9uM8UAI1rKgZ)

                                                            {

                                                            $em6ve6zQigPwbfb = true;

                                                            echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$jpy9uM8UAI1rKgZ['time']).')'."\n";

                                                            unset($jpy9uM8UAI1rKgZ['sm_base']);

                                                            extract($jpy9uM8UAI1rKgZ);

                                                            foreach($jpy9uM8UAI1rKgZ as $k=>$v){

                                                            if(isset($this->$k)){

                                                            $this->$k=$v;

                                                            unset($$v);

                                                            }

                                                            }

                                                            $this->MQyFhCsDG-=$this->ctime;

                                                            $SCGPJTgqZmX8OnRKi = $this->ctime;

                                                            unset($jpy9uM8UAI1rKgZ);

                                                            }

                                                            }

                                                            $JXb7P0BCKjALfFY2z = 0;

                                                            $this->KCutKSZHXX($em6ve6zQigPwbfb);

                                                            if($_murls = $grab_parameters['xs_moreurls_test']){

                                                            $this->mu = preg_split('#[\r\n]+#', $_murls);

                                                            foreach($this->mu as $BAwuFDFy6thBQQT_){

                                                            $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($BAwuFDFy6thBQQT_, $this->XJtWAVmBTXcICX4yKLW);

                                                            if($CdAC6qYRiSkI_!=1) {

                                                            $BAwuFDFy6thBQQT_ = $this->MeaBM9UY1($BAwuFDFy6thBQQT_);

                                                            $urls_list[$BAwuFDFy6thBQQT_]++;

                                                            }

                                                            }

                                                            }

                                                            if($em6ve6zQigPwbfb){


                                                            }else

                                                            {


                                                            if($_mu_s = $grab_parameters['xs_moreurls']) {

                                                            $this->mu = preg_split('#[\r\n]+#', $_mu_s);

                                                            foreach($this->mu as $BAwuFDFy6thBQQT_){

                                                            $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($BAwuFDFy6thBQQT_, $this->XJtWAVmBTXcICX4yKLW);

                                                            if($CdAC6qYRiSkI_!=1) {

                                                            $BAwuFDFy6thBQQT_ = $this->MeaBM9UY1($BAwuFDFy6thBQQT_);

                                                            $urls_list[$BAwuFDFy6thBQQT_]++;

                                                            }

                                                            }

                                                            }

                                                            if($_mu_s = $grab_parameters['xs_moreurls_import']) {

                                                            $this->mu_imp = preg_split('#[\r\n]+#', $_mu_s);

                                                            foreach($this->mu_imp as $Wd6baXH9yZ_OfidESNj){

                                                            $_mdef = explode(';', $Wd6baXH9yZ_OfidESNj, 2);

                                                            $lAtgpg1by7e1go = array();

                                                            $MlPUoWlZP = $UJjrKVyISUwJOP6Upz->fetch($_mdef[1]);

                                                            switch($_mdef[0]){

                                                            case 'txt':

                                                            $lAtgpg1by7e1go = preg_split('#[\r\n]+#', $MlPUoWlZP['content']);

                                                            break;

                                                            }

                                                            foreach($lAtgpg1by7e1go as $BAwuFDFy6thBQQT_) {

                                                            $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($BAwuFDFy6thBQQT_, $this->XJtWAVmBTXcICX4yKLW);

                                                            if($CdAC6qYRiSkI_!=1) {

                                                            $BAwuFDFy6thBQQT_ = $this->MeaBM9UY1($BAwuFDFy6thBQQT_);

                                                            $urls_list[$BAwuFDFy6thBQQT_]++;

                                                            }

                                                            }

                                                            }

                                                            }

                                                            if($grab_parameters['xs_prev_sm_base']){

                                                            $A44mMfpwrmjIAlOnHKv = count($urls_list);

                                                            if(is_array($this->sm_base)

                                                            && ($grab_parameters['xs_prev_sm_base_min']<count($this->sm_base))

                                                            ){

                                                            if($this->baseincmask)

                                                            foreach($this->sm_base as $_u=>$_e){

                                                            if(preg_match('#('.$this->baseincmask.')#',$_u))

                                                            $urls_list[$_u]++;

                                                            }

                                                            }

                                                            else

                                                            $this->sm_base = array();

                                                            vkLR44N3EhIoTE("\nAdded in urls list: ".(count($urls_list)-$A44mMfpwrmjIAlOnHKv)."\n");

                                                            }

                                                            $JXb7P0BCKjALfFY2z = count($urls_list);

                                                            $urls_list_full = $urls_list;

                                                            $this->num_links_current_batch = count($urls_list);

                                                            }

                                                            $HcsWcIO4cL8fy = (PbuuB9uNZTP7yw('xs_use_botapi', false) && PbuuB9uNZTP7yw('xs_botapi_url', false));

                                                            $m7sJxx1ev = explode('|', $grab_parameters['xs_force_inc']);

                                                            $Uong0SyrzQThz = $dqcV3bHG3b66nM_DkxY = array();

                                                            $this->gGtCbFmm6 = count($this->urls_completed);

                                                            $this->Pdj58vIT8BE = count($urls_list2);

                                                            sleep(1); @rpQrAJcTTdcnSJ9(bvxoWXIyZCcaoVlsa.N0MW0Wx6mQ);

                                                            $this->sm_sessions[] = array(

                                                            'start' => time(),

                                                            'instance' => $grab_parameters['xs_instance_id']

                                                            );


                                                            $this->MYQUhltsJ0fFEqA(0,true);


                                                            if($urls_list)



                                                            do {

                                                            Ij3zzuYUboJ('pre',true);

                                                            Ij3zzuYUboJ('pre1');

                                                            if($Uong0SyrzQThz) {

                                                            $_ul = array_shift($Uong0SyrzQThz);

                                                            list($this->dFmphpI8PB__iRNY, $D2aBvrGfxJa6J32gUZJ) = $_ul;

                                                            }else

                                                            {

                                                            $this->dFmphpI8PB__iRNY = key($urls_list);$D2aBvrGfxJa6J32gUZJ=current($urls_list);next($urls_list);

                                                            }



                                                            $CVpBVRWbBf79VT5r = ($D2aBvrGfxJa6J32gUZJ>0 && $D2aBvrGfxJa6J32gUZJ<1) ? $D2aBvrGfxJa6J32gUZJ : 0;

                                                            $this->num_urls_processed_in_current_batch++;

                                                            vkLR44N3EhIoTE("\n[ ".$this->num_urls_processed_in_current_batch." - $this->dFmphpI8PB__iRNY, $D2aBvrGfxJa6J32gUZJ] \n");

                                                            unset($urls_list[$this->dFmphpI8PB__iRNY]);

                                                            $tGmEPv4KltKVsnWbcK = fELbf1EDRBgn($this->dFmphpI8PB__iRNY);

                                                            $qY5kf6Wb1yH3p = false;

                                                            $vTEKlITCu6Xk = '';

                                                            Ij3zzuYUboJ('pre1',true);

                                                            Ij3zzuYUboJ('pre2a');

                                                            $pNZSwatJOAqRvqu = array();

                                                            $cn = '';

                                                            $this->X76u1YKBMGYbXmzi6sH = $_fex = $this->QaHti3kjXdppde2($this->dFmphpI8PB__iRNY);

                                                            extract($_fex);

                                                            if($f)

                                                            $vTEKlITCu6Xk = $_fex['uskip'];



                                                            Ij3zzuYUboJ('pre2a',true);

                                                            Ij3zzuYUboJ('pre2b');

                                                            if(!$f && ($this->gGtCbFmm6>0) && ($aOvWXeFfIfo = $this->sm_base[$this->dFmphpI8PB__iRNY])){

                                                            $f2 = true;



                                                            }

                                                            if($this->dRZNnqQ1_jjsHXyWr && strstr($this->dRZNnqQ1_jjsHXyWr['content'],'header'))$f2 = true;

                                                            Ij3zzuYUboJ('pre2b',true);

                                                            do { // zero-while, while(false) to allow break only

                                                            $p0o_d8t8MHu9ndEDl = count($urls_list) + $this->Pdj58vIT8BE;

                                                            $WR2q_wKlVNCgy = $p0o_d8t8MHu9ndEDl + $this->gGtCbFmm6;


                                                            if(!$f && !$f2)

                                                            {

















                                                            $Q2yukaFyeBRHXGLoZz = ($this->y5E6XiZB3w2DW4XFY>=200000);

                                                            $SjbpuLnlQp = ($this->y5E6XiZB3w2DW4XFY<=1000);

                                                            if($SjbpuLnlQp && !$GLOBALS['forcepar_reset']){

                                                            $GLOBALS['forcepar_reset'] = true;

                                                            if($m7sJxx1ev[1])

                                                            $m7sJxx1ev[1] *= 10;

                                                            if($m7sJxx1ev[2])

                                                            $m7sJxx1ev[2] *= 10;

                                                            }

                                                            $czk29azxd1Qx35E8I = ($m7sJxx1ev[1] && (($this->ctime>$m7sJxx1ev[0]) && ($this->num_processed>$this->y5E6XiZB3w2DW4XFY*$m7sJxx1ev[1])));

                                                            $TKdRKpJNXqY = $m7sJxx1ev[2] && (

                                                            $Q2yukaFyeBRHXGLoZz && // large sites only

                                                            ($gyXDN4HLn0*$m7sJxx1ev[2]+1000)<

                                                            ($p0o_d8t8MHu9ndEDl - $this->num_urls_processed_in_current_batch));//-$JXb7P0BCKjALfFY2z));

                                                            vkLR44N3EhIoTE("force: (1,$czk29azxd1Qx35E8I)(2,$TKdRKpJNXqY) pleft: ".$gyXDN4HLn0.", maxpg: ".$this->y5E6XiZB3w2DW4XFY.", pleft*: ".($gyXDN4HLn0*$m7sJxx1ev[2]+1000).

                                                            " cmp: ".($p0o_d8t8MHu9ndEDl - $this->num_urls_processed_in_current_batch).

                                                            " / totc: ".($WR2q_wKlVNCgy).", proccur: ".$this->num_urls_processed_in_current_batch.

                                                            " | numproc: ".$this->num_processed. ", cmp2: ".$this->y5E6XiZB3w2DW4XFY*$m7sJxx1ev[1].

                                                            " -> fpar: ".implode(", ", $m7sJxx1ev)."\n",2);


                                                            $Fc46lzbxK0 = ($czk29azxd1Qx35E8I || $TKdRKpJNXqY);// && !$SjbpuLnlQp;

                                                            $_fp3 = $m7sJxx1ev[3];

                                                            if($SjbpuLnlQp)$_fp3*=2;

                                                            if(!$Fc46lzbxK0)

                                                            $Fc46lzbxK0 = ($_fp3 && $this->y5E6XiZB3w2DW4XFY && (($WR2q_wKlVNCgy>$this->y5E6XiZB3w2DW4XFY*$_fp3)));

                                                            if($Fc46lzbxK0){


                                                            }

                                                            if(!$SjbpuLnlQp)

                                                            $U91midzXMtJ = $m7sJxx1ev[3] && $this->y5E6XiZB3w2DW4XFY && (($this->num_processed>$this->y5E6XiZB3w2DW4XFY*$m7sJxx1ev[3]));

                                                            if($U91midzXMtJ){


                                                            $urls_list = $urls_list2 = array();

                                                            $this->Pdj58vIT8BE = 0;

                                                            $this->num_links_current_batch = 0;

                                                            }

                                                            $oPwjiOQ_nku = ($ObUlvdOFaX7qEqqa65d<=0 || $this->links_level<$ObUlvdOFaX7qEqqa65d);

                                                            if(!$zeumgAnl_ && $oPwjiOQ_nku)

                                                            {

                                                            Ij3zzuYUboJ('extract');

                                                            $ycP5d5mwE = microtime(true);

                                                            $hvQRqOrmXx8qn6 = kh2hwYgXZfTHhnji2Hp($this->XJtWAVmBTXcICX4yKLW, $this->dFmphpI8PB__iRNY);

                                                            if(PbuuB9uNZTP7yw('xs_http_parallel', false) || $HcsWcIO4cL8fy){

                                                            if(!$Uong0SyrzQThz && !isset($UJjrKVyISUwJOP6Upz->ZbGaQviS3w9tLCFjlp[$hvQRqOrmXx8qn6])){


                                                            $Uong0SyrzQThz = array();

                                                            $emqNoLMJwMsFBfkZ = array();

                                                            $_par = PbuuB9uNZTP7yw('xs_http_parallel_num', 10);

                                                            for($i=0;($i<$_par*5)&&(count($emqNoLMJwMsFBfkZ)<$_par);$i++) {

                                                            $_ul = $i ? key($urls_list) : $hvQRqOrmXx8qn6;

                                                            $_added_toqueue = false;


                                                            if($_ul) {

                                                            $_fex2 = $this->QaHti3kjXdppde2($_ul);

                                                            $_allow_u = !$_fex2['f'] && !$_fex2['f2'];

                                                            if($_allow_u){

                                                            if($HcsWcIO4cL8fy){

                                                            $_allow_u = !$this->OGyl6W6MLC6wtI1AP($_ul);

                                                            }

                                                            if($_allow_u){

                                                            $_u1 = kh2hwYgXZfTHhnji2Hp($this->XJtWAVmBTXcICX4yKLW, $_ul);

                                                            if(!isset($this->sm_base[$_u1])){

                                                            $emqNoLMJwMsFBfkZ[] = $_u1;

                                                            $_added_toqueue = true;

                                                            }

                                                            }

                                                            }

                                                            }

                                                            if($_added_toqueue) {

                                                            if($i>0){

                                                            next($urls_list); // move pointer

                                                            $Uong0SyrzQThz[] = array($_ul);

                                                            }

                                                            }else // skip scanning if non matching URL found and process as many as found at this point

                                                            break;

                                                            }

                                                            if($emqNoLMJwMsFBfkZ){

                                                            $UJjrKVyISUwJOP6Upz->QVa2_rdH3($emqNoLMJwMsFBfkZ);


                                                            }else {

                                                            $Uong0SyrzQThz = array();

                                                            }

                                                            }

                                                            }



                                                            vkLR44N3EhIoTE("<h4> { $hvQRqOrmXx8qn6 } </h4>\n");

                                                            $WH4dsdr7Jciva=0;

                                                            $m8HTpd_0s++;

                                                            $EzGtU1Us4xcz_Fm3 = false;

                                                            do {

                                                            $pNZSwatJOAqRvqu = $UJjrKVyISUwJOP6Upz->fetch($hvQRqOrmXx8qn6, 0, 0);


                                                            $this->p3vZTa3uCvnUpt6($pNZSwatJOAqRvqu['last_url'], $this->whnReUl5sID_8i);

                                                            $this->MYQUhltsJ0fFEqA();

                                                            $_to = $pNZSwatJOAqRvqu['flags']['socket_timeout'];

                                                            if($_to && ($zt5SdssJ2ruKuB['host']!=$pNZSwatJOAqRvqu['purl']['host'])){

                                                            $pNZSwatJOAqRvqu['flags']['error'] = 'Host doesn\'t match';

                                                            }

                                                            $_ic = intval($pNZSwatJOAqRvqu['code']);

                                                            $slNdAk1Levl = preg_match($this->badreqcode,$_ic);

                                                            $M3UkKfCl2Ig = $this->interruptcode && preg_match($this->interruptcode,$_ic);

                                                            $zWpDZDBLuADJZO5l = ($_ic == 403);

                                                            if($this->allowcode && preg_match($this->allowcode,$_ic)){

                                                            $slNdAk1Levl = $zWpDZDBLuADJZO5l = false;

                                                            }

                                                            $X9DhIsP39Q2Z2Ln_ = (($_ic == 301)||($_ic==302)) && ($hvQRqOrmXx8qn6 == $pNZSwatJOAqRvqu['last_url']);

                                                            if($M3UkKfCl2Ig) {

                                                            $X5O38TAuWv4FR = "Stop processing code [$_ic] - interrupt session";

                                                            $EzGtU1Us4xcz_Fm3 = true;

                                                            break;

                                                            }

                                                            if( !$pNZSwatJOAqRvqu['flags']['error'] &&

                                                            (($slNdAk1Levl || $zWpDZDBLuADJZO5l || $X9DhIsP39Q2Z2Ln_) || !$pNZSwatJOAqRvqu['code'] || $_to)

                                                            )

                                                            {

                                                            $WH4dsdr7Jciva++;

                                                            $_sl = $grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1;

                                                            if($pNZSwatJOAqRvqu['headers'] && ($_csl = $pNZSwatJOAqRvqu['headers']['retry-after']))

                                                            $_sl = min(120,max($_sl, $_csl + ($WH4dsdr7Jciva+1)*$_sl));


                                                            if(($_to) && $grab_parameters['xs_timeout_break']){

                                                            vkLR44N3EhIoTE("<p> # TIMEOUT - $_to #</p>\n");

                                                            if($WH4dsdr7Jciva==3){


                                                            if(strstr($_to,'read') ){

                                                            vkLR44N3EhIoTE("<p> read200 break?</p>\n");

                                                            break;

                                                            }

                                                            if($N0PX75BqtEcrjK++>5) {

                                                            $X5O38TAuWv4FR = "Too many timeouts detected - interrupt session";

                                                            $EzGtU1Us4xcz_Fm3 = true;

                                                            break;

                                                            }

                                                            vkLR44N3EhIoTE("<p> # MULTI TIMEOUT - SHORT TIME BREAK #</p>\n");

                                                            $_sl = 60;

                                                            $WH4dsdr7Jciva = 0;

                                                            }

                                                            }

                                                            $L1pZpKbDY = $X9DhIsP39Q2Z2Ln_?"(".$hvQRqOrmXx8qn6." => ".$pNZSwatJOAqRvqu['last_url'].")":"-";

                                                            vkLR44N3EhIoTE("<p> # RETRY - ".$pNZSwatJOAqRvqu['code']." - (code) ".(intval($pNZSwatJOAqRvqu['code']))." - error(".$pNZSwatJOAqRvqu['flags']['error'].") self-redir($L1pZpKbDY) badreq($slNdAk1Levl) forbreq($zWpDZDBLuADJZO5l) tmout($_to)# zZz $_sl</p>\n");

                                                            sleep($_sl);

                                                            }

                                                            else

                                                            break;

                                                            }while($WH4dsdr7Jciva<3);

                                                            if($EzGtU1Us4xcz_Fm3) {


                                                            $urls_list = array_merge(array($this->dFmphpI8PB__iRNY => $D2aBvrGfxJa6J32gUZJ), $urls_list);


                                                            break;

                                                            }

                                                            $this->fetch_no++;

                                                            Ij3zzuYUboJ('extract', true);

                                                            Ij3zzuYUboJ('analyze');

                                                            $this->ErNM9AZCiImK1Rc5 = microtime(true)-$ycP5d5mwE;

                                                            $this->nettime += $this->ErNM9AZCiImK1Rc5;


                                                            vkLR44N3EhIoTE("<hr>\n[[[ ".$pNZSwatJOAqRvqu['code']." ]]] - ".number_format($this->ErNM9AZCiImK1Rc5,2)."s (".number_format($UJjrKVyISUwJOP6Upz->x97htgfoi5yU,2).' + '.number_format($UJjrKVyISUwJOP6Upz->lVAWO2jYRbJsy,2).")\n".var_export($pNZSwatJOAqRvqu['headers'],1));

                                                            $K71jAZIWNQat1l9V = is_array($pNZSwatJOAqRvqu['headers']) ? strtolower($pNZSwatJOAqRvqu['headers']['content-type']) : '';

                                                            $LAiYk_Ui6llpVYCV_pZ = $this->oYWNfSZP9eu1TNn($K71jAZIWNQat1l9V) || !$K71jAZIWNQat1l9V;


                                                            if((strstr($K71jAZIWNQat1l9V,'application/') && strstr($K71jAZIWNQat1l9V,'pdf'))

                                                            ||strstr($K71jAZIWNQat1l9V,'/xml')

                                                            ||strstr($K71jAZIWNQat1l9V,'/rss')

                                                            ||strstr($K71jAZIWNQat1l9V,'text/plain')

                                                            )

                                                            {

                                                            $pNZSwatJOAqRvqu['content'] = '';

                                                            $LAiYk_Ui6llpVYCV_pZ = true;

                                                            }

                                                            $ygMY3yBAbWT = ($grab_parameters['xs_parse_swf'] && strstr($K71jAZIWNQat1l9V, 'shockwave-flash'));

                                                            $Dup2IY8R8  = ($grab_parameters['xs_parse_js'] && strstr($K71jAZIWNQat1l9V, 'javascript'));

                                                            if($K71jAZIWNQat1l9V && !$LAiYk_Ui6llpVYCV_pZ && !$ygMY3yBAbWT && !$Dup2IY8R8){

                                                            if(!$zeumgAnl_){

                                                            $vTEKlITCu6Xk = $K71jAZIWNQat1l9V;

                                                            continue;

                                                            }

                                                            }

                                                            $uov8mNwJcXEXRaYOj5g = array();

                                                            if($this->LmI8z6dXpXyZk('xs_crawl_proc_stripslash', $this->Wl34h4cTGnxwfTe8tK($this->dFmphpI8PB__iRNY), false)) {

                                                            $LAiYk_Ui6llpVYCV_pZ = true;

                                                            $pNZSwatJOAqRvqu['content'] = stripslashes($pNZSwatJOAqRvqu['content']);

                                                            }


                                                            if($pNZSwatJOAqRvqu['code']==404

                                                            || ($grab_parameters['xs_force_404']

                                                            && preg_match('#'.implode('|',preg_split('#\s+#',$grab_parameters['xs_force_404'])).'#', $this->dFmphpI8PB__iRNY)

                                                            )

                                                            ){

                                                            if($this->links_level>0)

                                                            if(!$grab_parameters['xs_chlog_list_max'] ||

                                                            count($this->urls_404) < $grab_parameters['xs_chlog_list_max']) {


                                                            $ci280STvN = $this->ref_links_tmp2[$this->dFmphpI8PB__iRNY];


                                                            if($ci280STvN && isset($this->x15LfqXVsH[$ci280STvN[0]])

                                                            && isset($this->ref_links_list[$ci280STvN[0]])

                                                            ){


                                                            $ci280STvN = array_merge($ci280STvN,

                                                            array_slice($this->ref_links_list[$ci280STvN[0]],1));


                                                            }

                                                            $this->urls_404[]=array($this->dFmphpI8PB__iRNY, $ci280STvN);

                                                            $this->addedcnt['bl'] = count($this->urls_404);

                                                            }

                                                            }


                                                            $cn = $pNZSwatJOAqRvqu['content'];


                                                            $this->tsize+=strlen($cn);


                                                            if(!$grab_parameters['xs_parse_js'])

                                                            if($z_uE1_nRkISYKJyg5VK = preg_replace('#<script.*?</script[^>]*>#is', '',$cn)){

                                                            $cn = $z_uE1_nRkISYKJyg5VK;

                                                            }

                                                            if($z_uE1_nRkISYKJyg5VK = preg_replace('#<style.*?</style>#is', '',$cn)){

                                                            $cn = $z_uE1_nRkISYKJyg5VK;

                                                            }

                                                            if($z_uE1_nRkISYKJyg5VK = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn)){

                                                            $cn = $z_uE1_nRkISYKJyg5VK;

                                                            }

                                                            vkLR44N3EhIoTE("\n\n<hr>\n\n$cn\n\n<hr>\n\n",4);//exit;

                                                            preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is', $cn, $bm);

                                                            $this->nmnHUFMGxB8Wvcgi($bm, $YIGOBdW4UwNwZA);

                                                            if($grab_parameters['xs_canonical'])

                                                            if(($hvQRqOrmXx8qn6 == $pNZSwatJOAqRvqu['last_url'])

                                                            &&

                                                            (

                                                            preg_match('#<link[^>]*rel=[\'"]canonical[\'"][^>]*\shref=[\'"]([^>]*?)[\'"]#is', $cn, $wgSkP8AJJ52TFuNG) ||

                                                            preg_match('#<link[^>]*\shref=[\'"]([^>]*?)[\'"][^>]*rel=[\'"]canonical[\'"]#is', $cn, $wgSkP8AJJ52TFuNG))

                                                            ){

                                                            $CdzX45seza = $this->UhyUUXN9ZzPeW1(trim($wgSkP8AJJ52TFuNG[1]));

                                                            $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($CdzX45seza, $this->dFmphpI8PB__iRNY);

                                                            if($hvQRqOrmXx8qn6 != $CdzX45seza){

                                                            $vTEKlITCu6Xk = 'canonical - '.$CdzX45seza;

                                                            }


                                                            if(PbuuB9uNZTP7yw('xs_canonical_nofollow', false))

                                                            $Fc46lzbxK0 = true;

                                                            }

                                                            if($pNZSwatJOAqRvqu['last_url']){

                                                            $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($pNZSwatJOAqRvqu['last_url'], $this->dFmphpI8PB__iRNY);

                                                            if($CdAC6qYRiSkI_ == 1){

                                                            $vTEKlITCu6Xk = 'lu (ext) - '.$pNZSwatJOAqRvqu['last_url'];

                                                            if($pNZSwatJOAqRvqu['last_url'] != $hvQRqOrmXx8qn6) {


                                                            continue;

                                                            }

                                                            }

                                                            }

                                                            $KF_FZ0A6txR = $this->MeaBM9UY1($pNZSwatJOAqRvqu['last_url']);

                                                            if(($hvQRqOrmXx8qn6 != $pNZSwatJOAqRvqu['last_url']))// && ($hvQRqOrmXx8qn6 != $pNZSwatJOAqRvqu['last_url'].'/'))

                                                            {

                                                            $this->x15LfqXVsH[$this->dFmphpI8PB__iRNY] = $pNZSwatJOAqRvqu['last_url']; $io=$this->dFmphpI8PB__iRNY;

                                                            if(strlen($KF_FZ0A6txR) <= 2048)

                                                            if(!isset($urls_list_full[$KF_FZ0A6txR])) {

                                                            $urls_list2[$KF_FZ0A6txR]++;

                                                            $this->qCZp4N9BOU3PSSkc($KF_FZ0A6txR, $this->dFmphpI8PB__iRNY);

                                                            }

                                                            $vTEKlITCu6Xk = 'lu - '.$pNZSwatJOAqRvqu['last_url'];

                                                            if(!$zeumgAnl_)continue;

                                                            }

                                                            if($this->allowcode && !preg_match($this->allowcode,$pNZSwatJOAqRvqu['code'])){

                                                            $vTEKlITCu6Xk = $pNZSwatJOAqRvqu['code'];

                                                            continue;

                                                            }

                                                            $retrno++;

                                                            if($zeumgAnl_||$Fc46lzbxK0) {


                                                            $LAiYk_Ui6llpVYCV_pZ = false;

                                                            }

                                                            Ij3zzuYUboJ('analyze',true);

                                                            if($ygMY3yBAbWT)

                                                            {

                                                            include_once alxOxyN3nuW_GHjHsq.'class.pfile.inc.php';

                                                            $am = new SWFParser();

                                                            $am->POwAT9n5Jfw($cn);

                                                            $bgYmeX9cSafS = $am->o4tgRKj7P07n8();

                                                            }else

                                                            if($LAiYk_Ui6llpVYCV_pZ || $Dup2IY8R8)

                                                            {

                                                            Ij3zzuYUboJ('parse');

                                                            if($Dup2IY8R8) {

                                                            $vTEKlITCu6Xk = 'js';

                                                            $f = true; // Do not index

                                                            preg_match_all('#(?:add|menu)item\s*\([^\)]*?["\']((?:\.+\/|http).*?)["\)\']#is', $cn, $L2HmGWTj9H);

                                                            $uov8mNwJcXEXRaYOj5g = $L2HmGWTj9H[1];

                                                            if(preg_match_all('#\(\s*(\{.*?["\']content["\']\s*\:\s*[\'"](.*?)[\'"]\s*\})\s*\)#is', $cn, $T9v4StE5HjmB1)){

                                                            foreach($T9v4StE5HjmB1[1] as $KjxgEJcBr4QgoK){

                                                            if($JtXpOJJGxe5xVq = stripslashes($KjxgEJcBr4QgoK)){

                                                            $uov8mNwJcXEXRaYOj5g = array_merge(

                                                            $uov8mNwJcXEXRaYOj5g, $this->v67O66mm3($JtXpOJJGxe5xVq));

                                                            }

                                                            }

                                                            }

                                                            }else {

                                                            $uov8mNwJcXEXRaYOj5g = $this->v67O66mm3($cn);

                                                            }

                                                            }

                                                            $uov8mNwJcXEXRaYOj5g = array_unique($uov8mNwJcXEXRaYOj5g);

                                                            $nn = $nt = 0;

                                                            reset($uov8mNwJcXEXRaYOj5g);

                                                            if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt']){

                                                            if(preg_match('#<meta[^>]*name=[\'"]robots[\'"][^>]*>#is',$cn,$_cm))

                                                            if(preg_match('#nofollow#is',$_cm[0]))

                                                            $uov8mNwJcXEXRaYOj5g = array();

                                                            }

                                                            if(!$this->runstate['charset']){

                                                            if(preg_match('#<meta[^>]*?charset\s*=\s*"?([^">]*)"#is',$cn, $mqnh2h10T))

                                                            $this->runstate['charset'] = $mqnh2h10T[1];

                                                            }

                                                            Ij3zzuYUboJ('parse', true);

                                                            Ij3zzuYUboJ('llist');

                                                            foreach($uov8mNwJcXEXRaYOj5g as $i=>$ll)

                                                            if($ll)

                                                            {

                                                            if(preg_match('#^https?%3a%2f#i', $ll))

                                                            $ll = urldecode($ll);

                                                            $a = $sa = trim($ll);

                                                            $a = str_replace('&#58;',':',$a);

                                                            if($grab_parameters['xs_proto_skip'] &&

                                                            (preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||

                                                            ($this->efXLLuVoF && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||

                                                            preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)

                                                            ))

                                                            continue;


                                                            if(strlen($a) > 4096) continue;

                                                            $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($a, $this->dFmphpI8PB__iRNY);

                                                            if($CdAC6qYRiSkI_ == 1)

                                                            {

                                                            if($grab_parameters['xs_extlinks'] &&

                                                            (!$grab_parameters['xs_extlinks_excl'] || !preg_match('#'.$this->dKG3tu1DO($grab_parameters['xs_extlinks_excl']).'#',$a)) &&

                                                            (!$grab_parameters['xs_ext_max'] || (count($urls_ext)<$grab_parameters['xs_ext_max']))

                                                            )

                                                            {

                                                            if(!$urls_ext[$a] &&

                                                            (!$grab_parameters['xs_ext_skip'] ||

                                                            !preg_match('#'.$grab_parameters['xs_ext_skip'].'#',$a)

                                                            )

                                                            )

                                                            $urls_ext[$a] = $hvQRqOrmXx8qn6;

                                                            }

                                                            continue;

                                                            }

                                                            $KF_FZ0A6txR = $CdAC6qYRiSkI_ ? $a : substr($a,strlen($this->XJtWAVmBTXcICX4yKLW));

                                                            $KF_FZ0A6txR = str_replace(' ', '%20', $KF_FZ0A6txR);


                                                            if($grab_parameters['xs_exclude_check'])

                                                            {

                                                            $_f=$_f2=false;

                                                            $_f=$this->dHTbiGOWabI&&preg_match('#('.$this->dHTbiGOWabI.')#',$KF_FZ0A6txR);

                                                            $_f = $_f || ($_fbot = $this->jInxFiW5A($this->v0ytSBWER.$KF_FZ0A6txR));


                                                            if($_f)continue;

                                                            }

                                                            if(strcmp($KF_FZ0A6txR, $this->dFmphpI8PB__iRNY) == 0)

                                                            continue;

                                                            $this->qCZp4N9BOU3PSSkc($KF_FZ0A6txR, $this->dFmphpI8PB__iRNY);

                                                            if($urls_list_full[$KF_FZ0A6txR])

                                                            continue;

                                                            vkLR44N3EhIoTE("<u>[[[acut] $KF_FZ0A6txR ]]]</u><br>\n",2);//exit;

                                                            $urls_list2[$KF_FZ0A6txR]++;

                                                            $nt++;

                                                            }

                                                            unset($uov8mNwJcXEXRaYOj5g);

                                                            Ij3zzuYUboJ('llist', true);

                                                            } // if(!$zeumgAnl_ && $oPwjiOQ_nku)

                                                            } // if(!$f && !$f2)


                                                            $this->Pdj58vIT8BE = count($urls_list2);

                                                            Ij3zzuYUboJ('analyze', true);

                                                            Ij3zzuYUboJ('post');

                                                            if(!$f){


                                                            if($f = $f || !$this->LmI8z6dXpXyZk('xs_incl_only', $this->Wl34h4cTGnxwfTe8tK($this->dFmphpI8PB__iRNY), true))

                                                            $vTEKlITCu6Xk = 'inclonly';

                                                            }

                                                            if($_fex['f3']) {

                                                            $f = true;

                                                            $vTEKlITCu6Xk = 'noinclmask';

                                                            }

                                                            if(!$f)

                                                            if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])

                                                            {

                                                            if(preg_match('#<meta[^>]*name=[\'"]robots[\'"][^>]*>#is',$cn,$_cm))

                                                            $f = preg_match('#noindex#is',$_cm[0]);

                                                            if($f){

                                                            if(strstr($cn, 'Incapsula'))

                                                            $vTEKlITCu6Xk = 'incapsula';

                                                            else

                                                            $vTEKlITCu6Xk = 'mrob';

                                                            }

                                                            }

                                                            if(!$f && !$vTEKlITCu6Xk)

                                                            {


                                                            if(!$aOvWXeFfIfo) {

                                                            $aOvWXeFfIfo = array(


                                                            'link' => preg_replace('#//+$#','/',

                                                            preg_replace('#^([^/\:\?]/)/+#','\\1',

                                                            (preg_match('#^\w+://#',$this->dFmphpI8PB__iRNY) ? $this->dFmphpI8PB__iRNY : $this->XJtWAVmBTXcICX4yKLW . $this->dFmphpI8PB__iRNY)

                                                            ))

                                                            );

                                                            $j0dFHpRFFgv = 1024;

                                                            if($grab_parameters['xs_makehtml']||$grab_parameters['xs_makeror']||$grab_parameters['xs_rssinfo']||$grab_parameters['xs_newsinfo'])

                                                            {

                                                            preg_match('#<title[^>]*?>([^<]*?)</title>#is', $pNZSwatJOAqRvqu['content'], $VBxlQDGObS);

                                                            $aOvWXeFfIfo['t'] = substr(trim(strip_tags($VBxlQDGObS[1])),0,$j0dFHpRFFgv);

                                                            }

                                                            if($grab_parameters['xs_metadesc']||$grab_parameters['xs_videoinfo'])

                                                            {

                                                            if(!preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $VQCJVDqLaVw))

                                                            preg_match('#<meta[^>]*content\s*=\s*["]?([^>\"]*)[^>]*?(?:http-equiv|name)\s*=\s*"?description#is', $cn, $VQCJVDqLaVw);

                                                            if($VQCJVDqLaVw[1])

                                                            $aOvWXeFfIfo['d'] = substr(trim($VQCJVDqLaVw[1]),0,$j0dFHpRFFgv);

                                                            }

                                                            if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])

                                                            $aOvWXeFfIfo['o'] = max(0,$this->links_level);

                                                            if($CVpBVRWbBf79VT5r)

                                                            $aOvWXeFfIfo['p'] = $CVpBVRWbBf79VT5r;

                                                            if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?last-modified[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $VQCJVDqLaVw)){

                                                            $aOvWXeFfIfo['clm'] = str_replace('@',' ',$VQCJVDqLaVw[1]);

                                                            }

                                                            if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?priority[^>]*content\s*=\s*["]?([\d\.]+)#is', $cn, $VQCJVDqLaVw)){

                                                            $aOvWXeFfIfo['p'] = $VQCJVDqLaVw[1];

                                                            }

                                                            if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?changefreq[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $VQCJVDqLaVw)){

                                                            $aOvWXeFfIfo['f'] = $VQCJVDqLaVw[1];

                                                            }else

                                                            if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?revisit-after[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $VQCJVDqLaVw)){

                                                            if(preg_match('#(\d+)\s*hour#',$VQCJVDqLaVw[1])){

                                                            $aOvWXeFfIfo['f'] = 'hourly';

                                                            }

                                                            if(preg_match('#(\d+)\s*month#',$VQCJVDqLaVw[1])){

                                                            $aOvWXeFfIfo['f'] = 'monthly';

                                                            }

                                                            if(preg_match('#(\d+)\s*day#',$VQCJVDqLaVw[1], $VQCJVDqLaVw)){

                                                            $d = $VQCJVDqLaVw[1]+0;

                                                            if($d<4)$aOvWXeFfIfo['f'] = 'daily';

                                                            else

                                                            if($d<22)$aOvWXeFfIfo['f'] = 'weekly';

                                                            else

                                                            $aOvWXeFfIfo['f'] = 'monthly';

                                                            }

                                                            }


                                                            if(preg_match('#'.$mPmaQuDsJizWRce2.'#',$this->Wl34h4cTGnxwfTe8tK($this->dFmphpI8PB__iRNY),$Ueg7jZnR2))

                                                            {

                                                            for($_i=0;$_i<count($Ueg7jZnR2);$_i++)

                                                            {

                                                            if($Ueg7jZnR2[$_i+1])

                                                            break;

                                                            }

                                                            if($DThtFRYoxVIvqEhuC[$_i]) {

                                                            if(!$aOvWXeFfIfo['clm'])

                                                            $aOvWXeFfIfo['clm'] = $DThtFRYoxVIvqEhuC[$_i]['lm'];

                                                            if(!$aOvWXeFfIfo['f'])

                                                            $aOvWXeFfIfo['f'] = $DThtFRYoxVIvqEhuC[$_i]['f'];

                                                            $aOvWXeFfIfo['p'] = $DThtFRYoxVIvqEhuC[$_i]['p'];

                                                            }

                                                            }

                                                            $xz = 'img';



                                                            $_maxi = $grab_parameters['xs_img_maxtot'];

                                                            $_maxi_tot = $_maxi ? $_maxi : $this->y5E6XiZB3w2DW4XFY*100;

                                                            if(!$_maxi_tot || ($this->addedcnt['i']<$_maxi_tot))

                                                            if($grab_parameters['xs_imginfo'])

                                                            {

                                                            $_imgext = '(?:jpg|png|gif|jpeg|bmp)';

                                                            preg_match_all('#<(?:(?:amp-)?img|div)[^>]*?(?:(?:src|data-(?:image|thumbnail|original))(?:set)?\s*=\s*|image\:\s*url\s*\(\s*)("([^">]+)|\'([^\'>]+)|([^\s\"\\\\>]+))(.*?>)#is', $cn, $Hfz9FZgE9F, PREG_SET_ORDER);

                                                            preg_match_all('#<a[^>]*\shref\s*=\s*[\'"]?([^>\'" ]*?\.'.$_imgext.')([\'" ][^>]*?>|>)#is', $cn, $L2HmGWTj9H, PREG_SET_ORDER);

                                                            $T9v4StE5HjmB1 = array();


                                                            $ai = $ae = array();

                                                            $Hfz9FZgE9F = array_merge($Hfz9FZgE9F, $L2HmGWTj9H, $T9v4StE5HjmB1);

                                                            $_maxi = $grab_parameters['xs_img_maxperpage'];

                                                            if(!$_maxi)$_maxi = 1000;

                                                            if($pNZSwatJOAqRvqu['inpdata'] && ($_dimg = $pNZSwatJOAqRvqu['inpdata']['img'])){

                                                            foreach($_dimg as $im)

                                                            {

                                                            $Hfz9FZgE9F[] = array('', $im['url']);

                                                            }

                                                            }

                                                            foreach($Hfz9FZgE9F as $im)

                                                            {

                                                            $_il = array($im[1]);

                                                            if(strstr($im[0],'srcset')){

                                                            $_il = preg_split('#(\s*,\s*|\s+[^\./]+\s*)#', $im[1]);

                                                            }

                                                            foreach($_il as $_ili)

                                                            if($_ili)

                                                            {

                                                            $_im1 = trim(preg_replace('#^[\'\"]+#','',$_ili));

                                                            $CdAC6qYRiSkI_ = $this->p3vZTa3uCvnUpt6($_im1, $this->dFmphpI8PB__iRNY,

                                                            $grab_parameters['xs_img_allow_domains']);

                                                            if($CdAC6qYRiSkI_ == 1)

                                                            continue;

                                                            if($grab_parameters['xs_imgincmask'])

                                                            if(!$this->LmI8z6dXpXyZk('xs_imgincmask', $_im1, true))

                                                            continue;

                                                            $PIdZaD4btWCtfA7On_ = $this->v0ytSBWER.substr($_im1,strlen($this->XJtWAVmBTXcICX4yKLW));

                                                            if($CdAC6qYRiSkI_ != 2)

                                                            {

                                                            if($this->jInxFiW5A($PIdZaD4btWCtfA7On_))

                                                            continue;

                                                            }

                                                            if(!$this->dHTbiGOWabI||!@preg_match('#('.$this->dHTbiGOWabI.')#',$PIdZaD4btWCtfA7On_))

                                                            {

                                                            preg_match('#(?:title|alt)\s*=\s*"(.*?)"#i', $im[0], $tm);

                                                            $t = trim($tm[1]);

                                                            if(!$imlist[md5($_im1.'-'.$t)]++)


                                                            {

                                                            $ai[] = array($_im1, $t);

                                                            }

                                                            }

                                                            if(count($ai) >= $_maxi)break;

                                                            }

                                                            }

                                                            if($ai){

                                                            $aOvWXeFfIfo['i'] = $ai;

                                                            $this->addedcnt['i'] += count($ai);

                                                            }

                                                            vkLR44N3EhIoTE("{ images added: ".count($ai)." }<br>\n",2);

                                                            }

                                                            $xz = '/img';



                                                            if($grab_parameters['xs_hreflang']){

                                                            if(

                                                            preg_match_all('#<link[^>]*rel\s*=\s*"alternate"[^>]*>#is', $cn, $G9M1u0W69Tn7MIsQ4, PREG_SET_ORDER)

                                                            ){

                                                            $_la = array();

                                                            foreach($G9M1u0W69Tn7MIsQ4 as $_alt1){

                                                            if(preg_match('#\s(hreflang|media)\s*=\s*"([^">]*?)"[^>]*>#is', $_alt1[0], $_alt)

                                                            && preg_match('#\s*href\s*=\s*[\'"]([^>]*?)[\'"]#is', $_alt1[0], $_hm)

                                                            ) {

                                                            $this->p3vZTa3uCvnUpt6($_hm[1], $this->dFmphpI8PB__iRNY);

                                                            $_la[] = array('t' => $_alt[1], 'l' => $_alt[2], 'u' => $_hm[1]);

                                                            }

                                                            }

                                                            $aOvWXeFfIfo['hl'] = $_la;

                                                            }

                                                            }

                                                            if($grab_parameters['xs_lastmod_notparsed'] && $f2)

                                                            {

                                                            $pNZSwatJOAqRvqu = $UJjrKVyISUwJOP6Upz->fetch($hvQRqOrmXx8qn6, 0, 1, false, "", array('req'=>'HEAD'));

                                                            }

                                                            if(!$aOvWXeFfIfo['lm'] && isset($pNZSwatJOAqRvqu['headers']['last-modified']))

                                                            $aOvWXeFfIfo['lm'] = $pNZSwatJOAqRvqu['headers']['last-modified'];

                                                            }

                                                            if(!$aOvWXeFfIfo['lm'] &&

                                                            preg_match('#<meta[^>]*?name\s*=\s*\"last-modified\" content\s*=\s*"?([^">]*)"#is',$pNZSwatJOAqRvqu['content'], $mqnh2h10T))

                                                            $aOvWXeFfIfo['lm'] = $mqnh2h10T[1];

                                                            Ij3zzuYUboJ('post', true);

                                                            Ij3zzuYUboJ('post-save1');

                                                            vkLR44N3EhIoTE("\n((include ".$aOvWXeFfIfo['link']."))<br />\n");

                                                            $qY5kf6Wb1yH3p = true;

                                                            if($grab_parameters['xs_memsave'])

                                                            {

                                                            RdIwDjy0tsAEGHTGLlZ($tGmEPv4KltKVsnWbcK, $aOvWXeFfIfo);

                                                            $this->urls_completed[] = $tGmEPv4KltKVsnWbcK;

                                                            }

                                                            else $this->urls_completed[] = $this->SC4Q4sTng7g($aOvWXeFfIfo);

                                                            $this->gGtCbFmm6++;

                                                            Ij3zzuYUboJ('post-save1',true);

                                                            Ij3zzuYUboJ('post-save2');

                                                            if($grab_parameters['xs_prev_sm_base']

                                                            && $this->basecachemask &&

                                                            preg_match('#('.$this->basecachemask.')#',$this->dFmphpI8PB__iRNY)){

                                                            $this->sm_base[$this->dFmphpI8PB__iRNY] = $aOvWXeFfIfo;

                                                            }

                                                            $gyXDN4HLn0 = $this->y5E6XiZB3w2DW4XFY - $this->gGtCbFmm6;

                                                            Ij3zzuYUboJ('post-save2',true);


                                                            }

                                                            }while(false);// zero-while

                                                            Ij3zzuYUboJ('post-progress1');

                                                            if($this->num_urls_processed_in_current_batch>=$this->num_links_current_batch)

                                                            {

                                                            $this->links_level++;

                                                            vkLR44N3EhIoTE("\n<br>NEXT LEVEL:$this->links_level ($this->num_urls_processed_in_current_batch>=$this->num_links_current_batch)<br />\n");

                                                            unset($urls_list);

                                                            $this->num_urls_processed_in_current_batch = 0;

                                                            $urls_list = $urls_list2;

                                                            reset($urls_list);


                                                            $urls_list_full += $urls_list;

                                                            $this->num_links_current_batch = count($urls_list);

                                                            unset($this->ref_links_tmp2);

                                                            $this->ref_links_tmp2 = $this->ref_links_tmp;

                                                            unset($this->ref_links_tmp); unset($urls_list2);

                                                            $this->ref_links_tmp = array();

                                                            $urls_list2 = array();


                                                            }

                                                            if(!$qY5kf6Wb1yH3p){


                                                            vkLR44N3EhIoTE("\n({skipped ".$this->dFmphpI8PB__iRNY." - $vTEKlITCu6Xk})<br />\n");

                                                            if(!$grab_parameters['xs_chlog_list_max'] ||

                                                            count($urls_list_skipped) < $grab_parameters['xs_chlog_list_max']) {

                                                            $urls_list_skipped[$this->dFmphpI8PB__iRNY] = $vTEKlITCu6Xk;

                                                            }

                                                            }

                                                            Ij3zzuYUboJ('post-progress1',true);

                                                            Ij3zzuYUboJ('post-progress2');

                                                            $this->num_processed++;

                                                            aJyB12jL0y();

                                                            $this->pl=min($this->num_links_current_batch - $this->num_urls_processed_in_current_batch,$gyXDN4HLn0);

                                                            $HRSLRFvCX = ($this->gGtCbFmm6>=$this->y5E6XiZB3w2DW4XFY) || ($this->num_urls_processed_in_current_batch >= $this->num_links_current_batch);

                                                            if(!$X5O38TAuWv4FR) {


                                                            if($X5O38TAuWv4FR = xAeKju_Og6BSV()){

                                                            if(!@rpQrAJcTTdcnSJ9(bvxoWXIyZCcaoVlsa.N0MW0Wx6mQ))

                                                            $X5O38TAuWv4FR=0;

                                                            }

                                                            }

                                                            Ij3zzuYUboJ('post-progress2',true);

                                                            Ij3zzuYUboJ('post-progress3');

                                                            $progpar = $this->MYQUhltsJ0fFEqA(false, $HRSLRFvCX||$X5O38TAuWv4FR);

                                                            Ij3zzuYUboJ('post-progress3',true);

                                                            Ij3zzuYUboJ('post-progress4');

                                                            if($grab_parameters['xs_exec_time'] &&

                                                            ((time()-$nHv6wISm3pAu2P) > $grab_parameters['xs_exec_time']) ){

                                                            $X5O38TAuWv4FR = 'Time limit exceeded - '.($grab_parameters['xs_exec_time']).' - '.(time()-$nHv6wISm3pAu2P);

                                                            }

                                                            if($grab_parameters['xs_savestate_time']>0 &&

                                                            (

                                                            ($this->ctime-$SCGPJTgqZmX8OnRKi>$grab_parameters['xs_savestate_time'])

                                                            || $HRSLRFvCX

                                                            || $X5O38TAuWv4FR

                                                            )

                                                            )

                                                            {

                                                            $SCGPJTgqZmX8OnRKi = $this->ctime;

                                                            vkLR44N3EhIoTE("(saving dump)<br />\n");

                                                            $jpy9uM8UAI1rKgZ = array();

                                                            $cfuioL30_lEkYW = array(

                                                            'num_urls_processed_in_current_batch',

                                                            'urls_list','urls_list2','num_links_current_batch',

                                                            'ref_links_tmp','ref_links_tmp2','ref_links_list',

                                                            'urls_list_full','urls_completed',

                                                            'urls_404',

                                                            'nt','tsize','num_processed','links_level','ctime', 'urls_ext','fetch_no',

                                                            'starttime', 'retrno', 'nettime', 'urls_list_skipped',

                                                            'imlist', 'imlist2', 'progpar', 'runstate', 'sm_sessions',

                                                            'addedcnt'

                                                            );

                                                            foreach($cfuioL30_lEkYW as $k){

                                                            $jpy9uM8UAI1rKgZ[$k] = isset($this->$k) ? $this->$k : $$k;

                                                            }

                                                            $jpy9uM8UAI1rKgZ['time']=time();

                                                            $IYZMcA3sIOI3hqwn0xm=nsFT3BmxV1($jpy9uM8UAI1rKgZ);

                                                            MaCE8VvWEtAgu1aWX7(SJOvDnZG6,$IYZMcA3sIOI3hqwn0xm,bvxoWXIyZCcaoVlsa,true);

                                                            unset($jpy9uM8UAI1rKgZ);

                                                            unset($IYZMcA3sIOI3hqwn0xm);

                                                            }

                                                            if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&

                                                            (($m8HTpd_0s-$BpV9qWv5N)==$grab_parameters['xs_delay_req']))

                                                            {

                                                            $BpV9qWv5N = $m8HTpd_0s;

                                                            sleep(intval($grab_parameters['xs_delay_ms']));

                                                            }

                                                            Ij3zzuYUboJ('post-progress4', true);

                                                            }while(!$HRSLRFvCX && !$X5O38TAuWv4FR);



                                                            vkLR44N3EhIoTE("\n\n<br><br>Crawling completed<br>\n");

                                                            if($_GET['ddbgexit']){

                                                            echo '<hr><hr><h2>Dbg exit</h2>';

                                                            echo $UJjrKVyISUwJOP6Upz->hk_qQTWmt6UQY6UY_7.' / '.$UJjrKVyISUwJOP6Upz->nettime.'<hr>';

                                                            echo w5pLADMslf0F5YLxbnD().'<hr>';

                                                            exit;

                                                            }

                                                            return array(

                                                            'u404'=>$this->urls_404,

                                                            'ref_links_list'=>$this->ref_links_list,

                                                            'starttime'=>$starttime,

                                                            'topmu' => $K5qP9_ZsHx,

                                                            'ctime'=>$this->ctime,

                                                            'tsize'=>$this->tsize,

                                                            'retrno' => $retrno,

                                                            'nettime' => $this->nettime,

                                                            'errmsg'=>'',

                                                            'initurl'=>$this->pt4sSPNr0D6OHM,

                                                            'initdir'=>$this->XJtWAVmBTXcICX4yKLW,

                                                            'ucount'=>$this->gGtCbFmm6,

                                                            'crcount'=>$this->num_processed,

                                                            'fetch_no'=>$this->fetch_no,

                                                            'time'=>time(),

                                                            'params'=>$this->VfoZIHwvppID93dLX,

                                                            'sm_sessions'=>$this->sm_sessions,

                                                            'interrupt'=>$X5O38TAuWv4FR,

                                                            'runstate' => $this->runstate,

                                                            'urls_ext'=>$urls_ext,

                                                            'urls_list_skipped' => $urls_list_skipped,

                                                            'max_reached' => $this->gGtCbFmm6>=$this->y5E6XiZB3w2DW4XFY

                                                            );

                                                            }

                                                            }

                                                            $SnzUa6LrL0UA7u_VDC = new SiteCrawler();

                                                            function UZFLetRTaaTZJ7i(){

                                                            @rpQrAJcTTdcnSJ9(bvxoWXIyZCcaoVlsa.HayIm8PnU);

                                                            if(@file_exists(bvxoWXIyZCcaoVlsa.EZOR9LhvVo7xa))

                                                            @rename(bvxoWXIyZCcaoVlsa.EZOR9LhvVo7xa,bvxoWXIyZCcaoVlsa.HayIm8PnU);

                                                            }
