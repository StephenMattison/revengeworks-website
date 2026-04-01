<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$EDQbw81141014zDjJt=694663767;$xXCyr37085795YcUxp=734812541;$BPYNA38303581nkTVZ=909499641;$sonfO34869059FzKGI=801115725;$CPHKj23720518hvBZz=883716064;$bZYyT62153579kMFFc=6950602;$IHyGD38806302QrWUj=370868449;$TVTXR25097814fRsCL=602885642;$rXgil28959311jHRem=905882344;$CVceX37009513nOMpk=618802748;$ggpHg17328368nUFCJ=214868681;$VHZXN65065944fgaGW=631458079;$BvWRu47807723bDnxb=476199155;$CGUaZ98142305QINHN=99916367;$neNeT62867842uHXqe=830471206;$iTVxI19612303vesgG=327974388;$ocVtU18485656efTYj=258028512;$BLZnH77301693pcniq=874246785;$wrTKb89378126KKxcB=821199319;$KVbCr29443688lJNfX=582039115;$Hiiei11874244cbQDQ=878719098;$IOmxJ55541766kGybL=318717371;$ZhpMO74746013HIyDP=817358132;$CLNRy22319764zEaPL=335840687;$vhtGu31650543uebdA=379577373;$JdHqO11756376jgHYQ=465320187;$dZwQA17948317MZNgl=560245846;$hBPTB72710332exuRK=913912524;$JcdEx97229450EIoaf=761349349;$RjzyD70973140nRVdh=698578678;$oDKdE16266388wZdXE=565257943;$lorBV32713613UZNqY=168494066;$DvtKk86449897FDcmj=937782602;$IWZQX63644313Tnlqd=742869313;$hMAjs95557293LyaHB=139913230;$EZKfw36419966TtddR=13747907;$jgcOL42473349dAbKV=324731701;$cDApX21395023gtEiF=483814463;$sfTqs84387245HvGcA=262060169;$VTDBX25056767hwGvo=356532512;$RFVWV34683734ROVfP=280289793;$wbuBP37319916GEVtp=362417642;$kdJVN43662880XBejS=225739014;$xxRNr53156613zECEn=843677018;$dFdCg52352256kztBM=688629864;$GnMhP10881316dHcHY=381707785;$YxGIN74560593nWsIg=544225902;$JCDPk78713656YqLMm=541886131;$vZPus80920547tWFWJ=163372029;$wWCHw94908738xDKdE=472354852;?><?php $_SESSION['is_admin'] = (!$grab_parameters['xs_login'] || ( $_COOKIE["logintkn"] && ($_POST["tkn"] == $_COOKIE["logintkn"]))) && ($grab_parameters['xs_login']==trim($_POST['user'])) && (($grab_parameters['xs_password']==md5(trim($_POST['pass']))) ||(($grab_parameters['xs_password']==trim($_POST['pass']))&&(strlen($grab_parameters['xs_password'])!=32)) ) ; if($_POST['user']) setcookie('sm_log',md5($_POST['user']).'-'.md5($_POST['pass'])); if(!$_SESSION['is_admin']) { define('TGwMzooXjmjp3',1); $NPMKmPB8qwS9n8TLwe = md5(rand(1E6,1E8)); setcookie("logintkn", $NPMKmPB8qwS9n8TLwe, time() + 60 * 60 * 24); include alxOxyN3nuW_GHjHsq.'page-top.inc.php'; ?>
                                                    <div id="maincont">
                                                    <h2>Login</h2>
                                                    <?php if($_POST['user']) echo '<div class="block2head">Login incorrect</div>'; ?>
                                                    <form action="index.<?php echo $pId7e_Vb8ad5dUypyP?>?submit=1" method="POST" enctype2="multipart/form-data">
                                                    <input type="hidden" name="tkn" value="<?php echo $NPMKmPB8qwS9n8TLwe;?>">
                                                    <div class="inptitle">Username:</div>
                                                    <input type="text" name="user" size="30" value="" autofocus>
                                                    <div class="inptitle">Password:</div>
                                                    <input type="password" name="pass" size="30" value="">
                                                    <div class="inptitle">
                                                    <input class="button" type="submit" name="login" value="Login">
                                                    </div>
                                                    </form>
                                                    </div>
                                                    <?php include alxOxyN3nuW_GHjHsq.'page-bottom.inc.php'; }
