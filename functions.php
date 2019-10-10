<?php

include 'data/connection-var.php';

function connect()
{
    $host = 'localhost';
    global $user, $pw, $db;


   $link = mysqli_connect($host, $user, $pw, $db);

    return $link;
}

function getEmployees()
{ 
    $employees = [];

	$link = connect();

	$query = "SELECT * FROM employees";
	
    $result = mysqli_query($link, $query);
    
    while($row = mysqli_fetch_array($result))
	{		
      $date = $row['hiredate'];
       $row['hiredate'] =  date_format(new DateTime($date),"M, d, Y");

       $format_number = number_format($row['salary'], 2);
       $row['salary'] =$format_number;

      array_push($employees, $row);
	}
    usort($employees, 'sortLastname');
	return $employees; 
}

function sortLastname($a, $b)
    {
        return strnatcmp($a['lastname'], $b['lastname']);
    }

function validateEmployee($data)
{

	$valid = [];
		$fname  = filter_var($data['fname'], FILTER_SANITIZE_STRING);
        $lname   = filter_var(trim($data['lname']), FILTER_SANITIZE_STRING);
        $email   = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
         }
        $position  = $data['position'];
        $phone  = filter_var(trim($data['phone']), FILTER_SANITIZE_NUMBER_INT);
        $salary  = filter_var(trim($data['salary']),  FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_THOUSAND);
        $hiredate  = $data['hiredate'];

        if( 
			$fname == '' ||
            $lname == '' ||
            $email    == '' ||
            $position  == '' ||
            $phone == '' ||
            $salary == '' ||
            $hiredate  == '' )
        {
            return false;
        } else
        {
			$valid['fname'] = $fname;
            $valid['lname']  = $lname;
            $valid['email']     = $email;
            $valid['position']   = $position;
            $valid['phone']  = $phone;
            $valid['salary']  = $salary;
            $valid['hiredate']      = $hiredate;
            return $valid;
        } 
    
    
}

function createEmployee($data)
{
    $success;

	$firstname = $data['fname'];
	$lastname = $data['lname'];
	$email =	$data['email'];
	$position =	$data['position'];
    $phone =	$data['phone'];
    $salary =$data['salary'];
    $hiredate=date("Y-m-d H:i:s",strtotime($_POST['hiredate']));
	$dateadded = date("Y-m-d");
	
	$link = connect();

	$query = "INSERT INTO employees (					
                firstname,
                lastname,
                email,
                position,
                phone,
                salary,
                hiredate,
                dateadded)
			VALUES (
                '$firstname',
                '$lastname',
                '$email',
                '$position',
                '$phone',
                '$salary',
                '$hiredate',
                '$dateadded')";
	
	if(mysqli_query($link, $query)){
        $success = true;
    } else {
        $success = false;
    }
    mysqli_close($link);
    return $success;
}