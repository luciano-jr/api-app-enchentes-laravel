<?php namespace App\Repositories;


use App\Repositories\Eloquent\Repository;

class EventRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'App\Event';
    }
}