<!DOCTYPE html>
<html>
<head>
    <style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #565656;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: black;
   text-align: center;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>
    Radhen Adebos</title>
<body>

    <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Jonsen Jo de Liga</span>
        </div>
    </nav>
    <div class="sidebar">
  <a href="home.php">Home</a>
  <a href="index.php">Database</a>
</div>
<div class="container">
    <br>
    <h4><center>DAFTAR PESERTA PELATIHAN</center></h4>
<p>About Me</p>
<h6>Web ini saya untuk mencatat data-data Anak Sekolah Indonesia saya latih secara personal untuk bermain Ep-Ep di liga internasional</h6> 
<div class="footer">
  <p>Copyright &copy; 2023 JoJoLig</p>
</div>

</div>
</body>
</html>
