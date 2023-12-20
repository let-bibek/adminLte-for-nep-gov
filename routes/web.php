<?php

use Illuminate\Support\Facades\Route;


// get: /dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name("dashboard");

Route::redirect("/", "dashboard");

// get: /documents
Route::get('documents', function () {
    return view("pages/documents");
})->name("documents");

// get: /organization objectives
Route::get("/organization-objectives", function () {
    return view("pages.organizationObjectives");
})->name("OrganizationObjectives");

// get: /feet-types
Route::get("/fee-types", function () {
    return view("pages.feeTypes");
})->name("feeTypes");

// get: /administration
Route::get("/administration", function () {
    return view("pages.administration");
})->name("administration");

// get: /adminUser
Route::get("/adminUser", function () {
    return view("pages.adminUser");
})->name("adminUser");

// get: /userManagement
Route::get("/userManagement", function () {
    return view("pages.userManagement");
})->name("UserManagement");

// get: /roleManagement
Route::get("/roleManagement", function () {
    return view("pages.roleManagement");
})->name("roleManagement");

// get: /reportFormat
Route::get("/reportFormat", function () {
    return view("pages.reportFormat");
})->name("reportFormat");

// get: /upabhoktaSamiti
Route::get("/upabhoktaSamiti", function () {
    return view("pages.upabhoktaSamiti");
})->name("upabhoktaSamiti");

// get: /organizations
Route::get("/organizations", function () {
    return view("pages.organizations");
})->name("organizations");


