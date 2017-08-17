<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cate extends Model
{
    //
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    protected $guarded = [];
    public $timestamps = false;

    public function tree($request){
        $cates = $this->where('cate_name','like','%'.$request['keywords'].'%')->OrderBy('cate_order')->get();
//        $cates = $this->where('cate_name','like','%'.$request['keywords'].'%')->paginate(5);
        $data = $this->getTree($cates,0);
        return $data;
    }
    public function trees(){
        $cates = $this->OrderBy('cate_order')->get();
//        $cates = $this->where('cate_name','like','%'.$request['keywords'].'%')->paginate(5);
        $data = $this->getTree($cates,0);
        return $data;
    }




    //格式化传入的分类数据,如果分类是二级类，在cate_name前添加空格
    public function getTree($cate,$pid=0){
//        存放排序的分类数据
        $arr = array();
//        先获取一级类，将一级类添加到一个空数组中，然后遍历当前一级类下的二级类，将二级类添加到空数组中
        foreach ($cate as $k=>$v) {
//            获取一级类
            if($v->cate_pid == 0){
                $cate[$k]['cate_names'] =  $cate[$k]['cate_name'];
                $arr[] =$cate[$k];
//                找到当前一级类下的所有二级类
                foreach ($cate as $m=>$n) {
//                    如果分类满足这个条件，说明当前类就是此一级类下的二级类
                    if($cate[$k]['cate_id'] == $cate[$m]['cate_pid']){
//                        给这个二级类添加一个字段cate_names
                        $cate[$m]['cate_names'] = '|------'.$cate[$m]['cate_name'];
//                        将格式化后的二级类赋添加给arr数组
                        $arr[] = $cate[$m];
                    }
                }
            }
        }

        return $arr;
    }


}
