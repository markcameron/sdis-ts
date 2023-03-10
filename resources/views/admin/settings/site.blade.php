@extends('twill::layouts.settings')

@section('contentFields')
    @formField('input', [
        'label' => 'Phone Number',
        'name' => 'phone_number',
        'textLimit' => '80'
    ])

    @formField('input', [
        'label' => 'Contact E-mail',
        'name' => 'email_contact',
        'textLimit' => '80'
    ])

    @formField('input', [
        'label' => 'Facebook',
        'name' => 'url_facebook',
        'textLimit' => '120'
    ])

    @formField('input', [
        'label' => 'GitHub',
        'name' => 'url_facebook',
        'textLimit' => '120'
    ])
@stop