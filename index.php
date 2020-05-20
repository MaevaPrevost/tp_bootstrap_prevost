<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <!-- pas touche à cette ligne -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Jazz</title>
    <link rel="shortcut icon" type="image" href="css/img/favicon.gif">

  <!-- pour les effets sur les images -->
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <style>
  <?php if(isset($_POST['msg']) or isset($_POST['from'])){}
  else print("#reponse{display:none;}")?>
  </style>
</head>

<body>


<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Blog musical</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page1.html">Metal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page2.html">Pop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Nous contacter</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Recherche" aria-label="Recherche">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
      </form>
    </div>
</nav>

<br/><br/><br/>
  <h1>LE JAZZ ET SES FACETIES</h1>
  <br/>
  <p>Je suis passionné par le <b>jazz</b> depuis FORT longtemps. Ce site a été dédié en <i>hommage à ces fantastiques ministres...</i><br/>
  Je suis musicien au sein title="Big band de Denis Gautier" qui a pour but de dispenser la musique des grands ensembles.</p>

  <br/>
  <br/>

  <p>Un peu d'histoire (wikipédia) :</p>
  <br/>
  <div class="container" id="wiki">
  <p>Le jazz est un genre musical originaire du Sud des États-Unis, créé à la fin du XIXe siècle et au début du XXe siècle au sein des communautés afro-américaines. Avec plus de cent ans d'existence, du ragtime au jazz actuel, il recouvre de nombreux sous-genres marqués par un héritage de la musique euro-américaine et afro-américaine, et conçus pour être joués en public1. Il émerge à partir d'autres genres musicaux, dont le ragtime, la marche, le negro spiritual et le blues, et comporte des caractéristiques telles que l'utilisation fréquente de l'improvisation, de la polyrythmie, de la syncope, du shuffle, du scat et des notes bleues.</p>
  <i>-Wikipédia</i>
</div>
<br/>


<video controls width="250">

    <source src="css/flower.webm"
            type="video/webm">

    <source src="css/flower.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>

<h1 id="musique">Une musique sans conditions...</h1>
<p>Qui traverse le temps...</p>


    <!--les artistes-->
    <div id="contenance" class="container">
      <!-- première ligne -->
      <div class="row">

        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/ella.png" class="rounded" alt=""/>
            <h2><span class="text-white">Ella Fitzgerald<br/><h4>1917-1996</h4></span></h2>
          </a>
        </div>

        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/billie.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Billie Holiday<br/><h4>1915-1959</h4></span></h2>
          </a>
        </div>

        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/aretha.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Aretha Franklin<br/><h4>1942-2018</h4></span></h2>
          </a>
          </a>
        </div>


        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/bessie.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Bessie Smith<br/><h4>1894-1937</h4></span></h2>
          </a>
        </div>
      </div>

      <br/>
      <!-- seconde ligne-->
      <div class="row">
        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/amy.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Amy Winehouse<br/><h4>1983-2011</h4></span></h2>
          </a>
        </div>


        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/dinah.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Dinah Washington<br/><h4>1924-1963</h4></span></h2>
          </a>
        </div>


        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/diana.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Diana Krall<br/></span></h2>
          </a>
        </div>

        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/nina.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Nina Simone<br/><h4>1933-2003</h4></span></h2>
          </a>
        </div>
      </div>
      <br/>

      <!-- troisième ligne-->
      <div class="row">
        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/sarah.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Sarah Vaughan<br/><h4>1924-1990</h4></span></h2>
          </a>
        </div>


        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/anne.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Anne Ducros<br/></span></h2>
          </a>
        </div>


        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/norah.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Norah Jones<br/></span></h2>
          </a>
        </div>

        <div class="col-xs-6 col-sm-3 hover-blur">
          <a href="#" title="">
            <img src="css/img/dee.jpg" class="rounded" alt=""/>
            <h2><span class="text-white">Dee Dee Bridgewater<br/></span></h2>
          </a>
        </div>
      </div>
    </div>


<br/>
<br/>


