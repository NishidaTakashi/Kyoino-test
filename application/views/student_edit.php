<?php
echo form_open("student/update");

echo form_hidden("id",$row[0]->id);

$field_array=array("name","text");
foreach ($field_array as $field_name) {
  echo "<p>".$field_name;
  echo form_input($field_name,$row[0]->$field_name)."</p>";
}

echo form_submit("","Update");

echo form_close();

 ?>
