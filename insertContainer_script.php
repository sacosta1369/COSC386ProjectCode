<html>
  <body>
    <?php
      if<$connection=@mysqli_connect('localhost', 'sacosta2', 'sacosta2', 'sacosta2DB')){
        print '<p>Connected to database</p>';
      }
    
      <form method = "post">
        Size of containers<input type = text name = "size"><br>
        Material accepted by containers<input type = text name ="material"><br>
        Number of containers<input type = text name = "number"><br>
        Address of the containers<input type = text name = "address"><br>
        <input type = "submit" name = "submit" value = "Insert"> <br>
        
        $sizeOF = $_POST['size'];
        $materialOF = $_POST['material'];
        $numberOF = $_POST['number'];
        $addressOF = $_POST['address'];
    
    </form>
    
    $insertContainer = "INSERT INTO Container (SizeOfContainer, Material, NumberOfContainers, LocationAddress)
                          VALUES ('$sizeOF', '$materialOF', '$numberOF', '$addressOF')";
    $rs = mysqli_query($connection, $insertContainer);
    
    if (mysqli_affected_rows($rs) == 1){
      echo "Container inserted Successfully";
    }
    
    mysqli_close($connection);
    ?>
  </body>
</html>
      
    
