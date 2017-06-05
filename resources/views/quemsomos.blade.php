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
                    <span>Quem Somos</span>
                    <small>Conheça um pouco da história da Qualimentos Junior.</small>
                </h2>
                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-md-7">
                        <p class="lead">Causa defui dolus genitus haero in nibh saluto uxor.</p>
                        <p>Acsi bene capto letalis magna neo pagus wisi. Paratus torqueo veniam. Damnum ea eros ideo laoreet.</p>
                        <p>Euismod mos tation. Erat neo pagus refero ullamcorper voco. Camur ibidem iusto plaga praesent vulputate ymo. Euismod ex neo quibus sit tincidunt veniam vereor. Imputo incassum lenis natu nibh olim praesent sed suscipit.</p>
                    </div>
                    <!-- Slideshow banner -->
                    <div class="col-md-5">
                        <!-- List Accordion -->
                        <div class="card-accordion card-accordion-list-style card-accordion-icons-left" id="list-accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseOne" class="panel-title collapsed">Our Mission</a> </div>
                                <div id="collapseOne" class="collapse">
                                    <div class="card-block">Ea esse ibidem paratus patria volutpat. Aliquam elit ille luptatum neo nisl paratus pecus pertineo voco.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseTwo" class="panel-title collapsed">Our Process</a> </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-block">Ad iustum odio premo refoveo sino ymo. Adipiscing cogo commoveo hendrerit importunus loquor patria roto.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseThree" class="panel-title collapsed">How We Work</a> </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-block">Ad cogo loquor luptatum neo nisl saluto singularis valde. Bene lucidus ludus refero saluto.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseFour" class="panel-title collapsed">What We Do</a> </div>
                                <div id="collapseFour" class="collapse">
                                    <div class="card-block">Defui imputo iustum jus te. Enim eros saluto sit. Augue eros luctus probo turpis.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span>Our <span class="font-weight-normal text-muted">Values</span></span>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Abico Premo Veniam Voco
                                </h4>
                                Duis jus pagus torqueo. Praemitto scisco ymo.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Causa Fere Proprius Suscipit
                                </h4>
                                Diam fere illum in pneum typicus usitas valde validus venio.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Consectetuer Nibh Singularis Vel
                                </h4>
                                Decet et lucidus nunc oppeto saepius venio.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Adipiscing Aptent Ibidem Quidem
                                </h4>
                                Conventio letalis nibh tum. Accumsan antehabeo erat gemino ideo olim oppeto plaga scisco.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Consectetuer Haero Modo Pneum
                                </h4>
                                Commodo fere gravis in inhibeo nunc paulatim praesent.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Modo Tamen Tation Volutpat
                                </h4>
                                Euismod uxor velit. Eu importunus oppeto quidne vindico vulputate.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Timeline -->
                <h3 class="title-divider mt-4">
                    <span>Company <span class="font-weight-normal text-muted">History</span></span>
                </h3>
                <div class="timeline timeline-left">
                    <div class="timeline-marker"></div>
                    <!--Timeline item 1-->
                    <div class="timeline-item timeline-item-first animated fadeIn de-02">
                        <div class="timeline-item-date">Feb 2011</div>
                        <h5 class="timeline-item-title">
                            Company founders meet for first time
                        </h5>
                        <p class="timeline-item-description">Autem importunus saepius ulciscor. Autem exerci iustum jus mos nobis odio olim probo.</p>
                    </div>
                    <!--Timeline item 2 - NOTE: .highlight class-->
                    <div class="timeline-item highlight animated fadeIn de-04">
                        <div class="timeline-item-date">April 2011</div>
                        <h5 class="timeline-item-title">
                            The company was born
                        </h5>
                        <p class="timeline-item-description">Consectetuer erat luctus mauris meus paulatim plaga scisco vindico. Cui huic ideo immitto importunus secundum tum veniam virtus.</p>
                    </div>
                    <!--Timeline item 3 -->
                    <div class="timeline-item animated fadeIn de-06">
                        <div class="timeline-item-date">Sept 2011</div>
                        <h5 class="timeline-item-title">
                            The company lands first major contract
                        </h5>
                        <p class="timeline-item-description">Ideo paulatim quidne suscipere utrum vulpes. Causa fere pagus vereor virtus.</p>
                    </div>
                    <!--Timeline item 4-->
                    <div class="timeline-item timeline-item-last animated fadeIn de-08">
                        <div class="timeline-item-date">Dec 2014</div>
                        <h5 class="timeline-item-title">
                            Company sold for $1 million
                        </h5>
                        <p class="timeline-item-description">Abigo cogo et ille nibh paulatim utinam vero voco. Acsi natu quibus uxor virtus.</p>
                    </div>
                    <div class="timeline-marker timeline-marker-bottom"></div>
                </div>
            </div>
        </div>
    </div>
@stop