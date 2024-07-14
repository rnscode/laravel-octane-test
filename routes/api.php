<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/user', static function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/health-check', static fn(Request $request) => Response::noContent())->name('health-check');
Route::get('/static', static fn(Request $request) => Response::json(['status' => true]))->name('static');
Route::get(
    '/http-request',
    static fn(Request $request) => Response::json(
        json_decode(Http::get('http://whoami/api'), false, 512, JSON_THROW_ON_ERROR)
    )
)->name('http-request');