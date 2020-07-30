
<!DOCTYPE html>
<html lang="en">
<head>
    <title>COVID-19 | India</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/all.min.css">
<link rel="stylesheet" href="../css/fontawesome.min.css">
  <?php include '../css/style.php'; ?>
</head>
<body>
	<center style="
    padding-left: 30px;
    padding-top: 20px;
">
<span class="corona_rot" style="float: left"><img src="../images/corona.png" width="50" height="50"></span>
<button style="float: right; margin-right: 20px; margin-top: 20px;" onclick="myFunction()"><i class="fas fa-moon"></i></button>
<h1>Live Data Across India</h1> 

<br>
<div class="column">
  <div class="row">
<table class="table table-hover" id="tvalue">
  <thead>
    <th class="text-capitalize" style="color: blueviolet">State</th>
    <th class="text-capitalize" style="color: red">Confirmed</th>
    <th class="text-capitalize" style="color: blue">Active</th>
    <th class="text-capitalize" style="color: green">Recovered</th>
    <th class="text-capitalize" style="color: gray">Deceased</th>
  </thead>
  <?php

    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coranalive = json_decode($data, true);

    $statescount = count($coranalive['statewise']);

    $i=1;
    while($i < $statescount){
    ?>
    <tr>
      <td>
        <b style="color: blueviolet"><?php echo $coranalive['statewise'][$i]['state'] ?></b>
      </td>
      <td style="color: blueviolet">
        <b style="color: red"><?php echo "&#8593;".$coranalive['statewise'][$i]['deltaconfirmed'] ."<br>" ?></b>
        <?php echo $coranalive['statewise'][$i]['confirmed'] ?>
      </td>
      <td style="color: blueviolet"><br>
        <?php echo $coranalive['statewise'][$i]['active'] ?>
      </td>
      <td style="color: blueviolet">
        <b style="color: green"><?php echo "&#8593;".$coranalive['statewise'][$i]['deltarecovered'] ."<br>" ?></b>
        <?php echo $coranalive['statewise'][$i]['recovered'] ?>
      </td>
      <td style="color: blueviolet">
        <b style="color: gray"><?php echo "&#8593;".$coranalive['statewise'][$i]['deltadeaths'] ."<br>" ?></b>
        <?php echo $coranalive['statewise'][$i]['deaths'] ?>
      </td>
    </tr>
      <?php
      $i++;
    }


?>
  <tbody>
  </tbody>
</table>
</div>
</div>
<br>
</center>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

</html>
