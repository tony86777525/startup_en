@extends('user.basic.wrapper')

@push('title')
    Incorporation | Startup Portal Taiwan
@endpush

@push('csrf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endPush

@push('page_css')

@endPush

@section('main')

    <div class="sharethis-inline-share-buttons st-right  st-inline-share-buttons st-animated"
         style="z-index: 2;position: fixed;right: 65px;bottom: 42px;" id="st-1">
        <div class="st-btn st-first st-remove-label" data-network="sharethis" style="display: inline-block;">
            <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">

        </div>
        <div class="st-btn st-remove-label" data-network="email" style="display: inline-block;">
            <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">

        </div>
        <div class="st-btn st-remove-label" data-network="facebook" style="display: inline-block;">
            <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">

        </div>
        <div class="st-btn st-remove-label" data-network="twitter" style="display: inline-block;">
            <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">

        </div>
        <div class="st-btn st-last st-remove-label" data-network="linkedin" style="display: none;">
            <img alt="linkedin sharing button" src="https://platform-cdn.sharethis.com/img/linkedin.svg">

        </div>
    </div>
    <section class="banner-section">
        <div class="banner-overlay" style="width: 100%;height: 100%;position: absolute;z-index: 1;">
            <div class="overlay overlay-dark" style="background-color: rgba(0,0,0,.3);width: 100%;height: 100%;"></div>
        </div>
        <div class="banner-image"
             style="background-image:url('http://127.0.0.1:8000/assets/img/bg_incorporation.jpg');opacity:1;"></div>
        <h1 class="banner-text">
            Incorporation
        </h1>
    </section>
    <section class="entity">
        <h2 class="subtitle"><span class="tag">3</span>Types of Entities</h2>
        <div class="reason left">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="http://127.0.0.1:8000/assets/img/bg_BE_Type1.jpg" alt="bg_BE_Type1">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <h3>
                            <span class="tag">#1 Company or corporation, Company Limited by Shares or Limited Liability Company</span>
                        </h3>
                        <p class="true">
                            Most International entrepreneurs or companies entering the Taiwan market will set up a Limited
                            Liability Company. If you paid in capital will be great or if you are taking in outside
                            investors, you might choose Company Limited by Shares.
                        </p>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div class="reason right">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="http://127.0.0.1:8000/assets/img/bg_BE_Type2.jpg" alt="bg_BE_Type2">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <h3>
                            <span class="tag">#2 Branch office</span>
                        </h3>
                        <p class="true">
                            Branch offices are also profit-seeking. Entities registered as companies under foreign laws
                            should first apply for recognition as a foreign company and the establishment of the branch
                            office with the Central Region Office, MOEA
                        </p>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div class="reason left">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="http://127.0.0.1:8000/assets/img/bg_BE_Type3.jpg" alt="bg_BE_Type3">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <h3>
                            <span class="tag">#3 Representative office</span>
                        </h3>
                        <p class="true">
                            When foreign companies are unwilling to establish a company or branch in Taiwan and are
                            interested in appointing someone to represent the company in a legal capacity, the company may
                            report the said representative to the Central Region Office, MOEA.
                        </p>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </section>
    <section class="registration">
        <h2 class="subtitle">General Business Registration Process</h2>
        <div class="regis-process">
            <div class="process">STEP 1. Check the Company/ Business Enterprise Name</div>
            <div class="process-text">Apply for reservation of company name and business scope (Enterprise: Central Region
                Office, MOEA / Business firms: Local city or county government).
                <font style="font-weight:bold"><a title="online application" target="_blank"
                                                  href="https://onestop.nat.gov.tw/oss/web/Show/engWorkFlowEn.do">Click
                        Here</a> for online application</font>
            </div>
            <div class="process">STEP 2. Permission for Investment</div>
            <div class="process-text">Apply for Foreign Investment Approval (Please prepare the following documents to the
                MOEAIC: Investment Permission with Application Form A, Investor Certification, Power of Attorney
                etc.).<br><br>
                <font style="font-weight:bold">MOEAIC Contact Information :<br>Address : </font>
                8F, No. 7, Sec. 1, Jhongjheng District, Roosevelt Rd., Taipei City, Taiwan (R.O.C.)<br>
                <font style="font-weight:bold">Tel : </font>886-2-3343-5700
            </div>
            <div class="process">STEP 3. Approval of Investment Amount</div>
            <div class="process-text">Capital verification and Approval(Please prepare the following documents to the
                MOEAIC: Capital Approval with Advice of Inward Remittance, Foreign Exchange Memo, A Photocopy of the Company
                Deposit Passbook etc.).<br><br>
                <font style="font-weight:bold">MOEAIC Contact Information :<br>Address : </font>
                8F, No. 7, Sec. 1, Jhongjheng District, Roosevelt Rd., Taipei City, Taiwan (R.O.C.)<br>
                <font style="font-weight:bold">Tel : </font>886-2-3343-5700
            </div>
            <div class="process">STEP 4. Company/ Business Enterprise Registration</div>
            <div class="process-text">
                <font style="font-weight:bold">1. Company registration</font><br>
                (1) Paid-in capital of at least NT500 million: The Department of Commerce, MOEA.<br>
                (2) Paid-in capital of under NT500 million: Central Region Office, MOEA or Taipei City Government or
                Kaohsiung City Government or New Taipei City Government or Taichung City Government or Tainan City
                Government or Taoyuan City Government).<br>
                <font style="font-weight:bold">2. Business Enterprise registration</font><br>
                An investor setting up a business enterprise must apply for registration with the local county or city
                government. Parties applying for business registration should apply with their local country or city
                government ofﬁce.<br><br>
                <font style="font-weight:bold"><a title="online application" target="_blank"
                                                  href="https://onestop.nat.gov.tw/oss/web/Show/engWorkFlowEn.do">Click
                        Here</a> for online application</font>
            </div>
            <div class="process">STEP 5. Apply for Related Registration</div>
            <div class="process-text">Regarding Taxation Registration、Export/Import Business Registration, Factory
                Registration, and Application for Businesses Requiring Special Permission,
                <font style="font-weight:bold">please refers to <a title="Invest Taiwan" target="_blank"
                                                                   href="https://investtaiwan.nat.gov.tw/showPagengInvestmentStatus02?lang=eng&amp;search=InvestmentStatus02">Invest
                        Taiwan Website</a>.</font>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: none;"><img
            src="http://127.0.0.1:8000/assets/img/chevron-arrow-up.png" style="height:15px;width:15px;">
    </button>
    <footer>
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-2">
                        <form method="POST" action="http://127.0.0.1:8000/incorporation" accept-charset="UTF-8"
                              data-request="onSend"><input name="_session_key" type="hidden"
                                                           value="kHMPSRxWnXoAQEiSGKfKFAgNb7Rp6bkqByxeIR7b"><input
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



{{--    <iframe data-product="web_widget" title="No content" role="presentation" tabindex="-1" allow="microphone *"--}}
{{--            aria-hidden="true" src="about:blank"--}}
{{--            style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>--}}
    <div class="stripe-loading-indicator loaded">
        <div class="stripe"></div>
        <div class="stripe-loaded"></div>
    </div>
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
{{--    <div>--}}
{{--        <iframe title="開啟您可用於找到更多資訊的 Widget" id="launcher" tabindex="-1"--}}
{{--                style="color-scheme: light; width: 104px; height: 50px; padding: 0px; margin: 10px 20px; position: fixed; bottom: 30px; overflow: visible; opacity: 0; border: 0px; z-index: 999998; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1); transition-property: opacity, top, bottom; top: -9999px; visibility: hidden;"></iframe>--}}
{{--    </div>--}}
@endsection

@push('page_script')

@endPush
