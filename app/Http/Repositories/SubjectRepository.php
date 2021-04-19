<?php
namespace App\Http\Repositories;

use App\Models\Subject;

class SubjectRepository extends BaseRepository implements RepositoryInterface
{
    protected $subjectModel;
    public function __construct(Subject $subjectModel)
    {
        $this->subjectModel = $subjectModel;
    }
    function getAll()
    {
        return $this->subjectModel->all();
    }
    public function findById($id)
    {
        return  $this->subjectModel->findOrFail($id);

    }
    public function save($obj)
    {
        // TODO: Implement save() method.
    }
    public function delete($obj)
    {
        $obj->delete();
    }


}
