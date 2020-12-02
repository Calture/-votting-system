<?php
include 'dbconnect.php';
include 'left_panel.php';

$id=$_GET['id'];

$sql=mysqli_query($conn,"SELECT * FROM members WHERE id='$id'")or die(mysqli_error($conn));
while ($record=mysqli_fetch_assoc($sql)) {
	$id=$record['id'];
    $firstname=['firstname'];
    $middlename=['middlename'];
    $lastname=['lastname'];
    $id_passport=['id_passport'];
    $pollingstation=['pollingstation'];
    $caw=['caw'];
    $caw_code=['caw_code'];
    $constituency=['constituency'];
    $const_code=['const_code'];
    $county=['county'];
    $county_code=['county_code'];
    $date_ofbirth=['date_ofbirth'];
    $sex=['sex'];
    
}
?>



<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ODMs</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <div id="right-panel" class="right-panel">

        
        <?php include 'header.php';?>
        

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="content.php">Dashboard</a></li>
                            <li class="active">View Record</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
	        <div class="col-sm-8">
	        	<h4 align="center" style="margin: 10px">DETAILS OF </h4>
	        	<div class="card">
	            <div class="card-body card-block">
	                <div class="form-group">
	                	<label for="id" class=" form-control-label">Id</label>
	                	<input type="text" class="form-control" disabled value="<?php echo $id;?>">
	                </div>
                    <div class="form-group">
                    	<label for="firstname" class=" form-control-label">First Name</label>
                    	<input type="text" class="form-control" disabled value="<?php echo $firstname;?>">
                    </div>
                    <div class="form-group">
                    	<label for="middle_name" class=" form-control-label">Middle Name</label>
                    	<input type="text" class="form-control" disabled value="<?php echo $middlename;?>">
                    </div>
                    <div class="form-group">
                    	<label for="last name" class=" form-control-label">Last Name</label>
                    	<input type="text" class="form-control" disabled value="<?php echo $lastname;?>">
                    </div>
                    <div class="form-group">
                    	<label for="id_passport" class=" form-control-label">id_passport</label>
                    	<input type="text" class="form-control" disabled value="<?php echo $pollingstation;?>">
                    </div>
                	<div class="form-group">
                		<label for="caw" class=" form-control-label">Caw</label>
                		<input type="text" class="form-control" disabled value="<?php echo $caw;?>">
                	</div>
                    <div class="form-group">
                        		<label for="caw_code" class=" form-control-label">caw_code</label>
                        		<input type="text" class="form-control" disabled value="<?php echo $cow_code;?>">
                    </div>
                	<div class="form-group">
                        		<label for="constituency" class=" form-control-label">constituency</label>
                        		<input type="text" class="form-control" disabled value="<?php echo $constituency;?>">
                        	</div>
                   	<div class="form-group">
                        		<label for="const_code" class=" form-control-label">const_code</label>
                        		<input type="text" class="form-control" disabled value="<?php echo $const_code;?>">
                        	</div>
                    <div class="form-group">
                        		<label for="County" class=" form-control-label">County</label>
                        		<input type="text" class="form-control" disabled value="<?php echo $county;?>">
                        	</div>
                   	<div class="form-group">
                        		<label for="county_code" class=" form-control-label">county_code</label>
                        		<input type="text" class="form-control" disabled value="<?php echo $county_code;?>">
                        	</div>
                	<div class="form-group">
                        		<label for="dateofbirth" class=" form-control-label">date_ofbirth</label>
                        		<input type="text" class="form-control" disabled value="<?php echo $gender;?>">
                        	</div>
                            <div class="form-group">
                            	<label for="sex" class=" form-control-label">sex</label>
                            	<input type="text" class="form-control" disabled value="<?php echo $sex;?>">
                            </div>
                    	</div>
                    </div>
                </div>
	        </div>
        </div>
        <div class="col-sm-2"></div>