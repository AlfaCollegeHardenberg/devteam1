<?php
	require_once('header.php');
	require_once('mysql.php');
?>


<section>
    
    <a class="link3" href="">
    	<div id="voortgangknop">
        </div>
    </a>
            
    <div id="pag1blok1">
        <h1 class="titel">Welkom!</h1>
        <p>Op deze website kun je al je voortgang zien van jouw vakken. 
        	Klik op de grote knop waar "voortgang" op staat om jou progressie te bekijken.
        	
        	<?php
        	$query = "SELECT * FROM klassen";
        	$result = mysqli_query($conn, $query);
        	echo '<select>';
        	while ($row = mysqli_fetch_assoc($result)) {

        	echo '<option value="">'.$row['Richting'] .' - ' .$row['Klas_naam'].'</option>';
			
			}
			echo '</select>';
			?>
        	

        </p>
    </div> 
    
    <div id="pag1img1">
    
    </div>

</section>

<?php
	require_once ('footer.php');
?>