<?php 

include "templates/header.php";

$message = '';
$data = [];


if(count($_POST) > 0)
{

    $data = validateEmployee($_POST);

    if($data) {
        if(createEmployee($data)){
            $message = '<div class="alert alert-success text-center" role="alert">
            Employee successfully added!
        </div>';

        } else {
            $data['fname'] = $_POST['fname'];
            $data['lname'] = $_POST['lname'];
            $data['email'] = $_POST['email'];
            $data['position'] = $_POST['position'];
            $data['phone'] = $_POST['phone'];
            $data['salary'] = $_POST['salary'];
            $data['hiredate'] = $_POST['hiredate']; 
            $message = '<div class="alert alert-warning text-center">
                            Error: Not able to add employee!
                        </div>';

        }
    } else {
        $data['fname'] = $_POST['fname'];
        $data['lname'] = $_POST['lname'];
        $data['email'] = $_POST['email'];
        $data['position'] = $_POST['position'];
        $data['phone'] = $_POST['phone'];
        $data['salary'] = $_POST['salary'];
        $data['hiredate'] = $_POST['hiredate']; 
        $message = '<div class="alert alert-warning text-center">
                        Invalid input!
                    </div>';
    }
}

?>


<div class="col-md-12">

        <?php echo $message; ?>

</div>



<div class="container">
    <div id="wrapper">
            <div class="well well-sm">
                <form method="post">
                    <fieldset>
                        <legend class="text-center header">Add Employee Details</legend>
                        <div class="form-group"> 
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="fa-icon"><i class="fa fa-user bigicon"></i></span>
                                    <input id="fname" name="fname" type="text" placeholder="First Name" value="<?php if (isset ($data['fname'])) echo $data['fname'] ?>" class="form-control">
                                 </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="fa-icon"><i class="fa fa-user bigicon"></i></span>
                                    <input id="lname" name="lname" type="text" placeholder="Last Name" value="<?php if (isset ($data['lname'])) echo $data['lname'] ?>" class="form-control">
                                </div>
                            </div>
                        </div>

  
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="fa-icon"><i class="fa fa-envelope-o bigicon"></i></span>
                                    <input id="email" name="email" type="text" placeholder="Email Address" value="<?php if (isset ($data['email'])) echo $data['email'] ?>" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="fa-icon"><i class="fa fa-desktop bigicon"></i></span>
                                        <select class="form-control" id="position" name="position">
                                <option value="" <?php if(isset($data['position']) && $_POST['position'] == "") echo 'selected="selected"';?>>Select Position</option>
                                <option value="Detailing" <?php if(isset($data['position']) && $_POST['position'] == "Detailing") echo 'selected="selected"';?>>Detailing</option>
                                <option value="Yard" <?php if(isset($data['position']) && $_POST['position'] == "Yard") echo 'selected="selected"';?>>Yard</option>
                                <option value="Sales" <?php if(isset($_data['position']) && $_POST['position'] == "Sales") echo 'selected="selected"';?>>Sales</option>
                                <option value="Reception" <?php if(isset($_data['position']) && $_POST['position'] == "Reception") echo 'selected="selected"';?>>Reception</option>
                                <option value="Administrator" <?php if(isset($_data['position']) && $_POST['position'] == "Administrator") echo 'selected="selected"';?>>Administrator</option>
                                <option value="Supervisor" <?php if(isset($_data['position']) && $_POST['position'] == "Supervisor") echo 'selected="selected"';?>>Supervisor</option>
                                <option value="Asst Manager" <?php if(isset($_data['position']) && $_POST['position'] == "Asst Manager") echo 'selected="selected"';?>>Assistant Manager</option>
                                <option value="Manager" <?php if(isset($_data['position']) && $_POST['position'] == "Manager") echo 'selected="selected"';?>>Manager</option>
                                     </select>
                                </div>
                            </div>
                        </div>


                      
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="fa-icon"><i class="fa fa-phone-square bigicon"></i></span>
                                        <input id="phone" name="phone" type="text" placeholder="Phone" value="<?php if (isset ($data['phone'])) echo $data['phone'] ?>" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="fa-icon"><i class="fa fa-money-bill-alt bigicon"></i></span>
                                    <input id="salary" name="salary" type="text" placeholder="Salary" value="<?php if (isset ($data['salary'])) echo $data['salary'] ?>" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="fa-icon"><i class="fa fa-calendar bigicon"></i></span>
                                <input id="hiredate" name="hiredate" type="date" value="<?php if (isset ($data['hiredate'])) echo $data['hiredate'] ?>" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
    </div>
</div>




    <?php include "templates/footer.php"; ?>