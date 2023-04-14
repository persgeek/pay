<?php

namespace PG\Pay\Purchase;

class Response
{
    /**
     * Documentation for this.
     */
    protected $data;

    /**
     * Documentation for this.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Documentation for this.
     */
    public function fine()
    {
        return array_has($this->data, 'id');
    }

    /**
     * Documentation for this.
     */
    public function track()
    {
        return array_get($this->data, 'id');
    }

    /**
     * Documentation for this.
     */
    public function link()
    {
        return array_get($this->data, 'link');
    }
}
