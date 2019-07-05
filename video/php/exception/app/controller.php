<?php
include 'bootstrap.php';

use App\Servers\Validate;
use App\Servers\View;

Validate::make();
View::make('success');
