<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Illuminate\Http\Request;

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

// Direct Login
Route::get('/', function () {
    return redirect(route('user.home'));
});

// Route::middleware(['auth'])->group(function () {

//     // Users
//     Route::prefix('users')->name('users.')->group(function () {
//         Route::get('/', [UserController::class, 'index'])->name('index');
//         Route::get('get-data', [UserController::class, 'getUsers'])->name('get-data');
//         Route::get('modal-add', [UserController::class, 'getModalAdd'])->name('modal-add');
//         Route::post('store', [UserController::class, 'store'])->name('store');
//         Route::get('modal-edit/{userId}', [UserController::class, 'getModalEdit'])->name('modal-edit');
//         Route::put('update/{userId}', [UserController::class, 'update'])->name('update');
//         Route::get('modal-delete/{userId}', [UserController::class, 'getModalDelete'])->name('modal-delete');
//         Route::delete('delete/{userId}', [UserController::class, 'destroy'])->name('destroy');
//     });

//     // Roles
//     Route::prefix('roles')->name('roles.')->group(function () {
//         Route::get('/', [RoleController::class, 'index'])->name('index');
//         Route::get('get-data', [RoleController::class, 'getRoles'])->name('get-data');
//         Route::get('modal-add', [RoleController::class, 'getModalAdd'])->name('modal-add');
//         Route::post('store', [RoleController::class, 'store'])->name('store');
//         Route::get('modal-edit/{roleId}', [RoleController::class, 'getModalEdit'])->name('modal-edit');
//         Route::put('update/{roleId}', [RoleController::class, 'update'])->name('update');
//         Route::get('modal-delete/{roleId}', [RoleController::class, 'getModalDelete'])->name('modal-delete');
//         Route::delete('delete/{roleId}', [RoleController::class, 'destroy'])->name('destroy');
//         Route::post('update-permission', [RoleController::class, 'updatePermissionByID'])->name('update.permission');
//         Route::post('update-all-permissions', [RoleController::class, 'updateAllPermissions'])->name('update.permission');
//     });
// });






// ================================================================================================================================
// User Route
// ================================================================================================================================

Route::name('user.')->middleware(['web'])->group(function () {
    Route::get('/', function() {
        return view('user.home.index');
    })->name('home');

    Route::get('/about-us', function() {
        return view('user.about-us.index');
    })->name('about-us');

    Route::get('/how-it-works', function() {
        return view('user.how-it-works.index');
    })->name('how-it-works');

    Route::get('/team', function() {
        return view('user.team.index');
    })->name('team');

    Route::get('/awards', function() {
        return view('user.awards.index');
    })->name('awards');

    Route::get('/faqs', function() {
        return view('user.faqs.index');
    })->name('faqs');

    Route::get('/gallery', function() {
        return view('user.gallery.index');
    })->name('gallery');

    Route::get('/careers', function() {
        return view('user.careers.index');
    })->name('careers');

    Route::prefix('service')->group(function() {
        Route::get('/', function() {
            return view('user.service.index');
        })->name('service');

        Route::get('/heavy-equipment-and-industrial-solutions', function() {
            return view('user.service.heavy-equipment-and-industrial-solutions', ['service' => 'Heavy Equipment & Industrial Solutions']);
        })->name('service.heavy-equipment-and-industrial-solutions');

        Route::get('/advanced-energy-and-electrical-systems', function() {
            return view('user.service.advanced-energy-and-electrical-systems', ['service' => 'Advanced Energy & Electrical Systems']);
        })->name('service.advanced-energy-and-electrical-systems');

        Route::get('/smart-mobility-and-automotive-parts', function() {
            return view('user.service.smart-mobility-and-automotive-parts', ['service' => 'Smart Mobility & Automotive Parts']);
        })->name('service.smart-mobility-and-automotive-parts');

        Route::get('/instrumentation-and-measurement-solutions', function() {
            return view('user.service.instrumentation-and-measurement-solutions', ['service' => 'Instrumentation & Measurement Solutions']);
        })->name('service.instrumentation-and-measurement-solutions');

        Route::get('/sustainable-building-material-modular-and-infrastructure', function() {
            return view('user.service.sustainable-building-material-modular-and-infrastructure', ['service' => 'Sustainable Building Material, Modular & Infrastructure']);
        })->name('service.sustainable-building-material-modular-and-infrastructure');

        Route::get('/precision-digital-and-it-solutions', function() {
            return view('user.service.precision-digital-and-it-solutions', ['service' => 'Precision Digital & IT Solutions']);
        })->name('service.precision-digital-and-it-solutions');
    });

    Route::get('/projects', function() {
        return view('user.projects.index');
    })->name('projects');

    Route::get('/projects/detail', function() {
        return view('user.projects.detail');
    })->name('projects.detail');

    Route::get('/news', function() {
        return view('user.news.index');
    })->name('news');

    Route::get('/news/detail/', function() {
        return view('user.news.detail');
    })->name('news.detail');

    Route::get('/contact', function() {
        return view('user.contact.index');
    })->name('contact');

    Route::get('/request-quote', function() {
        return view('user.request-quote.index');
    })->name('request-quote');
});

Route::get('/send-email',function (Request $request) {
    $data = [
        'name' => $request->input('contact-name'),
        'email' => $request->input('contact-email'),
        'phone' => $request->input('contact-phone'),
        'address' => $request->input('contact-address'),
        'company' => $request->input('company-name'),
        'project_type' => $request->input('project-type'),
        'modular_units' => $request->input('modular-units'),
        'city' => $request->input('city'),
        'area' => $request->input('contact-Area'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
        'preferred_contact' => $request->input('preferred-contact'),
    ];

    Mail::to('inquiry@bimabergawa.com')->send(new SendEmail($data));

    return response()->json(['success' => true]);
});
