<?php include 'dbconnect.php';?>
<?php include 'left_panel.php';?>

<?php 
$db_records=mysqli_query($conn,"SELECT * FROM members") or die(mysqli_error());
?>


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ODM</title>
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
                            <li class="active">Employee Table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    
                    
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Employee Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Middle Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">id_passport</th>
                                            <th scope="col">Polling Station</th>
                                            <th scope="col">Caw</th>
                                            <th scope="col">Caw_code</th>
                                            <th scope="col">Constituency</th>
                                            <th scope="col">Const_code</th>
                                            <th scope="col">County</th>
                                            <th scope="col">date_of birth</th>
                                            <th scope="col">Sex</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($record=mysqli_fetch_assoc($db_records)){
                                            ?>
                                            <tr>
                                                <td><?php echo $record['id'];?></td>
                                                <td><?php echo $record['firstname'];?></td>
                                                <td><?php echo $record['middlename'];?></td>
                                                <td><?php echo $record['lastname'];?></td>
                                                <td><?php echo $record['id_passport'];?></td>
                                                <td><?php echo $record['date_ofbirth'];?></td>
                                                <td><?php echo $record['pollingstation'];?></td>
                                                <td><?php echo $record['caw'];?></td>
                                                <td><?php echo $record['caw_code'];?></td>
                                                <td><?php echo $record['constituency'];?></td>
                                                <td><?php echo $record['const_code'];?></td>
                                                <td><?php echo $record['county'];?></td>
                                                <td><?php echo $record['county_code'];?></td>
                                                <td><?php echo $record['sex'];?></td>
                                                <td>
                                                    <a href="view_employee.php?id=<?php echo $record['id'];?>" class="btn btn-primary">View</a>
                                                    <a href="update_employee.php?id=<?php echo $record['id'];?>" class="btn btn-info">Update</a>
                                                    <a href="delete_employee.php?id=<?php echo $record['id'];?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   
                        
                </div>   
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        </div> <!-- .content -->
    </div>

   