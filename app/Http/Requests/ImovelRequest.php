<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
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
          'titulo' => 'bail|required|min:3|max:100',
          'cidade_id' =>'bail|required|integer',
          'tipo_id' => 'bail|required|integer',
          'finalidade_id' =>'bail|required|integer',
          'preco' => 'bail|required|numeric|min:0',
          'dormitorios' => 'bail|required|integer|min:0',
          'salas' => 'bail|required|integer|min:0',
          'terreno' => 'bail|required|integer|min:0',
          'banheiros' => 'bail|required|integer|min:0',
          'garagens' => 'bail|required|integer|min:0',
          'descricao' => 'bail|nullable|string',
          'rua' => 'bail|required|min:1|max:100',
          'numero' => 'bail|required|integer',
          'complemento' => 'bail|nullable|string',
          'bairro' => 'bail|required|min:3|max:50',
          'proximidades' => 'bail|nullable|array'
        ];
    }


    /**
     * Customizando erros de Cidade_id e outros
    */

    public function attributes()
    {
        return [
            'cidade_id' => 'cidade',
            'tipo_id' => 'tipo de imóvel',
            'finalidade_id' => 'finalidade',
            'preco' => 'preço',
            'dormitorios' => 'quantidade de dormitórios',
            'salas' => 'quantidade de salas',
            'terreno' => 'tamanho do terreno em m²',
            'banheiros' => 'quantidade de banheiros',
            'garagens' => 'vagas na garagem',
            'numero' => 'número',
        ];
    }

    /**
     * Customizar erro para campo ou regra
     */

     public function messages()
     {
        return[
            'finalidade_id.required' => 'Favor selecionar uma opção'
        ];
     }


}



