<?php


namespace App\Http\Services;

use App\Http\Repositories\StudentRepository;

class StudentService implements ServiceInterface
{
    protected $studentRepo;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepo = $studentRepository;
    }

    function getAll()
    {
        return $this->studentRepo->getAll();
    }

    function findById($id)
    {
        return $this->studentRepo->findById($id);
    }


    function add($request, $obj = null)
    {
        $obj->fill($request->all());
        $this->studentRepo->save($obj);
    }

    function delete($obj)
    {
        $this->studentRepo->delete($obj);
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }
}
