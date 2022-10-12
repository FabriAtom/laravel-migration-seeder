<?php

use app\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Roma',
                'stazione_di_arrivo' => 'Napoli',
                'orario_di_partenza' => 10,
                'orario_di_arrivo' => 13,
                'codice_treno' => 'abcdef',
                'numero_carrozze' =>rand(10,50),
            ],
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Roma',
                'stazione_di_arrivo' => 'Napoli',
                'orario_di_partenza' => 15,
                'orario_di_arrivo' => 18,
                'codice_treno' => 'abcdef',
                'numero_carrozze' =>rand(10,50),
            ],
            [
                'azienda' => 'Treni',
                'stazione_di_partenza' => 'Roma',
                'stazione_di_arrivo' => 'Napoli',
                'orario_di_partenza' => 8,
                'orario_di_arrivo' => 11,
                'codice_treno' => 'abcdef',
                'numero_carrozze' =>rand(10,50),
            ],
        ];

        foreach($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];

            $newTrain->save();
        }
    }  
}
