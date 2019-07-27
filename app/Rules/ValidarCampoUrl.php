<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
//use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\Menu;

class ValidarCampoUrl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($value<>'#'){
            $menu = Menu::where($attribute,$value)->get();
            return $menu->isEmpty(); //Si está vacío, devuelve TRUE
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El campo URL está repetido.';
    }
}
