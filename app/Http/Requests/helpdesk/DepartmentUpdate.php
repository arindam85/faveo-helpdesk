<?php

namespace App\Http\Requests\helpdesk;

use App\Http\Requests\Request;

/**
 * DepartmentUpdate.
 *
 * @author  Ladybird <info@ladybirdweb.com>
 */
class DepartmentUpdate extends Request
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

                // 'outgoing_email' => 'required',
                // 'auto_response_email' => 'required',
                // 'group_id' => 'required',
        ];
    }
}
