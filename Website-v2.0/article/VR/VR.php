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
            <p id="header">LIFE IN ANOTHER REALITY</p>

            <p id="first">Virtual Reality literally makes it possible to experience
              anything, anywhere, anytime.
            </p>

            <p id="author">Text: Ville-Valtteri Veikkolainen Illustration: Nelli Malmivaara

            </p>

            <img id="image1" src="a1.png" alt="illustration">
            <figcaption></figcaption>

            <p>Virtual Reality is the most immersive kind of reality technology and can convince the human brain that it is somewhere that it actually is not. Head-mounted displays are used with headphones and hand controllers to supply an extensive experience. The future of virtual reality is set to be a pillar of our daily lives as the largest technology companies on the Earth like Facebook, Google, and Microsoft are currently investing billions of bucks into virtual reality businesses and startups.

            </p>



            <p>In order for the human intelligence to accept an artificial, digital environment as real, it has to not only look real, but also feel real. Authenticity can be achieved by using a head-mounted display that portrays recreated life size 3D virtual surroundings without the boundaries normally seen on TV or a computer screen. Feeling real can be accomplished via handheld input devices such as motion trackers that base interactivity on the user’s movements. By stimulating many of the same senses one would use to navigate in the real world, virtual reality environments are feeling increasingly more like the natural world.
            </p>

  			    <h2>How Virtual Reality is being used today</h2>

            <p>Unsurprisingly, the video game industry is one of the largest proponents of Virtual Reality. Support for the Oculus Rift headsets has already been jerry-rigged into games like Skyrim and Grand Theft Auto, but newer games like Elite: Dangerous come with headset support built right in. Many tried-and-true user interface metaphors in gaming have to be adjusted for VR (after all, who wants to have to pick items out of a menu that takes up your entire field of vision?), but the industry has been quick to adapt as the hardware for true Virtual Reality gaming has become more widely available.
            </p>

            <h2>Virtual Reality and data visualization</h2>

            <p>Scientific and engineering data visualization has benefitted from Virtual Reality for years, although recent innovation in display technology has generated interest in everything from molecular visualization to architecture to weather models.
            </p>

            <p id="main">”...recent innovation in display technology has generated interest in everything from molecular visualization to architecture to weather models.”
            </p>

            <h2>VR for aviation, medicine and the military</h2>

            <p>
              In aviation, medicine, and the military, Virtual Reality training is an attractive alternative to live training with expensive equipment, dangerous situations, or sensitive technology. Piloting commercial flights require taking on exceptional responsibility, as there are often several hundred passengers on any given flight. Training for this responsibility requires both conceptual and hands on training. The initial hands on training can often be supplemented by use of a simulator. These simulators, which employ sophisticated computer models, use virtual reality to recreate what a pilot should assume when they are actually flying. Simulators even use hydraulics to recreate the feeling of takeoff and landing. The advantage of using a virtual reality flight simulator is that this all takes place in a managed environment, which is forgiving to errors and poses no risk in reality.
            </p>

            <p>
              Surgeons can train with virtual tools and patients and transfer their virtual skills into the operating room. Studies have already begun to show that such training leads to faster doctors who make fewer mistakes. Furthermore, police and soldiers are able to conduct virtual raids that avoid putting lives at risk.
            </p>

            <H2>Virtual Reality and the mental illnesses</H2>

            <p>
              Speaking of medicine, the treatment of mental illnesses, including post-traumatic stress disorder, stands to benefit from the application of Virtual Reality technology to ongoing therapy programs. Whether it is about allowing seniors to confront challenges in a controlled environment, or helping people overcome phobias in combination with behavioral therapy, VR has potential beyond gaming, industrial and marketing applications to help people heal from, reconcile and understand real world experiences.
            </p>

          </div>



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
