<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/m/m/m', function () {
    return view('wel');
});



Route::get('/usuario/{usuario}/{nome}', function ($usuario,$nome) {
    echo "Bem vindo, {$usuario}";
	echo "Bem vindo, {$nome}";
});

Route::get('/blog', function () {
    echo "<p> BLOG</p>";
});

Route::get('/blog/{adm}', function () {
    echo "<p> Você Esta na pagina administrativa</p>";
});


Route::get('/a/{a}', function () {
    echo "
	<table border='1' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='165' valign='top'><p>Usuario</p></td>
  </tr>
  <tr>
    <td width='165' valign='top'><p>José Maria</p></td>
  </tr>
  <tr>
    <td width='165' valign='top'><p>Pedro</p></td>
  </tr>
  <tr>
    <td width='165' valign='top'><p>Joao</p></td>
  </tr>
</table>
	";
});


Route::get('/media/{a1}/{a2}/{a3}/{a4}/{a5}', function ($a1,$a2,$a3,$a4,$a5) {
    $media=($a1+$a2+$a3+$a4+$a5)/5 ;
	
	echo "A média, {$media}";
});


Route::get('/nome/{a1}/{a2}', function ($a1,$a2) {
    if($a1==$a2){
		echo "igual";
	}else{echo "diferente";}
		
});

Route::get('/x/{a1n}/{a2n}', function ($a1n,$a2n) {
    return view('wel', ['nome' => $a1n,'nome1' => $a2n]);
});

