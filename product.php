    <?php
            //header
            require 'header.php';
            include_once 'includes/dbh.inc.php';
     ?>
    <!--page header-->
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="display-4" style="border-bottom: thin solid black; display: inline-block">
                        Prim and Polished <small>Products
                    </h1>
                </div>           
 
    <div class="conatiner-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1>Nail Shapes</h1>
                <p>We offer three nail shapes of square, oval, and round.</p>
    
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
					<?php
                        $sql = "SELECT shape from shapes
						WHERE shape_id = 1;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['shape'];
                            }
                        }
                    ?>
				</h5>
				<div class="card-body">
					<p class="card-text">
					<img src="img/round.png" class="img-fluid">
					<?php
                        $sql = "SELECT descriptionshape from shapes
						WHERE shape_id = 1;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['descriptionshape'];
                            }
                        }
                    ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                        $sql = "SELECT shape from shapes
						WHERE shape_id = 2;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['shape'];
                            }
                        }
                    ?>
				</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/square.png" class="img-fluid">
					<?php
                        $sql = "SELECT descriptionshape from shapes
						WHERE shape_id = 2;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['descriptionshape'];
                            }
                        }
						?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                        $sql = "SELECT shape from shapes
						WHERE shape_id = 3;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['shape'];
                            }
                        }
                    ?>				</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/oval.png" class="img-fluid">
					<?php
                        $sql = "SELECT descriptionshape from shapes
						WHERE shape_id = 3;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['descriptionshape'];
                            }
                        }
                    ?>					
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

                <h1>Nail Lengths</h1>
                <p>We offer three nail lengths of short, medium, and long.</p>
                
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT lengthnail from length
					WHERE length_id = 1;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['lengthnail'];
						}
					}
                    ?>				
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/short.png" class="img-fluid">
					<?php
                        $sql = "SELECT descriptionlength from length
						WHERE length_id = 1;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['descriptionlength'];
                            }
                        }
                    ?>		
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT lengthnail from length
					WHERE length_id = 2;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['lengthnail'];
						}
					}
                    ?>				
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/medium.png" class="img-fluid">
					<?php
                        $sql = "SELECT descriptionlength from length
						WHERE length_id = 2;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['descriptionlength'];
                            }
                        }
                    ?>	
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT lengthnail from length
					WHERE length_id = 3;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['lengthnail'];
						}
					}
                    ?>				
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/long.png" class="img-fluid">
					<?php
                        $sql = "SELECT descriptionlength from length
						WHERE length_id = 3;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['descriptionlength'];
                            }
                        }
                    ?>	
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
                <h1>Nail colors</h1>
                <p>We offer six colors of nails.</p>

			</div>
		</div>
    </div>
                        <div class="colors">
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT color from colors
					WHERE color_id = 1;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['color'];
						}
					}
                    ?>	
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/red.png" class="img-fluid">
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT color from colors
					WHERE color_id = 2;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['color'];
						}
					}
                    ?>
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/orange.png" class="img-fluid">
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT color from colors
					WHERE color_id = 3;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['color'];
						}
					}
                    ?>
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/yellow.png" class="img-fluid">
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT color from colors
					WHERE color_id = 6;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['color'];
						}
					}
                    ?>
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/blue.png" class="img-fluid">
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT color from colors
					WHERE color_id = 4;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['color'];
						}
					}
                    ?>
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/green.png" class="img-fluid">
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="pcard">
				<h5 class="card-header">
				<?php
                    $sql = "SELECT color from colors
					WHERE color_id = 5;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['color'];
						}
					}
                    ?>
					</h5>
				<div class="card-body">
					<p class="card-text">
                    <img src="img/purple.png" class="img-fluid">
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<hr>
<?php
            //footer
            require 'footer.php';
 ?>
