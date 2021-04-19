<?php


namespace App\Http\Services;


use App\Http\Repositories\SchoolYearRepository;

class SchoolYearService implements ServiceInterface
{
    protected $schoolYearRepo;

    public function __construct(SchoolYearRepository $schoolYearRepo)
    {
        $this->schoolYearRepo = $schoolYearRepo;
    }

    function getAll()
    {
        return $this->schoolYearRepo->getAll();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }
}
