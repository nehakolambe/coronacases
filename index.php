<!DOCTYPE html>
<html lang="en">
<head>
    <title>Corona</title>
    <?php include 'links.php'; ?>
    <?php include 'css/style.php'; ?>

</head>
<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./country-wise/index.php">Country-Wise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./india/index.html">India</a>
      </li>
      

    </ul>
  </div>
</nav>
<button style="float: right; margin-right: 20px; margin-top: 20px;" onclick="myFunction()"><i class="fas fa-moon"></i></button>

<div class="main_header">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
<img src="images/eksaath.png" width="300" height="300" style="padding-top:50px;">
</div>
</div>

<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png" width="50" height="50"></span>na Virus</h1>
</div>

</div>

</div>

</div>

<!-- ****************Corona Section starts************************** -->
<br><br><br>

<!-- <div class="middle"> -->
<center style="
    padding-left: 300px;
    padding-right: 200px;
">
<h1>Live Data Across The World
<button style="float: right;" onclick="refreshData()" class="btn btn-warning"> <i class="fas fa-redo"></i></button>
</h1> 

<br>
<table class="table table-hover">
  <thead>
    <tr id = "heading"></tr>
  </thead>
  <tbody>
    <tr id="data"></tr>
  </tbody>
</table>

<br>
<form action="./covid19-racingbar/index.html">
<button type="submit" style="width: 40%" class="btn btn-outline-info">Bar Chart Race of COVID-19</button>
</form>
<br><br>
</center>
<!-- </div> -->
<!-- ****************Corona Section end************************** -->

</body>
<script>
  function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
    init()


    function init(){
      var url = "https://api.covid19api.com/summary"
      var heading = ''
      $.get(url,function(heading) {
        heading =`
          <th style="color:red">Total cases <br>+${heading.Global.NewConfirmed}</th>
          <th style="color:gray">Total Deaths <br>+${heading.Global.NewDeaths}</th>
          <th style="color:blue">Total Recovered <br>+${heading.Global.NewRecovered}</th>  
        `
        $("#heading").html(heading)
      })
      var data = ''
      $.get(url,function(data) {
        console.log(data.Global)
        data =`
          <td style="color:red; font-size:20px;">${data.Global.TotalConfirmed}</td>
          <td style="color:gray; font-size:20px;">${data.Global.TotalDeaths}</td>
          <td style="color:blue; font-size:20px;">${data.Global.TotalRecovered}</td>   
        `
        $("#data").html(data)
      })
    }


  function refreshData(){
      clearData()
      init()
    }
    function clearData(){
      $("heading").empty()
      $("data").empty()
    }
</script>
</html>