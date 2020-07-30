<style type="text/css">
*{box-sizing: border-box; font-family: 'Muli', sans-serif;}

.dark-mode {
  background-color: black;
  color: white;
}

.nav_style{
    background-color:black;
}
.nav_style a{
    color: white;
}
.main-header{
    height:450px;
    width: 100%;
}

.rightside h1{
    font-size: 3rem;
}

.corona_rot img{
    animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}


.leftside img{
    animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat{
    0% {transform: scale(.75);}
    20% {transform: scale(1);}
    40% {transform: scale(.75);}
    60% {transform: scale(1);}
    80% {transform: scale(.75);}
    100% {transform: scale(.75);}
}

</style>