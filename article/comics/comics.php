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
            <p id="header">COMICS IN FINLAND</p>

            <p id="first">Finland, country of lakes and saunas, also has an impressive number of diverse comics.
            </p>

            <p id="author">Text & Photography: Cambron Nicolas Pictures: Moomin Characters
            </p>

            <img id="image1" src="Moomin.jpg" alt="Moomin">
            <figcaption>Moomin</figcaption>

            <p>
            This small nation in terms of population per kilometres square, has a curiously impressive amount of different genre of comic strips.
            Nowadays artists try to create new style comic pages by picking templates from traditional art and entertainment.
            The comics world has grown up, thanks to medias, as magazine advertisement or cartoons broadcast on TV.
            It is henceforth inconceivable that Finnish magazines that didn’t have comics pages.
            As you can imagine, comic strips have evolved after all these years as the evolution of thoughts.

            The story begins in 1911, for the first Finnish comic book, Professori Itikaisen tutkimusretki (” Professor Mosquito’s Exploration”) is about a guy which explores the Eastern Asia. It was created by Ilamari Vaino and published by WSOY which refer to a Finnish publishing house owned by Bonnier the 21st of November. But the real expansion of interest about comics starts a bit later, during the end of 1920’s. Thanks to the support of new medias, most of comics strips were originate from Finland, and the first daily Finnish newspaper comic strip book was Herra Pulliainen (1927-33) by Akseli Halonen. It’s a traditional madcap humour, which describes a guy, seeing the world in hiws way.
            </p>

            <p id="main">MOOMIN AND TOM OF FINLAND EMERGED
            </p>

            <p>A couple of years after, one of the most important comic appeared, the Moomin, written by Tove Jansson in 1945. Later, she let her brother Lars Jansson take control. It was written, drawn and published until 1975.Moomin became very popular in a few years. It became also a real phenomenon all around the world and was published in 40 countries and in 120 newspapers. A couple of years after, one of the most important comic appeared, the Moomin, written by Tove Jansson in 1945. Later, she let her brother Lars Jansson take control. It was written, drawn and published until 1975.Moomin became very popular in a few years. It became also a real phenomenon all around the world and was published in 40 countries and in 120 newspapers.
            </p>

              <figure>
                <img id="image2" src="pekka.jpg" alt="Pekka">
                <figcaption id="figcaptionside">Pekka puupää</figcaption>
              </figure>

            <p>Another renowned international comic artist was “Tom of Finland” which is, more precisely in the internationawl gay community. His illustrations and comic had a real impact on the iconographic and interpretations of gay fantasies. That it took an important part on the gay community in the beginning of the 90’s.
During the 1960s, Finnish comics take another way, sort of “comics revolution” appeared. Finnish comics began to break free at their reputation as children’s entertainment. To put us back in the context, pop art reaches its apex, and this brought everyday imagery into art. Timo Aarniala is one of the most popular artist that had mixed all different genre that could exist in his comics: topical political, commentary, slapstick humor and poetic stream of consciousness. In the same way, famous Finnish comic like  created by Ola Fogelberg, Herra Kerhonen, Veli Giovani (scriptwriter), Gosta Thilén, Veli Giovanni and Alexander Tawtiz.


            <h2>FINNISH COMICS SOCIETY</h2>

            <p>

            The organisation has been working for Finnish comics since 1971. People started writing about comics for a magazine called Sarjainfo, which still exists after 40 years. Finnish Comics Society created an annual life-achievement award for comic artists, called Puupäähattu.
            The Puupää Hat (Finnish: Puupäähattu) is the comic book prize awarded by the Suomen sarjakuvaseura every year since 1972. It rewards a Finnish comic book author for all of his work. His name is a tribute to the classic cartoon series Pekka Puupää (1925-1976). One of their main project was in 1970’s, with the creation of comic festival on Helsinki.
            One of the most important steps in the evolution of Finnish comics has been the birth of the Finnish Comics Centre in 2008 Sarjakuvakeskus, is an open cultural centre for comics and related to art. This has given a new fresh breath onto the comic </p>
            </p>

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
