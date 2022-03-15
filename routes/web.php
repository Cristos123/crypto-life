<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UniversalController;
use App\Http\Controllers\KYCController;
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
    return view('welcome');
});

Route::get('home', function () {
    return view('dashboard');
})
    ->name('home')
    ->middleware(['auth', 'verified', 'kyc']);

Route::get('/admin-dashboard', [KYCController::class, 'index'])->name(
    'admin-dashboard'
);

Route::get('show/{kyc}', [KYCController::class, 'show'])->name('show');

Route::get('/admin-dashboard/{kyc}', [
    KYCController::class,
    'changestatus',
])->name('admin-dashboard');

//Acount route
Route::get('/kyc-verification', [KYCController::class, 'create'])->name(
    'kyc-verification'
);
Route::post('/kyc-verification', [KYCController::class, 'store'])->name(
    'kyc-verification'
);
Route::get('/account-affiliate', function () {
    return view('account-affiliate');
});
Route::get('/exchange', function () {
    return view('exchange');
});
Route::get('/account-deposite', function () {
    return view('account-deposite');
});
Route::get('/account-overview', function () {
    return view('account-overview');
});
Route::get('/account-withdraw', function () {
    return view('account-withdraw');
});
Route::get('/account-api', function () {
    return view('account-api');
});

//add bank details route

Route::get('/add-bank-acc', function () {
    return view('add-bank-acc');
});
Route::get('/add-debit-card', function () {
    return view('add-debit-card');
});
Route::get('/verify-step-1', function () {
    return view('verify-step-1');
});
Route::get('/verify-step-2', function () {
    return view('verify-step-2');
});
Route::get('/verify-step-3', function () {
    return view('verify-step-3');
});
Route::get('/verify-step-4', function () {
    return view('verify-step-4');
});
Route::get('/verify-step-5', function () {
    return view('verify-step-5');
});
Route::get('/verify-step-6', function () {
    return view('verify-step-6');
});
//settings
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/settings-account', function () {
    return view('settings-account');
})->name('settings-account');

Route::get('/settings-security', function () {
    return view('settings-security');
})->name('settings-security');

Route::get('/data-insurance-found', function () {
    return view('data-insurance-found');
})->name('data-insurance-found');
Route::get('/data-index-price', function () {
    return view('data-index-price');
})->name('data-index-price');

Route::get('/data-last-price', function () {
    return view('data-last-price');
})->name('data-last-price');
Route::get('/data-mark-price', function () {
    return view('data-mark-price');
})->name('data-mark-price');

Route::get('/data-founding-rate', function () {
    return view('data-founding-rate');
})->name('data-founding-rate');

Route::get('/data-tbi', function () {
    return view('data-tbi');
})->name('data-tbi');
Route::get('/otp-1', function () {
    return view('otp-1');
})->name('otp-1');
Route::get('/otp-2', function () {
    return view('otp-2');
})->name('otp-2');

Route::get('/reset', function () {
    return view('reset');
})->name('reset');

Route::get('/get-state/{country}', [
    UniversalController::class,
    'getState',
])->name('state');

// Route::get('/signup', function () {
//     return view('signup');
// })->name('signup');

Route::get('/400', function () {
    return view('400');
})->name('400');
Route::get('/403', function () {
    return view('403');
})->name('403');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/500', function () {
    return view('500');
})->name('500');
Route::get('/503', function () {
    return view('503');
})->name('503');
