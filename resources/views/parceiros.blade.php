@extends('layouts.default')

@section('parceiros_ative')
    active
@stop
@section('content')

    @include('layouts.menu_default')

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <!--main content-->
            <div class="col-md-12">
                <h2 class="title-divider">
                    <span>Parceiros</span>
                    <small>Conheça nossos parceiros</small>
                </h2>
                <p>Segue abaixo nossos parceiros:</p>
                <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
                <blockquote class="blockquote blockquote-reverse">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
@stop