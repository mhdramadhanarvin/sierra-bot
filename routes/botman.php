<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
// $botman->hears('Start conversation', BotManController::class.'@startConversation');

$botman->hears('.*Bonjour.*', function ($bot) {
    $bot->reply('Nice to meet you!');
});