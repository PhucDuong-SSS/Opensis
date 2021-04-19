<?php


namespace App\Http\Services;


use App\Http\Repositories\GroupRepository;

class GroupService implements ServiceInterface
{
    protected $groupRepo;

    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepo = $groupRepository;
    }

    function getAll()
    {
        return $this->groupRepo->getAll();
    }

    function findById($id)
    {
        return $this->groupRepo->findById($id);
    }


    function add($request, $obj = null)
    {
        $obj->fill($request->all());
        $this->groupRepo->save($obj);
    }

    function delete($obj)
    {
        $this->groupRepo->delete($obj);
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }
}
