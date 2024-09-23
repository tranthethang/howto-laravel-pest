<?php

use function PHPUnit\Framework\assertTrue;

test('basic test', function () {
    $response = $this->post(route('users.register'));
    assertTrue(true);
});
