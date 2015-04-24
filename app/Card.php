<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model {

    protected $primaryKey = 'cardNumber';
    protected $foreignKey = 'personID';

    protected $fillable = [
        'cardNumber',
        'person_id',
        'firstName',
        'lastName',
        'firstNameJP',
        'lastNameJP',
        'type',
        'cardName',
        'cardNameKanji',
        'rarity',
        'setName',
        'eventName',
        'fileName',
    ];

    public function person() {
        return $this->belongsTo('Person');
    }

}
