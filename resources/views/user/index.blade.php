@extends('user.basic.wrapper')

@push('title')
    Startup Portal Taiwan
@endpush

@push('csrf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endPush

@push('page_css')

@endPush

@section('main')
    <div class="sharethis-inline-share-buttons st-right  st-inline-share-buttons st-animated"
         style="z-index: 2;position: fixed;right: 65px;bottom: 42px;" id="st-1">
        <div class="st-btn st-first  st-remove-label" data-network="sharethis" style="display: inline-block;">
            <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">

        </div>
        <div class="st-btn  st-remove-label" data-network="email" style="display: inline-block;">
            <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">

        </div>
        <div class="st-btn  st-remove-label" data-network="facebook" style="display: inline-block;">
            <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">

        </div>
        <div class="st-btn  st-remove-label" data-network="twitter" style="display: inline-block;">
            <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">

        </div>
        <div class="st-btn st-last  st-remove-label" data-network="linkedin" style="display: none;">
            <img alt="linkedin sharing button" src="https://platform-cdn.sharethis.com/img/linkedin.svg">

        </div>
    </div>
    <section class="banner-section">
        <div class="banner-overlay" style="width: 100%;height: 100%;position: absolute;z-index: 1;">
            <div class="overlay overlay-dark" style="background-color: rgba(0,0,0,.3);width: 100%;height: 100%;"></div>
        </div>
        <div class="banner-image" id="banner-image"
             style="background-image:url('http://127.0.0.1:8000/assets/img/taipei.jpg');opacity:1;"></div>
        <h1 class="SIbanner-text">
            Come to Taiwan &amp; make your business thrive
        </h1>
    </section>
    <h2 class="subtitle"><a title="About Us" href="http://127.0.0.1:8000" hreflang="en" style="color: #222831;">About Us</a>
    </h2>
    <section class="container mt-4">
        <div class="row">
            <div class="text-center col-lg-3 col-md-6">
                <a title="About Taiwan" href="#AboutTaiwan"><img alt="icon" class="pic"
                                                                 src="http://127.0.0.1:8000/assets/img/icon1.png"></a>
                <h3 class="title3"><a title="About Taiwan" href="#AboutTaiwan">About Taiwan</a></h3>
                <div class="title4">Learn more about Taiwan and get our chracteristics</div>
            </div>
            <div class="text-center col-lg-3 col-md-6">
                <img alt="icon" class="pic" data-toggle="collapse" data-target="#demo"
                     src="http://127.0.0.1:8000/assets/img/icon2.png">
                <h3 class="title3" data-toggle="collapse" data-target="#demo">Permit &amp; Regulations</h3>
                <div id="demo" class="collapse" style="background-color:rgba(0,0,0,0.1);border-radius:5px;">
                    <a title="Visas" href="http://127.0.0.1:8000/permit" hreflang="en"
                       style="color: #222831;font-weight: bold;">Visas</a>
                    <br>
                    <a title="Incorporation" href="http://127.0.0.1:8000/incorporation" hreflang="en"
                       style="color: #222831;font-weight: bold;">Incorporation</a>
                </div>
                <div class="title4">Know what you have to do before working in Taiwan</div>
            </div>
            <div class="text-center col-lg-3 col-md-6">
                <img alt="icon" class="pic" data-toggle="collapse" data-target="#demo1"
                     src="http://127.0.0.1:8000/assets/img/icon3.png">
                <h3 class="title3" data-toggle="collapse" data-target="#demo1">Service</h3>
                <div id="demo1" class="collapse" style="background-color:rgba(0,0,0,0.1);border-radius:5px;">
                    <a title="Incubator &amp; Accelerator" href="http://127.0.0.1:8000/ia" hreflang="en"
                       style="color: #222831;font-weight: bold;">Incubator &amp; Accelerator</a>
                    <br>
                    <a title="Government Incentive" href="http://127.0.0.1:8000/incentive" hreflang="en"
                       style="color: #222831;font-weight: bold;">Government Incentive</a>
                    <br>
                    <a title="Chamber &amp; Community" href="http://127.0.0.1:8000/cc" hreflang="en"
                       style="color: #222831;font-weight: bold;">Chamber &amp; Community</a>
                </div>
                <div class="title4">Get more services and resources from the government</div>
            </div>
            <div class="text-center col-lg-3 col-md-6">
                <a title="News &amp; Story" href="#carouselExampleControls"><img alt="icon" class="pic"
                                                                                 src="http://127.0.0.1:8000/assets/img/icon4.png"></a>
                <h3 class="title3"><a title="News &amp; Story" href="#carouselExampleControls">News &amp; Story</a></h3>
                <div class="title4">Obtain the news and stories about entrepreneurship</div>
            </div>
        </div>
    </section>

    <section class="entity mb-5" id="AboutTaiwan">
        <div class="reason left">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="http://127.0.0.1:8000/assets/img/introduction.jpeg" alt="introduction">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <div style="float:left;">
                            <img alt="earth" src="http://127.0.0.1:8000/assets/img/earth.png"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">LOCATION</p>
                                <p style="margin-bottom:3px;" class="Introduction">Taiwan sits at the center of the Asia
                                    Pacific region</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="airplane" src="http://127.0.0.1:8000/assets/img/airplane.png"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">TRAFFIC</p>
                                <p style="margin-bottom:3px;" class="Introduction">Convenient public transportation
                                    systems</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="hat" src="http://127.0.0.1:8000/assets/img/hat.png"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">EDUCATED WORKFORCE</p>
                                <p style="margin-bottom:3px;" class="Introduction">Large and highly educated workforce
                                    pool</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="computer" src="http://127.0.0.1:8000/assets/img/computer.png"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;" class="IT">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">IT CLUSTER</p>
                                <p style="margin-bottom:3px;" class="Introduction">IT industrial cluster plays a critical
                                    role</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="handshake" src="http://127.0.0.1:8000/assets/img/handshake.png"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">LEGAL ENVIRONMENT</p>
                                <p style="margin-bottom:3px;width:auto;" class="Introduction">A rigorous legal and
                                    regulatory environment for<br>intellectual property and foreign investment</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </section>
    <section class="container mb-5 mt-2">
        <div class="row">
            <div class="col-sm-12 col-lg-6 intro-text">
                <p class="video-title">Sincere talk of enterprises</p>
                <p class="mb-3">Welcome to Taiwan to start your own business. Use Startup Portal Taiwan to find your own
                    business positioning and unique market opportunities.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <iframe src="https://www.youtube.com/embed/0VsiUPlReHk" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""
                        width="100%" height="300px"></iframe>
            </div>
        </div>
    </section>


    <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active carousel-item-left">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item-next carousel-item-left">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
            <a title="Previous" class="carousel-control-prev" href="#carouselExampleControls" role="button"
               data-slide="prev" style="color: #212529">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color: #212529">Previous</span>
            </a>
            <a title="Next" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"
               style="color: #212529">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color: #212529">Next</span>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img
            src="http://127.0.0.1:8000/assets/img/chevron-arrow-up.png" style="height:15px;width:15px;">
    </button>
    <footer>
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-2">
                        <form method="POST" action="http://127.0.0.1:8000" accept-charset="UTF-8" data-request="onSend">
                            <input name="_session_key" type="hidden" value="rtepfWl9FtX0n8GklhcMns2hWl5dlVnSyOmz6x3j"><input
                                name="_token" type="hidden" value="oWNYI2LvNe4MtIEePdyacNByednp1PZ8asCsEiRt">
                            <div class="mb-3 contact-title">Contact Us<input type="submit" value="Send"
                                                                             class="btn btn-default"
                                                                             style="position: absolute;right: 15px;"></div>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                            <br>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your email">
                            <br>
                            <textarea class="form-control" id="comments" name="comments" placeholder="Comments"
                                      style="height: 200px;;"></textarea>
                        </form>

                        <div class="d-flex flex-wrap mt-4">
                            <a target="_blank" href="https://www.startupislandtaiwan.info/"
                               class="btn btn-outline-light mt-2 mr-2">Startup Island Taiwan</a>
                            <a target="_blank" href="https://contacttaiwan.tw/Main/Index.aspx?lang=2"
                               class="btn btn-outline-light mt-2 mr-2">Contact Taiwan</a>
                            <a target="_blank" href="https://investtaiwan.nat.gov.tw/homePage?lang=eng"
                               class="btn btn-outline-light mt-2 mr-2">Invest Taiwan</a>
                            <a target="_blank" href="https://startup.sme.gov.tw/startupaward/index_eng.php"
                               class="btn btn-outline-light mt-2 mr-2">Business Startup Award</a>
                            <a target="_blank" href="https://www.sbir.org.tw/project/introSBIRen"
                               class="btn btn-outline-light mt-2 mr-2">SBIR</a>
                            <a target="_blank" href="https://angelinvestment.org.tw"
                               class="btn btn-outline-light mt-2 mr-2">National Development Fund <br> Business Angel
                                Investment Program</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3 contact-title">Consulting Service</div>
                        <div class="bottomTitle1 mt-3">
                            <div class="mb-2">Startup Terrace Linkou</div>
                            <div class="mb-2">TEL : +886-2-23692358</div>
                            <div class="mb-2">EMAIL : <a href="mailto: hello@startupterrace.tw"
                                                         style="color: white;text-decoration: underline;">hello@startupterrace.tw</a>
                            </div>
                            <div class="mb-2">WEB : <a href="//www.startupterrace.tw" target="_blank"
                                                       style="color: white;text-decoration: underline;">www.startupterrace.tw</a>
                            </div>
                        </div>
                        <div class="bottomTitle1 mt-3">
                            <div class="mb-2">Startup Terrace Kaohsiung</div>
                            <div class="mb-2">TEL : +886-7-3383827</div>
                            <div class="mb-2">EMAIL : <a href="mailto: hello@yawan-startup.tw"
                                                         style="color: white;text-decoration: underline;">hello@yawan-startup.tw</a>
                            </div>
                            <div class="mb-2">WEB : <a href="//www.yawan-startup.tw" target="_blank"
                                                       style="color: white;text-decoration: underline;">www.yawan-startup.tw</a>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-2"><a href="https://www.sme.gov.tw/" target="_blank"><img
                                        src="http://127.0.0.1:8000/assets/img/smea-v2.png"
                                        class="bottomPic"></a></div>
                            <div class="col-10">
                                <div class="bottomTitle">Small and Medium Enterprise and Startup Administration, Ministry of
                                    Economic Affairs
                                </div>
                            </div>
                        </div>
                        <div class="bottomTitle1 mt-3">
                            <div class="mb-2">ADD : 3rd Fl.No.95.Sec.2, Roosevelt Rd., Taipei 10646,Taiwan, R.O.C.</div>
                            <div class="mb-2">TEL : +886-2-2368-6858 / +886-2-2368-0816</div>
                            <div class="mb-2">FAX : +886-2-2367-1134</div>
                            <div class="mb-4">EMAIL : <a href="mailto: sme@careernet.org.tw"
                                                         style="color: white;text-decoration: underline;">sme@careernet.org.tw</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="color: white; text-align: end">@2023 SMESA.All rights reserved</div>
            </div>
        </div>
    </footer>


    <div class="stripe-loading-indicator loaded">
        <div class="stripe"></div>
        <div class="stripe-loaded"></div>
    </div>
    <iframe data-product="web_widget" title="No content" role="presentation" tabindex="-1" allow="microphone *"
            aria-hidden="true" src="about:blank"
            style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
{{--    <iframe name="__tcfapiLocator" style="display: none;"></iframe>--}}
{{--    <iframe src="https://gdpr-api.sharethis.com/portal-v2.html" id="st_gdpr_iframe" title="GDPR Consent Management"--}}
{{--            style="width: 0px; height: 0px; position: absolute; left: -5000px;"></iframe>--}}
    <div id="st-cmp-v2">
        <div data-version="2.0.1" class="st-cmp-app  st-cmp-undefined ">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <div class="st-cmp-overlay"></div>
            <div class="st-cmp-content">
                <div class="st-layer st-first-layer">
                    <div class="st-cmp-full-header">
                        <div class="header"><h1>WE CARE ABOUT YOUR PRIVACY</h1></div>
                        <div class="st-cmp-header-nav-buttons">
                            <div class="st-button  ghost"><span><div class="st-button-inner"><span class="st-text">Manage Settings</span></div></span>
                            </div>
                            <div class="st-button  ghost"><span><div class="st-button-inner"><span
                                            class="st-text">Vendors</span></div></span></div>
                        </div>
                    </div>
                    <div class="st-cmp-selection-cards">
                        <div id="vendor-settings"><h2>Vendor Settings</h2>
                            <div class="st-cmp-selection-card"><h3>Purposes</h3>
                                <div class="st-cmp-item"><h4>Vendors can:</h4>
                                    <div class="st-switch "><label>Store and/or access information on a device</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Use limited data to select advertising</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Create profiles for personalised advertising</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Use profiles to select personalised advertising</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Create profiles to personalise content</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Use profiles to select personalised content</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Measure advertising performance</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Measure content performance</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Understand audiences through statistics or combinations
                                            of data from different sources</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Develop and improve services</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Use limited data to select content</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-cmp-selection-card"><h3>Special Purposes</h3>
                                <div class="st-cmp-item"><h4>Vendors can:</h4>
                                    <ul>
                                        <li>Ensure security, prevent and detect fraud, and fix errors
                                        </li>
                                        <li>Deliver and present advertising and content</li>
                                        <li>Save and communicate privacy choices</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="st-cmp-selection-card"><h3>Features</h3>
                                <div class="st-cmp-item"><h4>Vendors can:</h4>
                                    <ul>
                                        <li>Match and combine data from other data sources</li>
                                        <li>Link different devices</li>
                                        <li>Identify devices based on information transmitted automatically</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="st-cmp-selection-card"><h3>Special Features</h3>
                                <div class="st-cmp-item"><h4>Vendors can:</h4>
                                    <div class="st-switch "><label>Use precise geolocation data</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                    <div class="st-switch "><label>Actively scan device characteristics for
                                            identification</label>
                                        <div class="switch"><span class="slider"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="st-cmp-disclaimer"><p>Some partners do not ask for your consent to process your data,
                            instead, they rely on their legitimate business interest. Personal data processed includes but
                            is not limited to cookies, IP addresses, and URLs visited.<a> View our list of partners </a>to
                            see the purposes they believe they have a legitimate interest for and object to legitimate
                            interests on a per vendor basis.<a> Manage your settings </a>and object to purposes as a
                            legitimate interest in general.</p>
                        <p>You can change your settings at any time, including by withdrawing your consent, by clicking on
                            the cog icon in the bottom right hand corner.</p></div>
                    <div class="st-cmp-nav-buttons">
                        <div class="st-cmp-footer-nav-buttons">
                            <div class="st-button"><span><div class="st-button-inner"><span
                                            class="st-text">Manage Settings</span></div></span></div>
                            <div class="st-button"><span><div class="st-button-inner"><span
                                            class="st-text">Vendors (843)</span></div></span></div>
                        </div>
                        <div class="st-cmp-permanent-footer-nav-buttons">
                            <div class="st-button"><span><div class="st-button-inner"><span
                                            class="st-text">Accept All</span></div></span></div>
                            <div class="st-button"><span><div class="st-button-inner"><span
                                            class="st-text">Reject All</span></div></span></div>
                            <div class="st-button" disabled=""><span><div class="st-button-inner"><span class="st-text">Save &amp; Exit</span></div></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <iframe title="開啟您可用於找到更多資訊的 Widget" id="launcher" tabindex="-1" style="color-scheme: light; width: 104px; height: 50px; padding: 0px; margin: 10px 20px; position: fixed; bottom: 30px; overflow: visible; opacity: 0; border: 0px; z-index: 999998; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1); transition-property: opacity, top, bottom; top: -9999px; visibility: hidden;"></iframe>--}}
@endsection

@push('page_script')

@endPush
