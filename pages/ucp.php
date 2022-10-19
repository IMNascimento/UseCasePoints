<?php

@include('functions.php');
@include('functionsucp.php');


$camp= array("simpleTap","mediumTap","advancedTap","simpleTucp","mediumTucp","complexTucp","t1","t2","t3","t4","t5","t6","t7","t8","t9","t10","t11","t12","t13","f1","f2","f3","f4","f5","f6","f7","f8");
$type= array('float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float');
$d= check($_POST,$camp,$type);




$uucp=uucp(calculateTap($d['simpleTap'],$d['mediumTap'],$d['advancedTap']),casePoints($d['simpleTucp'],$d['mediumTucp'],$d['complexTucp']));


$technicalFactor=array($d['t1'],$d['t2'],$d['t3'],$d['t4'],$d['t5'],$d['t6'],$d['t7'],$d['t8'],$d['t9'],$d['t10'],$d['t11'],$d['t12'],$d['t13']);


$environmentalFactor=array($d['f1'],$d['f2'],$d['f3'],$d['f4'],$d['f5'],$d['f6'],$d['f7'],$d['f8']);


$deucerto=ucp($uucp,technicalFactor($technicalFactor),environmentalFactor($environmentalFactor));


echo eh($deucerto);



?>