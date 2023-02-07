@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'hero_text',
        'label' => 'Hero Text',
        'maxlength' => 200,
    ])

    @formField('medias', [
        'name' => 'hero',
        'label' => 'Hero Image',
        'note' => 'Add one file Media',
    ])
@stop
