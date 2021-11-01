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
padding-left:1250px;
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



<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('medis.update', $student->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom:</label>
                <br>

                <input type="text" name="nom" class="form-control" required>
                 <label for="nom">Prenom:</label>
                <br>

                <input type="text" name="prenom" class="form-control" required>
                 <label for="nom">Date De Naissance:</label>
                <br>

                <input type="text" name="date_de_naissance" class="form-control" required>
                 

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

                <input type="text" name="code_postal" class="form-control" required>

                            
                 
                     
                      
 <label for="nom">Numero de portable:</label>
                <br>

                <input type="text" name="numero_portable" class="form-control" required>
                       
          <button type="submit" class="btn btn-block btn-danger">Update CV</button>
      </form>
  </div>
</div>
</form></div></div></body></html>