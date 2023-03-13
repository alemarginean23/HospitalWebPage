
<html lang="en">
<head>
<title>Hospital</title>
</head>
<body>

<?php
echo'aaaaaaaaaaaaaaaaaaaaaa';
        $conn_string = "host=localhost port=5432 dbname=labwork user=posgres password=Dansuripopulare2";
$dbconn4 = pg_connect($conn_string);
if($dbconn4){
  echo'aaaaaaaa';
}else echo'bbbbb';
?>

  <!--First section-->
  <div style="background-image: url('spital.jpg'); 
  background-size: cover; height:620px; padding-top:80px;text-align: center;">
    <img src="avatar.jpg" style="height:150px; border-radius: 50%; border: 10px solid #BABABA;">
    <h1 style="font-size:75px; color:black; margin:10px;">Sanitas Hospital</h1>
    <p style="font-size:30px; color: black;"><em>~out of care for patients</em></p>
    <p style="font-size: 20px; color:#1F9AFE;">
      <a href="about.html">Abount this hospital</a>
  </div>

</p>


<!--Second section-->
<img src="owner1.jpg" style="height:450px; margin:100px; float: left;">

<div style="height:300px; margin:100px;text-align: center;">
  <br>
  <h1></h1>
  <p style="line-height: 2.0; font-size:20px;">A customer is the most important visitor on our premises, he is not dependent on us. We are dependent on him. He is not an interruption in our work. He is the purpose of it. He is not an outsider in our business. He is part of it. We are not doing him a favor by serving him. He is doing us a favor by giving us an opportunity to do so.
    Mahatma Gandhi</p>
  <p style="line-height: 2.0; font-size:20px;">Email us at <a 
  href="mailto:alamarginean@yahoo.com ">alamarginean@yahoo.com </a></p>
 

</div>

<br>
<br>
<br>
<br>
<br>
<br>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

  
}
.button1 {background-color: #4CAF50;}
.button2 {background-color: #ff33cc;}
.button3 {background-color: #0066ff;}
.button4 {background-color: #ff0000;}
</style>

<button class="button button4">List of hospital clinics</button>
<button class="button button2">List of doctors</button>
<button class="button button3">List of patients</button>
<button class="button button1">List of treated patients</button>

<!--Footer--> 
<footer style="height:auto; background-color:#BABABA;text-align: center;">
  <h1>Made with love at SanitasHospital</h1>
</body>
</html>


