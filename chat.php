<link rel='stylesheet' href='style.css' media='all' />

<?php 
			include('includes/db.php');
			echo "<div id='scrollbox3'>";
			$query = "Select * from chat ORDER BY id DESC LIMIT 0,15";		
			$run = $db->query($query);
			
			while($row = $run->fetch_array()) :
			$msg = $row['message'];
			$chars = array('<3',':)',':(','(Y)','(N)');
			$icons = array('&#9829;','&#9786;','&#9785;','&#128077;','&#128078;');
			$new_str = str_replace($chars,$icons,$msg);
			?>
			 
			<div id='chat_data'>
				
				<span style="color:purple;"><?php echo $row['name']; ?>:</span>
				<span style="color:green;"><?php echo $new_str; ?></span>
				<span style="float:right;color:black;"><?php echo date('g:i a', strtotime($row['time'])); ?></span>
			
			</div>
		    
			<?php endwhile; ?>
			 
			</div>