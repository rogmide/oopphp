<?php

namespace Basic\Profile;

require __DIR__ . '/../vendor/autoload.php';
require '../app/Enums/Enums.php';

use App\Enums\Status;
use InvalidArgumentException;



class User
{

    private $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    public function setStatus($status)
    {
        if (!isset(Status::ALL_STATUS[$status])) {
            throw new \InvalidArgumentException('Invalid Status');
        }
        $this->status = $status;

        return $this;
    }
}
