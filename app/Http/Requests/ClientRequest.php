<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'client.visit_date' => 'required',
            'client.agency_id' => 'required',
            'client.first_holder_name' => 'required|max:255',
            'client.first_holder_date_of_birth' => 'required|date',
            'client.first_holder_age' => 'required|numeric',
            'client.first_holder_job_id' => 'required',
            'client.second_holder_name' => 'min:0|max:255|nullable',
            'client.second_holder_date_of_birth' => 'date|nullable',
            'client.second_holder_age' => 'numeric|nullable',
            'client.second_holder_job_id' => 'nullable',
            'client.nif' => 'min:0|max:9|numeric|nullable',
            'client.phone_number' => 'numeric|min:0|min:9|nullable',
            'client.mobile_phone_number' => 'required|numeric|min:9',
            'client.email' => 'email|nullable',
            'client.address' => 'nullable',
            'client.marital_status_id' => 'required',
            'client.voucher_type' => 'required',
            'client.voucher_code' => 'required|min:4',
            'client.entry_hour' => 'required',
            'client.leave_hour' => 'required',
            'client.h_tour'     => 'required',
            'client.operator_id' => 'required',
            'client.supervisor_id' => 'required',
            'client.seller_id' => 'required',
            'client.manager_id' => 'required',
            'client.obs'    => 'min:0|max:1000',
            'client.close' => 'required',
            'client.n_close_justification_id' => 'required_if:close,0'
        ];
    }

    public function messages()
    {
        return [
            'client.visit_date.required' => 'Inserir Data de Visita',
            'client.agency_id.required'  => 'Inserir Agência',
            'client.first_holder_name.required' => 'Inserir o nome do 1º titular.',
            'client.first_holder_date_of_birth.required'  => 'Inserir data de nascimento do 1º titular.',
            'client.first_holdecdr_age.required' => 'Inserir a idade do 1º titular.',
            'client.first_holder_job.required'  => 'Inserir a profissão do 1º titular.',
            'client.mobile_phone_number.required' => 'Inserir o Nº de Telemóvel',
            'client.marital_status_id.required'  => 'Inserir estado civil',
            'client.voucher_type.required' => 'Inserir tipo de voucher pretendido',
            'client.voucher_code.required'  => 'Inserir código de voucher',
            'client.entry_hour.required' => 'Inserir hora de entrada',
            'client.leave_hour.required'  => 'Inserir hora de saída',
            'client.h_tour.required' => 'Inserir nº total de horas da visita',
            'client.operator_id.required'  => 'Inserir Operador',
            'client.supervisor_id.required' => 'Inserir Supervisor',
            'client.manager_id.required'  => 'Inserir Gerente',
            'client.seller_id.required'  => 'Inserir Vendedor',
            'client.close.required' =>'Seleccionar Fecho Sim/Não',
            'client.n_close_justification_id.required_if'  => 'Inserir justificação de não fecho',
        ];
    }
}
