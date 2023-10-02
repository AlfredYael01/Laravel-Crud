<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" href="resources\css\displayEvaluationNotes">
</head>
<body>
<p><h1>Affichage des notes d'une évaluation</h1></p>

<?php
$groupedEvaluations = [];
foreach ($EvaluationEleve as $eval) {
    $evaluationId = $eval->evaluation_id;
    if (!isset($groupedEvaluations[$evaluationId])) {
        $groupedEvaluations[$evaluationId] = [];
    }
    $groupedEvaluations[$evaluationId][] = $eval;
}
?>

@foreach($groupedEvaluations as $evaluationId => $evaluations)
    <h2>Évaluation ID: {{ $evaluationId }}</h2>
    <table>
        @foreach($evaluations as $eval)
            <tr>
                <td>{{ $eval->note }}</td>
            </tr>
        @endforeach
    </table>
@endforeach

</body>
</html>
