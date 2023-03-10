@extends('twill::layouts.settings')

@section('contentFields')
    @formField('input', [
        'label' => 'Phone Number',
        'name' => 'phone_number',
        'textLimit' => '80'
    ])

    @formField('input', [
        'label' => 'Phone Number Link',
        'name' => 'phone_number_link',
        'textLimit' => '80'
    ])

    @formField('input', [
        'label' => 'Contact E-mail',
        'name' => 'email_contact',
        'textLimit' => '80'
    ])

    @formField('input', [
        'type' => 'textarea',
        'name' => 'address',
        'label' => 'Adresse',
        'rows' => 3,
    ])

    @formField('input', [
        'label' => 'Facebook',
        'name' => 'url_facebook',
        'textLimit' => '120'
    ])

    @formField('input', [
        'label' => 'GitHub',
        'name' => 'url_github',
        'textLimit' => '120'
    ])
@stop