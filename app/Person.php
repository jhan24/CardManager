<?php namespace App;
use App\Card;
use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    protected $fillable = [
        'firstName',
        'lastName',
        'firstNameJP',
        'lastNameJP',
        'type',
        'authority',
        'authorityJP',
        'year',
        'age',
        'birthday',
        'horoscope',
        'horoscopeJP',
        'bloodType',
        'height',
        'weight',
        'threeSizes',
        'favoriteSubject',
        'favoriteSubjectJP',
        'extracurricular',
        'extracurricularJP',
        'hobbies',
        'hobbiesJP',
        'favoriteFood',
        'favoriteFoodJP',
        'hatedFood',
        'hatedFoodJP',
        'cv',
        'cvJP',
    ];

    public function cards() {
        return $this->hasMany('App\Card');
    }

}
