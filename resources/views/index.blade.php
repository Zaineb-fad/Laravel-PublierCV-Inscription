
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


<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Date De Naissance</td>
          <td>Adresse</td>
                    <td>Type</td>
          <td>Nom de poste</td>
          <td>salaire</td>
          <td>ville</td>
          <td>code postal</td>
          <td>numero porable</td>

          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($medi as $medis)
        <tr>
            <td>{{$medis->id}}</td>
            <td>{{$medis->nom}}</td>
            <td>{{$medis->prenom}}</td>
            <td>{{$medis->date_de_naissance}}</td>
                        <td>{{$medis->type}}</td>
            <td>{{$medis->nom_de_poste}}</td>
            <td>{{$medis->salaire}}</td>
            <td>{{$medis->ville}}</td>
            <td>{{$medis->code_postal}}</td>
            <td>{{$medis->numero_portable}}</td>

            <td class="text-center">
                <a href="{{ route('medis.edit', $medis->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('medis.destroy', $medis->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div></div></body></html>