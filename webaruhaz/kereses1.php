<html lang="hu">
<head>
<?php include 'main_head.php';?>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container">
	<?php include 'main_fejlec.php';?>
	<?php include 'main_menu.php';?>
	<hr>
	<H1 align="center">Keres�s Sztrelcsik Zoli web�ruh�zban</H1>

    <!--   
		<p align="center">
			<a href="#" data-toggle="tooltip" title="Szak�rt�k lyukhoz k�pest.">
				<img src="kollazs.jpg" width="300" height="200" alt="" >
			</a>
		</p>
	-->

	<hr>
	<br><br><br><br>
  <div align="center">
  

  
		<form action="kereses_eredmenye1.php">
			<div align="center" style="width:300" class="form-group">
				<label for="sel1">
				<div align="center">Kateg�ria</div>
				</label>
				<div align="center">
				  <select class="form-control" id="sel1" name="sellist1">
				    <option>Minden term�k</option>
				    <option>Alaplap</option>
				    <option>Monitor</option>
				    <option>Mem�riak�rtya</option>
				    <option>Processzor</option>
				    <option>Ventill�tor</option>
				    <option>Vide�k�rtya</option>
			      </select>
				  <br>
				</div>
				<label for="sel2">
				<div align="center">�r</div>
			    </label>
				<div align="center">
				  <select class="form-control" id="sel2" name="sellist2">
				    <option value="1000" >< 1.000 Ft</option>
				    <option value="10000" >< 10.000 Ft</option>
					<option value="25000" >< 25.000 Ft</option>
				    <option value="50000" selected="selected" >< 50.000 Ft</option>
				    <option value="100000" >< 100.000 Ft</option>
				    <option value="500000" >< 500.000 Ft</option>
				    <option value="1000000" >< 1.000.000 Ft</option>
			      </select>
				</div>
			</div>
			<div align="center">
			<br>
			  <button type="submit" class="btn btn-primary">Keres�s</button>
		  </div>
		</form>
	
	</div>



</div>
</body>
</html>
