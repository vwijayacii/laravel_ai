<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EmbeddingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/chat', [ChatController::class, 'chat']);
Route::get('/chat', [ChatController::class, 'index']);

Route::post('v2/chat', [ChatController::class, 'chat']);
Route::get('v2/chat', [ChatController::class, 'index']);

Route::get('iframe/chat', [ChatController::class, 'index_iframe']);
Route::post('/change_topic', [ChatController::class, 'changeTopic']);

Route::post('/flush_topic', [ChatController::class, 'flushTopic']);

Route::get("/intranet", function () {
    return View::make("intranet_colliers");
});

//embedding
// Route untuk menampilkan form
Route::get('/embedding', [EmbeddingController::class, 'showForm'])->name('embedding.form');

// Route untuk menyimpan embedding
Route::post('/generate-embedding', [EmbeddingController::class, 'generateEmbedding']);

// Route untuk menampilkan form tanya jawab
Route::get('/embedding/ask', function () {
    return view('embedding.question');
});

Route::post('/embedding/ask', [EmbeddingController::class, 'askQuestion'])->name('askQuestion');

// Route for showing the form to insert content and embedding
Route::get('/embedding/insert', [EmbeddingController::class, 'showInsertForm'])->name('insertForm');

// Route for handling the form submission
Route::post('/embedding/insert', [EmbeddingController::class, 'insertDocument'])->name('insertDocument');

Route::get('embedding/iframe/chat', [EmbeddingController::class, 'index_iframe']);
Route::post('embedding/chat', [EmbeddingController::class, 'chat']);
Route::get('embedding/generate', [EmbeddingController::class, 'generateDocument']);

//setting
Route::get('embedding/setting', [EmbeddingController::class, 'indexSetting'])->name('indexSetting');
Route::post('/embedding/insert_setting', [EmbeddingController::class, 'insertSetting'])->name('insertSetting');

Route::get('embedding/getTransactionColliers', [EmbeddingController::class, 'getTransactionData']);


//STREAM
Route::get('embedding/stream/chat', [EmbeddingController::class, 'streamForm']);
Route::post('embedding/stream/chat-stream', [EmbeddingController::class, 'streamChat']);