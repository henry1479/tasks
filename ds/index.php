<?php
?>

<!doctype html>
<head>
    <title>Distanation-service</title>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<h3 class="mb-3 mt-3">Сервис расчета расстояния по названию населенных пунктов </h3>
<form action="server.php">
    <input id="address" class="form-control mb-3 "type="text" name="address" placeholder="Введите адрес" required/>
    <input type="hidden" id="latitude" name="latitude" value=""/>
    <input type="hidden" id="long" name="long" value=""/>
    <input type="submit" id="send" class="btn btn-primary mb-3"value="Получить расстояние" />   
</form>
<?php if($_GET['data']):?>
    <div class="alert alert-primary "><?=$_GET['data']?></div>
<?php endif ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="index.js"></script>

</body>
</html>