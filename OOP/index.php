<?php
// methods to wrighting code  ==>paradigm
//==> pp ==> procedural programming paradigm ==> function 
//==> oop ==> object orignted programming paradigm
//==> on=bject(instance)  ==> properities ,, methods 
// ==> class (blue print) ==> structure ==> use==> create object from it
// class ==> vechiels ==> car , van 
// class ==> human ===> object  ==>properities , methods



// class Human
// {
//     ///==> access modefire  ==> privilages 
//     /**
//      * public  ==> any one can use and access
//      * private
//      * static
//      * const
//      */
//     public $name;
//     public $age;
//     public $address;
//     // function __construct($userName=null,$userAge=null)  
//     function __construct($userName = "userName", $userAge = "userAge", $userAddress = "userAddress")
//     {
//         // $this->name="ayaat";
//         // $this->age=24;
//         $this->name = $userName;
//         $this->age = $userAge;
//         $this->address = $userAddress;
//     }
//     function printData()
//     {
//         // this ==> refrence Refers to the current object
//         echo "<br> Name : ", $this->name, "<br>", "Age : ", $this->age, "<br>", "address : ", $this->address;
//     }
// }
// /**
//  * constructor ==> function ==> void (not return )  ==> call ==> when you create object
//  * defualt constructor  ==> constructor created default
//  * user defined constructor ==> constructor ==> user create
//  *  ===> not prametarized  ,prametarized 
//  */

/**
 * inheritance   ==> class can inherit another class 
 * ===> single inheritance , multilevel inheritance , multible inheritance , hyperied inheritence , hierchracl inheritance
 * 
 * ===> single inheritance , multilevel inheritance , hierchracl inheritance
 * abstraction 
 * polymorphism===> override (return)==> accepted in php, overloading ==> ont Accepted in php (parameters (count , datatype)) ==? same function name   ==> class 
 * 
 * function name ()   ===> parameters ==> overloading{
 * // body of function   ==> change override
 * } // prototype
 */

// $h1 = new Human(userAddress: "cairo",userName:"ayaat");  // instance of class
// // // print_r($h1);
// // // echo "<br>";
// // // $h1->name="ayaat";
// // // $h1->age=24;
// // // print_r($h1);
// $h1->printData();

// class Child extends Human
// {  // single inheritance
//     public $email;

//     function __construct($userName = "userName", $userAge = "userAge", $userAddress = "userAddress", $email = "userEmail")
//     {
//         // $this->name = $userName;
//         // $this->age = $userAge;
//         // $this->address = $userAddress;
//         parent::__construct($userName, $userAge, $userAddress);
//         $this->email = $email;
//     }

//     function printData()  // method 
//     {
//         // override
//         parent::printData();  // call method in parent
//         echo "<br>", "email : ", $this->email;
//     }
// }

// $ch=new Child(email:"ayaat@gmail.com");
// // print_r($ch);
// $ch->printData();

// class Child2 extends Child
// {

//     public $phone;
//     function __construct($userName = "userName", $userAge = "userAge", $userAddress = "userAddress", $email = "userEmail", $phone = "userPhone")
//     {

//         parent::__construct($userName, $userAge, $userAddress, $email, $phone);
//         $this->phone = $phone;
//     }
//     function printData()  // method 
//     {
//         // override

//         parent::printData();  // call method in parent
//         echo "<br>", "phone : ", $this->phone;
//     }
//     function sayHello()
//     {
//         echo "<br>Hello<br>";
//     }
// }
// $ch2 = new Child2();
// print_r($ch2);
// $ch2->printData();
// $ch2->sayHello();

// class Child3 extends Human{

// } 
// $ch3 = new Child3();
// print_r($ch3);


///////=================== Access Modifiers
//============> Access modifire ==> Encapsulation (setter , getter)==> كبسوله =>
//private==> only her class can access it
// protected ==> child of parent can access 


class Human{
    public $name;
    private $phone;   //===
    protected $age;
    function __construct($name,$phone,$age)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->age=$age;
    }

    function setPhone($phone){
        $this->phone=$phone;
    }
    function getPhone(){
        return $this->phone;

    }
    function setAge($age){
        $this->age=$age;
    }
    function getAge(){
        return $this->age;

    }
    function getData() {
        echo $this->name,$this->phone;
        
    }
}

// $h1=new Human("ayaat");
// $h1->setPhone("01025920741");
// $h1->getPhone();
// print_r($h1);
// class Employee extends Human{
//     public $position;
//     function __construct($position="UserPosition",$name="userName",$age="userAge")
//     {
//         parent::__construct($name,$age);
//         $this->$position=$position;
//     }
//     function getData() {
//         echo "<br>",parent::getPhone(),$this->age;
        
//     }

// }

// $e=new Employee(position:"Instructor");
// // 
// // $e->setPhone("01002011428");
// // $e->getage(14);
// print_r($e);
// // $e->getData();