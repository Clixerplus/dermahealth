<?php

function active($path) {    
    return Route::is($path) ? 'active' : '';
}