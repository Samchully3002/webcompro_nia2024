<?php

namespace App\Rules;

use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;
use Illuminate\Contracts\Validation\Rule;

class RecaptchaV3Rule implements Rule
{
  public function passes($attribute, $value)
  {
    $score = RecaptchaV3::verify($value, '/contact-us/submit'); // is your action

    return $score > 0.7; // Adjust the threshold as needed (0.0 - 1.0)
  }

  public function message()
  {
    return 'The reCAPTCHA verification failed. Please try again.';
  }
}
