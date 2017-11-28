<?php

$tutorials = \App\Tutorials::all();

Route::get('/', function () use($tutorials) {
    return view('content.homepage', ['tutorials' => $tutorials]);
});

Route::get('/tutorials', function() use($tutorials) {
    return view('content.tutorials', ['tutorials' => $tutorials]);
});

Route::get('/command/{commandId}', function($commandId) use($tutorials) {
    $command = \App\Commands::query()->find($commandId);
    return view('content.command', ['command' => $command, 'tutorials' => $tutorials]);
});

Route::get('/commands', function() use($tutorials) {
    $commands = \App\Commands::query()
        ->leftJoin('sections', 'commands.id', '=', 'sections.command_id')
        ->orderBy('commands.firstLetter')
        ->get();

    return view('content.commands', ['commands' => $commands, 'tutorials' => $tutorials]);
});

Route::get('/tutorial/{tutorialId}', function($tutorialId) use($tutorials) {
    $sections = \App\Sections::query()->where('tutorial_id', '=', $tutorialId)->orderBy('section_id', 'asc')->get();
    $tutorial = \App\Tutorials::query()->find($tutorialId);

    return view('content.tutorial', ['sections' => $sections, 'tutorial' => $tutorial, 'tutorials' => $tutorials]);
});

Route::get('/tutorials/{tutorialId}/section/{sectionId}', function($tutorialId, $sectionId) use ($tutorials) {
    $section = \App\Sections::query()
        ->join('tutorials', 'tutorials.id', '=', 'sections.tutorial_id')
        ->where('tutorial_id', '=', $tutorialId)
        ->where('section_id', '=', $sectionId)
        ->get();

    $tutorialView = DB::table('tutorials')->join('sections', 'tutorials.id', '=', 'sections.tutorial_id')->get();

    return view('content.section', ['section' => $section[0], 'tutorialView' => $tutorialView, 'tutorials' => $tutorials]);
});

Route::get('/user/{userId}', function($userId) use($tutorials) {
   $user = \App\User::query()->find($userId);
   $classes = \App\Classes::query()->where('user_id', '=', $userId)
       ->join('tutorials', 'classes.tutorial_id', '=', 'tutorials.id')
       ->get();

   return view('content.userInfo', ['user' => $user, 'classes' => $classes, 'tutorials' => $tutorials]);
});

Route::post('/tutorials/{tutorialId}/section/{sectionId}', function($tutorialId, $sectionId) {
    $section = \App\Sections::query()
        ->join('tutorials', 'tutorials.id', '=', 'sections.tutorial_id')
        ->where('tutorial_id', '=', $tutorialId)
        ->where('section_id', '=', $sectionId)
        ->get();
});