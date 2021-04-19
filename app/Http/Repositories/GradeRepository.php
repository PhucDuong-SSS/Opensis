<?php


namespace App\Http\Repositories;


use App\Models\Grade;

class GradeRepository extends BaseRepository implements RepositoryInterface
{

    protected $gradeModel;
    public function __construct(Grade $grade)
    {
        $this->gradeModel = $grade;
    }

    function getAll()
    {
        return $this->gradeModel->all();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
