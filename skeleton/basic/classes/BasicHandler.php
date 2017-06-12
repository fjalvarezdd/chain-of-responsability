<?php

abstract class BasicHandler
{
    /**
     * @var Handler
     */
    private $successor = null;

    /**
     * Sets a successor handler.
     *
     * @param Handler $handler
     */
    public function setSuccessor(Handler $handler)
    {
        $this->successor = $handler;
    }

    /**
     * Handles the request and/or redirect the request
     * to the successor.
     *
     * @param mixed $request
     *
     * @return mixed
     */
    abstract public function handle($request);
}