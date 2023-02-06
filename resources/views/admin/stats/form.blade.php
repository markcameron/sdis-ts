@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100,
    ])

    @formField('files', [
        'name' => 'single_file',
        'label' => 'Icône',
        'note' => 'Add one file (per language)',
    ])
@stop
