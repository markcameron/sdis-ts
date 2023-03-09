@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'teaser',
        'label' => 'teaser',
        'maxlength' => 255
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover',
        'note' => 'Add one file Media',
    ])

    @formField('tags')

    @formField('block_editor', [
        'blocks' => ['media', 'title', 'text', 'imagegrid']
    ])
@stop
