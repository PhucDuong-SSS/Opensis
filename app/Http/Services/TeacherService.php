<?php


namespace App\Http\Services;

use App\Http\Repositories\TeacherRepository;

class TeacherService implements ServiceInterface
{
    protected $teacherRepo;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepo = $teacherRepository;
    }

    function getAll()
    {
        return $this->teacherRepo->getAll();
    }

    function findById($id)
    {
        return $this->teacherRepo->findById($id);
    }


    function add($request, $obj = null)
    {
        $obj->fill($request->all());
        $this->teacherRepo->save($obj);
    }

    function delete($obj)
    {
        $this->teacherRepo->delete($obj);
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }
}
