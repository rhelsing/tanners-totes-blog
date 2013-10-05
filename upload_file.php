<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
    //good

if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
      header("Location: http://localhost/tanners_totes/index.php/admin/post/images");
      }

  }
?>