<h2>Calcul de l'aire d'un cercle</h2>
    <?php
        
        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);
        $nom = 'rayon';
        $rayon = -1;
        if(isset($_GET[$nom])) {
            $saisie = $_GET[$nom];
            $rayon = floatval($saisie);
        }
        ?>
        <form method="GET" action="<?= $action ?>">
            <label for name="<?= $nom ?>">Rayon</label>
            <input type="number" name="<?= $nom ?>" min="0.0001" step="any" />
            <input type="submit" value="envoyer">
        </form>

        <?php
            /* compléter à partir d'ici */
            function aireCercle(float $rayon) 
            {
                if($rayon > 0) 
                {
                    $aire = M_PI * $rayon ** 2;
                    return $aire;     
                }
                else 
                {
                    return -1;
                    //trigger_error('valeur incorrecte',  E_USER_NOTICE );
                    // E_USER_WARNING E_USER_ERROR
                    // http_response_code(422);
                }
            }
        
            if($rayon > 0)
                echo 'L\'aire du cercle de rayon ' . number_format($rayon,2,',') .
                ' est : ' . number_format(aireCercle($rayon),2,',');
            
           
        ?>