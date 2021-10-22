<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigoProducto' => 'required|string',
            'nombreProducto' => 'required|string|max:200|min:3',
            'categoria' => 'required|string|max:20|min:3',
            'sucursal' => 'required|int|max:3|min:1',
            'descripcion' => 'required|string|max:200|min:3',
            'cantidad' => 'required|int',
            'precioVenta' => 'required|string|max:20|min:3'
        ];
    }
}
