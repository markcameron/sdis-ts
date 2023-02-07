@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'type',
        'label' => 'Type',
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])

    @formField('date_picker', [
        'name' => 'date',
        'label' => 'Date',
        'time24Hr' => true,
        'minuteIncrement' => 1,
    ])

    @formField('select', [
        'name' => 'village',
        'label' => 'Commune',
        'placeholder' => 'Choisir une commune',
        'unpack' => true,
        'required' => true,
        'options' => [
            [
                'value' => 'Bogis-Bossey',
                'label' => 'Bogis-Bossey',
            ],
            [
                'value' => 'Chavannes-de-Bogis',
                'label' => 'Chavannes-de-Bogis',
            ],
            [
                'value' => 'Chavannes-des-Bois',
                'label' => 'Chavannes-des-Bois',
            ],
            [
                'value' => 'Commugny',
                'label' => 'Commugny',
            ],
            [
                'value' => 'Coppet',
                'label' => 'Coppet',
            ],
            [
                'value' => 'Founex',
                'label' => 'Founex',
            ],
            [
                'value' => 'Mies',
                'label' => 'Mies',
            ],
            [
                'value' => 'Tannay',
                'label' => 'Tannay',
            ],
        ]
    ])
@stop
