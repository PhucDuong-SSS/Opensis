<?php


namespace App\Http\Repositories;

use App\Models\Teacher;

class TeacherRepository extends BaseRepository implements RepositoryInterface
{
    protected $teacherModel;

    public function __construct(Teacher $teacher)
    {
        $this->teacherModel = $teacher;
    }

    function getAll()
    {
        return $this->teacherModel->all();
    }

    function findById($id)
    {
        return  $this->teacherModel->findOrFail($id);
    }
}
