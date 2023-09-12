<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<form action="{{route('eleves.store')}}" method="POST">
    @csrf
    <div class="name">
        <label for="name"></label>
        <input type="text" name="name" value="{{ $eleveToShow->name }}">
    </div>
    <div class="surname">
        <label for="surname"></label>
        <input type="text" value="{{ $eleveToShow->surname }}">
    </div>
    <div class="dob">
        <label for="dob"></label>
        <input type="text" name="dob"value="{{ $eleveToShow->dob }}">
    </div>
    <div class="student_number">
        <label for="student_number"></label>
        <input type="text" name="student_number" value="{{ $eleveToShow->student_number }}">
    </div>
    <div class="email">
        <label for="email">Entrez votre mail</label>
        <input type="text" name="email" value="{{ $eleveToShow->email }}" >
    </div>
    <div class="image">
        <label for="image">Entrez votre image</label>
        <input type="text" name="image" value="{{ $eleveToShow->image }}">
    </div>
    <div class="form-example">
        <input type="submit" value="Envoyer" />
    </div>
</form>
</html>
