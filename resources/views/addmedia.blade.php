<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Laravel Image Upload</title>
   <style>
     .e1{
      background-color:orange;
      color:black;
      border:1px inset white;
     }
      .t12{
padding-left:1200px;
background-color:orange;
}
  .t12 ul li  {
        background-color:#eee;
        color:black;
        font-size:15px;
        

      }
   </style>
</head>

<body>
   <div class="t12">
      <ul class="nav nav-tabs">

     

     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>
    <li  role="presentation"><a href="medi-export"type="button">Excel  </a></li>

          
      </ul></div>
  <div class="e1">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 align="center"> Information Generale</h1> 
    <div class="form-group">
                            <form method="POST" action="{{ Route('addmedia') }}" enctype="multipart/form-data" class="max-w-xl m-4 p-10 rounded shadow-xl" style="background-color: rgba(255, 255, 255, 0.575);">
                                 @csrf

                <label for="nom">Nom:</label>
                <br>

                <input type="text" name="nom" class="form-control" required>
                 <label for="nom">Prenom:</label>
                <br>

                <input type="text" name="prenom" class="form-control" required>
                 <label for="nom">Date De Naissance:</label>
                <br>

                <input type="text" name="date_de_naissance" class="form-control" required>
                 <label for="nom">Adresse:</label>
                <br>     
                           <input type="text" name="Adresse" class="form-control" required>

                <label for="nom">Quel est votre niveau d'experience Professionnelle?:</label>
                <br>
 <select class="form-control" name="type">
                      <option value="presentation">Debutant</option>
                      <option value="rapport">Etudiant</option>
                      <option value="cours">Avec Experience</option>
                       <option value="presentation">Responsable Manager</option>
                       <option value="presentation">Je suis au chomage et je cherches un travail</option>
</select>
                           <label for="nom">Quel est le nom de poste:</label>
                <br>

                <input type="text" name="nom_de_poste" class="form-control" required>
                <label for="nom">Salaire:</label>
                <br>

                <input type="text" name="salaire" class="form-control" required>
 <label for="nom">Ville:</label>
                <br>

                <input type="text" name="ville" class="form-control" required>
                 <label for="nom">Code Postal:</label>
                <br>
<label for="nom">Fichier: </label>
                                <br>

                      <input type="file" name="file" class="form-control" required> 
                <input type="text" name="code_postal" class="form-control" required>

                               
                     
                      
 <label for="nom">Numero de portable:</label>
                <br>

                <input type="text" name="numero_portable" class="form-control" required>
                       <input type="submit" class="bg-primary hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full"  value="Add">
                    </form>
                 </div></div></div></div></div>
</body>
</html>