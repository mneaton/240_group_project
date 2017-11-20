<?php

Route::get('/', function () {
    return view('content.homepage');
});

Route::get('/tutorials', function() {
    $tutorials = \App\Tutorials::all();

    return view('content.tutorials', ['tutorials' => $tutorials]);
});

Route::get('/tutorials/{tutorialId}/section/{sectionId}', function($tutorialId, $sectionId){
    $section = \App\Sections::query()
        ->where('tutorial_id', '=', $tutorialId)
        ->where('section_id', '=', $sectionId)
        ->get();

    $tutorials = DB::table('tutorials')->join('sections', 'tutorials.id', '=', 'sections.tutorial_id')->get()->all();

    return view('content.section', ['section' => $section, 'tutorials' => $tutorials]);
});

Route::get('/commands', function() {
   $commands = DB::table('commands')
       ->join('tutorials', 'commands.id', '=', 'tutorials.command_id')
       ->orderBy('commands.firstLetter')
       ->get()
       ->all();

   return view('content.commands', ['commands' => $commands]);
});