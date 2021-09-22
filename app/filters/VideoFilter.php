<?php
namespace App\filters;

class VideoFilter extends QueryFilter{
    public function class_id($id){
        return $this->builder->where('class_id', $id);
    }

    public function category_id($id){
        return $this->builder->where('cat_id', $id);
    }

    public function search($request)
    {
        return $this->builder->where('title', 'LIKE', '%'.$request.'%');
    }
}
