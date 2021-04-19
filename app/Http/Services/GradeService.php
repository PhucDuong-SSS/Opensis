<?php


namespace App\Http\Services;


use App\Http\Repositories\GradeRepository;

class GradeService implements ServiceInterface
{
    protected $gradeRepo;

    public function __construct(GradeRepository $gradeRepo)
    {
        $this->gradeRepo = $gradeRepo;
    }

    function getAll()
    {
        return $this->gradeRepo->getAll();
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
