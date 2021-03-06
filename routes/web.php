<?php

use Illuminate\Support\Facades\Route;

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
    $parameters = [
        'title' => 'Hello Word!',
        'text'  => 'Choose a character'
    ];
    return view('home', $parameters);
})->name('home');

Route::get('/naruto', function () {
    $parameters = [
        'name'  => 'Naruto Uzumaki',
        'quote' => 'Hard work is worthless for those that don’t believe in themselves.',
        'src' => 'https://cdn.shopify.com/s/files/1/1140/8354/files/naruto-uzumaki.jpg?v=1627606507'
    ];
    return view('naruto', $parameters);
})->name('naruto');

Route::get('/obito', function () {
    $parameters = [
        'name' => 'Obito Uchiha',
        'quote'  => 'The moment people come to know love, they run the risk of carrying hate.',
        'src' => 'https://cdn.shopify.com/s/files/1/1140/8354/files/Obito-Uchiha.jpg?v=1627606507'
    ];
    return view('obito', $parameters);
})->name('obito');

Route::get('/jiraiya', function () {
    $parameters = [
        'name' => 'Jiraiya',
        'quote'  => 'When people get hurt, they learn to hate… When people hurt others, they become hated and racked with guilt. But knowing that pain allows people to be kind. Pain allows people to grow… and how you grow is up to you.',
        'src' => 'https://cdn.shopify.com/s/files/1/1140/8354/files/Jiraiya.jpg?v=1627606506'
    ];
    return view('jiraiya', $parameters);
})->name('jiraiya');

Route::get('/itachi', function () {
    $parameters = [
        'name' => 'Itachi Uchiha',
        'quote'  => 'Time doesn\'t heal anything, it just teaches us how to live with pain.',
        'src' => 'https://cdn.shopify.com/s/files/1/1140/8354/files/Itachi-Uchiha.jpg?v=1627606506'
    ];
    return view('itachi', $parameters);
})->name('itachi');

Route::get('/orochimaru', function () {
    $parameters = [
        'name' => 'Orochimaru',
        'quote'  => 'It’s human nature not to realize the true value of something, unless they lose it.',
        'src' => 'https://cdn.shopify.com/s/files/1/1140/8354/files/Orochimaru.jpg?v=1627606925'
    ];
    return view('orochimaru', $parameters);
})->name('orochimaru');

Route::get('/sakura', function () {
    $parameters = [
        'name' => 'Sakura Haruno',
        'quote'  => 'Every one of us must do what’s in their power! If we’re going to die anyway, then it’s better to die fighting than to do nothing!',
        'src' => 'https://cdn.shopify.com/s/files/1/1140/8354/files/Sakura-Haruno.jpg?v=1627606507'
    ];
    return view('sakura', $parameters);
})->name('sakura');

Route::get('/madara', function () {
    $parameters = [
        'name' => 'Madara Uchiha',
        'quote'  => 'Wake up to reality! Nothing ever goes as planned in this world. The longer you live, the more you realize that in this reality, only pain, suffering, and futility exist.',
        'src' => 'https://i1.sndcdn.com/artworks-000086631503-3cl97y-t500x500.jpg'
    ];
    return view('madara', $parameters);
})->name('madara');







