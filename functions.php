<?php
function GetHeader() {
  include 'header.php';
}
function GetFooter() {
  include 'footer.php';
}
function GetSQLTableFromDB($table) {
  $servername = "localhost";
  $username = "root";
  $password = null;
  $dbname = "ledung_tech";

  $conn = new mysqli( $servername, $username, $password, $dbname );

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else {
  }
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);
  //if ($result != null) {
  //  echo $result->fetch_all();
  //}
  //else {
  //  echo "Error!";

  //}
  print_r($result->fetch_all());
  while ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $field => $value) {
      echo $value;
    }
  }
}
/*function GetTextFileByTextName( $textname ) {
  $sql = "SELECT textname, textfile FROM MyTexts WHERE textname = '$textname'";
  $result = $conn->query($sql);
  if ($result != null) {
    echo $result->fetch_assoc()["textfile"];
  }
  else {
    echo "Error";
  }
}
function GetTextFileByID( $id ) {
  $sql = "SELECT textname, textfile FROM MyTexts WHERE id = '$id'";
  $result = $conn->query($sql);
  if ($result != null) {
    echo $result->fetch_assoc()["textfile"];
  }
  else {
    echo "Error";
  }
}*/
function CreateHomePageCard($image_url, $text, $link_url) {
  echo '
  <div class="row-menu-card">
    <a href="' . $link_url . '">
      <div class="row-menu-card-image" style="background-image: url(' . $image_url . ')"></div>
      <div class="row-menu-card-text">' . $text . '</div>
    </a>
  </div>';
}

?>
