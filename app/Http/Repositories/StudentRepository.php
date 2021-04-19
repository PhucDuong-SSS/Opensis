<?php


namespace App\Http\Repositories;


use App\Models\Student;

class StudentRepository extends BaseRepository implements RepositoryInterface
{
    protected $studentModel;

    public function __construct(Student $student)
    {
        $this->studentModel = $student;
    }

    function getAll()
    {
        return $this->studentModel->all();
    }

    function findById($id)
    {
        return  $this->studentModel->findOrFail($id);
    }


}
