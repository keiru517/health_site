<?php

namespace App\Enums;

enum UserRoleEnum : string
{
    case ADMIN           = 'Application Admin';
    case EXECUTIVE       = 'Company Executive';
    case SALES_REP       = 'Sales Rep';
    case CLUB_MEMBER     = 'Club Member';
}
