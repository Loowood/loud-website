<html>
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> LOUD 2018 </title>
        <link style="text/css" rel="stylesheet" href="pandas.css">
        <link style="text/css" rel="stylesheet" href="../commun.css">
        <link href="oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Oswald:300|Source+Sans+Pro:200,300,400" rel="stylesheet">
    </head>
    <body>
        <?php include("../top.php"); ?>

        <div class="white_square">
          <div class="text">
            <p id="header">SAVING A PANDA</p>

            <p id="first">What do you think about pandas in captivity?</p>

            <p id="author">Text: Arielle Tinchon Illustrations: Valtteri ...
            </p>

            <img id="image1" src="panda1.jpg" alt="panda face">

			<h2>Did you know?</h2>
			<p>
				The giant panda, also known as panda bear or just panda is native from south central of china.
				Its scientific name is “ailuropoda melanoleuca” which literally means ”black and white cat-foot”.
				The lifespan of a panda is approximately 20 years and it is classified as carnivorous, even though it eats 99% bamboo.
								

				The average giant panda eats as much as 9 to 14kg of bamboo shoots a day to compensate for the limited energy content of its diet, 
				which means they spend at least 12 hours per day eating bamboo. The giant panda’s teeth are almost 7 times bigger than human teeth.

				Giant pandas are generally solitary and each adult has a defined territory. They do not hibernate and they are good swimmers and excellent tree climbers.

				A panda’s skin has two different colors, under their black fur, the skin is dark while under the white fur it is pink! Contrary to the common belief, 
				giant pandas are not related to the red panda. However, there is a subspecies of panda in the Auinling Moutains in Shaanxi with a dark brown versus light brown pattern.

				Even though the giant panda is threatened by continued habitat loss and fragmentation, in 2016 the IUCN reclassified the species from ”endangered” to ”vulnerable” 
				as it seems that the population in the wild is on the rise.
            </p>

            <div class="illu2">
                <img src="panda2.jpg" alt="pandas eating bamboo">
            </div>

			<h2>Why do they matter?</h2>
            <p>
				Giant pandas play a crucial role in forests as they roam by spreading seeds and facilitating growth of vegetation. 
				The forests they live in are home to a stunning array of wildlife such as dwarf blue sheep, multicolored pheasants, and other endangered species.
				The panda’s habitat is at the geographic and economic heart of China, home to millions of people.

				Organizations are protecting the giant panda by increasing the area of panda habitat under legal protection, creating green corridors to link isolated pandas, 
				patrolling against poaching, illegal logging and encroachment, building local capacities for nature reserve management and continuing research and monitoring.
            </p>

			<br>
            <h2>How do pandas in captivity benefit panda conservation?</h2>

            <p>
				Breeding pandas in captivity and planting them back in the wild can’t replace conservation of the natural populations and their habitats, but the pandas kept 
				in captivity in various countries are used for extensive research that helps providing invaluable tools for panda conservation in the natural habitat.
				A sufficient panda population in captivity in various countries also helps to safeguard the survival of the species for example in a natural catastrophe or an 
				epidemic occurs in their natural habitat.
				A key goal of zoos is to provide information to the public on the issues concerning pandas and other endangered species and various methods of conservation.
				Raising awareness is an important way of increasing people’s interest towards conservation of endangered species and their habitats.

				The pandas can be called ambassadors for nature conservation.

				<br><br>
				<i>
					If you want to see some pandas, you can go to the Ähtäri Zoo just one hour from Seinäjoki.
					For more informations about the conservations programs, visit <a href="http://www.ahtarizoo.fi/index.php/en/giant-panda">the Ähtäri Zoo's website</a> and <a href="http://wwf.panda.org/knowledge_hub/endangered_species/giant_panda/solutions">WWF's website</a>.
				</i>
			</p>

			<div class="illu3">
                <img src="panda3.jpg" alt="panda hanging on a branch">
            </div>
			
			
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
						echo '<a href="../' . $dirs[($index + 1)] . '/' . $FileName . '">' . $NameOfThePage . '</a>';
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
