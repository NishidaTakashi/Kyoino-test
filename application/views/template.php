<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <style media="screen">
      label {display: block;}
    </style>
  </head>
  <body>
    <h1>
      <?php echo $headline; ?>
    </h1>
    <?php $this->load->view($include); ?>
    <p>
      This is random text for the CodeIgniter article.
      There's nothing to see here folks,just move along!
    </p>
    <h2>
      Contact us
    </h2>
    <?php

    echo form_open("welcome/contact");
    echo form_label("your name","name");
    $ndata=array(
      "name"=>"name",
      "id"=>"id",
      "size"=>"25"
    );
    echo form_input($ndata);

    echo form_label("your email","email");
    $edata=array(
      "name"=>"email",
      "id"=>"email",
      "size"=>"25"
    );
    echo form_input($edata);

    echo form_label("how can you help you?","notes");
    $cdata=array(
      "name"=>"notes",
      "id"=>"notes",
      "cols"=>"40",
      "rows"=>"5"
    );
    echo form_textarea($cdata);

    echo form_submit("submit","send us a note");
    echo form_close();

     ?>
  </body>
</html>
