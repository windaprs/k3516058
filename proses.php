<?php
    if(!empty($_FILES['uploaded_file']))
    {
        $path = "files/";
        $path = $path.basename($_FILES['uploaded_file']['name']);
					if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)){
						header('Location: /sisterwinda/'); 
					} else{
						echo "THERE WAS AN ERROR UPLOADING THE FILE, PLEASE TRY AGAIN!";
					}
				}
			?>	
