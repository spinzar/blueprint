<?php

namespace Spinzar\Blueprint\Annotation;

/**
 * @Annotation
 */
class Transaction
{
    /**
     * @array<Request|Response>
     */
    public $value;
}
