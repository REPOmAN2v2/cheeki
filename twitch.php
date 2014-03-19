<html>
        <body>
            
            <ul class="online">
                <?php
                    /**
					* array with all stream names i.e. www.twitch.tv/"iksf".
					* To add more users just add their channel names with comma seperation
					* This is all there is, no futher editing required
					*/
					$streamList = array("tkgp", "daacideatah", "mrbadger0", "hoolian1000", "kinkurono", "lannonymus", "nomad_gsf", "portablejerkops", "tarrende", "the__spartan", "twitchtvisok");

					// This variable becomes one long url with the channel names stringed up behind it
					// This url then fetches a json file from twitch with all the selected channels information
					$userGrab = "http://api.justin.tv/api/stream/list.json?channel=";

					//I use this array to compare with the members array. All users in this arrat are substracted from the members array and hence are //"offline"
					$checkedOnline = array();

					foreach($streamList as $singleStream){
							$userGrab .= ",";
							$userGrab .= $singleStream;
					}

					//grabs the channel data from twitch.tv streams
					$json_file = file_get_contents($userGrab);
					$json_array = json_decode($json_file, true);

					//gets member names from stream url's and checks for online members
					foreach($streamList as $i => $singleStream){
							if(isset($json_array[$i]))
							{
								$title = $json_array[$i]['channel']['channel_url'];
								$array = explode('/', $title);
								$online = end($array);
								$viewers = $json_array[$i]['stream_count'];			
								if(checkOnline($online, $viewers))
								{
									$checkedOnline[] = $online;
								}	
							}
														
					}
                    
					//checks if player streams are online
					function checkOnline($online, $viewers)
					{  
							//If the variable online is not equal to null, there is a good change this person is currently streaming
							if ($online != null)
							{
									echo '<li><a href="http://www.twitch.tv/'.$online.'"> <strong>'.$online.'</strong></a>';
									echo '&nbsp <img src="images/online.png"></br></li>';
									return true;
							}
                        
                            elseif ($online = null)
							{
									echo '<li><a> <strong>Nobody!</strong></a>';
									echo '&nbsp <img src="images/offline.png"></br></li>';
									return true;
							}
					}   
                    
                ?>
                </ul>
                
                <!--<ul class="offline">
                ?php
					//This part list all the people currently offline. Here the array with online users is compared with the total users.
					//online users are then removed from the total users array.
					foreach ($streamList as $i => $singleStream)
					{
							if(in_array($singleStream, $checkedOnline))
							{
									unset($streamList[$i]);
							}                                      
					}
					//print a nice list with people that can't currently be bothered with streaming their games    
					foreach ($streamList as $i => $singleStream) {
							echo '<li><a href="http://www.twitch.tv/'.$singleStream.'"> <strong>'.$singleStream.'</strong></a>';
							echo '&nbsp<img src="images/offline.png"></br></li>';
					}
                ?>
                </ul>-->
        </body>
</html>