<?php

use App\Models\Personne;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/message', function () {
$pers=[['nom'=> "Ali", 'prenom'=> "Sani", 'age'=> 37], ['nom'=> "Ali", 'prenom'=> "Sani", 'age'=> 18]];
$personnes=Personne::all();

return view('test', ['nom'=>'Ali', 'prenom'=>'Sani', 'age'=>54,'personnes'=> $personnes]);
});


