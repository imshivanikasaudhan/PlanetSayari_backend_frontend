@section('title', 'contact')
@include ('components.header')

<div class="clearfix"></div>
<!-- Main Content -->
<div class="main-content">
    <section class="overview-block-ptb7 iq-bg text-center">
        <div class="container">
            <div class="row h-100">
                <div class="col-lg-8 offset-lg-2 mb-5">
                    <div class="program py-4">
                        <h3 class="title text-uppercase ">Contact Us</h3>
                    </div>
                    <p class="">Reach out to us right now to initiate the discussion. Our staff is here to respond to your inquiries and go over how we could help you advance your company.</p>
                </div>
            </div>
        </div>
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <section class="contact-1">
            <div class="container">
                <div class="row no-gutter iq-mt-60">
                    <!-- <div class="col-lg-6 col-md-12">
                        <div class="iq-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224357.50123586552!2d77.23701468919643!3d28.5221023514615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e03b3d0e7fe105f%3A0xfb032138f852cbfa!2sHelper%20Adda%20(%20Real%20time%20domestic%20services%20)!5e0!3m2!1sen!2sin!4v1698206896464!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> -->
                    <div class="col-lg-8 offset-lg-2 col-md-12 iq-help-form">
                        <div class="iq-plr-40 iq-mt-40">
                            <h2 class="iq-mtb-25">Drop a message, We will reach you Soon!</h2>
                            <!-- <p><i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </i></p> -->
                            <div class="row iq-mt-30">
                                <div class="col-sm-12">
                                    <div id="formmessage">Success/Error Message Goes Here</div>
                                    <form class="form-horizontal" id="contactform" method="post" action="">
                                        <div class="contact-form">
                                            <div class="section-field iq-mb-30">
                                                <input id="name" type="text" placeholder="Name*" name="name">
                                            </div>
                                            <div class="section-field iq-mb-30">
                                                <input id="email" type="text" placeholder="Email*" name="email">
                                            </div>
                                            <div class="section-field iq-mb-30">
                                                <input id="phone" type="text" placeholder="Phone*" name="phone">
                                            </div>
                                            <div class="section-field iq-mb-30">
                                                <textarea class="input-message" placeholder="Message*" name="message"></textarea>
                                                <input type="hidden" name="action" value="sendEmail" />
                                                <!-- <button id="submit" name="submit" type="submit" value="Send" class="button pull-right iq-mt-40">Send Message</button> -->
                                                <a class="button pull-right iq-mt-40 rounded" href="javascript:void(0)"> <span class="button-inner-box">
                                                        <span class="icon-one icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path>
                                                            </svg></span>
                                                        <span class="text-btn">Send Message</span>
                                                        <span class="icon-two icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path>
                                                            </svg></span>
                                                    </span></a>


                                            </div>
                                        </div>
                                    </form>
                                    <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader.html" alt=""></div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 iq-mtb-50">
                        <hr>
                    </div>
                </div>                
            </div>
            <!-- <div class="container">
                <div class="row iq-ptb-80">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="iq-contact-box-01">
                            <div class="iq-icon dark-bg">
                                <i aria-hidden="true" class="ion-ios-location-outline"></i>
                            </div>
                            <div class="contact-content">
                                <h4 class="mb-3">Address</h4>
                                <span class="lead ">1234 North Luke Lane, South Bend,IN 360001</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="iq-contact-box-01">
                            <div class="iq-icon dark-bg">
                                <i aria-hidden="true" class="ion-ios-telephone-outline"></i>
                            </div>
                            <div class="contact-content">
                                <h4 class="mb-3">Phone</h4>
                                <span class="lead ">+0123 456 789</span>
                                <p class="iq-mb-0">Mon-Fri 8:00am - 8:00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="iq-contact-box-01">
                            <div class="iq-icon dark-bg">
                                <i aria-hidden="true" class="ion-ios-email-outline"></i>
                            </div>
                            <div class="contact-content">
                                <h4 class="mb-3">Mail</h4>
                                <span class="lead ">support@coinex.com</span>
                                <p class="iq-mb-0">24 X 7 online support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>

        <div class="" style="background-image: url('images/home/map.svg'); background-position: center center; background-size: contain;background-repeat: no-repeat;">
            <div class="container py-5">
                <div class="row mb-4">
                    <div class="col-lg-7 col-md-12">
                        <div class="heading-left">
                            <h3 class="mb-3">Sayari Offices</h3>
                            <p class="fs-5 lh-base mb-5 responsive_para_size">PLANET SAYARI began as a small startup and soon began to realize it needed to expand internationally to reach more customers and grow its business. Planet Sayari has opened a smaller software development office in Romania. The company’s expansion continued with opening an office in Milan, in Lugano, Switzerland, in Johannesburg, South Africa, India, Kenya, Singapore , London and finally in the USA.</p>
                            <!-- <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 chart-img">
                        <!-- <div class="btcwdgt-chart btcwdgt btcwdgt-headlines btcwdgt-clean">    <div class="btcwdgt-header">      <h2 title="Bitcoin price">        <span>$</span><span>26857.25</span>      </h2>      <h4>BTC/USD</h4>      <div class="stats">        <div>MktCap<span class="mkt-cap">—.–</span></div>        <div>High<span class="high">$46457.20</span></div>        <div>Low<span class="low">$18489.15</span></div>        <div>Supply<span class="supply">—.–</span></div>        <div>Blocks<span class="blocks">—</span></div>      </div>      <p class="changes up">        <strong class="arrow up"></strong><span class="pct">32.1%</span><span class="amt">$6526.04</span>      </p>      <p class="date-wrap"><span class="date">Oct 5, 2022 5:30 AM</span></p>    </div>    <div class="btcwdgt-body" style="width: 640px !important;       height:360px !important">      <canvas class="c" style="width: 640px; height: 360px;" width="640" height="360"></canvas>      <canvas class="i" style="width: 640px; height: 360px;" width="640" height="360"></canvas>    </div>    <div class="btcwdgt-footer">      <a href="https://www.bitcoin.com/widgets/?utm_source=templates.iqonic.design&amp;utm_medium=widget&amp;utm_campaign=Chart%20Widget" class="embed" title="Embed this widget">&lt;/&gt;</a>      <a href="https://www.bitcoin.com/?utm_source=templates.iqonic.design&amp;utm_medium=widget&amp;utm_campaign=Chart%20Widget" class="logo" title="Powered by bitcoin.com"><span>bitcoin.com</span></a>    </div></div> -->
                    </div>
                </div>

                <div class="office_section_wrapper" style="cursor: pointer;">
                    <div class="office_add_card india_card">
                        <div class="hover_add_card_india">
                            <div class="content_hover_add">
                                <h4>India</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>India</h3>
                            <img src="images/home/India.png" alt="India">
                        </div>
                    </div>
                    <div class="office_add_card london_card">
                        <div class="hover_add_card_london">
                            <div class="content_hover_add">
                                <h4>London</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>London</h3>
                            <img src="images/home/London.png" alt="India">
                        </div>
                    </div>
                    <div class="office_add_card singapore_card">
                        <div class="hover_add_card_singapore">
                            <div class="content_hover_add">
                                <h4>Singapore</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>Singapore</h3>
                            <img src="images/home/Singapore.png" alt="India">
                        </div>
                    </div>
                    <div class="office_add_card switzerland_card">
                        <div class="hover_add_card_switzerland">
                            <div class="content_hover_add">
                                <h4>Switzerland</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>Switzerland</h3>
                            <img src="images/home/Switzerland.png" alt="India">
                        </div>
                    </div>
                    <div class="office_add_card south_africa_card">
                        <div class="hover_add_card_south_africa">
                            <div class="content_hover_add">
                                <h4>South&nbsp;Africa</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>South&nbsp;Africa</h3>
                            <img src="images/home/South Africa.png" alt="India">
                        </div>
                    </div>
                    <div class="office_add_card romania_card">
                        <div class="hover_add_card_romania">
                            <div class="content_hover_add">
                                <h4>Romania</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>Romania</h3>
                            <img src="images/home/Romania.png" alt="India">
                        </div>
                    </div>

                    <div class="office_add_card kenya_card">
                        <div class="hover_add_card_kenya">
                            <div class="content_hover_add">
                                <h4>Kenya</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>Kenya</h3>
                            <img src="images/home/Kenya.png" alt="India">
                        </div>
                    </div>
                    <div class="office_add_card itally_card">
                        <div class="hover_add_card_itally">
                            <div class="content_hover_add">
                                <h4>Itally</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>Itally</h3>
                            <img src="images/home/Itally.png" alt="India">
                        </div>
                    </div>
                    <div class="office_add_card usa_card">
                        <div class="hover_add_card_usa">
                            <div class="content_hover_add">
                                <h4>USA</h4>
                                <p><b>Director:</b> Michele Cucchierato Planet Sayari Srl Bulevard Bucuresti 17 Ap.9 Baia Mare</p>
                            </div>
                        </div>
                        <div class="card_office_content">
                            <h3>USA</h3>
                            <img src="images/home/USA.png" alt="India">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main Content End -->

   @include ('components/footer);