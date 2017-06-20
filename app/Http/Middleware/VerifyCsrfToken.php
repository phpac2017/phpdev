<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
		 'doctor',		
		 'doctor/*',
		 'patient',
		 'patient/*',
		 'patientprescription',
		 'patientprescription/*',
		 'patientbloodtest',
		 'patientbloodtest/*',
		 'patientdoctorconversation',
		 'patientdoctorconversation/*',
		 'patientmedicalrecord',
		 'patientmedicalrecord/*',
		 'doctortimeslot',
		 'doctortimeslot/*'
    ];
}
