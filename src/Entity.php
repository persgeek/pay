<?php

namespace PG\Pay;

class Entity
{
    /**
     * Documentation for this.
     */
    protected $id;

    /**
     * Documentation for this.
     */
    protected $track;

    /**
     * Documentation for this.
     */
    protected $amount;

    /**
     * Documentation for this.
     */
    protected $back;

    /**
     * Documentation for this.
     */
    public static function instance()
    {
        return new static();
    }

    /**
     * Documentation for this.
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Documentation for this.
     */
    public function setTrack($track)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Documentation for this.
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Documentation for this.
     */
    public function setBack($back)
    {
        $this->back = $back;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getBack()
    {
        return $this->back;
    }
}
