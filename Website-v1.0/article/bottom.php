<?php 
            $listeImage = array("Fashion","happiness","shh","Moomin","näyttelijän"/*Fin culture*/, "PixArt", "Suolaistamakeaa", "Wife", "VR_webSMALLPrev", "blueorredsmall", "bitcoin", "gamedev" /*fin entertainment*/, "streetart", "WhySoSerious", "knife", "dungeon", "4Kediting_279", "lassi-artikkeli-web", "ukulele", "Panda", "kiro"/*fin passion*/,"Opiskelijabudjetti_279x187", "cultureshockSmall", "Seinajokimap"/*fin student*/);
            $listeTitre = array("Fashion for everyone","In pursuit of happiness","Shh...","Comics from Finland","näyttelijän työ suomessa"/*Fin culture*/, "PixArt", "Suolaista makeaa", "The most bizarre sports in finland", "Life in another reality", "Blue or Red", "Bitcoin", "Digging into game development" /*fin entertainment*/, "Street art", "Why so serious", "Flippin' awesome knife", "Dungeon and Dice", "4k editing machine", "My road to life", "The magical sound of ukulele", "Saving a panda", "maailman huipulle rukiin avulla"/*fin passion*/,"Opiskelijabudjetti varassa", "My culture shock", "Seinajoki map"/*fin student*/);
            $listeLien = array("Fashion","pursuitofhappiness","shh","comics","natyttelijantyo"/*Fin culture*/, "PixArt", "salmiakki", "bizzaresports", "virtualreality", "Blue_or_Red", "bitcoin", "gamedevelopment" /*fin entertainment*/, "streetart", "whysoserious", "knife", "Dungeons_Dice", "4k_machine", "roadtolife", "ukulele", "panda", "maailman"/*fin passion*/,"opiskelijabudjetin", "culture_shock", "Seinajokimap"/*fin student*/);
            $article1 = rand(0,23); 
            $article2 = -1;
            while ($article2 == -1) 
            {
              $temp = rand(0,23);
              if ($temp != $article1) 
              {
                $article2 = $temp;
              }
            } 
            $article3 = -1;
            while ($article3 == -1) 
            {
              $temp = rand(0,23);
              if ($temp != $article1 && $temp != $article2) 
              {
                $article3 = $temp;
              }
            } 


          ?>

          <table class="table">
            <tr>
              <td><a href="<?php echo "../$listeLien[$article1]/$listeLien[$article1].php"; ?>"><img class="image3" src="../../imageRandom/<?php echo"$listeImage[$article1]"?>.jpg" alt="poisson"></a></td>
              <td class="tablein"><a href="<?php echo "../$listeLien[$article2]/$listeLien[$article2].php"; ?>"><img class="image3" src="../../imageRandom/<?php echo"$listeImage[$article2]"?>.jpg" alt="poisson"></a></td>
              <td class="tablein"><a href="<?php echo "../$listeLien[$article3]/$listeLien[$article3].php"; ?>"><img class="image3" src="../../imageRandom/<?php echo"$listeImage[$article3]"?>.jpg" alt="poisson"></a></td>
            </tr>
            <tr>
              <td><p id= <?php echo "\""; if($article1 < 5){echo"columnCulture";} elseif($article1 < 12){echo"columnEntertainment";} elseif($article1 < 21){echo"columnPassion";} else{echo"columnStudentLife";} echo "\"";?>><?php echo"$listeTitre[$article1]"; ?></p></td>
              <td class="tablein"><p id=<?php  echo "\""; if($article2 < 5){echo"columnCulture";} elseif($article2 < 12){echo"columnEntertainment";} elseif($article2 < 21){echo"columnPassion";} else{echo"columnStudentLife";} echo "\"";?>><?php echo"$listeTitre[$article2]"; ?></p></td>
              <td class="tablein"><p id=<?php echo "\""; if($article3 < 5){echo"columnCulture";} elseif($article3 < 12){echo"columnEntertainment";} elseif($article3 < 21){echo"columnPassion";} else{echo"columnStudentLife";} echo"\"" ?> ><?php echo"$listeTitre[$article3]"; ?></p></td>
            </tr>
          </table>
        </div>

        <div class="black_square">
          <table>
            <tr>
              <td><img style="width: 90%; margin-left: 60%" class="logoSeamkBlanc" src="../logoSeamk.png"> </td>
              <td></td>
              <td><img style="width: 70%; margin-left: 10%" class="logoBstrBlanc" src="../logobstr.png"> </td>
              
            </tr>
          </table>
        </div>