<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_status extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_status';
	protected $primaryKey = 'code';
	
	public static function GetBycode($code)
        {
            return SELF::where('code', '=', $code);
        }
}

?>