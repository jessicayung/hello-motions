<!-- 
Is not currently being used. 
Will be relevant when we implement on-site motion adding form. 
-->

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motion extends Model
{
    protected $fillable = [

    	'motion',
    	'tournament',
    	'Date',
    	'Circuit',
    	'Tournament',
    	'CA_1',
    	'CA_2',
    	'CA_3',
    	'CA_4',
    	'CA_5',
    	'CA_6',
    	'CA_7',
    	'Round_Code',
    	'Round',
    	'Motion',
    	'Infoslide',
    	'Topic_Area_1',
    	'Topic_Area_2'

    ]
}
