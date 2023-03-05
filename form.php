
<?php
    // getting all values from the HTML form
    if(tist($_POST['Submit'])) 
    
        $fname = $_POST['name'];
        $fnumber = $_POST['number'];
        $femail = $_POST['email'];
        $ftext = $_POST['text'];


    // creating a connection
    $conn = new mysqli('localhost', 'root', '', 'adiraj temple construction');
     if (!$con->connect_error)
    {
        die("Connection failed :" $conn->connect_error);
    }else{
    $stmt = $conn->prepare"(INSERT INTO `enquiry_table`(`Name`, `Contact`, `E-mail`, `Massege`)VALUES ('?', '?', '?','?')";
  
   
    // send query to the database to add values and confirm if successful
    $stmt->bind_program("tist",$fname, $fnumber, $femail, $ftext );
    $stmt->execute();
    echo "Data saved successfully...";
    $stmt->close();
    $conn->close();
    }
?>



