<?php

use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Eloquent
{
    use EntrustUserTrait; // add this trait to your user model

    
}