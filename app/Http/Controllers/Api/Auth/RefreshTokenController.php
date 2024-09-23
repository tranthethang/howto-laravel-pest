<?php

namespace App\Http\Controllers\Api\Auth;

use AllowDynamicProperties;
use Laravel\Passport\Http\Controllers\TransientTokenController;

#[AllowDynamicProperties] class RefreshTokenController extends TransientTokenController {}
