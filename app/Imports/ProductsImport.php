<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $type = request()->type;
        
        $product = $type->products()->updateOrCreate([
            'text' => $row['text'],
            'slug' => $row['slug'],
            'description' => $row['description']
        ]);
        
        return $product;

    }

}
