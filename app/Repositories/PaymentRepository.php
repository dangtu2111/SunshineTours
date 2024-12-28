<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PaymentRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Tour;

class PaymentRepository extends BaseRepository implements PaymentRepositoryInterface
{
    protected $model;
    public function __construct(Tour $model){
        $this->model=$model;
    }
    
    
}
