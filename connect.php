
//credential to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiuser";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
else{
  if (isset($_POST['submit'])) {
      //
  $name = $conn->real_escape_string(($_POST['uname'])); 
  $password = $conn->real_escape_string(($_POST['pswd'])); 
    //
  $sql = "SELECT * FROM users WHERE uname='$name' AND upwd='$password'";
  $result =$conn->query($sql);
  

  if (
          
          
          $result->num_rows > 0) {
        header('welcome.php');
    } 
  else { echo 'Invalid user!';  }
   
       }

    }

