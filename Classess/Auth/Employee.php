<?php
namespace Classess\Auth;

use Includes\DB\Connection;

class Employee extends User implements Staff
{
    /**
     * employee person addition details
     */

    private $id, $designation;

    // constructor
    public function __construct($id, $email, $nic, $fname, $mobileNo, $designation, $branchCode, $DOB, $currentAddress, $dp, $joinedDate)
    {
        parent::__construct($email, $nic, $fname, $mobileNo, $branchCode, $DOB, $currentAddress, $dp, $joinedDate);
        $this->id = $id;
        $this->designation = $designation;

    }

    public static function login($userName, $password): string{
    /**
     * All staff members login to system
     */
        if ($userName && $password){
            $sql = "SELECT * FROM Employee WHERE email = ?";
            $stmt = (new Connection)->connect()->prepare($sql);
            $stmt->execute([$userName]);
            $result = $stmt->fetchAll();

            if(!$result){
                return "Your user name or password is wrong";
            }
            else{
                $resultRow = $result[0];
                if($password == $resultRow['password']){
                    $resultRow['dp'] = ($resultRow['dp']) ? $resultRow['dp'] : 'img/profile/empAvata.jpg' ;
                    if ($resultRow['designation'] == "head_manager") {
                        $_SESSION['core_bank_user'] = serialize(new HeadManager($resultRow['ID'], $userName, $resultRow['NIC'], $resultRow['name'], $resultRow['mobileNo'], $resultRow['designation'], $resultRow['branchCode'], $resultRow['DOB'], $resultRow['Address'], $resultRow['dp'], $resultRow['JoinedDate']));
                    }elseif ($resultRow['designation'] == "manager") {
                        $_SESSION['core_bank_user'] = serialize(new Manager($resultRow['ID'], $userName, $resultRow['NIC'], $resultRow['name'], $resultRow['mobileNo'], $resultRow['designation'], $resultRow['branchCode'], $resultRow['DOB'], $resultRow['Address'], $resultRow['dp'], $resultRow['JoinedDate']));
                    }elseif ($resultRow['designation'] == "staff") {
                        $_SESSION['core_bank_user'] = serialize(new Employee($resultRow['ID'], $userName, $resultRow['NIC'], $resultRow['name'], $resultRow['mobileNo'], $resultRow['designation'], $resultRow['branchCode'], $resultRow['DOB'], $resultRow['Address'], $resultRow['dp'], $resultRow['JoinedDate']));
                    }else {
                        return "Failed to login";
                    }
                    header("location:../home/");
                }
                else{
                    return "Your user name or password is wrong";
                }
            }
        }
        return "Warning: must give username and password";
    }

    /**
     * @return designation
     */
    public function getDesignation():string{
        return $this->designation;
    }

    /**
     * @return id
     */
    public function getID():int{
        return $this->id;
    }

    public function showCustomers(){
        $sql = "SELECT * FROM Customer";
        $stmt = (new Connection)->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function showCustomer($nic){
        $sql="SELECT * FROM Customer WHERE NIC='".$nic."'";
        $stmt=(new Connection)->connect()->prepare($sql);
        $stmt->execute();
        $customer = $stmt->fetchAll();
        if (!$customer){
            return "No Customer";
        }
        $_SESSION['search']=$customer[0];
        return $customer[0];
    }

    public function editCustomer($customer,$updatedDate){
        $result=$customer->edit($updatedDate);
        if ($result){
            return true;
        }
        else{
            return false;
        }
    }


      // add employee
    public function register($Fname,$nic,$email,$password,$branchCode,$designation,$address,$dob,$dp,$currentDate,$mobileno){

        $sql2="INSERT INTO employee (name,NIC,email,password,branchCode,designation,mobileNo,Address,DOB,dp,JoinedDate) VALUES('$Fname','$nic','$email','$password','$branchCode',
          '$designation','$mobileno','$address','$dob','$dp','$currentDate')";

        $stmt = (new Connection)->connect()->prepare($sql2);
        $result=$stmt->execute();
        if ($result){
            return true;
        }
        else{
            return false;
        }
    }
    //Edit Employee
    public function edit($updatedDate){
    //    $sql = "UPDATE customer SET NIC='".$this->getNIC()."',email='".$this->getMail()."',name='".$this->getFname()."',mobileNo='".$this->getmobileNo()."',tempAddress='".$this->gettempAddress()."',permanantAddress='".$this->getAddress()."',Job='".$this->getJob()."',officialAddress='".$this->getOfficialAddress()."',DOB='".$this->getDOB()."',dp='".$this->getDp()."',openedBy='".$this->getOpenedBy()."',openedBranch='".$this->getBranchCode()."',joinedDate='".$this->getJoinedDate()."',updatedDate='".$updatedDate."',leftDate=null WHERE NIC='".$this->getNIC()."'";


        $sql = "UPDATE employee SET email='".$this->getMail()."',name='".$this->getFname()."',mobileNo='".$this->getmobileNo()."',DOB='".$this->getDOB()."',Address='".$this->getAddress()."'
        WHERE NIC='".$this->getNIC()."' ";

        echo $sql;

        $stmt = (new Connection)->connect()->prepare($sql);
        $result=$stmt->execute();
        if ($result){
            return true;
        }
        else{
            return false;
        }
    }


}

?>
