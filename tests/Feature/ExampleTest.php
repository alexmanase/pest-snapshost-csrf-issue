<?php

use function Pest\Laravel\get;

it('returns a successful response', function () {
    $response = get('/');

    expect($response)->toMatchSnapshot();
});