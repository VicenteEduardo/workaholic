<?php

namespace Database\Factories;

use App\Models\UsePolicie;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsePolicieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsePolicie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
public function definition()
{
    return [
        'title' => 'POLÍTICAS DE UTILIZAÇÃO',
        'description' => "
        O acesso às Mediatecas e aos respectivos serviços disponibilizados ao público em geral processa-se mediante a apresentação de um Cartão de Utente” emitido de forma pessoal e intransmissível pela ReMA ( Rede Nacional de Mediatecas ).

        Os interessados devem fazer-se acompanhar de fotocópia de documento oficial de identificação e receberão no momento o respectivo Cartão de Utente” (que terá somente uma taxa única de emissão de 2.000 kwanzas para cobertura dos custos de emissão e produção do próprio cartão) e que poderá ser utilizado de imediato no acesso às instalações e serviços em qualquer uma das Mediatecas em funcionamento.

        Para além do próprio registo enquanto utentes das Mediatecas e de identificação, os portadores do Cartão do Utente” poderão requisitar a utilização de diversos equipamentos no interior das Mediatecas, nomeadamente IPAD’s e equipamentos de MP4, mediante a apresentação do referido cartão que lhes será restituído quando da devolução do equipamento no final da sua utilização.

        Uma vez que, por compreensíveis razões de conservação das instalações e equipamentos, quer ainda de segurança para instalações, equipamentos, colaboradores e utentes não será possível transportar para o interior das Mediatecas comidas, bebidas, mochilas e/ou outros semelhantes tipos de haveres, serão facultados cacifos individuais a cada um dos utentes, que poderão ser utilizados também através da apresentação do já mencionado Cartão de Utente.

        Recordar que, é possível solicitar o Cartão de Utente” junto dos serviços de recepção localizados em cada uma das Mediatecas, no horário compreendido entre às 09h00 e às 20h00 em dias úteis e entre as 09h00 e as 14h00 aos sábados.
        
        "
    ];
}
}




