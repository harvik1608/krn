<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\FaqController;
    use App\Http\Controllers\ServiceController;
    use App\Http\Controllers\ProjectController;
    use App\Http\Controllers\DownloadController;
    use App\Http\Controllers\BlogController;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/', [AuthController::class, 'index'])->name('login');
        Route::get('login', [AuthController::class, 'index'])->name('admin.login');
        Route::post('check-login', [AuthController::class, 'checkLogin'])->name('admin.submit.login');
        
        Route::middleware('auth')->group(function () {
            Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
            Route::get('general-settings', [DashboardController::class, 'general_settings'])->name('admin.general-settings');
            Route::post('submit-general-settings', [DashboardController::class, 'submit_general_settings'])->name('admin.submit.general-settings');

            Route::resource('faqs', FaqController::class);
            Route::get('/load-faqs', [FaqController::class, 'load'])->name('admin.faq.load');

            Route::resource('services', ServiceController::class);
            Route::get('/load-services', [ServiceController::class, 'load'])->name('admin.service.load');

            Route::resource('projects', ProjectController::class);
            Route::get('/load-projects', [ProjectController::class, 'load'])->name('admin.project.load');

            Route::resource('downloads', DownloadController::class);
            Route::get('/load-downloads', [DownloadController::class, 'load'])->name('admin.download.load');

            Route::resource('blogs', BlogController::class);
            Route::get('/load-blogs', [BlogController::class, 'load'])->name('admin.blog.load');
            
            Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        });
    });
