<?php
$servername = "localhost";
$username = "root";
$password =""; 
$database ="user"; 

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){    
    die("NOT CONNECTED");
}
$sqli_select_data ="select*from user";
$result =mysqli_query($conn,$sqli_select_data);

    echo"
         <table border=1>
         <tr>
            <th>sno</th>
            <th>username</th>   
            <th>password</th>
            <th>timestamp</th>
        </tr>  
        ";
//if(mysqli_num_rows($result)){
    $num_rows = mysqli_num_rows($result);{
        while ($data-mysqli_fetch_arrray(result))
      {  echo "<tr>
            <td>"$data.['sno']."</td>
            <td>"$data.['username']."</td>
            <td>"$data.['password']."</td>
            <td>"$data.['timestamp']."</td>
            </tr>";    
      }
    }    
?>