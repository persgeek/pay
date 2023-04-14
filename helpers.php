<?php

use PG\Request\Request;

/**
 * Documentation for this.
 */
function pay($request)
{
    return Request::instance()
        ->setAddress($request->address())
        ->setHeaders($request->headers())
        ->setParams($request->params())
        ->getResponse()
        ->asArray();
}
