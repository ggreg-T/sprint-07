<!DOCTYPE html>
<html>

<head>
    <title>CinémActus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ewert&display=swap" rel="stylesheet">


<style>
body{
    background-color: #26BAEE;
}

.banniere{
    z-index: -1;
    position:  sticky;
    width: 90%;
    height: 90px;

    margin: 0 auto;

    top: 5px;

    background: linear-gradient(269.37deg, #00BD56 0.76%, #F9FF00 98.49%);
    border: 1px solid #B7B7B7;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}

.textcinemactus{
margin: 0 auto;
font-family: 'Dancing Script', cursive;
font-style:bold;
font-size: 80px;
margin-top : -15px;
vertical-align: top;
}

.gridbanniere{
    display: grid;
    grid-template-columns: 90px 65% 14% 14% ;
}

.imgping{
    margin-top: 5px;
    margin-left: 3px;
}

.buttonban{
    width: 200px;
    height: 40px;
    margin-top: 25px;
    margin-left:0 ;
    margin-right :auto;


    font-family: 'Ewert', cursive;
    text-align: center;
    vertical-align:auto;
    font-size: 25px;
    color: red;


    background: #26BAEE;
    border: 1px solid #C4C4C4;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}

#inscrit:hover {
    background: white;
    color: black;

}

</style>
</head>


<body>
<div>


<div  class="banniere" ><div class="gridbanniere">
<div class="imgping">
<img src="{{URL::asset('/image/cinema-penguin.png')}}" alt="profile Pic" height=auto width="75px"></div>
   <div class="textcinemactus">CinémActus</div>
   <div class="buttonban" id="inscrit">INSCRIPTION</div>
   <div class="buttonban">CONNEXION</div>
</div>
</div>



<div class="container p-3 mt-4 border border-primary shadow-lg p-3 mb-5 rounded">
    @yield('content')
</div>
</div>
</body>
</html>
