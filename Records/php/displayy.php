<?php
     ini_set('mysql.connect_timeout',300);
     ini_set('deafult_socket_timeout',300);
?>
<html>
<body>
   <form method="post" enctype="multipart/form-data">
   <br/>
   <input type="file"name="images />"
   <br><br/>
   <input type="submit"name="sumit"value="upload" />
   </form>
   <?php
    if(isset($_POST['sumit']))
    {
        if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
        {
              echo "please select an image.";
        }
        else
        {
            $image=addslashes($_FILES['image']['tmp_name']);
            $name=addslashes($_FILES['image']['name']);
            $image=file_get_contents($image);
            $image=base64_encode($image);
            saveimage($name,$image);
        }
    }
      function saveimage($name,$image)
      {
          $con=mysql_connect("localhost","","");
          mysql_select_db("im",$con);
          
        $gry="insert into images (name,image)values('$name','$image')";
        $result=mysql_query($qry,$con);
        if($result)
        {
            echo "image uploaded.";
        }
        else
        {
            echo "image not uploaded";
        }
      }
?>
</body>
</html>
