<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" href="ressources/css/displayEvaluationNotes">
</head>
<body>
<p><h1> Affichage des notes des évaluation de l'élève</h1></p>
    @foreach($Evaluation as $evaluation)
   <table>
       <tr>
           <td> {{ $evaluation->date }} </td>
           <td> {{ $evaluation->relation_mod }} </td>
           <td> {{ $evaluation->title }} </td>
           <td> {{ $evaluation->coefficients }} </td>
       </tr>
   </table>
    @endforeach
</body>
</html>
