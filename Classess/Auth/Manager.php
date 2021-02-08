<?php
namespace Classess\Auth;

use Includes\DB\Connection;


class Manager extends Employee
{
    private $branchCode,$id;
    //construtor
    public function __construct($id, $email, $nic, $fname, $mobileNo, $designation, $branchCode, $DOB, $currentAddress, $dp, $joinedDate)
    {
        parent::__construct($id, $email, $nic, $fname, $mobileNo, $designation, $branchCode, $DOB, $currentAddress, $dp, $joinedDate);
        $this->branchCode=$branchCode;
        $this->id=$id;
    }

    public function showEmployees(){


        $sql = "SELECT * FROM employee WHERE designation='staff' ";
        $stmt = (new Connection)->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }



    public function showEmployee($id){
        $sql="SELECT * FROM employee WHERE ID='".$id."'";
        $stmt=(new Connection)->connect()->prepare($sql);
        $stmt->execute();
        $employee = $stmt->fetchAll();
        if (!$employee){
            return "No Employee";
        }
        $_SESSION['search']=$employee[0];
        return $employee[0];
    }

    public function editEmployee($employee,$updatedDate){
        $result=$employee->edit($updatedDate);
        if ($result){
            return true;
        }
        else{
            return false;
        }
    }

}

?>
