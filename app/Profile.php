<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;
class Profile extends Model 
{
	protected $fillable = ['birthdate', 'prof_pic', 'address', 'user_id'];
	protected $append = ['age', 'birthday'];
	public $timestamps = false;
	
	
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getAgeAttribute(){
    	$date=Carbon::now();
    	return $date->diffInYears($this->attributes['birthdate']);
    }
    public function getBirthDateAttribute($value){
    	return date('M-d, Y', strtotime($value));
    }
    

}