<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class studentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $stat ="Student";
        return new User([
            'name'     => $row[0],
            'email'    => $row[1], 
            'password' => bcrypt($row[2]),
            'location'  => $row[3],
            'about_me'  => $stat, 
          ]);
    }
}