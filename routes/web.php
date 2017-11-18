<?php

Route::get('/', function () {
    return view('content.homepage');
});

Route::get('/tutorials/{tutorialId}/section/{sectionId}', function($tutorialId, $sectionId) {


    return view('content.section');
});