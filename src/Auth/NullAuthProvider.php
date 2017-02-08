<?php

namespace RealPage\OData\Auth;

use RealPage\OData\Interfaces\AuthInterface;
use Illuminate\Database\Eloquent\Model;
use RealPage\OData\Enums\ActionVerb;

class NullAuthProvider implements AuthInterface
{
    public function canAuth(ActionVerb $verb, $modelname, Model $model = null)
    {
        return true;
    }
}
