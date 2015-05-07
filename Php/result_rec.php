<?php

foreach ($req as $key => $value) {
			# code...
?>
		<a href="?entreprise=<?php echo ($value['nom']);?>"><h2 style="color: black;"><?php echo ($value['nom']);?></h2></a>
		<h5 style="color: black;">Domaine : <?php echo ($value['domaine']);?></h5>
		<p style="color: black;">Présentation de l'entreprise : <?php echo ($value['presentation']);?> </p>

<?php
		}
?>