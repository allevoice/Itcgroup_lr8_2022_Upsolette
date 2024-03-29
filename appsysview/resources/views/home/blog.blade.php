@extends('template.tmpitcg')

@section('title', languesviewdatafixepage('blog'))

@section('bannerview')

@endsection

@section('datacontent')



    <div class="main-contentbox">


        <!--=====================================-->
        <!--============== Banner ===============-->
        <!--=====================================-->


        <div class="sub-banner-con darkBlueBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="sub-banner-text darkBlueBg regular-font col-lg-6 col-md-5 col-sm-12 col-xs-12" >
                            <div style="padding-left:10%;">
                                @foreach (dataviewhead('5','a') as $show)
                                    <h1>{{$show->title}}</h1>
                                    <p>{{$show->description}} the CEO : Jean Samuel Jules</p>
                                @endforeach
                            </div>
                            <!--sub-banner-text-->
                        </div>
                        <!--row-->
                    </div>
                    <!--container-->
                </div>
                <div class="sub-banner-img col-lg-6 col-md-7 col-sm-12 col-xs-12">
                    @include('template.bannerpage')
                </div>
                <!--row-->
            </div>
            <!--col-lg-12-->
        </div>




        <!--===================================-->
        <!--============== Blog ===============-->
        <!--===================================-->
        <div class="paddingBox greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                            <aside class="sidebar tags col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <h3>Experience</h3>
                                    <a href="#">Pixel Haïti</a> <a href="#">Atalou Micro System</a> <a href="#">Manutech INC</a> <a href="#">Digicel Haïti</a> <a href="#">Accesshaiti</a> <a href="#">Plaza Hotel</a> <a href="#">NTPSams -Technology & ITC-GROUP</a>
                                    <!--row-->
                                </div>
                                <!--sidebar-->
                                <div class="row">
                                    <h3>Autre Post</h3>
                                    <a href="#">Jean Samuel JULEs Biography </a>
                                    <a href="#">Jean Samuel JULEs Biography </a>
                                    <a href="#">Jean Samuel JULEs Biography </a>
                                    <a href="#">Jean Samuel JULEs Biography </a>
                                    <a href="#">Jean Samuel JULEs Biography </a>
                                    <a href="#">Jean Samuel JULEs Biography </a>

                                    <!--row-->
                                </div>
                            </aside>

                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <aside class="blog-post-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <figure class="post-img"> <img src="{{asset('assets/img/blog/post-img1.jpg')}}" alt="post-img1" />
                                    <span class="date-tag semibold-font" style="margin-left: 0px;padding-right: 2%;width: auto">12 AUGUST 2020</span>
                                    <!--post-img-->
                                </figure>
                                <div class="blog-post-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="meta">

                                    </div>
                                    <div class="social-icons">
                                        <ul>
                                            <li><a href="https://web.facebook.com/jsjulessam/" class="fa fa-facebook"></a></li>
                                            <li><a href="https://twitter.com/jsjulessam" class="fa fa-twitter"></a></li>
                                            <!--// <li><a href="#" class="fa fa-instagram"></a></li> //-->
                                        </ul>
                                        <!--social-icons-->
                                    </div>
                                    <div class="blog-text col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3>Jean Samuel JULES’s Biography </h3>
                                        <p>JEAN SAMUEL JULES, S.E. SYSTEM ENGINEER
                                            CEO. CHIEF EXECUTIVE OFFICER.
                                            <br>NTPSAMS-TECHNOLOGY & ITCGROUP Education:
                                            <br>1- 4 Years of Studies in the field of Computer Sciences at University of INUQUA
                                            <br>2- 1 Year of Master in the specialization of Network and Telecommunication the field of Computer Sciences at University of CREFIMA) (Licence in Computer Sciences / INUQUA / CREFIMA)
                                            <br>3- Has attended several seminaries on self performance for Certifications in specific fields such as:  Networking, Telecom, Entrepreneurship, Law of work, Project Management and Programming Systems at ESIH, AUF, INUQUA, UNIQ, PACT respectively.(Certificates/ESIH( Ecole Superieur en Informatique d’Haiti, INUQUA(Institut Universitaire Quisqueya D'AMÉRIQUE), AUF(Agence Universitaire Francophone), UNIQ (Universite Quisqueya), CPLA (Cabinet Patrick Laurent) PACT (Progress & Accelerated Change Through Technology))
                                            <br><br>
                                            <h3>Affiliations</h3>
                                            <br>1- Member of AHTIC (L’Association Haïtienne pour les Technologies de l’Information et de la Communication).
                                            Summary:
                                            <br>§ Has worked as an IT Consultant and Sales Engineering for the past 10 years always available and passionate in bringing the assistance needed to his Customers and Enterprises like; NGOs, UN locally and Internationally as well as the general population in these specific lists of services.
                                            <br>For more information please follow these links:
                                            (http://www.ntpsams.com https://itcgrouphaiti.com/blog
                                            <br><br>
                                        <h4>Experience:</h4>
                                            <br>- Pixel Haïti, IT Technicien, in the Cabling System for Both Building Hainet at Darguin Street, Petion-Ville.
                                            <br>- Manutech INC, IT Consultant for the Local and International Company Managing the servers and taking care of the maintenance in the help desk department.
                                            <br>- Digicel Haïti, CCTECH Agent in Help Desk Department.
                                            <br>- Accesshaiti, IT Assistant IN NOC Department.
                                            <br>- PLAZA HOTEL, IT Consultant, Translator, Driver and Logistic Supervisor in Chef for the Hotel and the CNN Staff Journalist. Since The earthquake.
                                            <br>- ATALOU Micro System, Sales and System Engineer Manager and Marketing Agent. Etc…
                                            <br>- NTPSAMS-TECHNOLOGY & ITCGROUP, CEO since 2011. </p>
                                        <!--blog-text-->
                                    </div>
                                    <!--blog-post-info-->
                                </div>
                                <!--row-->
                            </div>
                            <!--blog-post-box-->
                        </aside>

                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>
        <!--main-contentbox-->
    </div>


@endsection
