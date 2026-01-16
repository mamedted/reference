<?php

$variableName = value;    //Must start with $; Case sensitive.
                         //Must start with letter/underscore (not number)
                         //Can contain letter, number, and underscore (no spcaes or special character).


sleep(2); //To wait 2 seconds
rand(1000 - 9999);
$var1 . $var2;  //use dot to concatenate variables
json_encode($data);//To convert into json
json_decode($data2); //To convert into string

mysqli_connect();  //Keyword for connecting to mysqli 

$sql = mysqli_connect("localhost", "root", "", "mamextech"); //To assign sql to variable

$firstname = $_POST["firstname"]; //to assign the passed value thru post with name "firstname" to variable

$hashed = password_hash($password, PASSWORD_DEFAULT); //TO HASH A PASSWORD BEFORE STORING
 
if(password_verify($inputPassword, $hashed)); //to compare and verify the password



isset() //a function use to check if a variable is declared and is not null
header("location: fb.html"); //to navigate to specific page

$name = "juan"
if(isset($name)){

}

if(isset($a, $b, $c)) //you can check multiplr vairable at one
if(isset($_POST['username'])) //to check  form input  before accessing them


$var = $_POST['name'];
$var = $conn->real_escape_string($var);  //Use this when your string contain ' appostophe

header("Location: homep.php")
"INSERT into tableName (firstname) values ('$firstname')"; //INSERTING ONE VALUE
"INSERT into tableName (firstname, lastname) values ('$firstname', '$lastname')"; //INSERTING MORE THAN ONE VALUE

 $_insert = "INSERT into tableName (firstname) values ('$firstname')"; // if you want to assign it to variable.
 $sql->query($_insert) //To execute it.




 "SELECT id, firstname from tableName"   //To select only all data under id column from tableName 
 "SELECT * from tableName"               //To select all data under all column from tableName
 "SELECT * from tableName where id = '$id'"  //To select only the id that matches with the inside the variable
 "SELECT * from tableName where id = '$id' and frined_id = $id2"  //With AND condition
 "SELECT * from tableName where id = '$id' or frined_id = $id2"  //With OR condition
 "SELECT * from tableName LIMIT 5"  //To limit selection at maximum 5
 "SELECT * from tableName order by date_created ASC"; oldest first //to sort array based on date created in ascening order
 "SELECT * from tableName order by date_created DESC"; newest first //to sort array based on date created in descending order

 $result = $sql->query("SELECT * from tableName where id = '$id'") //Execute it and asigned it to variable result
 $result = $sql->query( "SELECT * from tableName") //Execute it and asigned it to variable result

 if($result->num_rows > 0){  //Check if the array is not empty.
        
        $row = $result->fetch_assoc()  //Get the associative array and assigned to variable
        echo $row["firsname"] //just like in object, access it by column name

        while($row = $result->fetch_assoc()){ //TO LOOP EACH VALUE
            echo $row["firstname"]
        }
}else{
    echo "No entry"
}

header("Content-Type: application/json");  //TO convert string to json files
echo json_encode($data); 

//If you want to base the function based on the echo. You can used response.text()

//If you want to simultaneously used text() and json()
//from html, use .then(response => response.text())
//use data.trim().includes(''){} //Make sure you know any value from json like id
//let datum = JSON.parse(data)  //Convert it now to json so that you can access its object
//from PHP, if condition is true, directly convert the data to json
//if false, use only echo to capture the text and make it as your reference.


//You can have multiple echoes in one condition and and assign different functions on it.
//Just use data.trim().includes(''){}  insert one of your echo 
//Never used invalid word as your reference




//for password verification

$result = $conn->query($action);

if($result->num_rows > 0){
    $p = $result->fetch_assoc();

    if($p["password"] === $password){
        echo "welcome";
    }else{
        echo "incorrect password";
    }
   
}else{
    echo "no account exist";
}


//to store photos in specific folder

  $dir = 'photos/';

    if (!is_dir($dir)) {  //if foler does not exist. It will create one
        mkdir($dir, 0777, true);
    }
  
    $filename = basename($_FILES['photo']['name']);
    $targetFilePath = $dir . $filename;

    if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath )){
      echo "success";
    };





"UPDATE tablenName set columnname = '' where id = '' ";  //TO UPDATE VALUE


"DELETE from tableName  where id = ''"; //TO DELETE VALUE
"TRUNCATE table tableName"; //TO DELETE ALL VALUES

?>






