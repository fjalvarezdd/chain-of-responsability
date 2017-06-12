<?php

namespace Chain;

/**
 * Class Locks
 */
class Locks extends HomeChecker
{
    /**
     * @param HomeStatus $home
     * @return mixed|void
     * @throws Exception
     */
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($home);
    }
}