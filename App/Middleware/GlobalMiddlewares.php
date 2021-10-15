<?php

namespace App\Middleware;


class GlobalMiddlewares
{
   
    protected $globalMiddleware = [
        \App\Middleware\Global\GlobalBlockFirefox::class
    ];


	public function getGlobalMiddlewares()

	{

		return $this->globalMiddleware ;

	}
}

