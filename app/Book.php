<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //--------------------------------------------------------------------------------------------------------------------------------------------
    //  MASS ASSIGNMENT
    //
    //  GUARDED EXAMPLE
    //
    //  *** WARNING ***     This turns off the Mass Assignment protection Laravel ships with
    //
    //  This allows you to mass assign data in BooksController store() method
    //  An empty array means nothing is guarded
    //
    protected $guarded = [];
    //--------------------------------------------------------------------------------------------------------------------------------------------


    //--------------------------------------------------------------------------------------------------------------------------------------------
    //  RETURN PATH FOR THIS MODEL
    //
    public function path()
    {
        return '/books/' . $this->id;
    }
    //--------------------------------------------------------------------------------------------------------------------------------------------

}
