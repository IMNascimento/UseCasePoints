<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <header class="hrd">
        <div class="container"> 
            <div class="row align-items-center">
                
                <div class="col-6">
                    <a href="calculos.html" class="butn "><img src="../src/imagem/icones/seta-direita.png" alt="voltar"></a>
                </div>
                <div class="col-6">
                    <h2 class="title-hrd float-end">Resultado</h2>
                </div>
            </div>
        </div>   
    </header>
    <main>
        <div class="php-result text-center">
            <!--Aqui entra o codigo php-->
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


echo "<p>" . "Resultado " . eh($deucerto) . " horas" . "<p>";



?>
        </div>
        
    </main>
    <footer class="fto">
        <p class="copyright-text text-center">Copyright &copy; 2022 All Rights Tec. Desenvolvimento Sistema</p>
    </footer>
</body>
</html>