<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$uXEdS72588944riMmI=758231287;$gazQs81699077Wehyl=592460309;$ZCxdk44092887vecNW=741775242;$ZymxO28315358bRvjl=82849640;$omrnP91626011UzUPu=747074230;$rZmqu54148219cgntq=802553104;$uGHoX37391361YmPhi=65183376;$TNYbh40499687aFPVK=490936391;$dQYdL17163358uhibs=26933946;$zkwGM32460291hcvgE=269473311;$aVSsV21972242HpzBY=958649202;$TephK18385887nFvMF=625190576;$fWTOU53016427hAAuk=761209927;$PPqqp52843208iIBLD=743216293;$IVNLc44344690XQKcW=115588202;$TajSa88774987SzCfX=894078574;$Qgxal56657736yXOYO=978017903;$igPDm30210896DmBbC=201981116;$mOZfC81278869SajYQ=441313904;$HXhdm63418854OLBhJ=613834961;$pOCyC81178982mvjcY=778167052;$jgkTC58870889aVOpu=186047128;$cyJxV76931737hoVwQ=775271970;$bLFiG90965597dnHsF=33477841;$FIRsd28066072RvdYa=91325424;$PGCkl68027952djGGv=768230561;$YTtLT91437849sBIye=835395618;$txxnn23361876kgIBC=741264657;$XeibN78904254twQBQ=602158047;$hOrKC64931081LJiSu=764888605;$hBpvB45814934wMGHF=6206616;$vMcRf57213210bGNYj=18126042;$eBFbj68271641ZwIZb=812076782;$TvLig76628417qIWEH=870873980;$BUGVT71762924tontO=156042203;$ljeeF16381341QGtpZ=813909002;$TaFTu70060310lwmkN=939485919;$tWuRR33905896SQiXh=948514266;$ZkBJz85443526TAufB=783955336;$jaLsv24779076tJtpN=178374122;$WJsDW26066360uZDUX=884208733;$yKWCe69272825BMoyJ=522264980;$FfQtq75317517Bjses=888941612;$xgGmH52186524jkIco=763030537;$ehdvX74812363zbGck=440337034;$VgpNL48205690ClzXM=694243895;$DrDUR40674488aEavd=962119340;$VtgQv90105907ejpgx=663505932;$HpFDZ68490685xNjEc=43638099;$DpdCA28133217nusXc=273807039;?><?php include alxOxyN3nuW_GHjHsq.'page-top.inc.php'; $xuKE3tvXX = gtM_YNTPY8YQ(); if($grab_parameters['xs_chlogorder'] == 'desc') rsort($xuKE3tvXX); $Qycyss4i2IaBn6e0wj=$_GET['log']; if($Qycyss4i2IaBn6e0wj){ ?>
                                                  <div id="sidenote">
                                                  <div class="block1head">
                                                  Crawler logs
                                                  </div>
                                                  <div class="block1">
                                                  <?php for($i=0;$i<count($xuKE3tvXX);$i++){ $Jw6Vzo9vDDMLUc = UrOl0tTeYCkGMBxxHk9($xuKE3tvXX[$i]); if($i+1==$Qycyss4i2IaBn6e0wj)echo '<u>'; ?>
                                                  <a href="index.<?php echo $pId7e_Vb8ad5dUypyP?>?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$Jw6Vzo9vDDMLUc['time'])?></a>
                                                  ( +<?php echo count($Jw6Vzo9vDDMLUc['newurls'])?> -<?php echo count($Jw6Vzo9vDDMLUc['losturls'])?>)
                                                  </u>
                                                  <br>
                                                  <?php } ?>
                                                  </div>
                                                  </div>
                                                  <?php } ?>
                                                  <div id="<?php  echo $Qycyss4i2IaBn6e0wj?'shifted':'maincont'?>" >
                                                  <h2><i class="material-icons inline-icon">history</i> Site History</h2>
                                                  <?php if($Qycyss4i2IaBn6e0wj){ $Jw6Vzo9vDDMLUc = UrOl0tTeYCkGMBxxHk9($xuKE3tvXX[$Qycyss4i2IaBn6e0wj-1]); ?><h4><?php echo date('j F Y, H:i',$Jw6Vzo9vDDMLUc['time'])?></h4>
                                                  <div class="inptitle">New URLs (<?php echo count($Jw6Vzo9vDDMLUc['newurls'])?>)</div>
                                                  <textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$Jw6Vzo9vDDMLUc['newurls']))?></textarea>
                                                  <div class="inptitle">Removed URLs (<?php echo count($Jw6Vzo9vDDMLUc['losturls'])?>)</div>
                                                  <textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$Jw6Vzo9vDDMLUc['losturls']))?></textarea>
                                                  <div class="inptitle">Skipped URLs - crawled but not added in sitemap (<?php echo count($Jw6Vzo9vDDMLUc['urls_list_skipped'])?>)</div>
                                                  <textarea style="width:100%;height:300px"><?php foreach($Jw6Vzo9vDDMLUc['urls_list_skipped'] as $k=>$v)echo @htmlspecialchars($k.' - '.$v)."\n";?></textarea>
                                                  <?php function Zs2cWAX64sd8LdDWQ4($nl){ $lc = ''; $it = 0; if($nl) foreach($nl as $l=>$il){ $lc .= $l."\n"; foreach($il as $i=>$c){ $lc .= "\t".$i."\n"; $it++; } } return array($it,$lc); } ?>
                                                  <?php $ni = Zs2cWAX64sd8LdDWQ4($Jw6Vzo9vDDMLUc['newurls_i']); ?>
                                                  <div class="inptitle">New images (<?php echo $ni[0]?>)</div>
                                                  <textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
                                                  <?php $ni = Zs2cWAX64sd8LdDWQ4($Jw6Vzo9vDDMLUc['losturls_i']); ?>
                                                  <div class="inptitle">Removed images (<?php echo $ni[0]?>)</div>
                                                  <textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
                                                  <?php $ni = Zs2cWAX64sd8LdDWQ4($Jw6Vzo9vDDMLUc['newurls_v']); ?>
                                                  <div class="inptitle">New videos (<?php echo $ni[0]?>)</div>
                                                  <textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
                                                  <?php $ni = Zs2cWAX64sd8LdDWQ4($Jw6Vzo9vDDMLUc['losturls_v']); ?>
                                                  <div class="inptitle">Removed videos (<?php echo $ni[0]?>)</div>
                                                  <textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
                                                  <?php }else{ ?>
                                                  <table class="ltable">
                                                  <tr class=block1head>
                                                  <th>No</th>
                                                  <th>Date/Time</th>
                                                  <th>Indexed pages</th>
                                                  <th>Processed pages</th>
                                                  <th>Skipped pages</th>
                                                  <th>Proc.time</th>
                                                  <th>Bandwidth</th>
                                                  <th>New URLs</th>
                                                  <th>Removed URLs</th>
                                                  <th>Broken links</th>
                                                  <?php if($grab_parameters['xs_imginfo'])echo '<th>Images</th>';?>
                                                  <?php if($grab_parameters['xs_videoinfo'])echo '<th>Videos</th>';?>
                                                  <?php if($grab_parameters['xs_newsinfo'])echo '<th>News</th>';?>
                                                  <?php if($grab_parameters['xs_rssinfo'])echo '<th>RSS</th>';?>
                                                  </tr>
                                                  <?php  $yDWqvxrckDjnkV=array(); for($i=0;$i<count($xuKE3tvXX);$i++){ $Jw6Vzo9vDDMLUc = UrOl0tTeYCkGMBxxHk9($xuKE3tvXX[$i]); if(!$Jw6Vzo9vDDMLUc)continue; foreach($Jw6Vzo9vDDMLUc as $k=>$v)if(!is_array($v))$yDWqvxrckDjnkV[$k]+=intval($v);else $yDWqvxrckDjnkV[$k]+=count($v); ?>
                                                  <tr class=block1>
                                                  <td><?php echo $i+1?></td>
                                                  <td><a href="index.php?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$Jw6Vzo9vDDMLUc['time'])?></a></td>
                                                  <td><?php echo number_format($Jw6Vzo9vDDMLUc['ucount'])?></td>
                                                  <td><?php echo number_format($Jw6Vzo9vDDMLUc['crcount'])?></td>
                                                  <td><?php echo count($Jw6Vzo9vDDMLUc['urls_list_skipped'])?></td>
                                                  <td><?php echo number_format($Jw6Vzo9vDDMLUc['ctime'],2)?>s</td>
                                                  <td><?php echo number_format($Jw6Vzo9vDDMLUc['tsize']/1024/1024,2)?></td>
                                                  <td><?php echo count($Jw6Vzo9vDDMLUc['newurls'])?></td>
                                                  <td><?php echo count($Jw6Vzo9vDDMLUc['losturls'])?></td>
                                                  <td><?php echo count($Jw6Vzo9vDDMLUc['u404'])?></td>
                                                  <?php if($grab_parameters['xs_imginfo'])echo '<td>'.$Jw6Vzo9vDDMLUc['images_no'].'</td>';?>
                                                  <?php if($grab_parameters['xs_videoinfo'])echo '<td>'.$Jw6Vzo9vDDMLUc['videos_no'].'</td>';?>
                                                  <?php if($grab_parameters['xs_newsinfo'])echo '<td>'.$Jw6Vzo9vDDMLUc['news_no'].'</td>';?>
                                                  <?php if($grab_parameters['xs_rssinfo'])echo '<td>'.$Jw6Vzo9vDDMLUc['rss_no'].'</td>';?>
                                                  </tr>
                                                  <?php }?>
                                                  <tr class=block1>
                                                  <th colspan=2>Total</th>
                                                  <th><?php echo number_format($yDWqvxrckDjnkV['ucount'])?></th>
                                                  <th><?php echo number_format($yDWqvxrckDjnkV['crcount'])?></th>
                                                  <th>-</th>
                                                  <th><?php echo number_format($yDWqvxrckDjnkV['ctime'],2)?>s</th>
                                                  <th><?php echo number_format($yDWqvxrckDjnkV['tsize']/1024/1024,2)?> Mb</th>
                                                  <th><?php echo ($yDWqvxrckDjnkV['newurls'])?></th>
                                                  <th><?php echo ($yDWqvxrckDjnkV['losturls'])?></th>
                                                  <th>-</th>
                                                  <?php if($grab_parameters['xs_imginfo'])echo '<th></th>';?>
                                                  <?php if($grab_parameters['xs_videoinfo'])echo '<th></th>';?>
                                                  <?php if($grab_parameters['xs_newsinfo'])echo '<th></th>';?>
                                                  <?php if($grab_parameters['xs_rssinfo'])echo '<th></th>';?>
                                                  </tr>
                                                  </table>
                                                  <?php } ?>
                                                  </div>
                                                  <?php include alxOxyN3nuW_GHjHsq.'page-bottom.inc.php';
