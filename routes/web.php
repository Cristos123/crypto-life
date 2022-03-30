<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KYCController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\InvestmentController;

use App\Http\Controllers\Admin\AssetController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DurationController;
use App\Http\Controllers\Admin\PaymentAddressController;
use App\Http\Controllers\Admin\KYCController as AdminKYCController;
use App\Http\Controllers\Admin\InvestmentController as AdminInvestmentController;
use App\Http\Controllers\Admin\WithdrawalController as AdminWithdrawalController;

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
//

Route::group(['middleware' => ['auth', 'verified', 'kyc']], function () {

    Route::get('dashboard', DashboardController::class)->name('home');
    Route::post('invest', [InvestmentController::class, 'store'])->name('invest');

    // Withdraw  ✅
    Route::get('withdrawals', [WithdrawalController::class, 'index'])->name('withdrawals.index');
    Route::get('withdraw-funds', [WithdrawalController::class, 'create'])->name('withdrawals.create');
    Route::post('withdraw-funds', [WithdrawalController::class, 'store'])->name('withdrawals.store');

    // Deposit
    Route::get('deposits', [DepositController::class, 'index'])->name('deposits.index');
    Route::get('deposit-funds', [DepositController::class, 'create'])->name('deposits.create');
    Route::post('deposit-funds', [DepositController::class, 'store'])->name('deposits.store');
    Route::delete('deposit-funds/{deposit:reference}/cancel', [DepositController::class, 'destroy'])->name('deposits.cancel');

    // Account Settings
    Route::get('account-settings', AccountController::class)->name('account-settings');

    // KYC
    Route::get('/kyc-verification', [KYCController::class, 'create'])->name(
        'kyc-verification'
    );
    Route::post('/kyc-verification', [KYCController::class, 'store'])->name(
        'kyc-verification'
    );


    //assets route
    Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
        Route::get('/dashboard', [CategoryController::class, 'index'])->name('admin.dashboard');

        //category routes
        Route::resource('category', CategoryController::class)->names([
            'index' => 'admin.category.index',
            'create' => 'admin.create-category',
            'store' => 'admin.store-category',
            'update' => 'admin.update-category',
            'edit' => 'admin.edit-category',
            'destroy' => 'admin.delete-category',
        ]);

        //admin withdrawal route
        Route::resource('users-withdrawals', AdminWithdrawalController::class)->names([
            'index' => 'admin.withdrawal.index',
            'show' => 'admin.withdrawal.show',
            'update' => 'admin.withdrawal.update',
        ]);

        //Asset routes
        Route::put('asset/{id}', [
            AssetController::class,
            'changeDefaultAddress',
        ])->name('admin.asset.changeDefaultAddress');

        Route::resource('asset', AssetController::class)->names([
            'index' => 'admin.asset.index',
            'edit' => 'admin.edit-asset',
            'update' => 'admin.update-asset',
            'store' => 'admin.store-asset',
            'show' => 'admin.asset.show',
            'changeDefaultAddress' => 'admin.asset.changeDefaultAddress',
            'create' => 'admin.create-asset',
            'destroy' => 'admin.delete-asset',
        ]);

        //payment address route
        Route::resource('payment-address', PaymentAddressController::class)->names([
            'index' => 'admin.payment-address.index',
            'edit' => 'admin.payment-address.edit',
            'show' => 'admin.payment-address.show',
            'update' => 'admin.payment-address.update',
            'store' => 'admin.payment-address.store',
            'create' => 'admin.payment-address.create',
            'destroy' => 'admin.delete-asset',
        ]);

        //Duration routes
        Route::resource('duration', DurationController::class)->names([
            'index' => 'admin.duration.index',
            'edit' => 'admin.edit-duration',
            'update' => 'admin.update-duration',
            'create' => 'admin.create-duration',
            'store' => 'admin.store-duration',
            'destroy' => 'admin.delete-duration',
        ]);

        //Investment routes
        Route::resource('investment', AdminInvestmentController::class)->names([
            'index' => 'admin.investment.index',
            'show' => 'admin.show-investment',
            'edit' => 'admin.edit-investment',
            'update' => 'admin.update-investment',
            'create' => 'admin.create-investment',
            'store' => 'admin.store-investment',
            // 'destroy' => 'admin.delete',
        ]);

        // KYC Management
        Route::get('/kyc-submissions', [AdminKYCController::class, 'index'])->name('admin.kyc.index');
        Route::get('/kyc-submissions/{kyc}', [AdminKYCController::class, 'show'])->name('admin.kyc.show');
        Route::post('/kyc-submissions/{kyc}', [AdminKYCController::class, 'update'])->name('admin.kyc.store');
    });
});


// Route::get('/account-affiliate', function () {
//     return view('account-affiliate');
// });
// Route::get('/exchange', function () {
//     return view('exchange');
// });

// Route::get('/account-overview', function () {
//     return view('account-overview');
// });
// Route::get('/account-api', function () {
//     return view('account-api');
// });

// //add bank details route

// Route::get('/add-bank-acc', function () {
//     return view('add-bank-acc');
// });
// Route::get('/add-debit-card', function () {
//     return view('add-debit-card');
// });
// Route::get('/verify-step-1', function () {
//     return view('verify-step-1');
// });
// Route::get('/verify-step-2', function () {
//     return view('verify-step-2');
// });
// Route::get('/verify-step-3', function () {
//     return view('verify-step-3');
// });
// Route::get('/verify-step-4', function () {
//     return view('verify-step-4');
// });
// Route::get('/verify-step-5', function () {
//     return view('verify-step-5');
// });
// Route::get('/verify-step-6', function () {
//     return view('verify-step-6');
// });
// //settings
// Route::get('/settings', function () {
//     return view('settings');
// });
// Route::get('/settings-account', function () {
//     return view('settings-account');
// })->name('settings-account');

// Route::get('/settings-security', function () {
//     return view('settings-security');
// })->name('settings-security');

// Route::get('/data-insurance-found', function () {
//     return view('data-insurance-found');
// })->name('data-insurance-found');
// Route::get('/data-index-price', function () {
//     return view('data-index-price');
// })->name('data-index-price');

// Route::get('/data-last-price', function () {
//     return view('data-last-price');
// })->name('data-last-price');
// Route::get('/data-mark-price', function () {
//     return view('data-mark-price');
// })->name('data-mark-price');

// Route::get('/data-founding-rate', function () {
//     return view('data-founding-rate');
// })->name('data-founding-rate');

// Route::get('/data-tbi', function () {
//     return view('data-tbi');
// })->name('data-tbi');
// Route::get('/otp-1', function () {
//     return view('otp-1');
// })->name('otp-1');
// Route::get('/otp-2', function () {
//     return view('otp-2');
// })->name('otp-2');

// Route::get('/reset', function () {
//     return view('reset');
// })->name('reset');

// Route::get('/get-state/{country}', [
//     UniversalController::class,
//     'getState',
// ])->name('state');

// // Route::get('/signup', function () {
// //     return view('signup');
// // })->name('signup');

// Route::get('/400', function () {
//     return view('400');
// })->name('400');
// Route::get('/403', function () {
//     return view('403');
// })->name('403');
// Route::get('/404', function () {
//     return view('404');
// })->name('404');
// Route::get('/500', function () {
//     return view('500');
// })->name('500');
// Route::get('/503', function () {
//     return view('503');
// })->name('503');
