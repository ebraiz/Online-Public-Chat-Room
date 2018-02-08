	
			<?php
				if(isset($_POST['audio'])){
					
					$name = $_POST['music'];
				
						if($name == 'Tum Hi Ho'){
							echo "<audio controls autoplay><source src='includes/tumhi.mp3' type='audio/mpeg'></audio>";
							exit();
						}
						elseif($name == 'Kaise Mujhe Tum'){
							echo "<audio controls autoplay><source src='includes/kaisemujhe.mp3' type='audio/mpeg'></audio>";
							exit();
						}
						elseif($name == 'Kal Ho Naa Ho'){
							echo "<audio controls autoplay><source src='includes/Kal Ho Naa Ho.mp3' type='audio/mpeg'></audio>";
							exit();
						}
						elseif($name == 'Where The Heart Belongs'){
							echo "<audio controls autoplay><source src='includes/heartbelong.mp3' type='audio/mpeg'></audio>";
							exit();
						}
						elseif($name == 'Jadu Teri Nazar'){
							echo "<audio controls autoplay><source src='includes/jaduteri.mp3' type='audio/mpeg'></audio>";
							exit();
						}
						elseif($name == 'Dil To Pagal Hai'){
							echo "<audio controls autoplay><source src='includes/dilto.mp3' type='audio/mpeg'></audio>";
							exit();
						}
						elseif($name == 'Jash-ne-Baharaan'){
							echo "<audio controls autoplay><source src='includes/bahara.mp3' type='audio/mpeg'></audio>";
							exit();
						}
						elseif($name == 'Chura Liya Hai'){
							echo "<audio controls autoplay><source src='includes/churaliya.mp3' type='audio/mpeg'></audio>";
							exit();
						}
				exit();
				}
				
			?>