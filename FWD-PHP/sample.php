<?php

//VARIABLE
    // $var = 1;
    // $var = 'hello';

    //echo $var;
    // print_r($var);
    // var_dump($var);
// ======================================================================

//DATA TYPE
    // string 
    // $string = "Hello"; 
    
    // integer 
    // $integer = 1; 

    // float, double 
    // $float = 1.5; 

    //boolean
    // $boolean = true; 

    // array 
    // $array = ['name'=>"thaw",'age'=>'21']; 

    // object 
    // $object = new StdClass(); 
    // $object ->name = 'thaw'; 
    // $object = (object) $array; 
    // var_dump($objArr->name); 
// ===================================================================

// OPERATIONS (+,-,*./,%) 
    // $var1 = 1;
    // $var2 = 2;

    // echo $var1/$var2;
// ================================================================ 

//OPERATORS (<,>,=,==.===)
    // $var = 'hello';
    // if ('1' === 1) {
    //     echo 'same';
    // }else{
    //     echo 'different';
    // }


    // $var = 'hello';
    // if ('hello' == 'hello' || 'hello' == 'aa') {
    //     echo 'here';
    // }else{
    //     echo 'there';
    // }
// ================================================================================== 

//CONDITIONAL STATEMENT
    // $var1 = 2;
    // $var2 = 2;

    // if ($var2 < $var1) {
    //     echo 'same';
    // }elseif ($var2 == $var1) {
    //     echo 'equal elseif';
    // }else{
    //     echo 'lesser';
    // }
//  ---------------------------------------------------------

    // switch ($var1) {
    //     case '1':
    //         echo'1';
    //         break;

    //         case '2':
    //             echo'2';
    //             break;

    //             case '3':
    //                 echo'3';
    //                 break;
        
    //     default:
    //         echo 'this is default';
    //         break;
    // }
// ============================================================================================ 

//LOOPING
// for each is more use in PHP 
        // for loop 
        // $e = 5;
        // for ($i=0; $i < $e; $i++) { 
        //     echo $i;
        // }
// -------------------------------------------------------- 

        // while loop
        // $a = 0;
        // while ($a <= 10) {
        //    echo $a;
        //    $a++;
        // } 
// ------------------------------------------------------------ 

        // do while loop 
        // $a = 0;
        // do {
        //     echo $a;
        //     if ($a == 5) {
        //         break;
        //     }
        //     $a++;
        // } while ($a <= 10);
// --------------------------------------------------------------------------- 

        // for each loop
    //    $array = ['name'=>'thaw','age'=>'21'];
    //    foreach ($array as $key => $value) {
    //     echo $key.' is'.$value."<br>";
    //    }
// ================================================================================================ 


    // array 
    // numeric array
    // $array = ['val1', 'val2', 'val3'];
    // print_r($array[0]);
// ----------------------------------------------------------------------------
    // associate array 
    // $array = array('name'=>'thaw','age'=>'20','phone'=>'90870');
    // print_r($array['phone']);
// ---------------------------------------------------------------------------------
    
    // multidimentional array 
    // $array = array(
    //     'name' => array('student1'=>'thaw zin','student2'=>'zin lin'),
    //     'age' => array('thaw zin'=>21, 'zin lin'=>22)
    // );
    // print"<pre>";    
    // print_r($array);  
// =================================================================================================

// function 
    // function getName($name)
    // {
    //     echo "my name is $name";
    //             OR
    //     echo 'my name is '.$name;
    // }

    // getName('hsu');
// ===========================================================================

// super global variable 
    // $_POST
    // $_GET 
    // $_SESSION 
    // $_COOKIE 
    // $_SERVER 
    
// session and cookie 
    // cookie 
    // setcookie('name','thaw',time()+60,'/');
    // 
    // print_r($_COOKIE['name']);
// -------------------------------------------------------------------

    // session
    // $_SESSION['key1'] = 'value1';
    // $_SESSION['key2'] = 'value2';
    
    // print_r($_SESSION['key1']);
// ============================================================================= 

// file operations 
    // $file = fopen('test.txt','r');
    // fwrite($file,"Hello world from file operation code");
    // fclsoe($file);

    // echo file_get_contents('test.txt');
?>