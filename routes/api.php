<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillController;
//Route::group is used to group a set of routes together under a common prefix or middleware.
//Route::group: This is the method used to create a group of routes.
//['prefix' => 'v1']: This is an array of options passed to the group method. In this case, prefix is used to set a common prefix for all routes within the group. The prefix is 'v1', which means that all routes within this group will start with /v1.
//function() { }: This is a closure that defines the set of routes that belong to the group. Inside this closure, you can define all of the routes that should be grouped together.
//any routes that are defined within the closure will have a prefix of /v1. This can be useful if you want to version your API or if you have a set of routes that share a common middleware.

Route::group(['prefix' => 'v1'], function() {

    Route::apiResource('skills', SkillController::class);//automatically creates the routes needed e.g PUT,POST,GET,DELETE which will be handled by skillcontroller
    

});
