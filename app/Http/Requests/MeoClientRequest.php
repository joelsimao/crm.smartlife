<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeoClientRequest extends FormRequest
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
            'meo_client.name'           => 'required',
            'meo_client.nif'            => 'required|max:9|unique:meo_clients,nif',
            'meo_client.address'        => 'nullable',
            'meo_client.zipcode'        => 'nullable',
            'meo_client.city'           => 'required',
            'meo_client.phone'          => 'nullable',
            'meo_client.mobile_phone'   => 'nullable',
            'meo_client.manager_name'   => 'required',
            'names.*'                     => 'required',
            'descriptions.*'              => 'required',
            'monthly_payments.*'          => 'required',
            'offers'                    => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'meo_client.name.required' => 'Inserir o nome completo do cliente',
            'meo_client.nif.required' => 'Inserir o NIF do cliente',
            'meo_client.nif.max' => 'O NIF só pode conter 9 dígitos',
            'meo_client.nif.unique' => 'Este NIF já existe na base de dados',
            'meo_client.city.required' => 'Inserir a localidade',
            'meo_client.manager_name.required' => 'Inserir o nome do gestor',
            'names.*.required' => 'Verificar se os serviços estão preenchidos',
            'descriptions.*.required' => 'Verificar as descrições de serviços',
            'monthly_payments.*.required' => 'Verificar as mensalidades',
        ];
    }
}
