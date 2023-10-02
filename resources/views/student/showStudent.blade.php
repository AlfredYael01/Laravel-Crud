<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<form action="{{route('eleves.update',  $eleveToShow->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="image">
        <label for="image">Image de profil</label>
        <input type="file" name="image">
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
        <label for="image">Selectionnez votre image</label>
        <input type="file" name="image" value="{{ $eleveToShow->image }}">
    </div>
    <div class="form-example">
        <input type="submit" value="Enregistrer" />
    </div>
</form>
</html>
