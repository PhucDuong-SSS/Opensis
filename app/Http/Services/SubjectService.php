<?php
namespace App\Http\Services;
use App\Http\Repositories\SubjectRepository;

class SubjectService implements ServiceInterface
{
    protected $subjectRepo;
    public function __construct(SubjectRepository $subjectRepo)
    {
        $this->subjectRepo =$subjectRepo;
    }
    function getAll()
    {
        return $this->subjectRepo->getAll();
    }

    function findById($id)
    {
        return $this->subjectRepo->findById($id);
    }


    function add($request, $obj = null)
    {
        $obj->fill($request->all());
        $this->subjectRepo->save($obj);
    }

    function delete($obj)
    {
        $this->subjectRepo->delete($obj);
    }

    function update($request, $obj = null)
    {
        $obj->name = $request->name;
        $obj->period = $request->period;
        $obj->coefficient = $request->coefficient;
        $obj->save();
    }
}
