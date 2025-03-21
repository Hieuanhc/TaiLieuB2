<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

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

// Route::get('dashboard', [CrudUserController::class, 'dashboard']);

// Route::get('login', [CrudUserController::class, 'login'])->name('login');
// Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

// Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
// Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

// Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

// Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

// Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
// Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

// Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

// Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route cho các trang trong EXE/EXE1
Route::prefix('exe/exe1')->group(function () {
    Route::get('/', function () {
        return view('EXE.EXE1.index');
    })->name('exe.exe1.index');

    Route::get('/login', function () {
        return view('EXE.EXE1.login');
    })->name('exe.exe1.login');

    Route::post('/login', function () {
        // Logic xử lý đăng nhập (sẽ thêm sau)
        return redirect()->route('exe.exe1.list');
    });

    Route::get('/register', function () {
        return view('EXE.EXE1.register');
    })->name('exe.exe1.register');

    Route::post('/register', function () {
        // Logic xử lý đăng ký (sẽ thêm sau)
        return redirect()->route('exe.exe1.login');
    });

    Route::get('/list', function () {
        // Dữ liệu giả lập cho danh sách user
        $users = [
            ['username' => 'UPVH', 'email' => 'ATJW@gmail.com'],
            ['username' => 'IFUK', 'email' => 'KULB@gmail.com'],
            ['username' => 'DZZQ', 'email' => 'ERNB@gmail.com'],
            // Thêm các user khác từ hình ảnh
        ];
        return view('EXE.EXE1.list', compact('users'));
    })->name('exe.exe1.list');

    Route::get('/update', function () {
        return view('EXE.EXE1.update');
    })->name('exe.exe1.update');

    Route::post('/update', function () {
        // Logic xử lý cập nhật (sẽ thêm sau)
        return redirect()->route('exe.exe1.list');
    });

    Route::get('/view', function () {
        $user = ['username' => 'test1', 'email' => 'test1@gmail.com'];
        return view('EXE.EXE1.view', compact('user'));
    })->name('exe.exe1.view');

    Route::get('/logout', function () {
        // Logic xử lý đăng xuất (sẽ thêm sau)
        return redirect()->route('exe.exe1.index');
    })->name('exe.exe1.logout');
});

Route::get('/', function () {
    return redirect()->route('exe.exe1.index');
});
// Route cho EXE2
// Route::prefix('exe/exe2')->group(function () {
//     // Phần a: Truy vấn người dùng
//     Route::get('/query-a1', [Exe2Controller::class, 'queryA1'])->name('exe.exe2.query_a1');
//     Route::get('/query-a2', [Exe2Controller::class, 'queryA2'])->name('exe.exe2.query_a2');
//     Route::get('/query-a3', [Exe2Controller::class, 'queryA3'])->name('exe.exe2.query_a3');
//     Route::get('/query-a4', [Exe2Controller::class, 'queryA4'])->name('exe.exe2.query_a4');
//     Route::get('/query-a5', [Exe2Controller::class, 'queryA5'])->name('exe.exe2.query_a5');
//     Route::get('/query-a6', [Exe2Controller::class, 'queryA6'])->name('exe.exe2.query_a6');
//     Route::get('/query-a7', [Exe2Controller::class, 'queryA7'])->name('exe.exe2.query_a7');
//     Route::get('/query-a8', [Exe2Controller::class, 'queryA8'])->name('exe.exe2.query_a8');
//     Route::get('/query-a9', [Exe2Controller::class, 'queryA9'])->name('exe.exe2.query_a9');
//     Route::get('/query-a10', [Exe2Controller::class, 'queryA10'])->name('exe.exe2.query_a10');

//     // Phần b: Truy vấn đơn hàng
//     Route::get('/query-b1', [Exe2Controller::class, 'queryB1'])->name('exe.exe2.query_b1');
//     Route::get('/query-b2', [Exe2Controller::class, 'queryB2'])->name('exe.exe2.query_b2');
//     Route::get('/query-b3', [Exe2Controller::class, 'queryB3'])->name('exe.exe2.query_b3');
//     Route::get('/query-b4', [Exe2Controller::class, 'queryB4'])->name('exe.exe2.query_b4');
//     Route::get('/query-b5', [Exe2Controller::class, 'queryB5'])->name('exe.exe2.query_b5');
//     Route::get('/query-b6', [Exe2Controller::class, 'queryB6'])->name('exe.exe2.query_b6');
//     Route::get('/query-b7', [Exe2Controller::class, 'queryB7'])->name('exe.exe2.query_b7');
//     Route::get('/query-b8', [Exe2Controller::class, 'queryB8'])->name('exe.exe2.query_b8');
//     Route::get('/query-b9', [Exe2Controller::class, 'queryB9'])->name('exe.exe2.query_b9');
//     Route::get('/query-b10', [Exe2Controller::class, 'queryB10'])->name('exe.exe2.query_b10');
// });

// Route::get('/', function () {
//     return redirect()->route('exe.exe1.index');
// });