<?php

namespace App\Http\Controllers\Api;

use AllowDynamicProperties;
use Laravel\Passport\Http\Controllers\TransientTokenController;

#[AllowDynamicProperties] class RefreshController extends TransientTokenController
{
}
