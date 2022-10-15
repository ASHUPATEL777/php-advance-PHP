<?php 
$mainurl="http://localhost/task1/";
$baseurl="http://localhost/task1/assets/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add task example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<style>
    .container
    {
        border: 2px solid;
        padding: 20px;
    }
</style>
<script>
    function myfunction(){
        var d=document.getElementById("select-option");
        var distext=d.options[d.selectedIndex].text;
        document.getElementById('add').value=distext;
    }
</script>
</head>
<body>
    
</body>
</html>