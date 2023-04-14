<?php

namespace PG\Pay\Purchase;

class Request
{
    /**
     * Documentation for this.
     */
    protected $entity;

    /**
     * Documentation for this.
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Documentation for this.
     */
    public function address()
    {
        return require 'data/address.php';
    }

    /**
     * Documentation for this.
     */
    public function headers()
    {
        return require 'data/headers.php';
    }

    /**
     * Documentation for this.
     */
    public function params()
    {
        return require 'data/params.php';
    }

    /**
     * Documentation for this.
     */
    public function response()
    {
        return new Response(pay($this));
    }
}
