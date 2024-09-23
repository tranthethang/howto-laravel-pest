<?php

namespace App\Http\Controllers\Api\Auth;

use AllowDynamicProperties;
use Laravel\Passport\Http\Controllers\AccessTokenController as BaseAccessTokenController;

#[AllowDynamicProperties] class AccessTokenController extends BaseAccessTokenController {}
