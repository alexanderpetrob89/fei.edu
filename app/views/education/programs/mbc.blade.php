
<?php $segment2 = Request::segment(2); ?>
    <section id="sub-header" class="{{$segment2}}-sub-header program-detail">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
            <div class="row">
                <div class="col-md-12 sub-header-text-content">
                    <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('MBC_program.heading_title')}}</span></h1>
                    <p class="lead boxed-subheading-semiblue animated fadeInDown">
                        {{Lang::get('MBC_program.heading_subtitle')}}
                    </p>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
        <div class="divider_top"></div>
    </section><!-- End sub-header -->


    <section id="main_content">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="/">FEI</a></li>
                <li><a href="/{{Lang::get('header.programs')}}">{{Lang::get('header.menu_programs')}}</a></li>
                <li class="active">{{Lang::get('MBC_program.heading_title')}}</li>
            </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                    {{Lang::get('MBC_program.program_summary_desc')}}
                    <?php /* 
                    <div class="course-classes-table"> 
                        <div class="panel panel-info filterable">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{Lang::get('MBC_program.program_table_title')}}</h3>
                            </div>
                           {{Lang::get('MBC_program.program_req_table')}} 
                        </div><!-- End filterable -->
                    </div>
                        */ ?>
                    <br />
                    {{Lang::get('MBC_program.program_objectives')}}
                    <br/>
                   
                    {{Lang::get('MBC_program.career_outlook')}}
                </div>

                <aside class="col-md-4">
                   <?php if(Session::get('locale') == "en") {?>
                    @include('includes.form-side')
                  <?php }else{?>
                  	@include('includes.form-side1')
                  <?php }?>
                    @include('includes.mbc-side')
                </aside> <!-- End col-md-4 -->

            </div>

        </div><!-- End container -->

    </section><!-- End main_content -->
