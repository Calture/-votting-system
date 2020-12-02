<?php include 'left_panel.php';?>
<?php include 'body.php';?>




    <div id="right-panel" class="right-panel">

       
       

       
        <div class="content mt-3">
            


                <div class="row">
                    <form action="" method="POST">
                        <div class="card">
                                <div class="card-header"><strong>Members Registration</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label  class=" form-control-label">firstname</label>
                                        <input type="text" name="firstname" placeholder="Firstname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label  class=" form-control-label">middle name</label>
                                        <input type="text" name="middlename" placeholder="middlename" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname" class=" form-control-label">last name</label>
                                        <input type="text" name="lastname" placeholder="lastname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_passport" class=" form-control-label">id_passport</label>
                                        <input type="text" name="id_passport" placeholder="id_passport" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                                <label  class=" form-control-label">pollingstation</label>
                                                <input type="text" name="pollingstation" placeholder="pollingstation" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                                <label  class=" form-control-label">caw</label>
                                                <input type="text" name="caw" placeholder="caw" class="form-control" required>
                                    </div>  
                                    <div class="form-group">
                                                <label  class=" form-control-label">caw code</label>
                                                <input type="text" name="caw_code" placeholder="caw" class="form-control" required>
                                    </div>  
                                    <div class="form-group">
                                                <label  class=" form-control-label">constituency</label>
                                                <input type="text" name="constituency" placeholder="constituency" class="form-control" required>
                                    </div>   
                                    <div class="form-group">
                                                <label  class=" form-control-label">const_code</label>
                                                <input type="text" name="const_code" placeholder="const_code" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                                <label  class=" form-control-label">county</label>
                                                <input type="text" name="county" placeholder="county" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                                <label  class=" form-control-label">county code</label>
                                                <input type="text" name="county_code" placeholder="county code" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                                <label class=" form-control-label">date_of birth</label>
                                                <input type="text" name="date_ofbirth" placeholder="date_ofbirth" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                                <label  class=" form-control-label">sex</label>
                                                <input type="text" name="sex" placeholder="sex" class="form-control" required>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-6">
                                            
                                        <div class="col-sm-6">
                                            
                                        <div class="col-sm-6">
                                            
                                        <div class="col-sm-6">
                                             
                                        <div class="col-sm-6">
                                            
                                        </div>
                                        <div class="col-sm-6">
                                           
                                        <div class="col-sm-6">
                                           
                                        <div class="col-sm-6">
                                          
                                        <div class="col-sm-6">
                                           
                                        <div class="col-sm-6">
                                          
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Add" class="btn btn-info">
                                </div>
                            </div>
                           </form> 
                        </div><!-- .animated -->
                                    
                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

<?php
 if (isset($_POST['submit'])) {
    
    include ('dbconnect.php');
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $id_passport=$_POST['id_passport'];
    $pollingstation=$_POST['pollingstation'];
    $caw=$_POST['caw'];
    $caw_code=$_POST['caw_code'];
    $constituency=$_POST['constituency'];
    $const_code=$_POST['const_code'];
    $county=$_POST['county'];
    $county_code=$_POST['county_code'];
    $date_ofbirth=$_POST['date_ofbirth'];
    $sex=$_POST['sex'];

    $sql=mysqli_query($conn,"INSERT INTO members(firstname,middlename,lastname,id_passport,pollingstation,caw,caw_code,constituency,const_code,county,county_code,date_of birth,sex) VALUES ('$firstname','$middlename','$id_passport','$lastname','$id_passport','$pollingstation','$caw','$caw_code','$constituency','$const_code','$county','$county_code','$date_ofbirth',$sex')")or die(mysqli_error($conn));

    if ($sql) {
        ?>
        <script>
            window.alert('success');
            window.location.href='employee_reg.php';
        </script>
        <?php
    } else {
        ?>
        <script>
            window.alert('failed');
            window.location.href='employee_reg.php';
        </script>
        <?php
    }
    
    
}
?>        


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>