<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Attribute extends Model
{
    protected $guarded = [];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    const STATUS_LIST = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    final public function getAllAttributes()
    {
        return self::query()->get();
    }

    private function prepareData(Request $request)
    {
        return [
          'name'  => $request->input('name'),
          'sort_order' => $request->input('sort_order'),
          'status' => $request->input('status'),
        ];
    }

    final public function storeAttribute(Request $request)
    {
        return self::query()->create($this->prepareData($request));
    }

    final public function updateAttribute(Request $request, Attribute $attribute)
    {
        return $attribute->update($this->prepareData($request));
    }

    final public function deleteAttribute(Attribute $attribute)
    {
        return $attribute->delete();
    }



}
