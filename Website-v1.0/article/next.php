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