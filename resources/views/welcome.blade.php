<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
### ?????? API

<br/>
<div class="content"><br/>
    <h1>PHP Annotated ??? June 2022</h1>
    <div class="post-info"><br/>
        <img src="https://secure.gravatar.com/avatar/269798998e24876e4f3ea6f6d1effdc7?s=200&amp;r=g" width="200"
             height="200" alt="Roman Pronskiy" loading="lazy"
             class="avatar avatar-200 wp-user-avatar wp-user-avatar-200 photo avatar-default"><br/>
        <div class="post-info__text"><br/> <a href="https://blog.jetbrains.com/author/rpronskiy">Roman Pronskiy</a>
            <br/>
            <time class="publish-date" data-year="2022" data-month="06" data-day="16"
                  datetime="2022-06-16"></time>
            <br/></div>
        <br/>
    </div>
    <br/>
    <div id="ez-toc-container" class="ez-toc-v2_0_17 counter-hierarchy ez-toc-transparent"><br/>
        <div class="ez-toc-title-container"><br/>
            <p class="ez-toc-title">Table of Contents</p><br/><span class="ez-toc-title-toggle"><a
                    class="ez-toc-pull-right ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle"
                    style="display: none;"><i class="ez-toc-glyphicon ez-toc-icon-toggle"></i></a></span>
        </div>
        <br/>
        <nav>
            <ul class="ez-toc-list ez-toc-list-level-1">
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-1" href="#News"
                                                                    title="News">News</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-2"
                                                                    href="#PHP_Core" title="PHP Core">PHP Core</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-3" href="#Tools"
                                                                    title="Tools">Tools</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-4"
                                                                    href="#PhpStorm" title="PhpStorm">PhpStorm</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-5" href="#Symfony"
                                                                    title="Symfony">Symfony</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-6" href="#Laravel"
                                                                    title="Laravel">Laravel</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-7" href="#Misc"
                                                                    title="Misc">Misc</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-8"
                                                                    href="#Community" title="Community">Community</a>
                </li>
            </ul>
        </nav>
    </div>
    <br/>
    <p><a href="https://blog.jetbrains.com/phpstorm/2022/06/php-annotated-june-2022/"> <img class="alignnone
            size-full"
                                                                                            src="https://blog.jetbrains.com/wp-content/uploads/2022/06/php-annotated-blog-featured-image-1280x600-1.png"
                                                                                            alt="PHP Annotated Monthly"
                                                                                            width="900"></a></p><br/>
    <p>Greetings everyone!</p><br/>
    <p>Welcome to the June installment of PHP Annotated, where we???ll catch up on the most interesting things that have
        happened in the PHP world over the last month, including curated news, articles, tools, and videos.</p><br/>
    <blockquote>
        <p><br/> Kudos to <a href="https://twitter.com/s_panteleev">Sergey Panteleev</a> for helping compile the June
            edition of PHP Annotated.</p>
    </blockquote>
    <br/>
    <p><span id="more-257207"></span></p><br/>
    <style>
        img.alignico {
            margin-right: 10px;
            margin-top: 5px;
            float: left;
        }

        main ul:not([class]):not([id]) li,
        main .article-section .content ul:not([class]):not([id]) > li {
            padding-bottom: 18px;
        }

        summary {
            display: list-item;
            cursor: pointer;
            font-style: italic;
        }

        main ul:not([class]):not([id]) li,
        main .article-section .content ul:not([class]):not([id]) > li ul li {
            padding-bottom: 0;
        }
    </style>
    <br/>
    <h2 id="news"><span class="ez-toc-section" id="News"></span>News<span class="ez-toc-section-end"></span></h2><br/>
    <ul><br/>
        <li><strong><a href="https://www.php.net/">php.net </a> received a new homepage design!</strong>
            <br><br/>Thanks to Lucas Azevedo and the team for the refreshing look.
        </li>
        <br/>
        <li><strong>???<a href="https://www.php.net/archive/2022.php#2022-06-09-1">PHP 7.4.30</a>, <a
                    href="https://www.php.net/archive/2022.php#2022-06-09-4"> <strong>PHP
                        8.0.20</strong></a><strong>, and </strong><a
                    href="https://www.php.net/archive/2022.php#2022-06-09-2">PHP 8.1.7</a> have been
                released</strong> <br><br/>This is a security update to the supported branches. All users are
            encouraged to upgrade to the latest version.
        </li>
        <br/>
        <li><strong><a href="https://www.php.net/archive/2022.php#2022-06-09-3">PHP 8.2.0 Alpha 1</a> has been
                released</strong> <br><br/>The first alpha has been released, kicking off the PHP 8.2
            release process. Updates will be released every two weeks on a <a
                href="https://wiki.php.net/todo/php82#timetable">defined schedule</a> with the final
            release expected around November 24.<br/>
            <p>A feature freeze is expected on July 19, meaning some changes might still make it into
                the release. The most notable changes at the moment are as follows:</p><br/>
            <ul><br/>
                <li><a href="https://php.watch/versions/8.2/readonly-classes">readonly Classes</a>
                </li>
                <br/>
                <li><a href="https://php.watch/versions/8.2/true-type"> <code>true</code></a><a
                        href="https://php.watch/versions/8.2/true-type"> type</a></li>
                <br/>
                <li><a href="https://php.watch/versions/8.2/null-false-types">Allow </a> <a
                        href="https://php.watch/versions/8.2/null-false-types">
                        <code>null</code></a><a href="https://php.watch/versions/8.2/null-false-types"> and </a> <a
                        href="https://php.watch/versions/8.2/null-false-types">
                        <code>false</code></a><a href="https://php.watch/versions/8.2/null-false-types"> as standalone
                        types</a></li>
                <br/>
                <li><a href="https://php.watch/versions/8.2/backtrace-parameter-redaction">Sensitive
                        Parameter value redaction support</a></li>
                <br/>
                <li><a href="https://php.watch/versions/8.2/dynamic-properties-deprecated">Dynamic
                        Properties are deprecated</a></li>
                <br/>
                <li><a href="https://php.watch/versions/8.2/partially-supported-callable-deprecation">Partially-supported
                        callable are deprecated</a></li>
                <br/>
                <li><a href="https://php.watch/versions/8.2/$%7Bvar%7D-string-interpolation-deprecated">
                        <code>${var}</code></a><a
                        href="https://php.watch/versions/8.2/$%7Bvar%7D-string-interpolation-deprecated">
                        string interpolation deprecated</a></li>
                <br/>
            </ul>
            <br/>
            <p>For a complete list of changes, see <a href="https://php.watch/versions/8.2">php.watch/versions/8.2 </a>.
            </p> <br/>
            <p>If you are on Mac, you can try PHP 8.2 with homebrew via the Nightly channel thanks
                to <a href="https://github.com/shivammathur/homebrew-php">shivammathur/homebrew-php
                </a>. </p> <br/>
            <p>Otherwise, <a href="https://hub.docker.com/_/php?tab=tags&amp;page=1&amp;name=8.2.0">Docker
                    images</a> are probably the best option to try it with no hassle.</p>
        </li>
        <br/>
        <li><strong><a href="https://github.com/php-fig/per-coding-style">PER Coding Style</a> has been tagged
                1.0.0</strong> <br><br/>PER Coding Style 1.0.0 is the same as PSR-12. This recommendation
            will now evolve much faster to keep up with all the new features that we???re getting in the
            PHP language.<br><br/>Congratulations to the whole working group!<br/>
            <blockquote class="twitter-tweet"><br/>
                <p lang="en" dir="ltr">If you don???t know what a PER is, it???s similar to a PSR but
                    it???s not set in stone, it???s meant to evolve rapidly over time, so the coding style
                    is the perfect example where a PER is the best way to go.</p><br/>
                <p>More information about the PER workflow here: <a
                        href="https://t.co/jlrrX38AJQ">https://t.co/jlrrX38AJQ </a></p> <br/>
                <p>??? PHP-FIG (@phpfig) <a
                        href="https://twitter.com/phpfig/status/1535140192209756162?ref_src=twsrc%5Etfw">June
                        10, 2022</a></p>
            </blockquote>
            <br/>
        </li>
        <br/>
        <li><strong><a
                    href="https://blog.jetbrains.com/phpstorm/2022/05/phpstorm-2022-2-early-access-program-is-open/">PhpStorm
                    2022.2 Early Access Program Is Open</a> </strong> <br><br/>Built-in Rector support, lots of
            improvements for generics in PHP, and more.
        </li>
        <br/>
        <li><strong><a href="https://surveys.jetbrains.com/s3/t-developer-ecosystem-survey-2022">Developer
                    Ecosystem Survey 2022</a> </strong> <br><br/>Take part in the yearly ecosystem survey for
            the chance to win a MacBook Pro, Xbox Series X, PlayStation 5, or other prizes.
        </li>
        <br/>
    </ul>
    <br/>
    <h2 id="php_core"><span class="ez-toc-section" id="PHP_Core"></span>PHP Core<span class="ez-toc-section-end"></span>
    </h2><br/>
    <p>Most of the Core news is covered in detail in the <a
            href="https://thephp.foundation/blog/2022/05/30/php-core-roundup-2/"> <strong>PHP Core Roundup
                series</strong></a> from the PHP Foundation. The third episode of this series is coming soon, so
        we???ll only mention it briefly:</p><br/>
    <ul><br/>
        <li>??? <a href="https://wiki.php.net/rfc/true-type">RFC: Add true type</a> #PHP 8.2<br><br/>In
            addition to <code>null</code> and <code>false</code> pseudotypes, PHP will now have a standalone
            <code>true</code> type, which is the natural counterpart of <code>false</code>.<br/>
            <p>For more details, listen to Derik Rethans??? <a href="https://phpinternals.news/102">PHP
                    Internals News podcast</a> with George P. Banyard, the author of this change.</p>
        </li>
        <br/>
        <li>??? <a href="https://wiki.php.net/rfc/undefined_property_error_promotion">RFC: Undefined Property
                Error Promotion</a> #PHP 9.0
        </li>
        <br/>
        <li>??? <a href="https://wiki.php.net/rfc/partially-supported-callables-expand-deprecation-notices">RFC:
                Expand deprecation notice scope for partially supported callables</a> #PHP 8.2
        </li>
        <br/>
        <li>???? <a href="https://wiki.php.net/rfc/stricter_implicit_boolean_coercions">RFC: Stricter implicit
                boolean coercion</a> #PHP 8.2
        </li>
        <br/>
        <li>???? <a href="https://wiki.php.net/rfc/global_login">RFC: Create a global login system for
                php.net</a> <br><br/>The RFC proposes to create an SSO for *.php.net sites. The implementation
            plan, however, is unclear, so it likely will not make it past the first attempt.
        </li>
        <br/>
        <li>???? <a href="https://wiki.php.net/rfc/rng_extension">RFC: Random Extension 5.x</a> #PHP
            8.2<br><br/>Kudos to Go Kudo for this RFC and for their persistence after the <a
                href="https://wiki.php.net/rfc/object_scope_prng">previous attempt</a>.
        </li>
        <br/>
        <li>???? <a href="https://wiki.php.net/rfc/fetch_property_in_const_expressions">RFC: Fetch properties in
                const expressions</a> #PHP 8.2<br><br/>
            <pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-linenumbers="false"
                 data-enlighter-title>enum A: string {    <br/>    case B = 'B';<br/>    // This is currently not permitted<br/>    const C = [self::B-&gt;value =&gt; self::B];<br/>}<br/></pre>
            <br><br/>There are some userland examples of where this could be quite useful. Take <a
                href="https://github.com/symfony/symfony/pull/46363#issuecomment-1128578078">Symfony and
                #[Target]</a>, for instance.
        </li>
        <br/>
        <li>???? <a href="https://wiki.php.net/rfc/auto-capture-closure">[RFC] Short Closures 2.0</a>
            <br><br/>Originally proposed by Nuno Maduro and Larry Garfield, and now picked up by Arnaud Le
            Blanc, this RFC proposed extending arrow functions by allowing multiple statements:<br><br/>
            <pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-linenumbers="false"
                 data-enlighter-title>fn () {    <br/>    $tmp = $a + $b;<br/>    return $tmp;<br/>}<br/></pre>
            <br/></li>
        <br/>
        <li><a href="https://thephp.foundation/blog/2022/05/06/interview-with-core-developers/">Interview with
                the PHP Foundation Core Developers</a> supplemented with answers from Arnaud Le Blanc.
        </li>
        <br/>
    </ul>
    <br/>
    <h2 id="tools"><span class="ez-toc-section" id="Tools"></span>Tools<span class="ez-toc-section-end"></span></h2>
    <br/>
    <ul><br/>
        <li><a href="https://indigostack.app/">Indigo </a> (beta) ??? This tool aims to revolutionize the way
            you configure and run local dev environments on Mac.
        </li>
        <br/>
        <li>The <a href="https://paragonie.com/blog/2022/06/recap-our-contributions-more-secure-internet">Paragon
                Initiative Enterprises</a> team released <a href="https://github.com/paragonie/easy-ecc">Easy-ECC </a>
            1.0.0, a tool making it easier to
            work with elliptic curve cryptography on PHP, and <a href="https://github.com/paragonie/paseto">PASETO </a>,
            a more secure alternative to JWT.
        </li>
        <br/>
        <li><a href="https://github.com/minicli/minicli">minicli/minicli </a> ??? A minimalist, dependency-free
            framework for building CLI-centric PHP applications.
        </li>
        <br/>
        <li><a href="https://github.com/crwlrsoft/url">crwlr/query-string </a> ??? A Swiss Army knife for URLs.
            It allows you to create, access, and manipulate query strings for HTTP requests very
            conveniently. See the <a
                href="https://www.crwlr.software/blog/dealing-with-http-url-query-strings-in-php">article </a>
            for more details.
        </li>
        <br/>
        <li><a href="https://github.com/voku/simple_html_dom">voku/simple_html_dom </a> ??? A modern, simple
            HTML DOM Parser for PHP.
        </li>
        <br/>
        <li><a href="https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8">PHP-CS-Fixer
                Configurator</a> ??? A nice website with all of the <a
                href="https://github.com/FriendsOfPHP/PHP-CS-Fixer">PHP CS Fixer</a> options and their
            descriptions.
        </li>
        <br/>
        <li><a href="https://github.com/IvanGrigorov/VMValidator">IvanGrigorov/VMValidator </a> ??? A set of
            attributes to validate PHP models.
        </li>
        <br/>
        <li><a href="https://github.com/thecodingmachine/graphqlite">thecodingmachine/graphqlite </a> ??? This
            tool allows you to use PHP Attributes/Annotations to declare GraphQL API.
        </li>
        <br/>
        <li><a href="https://github.com/exakat/php-static-analysis-tools">exakat/php-static-analysis-tools
            </a> ??? A reviewed list of useful PHP static analysis tools. It???s not only Psalm/PHPStan. There
            is also <a href="https://www.jetbrains.com/help/qodana/qodana-php.html">Qodana PHP</a>, a tool
            by JetBrains that brings all the PhpStorm smart checks to CI pipelines.
        </li>
        <br/>
        <li><a href="https://github.com/nmcteam/3dash">nmcteam/3dash </a> ??? Tiny static site generator for
            PHP. <a href="https://sculpin.io/">Sculpin </a> and <a href="https://jigsaw.tighten.com/">Jigsaw </a> are
            cool, but this small tool is really neat
            and has a very simple API. Check out the official website for a quick example: <a
                href="https://3dash.dev/">3dash.dev </a>.
        </li>
        <br/>
    </ul>
    <br/>
    <h2 id="phpstorm"><span class="ez-toc-section" id="PhpStorm"></span>PhpStorm<span class="ez-toc-section-end"></span>
    </h2><br/>
    <ul><br/>
        <li><a href="https://plugins.jetbrains.com/plugin/18813-ddev-integration">DDEV Integration ??? IntelliJ
                IDEs Plugin</a> ??? A beta version of the <a href="https://github.com/drud/ddev">DDEV </a>
            Integration Plugin for PhpStorm.
        </li>
        <br/>
        <li><a
                href="https://medium.com/@dkhorev/boost-your-productivity-in-laravel-with-advanced-phpstorm-setup-34a354efbbce">Boost
                your productivity in Laravel with advanced PhpStorm setup</a> by Dmitry Khorev.
        </li>
        <br/>
        <li><a href="https://stitcher.io/blog/clean-and-minimalistic-phpstorm">Clean and minimalistic
                PhpStorm</a> by Brent Roose.
        </li>
        <br/>
    </ul>
    <br/>
    <h2 id="symfony"><span class="ez-toc-section" id="Symfony"></span>Symfony<span class="ez-toc-section-end"></span>
    </h2><br/>
    <ul><br/>
        <li><a href="https://symfony.com/blog/symfony-6-1-0-released">Symfony 6.1</a> has been released and
            includes lots of <a href="https://symfony.com/blog/symfony-6-1-curated-new-features">great new
                features</a>. <br><br/>
            <blockquote class="twitter-tweet"><br/>
                <p lang="en" dir="ltr">Symfony 6.1 was released 3 hours ago. We just merged the upgrade
                    PR and shipped it to production ???? Everything runs smoothly.</p><br/>
                <p>The application is ??10 years old, has 10k+ classes and is now handling 20k rpm.</p><br/>
                <p>Happy Friday everyone ????<a href="https://t.co/Ce263ESQ6a">https://t.co/Ce263ESQ6a </a>
                    <a href="https://t.co/RKJtEFrFfZ">https://t.co/RKJtEFrFfZ </a> <a
                        href="https://t.co/5SJrmPPtxK">pic.twitter.com/5SJrmPPtxK </a></p> <br/>
                <p>??? Ruud Kamphuis (@Ruud_) <a
                        href="https://twitter.com/Ruud_/status/1530135229444370433?ref_src=twsrc%5Etfw">May
                        27, 2022</a></p>
            </blockquote>
            <br/>
        </li>
        <br/>
        <li><a href="https://symfony.com/blog/get-certified-on-symfony-6-and-twig-3">Get certified on Symfony
                6 and Twig 3</a> <br><br/>Symfony 6 and Twig 3 online certifications are now available. Both
            exams have been reworked from the ground up.
        </li>
        <br/>
        <li><a href="https://symfony.com/blog/a-week-of-symfony-806-6-12-june-2022">A Week of Symfony #806
                (6-12 June 2022)</a>.
        </li>
        <br/>
        <li><a href="https://www.strangebuzz.com/en/blog/initializing-your-symfony-project-with-solid-foundations">Initializing
                your Symfony project with solid foundations</a> by Lo??c Vernet.
        </li>
        <br/>
        <li><a href="https://tomasvotruba.com/blog/how-to-test-symfony-routes-to-make-huge-refactorings-safe/">How
                to test Symfony routes to make huge refactoring safe</a> by Tomas Votruba.
        </li>
        <br/>
    </ul>
    <br/>
    <h2 id="laravel"><span class="ez-toc-section" id="Laravel"></span>Laravel<span class="ez-toc-section-end"></span>
    </h2><br/>
    <ul><br/>
        <li><a href="https://laravel-comments.com/">spatie/laravel-comments-livewire </a> ??? A new, paid
            Livewire package from Spatie to associate comments with models in your Laravel application.
        </li>
        <br/>
        <li><a href="https://github.com/laravel/vite-plugin">laravel/vite-plugi </a> ??? <a
                href="https://vitejs.dev/">Vite </a> is a modern frontend build tool that provides a fast
            development environment and bundles your code for production. Laravel now integrates seamlessly
            with Vite by providing an official plugin and Blade directive to load your assets for
            development and production.
        </li>
        <br/>
        <li><a href="https://github.com/hasinhayder/hydra">hasinhayder/hydra </a> ??? A zero-config API
            boilerplate with Laravel 9x + Laravel Sanctum that comes with an excellent user and role
            management API out of the box.
        </li>
        <br/>
        <li><a href="https://artisan.page/">Laravel Artisan Cheatsheet</a> ??? An online reference for Laravel???s
            built-in artisan commands and their options.
        </li>
        <br/>
        <li><a href="https://github.com/codestudiohq/laravel-totem">codestudiohq/laravel-totem </a> ??? The tool
            allows you to manage your Laravel Schedule from a well-organized dashboard.
        </li>
        <br/>
        <li><a href="https://github.com/worksome/request-factories">worksome/request-factories </a> ??? Test
            requests in Laravel without all the boilerplate.
        </li>
        <br/>
        <li><a href="https://martinjoo.dev/35-eloquent-recipes">35 Laravel Eloquent Recipes</a> by Martin
            Joo.
        </li>
        <br/>
        <li><a href="https://laravel-news.com/laravel-route-organization-tips">Laravel Route Grouping: 6
                Techniques to Organize Routes</a> by Povilas Korop.
        </li>
        <br/>
        <li><a href="https://www.iankumu.com/blog/laravel-dynamic-scheduling/">How To Implement Laravel
                Dynamic Scheduling</a> by Ian Kumu.
        </li>
        <br/>
        <li><a href="https://laravel-news.com/controller-refactor">Restructuring a Laravel Controller using
                Services, Events, Jobs, Actions, and more</a> by Povilas Korop.
        </li>
        <br/>
    </ul>
    <br/>
    <h2 id="misc"><span class="ez-toc-section" id="Misc"></span><strong>Misc</strong><span
            class="ez-toc-section-end"></span></h2><br/>
    <ul><br/>
        <li><a href="https://stitcher.io/blog/php-enum-style-guide">My PHP enum style guide</a> by Brent
            Roose.
        </li>
        <br/>
        <li><a href="https://markbakeruk.net/2022/06/06/list-o-mania/">List-o-mania </a> by Mark Baker. An
            article on PHP???s <code>list</code> construct with some clever tricks and a few of its
            limitations.
        </li>
        <br/>
        <li><a href="https://www.exakat.io/en/the-very-useful-variadic-argument/">The very useful variadic
                argument</a> by Damien Seguy.
        </li>
        <br/>
        <li><a href="https://www.exakat.io/en/reviewing-property-declaration-in-php/">Reviewing Property
                Declaration In PHP</a> by Damien Seguy.
        </li>
        <br/>
    </ul>
    <br/>
    <h2 id="community"><span class="ez-toc-section" id="Community"></span><strong>Community</strong><span
            class="ez-toc-section-end"></span></h2><br/>
    <ul><br/>
        <li><a href="https://getparthenon.com/blog/2022-php-conferences-list/">2022 PHP Conferences List</a>.
        </li>
        <br/>
        <li><a href="https://www.etsy.com/shop/DeveloperWear">Check out these funny t-shirts</a> by <a
                href="https://twitter.com/rdohms">Rafael Dohms</a>: <br><br/><img
                src="https://blog.jetbrains.com/wp-content/uploads/2022/06/il_1588xN.3968791093_8rig.webp" alt
                width="300"></li>
        <br/>
        <li><a href="https://www.exakat.io/en/where-can-you-get-an-elephpant-php-elephant/">Where can you get
                an elephpant?</a> <br/>
            <ul><br/>
                <li>Light blue and pink ones: <a href="https://www.elephpant.com/">elephpant.com </a>.</li>
                <br/>
                <li>Blue <a href="https://www.exakat.io/product/inphpinity/">PHP 8 inphpinity</a>: <a
                        href="https://www.exakat.io/product/inphpinity/">exakat.io </a>.
                </li>
                <br/>
                <li>White, Joker, and Dark blue: <a href="https://shop.confoo.ca/toys">confoo.ca </a>.</li>
                <br/>
                <li>Orange: <a href="https://thelia.net/index.php/thelia-elephpant.html">thelia.net </a>.
                </li>
                <br/>
                <li>Italy tricolor: <a
                        href="https://shop.grusp.org/product/aida-phpday-elephpant/?v=796834e7a283">grusp.org
                    </a>.
                </li>
                <br/>
                <li>Orange php[architect]: <a href="http://www.phparch.com">phparch.com/swag </a>.</li>
                <br/>
                <li>Red Laravel: <a href="https://www.phparch.com/swag/laravel-plush-elephpant/">phparch.com/swag </a>.
                </li>
                <br/>
            </ul>
            <br/>
        </li>
        <br/>
        <li>Did you know that WordPress has an adorable mascot too?<br><br/>
            <blockquote class="twitter-tweet"><br/>
                <p lang="en" dir="ltr"><a
                        href="https://twitter.com/hashtag/Wapuu?src=hash&amp;ref_src=twsrc%5Etfw">#Wapuu </a>
                    will be everywhere at WordCamp Europe! How many different pictures can you get of him?
                    Post them at <a href="https://t.co/iVD2K7rvx2">https://t.co/iVD2K7rvx2 </a> so we can
                    see them all!</p> <br/>
                <p>???? ???Wapuu ready to travel to <a
                        href="https://twitter.com/hashtag/WCEU?src=hash&amp;ref_src=twsrc%5Etfw">#WCEU
                    </a>??? by Nicholas Garofalo on the <a
                        href="https://twitter.com/hashtag/WordPress?src=hash&amp;ref_src=twsrc%5Etfw">#WordPress
                    </a> Photo Directory <a href="https://t.co/90SvbhINp6">https://t.co/90SvbhINp6
                    </a> <a href="https://t.co/0YfURIAV5X">pic.twitter.com/0YfURIAV5X </a></p> <br/>
                <p>??? WordPress (@WordPress) <a
                        href="https://twitter.com/WordPress/status/1532344032327761922?ref_src=twsrc%5Etfw">June
                        2, 2022</a></p>
            </blockquote>
            <br/>
        </li>
        <br/>
    </ul>
    <br/>
    <p>That???s all for today ??? thanks for reading!</p><br/>
    <p>If you have any interesting or useful links to share via PHP Annotated, please leave a comment on this
        post or send me a <a href="https://twitter.com/pronskiy">tweet </a>. </p> <br/>
    <p style="text-align: left;" align="center"><a class="jb-download-button" title="Complete this
                        form and get PHP Annotated Monthly delivered fresh to your email"
                                                   href="https://info.jetbrains.com/PHP-Annotated-Subscription.html">Subscribe
            to PHP
            Annotated</a></p> <br/>
    <p><em>Your JetBrains PhpStorm team</em><br><br/><em>The Drive to Develop</em><br><br/>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </p>
    <br/>
    <div class="content__row"><br/> \t
        <div class="tag-list"><br/> <a href="/phpstorm/tag/laravel/"
                                       class="tag">Laravel</a><br/> <a href="/phpstorm/tag/php/"
                                                                       class="tag">PHP</a><br/> <a
                href="/phpstorm/tag/php-8-2/" class="tag">PHP 8.2</a><br/> <a
                href="/phpstorm/tag/php-annotated-monthly/" class="tag">PHP Annotated
                Monthly</a><br/> <a href="/phpstorm/tag/rfc/" class="tag">RFC</a><br/> <a
                href="/phpstorm/tag/symfony/" class="tag">symfony</a><br/></div>
        <br/>
        <ul class="social"><br/>
            <li><span>Share</span></li>
            <br/>
            <li><a target="_blank"
                   href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F"
                   rel="noopener noreferrer"><i class="icon-facebook"></i></a></li>
            <br/>
            <li><a target="_blank"
                   href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F&amp;text=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F&amp;via=phpstorm"
                   rel="noopener noreferrer"><i class="icon-twitter"></i></a></li>
            <br/>
            <li><a target="_blank"
                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F"
                   rel="noopener noreferrer"><i class="icon-linkedin"></i></a></li>
            <br/>
        </ul>
        <br/>
    </div>
    <br/>
    <div class="content__pagination"><a class="content__pagination-prev"
                                        href="https://blog.jetbrains.com/phpstorm/2022/06/phpstorm-2022-2-eap-3/"> <i
                class="icon-arrow-left"></i>
            PhpStorm 2022.2 EAP #3: Creating Enums</a><a class="content__pagination-next"
                                                         href="https://blog.jetbrains.com/phpstorm/2022/06/phpstorm-2022-1-3-rc/">PhpStorm
            2022.1.3
            RC <i class="icon-arrow-right"></i></a></div>
</div>
<br/>
<div class="container comments-container"><br/>
    <br/>
    <div class="content"><br/>
        <div id="remark42"></div>
        <br/>
    </div>
    <br/>
</div>
<br/> ",
"text": "
<div class="content">
    <h1>PHP ?????? ??? 2022??? 6??? </h1>
    <div class="post-info"><img src="https://secure.gravatar.com/avatar/269798998e24876e4f3ea6f6d1effdc7?s=200&amp;r=g"
                                width="200" height="200" alt="?????? ????????????" loading="lazy" class="avatar avatar-200 wp-user-avatar wp-user-avatar-200
            photo avatar-default">
        <div class="post-info__text"><a href="https://blog.jetbrains.com/author/rpronskiy">?????? ????????????</a>
            <time
                class="publish-date" data-year="2022" data-month="06" data-day="16" datetime="2022-06-16"></time>
        </div>
    </div>
    <div id="ez-toc-container" class="ez-toc-v2_0_17 counter-hierarchy ez-toc-transparent">
        <div class="ez-toc-title-container">
            <p class="ez-toc-title"> ??????</p> <span class="ez-toc-title-toggle"><a class="ez-toc-pull-right
                    ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle" style="display: none;"><i
                        class="ez-toc-glyphicon ez-toc-icon-toggle"></i></a></span>
        </div>
        <nav>
            <ul class="ez-toc-list ez-toc-list-level-1">
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-1" href="#News"
                                                                    title="??????">??????</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-2"
                                                                    href="#PHP_Core" title="PHP ??????">PHP ??????</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-3" href="#Tools"
                                                                    title="??????">??????</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-4"
                                                                    href="#PhpStorm" title="PhpStorm">PhpStorm</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-5"
                                                                    href="#Symfony" title="?????????">?????????</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-6"
                                                                    href="#Laravel" title="?????????">?????????</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-7" href="#Misc"
                                                                    title="??????">??????</a></li>
                <li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-8"
                                                                    href="#Community" title="?????? ??????">?????? ??????</a></li>
            </ul>
        </nav>
    </div>
    <p><a href="https://blog.jetbrains.com/phpstorm/2022/06/php-annotated-june-2022/"> <img class="alignnone
            size-full"
                                                                                            src="https://blog.jetbrains.com/wp-content/uploads/2022/06/php-annotated-blog-featured-image-1280x600-1.png"
                                                                                            alt="PHP ?????? ??????" width="900"></a>
    </p>
    <p> ???????????????!</p>
    <p> PHP Annotated 6????????? ?????? ?????? ???????????????. ??????????????? ????????? ??????, ??????, ?????? ??? ???????????? ???????????? ?????? ??? ??? ?????? PHP ???????????? ????????? ?????? ???????????? ?????? ????????? ????????????.</p>
    <blockquote>
        <p> PHP Annotated 6????????? ??????????????? ??? ????????? ??? <a href="https://twitter.com/s_panteleev">Sergey Panteleev</a> ?????? ??????????????????.
        </p>
    </blockquote>
    <p><span id="more-257207"></span></p>
    <style>
        img.alignico {
            margin-right: 10px;
            margin-top: 5px;
            float: left;
        }

        main ul:not([class]):not([id]) li,
        main .article-section .content ul:not([class]):not([id]) > li {
            padding-bottom: 18px;
        }

        summary {
            display: list-item;
            cursor: pointer;
            font-style: italic;
        }

        main ul:not([class]):not([id]) li,
        main .article-section .content ul:not([class]):not([id]) > li ul li {
            padding-bottom: 0;
        }
    </style>
    <h2 id="news"><span class="ez-toc-section" id="News"></span> ??????<span class="ez-toc-section-end"></span>
    </h2>
    <ul>
        <li><strong><a href="https://www.php.net/">php.net </a> ??? ????????? ???????????? ???????????? ???????????????!</strong> <br> ????????? ????????? ????????????
            Lucas Azevedo??? ?????? ??????????????????.
        </li>
        <li><strong>??? <a href="https://www.php.net/archive/2022.php#2022-06-09-1">PHP 7.4.30</a> , <a
                    href="https://www.php.net/archive/2022.php#2022-06-09-4"> <strong>PHP 8.0.20</strong></a>
                <strong>,</strong> <a href="https://www.php.net/archive/2022.php#2022-06-09-2">PHP 8.1.7</a> ???
                ?????????????????????.</strong> <br> ???????????? ????????? ?????? ?????? ?????????????????????. ?????? ???????????? ?????? ???????????? ????????????????????? ?????? ????????????.
        </li>
        <li><strong><a href="https://www.php.net/archive/2022.php#2022-06-09-3">PHP 8.2.0 ?????? 1</a> ???
                ?????????????????????</strong> <br> PHP 8.2 ????????? ??????????????? ???????????? ??? ?????? ????????? ????????????????????????. ??????????????? <a
                href="https://wiki.php.net/todo/php82#timetable">????????? ??????</a> ??? ?????? 2????????? ??????????????? ?????? ???????????? 11???
            24??? ????????? ???????????????.<p> ?????? ????????? 7??? 19?????? ????????????, ?????? ?????? ?????? ????????? ????????? ???????????? ????????? ??? ????????? ???????????????. ?????? ?????? ?????? ??????
                ????????? ????????? ????????????.</p>
            <ul>
                <li><a href="https://php.watch/versions/8.2/readonly-classes">?????? ?????? ?????????</a></li>
                <li><a href="https://php.watch/versions/8.2/true-type"> <code>true</code></a>
                    <a href="https://php.watch/versions/8.2/true-type">?????? </a></li>
                <li><a href="https://php.watch/versions/8.2/null-false-types">????????? ????????????</a> <a
                        href="https://php.watch/versions/8.2/null-false-types">
                        <code>null</code></a> <a href="https://php.watch/versions/8.2/null-false-types">??? </a> <a
                        href="https://php.watch/versions/8.2/null-false-types">
                        <code>false</code></a> <a href="https://php.watch/versions/8.2/null-false-types">?????? </a></li>
                <li><a href="https://php.watch/versions/8.2/backtrace-parameter-redaction">?????????
                        ???????????? ??? ?????? ??????</a></li>
                <li><a href="https://php.watch/versions/8.2/dynamic-properties-deprecated">??????
                        ????????? ??? ?????? ???????????? ????????????.</a></li>
                <li><a href="https://php.watch/versions/8.2/partially-supported-callable-deprecation">???????????????
                        ???????????? ???????????? ??? ?????? ???????????? ????????????.</a></li>
                <li><a href="https://php.watch/versions/8.2/$%7Bvar%7D-string-interpolation-deprecated">
                        <code>${var}</code></a> <a
                        href="https://php.watch/versions/8.2/$%7Bvar%7D-string-interpolation-deprecated">?????????
                        ????????? ??? ?????? ???????????? ??????</a></li>
            </ul>
            <p> ?????? ?????? ?????? ????????? <a href="https://php.watch/versions/8.2">php.watch/versions/8.2
                </a> ??? ??????????????????.</p>
            <p> Mac??? ???????????? ?????? <a href="https://github.com/shivammathur/homebrew-php">shivammathur/homebrew-php
                </a> ????????? Nightly ????????? ?????? homebrew??? PHP 8.2??? ????????? ???
                ??? ????????????.</p>
            <p> ????????? ????????? <a href="https://hub.docker.com/_/php?tab=tags&amp;page=1&amp;name=8.2.0">Docker
                    ?????????</a> ??? ???????????? ?????? ????????? ??? ??? ?????? ?????? ?????? ?????????
                ????????????.</p>
        </li>
        <li><strong><a href="https://github.com/php-fig/per-coding-style">PER
                    ?????? ?????????</a> ??? 1.0.0 ?????????
                ?????????????????????.</strong> <br> PER ?????? ?????????
            1.0.0??? PSR-12??? ???????????????. ??? ?????? ????????? ??????
            PHP ????????? ???????????? ?????? ????????? ????????? ???????????? ??? ?????????
            ?????? ??? ????????? ????????? ????????????.<br> ?????? ?????? ?????????
            ???????????????!
            <blockquote class="twitter-tweet">
                <p lang="en" dir="ltr"> PER???
                    ???????????? ????????? PSR??? ??????????????? ???????????? ??????
                    ?????? ????????? ????????? ?????? ????????? ???????????? ?????????
                    ?????? ???????????? PER??? ?????? ?????? ????????? ?????????
                    ????????????.</p>
                <p> PER ??????????????? ?????? ?????? ??????: <a href="https://t.co/jlrrX38AJQ">https://t.co/jlrrX38AJQ
                    </a></p>
                <p> ???
                    PHP-FIG(@phpfig) <a
                        href="https://twitter.com/phpfig/status/1535140192209756162?ref_src=twsrc%5Etfw">2022???
                        6??? 10???</a></p>
            </blockquote>
        </li>
        <li><strong><a
                    href="https://blog.jetbrains.com/phpstorm/2022/05/phpstorm-2022-2-early-access-program-is-open/">PhpStorm
                    2022.2 ??????
                    ????????? ????????????
                    ??????</a>
            </strong>
            <br> ?????????
            Rector ??????,
            PHP??? ???????????? ??????
            ?????? ?????? ?????? ???.
        </li>
        <li><strong><a href="https://surveys.jetbrains.com/s3/t-developer-ecosystem-survey-2022">2022???
                    ????????? ????????? ????????????</a> </strong> <br> ?????? ??????????????? ??????????????? ???????????? MacBook Pro, Xbox Series
            X, PlayStation 5 ?????? ?????? ????????? ?????? ??? ?????? ????????? ???????????????.
        </li>
    </ul>
    <h2 id="php_core"><span class="ez-toc-section" id="PHP_Core"></span> PHP ??????<span class="ez-toc-section-end"></span>
    </h2>
    <p> Core ????????? ???????????? PHP Foundation??? <a href="https://thephp.foundation/blog/2022/05/30/php-core-roundup-2/">
            <strong>PHP
                Core Roundup ?????????</strong></a> ?????? ????????? ????????????. ??? ???????????? ??? ?????? ??????????????? ??? ????????? ??????????????? ???????????????
        ?????????????????????.</p>
    <ul>
        <li> ??? <a href="https://wiki.php.net/rfc/true-type">RFC: ?????? ?????? ??????</a> #PHP 8.2<br>
            <code>null</code> ??? <code>false</code> ?????? ?????? ????????? PHP??? ?????? ?????? ????????? <code>true</code> ????????? ?????? ??????
            ?????? <code>false</code> ??? ??????????????? ???????????????.<p> ????????? ????????? ??? ?????? ????????? ???????????? George P. Banyard??? ???????????? Derik
                Rethans??? <a href="https://phpinternals.news/102">PHP Internals News ????????????</a> ???
                ??????????????????.</p>
        </li>
        <li> ??? <a href="https://wiki.php.net/rfc/undefined_property_error_promotion">RFC: ????????????
                ?????? ?????? ?????? ????????????</a> #PHP 9.0
        </li>
        <li> ??? <a href="https://wiki.php.net/rfc/partially-supported-callables-expand-deprecation-notices">RFC:
                ??????????????? ???????????? ????????? #PHP 8.2??? ?????? ?????? ?????? ?????? ?????? ??????</a></li>
        <li> ???? <a href="https://wiki.php.net/rfc/stricter_implicit_boolean_coercions">RFC:
                ??? ????????? ????????? ?????? ?????? ??????</a> #PHP 8.2
        </li>
        <li> ???? <a href="https://wiki.php.net/rfc/global_login">RFC: php.net??? ????????? ?????????
                ????????? ??????</a> <br> RFC??? *.php.net ???????????? ?????? SSO??? ?????? ?????? ???????????????. ?????? ???????????????
            ???????????? 1??? ????????? ?????? ?????? ???????????? ??????.
        </li>
        <li> ???? <a href="https://wiki.php.net/rfc/rng_extension">RFC: ?????? ?????? 5.x</a> #PHP 8.2<br> ??? RFC ???
            <a href="https://wiki.php.net/rfc/object_scope_prng">?????? ??????</a> ?????? ??? ?????? ??? ?????? Go Kudo ?????? ??????
            ??? ???????????? .
        </li>
        <li> ???? <a href="https://wiki.php.net/rfc/fetch_property_in_const_expressions">RFC: const
                ??????????????? ?????? ????????????</a> #PHP 8.2 <br>
            <pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-linenumbers="false"
                 data-enlighter-title> ????????? A: ????????? {    <br/>    ?????? B = &#39;B&#39;;<br/>    // ????????? ?????? ???????????? ????????????.<br/>    const C = [??????::B-&gt;??? =&gt; ??????::B];<br/>}<br/></pre>
            <br>????????? ?????? ????????? ??? ?????? ????????? ????????? ?????? ????????????. ?????? ?????? <a
                href="https://github.com/symfony/symfony/pull/46363#issuecomment-1128578078">Symfony
                ??? #[Target]</a> ??? ??????????????????.
        </li>
        <li> ???? <a href="https://wiki.php.net/rfc/auto-capture-closure">[RFC] ?????? ?????? 2.0</a>
            <br> ?????? Nuno Maduro??? Larry Garfield??? ??????????????? ?????? Arnaud Le Blanc??? ????????? ??? RFC??? ??????
            ???????????? ???????????? ????????? ????????? ????????? ?????? ??????????????????. <br>
            <pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-linenumbers="false"
                 data-enlighter-title> fn() {    <br/>    $tmp = $a + $b;<br/>    ?????? $tmp;<br/>}<br/></pre>
        </li>
        <li>Arnaud Le Blanc??? ???????????? ?????? <a
                href="https://thephp.foundation/blog/2022/05/06/interview-with-core-developers/">??? PHP
                Foundation ?????? ??????????????? ?????????</a> .
        </li>
    </ul>
    <h2 id="tools"><span class="ez-toc-section" id="Tools"></span> ??????<span class="ez-toc-section-end"></span></h2>
    <ul>
        <li><a href="https://indigostack.app/">Indigo </a> (??????) ??? ??? ????????? Mac?????? ?????? ?????? ????????? ????????????
            ???????????? ????????? ???????????? ?????? ????????? ?????????.
        </li>
        <li><a href="https://paragonie.com/blog/2022/06/recap-our-contributions-more-secure-internet">Paragon
                Initiative Enterprises</a> ?????? PHP?????? ?????? ?????? ????????? ????????? ??? ?????? ????????? ????????? <a
                href="https://github.com/paragonie/easy-ecc">Easy-ECC </a> 1.0.0??? JWT??? ??????
            ?????? ????????? ????????? <a href="https://github.com/paragonie/paseto">PASETO </a> ???
            ??????????????????.
        </li>
        <li><a href="https://github.com/minicli/minicli">minicli/minicli </a> ??? CLI
            ?????? PHP ????????????????????? ???????????? ?????? ???????????? ????????? ?????? ????????????????????????.
        </li>
        <li><a href="https://github.com/crwlrsoft/url">crwlr/query-string </a> ???
            URL??? ????????? ?????? ????????????. HTTP ????????? ?????? ?????? ???????????? ?????? ???????????? ??????, ????????? ??? ????????? ??? ????????????.
            ????????? ????????? <a href="https://www.crwlr.software/blog/dealing-with-http-url-query-strings-in-php">??????
            </a> ??? ??????????????????.
        </li>
        <li><a href="https://github.com/voku/simple_html_dom">voku/simple_html_dom
            </a> ??? ??????????????? ????????? PHP??? HTML DOM ??????.
        </li>
        <li><a href="https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8">PHP-CS-Fixer
                Configurator</a> ??? ?????? <a href="https://github.com/FriendsOfPHP/PHP-CS-Fixer">PHP CS
                Fixer</a> ????????? ????????? ?????? ?????? ?????????????????????.
        </li>
        <li><a href="https://github.com/IvanGrigorov/VMValidator">IvanGrigorov/VMValidator
            </a> ??? PHP ????????? ???????????? ?????? ?????? ???????????????.
        </li>
        <li><a href="https://github.com/thecodingmachine/graphqlite">thecodingmachine/graphqlite
            </a> ??? ??? ????????? ???????????? PHP ??????/????????? ???????????? GraphQL API??? ????????? ???
            ????????????.
        </li>
        <li><a href="https://github.com/exakat/php-static-analysis-tools">exakat/php-static-analysis-tools
            </a> ??? ????????? PHP ?????? ?????? ????????? ?????? ???????????????. ??????/PHPStan
            ????????? ????????????. ?????? PhpStorm ????????? ????????? CI ????????????????????? ????????????
            JetBrains??? ????????? <a href="https://www.jetbrains.com/help/qodana/qodana-php.html">Qodana
                PHP</a> ??? ????????????.
        </li>
        <li><a href="https://github.com/nmcteam/3dash">nmcteam/3dash
            </a> ??? PHP??? ?????? ?????? ????????? ?????????. <a href="https://sculpin.io/">Sculpin </a> ???
            <a href="https://jigsaw.tighten.com/">Jigsaw
            </a> ??? ???????????? ??? ?????? ????????? ?????? ???????????? API??? ?????? ???????????????.
            ?????? ?????? ????????? ?????? ??????????????? ???????????????: <a href="https://3dash.dev/">3dash.dev </a>
            .
        </li>
    </ul>
    <h2 id="phpstorm"><span class="ez-toc-section" id="PhpStorm"></span> PhpStorm<span
            class="ez-toc-section-end"></span>
    </h2>
    <ul>
        <li><a href="https://plugins.jetbrains.com/plugin/18813-ddev-integration">DDEV
                ?????? ??? IntelliJ IDE ????????????</a> ???
            PhpStorm??? <a href="https://github.com/drud/ddev">DDEV
            </a> ?????? ??????????????? ?????? ???????????????.
        </li>
        <li> Dmitry Khorev <a
                href="https://medium.com/@dkhorev/boost-your-productivity-in-laravel-with-advanced-phpstorm-setup-34a354efbbce">???
                ?????? PhpStorm ???????????? Laravel??????
                ???????????? ??????</a> ?????????.
        </li>
        <li>
            Brent Roose <a href="https://stitcher.io/blog/clean-and-minimalistic-phpstorm">???
                ???????????? ???????????? PhpStorm</a>
            .
        </li>
    </ul>
    <h2 id="symfony"><span class="ez-toc-section" id="Symfony"></span>
        ?????????<span class="ez-toc-section-end"></span>
    </h2>
    <ul>
        <li><a href="https://symfony.com/blog/symfony-6-1-0-released">Symfony
                6.1</a> ???
            ?????????????????? ?????? <a href="https://symfony.com/blog/symfony-6-1-curated-new-features">?????????
                ??????</a> ???
            ????????????
            ????????????.<br>
            <blockquote class="twitter-tweet">
                <p lang="en" dir="ltr">
                    Symfony
                    6.1???
                    3??????
                    ??????
                    ?????????????????????.
                    ??????
                    ???????????????
                    PR???
                    ????????????
                    ???????????????
                    ??????????????????.
                    ????
                    ??????
                    ??????
                    ????????????
                    ???????????????.
                </p>
                <p> ?????????????????????
                    ??10??????
                    ?????????
                    10k+
                    ????????????
                    ?????????
                    ??????
                    20k
                    rpm???
                    ????????????
                    ????????????.
                </p>
                <p> ??????
                    ?????????
                    ?????????
                    ?????????
                    ????
                    <a href="https://t.co/Ce263ESQ6a">https://t.co/Ce263ESQ6a
                    </a>
                    <a href="https://t.co/RKJtEFrFfZ">https://t.co/RKJtEFrFfZ
                    </a>
                    <a href="https://t.co/5SJrmPPtxK">pic.twitter.com/5SJrmPPtxK
                    </a>
                </p>
                <p>
                    ???
                    Ruud
                    Kampuis(@Ruud_)
                    <a href="https://twitter.com/Ruud_/status/1530135229444370433?ref_src=twsrc%5Etfw">2022???
                        5???
                        27???</a>
                </p>
            </blockquote>
        </li>
        <li>
            <a href="https://symfony.com/blog/get-certified-on-symfony-6-and-twig-3">Symfony
                6
                ???
                Twig
                3
                ??????
                ??????</a>
            <br>
            ??????
            Symfony
            6
            ???
            Twig
            3
            ?????????
            ?????????
            ?????????
            ???
            ????????????.
            ???
            ??????
            ??????
            ????????????
            ????????????????????????.
        </li>
        <li><a href="https://symfony.com/blog/a-week-of-symfony-806-6-12-june-2022">A
                Week of
                Symfony
                #806(2022???
                6???
                6-12???)</a>
            .
        </li>
        <li>
            Lo??c Vernet
            <a href="https://www.strangebuzz.com/en/blog/initializing-your-symfony-project-with-solid-foundations">???
                ????????? ????????????
                Symfony
                ???????????????
                ??????????????????</a>
            .
        </li>
        <li><a href="https://tomasvotruba.com/blog/how-to-test-symfony-routes-to-make-huge-refactorings-safe/">?????????
                ???????????????
                ????????????
                ?????????
                ??????
                Symfony
                ?????????
                ???????????????
                ??????</a>
            Tomas
            Votruba.
        </li>
    </ul>
    <h2 id="laravel"><span class="ez-toc-section" id="Laravel"></span>
        ?????????<span class="ez-toc-section-end"></span>
    </h2>
    <ul>
        <li><a href="https://laravel-comments.com/">spatie/laravel-comments-livewire
            </a>
            ???
            Spatie???
            ?????????
            ??????
            Livewire
            ????????????,
            Laravel
            ?????????????????????
            ?????????
            ?????????
            ???????????????.
        </li>
        <li>
            <a href="https://github.com/laravel/vite-plugin">laravel/vite-plugi
            </a>
            ???
            <a href="https://vitejs.dev/">Vite
            </a>
            ???
            ??????
            ??????
            ?????????
            ????????????
            ???????????????
            ?????????
            ?????????
            ????????????
            ??????
            ???????????????
            ??????
            ???????????????.
            Laravel???
            ??????
            ??????
            ???
            ?????????
            ??????
            ?????????
            ????????????
            ??????
            ????????????
            ???
            Blade
            ????????????
            ????????????
            Vite???
            ????????????
            ???????????????.
        </li>
        <li>
            <a href="https://github.com/hasinhayder/hydra">hasinhayder/hydra
            </a>
            ???
            ?????????
            ?????????
            ???
            ??????
            ??????
            API???
            ??????
            ????????????
            Laravel
            9x
            +
            Laravel
            Sanctum???
            ?????????
            ?????????
            ??????
            API
            ??????????????????.
        </li>
        <li>
            <a href="https://artisan.page/">Laravel
                Artisan
                Cheatsheet</a>
            ???
            Laravel???
            ??????
            ??????
            ??????
            ???
            ??????
            ?????????
            ??????
            ?????????
            ???????????????.
        </li>
        <li>
            <a href="https://github.com/codestudiohq/laravel-totem">codestudiohq/laravel-totem
            </a>
            ???
            ???
            ?????????
            ????????????
            ???
            ?????????
            ??????????????????
            Laravel
            ?????????
            ?????????
            ???
            ????????????.
        </li>
        <li>
            <a href="https://github.com/worksome/request-factories">worksome/request-factories
            </a>
            ???
            ??????
            ?????????
            ??????
            Laravel??????
            ?????????
            ??????????????????.
        </li>
        <li>
            Martin
            Joo???
            <a href="https://martinjoo.dev/35-eloquent-recipes">35
                Laravel
                Eloquent
                Recipes</a>
            .
        </li>
        <li>
            <a href="https://laravel-news.com/laravel-route-organization-tips">Laravel
                ??????
                ?????????:
                Povilas
                Korop???
                ??????
                ?????????
                ??????
                6??????
                ??????</a>
            .
        </li>
        <li>
            Ian
            <a href="https://www.iankumu.com/blog/laravel-dynamic-scheduling/">Kumu???
                Laravel
                Dynamic
                Scheduling
                ??????
                ??????</a>
            .
        </li>
        <li>
            Povilas
            Korop
            <a href="https://laravel-news.com/controller-refactor">???
                Services,
                Events,
                Jobs,
                Actions
                ??????
                ????????????
                Laravel
                ???????????????
                ??????????????????</a>
            .
        </li>
    </ul>
    <h2 id="misc"><span class="ez-toc-section" id="Misc"></span>
        <strong>??????</strong><span class="ez-toc-section-end"></span>
    </h2>
    <ul>
        <li> Brent
            Roose
            <a href="https://stitcher.io/blog/php-enum-style-guide">???
                PHP
                ?????????
                ?????????
                ?????????</a>
            .
        </li>
        <li>
            Mark
            Baker
            <a href="https://markbakeruk.net/2022/06/06/list-o-mania/">???
                List-o-mania</a>
            .
            ???
            ??????
            ?????????
            ?????????
            ???
            ??????
            ??????
            ?????????
            ?????????
            PHP???
            <code>list</code>
            ?????????
            ??????
            ???????????????.
        </li>
        <li> Damien
            Seguy
            <a href="https://www.exakat.io/en/the-very-useful-variadic-argument/">???
                ??????
                ?????????</a>
            ?????????
            ??????.
        </li>
        <li>
            Damien
            Seguy???
            <a href="https://www.exakat.io/en/reviewing-property-declaration-in-php/">PHP??????
                ??????
                ??????
                ??????</a>
            .
        </li>
    </ul>
    <h2 id="community"><span class="ez-toc-section" id="Community"></span>
        <strong>??????
            ??????</strong><span class="ez-toc-section-end"></span>
    </h2>
    <ul>
        <li><a href="https://getparthenon.com/blog/2022-php-conferences-list/">2022
                PHP
                ????????????
                ??????</a>
            .
        </li>
        <li>
            <a href="https://twitter.com/rdohms">Rafael
                Doohms</a>
            <a href="https://www.etsy.com/shop/DeveloperWear">???
                ????????????
                ????????????
                ???????????????</a>
            .
            <br><img src="https://blog.jetbrains.com/wp-content/uploads/2022/06/il_1588xN.3968791093_8rig.webp" alt
                     width="300">
        </li>
        <li><a href="https://www.exakat.io/en/where-can-you-get-an-elephpant-php-elephant/">????????????
                ?????????
                ?????????????</a>
            <ul>
                <li> ????????????
                    ?????????:
                    <a href="https://www.elephpant.com/">elephpant.com
                    </a>
                    .
                </li>
                <li>
                    ??????
                    <a href="https://www.exakat.io/product/inphpinity/">PHP
                        8
                        inphpinity</a>
                    :
                    <a href="https://www.exakat.io/product/inphpinity/">exakat.io
                    </a>
                    .
                </li>
                <li>
                    ??????,
                    ??????
                    ???
                    ??????
                    ?????????:
                    <a href="https://shop.confoo.ca/toys">confoo.ca
                    </a>
                    .
                </li>
                <li>
                    ?????????:
                    <a href="https://thelia.net/index.php/thelia-elephpant.html">lia.net
                    </a>
                    .
                </li>
                <li>
                    ????????????
                    ??????:
                    <a href="https://shop.grusp.org/product/aida-phpday-elephpant/?v=796834e7a283">grusp.org
                    </a>
                    .
                </li>
                <li>
                    ?????????
                    php[?????????]:
                    <a href="http://www.phparch.com">phparch.com/swag
                    </a>
                    .
                </li>
                <li>
                    ??????
                    ?????????:
                    <a href="https://www.phparch.com/swag/laravel-plush-elephpant/">phparch.com/swag
                    </a>
                    .
                </li>
            </ul>
        </li>
        <li>
            ?????????????????????
            ???????????????
            ???????????????
            ?????????
            ??????
            ??????
            ?????????????<br>
            <blockquote class="twitter-tweet">
                <p lang="en" dir="ltr">
                    <a href="https://twitter.com/hashtag/Wapuu?src=hash&amp;ref_src=twsrc%5Etfw">#Wapuu
                    </a>
                    ???
                    WordCamp
                    Europe???
                    ??????
                    ?????????
                    ???????????????!
                    ?????????
                    ??????
                    ??????
                    ?????????
                    ??????
                    ??????
                    ?????????
                    ??????
                    ???
                    ?????????????
                    <a href="https://t.co/iVD2K7rvx2">https://t.co/iVD2K7rvx2
                    </a>
                    ???
                    ????????????
                    ??????
                    ???
                    ???
                    ????????????!</p>
                <p>
                    ????
                    <a href="https://twitter.com/hashtag/WordPress?src=hash&amp;ref_src=twsrc%5Etfw">#WordPress
                    </a>
                    ??????
                    ????????????
                    <a href="https://t.co/90SvbhINp6">https://t.co/90SvbhINp6
                    </a>
                    ??????
                    Nicholas
                    Garofalo???
                    ???Wapuu
                    ready
                    to
                    travel
                    to
                    <a href="https://twitter.com/hashtag/WCEU?src=hash&amp;ref_src=twsrc%5Etfw">#WCEU
                    </a>
                    ???
                    <a href="https://t.co/0YfURIAV5X">pic.twitter.com/0YfURIAV5X
                    </a>
                </p>
                <p>
                    ???
                    ???????????????(@WordPress)
                    <a href="https://twitter.com/WordPress/status/1532344032327761922?ref_src=twsrc%5Etfw">2022???
                        6???
                        2???</a>
                </p>
            </blockquote>
        </li>
    </ul>
    <p>
        ?????????
        ?????????????????????.
        ???????????????
        ???????????????!
    </p>
    <p> PHP
        Annotated???
        ??????
        ?????????
        ???????????????
        ?????????
        ?????????
        ?????????
        ???
        ????????????
        ?????????
        ????????????
        ?????????
        <a href="https://twitter.com/pronskiy">??????
        </a>
        ???
        ??????????????????.</p>
    <p style="text-align:
                                                                                                                                                                                                                                    left;"
       align="center">
        <a class="jb-download-button"
           title="???
                                                                                                                                                                                                                                        ?????????
                                                                                                                                                                                                                                        ????????????
                                                                                                                                                                                                                                        PHP
                                                                                                                                                                                                                                        Annotated
                                                                                                                                                                                                                                        Monthly???
                                                                                                                                                                                                                                        ????????????
                                                                                                                                                                                                                                        ??????
                                                                                                                                                                                                                                        ???????????????."
           href="https://info.jetbrains.com/PHP-Annotated-Subscription.html">PHP
            ??????
            ??????</a>
    </p>
    <p>
        <em>JetBrains
            PhpStorm
            ???</em><br>
        <em>?????????
            ??????
            ?????????</em>
        <br>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
        </script>
    </p>
    <div class="content__row">
        <div class="tag-list">
            <a href="/phpstorm/tag/laravel/" class="tag">Laravel</a>
            <a href="/phpstorm/tag/php/" class="tag">PHP</a>
            <a href="/phpstorm/tag/php-8-2/" class="tag">PHP
                8.2</a>
            <a href="/phpstorm/tag/php-annotated-monthly/" class="tag">PHP
                Annotated
                Monthly</a>
            <a href="/phpstorm/tag/rfc/" class="tag">RFC</a>
            <a href="/phpstorm/tag/symfony/" class="tag">symfony</a>
        </div>
        <ul class="social">
            <li><span>????????????</span>
            </li>
            <li><a target="_blank"
                   href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F"
                   rel="noopener
                                                                                                                                                                                                                                            noreferrer"><i
                        class="icon-facebook"></i></a>
            </li>
            <li><a target="_blank"
                   href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F&amp;text=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F&amp;via=phpstorm"
                   rel="noopener
                                                                                                                                                                                                                                            noreferrer"><i
                        class="icon-twitter"></i></a>
            </li>
            <li><a target="_blank"
                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2F2022%2F06%2Fphp-annotated-june-2022%2F"
                   rel="noopener
                                                                                                                                                                                                                                            noreferrer"><i
                        class="icon-linkedin"></i></a>
            </li>
        </ul>
    </div>
    <div class="content__pagination">
        <a class="content__pagination-prev" href="https://blog.jetbrains.com/phpstorm/2022/06/phpstorm-2022-2-eap-3/">
            <i class="icon-arrow-left"></i>PhpStorm
            2022.2
            EAP
            #3:
            ?????????
            ?????????</a>
        <a class="content__pagination-next"
           href="https://blog.jetbrains.com/phpstorm/2022/06/phpstorm-2022-1-3-rc/">PhpStorm
            2022.1.3
            RC<i class="icon-arrow-right"></i></a>
    </div>

</div>
<div class="container comments-container">
    <div class="content">
        <div id="remark42"></div>
    </div>
</div>

</body>
</html>
