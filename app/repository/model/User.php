<?php
namespace Repository\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Capsule\Manager as DB;
use Repository\Contract\UserContract;

class User extends Model implements UserContract {
    use SoftDeletes;
    protected $table = 'user';

    private function getQueryBuilder ($filter) {
        $query = DB::table($this->table);
        foreach ($filter as $key => $value) {
            $query->where($key, '=', $value);
        }
        $query->whereNull('deleted_at');
        return $query;
    }

    private function modifySelectQuery ($query) {
        $query->select(
            'id',
            'email',
            'created_at',
            'updated_at',
            'deleted_at'
        );
        return $query;
    }

    public function find($filter = []) {
        $query = $this->getQueryBuilder($filter);
        $query = $this->modifySelectQuery($query);
        return $query->get();
    }

    public function findOne($filter = []) {
        $query = $this->getQueryBuilder($filter);
        $query = $this->modifySelectQuery($query);
        return $query->first();
    }

    public function create($data) {
        $newProduct = new Product;
        foreach ($data as $key => $value) {
            $newProduct->{$key} = $value;
        }
        return $newProduct->save();
    }

    public function modify($filter, $data = []) {
        $query = $this->getQueryBuilder($filter);
        return $query->update($data);
    }
}