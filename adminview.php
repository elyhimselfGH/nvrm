<?php

include_once 'db.inc.php';

if (isset($_COOKIE['discord_access_token'])) {
    $access_token = $_COOKIE['discord_access_token'];

    // Fetch user data using the obtained access token
    $user_info_url = 'https://discord.com/api/users/@me';
    $user_info_headers = array(
        'Authorization: Bearer ' . $access_token
    );

    $user_info_context = stream_context_create(array(
        'http' => array(
            'header' => $user_info_headers,
        ),
    ));

    $user_info_result = file_get_contents($user_info_url, false, $user_info_context);

    if ($user_info_result !== false) {
        $user_info = json_decode($user_info_result, true);
        $username = $user_info['username'] . '#' . $user_info['discriminator'];
        $userid = $user_info['id'];

    } else {
        $username = 'Unable to fetch username';
        $userid = 'Unable to fetch userid';
    }
} else {
    $username = 'Not logged in.';
    $userid = 'Not logged in.';
}
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>admin-user-view &#8211;Nevermore Designs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name='robots' content='max-image-preview:large'/>
        <title>admin-user-view &#8211;Nevermore Designs</title>
        <link rel="alternate" type="application/rss+xml" title="Nevermore Designs &raquo; Feed" href="https://webedit.nvrm.uk/feed/"/>
        <link rel="alternate" type="application/rss+xml" title="Nevermore Designs &raquo; Comments Feed" href="https://webedit.nvrm.uk/comments/feed/"/>
        <script>
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/webedit.nvrm.uk\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3"
                }
            };
            /*! This file is auto-generated */
            !function(i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)
                      , r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(n, 0, 0),
                    new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === r[t]
                    })
                }
                function u(e, t, n) {
                    switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                    }
                    return !1
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300,150) : i.createElement("canvas")
                      , a = r.getContext("2d", {
                        willReadFrequently: !0
                    })
                      , o = (a.textBaseline = "top",
                    a.font = "600 32px Arial",
                    {});
                    return e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }),
                    o
                }
                function t(e) {
                    var t = i.createElement("script");
                    t.src = e,
                    t.defer = !0,
                    i.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports",
                s = ["flag", "emoji"],
                n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                },
                e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }
                ),
                new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)
                                return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                            try {
                                var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));"
                                  , r = new Blob([e],{
                                    type: "text/javascript"
                                })
                                  , a = new Worker(URL.createObjectURL(r),{
                                    name: "wpTestEmojiSupports"
                                });
                                return void (a.onmessage = function(e) {
                                    c(n = e.data),
                                    a.terminate(),
                                    t(n)
                                }
                                )
                            } catch (e) {}
                        c(n = f(s, u, p))
                    }
                    t(n)
                }
                ).then(function(e) {
                    for (var t in e)
                        n.supports[t] = e[t],
                        n.supports.everything = n.supports.everything && n.supports[t],
                        "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag,
                    n.DOMReady = !1,
                    n.readyCallback = function() {
                        n.DOMReady = !0
                    }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(),
                    (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji),
                    t(e.wpemoji)))
                }))
            }((window,
            document), window._wpemojiSettings);
        </script>
        <style>
            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='formidable-css' href='./css/formidable-css-formidableforms.css' media='all'/>
        <style id='wp-block-library-inline-css'>
            :root {
                --wp-admin-theme-color: #007cba;
                --wp-admin-theme-color--rgb: 0,124,186;
                --wp-admin-theme-color-darker-10: #006ba1;
                --wp-admin-theme-color-darker-10--rgb: 0,107,161;
                --wp-admin-theme-color-darker-20: #005a87;
                --wp-admin-theme-color-darker-20--rgb: 0,90,135;
                --wp-admin-border-width-focus: 2px;
                --wp-block-synced-color: #7a00df;
                --wp-block-synced-color--rgb: 122,0,223
            }

            @media (min-resolution: 192dpi) {
                :root {
                    --wp-admin-border-width-focus:1.5px
                }
            }

            .wp-element-button {
                cursor: pointer
            }

            :root {
                --wp--preset--font-size--normal: 16px;
                --wp--preset--font-size--huge: 42px
            }

            :root .has-very-light-gray-background-color {
                background-color: #eee
            }

            :root .has-very-dark-gray-background-color {
                background-color: #313131
            }

            :root .has-very-light-gray-color {
                color: #eee
            }

            :root .has-very-dark-gray-color {
                color: #313131
            }

            :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
                background: linear-gradient(135deg,#00d084,#0693e3)
            }

            :root .has-purple-crush-gradient-background {
                background: linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)
            }

            :root .has-hazy-dawn-gradient-background {
                background: linear-gradient(135deg,#faaca8,#dad0ec)
            }

            :root .has-subdued-olive-gradient-background {
                background: linear-gradient(135deg,#fafae1,#67a671)
            }

            :root .has-atomic-cream-gradient-background {
                background: linear-gradient(135deg,#fdd79a,#004a59)
            }

            :root .has-nightshade-gradient-background {
                background: linear-gradient(135deg,#330968,#31cdcf)
            }

            :root .has-midnight-gradient-background {
                background: linear-gradient(135deg,#020381,#2874fc)
            }

            .has-regular-font-size {
                font-size: 1em
            }

            .has-larger-font-size {
                font-size: 2.625em
            }

            .has-normal-font-size {
                font-size: var(--wp--preset--font-size--normal)
            }

            .has-huge-font-size {
                font-size: var(--wp--preset--font-size--huge)
            }

            .has-text-align-center {
                text-align: center
            }

            .has-text-align-left {
                text-align: left
            }

            .has-text-align-right {
                text-align: right
            }

            #end-resizable-editor-section {
                display: none
            }

            .aligncenter {
                clear: both
            }

            .items-justified-left {
                justify-content: flex-start
            }

            .items-justified-center {
                justify-content: center
            }

            .items-justified-right {
                justify-content: flex-end
            }

            .items-justified-space-between {
                justify-content: space-between
            }

            .screen-reader-text {
                clip: rect(1px,1px,1px,1px);
                word-wrap: normal!important;
                border: 0;
                -webkit-clip-path: inset(50%);
                clip-path: inset(50%);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px
            }

            .screen-reader-text:focus {
                clip: auto!important;
                background-color: #ddd;
                -webkit-clip-path: none;
                clip-path: none;
                color: #444;
                display: block;
                font-size: 1em;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000
            }

            html :where(.has-border-color) {
                border-style: solid
            }

            html :where([style*=border-top-color]) {
                border-top-style: solid
            }

            html :where([style*=border-right-color]) {
                border-right-style: solid
            }

            html :where([style*=border-bottom-color]) {
                border-bottom-style: solid
            }

            html :where([style*=border-left-color]) {
                border-left-style: solid
            }

            html :where([style*=border-width]) {
                border-style: solid
            }

            html :where([style*=border-top-width]) {
                border-top-style: solid
            }

            html :where([style*=border-right-width]) {
                border-right-style: solid
            }

            html :where([style*=border-bottom-width]) {
                border-bottom-style: solid
            }

            html :where([style*=border-left-width]) {
                border-left-style: solid
            }

            html :where(img[class*=wp-image-]) {
                height: auto;
                max-width: 100%
            }

            :where(figure) {
                margin: 0 0 1em
            }

            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height,0px)
            }

            @media screen and (max-width: 600px) {
                html :where(.is-position-sticky) {
                    --wp-admin--admin-bar--position-offset:0px
                }
            }
        </style>
        <style id='global-styles-inline-css'>
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #009dff;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--primary: #0084ff;
                --wp--preset--color--secondary: #00aaff;
                --wp--preset--color--heading: #1F2937;
                --wp--preset--color--body: #4B5563;
                --wp--preset--color--background: #FFFFFF;
                --wp--preset--color--tertiary: #F6EBFE;
                --wp--preset--color--quaternary: #FFFBEB;
                --wp--preset--color--surface: #F8FAFC;
                --wp--preset--color--foreground: #6431F7;
                --wp--preset--color--outline: #E6E9EF;
                --wp--preset--color--neutral: #6E7787;
                --wp--preset--color--transparent: transparent;
                --wp--preset--color--current-color: currentColor;
                --wp--preset--color--inherit: inherit;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(0,0,0) 0%,rgb(0,255,225) 16%,rgb(155,81,224) 54%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
                --wp--preset--gradient--primary: linear-gradient(286.83deg, #931CF0 -1.55%, #4F2CDD 100%);
                ;--wp--preset--font-size--small: clamp(14px, 1.6vw, 16px);
                --wp--preset--font-size--medium: clamp(16px, 1.8vw, 18px);
                --wp--preset--font-size--large: clamp(20px, 2.2vw, 22px);
                --wp--preset--font-size--x-large: clamp(24px, 3vw, 28px);
                --wp--preset--font-size--x-small: clamp(12px, 1.5vw, 14px);
                --wp--preset--font-size--xx-large: clamp(28px, 3.6vw, 36px);
                --wp--preset--font-size--xxx-large: clamp(32px, 3.6vw, 44px);
                --wp--preset--font-size--xxxx-large: clamp(40px, 6.6vw, 56px);
                --wp--preset--font-family--inter: "Inter", sans-serif;
                --wp--preset--spacing--xxx-small: calc(var(--wp--preset--font-size--medium,1rem)/4);
                --wp--preset--spacing--xx-small: calc(var(--wp--preset--font-size--medium,1rem)/2);
                --wp--preset--spacing--x-small: calc(var(--wp--preset--font-size--medium,1rem));
                --wp--preset--spacing--small: calc(var(--wp--preset--font-size--medium,1rem)*1.5);
                --wp--preset--spacing--medium: calc(var(--wp--preset--font-size--medium,1rem)*2);
                --wp--preset--spacing--large: calc(var(--wp--preset--font-size--medium,1rem)*3);
                --wp--preset--spacing--x-large: calc(var(--wp--preset--font-size--medium,1rem)*4);
                --wp--preset--spacing--xx-large: calc(var(--wp--preset--font-size--medium,1rem)*6);
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
                --wp--custom--font-weight--black: 900;
                --wp--custom--font-weight--extra-bold: 800;
                --wp--custom--font-weight--bold: 700;
                --wp--custom--font-weight--semi-bold: 600;
                --wp--custom--font-weight--medium: 500;
                --wp--custom--font-weight--regular: 400;
                --wp--custom--font-weight--light: 300;
                --wp--custom--font-weight--extra-light: 200;
                --wp--custom--font-weight--thin: 100;
                --wp--custom--line-height--initial: 1;
                --wp--custom--line-height--xx-small: 1.2;
                --wp--custom--line-height--x-small: 1.3;
                --wp--custom--line-height--small: 1.4;
                --wp--custom--line-height--medium: 1.45;
                --wp--custom--line-height--large: 1.6;
                --wp--custom--border-radius--xx-small: 4px;
                --wp--custom--border-radius--x-small: 6px;
                --wp--custom--border-radius--small: 8px;
                --wp--custom--border-radius--medium: 12px;
                --wp--custom--border-radius--large: 16px;
                --wp--custom--border-radius--x-large: 20px;
                --wp--custom--border-radius--xx-large: 24px;
                --wp--custom--border-radius--full: 999px;
                --wp--custom--font-family--body: var(--wp--preset--font-family--inter);
            }

            body {
                margin: 0;
                --wp--style--global--content-size: 764px;
                --wp--style--global--wide-size: 1164px;
            }

            .wp-site-blocks {
                padding-top: var(--wp--style--root--padding-top);
                padding-bottom: var(--wp--style--root--padding-bottom);
            }

            .has-global-padding {
                padding-right: var(--wp--style--root--padding-right);
                padding-left: var(--wp--style--root--padding-left);
            }

            .has-global-padding :where(.has-global-padding) {
                padding-right: 0;
                padding-left: 0;
            }

            .has-global-padding > .alignfull {
                margin-right: calc(var(--wp--style--root--padding-right) * -1);
                margin-left: calc(var(--wp--style--root--padding-left) * -1);
            }

            .has-global-padding :where(.has-global-padding) > .alignfull {
                margin-right: 0;
                margin-left: 0;
            }

            .has-global-padding > .alignfull:where(:not(.has-global-padding)) > :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]),p,h1,h2,h3,h4,h5,h6,ul,ol) {
                padding-right: var(--wp--style--root--padding-right);
                padding-left: var(--wp--style--root--padding-left);
            }

            .has-global-padding :where(.has-global-padding) > .alignfull:where(:not(.has-global-padding)) > :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]),p,h1,h2,h3,h4,h5,h6,ul,ol) {
                padding-right: 0;
                padding-left: 0;
            }

            .wp-site-blocks > .alignleft {
                float: left;
                margin-right: 2em;
            }

            .wp-site-blocks > .alignright {
                float: right;
                margin-left: 2em;
            }

            .wp-site-blocks > .aligncenter {
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
            }

            :where(.wp-site-blocks) > * {
                margin-block-start: var(--wp--preset--spacing--x-small); margin-block-end: 0;
            }

            :where(.wp-site-blocks) > :first-child:first-child {
                margin-block-start: 0; }

            :where(.wp-site-blocks) > :last-child:last-child {
                margin-block-end: 0; }

            body {
                --wp--style--block-gap: var(--wp--preset--spacing--x-small);
            }

            :where(body .is-layout-flow) > :first-child:first-child {
                margin-block-start: 0;}

            :where(body .is-layout-flow) > :last-child:last-child {
                margin-block-end: 0;}

            :where(body .is-layout-flow) > * {
                margin-block-start: var(--wp--preset--spacing--x-small);margin-block-end: 0;
            }

            :where(body .is-layout-constrained) > :first-child:first-child {
                margin-block-start: 0;}

            :where(body .is-layout-constrained) > :last-child:last-child {
                margin-block-end: 0;}

            :where(body .is-layout-constrained) > * {
                margin-block-start: var(--wp--preset--spacing--x-small);margin-block-end: 0;
            }

            :where(body .is-layout-flex) {
                gap: var(--wp--preset--spacing--x-small);
            }

            :where(body .is-layout-grid) {
                gap: var(--wp--preset--spacing--x-small);
            }

            body .is-layout-flow > .alignleft {
                float: left;
                margin-inline-start: 0;margin-inline-end: 2em;}

            body .is-layout-flow > .alignright {
                float: right;
                margin-inline-start: 2em;margin-inline-end: 0;}

            body .is-layout-flow > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained > .alignleft {
                float: left;
                margin-inline-start: 0;margin-inline-end: 2em;}

            body .is-layout-constrained > .alignright {
                float: right;
                margin-inline-start: 2em;margin-inline-end: 0;}

            body .is-layout-constrained > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained > .alignwide {
                max-width: var(--wp--style--global--wide-size);
            }

            body .is-layout-flex {
                display: flex;
            }

            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            body .is-layout-flex > * {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            body .is-layout-grid > * {
                margin: 0;
            }

            body {
                background-color: var(--wp--preset--color--background);
                color: var(--wp--preset--color--body);
                font-family: var(--wp--custom--font-family--body);
                font-size: var(--wp--preset--font-size--medium);
                font-weight: var(--wp--custom--font-weight--regular);
                line-height: var(--wp--custom--line-height--large);
                --wp--style--root--padding-top: 0px;
                --wp--style--root--padding-right: 24px;
                --wp--style--root--padding-bottom: 0px;
                --wp--style--root--padding-left: 24px;
            }

            a:where(:not(.wp-element-button)) {
                color: var(--wp--preset--color--heading);
                text-decoration: none;
            }

            h1 {
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--xxxx-large);
                font-weight: var(--wp--custom--font-weight--medium);
                letter-spacing: -2px;
                line-height: var(--wp--custom--line-height--xx-small);
                margin-bottom: var(--wp--preset--spacing--small);
            }

            h2 {
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--xxx-large);
                font-weight: var(--wp--custom--font-weight--medium);
                letter-spacing: -1px;
                line-height: var(--wp--custom--line-height--xx-small);
                margin-top: var(--wp--preset--spacing--medium);
                margin-bottom: var(--wp--preset--spacing--x-small);
            }

            h3 {
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--xx-large);
                font-weight: var(--wp--custom--font-weight--medium);
                letter-spacing: -0.5px;
                line-height: var(--wp--custom--line-height--x-small);
                margin-top: var(--wp--preset--spacing--medium);
                margin-bottom: var(--wp--preset--spacing--x-small);
            }

            h4 {
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--x-large);
                font-weight: var(--wp--custom--font-weight--semi-bold);
                letter-spacing: -0.25px;
                line-height: var(--wp--custom--line-height--x-small);
                margin-top: var(--wp--preset--spacing--small);
                margin-bottom: var(--wp--preset--spacing--xx-small);
            }

            h5 {
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--large);
                font-weight: var(--wp--custom--font-weight--semi-bold);
                line-height: var(--wp--custom--line-height--medium);
                margin-top: var(--wp--preset--spacing--small);
                margin-bottom: var(--wp--preset--spacing--xx-small);
            }

            h6 {
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--medium);
                font-weight: var(--wp--custom--font-weight--semi-bold);
                line-height: var(--wp--custom--line-height--medium);
                margin-top: var(--wp--preset--spacing--x-small);
                margin-bottom: var(--wp--preset--spacing--xx-small);
            }

            .wp-element-button, .wp-block-button__link {
                background-color: var(--wp--preset--color--primary);
                border-radius: 0.375em;
                border-color: var(--wp--preset--color--primary);
                border-width: 0;
                color: var(--wp--preset--color--background);
                font-family: inherit;
                font-size: var(--wp--preset--font-size--small);
                font-weight: var(--wp--custom--font-weight--medium);
                line-height: var(--wp--custom--line-height--initial);
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                text-decoration: none;
            }

            .wp-element-button:hover, .wp-block-button__link:hover {
                background-color: var(--wp--preset--color--secondary);
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-primary-color {
                color: var(--wp--preset--color--primary) !important;
            }

            .has-secondary-color {
                color: var(--wp--preset--color--secondary) !important;
            }

            .has-heading-color {
                color: var(--wp--preset--color--heading) !important;
            }

            .has-body-color {
                color: var(--wp--preset--color--body) !important;
            }

            .has-background-color {
                color: var(--wp--preset--color--background) !important;
            }

            .has-tertiary-color {
                color: var(--wp--preset--color--tertiary) !important;
            }

            .has-quaternary-color {
                color: var(--wp--preset--color--quaternary) !important;
            }

            .has-surface-color {
                color: var(--wp--preset--color--surface) !important;
            }

            .has-foreground-color {
                color: var(--wp--preset--color--foreground) !important;
            }

            .has-outline-color {
                color: var(--wp--preset--color--outline) !important;
            }

            .has-neutral-color {
                color: var(--wp--preset--color--neutral) !important;
            }

            .has-transparent-color {
                color: var(--wp--preset--color--transparent) !important;
            }

            .has-current-color-color {
                color: var(--wp--preset--color--current-color) !important;
            }

            .has-inherit-color {
                color: var(--wp--preset--color--inherit) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-primary-background-color {
                background-color: var(--wp--preset--color--primary) !important;
            }

            .has-secondary-background-color {
                background-color: var(--wp--preset--color--secondary) !important;
            }

            .has-heading-background-color {
                background-color: var(--wp--preset--color--heading) !important;
            }

            .has-body-background-color {
                background-color: var(--wp--preset--color--body) !important;
            }

            .has-background-background-color {
                background-color: var(--wp--preset--color--background) !important;
            }

            .has-tertiary-background-color {
                background-color: var(--wp--preset--color--tertiary) !important;
            }

            .has-quaternary-background-color {
                background-color: var(--wp--preset--color--quaternary) !important;
            }

            .has-surface-background-color {
                background-color: var(--wp--preset--color--surface) !important;
            }

            .has-foreground-background-color {
                background-color: var(--wp--preset--color--foreground) !important;
            }

            .has-outline-background-color {
                background-color: var(--wp--preset--color--outline) !important;
            }

            .has-neutral-background-color {
                background-color: var(--wp--preset--color--neutral) !important;
            }

            .has-transparent-background-color {
                background-color: var(--wp--preset--color--transparent) !important;
            }

            .has-current-color-background-color {
                background-color: var(--wp--preset--color--current-color) !important;
            }

            .has-inherit-background-color {
                background-color: var(--wp--preset--color--inherit) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-primary-border-color {
                border-color: var(--wp--preset--color--primary) !important;
            }

            .has-secondary-border-color {
                border-color: var(--wp--preset--color--secondary) !important;
            }

            .has-heading-border-color {
                border-color: var(--wp--preset--color--heading) !important;
            }

            .has-body-border-color {
                border-color: var(--wp--preset--color--body) !important;
            }

            .has-background-border-color {
                border-color: var(--wp--preset--color--background) !important;
            }

            .has-tertiary-border-color {
                border-color: var(--wp--preset--color--tertiary) !important;
            }

            .has-quaternary-border-color {
                border-color: var(--wp--preset--color--quaternary) !important;
            }

            .has-surface-border-color {
                border-color: var(--wp--preset--color--surface) !important;
            }

            .has-foreground-border-color {
                border-color: var(--wp--preset--color--foreground) !important;
            }

            .has-outline-border-color {
                border-color: var(--wp--preset--color--outline) !important;
            }

            .has-neutral-border-color {
                border-color: var(--wp--preset--color--neutral) !important;
            }

            .has-transparent-border-color {
                border-color: var(--wp--preset--color--transparent) !important;
            }

            .has-current-color-border-color {
                border-color: var(--wp--preset--color--current-color) !important;
            }

            .has-inherit-border-color {
                border-color: var(--wp--preset--color--inherit) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-primary-gradient-background {
                background: var(--wp--preset--gradient--primary) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            .has-x-small-font-size {
                font-size: var(--wp--preset--font-size--x-small) !important;
            }

            .has-xx-large-font-size {
                font-size: var(--wp--preset--font-size--xx-large) !important;
            }

            .has-xxx-large-font-size {
                font-size: var(--wp--preset--font-size--xxx-large) !important;
            }

            .has-xxxx-large-font-size {
                font-size: var(--wp--preset--font-size--xxxx-large) !important;
            }

            .has-inter-font-family {
                font-family: var(--wp--preset--font-family--inter) !important;
            }
        </style>
        <style id='wp-webfonts-inline-css'>
            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 100;
                font-display: fallback;
                src: url('./fonts/Inter-Thin.woff2') format('woff2');
            }

            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 300;
                font-display: fallback;
                src: url('./fonts/Inter-Light.woff2') format('woff2');
            }

            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url('./fonts/Inter-Regular.woff2') format('woff2');
            }

            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 500;
                font-display: fallback;
                src: url('./fonts/Inter-Medium.woff2') format('woff2');
            }

            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 600;
                font-display: fallback;
                src: url('./fonts/Inter-SemiBold.woff2') format('woff2');
            }

            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 700;
                font-display: fallback;
                src: url('./fonts/Inter-Bold.woff2') format('woff2');
            }
        </style>
        <link rel='stylesheet' id='htbbootstrap-css' href='./css/ht-mega-for-elementor-assets-css-htbbootstrap.css' media='all'/>
        <link rel='stylesheet' id='font-awesome-css' href='./css/elementor-assets-lib-font-awesome-css-font-awesome.min.css' media='all'/>
        <link rel='stylesheet' id='htmega-animation-css' href='./css/ht-mega-for-elementor-assets-css-animation.css' media='all'/>
        <link rel='stylesheet' id='htmega-keyframes-css' href='./css/ht-mega-for-elementor-assets-css-htmega-keyframes.css' media='all'/>
        <link rel='stylesheet' id='spectra-one-css' href='./css/spectra-one-assets-css-minified-style.min.css' media='all'/>
        <style id='spectra-one-inline-css'>
            body [class*='uagb-block-'] {
                margin-top: 0px;
                margin-block-start:0px;}
        </style>
        <link rel='stylesheet' id='spectra-one-gutenberg-css' href='./css/spectra-one-assets-css-minified-gutenberg.min.css' media='all'/>
        <link rel='stylesheet' id='elementor-icons-ekiticons-css' href='./css/elementskit-lite-modules-elementskit-icon-pack-assets-css-ekiticons.css' media='all'/>
        <link rel='stylesheet' id='elementor-frontend-css' href='./css/elementor-assets-css-frontend.min.css' media='all'/>
        <link rel='stylesheet' id='swiper-css' href='./css/elementor-assets-lib-swiper-v8-css-swiper.min.css' media='all'/>
        <link rel='stylesheet' id='elementor-post-9-css' href='./css/elementor-css-post-9.css' media='all'/>
        <link rel='stylesheet' id='elementor-pro-css' href='./css/elementor-pro-assets-css-frontend.min.css' media='all'/>
        <link rel='stylesheet' id='elementor-global-css' href='./css/elementor-css-global.css' media='all'/>
        <link rel='stylesheet' id='elementor-post-848-css' href='./css/elementor-css-post-848.css' media='all'/>
        <link rel='stylesheet' id='ekit-widget-styles-css' href='./css/elementskit-lite-widgets-init-assets-css-widget-styles.css' media='all'/>
        <link rel='stylesheet' id='ekit-responsive-css' href='./css/elementskit-lite-widgets-init-assets-css-responsive.css' media='all'/>
        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3' media='all'/>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <script>
            /* <![CDATA[ */
            var rcewpp = {
                "ajax_url": "https://webedit.nvrm.uk/wp-admin/admin-ajax.php",
                "nonce": "a2a3b3fbf4",
                "home_url": "https://webedit.nvrm.uk/",
                "settings_icon": 'https://webedit.nvrm.uk/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
                "settings_hover_icon": 'https://webedit.nvrm.uk/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
            };
            /* ]]\> */
        </script>
        <script src='./js/jquery-jquery.min.js' id='jquery-core-js'></script>
        <script src='./js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script>
        <link rel="https://api.w.org/" href="https://webedit.nvrm.uk/wp-json/"/>
        <link rel="alternate" type="application/json" href="https://webedit.nvrm.uk/wp-json/wp/v2/pages/848"/>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://webedit.nvrm.uk/xmlrpc.php?rsd"/>
        <meta name="generator" content="WordPress 6.3"/>
        <link rel="canonical" href="https://webedit.nvrm.uk/admin-user-view/"/>
        <link rel='shortlink' href='https://webedit.nvrm.uk/?p=848'/>
        <link rel="alternate" type="application/json+oembed" href="https://webedit.nvrm.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebedit.nvrm.uk%2Fadmin-user-view%2F"/>
        <link rel="alternate" type="text/xml+oembed" href="https://webedit.nvrm.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebedit.nvrm.uk%2Fadmin-user-view%2F&#038;format=xml"/>
        <meta name="generator" content="Elementor 3.15.2; features: e_dom_optimization, e_optimized_assets_loading, e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
        <meta name="theme-color" content="#1F2129">
        <style id="uagb-style-conditional-extension">
            @media (min-width: 1025px) {
                body .uag-hide-desktop.uagb-google-map__wrap,body .uag-hide-desktop {
                    display:none !important
                }
            }

            @media (min-width: 768px) and (max-width: 1024px) {
                body .uag-hide-tab.uagb-google-map__wrap,body .uag-hide-tab {
                    display:none !important
                }
            }

            @media (max-width: 767px) {
                body .uag-hide-mob.uagb-google-map__wrap,body .uag-hide-mob {
                    display:none !important
                }
            }
        </style>
        <style id="uagb-style-frontend-848">
            .uag-blocks-common-selector {
                z-index: var(--z-index-desktop) !important
            }

            @media (max-width: 976px) {
                .uag-blocks-common-selector {
                    z-index:var(--z-index-tablet) !important
                }
            }

            @media (max-width: 767px) {
                .uag-blocks-common-selector {
                    z-index:var(--z-index-mobile) !important
                }
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
    </head>
    <body class="page-template-default page page-id-848 wp-embed-responsive has-dashicons elementor-default elementor-template-canvas elementor-kit-9 elementor-page elementor-page-848 elementor-page-60">
        <div data-elementor-type="wp-page" data-elementor-id="848" class="elementor elementor-848" data-elementor-post-type="page">
            <div class="elementor-element elementor-element-9c35f39 e-flex e-con-boxed e-con" data-id="9c35f39" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-443372b e-con-full e-flex e-con" data-id="443372b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-d6617b8 e-grid e-con-boxed e-con" data-id="d6617b8" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-53b45af elementor-widget elementor-widget-heading" data-id="53b45af" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">NVRM | Admin Control</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d749d9a elementor-align-center elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="d749d9a" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-eye" viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Sign Out</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bb237ac e-con-full e-flex e-con" data-id="bb237ac" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-5213ec1 e-flex e-con-boxed e-con" data-id="5213ec1" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-d15718c elementor-widget elementor-widget-heading" data-id="d15718c" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Search User</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-0123f61 e-flex e-con-boxed e-con" data-id="0123f61" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-641afa7 e-con-full e-flex e-con" data-id="641afa7" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-3644881 e-grid e-con-boxed e-con" data-id="3644881" data-element_type="container" data-settings="{&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                            <div class="e-con-inner">
                            <?php
    // Assuming you have a database connection $conn

    $sql = "SELECT * FROM userData WHERE guildId = 1105532171575377940";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userName = $row['userName'];
            $userDataId = $row['userId'];
            $userAvatarURL = $row['userAvatarURL'];

            echo '<div class="elementor-element elementor-element-b546d5c e-grid e-con-boxed e-con" data-id="b546d5c" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">';
            echo '    <div class="e-con-inner">';
            echo '        <div class="elementor-element elementor-element-b3306a6 elementor-widget elementor-widget-heading" data-id="b3306a6" data-element_type="widget" data-widget_type="heading.default">';
            echo '            <div class="elementor-widget-container">';
            echo '                <h2 class="elementor-heading-title elementor-size-default">' . $userName . '</h2>';
            echo '            </div>';
            echo '        </div>';
            echo '        <div class="elementor-element elementor-element-89efa71 elementor-widget elementor-widget-heading" data-id="89efa71" data-element_type="widget" data-widget_type="heading.default">';
            echo '            <div class="elementor-widget-container">';
            echo '                <h2 class="elementor-heading-title elementor-size-default">Member</h2>';
            echo '            </div>';
            echo '        </div>';
            echo '        <div class="elementor-element elementor-element-d53a05d elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d53a05d" data-element_type="widget" data-widget_type="divider.default">';
            echo '            <div class="elementor-widget-container">';
            echo '              <div class="elementor-divider" style="--divider-pattern-url: url(&quot;data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; preserveAspectRatio=&#039;none&#039; overflow=&#039;visible&#039; height=&#039;100%&#039; viewBox=&#039;0 0 20 16&#039; fill=&#039;none&#039; stroke=&#039;black&#039; stroke-width=&#039;2.1&#039; stroke-linecap=&#039;square&#039; stroke-miterlimit=&#039;10&#039;%3E%3Cg transform=&#039;translate(-12.000000, 0)&#039;%3E%3Cpath d=&#039;M28,0L10,18&#039;/%3E%3Cpath d=&#039;M18,0L0,18&#039;/%3E%3Cpath d=&#039;M48,0L30,18&#039;/%3E%3Cpath d=&#039;M38,0L20,18&#039;/%3E%3C/g%3E%3C/svg%3E&quot;);">';
            echo '                  <span class="elementor-divider-separator"></span>';
            echo '                 </div>';
            echo '            </div>';
            echo '        </div>';
            echo '        <div class="elementor-element elementor-element-854665b elementor-widget elementor-widget-image" data-id="854665b" data-element_type="widget" data-widget_type="image.default">';
            echo '            <div class="elementor-widget-container">';
            echo '              <img decoding="async" fetchpriority="high" width="512" height="512" src="' . $userAvatarURL . '" class="attachment-large size-large wp-image-860" style="border-radius: 50%;" alt="" srcset="'. $userAvatarURL .' 512w, '. $userAvatarURL .' 300w, '. $userAvatarURL .' 150w" sizes="(max-width: 512px) 100vw, 512px"/>';
            echo '            </div>';
            echo '        </div>';
            echo '        <div class="elementor-element elementor-element-2115e4e e-grid e-con-boxed e-con" data-id="2115e4e" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">';
            echo '            <div class="e-con-inner">';
            echo '                    <div class="elementor-element elementor-element-87d5b64 elementor-align-justify elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="87d5b64" data-element_type="widget" data-widget_type="button.default">';
            echo '<div class="elementor-widget-container">';
            echo '<div class="elementor-button-wrapper">';
            echo '   <a class="elementor-button elementor-button-link elementor-size-sm" onClick="setCasesData(`' . str_replace('"', '\'', json_encode($row)) . '`)" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6Ijk0NSIsInRvZ2dsZSI6ZmFsc2V9">';            
            echo '       <span class="elementor-button-content-wrapper">';
                                        echo '           <span class="elementor-button-icon elementor-align-icon-left">';
                                        echo '               <svg aria-hidden="true" class="e-font-icon-svg e-fas-eye" viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">';
                                        echo '                   <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>';
                                        echo '               </svg>';
                                        echo '           </span>';
                                        echo '           <span class="elementor-button-text">View this user</span>';
                                        echo '       </span>';
                                        echo '   </a>';
                                        echo '</div>';
                                        echo '</div>';
            echo '                                                     </div>';
            echo '                                                      <div class="elementor-element elementor-element-66eb478 elementor-align-justify elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="66eb478" data-element_type="widget" data-widget_type="button.default">';
            echo '                                                         <div class="elementor-widget-container">';
            echo '                                                               <div class="elementor-button-wrapper">';
            echo '                                                                  <a class="elementor-button elementor-button-link elementor-size-sm" href="#">';
            echo '                                                                      <span class="elementor-button-content-wrapper">';
            echo '                                                                         <span class="elementor-button-icon elementor-align-icon-left">';
            echo '                                                                             <svg aria-hidden="true" class="e-font-icon-svg e-fas-minus-circle" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">';
            echo '                                                 <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>';
            echo '                                             </svg>';
            echo '                                        </span>';
            echo '                                     <span class="elementor-button-text">Remove this user</span>';
            echo '                                </span>';
            echo '                             </a>';
            echo '                         </div>';
            echo '                     </div>';
            echo '                </div>';
            echo '            </div>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
    } else {
        echo 'Error retrieving user data.';
    }
    ?>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style id="skip-link-styles">
            .skip-link.screen-reader-text {
                border: 0;
                clip: rect(1px,1px,1px,1px);
                clip-path: inset(50%);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute !important;
                width: 1px;
                word-wrap: normal !important;
            }

            .skip-link.screen-reader-text:focus {
                background-color: #eee;
                clip: auto !important;
                clip-path: none;
                color: #444;
                display: block;
                font-size: 1em;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000;
            }
        </style>
        <script>
            (function() {
                var skipLinkTarget = document.querySelector('main'), sibling, skipLinkTargetID, skipLink;

                // Early exit if a skip-link target can't be located.
                if (!skipLinkTarget) {
                    return;
                }

                /*
		 * Get the site wrapper.
		 * The skip-link will be injected in the beginning of it.
		 */
                sibling = document.querySelector('.wp-site-blocks');

                // Early exit if the root element was not found.
                if (!sibling) {
                    return;
                }

                // Get the skip-link target's ID, and generate one if it doesn't exist.
                skipLinkTargetID = skipLinkTarget.id;
                if (!skipLinkTargetID) {
                    skipLinkTargetID = 'wp--skip-link--target';
                    skipLinkTarget.id = skipLinkTargetID;
                }

                // Create the skip link.
                skipLink = document.createElement('a');
                skipLink.classList.add('skip-link', 'screen-reader-text');
                skipLink.href = '#' + skipLinkTargetID;
                skipLink.innerHTML = 'Skip to content';

                // Inject the skip link.
                sibling.parentElement.insertBefore(skipLink, sibling);
            }());
        </script>
        <div data-elementor-type="popup" data-elementor-id="945" class="elementor elementor-945 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeIn&quot;,&quot;exit_animation&quot;:&quot;fadeIn&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.4,&quot;sizes&quot;:[]},&quot;close_button_delay&quot;:0.1,&quot;prevent_scroll&quot;:&quot;yes&quot;,&quot;avoid_multiple_popups&quot;:&quot;yes&quot;,&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;timing&quot;:[]}" data-elementor-post-type="elementor_library">
            <div class="elementor-element elementor-element-5a56839c e-flex e-con-boxed e-con" data-id="5a56839c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-2526e7a e-grid e-con-boxed e-con" data-id="2526e7a" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-a251421 elementor-widget elementor-widget-heading" data-id="a251421" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default" id="user_filldata-username">Username</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b3fcc2f elementor-widget elementor-widget-heading" data-id="b3fcc2f" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Member</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-0e1663f elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="0e1663f" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider" style="--divider-pattern-url: url(&quot;data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; preserveAspectRatio=&#039;none&#039; overflow=&#039;visible&#039; height=&#039;100%&#039; viewBox=&#039;0 0 20 16&#039; fill=&#039;none&#039; stroke=&#039;black&#039; stroke-width=&#039;2.1&#039; stroke-linecap=&#039;square&#039; stroke-miterlimit=&#039;10&#039;%3E%3Cg transform=&#039;translate(-12.000000, 0)&#039;%3E%3Cpath d=&#039;M28,0L10,18&#039;/%3E%3Cpath d=&#039;M18,0L0,18&#039;/%3E%3Cpath d=&#039;M48,0L30,18&#039;/%3E%3Cpath d=&#039;M38,0L20,18&#039;/%3E%3C/g%3E%3C/svg%3E&quot;);">
                                        <span class="elementor-divider-separator"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-e4024f0 e-flex e-con-boxed e-con" data-id="e4024f0" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-31a8d42 e-con-full e-grid e-con" data-id="31a8d42" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;background_background&quot;:&quot;classic&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                        <div class="elementor-element elementor-element-0487577 elementor-widget elementor-widget-heading" data-id="0487577" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Cases</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-73a6a2c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="73a6a2c" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator"></span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7b7b36b e-grid e-con-boxed e-con" data-id="7b7b36b" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-5082b7a elementor-align-justify elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="5082b7a" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-suitcase" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Case Placeholder</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6882f08 elementor-align-justify elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="6882f08" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-suitcase" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Case Placeholder</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bb37c8d e-con-full e-grid e-con" data-id="bb37c8d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;background_background&quot;:&quot;classic&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                        <div class="elementor-element elementor-element-e5bced5 elementor-widget elementor-widget-heading" data-id="e5bced5" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Transactions</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-74c91cc elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="74c91cc" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator"></span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5254511 e-grid e-con-boxed e-con" data-id="5254511" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-1657fef elementor-align-justify elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="1657fef" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-money-check-alt" viewbox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Transaction Placeholder</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-0be1429 elementor-align-justify elementor-widget__width-inherit elementor-widget elementor-widget-button" data-id="0be1429" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-money-check-alt" viewbox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="elementor-button-text">Transaction Placeholder</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link rel='stylesheet' id='elementor-post-945-css' href='./css/elementor-css-post-945.css' media='all'/>
        <link rel='stylesheet' id='e-animations-css' href='./css/elementor-assets-lib-animations-animations.min.css' media='all'/>
        <script src='./js/ht-mega-for-elementor-assets-js-popper.min.js' id='htmega-popper-js'></script>
        <script src='./js/ht-mega-for-elementor-assets-js-htbbootstrap.js' id='htbbootstrap-js'></script>
        <script src='./js/ht-mega-for-elementor-assets-js-waypoints.js' id='waypoints-js'></script>
        <script src='./js/spectra-one-assets-js-script.js' id='spectra-one-js'></script>
        <script src='./js/elementskit-lite-libs-framework-assets-js-frontend-script.js' id='elementskit-framework-js-frontend-js'></script>
        <script id="elementskit-framework-js-frontend-js-after">
            var elementskit = {
                resturl: 'https://webedit.nvrm.uk/wp-json/elementskit/v1/',
            }
        </script>
        <script src='./js/elementskit-lite-widgets-init-assets-js-widget-scripts.js' id='ekit-widget-scripts-js'></script>
        <script src='./js/elementor-pro-assets-js-webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
        <script src='./js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
        <script src='./js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
        <script src='./js/dist-vendor-wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script>
        <script src='./js/dist-vendor-regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
        <script src='./js/dist-vendor-wp-polyfill.min.js' id='wp-polyfill-js'></script>
        <script src='./js/dist-hooks.min.js' id='wp-hooks-js'></script>
        <script src='./js/dist-i18n.min.js' id='wp-i18n-js'></script>
        <script id="wp-i18n-js-after">
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
        </script>
        <script id="elementor-pro-frontend-js-before">
            var ElementorProFrontendConfig = {
                "ajaxurl": "https:\/\/webedit.nvrm.uk\/wp-admin\/admin-ajax.php",
                "nonce": "8881417940",
                "urls": {
                    "assets": "https:\/\/webedit.nvrm.uk\/wp-content\/plugins\/elementor-pro\/assets\/",
                    "rest": "https:\/\/webedit.nvrm.uk\/wp-json\/"
                },
                "shareButtonsNetworks": {
                    "facebook": {
                        "title": "Facebook",
                        "has_counter": true
                    },
                    "twitter": {
                        "title": "Twitter"
                    },
                    "linkedin": {
                        "title": "LinkedIn",
                        "has_counter": true
                    },
                    "pinterest": {
                        "title": "Pinterest",
                        "has_counter": true
                    },
                    "reddit": {
                        "title": "Reddit",
                        "has_counter": true
                    },
                    "vk": {
                        "title": "VK",
                        "has_counter": true
                    },
                    "odnoklassniki": {
                        "title": "OK",
                        "has_counter": true
                    },
                    "tumblr": {
                        "title": "Tumblr"
                    },
                    "digg": {
                        "title": "Digg"
                    },
                    "skype": {
                        "title": "Skype"
                    },
                    "stumbleupon": {
                        "title": "StumbleUpon",
                        "has_counter": true
                    },
                    "mix": {
                        "title": "Mix"
                    },
                    "telegram": {
                        "title": "Telegram"
                    },
                    "pocket": {
                        "title": "Pocket",
                        "has_counter": true
                    },
                    "xing": {
                        "title": "XING",
                        "has_counter": true
                    },
                    "whatsapp": {
                        "title": "WhatsApp"
                    },
                    "email": {
                        "title": "Email"
                    },
                    "print": {
                        "title": "Print"
                    }
                },
                "facebook_sdk": {
                    "lang": "en_US",
                    "app_id": ""
                },
                "lottie": {
                    "defaultAnimationUrl": "https:\/\/webedit.nvrm.uk\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
                }
            };
        </script>
        <script src='./js/elementor-pro-assets-js-frontend.min.js' id='elementor-pro-frontend-js'></script>
        <script src='./js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script>
        <script src='./js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script>
        <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close",
                    "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                    "a11yCarouselPrevSlideMessage": "Previous slide",
                    "a11yCarouselNextSlideMessage": "Next slide",
                    "a11yCarouselFirstSlideMessage": "This is the first slide",
                    "a11yCarouselLastSlideMessage": "This is the last slide",
                    "a11yCarouselPaginationBulletMessage": "Go to slide"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile Portrait",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Landscape",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablet Portrait",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Landscape",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.15.2",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "e_optimized_assets_loading": true,
                    "e_font_icon_svg": true,
                    "additional_custom_breakpoints": true,
                    "container": true,
                    "e_swiper_latest": true,
                    "container_grid": true,
                    "theme_builder_v2": true,
                    "editor_v2": true,
                    "landing-pages": true,
                    "e_global_styleguide": true,
                    "page-transitions": true,
                    "notes": true,
                    "loop": true,
                    "form-submissions": true,
                    "e_scroll_snap": true
                },
                "urls": {
                    "assets": "https:\/\/webedit.nvrm.uk\/wp-content\/plugins\/elementor\/assets\/"
                },
                "swiperClass": "swiper",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "body_background_background": "classic",
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 848,
                    "title": "admin-user-view%20%E2%80%93%20Nevermore%20Designs",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
        </script>
        <script src='./js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script>
        <script src='./js/elementor-pro-assets-js-elements-handlers.min.js' id='pro-elements-handlers-js'></script>
        <script src='./js/elementskit-lite-widgets-init-assets-js-animate-circle.min.js' id='animate-circle-js'></script>
        <script id='elementskit-elementor-js-extra'>
            var ekit_config = {
                "ajaxurl": "https:\/\/webedit.nvrm.uk\/wp-admin\/admin-ajax.php",
                "nonce": "73d463270d"
            };
        </script>
        <script src='./js/elementskit-lite-widgets-init-assets-js-elementor.js' id='elementskit-elementor-js'></script>
        <script src='./js/loadAdminData.js'></script>
    </body>
</html>
