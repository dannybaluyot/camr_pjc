<?php
namespace App\Models;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Illuminate\Database\Eloquent\Model;

use Session;

class MeterModel extends Model
{

	use LogsActivity;
	
	public function tapActivity(Activity $activity, string $eventName)
	{
    $activity->causer_id = Session::get('loginID');
	}
	
	protected $table = 'meter_details';

	protected $fillable = [
		'site_idx',
		'rtu_idx',
		'location_idx',
		'config_idx',
		'site_code',
        'meter_name',
		'meter_name_addressable',
		'meter_default_name',
		'meter_type',
		'meter_brand',
		'meter_role',
		'usage_type',
		'meter_remarks',
        'customer_name',
		'meter_multiplier',
		'meter_status',
		'created_at',
		'created_by_user_idx',
		'updated_at',
		'modified_by_user_idx'
    ];
	
    protected $primaryKey = 'meter_id';
	
	protected static $logName = 'Meter Details';
	
	protected static $logOnlyDirty = true;
	
	protected static $logAttributes = [
		'site_idx',
		'rtu_idx',
		'location_idx',
		'config_idx',
		'site_code',
        'meter_name',
		'meter_name_addressable',
		'meter_default_name',
		'meter_type',
		'meter_brand',
		'meter_role',
		'usage_type',
		'meter_remarks',
        'customer_name',
		'meter_multiplier',
		'meter_status',
		'created_at',
		'created_by_user_idx',
		'updated_at',
		'modified_by_user_idx'
    ];
}
