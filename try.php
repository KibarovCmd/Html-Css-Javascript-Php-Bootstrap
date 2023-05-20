<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link href="ilgialanlari.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="resim15.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>İskender Musaoğlu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">HAKKIMDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cv.html">CV</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="sehrim.html">ŞEHRİM</a>
          </li>
          <a class="nav-link" href="mirasimiz.html">MİRASIMIZ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ilgialanlari.html">İLGİ ALANLARIM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">LOGİN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim2.html">İLETİŞİM2</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Gönderim Başarılı!</h4>
    <p>
      <?php
      echo "Adı: " . $_POST["name"] . "&nbsp;" . "&nbsp;" . "E-mail: " . $_POST["email"] . "&nbsp;" . "&nbsp;" . "Telefon:  " . $_POST["phone"] . "&nbsp;" . "&nbsp;";
      if ($_POST["gender"] == "male") {
        echo "Cinsiyet: Erkek";
      } else if ($_POST["gender"] == "female") {
        echo "Cinsiyet: Kadın";
      }
      echo "&nbsp;" . "&nbsp;" . "Girilen Sınavlar: ";
      if (!(empty($_POST["interests1"]))) {
        if ($_POST["interests1"] == "on") {
          echo "Ielts ";
        }
      }
      if (!(empty($_POST["interests2"]))) {
        if ($_POST["interests2"] == "on") {
          echo "Toefl ";
        }
      }
      if (!(empty($_POST["interests3"]))) {
        if ($_POST["interests3"] == "on") {
          echo "Cde ";
        }
      }
      ?>
    </p>
    <hr>
    <p class="mb-0">Post Ettiğiniz Değerlere Dikkat Ediniz.</p>
  </div>
</body>

</html>