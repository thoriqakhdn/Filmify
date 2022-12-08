<?php

namespace App\Policies;

use App\Models\Movies;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MoviesPolicy
{
    use HandlesAuthorization;
}
