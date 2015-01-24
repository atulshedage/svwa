<?php
namespace dvwa\Forms;

use Laracasts\Validation\FormValidator;
class SigninForm extends FormValidator {

    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

}