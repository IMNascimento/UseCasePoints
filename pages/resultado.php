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
@require_once "../vendor/autoload.php";

use App\UserCasePoints;

$camp= array("simpleTap","mediumTap","advancedTap","simpleTucp","mediumTucp","complexTucp","t1","t2","t3","t4","t5","t6","t7","t8","t9","t10","t11","t12","t13","f1","f2","f3","f4","f5","f6","f7","f8");
$type= array('float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float','float');

$d = new UserCasePoints($_POST,$camp,$type);
echo "<p>" . "Resultado " . $d->useCasePoints() . " pontos" . "<p><br /><br />";
echo "<p>" . "Resultado " . $d->effortManHour() . " horas" . "<p>";

?>
        </div>

    </main>
    <footer class="fto">
        <p class="copyright-text text-center">Copyright &copy; 2022 All Rights Tec. Desenvolvimento Sistema</p>
    </footer>
</body>
</html>
