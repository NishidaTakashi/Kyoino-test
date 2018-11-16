<?php
echo form_open("student/create");

$field_array=array("name","text");
foreach ($field_array as $field) {
  echo "<p>".$field;
  echo form_input(array("name"=>$field))."</p>";
}

echo form_submit("","Add");

echo form_close();

 ?>
