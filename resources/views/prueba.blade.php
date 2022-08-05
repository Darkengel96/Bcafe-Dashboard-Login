<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <script type="text/javascript">
    function submitform(){
        $('#myForm').post("pageName.php", $("#myForm").serialize());
    }
    </script> </head>

<form action="pageName.php" method="post" id"myForm">

Name:
<input type="text" name="txt"/>
<input type="submit" />
</form>


<?php
   if( $_POST["name"] || $_POST["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {

   };
?>
