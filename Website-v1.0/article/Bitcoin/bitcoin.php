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
            <p id="header">BITCOIN, THE CURRENCY 2.0</p>

            <p id="author">Text: Romain Jouanneau Photo: Romain Jouanneau
            </p>

            <img id="image1" src="bitcoin.jpg" alt="bitcoin">
            <figcaption>Bitcoin around the world.</figcaption>

            <p>I desired to dive in to bitcoin research to better understand more about this crypto currency. I started to make a search about the bitcoin and I found that bitcoin was created in 2008 and exposed in 2009 by a Japanese guy, Satoshi Nakamoto. It’s bits currency created by the processor in graphics cards, this money is not controlled by any government and is not regulated. This currency has fluctuation like the other moneys or stock exchange. It’s not the only one crypto currency, the Bitcoin is the main crypto currency but not the only one, there is also the Ethereum, the Ripple, the Litecoin and the EOS for the most famous.
            </p>
            
            <h2>The minning</h2>

            <p>In my search I found how to create the Bitcoin, it’s the mining. The mining is the process where the processors and graphics cards which resolve the mathematics problems in exchanges of coin, The Bitcoin. I desired to do this, but my IT professor explain to me the default about this method. “You can use this method for created Bitcoin, but the energy and the cost of the processors and graphics cards are too expensive. It’s not profitable !!”. I continued my search about this and I read an article about the company, which created a low-cost computer with a good yield for mining the crypto currency like Samsung which create integrated circuit for mining the Bitcoin.
            </p>

              <figure>
                <img id="image2" src="dark-web.jpg" alt="dark-web">
                <figcaption id="figcaptionside">The bitcoin and the dark web representation.</figcaption>
              </figure>

              <h2>Bitcoin, a normal currency</h2>

            <p>I heard that bitcoin fluctuates like the stock exchange. Then, I oriented my search in this direction. I found the Bitcoin has a rate like the other money, but this variation is important. It’s important to check the Bitcoin rate all times if you want to invest in the trader. Since early 2017 the crypto-money has exploded with +200% in 2017’s end, to achieve almost the $20 000 for one Bitcoin. But when you have Bitcoin you need to stock it. You can use your own stockage devise like your USB key or hard disk. You can also appeal the services of the new company which are specialized in like bank.
            </p>

            <h2>How to spent it ?</h2>

            <p>But you can’t buy anything with your Bitcoin in the physical shop except in Japan, where you can pay in many shop with your cell phone. Bitcoin is internet currency, which means can pay in many websites to buy things. But is not a regulate currency then the website has remove this possibility like Steam the famous game platform.
            </p>
        
            <h2>The dark-bitcoin</h2>

            <p>I have read an article about the Bitcoin and the Dark-Web on the traceability of this currency. I found about the Bitcoin transactions are not from account to account but from PC to PC. The traceability is difficult because the operations pass by different IP address that don’t save the older IP address every time, but this information is for the network technician. After that, the creator of the Bitcoin has secured the bitcoin with many encryption keys for this currency was not hacked and broken. The Bitcoin can be used for buying illegals things. It’s possible with computer which has very strong CPU to trace the transactions.</p>

            <h2>The fall</h2>
            <p>In my search, I saw an article about the ending of Bitcoin. The economist explains than despite this big growth the Bitcoin have felled, from $20.000 to $6.600 today. “The people who have seen the incredible growth sold their Bitcoins in a same time which created a stock crash like in Greece in 2008”. This led to unbalanced market, because of supply and demand. But one part of the computer scientist explains this ending of Bitcoin because mining is no infinite we “just” have 21 million Bitcoins that will be mined. After that, the Bitcoin will disparate because the market will be destroyed. Another part says the mining is infinite, because the Bitcoin is created with bank transfer and there will always be bank transfers.</p>
            
            <p>With this information, I don’t have to dive in the Bitcoin or another crypto currency because It’s an ephemeral placement and we arrive at the Bitcoin’s ending. If you want to invest in the crypto currency, you can to invest in Ethereum or EOS because the fluctuation doesn’t have exploded and they rest accessible.</p>

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
