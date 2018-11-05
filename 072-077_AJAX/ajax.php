<?php
if (isset($_POST['id']) && ($_POST['id']!="")) {
   echo "Bonjour " .$_POST['id'];
} else {
   echo "Indiquez votre nom";
}
?>