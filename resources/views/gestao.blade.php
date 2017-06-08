@extends('layouts.default')

@section('institucional_ative')
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
                    <span>Gestão</span>
                    <small>Conheça à gestão atual da Qualimentos</small>
                </h2>
                <!--main content-->
                <div class="col-md-12">
                    <!-- The team -->
                    <div class="team team-grid mt-4">
                        <div class="row" data-toggle="isotope-grid" data-isotope-options='{"layoutMode": "fitRows", "itemSelector": ".grid-item"}'>

                            <!--Team Member jimi-->
                            <div class="col-6 col-sm-2 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Jimi's profile">
                                        <img src="assets/img/team/jimi.jpg" class="img-thumbnail" alt="Jimi" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Jimi's profile">Jimi</a>
                                    </h5>
                                    <p class="role">Founder & developer</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--Team Member adele-->
                            <div class="col-6 col-sm-4 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Adele's profile">
                                        <img src="assets/img/team/adele.jpg" class="img-thumbnail" alt="Adele" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Adele's profile">Adele</a>
                                    </h5>
                                    <p class="role">Founder & designer</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--Team Member bono-->
                            <div class="col-6 col-sm-4 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Bono's profile">
                                        <img src="assets/img/team/bono.jpg" class="img-thumbnail" alt="Bono" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Bono's profile">Bono</a>
                                    </h5>
                                    <p class="role">The Tech Guy</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--Team Member robert-->
                            <div class="col-6 col-sm-4 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Robert's profile">
                                        <img src="assets/img/team/robert.jpg" class="img-thumbnail" alt="Robert" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Robert's profile">Robert</a>
                                    </h5>
                                    <p class="role">Junior designer</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--Team Member steve-->
                            <div class="col-6 col-sm-4 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Steve's profile">
                                        <img src="assets/img/team/steve.jpg" class="img-thumbnail" alt="Steve" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Steve's profile">Steve</a>
                                    </h5>
                                    <p class="role">Sales Manager</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--Team Member jolie-->
                            <div class="col-6 col-sm-4 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Jolie's profile">
                                        <img src="assets/img/team/jolie.jpg" class="img-thumbnail" alt="Jolie" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Jolie's profile">Jolie</a>
                                    </h5>
                                    <p class="role">Marketing Expert</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--Team Member obama-->
                            <div class="col-6 col-sm-4 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Obama's profile">
                                        <img src="assets/img/team/obama.jpg" class="img-thumbnail" alt="Obama" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Obama's profile">Obama</a>
                                    </h5>
                                    <p class="role">Project Manager</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--Team Member kate-->
                            <div class="col-6 col-sm-4 col-md-3 grid-item">
                                <div class="team-member">
                                    <a href="team-member.htm" title="View Kate's profile">
                                        <img src="assets/img/team/kate.jpg" class="img-thumbnail" alt="Kate" />
                                    </a>
                                    <h5 class="name">
                                        <a href="team-member.htm" title="View Kate's profile">Kate</a>
                                    </h5>
                                    <p class="role">Project Manager</p>
                                    <div class="social-media-branding social-media-branding-xs">
                                    <!--@todo: replace with real social share links -->
                                        <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop