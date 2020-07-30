
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/style.css">
    <?php include '../css/style.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
    <title>Country-Wise</title>
</head>
<body>
    <button style="float: right; margin-right: 20px; margin-top: 20px;" onclick="myFunction()"><i class="fas fa-moon"></i></button>

            <div class="latest-report">
                <div class="country">
                    <div class="name">Loading...</div>
                    <div style="color: darkmagenta;" class="change-country">change</div>
                    <div class="search-country hide">
                        <div class="search-box">
                            <input type="text" id="search-input" placeholder="Search Country...">
                            <img class="close" src="./resources/img/close.svg" alt="">
                        </div>
                        <div class="country-list">
                            
                        </div>
                    </div>
                </div>
                <div class="total-cases">
                    <b><div style="color: darkmagenta;" class="title">Total Cases</div></b>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                </div>
                <div class="recovered">
                    <b><div style="color: darkmagenta;" class="title">Recovered</div></b>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                </div>
                <div class="deaths">
                    <b><div  style="color: darkmagenta;" class="title">Deaths</div></b>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                </div>
            </div>
            <div class="chart">
                <canvas id="axes_line_chart"></canvas>
            </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <script src="resources/js/countries.js"></script>
    <script src="resources/js/app.js"></script>
    <script>
        function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
    </script>
</body>
</html>