<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_user_grp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_user_grp';
	protected $primaryKey = 'id_grp';
	
	public static function GetByidgrp($id_grp)
        {
            return SELF::where('id_grp', '=', $id_grp);
        }
}

?>