<!DOCTYPE html>
<html>

<h3>Notes de l'élève</h3>
<p>
    @foreach($EvaluationEleve as $eval)
        <p>{{$eval->note}}</p>
    @endforeach

</p>

</html>
