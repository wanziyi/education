<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
<<<<<<< HEAD
        "*"
=======
<<<<<<< HEAD
        '*'
=======
        "*"
>>>>>>> 36670485fb00756dc12624625ea3989ea967d45b
>>>>>>> 850756bb1cd59f10134f82b6f74ed4c129bf7f27
    ];
}
