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
    return view('app', ['poll' => $poll_item]);
});

Route::get('/singlePoll/{slug}', function ($slug) {
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

    return view('singlePoll', ['poll' => $new_poll]);
});

Route::get('/login', function () {
    return view('login');
});
