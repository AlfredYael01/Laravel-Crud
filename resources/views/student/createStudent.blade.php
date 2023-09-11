<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <form>
        <div class="name">
            <label for="name">Entrez votre nom</label>
            <input type="text" name="name">
        </div>
        <div class="email">
            <label for="email">Entrez votre mail</label>
            <input type="text" name="email">
        </div>
        <div class="form-example">
            <input type="submit" value="Envoyer" />
            <input type="submit" value="Supprimer" />
        </div>
    </form>

    <p> <h4> Affichage liste élèves </h4></p>
    @foreach($Eleve as $eleve)
        <p> {{$eleve->name}}  {{$eleve->surname}}</p>
    @endforeach

</html>