<!--table -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <table class="table table-striped">
         <thead>
           <tr>
             <th scope="col" colspan="2" id="top_chanteuses">Les grandes chanteuses de Jazz</th>
           </tr>
         </thead>
         <tbody>
          <tr>
           <td>Ella Fitzgerald</td>
           <td id="years">1917</td>
          </tr>
          <tr>
           <td>Billie Holiday</td>
           <td id="years">1915</td>
          </tr>
          <tr>
           <td>Aretha Franklin</td>
           <td id="years">1942</td>
          </tr>
          <tr>
           <td>Bessie Smith</td>
           <td id="years">1894</td>
          </tr>
          <tr>
           <td>Amy Winehouse</td>
           <td id="years">1983</td>
          </tr>
          <tr>
           <td>Dinah Washington</td>
           <td id="years">1924</td>
          </tr>
          <tr>
           <td>Diana Krall</td>
           <td id="years">1917</td>
          </tr>
          <tr>
           <td>Nina Simone</td>
           <td id="years">1933</td>
          </tr>
          <tr>
           <td>Sarah Vaughan</td>
           <td id="years">1924</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-sm">
      <table class="table">
        <thead>
          <tr>
            <th>
              <h1 id="jazz_title"> Musique Jazz </h1>
            </th>
          </tr>
        </thead>
          <tr>
            <td>
              <img id="gif_jazz" src="http://clippss.free.fr/mus/mus/1%20(7).gif" alt=""/>
            </td>
          </tr>
      </table>
    </div>
  </div>
</div>
<br/>


<table class="table table-bordered" id="bleu">
  <thead>
    <tr>
      <th scope="col">la mouvement</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Le blues</td>
      <td>Le blues est apparu dans le Sud des Etats-Unhis au cours du XIXe siècle.</td>
    </tr>
    <tr>
      <td>Le new Orleans</td>
      <td>Le jazz Nouvelle-Orléans est un courant musical du jazz qui s'est principalement développé dans les années 1910 à La Nouvelle-Orléans</td>
    </tr>
    <tr>
      <td>Le swing</td>
      <td>Il est devenu un courant musical du jazz qui prend son essor au milieu des années</td>
    </tr>
    <tr>
      <td>Le bebop</td>
      <td>Le bebop se distingue des premières formes du jazz, le style dit Mainstream, par un tempo souvent très rapide, des phrasés dynamiques et des grilles harmoniques très fournies.</td>
    </tr>
    <tr>
      <td>jazz West Coast</td>
      <td>Le jazz West coast est un style de jazz pratiqué en Californie par les musiciens, en majorité blancs dans les années 1950.</td>
    </tr>
    <td>Le free jazz</td>
      <td>Le free jazz est une approche du jazz qui se développe tout d'abord dans les années 1950 et 60.</td>
    </tr>
  </tbody>
</table>




<!--formulaire-->
<div class="container">
  <div class="row">
  <div class="col-sm-8" id="formulaire"><form action="" method="POST">
    <p id="titre_formulaire"> Si vous voulez me laisser un message </p>
    <p id="sous-titre_formulaire">Comment m'avez-vous trouvé?</p>
   <div class="custom-control custom-radio">
      <input type="radio" id="customRadio1" name="from" value="à un ami"  class="custom-control-input">
      <label class="custom-control-label" for="customRadio1">Par un ami</label>
   </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="customRadio2" name="from" value="au web" class="custom-control-input">
      <label class="custom-control-label" for="customRadio2">Sur le web</label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" id="customRadio3" name="from" value="au hasard" class="custom-control-input">
      <label class="custom-control-label" for="customRadio3">Par hasard</label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" id="customRadio4" name="from" value="à autres chose" class="custom-control-input">
      <label class="custom-control-label" for="customRadio4">Autres</label>
   </div>
   <p>Votre message : </p>
  <div class="input-group">
    <input class="form-control" type="text" name="msg" aria-label="With textarea"></textarea>
  </div>
  <p>Vous pouvez agrandir la fenêtre</p>
  <div class="row">
  <input class="btn btn-primary" style="margin-left:1%;margin-right:1%;" type="submit" value="Envoyer">
  <section id="reponse">
    <?php if(isset($_POST['msg']) and isset($_POST['from'])){
      print('<p>Merci, votre message est : <b>'.$_POST['msg'].'</b> <br/> Et vous nous connaissez grâce <b>'.$_POST['from'].'</b></p>');}?>
  </section>
  </div>
  </form><br/></div>
  <!--fin formulaire-->


<div class="col-sm-auto" id="contact">
  <div>
  <p> Vous pouvez me contacter à cette adresse :</p>
  <br/>
  <p><b>Alain DuJazz</b>
    <br/> rue Louis Armstrong
    <br/> 83000 Toulon</p>
  </div>
  </div>
  </div>
</div>


<!-- pas touche à ce bloc là -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.js"></script>


</body>
</html>
