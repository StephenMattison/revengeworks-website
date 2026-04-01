<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$tkguA52648438gPkFV=639312055;$XnDFu98933752gYqMb=29800405;$QSWfk78228297Pxpqe=770806814;$yebrX22332092zDfIc=267470892;$USwRh39196656YHYgN=285920652;$wXama81912171CPBFK=180185974;$uteEg56959180fwvCC=857023444;$rooPm30386395jYXUv=799120398;$tzSqo71272555EhOEi=847530844;$OoSxq72316706QdqGL=119176682;$oZTyz74568356nwBKu=333566258;$WHkvi24998031sAwSQ=175864908;$woCFC95096253EvKSi=53585319;$xVlzB92628963iRtdg=133091389;$VTCEJ45698447ptmJd=65228520;$CRYjm82598271ARIVP=806401463;$iRUNN69350434WqaeQ=146304344;$qPNnw33903945PDvsR=510138736;$BDtLj84029660yxpFz=603147217;$EwqZJ81303932kAHfH=860697311;$wzPzB21544074NCJIV=829301706;$uJBZf38864961oTpZZ=250921909;$ljwBj85128437hFhWK=589563852;$uXcts90297518zdvgH=906880551;$NUKfz46658369Fjsym=602401368;$gMHwC85557969AqUOz=854338358;$PQBJN12054221cPAqS=342734024;$MOrCd75286497JZipA=370268577;$kBhBl99623871YxDjs=222966904;$loPaG93254565IYpXu=351904807;$pESRr28309756dVoxR=27535439;$HnjSl14496060qqIGq=297625912;$kAmYF81202205UvQrI=901453229;$XAlOy45292171PzwRI=141785009;$hbmex96924967fSHFn=52801158;$xwoaY57285711TZNnc=750314542;$ZVUtj76794345vLBwZ=90659743;$ftzwl66225592uWcax=902614387;$XChdC99585862hbOZE=72941384;$wIPmZ43254559CbLfM=462763026;$KeXgP12376484EJCXH=294360417;$KZlqE70405240LYlUY=888034706;$ihFAX83213841HSeBj=79645677;$rIBFQ36110689XHIEl=422312245;$QIOhO53621240BZngR=582522296;$NGJaI93919931lLaex=438727612;$APDzw17782992XnDSg=511738309;$MIggZ74864987DUlmk=964758320;$TQMtz52077888UiFkf=16979057;$VRjUe89542244gdmfb=395857253;?><?php include alxOxyN3nuW_GHjHsq.'page-top.inc.php'; $hvRJvKaLgyau3oy = $_REQUEST['crawl']; if($_GET['act']=='interrupt'){ MaCE8VvWEtAgu1aWX7(N0MW0Wx6mQ,''); echo '<h2>The "stop" signal has been sent to a crawler.</h2>'; }else if(file_exists($fn=bvxoWXIyZCcaoVlsa.EZOR9LhvVo7xa)&&(time()-filemtime($fn)<10*60)){ $zEWeJCBpO2Td=true; $hvRJvKaLgyau3oy = 1; } if($hvRJvKaLgyau3oy){ ?>
                                                      <div id="maincont">
                                                      <?php if($zEWeJCBpO2Td) echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$pId7e_Vb8ad5dUypyP.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>'; else { echo '<h4>Please wait. Sitemap generation in progress...</h4>'; if($_POST['bg']) echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>'; } ?>
                                                      <script type="text/javascript">
                                                      var lastupdate = 0;
                                                      var framegotsome = false;
                                                      function eNX7gAL3TL0YT()
                                                      {
                                                      var cd = new Date();
                                                      if(!lastupdate)return false;
                                                      var df = (cd - lastupdate)/1000;
                                                      <?php if($grab_parameters['xs_autoresume']){?>
                                                      var re = document.getElementById('rlog');
                                                      re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
                                                      var ifr = document.getElementById('cproc');
                                                      var frfr = window.frames['clog'];

                                                      var doresume = (df >= <?php echo intval($grab_parameters['xs_autoresume']);?>);
                                                      if(typeof frfr != 'undefined') {
                                                      if( (typeof frfr.pageLoadCompleted != 'undefined') &&
                                                      !frfr.pageLoadCompleted)
                                                      {

                                                      framegotsome = true;
                                                      doresume = false;
                                                      }

                                                      if(!frfr.document.getElementById('glog')) {

                                                      }
                                                      }
                                                      if(doresume)
                                                      {
                                                      var rle = document.getElementById('runlog');
                                                      lastupdate = cd;
                                                      if(rle)
                                                      {
                                                      rle.style.display  = '';
                                                      rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
                                                      }
                                                      var lc = ifr.src;
                                                      lc = lc.replace(/resume=\d*/,'resume=1')
                                                      lc = lc.replace(/seed=\d*/,'seed='+Math.random())

                                                      ifr.src = lc;
                                                      }
                                                      <?php } ?>
                                                      }
                                                      window.setInterval('eNX7gAL3TL0YT()', 1000);
                                                      </script>
                                                      <iframe id="cproc" name="clog" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $pId7e_Vb8ad5dUypyP?>?op=crawlproc&bg=<?php echo $_REQUEST['bg']?>&resume=<?php echo $_REQUEST['resume']?>&seed=<?php echo rand(1E8,1E9);?>"></iframe>
                                                      <!--
                                                      <div id="rlog2" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
                                                      -->
                                                      <div id="rlog" style="overflow:auto;"></div>
                                                      <div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
                                                      </div>
                                                      <?php }else if(!$l01jRFDKtWtW) { ?>
                                                      <div id="sidenote">
                                                      <?php include alxOxyN3nuW_GHjHsq.'page-sitemap-detail.inc.php'; ?>
                                                      </div>
                                                      <div id="shifted">
                                                      <h2><i class="material-icons inline-icon">autorenew</i>  Create Sitemap</h2>
                                                      <form action="index.<?php echo $pId7e_Vb8ad5dUypyP?>?submit=1" method="POST" enctype2="multipart/form-data">
                                                      <input type="hidden" name="op" value="crawl">
                                                      <div class="inptitle">Run in background</div>
                                                      <input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
                                                      <?php if(@file_exists(bvxoWXIyZCcaoVlsa.SJOvDnZG6)){ if(@file_exists(bvxoWXIyZCcaoVlsa.HayIm8PnU) &&(filemtime(bvxoWXIyZCcaoVlsa.HayIm8PnU)>filemtime(bvxoWXIyZCcaoVlsa.SJOvDnZG6)) ){ $nZuXDeFByMHBbJTqGD0 = @dvcNBqqHGk66v(tSVH9XRZbaKn(bvxoWXIyZCcaoVlsa.HayIm8PnU, true)); } if(!$nZuXDeFByMHBbJTqGD0){ $jpy9uM8UAI1rKgZ = @dvcNBqqHGk66v(tSVH9XRZbaKn(bvxoWXIyZCcaoVlsa.SJOvDnZG6, true)); $nZuXDeFByMHBbJTqGD0 = $jpy9uM8UAI1rKgZ['progpar']; } ?>
                                                      <div class="inptitle">Resume last session</div>
                                                      <input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session
                                                      <br />Updated on <?php $EHvrvxkzOcXF6o = filemtime(bvxoWXIyZCcaoVlsa.SJOvDnZG6); echo date('Y-m-d H:i:s',$EHvrvxkzOcXF6o); if(time()-$EHvrvxkzOcXF6o<600)echo ' ('.(time()-$EHvrvxkzOcXF6o).' seconds ago) '; ?>,
                                                      <?php echo  'Time elapsed: '.ZeFlXonNC8A9nTqx($nZuXDeFByMHBbJTqGD0[0]).',<br />Pages crawled: '.intval($nZuXDeFByMHBbJTqGD0[3]). ' ('.intval($nZuXDeFByMHBbJTqGD0[7]).' added in sitemap), '. 'Queued: '.$nZuXDeFByMHBbJTqGD0[2].', Depth level: '.$nZuXDeFByMHBbJTqGD0[5]. '<br />Current page: '.$nZuXDeFByMHBbJTqGD0[1].' ('.number_format($nZuXDeFByMHBbJTqGD0[10],1).')'; } ?>
                                                      </label>
                                                      <div class="inptitle">Click button below to start crawl manually:</div>
                                                      <div class="inptitle">
                                                      <input class="button" type="submit" name="crawl" value="Start Creating Sitemap">
                                                      </div>
                                                      </form>
                                                      <h2>Cron job setup</h2>
                                                      You can use the following command line to setup the cron job for sitemap generator:
                                                      <div class="inptitle">/usr/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
                                                      <h2>Web Cron setup</h2>
                                                      If you cannot setup a regular cron task on your server, you can try a web cron instead:
                                                      <div class="inptitle"><?php   echo $dJrwBWl4PG3TcV6XW.'/index.php?op=crawlproc&resume=1'?></div>
                                                      </div>
                                                      <?php } include alxOxyN3nuW_GHjHsq.'page-bottom.inc.php';
