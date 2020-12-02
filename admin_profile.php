<?php include ('left_panel.php');?>
<?php include ('body.php');?>
<?php
include ('dbconnect.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"SELECT * FROM members WHERE id='$id'")or die(mysqli_error($conn));
while ($record=mysqli_fetch_assoc($sql)) {
    
    $firstname=$record['firstname'];
    $middlename=$record['middlename'];
    $id_passport=$record['id_passport'];
    

    
}
?>
    <div id="right-panel" class="right-panel">
        <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                <div class="card-body card-block">
                    <div class="form-group">
                        <label  class=" form-control-label">Full Name</label>
                        <input type="text" name="firstname" class="form-control" disabled value="<?php echo $firstname;?>">
                    </div>
                    <div class="form-group">
                        <label  class=" form-control-label">Email</label>
                        <input type="email"  name="middlename" class="form-control" disabled value="<?php echo $middlename;?>">
                    </div>
                    <div class="form-group">
                        <label  class=" form-control-label">Gender</label>
                        <input type="text" name="id_passport" class="form-control" disabled value="<?php echo $id_passport;?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>