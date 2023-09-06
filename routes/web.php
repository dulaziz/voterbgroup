<?php

use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', function () {
    $poll_item = [
        [
            'title' => "Judul Polling Pertama",
            'slug' => "judul-polling-pertama",
            'excerpt' => "1 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores.",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores. Doloremque eligendi natus quos at reiciendis, mollitia molestias. Nemo, error numquam enim voluptatem minus tempore. Ipsam nesciunt minima nulla id, mollitia asperiores veritatis sint ipsa sed nobis quaerat? Magni, ducimus! Eaque exercitationem impedit quae magnam nisi. Fugit non a inventore harum, assumenda quia asperiores sunt iure perspiciatis hic porro reprehenderit nesciunt fuga maiores qui cupiditate, cumque adipisci necessitatibus praesentium tempore. Illum quia eum voluptatum quidem deserunt eaque aliquam saepe?"
        ],
        [
            'title' => "Judul Polling Kedua",
            'slug' => "judul-polling-kedua",
            'excerpt' => "2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores.",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores. Doloremque eligendi natus quos at reiciendis, mollitia molestias. Nemo, error numquam enim voluptatem minus tempore. Ipsam nesciunt minima nulla id, mollitia asperiores veritatis sint ipsa sed nobis quaerat? Magni, ducimus! Eaque exercitationem impedit quae magnam nisi. Fugit non a inventore harum, assumenda quia asperiores sunt iure perspiciatis hic porro reprehenderit nesciunt fuga maiores qui cupiditate, cumque adipisci necessitatibus praesentium tempore. Illum quia eum voluptatum quidem deserunt eaque aliquam saepe?"
        ]
        ];
    return view('home.index', ['poll' => $poll_item]);
});

// Single Polling
Route::get('/singlePolling/{slug}', function ($slug) {
    $poll_item = [
        [
            'title' => "Judul Polling Pertama",
            'slug' => "judul-polling-pertama",
            'excerpt' => "1 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores.",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores. Doloremque eligendi natus quos at reiciendis, mollitia molestias. Nemo, error numquam enim voluptatem minus tempore. Ipsam nesciunt minima nulla id, mollitia asperiores veritatis sint ipsa sed nobis quaerat? Magni, ducimus! Eaque exercitationem impedit quae magnam nisi. Fugit non a inventore harum, assumenda quia asperiores sunt iure perspiciatis hic porro reprehenderit nesciunt fuga maiores qui cupiditate, cumque adipisci necessitatibus praesentium tempore. Illum quia eum voluptatum quidem deserunt eaque aliquam saepe?"
        ],
        [
            'title' => "Judul Polling Kedua",
            'slug' => "judul-polling-kedua",
            'excerpt' => "2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores.",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores. Doloremque eligendi natus quos at reiciendis, mollitia molestias. Nemo, error numquam enim voluptatem minus tempore. Ipsam nesciunt minima nulla id, mollitia asperiores veritatis sint ipsa sed nobis quaerat? Magni, ducimus! Eaque exercitationem impedit quae magnam nisi. Fugit non a inventore harum, assumenda quia asperiores sunt iure perspiciatis hic porro reprehenderit nesciunt fuga maiores qui cupiditate, cumque adipisci necessitatibus praesentium tempore. Illum quia eum voluptatum quidem deserunt eaque aliquam saepe?"
        ]
        ];

        $new_poll = [];
        foreach($poll_item as $pol) {
            if($pol["slug"] === $slug) {
                $new_poll = $pol;
            }
        }

    return view('home.singlePolling.index', ['poll' => $new_poll]);
});

// Profile
Route::get('/singlePolling/{slug}/profile', function ($slug) {
    $poll_item = [
        [
            'title' => "Judul Polling Pertama",
            'slug' => "judul-polling-pertama",
            'excerpt' => "1 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores.",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores. Doloremque eligendi natus quos at reiciendis, mollitia molestias. Nemo, error numquam enim voluptatem minus tempore. Ipsam nesciunt minima nulla id, mollitia asperiores veritatis sint ipsa sed nobis quaerat? Magni, ducimus! Eaque exercitationem impedit quae magnam nisi. Fugit non a inventore harum, assumenda quia asperiores sunt iure perspiciatis hic porro reprehenderit nesciunt fuga maiores qui cupiditate, cumque adipisci necessitatibus praesentium tempore. Illum quia eum voluptatum quidem deserunt eaque aliquam saepe?"
        ],
        [
            'title' => "Judul Polling Kedua",
            'slug' => "judul-polling-kedua",
            'excerpt' => "2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores.",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, at? Repudiandae odit et incidunt iure architecto laborum odio necessitatibus doloremque saepe sequi, enim tempora. Ducimus, sed quasi. Expedita veritatis rerum dolores. Doloremque eligendi natus quos at reiciendis, mollitia molestias. Nemo, error numquam enim voluptatem minus tempore. Ipsam nesciunt minima nulla id, mollitia asperiores veritatis sint ipsa sed nobis quaerat? Magni, ducimus! Eaque exercitationem impedit quae magnam nisi. Fugit non a inventore harum, assumenda quia asperiores sunt iure perspiciatis hic porro reprehenderit nesciunt fuga maiores qui cupiditate, cumque adipisci necessitatibus praesentium tempore. Illum quia eum voluptatum quidem deserunt eaque aliquam saepe?"
        ]
        ];

        $new_poll = [];
        foreach($poll_item as $pol) {
            if($pol["slug"] === $slug) {
                $new_poll = $pol;
            }
        }

    return view('home.singlePolling.profile', ['poll' => $new_poll]);
});



// ADMIN
Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/addPolling', function () {
    return view('admin.addPolling');
});

Route::get('/admin/editPolling', function () {
    return view('admin.editPolling');
});

Route::get('/admin/addCandidate', function () {
    return view('admin.addCandidate');
});

Route::get('/admin/editCandidate', function () {
    return view('admin.editCandidate');
});