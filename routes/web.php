<?php

//hier wird die index datei als response zurückgegeben

Route::any('{all}', function () {
    return view('index');
})->where('all', '.*');//dafür zuständig bei Reload die gleiche seite wieder anzuzeigen


