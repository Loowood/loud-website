<html>
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> LOUD 2018 </title>
        <link style="text/css" rel="stylesheet" href="article.css">
        <link style="text/css" rel="stylesheet" href="../commun.css">
        <link href="oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Oswald:300|Source+Sans+Pro:200,300,400" rel="stylesheet">
    </head>
    <body>
        <?php include("../top.php"); ?>

        <div class="white_square">
          <div class="text">
            <p id="header">SUOLAISTA MAKEAA</p>

            <p id="first">Salmiakin juuret ylettyvät ajalle jo ennen Talvisotaa ja se on vieläkin monen lauantaiherkku ja ulkomaalaiset halajavat sen maistamista.</p>

            <p id="author">Text: Iida Mattila Photo: Noora Talasmäki</p>

            <p>
            Suomalaiset rakastavat ja ulkomaalaiset eivät sitä voi sietää. Salmiakki on makuasia, josta nimenomaan jaksetaan kiistellä, mutta miksi? Salmiakin historia on alkanut 1930-luvulla. Salmiakki syntyi olettaen apteekeissa valmistetusta yskänlääkkeestä. Siitä ei ole tarkkaa tietoa, milloin lakritsi ja ammoniumkloridi löysivät toisensa, mutta salmiakkia kuitenkin myytiin jo useiden vuosikymmenten ajan yskänlääkkeenä. Apteekkien salmiakki oli siitä tehtyä jauhetta, jolloin sen ammoniumkloridipitoisuus oli korkeampaa kuin makeissalmiakin. Salmiakin alkuperäinen väri on valkoinen, mutta salmiakin alkuaikoina sitä aloitettiin värjäämään mustaksi lääkehiilellä, koska se koettiin niin houkuttelevammaksi.
            </p>

            <p id="main">"Tämä maistuu jaloille."</p>

            <p>Vanhan ajan salmiakkijauhe kaadettiin kädelle, josta se nuoltiin pois. Tämä syömistapa ei kauaa kestänyt, epähygieenisyydeltään kestänyt kauaa. Makeisten lisäksi salmiakkia käytetään virvoitusjuomissa ja jopa lihavalmisteissa. Salmiakin maku on sellainen, mitä luultavasti suomalainen ei osaa eritellä, mutta se on todella suolaisen makea yhdistelmä. Jos esimerkiksi tutkii sosiaalista mediaa, siellä tulee vastaan videoita jossa ulkomaalaiset kokeilevat tätä suomalaisten herkkua.
            </p>

              <figure>
                <img id="image2" src="image_1_b.jpg" alt="poisson">
                <figcaption id="figcaptionside">A pixelated animation</figcaption>
              </figure>

            <p>Miksi suomalaiset pitävät salmiakin makua itsestäänselvyytenä? Suomalaisten yleiset makumieltymykset ovat muutenkin pelkistettyjä ja mausteettomia, joten miksi salmiakki on täällä niin suosittua?
		  	Seinäjoen Ammattikorkeakoulun kaksi vaihto-opiskelijaa ja kaksi suomalaista opiskelijaa saivat maistaa erilaisia salmiakkituotteita muun muassa apteekista ostettua salmiakkipastilleja, -jauhetta ja -tikkareita. Salmiakkipastillit eivät saaneet lämmintä vastaanottoa. Toinen vaihto-opiskelijoista kommentoi: “Tämä maistuu jaloille”. Voimakkain makuelämys oli itse jauhe, jota maistellessa naamojen kipristelyä oli vahvasti havaittavissa. Onneksi salmiakkitikkarit olivat kaikkien mieleen, jolloin salmiakin maistelu saatiin lopetettua hyviin tunnelmiin.</p>

          </div>
          <br>

          <div>
            <div id="previous">
              <p>Previous article</p>
              	<?php
					$directory = dirname(dirname(__FILE__));
					//var_dump($directory);
					//get all files in specified directory
					$files = scandir($directory);
					$files = array_map('strtolower', $files);
					sort($files);
					//var_dump($files);
					//var_dump($directory . '\\' . $files[5]);
					//print each file name
					$index = 0;
					$dirs = array();
					$myfile = 'bloups';
					foreach($files as $file)
					{
					 //check to see if the file is a folder/directory
					 if(is_dir($directory . '\\' . $file))
					 {
						if ( $file === strtolower(basename(dirname(__FILE__))) ){
							//echo "That's me";
							$myfile = $file;
						}
					  	//var_dump($file);
						array_push($dirs, $file);
					 }
					}
					//var_dump($myfile);
					$index = array_search($myfile, $dirs);
					//var_dump($dirs);
					//var_dump($index);
					//echo $dirs[($index + 1)];
					if ( $index > 2 ){
						$filesInside = scandir($directory . '\\' . $dirs[($index - 1)]);
						//var_dump($filesInside);
						$FileName = '';
						for ($i = 0; $i < sizeof($filesInside); $i ++){
							if (preg_match('/.php$/', $filesInside[$i])){
								$FileName = $filesInside[$i];
							}
						}
						$NameOfThePage = '';
						$handle = fopen($directory . '\\' . $dirs[($index - 1)] . '\\' . $FileName, "r");
						if ($handle) {
							while (($line = fgets($handle)) !== false) {
								// process the line read.
								if ( preg_match('/<p id="header">/',$line) ) {
									//var_dump($line);
									//var_dump (explode(('<'), explode('>', $line)[1])[0]);
									$NameOfThePage = explode(('<'), explode('>', $line)[1])[0];
									break;
								}
							}

							fclose($handle);
						} else {
							// error opening the file.
						}
						echo '<a href="../' . $dirs[($index - 1)] . '/' . $FileName . '">' . $NameOfThePage . '</a>';
					}
				?>
            </div>
            <div id="next">
              <p>Next article</p>
              	<?php
					$directory = dirname(dirname(__FILE__));
					//var_dump($directory);
					//get all files in specified directory
					$files = scandir($directory);
					$files = array_map('strtolower', $files);
					sort($files);
					//var_dump($files);
					//var_dump($directory . '\\' . $files[5]);
					//print each file name
					$index = 0;
					$dirs = array();
					$myfile = 'bloups';
					foreach($files as $file)
					{
					 //check to see if the file is a folder/directory
					 if(is_dir($directory . '\\' . $file))
					 {
						if ( $file === strtolower(basename(dirname(__FILE__))) ){
							//echo "That's me";
							$myfile = $file;
						}
					  	//var_dump($file);
						array_push($dirs, $file);
					 }
					}
					//var_dump($myfile);
					$index = array_search($myfile, $dirs);
					//var_dump($dirs);
					//var_dump($index);
					//echo $dirs[($index + 1)];
					if ( $index != sizeOf($dirs) ){
						$filesInside = scandir($directory . '\\' . $dirs[($index + 1)]);
						//var_dump($filesInside);
						$FileName = '';
						for ($i = 0; $i < sizeof($filesInside); $i ++){
							if (preg_match('/.php$/', $filesInside[$i])){
								$FileName = $filesInside[$i];
							}
						}
						$NameOfThePage = '';
						$handle = fopen($directory . '\\' . $dirs[($index + 1)] . '\\' . $FileName, "r");
						if ($handle) {
							while (($line = fgets($handle)) !== false) {
								// process the line read.
								if ( preg_match('/<p id="header">/',$line) ) {
									//var_dump($line);
									//var_dump (explode(('<'), explode('>', $line)[1])[0]);
									$NameOfThePage = explode(('<'), explode('>', $line)[1])[0];
									break;
								}
							}

							fclose($handle);
						} else {
							// error opening the file.
						}
						echo '<a href="../' . $dirs[($index + 1)] . '/' . $FileName . '"> SEINAJOKI MAP </a>';
					}
				?>
            </div>
          </div>

          <p id="see_also">See Also:</p>

          <?php include("../bottom.php"); ?>

        <div class="black_bottom">
          <p>LOUD MAGAZINE &copy; 2018<p>
        </div>
    </body>
</html>
