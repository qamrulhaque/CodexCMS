<?php

namespace CodexCafe\CodexCMS\Facades;

use Illuminate\Support\Facades\Facade;

class CodexCMS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'codexcms';
    }
}
