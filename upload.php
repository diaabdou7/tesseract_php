<?php 
    if(isset($_POST['register']))
    {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
      
        move_uploaded_file($image_tmp,"images/$image");

              

        echo "Inserted successfully";
        
      echo '<img src=images/'.$image.'>';

      shell_exec('"C:/Users/SIMPLON/AppData/Local/Tesseract-OCR/tesseract.exe" "C:/xampp/htdocs/projet tessract/images'.$image.'" out');
    }
?>