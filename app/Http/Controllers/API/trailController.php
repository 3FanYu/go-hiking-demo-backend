<?php

namespace App\Http\Controllers\API;

use App\Models\trail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class trailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $trail = trail::with('location','location.countie')->where('id','>=',1);
        // 篩選欄位條件
        if (isset($request->filters)) {
            $filters = explode(',', $request->filters);
            $countieFilter='';
            foreach ($filters as $key => $filter) {
                //迴圈取得所有filter參數
                list($criteria, $value) = explode(':', $filter);
                switch ($criteria) {
                    case 'title':
                        $trail->where($criteria, 'like', "%$value%");
                        break;
                    case 'difficulty':
                    case 'evaluation':
                        $trail->where($criteria, '=', "$value");
                        break;
                    case 'altitude1':
                        $trail->where('altitude','>=',$value);
                        break;
                    case 'altitude2':
                        $trail->where('altitude','<=',$value);
                        break;
                    case 'countie':
                        $trail->whereHas('location.countie',function($q) use($value){
                            $q->where('name','like',"%$value%");
                        });
                        break;
                    case 'collection':
                        $trail->whereHas('collections',function($q) use($value){
                            $q->where('collection_id',$value);
                        });
                        break;
                    default:
                        break;
                }
            }
            $result=$trail->get();
        }
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = trail::with('location','location.countie')->where('id',$id)->get(); //查詢id動作
        // $result= $result->where('countie.name','like',"%桃%");
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
