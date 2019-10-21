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
