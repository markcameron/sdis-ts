@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])

    @formField('files', [
        'name' => 'document',
        'label' => 'Document',
        'note' => 'Ajouter un document',
    ])
@stop
