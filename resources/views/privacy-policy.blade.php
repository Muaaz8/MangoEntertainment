<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
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
                                                    <h4 class="text-center">Mango Entertainment Inc. Community Guidelines</h4>
                                                        <ol>
                                                            <li>
                                                                To ensure we at Mango Entertainment provide a
                                                                premier
                                                                live-streaming platform for adults who cherish
                                                                gaming,
                                                                streaming, and competitive battles, we have to set
                                                                some
                                                                ground rules. Our platform marries the spontaneity
                                                                of
                                                                TikTok & BIGOLIVE to the depth of Twitch and the
                                                                social
                                                                engagement of Instagram.
                                                            </li>
                                                            <li>
                                                                We’re creators with an unrelenting drive to forge a
                                                                supportive environment that nurtures authentic self-
                                                                expression while fostering a friendly community
                                                                where
                                                                everyone can truly thrive. We celebrate the freedom
                                                                our
                                                                platform offers, but we’re fully committed to a
                                                                safe,
                                                                respectful, and inclusive environment.
                                                            </li>
                                                            <li>
                                                                This means every community member is required to
                                                                respect
                                                                the following.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Community Standards for Live
                                                            Streaming</h4>
                                                        <ol>
                                                            <li>
                                                                We’re a platform built to support a mature (21+)
                                                                audience,
                                                                and we understand the importance of balancing
                                                                freedom of
                                                                expression with the responsibility to remain lawful
                                                                and
                                                                respectful while online.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Acceptable Content and Behavior</h4>
                                                        <h5 class="text-center">Guidelines for Live Streaming Content</h5>
                                                        <ol>
                                                            <li>
                                                                Mango Entertainment Inc. allows the consumption of
                                                                alcohol and marijuana during live streams,
                                                                understanding
                                                                how responsible adult use of these substances can be
                                                                part of
                                                                our community’s lifestyle.
                                                            </li>
                                                            <li>
                                                                But it’s critical to note that promoting hard drugs,
                                                                like
                                                                cocaine or heroin, in addition to their
                                                                paraphernalia, is
                                                                strictly prohibited on this platform.
                                                            </li>
                                                            <li>
                                                                Our goal is to build and maintain a vibrant but safe
                                                                space,
                                                                where any adult can socialize and share content that
                                                                doesn’t
                                                                encourage illegal or harmful behavior.
                                                            </li>

                                                        </ol>
                                                        <h4 class="text-center">Prohibited Actions and Content</h4>
                                                        <h5 class="text-center">Prohibited Items and Symbols During Live Streams</h5>
                                                        <ol>
                                                            <li>
                                                                We enforce a strict no-nudity policy across all
                                                                streams.
                                                            </li>
                                                            <li>
                                                                Any form of partial or complete nudity, regardless
                                                                of
                                                                context, will force us to take immediate action
                                                                against the
                                                                offending account.
                                                            </li>
                                                            <li>
                                                                We also have a zero-tolerance policy for hate speech
                                                                and
                                                                bullying.
                                                            </li>
                                                            <li>
                                                                Symbols of hate, including but not limited to
                                                                confederate
                                                                flags, swastikas, or any attire that features such
                                                                or related
                                                                imagery or language, are absolutely forbidden on
                                                                this
                                                                platform.
                                                            </li>
                                                            <li>
                                                                Our platform is a space for building bridges as
                                                                mature
                                                                adults, not barriers.
                                                            </li>
                                                            <li>
                                                                Consequently, content that undermines this principle
                                                                via
                                                                discrimination, hatred, threats, or harassment has
                                                                no place
                                                                on our app.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Introduction to Mango Entertainment
                                                            Safety Measures</h4>
                                                        <ol>
                                                            <li>
                                                                At Mango Entertainment Inc., our priority is to
                                                                ensure a
                                                                secure and respectful environment for our adult user
                                                                base,
                                                                dedicated to live streaming, gaming, and competitive
                                                                battles.
                                                            </li>
                                                            <li>
                                                                As our community evolves, so do our efforts to
                                                                maintain a
                                                                safe space that respects individual expression while
                                                                upholding community welfare.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Detailed Guidelines on Sexual
                                                            Content and Harassment</h4>
                                                        <ol>
                                                            <li>
                                                                Mango Entertainment Inc. is committed to fostering
                                                                informative and respectful discussions around
                                                                sexuality and
                                                                health without crossing into inappropriate content:
                                                                <ul>
                                                                    <li>Explicit sexual content, or any material
                                                                        that aims to
                                                                        sexually arouse, is strictly banned.
                                                                    </li>
                                                                    <li>Discussions and content around sexuality
                                                                        must focus
                                                                        on education and health, devoid of explicit
                                                                        details or
                                                                        graphic representations.</li>
                                                                </ul>
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Mango’s Three-Strike System for
                                                            Policy Violations</h4>
                                                        <ol>
                                                            <li>We have a clear and structured system for handling
                                                                violations to ensure consistency and fairness:
                                                                <ul>
                                                                    <li>
                                                                        First Strike: Incurs a temporary suspension
                                                                        for 24
                                                                        hours as a warning to reevaluate behavior.
                                                                    </li>
                                                                    <li>
                                                                        Second Strike: Results in a longer
                                                                        suspension period
                                                                        of one week, allowing for significant
                                                                        reflection on
                                                                        community values.
                                                                    </li>
                                                                    <li>
                                                                        Third Violation: This leads to a permanent
                                                                        ban, as it
                                                                        indicates a fundamental mismatch with
                                                                        community
                                                                        standards and repeated disregard for our
                                                                        guidelines.
                                                                        You may appeal our decisions for a
                                                                        reevaluation, and we will
                                                                        provide our determination on a timely basis
                                                                        and after a thorough
                                                                        review.
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Sexual Harassment Policy Breakdown</h4>
                                                        <p class="m-2">
                                                            Mango Entertainment Inc. is a social media platform
                                                            designed as
                                                            a supportive community to uplift positive interaction.
                                                            With this
                                                            goal in mind, we have zero tolerance for sexual
                                                            harassment,
                                                            which includes but is not limited to:
                                                        <ol>
                                                            <li>
                                                                Unsolicited sexual advances or comments.
                                                            </li>
                                                            <li>
                                                                Distribution or display of sexual content without
                                                                consent.
                                                            </li>
                                                            <li>
                                                                Any interaction that could be perceived as coercive
                                                                or
                                                                invasive.
                                                            </li>
                                                            <li>
                                                                Similar to other violations, these actions will
                                                                trigger our
                                                                structured disciplinary measures to protect our
                                                                users.
                                                            </li>
                                                        </ol>
                                                        </p>
                                                        <h4 class="text-center">Monetization and Content Integrity
                                                        </h4>
                                                        <p class="m-2">To monetize content on Mango Entertainment
                                                            Inc., creators
                                                            must adhere strictly to our enhanced content guidelines:
                                                        </p>
                                                        <ol>
                                                            <li>
                                                                Content must be devoid of any forms of hate speech,
                                                                nudity, or endorsements of illegal activities.

                                                            </li>
                                                            <li>
                                                                Transparency with the audience regarding sponsored
                                                                content or advertisements is mandatory to maintain
                                                                trust
                                                                and integrity.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Interaction Protocols for a
                                                            Respectful Community</h4>
                                                        <p class="m-2">
                                                            Engagement on our platform should always be constructive
                                                            and
                                                            respectful, adhering to these protocols:
                                                        </p>
                                                        <ol>
                                                            <li>
                                                                Respectful dialogue is encouraged, and personal
                                                                attacks are
                                                                forbidden.
                                                            </li>
                                                            <li>
                                                                Privacy must be strictly respected; sharing of
                                                                personal data
                                                                without consent is prohibited.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Competitive Gaming Conduct </h4>
                                                        <p class="m-2">In our competitive gaming sections,
                                                            integrity and
                                                            sportsmanship are crucial:</p>
                                                        <ol>
                                                            <li>
                                                                All forms of cheating, use of unauthorized tools, or
                                                                bug exploitation are prohibited.
                                                                b. Respectful competition is expected—antagonistic
                                                                behavior or unsportsmanlike conduct will not be
                                                                tolerated.
                                                            </li>
                                                        </ol>
                                                        <p class="m-2">
                                                            By setting forth our community guidelines, Mango
                                                            Entertainment Inc. reaffirms its commitment to a mature,
                                                            inclusive, and respectful community. These guidelines
                                                            are
                                                            crafted to ensure that our platform remains a place
                                                            where adults
                                                            can safely and enjoyably explore their interests in
                                                            gaming and
                                                            live streaming within a framework that supports both
                                                            expression
                                                            and respect for all members.
                                                        </p>
                                                        <h4 class="text-center">Engaging Respectfully</h4>
                                                        <h5 class="text-center">How to Engage Respectfully on
                                                            Streaming Platforms</h5>
                                                        <ol>
                                                            <li>
                                                                A supportive and positive community requires mutual
                                                                respect at all times.
                                                            </li>
                                                            <li>
                                                                All users must refrain from using any language that
                                                                directly
                                                                attacks or demeans people based on race, ethnicity,
                                                                national
                                                                origin, gender, sexual orientation, gender identity,
                                                                religious
                                                                affiliation, age, disability, or serious diseases.
                                                            </li>
                                                            <li>
                                                                Recognizing and silencing hate speech while
                                                                understanding
                                                                the legal issues are the first steps every user
                                                                should take to
                                                                ensure interactions on our platform are welcoming
                                                                and
                                                                constructive.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Monetizing Content</h4>
                                                        <h5 class="text-center">Regulations for Monetizing Content
                                                            in Gaming Apps</h5>
                                                        <ol>
                                                            <p class="m-2">We strive to make our platform a hub
                                                                for enjoyment—but
                                                                also a fertile space for creators to earn from their
                                                                passions.
                                                                Adhering to the guidelines below will help your
                                                                content see
                                                                more engagement, and ensure eligibility for
                                                                monetization:</p>
                                                            <li>
                                                                Transparent Advertising: All sponsored content or
                                                                advertisements must be clearly marked and disclosed.
                                                                Creators should avoid deceptive practices that may
                                                                mislead viewers about the nature of their content.
                                                            </li>
                                                            <li>
                                                                Content Quality: Only high-quality and engaging
                                                                content adhering to our community standards will be
                                                                eligible for monetization. This means maintaining a
                                                                professional demeanor and ensuring all streamed
                                                                content offers real value to viewers.
                                                            </li>
                                                            <li>
                                                                Avoid Prohibited Content: Content containing or
                                                                promoting hate speech, nudity, or hard drugs is not
                                                                eligible for monetization.
                                                            </li>
                                                        </ol>

                                                        <h4 class="text-center">Safe and Respectful Interaction</h4>
                                                        <p class="m-2">Mango Entertainment Inc. emphasizes the
                                                            importance of
                                                            positive interactions between users. Here are some quick
                                                            pointers to help you engage respectfully on our
                                                            pioneering
                                                            platform:</p>
                                                        <ol>
                                                            <li>
                                                                Constructive Communication: Encourage constructive
                                                                feedback and open dialogue. Avoid aggressive tones
                                                                or derogatory comments that may create a harmful
                                                                experience for other people.
                                                            </li>
                                                            <li>
                                                                Respect Privacy: Do not share personal information
                                                                about other users without their explicit consent.
                                                                That
                                                                means no real names, no addresses, and no sensitive
                                                                data of any kind.
                                                            </li>
                                                            <li>
                                                                Report Misconduct: If you come across behavior that
                                                                violates our guidelines, please immediately report
                                                                it
                                                                using tools provided in our app. Our team will work
                                                                to
                                                                take swift action against any violators.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Prohibited Items and Symbols</h4>
                                                        <ol>
                                                            <p class="m-2">To ensure clarity on what constitutes
                                                                forbidden symbols or
                                                                items on our platform, double-check the following:
                                                                a. Hate Symbols: Swastikas, Confederate flags, and
                                                                any
                                                                other icons associated with hate groups are
                                                                absolutely
                                                                not allowed.</p>
                                                            <li>
                                                                Offensive Language: Clothing or props containing
                                                                offensive or derogatory language are prohibited.
                                                            </li>
                                                            <li>
                                                                Weaponry: Displaying weapons or items that could be
                                                                interpreted as weapons during live streams is not
                                                                allowed unless they are clearly part of a game or
                                                                theatrical performance.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Ensuring a Positive Environment in
                                                            Competitive Gaming Platforms</h4>
                                                        <p class="m-2">Competitive gaming platforms can get
                                                            really intense, but
                                                            it’s crucial to support a positive and inclusive
                                                            atmosphere at
                                                            all times:</p>
                                                        <ol>
                                                            <li>
                                                                Fair Play: Cheating, exploiting bugs, or using
                                                                unauthorized tools in games is strictly prohibited.
                                                                Fair
                                                                play is critical to ensuring a level playing field
                                                                for all
                                                                participants.
                                                            </li>
                                                            <li>
                                                                Sportsmanship: We expect all players to exhibit good
                                                                sportsmanship. This means congratulating winners,
                                                                accepting losses with grace, and respecting your
                                                                fellow competitors.
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-center">Community Standards for Adult
                                                            Streaming</h4>
                                                        <ol>
                                                            <p class="m-2">
                                                                We cater to a mature audience, but it’s important to
                                                                strike a
                                                                fair balance between freedom of expression and
                                                                community
                                                                comfort:
                                                            </p>
                                                            <li>
                                                                Content Boundaries: Explicit adult content is not
                                                                permitted. Every creator should keep their streams
                                                                within the bounds of good taste and legal standards.
                                                            </li>
                                                            <li>
                                                                Age Verification: All users participating in
                                                                adultthemed streams need to have their age verified
                                                                through
                                                                our system to ensure total compliance with legal age
                                                                restrictions.
                                                            </li>
                                                        </ol>
                                                        <b class="m-2">Our community members may enjoy a safe,
                                                            respectful, and
                                                            rewarding experience on Mango Entertainment Inc.’s
                                                            platform
                                                            by adhering to our guidelines. We’re excited to see the
                                                            creative
                                                            and engaging content our users will produce within these
                                                            reasonable and mature frameworks.</b>
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
