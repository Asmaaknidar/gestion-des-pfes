<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\TestController;



Route::get('/', function () {
    return view('index.home');
});
Route::get('/dashboard/dash', function () {
    return view('dashboard.dash');
})->name('dashboard.dash');
Route::get('/dashboard', function () {
    return view('dashboard.navbar'); //Remplacez 'dashboard.index' par le nom de votre vue de tableau de bord
})->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/student/login', [StudentController::class, 'login'])->name('student.login');
Route::post('/professor/login', [ProfessorController::class, 'login'])->name('professor.login');
Route::get('/forgottenpass', function () {
    return view('auth.forgottenpass');
})->name('forgottenpass');
Route::get('/dashboard/profil', [AdminController::class, 'showprofil'])->name('profil');
Route::get('/dashboard/professors', [AdminController::class, 'showprofessors'])->name('professors');
Route::delete('/dashboard/professors/{professor}',[AdminController::class,'destroyProfessor'] )->name('professors.destroy');
Route::get('/dashboard/students', [AdminController::class, 'showstudents'])->name('students');
Route::delete('/dashboard/students/{etudiant}', [AdminController::class, 'destroyStudent'])->name('students.destroy');
Route::get('/dashboard/groupes', [AdminController::class, 'showgroupes'])->name('groupes');
Route::get('/dashboard/professors/addprofessor', [AdminController::class, 'createprofessors'])->name('professors.create');
Route::post('/dashboard/professors', [AdminController::class, 'storeprofessors'])->name('professors.store');
Route::get('/dashboard/students/addstudent', [AdminController::class, 'createstudents'])->name('students.create');
Route::post('/dashboard/students', [AdminController::class, 'storestudents'])->name('students.store');
Route::delete('/dashboard/groupes/{groupe}',[AdminController::class,'destroygroupe'] )->name('groupes.destroy');
Route::get('/dashboard/groupes/addgroupe', [AdminController::class, 'creategroupes'])->name('groupes.create');
Route::post('/dashboard/groupes', [AdminController::class, 'storegroupes'])->name('groupes.store');
Route::get('/student/dashstudent', function () {
    return view('student.dashstudent');
})->name('student.dashstudent');
Route::get('/student/profilstudent', [StudentController::class, 'showprofilstudent'])->name('student.profil');
//professor
Route::get('/professor/dashprofessor', function () {
    return view('professor.dashprofessor');
})->name('professor.dashprofessor');
Route::get('/professor/profilprofessor', [ProfessorController::class, 'showprofilprofessor'])->name('professor.profil');
Route::get('/task', [ProfessorController::class, 'indextask'])->name('tasks');
Route::post('/add-task', [ProfessorController::class, 'addTask'])->name('add.task');
Route::get('/download-task-document/{taskId}', [ProfessorController::class, 'downloadTaskDocument'])->name('downloadTaskDocument');
Route::get('/professor/project', [ProfessorController::class, 'showProjectForm'])->name('project');

// Route pour traiter l'ajout de projet
Route::post('/professor/project/add', [ProfessorController::class, 'addProject'])->name('project.add');
Route::get('/professor/groups', [ProfessorController::class, 'listgroup'])->name('professor.groups');
//group
Route::get('/group/dashgroup', function () {
    return view('group.dashgroup');
})->name('group.dashgroup');
Route::get('/group/profilgr', [GroupController::class, 'showprofilgroup'])->name('group.profil');
