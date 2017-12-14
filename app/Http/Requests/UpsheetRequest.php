<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpsheetRequest extends FormRequest
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
            'upsheet.visit_date' => 'required',
            'upsheet.agency_id' => 'required',
            'upsheet.first_holder_name' => 'required|max:255',
            'upsheet.first_holder_date_of_birth' => 'required|date',
            'upsheet.first_holder_age' => 'required|numeric',
            'upsheet.first_holder_job_id' => 'required',
            'upsheet.second_holder_name' => 'min:0|max:255|nullable',
            'upsheet.second_holder_date_of_birth' => 'date|nullable',
            'upsheet.second_holder_age' => 'numeric|nullable',
            'upsheet.second_holder_job_id' => 'nullable',
            'upsheet.nif' => 'min:0|max:9|numeric|nullable',
            'upsheet.phone_number' => 'numeric|min:0|min:9|nullable',
            'upsheet.mobile_phone_number' => 'required|numeric|min:9',
            'upsheet.email' => 'email|nullable',
            'upsheet.address' => 'nullable',
            'upsheet.marital_status_id' => 'required',
            'upsheet.voucher_type' => 'required',
            'upsheet.voucher_code' => 'required|min:4',
            'upsheet.entry_hour' => 'required',
            'upsheet.leave_hour' => 'required',
            'upsheet.h_tour'     => 'required',
            'upsheet.operator_id' => 'required',
            'upsheet.supervisor_id' => 'required',
            'upsheet.seller_id' => 'required',
            'upsheet.manager_id' => 'required',
            'upsheet.obs'    => 'min:0|max:1000',
            'upsheet.close' => 'required',
            'upsheet.n_close_justification_id' => 'required_if:close,0'
        ];
    }

    public function messages()
    {
        return [
            'upsheet.visit_date.required' => 'Inserir Data de Visita',
            'upsheet.agency_id.required'  => 'Inserir Agência',
            'upsheet.first_holder_name.required' => 'Inserir o nome do 1º titular.',
            'upsheet.first_holder_date_of_birth.required'  => 'Inserir data de nascimento do 1º titular.',
            'upsheet.first_holdecdr_age.required' => 'Inserir a idade do 1º titular.',
            'upsheet.first_holder_job.required'  => 'Inserir a profissão do 1º titular.',
            'upsheet.mobile_phone_number.required' => 'Inserir o Nº de Telemóvel',
            'upsheet.marital_status_id.required'  => 'Inserir estado civil',
            'upsheet.voucher_type.required' => 'Inserir tipo de voucher pretendido',
            'upsheet.voucher_code.required'  => 'Inserir código de voucher',
            'upsheet.entry_hour.required' => 'Inserir hora de entrada',
            'upsheet.leave_hour.required'  => 'Inserir hora de saída',
            'upsheet.h_tour.required' => 'Inserir nº total de horas da visita',
            'upsheet.operator_id.required'  => 'Inserir Operador',
            'upsheet.supervisor_id.required' => 'Inserir Supervisor',
            'upsheet.manager_id.required'  => 'Inserir Gerente',
            'upsheet.seller_id.required'  => 'Inserir Vendedor',
            'upsheet.close.required' =>'Seleccionar Fecho Sim/Não',
            'upsheet.n_close_justification_id.required_if'  => 'Inserir justificação de não fecho',
        ];
    }
}
