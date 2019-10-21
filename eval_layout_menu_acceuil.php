<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Eval Layout menu</title>
		<link rel="stylesheet" href="css/mon_site.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body>
        <div class="hamburger">
            <img src="img/hamburger.png" class="img_hamburger" >
        </div>
        <nav class="container menu">
            <ul>
                <div class="div_lien">
                    <li><a href="#"><img class="img_menu" src="img/accueil.jpg"> Acceuil</a></li>
                </div>
                <div class="div_lien">
                    <li><a href="#"><img class="img_menu" src="img/cerise.jpg"> Cerise</a></li>
                </div> 
                <div class="div_lien">
                    <li><a href="#"><img class="img_menu" src="img/poire.jpg"> Poire</a></li>
                </div>
                <div class="div_lien">
                    <li><a href="#"><img class="img_menu" src="img/pomme.jpg"> Pomme</a></li>
                </div>
                <div class="div_lien">
                    <li><a href="#"><img class="img_menu" src="img/tomate.jpg"> Tomate</a></li>
                </div>
            </ul>
        </nav>

    <script>
        function hide (){
            $(".menu").hide();
        }
        
        function show (){
            $(".menu").show();
        }        
        
        function menu (){
            hide();
            $(".hamburger").click(function(){
                show();
                $(".hamburger").click(function(){
                    menu();
                });
            }); 
        }
        
        $(".hamburger").click(function(){
            menu();
        });
        
    </script>
	</body>
</html>
