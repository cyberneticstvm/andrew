<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Wix.com Website Builder" />

    <link rel="icon" sizes="192x192" href="https://static.parastorage.com/client/pfavico.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="https://static.parastorage.com/client/pfavico.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://static.parastorage.com/client/pfavico.ico" type="image/x-icon" />

    <!-- Safari Pinned Tab Icon -->
    <!-- <link rel="mask-icon" href="https://static.parastorage.com/client/pfavico.ico"> -->

    <!-- Original trials -->


    <!-- Legacy Polyfills -->
    <script nomodule="" src="https://static.parastorage.com/unpkg/core-js-bundle@3.2.1/minified.js"></script>
    <script nomodule="" src="https://static.parastorage.com/unpkg/focus-within-polyfill@5.0.9/dist/focus-within-polyfill.js"></script>

    <script nomodule="" src="https://polyfill-fastly.io/v3/polyfill.min.js?features=fetch"></script>

    <!-- Performance API Polyfills -->
    <script>
        (function() {
            var noop = function noop() {};
            if ("performance" in window === false) {
                window.performance = {};
            }
            window.performance.mark = performance.mark || noop;
            window.performance.measure = performance.measure || noop;
            if ("now" in window.performance === false) {
                var nowOffset = Date.now();
                if (performance.timing && performance.timing.navigationStart) {
                    nowOffset = performance.timing.navigationStart;
                }
                window.performance.now = function now() {
                    return Date.now() - nowOffset;
                };
            }
        })();
    </script>

    <!-- Globals Definitions -->
    <script>
        (function() {
            var now = Date.now()
            window.initialTimestamps = {
                initialTimestamp: now,
                initialRequestTimestamp: Math.round(performance.timeOrigin ? performance.timeOrigin : now - performance.now())
            }

            window.thunderboltTag = "QA_READY"
            window.thunderboltVersion = "1.14766.0"
        })();
    </script>





    <!-- sendFedopsLoadStarted.inline -->
    <!-- Essential Viewer Model -->
    <script type="application/json" id="wix-essential-viewer-model">
        {
            "fleetConfig": {
                "fleetName": "thunderbolt-renderer-gradual",
                "type": "Rollout",
                "code": 1
            },
            "mode": {
                "qa": false,
                "enableTestApi": false,
                "debug": false,
                "ssrIndicator": false,
                "ssrOnly": false,
                "siteAssetsFallback": "enable"
            },
            "componentsLibrariesTopology": [{
                "artifactId": "editor-elements",
                "namespace": "wixui",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
            }, {
                "artifactId": "editor-elements",
                "namespace": "dsgnsys",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
            }],
            "siteFeaturesConfigs": {
                "sessionManager": {
                    "isRunningInDifferentSiteContext": false
                }
            },
            "language": {
                "userLanguage": "en"
            },
            "siteAssets": {
                "clientTopology": {
                    "mediaRootUrl": "https:\/\/static.wixstatic.com",
                    "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                    "moduleRepoUrl": "https:\/\/static.parastorage.com\/unpkg",
                    "fileRepoUrl": "https:\/\/static.parastorage.com\/services",
                    "siteAssetsUrl": "https:\/\/siteassets.parastorage.com",
                    "pageJsonServerUrls": ["https:\/\/pages.parastorage.com", "https:\/\/staticorigin.wixstatic.com", "https:\/\/mx.andrewlord.com.au", "https:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page"],
                    "pathOfTBModulesInFileRepoForFallback": "wix-thunderbolt\/dist\/"
                }
            },
            "siteFeatures": ["assetsLoader", "businessLogger", "captcha", "clickHandlerRegistrar", "commonConfig", "componentsLoader", "componentsRegistry", "consentPolicy", "cyclicTabbing", "environmentWixCodeSdk", "environment", "lightbox", "locationWixCodeSdk", "navigationManager", "navigationPhases", "ooi", "pages", "panorama", "protectedPages", "renderer", "reporter", "routerFetch", "router", "scrollRestoration", "seoWixCodeSdk", "seo", "sessionManager", "siteMembersWixCodeSdk", "siteMembers", "siteScrollBlocker", "siteWixCodeSdk", "stores", "structureApi", "thunderboltInitializer", "tpaCommons", "translations", "usedPlatformApis", "warmupData", "windowMessageRegistrar", "windowWixCodeSdk", "wixCustomElementComponent", "wixEmbedsApi", "componentsReact", "platform"],
            "site": {
                "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                "isSEO": false
            },
            "media": {
                "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                "mediaRootUrl": "https:\/\/static.wixstatic.com\/",
                "staticVideoUrl": "https:\/\/video.wixstatic.com\/"
            },
            "requestUrl": "https:\/\/mx.andrewlord.com.au\/sample-quiz-page",
            "rollout": {
                "siteAssetsVersionsRollout": false,
                "isDACRollout": 0,
                "isTBRollout": true
            },
            "commonConfig": {
                "brand": "wix",
                "host": "VIEWER",
                "bsi": "",
                "consentPolicy": {},
                "consentPolicyHeader": {},
                "siteRevision": "69",
                "renderingFlow": "NONE",
                "language": "en",
                "locale": "en-au"
            },
            "interactionSampleRatio": 0.01,
            "dynamicModelUrl": "https:\/\/mx.andrewlord.com.au\/_api\/v2\/dynamicmodel",
            "accessTokensUrl": "https:\/\/mx.andrewlord.com.au\/_api\/v1\/access-tokens",
            "isExcludedFromSecurityExperiments": false,
            "experiments": {
                "specs.thunderbolt.hardenClientGlobals_Array_URL_JSON": true,
                "specs.thunderbolt.hardenClientGlobals_Text": true,
                "specs.thunderbolt.hardenWindowOpen": true,
                "specs.thunderbolt.removeWixEmbedsAppToken": true
            }
        }
    </script>
    <script>
        window.viewerModel = JSON.parse(document.getElementById('wix-essential-viewer-model').textContent)
    </script>


    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/handleAccessTokens.inline.5a67b563.bundle.min.js">
        ! function() {
            "use strict";
            const e = e => "string" == typeof e ? decodeURIComponent(e).toLowerCase().trimStart() : e,
                t = "client-session-bind",
                o = "client-binding",
                s = "tbReady",
                r = "security_overrideGlobals",
                n = [t, o, "svSession", "smSession", "server-session-bind", "wixSession2"].map((e => e.toLowerCase())),
                i = Object.getOwnPropertyDescriptor(Document.prototype, "cookie"),
                {
                    isExcludedFromSecurityExperiments: c,
                    experiments: a,
                    siteFeaturesConfigs: d,
                    accessTokensUrl: l
                } = window.viewerModel,
                m = l,
                u = document.cookie.split(";").map((e => e.trim())).filter((e => e.startsWith(t)))[0]?.split("=")[1],
                p = {};
            if (u && (p[o] = u, (() => {
                    const e = `${t}=; domain=${location.hostname}; max-age=0; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT`;
                    i.set.call(document, e)
                })()), a["specs.thunderbolt.hardenFetchAndXHR"] && !c) {
                let w = fetch;

                function f(e) {
                    const {
                        logger: t
                    } = e.detail;
                    try {
                        window.tb.init({
                            fetch: w,
                            fetchHeaders: p
                        })
                    } catch (e) {
                        const o = new Error("TB003");
                        t.captureError(o, {
                            tags: {
                                feature: "thunderbolt-security"
                            }
                        }), t.meter(`${r}_${o.message}`, {
                            paramsOverrides: {
                                evid: "26",
                                errorType: r,
                                eventString: o.message
                            }
                        }), window?.viewerModel?.mode.debug && console.error(e)
                    } finally {
                        removeEventListener(s, f), w = fetch
                    }
                }
                addEventListener(s, f)
            } else window.fetchDynamicModel = () => d.sessionManager.isRunningInDifferentSiteContext ? Promise.resolve({}) : fetch(m, {
                credentials: "same-origin",
                headers: p
            }).then((function(e) {
                if (!e.ok) throw new Error(`[${e.status}]${e.statusText}`);
                return e.json()
            })), window.dynamicModelPromise = window.fetchDynamicModel();
            a["specs.thunderbolt.hardenCookieAccess"] && Object.defineProperty(document, "cookie", {
                get() {
                    return i.get.call(document).split(";").filter((t => {
                        const o = e(t.split("=")[0]);
                        return !n.map((e => e.toLowerCase())).includes(o)
                    })).join(";").trimStart()
                },
                set(t) {
                    const o = e(t.split(";")[0]);
                    n.every((e => !o.startsWith(e.toLowerCase()))) && i.set.call(document, t)
                },
                enumerable: !0,
                configurable: !1
            })
        }();
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/handleAccessTokens.inline.5a67b563.bundle.min.js.map
    </script>


    <script>
        window.commonConfig = viewerModel.commonConfig
    </script>


    <!-- initCustomElements -->
    <meta name="wix-dynamic-custom-elements" content="">

    <!-- Initial CSS -->
    <style data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/main.c063b4f9.min.css">
        body.device-mobile-optimized {
            overflow-x: hidden;
            overflow-y: scroll
        }

        body.device-mobile-optimized:not(.responsive) #SITE_CONTAINER {
            margin-left: auto;
            margin-right: auto;
            overflow-x: visible;
            position: relative;
            width: 320px
        }

        body.device-mobile-optimized:not(.responsive):not(.blockSiteScrolling) #SITE_CONTAINER {
            margin-top: 0
        }

        body.device-mobile-optimized>* {
            max-width: 100% !important
        }

        body.device-mobile-optimized #site-root {
            overflow-x: hidden;
            overflow-y: hidden
        }

        @supports(overflow:clip) {
            body.device-mobile-optimized #site-root {
                overflow-x: clip;
                overflow-y: clip
            }
        }

        body.device-mobile-non-optimized:not(.removeWrappers) #SITE_CONTAINER #site-root {
            overflow-x: hidden;
            overflow-y: auto
        }

        body.device-mobile-non-optimized.removeWrappers #site-root {
            overflow-x: clip
        }

        body.device-mobile-non-optimized.fullScreenMode {
            background-color: #5f6360
        }

        body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,
        body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,
        body.device-mobile-non-optimized.fullScreenMode #site-root,
        body.fullScreenMode #WIX_ADS {
            visibility: hidden
        }

        body.fullScreenMode {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        body.fullScreenMode.device-mobile-optimized #TINY_MENU {
            opacity: 0;
            pointer-events: none
        }

        body.fullScreenMode-scrollable.device-mobile-optimized {
            overflow-x: hidden !important;
            overflow-y: auto !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,
        body.fullScreenMode-scrollable.device-mobile-optimized #site-root {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND,
        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage {
            height: auto !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage.mesh-layout {
            height: 0 !important
        }

        body.blockSiteScrolling,
        body.siteScrollingBlocked {
            position: fixed;
            width: 100%
        }

        body.blockSiteScrolling #SITE_CONTAINER {
            margin-top: calc(var(--blocked-site-scroll-margin-top)*-1)
        }

        body.blockSiteScrolling:not(.responsive) #WIX_ADS {
            margin-top: var(--blocked-site-scroll-margin-top)
        }

        @keyframes slide-horizontal-new {
            0% {
                transform: translateX(100%)
            }
        }

        @keyframes slide-horizontal-old {
            80% {
                opacity: 1
            }

            to {
                opacity: 0;
                transform: translateX(-100%)
            }
        }

        @keyframes slide-vertical-new {
            0% {
                transform: translateY(-100%)
            }
        }

        @keyframes slide-vertical-old {
            80% {
                opacity: 1
            }

            to {
                opacity: 0;
                transform: translateY(100%)
            }
        }

        @keyframes out-in-new {
            0% {
                opacity: 0
            }
        }

        @keyframes out-in-old {
            to {
                opacity: 0
            }
        }

        html[data-page-transition=SlideHorizontal]::view-transition-old(page-group) {
            animation: slide-horizontal-old .6s cubic-bezier(.83, 0, .17, 1) forwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=SlideHorizontal]::view-transition-new(page-group) {
            animation: slide-horizontal-new .6s cubic-bezier(.83, 0, .17, 1) backwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=SlideVertical]::view-transition-old(page-group) {
            animation: slide-vertical-old .6s cubic-bezier(.83, 0, .17, 1) forwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=SlideVertical]::view-transition-new(page-group) {
            animation: slide-vertical-new .6s cubic-bezier(.83, 0, .17, 1) backwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=OutIn]::view-transition-old(page-group) {
            animation: out-in-old .35s cubic-bezier(.64, 0, .78, 0) forwards
        }

        html[data-page-transition=OutIn]::view-transition-new(page-group) {
            animation: out-in-new .35s cubic-bezier(.22, 1, .36, 1) .35s backwards
        }

        @media(prefers-reduced-motion:reduce) {

            ::view-transition-group(*),
            ::view-transition-new(*),
            ::view-transition-old(*) {
                animation: none !important
            }
        }

        body,
        html {
            background: transparent;
            border: 0;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline
        }

        body {
            --scrollbar-width: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px
        }

        body,
        html {
            height: 100%
        }

        body {
            overflow-x: auto;
            overflow-y: scroll
        }

        body:not(.responsive) #site-root {
            min-width: var(--site-width);
            width: 100%
        }

        body:not([data-js-loaded]) [data-hide-prejs] {
            visibility: hidden
        }

        #SITE_CONTAINER {
            position: relative
        }

        :root {
            --one-unit: 1vw;
            --section-max-width: 9999px
        }

        @supports(-webkit-appearance:none) and (stroke-color:transparent) {
            :root {
                --safari-sticky-fix: opacity
            }
        }

        @supports(container-type:inline-size) {
            :root {
                --one-unit: 1cqw
            }
        }

        [id^=oldHoverBox-] {
            mix-blend-mode: plus-lighter;
            transition: opacity .5s ease, visibility .5s ease
        }

        [data-mesh-id$=inlineContent-gridContainer]:has(>[id^=oldHoverBox-]) {
            isolation: isolate
        }
    </style>
    <style data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/main.renderer.30f71ad7.min.css">
        a,
        abbr,
        acronym,
        address,
        applet,
        b,
        big,
        blockquote,
        button,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        dfn,
        div,
        dl,
        dt,
        em,
        fieldset,
        font,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        i,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        nav,
        object,
        ol,
        p,
        pre,
        q,
        s,
        samp,
        section,
        small,
        span,
        strike,
        strong,
        sub,
        sup,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        title,
        tr,
        tt,
        u,
        ul,
        var {
            background: transparent;
            border: 0;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline
        }

        input,
        select,
        textarea {
            box-sizing: border-box;
            font-family: Helvetica, Arial, sans-serif
        }

        ol,
        ul {
            list-style: none
        }

        blockquote,
        q {
            quotes: none
        }

        ins {
            text-decoration: none
        }

        del {
            text-decoration: line-through
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        a {
            cursor: pointer;
            text-decoration: none
        }

        .testStyles {
            overflow-y: hidden
        }

        .reset-button {
            -webkit-appearance: none;
            background: none;
            border: 0;
            color: inherit;
            font: inherit;
            line-height: normal;
            outline: 0;
            overflow: visible;
            padding: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        :focus {
            outline: none
        }

        #site-root {
            margin: 0 auto;
            min-height: 100%;
            position: relative;
            top: var(--wix-ads-height)
        }

        #site-root img:not([src]) {
            visibility: hidden
        }

        #site-root svg img:not([src]) {
            visibility: visible
        }

        .auto-generated-link {
            color: inherit
        }

        #SCROLL_TO_BOTTOM,
        #SCROLL_TO_TOP {
            height: 0
        }

        .has-click-trigger {
            cursor: pointer
        }

        .fullScreenOverlay {
            bottom: 0;
            display: flex;
            justify-content: center;
            left: 0;
            overflow-y: hidden;
            position: fixed;
            right: 0;
            top: -60px;
            z-index: 1005
        }

        .fullScreenOverlay>.fullScreenOverlayContent {
            bottom: 0;
            left: 0;
            margin: 0 auto;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 60px;
            transform: translateZ(0)
        }

        [data-mesh-id$=centeredContent],
        [data-mesh-id$=form],
        [data-mesh-id$=inlineContent] {
            pointer-events: none;
            position: relative
        }

        [data-mesh-id$=-gridWrapper],
        [data-mesh-id$=-rotated-wrapper] {
            pointer-events: none
        }

        [data-mesh-id$=-gridContainer]>*,
        [data-mesh-id$=-rotated-wrapper]>*,
        [data-mesh-id$=inlineContent]>:not([data-mesh-id$=-gridContainer]) {
            pointer-events: auto
        }

        .device-mobile-optimized #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID {
            grid-area: 2/1/3/2;
            -ms-grid-row: 2;
            position: relative
        }

        #masterPage.mesh-layout {
            -ms-grid-rows: max-content max-content min-content max-content;
            -ms-grid-columns: 100%;
            align-items: start;
            display: -ms-grid;
            display: grid;
            grid-template-columns: 100%;
            grid-template-rows: max-content max-content min-content max-content;
            justify-content: stretch
        }

        #masterPage.mesh-layout #PAGES_CONTAINER,
        #masterPage.mesh-layout #SITE_FOOTER-placeholder,
        #masterPage.mesh-layout #SITE_FOOTER_WRAPPER,
        #masterPage.mesh-layout #SITE_HEADER-placeholder,
        #masterPage.mesh-layout #SITE_HEADER_WRAPPER,
        #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],
        #masterPage.mesh-layout #soapAfterPagesContainer,
        #masterPage.mesh-layout #soapBeforePagesContainer {
            -ms-grid-row-align: start;
            -ms-grid-column-align: start;
            -ms-grid-column: 1
        }

        #masterPage.mesh-layout #SITE_HEADER-placeholder,
        #masterPage.mesh-layout #SITE_HEADER_WRAPPER {
            grid-area: 1/1/2/2;
            -ms-grid-row: 1
        }

        #masterPage.mesh-layout #PAGES_CONTAINER,
        #masterPage.mesh-layout #soapAfterPagesContainer,
        #masterPage.mesh-layout #soapBeforePagesContainer {
            grid-area: 3/1/4/2;
            -ms-grid-row: 3
        }

        #masterPage.mesh-layout #soapAfterPagesContainer,
        #masterPage.mesh-layout #soapBeforePagesContainer {
            width: 100%
        }

        #masterPage.mesh-layout #PAGES_CONTAINER {
            align-self: stretch
        }

        #masterPage.mesh-layout main#PAGES_CONTAINER {
            display: block
        }

        #masterPage.mesh-layout #SITE_FOOTER-placeholder,
        #masterPage.mesh-layout #SITE_FOOTER_WRAPPER {
            grid-area: 4/1/5/2;
            -ms-grid-row: 4
        }

        #masterPage.mesh-layout #SITE_PAGES,
        #masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERcenteredContent],
        #masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERinlineContent] {
            height: 100%
        }

        #masterPage.mesh-layout.desktop>* {
            width: 100%
        }

        #masterPage.mesh-layout #PAGES_CONTAINER,
        #masterPage.mesh-layout #SITE_FOOTER_WRAPPER,
        #masterPage.mesh-layout #SITE_HEADER_WRAPPER,
        #masterPage.mesh-layout #SITE_PAGES,
        #masterPage.mesh-layout #masterPageinlineContent,
        #masterPage.mesh-layout:not(.one-doc) #SITE_FOOTER,
        #masterPage.mesh-layout:not(.one-doc) #SITE_HEADER {
            position: relative
        }

        #masterPage.mesh-layout.remove-wrappers #SITE_HEADER {
            grid-area: 1/1/2/2
        }

        #masterPage.mesh-layout.remove-wrappers #SITE_FOOTER {
            grid-area: 4/1/5/2
        }

        [data-z-counter] {
            z-index: 0
        }

        [data-z-counter="0"] {
            z-index: auto
        }

        .wixSiteProperties {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        :root {
            --wst-button-color-fill-primary: rgb(var(--color_48));
            --wst-button-color-border-primary: rgb(var(--color_49));
            --wst-button-color-text-primary: rgb(var(--color_50));
            --wst-button-color-fill-primary-hover: rgb(var(--color_51));
            --wst-button-color-border-primary-hover: rgb(var(--color_52));
            --wst-button-color-text-primary-hover: rgb(var(--color_53));
            --wst-button-color-fill-primary-disabled: rgb(var(--color_54));
            --wst-button-color-border-primary-disabled: rgb(var(--color_55));
            --wst-button-color-text-primary-disabled: rgb(var(--color_56));
            --wst-button-color-fill-secondary: rgb(var(--color_57));
            --wst-button-color-border-secondary: rgb(var(--color_58));
            --wst-button-color-text-secondary: rgb(var(--color_59));
            --wst-button-color-fill-secondary-hover: rgb(var(--color_60));
            --wst-button-color-border-secondary-hover: rgb(var(--color_61));
            --wst-button-color-text-secondary-hover: rgb(var(--color_62));
            --wst-button-color-fill-secondary-disabled: rgb(var(--color_63));
            --wst-button-color-border-secondary-disabled: rgb(var(--color_64));
            --wst-button-color-text-secondary-disabled: rgb(var(--color_65));
            --wst-color-fill-base-1: rgb(var(--color_36));
            --wst-color-fill-base-2: rgb(var(--color_37));
            --wst-color-fill-base-shade-1: rgb(var(--color_38));
            --wst-color-fill-base-shade-2: rgb(var(--color_39));
            --wst-color-fill-base-shade-3: rgb(var(--color_40));
            --wst-color-fill-accent-1: rgb(var(--color_41));
            --wst-color-fill-accent-2: rgb(var(--color_42));
            --wst-color-fill-accent-3: rgb(var(--color_43));
            --wst-color-fill-accent-4: rgb(var(--color_44));
            --wst-color-fill-background-primary: rgb(var(--color_11));
            --wst-color-fill-background-secondary: rgb(var(--color_12));
            --wst-color-text-primary: rgb(var(--color_15));
            --wst-color-text-secondary: rgb(var(--color_14));
            --wst-color-action: rgb(var(--color_18));
            --wst-color-disabled: rgb(var(--color_39));
            --wst-color-title: rgb(var(--color_45));
            --wst-color-subtitle: rgb(var(--color_46));
            --wst-color-line: rgb(var(--color_47));
            --wst-font-style-h2: var(--font_2);
            --wst-font-style-h3: var(--font_3);
            --wst-font-style-h4: var(--font_4);
            --wst-font-style-h5: var(--font_5);
            --wst-font-style-h6: var(--font_6);
            --wst-font-style-body-large: var(--font_7);
            --wst-font-style-body-medium: var(--font_8);
            --wst-font-style-body-small: var(--font_9);
            --wst-font-style-body-x-small: var(--font_10)
        }
    </style>

    <meta name="format-detection" content="telephone=no">
    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">



    <!-- Overriding Globals JS Head -->


    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/overrideGlobals.inline.15d3b9a0.bundle.min.js">
        ! function() {
            "use strict";
            const e = e => "string" == typeof e ? decodeURIComponent(e).toLowerCase().trimStart() : e,
                t = (e, t, r, o) => {
                    "object" == typeof t && "function" == typeof t.get && "function" == typeof t.set ? Object.defineProperty(r || globalThis, e, {
                        get: t.get,
                        set: t.set,
                        configurable: !1,
                        enumerable: o || !1
                    }) : Object.defineProperty(r || globalThis, e, {
                        value: t,
                        writable: !1,
                        configurable: !1,
                        enumerable: o || !1
                    })
                },
                r = () => {
                    const e = globalThis.open,
                        t = document.open,
                        r = (t, r, o) => {
                            const n = "string" != typeof t,
                                s = e.call(window, t, r, o);
                            return n || ((c = t).startsWith("//") && /(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]/g.test(`${location.protocol}:${c}`) && (c = `${location.protocol}${c}`), !c.startsWith("http") || new URL(c).hostname === location.hostname) ? {} : s;
                            var c
                        };
                    defineStrictProperty("open", r, globalThis, !0), defineStrictProperty("open", ((e, o, n) => e ? r(e, o, n) : t.call(document, e, o, n)), document, !0)
                },
                o = document.createElement,
                n = (t, r) => {
                    const n = o.call(document, t, r),
                        s = Element.prototype.setAttribute,
                        c = Element.prototype.setAttributeNS;
                    if ("iframe" === e(t)) {
                        globalThis.defineStrictProperty("srcdoc", {
                            get: () => {},
                            set: () => {
                                console.error("`srcdoc` is not allowed in iframe elements.")
                            }
                        }, n, !1);
                        const e = function(e, t) {
                                "srcdoc" !== e.toLowerCase() ? s.call(n, e, t) : console.error("`srcdoc` attribute is not allowed to be set.")
                            },
                            t = function(e, t, r) {
                                "srcdoc" !== t.toLowerCase() ? c.call(n, e, t, r) : console.error("`srcdoc` attribute is not allowed to be set.")
                            };
                        n.setAttribute = e, n.setAttributeNS = t
                    }
                    return n
                },
                s = "client-binding",
                c = "security_overrideGlobals",
                i = ["/_api/v1/access-tokens", "/_api/v2/dynamicmodel"],
                a = e => (e instanceof Headers ? e.forEach(((t, r) => {
                    decodeURIComponent(r).toLowerCase() === s && e.delete(r)
                })) : Object.keys(e).forEach((t => {
                    decodeURIComponent(t).toLowerCase() === s && delete e[t]
                })), e),
                l = t => {
                    let r = !0;
                    const o = (e => {
                            let t, r;
                            if (globalThis.Request && e instanceof Request) t = e.url;
                            else {
                                if ("function" != typeof e?.toString) throw new Error("Unsupported type for url");
                                t = e.toString()
                            }
                            try {
                                return new URL(t).pathname
                            } catch (e) {
                                return r = t.replace(/#.+/gi, "").split("?").shift(), r.startsWith("/") ? r : `/${r}`
                            }
                        })(t),
                        n = e(o);
                    return i.some((e => n.includes(e))) && (r = !1), r
                },
                d = (e = globalThis) => {
                    const t = fetch;
                    e.defineStrictProperty("fetch", (function() {
                        const r = (o = arguments, globalThis.Request && o[0] instanceof Request && o[0]?.headers ? a(o[0].headers) : o[1]?.headers && a(o[1].headers), o);
                        var o;
                        return l(arguments[0]) ? t.apply(e, Array.from(r)) : new Promise(((e, t) => {
                            const r = new Error("TB002");
                            window.fedops?.reportError(r, c), t(r)
                        }))
                    }))
                };
            performance.mark("overrideGlobals started");
            const {
                isExcludedFromSecurityExperiments: p,
                experiments: u
            } = window.viewerModel;
            try {
                ((e = globalThis) => {
                    Object.defineProperty(e, "defineStrictProperty", {
                        value: t,
                        writable: !1,
                        enumerable: !1,
                        configurable: !1
                    })
                })(), u["specs.thunderbolt.hardenWindowOpen"] && r(), u["specs.thunderbolt.hardenIFrames"] && !p && globalThis.defineStrictProperty("createElement", n, document, !0), u["specs.thunderbolt.hardenFetchAndXHR"] && !p && (d(), ((e = globalThis) => {
                    const t = XMLHttpRequest;
                    e.defineStrictProperty("XMLHttpRequest", (function() {
                        const e = new t,
                            r = e.open,
                            o = e.setRequestHeader;
                        return e.open = function() {
                            if (arguments.length < 2 || l(arguments[1])) return r.apply(e, Array.from(arguments));
                            {
                                const e = new Error("TB002");
                                throw window.fedops?.reportError(e, c), e
                            }
                        }, e.setRequestHeader = function(t, r) {
                            decodeURIComponent(t).toLowerCase() !== s && o.call(e, t, r)
                        }, e
                    }))
                })()), (e => {
                    let t = [];
                    const {
                        experiments: r
                    } = window.viewerModel;
                    r["specs.thunderbolt.hardenClientGlobals_Text"] && (t = t.concat(["TextEncoder", "TextDecoder"])), r["specs.thunderbolt.hardenClientGlobals_EventTarget"] && !e && (t = t.concat(["XMLHttpRequestEventTarget", "EventTarget"])), r["specs.thunderbolt.hardenClientGlobals_Array_URL_JSON"] && (t = t.concat(["Array", "URL", "JSON"])), r["specs.thunderbolt.hardenClientGlobals_EventListener"] && !e && (t = t.concat(["addEventListener", "removeEventListener"])), r["specs.thunderbolt.hardenEncodingDecoding"] && (t = t.concat(["encodeURI", "encodeURIComponent", "decodeURI", "decodeURIComponent"])), r["specs.thunderbolt.hardenStringAndNumber"] && (t = t.concat(["String", "Number"])), r["specs.thunderbolt.hardenObject"] && t.push("Object"), t.forEach((t => {
                        const r = Object.freeze(globalThis[t]);
                        r.hasOwnProperty("prototype") && "Array" !== t && Object.freeze(r.prototype), ["addEventListener", "removeEventListener"].includes(t) && !e && globalThis.defineStrictProperty(t, document[t], document, !0), globalThis.defineStrictProperty(t, globalThis[t], globalThis, !0)
                    }))
                })(p), u["specs.thunderbolt.hardenTimeout"] && !p && (defineStrictProperty("preventStringArgument", ((e, t, r) => {
                    const o = r || globalThis,
                        n = o[e];
                    defineStrictProperty(e, (function() {
                        const r = Array.from(arguments);
                        if ("string" != typeof r[t]) return n.apply(o, r);
                        console.warn(`Calling ${e} with a String Argument at index ${t} is not allowed`)
                    }), o)
                })), preventStringArgument("setTimeout", 0), preventStringArgument("setInterval", 0))
            } catch (e) {
                window?.viewerModel?.mode.debug && console.error(e);
                const t = new Error("TB006");
                window.fedops?.reportError(t, "security_overrideGlobals"), window.Sentry ? window.Sentry.captureException(t) : globalThis.defineStrictProperty("sentryBuffer", [t], window, !1)
            }
            performance.mark("overrideGlobals ended")
        }();
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/overrideGlobals.inline.15d3b9a0.bundle.min.js.map
    </script>






    <!--pageHtmlEmbeds.head start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head end"></script>
    <!--pageHtmlEmbeds.head end-->


    <!-- head performance data start -->

    <!-- head performance data end -->




    <meta http-equiv="X-Wix-Meta-Site-Id" content="2e965303-f7a9-452e-acb2-c4fcacca4c2b">
    <meta http-equiv="X-Wix-Application-Instance-Id" content="1322daf8-0765-48a2-9c3e-ce1e6ba131c8">

    <meta http-equiv="X-Wix-Published-Version" content="69" />



    <meta http-equiv="etag" content="bug" />

    <!-- render-head end -->

    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap.cbca9efe.min.css">
        .J6KGih {
            cursor: pointer
        }

        .sNF2R0 {
            opacity: 0
        }

        .hLoBV3 {
            transition: opacity var(--transition-duration) cubic-bezier(.37, 0, .63, 1)
        }

        .Rdf41z,
        .hLoBV3 {
            opacity: 1
        }

        .ftlZWo {
            transition: opacity var(--transition-duration) cubic-bezier(.37, 0, .63, 1)
        }

        .ATGlOr,
        .ftlZWo {
            opacity: 0
        }

        .KQSXD0 {
            transition: opacity var(--transition-duration) cubic-bezier(.64, 0, .78, 0)
        }

        .KQSXD0,
        .pagQKE {
            opacity: 1
        }

        ._6zG5H {
            opacity: 0;
            transition: opacity var(--transition-duration) cubic-bezier(.22, 1, .36, 1)
        }

        .BB49uC {
            transform: translateX(100%)
        }

        .j9xE1V {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .ICs7Rs,
        .j9xE1V {
            transform: translateX(0)
        }

        .DxijZJ {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .B5kjYq,
        .DxijZJ {
            transform: translateX(-100%)
        }

        .cJijIV {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .cJijIV,
        .hOxaWM {
            transform: translateX(0)
        }

        .T9p3fN {
            transform: translateX(100%);
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .qDxYJm {
            transform: translateY(100%)
        }

        .aA9V0P {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .YPXPAS,
        .aA9V0P {
            transform: translateY(0)
        }

        .Xf2zsA {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .Xf2zsA,
        .y7Kt7s {
            transform: translateY(-100%)
        }

        .EeUgMu {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .EeUgMu,
        .fdHrtm {
            transform: translateY(0)
        }

        .WIFaG4 {
            transform: translateY(100%);
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        body:not(.responsive) .JsJXaX {
            overflow-x: clip
        }

        [data-view-transition=page-transition] .JsJXaX {
            view-transition-name: page-group
        }

        .AnQkDU {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            height: 100%
        }

        .AnQkDU>div {
            align-self: stretch !important;
            grid-area: 1/1/2/2;
            justify-self: stretch !important
        }

        .StylableButton2545352419__root {
            -archetype: box;
            border: none;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 100%;
            min-height: 10px;
            min-width: 10px;
            padding: 0;
            touch-action: manipulation;
            width: 100%
        }

        .StylableButton2545352419__root[disabled] {
            pointer-events: none
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBackgroundColor {
            background-color: var(--corvid-background-color) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBorderColor {
            border-color: var(--corvid-border-color) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius {
            border-radius: var(--corvid-border-radius) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth {
            border-width: var(--corvid-border-width) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasColor,
        .StylableButton2545352419__root.StylableButton2545352419--hasColor .StylableButton2545352419__label {
            color: var(--corvid-color) !important
        }

        .StylableButton2545352419__link {
            -archetype: box;
            box-sizing: border-box;
            color: #000;
            text-decoration: none
        }

        .StylableButton2545352419__container {
            align-items: center;
            display: flex;
            flex-basis: auto;
            flex-direction: row;
            flex-grow: 1;
            height: 100%;
            justify-content: center;
            overflow: hidden;
            transition: all .2s ease, visibility 0s;
            width: 100%
        }

        .StylableButton2545352419__label {
            -archetype: text;
            -controller-part-type: LayoutChildDisplayDropdown, LayoutFlexChildSpacing(first);
            max-width: 100%;
            min-width: 1.8em;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
            transition: inherit;
            white-space: nowrap
        }

        .StylableButton2545352419__root.StylableButton2545352419--isMaxContent .StylableButton2545352419__label {
            text-overflow: unset
        }

        .StylableButton2545352419__root.StylableButton2545352419--isWrapText .StylableButton2545352419__label {
            min-width: 10px;
            overflow-wrap: break-word;
            white-space: break-spaces;
            word-break: break-word
        }

        .StylableButton2545352419__icon {
            -archetype: icon;
            -controller-part-type: LayoutChildDisplayDropdown, LayoutFlexChildSpacing(last);
            flex-shrink: 0;
            height: 50px;
            min-width: 1px;
            transition: inherit
        }

        .StylableButton2545352419__icon.StylableButton2545352419--override {
            display: block !important
        }

        .StylableButton2545352419__icon svg,
        .StylableButton2545352419__icon>span {
            display: flex;
            height: inherit;
            width: inherit
        }

        .a9YhBi {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .dX12nb {
            cursor: pointer
        }

        .AKxYR5 {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            fill: var(--corvid-fill-color, var(--fill));
            fill-opacity: var(--fill-opacity);
            stroke: var(--corvid-stroke-color, var(--stroke));
            stroke-opacity: var(--stroke-opacity);
            stroke-width: var(--stroke-width);
            filter: var(--drop-shadow, none);
            opacity: var(--opacity);
            transform: var(--flip)
        }

        .AKxYR5,
        .AKxYR5 svg {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .AKxYR5 svg {
            height: var(--svg-calculated-height, 100%);
            margin: auto;
            padding: var(--svg-calculated-padding, 0);
            width: var(--svg-calculated-width, 100%)
        }

        .AKxYR5 svg:not([data-type=ugc]) {
            overflow: visible
        }

        .VZYmYf * {
            vector-effect: non-scaling-stroke
        }

        @supports(-webkit-hyphens:none) {
            .AKxYR5.vv0uGt {
                will-change: filter
            }
        }

        .HcOXKn {
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            text-size-adjust: 100%
        }

        ol.font_100,
        ul.font_100 {
            color: #080808;
            font-family: "Arial, Helvetica, sans-serif", serif;
            font-size: 10px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            letter-spacing: normal;
            line-height: normal;
            margin: 0;
            text-decoration: none
        }

        ol.font_100 li,
        ul.font_100 li {
            margin-bottom: 12px
        }

        ol.wix-list-text-align,
        ul.wix-list-text-align {
            list-style-position: inside
        }

        ol.wix-list-text-align h1,
        ol.wix-list-text-align h2,
        ol.wix-list-text-align h3,
        ol.wix-list-text-align h4,
        ol.wix-list-text-align h5,
        ol.wix-list-text-align h6,
        ol.wix-list-text-align p,
        ul.wix-list-text-align h1,
        ul.wix-list-text-align h2,
        ul.wix-list-text-align h3,
        ul.wix-list-text-align h4,
        ul.wix-list-text-align h5,
        ul.wix-list-text-align h6,
        ul.wix-list-text-align p {
            display: inline
        }

        .ONIxfn {
            cursor: pointer
        }

        .WUKwEB {
            clip: rect(0 0 0 0);
            border: 0;
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .QxJLC3 [data-attr-richtext-marker=true] {
            display: block
        }

        .QxJLC3 [data-attr-richtext-marker=true] table {
            border-collapse: collapse;
            margin: 15px 0;
            width: 100%
        }

        .QxJLC3 [data-attr-richtext-marker=true] table td {
            padding: 12px;
            position: relative
        }

        .QxJLC3 [data-attr-richtext-marker=true] table td:after {
            border-bottom: 1px solid currentColor;
            border-left: 1px solid currentColor;
            bottom: 0;
            content: "";
            left: 0;
            opacity: .2;
            position: absolute;
            right: 0;
            top: 0
        }

        .QxJLC3 [data-attr-richtext-marker=true] table tr td:last-child:after {
            border-right: 1px solid currentColor
        }

        .QxJLC3 [data-attr-richtext-marker=true] table tr:first-child td:after {
            border-top: 1px solid currentColor
        }

        @supports(-webkit-appearance:none) and (stroke-color:transparent) {
            .lq2cno>*>:first-child {
                vertical-align: top
            }
        }

        @supports(-webkit-touch-callout:none) {
            .lq2cno>*>:first-child {
                vertical-align: top
            }
        }

        .SlP1QZ :is(p, h1, h2, h3, h4, h5, h6, blockquote, ul, ol) [class$=rich-text__text],
        .SlP1QZ :is(p, h1, h2, h3, h4, h5, h6, blockquote, ul, ol)[class$=rich-text__text] {
            color: var(--corvid-color, currentColor)
        }

        .SlP1QZ :is(p, h1, h2, h3, h4, h5, h6, blockquote, ul, ol) span[style*=color] {
            color: var(--corvid-color, currentColor) !important
        }

        .uGVkMG {
            direction: var(--text-direction);
            min-height: var(--min-height);
            min-width: var(--min-width)
        }

        .uGVkMG .edKzOf {
            word-wrap: break-word;
            height: 100%;
            overflow-wrap: break-word;
            position: relative;
            width: 100%
        }

        .uGVkMG .edKzOf ul {
            list-style: disc inside
        }

        .uGVkMG .edKzOf li {
            margin-bottom: 12px
        }

        .SxM0TO blockquote,
        .SxM0TO h1,
        .SxM0TO h2,
        .SxM0TO h3,
        .SxM0TO h4,
        .SxM0TO h5,
        .SxM0TO h6,
        .SxM0TO p {
            letter-spacing: normal;
            line-height: normal
        }

        .nJYhU3 {
            min-height: var(--min-height);
            min-width: var(--min-width)
        }

        .nJYhU3 .edKzOf {
            word-wrap: break-word;
            height: 100%;
            overflow-wrap: break-word;
            position: relative;
            width: 100%
        }

        .nJYhU3 .edKzOf ol,
        .nJYhU3 .edKzOf ul {
            letter-spacing: normal;
            line-height: normal;
            margin-inline-start: .5em;
            padding-inline-start: 1.3em
        }

        .nJYhU3 .edKzOf ul {
            list-style-type: disc
        }

        .nJYhU3 .edKzOf ol {
            list-style-type: decimal
        }

        .nJYhU3 .edKzOf ol ul,
        .nJYhU3 .edKzOf ul ul {
            line-height: normal;
            list-style-type: circle
        }

        .nJYhU3 .edKzOf ol ol ul,
        .nJYhU3 .edKzOf ol ul ul,
        .nJYhU3 .edKzOf ul ol ul,
        .nJYhU3 .edKzOf ul ul ul {
            line-height: normal;
            list-style-type: square
        }

        .nJYhU3 .edKzOf li {
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: normal;
            line-height: inherit
        }

        .nJYhU3 .edKzOf h1,
        .nJYhU3 .edKzOf h2,
        .nJYhU3 .edKzOf h3,
        .nJYhU3 .edKzOf h4,
        .nJYhU3 .edKzOf h5,
        .nJYhU3 .edKzOf h6,
        .nJYhU3 .edKzOf p {
            letter-spacing: normal;
            line-height: normal;
            margin-block: 0;
            margin: 0
        }

        .nJYhU3 .edKzOf a {
            color: inherit
        }

        .SxM0TO,
        .c9GqVL {
            word-wrap: break-word;
            direction: var(--text-direction);
            min-height: var(--min-height);
            min-width: var(--min-width);
            mix-blend-mode: var(--blendMode, normal);
            overflow-wrap: break-word;
            pointer-events: none;
            text-align: start;
            text-shadow: var(--textOutline, 0 0 transparent), var(--textShadow, 0 0 transparent);
            text-transform: var(--textTransform, "none")
        }

        .SxM0TO>*,
        .c9GqVL>* {
            pointer-events: auto
        }

        .SxM0TO li,
        .c9GqVL li {
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: normal;
            line-height: inherit
        }

        .SxM0TO ol,
        .SxM0TO ul,
        .c9GqVL ol,
        .c9GqVL ul {
            letter-spacing: normal;
            line-height: normal;
            margin-inline-end: 0;
            margin-inline-start: .5em
        }

        .SxM0TO:not(.YQcXTT) ol,
        .SxM0TO:not(.YQcXTT) ul,
        .c9GqVL:not(.YQcXTT) ol,
        .c9GqVL:not(.YQcXTT) ul {
            padding-inline-end: 0;
            padding-inline-start: 1.3em
        }

        .SxM0TO ul,
        .c9GqVL ul {
            list-style-type: disc
        }

        .SxM0TO ol,
        .c9GqVL ol {
            list-style-type: decimal
        }

        .SxM0TO ol ul,
        .SxM0TO ul ul,
        .c9GqVL ol ul,
        .c9GqVL ul ul {
            list-style-type: circle
        }

        .SxM0TO ol ol ul,
        .SxM0TO ol ul ul,
        .SxM0TO ul ol ul,
        .SxM0TO ul ul ul,
        .c9GqVL ol ol ul,
        .c9GqVL ol ul ul,
        .c9GqVL ul ol ul,
        .c9GqVL ul ul ul {
            list-style-type: square
        }

        .SxM0TO blockquote,
        .SxM0TO h1,
        .SxM0TO h2,
        .SxM0TO h3,
        .SxM0TO h4,
        .SxM0TO h5,
        .SxM0TO h6,
        .SxM0TO p,
        .c9GqVL blockquote,
        .c9GqVL h1,
        .c9GqVL h2,
        .c9GqVL h3,
        .c9GqVL h4,
        .c9GqVL h5,
        .c9GqVL h6,
        .c9GqVL p {
            margin-block: 0;
            margin: 0
        }

        .SxM0TO a,
        .c9GqVL a {
            color: inherit
        }

        .YQcXTT li {
            margin-inline-end: 0;
            margin-inline-start: 1.3em
        }

        .Vd6aQZ {
            overflow: hidden;
            padding: 0;
            pointer-events: none;
            white-space: nowrap
        }

        .mHZSwn {
            display: none
        }

        .lvxhkV {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        .QJjwEo {
            transform: translateY(-100%);
            transition: .2s ease-in
        }

        .kdBXfh {
            transition: .2s
        }

        .MP52zt {
            opacity: 0;
            transition: .2s ease-in
        }

        .MP52zt.Bhu9m5 {
            z-index: -1 !important
        }

        .LVP8Wf {
            opacity: 1;
            transition: .2s
        }

        .VrZrC0 {
            height: auto
        }

        .VrZrC0,
        .cKxVkc {
            position: relative;
            width: 100%
        }

        :host(:not(.device-mobile-optimized)) .vlM3HR,
        body:not(.device-mobile-optimized) .vlM3HR {
            margin-left: calc((100% - var(--site-width))/2);
            width: var(--site-width)
        }

        .AT7o0U[data-focuscycled=active] {
            outline: 1px solid transparent
        }

        .AT7o0U[data-focuscycled=active]:not(:focus-within) {
            outline: 2px solid transparent;
            transition: outline .01s ease
        }

        .AT7o0U .vlM3HR {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%)
        }

        .HlRz5e[data-animate-blur] img {
            filter: blur(9px);
            transition: filter .8s ease-in
        }

        .HlRz5e[data-animate-blur] img[data-load-done] {
            filter: none
        }

        .I5zqsT {
            display: block;
            height: 100%;
            width: 100%
        }

        .WzbAF8 .mpGTIt .O6KwRn {
            display: var(--item-display);
            height: var(--item-size);
            margin: var(--item-margin);
            width: var(--item-size)
        }

        .WzbAF8 .mpGTIt .O6KwRn:last-child {
            margin: 0
        }

        .WzbAF8 .mpGTIt .O6KwRn .oRtuWN {
            display: block
        }

        .WzbAF8 .mpGTIt .O6KwRn .oRtuWN .YaS0jR {
            height: var(--item-size);
            width: var(--item-size)
        }

        .WzbAF8 .mpGTIt {
            height: 100%;
            position: absolute;
            white-space: nowrap;
            width: 100%
        }

        :host(.device-mobile-optimized) .WzbAF8 .mpGTIt,
        body.device-mobile-optimized .WzbAF8 .mpGTIt {
            white-space: normal
        }

        .big2ZD {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            height: calc(100% - var(--wix-ads-height));
            left: 0;
            margin-top: var(--wix-ads-height);
            position: fixed;
            top: 0;
            width: 100%
        }

        .SHHiV9,
        .big2ZD {
            pointer-events: none;
            z-index: var(--pinned-layer-in-container, var(--above-all-in-container))
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SkipToContentButton].39deac6a.min.css">
        .LHrbPP {
            background: #fff;
            border-radius: 24px;
            color: #116dff;
            cursor: pointer;
            font-family: Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            font-size: 14px;
            height: 0;
            left: 50%;
            margin-left: -94px;
            opacity: 0;
            padding: 0 24px 0 24px;
            pointer-events: none;
            position: absolute;
            top: 60px;
            width: 0;
            z-index: 9999
        }

        .LHrbPP:focus {
            border: 2px solid;
            height: 40px;
            opacity: 1;
            pointer-events: auto;
            width: auto
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap-classic.fb07ec68.min.css">
        .PlZyDq {
            touch-action: manipulation
        }

        .uDW_Qe {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            justify-content: var(--label-align);
            min-width: 100%;
            text-align: initial;
            width: -moz-max-content;
            width: max-content
        }

        .uDW_Qe:before {
            max-width: var(--margin-start, 0)
        }

        .uDW_Qe:after,
        .uDW_Qe:before {
            align-self: stretch;
            content: "";
            flex-grow: 1
        }

        .uDW_Qe:after {
            max-width: var(--margin-end, 0)
        }

        .FubTgk {
            height: 100%
        }

        .FubTgk .uDW_Qe {
            border-radius: var(--corvid-border-radius, var(--rd, 0));
            bottom: 0;
            box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, .6));
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: var(--trans1, border-color .4s ease 0s, background-color .4s ease 0s)
        }

        .FubTgk .uDW_Qe:link,
        .FubTgk .uDW_Qe:visited {
            border-color: transparent
        }

        .FubTgk .l7_2fn {
            color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
            font: var(--fnt, var(--font_5));
            margin: 0;
            position: relative;
            transition: var(--trans2, color .4s ease 0s);
            white-space: nowrap
        }

        .FubTgk[aria-disabled=false] .uDW_Qe {
            background-color: var(--corvid-background-color, rgba(var(--bg, var(--color_17, color_17)), var(--alpha-bg, 1)));
            border: solid var(--corvid-border-color, rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))) var(--corvid-border-width, var(--brw, 0));
            cursor: pointer !important
        }

        :host(.device-mobile-optimized) .FubTgk[aria-disabled=false]:active .uDW_Qe,
        body.device-mobile-optimized .FubTgk[aria-disabled=false]:active .uDW_Qe {
            background-color: rgba(var(--bgh, var(--color_18, color_18)), var(--alpha-bgh, 1));
            border-color: rgba(var(--brdh, var(--color_15, color_15)), var(--alpha-brdh, 1))
        }

        :host(.device-mobile-optimized) .FubTgk[aria-disabled=false]:active .l7_2fn,
        body.device-mobile-optimized .FubTgk[aria-disabled=false]:active .l7_2fn {
            color: rgb(var(--txth, var(--color_15, color_15)))
        }

        :host(:not(.device-mobile-optimized)) .FubTgk[aria-disabled=false]:hover .uDW_Qe,
        body:not(.device-mobile-optimized) .FubTgk[aria-disabled=false]:hover .uDW_Qe {
            background-color: rgba(var(--bgh, var(--color_18, color_18)), var(--alpha-bgh, 1));
            border-color: rgba(var(--brdh, var(--color_15, color_15)), var(--alpha-brdh, 1))
        }

        :host(:not(.device-mobile-optimized)) .FubTgk[aria-disabled=false]:hover .l7_2fn,
        body:not(.device-mobile-optimized) .FubTgk[aria-disabled=false]:hover .l7_2fn {
            color: rgb(var(--txth, var(--color_15, color_15)))
        }

        .FubTgk[aria-disabled=true] .uDW_Qe {
            background-color: rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1));
            border-color: rgba(var(--brdd, 204, 204, 204), var(--alpha-brdd, 1));
            border-style: solid;
            border-width: var(--corvid-border-width, var(--brw, 0))
        }

        .FubTgk[aria-disabled=true] .l7_2fn {
            color: rgb(var(--txtd, 255, 255, 255))
        }

        .uUxqWY {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            justify-content: var(--label-align);
            min-width: 100%;
            text-align: initial;
            width: -moz-max-content;
            width: max-content
        }

        .uUxqWY:before {
            max-width: var(--margin-start, 0)
        }

        .uUxqWY:after,
        .uUxqWY:before {
            align-self: stretch;
            content: "";
            flex-grow: 1
        }

        .uUxqWY:after {
            max-width: var(--margin-end, 0)
        }

        .Vq4wYb[aria-disabled=false] .uUxqWY {
            cursor: pointer
        }

        :host(.device-mobile-optimized) .Vq4wYb[aria-disabled=false]:active .wJVzSK,
        body.device-mobile-optimized .Vq4wYb[aria-disabled=false]:active .wJVzSK {
            color: rgb(var(--txth, var(--color_15, color_15)));
            transition: var(--trans, color .4s ease 0s)
        }

        :host(:not(.device-mobile-optimized)) .Vq4wYb[aria-disabled=false]:hover .wJVzSK,
        body:not(.device-mobile-optimized) .Vq4wYb[aria-disabled=false]:hover .wJVzSK {
            color: rgb(var(--txth, var(--color_15, color_15)));
            transition: var(--trans, color .4s ease 0s)
        }

        .Vq4wYb .uUxqWY {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .Vq4wYb .wJVzSK {
            color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
            font: var(--fnt, var(--font_5));
            transition: var(--trans, color .4s ease 0s);
            white-space: nowrap
        }

        .Vq4wYb[aria-disabled=true] .wJVzSK {
            color: rgb(var(--txtd, 255, 255, 255))
        }

        :host(:not(.device-mobile-optimized)) .CohWsy,
        body:not(.device-mobile-optimized) .CohWsy {
            display: flex
        }

        :host(:not(.device-mobile-optimized)) .V5AUxf,
        body:not(.device-mobile-optimized) .V5AUxf {
            -moz-column-gap: var(--margin);
            column-gap: var(--margin);
            display: flex;
            flex-direction: var(--items-direction);
            margin: 0 auto;
            position: relative;
            width: calc(100% - var(--padding)*2)
        }

        :host(:not(.device-mobile-optimized)) .V5AUxf>*,
        body:not(.device-mobile-optimized) .V5AUxf>* {
            flex: var(--column-flex) 1 0%;
            left: 0;
            margin-bottom: var(--padding);
            margin-top: var(--padding);
            min-width: 0;
            position: relative;
            top: 0
        }

        :host(.device-mobile-optimized) .V5AUxf,
        body.device-mobile-optimized .V5AUxf {
            display: block;
            padding: var(--padding) 0;
            position: relative
        }

        :host(.device-mobile-optimized) .V5AUxf>*,
        body.device-mobile-optimized .V5AUxf>* {
            margin-bottom: var(--margin);
            position: relative
        }

        :host(.device-mobile-optimized) .V5AUxf>:first-child,
        body.device-mobile-optimized .V5AUxf>:first-child {
            margin-top: var(--firstChildMarginTop, 0)
        }

        :host(.device-mobile-optimized) .V5AUxf>:last-child,
        body.device-mobile-optimized .V5AUxf>:last-child {
            margin-bottom: var(--lastChildMarginBottom)
        }

        .LIhNy3 {
            backface-visibility: hidden
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%)
        }

        .HlRz5e[data-animate-blur] img {
            filter: blur(9px);
            transition: filter .8s ease-in
        }

        .HlRz5e[data-animate-blur] img[data-load-done] {
            filter: none
        }

        ._1hLNj {
            display: block
        }

        ._1hLNj,
        .if7Vw2 {
            height: 100%;
            width: 100%
        }

        .if7Vw2 {
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0
        }

        .if7Vw2.f0uTJH {
            clip: rect(0, auto, auto, 0)
        }

        .if7Vw2 .i1tH8h {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .if7Vw2 .DXi4PB {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .if7Vw2 .DXi4PB img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .if7Vw2.f0uTJH {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .wG8dni {
            height: 100%
        }

        .tcElKx {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
            transition: var(--inherit-transition)
        }

        .ImALHf,
        .Ybjs9b {
            opacity: var(--fill-layer-video-opacity)
        }

        .UWmm3w {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .Yjj1af {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .ImALHf {
            height: 100%;
            position: relative;
            width: 100%
        }

        ._uqPqy {
            -webkit-clip-path: var(--fill-layer-clip);
            clip-path: var(--fill-layer-clip)
        }

        ._uqPqy,
        .eKyYhK {
            position: absolute;
            top: 0
        }

        ._uqPqy,
        .eKyYhK,
        .x0mqQS img {
            height: 100%;
            width: 100%
        }

        .pnCr6P {
            opacity: 0
        }

        .blf7sp,
        .pnCr6P {
            position: absolute;
            top: 0
        }

        .blf7sp {
            height: 0;
            left: 0;
            overflow: hidden;
            width: 0
        }

        .rWP3Gv {
            left: 0;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: var(--fill-layer-background-media-position)
        }

        .Tr4n3d,
        .rWP3Gv,
        .wRqk6s {
            height: 100%;
            top: 0;
            width: 100%
        }

        .wRqk6s {
            position: absolute
        }

        .Tr4n3d {
            background-color: var(--fill-layer-background-overlay-color);
            opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
            position: var(--fill-layer-background-overlay-position);
            transform: var(--fill-layer-background-overlay-transform)
        }

        @supports(mix-blend-mode:overlay) {
            .Tr4n3d {
                mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
                opacity: var(--fill-layer-background-overlay-blend-opacity, 1)
            }
        }

        .VXAmO2 {
            --divider-pin-height__: min(1, calc(var(--divider-layers-pin-factor__) + 1));
            --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
            --divider-pin-border__: min(1, calc(var(--divider-layers-pin-factor__) / -1 + 1));
            height: calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))
        }

        .VXAmO2,
        .VXAmO2 .dy3w_9 {
            left: 0;
            position: absolute;
            width: 100%
        }

        .VXAmO2 .dy3w_9 {
            --divider-layer-i__: var(--divider-layer-i, 0);
            background-position: left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;
            background-repeat: repeat-x;
            border-bottom-style: solid;
            border-bottom-width: calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            height: calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            opacity: calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))
        }

        .UORcXs {
            --divider-height__: var(--divider-top-height, auto);
            --divider-offset-x__: var(--divider-top-offset-x, 0px);
            --divider-layers-size__: var(--divider-top-layers-size, 0);
            --divider-layers-y__: var(--divider-top-layers-y, 0px);
            --divider-layers-x__: var(--divider-top-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
            border-top: var(--divider-top-padding, 0) solid var(--divider-top-color, currentColor);
            opacity: var(--divider-top-opacity, 1);
            top: 0;
            transform: var(--divider-top-flip, scaleY(-1))
        }

        .UORcXs .dy3w_9 {
            background-image: var(--divider-top-image, none);
            background-size: var(--divider-top-size, contain);
            border-color: var(--divider-top-color, currentColor);
            bottom: 0;
            filter: var(--divider-top-filter, none)
        }

        .UORcXs .dy3w_9[data-divider-layer="1"] {
            display: var(--divider-top-layer-1-display, block)
        }

        .UORcXs .dy3w_9[data-divider-layer="2"] {
            display: var(--divider-top-layer-2-display, block)
        }

        .UORcXs .dy3w_9[data-divider-layer="3"] {
            display: var(--divider-top-layer-3-display, block)
        }

        .Io4VUz {
            --divider-height__: var(--divider-bottom-height, auto);
            --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
            --divider-layers-size__: var(--divider-bottom-layers-size, 0);
            --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
            --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
            border-bottom: var(--divider-bottom-padding, 0) solid var(--divider-bottom-color, currentColor);
            bottom: 0;
            opacity: var(--divider-bottom-opacity, 1);
            transform: var(--divider-bottom-flip, none)
        }

        .Io4VUz .dy3w_9 {
            background-image: var(--divider-bottom-image, none);
            background-size: var(--divider-bottom-size, contain);
            border-color: var(--divider-bottom-color, currentColor);
            bottom: 0;
            filter: var(--divider-bottom-filter, none)
        }

        .Io4VUz .dy3w_9[data-divider-layer="1"] {
            display: var(--divider-bottom-layer-1-display, block)
        }

        .Io4VUz .dy3w_9[data-divider-layer="2"] {
            display: var(--divider-bottom-layer-2-display, block)
        }

        .Io4VUz .dy3w_9[data-divider-layer="3"] {
            display: var(--divider-bottom-layer-3-display, block)
        }

        .YzqVVZ {
            overflow: visible;
            position: relative
        }

        .mwF7X1 {
            backface-visibility: hidden
        }

        .YGilLk {
            cursor: pointer
        }

        .I5zqsT {
            display: block
        }

        .I5zqsT,
        .MW5IWV {
            height: 100%;
            width: 100%
        }

        .MW5IWV {
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0
        }

        .MW5IWV.N3eg0s {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .Kv1aVt {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .dLPlxY {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .dLPlxY img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.N3eg0s {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .VgO9Yg {
            height: 100%
        }

        .LWbAav {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
            transition: var(--inherit-transition)
        }

        .K_YxMd,
        .yK6aSC {
            opacity: var(--fill-layer-video-opacity)
        }

        .NGjcJN {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .mNGsUM {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .K_YxMd {
            height: 100%;
            position: relative;
            width: 100%
        }

        .bX9O_S {
            -webkit-clip-path: var(--fill-layer-clip);
            clip-path: var(--fill-layer-clip)
        }

        .Z_wCwr,
        .bX9O_S {
            position: absolute;
            top: 0
        }

        .Jxk_UL img,
        .Z_wCwr,
        .bX9O_S {
            height: 100%;
            width: 100%
        }

        .K8MSra {
            opacity: 0
        }

        .K8MSra,
        .YTb3b4 {
            position: absolute;
            top: 0
        }

        .YTb3b4 {
            height: 0;
            left: 0;
            overflow: hidden;
            width: 0
        }

        .SUz0WK {
            left: 0;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: var(--fill-layer-background-media-position)
        }

        .FNxOn5,
        .SUz0WK,
        .m4khSP {
            height: 100%;
            top: 0;
            width: 100%
        }

        .FNxOn5 {
            position: absolute
        }

        .m4khSP {
            background-color: var(--fill-layer-background-overlay-color);
            opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
            position: var(--fill-layer-background-overlay-position);
            transform: var(--fill-layer-background-overlay-transform)
        }

        @supports(mix-blend-mode:overlay) {
            .m4khSP {
                mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
                opacity: var(--fill-layer-background-overlay-blend-opacity, 1)
            }
        }

        ._C0cVf {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        .hFwGTD {
            transform: translateY(-100%);
            transition: .2s ease-in
        }

        .IQgXoP {
            transition: .2s
        }

        .Nr3Nid {
            opacity: 0;
            transition: .2s ease-in
        }

        .Nr3Nid.l4oO6c {
            z-index: -1 !important
        }

        .iQuoC4 {
            opacity: 1;
            transition: .2s
        }

        .CJF7A2 {
            height: auto
        }

        .CJF7A2,
        .U4Bvut {
            position: relative;
            width: 100%
        }

        :host(:not(.device-mobile-optimized)) .G5K6X8,
        body:not(.device-mobile-optimized) .G5K6X8 {
            margin-left: calc((100% - var(--site-width))/2);
            width: var(--site-width)
        }

        .xU8fqS[data-focuscycled=active] {
            outline: 1px solid transparent
        }

        .xU8fqS[data-focuscycled=active]:not(:focus-within) {
            outline: 2px solid transparent;
            transition: outline .01s ease
        }

        .xU8fqS ._4XcTfy {
            background-color: var(--screenwidth-corvid-background-color, rgba(var(--bg, var(--color_11, color_11)), var(--alpha-bg, 1)));
            border-bottom: var(--brwb, 0) solid var(--screenwidth-corvid-border-color, rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1)));
            border-top: var(--brwt, 0) solid var(--screenwidth-corvid-border-color, rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1)));
            bottom: 0;
            box-shadow: var(--shd, 0 0 5px rgba(0, 0, 0, .7));
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .xU8fqS .gUbusX {
            background-color: rgba(var(--bgctr, var(--color_11, color_11)), var(--alpha-bgctr, 1));
            border-radius: var(--rd, 0);
            bottom: var(--brwb, 0);
            top: var(--brwt, 0)
        }

        .xU8fqS .G5K6X8,
        .xU8fqS .gUbusX {
            left: 0;
            position: absolute;
            right: 0
        }

        .xU8fqS .G5K6X8 {
            bottom: 0;
            top: 0
        }

        :host(.device-mobile-optimized) .xU8fqS .G5K6X8,
        body.device-mobile-optimized .xU8fqS .G5K6X8 {
            left: 10px;
            right: 10px
        }

        .SPY_vo {
            pointer-events: none
        }

        .BmZ5pC {
            min-height: calc(100vh - var(--wix-ads-height));
            min-width: var(--site-width);
            position: var(--bg-position);
            top: var(--wix-ads-height)
        }

        .BmZ5pC,
        .nTOEE9 {
            height: 100%;
            width: 100%
        }

        .nTOEE9 {
            overflow: hidden;
            position: relative
        }

        .nTOEE9.sqUyGm:hover {
            cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODM3MEUzMUU4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODM3MEUzMUQ4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4bqsJgAAACF0lEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPmgI0F2YdmxXQUhX///sVQqK2tDVL4DFkhF8zK2NjY/4aGhshOOMJAJAB5ZjdAADGQCpiB4Cear3uwKQR74vv372BPLFq0CKZ4GnLcdMGiFtnXmzZtQo0Bdnb2r/b29nBFMIwUjkxghby8vHfFxMQwTMQWp0YggZcvX/5HBpqamhgKQdafAQnq6en9j4+P/4/me150nzsCPfYOKrkWKvYCymcjJozPgqIYIMAYcUjKAnEcELsDbVECOpkNiO8B+buAeCEQ3yUqFllYWNYh+4Obm/u/ubn5f0tLy//QPIqM90ATHVagDHTJH5BCfn7+/xcvXvyPC9y7d+8/KHqghv4FYj0M04BxeAOkQEhI6P+vX79QDECOeBj49+/ffzk5OZih91FyP4gAGiIDooH5hIGVlRUsAXQpGMMAMh+Y1xksLCzg5QxGrAFzwAxY2GzYsIGgC48cOYIclsuwBiIbG9sCmCJFRcX/+/fvxwi/EydOwIoDGH6JLQEiA26ga1egxSY2vAUpkcKKEV5iCwVOIObBU8w8RzLYgYHaAAACg5CxaxSLgwAAAABJRU5ErkJggg==), auto
        }

        .nTOEE9.C_JY0G:hover {
            cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0I4QkNGQTI4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0I4QkNGQTE4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7hiSPZAAACGklEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPm/EcHUA3TURT+/fsXQ6G2tjZI4TNkhVwwK2NjY/8bGhoiO+EIA5EA5JndAAHEQCpgBoKfaL7uwaYQHLrfv38He2LRokUwxdOQ46YLFrXIYNOmTagxwM7O/tXe3h4sCYs3EEYKRyawQl5e3rtiYmL/sQH0ODUCCbx8+RJFkaamJoZCkPVnQIJ6enr/4+Pj/6P5nhfd545Aj72DSq6Fir2A8tmICeOzoCgGCDBGHJKyQBwHxO5AW5SATmYD4ntA/i4gXgjEd4mKRRYWlnXI/uDm5v5vbm7+39LS8j80jyLjPdBEhxUoA13yB6SQn5///8WLF//jAvfu3fsPih6ooX+BWA/DNGAc3gApEBIS+v/r16//hMC/f//+y8nJwQy9j2wWC4gAGiIDooH5hIGVlRUsAXQpVq98/PgRVBAwWFhYMDx69AhczkBj7RdyFpgBC5sNGzYQdOGRI0eQw3IZVpvZ2NgWwBQpKir+379/P4ZBJ06cgBUHMPwSWwJEBtxA165Ai01seAtSIoUVI7zEFgqcQMyDp5h5jmSwAwO1AQBU5q033XYWQwAAAABJRU5ErkJggg==), auto
        }

        .RZQnmg {
            background-color: rgb(var(--color_11));
            border-radius: 300px;
            bottom: 0;
            cursor: pointer;
            height: 40px;
            margin: 16px 16px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            right: 0;
            width: 40px
        }

        .RZQnmg path {
            fill: rgb(var(--color_12))
        }

        .RZQnmg:focus {
            cursor: auto;
            opacity: 1;
            pointer-events: auto
        }

        .rYiAuL {
            cursor: pointer
        }

        .gSXewE {
            height: 0;
            left: 0;
            overflow: hidden;
            top: 0;
            width: 0
        }

        .OJQ_3L,
        .gSXewE {
            position: absolute
        }

        .OJQ_3L {
            background-color: rgb(var(--color_11));
            border-radius: 300px;
            bottom: 0;
            cursor: pointer;
            height: 40px;
            margin: 16px 16px;
            opacity: 0;
            pointer-events: none;
            right: 0;
            width: 40px
        }

        .OJQ_3L path {
            fill: rgb(var(--color_12))
        }

        .OJQ_3L:focus {
            cursor: auto;
            opacity: 1;
            pointer-events: auto
        }

        .j7pOnl {
            box-sizing: border-box;
            height: 100%;
            width: 100%
        }

        .BI8PVQ {
            min-height: var(--image-min-height);
            min-width: var(--image-min-width)
        }

        .BI8PVQ img,
        img.BI8PVQ {
            filter: var(--filter-effect-svg-url);
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100% 100%);
            mask-size: var(--mask-size, 100% 100%);
            -o-object-position: var(--object-position);
            object-position: var(--object-position)
        }

        .MazNVa {
            left: var(--left, auto);
            position: var(--position-fixed, static);
            top: var(--top, auto);
            z-index: var(--z-index, auto)
        }

        .MazNVa .BI8PVQ img {
            box-shadow: 0 0 0 #000;
            position: static;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .MazNVa .j7pOnl {
            display: block;
            overflow: hidden
        }

        .MazNVa .BI8PVQ {
            overflow: hidden
        }

        .c7cMWz {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .FVGvCX {
            height: auto;
            position: relative;
            width: 100%
        }

        body:not(.responsive) .zK7MhX {
            align-self: start;
            grid-area: 1/1/1/1;
            height: 100%;
            justify-self: stretch;
            left: 0;
            position: relative
        }

        :host(:not(.device-mobile-optimized)) .c7cMWz,
        body:not(.device-mobile-optimized) .c7cMWz {
            margin-left: calc((100% - var(--site-width))/2);
            width: var(--site-width)
        }

        .fEm0Bo .c7cMWz {
            background-color: rgba(var(--bg, var(--color_11, color_11)), var(--alpha-bg, 1));
            overflow: hidden
        }

        :host(.device-mobile-optimized) .c7cMWz,
        body.device-mobile-optimized .c7cMWz {
            left: 10px;
            right: 10px
        }

        .PFkO7r {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .HT5ybB {
            height: auto;
            position: relative;
            width: 100%
        }

        body:not(.responsive) .dBAkHi {
            align-self: start;
            grid-area: 1/1/1/1;
            height: 100%;
            justify-self: stretch;
            left: 0;
            position: relative
        }

        :host(:not(.device-mobile-optimized)) .PFkO7r,
        body:not(.device-mobile-optimized) .PFkO7r {
            margin-left: calc((100% - var(--site-width))/2);
            width: var(--site-width)
        }

        :host(.device-mobile-optimized) .PFkO7r,
        body.device-mobile-optimized .PFkO7r {
            left: 10px;
            right: 10px
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FiveGridLine_SolidLine].23b2f23d.min.css">
        .aVng1S {
            border-top: var(--lnw, 2px) solid rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
            box-sizing: border-box;
            height: 0
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[ClassicSection].2721b1e4.min.css">
        .MW5IWV {
            height: 100%;
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV.N3eg0s {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .Kv1aVt {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .dLPlxY {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .dLPlxY img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.N3eg0s {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .VgO9Yg {
            height: 100%
        }

        .LWbAav {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
            transition: var(--inherit-transition)
        }

        .K_YxMd,
        .yK6aSC {
            opacity: var(--fill-layer-video-opacity)
        }

        .NGjcJN {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .mNGsUM {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .K_YxMd {
            height: 100%;
            position: relative;
            width: 100%
        }

        .Oqnisf {
            overflow: visible
        }

        .Oqnisf .MW5IWV .LWbAav {
            background-color: var(--corvid-background-color, var(--bg-overlay-color))
        }

        .cM88eO {
            backface-visibility: hidden
        }

        .YtfWHd {
            left: 0;
            position: absolute;
            top: 0
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%)
        }

        .HlRz5e[data-animate-blur] img {
            filter: blur(9px);
            transition: filter .8s ease-in
        }

        .HlRz5e[data-animate-blur] img[data-load-done] {
            filter: none
        }

        .I5zqsT {
            display: block;
            height: 100%;
            width: 100%
        }

        .bX9O_S {
            -webkit-clip-path: var(--fill-layer-clip);
            clip-path: var(--fill-layer-clip)
        }

        .Z_wCwr,
        .bX9O_S {
            position: absolute;
            top: 0
        }

        .Jxk_UL img,
        .Z_wCwr,
        .bX9O_S {
            height: 100%;
            width: 100%
        }

        .K8MSra {
            opacity: 0
        }

        .K8MSra,
        .YTb3b4 {
            position: absolute;
            top: 0
        }

        .YTb3b4 {
            height: 0;
            left: 0;
            overflow: hidden;
            width: 0
        }

        .SUz0WK {
            left: 0;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: var(--fill-layer-background-media-position)
        }

        .FNxOn5,
        .SUz0WK,
        .m4khSP {
            height: 100%;
            top: 0;
            width: 100%
        }

        .FNxOn5 {
            position: absolute
        }

        .m4khSP {
            background-color: var(--fill-layer-background-overlay-color);
            opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
            position: var(--fill-layer-background-overlay-position);
            transform: var(--fill-layer-background-overlay-transform)
        }

        @supports(mix-blend-mode:overlay) {
            .m4khSP {
                mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
                opacity: var(--fill-layer-background-overlay-blend-opacity, 1)
            }
        }

        .dkukWC {
            --divider-pin-height__: min(1, calc(var(--divider-layers-pin-factor__) + 1));
            --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
            --divider-pin-border__: min(1, calc(var(--divider-layers-pin-factor__) / -1 + 1));
            height: calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))
        }

        .dkukWC,
        .dkukWC .FRCqDF {
            left: 0;
            position: absolute;
            width: 100%
        }

        .dkukWC .FRCqDF {
            --divider-layer-i__: var(--divider-layer-i, 0);
            background-position: left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;
            background-repeat: repeat-x;
            border-bottom-style: solid;
            border-bottom-width: calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            height: calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            opacity: calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))
        }

        .xnZvZH {
            --divider-height__: var(--divider-top-height, auto);
            --divider-offset-x__: var(--divider-top-offset-x, 0px);
            --divider-layers-size__: var(--divider-top-layers-size, 0);
            --divider-layers-y__: var(--divider-top-layers-y, 0px);
            --divider-layers-x__: var(--divider-top-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
            border-top: var(--divider-top-padding, 0) solid var(--divider-top-color, currentColor);
            opacity: var(--divider-top-opacity, 1);
            top: 0;
            transform: var(--divider-top-flip, scaleY(-1))
        }

        .xnZvZH .FRCqDF {
            background-image: var(--divider-top-image, none);
            background-size: var(--divider-top-size, contain);
            border-color: var(--divider-top-color, currentColor);
            bottom: 0;
            filter: var(--divider-top-filter, none)
        }

        .xnZvZH .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-top-layer-1-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-top-layer-2-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-top-layer-3-display, block)
        }

        .MBOSCN {
            --divider-height__: var(--divider-bottom-height, auto);
            --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
            --divider-layers-size__: var(--divider-bottom-layers-size, 0);
            --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
            --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
            border-bottom: var(--divider-bottom-padding, 0) solid var(--divider-bottom-color, currentColor);
            bottom: 0;
            opacity: var(--divider-bottom-opacity, 1);
            transform: var(--divider-bottom-flip, none)
        }

        .MBOSCN .FRCqDF {
            background-image: var(--divider-bottom-image, none);
            background-size: var(--divider-bottom-size, contain);
            border-color: var(--divider-bottom-color, currentColor);
            bottom: 0;
            filter: var(--divider-bottom-filter, none)
        }

        .MBOSCN .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-bottom-layer-1-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-bottom-layer-2-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-bottom-layer-3-display, block)
        }
    </style>
    <style data-href="https://static.parastorage.com/services/wix-thunderbolt/dist/group_7.bae0ce0c.chunk.min.css">
        .TWFxr5 {
            height: auto !important
        }

        .May50y {
            overflow: hidden !important
        }
    </style>
    <title>Lifestyle Design Quiz | MX Life Academy</title>
    <link rel="canonical" href="https://mx.andrewlord.com.au/sample-quiz-page" />
    <meta name="robots" content="noindex" />
    <meta property="og:title" content="Sample Quiz page | MX Life Academy" />
    <meta property="og:url" content="https://mx.andrewlord.com.au/sample-quiz-page" />
    <meta property="og:site_name" content="MX Life Academy" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Sample Quiz page | MX Life Academy" />

</head>

<body class=''>
    <script type="text/javascript">
        var bodyCacheable = true;

        var exclusionReason = {
            "shouldRender": true,
            "forced": false
        };
        var ssrInfo = {
            "cacheExclusionReason": "",
            "renderBodyTime": 370,
            "renderTimeStamp": 1731310768243
        }
    </script>





    <!--pageHtmlEmbeds.bodyStart start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart end"></script>
    <!--pageHtmlEmbeds.bodyStart end-->




    <script id="wix-first-paint">
        if (window.ResizeObserver &&
            (!window.PerformanceObserver || !PerformanceObserver.supportedEntryTypes || PerformanceObserver.supportedEntryTypes.indexOf('paint') === -1)) {
            new ResizeObserver(function(entries, observer) {
                entries.some(function(entry) {
                    var contentRect = entry.contentRect;
                    if (contentRect.width > 0 && contentRect.height > 0) {
                        requestAnimationFrame(function(now) {
                            window.wixFirstPaint = now;
                            dispatchEvent(new CustomEvent('wixFirstPaint'));
                        });
                        observer.disconnect();
                        return true;
                    }
                });
            }).observe(document.body);
        }
    </script>







    <pages-css id="pages-css">
        <style id="css_masterPage">
            @font-face {
                font-family: 'helvetica-w01-bold';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2f12de04-5ca4-4ada-9e66-a958673b12b5/v1/helvetica-lt-w10-bold.woff2') format('woff2');
                unicode-range: U+0000, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2116;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-bold';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2f12de04-5ca4-4ada-9e66-a958673b12b5/v1/helvetica-w02-bold.woff2') format('woff2');
                unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149, U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B, U+0237, U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2044, U+2113, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E301-E304, U+E306-E30D, U+FB01-FB02;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-bold';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2f12de04-5ca4-4ada-9e66-a958673b12b5/v1/helvetica-w01-bold.woff2') format('woff2');
                unicode-range: U+000D, U+0020-007E, U+00A0-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2122;
                font-display: swap;
            }

            @font-face {
                font-family: 'din-next-w01-light';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w10-light.woff2') format('woff2');
                unicode-range: U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2116;
                font-display: swap;
            }

            @font-face {
                font-family: 'din-next-w01-light';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w02-light.woff2') format('woff2');
                unicode-range: U+000D, U+0100-010F, U+0111-0130, U+0132-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+01FA-01FF, U+0218-021B, U+0237, U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03C0, U+1E80-1E85, U+1EF2-1EF3, U+2070, U+2074-2079, U+2080-2089, U+2113, U+2126, U+212E, U+2153-2154, U+215B-215E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB00-FB04;
                font-display: swap;
            }

            @font-face {
                font-family: 'din-next-w01-light';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w01-light.woff2') format('woff2');
                unicode-range: U+0020-007E, U+00A0-00FF, U+0110, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC, U+03BC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-roman';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-lt-w10-roman.woff2') format('woff2');
                unicode-range: U+0000, U+000D, U+0020-007E, U+00A0, U+00A4, U+00A6-00A7, U+00A9, U+00AB-00AE, U+00B0-00B1, U+00B5-00B7, U+00BB, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2116, U+2122;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-roman';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w02-roman.woff2') format('woff2');
                unicode-range: U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2113, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E301-E304, U+E306-E30D, U+FB01-FB02;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-roman';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w01-roman.woff2') format('woff2');
                unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0462-0463, U+0472-0475, U+0490-0491, U+04D9, U+1E9E, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+20B9-20BA, U+20BC-20BD, U+2113, U+2116, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E300-E30D, U+F6C5, U+F6C9-F6D8, U+F8FF, U+FB01-FB02;
                font-display: swap;
            }

            #masterPage:not(.landingPage) #PAGES_CONTAINER {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            #masterPage.landingPage #CONTROLLER_COMP_CUSTOM_ID {
                display: none;
            }

            #masterPage.landingPage #SITE_HEADER {
                display: none;
            }

            #masterPage.landingPage #SITE_FOOTER {
                display: none;
            }

            #masterPage.landingPage #SITE_HEADER-placeholder {
                display: none;
            }

            #masterPage.landingPage #SITE_FOOTER-placeholder {
                display: none;
            }

            #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus,
            #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus~.wixSdkShowFocusOnSibling {
                --focus-ring-box-shadow: 0 0 0 1px #ffffff, 0 0 0 3px #116dff;
                box-shadow: var(--focus-ring-box-shadow) !important;
                z-index: 1;
            }

            .has-inner-focus-ring {
                --focus-ring-box-shadow: inset 0 0 0 1px #ffffff, inset 0 0 0 3px #116dff !important;
            }

            #masterPage {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            #PAGES_CONTAINER {
                --pinned-layer-in-container: 50;
                --above-all-in-container: 49;
            }

            #CONTROLLER_COMP_CUSTOM_ID {
                --pinned-layer-in-container: 51;
                --above-all-in-container: 49;
            }

            #SITE_HEADER {
                z-index: calc(var(--pinned-layers-in-page, 0) + 52);
                --above-all-in-container: 10000;
            }

            #SITE_FOOTER {
                --pinned-layer-in-container: 53;
                --above-all-in-container: 49;
            }

            [id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent] {
                height: auto;
                width: 100%;
                position: static;
                min-height: auto;
                padding-bottom: 0px;
                box-sizing: border-box;
            }

            [id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer]>[id="CONTROLLER_COMP_CUSTOM_ID"] {
                position: absolute;
                top: 15px;
                left: 20px;
                margin-left: calc((100% - 980px) * 0.5);
            }

            [id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent] {
                height: auto;
                width: 100%;
                position: static;
                min-height: auto;
                padding-bottom: 0px;
                box-sizing: border-box;
            }

            [id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer]>[id="CONTROLLER_COMP_CUSTOM_ID"] {
                position: absolute;
                top: 15px;
                left: 20px;
                margin-left: calc((100% - 980px) * 0.5);
            }

            :root,
            :host,
            .spxThemeOverride,
            .max-width-container {
                --color_0: 255, 255, 255;
                --color_1: 255, 255, 255;
                --color_2: 0, 0, 0;
                --color_3: 237, 28, 36;
                --color_4: 0, 136, 203;
                --color_5: 255, 203, 5;
                --color_6: 114, 114, 114;
                --color_7: 176, 176, 176;
                --color_8: 255, 255, 255;
                --color_9: 114, 114, 114;
                --color_10: 176, 176, 176;
                --color_11: 255, 255, 255;
                --color_12: 232, 230, 230;
                --color_13: 199, 199, 199;
                --color_14: 89, 89, 89;
                --color_15: 0, 0, 0;
                --color_16: 229, 240, 254;
                --color_17: 200, 224, 254;
                --color_18: 127, 204, 247;
                --color_19: 0, 58, 150;
                --color_20: 0, 29, 75;
                --color_21: 249, 197, 180;
                --color_22: 243, 167, 143;
                --color_23: 237, 88, 41;
                --color_24: 158, 59, 27;
                --color_25: 79, 29, 14;
                --color_26: 210, 172, 247;
                --color_27: 186, 131, 240;
                --color_28: 128, 21, 232;
                --color_29: 85, 14, 155;
                --color_30: 43, 7, 77;
                --color_31: 177, 211, 187;
                --color_32: 127, 168, 139;
                --color_33: 64, 124, 81;
                --color_34: 43, 83, 54;
                --color_35: 21, 41, 27;
                --color_36: 255, 255, 255;
                --color_37: 0, 0, 0;
                --color_38: 232, 230, 230;
                --color_39: 199, 199, 199;
                --color_40: 89, 89, 89;
                --color_41: 127, 204, 247;
                --color_42: 21, 93, 233;
                --color_43: 155, 203, 108;
                --color_44: 27, 68, 92;
                --color_45: 0, 0, 0;
                --color_46: 0, 0, 0;
                --color_47: 0, 0, 0;
                --color_48: 0, 0, 0;
                --color_49: 0, 0, 0;
                --color_50: 255, 255, 255;
                --color_51: 255, 255, 255;
                --color_52: 0, 0, 0;
                --color_53: 0, 0, 0;
                --color_54: 199, 199, 199;
                --color_55: 199, 199, 199;
                --color_56: 255, 255, 255;
                --color_57: 127, 204, 247;
                --color_58: 127, 204, 247;
                --color_59: 255, 255, 255;
                --color_60: 255, 255, 255;
                --color_61: 127, 204, 247;
                --color_62: 127, 204, 247;
                --color_63: 255, 255, 255;
                --color_64: 199, 199, 199;
                --color_65: 199, 199, 199;
                --font_0: normal normal normal 60px/1.4em helvetica-w01-bold, sans-serif;
                --font_1: normal normal normal 16px/1.4em din-next-w01-light, sans-serif;
                --font_2: normal normal normal 40px/1.4em helvetica-w01-bold, sans-serif;
                --font_3: normal normal normal 38px/1.4em helvetica-w01-bold, sans-serif;
                --font_4: normal normal normal 35px/1.4em helvetica-w01-roman, sans-serif;
                --font_5: normal normal normal 27px/1.4em helvetica-w01-roman, sans-serif;
                --font_6: normal normal normal 25px/1.4em helvetica-w01-bold, sans-serif;
                --font_7: normal normal normal 22px/1.4em helvetica-w01-roman, sans-serif;
                --font_8: normal normal normal 16px/1.4em helvetica-w01-roman, sans-serif;
                --font_9: normal normal normal 14px/1.4em helvetica-w01-roman, sans-serif;
                --font_10: normal normal normal 12px/1.4em din-next-w01-light, sans-serif;
                --wix-ads-height: 0px;
                --sticky-offset: 0px;
                --wix-ads-top-height: 0px;
                --vh-unit: calc((100vh - 0px) / 100);
                --site-width: 980px;
                --above-all-z-index: 100000;
                --portals-z-index: 100001;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                --minViewportSize: 320;
                --maxViewportSize: 1920;
                --theme-spx-ratio: 1px;
                --scaling-factor: min((100 * var(--one-unit)), var(--section-max-width));
                --customScaleViewportLimit: clamp(var(--minViewportSize) * 1px, 100 * var(--one-unit), min(var(--section-max-width), var(--maxViewportSize) * 1px));
            }

            .font_0 {
                font: var(--font_0);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_1 {
                font: var(--font_1);
                color: rgb(var(--color_14));
                letter-spacing: 0em;
            }

            .font_2 {
                font: var(--font_2);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_3 {
                font: var(--font_3);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_4 {
                font: var(--font_4);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_5 {
                font: var(--font_5);
                color: rgb(var(--color_46));
                letter-spacing: 0em;
            }

            .font_6 {
                font: var(--font_6);
                color: rgb(var(--color_46));
                letter-spacing: 0em;
            }

            .font_7 {
                font: var(--font_7);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_8 {
                font: var(--font_8);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_9 {
                font: var(--font_9);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_10 {
                font: var(--font_10);
                color: rgb(var(--color_14));
                letter-spacing: 0em;
            }

            .color_0 {
                color: rgb(var(--color_0));
            }

            .color_1 {
                color: rgb(var(--color_1));
            }

            .color_2 {
                color: rgb(var(--color_2));
            }

            .color_3 {
                color: rgb(var(--color_3));
            }

            .color_4 {
                color: rgb(var(--color_4));
            }

            .color_5 {
                color: rgb(var(--color_5));
            }

            .color_6 {
                color: rgb(var(--color_6));
            }

            .color_7 {
                color: rgb(var(--color_7));
            }

            .color_8 {
                color: rgb(var(--color_8));
            }

            .color_9 {
                color: rgb(var(--color_9));
            }

            .color_10 {
                color: rgb(var(--color_10));
            }

            .color_11 {
                color: rgb(var(--color_11));
            }

            .color_12 {
                color: rgb(var(--color_12));
            }

            .color_13 {
                color: rgb(var(--color_13));
            }

            .color_14 {
                color: rgb(var(--color_14));
            }

            .color_15 {
                color: rgb(var(--color_15));
            }

            .color_16 {
                color: rgb(var(--color_16));
            }

            .color_17 {
                color: rgb(var(--color_17));
            }

            .color_18 {
                color: rgb(var(--color_18));
            }

            .color_19 {
                color: rgb(var(--color_19));
            }

            .color_20 {
                color: rgb(var(--color_20));
            }

            .color_21 {
                color: rgb(var(--color_21));
            }

            .color_22 {
                color: rgb(var(--color_22));
            }

            .color_23 {
                color: rgb(var(--color_23));
            }

            .color_24 {
                color: rgb(var(--color_24));
            }

            .color_25 {
                color: rgb(var(--color_25));
            }

            .color_26 {
                color: rgb(var(--color_26));
            }

            .color_27 {
                color: rgb(var(--color_27));
            }

            .color_28 {
                color: rgb(var(--color_28));
            }

            .color_29 {
                color: rgb(var(--color_29));
            }

            .color_30 {
                color: rgb(var(--color_30));
            }

            .color_31 {
                color: rgb(var(--color_31));
            }

            .color_32 {
                color: rgb(var(--color_32));
            }

            .color_33 {
                color: rgb(var(--color_33));
            }

            .color_34 {
                color: rgb(var(--color_34));
            }

            .color_35 {
                color: rgb(var(--color_35));
            }

            .color_36 {
                color: rgb(var(--color_36));
            }

            .color_37 {
                color: rgb(var(--color_37));
            }

            .color_38 {
                color: rgb(var(--color_38));
            }

            .color_39 {
                color: rgb(var(--color_39));
            }

            .color_40 {
                color: rgb(var(--color_40));
            }

            .color_41 {
                color: rgb(var(--color_41));
            }

            .color_42 {
                color: rgb(var(--color_42));
            }

            .color_43 {
                color: rgb(var(--color_43));
            }

            .color_44 {
                color: rgb(var(--color_44));
            }

            .color_45 {
                color: rgb(var(--color_45));
            }

            .color_46 {
                color: rgb(var(--color_46));
            }

            .color_47 {
                color: rgb(var(--color_47));
            }

            .color_48 {
                color: rgb(var(--color_48));
            }

            .color_49 {
                color: rgb(var(--color_49));
            }

            .color_50 {
                color: rgb(var(--color_50));
            }

            .color_51 {
                color: rgb(var(--color_51));
            }

            .color_52 {
                color: rgb(var(--color_52));
            }

            .color_53 {
                color: rgb(var(--color_53));
            }

            .color_54 {
                color: rgb(var(--color_54));
            }

            .color_55 {
                color: rgb(var(--color_55));
            }

            .color_56 {
                color: rgb(var(--color_56));
            }

            .color_57 {
                color: rgb(var(--color_57));
            }

            .color_58 {
                color: rgb(var(--color_58));
            }

            .color_59 {
                color: rgb(var(--color_59));
            }

            .color_60 {
                color: rgb(var(--color_60));
            }

            .color_61 {
                color: rgb(var(--color_61));
            }

            .color_62 {
                color: rgb(var(--color_62));
            }

            .color_63 {
                color: rgb(var(--color_63));
            }

            .color_64 {
                color: rgb(var(--color_64));
            }

            .color_65 {
                color: rgb(var(--color_65));
            }

            .backcolor_0 {
                background-color: rgb(var(--color_0));
            }

            .backcolor_1 {
                background-color: rgb(var(--color_1));
            }

            .backcolor_2 {
                background-color: rgb(var(--color_2));
            }

            .backcolor_3 {
                background-color: rgb(var(--color_3));
            }

            .backcolor_4 {
                background-color: rgb(var(--color_4));
            }

            .backcolor_5 {
                background-color: rgb(var(--color_5));
            }

            .backcolor_6 {
                background-color: rgb(var(--color_6));
            }

            .backcolor_7 {
                background-color: rgb(var(--color_7));
            }

            .backcolor_8 {
                background-color: rgb(var(--color_8));
            }

            .backcolor_9 {
                background-color: rgb(var(--color_9));
            }

            .backcolor_10 {
                background-color: rgb(var(--color_10));
            }

            .backcolor_11 {
                background-color: rgb(var(--color_11));
            }

            .backcolor_12 {
                background-color: rgb(var(--color_12));
            }

            .backcolor_13 {
                background-color: rgb(var(--color_13));
            }

            .backcolor_14 {
                background-color: rgb(var(--color_14));
            }

            .backcolor_15 {
                background-color: rgb(var(--color_15));
            }

            .backcolor_16 {
                background-color: rgb(var(--color_16));
            }

            .backcolor_17 {
                background-color: rgb(var(--color_17));
            }

            .backcolor_18 {
                background-color: rgb(var(--color_18));
            }

            .backcolor_19 {
                background-color: rgb(var(--color_19));
            }

            .backcolor_20 {
                background-color: rgb(var(--color_20));
            }

            .backcolor_21 {
                background-color: rgb(var(--color_21));
            }

            .backcolor_22 {
                background-color: rgb(var(--color_22));
            }

            .backcolor_23 {
                background-color: rgb(var(--color_23));
            }

            .backcolor_24 {
                background-color: rgb(var(--color_24));
            }

            .backcolor_25 {
                background-color: rgb(var(--color_25));
            }

            .backcolor_26 {
                background-color: rgb(var(--color_26));
            }

            .backcolor_27 {
                background-color: rgb(var(--color_27));
            }

            .backcolor_28 {
                background-color: rgb(var(--color_28));
            }

            .backcolor_29 {
                background-color: rgb(var(--color_29));
            }

            .backcolor_30 {
                background-color: rgb(var(--color_30));
            }

            .backcolor_31 {
                background-color: rgb(var(--color_31));
            }

            .backcolor_32 {
                background-color: rgb(var(--color_32));
            }

            .backcolor_33 {
                background-color: rgb(var(--color_33));
            }

            .backcolor_34 {
                background-color: rgb(var(--color_34));
            }

            .backcolor_35 {
                background-color: rgb(var(--color_35));
            }

            .backcolor_36 {
                background-color: rgb(var(--color_36));
            }

            .backcolor_37 {
                background-color: rgb(var(--color_37));
            }

            .backcolor_38 {
                background-color: rgb(var(--color_38));
            }

            .backcolor_39 {
                background-color: rgb(var(--color_39));
            }

            .backcolor_40 {
                background-color: rgb(var(--color_40));
            }

            .backcolor_41 {
                background-color: rgb(var(--color_41));
            }

            .backcolor_42 {
                background-color: rgb(var(--color_42));
            }

            .backcolor_43 {
                background-color: rgb(var(--color_43));
            }

            .backcolor_44 {
                background-color: rgb(var(--color_44));
            }

            .backcolor_45 {
                background-color: rgb(var(--color_45));
            }

            .backcolor_46 {
                background-color: rgb(var(--color_46));
            }

            .backcolor_47 {
                background-color: rgb(var(--color_47));
            }

            .backcolor_48 {
                background-color: rgb(var(--color_48));
            }

            .backcolor_49 {
                background-color: rgb(var(--color_49));
            }

            .backcolor_50 {
                background-color: rgb(var(--color_50));
            }

            .backcolor_51 {
                background-color: rgb(var(--color_51));
            }

            .backcolor_52 {
                background-color: rgb(var(--color_52));
            }

            .backcolor_53 {
                background-color: rgb(var(--color_53));
            }

            .backcolor_54 {
                background-color: rgb(var(--color_54));
            }

            .backcolor_55 {
                background-color: rgb(var(--color_55));
            }

            .backcolor_56 {
                background-color: rgb(var(--color_56));
            }

            .backcolor_57 {
                background-color: rgb(var(--color_57));
            }

            .backcolor_58 {
                background-color: rgb(var(--color_58));
            }

            .backcolor_59 {
                background-color: rgb(var(--color_59));
            }

            .backcolor_60 {
                background-color: rgb(var(--color_60));
            }

            .backcolor_61 {
                background-color: rgb(var(--color_61));
            }

            .backcolor_62 {
                background-color: rgb(var(--color_62));
            }

            .backcolor_63 {
                background-color: rgb(var(--color_63));
            }

            .backcolor_64 {
                background-color: rgb(var(--color_64));
            }

            .backcolor_65 {
                background-color: rgb(var(--color_65));
            }

            #PAGES_CONTAINER {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            #SITE_PAGES {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            #SITE_PAGES {
                --transition-duration: 700ms;
            }

            #CONTROLLER_COMP_CUSTOM_ID {
                --bgh: 43, 104, 156;
                --rd: 20px;
                --txth: 255, 255, 255;
                --alpha-bg: 1;
                --bg: 61, 155, 233;
                --txt: 255, 255, 255;
                --brw: 0px;
                --fnt: normal normal normal 14px/1.4em raleway;
                --brd: 43, 104, 156;
                --brdh: 61, 155, 233;
                --alpha-bgh: 1;
                --alpha-brd: 1;
                --alpha-brdh: 1;
                --alpha-txt: 1;
                --alpha-txth: 1;
                --boxShadowToggleOn-shd: none;
                --shd: 0 1px 4px rgba(0, 0, 0, 0.6);
            }

            #masterPage:not(.landingPage) {
                --top-offset: var(--header-height);
                --header-height: 78px;
            }

            #masterPage.landingPage {
                --top-offset: 0px;
            }

            #SITE_HEADER {
                --shd: 0.00px 1.00px 4px 0px rgba(0, 0, 0, 0.6);
                --rd: 0px 0px 0px 0px;
                --brwt: 0px;
                --alpha-brd: 1;
                --backdrop-filter: none;
                --brd: var(--color_11);
                --boxShadowToggleOn-shd: none;
                --brwb: 0px;
            }

            #SITE_HEADER {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            [data-mesh-id=SITE_HEADERinlineContent] {
                height: auto;
                width: 100%;
                position: static;
                min-height: 78px;
            }

            #SITE_HEADER {
                --bg-overlay-color: transparent;
                --bg-gradient: none;
                position: sticky !important;
                top: var(--wix-ads-height);
            }

            #SITE_FOOTER {
                --shd: 0.00px 1.00px 4px 0px rgba(0, 0, 0, 0.6);
                --rd: 0px 0px 0px 0px;
                --brwt: 0px;
                --alpha-brd: 1;
                --backdrop-filter: none;
                --brd: var(--color_11);
                --boxShadowToggleOn-shd: none;
                --brwb: 0px;
            }

            #SITE_FOOTER {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            [data-mesh-id=SITE_FOOTERinlineContent] {
                height: auto;
                width: 100%;
                position: static;
                min-height: 130px;
            }

            #SITE_FOOTER {
                --bg-overlay-color: transparent;
                --bg-gradient: none;
            }
        </style>
        <style id="css_n1pm5">
            @font-face {
                font-family: 'lulo-clean-w01-one-bold';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w05-one-bold.woff2') format('woff2');
                unicode-range: U+0100-0107, U+010A-0113, U+0116-011B, U+011E-0123, U+0126-0130, U+0132-0137, U+0139-0148, U+014A-0151, U+0154-015F, U+0162-0175, U+0177, U+0179-017C, U+01FC-01FF, U+0218-0219, U+02C7, U+02D8-02DB, U+02DD, U+1E80-1E85, U+1E9E, U+1EF2-1EF3, U+2044, U+2070, U+2074-2079, U+2212, U+E001, U+E909, U+E910-E912, U+E999, U+F6C3, U+F6E0, U+F6E4, U+F8FF;
                font-display: swap;
            }

            @font-face {
                font-family: 'lulo-clean-w01-one-bold';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w01-one-bold.woff2') format('woff2');
                unicode-range: U+0020-007E, U+00A0-00A3, U+00A5-00AB, U+00AE-00B4, U+00B6-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+02C6, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2122;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT4ttDfCmxA.woff2') format('woff2');
                unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqL_KWxWMT.woff2') format('woff2');
                unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyC0IT4ttDfA.woff2') format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 700;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFqL_KWxQ.woff2') format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptug8zYS_SKggPNyC0IT4ttDfA.woff2') format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: 'raleway';
                font-style: italic;
                font-weight: 400;
                src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFqL_KWxQ.woff2') format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-roman';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-lt-w10-roman.woff2') format('woff2');
                unicode-range: U+0000, U+000D, U+0020-007E, U+00A0, U+00A4, U+00A6-00A7, U+00A9, U+00AB-00AE, U+00B0-00B1, U+00B5-00B7, U+00BB, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2116, U+2122;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-roman';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w02-roman.woff2') format('woff2');
                unicode-range: U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2113, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E301-E304, U+E306-E30D, U+FB01-FB02;
                font-display: swap;
            }

            @font-face {
                font-family: 'helvetica-w01-roman';
                font-style: normal;
                font-weight: 400;
                src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w01-roman.woff2') format('woff2');
                unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0462-0463, U+0472-0475, U+0490-0491, U+04D9, U+1E9E, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+20B9-20BA, U+20BC-20BD, U+2113, U+2116, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E300-E30D, U+F6C5, U+F6C9-F6D8, U+F8FF, U+FB01-FB02;
                font-display: swap;
            }

            #n1pm5 {
                --param_boolean_previewHover: false;
            }

            #n1pm5 {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            #masterPage {
                --pinned-layers-in-page: 0;
            }

            [data-mesh-id=Containern1pm5inlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=Containern1pm5inlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: 40px;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
                padding-bottom: 0px;
                box-sizing: border-box;
            }

            [data-mesh-id=Containern1pm5inlineContent-gridContainer]>[id="comp-m3cp9eg9"] {
                position: relative;
                margin: 0px 0px 0 calc((100% - 980px) * 0.5);
                left: 0px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }

            #comp-m3cp9eg9 {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            [data-mesh-id=comp-m3cp9eg9inlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=comp-m3cp9eg9inlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id=comp-m3cp9eg9inlineContent-gridContainer]>[id="comp-m3cp9zp8"] {
                position: relative;
                margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                left: 0px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }

            #comp-m3cp9zp8 {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 980px;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: repeat(6, min-content) 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id="comp-m3cpkmta-rotated-wrapper"]>[id="comp-m3cpkmta"] {
                position: relative;
                left: 991px;
                top: -81px;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer]>[id="comp-m3cpbbbs"] {
                position: relative;
                margin: 51px 0px 0 calc((100% - 980px) * 0.5);
                left: 70px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer]>[id="comp-m3cpbpo4"] {
                position: relative;
                margin: 70px 0px 0 calc((100% - 980px) * 0.5);
                left: 189px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer]>[id="comp-m3cpf6ry"] {
                position: relative;
                margin: 0px 0px 44px calc((100% - 980px) * 0.5);
                left: 490px;
                grid-area: 2 / 1 / 3 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer]>[id="comp-m3cpe3n0"] {
                position: relative;
                margin: 0px 0px 66px calc((100% - 980px) * 0.5);
                left: 125px;
                grid-area: 3 / 1 / 4 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer]>[id="comp-m3cpk7uu"] {
                position: relative;
                margin: 0px 0px 54px calc((100% - 980px) * 0.5);
                left: 39px;
                grid-area: 4 / 1 / 8 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer]>[id="comp-m3cpj7hp"] {
                position: relative;
                margin: 0px 0px 40px calc((100% - 980px) * 0.5);
                left: 355px;
                grid-area: 4 / 1 / 5 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-m3cp9zplinlineContent-gridContainer]>[id="comp-m3cphkeb"] {
                position: relative;
                margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                left: 142px;
                grid-area: 6 / 1 / 7 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-m3cpkmta-rotated-wrapper] {
                position: static;
                height: 32px;
                width: 0;
                margin: 0px 0px 17px calc((100% - 980px) * 0.5);
                grid-area: 5 / 1 / 6 / 2;
                justify-self: start;
                align-self: start;
            }

            #comp-m3cp9zpl {
                width: 980px;
            }

            #comp-m3cpbbbs {
                --contentPaddingLeft: 0px;
                --contentPaddingRight: 0px;
                --contentPaddingTop: 0px;
                --contentPaddingBottom: 0px;
            }

            #comp-m3cpbbbs {
                width: 72px;
                height: 72px;
            }

            #comp-m3cpbpo4 {
                --blendMode: normal;
                --textShadow: 0px 0px transparent;
                --textOutline: 0px 0px transparent;
            }

            #comp-m3cpbpo4 {
                width: 682px;
                height: auto;
            }

            #comp-m3cpf6ry {
                --lnw: 1px;
                --brd: var(--color_36);
                --alpha-brd: 1;
            }

            @media (prefers-reduced-motion: no-preference) {
                #comp-m3cpf6ry:not([data-motion-enter="done"]) {
                    opacity: 0;
                }
            }

            #comp-m3cpf6ry {
                width: 484px;
                height: 7px;
            }

            #comp-m3cpe3n0 {
                --blendMode: normal;
                --textShadow: 0px 0px transparent;
                --textOutline: 0px 0px transparent;
            }

            #comp-m3cpe3n0 {
                width: 729px;
                height: auto;
            }

            #comp-m3cpk7uu {
                --contentPaddingLeft: 0px;
                --contentPaddingRight: 0px;
                --contentPaddingTop: 0px;
                --contentPaddingBottom: 0px;
            }

            #comp-m3cpk7uu {
                width: 31px;
                height: 193px;
            }

            #comp-m3cpj7hp {
                --rd: 25px 25px 25px 25px;
                --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                --shd: none;
                --fnt: normal normal normal 16px/1.4em helvetica-w01-roman, helvetica-w02-roman, helvetica-lt-w10-roman, sans-serif;
                --trans2: color 0.4s ease 0s;
                --txt: 65, 65, 65;
                --alpha-txt: 1;
                --brw: 0px;
                --bg: 155, 203, 108;
                --brd: 65, 65, 65;
                --bgh: 155, 203, 108;
                --brdh: 127, 204, 247;
                --txth: 7, 31, 78;
                --alpha-txth: 1;
                --bgd: 204, 204, 204;
                --alpha-bgd: 1;
                --brdd: 204, 204, 204;
                --alpha-brdd: 1;
                --txtd: 255, 255, 255;
                --alpha-txtd: 1;
                --alpha-brdh: 0;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --alpha-bgh: 0.78;
                --boxShadowToggleOn-shd: none;
            }

            #comp-m3cpj7hp {
                width: 270px;
                height: 41px;
            }

            #comp-m3cphkeb {
                --blendMode: normal;
                --textShadow: 0px 0px transparent;
                --textOutline: 0px 0px transparent;
            }

            #comp-m3cphkeb {
                width: 729px;
                height: auto;
            }

            #comp-m3cpkmta {
                --contentPaddingLeft: 0px;
                --contentPaddingRight: 0px;
                --contentPaddingTop: 0px;
                --contentPaddingBottom: 0px;
            }

            #comp-m3cpkmta {
                width: 31px;
                height: 193px;
                transform: rotate(90deg);
                --comp-rotate-z: 90deg;
            }
        </style>
        <style id="stylableCss_n1pm5"></style>
        <style id="compCssMappers_n1pm5">
            #n1pm5 {
                width: auto;
                min-height: 40px;
            }

            #pageBackground_n1pm5 {
                --bg-position: absolute;
                --bg-overlay-color: rgb(var(--color_11));
                --bg-gradient: none;
            }

            #comp-m3cp9eg9 {
                --bg-overlay-color: transparent;
                --bg-gradient: none;
                min-width: 980px;
            }

            #comp-m3cp9zp8 {
                --bg-overlay-color: transparent;
                --bg-gradient: none;
                --padding: 0px;
                --margin: 0px;
                min-width: 980px;
                --firstChildMarginTop: -1px;
                --lastChildMarginBottom: -1px;
                --items-direction: row;
            }

            #comp-m3cp9zpl {
                --fill-layer-image-opacity: 0.53;
                --bg-overlay-color: rgb(7, 31, 78);
                --bg-gradient: none;
                width: 100%;
                --column-width: 980px;
                --column-flex: 980;
            }

            #comp-m3cpbbbs {
                --height: 72px;
                --width: 72px;
            }

            #comp-m3cpf6ry {
                transform-origin: center 0.5px;
            }

            #comp-m3cpk7uu {
                --height: 193px;
                --width: 31px;
            }

            #comp-m3cpj7hp {
                --shc-mutated-brightness: 78, 102, 54;
                --margin-start: 0px;
                --margin-end: 0px;
                --fnt: normal normal normal 16px/1.4em helvetica-w01-roman, helvetica-w02-roman, helvetica-lt-w10-roman, sans-serif;
                --label-align: center;
                --label-text-align: center;
            }

            #comp-m3cpkmta {
                --height: 193px;
                --width: 31px;
            }
        </style>
    </pages-css>



    <div id="SITE_CONTAINER">
        <div id="main_MF" class="main_MF">
            <div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" tabindex="-1" role="region" aria-label="top of page"><span class="mHZSwn">top of page</span></div>
            <div id="BACKGROUND_GROUP" class="backgroundGroup_n1pm5 BACKGROUND_GROUP">
                <div id="BACKGROUND_GROUP_TRANSITION_GROUP">
                    <div id="pageBackground_n1pm5" data-media-height-override-type="" data-media-position-override="false" class="pageBackground_n1pm5 BmZ5pC">
                        <div id="bgLayers_pageBackground_n1pm5" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                            <div id="bgMedia_pageBackground_n1pm5" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="site-root" class="site-root">
                <div id="masterPage" class="mesh-layout remove-wrappers landingPage masterPage css-editing-scope">
                    <header id="SITE_HEADER" class="AT7o0U SITE_HEADER wixui-header" tabindex="-1">
                        <div class="lvxhkV"></div>
                        <div class="cKxVkc">
                            <div class="vlM3HR"></div>
                            <div class="VrZrC0">
                                <div data-mesh-id="SITE_HEADERinlineContent" data-testid="inline-content" class="">
                                    <div data-mesh-id="SITE_HEADERinlineContent-gridContainer" data-testid="mesh-container-content"></div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
                        <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
                            <div id="SITE_PAGES_TRANSITION_GROUP" class="AnQkDU">
                                <div id="n1pm5" class="dBAkHi n1pm5">
                                    <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
                                    <div class="HT5ybB">
                                        <div id="Containern1pm5" class="Containern1pm5 SPY_vo">
                                            <div data-mesh-id="Containern1pm5inlineContent" data-testid="inline-content" class="">
                                                <div data-mesh-id="Containern1pm5inlineContent-gridContainer" data-testid="mesh-container-content">
                                                    <section id="comp-m3cp9eg9" tabindex="-1" class="Oqnisf comp-m3cp9eg9 wixui-section" data-block-level-container="ClassicSection">
                                                        <div id="bgLayers_comp-m3cp9eg9" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                            <div id="bgMedia_comp-m3cp9eg9" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                        </div>
                                                        <div data-mesh-id="comp-m3cp9eg9inlineContent" data-testid="inline-content" class="">
                                                            <div data-mesh-id="comp-m3cp9eg9inlineContent-gridContainer" data-testid="mesh-container-content">
                                                                <section id="comp-m3cp9zp8" class="comp-m3cp9zp8 CohWsy wixui-column-strip">
                                                                    <div id="bgLayers_comp-m3cp9zp8" data-hook="bgLayers" data-motion-part="BG_LAYER" class="if7Vw2">
                                                                        <div data-testid="colorUnderlay" class="tcElKx i1tH8h"></div>
                                                                        <div id="bgMedia_comp-m3cp9zp8" data-motion-part="BG_MEDIA" class="wG8dni"></div>
                                                                    </div>
                                                                    <div data-testid="columns" class="V5AUxf">
                                                                        <div id="comp-m3cp9zpl" class="comp-m3cp9zpl YzqVVZ wixui-column-strip__column">
                                                                            <div id="bgLayers_comp-m3cp9zpl" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                                                <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                                                <div id="bgMedia_comp-m3cp9zpl" data-motion-part="BG_MEDIA" class="VgO9Yg"><wow-image id="img_comp-m3cp9zpl" class="HlRz5e Kv1aVt dLPlxY mNGsUM bgImage" data-image-info="{&quot;containerId&quot;:&quot;comp-m3cp9zpl&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:980,&quot;targetHeight&quot;:663,&quot;isLQIP&quot;:true,&quot;imageData&quot;:{&quot;width&quot;:7200,&quot;height&quot;:4912,&quot;uri&quot;:&quot;109259_9158983999a64d13b565e3c4b7d96c8b~mv2.jpg&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;hasAnimation&quot;:false}}" data-motion-part="BG_IMG" data-bg-effect-name="" data-has-ssr-src="true"><img src="https://static.wixstatic.com/media/109259_9158983999a64d13b565e3c4b7d96c8b~mv2.jpg/v1/fill/w_146,h_99,al_c,q_80,usm_0.66_1.00_0.01,blur_2,enc_auto/109259_9158983999a64d13b565e3c4b7d96c8b~mv2.jpg" alt="ales-krivec-N-aTikX-b00-unsplash.jpg" style="width:100%;height:100%;object-fit:cover;object-position:50% 50%" width="980" height="663" /></wow-image></div>
                                                                            </div>
                                                                            <div data-mesh-id="comp-m3cp9zplinlineContent" data-testid="inline-content" class="">
                                                                                <div data-mesh-id="comp-m3cp9zplinlineContent-gridContainer" data-testid="mesh-container-content">
                                                                                    <div id="comp-m3cpbbbs" class="MazNVa comp-m3cpbbbs wixui-image">
                                                                                        <div data-testid="linkElement" class="j7pOnl"><wow-image id="img_comp-m3cpbbbs" class="HlRz5e BI8PVQ" data-image-info="{&quot;containerId&quot;:&quot;comp-m3cpbbbs&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:72,&quot;targetHeight&quot;:72,&quot;isLQIP&quot;:false,&quot;imageData&quot;:{&quot;width&quot;:500,&quot;height&quot;:500,&quot;uri&quot;:&quot;109259_b633b6e2ac9a41c5a1d2bf5f484b80d0~mv2.png&quot;,&quot;name&quot;:&quot;letter icon - blue on white.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;hasAnimation&quot;:false}}" data-motion-part="BG_IMG" data-bg-effect-name="" data-has-ssr-src=""><img src="https://static.wixstatic.com/media/109259_b633b6e2ac9a41c5a1d2bf5f484b80d0~mv2.png/v1/fill/w_72,h_72,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/letter%20icon%20-%20blue%20on%20white.png" alt="letter icon - blue on white.png" style="width:72px;height:72px;object-fit:cover" width="72" height="72" srcSet="https://static.wixstatic.com/media/109259_b633b6e2ac9a41c5a1d2bf5f484b80d0~mv2.png/v1/fill/w_72,h_72,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/letter%20icon%20-%20blue%20on%20white.png 1x, https://static.wixstatic.com/media/109259_b633b6e2ac9a41c5a1d2bf5f484b80d0~mv2.png/v1/fill/w_144,h_144,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/letter%20icon%20-%20blue%20on%20white.png 2x" fetchpriority="high" /></wow-image></div>
                                                                                    </div>
                                                                                    <div id="comp-m3cpbpo4" class="HcOXKn c9GqVL QxJLC3 lq2cno comp-m3cpbpo4 wixui-rich-text" data-testid="richTextElement">
                                                                                        <h1 class="font_0 wixui-rich-text__text" style="font-size:36px;"><span style="font-size:36px;" class="wixui-rich-text__text"><span class="color_36 wixui-rich-text__text"><span style="font-family:lulo-clean-w01-one-bold,sans-serif;" class="wixui-rich-text__text">LIFESTYLE DESIGN QUIZ</span></span></span></h1>
                                                                                    </div>
                                                                                    <div id="comp-m3cpf6ry" class="comp-m3cpf6ry aVng1S wixui-horizontal-line"></div>
                                                                                    <div id="comp-m3cpe3n0" class="HcOXKn c9GqVL QxJLC3 lq2cno comp-m3cpe3n0 wixui-rich-text" data-testid="richTextElement">
                                                                                        <p class="font_7 wixui-rich-text__text" style="text-align:center; line-height:1.6em; font-size:22px;"><span class="color_36 wixui-rich-text__text"><span style="font-family:raleway,sans-serif;" class="wixui-rich-text__text">Unlock your true potential!</span></span></p>

                                                                                        <p class="font_7 wixui-rich-text__text" style="text-align:center; line-height:1.6em; font-size:22px;"><span class="color_36 wixui-rich-text__text"><span style="font-family:raleway,sans-serif;" class="wixui-rich-text__text">Identify your strength profile, your focus for growth,<br class="wixui-rich-text__text">
                                                                                                    AND get a free, personalised report with targeted coaching questions<br class="wixui-rich-text__text">
                                                                                                    designed to bring out your best and help you to start taking<br class="wixui-rich-text__text">
                                                                                                    smarter steps toward your maximised life, right now!</span></span></p>
                                                                                    </div>
                                                                                    <div id="comp-m3cpk7uu" class="MazNVa comp-m3cpk7uu wixui-image">
                                                                                        <div data-testid="linkElement" class="j7pOnl"><wow-image id="img_comp-m3cpk7uu" class="HlRz5e BI8PVQ" data-image-info="{&quot;containerId&quot;:&quot;comp-m3cpk7uu&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:31,&quot;targetHeight&quot;:193,&quot;isLQIP&quot;:false,&quot;imageData&quot;:{&quot;width&quot;:98,&quot;height&quot;:603,&quot;uri&quot;:&quot;109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;hasAnimation&quot;:false}}" data-motion-part="BG_IMG" data-bg-effect-name="" data-has-ssr-src=""><img src="https://static.wixstatic.com/media/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png/v1/fill/w_31,h_193,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png" alt="" style="width:31px;height:193px;object-fit:cover" width="31" height="193" srcSet="https://static.wixstatic.com/media/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png/v1/fill/w_31,h_193,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png 1x, https://static.wixstatic.com/media/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png/v1/fill/w_62,h_386,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png 2x" fetchpriority="high" /></wow-image></div>
                                                                                    </div>
                                                                                    <div class="comp-m3cpj7hp FubTgk" id="comp-m3cpj7hp" aria-disabled="false"><a data-testid="linkElement" href="{{ route('quiz') }}" target="_self" rel="noreferrer noopener" class="uDW_Qe wixui-button PlZyDq" aria-disabled="false"><span class="l7_2fn wixui-button__label">TAKE THE QUIZ</span></a></div>
                                                                                    <div id="comp-m3cphkeb" class="HcOXKn c9GqVL QxJLC3 lq2cno comp-m3cphkeb wixui-rich-text" data-testid="richTextElement">
                                                                                        <p class="font_7 wixui-rich-text__text" style="line-height:1.6em; text-align:center; font-size:12px;"><span style="font-size:12px;" class="wixui-rich-text__text"><span class="color_36 wixui-rich-text__text"><span style="font-family:raleway,sans-serif;" class="wixui-rich-text__text">&copy; Andrew Lord, MX Life Academy</span></span></span></p>
                                                                                    </div>
                                                                                    <div data-mesh-id="comp-m3cpkmta-rotated-wrapper">
                                                                                        <div id="comp-m3cpkmta" class="MazNVa comp-m3cpkmta wixui-image">
                                                                                            <div data-testid="linkElement" class="j7pOnl"><wow-image id="img_comp-m3cpkmta" class="HlRz5e BI8PVQ" data-image-info="{&quot;containerId&quot;:&quot;comp-m3cpkmta&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:31,&quot;targetHeight&quot;:193,&quot;isLQIP&quot;:false,&quot;imageData&quot;:{&quot;width&quot;:98,&quot;height&quot;:603,&quot;uri&quot;:&quot;109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;hasAnimation&quot;:false}}" data-motion-part="BG_IMG" data-bg-effect-name="" data-has-ssr-src=""><img src="https://static.wixstatic.com/media/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png/v1/fill/w_31,h_193,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png" alt="" style="width:31px;height:193px;object-fit:cover" width="31" height="193" srcSet="https://static.wixstatic.com/media/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png/v1/fill/w_31,h_193,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png 1x, https://static.wixstatic.com/media/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png/v1/fill/w_62,h_386,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/109259_dafa5b1430434274b0d505c78f62b7bb~mv2.png 2x" fetchpriority="high" /></wow-image></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <div id="soapAfterPagesContainer" class="soapAfterPagesContainer page-without-sosp">
                        <div data-mesh-id="soapAfterPagesContainerinlineContent" data-testid="inline-content" class="">
                            <div data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer" data-testid="mesh-container-content">
                                <div id="CONTROLLER_COMP_CUSTOM_ID" style="display:none"></div>
                            </div>
                        </div>
                    </div>
                    <footer id="SITE_FOOTER" class="AT7o0U SITE_FOOTER wixui-footer" tabindex="-1">
                        <div class="lvxhkV"></div>
                        <div class="cKxVkc">
                            <div class="vlM3HR"></div>
                            <div class="VrZrC0">
                                <div data-mesh-id="SITE_FOOTERinlineContent" data-testid="inline-content" class="">
                                    <div data-mesh-id="SITE_FOOTERinlineContent-gridContainer" data-testid="mesh-container-content"></div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div id="SCROLL_TO_BOTTOM" class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" tabindex="-1" role="region" aria-label="bottom of page"><span class="mHZSwn">bottom of page</span></div>
        </div>
    </div>


    <script type="application/json" id="wix-fedops">
        {
            "data": {
                "site": {
                    "metaSiteId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b",
                    "userId": "1092599e-5b99-4ebc-b2e1-09c6b2548fb9",
                    "siteId": "1322daf8-0765-48a2-9c3e-ce1e6ba131c8",
                    "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                    "siteRevision": 69,
                    "siteType": "UGC",
                    "dc": "uw2-pub-1",
                    "isResponsive": false,
                    "editorName": "Unknown",
                    "sessionId": "eb33d1fb-a670-41c3-8b39-2354ebf7af7b",
                    "isSEO": false,
                    "appNameForBiEvents": "thunderbolt"
                },
                "rollout": {
                    "siteAssetsVersionsRollout": false,
                    "isDACRollout": 0,
                    "isTBRollout": true
                },
                "fleetConfig": {
                    "fleetName": "thunderbolt-renderer-gradual",
                    "type": "Rollout",
                    "code": 1
                },
                "requestUrl": "https:\/\/mx.andrewlord.com.au\/sample-quiz-page",
                "isInSEO": false,
                "platformOnSite": true
            }
        }
    </script>
    <script>
        window.fedops = JSON.parse(document.getElementById('wix-fedops').textContent)
    </script>
    <script id='sendFedopsLoadStarted'>
        ! function() {
            function e(e, r) {
                var t = Object.keys(e);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(e);
                    r && (n = n.filter((function(r) {
                        return Object.getOwnPropertyDescriptor(e, r).enumerable
                    }))), t.push.apply(t, n)
                }
                return t
            }

            function r(e, r, t) {
                return (r = function(e) {
                    var r = function(e, r) {
                        if ("object" != typeof e || null === e) return e;
                        var t = e[Symbol.toPrimitive];
                        if (void 0 !== t) {
                            var n = t.call(e, r || "default");
                            if ("object" != typeof n) return n;
                            throw new TypeError("@@toPrimitive must return a primitive value.")
                        }
                        return ("string" === r ? String : Number)(e)
                    }(e, "string");
                    return "symbol" == typeof r ? r : String(r)
                }(r)) in e ? Object.defineProperty(e, r, {
                    value: t,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[r] = t, e
            }
            var t = function(e) {
                var r, t, n, o = !1;
                if (null === (r = window.viewerModel) || void 0 === r || !/\(iP(hone|ad|od);/i.test(null === (t = window) || void 0 === t || null === (n = t.navigator) || void 0 === n ? void 0 : n.userAgent)) try {
                    o = navigator.sendBeacon(e)
                } catch (e) {}
                o || ((new Image).src = e)
            };
            var n = window.fedops.data,
                o = n.site,
                i = n.rollout,
                a = n.fleetConfig,
                s = n.requestUrl,
                c = n.isInSEO,
                d = n.frogOnUserDomain;
            shouldReportErrorOnlyInPanorama = n.shouldReportErrorOnlyInPanorama;
            var u = function(e) {
                    var r = e.navigator.userAgent;
                    return /instagram.+google\/google/i.test(r) ? "" : /bot|google(?!play)|phantom|crawl|spider|headless|slurp|facebookexternal|Lighthouse|PTST|^mozilla\/4\.0$|^\s*$/i.test(r) ? "ua" : ""
                }(window) || function() {
                    try {
                        if (window.self === window.top) return ""
                    } catch (e) {}
                    return "iframe"
                }() || function() {
                    var e;
                    if (!Function.prototype.bind) return "bind";
                    var r = window,
                        t = r.document,
                        n = r.navigator;
                    if (!t || !n) return "document";
                    var o = n.webdriver,
                        i = n.userAgent,
                        a = n.plugins,
                        s = n.languages;
                    if (o) return "webdriver";
                    if (!a || Array.isArray(a)) return "plugins";
                    if (null !== (e = Object.getOwnPropertyDescriptor(a, "0")) && void 0 !== e && e.writable) return "plugins-extra";
                    if (!i) return "userAgent";
                    if (i.indexOf("Snapchat") > 0 && t.hidden) return "Snapchat";
                    if (!s || 0 === s.length || !Object.isFrozen(s)) return "languages";
                    try {
                        throw Error()
                    } catch (e) {
                        if (e instanceof Error) {
                            var c = e.stack;
                            if (c && / (\(internal\/)|(\(?file:\/)/.test(c)) return "stack"
                        }
                    }
                    return ""
                }() || (c ? "seo" : ""),
                l = !!u,
                p = function(t, n) {
                    var o, i = "none",
                        a = t.match(/ssr-caching="?cache[,#]\s*desc=([\w-]+)(?:[,#]\s*varnish=(\w+))?(?:[,#]\s*dc[,#]\s*desc=([\w-]+))?(?:"|;|$)/);
                    if (!a && window.PerformanceServerTiming) {
                        var s = function(e) {
                            var r, t;
                            try {
                                r = e()
                            } catch (e) {
                                r = []
                            }
                            var n = [];
                            return r.forEach((function(e) {
                                switch (e.name) {
                                    case "cache":
                                        n[1] = e.description;
                                        break;
                                    case "varnish":
                                        n[2] = e.description;
                                        break;
                                    case "dc":
                                        t = e.description
                                }
                            })), {
                                microPop: t,
                                matches: n
                            }
                        }(n);
                        o = s.microPop, a = s.matches
                    }
                    if (a && a.length && (i = `${a[1]},${a[2]||"none"}`, o || (o = a[3])), "none" === i) {
                        var c = "undefined" != typeof performance ? performance.timing : null;
                        c && c.responseStart - c.requestStart == 0 && (i = "browser")
                    }
                    return function(t) {
                        for (var n = 1; n < arguments.length; n++) {
                            var o = null != arguments[n] ? arguments[n] : {};
                            n % 2 ? e(Object(o), !0).forEach((function(e) {
                                r(t, e, o[e])
                            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(o)) : e(Object(o)).forEach((function(e) {
                                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(o, e))
                            }))
                        }
                        return t
                    }({
                        caching: i,
                        isCached: i.includes("hit")
                    }, o ? {
                        microPop: o
                    } : {})
                }(document.cookie, (function() {
                    return performance.getEntriesByType("navigation")[0].serverTiming || []
                })),
                f = p.isCached,
                m = p.caching,
                v = p.microPop,
                w = {
                    WixSite: 1,
                    UGC: 2,
                    Template: 3
                } [o.siteType] || 0,
                g = "Studio" === o.editorName ? "wix-studio" : o.isResponsive ? "thunderbolt-responsive" : "thunderbolt",
                h = i.isDACRollout,
                b = i.siteAssetsVersionsRollout,
                y = h ? 1 : 0,
                x = b ? 1 : 0,
                O = 0 === a.code || 1 === a.code ? a.code : null,
                S = 2 === a.code,
                P = Date.now() - window.initialTimestamps.initialTimestamp,
                T = Math.round(performance.now()),
                _ = document.visibilityState,
                j = window,
                E = j.fedops,
                I = j.addEventListener,
                k = j.thunderboltVersion;
            E.apps = E.apps || {}, E.apps[g] = {
                startLoadTime: T
            }, E.sessionId = o.sessionId, E.vsi = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, (function(e) {
                var r = 16 * Math.random() | 0;
                return ("x" === e ? r : 3 & r | 8).toString(16)
            })), E.is_cached = f, E.phaseStarted = D(28), E.phaseEnded = D(22), performance.mark("[cache] " + m + (v ? " [" + v + "]" : "")), E.reportError = function(e, r = "load") {
                var t = (null == e ? void 0 : e.reason) || (null == e ? void 0 : e.message);
                t ? (shouldReportErrorOnlyInPanorama || R(26, `&errorInfo=${t}&errorType=${r}`), $({
                    error: {
                        name: r,
                        message: t,
                        stack: e?.stack
                    }
                })) : e.preventDefault()
            }, I("error", E.reportError), I("unhandledrejection", E.reportError);
            var A = !1;

            function R(e) {
                var r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
                if (!s.includes("suppressbi=true")) {
                    var n = (d ? o.externalBaseUrl.replace(/^https?:\/\//, "") + "/_frog" : "//frog.wix.com") + "/bolt-performance?src=72&evid=" + e + "&appName=" + g + "&is_rollout=" + O + "&is_company_network=" + S + "&is_sav_rollout=" + x + "&is_dac_rollout=" + y + "&dc=" + o.dc + (v ? "&microPop=" + v : "") + "&is_cached=" + f + "&msid=" + o.metaSiteId + "&session_id=" + window.fedops.sessionId + "&ish=" + l + "&isb=" + l + (l ? "&isbr=" + u : "") + "&vsi=" + window.fedops.vsi + "&caching=" + m + (A ? ",browser_cache" : "") + "&pv=" + _ + "&pn=1&v=" + k + "&url=" + encodeURIComponent(s) + "&st=" + w + `&ts=${P}&tsn=${T}` + r;
                    t(n)
                }
            }

            function $({
                transaction: e,
                error: r
            }) {
                const t = [{
                    fullArtifactId: "com.wixpress.html-client.wix-thunderbolt",
                    componentId: g,
                    platform: "viewer",
                    msid: window.fedops.data.site.metaSiteId,
                    sessionId: window.fedops.sessionId,
                    sessionTime: Date.now() - window.initialTimestamps.initialTimestamp,
                    logLevel: r ? "ERROR" : "INFO",
                    message: r?.message ?? (e?.name && `${e.name} START`),
                    errorName: r?.name,
                    errorStack: r?.stack,
                    transactionName: e?.name,
                    transactionAction: e && "START",
                    isSsr: !1,
                    dataCenter: o.dc,
                    isCached: !!f,
                    isRollout: !!O,
                    isHeadless: !!l,
                    isDacRollout: !!y,
                    isSavRollout: !!x,
                    isCompanyNetwork: !!S
                }];
                try {
                    const e = JSON.stringify({
                        messages: t
                    });
                    return navigator.sendBeacon("https://panorama.wixapps.net/api/v1/bulklog", e)
                } catch (e) {
                    console.error(e)
                }
            }

            function D(e) {
                return function(r, t) {
                    var n = `&name=${r}&duration=${Date.now()-P}`,
                        o = t && t.paramsOverrides ? Object.keys(t.paramsOverrides).map((function(e) {
                            return e + "=" + t.paramsOverrides[e]
                        })).join("&") : "";
                    R(e, o ? `${n}&${o}` : n)
                }
            }
            I("pageshow", (function(e) {
                e.persisted && (A || (A = !0, E.is_cached = !0))
            }), !0), window.__browser_deprecation__ || (R(21, `&platformOnSite=${window.fedops.data.platformOnSite}`), $({
                transaction: {
                    name: "PANORAMA_COMPONENT_LOAD"
                }
            }))
        }();
    </script>

    <!-- Polyfills check -->
    <script>
        if (
            typeof Promise === 'undefined' ||
            typeof Set === 'undefined' ||
            typeof Object.assign === 'undefined' ||
            typeof Array.from === 'undefined' ||
            typeof Symbol === 'undefined'
        ) {
            // send bi in order to detect the browsers in which polyfills are not working
            window.fedops.phaseStarted('missing_polyfills')
        }
    </script>


    <!-- initCustomElements # 1-->
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/webpack-runtime.35df1110.bundle.min.js">
        ! function() {
            "use strict";
            var e, o, n, r, t, i = {},
                a = {};

            function d(e) {
                var o = a[e];
                if (void 0 !== o) return o.exports;
                var n = a[e] = {
                    id: e,
                    loaded: !1,
                    exports: {}
                };
                return i[e].call(n.exports, n, n.exports, d), n.loaded = !0, n.exports
            }
            d.m = i, e = [], d.O = function(o, n, r, t) {
                    if (!n) {
                        var i = 1 / 0;
                        for (u = 0; u < e.length; u++) {
                            n = e[u][0], r = e[u][1], t = e[u][2];
                            for (var a = !0, c = 0; c < n.length; c++)(!1 & t || i >= t) && Object.keys(d.O).every((function(e) {
                                return d.O[e](n[c])
                            })) ? n.splice(c--, 1) : (a = !1, t < i && (i = t));
                            if (a) {
                                e.splice(u--, 1);
                                var s = r();
                                void 0 !== s && (o = s)
                            }
                        }
                        return o
                    }
                    t = t || 0;
                    for (var u = e.length; u > 0 && e[u - 1][2] > t; u--) e[u] = e[u - 1];
                    e[u] = [n, r, t]
                }, d.n = function(e) {
                    var o = e && e.__esModule ? function() {
                        return e.default
                    } : function() {
                        return e
                    };
                    return d.d(o, {
                        a: o
                    }), o
                }, n = Object.getPrototypeOf ? function(e) {
                    return Object.getPrototypeOf(e)
                } : function(e) {
                    return e.__proto__
                }, d.t = function(e, r) {
                    if (1 & r && (e = this(e)), 8 & r) return e;
                    if ("object" == typeof e && e) {
                        if (4 & r && e.__esModule) return e;
                        if (16 & r && "function" == typeof e.then) return e
                    }
                    var t = Object.create(null);
                    d.r(t);
                    var i = {};
                    o = o || [null, n({}), n([]), n(n)];
                    for (var a = 2 & r && e;
                        "object" == typeof a && !~o.indexOf(a); a = n(a)) Object.getOwnPropertyNames(a).forEach((function(o) {
                        i[o] = function() {
                            return e[o]
                        }
                    }));
                    return i.default = function() {
                        return e
                    }, d.d(t, i), t
                }, d.d = function(e, o) {
                    for (var n in o) d.o(o, n) && !d.o(e, n) && Object.defineProperty(e, n, {
                        enumerable: !0,
                        get: o[n]
                    })
                }, d.f = {}, d.e = function(e) {
                    return Promise.all(Object.keys(d.f).reduce((function(o, n) {
                        return d.f[n](e, o), o
                    }), []))
                }, d.u = function(e) {
                    return 671 === e ? "thunderbolt-commons.8db75bde.bundle.min.js" : 592 === e ? "fastdom.inline.fbeb22f8.bundle.min.js" : 996 === e ? "render-indicator.inline.e7c7eae0.bundle.min.js" : 8398 === e ? "custom-element-utils.inline.867d0d19.bundle.min.js" : ({
                        34: "FontFaces",
                        40: "wixEcomFrontendWixCodeSdk",
                        46: "TPAPopup",
                        161: "wix-seo-events-page-structured-data-index",
                        200: "wix-seo-reviews-component-index",
                        266: "group_3",
                        316: "windowScroll",
                        349: "wix-seo-breadcrumbs-component-index",
                        350: "wix-seo-static-page-v2-index",
                        359: "group_48",
                        407: "wix-seo-SEO_DEFAULT",
                        481: "wix-seo-forum-category-index",
                        541: "TPAUnavailableMessageOverlay",
                        569: "assetsLoader",
                        693: "triggersAndReactions",
                        695: "animationsWixCodeSdk",
                        711: "passwordProtectedPage",
                        740: "group_43",
                        789: "wix-seo-images-component-index",
                        851: "group_2",
                        970: "tpaWidgetNativeDeadComp",
                        974: "animations",
                        1021: "wix-seo-portfolio-collections-index",
                        1171: "platformPubsub",
                        1184: "group_18",
                        1232: "group_9",
                        1274: "ooi",
                        1305: "seo-api",
                        1494: "wix-seo-groups-post-index",
                        1499: "wix-seo-protected-page-index",
                        1501: "builderComponent",
                        1530: "wix-seo-bookings-form-index",
                        1560: "TPABaseComponent",
                        1579: "wix-seo-services-component-index",
                        1632: "SiteStyles",
                        1922: "widgetWixCodeSdk",
                        1991: "tpaModuleProvider",
                        2040: "debug",
                        2077: "wix-seo-search-page-index",
                        2177: "group_11",
                        2179: "AppPart2",
                        2313: "group_46",
                        2358: "wix-seo-blog-post-index",
                        2396: "merge-mappers",
                        2516: "presenceApi",
                        2545: "thunderbolt-components-registry",
                        2594: "tpaCommons",
                        2624: "group_21",
                        2635: "group_22",
                        2646: "platform",
                        2694: "group_38",
                        2705: "group_37",
                        2816: "wix-seo-blog-category-index",
                        2865: "Repeater_FixedColumns",
                        3002: "svgLoader",
                        3006: "wix-seo-paginated-component-index",
                        3092: "group_50",
                        3096: "wix-seo-stores-gallery-component-index",
                        3119: "Repeater_FluidColumns",
                        3272: "FontRulersContainer",
                        3286: "wix-seo-stores-product-schema-presets-index",
                        3495: "wix-seo-blog-tags-index",
                        3499: "wix-seo-restaurants-menu-component-index",
                        3511: "environmentWixCodeSdk",
                        3542: "dynamicPages",
                        3605: "cyclicTabbing",
                        3659: "componentsqaapi",
                        3660: "group_5",
                        3671: "group_6",
                        3682: "TPAWorker",
                        3689: "seo-api-converters",
                        3780: "wix-seo-schedule-page-index",
                        3909: "motion",
                        3930: "mobileFullScreen",
                        3993: "group_19",
                        4047: "wix-seo-events-list-component-index",
                        4066: "TPAPreloaderOverlay",
                        4134: "group_41",
                        4206: "santa-platform-utils",
                        4245: "testApi",
                        4303: "widget",
                        4456: "group_29",
                        4493: "remoteStructureRenderer",
                        4526: "group_30",
                        4551: "wix-seo-members-area-profile-tabs-index",
                        4655: "reporter-api",
                        4676: "wix-seo-events-page-index",
                        4708: "routerFetch",
                        4773: "quickActionBar",
                        4874: "wix-seo-stores-category-index",
                        5097: "motionEffects",
                        5114: "wix-seo-bookings-calendar-index",
                        5116: "wix-seo-wix-data-page-item-index",
                        5122: "group_45",
                        5133: "group_42",
                        5148: "router",
                        5168: "wixDomSanitizer",
                        5219: "wix-seo-static-page-index",
                        5221: "stores",
                        5307: "wix-seo-blog-hashtags-index",
                        5377: "onloadCompsBehaviors",
                        5433: "group_20",
                        5444: "group_25",
                        5445: "protectedPages",
                        5503: "group_39",
                        5625: "group_8",
                        5648: "wix-seo-members-area-profile-index",
                        5739: "externalComponent",
                        5901: "group_51",
                        5966: "group_49",
                        5998: "stickyToComponent",
                        6099: "group_35",
                        6137: "BuilderPathsContainer",
                        6178: "searchBox",
                        6304: "wix-seo-gift-card-index",
                        6384: "dashboardWixCodeSdk",
                        6441: "wix-seo-restaurants-menu-page-index",
                        6469: "group_4",
                        6505: "editorElementsDynamicTheme",
                        6510: "tslib.inline",
                        6578: "renderIndicator",
                        6739: "presence-lazy",
                        6821: "becky-css",
                        6850: "componentsLoader",
                        6851: "wix-seo-forum-post-index",
                        6935: "module-executor",
                        6943: "group_40",
                        7030: "feedback",
                        7116: "scrollToAnchor",
                        7171: "siteMembers",
                        7230: "popups",
                        7265: "group_28",
                        7331: "RemoteRefDeadComp",
                        7393: "vsm-css",
                        7457: "group_0",
                        7471: "wix-seo-bookings-service-index",
                        7513: "wix-seo-stores-sub-category-index",
                        7547: "AppPart",
                        7562: "usedPlatformApis",
                        7920: "group_47",
                        7931: "group_44",
                        8039: "containerSlider",
                        8104: "tpa",
                        8149: "GhostComp",
                        8242: "group_23",
                        8253: "group_24",
                        8368: "wix-seo-programs-component-index",
                        8380: "group_14",
                        8423: "customCss",
                        8519: "qaApi",
                        8595: "wix-seo-challenges-page-index",
                        8735: "wix-seo-static-page-v2-schema-presets-index",
                        8791: "wix-seo-events-page-calculated-index",
                        8838: "group_27",
                        8840: "ByocStyles",
                        8908: "group_32",
                        8919: "group_31",
                        8934: "panorama",
                        8981: "wix-seo-groups-page-index",
                        9040: "wix-seo-restaurants-order-page-index",
                        9090: "clientSdk",
                        9098: "wix-seo-video-component-index",
                        9131: "wix-seo-payment-page-index",
                        9141: "wix-seo-pro-gallery-item-index",
                        9166: "wix-seo-portfolio-projects-index",
                        9203: "wix-seo-thank-you-page-index",
                        9219: "group_13",
                        9278: "group_7",
                        9341: "editorWixCodeSdk",
                        9368: "group_10",
                        9506: "wix-seo-members-area-author-profile-index",
                        9507: "TPAModal",
                        9533: "wix-seo-stores-product-index",
                        9764: "wix-seo-pricing-plans-index",
                        9822: "businessManager",
                        9896: "group_36",
                        9948: "wix-seo-blog-archive-index"
                    } [e] || e) + "." + {
                        34: "ef96c275",
                        40: "0cc7f309",
                        46: "25cd7240",
                        161: "a0b2fc46",
                        200: "10691d97",
                        266: "b6e3b305",
                        316: "2b6c52d3",
                        349: "f4f1ac53",
                        350: "014ac761",
                        359: "37f253bd",
                        407: "1dd38d2f",
                        481: "30fd8c34",
                        490: "b6f2be6d",
                        541: "1c56d534",
                        569: "a89ec09e",
                        693: "66bcbb0c",
                        695: "0f7330c1",
                        711: "f58235c3",
                        740: "593412c3",
                        789: "759c18b6",
                        851: "9d98901c",
                        970: "48e46885",
                        974: "0c47ed2a",
                        1021: "e1f15471",
                        1171: "236f41ee",
                        1184: "1410c866",
                        1232: "eceab444",
                        1274: "23a751c1",
                        1305: "ccfc8780",
                        1494: "9110d717",
                        1499: "7d8ce975",
                        1501: "2518730a",
                        1530: "69c98f04",
                        1560: "70544b41",
                        1579: "a376d5b0",
                        1619: "fcc1e235",
                        1632: "a075fc9c",
                        1922: "8752e4ce",
                        1991: "6b9598f8",
                        2040: "4e59686e",
                        2077: "99fb09f3",
                        2177: "3fa95a07",
                        2179: "6edde50a",
                        2313: "286df541",
                        2358: "46dcfa66",
                        2396: "63dd77b4",
                        2516: "852c4fdc",
                        2545: "bf2fd22d",
                        2594: "1b788520",
                        2624: "bd9023c1",
                        2635: "c72c096c",
                        2646: "db48ebfa",
                        2694: "0437e39e",
                        2705: "41a8197c",
                        2816: "ed94b02a",
                        2865: "a1217057",
                        3002: "67cd7ecf",
                        3006: "ea2aebf0",
                        3092: "acfa329d",
                        3096: "df8f046c",
                        3119: "9fbbbe9a",
                        3272: "5a7bdbdc",
                        3286: "35353b32",
                        3495: "de5b81ec",
                        3499: "9e2211f6",
                        3511: "7690a40b",
                        3542: "78745900",
                        3605: "d769028f",
                        3659: "e52cbf68",
                        3660: "89e517ff",
                        3671: "3c440389",
                        3682: "d4312ae4",
                        3689: "2f0703f6",
                        3780: "74c3ce54",
                        3909: "d7365695",
                        3930: "548b75c4",
                        3970: "ed686049",
                        3993: "7fd5a859",
                        4047: "0ccd3b42",
                        4066: "8c009349",
                        4134: "01e6cb7c",
                        4206: "d0940920",
                        4245: "945bb0ec",
                        4303: "745a5867",
                        4456: "cf3f7ea5",
                        4493: "7b4568ca",
                        4526: "81479495",
                        4551: "13fa8928",
                        4655: "b56a03fd",
                        4676: "a3358426",
                        4708: "a578e82e",
                        4773: "c77781f6",
                        4874: "6b8ba119",
                        4945: "8d1478e2",
                        5049: "ac85cc01",
                        5097: "e3cc5347",
                        5114: "87f7512c",
                        5116: "8d3a31cb",
                        5122: "9ec687ae",
                        5133: "46d4bcd5",
                        5148: "a5287863",
                        5168: "ec1b1b1c",
                        5219: "b25ed766",
                        5221: "5896c8a4",
                        5307: "d9442b1e",
                        5377: "4508895f",
                        5433: "d7ca9f27",
                        5444: "a6dc06b8",
                        5445: "0014c834",
                        5503: "f998017c",
                        5625: "baf7261b",
                        5648: "2bc79b7b",
                        5739: "98cc9a7b",
                        5901: "c0238250",
                        5966: "59859d7b",
                        5998: "eb4a0977",
                        6099: "27e68b0e",
                        6137: "691f2882",
                        6178: "e643f152",
                        6304: "e257cea9",
                        6384: "80075f96",
                        6441: "2bac1162",
                        6469: "92eb9137",
                        6505: "e3aecc44",
                        6510: "4901af4a",
                        6578: "e47df9c0",
                        6739: "14bcd56b",
                        6821: "f9b59117",
                        6850: "2a47460a",
                        6851: "a86fc62c",
                        6935: "aab51657",
                        6943: "42a25e81",
                        7030: "255bbff9",
                        7116: "3bd0f78e",
                        7171: "55bcda3b",
                        7230: "efc78062",
                        7265: "80fe286a",
                        7331: "8542ddfa",
                        7393: "b8caf4f8",
                        7457: "591a3770",
                        7471: "19ba7aa8",
                        7513: "4bc4f1e5",
                        7547: "1c7e3318",
                        7562: "c3e70464",
                        7920: "33ecf404",
                        7931: "0f559da0",
                        8039: "4d732a78",
                        8104: "2287343c",
                        8149: "b50695fd",
                        8242: "3eeabd9c",
                        8253: "f856184a",
                        8368: "4a3a4b9a",
                        8380: "f675f369",
                        8423: "031d9d02",
                        8519: "af328557",
                        8595: "be60e3c9",
                        8735: "2740d21e",
                        8791: "031fbaaf",
                        8838: "ec3d04ab",
                        8840: "8874baab",
                        8869: "db08baa2",
                        8908: "033af83e",
                        8919: "82d70b0a",
                        8934: "051dc072",
                        8981: "aed7074b",
                        9040: "353f99cc",
                        9090: "30bb4512",
                        9098: "908c214d",
                        9131: "b2555831",
                        9141: "f2555790",
                        9166: "d4238959",
                        9203: "9592e074",
                        9219: "fa93d2d5",
                        9278: "66354232",
                        9341: "268e432b",
                        9368: "84c521e3",
                        9422: "be34f36b",
                        9506: "72b7ea36",
                        9507: "60d51756",
                        9533: "a005c333",
                        9764: "1ce46641",
                        9822: "d02346fa",
                        9839: "bb61fb83",
                        9896: "6ed9a539",
                        9948: "23bb47f9"
                    } [e] + ".chunk.min.js"
                }, d.miniCssF = function(e) {
                    return 996 === e ? "render-indicator.inline.044c11cb.min.css" : {
                        46: "TPAPopup",
                        541: "TPAUnavailableMessageOverlay",
                        970: "tpaWidgetNativeDeadComp",
                        1560: "TPABaseComponent",
                        2179: "AppPart2",
                        2865: "Repeater_FixedColumns",
                        3119: "Repeater_FluidColumns",
                        3272: "FontRulersContainer",
                        4066: "TPAPreloaderOverlay",
                        7547: "AppPart",
                        9278: "group_7",
                        9507: "TPAModal"
                    } [e] + "." + {
                        46: "7e7f441d",
                        541: "fb1e5320",
                        970: "edad7c2d",
                        1560: "27e1e284",
                        2179: "0a2601ec",
                        2865: "9abcda74",
                        3119: "2b7b96dd",
                        3272: "2b93f1ca",
                        4066: "6dbffa0c",
                        7547: "34a92bc1",
                        9278: "bae0ce0c",
                        9507: "52dc3d33"
                    } [e] + ".chunk.min.css"
                }, d.g = function() {
                    if ("object" == typeof globalThis) return globalThis;
                    try {
                        return this || new Function("return this")()
                    } catch (e) {
                        if ("object" == typeof window) return window
                    }
                }(), d.o = function(e, o) {
                    return Object.prototype.hasOwnProperty.call(e, o)
                }, r = {}, t = "_wix_thunderbolt_app:", d.l = function(e, o, n, i) {
                    if (r[e]) r[e].push(o);
                    else {
                        var a, c;
                        if (void 0 !== n)
                            for (var s = document.getElementsByTagName("script"), u = 0; u < s.length; u++) {
                                var f = s[u];
                                if (f.getAttribute("src") == e || f.getAttribute("data-webpack") == t + n) {
                                    a = f;
                                    break
                                }
                            }
                        a || (c = !0, (a = document.createElement("script")).charset = "utf-8", a.timeout = 120, d.nc && a.setAttribute("nonce", d.nc), a.setAttribute("data-webpack", t + n), a.src = e, 0 !== a.src.indexOf(window.location.origin + "/") && (a.crossOrigin = "anonymous")), r[e] = [o];
                        var p = function(o, n) {
                                a.onerror = a.onload = null, clearTimeout(b);
                                var t = r[e];
                                if (delete r[e], a.parentNode && a.parentNode.removeChild(a), t && t.forEach((function(e) {
                                        return e(n)
                                    })), o) return o(n)
                            },
                            b = setTimeout(p.bind(null, void 0, {
                                type: "timeout",
                                target: a
                            }), 12e4);
                        a.onerror = p.bind(null, a.onerror), a.onload = p.bind(null, a.onload), c && document.head.appendChild(a)
                    }
                }, d.r = function(e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                        value: "Module"
                    }), Object.defineProperty(e, "__esModule", {
                        value: !0
                    })
                }, d.nmd = function(e) {
                    return e.paths = [], e.children || (e.children = []), e
                }, d.p = "https://static.parastorage.com/services/wix-thunderbolt/dist/",
                function() {
                    if ("undefined" != typeof document) {
                        var e = function(e) {
                                return new Promise((function(o, n) {
                                    var r = d.miniCssF(e),
                                        t = d.p + r;
                                    if (function(e, o) {
                                            for (var n = document.getElementsByTagName("link"), r = 0; r < n.length; r++) {
                                                var t = (a = n[r]).getAttribute("data-href") || a.getAttribute("href");
                                                if ("stylesheet" === a.rel && (t === e || t === o)) return a
                                            }
                                            var i = document.getElementsByTagName("style");
                                            for (r = 0; r < i.length; r++) {
                                                var a;
                                                if ((t = (a = i[r]).getAttribute("data-href")) === e || t === o) return a
                                            }
                                        }(r, t)) return o();
                                    ! function(e, o, n, r, t) {
                                        var i = document.createElement("link");
                                        i.rel = "stylesheet", i.type = "text/css", i.onerror = i.onload = function(n) {
                                            if (i.onerror = i.onload = null, "load" === n.type) r();
                                            else {
                                                var a = n && ("load" === n.type ? "missing" : n.type),
                                                    d = n && n.target && n.target.href || o,
                                                    c = new Error("Loading CSS chunk " + e + " failed.\n(" + d + ")");
                                                c.code = "CSS_CHUNK_LOAD_FAILED", c.type = a, c.request = d, i.parentNode && i.parentNode.removeChild(i), t(c)
                                            }
                                        }, i.href = o, 0 !== i.href.indexOf(window.location.origin + "/") && (i.crossOrigin = "anonymous"), n ? n.parentNode.insertBefore(i, n.nextSibling) : document.head.appendChild(i)
                                    }(e, t, null, o, n)
                                }))
                            },
                            o = {
                                7311: 0
                            };
                        d.f.miniCss = function(n, r) {
                            o[n] ? r.push(o[n]) : 0 !== o[n] && {
                                46: 1,
                                541: 1,
                                970: 1,
                                996: 1,
                                1560: 1,
                                2179: 1,
                                2865: 1,
                                3119: 1,
                                3272: 1,
                                4066: 1,
                                7547: 1,
                                9278: 1,
                                9507: 1
                            } [n] && r.push(o[n] = e(n).then((function() {
                                o[n] = 0
                            }), (function(e) {
                                throw delete o[n], e
                            })))
                        }
                    }
                }(),
                function() {
                    var e = {
                        7311: 0
                    };
                    d.f.j = function(o, n) {
                        var r = d.o(e, o) ? e[o] : void 0;
                        if (0 !== r)
                            if (r) n.push(r[2]);
                            else if (7311 != o) {
                            var t = new Promise((function(n, t) {
                                r = e[o] = [n, t]
                            }));
                            n.push(r[2] = t);
                            var i = d.p + d.u(o),
                                a = new Error;
                            d.l(i, (function(n) {
                                if (d.o(e, o) && (0 !== (r = e[o]) && (e[o] = void 0), r)) {
                                    var t = n && ("load" === n.type ? "missing" : n.type),
                                        i = n && n.target && n.target.src;
                                    a.message = "Loading chunk " + o + " failed.\n(" + t + ": " + i + ")", a.name = "ChunkLoadError", a.type = t, a.request = i, r[1](a)
                                }
                            }), "chunk-" + o, o)
                        } else e[o] = 0
                    }, d.O.j = function(o) {
                        return 0 === e[o]
                    };
                    var o = function(o, n) {
                            var r, t, i = n[0],
                                a = n[1],
                                c = n[2],
                                s = 0;
                            if (i.some((function(o) {
                                    return 0 !== e[o]
                                }))) {
                                for (r in a) d.o(a, r) && (d.m[r] = a[r]);
                                if (c) var u = c(d)
                            }
                            for (o && o(n); s < i.length; s++) t = i[s], d.o(e, t) && e[t] && e[t][0](), e[t] = 0;
                            return d.O(u)
                        },
                        n = self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || [];
                    n.forEach(o.bind(null, 0)), n.push = o.bind(null, n.push.bind(n))
                }()
        }();
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/webpack-runtime.35df1110.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/fastdom.inline.fbeb22f8.bundle.min.js">
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [592], {
                17709: function(t, e, n) {
                    var i;
                    ! function(e) {
                        "use strict";
                        var r = function() {},
                            s = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.msRequestAnimationFrame || function(t) {
                                return setTimeout(t, 16)
                            };

                        function a() {
                            var t = this;
                            t.reads = [], t.writes = [], t.raf = s.bind(e), r("initialized", t)
                        }

                        function u(t) {
                            t.scheduled || (t.scheduled = !0, t.raf(o.bind(null, t)), r("flush scheduled"))
                        }

                        function o(t) {
                            r("flush");
                            var e, n = t.writes,
                                i = t.reads;
                            try {
                                r("flushing reads", i.length), t.runTasks(i), r("flushing writes", n.length), t.runTasks(n)
                            } catch (t) {
                                e = t
                            }
                            if (t.scheduled = !1, (i.length || n.length) && u(t), e) {
                                if (r("task errored", e.message), !t.catch) throw e;
                                t.catch(e)
                            }
                        }

                        function c(t, e) {
                            var n = t.indexOf(e);
                            return !!~n && !!t.splice(n, 1)
                        }
                        a.prototype = {
                            constructor: a,
                            runTasks: function(t) {
                                var e;
                                for (r("run tasks"); e = t.shift();) e()
                            },
                            measure: function(t, e) {
                                r("measure");
                                var n = e ? t.bind(e) : t;
                                return this.reads.push(n), u(this), n
                            },
                            mutate: function(t, e) {
                                r("mutate");
                                var n = e ? t.bind(e) : t;
                                return this.writes.push(n), u(this), n
                            },
                            clear: function(t) {
                                return r("clear", t), c(this.reads, t) || c(this.writes, t)
                            },
                            extend: function(t) {
                                if (r("extend", t), "object" != typeof t) throw new Error("expected object");
                                var e = Object.create(this);
                                return function(t, e) {
                                    for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n])
                                }(e, t), e.fastdom = this, e.initialize && e.initialize(), e
                            },
                            catch: null
                        };
                        var h = e.fastdom = e.fastdom || new a;
                        void 0 === (i = function() {
                            return h
                        }.call(h, n, h, t)) || (t.exports = i)
                    }("undefined" != typeof window ? window : void 0 !== this ? this : globalThis)
                }
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/fastdom.inline.fbeb22f8.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/custom-element-utils.inline.867d0d19.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [8398], {
                22538: function(t, e, i) {
                    i.r(e), i.d(e, {
                        STATIC_MEDIA_URL: function() {
                            return jt
                        },
                        alignTypes: function() {
                            return _
                        },
                        fileType: function() {
                            return O
                        },
                        fittingTypes: function() {
                            return h
                        },
                        getData: function() {
                            return Bt
                        },
                        getFileExtension: function() {
                            return B
                        },
                        getPlaceholder: function() {
                            return Ht
                        },
                        getResponsiveImageProps: function() {
                            return zt
                        },
                        htmlTag: function() {
                            return l
                        },
                        isWEBP: function() {
                            return P
                        },
                        populateGlobalFeatureSupport: function() {
                            return Q
                        },
                        sdk: function() {
                            return Zt
                        },
                        upscaleMethods: function() {
                            return g
                        }
                    });
                    const n = "v1",
                        a = 2,
                        r = 1920,
                        o = 1920,
                        c = 1e3,
                        s = 1e3,
                        h = {
                            SCALE_TO_FILL: "fill",
                            SCALE_TO_FIT: "fit",
                            STRETCH: "stretch",
                            ORIGINAL_SIZE: "original_size",
                            TILE: "tile",
                            TILE_HORIZONTAL: "tile_horizontal",
                            TILE_VERTICAL: "tile_vertical",
                            FIT_AND_TILE: "fit_and_tile",
                            LEGACY_STRIP_TILE: "legacy_strip_tile",
                            LEGACY_STRIP_TILE_HORIZONTAL: "legacy_strip_tile_horizontal",
                            LEGACY_STRIP_TILE_VERTICAL: "legacy_strip_tile_vertical",
                            LEGACY_STRIP_SCALE_TO_FILL: "legacy_strip_fill",
                            LEGACY_STRIP_SCALE_TO_FIT: "legacy_strip_fit",
                            LEGACY_STRIP_FIT_AND_TILE: "legacy_strip_fit_and_tile",
                            LEGACY_STRIP_ORIGINAL_SIZE: "legacy_strip_original_size",
                            LEGACY_ORIGINAL_SIZE: "actual_size",
                            LEGACY_FIT_WIDTH: "fitWidth",
                            LEGACY_FIT_HEIGHT: "fitHeight",
                            LEGACY_FULL: "full",
                            LEGACY_BG_FIT_AND_TILE: "legacy_tile",
                            LEGACY_BG_FIT_AND_TILE_HORIZONTAL: "legacy_tile_horizontal",
                            LEGACY_BG_FIT_AND_TILE_VERTICAL: "legacy_tile_vertical",
                            LEGACY_BG_NORMAL: "legacy_normal"
                        },
                        u = {
                            FIT: "fit",
                            FILL: "fill",
                            FILL_FOCAL: "fill_focal",
                            CROP: "crop",
                            LEGACY_CROP: "legacy_crop",
                            LEGACY_FILL: "legacy_fill"
                        },
                        _ = {
                            CENTER: "center",
                            TOP: "top",
                            TOP_LEFT: "top_left",
                            TOP_RIGHT: "top_right",
                            BOTTOM: "bottom",
                            BOTTOM_LEFT: "bottom_left",
                            BOTTOM_RIGHT: "bottom_right",
                            LEFT: "left",
                            RIGHT: "right"
                        },
                        T = {
                            [_.CENTER]: {
                                x: .5,
                                y: .5
                            },
                            [_.TOP_LEFT]: {
                                x: 0,
                                y: 0
                            },
                            [_.TOP_RIGHT]: {
                                x: 1,
                                y: 0
                            },
                            [_.TOP]: {
                                x: .5,
                                y: 0
                            },
                            [_.BOTTOM_LEFT]: {
                                x: 0,
                                y: 1
                            },
                            [_.BOTTOM_RIGHT]: {
                                x: 1,
                                y: 1
                            },
                            [_.BOTTOM]: {
                                x: .5,
                                y: 1
                            },
                            [_.RIGHT]: {
                                x: 1,
                                y: .5
                            },
                            [_.LEFT]: {
                                x: 0,
                                y: .5
                            }
                        },
                        d = {
                            center: "c",
                            top: "t",
                            top_left: "tl",
                            top_right: "tr",
                            bottom: "b",
                            bottom_left: "bl",
                            bottom_right: "br",
                            left: "l",
                            right: "r"
                        },
                        l = {
                            BG: "bg",
                            IMG: "img",
                            SVG: "svg"
                        },
                        g = {
                            AUTO: "auto",
                            CLASSIC: "classic",
                            SUPER: "super"
                        },
                        I = {
                            classic: 1,
                            super: 2
                        },
                        L = {
                            radius: "0.66",
                            amount: "1.00",
                            threshold: "0.01"
                        },
                        p = {
                            uri: "",
                            css: {
                                img: {},
                                container: {}
                            },
                            attr: {
                                img: {},
                                container: {}
                            },
                            transformed: !1
                        },
                        E = 25e6,
                        f = [1.5, 2, 4],
                        m = {
                            HIGH: {
                                size: 196e4,
                                quality: 90,
                                maxUpscale: 1
                            },
                            MEDIUM: {
                                size: 36e4,
                                quality: 85,
                                maxUpscale: 1
                            },
                            LOW: {
                                size: 16e4,
                                quality: 80,
                                maxUpscale: 1.2
                            },
                            TINY: {
                                size: 0,
                                quality: 80,
                                maxUpscale: 1.4
                            }
                        },
                        A = {
                            HIGH: "HIGH",
                            MEDIUM: "MEDIUM",
                            LOW: "LOW",
                            TINY: "TINY"
                        },
                        G = {
                            CONTRAST: "contrast",
                            BRIGHTNESS: "brightness",
                            SATURATION: "saturation",
                            HUE: "hue",
                            BLUR: "blur"
                        },
                        O = {
                            JPG: "jpg",
                            JPEG: "jpeg",
                            JPE: "jpe",
                            PNG: "png",
                            WEBP: "webp",
                            WIX_ICO_MP: "wix_ico_mp",
                            WIX_MP: "wix_mp",
                            GIF: "gif",
                            SVG: "svg",
                            UNRECOGNIZED: "unrecognized"
                        },
                        R = {
                            AVIF: "AVIF",
                            PAVIF: "PAVIF"
                        };
                    O.JPG, O.JPEG, O.JPE, O.PNG, O.GIF, O.WEBP;

                    function w(t, ...e) {
                        return function(...i) {
                            const n = i[i.length - 1] || {},
                                a = [t[0]];
                            return e.forEach((function(e, r) {
                                const o = Number.isInteger(e) ? i[e] : n[e];
                                a.push(o, t[r + 1])
                            })), a.join("")
                        }
                    }

                    function b(t) {
                        return t[t.length - 1]
                    }
                    const M = [O.PNG, O.JPEG, O.JPG, O.JPE, O.WIX_ICO_MP, O.WIX_MP, O.WEBP],
                        C = [O.JPEG, O.JPG, O.JPE];

                    function F(t, e, i) {
                        return i && e && !(!(n = e.id) || !n.trim() || "none" === n.toLowerCase()) && Object.values(h).includes(t);
                        var n
                    }

                    function N(t, e, i) {
                        return function(t, e, i = !1) {
                            return !(P(t) && e && !i)
                        }(t, e, i) && (function(t) {
                            return M.includes(B(t))
                        }(t) || function(t, e = !1) {
                            return y(t) && e
                        }(t, i)) && !/(^https?)|(^data)|(^\/\/)/.test(t)
                    }

                    function S(t) {
                        return B(t) === O.PNG
                    }

                    function P(t) {
                        return B(t) === O.WEBP
                    }

                    function y(t) {
                        return B(t) === O.GIF
                    }
                    const k = ["/", "\\", "?", "<", ">", "|", "\u201c", ":", '"'].map(encodeURIComponent),
                        x = ["\\.", "\\*"],
                        Y = "_";

                    function H(t) {
                        return function(t) {
                            return C.includes(B(t))
                        }(t) ? O.JPG : S(t) ? O.PNG : P(t) ? O.WEBP : y(t) ? O.GIF : O.UNRECOGNIZED
                    }

                    function B(t) {
                        return (/[.]([^.]+)$/.exec(t) && /[.]([^.]+)$/.exec(t)[1] || "").toLowerCase()
                    }

                    function U(t, e, i, n, a) {
                        let r;
                        return r = a === u.FILL ? function(t, e, i, n) {
                            return Math.max(i / t, n / e)
                        }(t, e, i, n) : a === u.FIT ? function(t, e, i, n) {
                            return Math.min(i / t, n / e)
                        }(t, e, i, n) : 1, r
                    }

                    function $(t, e, i, n, a, r) {
                        t = t || n.width, e = e || n.height;
                        const {
                            scaleFactor: o,
                            width: c,
                            height: s
                        } = function(t, e, i, n, a) {
                            let r, o = i,
                                c = n;
                            if (r = U(t, e, i, n, a), a === u.FIT && (o = t * r, c = e * r), o && c && o * c > E) {
                                const i = Math.sqrt(E / (o * c));
                                o *= i, c *= i, r = U(t, e, o, c, a)
                            }
                            return {
                                scaleFactor: r,
                                width: o,
                                height: c
                            }
                        }(t, e, n.width * a, n.height * a, i);
                        return function(t, e, i, n, a, r, o) {
                            const {
                                optimizedScaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h
                            } = function(t, e, i, n) {
                                if ("auto" === n) return function(t, e) {
                                    const i = z(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e);
                                if ("super" === n) return function(t) {
                                    return {
                                        optimizedScaleFactor: b(f),
                                        upscaleMethodValue: I.super,
                                        forceUSM: !(f.includes(t) || t > b(f))
                                    }
                                }(i);
                                return function(t, e) {
                                    const i = z(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e)
                            }(t, e, r, a);
                            let _ = i,
                                T = n;
                            if (r <= c) return {
                                width: _,
                                height: T,
                                scaleFactor: r,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !1
                            };
                            switch (o) {
                                case u.FILL:
                                    _ = i * (c / r), T = n * (c / r);
                                    break;
                                case u.FIT:
                                    _ = t * c, T = e * c
                            }
                            return {
                                width: _,
                                height: T,
                                scaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !0
                            }
                        }(t, e, c, s, r, o, i)
                    }

                    function v(t, e, i, n) {
                        const a = V(i) || function(t = _.CENTER) {
                            return T[t]
                        }(n);
                        return {
                            x: Math.max(0, Math.min(t.width - e.width, a.x * t.width - e.width / 2)),
                            y: Math.max(0, Math.min(t.height - e.height, a.y * t.height - e.height / 2)),
                            width: Math.min(t.width, e.width),
                            height: Math.min(t.height, e.height)
                        }
                    }

                    function D(t) {
                        return t.alignment && d[t.alignment] || d[_.CENTER]
                    }

                    function V(t) {
                        let e;
                        return !t || "number" != typeof t.x || isNaN(t.x) || "number" != typeof t.y || isNaN(t.y) || (e = {
                            x: Z(Math.max(0, Math.min(100, t.x)) / 100, 2),
                            y: Z(Math.max(0, Math.min(100, t.y)) / 100, 2)
                        }), e
                    }

                    function z(t, e) {
                        const i = t * e;
                        return i > m[A.HIGH].size ? A.HIGH : i > m[A.MEDIUM].size ? A.MEDIUM : i > m[A.LOW].size ? A.LOW : A.TINY
                    }

                    function Z(t, e) {
                        const i = Math.pow(10, e || 0);
                        return (t * i / i).toFixed(e)
                    }

                    function j(t) {
                        return t && t.upscaleMethod && g[t.upscaleMethod.toUpperCase()] || g.AUTO
                    }

                    function W(t, e) {
                        return B(t) === O.GIF || B(t) === O.WEBP && e
                    }
                    const q = {
                            isMobile: !1
                        },
                        J = function(t) {
                            return q[t]
                        },
                        X = function(t, e) {
                            q[t] = e
                        };

                    function Q() {
                        if ("undefined" != typeof window && "undefined" != typeof navigator) {
                            const t = window.matchMedia && window.matchMedia("(max-width: 767px)").matches,
                                e = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                            X("isMobile", t && e)
                        }
                    }

                    function K(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t;
                        switch (a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.STRETCH:
                                n.container.backgroundSize = "100% 100%", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FILL:
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                n.container.backgroundSize = "cover", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.TILE:
                            case h.LEGACY_STRIP_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat"
                        }
                        switch (e.alignment) {
                            case _.CENTER:
                                n.container.backgroundPosition = "center center";
                                break;
                            case _.LEFT:
                                n.container.backgroundPosition = "left center";
                                break;
                            case _.RIGHT:
                                n.container.backgroundPosition = "right center";
                                break;
                            case _.TOP:
                                n.container.backgroundPosition = "center top";
                                break;
                            case _.BOTTOM:
                                n.container.backgroundPosition = "center bottom";
                                break;
                            case _.TOP_RIGHT:
                                n.container.backgroundPosition = "right top";
                                break;
                            case _.TOP_LEFT:
                                n.container.backgroundPosition = "left top";
                                break;
                            case _.BOTTOM_RIGHT:
                                n.container.backgroundPosition = "right bottom";
                                break;
                            case _.BOTTOM_LEFT:
                                n.container.backgroundPosition = "left bottom"
                        }
                        return i
                    }
                    const tt = {
                            [_.CENTER]: "center",
                            [_.TOP]: "top",
                            [_.TOP_LEFT]: "top left",
                            [_.TOP_RIGHT]: "top right",
                            [_.BOTTOM]: "bottom",
                            [_.BOTTOM_LEFT]: "bottom left",
                            [_.BOTTOM_RIGHT]: "bottom right",
                            [_.LEFT]: "left",
                            [_.RIGHT]: "right"
                        },
                        et = {
                            position: "absolute",
                            top: "auto",
                            right: "auto",
                            bottom: "auto",
                            left: "auto"
                        };

                    function it(t, e) {
                        const i = {
                                css: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t,
                            r = e.alignment;
                        switch (n.container.position = "relative", a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                                t.parts && t.parts.length ? (n.img.width = t.parts[0].width, n.img.height = t.parts[0].height) : (n.img.width = t.src.width, n.img.height = t.src.height);
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "contain", n.img.objectPosition = tt[r] || "unset";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.img.width = "100%", n.img.height = "100%", n.img.objectFit = "none", n.img.objectPosition = tt[r] || "unset";
                                break;
                            case h.STRETCH:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "fill";
                                break;
                            case h.SCALE_TO_FILL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "cover"
                        }
                        if ("number" == typeof n.img.width && "number" == typeof n.img.height && (n.img.width !== e.width || n.img.height !== e.height)) {
                            const t = Math.round((e.height - n.img.height) / 2),
                                i = Math.round((e.width - n.img.width) / 2);
                            Object.assign(n.img, et, function(t, e, i) {
                                return {
                                    [_.TOP_LEFT]: {
                                        top: 0,
                                        left: 0
                                    },
                                    [_.TOP_RIGHT]: {
                                        top: 0,
                                        right: 0
                                    },
                                    [_.TOP]: {
                                        top: 0,
                                        left: e
                                    },
                                    [_.BOTTOM_LEFT]: {
                                        bottom: 0,
                                        left: 0
                                    },
                                    [_.BOTTOM_RIGHT]: {
                                        bottom: 0,
                                        right: 0
                                    },
                                    [_.BOTTOM]: {
                                        bottom: 0,
                                        left: e
                                    },
                                    [_.RIGHT]: {
                                        top: t,
                                        right: 0
                                    },
                                    [_.LEFT]: {
                                        top: t,
                                        left: 0
                                    },
                                    [_.CENTER]: {
                                        width: i.width,
                                        height: i.height,
                                        objectFit: "none"
                                    }
                                }
                            }(t, i, e)[r])
                        }
                        return i
                    }

                    function nt(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                },
                                attr: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n,
                                attr: a
                            } = i,
                            {
                                fittingType: r
                            } = t,
                            o = e.alignment,
                            {
                                width: c,
                                height: s
                            } = t.src;
                        let T;
                        switch (n.container.position = "relative", r) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.TILE:
                                t.parts && t.parts.length ? (a.img.width = t.parts[0].width, a.img.height = t.parts[0].height) : (a.img.width = c, a.img.height = s), a.img.preserveAspectRatio = "xMidYMid slice";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                a.img.width = "100%", a.img.height = "100%", a.img.transform = "", a.img.preserveAspectRatio = "";
                                break;
                            case h.STRETCH:
                                a.img.width = e.width, a.img.height = e.height, a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "none";
                                break;
                            case h.SCALE_TO_FILL:
                                N(t.src.id) ? (a.img.width = e.width, a.img.height = e.height) : (T = function(t, e, i, n, a) {
                                    const r = U(t, e, i, n, a);
                                    return {
                                        width: Math.round(t * r),
                                        height: Math.round(e * r)
                                    }
                                }(c, s, e.width, e.height, u.FILL), a.img.width = T.width, a.img.height = T.height), a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "xMidYMid slice"
                        }
                        if ("number" == typeof a.img.width && "number" == typeof a.img.height && (a.img.width !== e.width || a.img.height !== e.height)) {
                            let t, i, n = 0,
                                c = 0;
                            r === h.TILE ? (t = e.width % a.img.width, i = e.height % a.img.height) : (t = e.width - a.img.width, i = e.height - a.img.height);
                            const s = Math.round(t / 2),
                                u = Math.round(i / 2);
                            switch (o) {
                                case _.TOP_LEFT:
                                    n = 0, c = 0;
                                    break;
                                case _.TOP:
                                    n = s, c = 0;
                                    break;
                                case _.TOP_RIGHT:
                                    n = t, c = 0;
                                    break;
                                case _.LEFT:
                                    n = 0, c = u;
                                    break;
                                case _.CENTER:
                                    n = s, c = u;
                                    break;
                                case _.RIGHT:
                                    n = t, c = u;
                                    break;
                                case _.BOTTOM_LEFT:
                                    n = 0, c = i;
                                    break;
                                case _.BOTTOM:
                                    n = s, c = i;
                                    break;
                                case _.BOTTOM_RIGHT:
                                    n = t, c = i
                            }
                            a.img.x = n, a.img.y = c
                        }
                        return a.container.width = e.width, a.container.height = e.height, a.container.viewBox = [0, 0, e.width, e.height].join(" "), i
                    }

                    function at(t, e, i) {
                        let n;
                        switch (e.crop && (n = function(t, e) {
                                const i = Math.max(0, Math.min(t.width, e.x + e.width) - Math.max(0, e.x)),
                                    n = Math.max(0, Math.min(t.height, e.y + e.height) - Math.max(0, e.y));
                                return i && n && (t.width !== i || t.height !== n) ? {
                                    x: Math.max(0, e.x),
                                    y: Math.max(0, e.y),
                                    width: i,
                                    height: n
                                } : null
                            }(e, e.crop), n && (t.src.width = n.width, t.src.height = n.height, t.src.isCropped = !0, t.parts.push(ot(n)))), t.fittingType) {
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                t.parts.push(rt(t, i));
                                break;
                            case h.SCALE_TO_FILL:
                                t.parts.push(function(t, e) {
                                    const i = $(t.src.width, t.src.height, u.FILL, e, t.devicePixelRatio, t.upscaleMethod),
                                        n = V(t.focalPoint);
                                    return {
                                        transformType: n ? u.FILL_FOCAL : u.FILL,
                                        width: Math.round(i.width),
                                        height: Math.round(i.height),
                                        alignment: D(e),
                                        focalPointX: n && n.x,
                                        focalPointY: n && n.y,
                                        upscale: i.scaleFactor > 1,
                                        forceUSM: i.forceUSM,
                                        scaleFactor: i.scaleFactor,
                                        cssUpscaleNeeded: i.cssUpscaleNeeded,
                                        upscaleMethodValue: i.upscaleMethodValue
                                    }
                                }(t, i));
                                break;
                            case h.STRETCH:
                                t.parts.push(function(t, e) {
                                    const i = U(t.src.width, t.src.height, e.width, e.height, u.FILL),
                                        n = {
                                            ...e
                                        };
                                    return n.width = t.src.width * i, n.height = t.src.height * i, rt(t, n)
                                }(t, i));
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.TILE_VERTICAL:
                            case h.TILE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.ORIGINAL_SIZE:
                                n = v(t.src, i, t.focalPoint, i.alignment), t.src.isCropped ? (Object.assign(t.parts[0], n), t.src.width = n.width, t.src.height = n.height) : t.parts.push(ot(n));
                                break;
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_CROP,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: D(t),
                                        upscale: !1,
                                        forceUSM: !1,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.FIT,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_FILL,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: D(t),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i))
                        }
                    }

                    function rt(t, e) {
                        const i = $(t.src.width, t.src.height, u.FIT, e, t.devicePixelRatio, t.upscaleMethod);
                        return {
                            transformType: !t.src.width || !t.src.height ? u.FIT : u.FILL,
                            width: Math.round(i.width),
                            height: Math.round(i.height),
                            alignment: d.center,
                            upscale: i.scaleFactor > 1,
                            forceUSM: i.forceUSM,
                            scaleFactor: i.scaleFactor,
                            cssUpscaleNeeded: i.cssUpscaleNeeded,
                            upscaleMethodValue: i.upscaleMethodValue
                        }
                    }

                    function ot(t) {
                        return {
                            transformType: u.CROP,
                            x: Math.round(t.x),
                            y: Math.round(t.y),
                            width: Math.round(t.width),
                            height: Math.round(t.height),
                            upscale: !1,
                            forceUSM: !1,
                            scaleFactor: 1,
                            cssUpscaleNeeded: !1
                        }
                    }

                    function ct(t, e) {
                        e = e || {}, t.quality = function(t, e) {
                            const i = t.fileType === O.PNG,
                                n = t.fileType === O.JPG,
                                a = t.fileType === O.WEBP,
                                r = n || i || a;
                            if (r) {
                                const n = b(t.parts),
                                    a = (o = n.width, c = n.height, m[z(o, c)].quality);
                                let r = e.quality && e.quality >= 5 && e.quality <= 90 ? e.quality : a;
                                return r = i ? r + 5 : r, r
                            }
                            var o, c;
                            return 0
                        }(t, e), t.progressive = function(t) {
                            return !1 !== t.progressive
                        }(e), t.watermark = function(t) {
                            return t.watermark
                        }(e), t.autoEncode = e.autoEncode ?? !0, t.encoding = e?.encoding, t.unsharpMask = function(t, e) {
                            if (function(t) {
                                    const e = "number" == typeof(t = t || {}).radius && !isNaN(t.radius) && t.radius >= .1 && t.radius <= 500,
                                        i = "number" == typeof t.amount && !isNaN(t.amount) && t.amount >= 0 && t.amount <= 10,
                                        n = "number" == typeof t.threshold && !isNaN(t.threshold) && t.threshold >= 0 && t.threshold <= 255;
                                    return e && i && n
                                }(e.unsharpMask)) return {
                                radius: Z(e.unsharpMask?.radius, 2),
                                amount: Z(e.unsharpMask?.amount, 2),
                                threshold: Z(e.unsharpMask?.threshold, 2)
                            };
                            if (("number" != typeof(i = (i = e.unsharpMask) || {}).radius || isNaN(i.radius) || 0 !== i.radius || "number" != typeof i.amount || isNaN(i.amount) || 0 !== i.amount || "number" != typeof i.threshold || isNaN(i.threshold) || 0 !== i.threshold) && function(t) {
                                    const e = b(t.parts);
                                    return !(e.scaleFactor >= 1) || e.forceUSM || e.transformType === u.FIT
                                }(t)) return L;
                            var i;
                            return
                        }(t, e), t.filters = function(t) {
                            const e = t.filters || {},
                                i = {};
                            st(e[G.CONTRAST], -100, 100) && (i[G.CONTRAST] = e[G.CONTRAST]);
                            st(e[G.BRIGHTNESS], -100, 100) && (i[G.BRIGHTNESS] = e[G.BRIGHTNESS]);
                            st(e[G.SATURATION], -100, 100) && (i[G.SATURATION] = e[G.SATURATION]);
                            st(e[G.HUE], -180, 180) && (i[G.HUE] = e[G.HUE]);
                            st(e[G.BLUR], 0, 100) && (i[G.BLUR] = e[G.BLUR]);
                            return i
                        }(e)
                    }

                    function st(t, e, i) {
                        return "number" == typeof t && !isNaN(t) && 0 !== t && t >= e && t <= i
                    }

                    function ht(t, e, i, n) {
                        const r = function(t) {
                                return t?.isSEOBot ?? !1
                            }(n),
                            o = H(e.id),
                            c = function(t, e) {
                                const i = /\.([^.]*)$/,
                                    n = new RegExp(`(${k.concat(x).join("|")})`, "g");
                                if (e && e.length) {
                                    let t = e;
                                    const a = e.match(i);
                                    return a && M.includes(a[1]) && (t = e.replace(i, "")), encodeURIComponent(t).replace(n, Y)
                                }
                                const a = t.match(/\/(.*?)$/);
                                return (a ? a[1] : t).replace(i, "")
                            }(e.id, e.name),
                            s = r ? 1 : function(t) {
                                return Math.min(t.pixelAspectRatio || 1, a)
                            }(i),
                            h = B(e.id),
                            u = h,
                            _ = N(e.id, n?.hasAnimation, n?.allowAnimatedTransform),
                            T = {
                                fileName: c,
                                fileExtension: h,
                                fileType: o,
                                fittingType: t,
                                preferredExtension: u,
                                src: {
                                    id: e.id,
                                    width: e.width,
                                    height: e.height,
                                    isCropped: !1,
                                    isAnimated: W(e.id, n?.hasAnimation)
                                },
                                focalPoint: {
                                    x: e.focalPoint && e.focalPoint.x,
                                    y: e.focalPoint && e.focalPoint.y
                                },
                                parts: [],
                                devicePixelRatio: s,
                                quality: 0,
                                upscaleMethod: j(n),
                                progressive: !0,
                                watermark: "",
                                unsharpMask: {},
                                filters: {},
                                transformed: _
                            };
                        return _ && (at(T, e, i), ct(T, n)), T
                    }

                    function ut(t, e, i) {
                        const n = {
                                ...i
                            },
                            a = J("isMobile");
                        switch (t) {
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                const t = a ? c : r,
                                    i = a ? s : o;
                                n.width = Math.min(t, e.width), n.height = Math.min(i, Math.round(n.width / (e.width / e.height))), n.pixelAspectRatio = 1
                        }
                        return n
                    }
                    const _t = w`fit/w_${"width"},h_${"height"}`,
                        Tt = w`fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        dt = w`fill/w_${"width"},h_${"height"},fp_${"focalPointX"}_${"focalPointY"}`,
                        lt = w`crop/x_${"x"},y_${"y"},w_${"width"},h_${"height"}`,
                        gt = w`crop/w_${"width"},h_${"height"},al_${"alignment"}`,
                        It = w`fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        Lt = w`,lg_${"upscaleMethodValue"}`,
                        pt = w`,q_${"quality"}`,
                        Et = w`,quality_auto`,
                        ft = w`,usm_${"radius"}_${"amount"}_${"threshold"}`,
                        mt = w`,bl`,
                        At = w`,wm_${"watermark"}`,
                        Gt = {
                            [G.CONTRAST]: w`,con_${"contrast"}`,
                            [G.BRIGHTNESS]: w`,br_${"brightness"}`,
                            [G.SATURATION]: w`,sat_${"saturation"}`,
                            [G.HUE]: w`,hue_${"hue"}`,
                            [G.BLUR]: w`,blur_${"blur"}`
                        },
                        Ot = w`,enc_auto`,
                        Rt = w`,enc_avif`,
                        wt = w`,enc_pavif`,
                        bt = w`,pstr`;

                    function Mt(t, e, i, a = {}, r) {
                        if (N(e.id, a?.hasAnimation, a?.allowAnimatedTransform)) {
                            if (P(e.id)) {
                                const {
                                    alignment: n,
                                    ...o
                                } = i;
                                e.focalPoint = {
                                    x: void 0,
                                    y: void 0
                                }, delete e?.crop, r = ht(t, e, o, a)
                            } else r = r || ht(t, e, i, a);
                            return function(t) {
                                const e = [];
                                t.parts.forEach((t => {
                                    switch (t.transformType) {
                                        case u.CROP:
                                            e.push(lt(t));
                                            break;
                                        case u.LEGACY_CROP:
                                            e.push(gt(t));
                                            break;
                                        case u.LEGACY_FILL:
                                            let i = It(t);
                                            t.upscale && (i += Lt(t)), e.push(i);
                                            break;
                                        case u.FIT:
                                            let n = _t(t);
                                            t.upscale && (n += Lt(t)), e.push(n);
                                            break;
                                        case u.FILL:
                                            let a = Tt(t);
                                            t.upscale && (a += Lt(t)), e.push(a);
                                            break;
                                        case u.FILL_FOCAL:
                                            let r = dt(t);
                                            t.upscale && (r += Lt(t)), e.push(r)
                                    }
                                }));
                                let i = e.join("/");
                                return t.quality && (i += pt(t)), t.unsharpMask && (i += ft(t.unsharpMask)), t.progressive || (i += mt(t)), t.watermark && (i += At(t)), t.filters && (i += Object.keys(t.filters).map((e => Gt[e](t.filters))).join("")), t.fileType !== O.GIF && (t.encoding === R.AVIF ? (i += Rt(t), i += Et(t)) : t.encoding === R.PAVIF ? (i += wt(t), i += Et(t)) : t.autoEncode && (i += Ot(t))), t.src?.isAnimated && t.transformed && (i += bt(t)), `${t.src.id}/${n}/${i}/${t.fileName}.${t.preferredExtension}`
                            }(r)
                        }
                        return e.id
                    }
                    const Ct = {
                            [_.CENTER]: "50% 50%",
                            [_.TOP_LEFT]: "0% 0%",
                            [_.TOP_RIGHT]: "100% 0%",
                            [_.TOP]: "50% 0%",
                            [_.BOTTOM_LEFT]: "0% 100%",
                            [_.BOTTOM_RIGHT]: "100% 100%",
                            [_.BOTTOM]: "50% 100%",
                            [_.RIGHT]: "100% 50%",
                            [_.LEFT]: "0% 50%"
                        },
                        Ft = Object.entries(Ct).reduce(((t, [e, i]) => (t[i] = e, t)), {}),
                        Nt = [h.TILE, h.TILE_HORIZONTAL, h.TILE_VERTICAL, h.LEGACY_BG_FIT_AND_TILE, h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL, h.LEGACY_BG_FIT_AND_TILE_VERTICAL],
                        St = [h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE, h.LEGACY_BG_NORMAL];

                    function Pt(t, e, {
                        width: i,
                        height: n
                    }) {
                        return t === h.TILE && e.width > i && e.height > n
                    }

                    function yt(t, {
                        width: e,
                        height: i
                    }) {
                        if (!e || !i) {
                            const n = e || Math.min(980, t.width),
                                a = n / t.width;
                            return {
                                width: n,
                                height: i || t.height * a
                            }
                        }
                        return {
                            width: e,
                            height: i
                        }
                    }

                    function kt(t, e, i, n = "center") {
                        const a = {
                            img: {},
                            container: {}
                        };
                        if (t === h.SCALE_TO_FILL) {
                            const t = e.focalPoint && function(t) {
                                    const e = `${t.x}% ${t.y}%`;
                                    return Ft[e] || ""
                                }(e.focalPoint),
                                r = t || n;
                            e.focalPoint && !t ? a.img = {
                                objectPosition: xt(e, i, e.focalPoint)
                            } : a.img = {
                                objectPosition: Ct[r]
                            }
                        } else [h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE].includes(t) ? a.img = {
                            objectFit: "none",
                            top: "auto",
                            left: "auto",
                            right: "auto",
                            bottom: "auto"
                        } : Nt.includes(t) && (a.container = {
                            backgroundSize: `${e.width}px ${e.height}px`
                        });
                        return a
                    }

                    function xt(t, e, i) {
                        const {
                            width: n,
                            height: a
                        } = t, {
                            width: r,
                            height: o
                        } = e, {
                            x: c,
                            y: s
                        } = i;
                        if (!r || !o) return `${c}% ${s}%`;
                        const h = Math.max(r / n, o / a),
                            u = n * h,
                            _ = a * h,
                            T = Math.max(0, Math.min(u - r, u * (c / 100) - r / 2)),
                            d = Math.max(0, Math.min(_ - o, _ * (s / 100) - o / 2));
                        return `${T&&Math.floor(T/(u-r)*100)}% ${d&&Math.floor(d/(_-o)*100)}%`
                    }
                    const Yt = {
                        width: "100%",
                        height: "100%"
                    };

                    function Ht(t, e, i, n = {}) {
                        const {
                            autoEncode: a = !0,
                            isSEOBot: r,
                            shouldLoadHQImage: o,
                            hasAnimation: c,
                            allowAnimatedTransform: s,
                            encoding: u
                        } = n;
                        if (!F(t, e, i)) return p;
                        const _ = void 0 === s || s,
                            T = N(e.id, c, _);
                        if (!T || o) return Bt(t, e, i, {
                            ...n,
                            autoEncode: a,
                            useSrcset: T
                        });
                        const d = {
                                ...i,
                                ...yt(e, i)
                            },
                            {
                                alignment: l,
                                htmlTag: g
                            } = d,
                            I = Pt(t, e, d),
                            L = function(t, e, {
                                width: i,
                                height: n
                            }, a = !1) {
                                if (a) return {
                                    width: i,
                                    height: n
                                };
                                const r = !St.includes(t),
                                    o = Pt(t, e, {
                                        width: i,
                                        height: n
                                    }),
                                    c = !o && Nt.includes(t),
                                    s = c ? e.width : i,
                                    h = c ? e.height : n,
                                    u = r ? function(t, e) {
                                        return t > 900 ? e ? .05 : .15 : t > 500 ? e ? .1 : .18 : t > 200 ? .25 : 1
                                    }(s, S(e.id)) : 1;
                                return {
                                    width: o ? 1920 : s * u,
                                    height: h * u
                                }
                            }(t, e, d, r),
                            E = function(t, e, i) {
                                return i ? 0 : Nt.includes(e) ? 1 : t > 200 ? 2 : 3
                            }(d.width, t, r),
                            f = function(t, e) {
                                const i = Nt.includes(t) && !e;
                                return t === h.SCALE_TO_FILL || i ? h.SCALE_TO_FIT : t
                            }(t, I),
                            m = kt(t, e, i, l),
                            {
                                uri: A
                            } = Bt(f, e, {
                                ...L,
                                alignment: l,
                                htmlTag: g
                            }, {
                                autoEncode: a,
                                filters: E ? {
                                    blur: E
                                } : {},
                                hasAnimation: c,
                                allowAnimatedTransform: _,
                                encoding: u
                            }),
                            {
                                attr: G = {},
                                css: O
                            } = Bt(t, e, {
                                ...d,
                                alignment: l,
                                htmlTag: g
                            }, {});
                        return O.img = O.img || {}, O.container = O.container || {}, Object.assign(O.img, m.img, Yt), Object.assign(O.container, m.container), {
                            uri: A,
                            css: O,
                            attr: G,
                            transformed: !0
                        }
                    }

                    function Bt(t, e, i, n) {
                        let a = {};
                        if (F(t, e, i)) {
                            const r = ut(t, e, i),
                                o = ht(t, e, r, n);
                            a.uri = Mt(t, e, r, n, o), n?.useSrcset && (a.srcset = function(t, e, i, n, a) {
                                const r = i.pixelAspectRatio || 1;
                                return {
                                    dpr: [`${1===r?a.uri:Mt(t,e,{...i,pixelAspectRatio:1},n)} 1x`, `${2===r?a.uri:Mt(t,e,{...i,pixelAspectRatio:2},n)} 2x`]
                                }
                            }(t, e, r, n, a)), Object.assign(a, function(t, e) {
                                let i;
                                return i = e.htmlTag === l.BG ? K : e.htmlTag === l.SVG ? nt : it, i(t, e)
                            }(o, r), {
                                transformed: o.transformed
                            })
                        } else a = p;
                        return a
                    }

                    function Ut(t, e, i, n) {
                        if (F(t, e, i)) {
                            const a = ut(t, e, i);
                            return {
                                uri: Mt(t, e, a, n || {}, ht(t, e, a, n))
                            }
                        }
                        return {
                            uri: ""
                        }
                    }
                    const $t = "https://static.wixstatic.com/media/",
                        vt = /^media\//i,
                        Dt = "undefined" != typeof window ? window.devicePixelRatio : 1,
                        Vt = (t, e) => {
                            const i = e && e.baseHostURL;
                            return i ? `${i}${t}` : (t => vt.test(t) ? `https://static.wixstatic.com/${t}` : `${$t}${t}`)(t)
                        };
                    Q();
                    const zt = (t, e, i) => {
                        const {
                            displayMode: n,
                            uri: a,
                            width: r,
                            height: o,
                            name: c,
                            crop: s,
                            focalPoint: h,
                            alignType: u,
                            quality: _,
                            upscaleMethod: T,
                            hasAnimation: d,
                            allowAnimatedTransform: l
                        } = t, {
                            srcset: g,
                            css: I
                        } = Bt(n, {
                            id: a,
                            width: r,
                            height: o,
                            name: c,
                            crop: s,
                            focalPoint: h
                        }, {
                            width: e,
                            height: i,
                            alignment: u
                        }, {
                            focalPoint: h,
                            name: c,
                            quality: _?.quality,
                            upscaleMethod: T,
                            hasAnimation: d,
                            allowAnimatedTransform: l,
                            useSrcset: !0
                        });
                        return {
                            srcset: g?.dpr?.map((t => /^[a-z]+:/.test(t) ? t : `${jt}${t}`)).join(", ") || "",
                            css: I
                        }
                    };
                    Q();
                    const Zt = {
                            getScaleToFitImageURL: function(t, e, i, n, a, r) {
                                const o = Ut(h.SCALE_TO_FIT, {
                                    id: t,
                                    width: e,
                                    height: i,
                                    name: r && r.name
                                }, {
                                    width: n,
                                    height: a,
                                    htmlTag: l.IMG,
                                    alignment: _.CENTER,
                                    pixelAspectRatio: r?.devicePixelRatio ?? Dt
                                }, r);
                                return Vt(o.uri, r)
                            },
                            getScaleToFillImageURL: function(t, e, i, n, a, r) {
                                const o = Ut(h.SCALE_TO_FILL, {
                                    id: t,
                                    width: e,
                                    height: i,
                                    name: r && r.name,
                                    focalPoint: {
                                        x: r && r.focalPoint && r.focalPoint.x,
                                        y: r && r.focalPoint && r.focalPoint.y
                                    }
                                }, {
                                    width: n,
                                    height: a,
                                    htmlTag: l.IMG,
                                    alignment: _.CENTER,
                                    pixelAspectRatio: r?.devicePixelRatio ?? Dt
                                }, r);
                                return Vt(o.uri, r)
                            },
                            getCropImageURL: function(t, e, i, n, a, r, o, c, s, u) {
                                const T = Ut(h.SCALE_TO_FILL, {
                                    id: t,
                                    width: e,
                                    height: i,
                                    name: u && u.name,
                                    crop: {
                                        x: n,
                                        y: a,
                                        width: r,
                                        height: o
                                    }
                                }, {
                                    width: c,
                                    height: s,
                                    htmlTag: l.IMG,
                                    alignment: _.CENTER,
                                    pixelAspectRatio: u?.devicePixelRatio ?? Dt
                                }, u);
                                return Vt(T.uri, u)
                            }
                        },
                        jt = $t
                },
                30284: function(t, e, i) {
                    i.d(e, {
                        vO: function() {
                            return _
                        },
                        $A: function() {
                            return O
                        },
                        Nk: function() {
                            return h
                        },
                        bQ: function() {
                            return Mt
                        },
                        QC: function() {
                            return H
                        }
                    });
                    const n = "v1",
                        a = 2,
                        r = 1920,
                        o = 1920,
                        c = 1e3,
                        s = 1e3,
                        h = {
                            SCALE_TO_FILL: "fill",
                            SCALE_TO_FIT: "fit",
                            STRETCH: "stretch",
                            ORIGINAL_SIZE: "original_size",
                            TILE: "tile",
                            TILE_HORIZONTAL: "tile_horizontal",
                            TILE_VERTICAL: "tile_vertical",
                            FIT_AND_TILE: "fit_and_tile",
                            LEGACY_STRIP_TILE: "legacy_strip_tile",
                            LEGACY_STRIP_TILE_HORIZONTAL: "legacy_strip_tile_horizontal",
                            LEGACY_STRIP_TILE_VERTICAL: "legacy_strip_tile_vertical",
                            LEGACY_STRIP_SCALE_TO_FILL: "legacy_strip_fill",
                            LEGACY_STRIP_SCALE_TO_FIT: "legacy_strip_fit",
                            LEGACY_STRIP_FIT_AND_TILE: "legacy_strip_fit_and_tile",
                            LEGACY_STRIP_ORIGINAL_SIZE: "legacy_strip_original_size",
                            LEGACY_ORIGINAL_SIZE: "actual_size",
                            LEGACY_FIT_WIDTH: "fitWidth",
                            LEGACY_FIT_HEIGHT: "fitHeight",
                            LEGACY_FULL: "full",
                            LEGACY_BG_FIT_AND_TILE: "legacy_tile",
                            LEGACY_BG_FIT_AND_TILE_HORIZONTAL: "legacy_tile_horizontal",
                            LEGACY_BG_FIT_AND_TILE_VERTICAL: "legacy_tile_vertical",
                            LEGACY_BG_NORMAL: "legacy_normal"
                        },
                        u = {
                            FIT: "fit",
                            FILL: "fill",
                            FILL_FOCAL: "fill_focal",
                            CROP: "crop",
                            LEGACY_CROP: "legacy_crop",
                            LEGACY_FILL: "legacy_fill"
                        },
                        _ = {
                            CENTER: "center",
                            TOP: "top",
                            TOP_LEFT: "top_left",
                            TOP_RIGHT: "top_right",
                            BOTTOM: "bottom",
                            BOTTOM_LEFT: "bottom_left",
                            BOTTOM_RIGHT: "bottom_right",
                            LEFT: "left",
                            RIGHT: "right"
                        },
                        T = {
                            [_.CENTER]: {
                                x: .5,
                                y: .5
                            },
                            [_.TOP_LEFT]: {
                                x: 0,
                                y: 0
                            },
                            [_.TOP_RIGHT]: {
                                x: 1,
                                y: 0
                            },
                            [_.TOP]: {
                                x: .5,
                                y: 0
                            },
                            [_.BOTTOM_LEFT]: {
                                x: 0,
                                y: 1
                            },
                            [_.BOTTOM_RIGHT]: {
                                x: 1,
                                y: 1
                            },
                            [_.BOTTOM]: {
                                x: .5,
                                y: 1
                            },
                            [_.RIGHT]: {
                                x: 1,
                                y: .5
                            },
                            [_.LEFT]: {
                                x: 0,
                                y: .5
                            }
                        },
                        d = {
                            center: "c",
                            top: "t",
                            top_left: "tl",
                            top_right: "tr",
                            bottom: "b",
                            bottom_left: "bl",
                            bottom_right: "br",
                            left: "l",
                            right: "r"
                        },
                        l = {
                            BG: "bg",
                            IMG: "img",
                            SVG: "svg"
                        },
                        g = {
                            AUTO: "auto",
                            CLASSIC: "classic",
                            SUPER: "super"
                        },
                        I = {
                            classic: 1,
                            super: 2
                        },
                        L = {
                            radius: "0.66",
                            amount: "1.00",
                            threshold: "0.01"
                        },
                        p = {
                            uri: "",
                            css: {
                                img: {},
                                container: {}
                            },
                            attr: {
                                img: {},
                                container: {}
                            },
                            transformed: !1
                        },
                        E = 25e6,
                        f = [1.5, 2, 4],
                        m = {
                            HIGH: {
                                size: 196e4,
                                quality: 90,
                                maxUpscale: 1
                            },
                            MEDIUM: {
                                size: 36e4,
                                quality: 85,
                                maxUpscale: 1
                            },
                            LOW: {
                                size: 16e4,
                                quality: 80,
                                maxUpscale: 1.2
                            },
                            TINY: {
                                size: 0,
                                quality: 80,
                                maxUpscale: 1.4
                            }
                        },
                        A = {
                            HIGH: "HIGH",
                            MEDIUM: "MEDIUM",
                            LOW: "LOW",
                            TINY: "TINY"
                        },
                        G = {
                            CONTRAST: "contrast",
                            BRIGHTNESS: "brightness",
                            SATURATION: "saturation",
                            HUE: "hue",
                            BLUR: "blur"
                        },
                        O = {
                            JPG: "jpg",
                            JPEG: "jpeg",
                            JPE: "jpe",
                            PNG: "png",
                            WEBP: "webp",
                            WIX_ICO_MP: "wix_ico_mp",
                            WIX_MP: "wix_mp",
                            GIF: "gif",
                            SVG: "svg",
                            UNRECOGNIZED: "unrecognized"
                        },
                        R = {
                            AVIF: "AVIF",
                            PAVIF: "PAVIF"
                        };
                    O.JPG, O.JPEG, O.JPE, O.PNG, O.GIF, O.WEBP;

                    function w(t, ...e) {
                        return function(...i) {
                            const n = i[i.length - 1] || {},
                                a = [t[0]];
                            return e.forEach((function(e, r) {
                                const o = Number.isInteger(e) ? i[e] : n[e];
                                a.push(o, t[r + 1])
                            })), a.join("")
                        }
                    }

                    function b(t) {
                        return t[t.length - 1]
                    }
                    const M = [O.PNG, O.JPEG, O.JPG, O.JPE, O.WIX_ICO_MP, O.WIX_MP, O.WEBP],
                        C = [O.JPEG, O.JPG, O.JPE];

                    function F(t, e, i) {
                        return i && e && !(!(n = e.id) || !n.trim() || "none" === n.toLowerCase()) && Object.values(h).includes(t);
                        var n
                    }

                    function N(t, e, i) {
                        return function(t, e, i = !1) {
                            return !(S(t) && e && !i)
                        }(t, e, i) && (function(t) {
                            return M.includes(H(t))
                        }(t) || function(t, e = !1) {
                            return P(t) && e
                        }(t, i)) && !/(^https?)|(^data)|(^\/\/)/.test(t)
                    }

                    function S(t) {
                        return H(t) === O.WEBP
                    }

                    function P(t) {
                        return H(t) === O.GIF
                    }
                    const y = ["/", "\\", "?", "<", ">", "|", "\u201c", ":", '"'].map(encodeURIComponent),
                        k = ["\\.", "\\*"],
                        x = "_";

                    function Y(t) {
                        return function(t) {
                            return C.includes(H(t))
                        }(t) ? O.JPG : function(t) {
                            return H(t) === O.PNG
                        }(t) ? O.PNG : S(t) ? O.WEBP : P(t) ? O.GIF : O.UNRECOGNIZED
                    }

                    function H(t) {
                        return (/[.]([^.]+)$/.exec(t) && /[.]([^.]+)$/.exec(t)[1] || "").toLowerCase()
                    }

                    function B(t, e, i, n, a) {
                        let r;
                        return r = a === u.FILL ? function(t, e, i, n) {
                            return Math.max(i / t, n / e)
                        }(t, e, i, n) : a === u.FIT ? function(t, e, i, n) {
                            return Math.min(i / t, n / e)
                        }(t, e, i, n) : 1, r
                    }

                    function U(t, e, i, n, a, r) {
                        t = t || n.width, e = e || n.height;
                        const {
                            scaleFactor: o,
                            width: c,
                            height: s
                        } = function(t, e, i, n, a) {
                            let r, o = i,
                                c = n;
                            if (r = B(t, e, i, n, a), a === u.FIT && (o = t * r, c = e * r), o && c && o * c > E) {
                                const i = Math.sqrt(E / (o * c));
                                o *= i, c *= i, r = B(t, e, o, c, a)
                            }
                            return {
                                scaleFactor: r,
                                width: o,
                                height: c
                            }
                        }(t, e, n.width * a, n.height * a, i);
                        return function(t, e, i, n, a, r, o) {
                            const {
                                optimizedScaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h
                            } = function(t, e, i, n) {
                                if ("auto" === n) return function(t, e) {
                                    const i = V(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e);
                                if ("super" === n) return function(t) {
                                    return {
                                        optimizedScaleFactor: b(f),
                                        upscaleMethodValue: I.super,
                                        forceUSM: !(f.includes(t) || t > b(f))
                                    }
                                }(i);
                                return function(t, e) {
                                    const i = V(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e)
                            }(t, e, r, a);
                            let _ = i,
                                T = n;
                            if (r <= c) return {
                                width: _,
                                height: T,
                                scaleFactor: r,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !1
                            };
                            switch (o) {
                                case u.FILL:
                                    _ = i * (c / r), T = n * (c / r);
                                    break;
                                case u.FIT:
                                    _ = t * c, T = e * c
                            }
                            return {
                                width: _,
                                height: T,
                                scaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !0
                            }
                        }(t, e, c, s, r, o, i)
                    }

                    function $(t, e, i, n) {
                        const a = D(i) || function(t = _.CENTER) {
                            return T[t]
                        }(n);
                        return {
                            x: Math.max(0, Math.min(t.width - e.width, a.x * t.width - e.width / 2)),
                            y: Math.max(0, Math.min(t.height - e.height, a.y * t.height - e.height / 2)),
                            width: Math.min(t.width, e.width),
                            height: Math.min(t.height, e.height)
                        }
                    }

                    function v(t) {
                        return t.alignment && d[t.alignment] || d[_.CENTER]
                    }

                    function D(t) {
                        let e;
                        return !t || "number" != typeof t.x || isNaN(t.x) || "number" != typeof t.y || isNaN(t.y) || (e = {
                            x: z(Math.max(0, Math.min(100, t.x)) / 100, 2),
                            y: z(Math.max(0, Math.min(100, t.y)) / 100, 2)
                        }), e
                    }

                    function V(t, e) {
                        const i = t * e;
                        return i > m[A.HIGH].size ? A.HIGH : i > m[A.MEDIUM].size ? A.MEDIUM : i > m[A.LOW].size ? A.LOW : A.TINY
                    }

                    function z(t, e) {
                        const i = Math.pow(10, e || 0);
                        return (t * i / i).toFixed(e)
                    }

                    function Z(t) {
                        return t && t.upscaleMethod && g[t.upscaleMethod.toUpperCase()] || g.AUTO
                    }

                    function j(t, e) {
                        return H(t) === O.GIF || H(t) === O.WEBP && e
                    }
                    const W = {
                            isMobile: !1
                        },
                        q = function(t) {
                            return W[t]
                        };

                    function J() {
                        if ("undefined" != typeof window && "undefined" != typeof navigator) {
                            const e = window.matchMedia && window.matchMedia("(max-width: 767px)").matches,
                                i = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                            t = e && i, W["isMobile"] = t
                        }
                        var t
                    }

                    function X(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t;
                        switch (a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.STRETCH:
                                n.container.backgroundSize = "100% 100%", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FILL:
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                n.container.backgroundSize = "cover", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.TILE:
                            case h.LEGACY_STRIP_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat"
                        }
                        switch (e.alignment) {
                            case _.CENTER:
                                n.container.backgroundPosition = "center center";
                                break;
                            case _.LEFT:
                                n.container.backgroundPosition = "left center";
                                break;
                            case _.RIGHT:
                                n.container.backgroundPosition = "right center";
                                break;
                            case _.TOP:
                                n.container.backgroundPosition = "center top";
                                break;
                            case _.BOTTOM:
                                n.container.backgroundPosition = "center bottom";
                                break;
                            case _.TOP_RIGHT:
                                n.container.backgroundPosition = "right top";
                                break;
                            case _.TOP_LEFT:
                                n.container.backgroundPosition = "left top";
                                break;
                            case _.BOTTOM_RIGHT:
                                n.container.backgroundPosition = "right bottom";
                                break;
                            case _.BOTTOM_LEFT:
                                n.container.backgroundPosition = "left bottom"
                        }
                        return i
                    }
                    const Q = {
                            [_.CENTER]: "center",
                            [_.TOP]: "top",
                            [_.TOP_LEFT]: "top left",
                            [_.TOP_RIGHT]: "top right",
                            [_.BOTTOM]: "bottom",
                            [_.BOTTOM_LEFT]: "bottom left",
                            [_.BOTTOM_RIGHT]: "bottom right",
                            [_.LEFT]: "left",
                            [_.RIGHT]: "right"
                        },
                        K = {
                            position: "absolute",
                            top: "auto",
                            right: "auto",
                            bottom: "auto",
                            left: "auto"
                        };

                    function tt(t, e) {
                        const i = {
                                css: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t,
                            r = e.alignment;
                        switch (n.container.position = "relative", a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                                t.parts && t.parts.length ? (n.img.width = t.parts[0].width, n.img.height = t.parts[0].height) : (n.img.width = t.src.width, n.img.height = t.src.height);
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "contain", n.img.objectPosition = Q[r] || "unset";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.img.width = "100%", n.img.height = "100%", n.img.objectFit = "none", n.img.objectPosition = Q[r] || "unset";
                                break;
                            case h.STRETCH:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "fill";
                                break;
                            case h.SCALE_TO_FILL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "cover"
                        }
                        if ("number" == typeof n.img.width && "number" == typeof n.img.height && (n.img.width !== e.width || n.img.height !== e.height)) {
                            const t = Math.round((e.height - n.img.height) / 2),
                                i = Math.round((e.width - n.img.width) / 2);
                            Object.assign(n.img, K, function(t, e, i) {
                                return {
                                    [_.TOP_LEFT]: {
                                        top: 0,
                                        left: 0
                                    },
                                    [_.TOP_RIGHT]: {
                                        top: 0,
                                        right: 0
                                    },
                                    [_.TOP]: {
                                        top: 0,
                                        left: e
                                    },
                                    [_.BOTTOM_LEFT]: {
                                        bottom: 0,
                                        left: 0
                                    },
                                    [_.BOTTOM_RIGHT]: {
                                        bottom: 0,
                                        right: 0
                                    },
                                    [_.BOTTOM]: {
                                        bottom: 0,
                                        left: e
                                    },
                                    [_.RIGHT]: {
                                        top: t,
                                        right: 0
                                    },
                                    [_.LEFT]: {
                                        top: t,
                                        left: 0
                                    },
                                    [_.CENTER]: {
                                        width: i.width,
                                        height: i.height,
                                        objectFit: "none"
                                    }
                                }
                            }(t, i, e)[r])
                        }
                        return i
                    }

                    function et(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                },
                                attr: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n,
                                attr: a
                            } = i,
                            {
                                fittingType: r
                            } = t,
                            o = e.alignment,
                            {
                                width: c,
                                height: s
                            } = t.src;
                        let T;
                        switch (n.container.position = "relative", r) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.TILE:
                                t.parts && t.parts.length ? (a.img.width = t.parts[0].width, a.img.height = t.parts[0].height) : (a.img.width = c, a.img.height = s), a.img.preserveAspectRatio = "xMidYMid slice";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                a.img.width = "100%", a.img.height = "100%", a.img.transform = "", a.img.preserveAspectRatio = "";
                                break;
                            case h.STRETCH:
                                a.img.width = e.width, a.img.height = e.height, a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "none";
                                break;
                            case h.SCALE_TO_FILL:
                                N(t.src.id) ? (a.img.width = e.width, a.img.height = e.height) : (T = function(t, e, i, n, a) {
                                    const r = B(t, e, i, n, a);
                                    return {
                                        width: Math.round(t * r),
                                        height: Math.round(e * r)
                                    }
                                }(c, s, e.width, e.height, u.FILL), a.img.width = T.width, a.img.height = T.height), a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "xMidYMid slice"
                        }
                        if ("number" == typeof a.img.width && "number" == typeof a.img.height && (a.img.width !== e.width || a.img.height !== e.height)) {
                            let t, i, n = 0,
                                c = 0;
                            r === h.TILE ? (t = e.width % a.img.width, i = e.height % a.img.height) : (t = e.width - a.img.width, i = e.height - a.img.height);
                            const s = Math.round(t / 2),
                                u = Math.round(i / 2);
                            switch (o) {
                                case _.TOP_LEFT:
                                    n = 0, c = 0;
                                    break;
                                case _.TOP:
                                    n = s, c = 0;
                                    break;
                                case _.TOP_RIGHT:
                                    n = t, c = 0;
                                    break;
                                case _.LEFT:
                                    n = 0, c = u;
                                    break;
                                case _.CENTER:
                                    n = s, c = u;
                                    break;
                                case _.RIGHT:
                                    n = t, c = u;
                                    break;
                                case _.BOTTOM_LEFT:
                                    n = 0, c = i;
                                    break;
                                case _.BOTTOM:
                                    n = s, c = i;
                                    break;
                                case _.BOTTOM_RIGHT:
                                    n = t, c = i
                            }
                            a.img.x = n, a.img.y = c
                        }
                        return a.container.width = e.width, a.container.height = e.height, a.container.viewBox = [0, 0, e.width, e.height].join(" "), i
                    }

                    function it(t, e, i) {
                        let n;
                        switch (e.crop && (n = function(t, e) {
                                const i = Math.max(0, Math.min(t.width, e.x + e.width) - Math.max(0, e.x)),
                                    n = Math.max(0, Math.min(t.height, e.y + e.height) - Math.max(0, e.y));
                                return i && n && (t.width !== i || t.height !== n) ? {
                                    x: Math.max(0, e.x),
                                    y: Math.max(0, e.y),
                                    width: i,
                                    height: n
                                } : null
                            }(e, e.crop), n && (t.src.width = n.width, t.src.height = n.height, t.src.isCropped = !0, t.parts.push(at(n)))), t.fittingType) {
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                t.parts.push(nt(t, i));
                                break;
                            case h.SCALE_TO_FILL:
                                t.parts.push(function(t, e) {
                                    const i = U(t.src.width, t.src.height, u.FILL, e, t.devicePixelRatio, t.upscaleMethod),
                                        n = D(t.focalPoint);
                                    return {
                                        transformType: n ? u.FILL_FOCAL : u.FILL,
                                        width: Math.round(i.width),
                                        height: Math.round(i.height),
                                        alignment: v(e),
                                        focalPointX: n && n.x,
                                        focalPointY: n && n.y,
                                        upscale: i.scaleFactor > 1,
                                        forceUSM: i.forceUSM,
                                        scaleFactor: i.scaleFactor,
                                        cssUpscaleNeeded: i.cssUpscaleNeeded,
                                        upscaleMethodValue: i.upscaleMethodValue
                                    }
                                }(t, i));
                                break;
                            case h.STRETCH:
                                t.parts.push(function(t, e) {
                                    const i = B(t.src.width, t.src.height, e.width, e.height, u.FILL),
                                        n = {
                                            ...e
                                        };
                                    return n.width = t.src.width * i, n.height = t.src.height * i, nt(t, n)
                                }(t, i));
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.TILE_VERTICAL:
                            case h.TILE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.ORIGINAL_SIZE:
                                n = $(t.src, i, t.focalPoint, i.alignment), t.src.isCropped ? (Object.assign(t.parts[0], n), t.src.width = n.width, t.src.height = n.height) : t.parts.push(at(n));
                                break;
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_CROP,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: v(t),
                                        upscale: !1,
                                        forceUSM: !1,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.FIT,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_FILL,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: v(t),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i))
                        }
                    }

                    function nt(t, e) {
                        const i = U(t.src.width, t.src.height, u.FIT, e, t.devicePixelRatio, t.upscaleMethod);
                        return {
                            transformType: !t.src.width || !t.src.height ? u.FIT : u.FILL,
                            width: Math.round(i.width),
                            height: Math.round(i.height),
                            alignment: d.center,
                            upscale: i.scaleFactor > 1,
                            forceUSM: i.forceUSM,
                            scaleFactor: i.scaleFactor,
                            cssUpscaleNeeded: i.cssUpscaleNeeded,
                            upscaleMethodValue: i.upscaleMethodValue
                        }
                    }

                    function at(t) {
                        return {
                            transformType: u.CROP,
                            x: Math.round(t.x),
                            y: Math.round(t.y),
                            width: Math.round(t.width),
                            height: Math.round(t.height),
                            upscale: !1,
                            forceUSM: !1,
                            scaleFactor: 1,
                            cssUpscaleNeeded: !1
                        }
                    }

                    function rt(t, e) {
                        e = e || {}, t.quality = function(t, e) {
                            const i = t.fileType === O.PNG,
                                n = t.fileType === O.JPG,
                                a = t.fileType === O.WEBP,
                                r = n || i || a;
                            if (r) {
                                const n = b(t.parts),
                                    a = (o = n.width, c = n.height, m[V(o, c)].quality);
                                let r = e.quality && e.quality >= 5 && e.quality <= 90 ? e.quality : a;
                                return r = i ? r + 5 : r, r
                            }
                            var o, c;
                            return 0
                        }(t, e), t.progressive = function(t) {
                            return !1 !== t.progressive
                        }(e), t.watermark = function(t) {
                            return t.watermark
                        }(e), t.autoEncode = e.autoEncode ?? !0, t.encoding = e?.encoding, t.unsharpMask = function(t, e) {
                            if (function(t) {
                                    const e = "number" == typeof(t = t || {}).radius && !isNaN(t.radius) && t.radius >= .1 && t.radius <= 500,
                                        i = "number" == typeof t.amount && !isNaN(t.amount) && t.amount >= 0 && t.amount <= 10,
                                        n = "number" == typeof t.threshold && !isNaN(t.threshold) && t.threshold >= 0 && t.threshold <= 255;
                                    return e && i && n
                                }(e.unsharpMask)) return {
                                radius: z(e.unsharpMask?.radius, 2),
                                amount: z(e.unsharpMask?.amount, 2),
                                threshold: z(e.unsharpMask?.threshold, 2)
                            };
                            if (("number" != typeof(i = (i = e.unsharpMask) || {}).radius || isNaN(i.radius) || 0 !== i.radius || "number" != typeof i.amount || isNaN(i.amount) || 0 !== i.amount || "number" != typeof i.threshold || isNaN(i.threshold) || 0 !== i.threshold) && function(t) {
                                    const e = b(t.parts);
                                    return !(e.scaleFactor >= 1) || e.forceUSM || e.transformType === u.FIT
                                }(t)) return L;
                            var i;
                            return
                        }(t, e), t.filters = function(t) {
                            const e = t.filters || {},
                                i = {};
                            ot(e[G.CONTRAST], -100, 100) && (i[G.CONTRAST] = e[G.CONTRAST]);
                            ot(e[G.BRIGHTNESS], -100, 100) && (i[G.BRIGHTNESS] = e[G.BRIGHTNESS]);
                            ot(e[G.SATURATION], -100, 100) && (i[G.SATURATION] = e[G.SATURATION]);
                            ot(e[G.HUE], -180, 180) && (i[G.HUE] = e[G.HUE]);
                            ot(e[G.BLUR], 0, 100) && (i[G.BLUR] = e[G.BLUR]);
                            return i
                        }(e)
                    }

                    function ot(t, e, i) {
                        return "number" == typeof t && !isNaN(t) && 0 !== t && t >= e && t <= i
                    }

                    function ct(t, e, i, n) {
                        const r = function(t) {
                                return t?.isSEOBot ?? !1
                            }(n),
                            o = Y(e.id),
                            c = function(t, e) {
                                const i = /\.([^.]*)$/,
                                    n = new RegExp(`(${y.concat(k).join("|")})`, "g");
                                if (e && e.length) {
                                    let t = e;
                                    const a = e.match(i);
                                    return a && M.includes(a[1]) && (t = e.replace(i, "")), encodeURIComponent(t).replace(n, x)
                                }
                                const a = t.match(/\/(.*?)$/);
                                return (a ? a[1] : t).replace(i, "")
                            }(e.id, e.name),
                            s = r ? 1 : function(t) {
                                return Math.min(t.pixelAspectRatio || 1, a)
                            }(i),
                            h = H(e.id),
                            u = h,
                            _ = N(e.id, n?.hasAnimation, n?.allowAnimatedTransform),
                            T = {
                                fileName: c,
                                fileExtension: h,
                                fileType: o,
                                fittingType: t,
                                preferredExtension: u,
                                src: {
                                    id: e.id,
                                    width: e.width,
                                    height: e.height,
                                    isCropped: !1,
                                    isAnimated: j(e.id, n?.hasAnimation)
                                },
                                focalPoint: {
                                    x: e.focalPoint && e.focalPoint.x,
                                    y: e.focalPoint && e.focalPoint.y
                                },
                                parts: [],
                                devicePixelRatio: s,
                                quality: 0,
                                upscaleMethod: Z(n),
                                progressive: !0,
                                watermark: "",
                                unsharpMask: {},
                                filters: {},
                                transformed: _
                            };
                        return _ && (it(T, e, i), rt(T, n)), T
                    }

                    function st(t, e, i) {
                        const n = {
                                ...i
                            },
                            a = q("isMobile");
                        switch (t) {
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                const t = a ? c : r,
                                    i = a ? s : o;
                                n.width = Math.min(t, e.width), n.height = Math.min(i, Math.round(n.width / (e.width / e.height))), n.pixelAspectRatio = 1
                        }
                        return n
                    }
                    const ht = w`fit/w_${"width"},h_${"height"}`,
                        ut = w`fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        _t = w`fill/w_${"width"},h_${"height"},fp_${"focalPointX"}_${"focalPointY"}`,
                        Tt = w`crop/x_${"x"},y_${"y"},w_${"width"},h_${"height"}`,
                        dt = w`crop/w_${"width"},h_${"height"},al_${"alignment"}`,
                        lt = w`fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        gt = w`,lg_${"upscaleMethodValue"}`,
                        It = w`,q_${"quality"}`,
                        Lt = w`,quality_auto`,
                        pt = w`,usm_${"radius"}_${"amount"}_${"threshold"}`,
                        Et = w`,bl`,
                        ft = w`,wm_${"watermark"}`,
                        mt = {
                            [G.CONTRAST]: w`,con_${"contrast"}`,
                            [G.BRIGHTNESS]: w`,br_${"brightness"}`,
                            [G.SATURATION]: w`,sat_${"saturation"}`,
                            [G.HUE]: w`,hue_${"hue"}`,
                            [G.BLUR]: w`,blur_${"blur"}`
                        },
                        At = w`,enc_auto`,
                        Gt = w`,enc_avif`,
                        Ot = w`,enc_pavif`,
                        Rt = w`,pstr`;

                    function wt(t, e, i, a = {}, r) {
                        if (N(e.id, a?.hasAnimation, a?.allowAnimatedTransform)) {
                            if (S(e.id)) {
                                const {
                                    alignment: n,
                                    ...o
                                } = i;
                                e.focalPoint = {
                                    x: void 0,
                                    y: void 0
                                }, delete e?.crop, r = ct(t, e, o, a)
                            } else r = r || ct(t, e, i, a);
                            return function(t) {
                                const e = [];
                                t.parts.forEach((t => {
                                    switch (t.transformType) {
                                        case u.CROP:
                                            e.push(Tt(t));
                                            break;
                                        case u.LEGACY_CROP:
                                            e.push(dt(t));
                                            break;
                                        case u.LEGACY_FILL:
                                            let i = lt(t);
                                            t.upscale && (i += gt(t)), e.push(i);
                                            break;
                                        case u.FIT:
                                            let n = ht(t);
                                            t.upscale && (n += gt(t)), e.push(n);
                                            break;
                                        case u.FILL:
                                            let a = ut(t);
                                            t.upscale && (a += gt(t)), e.push(a);
                                            break;
                                        case u.FILL_FOCAL:
                                            let r = _t(t);
                                            t.upscale && (r += gt(t)), e.push(r)
                                    }
                                }));
                                let i = e.join("/");
                                return t.quality && (i += It(t)), t.unsharpMask && (i += pt(t.unsharpMask)), t.progressive || (i += Et(t)), t.watermark && (i += ft(t)), t.filters && (i += Object.keys(t.filters).map((e => mt[e](t.filters))).join("")), t.fileType !== O.GIF && (t.encoding === R.AVIF ? (i += Gt(t), i += Lt(t)) : t.encoding === R.PAVIF ? (i += Ot(t), i += Lt(t)) : t.autoEncode && (i += At(t))), t.src?.isAnimated && t.transformed && (i += Rt(t)), `${t.src.id}/${n}/${i}/${t.fileName}.${t.preferredExtension}`
                            }(r)
                        }
                        return e.id
                    }
                    const bt = {
                        [_.CENTER]: "50% 50%",
                        [_.TOP_LEFT]: "0% 0%",
                        [_.TOP_RIGHT]: "100% 0%",
                        [_.TOP]: "50% 0%",
                        [_.BOTTOM_LEFT]: "0% 100%",
                        [_.BOTTOM_RIGHT]: "100% 100%",
                        [_.BOTTOM]: "50% 100%",
                        [_.RIGHT]: "100% 50%",
                        [_.LEFT]: "0% 50%"
                    };
                    Object.entries(bt).reduce(((t, [e, i]) => (t[i] = e, t)), {}), h.TILE, h.TILE_HORIZONTAL, h.TILE_VERTICAL, h.LEGACY_BG_FIT_AND_TILE, h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL, h.LEGACY_BG_FIT_AND_TILE_VERTICAL, h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE, h.LEGACY_BG_NORMAL;

                    function Mt(t, e, i, n) {
                        let a = {};
                        if (F(t, e, i)) {
                            const r = st(t, e, i),
                                o = ct(t, e, r, n);
                            a.uri = wt(t, e, r, n, o), n?.useSrcset && (a.srcset = function(t, e, i, n, a) {
                                const r = i.pixelAspectRatio || 1;
                                return {
                                    dpr: [`${1===r?a.uri:wt(t,e,{...i,pixelAspectRatio:1},n)} 1x`, `${2===r?a.uri:wt(t,e,{...i,pixelAspectRatio:2},n)} 2x`]
                                }
                            }(t, e, r, n, a)), Object.assign(a, function(t, e) {
                                let i;
                                return i = e.htmlTag === l.BG ? X : e.htmlTag === l.SVG ? et : tt, i(t, e)
                            }(o, r), {
                                transformed: o.transformed
                            })
                        } else a = p;
                        return a
                    }
                    "undefined" != typeof window && window.devicePixelRatio;
                    J();
                    J()
                },
                58307: function(t, e, i) {
                    i.d(e, {
                        WD: function() {
                            return n.WD
                        },
                        Wp: function() {
                            return a.Wp
                        },
                        c$: function() {
                            return a.c$
                        },
                        eC: function() {
                            return a.eC
                        },
                        g7: function() {
                            return a.g7
                        },
                        xX: function() {
                            return n.xX
                        }
                    });
                    var n = i(46209),
                        a = i(42658)
                }
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/custom-element-utils.inline.867d0d19.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/initCustomElements.inline.edeb13a4.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [6916], {
                41217: function(e, t, i) {
                    i.d(t, {
                        Io: function() {
                            return s
                        },
                        Rb: function() {
                            return o
                        },
                        _b: function() {
                            return n
                        },
                        kU: function() {
                            return r
                        }
                    });

                    function n(e, t, i, n, s) {
                        return (s - e) * (n - i) / (t - e) + i
                    }

                    function s(e, t) {
                        let [i, n] = e, [s, r] = t;
                        return Math.sqrt((s - i) ** 2 + (r - n) ** 2)
                    }

                    function r(e) {
                        return e * Math.PI / 180
                    }

                    function o(e, t, i) {
                        void 0 === e && (e = [0, 0]), void 0 === t && (t = [0, 0]), void 0 === i && (i = 0);
                        return (360 + i + 180 * Math.atan2(t[1] - e[1], t[0] - e[0]) / Math.PI) % 360
                    }
                },
                42658: function(e, t, i) {
                    i.d(t, {
                        Wp: function() {
                            return s
                        },
                        XO: function() {
                            return c
                        },
                        bQ: function() {
                            return a
                        },
                        c$: function() {
                            return h
                        },
                        ds: function() {
                            return u
                        },
                        eC: function() {
                            return r
                        },
                        g7: function() {
                            return o
                        }
                    });
                    const n = {
                            columnCount: 1,
                            columns: 1,
                            fontWeight: 1,
                            lineHeight: 1,
                            opacity: 1,
                            zIndex: 1,
                            zoom: 1
                        },
                        s = (e, t) => e && t && Object.keys(t).forEach((i => e.setAttribute(i, t[i]))),
                        r = (e, t) => e && t && Object.keys(t).forEach((i => {
                            const s = t[i];
                            void 0 !== s ? e.style[i] = ((e, t) => "number" != typeof t || n[e] ? t : `${t}px`)(i, s) : e.style.removeProperty(i)
                        })),
                        o = (e, t) => e && t && Object.keys(t).forEach((i => {
                            e.style.setProperty(i, t[i])
                        })),
                        a = (e, t, i = !0) => {
                            return e && i ? (n = e.dataset[t]) ? "true" === n || "false" !== n && ("null" === n ? null : "" + +n === n ? +n : n) : n : e.dataset[t];
                            var n
                        },
                        c = (e, t) => e && t && Object.assign(e.dataset, t),
                        h = e => e || document.documentElement.clientHeight || window.innerHeight || 0,
                        u = {
                            fit: "contain",
                            fill: "cover"
                        }
                },
                46209: function(e, t, i) {
                    i.d(t, {
                        WD: function() {
                            return s
                        },
                        xX: function() {
                            return a
                        }
                    });
                    var n = i(22538);
                    const s = (e, t, i) => {
                            const {
                                targetWidth: s,
                                targetHeight: a,
                                imageData: c,
                                filters: h,
                                displayMode: u = n.fittingTypes.SCALE_TO_FILL
                            } = e;
                            if (!s || !a || !c.uri) return {
                                uri: "",
                                css: {}
                            };
                            const {
                                width: l,
                                height: d,
                                crop: m,
                                name: g,
                                focalPoint: v,
                                upscaleMethod: f,
                                quality: b,
                                devicePixelRatio: p = t.devicePixelRatio
                            } = c, w = {
                                filters: h,
                                upscaleMethod: f,
                                ...b,
                                hasAnimation: e?.hasAnimation || c?.hasAnimation
                            }, y = o(p), O = {
                                id: c.uri,
                                width: l,
                                height: d,
                                ...m && {
                                    crop: m
                                },
                                ...v && {
                                    focalPoint: v
                                },
                                ...g && {
                                    name: g
                                }
                            }, E = {
                                width: s,
                                height: a,
                                htmlTag: i || "img",
                                pixelAspectRatio: y,
                                alignment: e.alignType || n.alignTypes.CENTER
                            }, M = (0, n.getData)(u, O, E, w);
                            return M.uri = r(M.uri, t.staticMediaUrl, t.mediaRootUrl), M
                        },
                        r = (e, t, i) => {
                            if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(e)) return e;
                            let n = `${t}/`;
                            return e && (/^micons\//.test(e) ? n = i : "ico" === /[^.]+$/.exec(e)[0] && (n = n.replace("media", "ficons"))), n + e
                        },
                        o = e => {
                            const t = window.location.search.split("&").map((e => e.split("="))).find((e => e[0].toLowerCase().includes("devicepixelratio")));
                            return (t ? Number(t[1]) : null) || e || 1
                        };

                    function a(e) {
                        return e.isExperimentOpen("specs.thunderbolt.tb_stop_client_images") || e.isExperimentOpen("specs.thunderbolt.final_force_webp") || e.isExperimentOpen("specs.thunderbolt.final_force_no_webp")
                    }
                },
                8938: function(e, t, i) {
                    i.d(t, {
                        A: function() {
                            return n
                        }
                    });
                    const n = () => {
                        const e = {
                                observedElementToRelayoutTarget: new Map,
                                getLayoutTargets(t) {
                                    const i = new Set;
                                    return t.forEach((t => i.add(e.observedElementToRelayoutTarget.get(t)))), i
                                },
                                observe: i => {
                                    e.observedElementToRelayoutTarget.set(i, i), t.observe(i)
                                },
                                unobserve: i => {
                                    e.observedElementToRelayoutTarget.delete(i), t.unobserve(i)
                                },
                                observeChild: (i, n) => {
                                    e.observedElementToRelayoutTarget.set(i, n), t.observe(i)
                                },
                                unobserveChild: i => {
                                    e.observedElementToRelayoutTarget.delete(i), t.unobserve(i)
                                }
                            },
                            t = new window.ResizeObserver((t => {
                                e.getLayoutTargets(t.map((e => e.target))).forEach((e => e.reLayout()))
                            }));
                        return e
                    }
                },
                98822: function(e, t, i) {
                    i.d(t, {
                        Am: function() {
                            return s
                        },
                        Tj: function() {
                            return n
                        },
                        oq: function() {
                            return o
                        },
                        vk: function() {
                            return r
                        }
                    });
                    const n = (e, t) => Object.keys(e).find((i => t(e[i], i))),
                        s = (e, t) => {
                            const i = e.reduce(((e, i) => (e[t(i)] = i, e)), {});
                            return Object.values(i)
                        },
                        r = (e, t = window) => {
                            let i = !1;
                            return (...n) => {
                                i || (i = !0, t.requestAnimationFrame((() => {
                                    i = !1, e(...n)
                                })))
                            }
                        };

                    function o(...e) {
                        let t = e[0];
                        for (let i = 1; i < e.length; ++i) t = `${t.replace(/\/$/,"")}/${e[i].replace(/^\//,"")}`;
                        return t
                    }
                },
                769: function(e, t, i) {
                    var n = {};
                    i.r(n), i.d(n, {
                        BackgroundParallax: function() {
                            return h
                        },
                        BackgroundParallaxZoom: function() {
                            return u
                        },
                        BackgroundReveal: function() {
                            return l
                        },
                        BgCloseUp: function() {
                            return d
                        },
                        BgExpand: function() {
                            return m
                        },
                        BgFabeBack: function() {
                            return g
                        },
                        BgFadeIn: function() {
                            return v
                        },
                        BgFadeOut: function() {
                            return f
                        },
                        BgFake3D: function() {
                            return b
                        },
                        BgPanLeft: function() {
                            return p
                        },
                        BgPanRight: function() {
                            return w
                        },
                        BgParallax: function() {
                            return y
                        },
                        BgPullBack: function() {
                            return O
                        },
                        BgReveal: function() {
                            return E
                        },
                        BgRotate: function() {
                            return M
                        },
                        BgShrink: function() {
                            return C
                        },
                        BgSkew: function() {
                            return x
                        },
                        BgUnwind: function() {
                            return R
                        },
                        BgZoomIn: function() {
                            return A
                        },
                        BgZoomOut: function() {
                            return S
                        },
                        ImageParallax: function() {
                            return L
                        },
                        ImageReveal: function() {
                            return H
                        }
                    });
                    var s = i(17709),
                        r = i.n(s),
                        o = i(41217);
                    const a = (e, t) => ({
                            width: e,
                            height: t
                        }),
                        c = (e, t, i) => ({
                            width: e,
                            height: Math.max(t, i)
                        });
                    const h = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        u = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        l = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        d = {
                            getMediaDimensions: a
                        },
                        m = {
                            getMediaDimensions: a
                        },
                        g = {
                            getMediaDimensions: a
                        },
                        v = {
                            getMediaDimensions: a
                        },
                        f = {
                            getMediaDimensions: a
                        },
                        b = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        p = {
                            getMediaDimensions: (e, t) => ({
                                width: 1.2 * e,
                                height: t
                            })
                        },
                        w = {
                            getMediaDimensions: (e, t) => ({
                                width: 1.2 * e,
                                height: t
                            })
                        },
                        y = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        O = {
                            getMediaDimensions: a
                        },
                        E = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        M = {
                            getMediaDimensions: (e, t) => function(e, t, i) {
                                const n = (0, o.kU)(i),
                                    s = Math.hypot(e, t) / 2,
                                    r = Math.acos(e / 2 / s),
                                    a = e * Math.abs(Math.cos(n)) + t * Math.abs(Math.sin(n)),
                                    c = e * Math.abs(Math.sin(n)) + t * Math.abs(Math.cos(n));
                                return {
                                    width: Math.ceil(n < r ? a : 2 * s),
                                    height: Math.ceil(n < (0, o.kU)(90) - r ? c : 2 * s)
                                }
                            }(e, t, 22)
                        },
                        C = {
                            getMediaDimensions: a
                        },
                        x = {
                            getMediaDimensions: (e, t) => function(e, t, i) {
                                const n = (0, o.kU)(i);
                                return {
                                    width: e,
                                    height: e * Math.tan(n) + t
                                }
                            }(e, t, 20)
                        },
                        R = {
                            getMediaDimensions: a
                        },
                        A = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        S = {
                            getMediaDimensions: (e, t) => ({
                                width: 1.15 * e,
                                height: 1.15 * t
                            })
                        },
                        L = {
                            getMediaDimensions: (e, t) => ({
                                width: e,
                                height: 1.5 * t
                            })
                        },
                        H = {
                            getMediaDimensions: (e, t, i) => ({
                                width: e,
                                height: i
                            })
                        };
                    var z = i(22538),
                        I = i(98822),
                        P = i(58307);
                    var D = function(e, t, i = window) {
                        const n = {
                            width: void 0,
                            height: void 0,
                            left: void 0
                        };
                        return class extends e {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                const {
                                    containerId: e,
                                    pageId: s,
                                    useCssVars: r,
                                    bgEffectName: o
                                } = this.dataset, a = this.closest(`#${e}`) || i.document.getElementById(`${e}`), c = this.closest(`#${s}`) || i.document.getElementById(`${s}`), h = {};
                                t.mutationService.measure((() => {
                                    const e = "fixed" === i.getComputedStyle(this).position,
                                        n = (0, P.c$)(t.getScreenHeightOverride?.()),
                                        s = a.getBoundingClientRect(),
                                        u = t.getMediaDimensionsByEffect(o, s.width, s.height, n),
                                        {
                                            hasParallax: l
                                        } = u,
                                        d = c && (i.getComputedStyle(c).transition || "").includes("transform"),
                                        {
                                            width: m,
                                            height: g
                                        } = u,
                                        v = `${m}px`,
                                        f = `${g}px`;
                                    let b = (s.width - m) / 2 + "px";
                                    if (e) {
                                        const e = i.document.documentElement.clientLeft;
                                        b = d ? a.offsetLeft - e + "px" : s.left - e + "px"
                                    }
                                    const p = e || l ? 0 : (s.height - g) / 2 + "px",
                                        w = r ? {
                                            "--containerW": v,
                                            "--containerH": f,
                                            "--containerL": b,
                                            "--screenH_val": `${n}`
                                        } : {
                                            width: v,
                                            height: f,
                                            left: b,
                                            top: p
                                        };
                                    Object.assign(h, w)
                                })), t.mutationService.mutate((() => {
                                    r ? ((0, P.eC)(this, n), (0, P.g7)(this, h)) : (0, P.eC)(this, h)
                                }))
                            }
                            connectedCallback() {
                                super.connectedCallback(), t.windowResizeService.observe(this)
                            }
                            disconnectedCallback() {
                                super.disconnectedCallback(), t.windowResizeService.unobserve(this)
                            }
                            attributeChangedCallback(e, t) {
                                t && this.reLayout()
                            }
                            static get observedAttributes() {
                                return ["data-is-full-height", "data-container-size"]
                            }
                        }
                    };
                    var T = function(e, t = window) {
                        class i extends t.HTMLElement {
                            constructor() {
                                super()
                            }
                            reLayout() {}
                            connectedCallback() {
                                this.observeResize(), this.reLayout()
                            }
                            disconnectedCallback() {
                                this.unobserveResize(), this.unobserveChildren()
                            }
                            observeResize() {
                                e.resizeService.observe(this)
                            }
                            unobserveResize() {
                                e.resizeService.unobserve(this)
                            }
                            observeChildren(e) {
                                this.childListObserver || (this.childListObserver = new t.MutationObserver((() => this.reLayout()))), this.childListObserver.observe(e, {
                                    childList: !0
                                })
                            }
                            observeChildAttributes(e, i = []) {
                                this.childrenAttributesObservers || (this.childrenAttributesObservers = []);
                                const n = new t.MutationObserver((() => this.reLayout()));
                                n.observe(e, {
                                    attributeFilter: i
                                }), this.childrenAttributesObservers.push(n)
                            }
                            observeChildResize(t) {
                                this.childrenResizeObservers || (this.childrenResizeObservers = []), e.resizeService.observeChild(t, this), this.childrenResizeObservers.push(t)
                            }
                            unobserveChildrenResize() {
                                this.childrenResizeObservers && (this.childrenResizeObservers.forEach((t => {
                                    e.resizeService.unobserveChild(t)
                                })), this.childrenResizeObservers = null)
                            }
                            unobserveChildren() {
                                if (this.childListObserver && (this.childListObserver.disconnect(), this.childListObserver = null), this.childrenAttributesObservers) {
                                    for (let e of this.childrenAttributesObservers) e.disconnect(), e = null;
                                    this.childrenAttributesObservers = null
                                }
                                this.unobserveChildrenResize()
                            }
                        }
                        return i
                    };
                    const k = (e, t, i) => {
                        let n = 1,
                            s = 0;
                        for (let r = 0; r < e.length; r++) {
                            const o = e[r];
                            if (o > t) return !1;
                            if (s += o, s > t && (n++, s = o, n > i)) return !1
                        }
                        return !0
                    };
                    class B extends HTMLElement {
                        constructor() {
                            super(...arguments), this.containerWidth = 0, this.isActive = !1, this.isDuringCalc = !1, this.attachObservers = () => {
                                this.mutationObserver?.observe(this, {
                                    childList: !0,
                                    subtree: !0
                                }), this.containerWidthObserver?.observe(this), Array.from(this.children).forEach((e => {
                                    this.handleItemAdded(e)
                                }))
                            }, this.detachHeightCalcObservers = () => {
                                this.mutationObserver?.disconnect(), this.containerWidthObserver?.disconnect(), this.childResizeObserver?.disconnect()
                            }, this.recalcHeight = () => {
                                this.isActive && r().measure((() => {
                                    if (!this.isActive || this.isDuringCalc) return;
                                    this.isDuringCalc = !0;
                                    const e = getComputedStyle(this),
                                        t = ((e, t, i) => {
                                            let n = -1 / 0;
                                            const s = e.map((e => (e.height + t > n && (n = e.height + t), e.height + t)));
                                            let r = n,
                                                o = n * e.length,
                                                a = n;
                                            for (; r < o;) {
                                                const e = Math.floor((r + o) / 2);
                                                k(s, e, i) ? o = e : r = e + 1, a = r
                                            }
                                            return a - t
                                        })(this.itemsHeights, this.getRowGap(e), this.getColumnCount(e));
                                    this.isDuringCalc = !1, r().mutate((() => {
                                        this.setContainerHeight(t), this.style.setProperty("visibility", null)
                                    }))
                                }))
                            }, this.cleanUp = () => {
                                this.detachHeightCalcObservers(), this.removeContainerHeight(), this.isActiveObserver?.disconnect()
                            }, this.handleItemAdded = e => {
                                e instanceof window.HTMLElement && this.childResizeObserver?.observe(e)
                            }, this.handleItemRemoved = e => {
                                e instanceof window.HTMLElement && this.childResizeObserver?.unobserve(e)
                            }, this.createObservers = () => {
                                this.containerWidthObserver = new ResizeObserver((e => {
                                    const t = e[0];
                                    if (t.contentRect.width !== this.containerWidth) {
                                        if (0 === this.containerWidth) return void(this.containerWidth = t.contentRect.width);
                                        this.containerWidth = t.contentRect.width, this.recalcHeight()
                                    }
                                })), this.mutationObserver = new MutationObserver((e => {
                                    e.forEach((e => {
                                        Array.from(e.removedNodes).forEach(this.handleItemRemoved), Array.from(e.addedNodes).forEach(this.handleItemAdded)
                                    })), this.recalcHeight()
                                })), this.childResizeObserver = new ResizeObserver((() => {
                                    this.recalcHeight()
                                })), this.isActiveObserver = new ResizeObserver((() => {
                                    this.setIsActive()
                                }))
                            }
                        }
                        setContainerHeight(e) {
                            this.style.setProperty("--flex-columns-height", `${e}px`)
                        }
                        removeContainerHeight() {
                            this.style.removeProperty("--flex-columns-height")
                        }
                        getColumnCount(e) {
                            const t = e.getPropertyValue("--flex-column-count");
                            return parseInt(t, 10)
                        }
                        getRowGap(e) {
                            const t = e.getPropertyValue("row-gap");
                            return parseInt(t || "0", 10)
                        }
                        activate() {
                            this.isActive = !0, this.attachObservers(), this.recalcHeight()
                        }
                        deactivate() {
                            this.isActive = !1, this.detachHeightCalcObservers(), this.removeContainerHeight()
                        }
                        calcActive() {
                            return "multi-column-layout" === getComputedStyle(this).getPropertyValue("--container-layout-type")
                        }
                        get itemsHeights() {
                            return Array.from(this.children).map((e => {
                                const t = getComputedStyle(e);
                                let i = parseFloat(t.height || "0");
                                return i += parseFloat(t.marginTop || "0"), i += parseFloat(t.marginBottom || "0"), {
                                    height: i
                                }
                            }))
                        }
                        setIsActive() {
                            const e = this.calcActive();
                            this.isActive !== e && (e ? this.activate() : this.deactivate())
                        }
                        connectedCallback() {
                            this.cleanUp(), this.createObservers(), this.setIsActive(), window.document.body && this.isActiveObserver?.observe(window.document.body)
                        }
                        disconnectedCallback() {
                            this.cleanUp()
                        }
                    }
                    var W = B;
                    var _ = i(8938);
                    var U = {
                            imageClientApi: z,
                            ...{
                                init: function(e, t = window) {
                                    !
                                    /**
                                     * @license
                                     * Copyright (c) 2016 The Polymer Project Authors. All rights reserved.
                                     * This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
                                     * The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
                                     * The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
                                     * Code distributed by Google as part of the polymer project is also
                                     * subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
                                     */
                                    function(e) {
                                        if (void 0 === e.Reflect || void 0 === e.customElements || e.customElements.hasOwnProperty("polyfillWrapFlushCallback")) return;
                                        const t = e.HTMLElement;
                                        e.HTMLElement = function() {
                                            return e.Reflect.construct(t, [], this.constructor)
                                        }, e.HTMLElement.prototype = t.prototype, e.HTMLElement.prototype.constructor = e.HTMLElement, e.Object.setPrototypeOf(e.HTMLElement, t), e.Object.defineProperty(e.HTMLElement, "name", {
                                            value: t.name
                                        })
                                    }(t);
                                    const i = {
                                        registry: new Set,
                                        observe(e) {
                                            i.registry.add(e)
                                        },
                                        unobserve(e) {
                                            i.registry.delete(e)
                                        }
                                    };
                                    e.windowResizeService.init((0, I.vk)((() => i.registry.forEach((e => e.reLayout())))), t);
                                    const n = (0, _.A)(),
                                        s = (e, i) => {
                                            void 0 === t.customElements.get(e) && t.customElements.define(e, i)
                                        },
                                        r = T({
                                            resizeService: n
                                        }, t);
                                    return t.customElementNamespace = {
                                        WixElement: r
                                    }, s("wix-element", r), {
                                        contextWindow: t,
                                        defineWixBgMedia: e => {
                                            const n = D(r, {
                                                windowResizeService: i,
                                                ...e
                                            }, t);
                                            s("wix-bg-media", n)
                                        },
                                        defineMultiColumnRepeaterElement: () => {
                                            s("multi-column-layouter", W)
                                        }
                                    }
                                }
                            }
                        },
                        $ = i(30284);
                    const j = {
                            columnCount: 1,
                            columns: 1,
                            fontWeight: 1,
                            lineHeight: 1,
                            opacity: 1,
                            zIndex: 1,
                            zoom: 1
                        },
                        q = (e, t) => (Array.isArray(t) ? t : [t]).reduce(((t, i) => {
                            const n = e[i];
                            return void 0 !== n ? Object.assign(t, {
                                [i]: n
                            }) : t
                        }), {}),
                        F = (e, t) => e && t && Object.keys(t).forEach((i => {
                            const n = i,
                                s = t[n];
                            void 0 !== s ? e.style[n] = ((e, t) => "number" != typeof t || j[e] ? t.toString() : `${t}px`)(n, s) : e.style.removeProperty(n)
                        })),
                        N = (e, t, i) => {
                            if (!e.targetWidth || !e.targetHeight || !e.imageData.uri) return {
                                uri: "",
                                css: {},
                                transformed: !1
                            };
                            const {
                                imageData: n
                            } = e, s = e.displayMode || $.Nk.SCALE_TO_FILL, r = Object.assign(q(n, ["upscaleMethod"]), q(e, ["filters", "encoding"]), e.quality || n.quality, {
                                hasAnimation: e?.hasAnimation || n?.hasAnimation
                            }), o = e.imageData.devicePixelRatio || t.devicePixelRatio, a = Q(o), c = Object.assign(q(n, ["width", "height", "crop", "name", "focalPoint"]), {
                                id: n.uri
                            }), h = {
                                width: e.targetWidth,
                                height: e.targetHeight,
                                htmlTag: i || "img",
                                pixelAspectRatio: a,
                                alignment: e.alignType || $.vO.CENTER
                            }, u = (0, $.bQ)(s, c, h, r);
                            return u.uri = V(u.uri, t.staticMediaUrl, t.mediaRootUrl), u
                        },
                        V = (e, t, i) => {
                            if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(e)) return e;
                            let n = `${t}/`;
                            return e && (/^micons\//.test(e) ? n = i : "ico" === /[^.]+$/.exec(e)?.[0] && (n = n.replace("media", "ficons"))), n + e
                        },
                        Q = e => {
                            const t = window.location.search.split("&").map((e => e.split("="))).find((e => e[0]?.toLowerCase().includes("devicepixelratio")));
                            return (t?.[1] ? Number(t[1]) : null) || e || 1
                        },
                        G = e => e.getAttribute("src"),
                        J = 80;
                    var Z = {
                        measure: function(e, t, i, {
                            containerElm: n,
                            bgEffect: s = "none",
                            sourceSets: r
                        }, o) {
                            const a = i.image,
                                c = i[e],
                                h = (u = o.getScreenHeightOverride?.(), u || document.documentElement.clientHeight || window.innerHeight || 0);
                            var u;
                            const l = n?.dataset.mediaHeightOverrideType,
                                d = s && "none" !== s || r && r.some((e => e.scrollEffect)),
                                m = n && d ? n : c,
                                g = window.getComputedStyle(c).getPropertyValue("--bg-scrub-effect"),
                                {
                                    width: v,
                                    height: f
                                } = o.getMediaDimensionsByEffect?.(g || s, m.offsetWidth, m.offsetHeight, h) || {
                                    width: c.offsetWidth,
                                    height: c.offsetHeight
                                };
                            if (r && (t.sourceSetsTargetHeights = function(e, t, i, n, s) {
                                    const r = {};
                                    return e.forEach((({
                                        mediaQuery: e,
                                        scrollEffect: o
                                    }) => {
                                        r[e] = s.getMediaDimensionsByEffect(o, t, i, n).height
                                    })), r
                                }(r, m.offsetWidth, m.offsetHeight, h, o)), !a) return;
                            const b = G(a);
                            g && (t.top = .5 * (c.offsetHeight - f), t.left = .5 * (c.offsetWidth - v)), t.width = v, t.height = function(e, t) {
                                return "fixed" === t || "viewport" === t ? document.documentElement.clientHeight + J : e
                            }(f, l), t.screenHeight = h, t.imgSrc = b, t.boundingRect = c.getBoundingClientRect(), t.mediaHeightOverrideType = l, t.srcset = a.srcset
                        },
                        patch: function(e, t, i, n, s, r, o, a, c) {
                            if (!Object.keys(t).length) return;
                            const {
                                imageData: h
                            } = n, u = i[e], l = i.image;
                            a && (h.devicePixelRatio = 1);
                            const d = n.targetScale || 1,
                                m = {
                                    ...n,
                                    ...!n.skipMeasure && {
                                        targetWidth: (t.width || 0) * d,
                                        targetHeight: (t.height || 0) * d
                                    },
                                    displayMode: h.displayMode
                                },
                                g = N(m, s, "img"),
                                v = g?.css?.img || {},
                                f = function(e, t, i, n, s) {
                                    const r = function(e, t = 1) {
                                        return 1 !== t ? {
                                            ...e,
                                            width: "100%",
                                            height: "100%"
                                        } : e
                                    }(t, n);
                                    if (s && (delete r.height, r.width = "100%"), !e) return r;
                                    const o = {
                                        ...r
                                    };
                                    return "fill" === i ? (o.position = "absolute", o.top = "0") : "fit" === i && (o.height = "100%"), "fixed" === e && (o["will-change"] = "transform"), o.objectPosition && (o.objectPosition = t.objectPosition.replace(/(center|bottom)$/, "top")), o
                                }(t.mediaHeightOverrideType, v, h.displayMode, d, o);
                            F(l, f), (t.top || t.left) && F(u, {
                                top: `${t.top}px`,
                                left: `${t.left}px`
                            });
                            const b = g?.uri || "",
                                p = h?.hasAnimation || n?.hasAnimation,
                                w = function(e, t, i) {
                                    const {
                                        sourceSets: n
                                    } = t;
                                    if (!n || !n.length) return;
                                    const s = {};
                                    return n.forEach((({
                                        mediaQuery: n,
                                        crop: r,
                                        focalPoint: o
                                    }) => {
                                        const a = {
                                                ...t,
                                                targetHeight: (e.sourceSetsTargetHeights || {})[n] || 0,
                                                imageData: {
                                                    ...t.imageData,
                                                    crop: r,
                                                    focalPoint: o
                                                }
                                            },
                                            c = N(a, i, "img");
                                        s[n] = c.uri || ""
                                    })), s
                                }(t, m, s);
                            if (c && (l.dataset.ssrSrcDone = "true"), n.isLQIP && n.lqipTransition && !("transitioned" in u.dataset) && (u.dataset.transitioned = "", l.complete ? l.onload = function() {
                                    l.dataset.loadDone = ""
                                } : l.onload = function() {
                                    l.complete ? l.dataset.loadDone = "" : l.onload = function() {
                                        l.dataset.loadDone = ""
                                    }
                                }), r) {
                                ((e, t) => (0, $.QC)(e) === $.$A.GIF || (0, $.QC)(e) === $.$A.WEBP && t)(h.uri, p) ? (l.setAttribute("fetchpriority", "low"), l.setAttribute("loading", "lazy"), l.setAttribute("decoding", "async")) : l.setAttribute("fetchpriority", "high"), l.currentSrc !== b && l.setAttribute("src", b);
                                t.srcset && !t.srcset.split(", ").some((e => e.split(" ")[0] === b)) && l.setAttribute("srcset", b), i.picture && m.sourceSets && Array.from(i.picture.querySelectorAll("source")).forEach((e => {
                                    const t = e.media || "",
                                        i = w?.[t];
                                    e.srcset !== i && e.setAttribute("srcset", i || "")
                                }))
                            }
                        }
                    };
                    const X = {
                        parallax: "ImageParallax",
                        fixed: "ImageReveal"
                    };
                    var K = function(e, t, i) {
                        return class extends i.HTMLElement {
                            constructor() {
                                super(), this.childListObserver = null, this.timeoutId = null
                            }
                            attributeChangedCallback(e, t) {
                                t && this.reLayout()
                            }
                            connectedCallback() {
                                t.disableImagesLazyLoading ? this.reLayout() : this.observeIntersect()
                            }
                            disconnectedCallback() {
                                this.unobserveResize(), this.unobserveIntersect(), this.unobserveChildren()
                            }
                            static get observedAttributes() {
                                return ["data-image-info"]
                            }
                            reLayout() {
                                const n = {},
                                    s = {},
                                    r = this.getAttribute("id"),
                                    o = JSON.parse(this.dataset.imageInfo || ""),
                                    a = "true" === this.dataset.isResponsive,
                                    {
                                        bgEffectName: c
                                    } = this.dataset,
                                    {
                                        scrollEffect: h
                                    } = o.imageData,
                                    {
                                        sourceSets: u
                                    } = o,
                                    l = c || h && X[h];
                                u && u.length && u.forEach((e => {
                                    e.scrollEffect && (e.scrollEffect = X[e.scrollEffect])
                                })), n[r] = this, o.containerId && (n[o.containerId] = i.document.getElementById(`${o.containerId}`));
                                const d = o.containerId ? n[o.containerId] : void 0;
                                if (n.image = this.querySelector("img"), n.picture = this.querySelector("picture"), !n.image) {
                                    const e = this;
                                    return void this.observeChildren(e)
                                }
                                this.unobserveChildren(), this.observeChildren(this), e.mutationService.measure((() => {
                                    Z.measure(r, s, n, {
                                        containerElm: d,
                                        bgEffect: l,
                                        sourceSets: u
                                    }, e)
                                }));
                                const m = (i, c) => {
                                        e.mutationService.mutate((() => {
                                            Z.patch(r, s, n, o, t, i, a, l, c)
                                        }))
                                    },
                                    g = n.image,
                                    v = this.dataset.hasSsrSrc && !g.dataset.ssrSrcDone;
                                !G(g) || v ? m(!0, !0) : this.debounceImageLoad(m)
                            }
                            debounceImageLoad(e) {
                                clearTimeout(this.timeoutId), this.timeoutId = i.setTimeout((() => {
                                    e(!0)
                                }), 250), e(!1)
                            }
                            observeResize() {
                                e.resizeService?.observe(this)
                            }
                            unobserveResize() {
                                e.resizeService?.unobserve(this)
                            }
                            observeIntersect() {
                                e.intersectionService?.observe(this)
                            }
                            unobserveIntersect() {
                                e.intersectionService?.unobserve(this)
                            }
                            observeChildren(e) {
                                this.childListObserver || (this.childListObserver = new i.MutationObserver((() => {
                                    this.reLayout()
                                }))), this.childListObserver.observe(e, {
                                    childList: !0
                                })
                            }
                            unobserveChildren() {
                                this.childListObserver && (this.childListObserver.disconnect(), this.childListObserver = null)
                            }
                        }
                    };

                    function Y(e = {}, t = null, i = {}) {
                        if ("undefined" == typeof window) return;
                        const n = {
                                staticMediaUrl: "https://static.wixstatic.com/media",
                                mediaRootUrl: "https://static.wixstatic.com",
                                experiments: {},
                                devicePixelRatio: /iemobile/i.test(navigator.userAgent) ? Math.round(window.screen.availWidth / (window.screen.width || window.document.documentElement.clientWidth)) : window.devicePixelRatio,
                                ...i
                            },
                            s = function(e, t) {
                                const i = "wow-image";
                                if (void 0 === (e = e || window).customElements.get(i)) {
                                    let n, s;
                                    return e.ResizeObserver && (n = new e.ResizeObserver((e => e.map((e => e.target.reLayout()))))), e.IntersectionObserver && (s = new IntersectionObserver((e => e.map((e => {
                                            if (e.isIntersecting) {
                                                const t = e.target;
                                                t.unobserveIntersect(), t.observeResize()
                                            }
                                            return e
                                        }))), {
                                            rootMargin: "150% 100%"
                                        })),
                                        function(o) {
                                            const a = K({
                                                resizeService: n,
                                                intersectionService: s,
                                                mutationService: r(),
                                                ...t
                                            }, o, e);
                                            e.customElements.define(i, a)
                                        }
                                }
                            }(t, e);
                        s && s(n)
                    }
                    const ee = () => ({
                            getSiteScale: () => {
                                const e = document.querySelector("#site-root");
                                return e ? e.getBoundingClientRect().width / e.offsetWidth : 1
                            }
                        }),
                        te = () => {
                            const e = {
                                    init: e => new ResizeObserver(e)
                                },
                                t = {
                                    init: e => window.addEventListener("resize", e)
                                },
                                i = ee();
                            return U.init({
                                resizeService: e,
                                windowResizeService: t,
                                siteService: i
                            })
                        },
                        ie = (e, t, i, s) => {
                            const {
                                getMediaDimensions: r,
                                ...o
                            } = n[e] || {};
                            return r ? {
                                ...r(t, i, s),
                                ...o
                            } : {
                                width: t,
                                height: i,
                                ...o
                            }
                        },
                        {
                            experiments: ne,
                            media: se,
                            requestUrl: re
                        } = window.viewerModel;
                    ((e, t, i, n) => {
                        const {
                            environmentConsts: s,
                            wixCustomElements: o,
                            media: a,
                            requestUrl: c,
                            mediaServices: h
                        } = ((e, t, i, n) => {
                            const s = {
                                    staticMediaUrl: e.media.staticMediaUrl,
                                    mediaRootUrl: e.media.mediaRootUrl,
                                    experiments: {},
                                    isViewerMode: !0,
                                    devicePixelRatio: /iemobile/i.test(navigator.userAgent) ? Math.round(window.screen.availWidth / (window.screen.width || window.document.documentElement.clientWidth)) : window.devicePixelRatio,
                                    ...n
                                },
                                o = {
                                    mutationService: r(),
                                    isExperimentOpen: t => Boolean(e.experiments[t]),
                                    siteService: ee()
                                },
                                a = {
                                    getMediaDimensionsByEffect: ie,
                                    ...o,
                                    ...i
                                };
                            return {
                                ...e,
                                wixCustomElements: t || te(),
                                services: o,
                                environmentConsts: s,
                                mediaServices: a
                            }
                        })(e, t, i, n), u = o?.contextWindow || window;
                        u.wixCustomElements = o, Object.assign(u.customElementNamespace, {
                            mediaServices: h,
                            environmentConsts: s,
                            requestUrl: c,
                            staticVideoUrl: a.staticVideoUrl
                        }), Y({
                            ...h
                        }, o.contextWindow, s), o.defineWixBgMedia(h), o.defineMultiColumnRepeaterElement(), window.__imageClientApi__ = U.imageClientApi
                    })({
                        experiments: ne,
                        media: se,
                        requestUrl: re
                    })
                }
            },
            function(e) {
                e.O(0, [592, 8398], (function() {
                    return t = 769, e(e.s = t);
                    var t
                }));
                e.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/initCustomElements.inline.edeb13a4.bundle.min.js.map
    </script>


    <!-- preloading pre-scripts -->


    <link href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%22b976560c-3122-4351-878f-453f337b7245%22%3A%22770%22%7D&beckyExperiments=.DatePickerPortal%2C.TextInputAutoFillFix%2C.WRichTextVerticalTextNowidth%2C.buttonUdp%2C.fetchBlocksDevCenterWidgetIds%2C.fiveGridLineStudioSkins%2C.fixDisabledLinkButtonStyles%2C.fixRatingsInputLeftShift%2C.minMaxInCheckboxGroup%2C.motionFeature%2C.removeHeaderFooterWrappers%2C.updateRichTextSemanticClassNamesOnCorvid%2C.useInternalBlocksRefType%2C.useSvgLoaderFeature&blocksBuilderManifestGeneratorVersion=1.92.0&contentType=application%2Fjson&deviceType=Desktop&dfCk=6&dfVersion=1.4098.0&disableStaticPagesUrlHierarchy=false&editorName=Unknown&experiments=dm_deleteLayoutOverridesForRefComponents%2Cdm_fixAnchorUrlFragment%2Cdm_migrateOldHoverBoxToNewFixer%2Cdm_removeTpaChildren%2Cspecs.thunderbolt.use_data_fixed_pages_upstream&externalBaseUrl=https%3A%2F%2Fmx.andrewlord.com.au&fileId=1f67b779.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isMultilingualEnabled=false&isPremiumDomain=true&isTrackClicksAnalyticsEnabled=false&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&languageResolutionMethod=QueryParam&metaSiteId=2e965303-f7a9-452e-acb2-c4fcacca4c2b&module=thunderbolt-features&oneDocEnabled=true&originalLanguage=en&pageId=109259_62245e33096fe4ddf0a67e009aa38249_69.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.251.0&siteId=1322daf8-0765-48a2-9c3e-ce1e6ba131c8&siteRevision=69&staticHTMLComponentUrl=https%3A%2F%2Fmx-andrewlord-com-au.filesusr.com%2F&useSandboxInHTMLComp=false&viewMode=desktop" id="features_masterPage" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
    </link>


    <link href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%22b976560c-3122-4351-878f-453f337b7245%22%3A%22770%22%7D&beckyExperiments=.DatePickerPortal%2C.TextInputAutoFillFix%2C.WRichTextVerticalTextNowidth%2C.buttonUdp%2C.fetchBlocksDevCenterWidgetIds%2C.fiveGridLineStudioSkins%2C.fixDisabledLinkButtonStyles%2C.fixRatingsInputLeftShift%2C.minMaxInCheckboxGroup%2C.motionFeature%2C.removeHeaderFooterWrappers%2C.updateRichTextSemanticClassNamesOnCorvid%2C.useInternalBlocksRefType%2C.useSvgLoaderFeature&blocksBuilderManifestGeneratorVersion=1.92.0&contentType=application%2Fjson&deviceType=Desktop&dfCk=6&dfVersion=1.4098.0&disableStaticPagesUrlHierarchy=false&editorName=Unknown&experiments=dm_deleteLayoutOverridesForRefComponents%2Cdm_fixAnchorUrlFragment%2Cdm_migrateOldHoverBoxToNewFixer%2Cdm_removeTpaChildren%2Cspecs.thunderbolt.use_data_fixed_pages_upstream&externalBaseUrl=https%3A%2F%2Fmx.andrewlord.com.au&fileId=1f67b779.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isMultilingualEnabled=false&isPremiumDomain=true&isTrackClicksAnalyticsEnabled=false&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&languageResolutionMethod=QueryParam&metaSiteId=2e965303-f7a9-452e-acb2-c4fcacca4c2b&module=thunderbolt-features&oneDocEnabled=true&originalLanguage=en&pageId=109259_90b343d9ad4ff50b67c95b6685ab562b_69.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.251.0&siteId=1322daf8-0765-48a2-9c3e-ce1e6ba131c8&siteRevision=69&staticHTMLComponentUrl=https%3A%2F%2Fmx-andrewlord-com-au.filesusr.com%2F&useSandboxInHTMLComp=false&viewMode=desktop" id="features_n1pm5" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
    </link>


    <link href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%22b976560c-3122-4351-878f-453f337b7245%22%3A%22770%22%7D&beckyExperiments=.DatePickerPortal%2C.TextInputAutoFillFix%2C.WRichTextVerticalTextNowidth%2C.buttonUdp%2C.fetchBlocksDevCenterWidgetIds%2C.fiveGridLineStudioSkins%2C.fixDisabledLinkButtonStyles%2C.fixRatingsInputLeftShift%2C.minMaxInCheckboxGroup%2C.updateRichTextSemanticClassNamesOnCorvid%2C.useInternalBlocksRefType&blocksBuilderManifestGeneratorVersion=1.92.0&contentType=application%2Fjson&dfCk=6&dfVersion=1.4098.0&editorName=Unknown&experiments=dm_deleteLayoutOverridesForRefComponents%2Cdm_fixAnchorUrlFragment%2Cdm_migrateOldHoverBoxToNewFixer%2Cdm_removeTpaChildren%2Cspecs.thunderbolt.use_data_fixed_pages_upstream&externalBaseUrl=https%3A%2F%2Fmx.andrewlord.com.au&fileId=e07ea5ea.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isPremiumDomain=true&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&metaSiteId=2e965303-f7a9-452e-acb2-c4fcacca4c2b&module=thunderbolt-platform&oneDocEnabled=true&originalLanguage=en&pageId=109259_62245e33096fe4ddf0a67e009aa38249_69.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.251.0&siteId=1322daf8-0765-48a2-9c3e-ce1e6ba131c8&siteRevision=69&staticHTMLComponentUrl=https%3A%2F%2Fmx-andrewlord-com-au.filesusr.com%2F&viewMode=desktop" id="platform_masterPage" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
    </link>


    <link href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%22b976560c-3122-4351-878f-453f337b7245%22%3A%22770%22%7D&beckyExperiments=.DatePickerPortal%2C.TextInputAutoFillFix%2C.WRichTextVerticalTextNowidth%2C.buttonUdp%2C.fetchBlocksDevCenterWidgetIds%2C.fiveGridLineStudioSkins%2C.fixDisabledLinkButtonStyles%2C.fixRatingsInputLeftShift%2C.minMaxInCheckboxGroup%2C.updateRichTextSemanticClassNamesOnCorvid%2C.useInternalBlocksRefType&blocksBuilderManifestGeneratorVersion=1.92.0&contentType=application%2Fjson&dfCk=6&dfVersion=1.4098.0&editorName=Unknown&experiments=dm_deleteLayoutOverridesForRefComponents%2Cdm_fixAnchorUrlFragment%2Cdm_migrateOldHoverBoxToNewFixer%2Cdm_removeTpaChildren%2Cspecs.thunderbolt.use_data_fixed_pages_upstream&externalBaseUrl=https%3A%2F%2Fmx.andrewlord.com.au&fileId=e07ea5ea.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isPremiumDomain=true&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&metaSiteId=2e965303-f7a9-452e-acb2-c4fcacca4c2b&module=thunderbolt-platform&oneDocEnabled=true&originalLanguage=en&pageId=109259_90b343d9ad4ff50b67c95b6685ab562b_69.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.12952.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.251.0&siteId=1322daf8-0765-48a2-9c3e-ce1e6ba131c8&siteRevision=69&staticHTMLComponentUrl=https%3A%2F%2Fmx-andrewlord-com-au.filesusr.com%2F&viewMode=desktop" id="platform_n1pm5" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
    </link>





    <!-- Sentry initialization -->
    <script>
        // Configure sentryOnLoad before adding the Loader Script https://docs.sentry.io/platforms/javascript/install/loader/#custom-configuration
        window.sentryOnLoad = function() {
            const transport = window.Sentry.makeMultiplexedTransport ?
                window.Sentry.makeMultiplexedTransport(window.Sentry.makeFetchTransport, (args) => {
                    const event = args.getEvent();
                    if (
                        event &&
                        event.extra &&
                        event.extra.ROUTE_TO &&
                        Array.isArray(event.extra.ROUTE_TO)
                    ) {
                        return event.extra.ROUTE_TO;
                    }
                    return [];
                }) : window.Sentry.makeFetchTransport;

            window.Sentry.init({
                transport,
                tracePropagationTargets: [/^https:\/\/[a-zA-Z0-9\-]+\.wix-app\.run\/.*/], // propagate traces to wix-app.run - the domain of the Wix-hosted backend extensions
                beforeSend: function(event) {
                    if (event?.exception?.values?.[0].stacktrace.frames) {
                        const frames = event.exception.values[0].stacktrace.frames;

                        // Find the last frame with module metadata containing a DSN
                        const framesModuleMetadata = frames
                            .filter(
                                (frame) => frame.module_metadata && frame.module_metadata.dsn,
                            )
                            .map((v) => ({
                                dsn: v.module_metadata.dsn,
                                release: v.module_metadata.release,
                            }));

                        const routeTo = framesModuleMetadata.slice(-1); // using top frame only

                        if (routeTo.length) {
                            event.extra = {
                                ...event.extra,
                                ROUTE_TO: routeTo,
                            };
                        }
                    }

                    return event;
                }
            });

            if (window.Sentry.moduleMetadataIntegration) {
                Sentry.addIntegration(Sentry.moduleMetadataIntegration());
            }
        }
    </script>
    <!-- Sentry Loader Script -->
    <script id="sentry">
        ! function(n, e, r, t, i, o, a, c, s) {
            for (var u = s, f = 0; f < document.scripts.length; f++)
                if (document.scripts[f].src.indexOf(o) > -1) {
                    u && "no" === document.scripts[f].getAttribute("data-lazy") && (u = !1);
                    break
                } var p = [];

            function l(n) {
                return "e" in n
            }

            function d(n) {
                return "p" in n
            }

            function _(n) {
                return "f" in n
            }
            var v = [];

            function y(n) {
                u && (l(n) || d(n) || _(n) && n.f.indexOf("capture") > -1 || _(n) && n.f.indexOf("showReportDialog") > -1) && m(), v.push(n)
            }

            function g() {
                y({
                    e: [].slice.call(arguments)
                })
            }

            function h(n) {
                y({
                    p: n
                })
            }

            function E() {
                try {
                    n.SENTRY_SDK_SOURCE = "loader";
                    var e = n[i],
                        o = e.init;
                    e.init = function(i) {
                        n.removeEventListener(r, g), n.removeEventListener(t, h);
                        var a = c;
                        for (var s in i) Object.prototype.hasOwnProperty.call(i, s) && (a[s] = i[s]);
                        ! function(n, e) {
                            var r = n.integrations || [];
                            if (!Array.isArray(r)) return;
                            var t = r.map((function(n) {
                                return n.name
                            }));
                            n.tracesSampleRate && -1 === t.indexOf("BrowserTracing") && (e.browserTracingIntegration ? r.push(e.browserTracingIntegration({
                                enableInp: !0
                            })) : e.BrowserTracing && r.push(new e.BrowserTracing));
                            (n.replaysSessionSampleRate || n.replaysOnErrorSampleRate) && -1 === t.indexOf("Replay") && (e.replayIntegration ? r.push(e.replayIntegration()) : e.Replay && r.push(new e.Replay));
                            n.integrations = r
                        }(a, e), o(a)
                    }, setTimeout((function() {
                        return function(e) {
                            try {
                                "function" == typeof n.sentryOnLoad && (n.sentryOnLoad(), n.sentryOnLoad = void 0);
                                for (var r = 0; r < p.length; r++) "function" == typeof p[r] && p[r]();
                                p.splice(0);
                                for (r = 0; r < v.length; r++) {
                                    _(o = v[r]) && "init" === o.f && e.init.apply(e, o.a)
                                }
                                L() || e.init();
                                var t = n.onerror,
                                    i = n.onunhandledrejection;
                                for (r = 0; r < v.length; r++) {
                                    var o;
                                    if (_(o = v[r])) {
                                        if ("init" === o.f) continue;
                                        e[o.f].apply(e, o.a)
                                    } else l(o) && t ? t.apply(n, o.e) : d(o) && i && i.apply(n, [o.p])
                                }
                            } catch (n) {
                                console.error(n)
                            }
                        }(e)
                    }))
                } catch (n) {
                    console.error(n)
                }
            }
            var O = !1;

            function m() {
                if (!O) {
                    O = !0;
                    var n = e.scripts[0],
                        r = e.createElement("script");
                    r.src = a, r.crossOrigin = "anonymous", r.addEventListener("load", E, {
                        once: !0,
                        passive: !0
                    }), n.parentNode.insertBefore(r, n)
                }
            }

            function L() {
                var e = n.__SENTRY__,
                    r = void 0 !== e && e.version;
                return r ? !!e[r] : !(void 0 === e || !e.hub || !e.hub.getClient())
            }
            n[i] = n[i] || {}, n[i].onLoad = function(n) {
                L() ? n() : p.push(n)
            }, n[i].forceLoad = function() {
                setTimeout((function() {
                    m()
                }))
            }, ["init", "addBreadcrumb", "captureMessage", "captureException", "captureEvent", "configureScope", "withScope", "showReportDialog"].forEach((function(e) {
                n[i][e] = function() {
                    y({
                        f: e,
                        a: arguments
                    })
                }
            })), n.addEventListener(r, g), n.addEventListener(t, h), u || setTimeout((function() {
                m()
            }))
        }(window, document, "error", "unhandledrejection", "Sentry", '605a7baede844d278b89dc95ae0a9123', 'https://browser.sentry-cdn.com/7.119.0/bundle.tracing.es5.min.js', {
            "dsn": "https://605a7baede844d278b89dc95ae0a9123@sentry-next.wixpress.com/68",
            "tracesSampleRate": 1
        }, false);
    </script>
    <!-- Sentry's makeMultiplexedTransport -->
    <script>
        ! function(n) {
            var r = {},
                t = function() {
                    return t = Object.assign || function(n) {
                        for (var r, t = 1, e = arguments.length; t < e; t++)
                            for (var o in r = arguments[t]) Object.prototype.hasOwnProperty.call(r, o) && (n[o] = r[o]);
                        return n
                    }, t.apply(this, arguments)
                };

            function e(n, r, t, e) {
                return new(t || (t = Promise))((function(o, i) {
                    function u(n) {
                        try {
                            f(e.next(n))
                        } catch (n) {
                            i(n)
                        }
                    }

                    function c(n) {
                        try {
                            f(e.throw(n))
                        } catch (n) {
                            i(n)
                        }
                    }

                    function f(n) {
                        var r;
                        n.done ? o(n.value) : (r = n.value, r instanceof t ? r : new t((function(n) {
                            n(r)
                        }))).then(u, c)
                    }
                    f((e = e.apply(n, r || [])).next())
                }))
            }

            function o(n, r) {
                var t, e, o, i, u = {
                    label: 0,
                    sent: function() {
                        if (1 & o[0]) throw o[1];
                        return o[1]
                    },
                    trys: [],
                    ops: []
                };
                return i = {
                    next: c(0),
                    throw: c(1),
                    return: c(2)
                }, "function" == typeof Symbol && (i[Symbol.iterator] = function() {
                    return this
                }), i;

                function c(c) {
                    return function(f) {
                        return function(c) {
                            if (t) throw new TypeError("Generator is already executing.");
                            for (; i && (i = 0, c[0] && (u = 0)), u;) try {
                                if (t = 1, e && (o = 2 & c[0] ? e.return : c[0] ? e.throw || ((o = e.return) && o.call(e), 0) : e.next) && !(o = o.call(e, c[1])).done) return o;
                                switch (e = 0, o && (c = [2 & c[0], o.value]), c[0]) {
                                    case 0:
                                    case 1:
                                        o = c;
                                        break;
                                    case 4:
                                        return u.label++, {
                                            value: c[1],
                                            done: !1
                                        };
                                    case 5:
                                        u.label++, e = c[1], c = [0];
                                        continue;
                                    case 7:
                                        c = u.ops.pop(), u.trys.pop();
                                        continue;
                                    default:
                                        if (!(o = u.trys, (o = o.length > 0 && o[o.length - 1]) || 6 !== c[0] && 2 !== c[0])) {
                                            u = 0;
                                            continue
                                        }
                                        if (3 === c[0] && (!o || c[1] > o[0] && c[1] < o[3])) {
                                            u.label = c[1];
                                            break
                                        }
                                        if (6 === c[0] && u.label < o[1]) {
                                            u.label = o[1], o = c;
                                            break
                                        }
                                        if (o && u.label < o[2]) {
                                            u.label = o[2], u.ops.push(c);
                                            break
                                        }
                                        o[2] && u.ops.pop(), u.trys.pop();
                                        continue
                                }
                                c = r.call(n, u)
                            } catch (n) {
                                c = [6, n], e = 0
                            } finally {
                                t = o = 0
                            }
                            if (5 & c[0]) throw c[1];
                            return {
                                value: c[0] ? c[1] : void 0,
                                done: !0
                            }
                        }([c, f])
                    }
                }
            }

            function i(n) {
                var r = "function" == typeof Symbol && Symbol.iterator,
                    t = r && n[r],
                    e = 0;
                if (t) return t.call(n);
                if (n && "number" == typeof n.length) return {
                    next: function() {
                        return n && e >= n.length && (n = void 0), {
                            value: n && n[e++],
                            done: !n
                        }
                    }
                };
                throw new TypeError(r ? "Object is not iterable." : "Symbol.iterator is not defined.")
            }

            function u(n, r) {
                var t = "function" == typeof Symbol && n[Symbol.iterator];
                if (!t) return n;
                var e, o, i = t.call(n),
                    u = [];
                try {
                    for (;
                        (void 0 === r || r-- > 0) && !(e = i.next()).done;) u.push(e.value)
                } catch (n) {
                    o = {
                        error: n
                    }
                } finally {
                    try {
                        e && !e.done && (t = i.return) && t.call(i)
                    } finally {
                        if (o) throw o.error
                    }
                }
                return u
            }

            function c(n) {
                return n && n.Math == Math ? n : void 0
            }
            var f = "object" == typeof globalThis && c(globalThis) || "object" == typeof window && c(window) || "object" == typeof self && c(self) || "object" == typeof global && c(global) || function() {
                    return this
                }() || {},
                a = {};
            var s = /^(?:(\w+):)\/\/(?:(\w+)(?::(\w+)?)?@)([\w.-]+)(?::(\d+))?\/(.+)/;

            function v(n) {
                var r = s.exec(n);
                if (r) {
                    var t, e = u(r.slice(1), 6),
                        o = e[0],
                        i = e[1],
                        c = e[2],
                        v = void 0 === c ? "" : c,
                        l = e[3],
                        y = e[4],
                        d = void 0 === y ? "" : y,
                        p = "",
                        h = e[5],
                        b = h.split("/");
                    if (b.length > 1 && (p = b.slice(0, -1).join("/"), h = b.pop()), h) {
                        var w = h.match(/^\d+/);
                        w && (h = w[0])
                    }
                    return {
                        protocol: (t = {
                            host: l,
                            pass: v,
                            path: p,
                            projectId: h,
                            port: d,
                            protocol: o,
                            publicKey: i
                        }).protocol,
                        publicKey: t.publicKey || "",
                        pass: t.pass || "",
                        host: t.host,
                        port: t.port || "",
                        path: t.path || "",
                        projectId: t.projectId
                    }
                }! function(n) {
                    if (!("console" in f)) return n();
                    var r = f.console,
                        t = {},
                        e = Object.keys(a);
                    e.forEach((function(n) {
                        var e = a[n];
                        t[n] = r[n], r[n] = e
                    }));
                    try {
                        n()
                    } finally {
                        e.forEach((function(n) {
                            r[n] = t[n]
                        }))
                    }
                }((function() {
                    console.error("Invalid Sentry Dsn: ".concat(n))
                }))
            }

            function l(n, r) {
                return e = t({
                    sentry_key: n.publicKey,
                    sentry_version: "7"
                }, r && {
                    sentry_client: "".concat(r.name, "/").concat(r.version)
                }), Object.keys(e).map((function(n) {
                    return "".concat(encodeURIComponent(n), "=").concat(encodeURIComponent(e[n]))
                })).join("&");
                var e
            }

            function y(n, r) {
                var t;
                return function(n, r) {
                    var t, e, o = n[1];
                    try {
                        for (var u = i(o), c = u.next(); !c.done; c = u.next()) {
                            var f = c.value;
                            if (r(f, f[0].type)) return !0
                        }
                    } catch (n) {
                        t = {
                            error: n
                        }
                    } finally {
                        try {
                            c && !c.done && (e = u.return) && e.call(u)
                        } finally {
                            if (t) throw t.error
                        }
                    }
                }(n, (function(n, e) {
                    return r.includes(e) && (t = Array.isArray(n) ? n[1] : void 0), !!t
                })), t
            }
            for (var d in r.makeMultiplexedTransport = function(n, r) {
                    return function(c) {
                        var f = n(c),
                            a = new Map;

                        function s(r, i) {
                            var u = i ? "".concat(r, ":").concat(i) : r,
                                f = a.get(u);
                            if (!f) {
                                var s = v(r);
                                if (!s) return;
                                var d = function(n, r) {
                                    void 0 === r && (r = {});
                                    var t = "string" == typeof r ? r : r.tunnel,
                                        e = "string" != typeof r && r.t ? r.t.sdk : void 0;
                                    return t || "".concat(function(n) {
                                        return "".concat(function(n) {
                                            var r = n.protocol ? "".concat(n.protocol, ":") : "",
                                                t = n.port ? ":".concat(n.port) : "";
                                            return "".concat(r, "//").concat(n.host).concat(t).concat(n.path ? "/".concat(n.path) : "", "/api/")
                                        }(n)).concat(n.projectId, "/envelope/")
                                    }(n), "?").concat(l(n, e))
                                }(s, c.tunnel);
                                f = i ? function(n, r) {
                                    var i = this;
                                    return function(u) {
                                        var c = n(u);
                                        return t(t({}, c), {
                                            send: function(n) {
                                                return e(i, void 0, void 0, (function() {
                                                    var t;
                                                    return o(this, (function(e) {
                                                        return (t = y(n, ["event", "transaction", "profile", "replay_event"])) && (t.release = r), [2, c.send(n)]
                                                    }))
                                                }))
                                            }
                                        })
                                    }
                                }(n, i)(t(t({}, c), {
                                    url: d
                                })) : n(t(t({}, c), {
                                    url: d
                                })), a.set(u, f)
                            }
                            return [r, f]
                        }
                        return {
                            send: function(n) {
                                return e(this, void 0, void 0, (function() {
                                    function e(r) {
                                        var t = r && r.length ? r : ["event"];
                                        return y(n, t)
                                    }
                                    var i;
                                    return o(this, (function(o) {
                                        switch (o.label) {
                                            case 0:
                                                return 0 === (i = r({
                                                    envelope: n,
                                                    getEvent: e
                                                }).map((function(n) {
                                                    return "string" == typeof n ? s(n, void 0) : s(n.dsn, n.release)
                                                })).filter((function(n) {
                                                    return !!n
                                                }))).length && i.push(["", f]), [4, Promise.all(i.map((function(r) {
                                                    var e = u(r, 2),
                                                        o = e[0];
                                                    return e[1].send(function(n, r) {
                                                        return e = r ? t(t({}, n[0]), {
                                                            dsn: r
                                                        }) : n[0], void 0 === (o = n[1]) && (o = []), [e, o];
                                                        var e, o
                                                    }(n, o))
                                                })))];
                                            case 1:
                                                return [2, o.sent()[0]]
                                        }
                                    }))
                                }))
                            },
                            flush: function(n) {
                                return e(this, void 0, void 0, (function() {
                                    var r, t, e, c, s, v, l, y, d, p;
                                    return o(this, (function(o) {
                                        switch (o.label) {
                                            case 0:
                                                return [4, f.flush(n)];
                                            case 1:
                                                r = [o.sent()], o.label = 2;
                                            case 2:
                                                o.trys.push([2, 7, 8, 9]), t = i(a), e = t.next(), o.label = 3;
                                            case 3:
                                                return e.done ? [3, 6] : (c = u(e.value, 2), s = c[1], l = (v = r).push, [4, s.flush(n)]);
                                            case 4:
                                                l.apply(v, [o.sent()]), o.label = 5;
                                            case 5:
                                                return e = t.next(), [3, 3];
                                            case 6:
                                                return [3, 9];
                                            case 7:
                                                return y = o.sent(), d = {
                                                    error: y
                                                }, [3, 9];
                                            case 8:
                                                try {
                                                    e && !e.done && (p = t.return) && p.call(t)
                                                } finally {
                                                    if (d) throw d.error
                                                }
                                                return [7];
                                            case 9:
                                                return [2, r.every((function(n) {
                                                    return n
                                                }))]
                                        }
                                    }))
                                }))
                            }
                        }
                    }
                }, n.Sentry = n.Sentry || {}, r) Object.prototype.hasOwnProperty.call(r, d) && (n.Sentry[d] = r[d])
        }(window);
    </script>
    <!-- Sentry's moduleMetadataIntegration TODO: figure out why the minified version is not working https://github.com/getsentry/sentry-javascript/issues/13803#issuecomment-2400058476 -->
    <script>
        (function(__window) {
            var exports = {};

            function __values(o) {
                var s = typeof Symbol === "function" && Symbol.iterator,
                    m = s && o[s],
                    i = 0;
                if (m) return m.call(o);
                if (o && typeof o.length === "number") return {
                    next: function() {
                        if (o && i >= o.length) o = void 0;
                        return {
                            value: o && o[i++],
                            done: !o
                        };
                    }
                };
                throw new TypeError(s ? "Object is not iterable." : "Symbol.iterator is not defined.");
            }

            function __read(o, n) {
                var m = typeof Symbol === "function" && o[Symbol.iterator];
                if (!m) return o;
                var i = m.call(o),
                    r, ar = [],
                    e;
                try {
                    while ((n === void 0 || n-- > 0) && !(r = i.next()).done) ar.push(r.value);
                } catch (error) {
                    e = {
                        error: error
                    };
                } finally {
                    try {
                        if (r && !r.done && (m = i["return"])) m.call(i);
                    } finally {
                        if (e) throw e.error;
                    }
                }
                return ar;
            }

            function __spreadArray(to, from, pack) {
                if (pack || arguments.length === 2)
                    for (var i = 0, l = from.length, ar; i < l; i++) {
                        if (ar || !(i in from)) {
                            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
                            ar[i] = from[i];
                        }
                    }
                return to.concat(ar || Array.prototype.slice.call(from));
            }

            function isGlobalObj(obj) {
                return obj && obj.Math == Math ? obj : undefined;
            }
            var GLOBAL_OBJ = (typeof globalThis == 'object' && isGlobalObj(globalThis)) ||
                (typeof window == 'object' && isGlobalObj(window)) ||
                (typeof self == 'object' && isGlobalObj(self)) ||
                (typeof global == 'object' && isGlobalObj(global)) ||
                (function() {
                    return this;
                })() || {};

            function forEachEnvelopeItem(envelope, callback) {
                var e_1, _a;
                var envelopeItems = envelope[1];
                try {
                    for (var envelopeItems_1 = __values(envelopeItems), envelopeItems_1_1 = envelopeItems_1.next(); !envelopeItems_1_1.done; envelopeItems_1_1 = envelopeItems_1.next()) {
                        var envelopeItem = envelopeItems_1_1.value;
                        var envelopeItemType = envelopeItem[0].type;
                        var result = callback(envelopeItem, envelopeItemType);
                        if (result) {
                            return true;
                        }
                    }
                } catch (e_1_1) {
                    e_1 = {
                        error: e_1_1
                    };
                } finally {
                    try {
                        if (envelopeItems_1_1 && !envelopeItems_1_1.done && (_a = envelopeItems_1.return)) _a.call(envelopeItems_1);
                    } finally {
                        if (e_1) throw e_1.error;
                    }
                }
                return false;
            }

            function convertIntegrationFnToClass(name, fn) {
                return Object.assign(function ConvertedIntegration() {
                    var args = [];
                    for (var _i = 0; _i < arguments.length; _i++) {
                        args[_i] = arguments[_i];
                    }
                    return fn.apply(void 0, __spreadArray([], __read(args), false));
                }, {
                    id: name
                });
            }

            function defineIntegration(fn) {
                return fn;
            }
            var filenameMetadataMap = new Map();
            var parsedStacks = new Set();

            function ensureMetadataStacksAreParsed(parser) {
                var e_1, _a, e_2, _b;
                if (!GLOBAL_OBJ._sentryModuleMetadata) {
                    return;
                }
                try {
                    for (var _c = __values(Object.keys(GLOBAL_OBJ._sentryModuleMetadata)), _d = _c.next(); !_d.done; _d = _c.next()) {
                        var stack = _d.value;
                        var metadata = GLOBAL_OBJ._sentryModuleMetadata[stack];
                        if (parsedStacks.has(stack)) {
                            continue;
                        }
                        parsedStacks.add(stack);
                        var frames_1 = parser(stack);
                        try {
                            for (var _e = (e_2 = void 0, __values(frames_1.reverse())), _f = _e.next(); !_f.done; _f = _e.next()) {
                                var frame = _f.value;
                                if (frame.filename) {
                                    filenameMetadataMap.set(frame.filename, metadata);
                                    break;
                                }
                            }
                        } catch (e_2_1) {
                            e_2 = {
                                error: e_2_1
                            };
                        } finally {
                            try {
                                if (_f && !_f.done && (_b = _e.return)) _b.call(_e);
                            } finally {
                                if (e_2) throw e_2.error;
                            }
                        }
                    }
                } catch (e_1_1) {
                    e_1 = {
                        error: e_1_1
                    };
                } finally {
                    try {
                        if (_d && !_d.done && (_a = _c.return)) _a.call(_c);
                    } finally {
                        if (e_1) throw e_1.error;
                    }
                }
            }

            function getMetadataForUrl(parser, filename) {
                ensureMetadataStacksAreParsed(parser);
                return filenameMetadataMap.get(filename);
            }

            function addMetadataToStackFrames(parser, event) {
                try {
                    event.exception.values.forEach(function(exception) {
                        var e_3, _a;
                        if (!exception.stacktrace) {
                            return;
                        }
                        try {
                            for (var _b = __values(exception.stacktrace.frames || []), _c = _b.next(); !_c.done; _c = _b.next()) {
                                var frame = _c.value;
                                if (!frame.filename) {
                                    continue;
                                }
                                var metadata = getMetadataForUrl(parser, frame.filename);
                                if (metadata) {
                                    frame.module_metadata = metadata;
                                }
                            }
                        } catch (e_3_1) {
                            e_3 = {
                                error: e_3_1
                            };
                        } finally {
                            try {
                                if (_c && !_c.done && (_a = _b.return)) _a.call(_b);
                            } finally {
                                if (e_3) throw e_3.error;
                            }
                        }
                    });
                } catch (_) {}
            }

            function stripMetadataFromStackFrames(event) {
                try {
                    event.exception.values.forEach(function(exception) {
                        var e_4, _a;
                        if (!exception.stacktrace) {
                            return;
                        }
                        try {
                            for (var _b = __values(exception.stacktrace.frames || []), _c = _b.next(); !_c.done; _c = _b.next()) {
                                var frame = _c.value;
                                delete frame.module_metadata;
                            }
                        } catch (e_4_1) {
                            e_4 = {
                                error: e_4_1
                            };
                        } finally {
                            try {
                                if (_c && !_c.done && (_a = _b.return)) _a.call(_b);
                            } finally {
                                if (e_4) throw e_4.error;
                            }
                        }
                    });
                } catch (_) {}
            }

            var INTEGRATION_NAME = 'ModuleMetadata';
            var _moduleMetadataIntegration = (function() {
                return {
                    name: INTEGRATION_NAME,
                    setupOnce: function() {},
                    setup: function(client) {
                        if (typeof client.on !== 'function') {
                            return;
                        }
                        client.on('beforeEnvelope', function(envelope) {
                            forEachEnvelopeItem(envelope, function(item, type) {
                                if (type === 'event') {
                                    var event_1 = Array.isArray(item) ? item[1] : undefined;
                                    if (event_1) {
                                        stripMetadataFromStackFrames(event_1);
                                        item[1] = event_1;
                                    }
                                }
                            });
                        });
                    },
                    processEvent: function(event, _hint, client) {
                        var stackParser = client.getOptions().stackParser;
                        addMetadataToStackFrames(stackParser, event);
                        return event;
                    },
                };
            });
            var moduleMetadataIntegration = defineIntegration(_moduleMetadataIntegration);
            var ModuleMetadata = convertIntegrationFnToClass(INTEGRATION_NAME, moduleMetadataIntegration);
            exports.ModuleMetadata = ModuleMetadata;
            exports.moduleMetadataIntegration = moduleMetadataIntegration;
            __window.Sentry = __window.Sentry || {};
            __window.Sentry.Integrations = __window.Sentry.Integrations || {};
            for (var key in exports) {
                if (Object.prototype.hasOwnProperty.call(exports, key)) {
                    __window.Sentry.Integrations[key] = exports[key];
                    __window.Sentry[key] = exports[key];
                }
            }
        }(window));
    </script>


    <script>
        window.resolveExternalsRegistryPromise = null
        const externalRegistryPromise = new Promise((r) => window.resolveExternalsRegistryPromise = r)
        window.resolveExternalsRegistryModule = (name) => externalRegistryPromise.then(() => window.externalsRegistry[name].onload())
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/externals-registry.inline.cf90b611.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [9420], {
                42243: function() {
                    window.__imageClientApi__ = window.__imageClientApi__ || {
                        sdk: {}
                    };
                    const {
                        lodash: e,
                        react: o,
                        reactDOM: n,
                        imageClientApi: a,
                        clientSdk: i
                    } = window.externalsRegistry = {
                        lodash: {},
                        react: {},
                        reactDOM: {},
                        imageClientApi: {},
                        clientSdk: {}
                    };
                    a.loaded = new Promise((e => {
                        a.onload = e
                    })), e.loaded = new Promise((o => {
                        e.onload = o
                    })), i.loaded = new Promise((e => {
                        i.onload = e
                    })), window.ReactDOM || (window.reactDOMReference = window.ReactDOM = {
                        loading: !0
                    }), n.loaded = new Promise((e => {
                        n.onload = () => {
                            Object.assign(window.reactDOMReference || {}, window.ReactDOM, {
                                loading: !1
                            }), e()
                        }
                    })), window.React || (window.reactReference = window.React = {
                        loading: !0
                    }), o.loaded = new Promise((e => {
                        o.onload = () => {
                            Object.assign(window.reactReference || {}, window.React, {
                                loading: !1
                            }), e()
                        }
                    })), window.reactAndReactDOMLoaded = Promise.all([o.loaded, n.loaded]), window.resolveExternalsRegistryPromise()
                }
            },
            function(e) {
                var o;
                o = 42243, e(e.s = o)
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/externals-registry.inline.cf90b611.bundle.min.js.map
    </script>

    <!-- Add the rest of the ViewerModel -->
    <script type="application/json" id="wix-viewer-model">
        {
            "siteAssetsTestModuleVersion": "1.334.0",
            "requestUrl": "https:\/\/mx.andrewlord.com.au\/sample-quiz-page",
            "siteFeatures": ["assetsLoader", "businessLogger", "captcha", "clickHandlerRegistrar", "commonConfig", "componentsLoader", "componentsRegistry", "consentPolicy", "cyclicTabbing", "environmentWixCodeSdk", "environment", "lightbox", "locationWixCodeSdk", "navigationManager", "navigationPhases", "ooi", "pages", "panorama", "protectedPages", "renderer", "reporter", "routerFetch", "router", "scrollRestoration", "seoWixCodeSdk", "seo", "sessionManager", "siteMembersWixCodeSdk", "siteMembers", "siteScrollBlocker", "siteWixCodeSdk", "stores", "structureApi", "thunderboltInitializer", "tpaCommons", "translations", "usedPlatformApis", "warmupData", "windowMessageRegistrar", "windowWixCodeSdk", "wixCustomElementComponent", "wixEmbedsApi", "componentsReact", "platform"],
            "site": {
                "metaSiteId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b",
                "userId": "1092599e-5b99-4ebc-b2e1-09c6b2548fb9",
                "siteId": "1322daf8-0765-48a2-9c3e-ce1e6ba131c8",
                "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                "siteRevision": 69,
                "siteType": "UGC",
                "dc": "uw2-pub-1",
                "isResponsive": false,
                "editorName": "Unknown",
                "sessionId": "eb33d1fb-a670-41c3-8b39-2354ebf7af7b",
                "isSEO": false,
                "appNameForBiEvents": "thunderbolt"
            },
            "isMobileDevice": false,
            "viewMode": "desktop",
            "formFactor": "desktop",
            "deviceInfo": {
                "deviceClass": "Desktop"
            },
            "media": {
                "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                "mediaRootUrl": "https:\/\/static.wixstatic.com\/",
                "staticVideoUrl": "https:\/\/video.wixstatic.com\/"
            },
            "language": {
                "userLanguage": "en",
                "userLanguageResolutionMethod": "QueryParam",
                "siteLanguage": "en",
                "isMultilingualEnabled": false,
                "directionByLanguage": "ltr"
            },
            "mode": {
                "qa": false,
                "enableTestApi": false,
                "debug": false,
                "ssrIndicator": false,
                "ssrOnly": false,
                "siteAssetsFallback": "enable"
            },
            "siteFeaturesConfigs": {
                "assetsLoader": {
                    "isStylableComponentInStructure": true
                },
                "componentsRegistry": {
                    "librariesTopology": [{
                        "artifactId": "editor-elements",
                        "namespace": "wixui",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
                    }, {
                        "artifactId": "editor-elements",
                        "namespace": "dsgnsys",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
                    }]
                },
                "consentPolicy": {
                    "isWixSite": false
                },
                "dataWixCodeSdk": {
                    "gridAppId": "350633ae-2249-4037-a8e3-d4a6e9c4ea6e",
                    "environment": "LIVE",
                    "cloudDataUrlWithExternalBase": "https:\/\/mx.andrewlord.com.au\/_api\/cloud-data"
                },
                "elementorySupportWixCodeSdk": {
                    "baseUrl": "https:\/\/mx.andrewlord.com.au\/_api\/wix-code-public-dispatcher-ng\/siteview",
                    "relativePath": "\/\/_api\/wix-code-public-dispatcher-ng\/siteview",
                    "gridAppId": "350633ae-2249-4037-a8e3-d4a6e9c4ea6e",
                    "viewMode": "site",
                    "siteRevision": 69
                },
                "environmentWixCodeSdk": {},
                "environment": {
                    "editorType": "",
                    "domain": "andrewlord.com.au",
                    "previewMode": false
                },
                "fedopsWixCodeSdk": {
                    "isWixSite": false,
                    "shouldReportFedops": false
                },
                "lightbox": {
                    "pageIdToRouterFetchData": {}
                },
                "locationWixCodeSdk": {
                    "routersConfigMap": {},
                    "urlMappings": null
                },
                "onloadCompsBehaviors": {},
                "ooiTpaSharedConfig": {
                    "imageSpriteUrl": "https:\/\/static.parastorage.com\/services\/santa-resources\/resources\/viewer\/editorUI\/fonts.v19.png",
                    "wixStaticFontsLinks": ["https:\/\/static.parastorage.com\/services\/fonts-data\/dist\/6eedcb314db991b442fd.css?raw", "https:\/\/static.parastorage.com\/services\/fonts-data\/dist\/b90d5b337f79413a57d3.css?raw", ""]
                },
                "ooi": {
                    "ooiComponentsData": {
                        "0daa3702-0e20-48ca-ba15-ad380e00e6b6": {
                            "sentryDsn": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidget.bundle.min.js",
                            "widgetId": "0daa3702-0e20-48ca-ba15-ad380e00e6b6",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3": {
                            "sentryDsn": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidget.bundle.min.js",
                            "widgetId": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "847c2f5d-017f-499f-9c3e-069164fc116f": {
                            "sentryDsn": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidget.bundle.min.js",
                            "widgetId": "847c2f5d-017f-499f-9c3e-069164fc116f",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "a159b4d2-831b-410c-9e77-ec3f40c9cace": {
                            "sentryDsn": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidget.bundle.min.js",
                            "widgetId": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                            "isLoadable": false,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "ef4e59bd-625a-484e-9ba1-650d4aecf03b": {
                            "sentryDsn": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListViewerWidget.bundle.min.js",
                            "widgetId": "ef4e59bd-625a-484e-9ba1-650d4aecf03b",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "c88902a1-7fbf-4ff1-b19a-af39c48bc740": {
                            "sentryDsn": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidget.bundle.min.js",
                            "widgetId": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "20dcd94b-f847-4e24-b3f2-0d3894593f7a": {
                            "sentryDsn": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidget.bundle.min.js",
                            "widgetId": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "47a7e7bb-f412-4093-9155-1ff5adbc4dae": {
                            "sentryDsn": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideViewerWidget.bundle.min.js",
                            "widgetId": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "0a9f687f-7e00-4576-a8e1-9415844b8f44": {
                            "sentryDsn": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                            "widgetId": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "8cce2b9e-8549-46c7-8ad2-f75bf28534ac": {
                            "sentryDsn": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetViewerWidget.bundle.min.js",
                            "widgetId": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "a7dcdfcb-8abd-4008-af19-fed5fcd12b40": {
                            "sentryDsn": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidget.bundle.min.js",
                            "widgetId": "a7dcdfcb-8abd-4008-af19-fed5fcd12b40",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "83b2af08-c021-40c8-a3a5-b329a959ec2b": {
                            "sentryDsn": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                            "widgetId": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "e018cc55-7b1c-4500-a2e5-969f22c8a33a": {
                            "sentryDsn": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidget.bundle.min.js",
                            "widgetId": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "513a5d84-3ebb-4ca6-a5aa-83effd2123b9": {
                            "sentryDsn": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidget.bundle.min.js",
                            "widgetId": "513a5d84-3ebb-4ca6-a5aa-83effd2123b9",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "144097ea-fea0-498e-ade7-e6de40127106": {
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoViewerWidget.bundle.min.js",
                            "widgetId": "144097ea-fea0-498e-ade7-e6de40127106",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/vod-server.wix.com\/",
                            "isLoadable": false,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": false,
                            "isModuleFederated": false
                        },
                        "14dd1af6-3e02-63db-0ef2-72fbc7cc3136": {
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidget.bundle.min.js",
                            "widgetId": "14dd1af6-3e02-63db-0ef2-72fbc7cc3136",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "14dbefb9-3b7b-c4e9-53e8-766defd30587": {
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidget.bundle.min.js",
                            "widgetId": "14dbefb9-3b7b-c4e9-53e8-766defd30587",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd": {
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidget.bundle.min.js",
                            "widgetId": "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/",
                            "isLoadable": true,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": true,
                            "isModuleFederated": false
                        },
                        "31aadcb0-9add-42cb-9b21-72f41e91389b": {
                            "sentryDsn": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                            "componentUrl": "https:\/\/empty",
                            "widgetId": "31aadcb0-9add-42cb-9b21-72f41e91389b",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0",
                            "isLoadable": false,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": false,
                            "isModuleFederated": false
                        },
                        "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b": {
                            "sentryDsn": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                            "componentUrl": "https:\/\/empty",
                            "widgetId": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0",
                            "isLoadable": false,
                            "isServerBundled": false,
                            "loadStaticCssWithLink": false,
                            "isModuleFederated": false
                        }
                    },
                    "viewMode": "Site",
                    "formFactor": "Desktop",
                    "blogMobileComponentUrl": "undefinedfeed-page-mobile-viewer.bundle.min.js"
                },
                "protectedPages": {
                    "passwordProtected": {},
                    "publicPageIds": ["cnops", "zxida", "go423", "n134m", "ocnbi", "na1af", "ocnbj", "u25vn", "ocnbh", "ks1na", "y51j7", "tu64w", "n1pm5"],
                    "pageUriSeoToRouterPrefix": {}
                },
                "renderer": {
                    "disabledComponents": {}
                },
                "reporter": {
                    "userId": "1092599e-5b99-4ebc-b2e1-09c6b2548fb9",
                    "metaSiteId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b",
                    "isPremium": true,
                    "isFBServerEventsAppProvisioned": false,
                    "dynamicPagesIds": []
                },
                "routerFetch": {
                    "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                    "viewMode": "desktop"
                },
                "router": {
                    "baseUrl": "https:\/\/mx.andrewlord.com.au",
                    "mainPageId": "cnops",
                    "pagesMap": {
                        "cnops": {
                            "pageId": "cnops",
                            "title": "HOME",
                            "pageUriSEO": "home",
                            "pageJsonFileName": "109259_ba3c07dcd0c820e34fef0fa391a40829_64"
                        },
                        "zxida": {
                            "pageId": "zxida",
                            "title": "Payment Page",
                            "pageUriSEO": "challenge-payment",
                            "pageJsonFileName": "109259_40d46c827b41d8acb5845ddafa995ecb_64"
                        },
                        "go423": {
                            "pageId": "go423",
                            "title": "Thank You Page",
                            "pageUriSEO": "challenge-thanks",
                            "pageJsonFileName": "109259_6f66dbc79071be4e6401a3b6b53d9661_64"
                        },
                        "n134m": {
                            "pageId": "n134m",
                            "title": "Group Page",
                            "pageUriSEO": "group",
                            "pageJsonFileName": "109259_0ccaffa4e3615a10c718cca7188a4e53_64"
                        },
                        "ocnbi": {
                            "pageId": "ocnbi",
                            "title": "Custom Login",
                            "pageUriSEO": "popup-ocnbi",
                            "pageJsonFileName": "109259_bf9b6c759b8f2280e5056c78cc9b962f_64"
                        },
                        "na1af": {
                            "pageId": "na1af",
                            "title": "Program List",
                            "pageUriSEO": "challenges",
                            "pageJsonFileName": "109259_36182a57359dcfe4a36f7ad19cf8be8d_64"
                        },
                        "ocnbj": {
                            "pageId": "ocnbj",
                            "title": "STAY CONNECTED",
                            "pageUriSEO": "popup-ocnbj",
                            "pageJsonFileName": "109259_d6b6d88507a977905fde933b3fed2ba4_64"
                        },
                        "u25vn": {
                            "pageId": "u25vn",
                            "title": "QUIZ TRAININGS",
                            "pageUriSEO": "quiz-trainings",
                            "pageJsonFileName": "109259_14e315482a2d971b01d03ec023e2791d_67"
                        },
                        "ocnbh": {
                            "pageId": "ocnbh",
                            "title": "Custom Signup",
                            "pageUriSEO": "blank-ncx68",
                            "pageJsonFileName": "109259_0e7dfd90b532c1b23164979068c8cfb2_64"
                        },
                        "ks1na": {
                            "pageId": "ks1na",
                            "title": "Groups",
                            "pageUriSEO": "groups",
                            "pageJsonFileName": "109259_64705a3146117c71b09b45ad4b760e33_64"
                        },
                        "y51j7": {
                            "pageId": "y51j7",
                            "title": "Member Page",
                            "pageUriSEO": "members-area",
                            "pageJsonFileName": "109259_48caf4ef6ceaeb01dda68dd9b99affeb_64"
                        },
                        "tu64w": {
                            "pageId": "tu64w",
                            "title": "Participant Page",
                            "pageUriSEO": "participant-page",
                            "pageJsonFileName": "109259_0232b54115c4a4d333a919a6617ec04f_64"
                        },
                        "n1pm5": {
                            "pageId": "n1pm5",
                            "title": "Sample Quiz page",
                            "pageUriSEO": "sample-quiz-page",
                            "pageJsonFileName": "109259_90b343d9ad4ff50b67c95b6685ab562b_69"
                        },
                        "hnzro": {
                            "pageId": "hnzro",
                            "title": "Visitor Page",
                            "pageUriSEO": "challenge-page"
                        }
                    },
                    "disableStaticPagesUrlHierarchy": false,
                    "routes": {
                        ".\/home": {
                            "type": "Static",
                            "pageId": "cnops"
                        },
                        ".\/challenge-payment": {
                            "type": "Static",
                            "pageId": "zxida"
                        },
                        ".\/challenge-thanks": {
                            "type": "Static",
                            "pageId": "go423"
                        },
                        ".\/group": {
                            "type": "Static",
                            "pageId": "n134m"
                        },
                        ".\/popup-ocnbi": {
                            "type": "Static",
                            "pageId": "ocnbi"
                        },
                        ".\/challenges": {
                            "type": "Static",
                            "pageId": "na1af"
                        },
                        ".\/popup-ocnbj": {
                            "type": "Static",
                            "pageId": "ocnbj"
                        },
                        ".\/quiz-trainings": {
                            "type": "Static",
                            "pageId": "u25vn"
                        },
                        ".\/blank-ncx68": {
                            "type": "Static",
                            "pageId": "ocnbh"
                        },
                        ".\/groups": {
                            "type": "Static",
                            "pageId": "ks1na"
                        },
                        ".\/members-area": {
                            "type": "Static",
                            "pageId": "y51j7"
                        },
                        ".\/participant-page": {
                            "type": "Static",
                            "pageId": "tu64w"
                        },
                        ".\/sample-quiz-page": {
                            "type": "Static",
                            "pageId": "n1pm5"
                        },
                        ".\/challenge-page": {
                            "type": "Static",
                            "pageId": "hnzro"
                        },
                        ".\/": {
                            "type": "Static",
                            "pageId": "cnops"
                        }
                    },
                    "pageIdToPrefix": {},
                    "isWixSite": false
                },
                "searchWixCodeSdk": {
                    "language": "en"
                },
                "seo": {
                    "context": {
                        "siteName": "MX Life Academy",
                        "siteUrl": "https:\/\/mx.andrewlord.com.au",
                        "domain": "andrewlord.com.au",
                        "indexSite": false,
                        "defaultUrl": "https:\/\/mx.andrewlord.com.au\/sample-quiz-page",
                        "currLangIsOriginal": true,
                        "homePageTitle": "HOME",
                        "businessName": "MX Life Academy",
                        "businesLocale": "en-au",
                        "currency": "AUD",
                        "experiments": {
                            "specs.seo.EnableFaqSD": "false"
                        },
                        "platformAppsExperiments": {
                            "14409595-f076-4753-8303-9a86f9f71469": {
                                "specs.vod.iosHlsJsOverrideNative": "true",
                                "specs.vod.lazyLoadPlayer": "true"
                            },
                            "b976560c-3122-4351-878f-453f337b7245": {
                                "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                "specs.responsive-editor.NoMeasureInstall": "true",
                                "specs.membersAreaV2.SyncDataWithMenuItems": "true",
                                "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                "specs.membersArea.SplitInstallation": "false",
                                "specs.membersArea.AddWidgetsPluginsResilience": "true",
                                "specs.membersArea.installedWidgetsFromRoutes": "true",
                                "specs.membersAreaV2.UseSyncDeleteActions": "true",
                                "specs.membersArea.EnableSausageBar": "true",
                                "specs.membersArea.UninstallMASubApps": "true",
                                "specs.membersArea.UseAppDataForRoutes": "true",
                                "specs.membersArea.EnableUnifiedManager": "true",
                                "specs.profilePageBoB.VerticalDeletionRemoveRefreshApp": "true",
                                "specs.membersAreaV2.fasterMemberFetching": "true",
                                "specs.membersArea.OptimizeViewedMemberRolesFetch": "true"
                            },
                            "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": {
                                "specs.membersArea.enableAppData": "true",
                                "specs.membersArea.enableNotificationsOnV2": "true"
                            },
                            "2936472a-a1ed-4ae5-9f71-614313a9f4e7": {
                                "specs.programs.OOIEnableOptimisticUpdateForScheduled": "true",
                                "specs.ricos.newFormattingToolbar": "true",
                                "specs.programs.TestReplaceVendors": "false",
                                "specs.challenges.OOIRenderSeoMetatagsProgram": "true",
                                "specs.programs.ShowPaymentPageSettingsStudio": "false",
                                "specs.challenges.OOISeoImageUrl": "true",
                                "specs.ricos.newVideoVerticalAndSocialModals": "true",
                                "specs.programs.ShowPaymentPageSettings": "false",
                                "specs.programs.OOIEnableUndoButton": "true",
                                "specs.wixRicos.withWixStyles": "true",
                                "specs.programs.EnableBidirectionalAlignment": "true",
                                "specs.challenges.BMOwnerEditTemplate": "false",
                                "specs.programs.OOIStyleBP": "true",
                                "specs.ricos.removeUsmFromImageUrls": "true",
                                "specs.programs.OOIExtendedLimits": "true",
                                "specs.challenges.BMOwnerAutomations": "true",
                                "spec.programs.VisitorSettingsRedesign": "true",
                                "specs.programs.OOIEnablePremium": "true",
                                "specs.programs.OOIParticipantPageSeoMetaTags": "true",
                                "spec.programs.RemoveVisitorPageAutoRedirect": "true",
                                "specs.programs.EnableParticipantPage": "true",
                                "specs.challenges.WebMemberDripContent": "true",
                                "specs.programs.MALeaveChallengeContent": "false",
                                "specs.challenges.OOIHideStartDateSelection": "true",
                                "specs.programs.EnableEditorCustomPageInfo": "true",
                                "specs.ricos.fixedTabSize": "true",
                                "spec.programs.MASettingsRedesign": "true",
                                "spec.programs.HandleCustomizedUrlSegments": "true",
                                "spec.programs.UseRceNext": "false",
                                "specs.programs.OOIEnableLinksAsBlank": "false",
                                "spec.programs.ProgramListSettingsRedesign": "true",
                                "spec.programs.RedirectToParticipantPage": "true",
                                "specs.program.EnableSocialShareInCompleteModal": "true",
                                "specs.programs.OOISkipMAInstallationUsers": "true",
                                "specs.programs.EnableParticipantPageMigrations": "false",
                                "specs.programs.OOIEnableSettingsIndicators": "false",
                                "specs.ricos.encAutoImageUrls": "true",
                                "specs.programs.OOIAddWarmupGetChallenge": "true",
                                "specs.ricos.tiptapEditor": "false",
                                "specs.ricos.newSettingsModals": "true"
                            },
                            "14dbef06-cc42-5583-32a7-3abd44da4908": {
                                "specs.UouSubscriptionServiceUseApiGatewayClient": "true",
                                "specs.membersArea.DoNotWaitInstallNavigation": "true",
                                "specs.membersArea.UseMembersNgApiUpdate": "false",
                                "specs.media.MediaManager3": "true",
                                "specs.ricos.newFormattingToolbar": "true",
                                "specs.membersArea.HideMemberSortField": "true",
                                "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                "specs.membersArea.CheckUserContributorPermissions": "true",
                                "specs.membersArea.CheckIsAppActiveBeforeInstallV1": "true",
                                "specs.membersArea.HandleMembersNgUpdateDomainEvents": "true",
                                "specs.membersArea.UseGetMyMemberInMemberHandler": "true",
                                "specs.membersArea.EnableMembersAreaContextCheck": "true",
                                "specs.profileCardOOI.ReorganizeActionButtons": "true",
                                "specs.membersArea.SplitCustomPageTranslations": "true",
                                "specs.membersArea.AddSuspendedFilter": "true",
                                "specs.membersfollow.ActivityCounters": "true",
                                "specs.profileCardOOI.TitleForAll": "true",
                                "specs.membersArea.ShowPageRedirectNote": "true",
                                "specs.membersArea.UseCustomizeMemberPageCTA": "true",
                                "specs.membersArea.UseViewedMemberBlocked": "true",
                                "specs.membersArea.UseFollowersV3": "true",
                                "specs.ricos.newVideoVerticalAndSocialModals": "true",
                                "specs.myAccount.ShowBlockedMembersModalEmptyState": "true",
                                "specs.membersArea.enableTimeoutLogs": "false",
                                "specs.membersArea.GetRoutesUseGlobal": "true",
                                "specs.membersApi.UseProfilesApiForTitleAndCoverWrites": "true",
                                "specs.membersArea.ShowNewFFBorderSettings": "true",
                                "specs.membersArea.AddNotificationsIconOnV2": "true",
                                "specs.wixBlog.AddWriterModalUpgrade": "true",
                                "specs.membersArea.installationSourceOfTruth": "true",
                                "specs.wixRicos.withWixStyles": "true",
                                "specs.responsive-editor.NoMeasureInstall": "true",
                                "specs.membersArea.framelessEditorProfilePage": "true",
                                "specs.membersArea.SkipTemplateHandlerForSettings": "false",
                                "specs.membersArea.UsePopoverDynamicPositioning": "true",
                                "specs.membersArea.MemberHandlerUseMembersNgApi": "true",
                                "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                "specs.membersArea.UseIsPermittedOnAppData": "true",
                                "specs.membersArea.UseMembersNgApi": "true",
                                "specs.membersArea.ResolveMemberDuplication": "true",
                                "specs.wixBlog.BMCommentsDashboard": "false",
                                "specs.membersArea.DoNotCreateTeamMember": "false",
                                "specs.membersArea.NotificationsIconFixerOnV2": "true",
                                "specs.membersArea.ConsumeMembersPiiExchangeDomainEvents": "true",
                                "specs.membersArea.handleMobileComponentsDeletion": "true",
                                "specs.membersArea.PrivateMemberIndicator": "false",
                                "specs.membersAreaV2.enableCustomPages": "true",
                                "specs.membersArea.ShowMoreMembersWithBadge": "false",
                                "specs.membersAboutOOI.DisableButtonOnPublish": "true",
                                "specs.membersArea.AddRevisionField": "true",
                                "specs.profileCardOOI.JoinCommunityCTAUnderMoreActions": "true",
                                "specs.membersArea.EnableTpaPageLinksDataFixerForV2MenuItems": "true",
                                "specs.membersArea.EnableTpaPageLinksDataFixerForV3MenuItems": "true",
                                "specs.ident.SiteMembersSocialDisclaimer": "true",
                                "specs.membersAbout.EnablePostListInSEO": "true",
                                "specs.ricos.removeUsmFromImageUrls": "true",
                                "specs.membersArea.UseQueryMembersTextSearch": "true",
                                "specs.membersAreaV2.EnablePageInfoPanelCustomPage": "false",
                                "specs.myAccount.showBlockedMembersModalRedesign": "true",
                                "specs.membersArea.MetaSiteSpecialConsumerV2": "true",
                                "specs.membersAboutOOI.EnableMobileTitleSetting": "true",
                                "specs.membersAboutOOI.EnableDesignTabResetButtonPerPage": "true",
                                "specs.membersArea.HideSuspendedLabelForNonOwners": "true",
                                "specs.membersArea.SortByNumbersInElastic": "true",
                                "specs.membersAboutOOI.EnableMobileDesignTabSectionHeaders": "true",
                                "specs.myAccount.ShowPrivacySettingsMessageForSiteOwners": "true",
                                "specs.membersArea.MembersApiUseMembersNgApiQueryForSortBy": "true",
                                "specs.membersArea.UninstallMASubApps": "true",
                                "specs.membersArea.UseAppDataForRoutes": "true",
                                "specs.membersArea.CreateMissingMember": "true",
                                "specs.membersArea.EnableMenusDataFixer": "true",
                                "specs.members.usePlatformizedServicesForUpdate": "true",
                                "specs.wixBlog.MAHideWriterActionsInViewer": "true",
                                "specs.membersArea.EnableVerticalProfileInstallFixer": "true",
                                "specs.membersArea.HideSuspendedLabelForNonOwnersFFBox": "true",
                                "specs.membersArea.EnableMemberPagePermissions": "false",
                                "specs.ricos.fixedTabSize": "true",
                                "specs.profileCardOOI.EnableProfileDetailsEdit": "true",
                                "specs.membersAboutOOI.EnableButtonBorderSettings": "true",
                                "specs.membersArea.UseIsPermittedOnMediaCredentials": "true",
                                "specs.membersArea.fixLoginBarResponsiveLayout": "true",
                                "specs.membersArea.EnableV2SilentInstall": "true",
                                "specs.membersAreaV3.ReAddPageWorkaround": "true",
                                "specs.membersArea.OptimizeVerticalDeletion": "true",
                                "specs.membersArea.UseGetOrCreateMemberV2": "true",
                                "specs.membersAboutOOI.EnablePluralStatisticFix": "true",
                                "specs.ricos.encAutoImageUrls": "true",
                                "specs.ricos.tiptapEditor": "false",
                                "specs.membersArea.migrateToV2": "false",
                                "specs.membersArea.ClearSettings": "true",
                                "specs.ricos.newSettingsModals": "true",
                                "specs.membersArea.CallGetMyMemberForCreatingMember": "true"
                            },
                            "14cffd81-5215-0a7f-22f8-074b0e2401fb": {
                                "specs.UouSubscriptionServiceUseApiGatewayClient": "true",
                                "specs.membersArea.DoNotWaitInstallNavigation": "true",
                                "specs.membersArea.UseMembersNgApiUpdate": "false",
                                "specs.media.MediaManager3": "true",
                                "specs.membersArea.HideMemberSortField": "true",
                                "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                "specs.membersArea.CheckUserContributorPermissions": "true",
                                "specs.membersArea.CheckIsAppActiveBeforeInstallV1": "true",
                                "specs.membersArea.HandleMembersNgUpdateDomainEvents": "true",
                                "specs.membersArea.UseGetMyMemberInMemberHandler": "true",
                                "specs.membersArea.EnableMembersAreaContextCheck": "true",
                                "specs.profileCardOOI.ReorganizeActionButtons": "true",
                                "specs.membersArea.SplitCustomPageTranslations": "true",
                                "specs.membersArea.AddSuspendedFilter": "true",
                                "specs.membersfollow.ActivityCounters": "true",
                                "specs.profileCardOOI.TitleForAll": "true",
                                "specs.membersArea.ShowPageRedirectNote": "true",
                                "specs.membersArea.UseCustomizeMemberPageCTA": "true",
                                "specs.membersArea.ChangeLoginInfo": "true",
                                "specs.membersArea.UseViewedMemberBlocked": "true",
                                "specs.membersArea.UseFollowersV3": "true",
                                "specs.myAccount.UseNewSettings": "true",
                                "specs.myAccount.ShowBlockedMembersModalEmptyState": "true",
                                "specs.membersArea.enableTimeoutLogs": "false",
                                "specs.membersArea.GetRoutesUseGlobal": "true",
                                "specs.membersApi.UseProfilesApiForTitleAndCoverWrites": "true",
                                "specs.membersArea.ShowNewFFBorderSettings": "true",
                                "specs.membersArea.AddNotificationsIconOnV2": "true",
                                "specs.wixBlog.AddWriterModalUpgrade": "true",
                                "specs.membersArea.installationSourceOfTruth": "true",
                                "specs.responsive-editor.NoMeasureInstall": "true",
                                "specs.membersArea.SkipTemplateHandlerForSettings": "false",
                                "specs.membersArea.UsePopoverDynamicPositioning": "true",
                                "specs.membersArea.MemberHandlerUseMembersNgApi": "true",
                                "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                "specs.membersArea.UseIsPermittedOnAppData": "true",
                                "specs.membersArea.UseMembersNgApi": "true",
                                "specs.membersArea.ResolveMemberDuplication": "true",
                                "specs.wixBlog.BMCommentsDashboard": "false",
                                "specs.membersArea.DoNotCreateTeamMember": "false",
                                "specs.membersArea.NotificationsIconFixerOnV2": "true",
                                "specs.membersArea.ConsumeMembersPiiExchangeDomainEvents": "true",
                                "specs.membersArea.handleMobileComponentsDeletion": "true",
                                "specs.membersArea.PrivateMemberIndicator": "false",
                                "specs.membersAreaV2.enableCustomPages": "true",
                                "specs.membersArea.ShowMoreMembersWithBadge": "false",
                                "specs.membersArea.AddRevisionField": "true",
                                "specs.profileCardOOI.JoinCommunityCTAUnderMoreActions": "true",
                                "specs.membersArea.EnableTpaPageLinksDataFixerForV2MenuItems": "true",
                                "specs.membersArea.EnableTpaPageLinksDataFixerForV3MenuItems": "true",
                                "specs.ident.SiteMembersSocialDisclaimer": "true",
                                "specs.membersArea.UseQueryMembersTextSearch": "true",
                                "specs.membersAreaV2.EnablePageInfoPanelCustomPage": "false",
                                "specs.myAccount.showBlockedMembersModalRedesign": "true",
                                "specs.membersArea.MetaSiteSpecialConsumerV2": "true",
                                "specs.myAccount.EnableUrlEditNote": "true",
                                "specs.membersArea.HideSuspendedLabelForNonOwners": "true",
                                "specs.myAccount.ShowButtonTextSetting": "true",
                                "specs.membersArea.SortByNumbersInElastic": "true",
                                "specs.myAccount.ShowPrivacySettingsMessageForSiteOwners": "true",
                                "specs.membersArea.MembersApiUseMembersNgApiQueryForSortBy": "true",
                                "specs.membersArea.UninstallMASubApps": "true",
                                "specs.membersArea.UseAppDataForRoutes": "true",
                                "specs.membersArea.CreateMissingMember": "true",
                                "specs.membersArea.EnableMenusDataFixer": "true",
                                "specs.members.usePlatformizedServicesForUpdate": "true",
                                "specs.wixBlog.MAHideWriterActionsInViewer": "true",
                                "specs.membersArea.EnableVerticalProfileInstallFixer": "true",
                                "specs.membersArea.HideSuspendedLabelForNonOwnersFFBox": "true",
                                "specs.membersArea.EnableMemberPagePermissions": "false",
                                "specs.profileCardOOI.EnableProfileDetailsEdit": "true",
                                "specs.membersArea.UseIsPermittedOnMediaCredentials": "true",
                                "specs.membersArea.fixLoginBarResponsiveLayout": "true",
                                "specs.membersArea.EnableV2SilentInstall": "true",
                                "specs.membersAreaV3.ReAddPageWorkaround": "true",
                                "specs.membersArea.OptimizeVerticalDeletion": "true",
                                "specs.myAccount.EnableDesignTabResetButtonPerPage": "true",
                                "specs.membersArea.framelessEditorMyAccount": "true",
                                "specs.membersArea.UseGetOrCreateMemberV2": "true",
                                "specs.membersArea.migrateToV2": "false",
                                "specs.membersArea.ClearSettings": "true",
                                "specs.membersArea.CallGetMyMemberForCreatingMember": "true",
                                "specs.myAccount.AddressLine2": "true"
                            },
                            "148c2287-c669-d849-d153-463c7486a694": {
                                "specs.groups.UpdateSidebarLayout": "false",
                                "specs.ricos.newFormattingToolbar": "true",
                                "specs.groups.EnableGroupsInMA": "true",
                                "specs.groups.UpdatedMemberPermissions": "true",
                                "specs.ricos.newVideoVerticalAndSocialModals": "true",
                                "specs.groups.cssPBI": "true",
                                "specs.groups.SEO-subtitle": "true",
                                "specs.wixRicos.withWixStyles": "true",
                                "spec.groups.events-by-uou": "false",
                                "specs.groups.GroupsInMAMigration": "true",
                                "specs.ricos.removeUsmFromImageUrls": "true",
                                "specs.groups.GroupPrivacyLabel": "true",
                                "specs.groups.MemberOnboarding": "false",
                                "specs.groups.EnableReactionsOnComment": "true",
                                "specs.groups.EnablePostTitle": "false",
                                "specs.ricos.fixedTabSize": "true",
                                "specs.groups.ExtendedMobileDesignSettings": "true",
                                "specs.groups.GroupSearch": "true",
                                "specs.ricos.encAutoImageUrls": "true",
                                "specs.ricos.tiptapEditor": "false",
                                "specs.ricos.newSettingsModals": "true"
                            },
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": {
                                "specs.forms.EnableFormsInBlog": "true"
                            },
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                "specs.wixCode.LoadWithImportAMDModule": "true",
                                "specs.wixCode.LoadNamespacesPerPage": "false",
                                "specs.wixcode.ViewerExperimentOwnerScopeTest": "true",
                                "specs.wixCode.resolveMissingPlatformNamespaces": "false",
                                "specs.wixcode.ViewerExperimentTest": "false"
                            },
                            "14ce28f7-7eb0-3745-22f8-074b0e2401fb": {
                                "specs.UouSubscriptionServiceUseApiGatewayClient": "true",
                                "specs.membersArea.DoNotWaitInstallNavigation": "true",
                                "specs.membersArea.UseMembersNgApiUpdate": "false",
                                "specs.media.MediaManager3": "true",
                                "specs.membersArea.HideMemberSortField": "true",
                                "specs.profileCardOOI.MakeProfileCardRemovableInNewMA": "true",
                                "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                "specs.membersArea.CheckUserContributorPermissions": "true",
                                "specs.membersArea.CheckIsAppActiveBeforeInstallV1": "true",
                                "specs.membersArea.HandleMembersNgUpdateDomainEvents": "true",
                                "specs.membersArea.UseGetMyMemberInMemberHandler": "true",
                                "specs.membersArea.EnableMembersAreaContextCheck": "true",
                                "specs.profileCardOOI.ReorganizeActionButtons": "true",
                                "specs.profileCardOOI.NewResetSettings": "true",
                                "specs.membersArea.SplitCustomPageTranslations": "true",
                                "specs.membersArea.AddSuspendedFilter": "true",
                                "specs.membersfollow.ActivityCounters": "true",
                                "specs.profileCardOOI.TitleForAll": "true",
                                "specs.membersArea.ShowPageRedirectNote": "true",
                                "specs.membersArea.UseCustomizeMemberPageCTA": "true",
                                "specs.membersArea.UseViewedMemberBlocked": "true",
                                "specs.membersArea.UseFollowersV3": "true",
                                "specs.myAccount.ShowBlockedMembersModalEmptyState": "true",
                                "specs.membersArea.enableTimeoutLogs": "false",
                                "specs.membersArea.GetRoutesUseGlobal": "true",
                                "specs.membersApi.UseProfilesApiForTitleAndCoverWrites": "true",
                                "specs.profileCardOOI.UseMiddlewareForGlobalSettingsGetter": "true",
                                "specs.membersArea.ShowNewFFBorderSettings": "true",
                                "specs.membersArea.AddNotificationsIconOnV2": "true",
                                "specs.wixBlog.AddWriterModalUpgrade": "true",
                                "specs.membersArea.installationSourceOfTruth": "true",
                                "specs.responsive-editor.NoMeasureInstall": "true",
                                "specs.membersArea.SkipTemplateHandlerForSettings": "false",
                                "specs.membersArea.UsePopoverDynamicPositioning": "true",
                                "specs.membersArea.MemberHandlerUseMembersNgApi": "true",
                                "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                "specs.profileCardOOI.UseMiddlewareForMemberGetter": "true",
                                "specs.membersArea.UseIsPermittedOnAppData": "true",
                                "specs.membersArea.UseMembersNgApi": "true",
                                "specs.membersArea.ResolveMemberDuplication": "true",
                                "specs.wixBlog.BMCommentsDashboard": "false",
                                "specs.membersArea.DoNotCreateTeamMember": "false",
                                "specs.membersArea.NotificationsIconFixerOnV2": "true",
                                "specs.membersArea.ConsumeMembersPiiExchangeDomainEvents": "true",
                                "specs.membersArea.handleMobileComponentsDeletion": "true",
                                "specs.membersArea.PrivateMemberIndicator": "false",
                                "specs.membersAreaV2.enableCustomPages": "true",
                                "specs.membersArea.ShowMoreMembersWithBadge": "false",
                                "specs.membersArea.framelessEditorPW": "true",
                                "specs.membersArea.AddRevisionField": "true",
                                "specs.profileCardOOI.JoinCommunityCTAUnderMoreActions": "true",
                                "specs.membersArea.EnableTpaPageLinksDataFixerForV2MenuItems": "true",
                                "specs.membersArea.EnableTpaPageLinksDataFixerForV3MenuItems": "true",
                                "specs.ident.SiteMembersSocialDisclaimer": "true",
                                "specs.membersArea.UseQueryMembersTextSearch": "true",
                                "specs.membersAreaV2.EnablePageInfoPanelCustomPage": "false",
                                "specs.profileCardOOI.UseBlockedCheckFollowButton": "true",
                                "specs.myAccount.showBlockedMembersModalRedesign": "true",
                                "specs.membersArea.MetaSiteSpecialConsumerV2": "true",
                                "specs.membersArea.HideSuspendedLabelForNonOwners": "true",
                                "specs.membersArea.SortByNumbersInElastic": "true",
                                "specs.myAccount.ShowPrivacySettingsMessageForSiteOwners": "true",
                                "specs.membersArea.MembersApiUseMembersNgApiQueryForSortBy": "true",
                                "specs.membersArea.UninstallMASubApps": "true",
                                "specs.membersArea.UseAppDataForRoutes": "true",
                                "specs.membersArea.CreateMissingMember": "true",
                                "specs.membersArea.EnableMenusDataFixer": "true",
                                "specs.members.usePlatformizedServicesForUpdate": "true",
                                "specs.wixBlog.MAHideWriterActionsInViewer": "true",
                                "specs.membersArea.EnableVerticalProfileInstallFixer": "true",
                                "specs.membersArea.HideSuspendedLabelForNonOwnersFFBox": "true",
                                "specs.membersArea.EnableMemberPagePermissions": "false",
                                "specs.profileCardOOI.EnableProfileDetailsEdit": "true",
                                "specs.membersArea.UseIsPermittedOnMediaCredentials": "true",
                                "specs.profileCardOOI.UseMiddlewareForRolesMapGetter": "true",
                                "specs.membersArea.fixLoginBarResponsiveLayout": "true",
                                "specs.membersArea.EnableV2SilentInstall": "true",
                                "specs.membersAreaV3.ReAddPageWorkaround": "true",
                                "specs.membersArea.OptimizeVerticalDeletion": "true",
                                "specs.membersArea.UseGetOrCreateMemberV2": "true",
                                "specs.membersArea.migrateToV2": "false",
                                "specs.membersArea.ClearSettings": "true",
                                "specs.membersArea.CallGetMyMemberForCreatingMember": "true"
                            }
                        }
                    },
                    "userPatterns": [],
                    "metaTags": [{
                        "name": "fb_admins_meta_tag",
                        "value": "",
                        "property": false
                    }],
                    "customHeadTags": "",
                    "isInSEO": false,
                    "hasBlogAmp": false,
                    "mainPageId": "cnops"
                },
                "sessionManager": {
                    "sessionModel": {},
                    "appsInstances": {},
                    "dynamicModelApiUrl": "https:\/\/mx.andrewlord.com.au\/_api\/v2\/dynamicmodel",
                    "accessTokensApiUrl": "https:\/\/mx.andrewlord.com.au\/_api\/v1\/access-tokens",
                    "expiryTimeoutOverride": 0,
                    "isRunningInDifferentSiteContext": false
                },
                "siteMembersWixCodeSdk": {
                    "isPreviewMode": false,
                    "isEditMode": false,
                    "smToken": "",
                    "smcollectionId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b"
                },
                "siteMembers": {
                    "collectionExposure": "Public",
                    "smcollectionId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b",
                    "smToken": "",
                    "protectedHomepage": false,
                    "isTemplate": false,
                    "loginSocialBarOnSite": true,
                    "isCommunityInstalled": false,
                    "memberInfoAppId": 3465
                },
                "siteWixCodeSdk": {
                    "siteDisplayName": "MX Life Academy",
                    "siteRevision": 69,
                    "regionalSettings": "en-au",
                    "language": "en",
                    "prefetchPageResourcesEnabled": false,
                    "currency": "AUD",
                    "mainPageId": "cnops",
                    "pageIdToPrefix": {},
                    "routerPrefixes": {},
                    "timezone": "Australia\/Sydney",
                    "pageIdToTitle": {
                        "cnops": "HOME",
                        "zxida": "Payment Page",
                        "go423": "Thank You Page",
                        "n134m": "Group Page",
                        "ocnbi": "Custom Login",
                        "na1af": "Program List",
                        "ocnbj": "STAY CONNECTED",
                        "u25vn": "QUIZ TRAININGS",
                        "ocnbh": "Custom Signup",
                        "ks1na": "Groups",
                        "y51j7": "Member Page",
                        "tu64w": "Participant Page",
                        "n1pm5": "Sample Quiz page",
                        "hnzro": "Visitor Page"
                    },
                    "urlMappings": null,
                    "viewMode": "Site"
                },
                "tpaCommons": {
                    "widgetsClientSpecMapData": {
                        "14517f3f-ffc5-eced-f592-980aaa0bbb5c": {
                            "widgetUrl": "https:\/\/engage.wixapps.net\/chat-widget-server\/renderChatWidget\/index",
                            "tpaWidgetId": "wix_visitors",
                            "appPage": {},
                            "applicationId": 8,
                            "appDefinitionName": "Wix Chat",
                            "appDefinitionId": "14517e1a-3ff0-af98-408e-2bd6953c36a2",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "0daa3702-0e20-48ca-ba15-ad380e00e6b6": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/PaymentPage",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/PaymentPage",
                            "tpaWidgetId": "",
                            "appPage": {
                                "id": "Challenge Payment",
                                "name": "Challenge Payment",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs",
                            "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ParticipantPage",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ParticipantPage",
                            "tpaWidgetId": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                            "appPage": {
                                "id": "Participant Page",
                                "name": "Participant Page",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs",
                            "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "847c2f5d-017f-499f-9c3e-069164fc116f": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesPage",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesPage",
                            "appPage": {
                                "id": "challenge_page",
                                "name": "Challenge Page",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs",
                            "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "a159b4d2-831b-410c-9e77-ec3f40c9cace": {
                            "widgetUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/editor\/ThankYouPage.html",
                            "mobileUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/editor\/ThankYouPage.html",
                            "tpaWidgetId": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                            "appPage": {
                                "id": "Thank You Page",
                                "name": "Thank You Page",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": true
                            },
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs",
                            "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "ef4e59bd-625a-484e-9ba1-650d4aecf03b": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesList",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesList",
                            "tpaWidgetId": "achievements_dev",
                            "appPage": {},
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs",
                            "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "c88902a1-7fbf-4ff1-b19a-af39c48bc740": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/MyPrograms",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/MyPrograms",
                            "tpaWidgetId": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                            "appPage": {
                                "id": "My Programs",
                                "name": "My Programs",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs",
                            "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "20dcd94b-f847-4e24-b3f2-0d3894593f7a": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesListPage",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesListPage",
                            "tpaWidgetId": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                            "appPage": {
                                "id": "Challenges",
                                "name": "Challenges",
                                "defaultPage": "",
                                "hidden": false,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs",
                            "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "141995eb-c700-8487-6366-a482f7432e2b": {
                            "widgetUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                            "mobileUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                            "tpaWidgetId": "shoutout_feed",
                            "appPage": {},
                            "applicationId": 23,
                            "appDefinitionName": "ShoutOut (Legacy)",
                            "appDefinitionId": "135c3d92-0fea-1f9d-2ba5-2a1dfb04297e",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "47a7e7bb-f412-4093-9155-1ff5adbc4dae": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/SideBySide",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/SideBySide",
                            "tpaWidgetId": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                            "appPage": {},
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups",
                            "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "0a9f687f-7e00-4576-a8e1-9415844b8f44": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                            "tpaWidgetId": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                            "appPage": {},
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups",
                            "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "8cce2b9e-8549-46c7-8ad2-f75bf28534ac": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/FeedWidget",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/FeedWidget",
                            "tpaWidgetId": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                            "appPage": {},
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups",
                            "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "a7dcdfcb-8abd-4008-af19-fed5fcd12b40": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Groups",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Groups",
                            "appPage": {
                                "id": "groups",
                                "name": "Groups",
                                "defaultPage": "",
                                "hidden": false,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups",
                            "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "83b2af08-c021-40c8-a3a5-b329a959ec2b": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                            "tpaWidgetId": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                            "appPage": {},
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups",
                            "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "e018cc55-7b1c-4500-a2e5-969f22c8a33a": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/MembersAreaGroups",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/MembersAreaGroups",
                            "tpaWidgetId": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                            "appPage": {
                                "id": "My Groups",
                                "name": "My Groups",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups",
                            "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "513a5d84-3ebb-4ca6-a5aa-83effd2123b9": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Group",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Group",
                            "appPage": {
                                "id": "group",
                                "name": "Group",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 2,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups",
                            "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "144097ea-fea0-498e-ade7-e6de40127106": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/wix-vod-widget\/1.4341.0\/WixVideo",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/wix-vod-widget\/1.4341.0\/WixVideo",
                            "tpaWidgetId": "wix_vod_develop",
                            "appPage": {},
                            "applicationId": 1625,
                            "appDefinitionName": "Wix Video",
                            "appDefinitionId": "14409595-f076-4753-8303-9a86f9f71469",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "2f6c5608-393f-4b15-bfd8-d4e15396787a": {
                            "widgetUrl": "https:\/\/editor.wix.com\/",
                            "appPage": {},
                            "applicationId": 3069,
                            "appDefinitionName": "Member Page",
                            "appDefinitionId": "b976560c-3122-4351-878f-453f337b7245",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "5ab312ae-0cf7-4093-bbf5-5e4d3690151c": {
                            "widgetUrl": "https:\/\/editor.wix.com\/",
                            "appPage": {},
                            "applicationId": 3069,
                            "appDefinitionName": "Member Page",
                            "appDefinitionId": "b976560c-3122-4351-878f-453f337b7245",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "31aadcb0-9add-42cb-9b21-72f41e91389b": {
                            "widgetUrl": "\/",
                            "tpaWidgetId": "31aadcb0-9add-42cb-9b21-72f41e91389b",
                            "appPage": {
                                "id": "member_settings_page",
                                "name": "member_settings_page",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 3069,
                            "appDefinitionName": "Member Page",
                            "appDefinitionId": "b976560c-3122-4351-878f-453f337b7245",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b": {
                            "widgetUrl": "\/",
                            "tpaWidgetId": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b",
                            "appPage": {
                                "id": "member_page",
                                "name": "member_page",
                                "defaultPage": "",
                                "hidden": true,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 3069,
                            "appDefinitionName": "Member Page",
                            "appDefinitionId": "b976560c-3122-4351-878f-453f337b7245",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "a26fd26a-3dd9-42ca-b381-326a9c143e38": {
                            "widgetUrl": "https:\/\/editor.wix.com\/",
                            "appPage": {},
                            "applicationId": 3069,
                            "appDefinitionName": "Member Page",
                            "appDefinitionId": "b976560c-3122-4351-878f-453f337b7245",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "596a6688-3ad7-46f7-bb9c-00023225876d": {
                            "widgetUrl": "https:\/\/editor.wix.com\/",
                            "appPage": {},
                            "applicationId": 3069,
                            "appDefinitionName": "Member Page",
                            "appDefinitionId": "b976560c-3122-4351-878f-453f337b7245",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "14dd1af6-3e02-63db-0ef2-72fbc7cc3136": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/my-account-ooi\/1.2387.0\/MyAccount",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/my-account-ooi\/1.2387.0\/MyAccount",
                            "appPage": {
                                "id": "member_info",
                                "name": "My Account",
                                "defaultPage": "",
                                "hidden": false,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 3465,
                            "appDefinitionName": "Member Account Info",
                            "appDefinitionId": "14cffd81-5215-0a7f-22f8-074b0e2401fb",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "14f2595a-a352-3ff1-9b3c-4d21861fe58f": {
                            "widgetUrl": "https:\/\/notifications-app.wixapps.net\/communities-notifications-app\/app",
                            "mobileUrl": "https:\/\/notifications-app.wixapps.net\/communities-notifications-app\/app",
                            "appPage": {
                                "id": "notifications_app",
                                "name": "Notifications",
                                "defaultPage": "",
                                "hidden": false,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": false,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 3666,
                            "appDefinitionName": "Wix Members Area Notifications",
                            "appDefinitionId": "14f25924-5664-31b2-9568-f9c5ed98c9b1",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "14dbefb9-3b7b-c4e9-53e8-766defd30587": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/members-about-ooi\/1.2279.0\/Profile",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/members-about-ooi\/1.2279.0\/Profile",
                            "appPage": {
                                "id": "about",
                                "name": "Profile",
                                "defaultPage": "",
                                "hidden": false,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": false,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 4121,
                            "appDefinitionName": "Members About",
                            "appDefinitionId": "14dbef06-cc42-5583-32a7-3abd44da4908",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/profile-card-tpa-ooi\/1.2548.0\/ProfileCard",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/profile-card-tpa-ooi\/1.2548.0\/ProfileCard",
                            "tpaWidgetId": "profile",
                            "appPage": {},
                            "applicationId": 4323,
                            "appDefinitionName": "Profile Card",
                            "appDefinitionId": "14ce28f7-7eb0-3745-22f8-074b0e2401fb",
                            "isWixTPA": true,
                            "allowScrolling": false
                        }
                    },
                    "appsClientSpecMapData": {
                        "14517e1a-3ff0-af98-408e-2bd6953c36a2": {
                            "applicationId": 8,
                            "widgets": {
                                "14517f3f-ffc5-eced-f592-980aaa0bbb5c": {
                                    "widgetUrl": "https:\/\/engage.wixapps.net\/chat-widget-server\/renderChatWidget\/index",
                                    "widgetId": "14517f3f-ffc5-eced-f592-980aaa0bbb5c",
                                    "refreshOnWidthChange": true,
                                    "gluedOptions": {
                                        "placement": "BOTTOM_RIGHT",
                                        "verticalMargin": 0,
                                        "horizontalMargin": 0
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": true,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "iframeWithPlatform": true
                                    },
                                    "tpaWidgetId": "wix_visitors",
                                    "default": true
                                }
                            },
                            "appDefinitionName": "Wix Chat",
                            "appFields": {
                                "platform": {
                                    "optionalApplication": true,
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/chat-worker\/1.1239.0\/viewer-script.bundle.min.js",
                                    "margins": {
                                        "desktop": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "tablet": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "mobile": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        }
                                    },
                                    "height": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/chat-worker\/1.1239.0\/editor-script.bundle.min.js",
                                    "isStretched": {},
                                    "docking": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "errorReporting": {},
                                    "width": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewer": {
                                        "errorReporting": {}
                                    }
                                },
                                "mostPopularPackage": "Sales",
                                "premiumBundle": {
                                    "parentAppSlug": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9",
                                    "parentAppId": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9"
                                },
                                "featuresForNewPackagePicker": [{
                                    "forPackages": [{
                                        "value": "50",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "150",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "Unlimited",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Professional"
                                    }, {
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Sales"
                                    }, {
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }, {
                                    "forPackages": [{
                                        "value": "true",
                                        "packageId": "Teams"
                                    }]
                                }],
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "2936472a-a1ed-4ae5-9f71-614313a9f4e7": {
                            "applicationId": 9,
                            "widgets": {
                                "0daa3702-0e20-48ca-ba15-ad380e00e6b6": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/PaymentPage",
                                    "widgetId": "0daa3702-0e20-48ca-ba15-ad380e00e6b6",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/PaymentPage",
                                    "appPage": {
                                        "id": "Challenge Payment",
                                        "name": "Challenge Payment",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "linkable": false,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "",
                                    "default": false
                                },
                                "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ParticipantPage",
                                    "widgetId": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ParticipantPage",
                                    "appPage": {
                                        "id": "Participant Page",
                                        "name": "Participant Page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": true,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "linkable": false,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi",
                                        "shouldLoadServerZip": true
                                    },
                                    "tpaWidgetId": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                                    "default": false
                                },
                                "847c2f5d-017f-499f-9c3e-069164fc116f": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesPage",
                                    "widgetId": "847c2f5d-017f-499f-9c3e-069164fc116f",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesPage",
                                    "appPage": {
                                        "id": "challenge_page",
                                        "name": "Challenge Page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "hiddenInPagesPanel": true,
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "subPages": [{
                                            "key": "wix.online_programs.sub_pages.online_program",
                                            "enumerable": true,
                                            "hideFromFloatingNavBar": true
                                        }],
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi",
                                        "shouldLoadServerZip": true
                                    },
                                    "default": false
                                },
                                "a159b4d2-831b-410c-9e77-ec3f40c9cace": {
                                    "widgetUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/editor\/ThankYouPage.html",
                                    "widgetId": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/editor\/ThankYouPage.html",
                                    "appPage": {
                                        "id": "Thank You Page",
                                        "name": "Thank You Page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": true
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": true,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "linkable": true,
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false"
                                    },
                                    "tpaWidgetId": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                                    "default": false
                                },
                                "ef4e59bd-625a-484e-9ba1-650d4aecf03b": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesList",
                                    "widgetId": "ef4e59bd-625a-484e-9ba1-650d4aecf03b",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesList",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "subPages": [{
                                            "key": "wix.online_programs.sub_pages.online_program",
                                            "enumerable": true
                                        }],
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "true",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "achievements_dev",
                                    "default": false
                                },
                                "c88902a1-7fbf-4ff1-b19a-af39c48bc740": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/MyPrograms",
                                    "widgetId": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/MyPrograms",
                                    "appPage": {
                                        "id": "My Programs",
                                        "name": "My Programs",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "true",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                                    "default": false
                                },
                                "20dcd94b-f847-4e24-b3f2-0d3894593f7a": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesListPage",
                                    "widgetId": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesListPage",
                                    "appPage": {
                                        "id": "Challenges",
                                        "name": "Challenges",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                                    "default": true
                                }
                            },
                            "appDefinitionName": "Wix Online Programs",
                            "appFields": {
                                "platform": {
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/viewerScript.bundle.min.js",
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/editorScript.bundle.min.js",
                                    "baseUrls": {
                                        "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/"
                                    },
                                    "margins": {
                                        "desktop": {
                                            "top": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "right": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "bottom": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "left": {
                                                "type": "PX",
                                                "value": 0
                                            }
                                        }
                                    },
                                    "isStretched": {
                                        "desktop": false,
                                        "tablet": false,
                                        "mobile": false
                                    },
                                    "docking": {
                                        "desktop": {
                                            "horizontal": "HCENTER",
                                            "vertical": "TOP_DOCKING"
                                        }
                                    },
                                    "errorReporting": {
                                        "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                    },
                                    "viewer": {
                                        "errorReporting": {
                                            "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                        }
                                    }
                                },
                                "appConfig": {
                                    "siteConfig": {
                                        "siteStructureApi": "wixArtifactId:com.wixpress.achievements.challenge-service-web"
                                    }
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "135c3d92-0fea-1f9d-2ba5-2a1dfb04297e": {
                            "applicationId": 23,
                            "widgets": {
                                "141995eb-c700-8487-6366-a482f7432e2b": {
                                    "widgetUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                                    "widgetId": "141995eb-c700-8487-6366-a482f7432e2b",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": true,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {},
                                    "tpaWidgetId": "shoutout_feed",
                                    "default": true
                                }
                            },
                            "appDefinitionName": "ShoutOut (Legacy)",
                            "appFields": {
                                "premiumBundle": {
                                    "parentAppSlug": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9",
                                    "parentAppId": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9"
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "148c2287-c669-d849-d153-463c7486a694": {
                            "applicationId": 28,
                            "widgets": {
                                "47a7e7bb-f412-4093-9155-1ff5adbc4dae": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/SideBySide",
                                    "widgetId": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/SideBySide",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'SideBySideViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                                    "default": false
                                },
                                "0a9f687f-7e00-4576-a8e1-9415844b8f44": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "widgetId": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupsListWidgetViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                                    "default": false
                                },
                                "8cce2b9e-8549-46c7-8ad2-f75bf28534ac": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/FeedWidget",
                                    "widgetId": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/FeedWidget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'FeedWidgetViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                                    "default": false
                                },
                                "a7dcdfcb-8abd-4008-af19-fed5fcd12b40": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Groups",
                                    "widgetId": "a7dcdfcb-8abd-4008-af19-fed5fcd12b40",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Groups",
                                    "appPage": {
                                        "id": "groups",
                                        "name": "Groups",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupsViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "default": true
                                },
                                "83b2af08-c021-40c8-a3a5-b329a959ec2b": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "widgetId": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupsListWidgetViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                                    "default": false
                                },
                                "e018cc55-7b1c-4500-a2e5-969f22c8a33a": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/MembersAreaGroups",
                                    "widgetId": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/MembersAreaGroups",
                                    "appPage": {
                                        "id": "My Groups",
                                        "name": "My Groups",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "true",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'MembersAreaGroupsViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                                    "default": false
                                },
                                "513a5d84-3ebb-4ca6-a5aa-83effd2123b9": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Group",
                                    "widgetId": "513a5d84-3ebb-4ca6-a5aa-83effd2123b9",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Group",
                                    "appPage": {
                                        "id": "group",
                                        "name": "Group",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 2,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "subPages": [{
                                            "key": "wix.groups.sub_pages.group",
                                            "enumerable": true
                                        }, {
                                            "key": "wix.groups.sub_pages.post",
                                            "enumerable": true
                                        }],
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "default": false
                                }
                            },
                            "appDefinitionName": "Wix Groups",
                            "appFields": {
                                "platform": {
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/viewerScript.bundle.min.js",
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/editorScript.bundle.min.js",
                                    "baseUrls": {
                                        "staticsGroupBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                                        "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/"
                                    },
                                    "baseUrlsTemplate": {
                                        "staticsGroupBaseUrl": "<%= serviceUrl('social-group-ooi', '\/') %>"
                                    },
                                    "margins": {
                                        "desktop": {
                                            "top": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "right": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "bottom": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "left": {
                                                "type": "PX",
                                                "value": 0
                                            }
                                        },
                                        "tablet": {
                                            "top": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "right": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "bottom": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "left": {
                                                "type": "PX",
                                                "value": 0
                                            }
                                        },
                                        "mobile": {
                                            "top": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "right": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "bottom": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "left": {
                                                "type": "PX",
                                                "value": 0
                                            }
                                        }
                                    },
                                    "height": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "isStretched": {
                                        "desktop": true,
                                        "tablet": true,
                                        "mobile": true
                                    },
                                    "docking": {
                                        "desktop": {
                                            "vertical": "TOP_DOCKING"
                                        },
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "errorReporting": {
                                        "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                    },
                                    "width": {
                                        "desktop": {
                                            "type": "PERCENTAGE",
                                            "value": 100
                                        },
                                        "tablet": {
                                            "type": "PERCENTAGE",
                                            "value": 100
                                        },
                                        "mobile": {
                                            "type": "PERCENTAGE",
                                            "value": 100
                                        }
                                    },
                                    "viewer": {
                                        "errorReporting": {
                                            "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                        }
                                    }
                                },
                                "appConfig": {
                                    "siteConfig": {
                                        "siteStructureApi": "wixArtifactId:com.wixpress.groups.social-groups-web"
                                    },
                                    "namespace": "wix.groups"
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "14409595-f076-4753-8303-9a86f9f71469": {
                            "applicationId": 1625,
                            "widgets": {
                                "144097ea-fea0-498e-ade7-e6de40127106": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/wix-vod-widget\/1.4341.0\/WixVideo",
                                    "widgetId": "144097ea-fea0-498e-ade7-e6de40127106",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/wix-vod-widget\/1.4341.0\/WixVideo",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": true,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "useSsrSeo": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%=serviceUrl('wix-vod-widget', 'WixVideoViewerWidgetNoCss.bundle.min.js')%>"
                                    },
                                    "tpaWidgetId": "wix_vod_develop",
                                    "default": true
                                }
                            },
                            "appDefinitionName": "Wix Video",
                            "appFields": {
                                "platform": {
                                    "baseUrls": {
                                        "staticsBaseUrl": "https:\/\/vod-server.wix.com\/"
                                    },
                                    "margins": {
                                        "desktop": {
                                            "top": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "right": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "bottom": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "left": {
                                                "type": "PX",
                                                "value": 0
                                            }
                                        }
                                    },
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/editorScript.bundle.min.js",
                                    "isStretched": {
                                        "desktop": false,
                                        "tablet": false,
                                        "mobile": false
                                    },
                                    "docking": {
                                        "desktop": {
                                            "horizontal": "HCENTER",
                                            "vertical": "TOP_DOCKING"
                                        }
                                    },
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/viewerScript.bundle.min.js"
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "b976560c-3122-4351-878f-453f337b7245": {
                            "applicationId": 3069,
                            "widgets": {
                                "2f6c5608-393f-4b15-bfd8-d4e15396787a": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "2f6c5608-393f-4b15-bfd8-d4e15396787a",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "uuc0d",
                                            "pageJsonFilename": "",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "nestedWidgets": {}
                                        }
                                    },
                                    "default": false
                                },
                                "5ab312ae-0cf7-4093-bbf5-5e4d3690151c": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "5ab312ae-0cf7-4093-bbf5-5e4d3690151c",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "zuaoa",
                                            "pageJsonFilename": "",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "nestedWidgets": {}
                                        }
                                    },
                                    "default": false
                                },
                                "31aadcb0-9add-42cb-9b21-72f41e91389b": {
                                    "widgetUrl": "\/",
                                    "widgetId": "31aadcb0-9add-42cb-9b21-72f41e91389b",
                                    "refreshOnWidthChange": true,
                                    "appPage": {
                                        "id": "member_settings_page",
                                        "name": "member_settings_page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "subPages": [{
                                            "key": "wix.members_area.settings_sub_pages.tab",
                                            "enumerable": true,
                                            "hideFromFloatingNavBar": true
                                        }],
                                        "linkable": true,
                                        "componentUrl": "https:\/\/empty",
                                        "ssrCacheExcluded": "false"
                                    },
                                    "tpaWidgetId": "31aadcb0-9add-42cb-9b21-72f41e91389b",
                                    "default": false
                                },
                                "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b": {
                                    "widgetUrl": "\/",
                                    "widgetId": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b",
                                    "refreshOnWidthChange": true,
                                    "appPage": {
                                        "id": "member_page",
                                        "name": "member_page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "subPages": [{
                                            "key": "wix.members_area.sub_pages.tab",
                                            "enumerable": true,
                                            "hideFromFloatingNavBar": true
                                        }],
                                        "linkable": true,
                                        "componentUrl": "https:\/\/empty",
                                        "ssrCacheExcluded": "false"
                                    },
                                    "tpaWidgetId": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b",
                                    "default": false
                                },
                                "a26fd26a-3dd9-42ca-b381-326a9c143e38": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "a26fd26a-3dd9-42ca-b381-326a9c143e38",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "xhv4l",
                                            "pageJsonFilename": "",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "nestedWidgets": {
                                                "internal": ["5ab312ae-0cf7-4093-bbf5-5e4d3690151c"]
                                            }
                                        }
                                    },
                                    "default": false
                                },
                                "596a6688-3ad7-46f7-bb9c-00023225876d": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "596a6688-3ad7-46f7-bb9c-00023225876d",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "mty3l",
                                            "pageJsonFilename": "3ccac2_c0e4b2226b92ae3ba7711d07eec529d4_122.json",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "relatedArtifact": "profile-page-bob",
                                            "nestedWidgets": {}
                                        }
                                    },
                                    "default": false
                                }
                            },
                            "appDefinitionName": "Member Page",
                            "appFields": {
                                "platform": {
                                    "baseUrls": {
                                        "siteAssets": "{urlTemplate: {siteAssets}?siteId=27e854ac-99e9-4626-b905-ff10071df796&metaSiteId=4a8777cf-00e8-44ee-95cd-d6abc09dc8e4&siteRevision=770",
                                        "blocks_devSiteUrl": "https:\/\/justea2.editorx.io\/vxgooi3j6xm5ykyver02",
                                        "blocks_widgetManifestsUrl": "\/manifests\/b976560c-3122-4351-878f-453f337b7245\/770\/manifests.json",
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0",
                                        "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0"
                                    },
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0\/editorScript.bundle.min.js",
                                    "viewerScriptUrlTemplate": "<%= serviceUrl('profile-page-bob', 'viewerScript.bundle.min.js') %>",
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0\/viewerScript.bundle.min.js",
                                    "errorReporting": {
                                        "url": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935"
                                    },
                                    "editorScriptUrlTemplate": "<%= serviceUrl('profile-page-bob', 'editorScript.bundle.min.js') %>",
                                    "viewer": {
                                        "errorReporting": {
                                            "url": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935"
                                        }
                                    },
                                    "studio": {
                                        "siteHeaderUrl": "f3f94510e24dd6bd57b8e97b50d98d4c_r3.json",
                                        "wixCodeGridId": "e453d54c-37a8-4f10-b887-8bc09c3bb721",
                                        "wixCodeInstanceId": "9a9eaf1c-6655-4e0c-9789-ee2c43dd1920"
                                    }
                                },
                                "appConfig": {
                                    "siteConfig": {
                                        "siteStructureApi": "wixArtifactId:com.wixpress.members.members-area-site-structure-api"
                                    }
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^12.0.0"
                            },
                            "isWixTPA": true
                        },
                        "14cffd81-5215-0a7f-22f8-074b0e2401fb": {
                            "applicationId": 3465,
                            "widgets": {
                                "14dd1af6-3e02-63db-0ef2-72fbc7cc3136": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/my-account-ooi\/1.2387.0\/MyAccount",
                                    "widgetId": "14dd1af6-3e02-63db-0ef2-72fbc7cc3136",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/my-account-ooi\/1.2387.0\/MyAccount",
                                    "appPage": {
                                        "id": "member_info",
                                        "name": "My Account",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "true",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('my-account-ooi', 'MyAccountViewerWidgetNoCss.bundle.min.js') %>",
                                        "isLoadable": true,
                                        "cssPerBreakpoint": true
                                    },
                                    "default": true
                                }
                            },
                            "appDefinitionName": "Member Account Info",
                            "appFields": {
                                "platform": {
                                    "baseUrls": {
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/",
                                        "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0"
                                    },
                                    "margins": {
                                        "desktop": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "tablet": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "mobile": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        }
                                    },
                                    "height": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/editorScript.bundle.min.js",
                                    "docking": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/viewerScript.bundle.min.js",
                                    "errorReporting": {},
                                    "width": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewer": {
                                        "errorReporting": {}
                                    }
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "14f25924-5664-31b2-9568-f9c5ed98c9b1": {
                            "applicationId": 3666,
                            "widgets": {
                                "14f2595a-a352-3ff1-9b3c-4d21861fe58f": {
                                    "widgetUrl": "https:\/\/notifications-app.wixapps.net\/communities-notifications-app\/app",
                                    "widgetId": "14f2595a-a352-3ff1-9b3c-4d21861fe58f",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/notifications-app.wixapps.net\/communities-notifications-app\/app",
                                    "appPage": {
                                        "id": "notifications_app",
                                        "name": "Notifications",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": false,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "minHeightInMobile": 0,
                                        "linkable": true
                                    },
                                    "default": true
                                }
                            },
                            "appDefinitionName": "Wix Members Area Notifications",
                            "appFields": {
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "14dbef06-cc42-5583-32a7-3abd44da4908": {
                            "applicationId": 4121,
                            "widgets": {
                                "14dbefb9-3b7b-c4e9-53e8-766defd30587": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/members-about-ooi\/1.2279.0\/Profile",
                                    "widgetId": "14dbefb9-3b7b-c4e9-53e8-766defd30587",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/members-about-ooi\/1.2279.0\/Profile",
                                    "appPage": {
                                        "id": "about",
                                        "name": "Profile",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": false,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "minHeightInMobile": 0,
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_members_about_ooi",
                                        "cssPerBreakpoint": true,
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('members-about-ooi', 'ProfileViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "default": true
                                }
                            },
                            "appDefinitionName": "Members About",
                            "appFields": {
                                "platform": {
                                    "baseUrls": {
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/",
                                        "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0"
                                    },
                                    "margins": {
                                        "desktop": {
                                            "top": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "right": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "bottom": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "left": {
                                                "type": "PX",
                                                "value": 0
                                            }
                                        },
                                        "tablet": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "mobile": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        }
                                    },
                                    "height": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/editorScript.bundle.min.js",
                                    "docking": {
                                        "desktop": {
                                            "horizontal": "HCENTER",
                                            "vertical": "TOP_DOCKING"
                                        },
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/viewerScript.bundle.min.js",
                                    "errorReporting": {},
                                    "width": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewer": {
                                        "errorReporting": {}
                                    }
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        },
                        "14ce28f7-7eb0-3745-22f8-074b0e2401fb": {
                            "applicationId": 4323,
                            "widgets": {
                                "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/profile-card-tpa-ooi\/1.2548.0\/ProfileCard",
                                    "widgetId": "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/profile-card-tpa-ooi\/1.2548.0\/ProfileCard",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('profile-card-tpa-ooi', 'ProfileCardViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "profile",
                                    "default": true
                                }
                            },
                            "appDefinitionName": "Profile Card",
                            "appFields": {
                                "platform": {
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/editorScript.bundle.min.js",
                                    "baseUrls": {
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/",
                                        "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0"
                                    },
                                    "margins": {
                                        "desktop": {
                                            "top": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "right": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "bottom": {
                                                "type": "PX",
                                                "value": 0
                                            },
                                            "left": {
                                                "type": "PX",
                                                "value": 0
                                            }
                                        },
                                        "tablet": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "mobile": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        }
                                    },
                                    "height": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "docking": {
                                        "desktop": {
                                            "horizontal": "HCENTER",
                                            "vertical": "TOP_DOCKING"
                                        },
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/viewerScript.bundle.min.js",
                                    "errorReporting": {},
                                    "width": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewer": {
                                        "errorReporting": {}
                                    }
                                },
                                "permissionsEnforced": false,
                                "blocksPermissionsEnforced": false,
                                "isStandalone": true,
                                "semanticVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        }
                    },
                    "previewMode": false,
                    "siteRevision": 69,
                    "userFileDomainUrl": "filesusr.com",
                    "metaSiteId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b",
                    "isPremiumDomain": true,
                    "routersConfig": {},
                    "routerByPrefix": {},
                    "pageIdToPrefix": {},
                    "viewMode": "site",
                    "editorOrSite": "site",
                    "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                    "tpaModalConfig": {
                        "wixTPAs": {
                            "13ee94c1-b635-8505-3391-97919052c16f": true,
                            "55cd9036-36bb-480b-8ddc-afda3cb2eb8d": true,
                            "35aec784-bbec-4e6e-abcb-d3d724af52cf": true,
                            "8ea9df15-9ff6-4acf-bbb8-8d3a69ae5841": true,
                            "14517e1a-3ff0-af98-408e-2bd6953c36a2": true,
                            "2936472a-a1ed-4ae5-9f71-614313a9f4e7": true,
                            "141fbfae-511e-6817-c9f0-48993a7547d1": true,
                            "139ef4fa-c108-8f9a-c7be-d5f492a2c939": true,
                            "d70b68e2-8d77-4e0c-9c00-c292d6e0025e": true,
                            "146c0d71-352e-4464-9a03-2e868aabe7b9": true,
                            "307ba931-689c-4b55-bb1d-6a382bad9222": true,
                            "4b10fcce-732d-4be3-9d46-801d271acda9": true,
                            "14b89688-9b25-5214-d1cb-a3fb9683618b": true,
                            "9bead16f-1c73-4cda-b6c4-28cff46988db": true,
                            "1480c568-5cbd-9392-5604-1148f5faffa0": true,
                            "94bc563b-675f-41ad-a2a6-5494f211c47b": true,
                            "14e12b04-943e-fd32-456d-70b1820a2ff2": true,
                            "14bca956-e09f-f4d6-14d7-466cb3f09103": true,
                            "135c3d92-0fea-1f9d-2ba5-2a1dfb04297e": true,
                            "150ae7ee-c74a-eecd-d3d7-2112895b988a": true,
                            "f123e8f1-4350-4c9b-b269-04adfadda977": true,
                            "ea2821fc-7d97-40a9-9f75-772f29178430": true,
                            "f2cfea12-5211-4f34-9ad2-688b310860e3": true,
                            "148c2287-c669-d849-d153-463c7486a694": true,
                            "338b722e-f5fa-4e0d-8315-659e8c03123e": true,
                            "e4b5f1bc-c77a-4319-a60d-a46acb17f6fc": true,
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": true,
                            "bbe1406a-31f5-4f3f-9e0a-b39dfd25274f": true,
                            "14409595-f076-4753-8303-9a86f9f71469": true,
                            "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": true,
                            "b976560c-3122-4351-878f-453f337b7245": true,
                            "14cffd81-5215-0a7f-22f8-074b0e2401fb": true,
                            "14f25924-5664-31b2-9568-f9c5ed98c9b1": true,
                            "14dbef06-cc42-5583-32a7-3abd44da4908": true,
                            "14ce28f7-7eb0-3745-22f8-074b0e2401fb": true
                        }
                    },
                    "appSectionParams": {},
                    "requestUrl": "https:\/\/mx.andrewlord.com.au\/sample-quiz-page",
                    "isMobileView": false,
                    "deviceType": "desktop",
                    "isMobileDevice": false,
                    "extras": {
                        "currency": "AUD"
                    },
                    "tpaDebugParams": {
                        "debugApp": null,
                        "petri_ovr": null
                    },
                    "locale": "en",
                    "timeZone": "Australia\/Sydney",
                    "shouldRenderTPAsIframe": true,
                    "debug": false,
                    "regionalLanguage": "en",
                    "appsClientSpecMapByApplicationId": {
                        "8": {
                            "widgets": {
                                "14517f3f-ffc5-eced-f592-980aaa0bbb5c": {
                                    "widgetUrl": "https:\/\/engage.wixapps.net\/chat-widget-server\/renderChatWidget\/index",
                                    "widgetId": "14517f3f-ffc5-eced-f592-980aaa0bbb5c",
                                    "refreshOnWidthChange": true,
                                    "gluedOptions": {
                                        "placement": "BOTTOM_RIGHT",
                                        "verticalMargin": 0,
                                        "horizontalMargin": 0
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": true,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "iframeWithPlatform": true
                                    },
                                    "tpaWidgetId": "wix_visitors",
                                    "default": true
                                }
                            },
                            "applicationId": 8,
                            "appDefinitionName": "Wix Chat"
                        },
                        "9": {
                            "widgets": {
                                "0daa3702-0e20-48ca-ba15-ad380e00e6b6": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/PaymentPage",
                                    "widgetId": "0daa3702-0e20-48ca-ba15-ad380e00e6b6",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/PaymentPage",
                                    "appPage": {
                                        "id": "Challenge Payment",
                                        "name": "Challenge Payment",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "linkable": false,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "",
                                    "default": false
                                },
                                "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ParticipantPage",
                                    "widgetId": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ParticipantPage",
                                    "appPage": {
                                        "id": "Participant Page",
                                        "name": "Participant Page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": true,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "linkable": false,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi",
                                        "shouldLoadServerZip": true
                                    },
                                    "tpaWidgetId": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                                    "default": false
                                },
                                "847c2f5d-017f-499f-9c3e-069164fc116f": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesPage",
                                    "widgetId": "847c2f5d-017f-499f-9c3e-069164fc116f",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesPage",
                                    "appPage": {
                                        "id": "challenge_page",
                                        "name": "Challenge Page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "hiddenInPagesPanel": true,
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "subPages": [{
                                            "key": "wix.online_programs.sub_pages.online_program",
                                            "enumerable": true,
                                            "hideFromFloatingNavBar": true
                                        }],
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi",
                                        "shouldLoadServerZip": true
                                    },
                                    "default": false
                                },
                                "a159b4d2-831b-410c-9e77-ec3f40c9cace": {
                                    "widgetUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/editor\/ThankYouPage.html",
                                    "widgetId": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/editor\/ThankYouPage.html",
                                    "appPage": {
                                        "id": "Thank You Page",
                                        "name": "Thank You Page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": true
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": true,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "linkable": true,
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false"
                                    },
                                    "tpaWidgetId": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                                    "default": false
                                },
                                "ef4e59bd-625a-484e-9ba1-650d4aecf03b": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesList",
                                    "widgetId": "ef4e59bd-625a-484e-9ba1-650d4aecf03b",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesList",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "subPages": [{
                                            "key": "wix.online_programs.sub_pages.online_program",
                                            "enumerable": true
                                        }],
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "true",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "achievements_dev",
                                    "default": false
                                },
                                "c88902a1-7fbf-4ff1-b19a-af39c48bc740": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/MyPrograms",
                                    "widgetId": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/MyPrograms",
                                    "appPage": {
                                        "id": "My Programs",
                                        "name": "My Programs",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "true",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                                    "default": false
                                },
                                "20dcd94b-f847-4e24-b3f2-0d3894593f7a": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesListPage",
                                    "widgetId": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/challenges-web-ooi\/1.2168.2173\/ChallengesListPage",
                                    "appPage": {
                                        "id": "Challenges",
                                        "name": "Challenges",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_challenges_web_ooi"
                                    },
                                    "tpaWidgetId": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                                    "default": true
                                }
                            },
                            "applicationId": 9,
                            "appDefinitionName": "Wix Online Programs"
                        },
                        "23": {
                            "widgets": {
                                "141995eb-c700-8487-6366-a482f7432e2b": {
                                    "widgetUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                                    "widgetId": "141995eb-c700-8487-6366-a482f7432e2b",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": true,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {},
                                    "tpaWidgetId": "shoutout_feed",
                                    "default": true
                                }
                            },
                            "applicationId": 23,
                            "appDefinitionName": "ShoutOut (Legacy)"
                        },
                        "28": {
                            "widgets": {
                                "47a7e7bb-f412-4093-9155-1ff5adbc4dae": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/SideBySide",
                                    "widgetId": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/SideBySide",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'SideBySideViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                                    "default": false
                                },
                                "0a9f687f-7e00-4576-a8e1-9415844b8f44": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "widgetId": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupsListWidgetViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                                    "default": false
                                },
                                "8cce2b9e-8549-46c7-8ad2-f75bf28534ac": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/FeedWidget",
                                    "widgetId": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/FeedWidget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'FeedWidgetViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                                    "default": false
                                },
                                "a7dcdfcb-8abd-4008-af19-fed5fcd12b40": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Groups",
                                    "widgetId": "a7dcdfcb-8abd-4008-af19-fed5fcd12b40",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Groups",
                                    "appPage": {
                                        "id": "groups",
                                        "name": "Groups",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupsViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "default": true
                                },
                                "83b2af08-c021-40c8-a3a5-b329a959ec2b": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "widgetId": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/GroupsListWidget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupsListWidgetViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                                    "default": false
                                },
                                "e018cc55-7b1c-4500-a2e5-969f22c8a33a": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/MembersAreaGroups",
                                    "widgetId": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/MembersAreaGroups",
                                    "appPage": {
                                        "id": "My Groups",
                                        "name": "My Groups",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidget.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "true",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'MembersAreaGroupsViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                                    "default": false
                                },
                                "513a5d84-3ebb-4ca6-a5aa-83effd2123b9": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Group",
                                    "widgetId": "513a5d84-3ebb-4ca6-a5aa-83effd2123b9",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/social-groups-ooi\/5.105.0\/Group",
                                    "appPage": {
                                        "id": "group",
                                        "name": "Group",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 2,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidget.bundle.min.js",
                                        "mobileSettingsEnabled": true,
                                        "subPages": [{
                                            "key": "wix.groups.sub_pages.group",
                                            "enumerable": true
                                        }, {
                                            "key": "wix.groups.sub_pages.post",
                                            "enumerable": true
                                        }],
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058"
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidgetNoCss.bundle.min.js",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('social-groups-ooi', 'GroupViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "default": false
                                }
                            },
                            "applicationId": 28,
                            "appDefinitionName": "Wix Groups"
                        },
                        "1625": {
                            "widgets": {
                                "144097ea-fea0-498e-ade7-e6de40127106": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/wix-vod-widget\/1.4341.0\/WixVideo",
                                    "widgetId": "144097ea-fea0-498e-ade7-e6de40127106",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/wix-vod-widget\/1.4341.0\/WixVideo",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": true,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "useSsrSeo": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "noCssComponentUrlTemplate": "<%=serviceUrl('wix-vod-widget', 'WixVideoViewerWidgetNoCss.bundle.min.js')%>"
                                    },
                                    "tpaWidgetId": "wix_vod_develop",
                                    "default": true
                                }
                            },
                            "applicationId": 1625,
                            "appDefinitionName": "Wix Video"
                        },
                        "3069": {
                            "widgets": {
                                "2f6c5608-393f-4b15-bfd8-d4e15396787a": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "2f6c5608-393f-4b15-bfd8-d4e15396787a",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "uuc0d",
                                            "pageJsonFilename": "",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "nestedWidgets": {}
                                        }
                                    },
                                    "default": false
                                },
                                "5ab312ae-0cf7-4093-bbf5-5e4d3690151c": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "5ab312ae-0cf7-4093-bbf5-5e4d3690151c",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "zuaoa",
                                            "pageJsonFilename": "",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "nestedWidgets": {}
                                        }
                                    },
                                    "default": false
                                },
                                "31aadcb0-9add-42cb-9b21-72f41e91389b": {
                                    "widgetUrl": "\/",
                                    "widgetId": "31aadcb0-9add-42cb-9b21-72f41e91389b",
                                    "refreshOnWidthChange": true,
                                    "appPage": {
                                        "id": "member_settings_page",
                                        "name": "member_settings_page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "subPages": [{
                                            "key": "wix.members_area.settings_sub_pages.tab",
                                            "enumerable": true,
                                            "hideFromFloatingNavBar": true
                                        }],
                                        "linkable": true,
                                        "componentUrl": "https:\/\/empty",
                                        "ssrCacheExcluded": "false"
                                    },
                                    "tpaWidgetId": "31aadcb0-9add-42cb-9b21-72f41e91389b",
                                    "default": false
                                },
                                "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b": {
                                    "widgetUrl": "\/",
                                    "widgetId": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b",
                                    "refreshOnWidthChange": true,
                                    "appPage": {
                                        "id": "member_page",
                                        "name": "member_page",
                                        "defaultPage": "",
                                        "hidden": true,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "subPages": [{
                                            "key": "wix.members_area.sub_pages.tab",
                                            "enumerable": true,
                                            "hideFromFloatingNavBar": true
                                        }],
                                        "linkable": true,
                                        "componentUrl": "https:\/\/empty",
                                        "ssrCacheExcluded": "false"
                                    },
                                    "tpaWidgetId": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b",
                                    "default": false
                                },
                                "a26fd26a-3dd9-42ca-b381-326a9c143e38": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "a26fd26a-3dd9-42ca-b381-326a9c143e38",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "xhv4l",
                                            "pageJsonFilename": "",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "nestedWidgets": {
                                                "internal": ["5ab312ae-0cf7-4093-bbf5-5e4d3690151c"]
                                            }
                                        }
                                    },
                                    "default": false
                                },
                                "596a6688-3ad7-46f7-bb9c-00023225876d": {
                                    "widgetUrl": "https:\/\/editor.wix.com\/",
                                    "widgetId": "596a6688-3ad7-46f7-bb9c-00023225876d",
                                    "refreshOnWidthChange": true,
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "appStudioFields": {
                                            "id": "mty3l",
                                            "pageJsonFilename": "3ccac2_c0e4b2226b92ae3ba7711d07eec529d4_122.json",
                                            "blocksVersion": "2.0.0",
                                            "ssrCacheExcluded": "false",
                                            "relatedArtifact": "profile-page-bob",
                                            "nestedWidgets": {}
                                        }
                                    },
                                    "default": false
                                }
                            },
                            "applicationId": 3069,
                            "appDefinitionName": "Member Page"
                        },
                        "3465": {
                            "widgets": {
                                "14dd1af6-3e02-63db-0ef2-72fbc7cc3136": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/my-account-ooi\/1.2387.0\/MyAccount",
                                    "widgetId": "14dd1af6-3e02-63db-0ef2-72fbc7cc3136",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/my-account-ooi\/1.2387.0\/MyAccount",
                                    "appPage": {
                                        "id": "member_info",
                                        "name": "My Account",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "true",
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('my-account-ooi', 'MyAccountViewerWidgetNoCss.bundle.min.js') %>",
                                        "isLoadable": true,
                                        "cssPerBreakpoint": true
                                    },
                                    "default": true
                                }
                            },
                            "applicationId": 3465,
                            "appDefinitionName": "Member Account Info"
                        },
                        "3666": {
                            "widgets": {
                                "14f2595a-a352-3ff1-9b3c-4d21861fe58f": {
                                    "widgetUrl": "https:\/\/notifications-app.wixapps.net\/communities-notifications-app\/app",
                                    "widgetId": "14f2595a-a352-3ff1-9b3c-4d21861fe58f",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/notifications-app.wixapps.net\/communities-notifications-app\/app",
                                    "appPage": {
                                        "id": "notifications_app",
                                        "name": "Notifications",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": false,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "minHeightInMobile": 0,
                                        "linkable": true
                                    },
                                    "default": true
                                }
                            },
                            "applicationId": 3666,
                            "appDefinitionName": "Wix Members Area Notifications"
                        },
                        "4121": {
                            "widgets": {
                                "14dbefb9-3b7b-c4e9-53e8-766defd30587": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/members-about-ooi\/1.2279.0\/Profile",
                                    "widgetId": "14dbefb9-3b7b-c4e9-53e8-766defd30587",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/members-about-ooi\/1.2279.0\/Profile",
                                    "appPage": {
                                        "id": "about",
                                        "name": "Profile",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": false,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "minHeightInMobile": 0,
                                        "mobileSettingsEnabled": true,
                                        "linkable": true,
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "isLoadable": true,
                                        "shouldLoadServerZip": true,
                                        "chunkLoadingGlobal": "webpackJsonp__wix_members_about_ooi",
                                        "cssPerBreakpoint": true,
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('members-about-ooi', 'ProfileViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "default": true
                                }
                            },
                            "applicationId": 4121,
                            "appDefinitionName": "Members About"
                        },
                        "4323": {
                            "widgets": {
                                "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/profile-card-tpa-ooi\/1.2548.0\/ProfileCard",
                                    "widgetId": "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/profile-card-tpa-ooi\/1.2548.0\/ProfileCard",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "mobileSettingsEnabled": true,
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidgetNoCss.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "cssPerBreakpoint": true,
                                        "isLoadable": true,
                                        "noCssComponentUrlTemplate": "<%= serviceUrl('profile-card-tpa-ooi', 'ProfileCardViewerWidgetNoCss.bundle.min.js') %>"
                                    },
                                    "tpaWidgetId": "profile",
                                    "default": true
                                }
                            },
                            "applicationId": 4323,
                            "appDefinitionName": "Profile Card"
                        }
                    }
                },
                "windowWixCodeSdk": {
                    "locale": "en-au",
                    "isMobileFriendly": true,
                    "formFactor": "Desktop",
                    "pageIdToRouterAppDefinitionId": {}
                },
                "wixCustomElementComponent": {
                    "shouldLoadAllExternalScripts": true,
                    "widgetsToRenderOnFreeSites": {
                        "b976560c-3122-4351-878f-453f337b7245-uuc0d": true,
                        "b976560c-3122-4351-878f-453f337b7245-zuaoa": true,
                        "b976560c-3122-4351-878f-453f337b7245-xhv4l": true,
                        "b976560c-3122-4351-878f-453f337b7245-mty3l": true
                    },
                    "wixCodeBundlersUrlData": {
                        "url": "https:\/\/bundler.wix-code.com\/2e965303-f7a9-452e-acb2-c4fcacca4c2b\/7106ca55-7fa2-46c6-b32a-5db764f82980\/350633ae-2249-4037-a8e3-d4a6e9c4ea6e\/",
                        "queryParams": "analyze-imported-namespaces=true&init-platform-api-provider=true&get-app-def-id-from-package-name=false&disable-yarn-pnp-mode=false&bundler-traffic-to-aws=true&bundler-typescript-analysis=true",
                        "appDefIdToWixCodeBundlerUrlData": {
                            "b976560c-3122-4351-878f-453f337b7245": {
                                "url": "https:\/\/bundler.wix-code.com\/2e965303-f7a9-452e-acb2-c4fcacca4c2b\/7106ca55-7fa2-46c6-b32a-5db764f82980\/e453d54c-37a8-4f10-b887-8bc09c3bb721\/",
                                "queryParams": "analyze-imported-namespaces=true&init-platform-api-provider=true&get-app-def-id-from-package-name=false&disable-yarn-pnp-mode=false&bundler-traffic-to-aws=true&bundler-typescript-analysis=true"
                            }
                        }
                    },
                    "customElementWidgets": {}
                },
                "wixEmbedsApi": {
                    "isAdminPage": false
                },
                "platform": {
                    "sdksStaticPaths": {
                        "mainSdks": "https:\/\/static.parastorage.com\/services\/wix-thunderbolt\/dist\/mainSdks.2ac836fa.chunk.min.js",
                        "nonMainSdks": "https:\/\/static.parastorage.com\/services\/wix-thunderbolt\/dist\/nonMainSdks.2cd9e601.chunk.min.js"
                    },
                    "landingPageId": "n1pm5",
                    "isChancePlatformOnLandingPage": true,
                    "clientWorkerUrl": "https:\/\/static.parastorage.com\/services\/wix-thunderbolt\/dist\/clientWorker.d706a67e.bundle.min.js",
                    "bootstrapData": {
                        "isMobileView": false,
                        "isMobileAppBuilder": false,
                        "appsSpecData": {
                            "14517e1a-3ff0-af98-408e-2bd6953c36a2": {
                                "appDefinitionId": "14517e1a-3ff0-af98-408e-2bd6953c36a2",
                                "type": "public",
                                "instanceId": "72ed0191-870e-4caa-8853-3af9edd6c653",
                                "appDefinitionName": "Wix Chat",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "2936472a-a1ed-4ae5-9f71-614313a9f4e7": {
                                "appDefinitionId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                                "type": "public",
                                "instanceId": "dff0d3d0-eb39-4dd3-a06d-7bfab87d0680",
                                "appDefinitionName": "Wix Online Programs",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "148c2287-c669-d849-d153-463c7486a694": {
                                "appDefinitionId": "148c2287-c669-d849-d153-463c7486a694",
                                "type": "public",
                                "instanceId": "38144d05-7295-4ad9-ba37-99f478ca352b",
                                "appDefinitionName": "Wix Groups",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                "appDefinitionId": "675bbcef-18d8-41f5-800e-131ec9e08762",
                                "type": "siteextension",
                                "instanceId": "7106ca55-7fa2-46c6-b32a-5db764f82980",
                                "isModuleFederated": false
                            },
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": {
                                "appDefinitionId": "14ce1214-b278-a7e4-1373-00cebd1bef7c",
                                "type": "public",
                                "instanceId": "78192e21-2dd4-4a4c-9e67-7f87b40c7867",
                                "appDefinitionName": "Wix Forms & Payments",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "bbe1406a-31f5-4f3f-9e0a-b39dfd25274f": {
                                "appDefinitionId": "bbe1406a-31f5-4f3f-9e0a-b39dfd25274f",
                                "type": "public",
                                "instanceId": "cf20c046-5677-4bef-92e1-d3fdc6bfea7f",
                                "appDefinitionName": "sm-platform-app",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "14409595-f076-4753-8303-9a86f9f71469": {
                                "appDefinitionId": "14409595-f076-4753-8303-9a86f9f71469",
                                "type": "public",
                                "instanceId": "ce368565-5e3b-4956-9cd5-9d76d704ba07",
                                "appDefinitionName": "Wix Video",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": {
                                "appDefinitionId": "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9",
                                "type": "public",
                                "instanceId": "be6fa789-c2b5-47ec-bb97-265477ced71f",
                                "appDefinitionName": "Wix Members Area",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "b976560c-3122-4351-878f-453f337b7245": {
                                "appDefinitionId": "b976560c-3122-4351-878f-453f337b7245",
                                "type": "public",
                                "instanceId": "b2bbb6fd-c655-4aa3-aa8a-c60ada4fa18d",
                                "appDefinitionName": "Member Page",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "14cffd81-5215-0a7f-22f8-074b0e2401fb": {
                                "appDefinitionId": "14cffd81-5215-0a7f-22f8-074b0e2401fb",
                                "type": "public",
                                "instanceId": "3629f12a-215b-496b-9195-d1580220c898",
                                "appDefinitionName": "Member Account Info",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "14dbef06-cc42-5583-32a7-3abd44da4908": {
                                "appDefinitionId": "14dbef06-cc42-5583-32a7-3abd44da4908",
                                "type": "public",
                                "instanceId": "116b4204-f9cf-4438-b9f1-3062c1853cc6",
                                "appDefinitionName": "Members About",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "14ce28f7-7eb0-3745-22f8-074b0e2401fb": {
                                "appDefinitionId": "14ce28f7-7eb0-3745-22f8-074b0e2401fb",
                                "type": "public",
                                "instanceId": "be06b75d-0387-4f77-b4a3-45abe2dd34e3",
                                "appDefinitionName": "Profile Card",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "dataBinding": {
                                "appDefinitionId": "dataBinding",
                                "type": "application",
                                "instanceId": "7106ca55-7fa2-46c6-b32a-5db764f82980",
                                "appDefinitionName": "Data Binding",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            }
                        },
                        "appsUrlData": {
                            "14517e1a-3ff0-af98-408e-2bd6953c36a2": {
                                "appDefId": "14517e1a-3ff0-af98-408e-2bd6953c36a2",
                                "appDefName": "Wix Chat",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/chat-worker\/1.1239.0\/viewer-script.bundle.min.js",
                                "baseUrls": {},
                                "widgets": {
                                    "14517f3f-ffc5-eced-f592-980aaa0bbb5c": {
                                        "controllerUrl": "",
                                        "componentUrl": "",
                                        "noCssComponentUrl": "",
                                        "widgetId": "14517f3f-ffc5-eced-f592-980aaa0bbb5c"
                                    }
                                }
                            },
                            "2936472a-a1ed-4ae5-9f71-614313a9f4e7": {
                                "appDefId": "2936472a-a1ed-4ae5-9f71-614313a9f4e7",
                                "appDefName": "Wix Online Programs",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/",
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/"
                                },
                                "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                "widgets": {
                                    "0daa3702-0e20-48ca-ba15-ad380e00e6b6": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/PaymentPageViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                        "widgetId": "0daa3702-0e20-48ca-ba15-ad380e00e6b6",
                                        "cssPerBreakpoint": true
                                    },
                                    "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ParticipantPageViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                        "widgetId": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                                        "cssPerBreakpoint": true
                                    },
                                    "847c2f5d-017f-499f-9c3e-069164fc116f": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesPageViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                        "widgetId": "847c2f5d-017f-499f-9c3e-069164fc116f",
                                        "cssPerBreakpoint": true
                                    },
                                    "a159b4d2-831b-410c-9e77-ec3f40c9cace": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ThankYouPageViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                        "widgetId": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                                        "cssPerBreakpoint": true
                                    },
                                    "ef4e59bd-625a-484e-9ba1-650d4aecf03b": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                        "widgetId": "ef4e59bd-625a-484e-9ba1-650d4aecf03b",
                                        "cssPerBreakpoint": true
                                    },
                                    "c88902a1-7fbf-4ff1-b19a-af39c48bc740": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/MyProgramsViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                        "widgetId": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                                        "cssPerBreakpoint": true
                                    },
                                    "20dcd94b-f847-4e24-b3f2-0d3894593f7a": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/challenges-web-ooi\/1.2168.2173\/ChallengesListPageViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/98b21aa53d68482b8414e892d9af0e5f@sentry-next.wixpress.com\/1190",
                                        "widgetId": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                                        "cssPerBreakpoint": true
                                    }
                                }
                            },
                            "148c2287-c669-d849-d153-463c7486a694": {
                                "appDefId": "148c2287-c669-d849-d153-463c7486a694",
                                "appDefName": "Wix Groups",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsGroupBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                                    "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/",
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/"
                                },
                                "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                "widgets": {
                                    "47a7e7bb-f412-4093-9155-1ff5adbc4dae": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/SideBySideViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                        "widgetId": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                                        "cssPerBreakpoint": true
                                    },
                                    "0a9f687f-7e00-4576-a8e1-9415844b8f44": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                        "widgetId": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                                        "cssPerBreakpoint": true
                                    },
                                    "8cce2b9e-8549-46c7-8ad2-f75bf28534ac": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/FeedWidgetViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                        "widgetId": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                                        "cssPerBreakpoint": true
                                    },
                                    "a7dcdfcb-8abd-4008-af19-fed5fcd12b40": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                        "widgetId": "a7dcdfcb-8abd-4008-af19-fed5fcd12b40",
                                        "cssPerBreakpoint": true
                                    },
                                    "83b2af08-c021-40c8-a3a5-b329a959ec2b": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupsListWidgetViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                        "widgetId": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                                        "cssPerBreakpoint": true
                                    },
                                    "e018cc55-7b1c-4500-a2e5-969f22c8a33a": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/MembersAreaGroupsViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                        "widgetId": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                                        "cssPerBreakpoint": true
                                    },
                                    "513a5d84-3ebb-4ca6-a5aa-83effd2123b9": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/social-groups-ooi\/5.105.0\/GroupViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/f36cc48fb72b4d298c835f2793cf3b84@sentry-next.wixpress.com\/1058",
                                        "widgetId": "513a5d84-3ebb-4ca6-a5aa-83effd2123b9",
                                        "cssPerBreakpoint": true
                                    }
                                }
                            },
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": {
                                "appDefId": "14ce1214-b278-a7e4-1373-00cebd1bef7c",
                                "appDefName": "Wix Forms & Payments",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/forms-viewer\/1.878.0\/viewerScript.bundle.min.js",
                                "baseUrls": {},
                                "widgets": {}
                            },
                            "bbe1406a-31f5-4f3f-9e0a-b39dfd25274f": {
                                "appDefId": "bbe1406a-31f5-4f3f-9e0a-b39dfd25274f",
                                "appDefName": "sm-platform-app",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/sm-platform-app\/1.628.314\/viewerScript.bundle.min.js",
                                "baseUrls": {},
                                "widgets": {}
                            },
                            "14409595-f076-4753-8303-9a86f9f71469": {
                                "appDefId": "14409595-f076-4753-8303-9a86f9f71469",
                                "appDefName": "Wix Video",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsBaseUrl": "https:\/\/vod-server.wix.com\/"
                                },
                                "widgets": {
                                    "144097ea-fea0-498e-ade7-e6de40127106": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/wix-vod-widget\/1.4341.0\/WixVideoViewerWidgetNoCss.bundle.min.js",
                                        "widgetId": "144097ea-fea0-498e-ade7-e6de40127106"
                                    }
                                }
                            },
                            "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": {
                                "appDefId": "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9",
                                "appDefName": "Wix Members Area",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/santa-members-viewer-app\/1.2613.0\/viewerScript.bundle.min.js",
                                "baseUrls": {},
                                "widgets": {}
                            },
                            "14cffd81-5215-0a7f-22f8-074b0e2401fb": {
                                "appDefId": "14cffd81-5215-0a7f-22f8-074b0e2401fb",
                                "appDefName": "Member Account Info",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/",
                                    "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0"
                                },
                                "widgets": {
                                    "14dd1af6-3e02-63db-0ef2-72fbc7cc3136": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/my-account-ooi\/1.2387.0\/MyAccountViewerWidgetNoCss.bundle.min.js",
                                        "widgetId": "14dd1af6-3e02-63db-0ef2-72fbc7cc3136",
                                        "cssPerBreakpoint": true
                                    }
                                }
                            },
                            "14dbef06-cc42-5583-32a7-3abd44da4908": {
                                "appDefId": "14dbef06-cc42-5583-32a7-3abd44da4908",
                                "appDefName": "Members About",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/",
                                    "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0"
                                },
                                "widgets": {
                                    "14dbefb9-3b7b-c4e9-53e8-766defd30587": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/members-about-ooi\/1.2279.0\/ProfileViewerWidgetNoCss.bundle.min.js",
                                        "widgetId": "14dbefb9-3b7b-c4e9-53e8-766defd30587",
                                        "cssPerBreakpoint": true
                                    }
                                }
                            },
                            "14ce28f7-7eb0-3745-22f8-074b0e2401fb": {
                                "appDefId": "14ce28f7-7eb0-3745-22f8-074b0e2401fb",
                                "appDefName": "Profile Card",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/",
                                    "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0"
                                },
                                "widgets": {
                                    "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/profile-card-tpa-ooi\/1.2548.0\/ProfileCardViewerWidgetNoCss.bundle.min.js",
                                        "widgetId": "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd",
                                        "cssPerBreakpoint": true
                                    }
                                }
                            },
                            "b976560c-3122-4351-878f-453f337b7245": {
                                "appDefId": "b976560c-3122-4351-878f-453f337b7245",
                                "appDefName": "Member Page",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "siteAssets": "{urlTemplate: {siteAssets}?siteId=27e854ac-99e9-4626-b905-ff10071df796&metaSiteId=4a8777cf-00e8-44ee-95cd-d6abc09dc8e4&siteRevision=770",
                                    "blocks_devSiteUrl": "https:\/\/justea2.editorx.io\/vxgooi3j6xm5ykyver02",
                                    "blocks_widgetManifestsUrl": "\/manifests\/b976560c-3122-4351-878f-453f337b7245\/770\/manifests.json",
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0",
                                    "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/profile-page-bob\/1.2140.0"
                                },
                                "errorReportingUrl": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                                "widgets": {
                                    "2f6c5608-393f-4b15-bfd8-d4e15396787a": {
                                        "controllerUrl": "",
                                        "componentUrl": "",
                                        "noCssComponentUrl": "",
                                        "errorReportingUrl": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                                        "widgetId": "2f6c5608-393f-4b15-bfd8-d4e15396787a"
                                    },
                                    "5ab312ae-0cf7-4093-bbf5-5e4d3690151c": {
                                        "controllerUrl": "",
                                        "componentUrl": "",
                                        "noCssComponentUrl": "",
                                        "errorReportingUrl": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                                        "widgetId": "5ab312ae-0cf7-4093-bbf5-5e4d3690151c"
                                    },
                                    "31aadcb0-9add-42cb-9b21-72f41e91389b": {
                                        "controllerUrl": "",
                                        "componentUrl": "https:\/\/empty",
                                        "noCssComponentUrl": "",
                                        "errorReportingUrl": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                                        "widgetId": "31aadcb0-9add-42cb-9b21-72f41e91389b"
                                    },
                                    "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b": {
                                        "controllerUrl": "",
                                        "componentUrl": "https:\/\/empty",
                                        "noCssComponentUrl": "",
                                        "errorReportingUrl": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                                        "widgetId": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b"
                                    },
                                    "a26fd26a-3dd9-42ca-b381-326a9c143e38": {
                                        "controllerUrl": "",
                                        "componentUrl": "",
                                        "noCssComponentUrl": "",
                                        "errorReportingUrl": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                                        "widgetId": "a26fd26a-3dd9-42ca-b381-326a9c143e38"
                                    },
                                    "596a6688-3ad7-46f7-bb9c-00023225876d": {
                                        "controllerUrl": "",
                                        "componentUrl": "",
                                        "noCssComponentUrl": "",
                                        "errorReportingUrl": "https:\/\/78f7996315bc402f9dcb8a2f974b82d1@sentry.wixpress.com\/3935",
                                        "widgetId": "596a6688-3ad7-46f7-bb9c-00023225876d"
                                    }
                                }
                            },
                            "dataBinding": {
                                "appDefId": "dataBinding",
                                "appDefName": "Data Binding",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/dbsm-viewer-app\/1.8506.0\/app.js",
                                "baseUrls": {},
                                "widgets": {}
                            },
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                "appDefId": "675bbcef-18d8-41f5-800e-131ec9e08762",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/wix-code-viewer-app\/1.1479.725\/app.js",
                                "baseUrls": {},
                                "widgets": {}
                            }
                        },
                        "blocksBootstrapData": {
                            "blocksAppsData": {
                                "b976560c-3122-4351-878f-453f337b7245": {
                                    "siteHeaderUrl": "f3f94510e24dd6bd57b8e97b50d98d4c_r3.json",
                                    "wixCodeGridId": "e453d54c-37a8-4f10-b887-8bc09c3bb721",
                                    "wixCodeInstanceId": "9a9eaf1c-6655-4e0c-9789-ee2c43dd1920"
                                }
                            },
                            "experiments": {},
                            "experimentsQueryParams": "analyze-imported-namespaces=true&init-platform-api-provider=true&get-app-def-id-from-package-name=false&disable-yarn-pnp-mode=undefined&bundler-traffic-to-aws=true&bundler-typescript-analysis=true"
                        },
                        "window": {
                            "csrfToken": "1731310538|EpT-SztCQ0wJ"
                        },
                        "location": {
                            "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                            "isPremiumDomain": true,
                            "metaSiteId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b",
                            "userFileDomainUrl": "filesusr.com"
                        },
                        "bi": {
                            "ownerId": "1092599e-5b99-4ebc-b2e1-09c6b2548fb9",
                            "isMobileFriendly": true,
                            "isPreview": false,
                            "requestId": "1731310767.6863767740581307140"
                        },
                        "platformAPIData": {
                            "routersConfigMap": {}
                        },
                        "wixCodeBootstrapData": {
                            "wixCodeAppDefinitionId": "675bbcef-18d8-41f5-800e-131ec9e08762",
                            "wixCodeInstanceId": "7106ca55-7fa2-46c6-b32a-5db764f82980",
                            "wixCloudBaseDomain": "wix-code.com",
                            "dbsmViewerApp": "https:\/\/static.parastorage.com\/services\/dbsm-viewer-app\/1.8506.0",
                            "wixCodePlatformBaseUrl": "https:\/\/static.parastorage.com\/services\/wix-code-platform\/1.1097.93",
                            "wixCodeModel": {
                                "appData": {
                                    "codeAppId": "350633ae-2249-4037-a8e3-d4a6e9c4ea6e"
                                },
                                "signedAppRenderInfo": "24e4c56121b0e9c5df1666b8afbe1fb373d26dbb.eyJncmlkQXBwSWQiOiIzNTA2MzNhZS0yMjQ5LTQwMzctYThlMy1kNGE2ZTljNGVhNmUiLCJodG1sU2l0ZUlkIjoiMTMyMmRhZjgtMDc2NS00OGEyLTljM2UtY2UxZTZiYTEzMWM4IiwiZGVtb0lkIjpudWxsLCJzaWduRGF0ZSI6MTczMTMxMDc2NzgyNH0="
                            },
                            "wixCodePageIds": {},
                            "elementorySupport": {
                                "baseUrl": "https:\/\/mx.andrewlord.com.au\/_api\/wix-code-public-dispatcher-ng\/siteview"
                            },
                            "codePackagesData": []
                        },
                        "autoFrontendModulesBaseUrl": "https:\/\/static.parastorage.com\/services\/auto-frontend-modules\/1.6238.0",
                        "disabledPlatformApps": {},
                        "widgetsClientSpecMapData": {
                            "14517e1a-3ff0-af98-408e-2bd6953c36a2": {
                                "14517f3f-ffc5-eced-f592-980aaa0bbb5c": {
                                    "widgetName": "wix_visitors",
                                    "componentFields": {}
                                }
                            },
                            "2936472a-a1ed-4ae5-9f71-614313a9f4e7": {
                                "0daa3702-0e20-48ca-ba15-ad380e00e6b6": {
                                    "widgetName": "Challenge Payment",
                                    "componentFields": {}
                                },
                                "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3": {
                                    "widgetName": "0e9aad02-e5a7-45f3-8b8e-a842a5e99be3",
                                    "componentFields": {}
                                },
                                "847c2f5d-017f-499f-9c3e-069164fc116f": {
                                    "widgetName": "challenge_page",
                                    "componentFields": {}
                                },
                                "a159b4d2-831b-410c-9e77-ec3f40c9cace": {
                                    "widgetName": "a159b4d2-831b-410c-9e77-ec3f40c9cace",
                                    "componentFields": {}
                                },
                                "ef4e59bd-625a-484e-9ba1-650d4aecf03b": {
                                    "widgetName": "achievements_dev",
                                    "componentFields": {}
                                },
                                "c88902a1-7fbf-4ff1-b19a-af39c48bc740": {
                                    "widgetName": "c88902a1-7fbf-4ff1-b19a-af39c48bc740",
                                    "componentFields": {}
                                },
                                "20dcd94b-f847-4e24-b3f2-0d3894593f7a": {
                                    "widgetName": "20dcd94b-f847-4e24-b3f2-0d3894593f7a",
                                    "componentFields": {}
                                }
                            },
                            "148c2287-c669-d849-d153-463c7486a694": {
                                "47a7e7bb-f412-4093-9155-1ff5adbc4dae": {
                                    "widgetName": "47a7e7bb-f412-4093-9155-1ff5adbc4dae",
                                    "componentFields": {}
                                },
                                "0a9f687f-7e00-4576-a8e1-9415844b8f44": {
                                    "widgetName": "0a9f687f-7e00-4576-a8e1-9415844b8f44",
                                    "componentFields": {}
                                },
                                "8cce2b9e-8549-46c7-8ad2-f75bf28534ac": {
                                    "widgetName": "8cce2b9e-8549-46c7-8ad2-f75bf28534ac",
                                    "componentFields": {}
                                },
                                "a7dcdfcb-8abd-4008-af19-fed5fcd12b40": {
                                    "widgetName": "groups",
                                    "componentFields": {}
                                },
                                "83b2af08-c021-40c8-a3a5-b329a959ec2b": {
                                    "widgetName": "83b2af08-c021-40c8-a3a5-b329a959ec2b",
                                    "componentFields": {}
                                },
                                "e018cc55-7b1c-4500-a2e5-969f22c8a33a": {
                                    "widgetName": "e018cc55-7b1c-4500-a2e5-969f22c8a33a",
                                    "componentFields": {}
                                },
                                "513a5d84-3ebb-4ca6-a5aa-83effd2123b9": {
                                    "widgetName": "group",
                                    "componentFields": {}
                                }
                            },
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {},
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": {},
                            "bbe1406a-31f5-4f3f-9e0a-b39dfd25274f": {},
                            "14409595-f076-4753-8303-9a86f9f71469": {
                                "144097ea-fea0-498e-ade7-e6de40127106": {
                                    "widgetName": "wix_vod_develop",
                                    "componentFields": {}
                                }
                            },
                            "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": {},
                            "b976560c-3122-4351-878f-453f337b7245": {
                                "2f6c5608-393f-4b15-bfd8-d4e15396787a": {
                                    "componentFields": {}
                                },
                                "5ab312ae-0cf7-4093-bbf5-5e4d3690151c": {
                                    "componentFields": {}
                                },
                                "31aadcb0-9add-42cb-9b21-72f41e91389b": {
                                    "widgetName": "31aadcb0-9add-42cb-9b21-72f41e91389b",
                                    "componentFields": {}
                                },
                                "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b": {
                                    "widgetName": "5a4d1a4f-58c5-4389-8a03-5cbabe4a9f3b",
                                    "componentFields": {}
                                },
                                "a26fd26a-3dd9-42ca-b381-326a9c143e38": {
                                    "componentFields": {}
                                },
                                "596a6688-3ad7-46f7-bb9c-00023225876d": {
                                    "componentFields": {}
                                }
                            },
                            "14cffd81-5215-0a7f-22f8-074b0e2401fb": {
                                "14dd1af6-3e02-63db-0ef2-72fbc7cc3136": {
                                    "widgetName": "member_info",
                                    "componentFields": {}
                                }
                            },
                            "14dbef06-cc42-5583-32a7-3abd44da4908": {
                                "14dbefb9-3b7b-c4e9-53e8-766defd30587": {
                                    "widgetName": "about",
                                    "componentFields": {}
                                }
                            },
                            "14ce28f7-7eb0-3745-22f8-074b0e2401fb": {
                                "14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd": {
                                    "widgetName": "profile",
                                    "componentFields": {}
                                }
                            },
                            "dataBinding": {}
                        },
                        "essentials": {
                            "appsConductedExperiments": {
                                "14409595-f076-4753-8303-9a86f9f71469": {
                                    "specs.vod.iosHlsJsOverrideNative": "true",
                                    "specs.vod.lazyLoadPlayer": "true"
                                },
                                "b976560c-3122-4351-878f-453f337b7245": {
                                    "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                    "specs.responsive-editor.NoMeasureInstall": "true",
                                    "specs.membersAreaV2.SyncDataWithMenuItems": "true",
                                    "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                    "specs.membersArea.SplitInstallation": "false",
                                    "specs.membersArea.AddWidgetsPluginsResilience": "true",
                                    "specs.membersArea.installedWidgetsFromRoutes": "true",
                                    "specs.membersAreaV2.UseSyncDeleteActions": "true",
                                    "specs.membersArea.EnableSausageBar": "true",
                                    "specs.membersArea.UninstallMASubApps": "true",
                                    "specs.membersArea.UseAppDataForRoutes": "true",
                                    "specs.membersArea.EnableUnifiedManager": "true",
                                    "specs.profilePageBoB.VerticalDeletionRemoveRefreshApp": "true",
                                    "specs.membersAreaV2.fasterMemberFetching": "true",
                                    "specs.membersArea.OptimizeViewedMemberRolesFetch": "true"
                                },
                                "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": {
                                    "specs.membersArea.enableAppData": "true",
                                    "specs.membersArea.enableNotificationsOnV2": "true"
                                },
                                "2936472a-a1ed-4ae5-9f71-614313a9f4e7": {
                                    "specs.programs.OOIEnableOptimisticUpdateForScheduled": "true",
                                    "specs.ricos.newFormattingToolbar": "true",
                                    "specs.programs.TestReplaceVendors": "false",
                                    "specs.challenges.OOIRenderSeoMetatagsProgram": "true",
                                    "specs.programs.ShowPaymentPageSettingsStudio": "false",
                                    "specs.challenges.OOISeoImageUrl": "true",
                                    "specs.ricos.newVideoVerticalAndSocialModals": "true",
                                    "specs.programs.ShowPaymentPageSettings": "false",
                                    "specs.programs.OOIEnableUndoButton": "true",
                                    "specs.wixRicos.withWixStyles": "true",
                                    "specs.programs.EnableBidirectionalAlignment": "true",
                                    "specs.challenges.BMOwnerEditTemplate": "false",
                                    "specs.programs.OOIStyleBP": "true",
                                    "specs.ricos.removeUsmFromImageUrls": "true",
                                    "specs.programs.OOIExtendedLimits": "true",
                                    "specs.challenges.BMOwnerAutomations": "true",
                                    "spec.programs.VisitorSettingsRedesign": "true",
                                    "specs.programs.OOIEnablePremium": "true",
                                    "specs.programs.OOIParticipantPageSeoMetaTags": "true",
                                    "spec.programs.RemoveVisitorPageAutoRedirect": "true",
                                    "specs.programs.EnableParticipantPage": "true",
                                    "specs.challenges.WebMemberDripContent": "true",
                                    "specs.programs.MALeaveChallengeContent": "false",
                                    "specs.challenges.OOIHideStartDateSelection": "true",
                                    "specs.programs.EnableEditorCustomPageInfo": "true",
                                    "specs.ricos.fixedTabSize": "true",
                                    "spec.programs.MASettingsRedesign": "true",
                                    "spec.programs.HandleCustomizedUrlSegments": "true",
                                    "spec.programs.UseRceNext": "false",
                                    "specs.programs.OOIEnableLinksAsBlank": "false",
                                    "spec.programs.ProgramListSettingsRedesign": "true",
                                    "spec.programs.RedirectToParticipantPage": "true",
                                    "specs.program.EnableSocialShareInCompleteModal": "true",
                                    "specs.programs.OOISkipMAInstallationUsers": "true",
                                    "specs.programs.EnableParticipantPageMigrations": "false",
                                    "specs.programs.OOIEnableSettingsIndicators": "false",
                                    "specs.ricos.encAutoImageUrls": "true",
                                    "specs.programs.OOIAddWarmupGetChallenge": "true",
                                    "specs.ricos.tiptapEditor": "false",
                                    "specs.ricos.newSettingsModals": "true"
                                },
                                "14dbef06-cc42-5583-32a7-3abd44da4908": {
                                    "specs.UouSubscriptionServiceUseApiGatewayClient": "true",
                                    "specs.membersArea.DoNotWaitInstallNavigation": "true",
                                    "specs.membersArea.UseMembersNgApiUpdate": "false",
                                    "specs.media.MediaManager3": "true",
                                    "specs.ricos.newFormattingToolbar": "true",
                                    "specs.membersArea.HideMemberSortField": "true",
                                    "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                    "specs.membersArea.CheckUserContributorPermissions": "true",
                                    "specs.membersArea.CheckIsAppActiveBeforeInstallV1": "true",
                                    "specs.membersArea.HandleMembersNgUpdateDomainEvents": "true",
                                    "specs.membersArea.UseGetMyMemberInMemberHandler": "true",
                                    "specs.membersArea.EnableMembersAreaContextCheck": "true",
                                    "specs.profileCardOOI.ReorganizeActionButtons": "true",
                                    "specs.membersArea.SplitCustomPageTranslations": "true",
                                    "specs.membersArea.AddSuspendedFilter": "true",
                                    "specs.membersfollow.ActivityCounters": "true",
                                    "specs.profileCardOOI.TitleForAll": "true",
                                    "specs.membersArea.ShowPageRedirectNote": "true",
                                    "specs.membersArea.UseCustomizeMemberPageCTA": "true",
                                    "specs.membersArea.UseViewedMemberBlocked": "true",
                                    "specs.membersArea.UseFollowersV3": "true",
                                    "specs.ricos.newVideoVerticalAndSocialModals": "true",
                                    "specs.myAccount.ShowBlockedMembersModalEmptyState": "true",
                                    "specs.membersArea.enableTimeoutLogs": "false",
                                    "specs.membersArea.GetRoutesUseGlobal": "true",
                                    "specs.membersApi.UseProfilesApiForTitleAndCoverWrites": "true",
                                    "specs.membersArea.ShowNewFFBorderSettings": "true",
                                    "specs.membersArea.AddNotificationsIconOnV2": "true",
                                    "specs.wixBlog.AddWriterModalUpgrade": "true",
                                    "specs.membersArea.installationSourceOfTruth": "true",
                                    "specs.wixRicos.withWixStyles": "true",
                                    "specs.responsive-editor.NoMeasureInstall": "true",
                                    "specs.membersArea.framelessEditorProfilePage": "true",
                                    "specs.membersArea.SkipTemplateHandlerForSettings": "false",
                                    "specs.membersArea.UsePopoverDynamicPositioning": "true",
                                    "specs.membersArea.MemberHandlerUseMembersNgApi": "true",
                                    "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                    "specs.membersArea.UseIsPermittedOnAppData": "true",
                                    "specs.membersArea.UseMembersNgApi": "true",
                                    "specs.membersArea.ResolveMemberDuplication": "true",
                                    "specs.wixBlog.BMCommentsDashboard": "false",
                                    "specs.membersArea.DoNotCreateTeamMember": "false",
                                    "specs.membersArea.NotificationsIconFixerOnV2": "true",
                                    "specs.membersArea.ConsumeMembersPiiExchangeDomainEvents": "true",
                                    "specs.membersArea.handleMobileComponentsDeletion": "true",
                                    "specs.membersArea.PrivateMemberIndicator": "false",
                                    "specs.membersAreaV2.enableCustomPages": "true",
                                    "specs.membersArea.ShowMoreMembersWithBadge": "false",
                                    "specs.membersAboutOOI.DisableButtonOnPublish": "true",
                                    "specs.membersArea.AddRevisionField": "true",
                                    "specs.profileCardOOI.JoinCommunityCTAUnderMoreActions": "true",
                                    "specs.membersArea.EnableTpaPageLinksDataFixerForV2MenuItems": "true",
                                    "specs.membersArea.EnableTpaPageLinksDataFixerForV3MenuItems": "true",
                                    "specs.ident.SiteMembersSocialDisclaimer": "true",
                                    "specs.membersAbout.EnablePostListInSEO": "true",
                                    "specs.ricos.removeUsmFromImageUrls": "true",
                                    "specs.membersArea.UseQueryMembersTextSearch": "true",
                                    "specs.membersAreaV2.EnablePageInfoPanelCustomPage": "false",
                                    "specs.myAccount.showBlockedMembersModalRedesign": "true",
                                    "specs.membersArea.MetaSiteSpecialConsumerV2": "true",
                                    "specs.membersAboutOOI.EnableMobileTitleSetting": "true",
                                    "specs.membersAboutOOI.EnableDesignTabResetButtonPerPage": "true",
                                    "specs.membersArea.HideSuspendedLabelForNonOwners": "true",
                                    "specs.membersArea.SortByNumbersInElastic": "true",
                                    "specs.membersAboutOOI.EnableMobileDesignTabSectionHeaders": "true",
                                    "specs.myAccount.ShowPrivacySettingsMessageForSiteOwners": "true",
                                    "specs.membersArea.MembersApiUseMembersNgApiQueryForSortBy": "true",
                                    "specs.membersArea.UninstallMASubApps": "true",
                                    "specs.membersArea.UseAppDataForRoutes": "true",
                                    "specs.membersArea.CreateMissingMember": "true",
                                    "specs.membersArea.EnableMenusDataFixer": "true",
                                    "specs.members.usePlatformizedServicesForUpdate": "true",
                                    "specs.wixBlog.MAHideWriterActionsInViewer": "true",
                                    "specs.membersArea.EnableVerticalProfileInstallFixer": "true",
                                    "specs.membersArea.HideSuspendedLabelForNonOwnersFFBox": "true",
                                    "specs.membersArea.EnableMemberPagePermissions": "false",
                                    "specs.ricos.fixedTabSize": "true",
                                    "specs.profileCardOOI.EnableProfileDetailsEdit": "true",
                                    "specs.membersAboutOOI.EnableButtonBorderSettings": "true",
                                    "specs.membersArea.UseIsPermittedOnMediaCredentials": "true",
                                    "specs.membersArea.fixLoginBarResponsiveLayout": "true",
                                    "specs.membersArea.EnableV2SilentInstall": "true",
                                    "specs.membersAreaV3.ReAddPageWorkaround": "true",
                                    "specs.membersArea.OptimizeVerticalDeletion": "true",
                                    "specs.membersArea.UseGetOrCreateMemberV2": "true",
                                    "specs.membersAboutOOI.EnablePluralStatisticFix": "true",
                                    "specs.ricos.encAutoImageUrls": "true",
                                    "specs.ricos.tiptapEditor": "false",
                                    "specs.membersArea.migrateToV2": "false",
                                    "specs.membersArea.ClearSettings": "true",
                                    "specs.ricos.newSettingsModals": "true",
                                    "specs.membersArea.CallGetMyMemberForCreatingMember": "true"
                                },
                                "14cffd81-5215-0a7f-22f8-074b0e2401fb": {
                                    "specs.UouSubscriptionServiceUseApiGatewayClient": "true",
                                    "specs.membersArea.DoNotWaitInstallNavigation": "true",
                                    "specs.membersArea.UseMembersNgApiUpdate": "false",
                                    "specs.media.MediaManager3": "true",
                                    "specs.membersArea.HideMemberSortField": "true",
                                    "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                    "specs.membersArea.CheckUserContributorPermissions": "true",
                                    "specs.membersArea.CheckIsAppActiveBeforeInstallV1": "true",
                                    "specs.membersArea.HandleMembersNgUpdateDomainEvents": "true",
                                    "specs.membersArea.UseGetMyMemberInMemberHandler": "true",
                                    "specs.membersArea.EnableMembersAreaContextCheck": "true",
                                    "specs.profileCardOOI.ReorganizeActionButtons": "true",
                                    "specs.membersArea.SplitCustomPageTranslations": "true",
                                    "specs.membersArea.AddSuspendedFilter": "true",
                                    "specs.membersfollow.ActivityCounters": "true",
                                    "specs.profileCardOOI.TitleForAll": "true",
                                    "specs.membersArea.ShowPageRedirectNote": "true",
                                    "specs.membersArea.UseCustomizeMemberPageCTA": "true",
                                    "specs.membersArea.ChangeLoginInfo": "true",
                                    "specs.membersArea.UseViewedMemberBlocked": "true",
                                    "specs.membersArea.UseFollowersV3": "true",
                                    "specs.myAccount.UseNewSettings": "true",
                                    "specs.myAccount.ShowBlockedMembersModalEmptyState": "true",
                                    "specs.membersArea.enableTimeoutLogs": "false",
                                    "specs.membersArea.GetRoutesUseGlobal": "true",
                                    "specs.membersApi.UseProfilesApiForTitleAndCoverWrites": "true",
                                    "specs.membersArea.ShowNewFFBorderSettings": "true",
                                    "specs.membersArea.AddNotificationsIconOnV2": "true",
                                    "specs.wixBlog.AddWriterModalUpgrade": "true",
                                    "specs.membersArea.installationSourceOfTruth": "true",
                                    "specs.responsive-editor.NoMeasureInstall": "true",
                                    "specs.membersArea.SkipTemplateHandlerForSettings": "false",
                                    "specs.membersArea.UsePopoverDynamicPositioning": "true",
                                    "specs.membersArea.MemberHandlerUseMembersNgApi": "true",
                                    "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                    "specs.membersArea.UseIsPermittedOnAppData": "true",
                                    "specs.membersArea.UseMembersNgApi": "true",
                                    "specs.membersArea.ResolveMemberDuplication": "true",
                                    "specs.wixBlog.BMCommentsDashboard": "false",
                                    "specs.membersArea.DoNotCreateTeamMember": "false",
                                    "specs.membersArea.NotificationsIconFixerOnV2": "true",
                                    "specs.membersArea.ConsumeMembersPiiExchangeDomainEvents": "true",
                                    "specs.membersArea.handleMobileComponentsDeletion": "true",
                                    "specs.membersArea.PrivateMemberIndicator": "false",
                                    "specs.membersAreaV2.enableCustomPages": "true",
                                    "specs.membersArea.ShowMoreMembersWithBadge": "false",
                                    "specs.membersArea.AddRevisionField": "true",
                                    "specs.profileCardOOI.JoinCommunityCTAUnderMoreActions": "true",
                                    "specs.membersArea.EnableTpaPageLinksDataFixerForV2MenuItems": "true",
                                    "specs.membersArea.EnableTpaPageLinksDataFixerForV3MenuItems": "true",
                                    "specs.ident.SiteMembersSocialDisclaimer": "true",
                                    "specs.membersArea.UseQueryMembersTextSearch": "true",
                                    "specs.membersAreaV2.EnablePageInfoPanelCustomPage": "false",
                                    "specs.myAccount.showBlockedMembersModalRedesign": "true",
                                    "specs.membersArea.MetaSiteSpecialConsumerV2": "true",
                                    "specs.myAccount.EnableUrlEditNote": "true",
                                    "specs.membersArea.HideSuspendedLabelForNonOwners": "true",
                                    "specs.myAccount.ShowButtonTextSetting": "true",
                                    "specs.membersArea.SortByNumbersInElastic": "true",
                                    "specs.myAccount.ShowPrivacySettingsMessageForSiteOwners": "true",
                                    "specs.membersArea.MembersApiUseMembersNgApiQueryForSortBy": "true",
                                    "specs.membersArea.UninstallMASubApps": "true",
                                    "specs.membersArea.UseAppDataForRoutes": "true",
                                    "specs.membersArea.CreateMissingMember": "true",
                                    "specs.membersArea.EnableMenusDataFixer": "true",
                                    "specs.members.usePlatformizedServicesForUpdate": "true",
                                    "specs.wixBlog.MAHideWriterActionsInViewer": "true",
                                    "specs.membersArea.EnableVerticalProfileInstallFixer": "true",
                                    "specs.membersArea.HideSuspendedLabelForNonOwnersFFBox": "true",
                                    "specs.membersArea.EnableMemberPagePermissions": "false",
                                    "specs.profileCardOOI.EnableProfileDetailsEdit": "true",
                                    "specs.membersArea.UseIsPermittedOnMediaCredentials": "true",
                                    "specs.membersArea.fixLoginBarResponsiveLayout": "true",
                                    "specs.membersArea.EnableV2SilentInstall": "true",
                                    "specs.membersAreaV3.ReAddPageWorkaround": "true",
                                    "specs.membersArea.OptimizeVerticalDeletion": "true",
                                    "specs.myAccount.EnableDesignTabResetButtonPerPage": "true",
                                    "specs.membersArea.framelessEditorMyAccount": "true",
                                    "specs.membersArea.UseGetOrCreateMemberV2": "true",
                                    "specs.membersArea.migrateToV2": "false",
                                    "specs.membersArea.ClearSettings": "true",
                                    "specs.membersArea.CallGetMyMemberForCreatingMember": "true",
                                    "specs.myAccount.AddressLine2": "true"
                                },
                                "148c2287-c669-d849-d153-463c7486a694": {
                                    "specs.groups.UpdateSidebarLayout": "false",
                                    "specs.ricos.newFormattingToolbar": "true",
                                    "specs.groups.EnableGroupsInMA": "true",
                                    "specs.groups.UpdatedMemberPermissions": "true",
                                    "specs.ricos.newVideoVerticalAndSocialModals": "true",
                                    "specs.groups.cssPBI": "true",
                                    "specs.groups.SEO-subtitle": "true",
                                    "specs.wixRicos.withWixStyles": "true",
                                    "spec.groups.events-by-uou": "false",
                                    "specs.groups.GroupsInMAMigration": "true",
                                    "specs.ricos.removeUsmFromImageUrls": "true",
                                    "specs.groups.GroupPrivacyLabel": "true",
                                    "specs.groups.MemberOnboarding": "false",
                                    "specs.groups.EnableReactionsOnComment": "true",
                                    "specs.groups.EnablePostTitle": "false",
                                    "specs.ricos.fixedTabSize": "true",
                                    "specs.groups.ExtendedMobileDesignSettings": "true",
                                    "specs.groups.GroupSearch": "true",
                                    "specs.ricos.encAutoImageUrls": "true",
                                    "specs.ricos.tiptapEditor": "false",
                                    "specs.ricos.newSettingsModals": "true"
                                },
                                "14ce1214-b278-a7e4-1373-00cebd1bef7c": {
                                    "specs.forms.EnableFormsInBlog": "true"
                                },
                                "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                    "specs.wixCode.LoadWithImportAMDModule": "true",
                                    "specs.wixCode.LoadNamespacesPerPage": "false",
                                    "specs.wixcode.ViewerExperimentOwnerScopeTest": "true",
                                    "specs.wixCode.resolveMissingPlatformNamespaces": "false",
                                    "specs.wixcode.ViewerExperimentTest": "false"
                                },
                                "14ce28f7-7eb0-3745-22f8-074b0e2401fb": {
                                    "specs.UouSubscriptionServiceUseApiGatewayClient": "true",
                                    "specs.membersArea.DoNotWaitInstallNavigation": "true",
                                    "specs.membersArea.UseMembersNgApiUpdate": "false",
                                    "specs.media.MediaManager3": "true",
                                    "specs.membersArea.HideMemberSortField": "true",
                                    "specs.profileCardOOI.MakeProfileCardRemovableInNewMA": "true",
                                    "specs.membersArea.DisableLivePreviewRefreshes": "true",
                                    "specs.membersArea.CheckUserContributorPermissions": "true",
                                    "specs.membersArea.CheckIsAppActiveBeforeInstallV1": "true",
                                    "specs.membersArea.HandleMembersNgUpdateDomainEvents": "true",
                                    "specs.membersArea.UseGetMyMemberInMemberHandler": "true",
                                    "specs.membersArea.EnableMembersAreaContextCheck": "true",
                                    "specs.profileCardOOI.ReorganizeActionButtons": "true",
                                    "specs.profileCardOOI.NewResetSettings": "true",
                                    "specs.membersArea.SplitCustomPageTranslations": "true",
                                    "specs.membersArea.AddSuspendedFilter": "true",
                                    "specs.membersfollow.ActivityCounters": "true",
                                    "specs.profileCardOOI.TitleForAll": "true",
                                    "specs.membersArea.ShowPageRedirectNote": "true",
                                    "specs.membersArea.UseCustomizeMemberPageCTA": "true",
                                    "specs.membersArea.UseViewedMemberBlocked": "true",
                                    "specs.membersArea.UseFollowersV3": "true",
                                    "specs.myAccount.ShowBlockedMembersModalEmptyState": "true",
                                    "specs.membersArea.enableTimeoutLogs": "false",
                                    "specs.membersArea.GetRoutesUseGlobal": "true",
                                    "specs.membersApi.UseProfilesApiForTitleAndCoverWrites": "true",
                                    "specs.profileCardOOI.UseMiddlewareForGlobalSettingsGetter": "true",
                                    "specs.membersArea.ShowNewFFBorderSettings": "true",
                                    "specs.membersArea.AddNotificationsIconOnV2": "true",
                                    "specs.wixBlog.AddWriterModalUpgrade": "true",
                                    "specs.membersArea.installationSourceOfTruth": "true",
                                    "specs.responsive-editor.NoMeasureInstall": "true",
                                    "specs.membersArea.SkipTemplateHandlerForSettings": "false",
                                    "specs.membersArea.UsePopoverDynamicPositioning": "true",
                                    "specs.membersArea.MemberHandlerUseMembersNgApi": "true",
                                    "specs.membersArea.EnableMyAccountParallelInstall": "true",
                                    "specs.profileCardOOI.UseMiddlewareForMemberGetter": "true",
                                    "specs.membersArea.UseIsPermittedOnAppData": "true",
                                    "specs.membersArea.UseMembersNgApi": "true",
                                    "specs.membersArea.ResolveMemberDuplication": "true",
                                    "specs.wixBlog.BMCommentsDashboard": "false",
                                    "specs.membersArea.DoNotCreateTeamMember": "false",
                                    "specs.membersArea.NotificationsIconFixerOnV2": "true",
                                    "specs.membersArea.ConsumeMembersPiiExchangeDomainEvents": "true",
                                    "specs.membersArea.handleMobileComponentsDeletion": "true",
                                    "specs.membersArea.PrivateMemberIndicator": "false",
                                    "specs.membersAreaV2.enableCustomPages": "true",
                                    "specs.membersArea.ShowMoreMembersWithBadge": "false",
                                    "specs.membersArea.framelessEditorPW": "true",
                                    "specs.membersArea.AddRevisionField": "true",
                                    "specs.profileCardOOI.JoinCommunityCTAUnderMoreActions": "true",
                                    "specs.membersArea.EnableTpaPageLinksDataFixerForV2MenuItems": "true",
                                    "specs.membersArea.EnableTpaPageLinksDataFixerForV3MenuItems": "true",
                                    "specs.ident.SiteMembersSocialDisclaimer": "true",
                                    "specs.membersArea.UseQueryMembersTextSearch": "true",
                                    "specs.membersAreaV2.EnablePageInfoPanelCustomPage": "false",
                                    "specs.profileCardOOI.UseBlockedCheckFollowButton": "true",
                                    "specs.myAccount.showBlockedMembersModalRedesign": "true",
                                    "specs.membersArea.MetaSiteSpecialConsumerV2": "true",
                                    "specs.membersArea.HideSuspendedLabelForNonOwners": "true",
                                    "specs.membersArea.SortByNumbersInElastic": "true",
                                    "specs.myAccount.ShowPrivacySettingsMessageForSiteOwners": "true",
                                    "specs.membersArea.MembersApiUseMembersNgApiQueryForSortBy": "true",
                                    "specs.membersArea.UninstallMASubApps": "true",
                                    "specs.membersArea.UseAppDataForRoutes": "true",
                                    "specs.membersArea.CreateMissingMember": "true",
                                    "specs.membersArea.EnableMenusDataFixer": "true",
                                    "specs.members.usePlatformizedServicesForUpdate": "true",
                                    "specs.wixBlog.MAHideWriterActionsInViewer": "true",
                                    "specs.membersArea.EnableVerticalProfileInstallFixer": "true",
                                    "specs.membersArea.HideSuspendedLabelForNonOwnersFFBox": "true",
                                    "specs.membersArea.EnableMemberPagePermissions": "false",
                                    "specs.profileCardOOI.EnableProfileDetailsEdit": "true",
                                    "specs.membersArea.UseIsPermittedOnMediaCredentials": "true",
                                    "specs.profileCardOOI.UseMiddlewareForRolesMapGetter": "true",
                                    "specs.membersArea.fixLoginBarResponsiveLayout": "true",
                                    "specs.membersArea.EnableV2SilentInstall": "true",
                                    "specs.membersAreaV3.ReAddPageWorkaround": "true",
                                    "specs.membersArea.OptimizeVerticalDeletion": "true",
                                    "specs.membersArea.UseGetOrCreateMemberV2": "true",
                                    "specs.membersArea.migrateToV2": "false",
                                    "specs.membersArea.ClearSettings": "true",
                                    "specs.membersArea.CallGetMyMemberForCreatingMember": "true"
                                }
                            }
                        },
                        "forceEmptySdks": false,
                        "appDefIdToIsMigratedToGetPlatformApi": {
                            "14517e1a-3ff0-af98-408e-2bd6953c36a2": false,
                            "2936472a-a1ed-4ae5-9f71-614313a9f4e7": false,
                            "148c2287-c669-d849-d153-463c7486a694": false,
                            "675bbcef-18d8-41f5-800e-131ec9e08762": false,
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": false,
                            "bbe1406a-31f5-4f3f-9e0a-b39dfd25274f": false,
                            "14409595-f076-4753-8303-9a86f9f71469": false,
                            "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": false,
                            "b976560c-3122-4351-878f-453f337b7245": false,
                            "14cffd81-5215-0a7f-22f8-074b0e2401fb": false,
                            "14dbef06-cc42-5583-32a7-3abd44da4908": false,
                            "14ce28f7-7eb0-3745-22f8-074b0e2401fb": false,
                            "dataBinding": false
                        }
                    },
                    "appsScripts": {
                        "urls": {
                            "14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9": ["https:\/\/static.parastorage.com\/services\/santa-members-viewer-app\/1.2613.0\/viewerScript.bundle.min.js"]
                        },
                        "scope": "page"
                    },
                    "debug": {
                        "disablePlatform": false,
                        "disableSnapshots": false,
                        "enableSnapshots": false
                    }
                }
            },
            "siteAssets": {
                "dataFixersParams": {
                    "experiments": {
                        "specs.thunderbolt.use_data_fixed_pages_upstream": true,
                        "dm_deleteLayoutOverridesForRefComponents": true,
                        "dm_migrateOldHoverBoxToNewFixer": true,
                        "dm_fixAnchorUrlFragment": true,
                        "dm_removeTpaChildren": true
                    },
                    "dfVersion": "1.4098.0",
                    "isHttps": true,
                    "isUrlMigrated": true,
                    "metaSiteId": "2e965303-f7a9-452e-acb2-c4fcacca4c2b",
                    "quickActionsMenuEnabled": false,
                    "siteId": "1322daf8-0765-48a2-9c3e-ce1e6ba131c8",
                    "siteRevision": 69,
                    "v": 3,
                    "cacheVersions": {
                        "dataFixer": 6
                    },
                    "oneDocEnabled": true
                },
                "modulesParams": {
                    "features": {
                        "moduleName": "thunderbolt-features",
                        "contentType": "application\/json",
                        "resourceType": "features",
                        "languageResolutionMethod": "QueryParam",
                        "isMultilingualEnabled": false,
                        "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                        "useSandboxInHTMLComp": false,
                        "disableStaticPagesUrlHierarchy": false,
                        "aboveTheFoldSectionsNum": null,
                        "isTrackClicksAnalyticsEnabled": false,
                        "isSocialElementsBlocked": false
                    },
                    "platform": {
                        "moduleName": "thunderbolt-platform",
                        "contentType": "application\/json",
                        "resourceType": "platform",
                        "externalBaseUrl": "https:\/\/mx.andrewlord.com.au",
                        "staticHTMLComponentUrl": "https:\/\/mx-andrewlord-com-au.filesusr.com\/"
                    },
                    "css": {
                        "moduleName": "thunderbolt-css",
                        "contentType": "application\/json",
                        "resourceType": "css",
                        "shouldRunVsm": true,
                        "shouldRunCssInBrowser": false,
                        "shouldGetCssResultObject": false,
                        "stylableMetadataURLs": ["editor-elements-library.thunderbolt.5d121466973b94da439c5c28f95b48c58035994c", "editor-elements-design-systems.thunderbolt.7779570addc43639ba9ac1513d82d69c908ae684"],
                        "ooiVersions": "0daa3702-0e20-48ca-ba15-ad380e00e6b6%3Dp.challenges-web-ooi%2F1.2168.2173%2FPaymentPageViewerWidgetNoCss.%3B0e9aad02-e5a7-45f3-8b8e-a842a5e99be3%3Dp.challenges-web-ooi%2F1.2168.2173%2FParticipantPageViewerWidgetNoCss.%3B14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd%3Dp.profile-card-tpa-ooi%2F1.2548.0%2FProfileCardViewerWidgetNoCss.%3B14dbefb9-3b7b-c4e9-53e8-766defd30587%3Dp.members-about-ooi%2F1.2279.0%2FProfileViewerWidgetNoCss.%3B14dd1af6-3e02-63db-0ef2-72fbc7cc3136%3Dp.my-account-ooi%2F1.2387.0%2FMyAccountViewerWidgetNoCss.%3B20dcd94b-f847-4e24-b3f2-0d3894593f7a%3Dp.challenges-web-ooi%2F1.2168.2173%2FChallengesListPageViewerWidgetNoCss.%3B513a5d84-3ebb-4ca6-a5aa-83effd2123b9%3Dp.social-groups-ooi%2F5.105.0%2FGroupViewerWidgetNoCss.%3B847c2f5d-017f-499f-9c3e-069164fc116f%3Dp.challenges-web-ooi%2F1.2168.2173%2FChallengesPageViewerWidgetNoCss.%3Ba159b4d2-831b-410c-9e77-ec3f40c9cace%3Dp.challenges-web-ooi%2F1.2168.2173%2FThankYouPageViewerWidgetNoCss.%3Ba7dcdfcb-8abd-4008-af19-fed5fcd12b40%3Dp.social-groups-ooi%2F5.105.0%2FGroupsViewerWidgetNoCss.%3Bc88902a1-7fbf-4ff1-b19a-af39c48bc740%3Dp.challenges-web-ooi%2F1.2168.2173%2FMyProgramsViewerWidgetNoCss.%3Be018cc55-7b1c-4500-a2e5-969f22c8a33a%3Dp.social-groups-ooi%2F5.105.0%2FMembersAreaGroupsViewerWidgetNoCss."
                    },
                    "cssMappers": {
                        "moduleName": "thunderbolt-css-mappers",
                        "contentType": "application\/json",
                        "resourceType": "cssMappers",
                        "shouldRunVsm": true,
                        "shouldRunCssInBrowser": false,
                        "shouldGetCssResultObject": false,
                        "stylableMetadataURLs": ["editor-elements-library.thunderbolt.5d121466973b94da439c5c28f95b48c58035994c", "editor-elements-design-systems.thunderbolt.7779570addc43639ba9ac1513d82d69c908ae684"],
                        "ooiVersions": "0daa3702-0e20-48ca-ba15-ad380e00e6b6%3Dp.challenges-web-ooi%2F1.2168.2173%2FPaymentPageViewerWidgetNoCss.%3B0e9aad02-e5a7-45f3-8b8e-a842a5e99be3%3Dp.challenges-web-ooi%2F1.2168.2173%2FParticipantPageViewerWidgetNoCss.%3B14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd%3Dp.profile-card-tpa-ooi%2F1.2548.0%2FProfileCardViewerWidgetNoCss.%3B14dbefb9-3b7b-c4e9-53e8-766defd30587%3Dp.members-about-ooi%2F1.2279.0%2FProfileViewerWidgetNoCss.%3B14dd1af6-3e02-63db-0ef2-72fbc7cc3136%3Dp.my-account-ooi%2F1.2387.0%2FMyAccountViewerWidgetNoCss.%3B20dcd94b-f847-4e24-b3f2-0d3894593f7a%3Dp.challenges-web-ooi%2F1.2168.2173%2FChallengesListPageViewerWidgetNoCss.%3B513a5d84-3ebb-4ca6-a5aa-83effd2123b9%3Dp.social-groups-ooi%2F5.105.0%2FGroupViewerWidgetNoCss.%3B847c2f5d-017f-499f-9c3e-069164fc116f%3Dp.challenges-web-ooi%2F1.2168.2173%2FChallengesPageViewerWidgetNoCss.%3Ba159b4d2-831b-410c-9e77-ec3f40c9cace%3Dp.challenges-web-ooi%2F1.2168.2173%2FThankYouPageViewerWidgetNoCss.%3Ba7dcdfcb-8abd-4008-af19-fed5fcd12b40%3Dp.social-groups-ooi%2F5.105.0%2FGroupsViewerWidgetNoCss.%3Bc88902a1-7fbf-4ff1-b19a-af39c48bc740%3Dp.challenges-web-ooi%2F1.2168.2173%2FMyProgramsViewerWidgetNoCss.%3Be018cc55-7b1c-4500-a2e5-969f22c8a33a%3Dp.social-groups-ooi%2F5.105.0%2FMembersAreaGroupsViewerWidgetNoCss."
                    },
                    "siteMap": {
                        "moduleName": "thunderbolt-site-map",
                        "contentType": "application\/json",
                        "resourceType": "siteMap"
                    },
                    "mobileAppBuilder": {
                        "moduleName": "thunderbolt-mobile-app-builder",
                        "resourceType": "mobileAppBuilder",
                        "contentType": "application\/json"
                    }
                },
                "clientTopology": {
                    "mediaRootUrl": "https:\/\/static.wixstatic.com",
                    "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                    "moduleRepoUrl": "https:\/\/static.parastorage.com\/unpkg",
                    "fileRepoUrl": "https:\/\/static.parastorage.com\/services",
                    "siteAssetsUrl": "https:\/\/siteassets.parastorage.com",
                    "pageJsonServerUrls": ["https:\/\/pages.parastorage.com", "https:\/\/staticorigin.wixstatic.com", "https:\/\/mx.andrewlord.com.au", "https:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page"],
                    "pathOfTBModulesInFileRepoForFallback": "wix-thunderbolt\/dist\/"
                },
                "siteScopeParams": {
                    "rendererType": null,
                    "wixCodePageIds": [],
                    "hasTPAWorkerOnSite": false,
                    "formFactor": "desktop",
                    "viewMode": "desktop",
                    "freemiumBanner": false,
                    "coBrandingBanner": false,
                    "dayfulBanner": false,
                    "mobileActionsMenu": false,
                    "isWixSite": false,
                    "editorName": "Unknown",
                    "urlFormatModel": {
                        "format": "slash",
                        "forbiddenPageUriSEOs": ["app", "apps", "_api", "robots.txt", "sitemap.xml", "feed.xml", "sites"],
                        "pageIdToResolvedUriSEO": {}
                    },
                    "pageJsonFileNames": {
                        "cnops": "109259_ba3c07dcd0c820e34fef0fa391a40829_64.json",
                        "zxida": "109259_40d46c827b41d8acb5845ddafa995ecb_64.json",
                        "go423": "109259_6f66dbc79071be4e6401a3b6b53d9661_64.json",
                        "n134m": "109259_0ccaffa4e3615a10c718cca7188a4e53_64.json",
                        "ocnbi": "109259_bf9b6c759b8f2280e5056c78cc9b962f_64.json",
                        "na1af": "109259_36182a57359dcfe4a36f7ad19cf8be8d_64.json",
                        "ocnbj": "109259_d6b6d88507a977905fde933b3fed2ba4_64.json",
                        "u25vn": "109259_14e315482a2d971b01d03ec023e2791d_67.json",
                        "ocnbh": "109259_0e7dfd90b532c1b23164979068c8cfb2_64.json",
                        "ks1na": "109259_64705a3146117c71b09b45ad4b760e33_64.json",
                        "y51j7": "109259_48caf4ef6ceaeb01dda68dd9b99affeb_64.json",
                        "tu64w": "109259_0232b54115c4a4d333a919a6617ec04f_64.json",
                        "n1pm5": "109259_90b343d9ad4ff50b67c95b6685ab562b_69.json",
                        "masterPage": "109259_62245e33096fe4ddf0a67e009aa38249_69.json"
                    },
                    "protectedPageIds": ["hnzro"],
                    "routersInfo": {
                        "configMap": {}
                    },
                    "isPremiumDomain": true,
                    "disableSiteAssetsCache": false,
                    "migratingToOoiWidgetIds": "",
                    "siteRevisionConfig": {},
                    "registryLibrariesTopology": [{
                        "artifactId": "editor-elements",
                        "namespace": "wixui",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
                    }, {
                        "artifactId": "editor-elements",
                        "namespace": "dsgnsys",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
                    }],
                    "isInSeo": false,
                    "language": "en",
                    "originalLanguage": "en",
                    "appDefinitionIdToSiteRevision": {
                        "b976560c-3122-4351-878f-453f337b7245": "770"
                    },
                    "builderWidgetsIds": {},
                    "isClientSdkOnSite": false
                },
                "beckyExperiments": {
                    "specs.thunderbolt.fetchBlocksDevCenterWidgetIds": true,
                    "specs.thunderbolt.useInternalBlocksRefType": true,
                    "specs.thunderbolt.compCssMappers_catharsis": true,
                    "specs.thunderbolt.supportSpxInEEMappers": true,
                    "specs.thunderbolt.fixDisabledLinkButtonStyles": true,
                    "specs.thunderbolt.one_cell_grid_display_flex": true,
                    "specs.thunderbolt.supportPositionDesignVar": true,
                    "specs.thunderbolt.skipCarmiCalculationForNonCssMappersRequest": true,
                    "specs.thunderbolt.DatePickerPortal": true,
                    "specs.thunderbolt.ooiCssModelNotInCarmi": true,
                    "specs.thunderbolt.updateRichTextSemanticClassNamesOnCorvid": true,
                    "specs.thunderbolt.DDMenuMigrateCssCarmiMapper": true,
                    "specs.thunderbolt.buttonUdp": true,
                    "specs.thunderbolt.defaultDisplayBlock": true,
                    "specs.thunderbolt.fontsFromExternal": true,
                    "specs.thunderbolt.removeHeaderFooterWrappers": true,
                    "specs.thunderbolt.fixRatingsInputLeftShift": true,
                    "specs.thunderbolt.minMaxInCheckboxGroup": true,
                    "specs.thunderbolt.fiveGridLineStudioSkins": true,
                    "specs.thunderbolt.motionFeature": true,
                    "specs.thunderbolt.useSvgLoaderFeature": true,
                    "specs.thunderbolt.pageLayoutFixChrome130": true,
                    "specs.thunderbolt.noHeightOnTextMask": true,
                    "specs.thunderbolt.WRichTextVerticalTextNowidth": true,
                    "specs.thunderbolt.ooiCssAsLinkTag": true,
                    "specs.thunderbolt.TextInputAutoFillFix": true
                },
                "manifests": {
                    "node": {
                        "modulesToHashes": {
                            "thunderbolt-features": "1f67b779.bundle.min",
                            "thunderbolt-platform": "e07ea5ea.bundle.min",
                            "thunderbolt-css": "a8e1056f.bundle.min",
                            "thunderbolt-site-map": "7b24aabe.bundle.min",
                            "thunderbolt-mobile-app-builder": "4ed708f8.bundle.min",
                            "thunderbolt-byref": "8480c38d.bundle.min",
                            "thunderbolt-remote-structure": "06f33abc.bundle.min",
                            "thunderbolt-css-mappers": "a8e1056f.bundle.min"
                        }
                    },
                    "web": {
                        "modulesToHashes": {
                            "thunderbolt-features": "5d355a68.bundle.min",
                            "thunderbolt-platform": "dc0e0aac.bundle.min",
                            "thunderbolt-css": "db4dbe7c.bundle.min",
                            "thunderbolt-site-map": "132465b8.bundle.min",
                            "thunderbolt-mobile-app-builder": "40166116.bundle.min",
                            "thunderbolt-byref": "b0ea47ff.bundle.min",
                            "thunderbolt-remote-structure": "82c038b1.bundle.min",
                            "thunderbolt-css-mappers": "f0e97b44.bundle.min",
                            "webpack-runtime": "22519d38.bundle.min"
                        },
                        "webpackRuntimeBundle": "22519d38.bundle.min"
                    },
                    "webWorker": {
                        "modulesToHashes": {
                            "thunderbolt-features": "27a4d998.bundle.min",
                            "thunderbolt-platform": "6620bd37.bundle.min",
                            "thunderbolt-css": "5e35adfa.bundle.min",
                            "thunderbolt-site-map": "5c66440c.bundle.min",
                            "thunderbolt-mobile-app-builder": "5a1cf220.bundle.min",
                            "thunderbolt-byref": "98f71ec8.bundle.min",
                            "thunderbolt-remote-structure": "6b74efa1.bundle.min",
                            "thunderbolt-css-mappers": "5e35adfa.bundle.min"
                        }
                    }
                },
                "staticHTMLComponentUrl": "https:\/\/mx-andrewlord-com-au.filesusr.com\/",
                "remoteWidgetStructureBuilderVersion": "1.251.0",
                "blocksBuilderManifestGeneratorVersion": "1.92.0"
            },
            "experiments": {
                "specs.thunderbolt.fetchBlocksDevCenterWidgetIds": true,
                "specs.thunderbolt.inMemoryPaypalAuthToken": true,
                "specs.thunderbolt.roundBordersInResponsiveContainer": true,
                "specs.thunderbolt.useInternalBlocksRefType": true,
                "specs.thunderbolt.removeDynamicModelMobile": true,
                "specs.thunderbolt.compCssMappers_catharsis": true,
                "specs.thunderbolt.userAsFactory": true,
                "specs.thunderbolt.getMemberDetailsFromMembersNg": true,
                "specs.thunderbolt.UseEEImpress": true,
                "specs.thunderbolt.loadNonMainSdksOnlyIfUsed": true,
                "specs.thunderbolt.fixTextInputRaceCondition": true,
                "specs.thunderbolt.supportSpxInEEMappers": true,
                "specs.thunderbolt.fixDisabledLinkButtonStyles": true,
                "specs.thunderbolt.UseEcomFemBi": true,
                "specs.thunderbolt.one_cell_grid_display_flex": true,
                "specs.thunderbolt.maxWidthInCustomScale": true,
                "specs.thunderbolt.readWidgetPresetsFromMasterPage": true,
                "specs.thunderbolt.supportPositionDesignVar": true,
                "specs.thunderbolt.hardenWindowOpen": true,
                "specs.thunderbolt.slotsPlaceholderCEProps": true,
                "specs.thunderbolt.viewerStateManager": true,
                "specs.thunderbolt.dynamicPagesReplacePostWithGet": true,
                "specs.thunderbolt.excludeInstanceFromQueryParams": true,
                "specs.thunderbolt.fixClassNameOverride": true,
                "specs.thunderbolt.ComponentsRegistryFixAnonymousDefine": true,
                "specs.thunderbolt.addTooltipToCopyLinkButton": true,
                "specs.thunderbolt.hardenClientGlobals_Text": true,
                "specs.thunderbolt.SetNoCacheOnAppError": true,
                "specs.thunderbolt.bundlerTrafficToAws": true,
                "specs.thunderbolt.reactScriptSyncLoading": true,
                "specs.thunderbolt.edixIsInFirstFold": true,
                "specs.thunderbolt.skipCarmiCalculationForNonCssMappersRequest": true,
                "specs.thunderbolt.wixRealtimeGetAppTokenFromPlatformUtils": true,
                "specs.thunderbolt.newLoginFlowOnProtectedCollection": true,
                "specs.thunderbolt.elementorySupportRemoveCommonConfigHeader": true,
                "specs.thunderbolt.mergeSkinDefaultsFromRegistry": true,
                "specs.thunderbolt.deprecatewixperf": true,
                "specs.thunderbolt.useNewRegisterLogin": true,
                "specs.thunderbolt.DatePickerPortal": true,
                "specs.thunderbolt.ooi_register_with_components_registrar": true,
                "specs.thunderbolt.preventApplySessionTokenInSSR": true,
                "specs.thunderbolt.ShouldUseNewIAMSocialFlow": true,
                "specs.thunderbolt.splitCssMappersToNewSAM": true,
                "specs.thunderbolt.useIAMEnabledConnections": true,
                "specs.thunderbolt.use_data_fixed_pages_upstream": true,
                "specs.thunderbolt.FixRgbToHex": true,
                "specs.thunderbolt.facebookVideoPlayerDimensions": true,
                "specs.thunderbolt.useElementoryRelativePath": true,
                "specs.thunderbolt.ooiInComponentsRegistry": true,
                "specs.thunderbolt.FixSitePasswordURL": true,
                "specs.thunderbolt.scrollBlockerPackage": true,
                "specs.thunderbolt.fixVectorImageShouldScaleStroke": true,
                "specs.thunderbolt.opacityTransition": true,
                "specs.thunderbolt.native_css_mappers_video": true,
                "specs.thunderbolt.ooiCssModelNotInCarmi": true,
                "specs.thunderbolt.updateRichTextSemanticClassNamesOnCorvid": true,
                "specs.thunderbolt.enableClientSdk": true,
                "specs.thunderbolt.mesh_css_catharsis": true,
                "specs.thunderbolt.shouldFetchLoginUrlByClientId": true,
                "specs.thunderbolt.shouldLoadGoogleSdkEarly": true,
                "specs.thunderbolt.loadNewerSentrySdk": true,
                "specs.thunderbolt.hardenClientGlobals_Array_URL_JSON": true,
                "specs.thunderbolt.siteScrollBlockerWithoutVar": true,
                "specs.thunderbolt.moveInitCustomElementsAfterSiteContainer": true,
                "specs.thunderbolt.shouldUseMemberPrivacySettingsService": true,
                "specs.thunderbolt.DDMenuMigrateCssCarmiMapper": true,
                "specs.thunderbolt.buttonUdp": true,
                "specs.thunderbolt.muteFedopsEvents": true,
                "specs.thunderbolt.alwaysApplySessionTokenOnIAM": true,
                "specs.thunderbolt.UseBlocksSignedInstance": true,
                "specs.thunderbolt.enableSignUpPrivacyNoteType": true,
                "specs.thunderbolt.defaultDisplayBlock": true,
                "specs.thunderbolt.anchorScrollToStickyComponent": true,
                "specs.thunderbolt.veloWixMembersAmbassadorV2": true,
                "specs.thunderbolt.customElemCollapsedheight": true,
                "specs.thunderbolt.megaMenuMouseLeave": true,
                "specs.thunderbolt.UseWixDataGetRequests": true,
                "specs.thunderbolt.WRichTextVerticalAlignTopSafariAndIOS": true,
                "specs.thunderbolt.fontsFromExternal": true,
                "specs.thunderbolt.removeHeaderFooterWrappers": true,
                "specs.thunderbolt.motionVeloShowHide": true,
                "specs.thunderbolt.fixRatingsInputLeftShift": true,
                "specs.thunderbolt.UseWixDataItemService": true,
                "specs.thunderbolt.comp_designCss_selectorToCss_Mappers_catharsis": true,
                "specs.thunderbolt.UseCloudDataUrlWithBaseExternalUrl": true,
                "specs.thunderbolt.minMaxInCheckboxGroup": true,
                "specs.thunderbolt.splitCssRequest": true,
                "specs.thunderbolt.allowExternalAppsInReact18": true,
                "specs.promote.ar.reportEcomPlatformPurchaseEvents": true,
                "specs.thunderbolt.useIAMPlatform": true,
                "specs.thunderbolt.fiveGridLineStudioSkins": true,
                "specs.thunderbolt.newComponentsWrapper": true,
                "specs.thunderbolt.TPA3DGalleryEEUrl": true,
                "specs.thunderbolt.motionFeature": true,
                "specs.thunderbolt.updateLoginSocialBarMenuItemsSDKData": true,
                "specs.thunderbolt.carouselGalleryImageFitting": true,
                "specs.thunderbolt.enableCustomElements": true,
                "specs.thunderbolt.useSvgLoaderFeature": true,
                "specs.thunderbolt.ooi_lazy_load_components": true,
                "specs.thunderbolt.pageLayoutFixChrome130": true,
                "specs.thunderbolt.loginSocialBarEnableUrlChangeListeners": true,
                "specs.thunderbolt.buttonUdp_loggedIn": true,
                "specs.thunderbolt.InitPlatformApiProvider": true,
                "specs.thunderbolt.noHeightOnTextMask": true,
                "specs.thunderbolt.allowRoutingBlockerManager": true,
                "specs.thunderbolt.skipReactionWhenNavigate": true,
                "specs.thunderbolt.WRichTextVerticalTextNowidth": true,
                "specs.thunderbolt.appLoadInPanorama": true,
                "displayWixAdsNewVersion": true,
                "specs.thunderbolt.BundlerTypescriptListExportedFunctions": true,
                "specs.thunderbolt.smModalsShouldWaitForAppDidMount": true,
                "specs.thunderbolt.ooi_css_optimization": true,
                "specs.thunderbolt.SharedPanoramaGlobalConfig": true,
                "specs.thunderbolt.fixGapBelowTextboxonMobileSite": true,
                "specs.ShouldForceCaptchaVerificationOnSignupSpec": "Disabled",
                "specs.ShouldForceCaptchaVerificationOnLoginSpec": "Disabled",
                "specs.thunderbolt.allowSanitizeSvgInSSR": true,
                "specs.thunderbolt.skipLivePreviewRefreshOnSetProps": true,
                "specs.thunderbolt.editorElementsRegistryEnsureComponentLoaderFix": true,
                "specs.thunderbolt.rerenderComponentsWhenPropsBeingUpdatedWhileInFirstRender": true,
                "specs.thunderbolt.moveFedopsLoadStartToBody": true,
                "specs.thunderbolt.fixResponsiveBoxContainerLayoutClass": true,
                "specs.thunderbolt.dynamicLoadTpaFeature": true,
                "specs.thunderbolt.shouldFetchLogoutUrlByClientId": true,
                "specs.thunderbolt.removeWixEmbedsAppToken": true,
                "specs.thunderbolt.ooiCssAsLinkTag": true,
                "specs.thunderbolt.convertBirthdateToISOString": true,
                "specs.thunderbolt.WixCodeAnalyzeImportedNamespaces": true,
                "specs.thunderbolt.getAppTokenForCustomElement": true,
                "specs.thunderbolt.send_script_resources_to_bi": true,
                "specs.thunderbolt.allowAnimatedImageTransform": true,
                "specs.thunderbolt.send_unused_preloads_to_bi": true,
                "specs.thunderbolt.newAuthorizedPagesFlow": true,
                "specs.thunderbolt.reportPanelViewerInstanceInitialize": true,
                "specs.thunderbolt.Panorama": true,
                "specs.thunderbolt.fetchCurrentMemberFromMembersNg": true,
                "specs.thunderbolt.logoutOnIAM": true,
                "specs.thunderbolt.newSpxResolving": true,
                "specs.thunderbolt.fetch_widget_iteratively": true,
                "specs.thunderbolt.TextInputAutoFillFix": true
            },
            "fleetConfig": {
                "fleetName": "thunderbolt-renderer-gradual",
                "type": "Rollout",
                "code": 1
            },
            "dynamicModelUrl": "https:\/\/mx.andrewlord.com.au\/_api\/v2\/dynamicmodel",
            "accessTokensUrl": "https:\/\/mx.andrewlord.com.au\/_api\/v1\/access-tokens",
            "rollout": {
                "siteAssetsVersionsRollout": false,
                "isDACRollout": 0,
                "isTBRollout": true
            },
            "commonConfig": {
                "brand": "wix",
                "host": "VIEWER",
                "bsi": "",
                "consentPolicy": {},
                "consentPolicyHeader": {},
                "siteRevision": "69",
                "renderingFlow": "NONE",
                "language": "en",
                "locale": "en-au"
            },
            "componentsLibrariesTopology": [{
                "artifactId": "editor-elements",
                "namespace": "wixui",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
            }, {
                "artifactId": "editor-elements",
                "namespace": "dsgnsys",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.12952.0"
            }],
            "anywhereConfig": {},
            "interactionSampleRatio": 0.01,
            "rendererType": null,
            "isPartialRouteMatching": false,
            "isExcludedFromSecurityExperiments": false,
            "react18Compatible": true,
            "react18HydrationBlackListWidgets": []
        }
    </script>
    <script>
        window.viewerModel = JSON.parse(document.getElementById('wix-viewer-model').textContent)
    </script>
    <!-- renderIndicator -->


    <!-- used platform apis start -->
    <script type="application/json" id="used-platform-apis-data">
        []
    </script>
    <script>
        window.usedPlatformApis = JSON.parse(document.getElementById('used-platform-apis-data').textContent)
    </script>
    <!-- used platform apis end -->

    <!-- Business Manager -->

    <!-- initCustomElements #2 -->

    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/lazyCustomElementWrapper.inline.e9452e34.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [4198], {
                74432: function(t, e, i) {
                    var n = function(t) {
                        return class extends t {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                const t = this.querySelector("iframe");
                                if (t) {
                                    const e = t.dataset.src;
                                    e && t.src !== e && (t.src = e, t.dataset.src = "", this.dataset.src = "")
                                }
                            }
                            attributeChangedCallback(t, e, i) {
                                i && this.reLayout()
                            }
                            static get observedAttributes() {
                                return ["data-src"]
                            }
                        }
                    };
                    const o = (t, e, i) => {
                        void 0 === t.customElements.get(e) && t.customElements.define(e, i)
                    };
                    var r = i(98822),
                        a = i(42658),
                        s = i(58307),
                        c = i(22538),
                        u = {
                            measure(t, e, {
                                hasBgScrollEffect: i,
                                videoWidth: n,
                                videoHeight: o,
                                fittingType: s,
                                alignType: u = "center",
                                qualities: d,
                                staticVideoUrl: l,
                                videoId: f,
                                videoFormat: h,
                                focalPoint: m
                            }) {
                                const p = i ? e.offsetWidth : t.parentElement.offsetWidth,
                                    g = t.parentElement.offsetHeight,
                                    y = parseInt(n, 10),
                                    b = parseInt(o, 10),
                                    v = function(t, e, i, n) {
                                        return {
                                            wScale: t / i,
                                            hScale: e / n
                                        }
                                    }(p, g, y, b),
                                    w = function(t, e, i, n) {
                                        let o;
                                        o = t === c.fittingTypes.SCALE_TO_FIT ? Math.min(e.wScale, e.hScale) : Math.max(e.wScale, e.hScale);
                                        return {
                                            width: Math.round(i * o),
                                            height: Math.round(n * o)
                                        }
                                    }(s, v, y, b),
                                    S = function(t, {
                                        width: e,
                                        height: i
                                    }) {
                                        const n = (0, r.Am)(t, (t => t.size)),
                                            o = n.find((t => t.size > e * i));
                                        return o || t[t.length - 1]
                                    }(d, w),
                                    E = function(t, e, i, n) {
                                        if ("mp4" === n) return t.url ? (0, r.oq)(e, t.url) : (0, r.oq)(e, i, t.quality, n, "file.mp4");
                                        return ""
                                    }(S, l, f, h),
                                    x = function(t, e) {
                                        const i = t.networkState === t.NETWORK_NO_SOURCE,
                                            n = !t.currentSrc.endsWith(e);
                                        return e && (n || i)
                                    }(t, E),
                                    C = a.ds[s] || "cover",
                                    M = m ? function(t, e, i) {
                                        const {
                                            width: n,
                                            height: o
                                        } = t, {
                                            width: r,
                                            height: a
                                        } = e, {
                                            x: s,
                                            y: c
                                        } = i;
                                        if (!r || !a) return `${s}% ${c}%`;
                                        const u = Math.max(r / n, a / o),
                                            d = n * u,
                                            l = o * u,
                                            f = Math.max(0, Math.min(d - r, d * (s / 100) - r / 2)),
                                            h = Math.max(0, Math.min(l - a, l * (c / 100) - a / 2)),
                                            m = f && Math.floor(f / (d - r) * 100),
                                            p = h && Math.floor(h / (l - a) * 100);
                                        return `${m}% ${p}%`
                                    }(w, {
                                        width: p,
                                        height: g
                                    }, m) : "",
                                    _ = u.replace("_", " ");
                                return {
                                    videoSourceUrl: E,
                                    needsSrcUpdate: x,
                                    videoStyle: {
                                        height: "100%",
                                        width: "100%",
                                        objectFit: C,
                                        objectPosition: M || _
                                    }
                                }
                            },
                            mutate(t, e, i, n, o, r, a, c, u, l, f) {
                                e ? (0, s.eC)(e, n) : (! function(t, e, i, n, o, r) {
                                        r && e.paused && (i.style.opacity = "1", e.style.opacity = "0");
                                        const a = e.paused || "" === e.currentSrc,
                                            s = t || r;
                                        if (s && a)
                                            if (e.ontimeupdate = null, e.onseeked = null, e.onplay = null, !r && o) {
                                                const t = e.muted;
                                                e.muted = !0, e.ontimeupdate = () => {
                                                    e.currentTime > 0 && (e.ontimeupdate = null, e.onseeked = () => {
                                                        e.onseeked = null, e.muted = t, d(e, i, n)
                                                    }, e.currentTime = 0)
                                                }
                                            } else e.onplay = () => {
                                                r || (e.onplay = null), d(e, i, n)
                                            }
                                    }(a, i, t, c, o, f), o ? i.setAttribute("autoplay", "") : i.removeAttribute("autoplay"), (0, s.eC)(i, n)),
                                    function(t, e, i) {
                                        t && (e.src = i, e.load())
                                    }(a, i, r), i.playbackRate = l
                            }
                        };

                    function d(t, e, i) {
                        "fade" === i && (e.style.transition = "opacity 1.6s ease-out"), e.style.opacity = "0", t.style.opacity = "1"
                    }
                    var l = function(t, e, i) {
                        return class extends t {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                const {
                                    isVideoDataExists: t,
                                    videoWidth: n,
                                    videoHeight: o,
                                    qualities: r,
                                    videoId: a,
                                    videoFormat: s,
                                    alignType: c,
                                    fittingType: d,
                                    focalPoint: l,
                                    hasBgScrollEffect: f,
                                    autoPlay: h,
                                    animatePoster: m,
                                    containerId: p,
                                    isEditorMode: g,
                                    playbackRate: y,
                                    hasAlpha: b
                                } = JSON.parse(this.dataset.videoInfo);
                                if (!t) return;
                                const v = !i.prefersReducedMotion && h,
                                    w = this.querySelector(`video[id^="${p}"]`),
                                    S = this.querySelector(`.bgVideoposter[id^="${p}"]`);
                                if (this.unobserveChildren(), !w || !S) return void this.observeChildren(this);
                                const E = this.getRootNode().getElementById(`${p}`),
                                    x = E.querySelector(`.webglcanvas[id^="${p}"]`);
                                !(b || "true" === E.dataset.hasAlpha) || x ? e.mutationService.measure((() => {
                                    const t = u.measure(w, E, {
                                            hasBgScrollEffect: f,
                                            videoWidth: n,
                                            videoHeight: o,
                                            fittingType: d,
                                            alignType: c,
                                            qualities: r,
                                            staticVideoUrl: i.staticVideoUrl,
                                            videoId: a,
                                            videoFormat: s,
                                            focalPoint: l
                                        }),
                                        {
                                            videoSourceUrl: h,
                                            needsSrcUpdate: p,
                                            videoStyle: b
                                        } = t;
                                    e.mutationService.mutate((() => {
                                        u.mutate(S, x, w, b, v, h, p, m, s, y, g)
                                    }))
                                })) : requestAnimationFrame((() => this.reLayout()))
                            }
                            attributeChangedCallback(t, e) {
                                e && this.reLayout()
                            }
                            static get observedAttributes() {
                                return ["data-video-info"]
                            }
                        }
                    };
                    const f = (t = window) => ({
                        measure: function(t, e, i, {
                            containerId: n,
                            bgEffectName: o
                        }, r) {
                            const a = i[t],
                                c = i[n],
                                {
                                    width: u,
                                    height: d
                                } = r.getMediaDimensionsByEffect(o, c.offsetWidth, c.offsetHeight, (0, s.c$)(r.getScreenHeightOverride?.()));
                            e.width = u, e.height = d, e.currentSrc = a.style.backgroundImage, e.bgEffectName = a.dataset.bgEffectName
                        },
                        patch: function(e, i, n, o, r) {
                            const a = n[e];
                            o.targetWidth = i.width, o.targetHeight = i.height;
                            const c = (0, s.WD)(o, r, "bg");
                            ! function(t = "", e) {
                                return !t.includes(e) || !!t != !!e
                            }(i.currentSrc, c.uri) ? (0, s.eC)(a, c.css.container) : function(e, i) {
                                const n = {
                                        backgroundImage: `url("${i.uri}")`,
                                        ...i.css.container
                                    },
                                    o = new t.Image;
                                o.onload = s.eC.bind(null, e, n), o.src = i.uri
                            }(a, c)
                        }
                    });
                    var h = function(t, e, i, n = window) {
                        const o = f(n);
                        return class extends t {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                if ((0, s.xX)(e)) return;
                                const t = {},
                                    r = {},
                                    a = this.getAttribute("id"),
                                    c = JSON.parse(this.dataset.tiledImageInfo),
                                    {
                                        bgEffectName: u
                                    } = this.dataset,
                                    {
                                        containerId: d
                                    } = c,
                                    l = n.document.getElementById(d);
                                t[a] = this, t[d] = l, c.displayMode = c.imageData.displayMode, e.mutationService.measure((() => {
                                    o.measure(a, r, t, {
                                        containerId: d,
                                        bgEffectName: u
                                    }, e)
                                })), e.mutationService.mutate((() => {
                                    o.patch(a, r, t, c, i, e)
                                }))
                            }
                            attributeChangedCallback(t, e) {
                                e && this.reLayout()
                            }
                            disconnectedCallback() {
                                super.disconnectedCallback()
                            }
                            static get observedAttributes() {
                                return ["data-tiled-image-info"]
                            }
                        }
                    };
                    var m = i(20826);
                    ((t = window) => {
                        const {
                            WixElement: e,
                            mediaServices: i,
                            environmentConsts: r,
                            requestUrl: a,
                            staticVideoUrl: s
                        } = t.customElementNamespace;
                        ((t, e, i, n) => {
                            const r = l(t, i, n, e);
                            o(e, "wix-video", r)
                        })(e, t, i, {
                            ...r,
                            prefersReducedMotion: (0, m.O)(window, a),
                            staticVideoUrl: s
                        }), ((t, e) => {
                            const i = n(e);
                            o(t, "wix-iframe", i)
                        })(t, e), ((t, e, i, n) => {
                            const r = h(t, i, n, e);
                            o(e, "wix-bg-image", r)
                        })(e, t, i, r)
                    })(), window.resolveExternalsRegistryModule("imageClientApi")
                },
                42658: function(t, e, i) {
                    i.d(e, {
                        Wp: function() {
                            return o
                        },
                        XO: function() {
                            return c
                        },
                        bQ: function() {
                            return s
                        },
                        c$: function() {
                            return u
                        },
                        ds: function() {
                            return d
                        },
                        eC: function() {
                            return r
                        },
                        g7: function() {
                            return a
                        }
                    });
                    const n = {
                            columnCount: 1,
                            columns: 1,
                            fontWeight: 1,
                            lineHeight: 1,
                            opacity: 1,
                            zIndex: 1,
                            zoom: 1
                        },
                        o = (t, e) => t && e && Object.keys(e).forEach((i => t.setAttribute(i, e[i]))),
                        r = (t, e) => t && e && Object.keys(e).forEach((i => {
                            const o = e[i];
                            void 0 !== o ? t.style[i] = ((t, e) => "number" != typeof e || n[t] ? e : `${e}px`)(i, o) : t.style.removeProperty(i)
                        })),
                        a = (t, e) => t && e && Object.keys(e).forEach((i => {
                            t.style.setProperty(i, e[i])
                        })),
                        s = (t, e, i = !0) => {
                            return t && i ? (n = t.dataset[e]) ? "true" === n || "false" !== n && ("null" === n ? null : "" + +n === n ? +n : n) : n : t.dataset[e];
                            var n
                        },
                        c = (t, e) => t && e && Object.assign(t.dataset, e),
                        u = t => t || document.documentElement.clientHeight || window.innerHeight || 0,
                        d = {
                            fit: "contain",
                            fill: "cover"
                        }
                },
                46209: function(t, e, i) {
                    i.d(e, {
                        WD: function() {
                            return o
                        },
                        xX: function() {
                            return s
                        }
                    });
                    var n = i(22538);
                    const o = (t, e, i) => {
                            const {
                                targetWidth: o,
                                targetHeight: s,
                                imageData: c,
                                filters: u,
                                displayMode: d = n.fittingTypes.SCALE_TO_FILL
                            } = t;
                            if (!o || !s || !c.uri) return {
                                uri: "",
                                css: {}
                            };
                            const {
                                width: l,
                                height: f,
                                crop: h,
                                name: m,
                                focalPoint: p,
                                upscaleMethod: g,
                                quality: y,
                                devicePixelRatio: b = e.devicePixelRatio
                            } = c, v = {
                                filters: u,
                                upscaleMethod: g,
                                ...y,
                                hasAnimation: t?.hasAnimation || c?.hasAnimation
                            }, w = a(b), S = {
                                id: c.uri,
                                width: l,
                                height: f,
                                ...h && {
                                    crop: h
                                },
                                ...p && {
                                    focalPoint: p
                                },
                                ...m && {
                                    name: m
                                }
                            }, E = {
                                width: o,
                                height: s,
                                htmlTag: i || "img",
                                pixelAspectRatio: w,
                                alignment: t.alignType || n.alignTypes.CENTER
                            }, x = (0, n.getData)(d, S, E, v);
                            return x.uri = r(x.uri, e.staticMediaUrl, e.mediaRootUrl), x
                        },
                        r = (t, e, i) => {
                            if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(t)) return t;
                            let n = `${e}/`;
                            return t && (/^micons\//.test(t) ? n = i : "ico" === /[^.]+$/.exec(t)[0] && (n = n.replace("media", "ficons"))), n + t
                        },
                        a = t => {
                            const e = window.location.search.split("&").map((t => t.split("="))).find((t => t[0].toLowerCase().includes("devicepixelratio")));
                            return (e ? Number(e[1]) : null) || t || 1
                        };

                    function s(t) {
                        return t.isExperimentOpen("specs.thunderbolt.tb_stop_client_images") || t.isExperimentOpen("specs.thunderbolt.final_force_webp") || t.isExperimentOpen("specs.thunderbolt.final_force_no_webp")
                    }
                },
                98822: function(t, e, i) {
                    i.d(e, {
                        Am: function() {
                            return o
                        },
                        Tj: function() {
                            return n
                        },
                        oq: function() {
                            return a
                        },
                        vk: function() {
                            return r
                        }
                    });
                    const n = (t, e) => Object.keys(t).find((i => e(t[i], i))),
                        o = (t, e) => {
                            const i = t.reduce(((t, i) => (t[e(i)] = i, t)), {});
                            return Object.values(i)
                        },
                        r = (t, e = window) => {
                            let i = !1;
                            return (...n) => {
                                i || (i = !0, e.requestAnimationFrame((() => {
                                    i = !1, t(...n)
                                })))
                            }
                        };

                    function a(...t) {
                        let e = t[0];
                        for (let i = 1; i < t.length; ++i) e = `${e.replace(/\/$/,"")}/${t[i].replace(/^\//,"")}`;
                        return e
                    }
                },
                20826: function(t, e, i) {
                    i.d(e, {
                        O: function() {
                            return n
                        }
                    });
                    const n = (t, e = "") => e.toLowerCase().includes("forcereducedmotion") || Boolean(t?.matchMedia("(prefers-reduced-motion: reduce)").matches)
                }
            },
            function(t) {
                t.O(0, [8398], (function() {
                    return e = 74432, t(t.s = e);
                    var e
                }));
                t.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/lazyCustomElementWrapper.inline.e9452e34.bundle.min.js.map
    </script>

    <!-- initial scripts -->
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/createPlatformWorker.inline.64e2d04b.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [3169], {
                11682: function(e, t, r) {
                    r.r(t), r.d(t, {
                        platformWorkerPromise: function() {
                            return l
                        }
                    });
                    const {
                        viewerModel: {
                            siteAssets: {
                                clientTopology: s
                            },
                            siteFeatures: a,
                            siteFeaturesConfigs: {
                                platform: o
                            },
                            site: {
                                externalBaseUrl: p
                            }
                        },
                        usedPlatformApis: c
                    } = window, i = Worker && a.includes("platform"), l = i ? (async () => {
                        const e = "platform_create-worker started";
                        performance.mark(e);
                        const {
                            clientWorkerUrl: t,
                            appsScripts: r,
                            bootstrapData: a,
                            sdksStaticPaths: i
                        } = o, {
                            appsSpecData: l,
                            appDefIdToIsMigratedToGetPlatformApi: n,
                            forceEmptySdks: d
                        } = a, m = t.startsWith("http://localhost:") || t.startsWith("https://bo.wix.com/suricate/") || document.baseURI !== location.href ? (e => {
                            const t = new Blob([`importScripts('${e}');`], {
                                type: "application/javascript"
                            });
                            return URL.createObjectURL(t)
                        })(t) : t.replace(s.fileRepoUrl, `${p}/_partials`), f = new Worker(m), u = Object.keys(r.urls).filter((e => !l[e]?.isModuleFederated)).reduce(((e, t) => (e[t] = r.urls[t], e)), {});
                        if (i && i.mainSdks && i.nonMainSdks) {
                            Object.values(n).every((e => e)) || d ? f.postMessage({
                                type: "preloadNamespaces",
                                namespaces: c
                            }) : f.postMessage({
                                type: "preloadAllNamespaces",
                                sdksStaticPaths: i
                            })
                        }
                        f.postMessage({
                            type: "platformScriptsToPreload",
                            appScriptsUrls: u
                        });
                        const k = "platform_create-worker ended";
                        return performance.mark(k), performance.measure("Create Platform Web Worker", e, k), f
                    })() : Promise.resolve()
                }
            },
            function(e) {
                var t;
                t = 11682, e(e.s = t)
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/createPlatformWorker.inline.64e2d04b.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/windowMessageRegister.inline.5ef3f048.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [8800], {
                1643: function() {
                    ! function(n) {
                        const e = new Set,
                            a = [],
                            t = n => {
                                const a = [];
                                e.forEach((e => {
                                    n.canHandleEvent(e) && a.push(e)
                                })), a.forEach((a => {
                                    e.delete(a), n.handleEvent(a)
                                }))
                            };
                        n.addEventListener("message", (n => {
                            const s = {
                                    source: n.source,
                                    data: n.data,
                                    origin: n.origin
                                },
                                d = a.find((n => n.canHandleEvent(s)));
                            d ? (t(d), d.handleEvent(s)) : e.add(s)
                        })), n._addWindowMessageHandler = n => {
                            a.push(n), t(n)
                        }
                    }(window)
                }
            },
            function(n) {
                var e;
                e = 1643, n(n.s = e)
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/windowMessageRegister.inline.5ef3f048.bundle.min.js.map
    </script>
    <script async="" src="https://static.parastorage.com/services/wix-thunderbolt/dist/thunderbolt-commons.8db75bde.bundle.min.js"></script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/bi-common.inline.809b56ee.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [507], {
                27037: function(e, t, r) {
                    r.d(t, {
                        h: function() {
                            return i
                        }
                    });
                    var o = r(65672);
                    const n = ({
                            useBatch: e = !0,
                            publishMethod: t = o.PublishMethods.Auto,
                            endpoint: r,
                            muteBi: n = !1,
                            biStore: i,
                            sessionManager: s,
                            fetch: a,
                            factory: c
                        }) => c({
                            useBatch: e,
                            publishMethod: t,
                            endpoint: r,
                            ...i.frogUrlOverride ? {
                                host: i.frogUrlOverride.replace(/^https?:\/\//, "") + "/_frog"
                            } : {}
                        }).setMuted(n).withUoUContext({
                            msid: i.msid
                        }).withNonEssentialContext({
                            visitorId: () => s.getVisitorId(),
                            siteMemberId: () => s.getSiteMemberId()
                        }).updateDefaults({
                            vsi: i.viewerSessionId,
                            _av: `thunderbolt-${i.viewerVersion}`,
                            isb: i.is_headless,
                            ...i.is_headless && {
                                isbr: i.is_headless_reason
                            }
                        }),
                        i = {
                            createBaseBiLoggerFactory: n,
                            createBiLoggerFactoryForFedops: e => {
                                const {
                                    biStore: {
                                        session_id: t,
                                        initialTimestamp: r,
                                        initialRequestTimestamp: o,
                                        dc: i,
                                        microPop: s,
                                        is_headless: a,
                                        isCached: c,
                                        pageData: u,
                                        rolloutData: p,
                                        caching: d,
                                        checkVisibility: l = (() => ""),
                                        viewerVersion: m,
                                        requestUrl: f,
                                        st: h,
                                        isSuccessfulSSR: g
                                    },
                                    muteBi: I = !1
                                } = e;
                                return n({
                                    ...e,
                                    muteBi: I
                                }).updateDefaults({
                                    ts: () => Date.now() - r,
                                    tsn: () => function({
                                        initialRequestTimestamp: e
                                    }) {
                                        return "undefined" == typeof window ? Math.round(performance.now() + (performance.timeOrigin - e)) : Math.round(performance.now())
                                    }({
                                        initialRequestTimestamp: o
                                    }),
                                    dc: i,
                                    microPop: s,
                                    caching: d,
                                    session_id: t,
                                    st: h,
                                    url: f || u.pageUrl,
                                    ish: a,
                                    pn: u.pageNumber,
                                    isFirstNavigation: 1 === u.pageNumber,
                                    pv: l,
                                    pageId: u.pageId,
                                    isServerSide: !1,
                                    isSuccessfulSSR: g,
                                    is_lightbox: u.isLightbox,
                                    is_cached: c,
                                    is_sav_rollout: p.siteAssetsVersionsRollout ? 1 : 0,
                                    is_dac_rollout: p.isDACRollout ? 1 : 0,
                                    v: m
                                })
                            }
                        }
                },
                36451: function(e, t, r) {
                    r.d(t, {
                        W: function() {
                            return p
                        }
                    });
                    var o = r(76022),
                        n = r(5189),
                        i = r(76542),
                        s = r(75967),
                        a = r(66715),
                        c = r(76904),
                        u = r(23184);
                    const p = ({
                        biLoggerFactory: e,
                        customParams: t = {},
                        phasesConfig: r = "SEND_ON_FINISH",
                        appName: p = "thunderbolt",
                        presetType: d = o.u.BOLT,
                        reportBlackbox: l = !1,
                        paramsOverrides: m = {},
                        factory: f,
                        muteThunderboltEvents: h = !1,
                        experiments: g = {},
                        monitoringData: I
                    }) => {
                        const S = f(p, {
                                presetType: d,
                                phasesConfig: r,
                                isPersistent: !0,
                                isServerSide: !1,
                                reportBlackbox: l,
                                customParams: t,
                                biLoggerFactory: e,
                                paramsOverrides: m,
                                enableSampleRateForAppNames: (0, c.k)("specs.thunderbolt.fedops_enableSampleRateForAppNames", g) ?? ("undefined" != typeof window && (0, c.k)("specs.thunderbolt.fedops_enableSampleRateForAppNames", window?.viewerModel?.experiments))
                            }),
                            {
                                interactionStarted: N,
                                interactionEnded: R,
                                appLoadingPhaseStart: A,
                                appLoadingPhaseFinish: _,
                                appLoadStarted: b,
                                appLoaded: v
                            } = S,
                            E = (0, c.k)("specs.thunderbolt.fedopsMuteErrors", g),
                            T = () => "undefined" == typeof window,
                            w = e => e?.evid && 26 === parseInt(e.evid, 10),
                            O = (() => {
                                const e = (0, a.n)(),
                                    r = I?.metaSiteId ?? "",
                                    o = I?.dc ?? "",
                                    n = !!I?.isHeadless,
                                    c = !!I?.isCached,
                                    u = !!I?.rolloutData?.isTBRollout,
                                    l = !!I?.rolloutData?.isDACRollout,
                                    m = !!I?.rolloutData?.siteAssetsVersionsRollout,
                                    f = (0, i.V)({
                                        baseParams: {
                                            platform: s.OD.Viewer,
                                            msid: r,
                                            fullArtifactId: "com.wixpress.html-client.wix-thunderbolt",
                                            componentId: p
                                        },
                                        data: {
                                            dataCenter: o,
                                            isHeadless: n,
                                            isCached: c,
                                            isRollout: u,
                                            isDacRollout: l,
                                            isSavRollout: m,
                                            isSsr: !1,
                                            presetType: d,
                                            customParams: t
                                        }
                                    }).withGlobalConfig(e);
                                return T() && f.withReporter((e => {
                                    const t = JSON.stringify({
                                        messages: e
                                    });
                                    return fetch("https://panorama.wixapps.net/api/v1/bulklog", {
                                        method: "POST",
                                        body: t,
                                        keepalive: !0
                                    }).catch((e => {
                                        console.log(e)
                                    })), !0
                                })), f.client()
                            })(),
                            y = e => {
                                O && !T() && (e ? O.reportLoadStart() : O.reportLoadFinish())
                            },
                            D = (e, t) => {
                                if (!O) return;
                                const r = e.replaceAll(" ", "_");
                                t ? O.transaction(r).start() : O.transaction(r).finish()
                            },
                            C = (e, t, r) => "react-native" !== u.env.RENDERER_BUILD && (w(r) ? E : !((e, t, r) => {
                                const i = t?.siteAssetsModule ?? "";
                                return !(d === o.u.BOLT) || n.EQ.has(e) || r && ["thunderbolt-css", "thunderbolt-features", "thunderbolt-platform"].includes(i)
                            })(e, r, t)),
                            B = (e, t, r, o) => {
                                if (n.iy.has(p)) return !0;
                                if (C(e, t, o)) return !1;
                                if (o?.siteAssetsModule) return !0;
                                const i = !!r?.appId && !n.S_.has(r.appId),
                                    s = n.S2.has(e),
                                    a = n.wV.has(e);
                                return s || i || !a && !h
                            };
                        return S.interactionStarted = (e, t) => {
                            if (w(t?.paramsOverrides) ? ((e = {}) => {
                                    if (!O) return;
                                    const {
                                        errorInfo: t,
                                        errorType: r
                                    } = e, o = new Error(t);
                                    O?.errorMonitor().reportError(o, {
                                        errorName: r,
                                        environment: "Viewer"
                                    })
                                })(t?.paramsOverrides) : T() || D(e, !0), B(e, !0, void 0, t?.paramsOverrides)) return N.call(S, e, t);
                            try {
                                performance.mark(`${e} started`)
                            } catch {}
                            return {
                                timeoutId: 0
                            }
                        }, S.interactionEnded = (e, t) => {
                            if (T() || D(e, !1), B(e, !0, void 0, t?.paramsOverrides)) R.call(S, e, t);
                            else try {
                                performance.mark(`${e} ended`)
                            } catch {}
                        }, S.appLoadingPhaseStart = (e, t) => {
                            if (D(e, !0), B(e, !1, t)) A.call(S, e, t);
                            else try {
                                performance.mark(`${e} started`)
                            } catch {}
                        }, S.appLoadingPhaseFinish = (e, t, r) => {
                            if (D(e, !1), B(e, !1, t)) _.call(S, e, t, r);
                            else try {
                                performance.mark(`${e} finished`)
                            } catch {}
                        }, S.appLoadStarted = e => {
                            y(!0), b.call(S, e)
                        }, S.appLoaded = e => {
                            y(!1), v.call(S, e)
                        }, S
                    }
                },
                58839: function(e, t, r) {
                    r.d(t, {
                        c: function() {
                            return o
                        }
                    });
                    const o = e => {
                        const t = "thunderbolt-commons";
                        return {
                            reportAsyncWithCustomKey: (r, o, n) => e.reportAsyncWithCustomKey(r, t, o, n),
                            runAsyncAndReport: (r, o) => e.runAsyncAndReport(r, t, o),
                            runAndReport: (r, o) => e.runAndReport(r, t, o),
                            reportError: r => {
                                e.captureError(r, {
                                    tags: {
                                        feature: t,
                                        clientMetricsReporterError: !0
                                    }
                                })
                            },
                            meter: (t, r) => {
                                e.meter(t, r)
                            },
                            histogram: (e, t) => {}
                        }
                    }
                },
                97056: function(e, t, r) {
                    r.r(t), r.d(t, {
                        createBiReporter: function() {
                            return s
                        },
                        site: function() {
                            return a
                        }
                    });
                    var o = r(9492),
                        n = r(63590);
                    const i = (...e) => console.log("[TB] ", ...e);

                    function s(e = i, t = i, r = (() => {}), o = i, n = i) {
                        return {
                            reportBI: e,
                            sendBeat: t,
                            setDynamicSessionData: r,
                            reportPageNavigation: o,
                            reportPageNavigationDone: n
                        }
                    }
                    const a = ({
                        biReporter: e,
                        wixBiSession: t,
                        viewerModel: r
                    }) => i => {
                        i(o.O$).toConstantValue(t), i(o.u6).toConstantValue(e), i(o.lR).toConstantValue((0, n.f)(r))
                    }
                },
                25196: function(e, t, r) {
                    var o, n;
                    r.d(t, {
                            lF: function() {
                                return o
                            },
                            mY: function() {
                                return i
                            },
                            w4: function() {
                                return n
                            }
                        }),
                        function(e) {
                            e[e.START = 1] = "START", e[e.VISIBLE = 2] = "VISIBLE", e[e.PAGE_FINISH = 33] = "PAGE_FINISH", e[e.FIRST_CDN_RESPONSE = 4] = "FIRST_CDN_RESPONSE", e[e.TBD = -1] = "TBD", e[e.PAGE_NAVIGATION = 101] = "PAGE_NAVIGATION", e[e.PAGE_NAVIGATION_DONE = 103] = "PAGE_NAVIGATION_DONE"
                        }(o || (o = {})),
                        function(e) {
                            e[e.NAVIGATION = 1] = "NAVIGATION", e[e.DYNAMIC_REDIRECT = 2] = "DYNAMIC_REDIRECT", e[e.INNER_ROUTE = 3] = "INNER_ROUTE", e[e.NAVIGATION_ERROR = 4] = "NAVIGATION_ERROR", e[e.CANCELED = 5] = "CANCELED"
                        }(n || (n = {}));
                    const i = {
                        1: "page-navigation",
                        2: "page-navigation-redirect",
                        3: "page-navigation-inner-route",
                        4: "navigation-error",
                        5: "navigation-canceled"
                    }
                },
                9492: function(e, t, r) {
                    r.d(t, {
                        O$: function() {
                            return n
                        },
                        lR: function() {
                            return i
                        },
                        u6: function() {
                            return o
                        }
                    });
                    const o = Symbol.for("BI"),
                        n = Symbol.for("WixBiSessionSymbol"),
                        i = Symbol.for("appName")
                }
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/bi-common.inline.809b56ee.bundle.min.js.map
    </script>
    <script async="" src="https://static.parastorage.com/services/wix-thunderbolt/dist/main.aaff206b.bundle.min.js"></script>
    <script async="" src="https://static.parastorage.com/services/wix-thunderbolt/dist/main.renderer.1d21f023.bundle.min.js"></script>
    <!-- lodash script -->
    <script async="" onload="resolveExternalsRegistryModule('lodash')" src="https://static.parastorage.com/unpkg/lodash@4.17.21/lodash.min.js"></script>
    <!-- react -->
    <script crossorigin="" onload="resolveExternalsRegistryModule('react')" src="https://static.parastorage.com/unpkg/react@18.3.1/umd/react.production.min.js"></script>
    <!-- react-dom -->
    <script crossorigin="" defer="" onload="resolveExternalsRegistryModule('reactDOM')" src="https://static.parastorage.com/unpkg/react-dom@18.3.1/umd/react-dom.production.min.js"></script>
    <!-- scriptTagsToPreload -->



    <!-- Old Browsers Deprecation -->
    <script async="" src="https://static.parastorage.com/services/wix-thunderbolt/dist/browser-deprecation.bundle.es5.js"></script>


    <!-- bi -->
    <script>
        window.clientSideRender = false;
    </script>
    <!-- bi -->
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/bi.inline.b203996e.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [4017], {
                16992: function(e, i, n) {
                    n.d(i, {
                        K: function() {
                            return m
                        }
                    });
                    var t = n(25196);
                    const r = e => {
                            let i = !1;
                            if (!/\(iP(hone|ad|od);/i.test(window?.navigator?.userAgent)) try {
                                i = navigator.sendBeacon(e)
                            } catch (e) {}
                            i || ((new Image).src = e)
                        },
                        s = null;

                    function o([e, i]) {
                        return i !== s && `${e}=${i}`
                    }

                    function a() {
                        const e = document.cookie.match(/_wixCIDX=([^;]*)/);
                        return e && e[1]
                    }

                    function c(e) {
                        if (!e) return s;
                        const i = new URL(decodeURIComponent(e));
                        return i.search = "?", encodeURIComponent(i.href)
                    }
                    var d = function(e, {
                        eventType: i,
                        ts: n,
                        tts: t,
                        extra: r = ""
                    }, d, u) {
                        const l = function(e) {
                                const i = e.split("&").reduce(((e, i) => {
                                    const [n, t] = i.split("=");
                                    return {
                                        ...e,
                                        [n]: t
                                    }
                                }), {});
                                return (e, n) => void 0 !== i[e] ? i[e] : n
                            }(r),
                            p = (m = d, e => void 0 === m[e] ? s : m[e]);
                        var m;
                        let w = !0;
                        const f = window?.consentPolicyManager;
                        if (f) {
                            const e = f.getCurrentConsentPolicy();
                            if (e) {
                                const {
                                    policy: i
                                } = e;
                                w = !(i.functional && i.analytics)
                            }
                        }
                        const g = p("requestUrl"),
                            h = {
                                src: "29",
                                evid: "3",
                                viewer_name: p("viewerName"),
                                caching: p("caching"),
                                client_id: w ? s : a(),
                                dc: p("dc"),
                                microPop: p("microPop"),
                                et: i,
                                event_name: e ? encodeURIComponent(e) : s,
                                is_cached: p("isCached"),
                                is_platform_loaded: p("is_platform_loaded"),
                                is_rollout: p("is_rollout"),
                                ism: p("isMesh"),
                                isp: 0,
                                isjp: p("isjp"),
                                iss: p("isServerSide"),
                                ssr_fb: p("fallbackReason"),
                                ita: l("ita", d.checkVisibility() ? "1" : "0"),
                                mid: w ? s : u?.siteMemberId || s,
                                msid: p("msId"),
                                pid: l("pid", s),
                                pn: l("pn", "1"),
                                ref: document.referrer && !w ? encodeURIComponent(document.referrer) : s,
                                sar: w ? s : l("sar", screen.availWidth ? `${screen.availWidth}x${screen.availHeight}` : s),
                                sessionId: w && f ? s : p("sessionId"),
                                siterev: d.siteRevision || d.siteCacheRevision ? `${d.siteRevision}-${d.siteCacheRevision}` : s,
                                sr: w ? s : l("sr", screen.width ? `${screen.width}x${screen.height}` : s),
                                st: p("st"),
                                ts: n,
                                tts: t,
                                url: w ? c(g) : g,
                                v: window?.thunderboltVersion || "0.0.0",
                                vid: w ? s : u?.visitorId || s,
                                bsi: w ? s : u?.bsi || s,
                                vsi: p("viewerSessionId"),
                                wor: w || !window.outerWidth ? s : `${window.outerWidth}x${window.outerHeight}`,
                                wr: w ? s : l("wr", window.innerWidth ? `${window.innerWidth}x${window.innerHeight}` : s),
                                _brandId: d.commonConfig?.brand || s,
                                nt: l("nt", s)
                            };
                        return `https://frog.wix.com/bt?${Object.entries(h).map(o).filter(Boolean).join("&")}`
                    };
                    const u = (e, i) => {
                            let n, t = "none",
                                r = e.match(/ssr-caching="?cache[,#]\s*desc=([\w-]+)(?:[,#]\s*varnish=(\w+))?(?:[,#]\s*dc[,#]\s*desc=([\w-]+))?(?:"|;|$)/);
                            if (!r && window.PerformanceServerTiming) {
                                const e = (e => {
                                    let i, n;
                                    try {
                                        i = e()
                                    } catch (e) {
                                        i = []
                                    }
                                    const t = [];
                                    return i.forEach((e => {
                                        switch (e.name) {
                                            case "cache":
                                                t[1] = e.description;
                                                break;
                                            case "varnish":
                                                t[2] = e.description;
                                                break;
                                            case "dc":
                                                n = e.description
                                        }
                                    })), {
                                        microPop: n,
                                        matches: t
                                    }
                                })(i);
                                n = e.microPop, r = e.matches
                            }
                            if (r && r.length && (t = `${r[1]},${r[2]||"none"}`, n || (n = r[3])), "none" === t) {
                                const e = "undefined" != typeof performance ? performance.timing : null;
                                e && e.responseStart - e.requestStart == 0 && (t = "browser")
                            }
                            return {
                                caching: t,
                                isCached: t.includes("hit"),
                                ...n ? {
                                    microPop: n
                                } : {}
                            }
                        },
                        l = {
                            WixSite: 1,
                            UGC: 2,
                            Template: 3
                        };
                    var p = () => {
                        const {
                            fedops: e,
                            viewerModel: {
                                siteFeaturesConfigs: i,
                                requestUrl: n,
                                site: t,
                                fleetConfig: r,
                                commonConfig: s,
                                interactionSampleRatio: o
                            },
                            clientSideRender: a,
                            santaRenderingError: c
                        } = window, d = (({
                            requestUrl: e,
                            interactionSampleRatio: i
                        }) => {
                            const n = new URL(e).searchParams;
                            return n.has("sampleEvents") ? "true" === n.get("sampleEvents") : Math.random() < (i ? 1 - i : .9)
                        })({
                            requestUrl: n,
                            interactionSampleRatio: o
                        }), p = (e => {
                            const {
                                userAgent: i
                            } = e.navigator;
                            return /instagram.+google\/google/i.test(i) ? "" : /bot|google(?!play)|phantom|crawl|spider|headless|slurp|facebookexternal|Lighthouse|PTST|^mozilla\/4\.0$|^\s*$/i.test(i) ? "ua" : ""
                        })(window) || (() => {
                            try {
                                if (window.self === window.top) return ""
                            } catch (e) {}
                            return "iframe"
                        })() || (() => {
                            if (!Function.prototype.bind) return "bind";
                            const {
                                document: e,
                                navigator: i
                            } = window;
                            if (!e || !i) return "document";
                            const {
                                webdriver: n,
                                userAgent: t,
                                plugins: r,
                                languages: s
                            } = i;
                            if (n) return "webdriver";
                            if (!r || Array.isArray(r)) return "plugins";
                            if (Object.getOwnPropertyDescriptor(r, "0")?.writable) return "plugins-extra";
                            if (!t) return "userAgent";
                            if (t.indexOf("Snapchat") > 0 && e.hidden) return "Snapchat";
                            if (!s || 0 === s.length || !Object.isFrozen(s)) return "languages";
                            try {
                                throw Error()
                            } catch (e) {
                                if (e instanceof Error) {
                                    const {
                                        stack: i
                                    } = e;
                                    if (i && / (\(internal\/)|(\(?file:\/)/.test(i)) return "stack"
                                }
                            }
                            return ""
                        })() || (({
                            seo: e
                        }) => e?.isInSEO ? "seo" : "")(i);
                        return {
                            suppressbi: n.includes("suppressbi=true"),
                            initialTimestamp: window.initialTimestamps.initialTimestamp,
                            initialRequestTimestamp: window.initialTimestamps.initialRequestTimestamp,
                            viewerSessionId: e.vsi,
                            viewerName: t.appNameForBiEvents,
                            siteRevision: String(t.siteRevision),
                            msId: t.metaSiteId,
                            is_rollout: 0 === r.code || 1 === r.code ? r.code : null,
                            is_platform_loaded: 0,
                            requestUrl: encodeURIComponent(n),
                            sessionId: String(t.sessionId),
                            btype: p,
                            isjp: !!p,
                            dc: t.dc,
                            siteCacheRevision: "__siteCacheRevision__",
                            checkVisibility: (() => {
                                let e = !0;

                                function i() {
                                    e = e && !0 !== document.hidden
                                }
                                return document.addEventListener("visibilitychange", i, {
                                    passive: !0
                                }), i(), () => (i(), e)
                            })(),
                            ...u(document.cookie, (() => [...performance.getEntriesByType("navigation")[0].serverTiming || []])),
                            isMesh: 1,
                            st: l[t.siteType] || 0,
                            commonConfig: s,
                            muteThunderboltEvents: d,
                            isServerSide: a ? 0 : 1,
                            isSuccessfulSSR: !a,
                            fallbackReason: c?.errorInfo
                        }
                    };
                    const m = function() {
                        const e = p(),
                            i = {};
                        let n = 1;
                        const s = (t, s, o = {}) => {
                            const a = Date.now(),
                                c = Math.round(performance.now()),
                                u = a - e.initialTimestamp;
                            if (function(e, i) {
                                    if (i && performance.mark) {
                                        const n = `${i} (beat ${e})`;
                                        performance.mark(n)
                                    }
                                }(t, s), e.suppressbi || window.__browser_deprecation__) return;
                            const {
                                pageId: l,
                                pageNumber: p = n,
                                navigationType: m
                            } = o;
                            let w = `&pn=${p}`;
                            l && (w += `&pid=${l}`), m && (w += `&nt=${m}`);
                            const f = d(s, {
                                eventType: t,
                                ts: u,
                                tts: c,
                                extra: w
                            }, e, i);
                            r(f)
                        };
                        return {
                            sendBeat: s,
                            reportBI: function(e, i) {
                                ! function(e, i) {
                                    const n = i ? `${e} - ${i}` : e,
                                        t = "end" === i ? `${e} - start` : null;
                                    performance.mark(n), performance.measure && t && performance.measure(`\u2b50${e}`, t, n)
                                }(e, i)
                            },
                            wixBiSession: e,
                            sendBeacon: r,
                            setDynamicSessionData: ({
                                visitorId: e,
                                siteMemberId: n,
                                bsi: t
                            }) => {
                                i.visitorId = e || i.visitorId, i.siteMemberId = n || i.siteMemberId, i.bsi = t || i.bsi
                            },
                            reportPageNavigation: function(e) {
                                n += 1, s(t.lF.PAGE_NAVIGATION, "page navigation start", {
                                    pageId: e,
                                    pageNumber: n
                                })
                            },
                            reportPageNavigationDone: function(e, i) {
                                s(t.lF.PAGE_NAVIGATION_DONE, "page navigation complete", {
                                    pageId: e,
                                    pageNumber: n,
                                    navigationType: i
                                }), i !== t.w4.DYNAMIC_REDIRECT && i !== t.w4.NAVIGATION_ERROR && i !== t.w4.CANCELED || (n -= 1)
                            }
                        }
                    }();
                    window.bi = m, window.bi.wixBiSession.isServerSide = window.clientSideRender ? 0 : 1, window.bi.wixBiSession.isSuccessfulSSR = !window.clientSideRender, window.clientSideRender && (window.bi.wixBiSession.fallbackReason = window.santaRenderingError?.errorInfo), m.sendBeat(1, "Init")
                }
            },
            function(e) {
                e.O(0, [507], (function() {
                    return i = 16992, e(e.s = i);
                    var i
                }));
                e.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/bi.inline.b203996e.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/sendBeat12.inline.1d5ac45a.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [7257, 4017], {
                42466: function(e, i, n) {
                    n(16992).K.sendBeat(12, "Partially visible", {
                        pageId: window.firstPageId
                    })
                },
                16992: function(e, i, n) {
                    n.d(i, {
                        K: function() {
                            return m
                        }
                    });
                    var t = n(25196);
                    const r = e => {
                            let i = !1;
                            if (!/\(iP(hone|ad|od);/i.test(window?.navigator?.userAgent)) try {
                                i = navigator.sendBeacon(e)
                            } catch (e) {}
                            i || ((new Image).src = e)
                        },
                        s = null;

                    function o([e, i]) {
                        return i !== s && `${e}=${i}`
                    }

                    function a() {
                        const e = document.cookie.match(/_wixCIDX=([^;]*)/);
                        return e && e[1]
                    }

                    function c(e) {
                        if (!e) return s;
                        const i = new URL(decodeURIComponent(e));
                        return i.search = "?", encodeURIComponent(i.href)
                    }
                    var d = function(e, {
                        eventType: i,
                        ts: n,
                        tts: t,
                        extra: r = ""
                    }, d, u) {
                        const l = function(e) {
                                const i = e.split("&").reduce(((e, i) => {
                                    const [n, t] = i.split("=");
                                    return {
                                        ...e,
                                        [n]: t
                                    }
                                }), {});
                                return (e, n) => void 0 !== i[e] ? i[e] : n
                            }(r),
                            p = (m = d, e => void 0 === m[e] ? s : m[e]);
                        var m;
                        let w = !0;
                        const f = window?.consentPolicyManager;
                        if (f) {
                            const e = f.getCurrentConsentPolicy();
                            if (e) {
                                const {
                                    policy: i
                                } = e;
                                w = !(i.functional && i.analytics)
                            }
                        }
                        const g = p("requestUrl"),
                            h = {
                                src: "29",
                                evid: "3",
                                viewer_name: p("viewerName"),
                                caching: p("caching"),
                                client_id: w ? s : a(),
                                dc: p("dc"),
                                microPop: p("microPop"),
                                et: i,
                                event_name: e ? encodeURIComponent(e) : s,
                                is_cached: p("isCached"),
                                is_platform_loaded: p("is_platform_loaded"),
                                is_rollout: p("is_rollout"),
                                ism: p("isMesh"),
                                isp: 0,
                                isjp: p("isjp"),
                                iss: p("isServerSide"),
                                ssr_fb: p("fallbackReason"),
                                ita: l("ita", d.checkVisibility() ? "1" : "0"),
                                mid: w ? s : u?.siteMemberId || s,
                                msid: p("msId"),
                                pid: l("pid", s),
                                pn: l("pn", "1"),
                                ref: document.referrer && !w ? encodeURIComponent(document.referrer) : s,
                                sar: w ? s : l("sar", screen.availWidth ? `${screen.availWidth}x${screen.availHeight}` : s),
                                sessionId: w && f ? s : p("sessionId"),
                                siterev: d.siteRevision || d.siteCacheRevision ? `${d.siteRevision}-${d.siteCacheRevision}` : s,
                                sr: w ? s : l("sr", screen.width ? `${screen.width}x${screen.height}` : s),
                                st: p("st"),
                                ts: n,
                                tts: t,
                                url: w ? c(g) : g,
                                v: window?.thunderboltVersion || "0.0.0",
                                vid: w ? s : u?.visitorId || s,
                                bsi: w ? s : u?.bsi || s,
                                vsi: p("viewerSessionId"),
                                wor: w || !window.outerWidth ? s : `${window.outerWidth}x${window.outerHeight}`,
                                wr: w ? s : l("wr", window.innerWidth ? `${window.innerWidth}x${window.innerHeight}` : s),
                                _brandId: d.commonConfig?.brand || s,
                                nt: l("nt", s)
                            };
                        return `https://frog.wix.com/bt?${Object.entries(h).map(o).filter(Boolean).join("&")}`
                    };
                    const u = (e, i) => {
                            let n, t = "none",
                                r = e.match(/ssr-caching="?cache[,#]\s*desc=([\w-]+)(?:[,#]\s*varnish=(\w+))?(?:[,#]\s*dc[,#]\s*desc=([\w-]+))?(?:"|;|$)/);
                            if (!r && window.PerformanceServerTiming) {
                                const e = (e => {
                                    let i, n;
                                    try {
                                        i = e()
                                    } catch (e) {
                                        i = []
                                    }
                                    const t = [];
                                    return i.forEach((e => {
                                        switch (e.name) {
                                            case "cache":
                                                t[1] = e.description;
                                                break;
                                            case "varnish":
                                                t[2] = e.description;
                                                break;
                                            case "dc":
                                                n = e.description
                                        }
                                    })), {
                                        microPop: n,
                                        matches: t
                                    }
                                })(i);
                                n = e.microPop, r = e.matches
                            }
                            if (r && r.length && (t = `${r[1]},${r[2]||"none"}`, n || (n = r[3])), "none" === t) {
                                const e = "undefined" != typeof performance ? performance.timing : null;
                                e && e.responseStart - e.requestStart == 0 && (t = "browser")
                            }
                            return {
                                caching: t,
                                isCached: t.includes("hit"),
                                ...n ? {
                                    microPop: n
                                } : {}
                            }
                        },
                        l = {
                            WixSite: 1,
                            UGC: 2,
                            Template: 3
                        };
                    var p = () => {
                        const {
                            fedops: e,
                            viewerModel: {
                                siteFeaturesConfigs: i,
                                requestUrl: n,
                                site: t,
                                fleetConfig: r,
                                commonConfig: s,
                                interactionSampleRatio: o
                            },
                            clientSideRender: a,
                            santaRenderingError: c
                        } = window, d = (({
                            requestUrl: e,
                            interactionSampleRatio: i
                        }) => {
                            const n = new URL(e).searchParams;
                            return n.has("sampleEvents") ? "true" === n.get("sampleEvents") : Math.random() < (i ? 1 - i : .9)
                        })({
                            requestUrl: n,
                            interactionSampleRatio: o
                        }), p = (e => {
                            const {
                                userAgent: i
                            } = e.navigator;
                            return /instagram.+google\/google/i.test(i) ? "" : /bot|google(?!play)|phantom|crawl|spider|headless|slurp|facebookexternal|Lighthouse|PTST|^mozilla\/4\.0$|^\s*$/i.test(i) ? "ua" : ""
                        })(window) || (() => {
                            try {
                                if (window.self === window.top) return ""
                            } catch (e) {}
                            return "iframe"
                        })() || (() => {
                            if (!Function.prototype.bind) return "bind";
                            const {
                                document: e,
                                navigator: i
                            } = window;
                            if (!e || !i) return "document";
                            const {
                                webdriver: n,
                                userAgent: t,
                                plugins: r,
                                languages: s
                            } = i;
                            if (n) return "webdriver";
                            if (!r || Array.isArray(r)) return "plugins";
                            if (Object.getOwnPropertyDescriptor(r, "0")?.writable) return "plugins-extra";
                            if (!t) return "userAgent";
                            if (t.indexOf("Snapchat") > 0 && e.hidden) return "Snapchat";
                            if (!s || 0 === s.length || !Object.isFrozen(s)) return "languages";
                            try {
                                throw Error()
                            } catch (e) {
                                if (e instanceof Error) {
                                    const {
                                        stack: i
                                    } = e;
                                    if (i && / (\(internal\/)|(\(?file:\/)/.test(i)) return "stack"
                                }
                            }
                            return ""
                        })() || (({
                            seo: e
                        }) => e?.isInSEO ? "seo" : "")(i);
                        return {
                            suppressbi: n.includes("suppressbi=true"),
                            initialTimestamp: window.initialTimestamps.initialTimestamp,
                            initialRequestTimestamp: window.initialTimestamps.initialRequestTimestamp,
                            viewerSessionId: e.vsi,
                            viewerName: t.appNameForBiEvents,
                            siteRevision: String(t.siteRevision),
                            msId: t.metaSiteId,
                            is_rollout: 0 === r.code || 1 === r.code ? r.code : null,
                            is_platform_loaded: 0,
                            requestUrl: encodeURIComponent(n),
                            sessionId: String(t.sessionId),
                            btype: p,
                            isjp: !!p,
                            dc: t.dc,
                            siteCacheRevision: "__siteCacheRevision__",
                            checkVisibility: (() => {
                                let e = !0;

                                function i() {
                                    e = e && !0 !== document.hidden
                                }
                                return document.addEventListener("visibilitychange", i, {
                                    passive: !0
                                }), i(), () => (i(), e)
                            })(),
                            ...u(document.cookie, (() => [...performance.getEntriesByType("navigation")[0].serverTiming || []])),
                            isMesh: 1,
                            st: l[t.siteType] || 0,
                            commonConfig: s,
                            muteThunderboltEvents: d,
                            isServerSide: a ? 0 : 1,
                            isSuccessfulSSR: !a,
                            fallbackReason: c?.errorInfo
                        }
                    };
                    const m = function() {
                        const e = p(),
                            i = {};
                        let n = 1;
                        const s = (t, s, o = {}) => {
                            const a = Date.now(),
                                c = Math.round(performance.now()),
                                u = a - e.initialTimestamp;
                            if (function(e, i) {
                                    if (i && performance.mark) {
                                        const n = `${i} (beat ${e})`;
                                        performance.mark(n)
                                    }
                                }(t, s), e.suppressbi || window.__browser_deprecation__) return;
                            const {
                                pageId: l,
                                pageNumber: p = n,
                                navigationType: m
                            } = o;
                            let w = `&pn=${p}`;
                            l && (w += `&pid=${l}`), m && (w += `&nt=${m}`);
                            const f = d(s, {
                                eventType: t,
                                ts: u,
                                tts: c,
                                extra: w
                            }, e, i);
                            r(f)
                        };
                        return {
                            sendBeat: s,
                            reportBI: function(e, i) {
                                ! function(e, i) {
                                    const n = i ? `${e} - ${i}` : e,
                                        t = "end" === i ? `${e} - start` : null;
                                    performance.mark(n), performance.measure && t && performance.measure(`\u2b50${e}`, t, n)
                                }(e, i)
                            },
                            wixBiSession: e,
                            sendBeacon: r,
                            setDynamicSessionData: ({
                                visitorId: e,
                                siteMemberId: n,
                                bsi: t
                            }) => {
                                i.visitorId = e || i.visitorId, i.siteMemberId = n || i.siteMemberId, i.bsi = t || i.bsi
                            },
                            reportPageNavigation: function(e) {
                                n += 1, s(t.lF.PAGE_NAVIGATION, "page navigation start", {
                                    pageId: e,
                                    pageNumber: n
                                })
                            },
                            reportPageNavigationDone: function(e, i) {
                                s(t.lF.PAGE_NAVIGATION_DONE, "page navigation complete", {
                                    pageId: e,
                                    pageNumber: n,
                                    navigationType: i
                                }), i !== t.w4.DYNAMIC_REDIRECT && i !== t.w4.NAVIGATION_ERROR && i !== t.w4.CANCELED || (n -= 1)
                            }
                        }
                    }();
                    window.bi = m, window.bi.wixBiSession.isServerSide = window.clientSideRender ? 0 : 1, window.bi.wixBiSession.isSuccessfulSSR = !window.clientSideRender, window.clientSideRender && (window.bi.wixBiSession.fallbackReason = window.santaRenderingError?.errorInfo), m.sendBeat(1, "Init")
                }
            },
            function(e) {
                e.O(0, [507], (function() {
                    return i = 42466, e(e.s = i);
                    var i
                }));
                e.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/sendBeat12.inline.1d5ac45a.bundle.min.js.map
    </script>
    <script>
        window.firstPageId = 'n1pm5'

        if (window.requestCloseWelcomeScreen) {
            window.requestCloseWelcomeScreen()
        }
        if (!window.__browser_deprecation__) {
            window.fedops.phaseStarted('partially_visible', {
                paramsOverrides: {
                    pageId: firstPageId,
                    isSuccessfulSSR: !clientSideRender
                }
            })
        }
    </script>


    <script defer="" src="https://static.parastorage.com/services/tag-manager-client/1.875.0/siteTags.bundle.min.js"></script>









    <!--pageHtmlEmbeds.bodyEnd start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyEnd start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyEnd end"></script>
    <!--pageHtmlEmbeds.bodyEnd end-->


    <!-- warmup data start -->
    <script type="application/json" id="wix-warmup-data">
        {
            "platform": {
                "ssrPropsUpdates": [],
                "ssrStyleUpdates": [],
                "ssrStructureUpdates": []
            },
            "pages": {
                "compIdToTypeMap": {
                    "CONTROLLER_COMP_CUSTOM_ID": "AppController",
                    "masterPage": "MasterPage",
                    "PAGES_CONTAINER": "PagesContainer",
                    "SITE_HEADER": "HeaderContainer",
                    "SITE_FOOTER": "FooterContainer",
                    "SITE_PAGES": "PageGroup",
                    "BACKGROUND_GROUP": "BackgroundGroup",
                    "SCROLL_TO_TOP": "Anchor",
                    "SCROLL_TO_BOTTOM": "Anchor",
                    "soapAfterPagesContainer": "MeshGroup",
                    "SKIP_TO_CONTENT_BTN": "SkipToContentButton",
                    "comp-m3cpbbbs": "WPhoto",
                    "comp-m3cpbpo4": "WRichText",
                    "comp-m3cpf6ry": "FiveGridLine",
                    "comp-m3cpe3n0": "WRichText",
                    "comp-m3cpk7uu": "WPhoto",
                    "comp-m3cpj7hp": "SiteButton",
                    "comp-m3cphkeb": "WRichText",
                    "comp-m3cpkmta": "WPhoto",
                    "pageBackground_n1pm5": "PageBackground",
                    "n1pm5": "Page",
                    "comp-m3cp9eg9": "ClassicSection",
                    "comp-m3cp9zp8": "StripColumnsContainer",
                    "comp-m3cp9zpl": "Column",
                    "Containern1pm5": "Group",
                    "DYNAMIC_STRUCTURE_CONTAINER": "DynamicStructureContainer",
                    "site-root": "DivWithChildren",
                    "main_MF": "DivWithChildren",
                    "n1pm5_wrapper": "PageMountUnmount",
                    "n1pm5_wrapper_background": "PageMountUnmount"
                }
            },
            "appsWarmupData": {},
            "ooi": {
                "failedInSsr": {}
            }
        }
    </script>
    <!-- warmup data end -->





</body>

</html>