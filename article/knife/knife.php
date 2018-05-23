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
            <p id="header">A FLIPPIN’ AWESOME KNIFE!</p>

            <p id="first">A journey into the world of butterfly knives.</p>

            <p id="author">Text: Daniel Frolov Pictures: Nicolas Cambron & Daniel Frolov
            </p>

            <p>Picture this: one Batangueño. One man fiercely fighting off 29 assailants. The battle was long and tiring. As time passed, fewer and fewer of them stood around him. He on the other hand, was still on both feet, panting. Finally, after a long time, maybe 10 minutes, maybe 10 hours, our lone Batangueño was the last man standing. He proudly defeated every single one of them, and to do that he used only one thing: a butterfly knife!</br>
This is a legend about why this knife was nicknamed “veinte y nueve”, which means 29 in Tagalog, the language of the Philippines. Another theory is that it used to measure 29cm, but that is boring…</br>
The origins of the knife itself are just as mysterious. What we’re sure about, is that it’s at least a few centuries, maybe even a couple of millenniums old. But age doesn’t matter, just like your funny grandpa at family diners, today more than ever, it grabs everyone’s attention. You have probably seen it in many movies such as “The Goonies”, “The Mummy”, or more recently with “Kick-ass” and “Pacific Rim”. Everyone knows what it looks like even if they haven’t ever seen one in real life. The thing with balisong knives is, they’re mesmerizing.</br>
This probably explains why to this day they’re incredibly popular. Multiple knife flipping competitions take place each year. You can often see them while walking through booths at conventions like Blade Show or Shot Show. YouTube hosts hundreds, if not thousands of videos of butterfly knives tricks and tutorials.</br>
            </p>

            <img id="image2" src="image1.png" alt="butterfly knife">
            <figcaption id="figcaptionside">Butterfly knife</figcaption>

            <p>You might wonder how does one get into flipping? I can’t answer for everyone, but in my case, I always loved knives. Since I was little, weapons, and knives in particular, have fascinated me. While my collection was growing, one or two balisongs made it into it. I remember when I had just received one of them. As soon as we came out of the store I took the knife out of the paper bag and started trying flippi-… aaand I cut myself in the first two minutes of owning it. It was a deep cut but nothing bad.</br>
Since then, I tried flipping from time to time but never anything serious. At some point I think I got a semblance of a figure together… It’s only more recently that I started really digging into the world of knives. Where before was a strong interest and love, appeared a furious passion. I became interested in every single detail of the knife world: from the technical details such as steels and characteristics, the forging process, all the way to the artistic details, the people behind each model, the types of knives and more…</br>
It’s only natural then, that at some point I stumbled upon a video of balisong flipping. Then another. Then another one. And another one. I became hypnotized. It made me want to try these tricks, learn complex figures to be able to do them myself. I dug out my trusty butterfly, the one that cut me many years ago, and started practicing. It was good enough to kickstart my new-found hobby, but it was way too clunky and clumsy. I did some research but buying this kind of blade in France was much harder and more expensive than in the USA. Then, by some weird turn of events, while traveling, I found in a small historical town on the west coast of France named Guérande, a knife that was not too bad and for only 4 euros! I started practicing moves I already learned and mastering new ones. It was much better than the old one, although nowadays I’m thinking about investing in a new one.</br>
I would really recommend trying this out at least once. Just while writing this article I taught a friend a new figure, while the others watched with interest. Some of them already tried it a little bit, just to see what it felt like. There are no obligations, but the adrenaline rush is quite enjoyable, and you get a real sense of accomplishment when you successfully pull of a new move. If you’d rather stay away from knives and watch from a distance, do just that! Watch a couple of videos on the Internet, if you get the chance to see someone in real life, do not miss it! Although I would be really jealous since I haven’t seen a professional in real life as of yet!</br>
            </p>

            <p id="main">Price range </br></br>
              Prices for butterfly knives vary a lot.</br></br>
              They range from a couple of euros, for the cheapest, to a couple hundreds of euros for the best of the best.</br></br>
              You don't have to spend a lot to start flipping!</br>
            </p>

            <figure>
              <img id="image1" src="image2.png" alt="butterfly flipping">
              <figcaption>Flipping Butterfly knife steps</figcaption>
            </figure>

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
