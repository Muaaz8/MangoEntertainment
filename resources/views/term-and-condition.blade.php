<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms And Conditions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/stylelist.css') }}">
</head>

<body>
    <div class="single-section">
        <div class="single-header">
            <div class="container-fluid">
                <div class="row align-item-center">
                    <div class="col-xl-3 col-md-3">
                        <div class="single-main-logo">
                            <a href="#"><img src="./img/Mango Entertainment-logo-blue.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="single-sec-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">PC Live</a></li>
                                <li><a href="#">App</a></li>
                                <li><a href="#">Recharge</a></li>
                                <li><a href="#">Mango Ent Store</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @if (Session::has('user'))
                                    <div class="single-login-button">
                                        {{-- <button onclick="window.location.href='{{ url('/joinStream') }}'">Join Stream</button>
                                    <button onclick="window.location.href='{{ url('/stream') }}'">Start Stream</button> --}}
                                        <button onclick="window.location.href='{{ url('/') }}'"> Dashboard
                                        </button>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <button id="logout-button">Sign Out</button>
                                    </div>
                                @else
                                    <div class="single-login-button">
                                        <button onclick="window.location.href='{{ route('signin') }}'">
                                            Log in
                                        </button>

                                        @if (Route::has('register'))
                                            <button onclick="window.location.href='{{ route('signup') }}'">
                                                Register
                                            </button>
                                        @endif
                                    </div>
                                @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="tab-section">
        <div class="">
            <div class="row mt-4 m-0">
                <div class="col-xl-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-global" role="tabpanel"
                            aria-labelledby="nav-global-tab" tabindex="0">
                            <div class="global-content">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 mt-5 p-0">

                                        <div>
                                            <div class="border border-5 border-black m-0 p-3 row">
                                                <div>
                                                    <h4 class="text-center">Mango Entertainment TERMS OF SERVICE</h4>
                                                    <h5 class="text-center">Last Updated:June 15, 2023</h5>
                                                    <p class="m-2">
                                                        IMPORTANT – please read Mango Entertainment Terms of Service (these “Terms”)
                                                        carefully before using the Mango Entertainment mobile application service
                                                        (the“Service”), as they form a legally binding contract between you and Mango
                                                        Entertainment (the “Company” or “we” or “us”). In order to use Mango Entertainment
                                                        or any other products or services provided by the Company, you are required to consent
                                                        to Terms and Mango Entertainment Privacy Policy, both of which are presented to you (i) when
                                                        you first open our app and (ii) when we make any material changes thereto. If you do not accept
                                                        these Terms or our Privacy Policy, please do not use the Service and contact us immediately to
                                                        terminate your account, whether as a guest or a registered user.
                                                    </p>
                                                    <ol>
                                                        <h4 class="text-center">General Terms & Conditions</h4>
                                                        <ol>
                                                            <li>
                                                                Changes to These Terms. We may change these Terms at any time,
                                                                if we do, we will make our best efforts to notify you beforehand,
                                                                despite this may not always be possible. If we should revise these Terms,
                                                                your continued use of the Service after such revision will be deemed as
                                                                your agreement to such revised Terms. If you do not agree to any of
                                                                these Terms, please delete your account immediately, which shall terminate
                                                                these Terms accordingly.
                                                            </li>
                                                            <li>
                                                                Additional Agreements & Terms. Your access to and use of the Service is also
                                                                subject to our Privacy Policy, Community Policy and our other Policies (collectively,
                                                                “Additional Agreements”), which can be found directly in the App and the Mango
                                                                Entertainmentwebsite (https://www.mangoentertainment.com).
                                                            </li>
                                                            <li>
                                                                User Eligibility. The Service is restricted for any person under the age of 18 or
                                                                for any users previously removed or banned from the Service by us, whether as a
                                                                guest user or a registered user. By using the Service, you state that:
                                                                <ul>
                                                                    <li>
                                                                        you are eligible to legally enter a binding contract with LMango Entertainment;
                                                                    </li>
                                                                    <li>
                                                                        you are not a person barred from receiving the Service under the laws of the United States,
                                                                        the United Kingdom, or any other applicable jurisdiction;
                                                                    </li>
                                                                    <li>
                                                                        you will comply with these Terms and all applicable local, state, national, and international laws, rules, and regulations.
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ol>
                                                        <p class="m-2">
                                                            If you are using the Service on behalf of a business or other entity, you state that you are authorized to grant all
                                                            licences set out in these Terms and to agree to these Terms on behalf of the business or entity.
                                                        </p>
                                                        <p class="m-2">
                                                            IF YOU ARE UNDER EIGHTEEN (18) YEARS OF AGE, AS REQUIRED BY LAW, YOU ARE PROHIBITED FROM USING
                                                            THE SERVICE, AND MUST TERMINATE YOUR ACCOUNT AND DELETE THE APP IMMEDIATELY IF ALREADY INSTALLED.
                                                        </p>
                                                        <ol>
                                                            <li>
                                                                Mobile Service. The Service is accessible via mobile phone, tablet or other wireless device
                                                                (collectively, “Mobile Service”) and your use of the Mobile Service constitutes your acknowledgement
                                                                and acceptance of your mobile carrier’s normal messaging, data, and other rates and fees, which may apply.
                                                                You are solely responsible for verifying with your mobile carrier as to whether the Mobile Service are available
                                                                for your mobile device(s), and what restrictions or additional cost, if any, may be applicable to your use thereof.
                                                            </li>
                                                            <li>
                                                                Licence. The Company grants you a personal, worldwide, royalty-free, non-assignable, non-exclusive, revocable, and non-sublicensable licence to access and use the Service. This licence serves the sole purpose of enabling you to use and enjoy the benefit of the Service in the manner permitted by these Terms. You must not copy, modify, distribute, sell, or lease any part of our Service, nor may you reverse engineer or attempt to extract the source code of the software, unless you have our written permission to do so.
                                                            </li>
                                                            <li>
                                                                Company Trademarks; Copyrights. You must respect the rights of the Company, and its affiliates. These Terms do not grant you any right (or to enable anyone else) to do any of the following: (i) use branding, logos, designs, photographs, videos, or any other materials used in our Service; (ii) copy, archive, download, upload, distribute, syndicate, broadcast, perform, display, make available, or otherwise use any portion of the Service or the content on the Service except as authorized in these Terms; (iii) use the Service, any tools provided by the Service, or any content on the Service for any commercial purposes without our consent.
                                                            </li>
                                                            <li>
                                                                No Transfer or Assignment. You may not transfer or assign the Service, these Terms, and/or any rights or obligations hereunder without our prior written consent.
                                                            </li>
                                                            <li>
                                                                Termination for Breach. If you breach any obligations under these Terms and any Additional Agreements, we may terminate your account and confiscate any Virtual Items therein. For clarity, if we determine (i) you obtained Virtual Items through improper, fraudulent or injurious methods or had participated in or was involved in fraudulent activities that may harm the interest of Mango Entertainmentor any user on Mango Entertainment, including but not limited to, involved in credit card fraud, unauthorized use of credit card, profit from Mango Entertainment system bugs, participate in hacker attack; or (ii) any of your broadcasting or comments text, photographs, sound recordings and private communications in violation of the applicable laws, regulations, community policies, General Contest Rules or Terms of Use (including but not limited to racist, xenophobic, revisionist, obscene, pornographic, offensive, abusive, libellous, slanderous or of prejudice in any way to the honour or reputation of any third party, incite people to discrimination, hatred, violence, to commit a crime or offence or to consume illegal substances) or tarnish the reputation of L brands or staff, we may ban your account or device ID, confiscate any and all Coins and Gifts in your account immediately with or without prior notice. We reserve the right to pursue civil and criminal charges and penalties in such cases.
                                                            </li>
                                                            <li>
                                                                Reservation of Rights. The Company reserves all rights not expressly granted to you in this Section 1. Accordingly, nothing in these Terms or on the Service will be construed as granting to you, by implication, estoppel, or otherwise, any additional licence rights in and to the Service or any Company Content (defined below) or trademarks located or displayed therein.
                                                            </li>
                                                        </ol>

                                                    </ol>
                                                    <h4 class="text-center">User Accounts.</h4>
                                                    <ol>
                                                        <li>
                                                            Account Creation. In order to access the full benefits of the Service, you will have to create a mangoentertainment account. You may never use another's account without permission. When creating your account, you must provide accurate and complete information. You are solely responsible for the activity that occurs in your account, including but not limited to safeguarding your password and/or credentials used to access the Service, as well as any activities that occur through your use of such password and credentials. You are responsible for the secure use of your account. If you suspect or know of any unauthorized use of your log-in credentials or any other breach of security with respect to your account, please notify the Company immediately at: prosa@mangoentertainment.com
                                                        </li>
                                                        <li>
                                                            Terms of Service; Users. All users of the Service who view and/or transmit User Content (defined below) are referred to herein collectively as “Users.”
                                                        </li>
                                                        <li>
                                                            Content Publicity. The Service enables Users to create, transmit, and view live-streaming audiovisual content (the “Broadcast Content”). Meanwhile all User activities in the Service, including the broadcasting of and commenting on any Broadcast Content, are publicly available. Hence User discretion is recommended as the User is solely responsible for its activities within the Service.
                                                        </li>
                                                    </ol>
                                                    <h4 class="text-center">User Content</h4>
                                                    <ol>
                                                        <li>
                                                            Definitions. As used in these Terms, “User Content” means any content, whether displayed publicly or not, that Users upload, post, or transmit (collectively, “Post”) to or through the Service, including but not limited to, any Broadcast Content, comments text, photographs, sound recordings and private communications, excluding any and all “Company Content,” which is defined as content that the Company provides to Users in or via the Service, including without limitation, any text, graphics, photos, software, and interactive features.
                                                        </li>
                                                        <li>
                                                            No User Content Screening. Users have the ability to Post User Content to, or transmit through the Service. While we endeavor for all User Content to comply with our Community Guidelines (available for viewing on the App), we do not pre-screen any User Content submitted or publicly Posted by any User. We do however have the right, to delete, disallow, or temporarily block any User Content that (i) we consider to be in violation of these Terms, our Community Guidelines, or any applicable laws and regulations, or (ii) in response to any complaint(s) from other Users, with or without notice. The Company does not guarantee the accuracy, integrity, truthfulness, appropriateness or quality of any User Content, and any use or reliance by you on any User Content is at your own risk and Company shall not be held liable for such User Content under any circumstance.
                                                        </li>
                                                        <li>
                                                            User Content Ownership; License. You are the owner and retain the rights to the User Content posted and displayed in and through the Service by you, but you grant us a worldwide, assignable, sublicensable, royalty-free licence to reproduce, distribute, publicly display, transmit, communicate to the public, make available, create derivative works from, and otherwise exploit and use all User Content you Post to or through the Service by any means and through any media and formats now known or hereafter developed, for the purposes of (i) advertising, marketing, and promoting the Company and the Service; (ii) displaying and sharing your User Content to other Users of the Service; and (iii) providing the Service as authorized by these Terms. If you terminate your account or remove any of your User Content from the Service after it has been Posted, your licence grant with respect to your User Content is perpetual and irrevocable. You further grant us and our affiliates and business partners an unrestricted, worldwide, royalty-free licence and right to use your user name, image, voice, and likeness to identify you as the source of any of your User Content. You must not post any User Content in or through the Service or transmit to us any User Content that you consider to be confidential or proprietary. Any User Content posted by you to or through the Service or otherwise transmitted to us will be considered non-confidential and non-proprietary, and treated as such by us, and may be used by the Company in accordance with these Terms without notice to you and without any liability to the Company. For the avoidance of doubt, the rights granted of this Section include, but not limited to, the right to reproduce your User Content on a royalty-free basis. This means that you are granting the Company the right to use your User Content without the obligation to pay royalties to you or any third party involved in the creation of your User Content.
                                                        </li>
                                                        <li>
                                                            Third Party Products and Services. The Service may also contain advertisements and promotions offered by third party. Upon accessing and using the Service, you agree that we, our affiliates, and our third-party partners may place advertising and promotions in the Service, including personalized advertising based upon the information you provide, or we collect or obtain from you. If you choose to use service that are displayed on mangoentertainment provided by a third party, you agree to comply with the third party’s terms of service and privacy policy. We cannot guarantee the security, accuracy, validity of third-party services and we are not responsible or liable for losses incurred by you arising from services, products, behaviors of a third party. In particular, you agree to be bound by terms of service of Youtube if you find videos across youtube.com and feature them in mangoentertainment. You may refer to https://www.youtube.com/t/terms for more details of the terms of service of YouTube.
                                                        </li>
                                                        <li>
                                                            User Content Restrictions. By Posting User Content to the Service, you must abide by the following restrictions: (i) you must own the User Content Posted by you in or through the Service or otherwise have the right to grant the licence set forth in these Terms; (ii) the Posting and Use of your User Content in or through the Service must not violate the privacy rights, publicity rights, copyrights, contract rights, intellectual property rights, or any other rights of any person or entity; (iii) the Posting of your User Content in the Service must not require us to obtain any further licences from any third party or pay any royalties, fees, compensation or other amounts or provide any attribution to any third parties; and (iv) the Posting of your User Content on the Service must not result in a breach of contract between you and a third party, nor will it be in violation of any applicable law or regulations.
                                                        </li>
                                                        <li>
                                                            Waiver of Rights to Inspect or Review User Content. By Posting User Content to or through the Service, you waive any rights to prior inspection or approval of any marketing or promotional materials related to such User Content. You also waive any and all rights of privacy, publicity, or any other rights of a similar nature in connection with your User Content, or any portion thereof. To the extent any moral rights are not transferable or assignable, you hereby waive and agree never to assert any and all moral rights, or to support, maintain or permit any action based on any moral rights that you may have in or with respect to any User Content you post to or through the Service.
                                                        </li>
                                                        <li>
                                                            User Comments. If you submit or post your User Content on or through the Service, such content may be distributed, viewed, accessed and commented by other Users and we will not be held liable for any unauthorized use of User Content or comment thereon by any User, under any circumstance.
                                                        </li>
                                                        <li>
                                                            Prohibited Content. You are prohibited from Posting any User Content to the Service considered to be “Prohibited Content” as determined solely by us, which includes without limitation:
                                                            <ul>
                                                                <li>
                                                                    Sexually Explicit Material (i.e. pornographic or erotic content, including icons, titles, or descriptions). We have a zero-tolerance policy against child sexual abuse imagery. If we become aware of any User Content containing any child sexual abuse imagery, we will report it to the appropriate authorities immediately and delete the submitting User Accounts; and
                                                                </li>
                                                                <li>
                                                                    Violence and Bullying (i.e. User Content may not contain materials that threaten, harass or bully other Users or third parties, including depictions of violence, gratuitous or otherwise, to any person place or property, or inciting violence, including suicide); and
                                                                </li>
                                                                <li>
                                                                    Hate Speech (i.e. User Content may not promote bigotry, discrimination, hatred, intolerance, racism, or target against any person or groups of persons based on their race or ethnic origin, religion, disability, gender, age, nationality, veteran status, sexual orientation, or gender identity); and
                                                                </li>
                                                                <li>
                                                                    Sensitive Events (i.e. User Content which may be deemed as capitalizing on or lacking reasonable sensitivity towards a natural disaster, atrocity, conflict, death, or other tragic events are not permitted); and
                                                                </li>
                                                                <li>
                                                                    Unlawful Activity (i.e. use of the Service for any illegal or unlawful purpose, including without limitation, stalking and sexually exploiting any User); and
                                                                </li>
                                                                <li>
                                                                    IP Infringement (i.e. User Content which infringes upon any third party’s rights, including copyright, trademark, privacy and publicity rights).
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            Company Action. We have the right to remove and/or refuse to post or exhibit publicly any User Content, which we determine to be Prohibited Content. We also have the right to take any action(s) we deem necessary and/or appropriate against any User who posts Prohibited Content on the Service, including, but not limited to, warning the User, suspending or terminating the User’s Account, removing all of the User’s User Content posted on the Service and/or reporting the User to law enforcement authorities. We also have the right to access, read, preserve, and disclose any information or take any other legal action that we reasonably believe is necessary to (i) satisfy any applicable law, regulation, legal process or governmental request, (ii) enforce these Terms, (iii) detect, prevent, or otherwise address fraud, security or technical issues, (iv) respond to user support requests, or (v) protect the rights, property or safety of the Users and the public. Notwithstanding the foregoing, we do not disclose personally identifying information to third parties except in accordance with our Privacy Policy (as further described below). If you Post any Prohibited Content, you are responsible for defending any third party claims which may be raised against you arising from your posting of such Prohibited Content.
                                                        </li>
                                                    </ol>
                                                    <h4 class="text-center">Privacy</h4>
                                                    <p class="m-2">
                                                        Our Privacy Policy details how we handle your information when you use the Service and can be found at http://mangoentertainment.com/privacy-policy. Please read our Privacy Policy carefully, by accepting it, you agree that your information may be collected and processed and/or transferred outside of the country you reside, including to countries that may not have the same data-protection laws as your residing country.
                                                    </p>
                                                    <h4 class="text-center">Copyright Infringement</h4>
                                                    <p class="m-2">We strictly abide by Copyright Law, and we expect our Users to do the same. We therefore take precautions to expeditiously remove from our Service any infringing material that we become aware of. Furthermore, if we become aware that a User has repeatedly infringed copyrights, we will take action to terminate the User’s account.
                                                    If you believe that anything in the Service infringes a copyright that you own or are entitled to, you can report the suspected infringement by filing a notice with our designated Copyright Agent at:
                                                    </p>
                                                    <p class="m-2">
                                                    Email:prosa@mangoentertainment.com
                                                    If you file a notice with our Copyright Agent, it must:
                                                    </p>
                                                    <ol>
                                                        <li>
                                                            Contain the physical or electronic signature of you as the Copyright owner. If you are acting on behalf of the Copyright owner, please provide both yours and the Copyright owner’s signature;
                                                        </li>
                                                        <li>
                                                            Identify the material claimed to be infringed;
                                                        </li>
                                                        <li>
                                                            Identify the material claimed to be infringing or to be the subject of the infringing activity with sufficient information for us to locate the material;
                                                        </li>
                                                        <li>
                                                            Provide your contact information including your address, telephone number, and email address;
                                                        </li>
                                                        <li>
                                                            Provide a personal statement stating that you firmly believe that the use of the material you file notice for, is not authorized by the copyright owner, its agent, or any applicable law or regulations;
                                                        </li>
                                                        <li>
                                                            Provide a statement, made under penalty of perjury, that the above information in the notification is accurate, and that you are the copyright owner or are authorized to act on behalf of the owner.
                                                        </li>
                                                    </ol>
                                                    <h4 class="text-center">Features of the Service - Virtual Items</h4>
                                                    <ol>
                                                        <li>
                                                            The Service offers a feature allowing users to purchase (a) virtual currency (non-convertible, no cash value, non-refundable), including but not limited to virtual coins (“Coins”) for use in the Service; or (b) virtual in-Service items (“Gifts”). Any Coins and/or Gifts that are credited to Users within the Service are converted to Virtual “Diamonds” in the receiving User’s User account. Virtual Coins, together with Gifts and Diamonds, are hereafter collectively referred to as “Virtual Items”. <strong>The purchase of any Virtual Items must be made lawfully, via legitimate means with actual currency. Any Virtual Items obtained illegally or fraudulently will result in suspension, freezing or termination of User account.</strong> Notwithstanding your purchase or possession of such Virtual Items, you do not in fact 'own' the Virtual Items, and the amount of any Virtual Item does not refer to any credit balance of real currency or its equivalent. Rather, the Company grants you a limited licence to use the Service, including software programs that may manifest themselves as these items.
                                                        </li>
                                                        <li>
                                                            While using the Service and Virtual Items, you may send Gifts to other Users, which may result in revenue to such recipient User’s account (the “Transfer”). The Transfer is made solely at your discretion. Once a Transfer is made, it cannot be undone and the Virtual Item cannot be withdrawn or refunded. The Company does not guarantee that the amount or virtual value of the Virtual Items you may give a User will correlate to the revenue such User may receive when they cash out .
                                                        </li>
                                                        <li>
                                                            The purchase of Virtual Items in the Service is deemed completed upon the Company's confirmation of electronic payment from you via iTunes App Store or Google Play Store. Any virtual currency (non-convertible) balance shown in your User Account does not represent or reflect any currency value, but instead represents a measurement to the extent of your ability to use the Virtual Items within the Service. You will not be able to sell Virtual Items in exchange for virtual or real currency credited back to your User Account, nor will you be able to receive a refund of virtual or real currency for Virtual Items upon the suspension or termination of your account.
                                                        </li>
                                                        <li>
                                                            The value of Virtual Items within the Service is determined at the Company’s sole discretion. The Company has the right to adjust the purchase exchange rate between actual currency and Virtual Items (the “Exchange Rate”) at any time in any applicable region, and does not guarantee that the price of Virtual Items or the Exchange Rate be the same in different regions. By your use of the Service, you confirm your understanding of and agree to accept the then-current Exchange Rate of any Virtual Item at the time of your purchase.
                                                        </li>
                                                        <li>
                                                            By using the Service, you agree that your use of any purchased Virtual Items shall be solely for legitimate purposes within the Service, and that such use will comply with all applicable laws and regulations, platform policies and community guidelines at all times.
                                                        </li>
                                                        <li>
                                                            By using the Service and Virtual Items, you confirm your understanding that the Virtual Items are for sale products offered within the Service and should be purchased with actual currency. If you disagree with or do not fully understand our policy, do not purchase or use any Virtual Items in connection with the Service and do not engage in the Service in any way.
                                                        </li>
                                                        <li>
                                                            By your use of the Service and particularly Virtual Items, you confirm your understanding that we may change, modify or update these Terms, or the terms of sale in connection with the Virtual Items from time to time, and that such revised terms will apply to all subsequent purchases of any Virtual Items, and you agree that you have reviewed and agreed to these Terms and any terms regarding the sale of Virtual Items prior to making any purchase.
                                                        </li>
                                                        <li>
                                                            In the event your account balance is incorrect due to system maintenance or other technical failures as determined solely by us, we agree to make all necessary corrections and adjustments with respect to your account balance. If you have any questions, concerns or suggestions regarding purchases and/or payments regarding the Service, you may contact us at prosa@mangoentertainment.com.
                                                        </li>
                                                        <li>
                                                            User Inactivity. If your account remains inactive for six (6) consecutive months, all of your Virtual Items may be frozen. To unfreeze any such Virtual Items, you must email us at prosa@mangoentertainment.com and request that we unfreeze your account. Upon receipt of your request and review of your information, we will unfreeze your Virtual items within three (3) business days.
                                                        </li>
                                                    </ol>
                                                    <h4 class="text-center">Confiscation of Virtual Items Due to Termination or Fraud</h4>
                                                    <ol>
                                                        <li>
                                                            IMPORTANT: We take fraud extremely seriously. In addition to taking all applicable and necessary legal actions, we have the right to permanently confiscate any Virtual Items from any User Account that we determine were purchased or acquired using fraudulent measures; which includes but not limited to confiscation of any Gifts received by you from another User in which such Gifts were purchased fraudulently. In the event we determine that the Virtual Items in your possession were fraudulently purchased, we will notify you prior to confiscation and allow you an opportunity to make an appeal via the App.
                                                        </li>
                                                        <li>
                                                            If we terminate your account for fraud, any outstanding Virtual Items remaining in your account at the time of termination may be irrevocably confiscated, in accordance with our Account Termination Policy specified below.
                                                        </li>
                                                    </ol>
                                                    <h4 class="text-center">Indemnification</h4>
                                                    <p class="m-2">
                                                        By using the Service, you agree to the extent permitted by law, to indemnify, defend and hold harmless Mango entertainment and all our affiliates, directors, officers, stockholders, employees, licensors, suppliers, and agents from and against any complaints, charges, claims, damages, losses, costs, liabilities and expenses (including attorneys’ fees) due to, arising out of, or related in any way to: (a) your access to or use of the Service; (b) your User content; and (c) your breach of these Terms.
                                                    </p>
                                                    <h4 class="text-center">Third Party Disputes</h4>
                                                    <p class="m-2">
                                                        To the fullest extent permitted by law, any dispute you have with any third party arising out of or related to your use of the Service, including but not limited to, any carrier, copyright owner or other user, is solely between you and such third party, and you agree to release the Company from any and all claims, demands and damages (actual and consequential) of any kind or nature, known and unknown, arising out of or in any way connected with such disputes.
                                                    </p>
                                                    <h4 class="text-center">Miscellaneous</h4>
                                                    <ol>
                                                        <li>
                                                            The Terms constitute the entire Terms of Service agreement between you and the Company and supersede all prior agreements.
                                                        </li>
                                                        <li>
                                                            These Terms will inure to the benefit of our successors and assigned third parties. We reserve all rights that are not expressly granted to you in this Terms of Service agreement. You may not assign these Terms or any of the rights or licences granted to any third party, directly or indirectly, without our prior written consent. We may assign these Terms or any of the rights or obligations, to any third party without providing prior notice to you. The rights that the Company is entitled to but not specified in the Term, are not considered waivers. If any provision is deemed null and void by applicable law, the rest of the Terms remain in force.
                                                        </li>
                                                        <li>
                                                            You agree that no joint venture, partnership, employment, or agency relationship exists between you and us as a result of these Terms or your use of the Service.
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<!-- top-streams-swiper--START -->
</body>

</html>
