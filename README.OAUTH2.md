OAuth2
---

### Prepare
+ passport
```shell
# Generates the encryption keys Passport needs in order to generate access tokens.
php artisan passport:keys

# Creating A Password Grant Client
php artisan passport:client --password
```

### Request access_token (login by email + password) 
> POST /oauth/token

> Request
```json
{
    "grant_type": "password",
    "client_id": "CLIENT_ID",
    "client_secret": "CLIENT_SECRET",
    "username": "EMAIL",
    "password": "PASSWORD",
    "scope": ""
}
```

> Response
```json
{
    "token_type": "Bearer",
    "expires_in": 31536000,
    "access_token": "",
    "refresh_token": ""
}
```

### Refresh access_token (by refresh_token)
> POST /oauth/token

> Request
```json
{
    "grant_type": "refresh_token",
    "client_id": "CLIENT_ID",
    "client_secret": "CLIENT_SECRET",
    "refresh_token": "REFRESH_TOKEN",
    "scope": ""
}
```

> Response
```json
{
    "token_type": "Bearer",
    "expires_in": 31536000,
    "access_token": "",
    "refresh_token": ""
}
```
