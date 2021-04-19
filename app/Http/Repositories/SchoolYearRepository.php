<?php


namespace App\Http\Repositories;


use App\Models\SchoolYear;

class SchoolYearRepository extends BaseRepository implements RepositoryInterface
{
    protected $schoolYearModel;

    public function __construct(SchoolYear $schoolYearModel)
    {
        $this->schoolYearModel = $schoolYearModel;
    }

    function getAll()
    {
        return $this->schoolYearModel->all();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
