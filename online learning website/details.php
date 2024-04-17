<html>
    <body>
        <center><h1>login detail</h1></center>
    </body>
</html>
<style>
    .btn{
        border: 1px solid yellow;
        padding: 5px;
        color: black;
        background:lightgreen;
        text-decoration: none;
    }
    .btn:hover{
        background: grey;
    } 
</style>
<?php
// Database connection parameters
$conn = mysqli_connect('localhost','root','','courses');
echo "<a class='btn' href='course_list.php'>Course List</a>";
$result="SELECT * FROM user_db";
$querry=mysqli_query($conn,$result);

?>
<html>
    <body>
        <center>
        <h1>Record</h1>
        <table border="2">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>UPDATE</td>
                <?php


                while($res=mysqli_fetch_array($querry)){
                    $id=$res['id'];
                    $name=$res['name'];
                    $email=$res['email'];
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo  "<td>$name</td>";
                    echo "<td>$email</td>";
                    echo "<td><a href='eddit.php?x=$id'>Edit</a>|<a href='delete.php?y=$id'>Delete</a></td>";
                    echo"</tr>";
                }
                ?>
</tr>
</table>
</center>
</body>
</html>