<?php

namespace App\Http\Controllers\Api\Auth;

use AllowDynamicProperties;
use App\Http\Resources\TokenResource;
use Laravel\Passport\Http\Controllers\AccessTokenController as BaseAccessTokenController;
use Psr\Http\Message\ServerRequestInterface;

#[AllowDynamicProperties] class AccessTokenController extends BaseAccessTokenController
{
    public function issueToken(ServerRequestInterface $request)
    {
        $data = parent::issueToken($request);

        return new TokenResource(json_decode($data->getContent(), true));
    }
}
