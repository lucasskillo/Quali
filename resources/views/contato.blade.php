@extends('layouts.default')

@section('contato_ative')
    Active
@stop

@section('content')

@include('layouts.menu_default')

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <!--main content-->
            <div class="col-md-12">
                @if(Session::has('message'))
                    {{ Session::get('message') }}
                @endif

                <h2 class="title-divider">
                    <span>Contato</span>
                    <small>Entre em contato conosco</small>
                </h2>
                <!-- The form: submits to itself -->
                {{ Form::open(array('action' => 'HomeController@contato', 'role' => 'form')) }}
                    <div class="form-group<?php echo !empty($form_errors['contact-name']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-name">Name</label>
                        {{ Form::text('nome', null, array('placeholder'=>'Email', 'class'=>'form-control')) }}
                        <small id="contact-name-help" class="form-text text-muted">Primeiro e último nome</small>
                    </div>
                    <div class="form-group<?php echo !empty($form_errors['contact-name']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-name">Telefone</label>
                        {{ Form::text('telefone', null, array('placeholder'=>'Email', 'class'=>'form-control')) }}
                        <small id="contact-name-help" class="form-text text-muted">DDD e seu telefone.</small>
                    </div>
                    <div class="form-group<?php echo !empty($form_errors['contact-email']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-email">Email</label>
                        {{ Form::email('email', null, array('placeholder'=>'Email', 'class'=>'form-control')) }}
                        <small id="contact-email-help" class="form-text text-muted">Seu e-mail para entrarmos em contato</small>
                    </div>
                    <div class="form-group<?php echo !empty($form_errors['contact-message']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-message">Message</label>
                        {{ Form::textarea('mensagem', null, array('placeholder'=>'Mensagem', 'class'=>'form-control')) }}
                        <small id="contact-message-help" class="form-text text-muted">Detalhe seu contato.</small>
                    </div>

                    {{ Form::submit('Enviar Mensagem', array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
@stop