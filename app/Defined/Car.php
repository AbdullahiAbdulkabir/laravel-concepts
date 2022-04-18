<?php
declare(strict_types=1);

namespace App\Defined;


/**
 * Class Car
 * @package App\Defined
 * @author Abdullahi Abdulkabir <abdullahiabdulkabir1@gmail.com>
 */
class Car
{
    protected $tire;
    protected $engine;
    public function __construct(Tire $tire, Engine $engine) {
        $this->tire = $tire;
        $this->engine = $engine;
    }

}
