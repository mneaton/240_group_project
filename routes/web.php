<?php

Route::get('/', function () {
    return view('content.homepage');
});

Route::get('/tutorials', function() {
    $tutorials = \App\Tutorials::all();

    return view('content.tutorials', ['tutorials' => $tutorials]);
});

Route::get('/command/{commandId}', function($commandId) {
    $command = \App\Commands::query()->find($commandId);
    return view('content.command', ['command' => $command]);
});

Route::get('/commands', function() {
    $commands = \App\Commands::query()
        ->leftJoin('sections', 'commands.id', '=', 'sections.command_id')
        ->orderBy('commands.firstLetter')
        ->get();

    return view('content.commands', ['commands' => $commands]);
});

Route::get('/tutorial/{tutorialId}', function($tutorialId) {
    $sections = \App\Sections::query()->where('tutorial_id', '=', $tutorialId)->orderBy('section_id', 'asc')->get();
    $tutorial = \App\Tutorials::query()->find($tutorialId);

    return view('content.tutorial', ['sections' => $sections, 'tutorial' => $tutorial]);
});

Route::get('/tutorials/{tutorialId}/section/{sectionId}', function($tutorialId, $sectionId) {
    $section = \App\Sections::query()
        ->join('tutorials', 'tutorials.id', '=', 'sections.tutorial_id')
        ->where('tutorial_id', '=', $tutorialId)
        ->where('section_id', '=', $sectionId)
        ->get();

    $tutorials = DB::table('tutorials')->join('sections', 'tutorials.id', '=', 'sections.tutorial_id')->get();

    return view('content.section', ['section' => $section[0], 'tutorials' => $tutorials]);
});

Route::get('/user/{userId}', function($userId) {
   $user = \App\User::query()->find($userId);
   $classes = \App\Classes::query()->where('user_id', '=', $userId)
       ->join('tutorials', 'classes.tutorial_id', '=', 'tutorials.id')
       ->get();

   return view('content.userInfo', ['user' => $user, 'classes' => $classes]);

});

Route::post('/tutorials/{tutorialId}/section/{sectionId}', function($tutorialId, $sectionId) {
    $section = \App\Sections::query()
        ->join('tutorials', 'tutorials.id', '=', 'sections.tutorial_id')
        ->where('tutorial_id', '=', $tutorialId)
        ->where('section_id', '=', $sectionId)
        ->get();

    echo Request::post('action');
});