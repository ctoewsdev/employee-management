<?php include 'templates/header.php';


$employees = getEmployees();

?>


<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <div class="well well-sm">
            <legend class="text-center header">Employee Details</legend>
                <div>
                    <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Position</th>
                                    <th>Phone</th>
                                    <th>Salary</th>
                                    <th>Hired</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
								if($employees != null)
								{
									foreach($employees as $emp)
									{
										echo '
                                    <tr>
                                        <td> ' . $emp['firstname'] . ' '. $emp['lastname'] . '</td>
                                        <td class="wrap">' . $emp['email'] . '</td>
                                        <td>' . $emp['position'] . '</td>
                                        <td>' . $emp['phone'] . '</td>
                                        <td>' . $emp['salary'] . '</td>
                                        <td>' . $emp['hiredate'] . '</td>
                                    </tr>
										';
																		
									}
                                } else {
                                    echo '
                                    <tr>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                    </tr>
										';
                                }
                            
								?>
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php include 'templates/footer.php'?>