<?php
    // Connection establishment
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "cseb";

    $connect = mysqli_connect($servername, $username, $password, $dbname);
    
    // Connection checking
    if($connect->connect_error){
        die("Connection Failed".$connect->connect_error);
    }else{
        echo "<h1>Connection Successful</h1>";
    }
    

                                // INSERT A VALUE INTO TABLE
    
    // if(isset($_POST["submit"])){
    //     $sql = "INSERT INTO studentDetails VALUES('$_POST[admno]','$_POST[name]','$_POST[prn]','$_POST[emailid]')";
    //     $result = $connect->query($sql);
    //     if($result === TRUE ){
    //         echo "<br/><h2>Data inserted successfully</h2>";
    //     }else{
    //         echo "Error:".$sql."<br>".$connect->error;
    //     }
    // }
    // DISPLAY TABLE
    // $selectsql = "SELECT * FROM studentDetails";
    // $selectResult = $connect->query($selectsql);
    // if($selectResult->num_rows > 0){
    //     echo "<table border=''border' cellpadding='10px'><tr><th>Admn</th><th>Name</th><th>Prn</th><th>Email</th></tr>";
    //     while($row = mysqli_fetch_assoc($selectResult)){
    //         echo "<tr><td>".$row["admn"]."</td>","<td>".$row["name"]."</td>"."<td>".$row["prn"]."</td>"."<td>".$row["email"]."</td></tr>";
    //     }
    //     echo "</table>";
    // }

                                // UPDATE A VALUE INSIDE TABLE    
    // $updatesql = "UPDATE studentDetails SET name='Hrishinandan N' WHERE admn = 7232";
    // $updateresult = $connect->query($updatesql);
    // if($updateresult === TRUE){
    //     echo "<br><h2>Record updated successfully</h2>";
    // }else{
    //     echo "Record not updated";
    // }

    // DISPLAY TABLE
    // $selectsql = "SELECT * FROM studentDetails";
    // $selectResult = $connect->query($selectsql);
    // if($selectResult->num_rows > 0){
    //     echo "<table border=''border' cellpadding='10px'><tr><th>Admn</th><th>Name</th><th>Prn</th><th>Email</th></tr>";
    //     while($row = mysqli_fetch_assoc($selectResult)){
    //         echo "<tr><td>".$row["admn"]."</td>","<td>".$row["name"]."</td>"."<td>".$row["prn"]."</td>"."<td>".$row["email"]."</td></tr>";
    //     }
    //     echo "</table>";
    // }
    
                                // DELETE FROM TABLE
    // $deletesql = "DELETE FROM studentDetails WHERE admn=7232";
    // $deleteResult = $connect->query($deletesql);
    // if($deleteResult === TRUE){
    //     echo "<h2>Data Deleted</h2>";
    // }

    // DISPLAY TABLE
    // $selectsql = "SELECT * FROM studentDetails";
    // $selectResult = $connect->query($selectsql);
    // if($selectResult->num_rows > 0){
    //     echo "<table><tr><th>Admn</th><th>Name</th><th>Prn</th><th>Email</th></tr>";
    //     while($row = mysqli_fetch_assoc($selectResult)){
    //         echo "<tr><td>".$row["admn"]."</td>","<td>".$row["name"]."</td>"."<td>".$row["prn"]."</td>"."<td>".$row["email"]."</td></tr>";
    //     }
    //     echo "</table>";
    // }
    
    mysqli_close($connect);
?>




<!-- Styling of this Page -->
<style>
    /* CSS reset */
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: #DFF0FF;
    }

    h1, h2{
        margin: 20px auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    table{
        margin: 150px auto 150px 32%;
        border: 5px solid white;
        border-radius: 10px;
        box-shadow: 2px 2px 30px 10px #AEDFFF;
    }
    th, td{
        padding: 12px;
        font-family: Verdana;
        font-size: 18px;
        background-color: white;
    }
</style>