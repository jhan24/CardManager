<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model {

    protected $primaryKey = 'cardNumber';

    protected $fillable = [
        'cardNumber',
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

}
