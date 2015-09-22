<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_user';
	protected $primaryKey = 'usrid';
	
	public static function GetByUserID($userid)
        {
            return SELF::where('usrid', '=', $userid);
        }
}

?>