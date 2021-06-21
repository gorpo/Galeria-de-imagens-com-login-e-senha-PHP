<?php
session_start();
if(! $_SESSION['usuario']) {
    header('Location: index.php');
    exit();
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Banco de Imagens VOPEN</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
         
    <div class="column is-4 is-offset-4"><img src="images/logo.png"></div>

    <div>
            <h1 style="text-align:center;color: white; background: black;  font-family: Open Sans; font-size: 18px; font-style: normal; font-variant: normal;"> </h1>⠀⠀
        </div>



        <div class="container-galeria">

            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisas Masculinas FPU50  Manga Longa.zip">
                <img src="./images/galeria/site_1497x1920_Modelo Masculino - FPU50 - marinho.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Masculinas FPU50+ ML
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisetas Masculinas FPU50 manga curta.zip">
                <img src="./images/galeria/site_1497x1920_PSD - Camisetas Manga Curta Masculina - cinza clean.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Masculinas FPU50+ MC
                </span></a>
            </div>



            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisas Masculinas Repelentes.zip">
                <img src="./images/galeria/site_1497x1920_Modelo Masculino - Repelente - verde folha.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Masculinas Repelentes
                </span></a>
            </div>

            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisas Repelente Feminina.zip">
                <img src="./images/galeria/site_1497x1920_REPELENTE- Modelo Frente - pink.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Femininas Repelentes
                </span></a>
            </div>



            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisetas Feminina FPU50 Manga Longa.zip">
                <img src="./images/galeria/site_1497x1920_FPU50- Modelo Frente - Amarelo Limão.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Femininas FPU50+ ML
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisetas Femininas FPU50 Manga Curta.zip">
                <img src="./images/galeria/site_1497x1920_MANGA CURTA FEMININA - rosa.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Femininas FPU50+ MC
                </span></a>
            </div>

            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisas Army.zip">
                <img src="./images/galeria/site_1497x1920_Army Kits 3.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Camisas Army
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisas Dry.zip">
                <img src="./images/galeria/_site_1497x1920_Dry Kits 1.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Camisas Dry
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Ciclismo.zip">
                <img src="./images/galeria/site_1497x1920_Halftone Feminina Frente.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Ciclismo
                </span></a>
            </div>



            <div class="item-galeria w-1 h-1">
                <a href="./images/Bermudas.zip">
                <img src="./images/galeria/site_1497x1920_Bermuda Neoprene - Azul - costas -.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Bermudas
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Calças.zip">
                <img src="./images/galeria/site_1497x1920_Calça Neoprente Azul Frente.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Calças
                </span></a>
            </div>



            <div class="item-galeria w-1 h-1">
                <a href="./images/Floats Manga curta.zip">
                <img src="./images/galeria/site_1497x1920_Floater Preto Frente.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Floats Manga Curta
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Floats Manga Longa.zip">
                <img src="./images/galeria/site_1497x1920_Float Grafite Frente.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Floats Manga Longa
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Lycra Sunset.zip">
                <img src="./images/galeria/site_1497x1920_Lycra Sunset Amarela Frente.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Lycra Sunset
                </span></a>
            </div>

            <div class="item-galeria w-1 h-1">
                <a href="./images/Lycras.zip">
                <img src="./images/galeria/site_1497x1920_Amarelo-Fluor-Frente.png" alt="" class="img-galeria">
                <span class="title-galeria">
                    Lycras
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/neolycra.zip">
                <img src="./images/galeria/site_1497x1920_IMG_6562.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Neolycra
                </span></a>
            </div>

            <div class="item-galeria w-1 h-1">
                <a href="./images/Camisas Termicas.zip">
                <img src="./images/galeria/site_1497x1920_Grafite-Lateral-LAPTOP-2FG0FK9H.png" alt="" class="img-galeria">
                <span class="title-galeria">
                    Camisas Térmicas
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Colete Float Kid's.zip">
                <img src="./images/galeria/site_1497x1920_shark frente.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Float Kid's
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Coletinho Kids.zip">
                <img src="./images/galeria/site_1497x1920_Coletinho Shark Frente.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Coletinho Kids
                </span></a>
            </div>


            <div class="item-galeria w-1 h-1">
                <a href="./images/Sapatilhas Kid's.zip">
                <img src="./images/galeria/site_1497x1920_Giz frente lado.jpg" alt="" class="img-galeria">
                <span class="title-galeria">
                    Sapatilhas Kid's
                </span></a>
            </div>

        </div>



        <div>
            <h1 style="text-align:center;color: white; background: black;  font-family: Open Sans; font-size: 18px; font-style: normal; font-variant: normal;"> Autenticado como usuário:⠀<?php echo $_SESSION['usuario'];?>⠀|⠀<a href="logout.php" style="float-right">Sair</a><br>VOPEN 2021 - Todos direitos reservados</h1>⠀⠀
        </div>



        

</body>

</html>