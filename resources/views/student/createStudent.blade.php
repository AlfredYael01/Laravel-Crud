<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <form action="{{route('eleves.store')}}" method="POST">
        @csrf
        <div class="name">
            <label for="name">Entrez votre nom</label>
            <input type="text" name="name">
        </div>
        <div class="surname">
            <label for="surname">Entrez votre prénom</label>
            <input type="text" name="surname">
        </div>
        <div class="dob">
            <label for="dob">Entrez votre date de naissance</label>
            <input type="text" name="dob">
        </div>
        <div class="student_number">
            <label for="student_number">Entrez votre numéro étudiant</label>
            <input type="text" name="student_number">
        </div>
        <div class="email">
            <label for="email">Entrez votre mail</label>
            <input type="text" name="email">
        </div>
        <div class="image">
            <label for="image">Entrez votre image</label>
            <input type="text" name="image">
        </div>
        <div class="form-example">
            <input type="submit" value="Envoyer" />
        </div>
    </form>

    <p> <h4> Affichage liste élèves </h4></p>
    @foreach($Eleve as $eleve)
        <p> {{$eleve->name}}  {{$eleve->surname}}</p>
    @endforeach

</html>



