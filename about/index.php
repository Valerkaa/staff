<?php

if (empty($_GET['page'])) {
    $_GET['page'] = 1;
}
include "../php/connect_db.php"

?>
<!doctype html>
<html lang="uk">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" href="../content/themes/itexpert/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../ajax/libs/slick-carousel/1.8.1/slick.css"
          integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
    <link rel="preload" href="../content/plugins/rate-my-post/public/css/fonts/ratemypost.ttf" type="font/ttf"
          as="font" crossorigin="anonymous">
    <title>Про нас › IT-рекрутингова агенція &quot;ITExpert&quot;</title>
    <meta name="description"
          content="Ми допомагаємо знаходити таланти для технічних команд, збирати core team для стартапів або відкривати R&amp;D-центри в Україні.">
    <link rel='stylesheet' id='wp-block-library-css' href='../content/cache/wpfc-minified/lwp0if1e/h6utc.css'
          media='all'>
    <style>.wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }</style>
    <style id='global-styles-inline-css'>body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

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

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
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

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }</style>
    <link rel='stylesheet' id='wpml-blocks-css' href='../content/cache/wpfc-minified/du4ijh0d/h6utc.css' media='all'>
    <style>#avatar-manager img {
            margin: 2px 0;
            vertical-align: middle
        }

        #avatar-manager label + a {
            display: inline-block;
            margin-top: -6px
        }

        #avatar-manager .delete {
            color: red;
            padding: 2px
        }

        #avatar-manager .delete:hover {
            background: red;
            color: #fff;
            text-decoration: none
        }</style>
    <link rel='stylesheet' id='sweetalert2-css' href='../content/cache/wpfc-minified/l0zt3ndp/h6utc.css' media='all'>
    <style>.swal2-container.swal2-shown {
            z-index: 9999999;
        }</style>
    <style>.wpcf7 .screen-reader-response {
            position: absolute;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            width: 1px;
            margin: -1px;
            padding: 0;
            border: 0;
            word-wrap: normal !important;
        }

        .wpcf7 form .wpcf7-response-output {
            margin: 2em 0.5em 1em;
            padding: 0.2em 1em;
            border: 2px solid #00a0d2;
        }

        .wpcf7 form.init .wpcf7-response-output, .wpcf7 form.resetting .wpcf7-response-output, .wpcf7 form.submitting .wpcf7-response-output {
            display: none;
        }

        .wpcf7 form.sent .wpcf7-response-output {
            border-color: #46b450;
        }

        .wpcf7 form.failed .wpcf7-response-output, .wpcf7 form.aborted .wpcf7-response-output {
            border-color: #dc3232;
        }

        .wpcf7 form.spam .wpcf7-response-output {
            border-color: #f56e28;
        }

        .wpcf7 form.invalid .wpcf7-response-output, .wpcf7 form.unaccepted .wpcf7-response-output, .wpcf7 form.payment-required .wpcf7-response-output {
            border-color: #ffb900;
        }

        .wpcf7-form-control-wrap {
            position: relative;
        }

        .wpcf7-not-valid-tip {
            color: #dc3232;
            font-size: 1em;
            font-weight: normal;
            display: block;
        }

        .use-floating-validation-tip .wpcf7-not-valid-tip {
            position: relative;
            top: -2ex;
            left: 1em;
            z-index: 100;
            border: 1px solid #dc3232;
            background: #fff;
            padding: .2em .8em;
            width: 24em;
        }

        .wpcf7-list-item {
            display: inline-block;
            margin: 0 0 0 1em;
        }

        .wpcf7-list-item-label::before, .wpcf7-list-item-label::after {
            content: " ";
        }

        .wpcf7-spinner {
            visibility: hidden;
            display: inline-block;
            background-color: #23282d;
            opacity: 0.75;
            width: 24px;
            height: 24px;
            border: none;
            border-radius: 100%;
            padding: 0;
            margin: 0 24px;
            position: relative;
        }

        form.submitting .wpcf7-spinner {
            visibility: visible;
        }

        .wpcf7-spinner::before {
            content: '';
            position: absolute;
            background-color: #fbfbfc;
            top: 4px;
            left: 4px;
            width: 6px;
            height: 6px;
            border: none;
            border-radius: 100%;
            transform-origin: 8px 8px;
            animation-name: spin;
            animation-duration: 1000ms;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .wpcf7-spinner::before {
                animation-name: blink;
                animation-duration: 2000ms;
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes blink {
            from {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        .wpcf7 input[type="file"] {
            cursor: pointer;
        }

        .wpcf7 input[type="file"]:disabled {
            cursor: default;
        }

        .wpcf7 .wpcf7-submit:disabled {
            cursor: not-allowed;
        }

        .wpcf7 input[type="url"],
        .wpcf7 input[type="email"],
        .wpcf7 input[type="tel"] {
            direction: ltr;
        }

        .wpcf7-reflection > output {
            display: list-item;
            list-style: none;
        }

        .wpcf7-reflection > output[hidden] {
            display: none;
        }</style>
    <style>.rmp-results-widget p:empty:before, .rmp-widgets-container p:empty:before, .widget_rate-my-post-top-rated-widget p:empty:before {
            display: none
        }

        @font-face {
            font-family: ratemypost;
            src: url(../content/plugins/rate-my-post/public/css/fonts/ratemypost.eot);
            src: url(../content/plugins/rate-my-post/public/css/fonts/ratemypost.eot) format('embedded-opentype'), url(../content/plugins/rate-my-post/public/css/fonts/ratemypost.ttf) format('truetype'), url(../content/plugins/rate-my-post/public/css/fonts/ratemypost.woff) format('woff'), url(../content/plugins/rate-my-post/public/css/fonts/ratemypost.svg) format('svg');
            font-weight: 400;
            font-style: normal;
            font-display: block
        }

        [class*=" rmp-icon--"], [class^=rmp-icon--] {
            font-family: ratemypost !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container {
            text-align: center;
            margin: 1rem 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container p {
            margin: 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget--hidden {
            display: none
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__icons {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__icons-list {
            list-style-type: none;
            padding: 0;
            margin: 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__icons-list::before {
            content: ""
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__icons-list__icon {
            display: inline-block;
            margin: 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__hover-text {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__submit-btn {
            display: none
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__submit-btn--visible {
            display: inline-block
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__results {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__results--hidden {
            display: none;
            margin: 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__not-rated {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__not-rated--hidden {
            display: none;
            margin: 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__msg {
            margin: .4rem 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-rating-widget__msg--alert {
            color: #dc3545
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget {
            display: none
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget--visible {
            display: block
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__text {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__input {
            display: block;
            margin-left: auto;
            margin-right: auto;
            min-width: 250px;
            max-width: 630px;
            margin-bottom: .4rem
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__msg--alert {
            color: #dc3545
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__loader {
            display: none;
            position: relative;
            width: 80px;
            height: 40px;
            left: 50%;
            transform: translateX(-50%)
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__loader--visible {
            display: block
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__loader div {
            display: inline-block;
            position: absolute;
            left: 8px;
            width: 16px;
            background: #ffcc36;
            -webkit-animation: rmp-feedback-widget__loader 1.2s cubic-bezier(0, .5, .5, 1) infinite;
            animation: rmp-feedback-widget__loader 1.2s cubic-bezier(0, .5, .5, 1) infinite
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__loader div:nth-child(1) {
            left: 8px;
            -webkit-animation-delay: -.24s;
            animation-delay: -.24s
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__loader div:nth-child(2) {
            left: 32px;
            -webkit-animation-delay: -.12s;
            animation-delay: -.12s
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-feedback-widget__loader div:nth-child(3) {
            left: 56px;
            -webkit-animation-delay: 0;
            animation-delay: 0
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-social-widget {
            display: none
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-social-widget--visible {
            display: block
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-social-widget a {
            color: #fff
        }

        .rmp-tr-posts-widget__star-rating {
            text-align: center;
            margin-top: 5px;
            font-size: 14px
        }

        .rmp-tr-posts-widget__img {
            width: 150px;
            height: 150px;
            -o-object-fit: cover;
            object-fit: cover;
            margin-left: auto;
            margin-right: auto;
            display: block
        }

        .rmp-tr-posts-widget__link {
            display: block;
            text-align: center;
            max-width: 200px;
            margin-left: auto;
            margin-right: auto;
            text-decoration: none;
            box-shadow: none;
            text-decoration: none
        }

        .rmp-icon--star:before {
            content: "\f005"
        }

        .rmp-icon--heart:before {
            content: "\f004"
        }

        .rmp-icon--trophy:before {
            content: "\f091"
        }

        .rmp-icon--smile-o:before {
            content: "\f118"
        }

        .rmp-icon--thumbs-up:before {
            content: "\f164"
        }

        .rmp-icon--twitter {
            background: #55acee;
            color: #fff
        }

        .rmp-icon--twitter:before {
            content: "\f099"
        }

        .rmp-icon--facebook {
            background: #3b5998;
            color: #fff
        }

        .rmp-icon--facebook:before {
            content: "\f09a"
        }

        .rmp-icon--facebook-f:before {
            content: "\f09a"
        }

        .rmp-icon--pinterest {
            background: #cb2027;
            color: #fff
        }

        .rmp-icon--pinterest:before {
            content: "\f0d2"
        }

        .rmp-icon--linkedin {
            background: #007bb5;
            color: #fff
        }

        .rmp-icon--linkedin:before {
            content: "\f0e1"
        }

        .rmp-icon--youtube-square {
            background: #b00;
            color: #fff
        }

        .rmp-icon--youtube-square:before {
            content: "\f166"
        }

        .rmp-icon--instagram {
            background: #125688;
            color: #fff
        }

        .rmp-icon--instagram:before {
            content: "\f16d"
        }

        .rmp-icon--flickr {
            background: #f40083;
            color: #fff
        }

        .rmp-icon--flickr:before {
            content: "\f16e"
        }

        .rmp-icon--reddit {
            background: #ff5700;
            color: #fff
        }

        .rmp-icon--reddit:before {
            content: "\f1a1"
        }

        .rmp-icon--ratings {
            color: #ccc;
            font-size: 1rem
        }

        .rmp-rating-widget .rmp-icon--ratings {
            font-size: 2.5rem
        }

        .rmp-icon--full-highlight {
            color: #ff912c
        }

        .rmp-rating-widget .rmp-icon--full-highlight {
            color: #ffe699
        }

        .rmp-icon--half-highlight {
            background: linear-gradient(to right, #ff912c 50%, #ccc 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .rmp-rating-widget .rmp-icon--half-highlight {
            background: linear-gradient(to right, #ffe699 50%, #ccc 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        @media (hover: hover) {
            .rmp-rating-widget .rmp-icon--hovered {
                color: #ffcc36;
                -webkit-background-clip: initial;
                -webkit-text-fill-color: initial;
                background: 0 0;
                transition: .1s color ease-in
            }
        }

        .rmp-rating-widget .rmp-icon--processing-rating {
            color: #ff912c;
            -webkit-background-clip: initial;
            -webkit-text-fill-color: initial;
            background: 0 0
        }

        .rmp-social-widget .rmp-icon--social {
            padding: 20px;
            font-size: 30px;
            width: 70px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
            transition-property: none;
            box-shadow: none;
            font-family: ratemypost;
            display: inline-block
        }

        .rmp-social-widget .rmp-icon--social:hover {
            -webkit-filter: contrast(140%);
            filter: contrast(140%);
            color: #fff;
            transition-property: none;
            box-shadow: none;
            color: #fff;
            text-decoration: none
        }

        .rmp-heading {
            margin: 0 0 .4rem 0
        }

        .rmp-heading--title {
            font-size: 1.625rem;
            font-weight: 400
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-heading {
            margin: 0 0 .4rem 0
        }

        .rmp-btn {
            background-color: #ffcc36;
            border: none;
            color: #fff;
            padding: .5rem;
            text-decoration: none;
            font-size: 1rem;
            margin-bottom: .4rem
        }

        .rmp-btn:focus, .rmp-btn:hover {
            background: initial;
            background-color: #ffd966;
            border: none;
            color: #fff;
            padding: .5rem;
            text-decoration: none;
            font-size: 1rem;
            margin-bottom: .4rem;
            cursor: pointer
        }

        .rmp-btn--large {
            padding: .8rem
        }

        .rmp-btn--large:focus, .rmp-btn--large:hover {
            padding: .8rem
        }

        .rmp-results-widget__visual-rating {
            display: inline-block;
            position: relative;
            margin-right: .3rem
        }

        .rmp-results-widget__avg-rating {
            display: inline-block
        }

        .rmp-results-widget__vote-count {
            display: inline-block
        }

        .rmp-archive-results-widget {
            display: inline-block;
            position: relative;
            margin-left: .4rem;
            vertical-align: top;
            font-size: .9rem
        }

        .rmp-archive-results-widget--excluded-post {
            display: none
        }

        .rmp-archive-results-widget .rmp-icon {
            font-size: .9rem
        }

        @-webkit-keyframes rmp-feedback-widget__loader {
            0% {
                top: 4px;
                height: 32px
            }
            100%, 50% {
                top: 12px;
                height: 16px
            }
        }

        @keyframes rmp-feedback-widget__loader {
            0% {
                top: 4px;
                height: 32px
            }
            100%, 50% {
                top: 12px;
                height: 16px
            }
        }

        .rmp-amp-results-widget .rmp-amp-results-widget__stars {
            display: inline
        }

        .rmp-amp-results-widget .rmp-amp-results-widget__average-rating, .rmp-amp-results-widget .rmp-amp-results-widget__vote-count {
            display: inline-block;
            position: relative;
            bottom: 4px
        }

        .rmp-amp-results-widget .rmp-icon::before {
            content: "★";
            font-size: 26px;
            color: #ccc;
            margin: -2px
        }

        .rmp-amp-results-widget .rmp-icon {
            font-style: normal;
            font-size: 26px;
            line-height: 26px
        }

        .rmp-amp-results-widget .rmp-icon--full-highlight::before {
            color: #ff912c
        }

        .rmp-amp-results-widget .rmp-icon--half-highlight::before {
            background: linear-gradient(to right, #ff912c 50%, #ccc 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .rmp-amp-rating-widget {
            text-align: center
        }

        #rmp-amp-rating-widget__title {
            font-size: 1.8rem;
            margin-bottom: .5rem
        }

        .rmp-amp-rating-widget .rmp-amp-rating-widget__subtitle {
            margin-bottom: 0
        }

        #rmp-amp-action, #rmp-amp-post-id {
            display: none
        }

        .rmp-amp-centered-fieldset {
            margin-left: auto;
            margin-right: auto;
            max-width: 100%
        }

        .rmp-amp-rating-widget__fieldset {
            --star-size: 3;
            padding: 0;
            border: none;
            unicode-bidi: bidi-override;
            direction: rtl;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: 3em;
            font-size: calc(var(--star-size) * 1em);
            cursor: pointer;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-tap-highlight-color: transparent;
            margin-bottom: 16px;
            line-height: normal
        }

        .rmp-amp-rating-widget__fieldset > label {
            display: inline-block;
            position: relative;
            width: 1.1em;
            width: calc(var(--star-size) / 3 * 1.1em)
        }

        .rmp-amp-rating-widget__fieldset:not(:hover) > input:checked ~ label, .rmp-amp-rating-widget__fieldset > :hover, .rmp-amp-rating-widget__fieldset > :hover ~ label {
            color: transparent;
            cursor: inherit
        }

        .rmp-amp-rating-widget__fieldset:not(:hover) > input:checked ~ label:before, .rmp-amp-rating-widget__fieldset > :hover:before, .rmp-amp-rating-widget__fieldset > :hover ~ label:before {
            content: "★";
            position: absolute;
            color: gold
        }

        .rmp-amp-rating-widget__fieldset > input {
            position: relative;
            transform: scale(3);
            transform: scale(var(--star-size));
            top: -.5em;
            top: calc(var(--star-size) / 6 * -1em);
            margin-left: -2.5em;
            margin-left: calc(var(--star-size) / 6 * -5em);
            z-index: 2;
            opacity: 0;
            font-size: initial
        }

        form.amp-form-submit-error [submit-error] {
            color: red
        }

        .rmp-amp-rating-widget__not-rated--hidden {
            display: none
        }

        .rmp-amp-rating-widget__results--hidden {
            display: none
        }

        label#rmp-amp-post-nonce {
            display: none
        }</style>
    <style id='rate-my-post-inline-css'>.rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-heading--title {
            font-size: 18px;
        }

        .rmp-widgets-container p {
            font-size: 18px;
        }

        .rmp-widgets-container.rmp-wp-plugin.rmp-main-container .rmp-heading.rmp-heading--title {
            margin-bottom: 30px;
        }</style>
    <style>.post-ratings {
            width: 100%;
            opacity: 1;
        }

        .post-ratings-loading {
            display: none;
            height: 16px;
            text-align: left;
        }

        .post-ratings-image {
            border: 0;
        }

        .post-ratings img, .post-ratings-loading img, .post-ratings-image img {
            border: 0;
            padding: 0;
            margin: 0;
        }

        .post-ratings-text {
        }

        .post-ratings-comment-author {
            font-weight: normal;
            font-style: italic;
        }</style>
    <style>.wpml-ls-legacy-list-vertical {
            display: table;
            max-width: 100%;
            border: 1px solid transparent;
            border-bottom: 0
        }

        .wpml-ls-legacy-list-vertical > ul {
            position: relative;
            padding: 0;
            margin: 0 !important;
            list-style-type: none
        }

        .wpml-ls-legacy-list-vertical .wpml-ls-item {
            padding: 0;
            margin: 0;
            list-style-type: none
        }

        .wpml-ls-legacy-list-vertical a {
            display: block;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            padding: 5px 10px;
            line-height: 1
        }

        .wpml-ls-legacy-list-vertical a span {
            vertical-align: middle
        }

        .wpml-ls-legacy-list-vertical .wpml-ls-flag {
            display: inline;
            vertical-align: middle
        }

        .wpml-ls-legacy-list-vertical .wpml-ls-flag + span {
            margin-left: .4em
        }

        .rtl .wpml-ls-legacy-list-vertical .wpml-ls-flag + span {
            margin-left: 0;
            margin-right: .4em
        }

        .wpml-ls-legacy-list-vertical.wpml-ls-statics-footer {
            margin-bottom: 30px
        }</style>
    <style>.wpcf7-spinner {
            display: none;
        }

        @media (max-width: 1024px) {
            form label[for="help"] textarea {
                height: 48px;
            }
        }</style>
    <link rel='stylesheet' id='common-style-css' href='../content/cache/wpfc-minified/jme6c36e/h6utc.css'
          media='all'>
    <style>body {
            background: -moz-linear-gradient(291.6deg, rgba(203, 240, 170, .3) -1.94%, rgba(255, 255, 255, 0) 40%);
            background: linear-gradient(158.4deg, rgba(203, 240, 170, .3) -1.94%, rgba(255, 255, 255, 0) 40%)
        }

        .company footer::before {
            display: none
        }

        .company .hero__image img {
            max-width: 404px;
            max-height: 538px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .company .hero:after {
            margin-top: 75px;
            display: block;
            content: "";
            width: 100%;
            height: .5px;
            background: #d1d1d1
        }

        .company .heroInner {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .company .hero__info {
            margin-left: 69px
        }

        .company .hero__title {
            text-align: left
        }

        .company .hero__subtitle {
            margin-top: 22px;
            font-weight: 500;
            font-size: 22px;
            line-height: 32px
        }

        .company .ourValues {
            padding: 60px 0 96px
        }

        .company .ourValues__content {
            display: grid;
            justify-items: center;
            grid-template-columns:1fr 1fr 1fr;
            row-gap: 50px;
            -webkit-column-gap: 77px;
            -moz-column-gap: 77px;
            column-gap: 77px;
            margin-top: 68px
        }

        .company .ourValues__contentItem {
            font-weight: 500;
            padding: 24px 0;
            max-width: 363px;
            width: 100%;
            line-height: 22px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background: #fbfbfb;
            -webkit-box-shadow: 1px 2px 10px 1px rgba(0, 0, 0, .11);
            box-shadow: 1px 2px 10px 1px rgba(0, 0, 0, .11);
            border-radius: 10px
        }

        .a-left {
            position: absolute;
            bottom: -40px;
            left: 44%;
        }

        .a-right {
            position: absolute;
            bottom: -40px;
            right: 44%;
        }

        .slick-arrow {
            cursor: pointer;
        }

        .company .ourTeam__contentItem:after, .company .ourValues__contentIcon {
            background: -webkit-gradient(linear, right top, left top, from(#cfefab), color-stop(36.98%, #9ff89e), to(#8ae0df));
            background: -moz-linear-gradient(right, #cfefab 0, #9ff89e 36.98%, #8ae0df 100%);
            background: linear-gradient(270deg, #cfefab 0, #9ff89e 36.98%, #8ae0df 100%)
        }

        .company .ourValues__contentIcon {
            width: 48px;
            min-width: 48px;
            height: 48px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 100px;
            margin: 0 10px 0 24px
        }

        .company .ourTeam {
            background-color: #212121;
            background-image: url(../content/themes/itexpert/assets/images/team-background.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 300px;
            overflow: hidden;
            padding: 90px 0 110px
        }

        .company .ourTeam__title {
            color: #cfefab
        }

        .company .ourTeam__content .slick-dots {
            margin-top: 100px
        }

        .company .ourTeam__content .slick-list {
            margin: 100px -100px -67px
        }

        .company .ourTeam__content .slick-list .slick-slide {
            margin: 0 160px
        }

        .company .ourTeam__content .slick-list .slick-slide > div, .company .ourTeam__contentItem {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex
        }

        .company .ourTeam__content .slick-list .slick-slide > div > div {
            margin-bottom: 67px
        }

        .company .ourTeam__content .slick-list .slick-slide > div > div > div {
            margin: 0 auto;
            height: 100%
        }

        .company .ourTeam__contentItem {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 50px 48px 30px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 324px;
            background: #141414;
            position: relative
        }

        .company .ourTeam__contentItem:after {
            display: block;
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px
        }

        .company .ourTeam__contentImage {
            width: 225px;
            height: 225px
        }

        .company .ourTeam__contentImage img {
            border-radius: 100%;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .company .ourTeam__contentData {
            margin: 30px 0 15px;
            color: #fafafa;
            text-align: center
        }

        .company .ourTeam__contentPosition {
            margin-top: 8px
        }

        @media screen and (max-width: 1170px) {
            .company .ourValues__content {
                grid-template-columns:1fr 1fr
            }

            .company .ourTeam__content .slick-dots {
                margin-top: 40px;
            }

            .company .ourTeam__content {
                margin-top: 125px
            }

            .company .ourTeam__content .slick-list {
                margin: 0
            }

            .company .ourTeam__content .slick-list .slick-slide {
                margin: 0 120px
            }
        }

        @media screen and (max-width: 1170px) {
            .company .ourTeam {
                padding: 40px 0 108px
            }
        }

        @media screen and (max-width: 920px) {
            .a-left {
                position: absolute;
                bottom: -30px;
                left: 37%;
            }

            .a-right {
                position: absolute;
                bottom: -30px;
                right: 37%;
            }

            .company .heroInner {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -moz-box-orient: vertical;
                -moz-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -moz-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start
            }

            .company .hero__info {
                margin-top: 20px;
                margin-left: 0
            }

            .company .hero__image img {
                max-width: 100%
            }

            .company .ourTeam__content .slick-list {
                margin: 0 -10px
            }

            .company .ourTeam__content .slick-list .slick-slide {
                margin: 0 10px
            }
        }

        @media screen and (max-width: 700px) {
            .company .ourTeam .slick-list .slick-slide > div {
                height: 300px
            }

            .company .ourTeam__content {
                margin-top: 30px;
                padding: 40px 0 90px;
            }

            .company .ourTeam__contentItem {
                padding: 25px 24px 10px;
                width: 160px
            }

            .company .ourTeam__contentImage {
                width: 112px;
                height: 112px
            }

            .company .ourTeam__content .slick-list, .company .ourTeam__content .slick-list .slick-slide > div > div {
                margin-bottom: 0
            }
        }

        @media screen and (max-width: 576px) {
            .company .ourTeam__content {
                padding: 40px 0 10px;
            }

            .a-right {
                right: 29%;
                bottom: -74px;
            }

            .a-left {
                left: 29%;
                bottom: -74px;
            }

            .company .hero__image {
                height: 404px
            }

            .company .hero__image img {
                height: 100%
            }

            .company .ourTeam .custom-dots {
                margin: 0 7px
            }

            .company .ourValues {
                padding: 30px 0
            }

            .company .ourValues__content {
                margin: 30px 0 20px;
                grid-template-columns:1fr
            }

            .company .ourValues__contentItem {
                width: 100%
            }
        }

        @media screen and (max-width: 390px) {
            .company .ourTeam .slick-list .slick-slide > div {
                height: 300px
            }

            .company .ourTeam__contentItem {
                width: 130px
            }

            .company .ourTeam__contentName {
                line-height: 20px
            }
        }</style>

    <link rel="icon" href="../content/uploads/2022/03/cropped-logo-itexpert-1-32x32.png" sizes="32x32">
    <link rel="icon" href="../content/uploads/2022/03/cropped-logo-itexpert-1-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="../content/uploads/2022/03/cropped-logo-itexpert-1-180x180.png">
    <meta name="msapplication-TileImage"
          content="https://itexpert.work/content/uploads/2022/03/cropped-logo-itexpert-1-270x270.png">
</head>
<body class="page-template-default page page-id-12">
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0 1"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0 0"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                <fefuncb type="table" tablevalues="0 1"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                <fefuncg type="table" tablevalues="0 1"></fefuncg>
                <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                <fefunca type="table" tablevalues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<header>
    <div class="navigationWrapper">
        <div class="navigation">
            <div class="containerSmaller">
                <div class="desktop-header">
                    <nav>
                        <div class="logo light"><a href="../index.php">
                                <picture>
                                    <source
                                        srcset="../admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                    <img width="1370" height="277"
                                         src="../admin/other/upload/<?= $user['logo'] ?>"
                                         class="attachment-full size-full webpexpress-processed" alt="Блог"
                                         decoding="async"
                                         loading="lazy" title="Блог"></picture>
                            </a></div>
                        <div class="logo dark"><a href="../index.php">
                                <picture>
                                    <source
                                        srcset="../../admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                    <img width="1370" height="277"
                                         src="../admin/other/upload/<?= $user['logo'] ?>"
                                         class="attachment-full size-full webpexpress-processed" alt="Блог"
                                         decoding="async"
                                         loading="lazy" title="Блог"></picture>
                            </a></div>
                        <ul id="menu-menu-urk" class="menu">
                            <li id="menu-item-15"
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-15 active">
                                <a href="/blog/index.php" aria-current="page">Блог</a></li>
                            <li id="menu-item-16"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a
                                    href="/about/index.php">Про нас</a></li>
                            <li id="menu-item-19"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
                                    href="/contacts/index.php">Контакти</a></li>
                        </ul>
                    </nav>
                    <div class="languages">
                        <div class="languages__btn">
                            <div class="planet">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.27 9.5C11.33 9.005 11.375 8.51 11.375 8C11.375 7.49 11.33 6.995 11.27 6.5H13.805C13.925 6.98 14 7.4825 14 8C14 8.5175 13.925 9.02 13.805 9.5H11.27ZM9.9425 13.67C10.3925 12.8375 10.7375 11.9375 10.9775 11H13.19C12.47 12.2375 11.3225 13.1975 9.9425 13.67ZM9.755 9.5H6.245C6.17 9.005 6.125 8.51 6.125 8C6.125 7.49 6.17 6.9875 6.245 6.5H9.755C9.8225 6.9875 9.875 7.49 9.875 8C9.875 8.51 9.8225 9.005 9.755 9.5ZM8 13.97C7.3775 13.07 6.875 12.0725 6.5675 11H9.4325C9.125 12.0725 8.6225 13.07 8 13.97ZM5 5H2.81C3.5225 3.755 4.6775 2.795 6.05 2.33C5.6 3.1625 5.2625 4.0625 5 5ZM2.81 11H5C5.2625 11.9375 5.6 12.8375 6.05 13.67C4.6775 13.1975 3.5225 12.2375 2.81 11ZM2.195 9.5C2.075 9.02 2 8.5175 2 8C2 7.4825 2.075 6.98 2.195 6.5H4.73C4.67 6.995 4.625 7.49 4.625 8C4.625 8.51 4.67 9.005 4.73 9.5H2.195ZM8 2.0225C8.6225 2.9225 9.125 3.9275 9.4325 5H6.5675C6.875 3.9275 7.3775 2.9225 8 2.0225ZM13.19 5H10.9775C10.7375 4.0625 10.3925 3.1625 9.9425 2.33C11.3225 2.8025 12.47 3.755 13.19 5ZM8 0.5C3.8525 0.5 0.5 3.875 0.5 8C0.5 9.98913 1.29018 11.8968 2.6967 13.3033C3.39314 13.9997 4.21993 14.5522 5.12987 14.9291C6.03982 15.306 7.01509 15.5 8 15.5C9.98913 15.5 11.8968 14.7098 13.3033 13.3033C14.7098 11.8968 15.5 9.98913 15.5 8C15.5 7.01509 15.306 6.03982 14.9291 5.12987C14.5522 4.21993 13.9997 3.39314 13.3033 2.6967C12.6069 2.00026 11.7801 1.44781 10.8701 1.0709C9.96019 0.693993 8.98492 0.5 8 0.5Z"
                                        fill="#212121"></path>
                                </svg>
                            </div>
                            <div class="languages__language"> Українська</div>
                            <div class="arrow">
                                <svg width="14" height="8" viewbox="0 0 14 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 0.999998L7 7L13 1" stroke="#212121" stroke-linecap="square"></path>
                                </svg>
                            </div>
                            <div class="connect-between-btn-and-list"></div>
                            <div class="languages__list">
                                <div id="icl_lang_sel_widget-2" class="widget widget_icl_lang_sel_widget">
                                    <div class="wpml-ls-sidebars-languages wpml-ls wpml-ls-legacy-list-vertical">
                                        <ul>
                                            <li class="wpml-ls-slot-languages wpml-ls-item wpml-ls-item-uk wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-vertical">
                                                <a href="index.php" class="wpml-ls-link"> <span class="wpml-ls-native">Українська</span></a>
                                            </li>
                                            <li class="wpml-ls-slot-languages wpml-ls-item wpml-ls-item-en wpml-ls-last-item wpml-ls-item-legacy-list-vertical">
                                                <a href="https://itexpert.work/blog/" class="wpml-ls-link"> <span
                                                        class="wpml-ls-native" lang="en">English</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-header">
                    <nav>
                        <div class="burger" id="burger"><span></span> <span></span> <span></span></div>
                        <div class="logo light"><a href="index.php">
                                <picture>
                                    <source
                                        srcset="../admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                    <img width="1370" height="277"
                                         src="../admin/other/upload/<?= $user['logo'] ?>"
                                         class="attachment-full size-full webpexpress-processed" alt="Блог"
                                         decoding="async"
                                         loading="lazy" title="Блог"></picture>
                            </a></div>
                        <div class="logo dark"><a href="index.php">
                                <picture>
                                    <source
                                        srcset="../admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                    <img width="1370" height="277"
                                         src="../admin/other/upload/<?= $user['logo'] ?>"
                                         class="attachment-full size-full webpexpress-processed" alt="Блог"
                                         decoding="async"
                                         loading="lazy" title="Блог"></picture>
                            </a></div>
                    </nav>
                    <div class="mobile-menu" id="mobile-menu">
                        <div class="containerSmaller mobile-menu-inner">
                            <div>
                                <div class="mobile-menu-top">
                                    <span class="cross-stand-alone" id="close"></span>
                                    <div class="logo light"><a href="../index.php">
                                            <picture>
                                                <source
                                                    srcset="../../admin/other/upload/<?= $user['logo'] ?>"
                                                    type="image/webp">
                                                <img width="1370" height="277"
                                                     src="../../admin/other/upload/<?= $user['logo'] ?>"
                                                     class="attachment-full size-full webpexpress-processed" alt="Блог"
                                                     decoding="async" loading="lazy" title="Блог"></picture>
                                        </a></div>
                                    <div class="logo dark"><a href="../index.php">
                                            <picture>
                                                <source
                                                    srcset="../../admin/other/upload/<?= $user['logo'] ?>"
                                                    type="image/webp">
                                                <img width="1370" height="277"
                                                     src="../../admin/other/upload/<?= $user['logo'] ?>"
                                                     class="attachment-full size-full webpexpress-processed" alt="Блог"
                                                     decoding="async" loading="lazy" title="Блог"></picture>
                                        </a></div>
                                </div>
                                <ul id="menu-menu-urk-1" class="links">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-15 active">
                                        <a href="/blog/index.php" aria-current="page">Блог</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a
                                            href="/about/index.php">Про нас</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
                                            href="/contacts/index.php">Контакти</a></li>
                                </ul>
                            </div>
                            <ul class="languages">
                                <div id="icl_lang_sel_widget-2" class="widget widget_icl_lang_sel_widget">
                                    <div class="wpml-ls-sidebars-languages wpml-ls wpml-ls-legacy-list-vertical">
                                        <ul>
                                            <li class="wpml-ls-slot-languages wpml-ls-item wpml-ls-item-uk wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-vertical">
                                                <a href="index.php" class="wpml-ls-link"> <span class="wpml-ls-native">Українська</span></a>
                                            </li>
                                            <li class="wpml-ls-slot-languages wpml-ls-item wpml-ls-item-en wpml-ls-last-item wpml-ls-item-legacy-list-vertical">
                                                <a href="https://itexpert.work/blog/" class="wpml-ls-link"> <span
                                                        class="wpml-ls-native" lang="en">English</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="modal" id="modal-window">
    <div class="modal-inner">
        <div id="modal-close">
            <svg width="19" height="19" viewbox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.5188 9.5L18.8813 16.8625C18.9406 16.9813 19 17.1 19 17.2188C19 17.3375 18.9406 17.4562 18.8813 17.5156L17.5156 18.8813C17.3969 19 17.2781 19 17.1594 19C17.0406 19 16.9219 19 16.8625 18.8813L9.5 11.5188L2.1375 18.8813C2.01875 19 1.9 19 1.78125 19C1.6625 19 1.54375 19 1.48438 18.8813L0.11875 17.5156C0 17.4562 0 17.3375 0 17.2188C0 17.1 0 16.9813 0.11875 16.8625L7.48125 9.5L0.11875 2.1375C0 2.07812 0 1.95938 0 1.84063C0 1.72187 0 1.60312 0.11875 1.48438L1.48438 0.11875C1.54375 0.059375 1.6625 0 1.78125 0C1.9 0 2.01875 0.059375 2.1375 0.11875L9.5 7.48125L16.8625 0.11875C16.9219 0.059375 17.0406 0 17.1594 0C17.2781 0 17.3969 0.059375 17.5156 0.11875L18.8813 1.48438C18.9406 1.60312 19 1.72187 19 1.84063C19 1.95938 18.9406 2.07812 18.8813 2.1375L17.6344 3.38438L11.5188 9.5Z"
                    fill="#212121"></path>
            </svg>
        </div>
        <div class="contacts-container">
            <div class="contactsInner">
                <div class="contacts__title title"> Замовити консультацію з IT-рекрутингу</div>
                <div class="contacts__content">
                    <aside id="secondary" class="widget-area">
                        <section id="block-3" class="widget widget_block">
                            <div class="wp-block-group is-layout-flow">
                                <div class="wp-block-group__inner-container"><p></p></div>
                            </div>
                        </section>
                        <section id="block-7" class="widget widget_block"><p>
                            <div class="wpcf7 no-js" id="wpcf7-f139-o1" lang="uk" dir="ltr">
                                <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                       aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="/uk/about/#wpcf7-f139-o1" method="post" class="wpcf7-form init"
                                      aria-label="Contact form" novalidate="novalidate" data-status="init">
                                    <div style="display: none;"><input type="hidden" name="_wpcf7" value="139"> <input
                                            type="hidden" name="_wpcf7_version" value="5.7.5.1"> <input type="hidden"
                                                                                                        name="_wpcf7_locale"
                                                                                                        value="uk">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f139-o1"> <input
                                            type="hidden" name="_wpcf7_container_post" value="0"> <input type="hidden"
                                                                                                         name="_wpcf7_posted_data_hash"
                                                                                                         value=""></div>
                                    <div class="group-2"><label for="name"><span class="placeholder">Ім'я</span><span
                                                class="wpcf7-form-control-wrap" data-name="text-171"><input size="40"
                                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                            id="name"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            value=""
                                                                                                            type="text"
                                                                                                            name="text-171"></span></label>
                                        <label for="phone"><span class="placeholder">Телефон</span><span
                                                class="wpcf7-form-control-wrap" data-name="tel"><input size="40"
                                                                                                       class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                                       id="phone"
                                                                                                       aria-required="true"
                                                                                                       aria-invalid="false"
                                                                                                       value=""
                                                                                                       type="tel"
                                                                                                       name="tel"></span></label>
                                    </div>
                                    <label for="email"><span class="placeholder">Email</span><span
                                            class="wpcf7-form-control-wrap" data-name="email"><input size="40"
                                                                                                     class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                     id="email"
                                                                                                     aria-required="true"
                                                                                                     aria-invalid="false"
                                                                                                     value=""
                                                                                                     type="email"
                                                                                                     name="email"></span></label>
                                    <label for="help"><span class="placeholder">Як ми можемо допомогти?</span><span
                                            class="wpcf7-form-control-wrap" data-name="textarea"><textarea cols="40"
                                                                                                           rows="10"
                                                                                                           class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                                           id="help"
                                                                                                           aria-required="true"
                                                                                                           aria-invalid="false"
                                                                                                           name="textarea"></textarea></span></label>
                                    <div class="contacts__contentButton"><input
                                            class="wpcf7-form-control has-spinner wpcf7-submit btn addSvgArrow"
                                            type="submit" value="Замовити консультацію"></div>
                                    <p style="display: none !important;"><label>&#916;<textarea
                                                name="_wpcf7_ak_hp_textarea" cols="45" rows="8"
                                                maxlength="100"></textarea></label><input type="hidden" id="ak_js_1"
                                                                                          name="_wpcf7_ak_js"
                                                                                          value="109"></p>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="company">
    <section class="hero">
        <div class="containerSmaller">
            <div class="heroInner">
                <div class="hero__image">
                    <picture>
                        <source srcset="../content/express/webp-images/uploads/2022/01/itexpert-team.png.webp"
                                type="image/webp">
                        <img width="1500" height="1818" src="../content/uploads/2022/01/itexpert-team.png"
                             class="attachment-full size-full webpexpress-processed" alt="itexpert team"
                             decoding="async" loading="lazy" title="Про компанію"></picture>
                </div>
                <div class="hero__info">
                    <h1 class="hero__title title">
                        Про рекрутингову агенцію ITExpert </h1>
                    <div class="hero__subtitle"> Ми допомагаємо знаходити таланти для технічних команд, збирати core
                        team для стартапів або відкривати R&D-центри в Україні. Шукаємо розробників, QA, DevOps, CTO та
                        близько технічних фахівців. Працюємо з мовами від Java до Ruby.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourValues">
        <div class="containerSmaller">
            <div class="ourValuesInner">
                <div class="ourValues__title title">Наші цінності</div>
                <div class="ourValues__content">
                    <div class="ourValues__contentItem">
                        <div class="ourValues__contentIcon">
                            <picture>
                                <source srcset="../content/express/webp-images/uploads/2022/01/group-2.png.webp"
                                        type="image/webp">
                                <img width="20" height="24" src="../content/uploads/2022/01/group-2.png"
                                     class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                     decoding="async" loading="lazy" title="Про компанію"></picture>
                        </div>
                        <div class="ourValues__contentText"><p>Працювати так,</p>
                            <p>щоб до тебе повертались</p></div>
                    </div>
                    <div class="ourValues__contentItem">
                        <div class="ourValues__contentIcon">
                            <picture>
                                <source
                                    srcset="../content/express/webp-images/uploads/2022/01/business-deal-handshake-1.png.webp"
                                    type="image/webp">
                                <img width="24" height="24"
                                     src="../content/uploads/2022/01/business-deal-handshake-1.png"
                                     class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                     decoding="async" loading="lazy" title="Про компанію"></picture>
                        </div>
                        <div class="ourValues__contentText"><p>Вирішувати проблеми,</p>
                            <p>а не створювати їх</p></div>
                    </div>
                    <div class="ourValues__contentItem">
                        <div class="ourValues__contentIcon">
                            <picture>
                                <source
                                    srcset="../content/express/webp-images/uploads/2022/01/team-meeting-1.png.webp"
                                    type="image/webp">
                                <img width="24" height="24" src="../content/uploads/2022/01/team-meeting-1.png"
                                     class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                     decoding="async" loading="lazy" title="Про компанію"></picture>
                        </div>
                        <div class="ourValues__contentText">Команда</div>
                    </div>
                    <div class="ourValues__contentItem">
                        <div class="ourValues__contentIcon">
                            <picture>
                                <source srcset="../content/express/webp-images/uploads/2022/01/vector.png.webp"
                                        type="image/webp">
                                <img width="24" height="14" src="../content/uploads/2022/01/vector.png"
                                     class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                     decoding="async" loading="lazy" title="Про компанію"></picture>
                        </div>
                        <div class="ourValues__contentText">Постійний розвиток</div>
                    </div>
                    <div class="ourValues__contentItem">
                        <div class="ourValues__contentIcon">
                            <picture>
                                <source
                                    srcset="../content/express/webp-images/uploads/2022/01/space-rocket-flying-1.png.webp"
                                    type="image/webp">
                                <img width="24" height="24"
                                     src="../content/uploads/2022/01/space-rocket-flying-1.png"
                                     class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                     decoding="async" loading="lazy" title="Про компанію"></picture>
                        </div>
                        <div class="ourValues__contentText">Цікава робота та виклики</div>
                    </div>
                    <div class="ourValues__contentItem">
                        <div class="ourValues__contentIcon">
                            <picture>
                                <source
                                    srcset="../content/express/webp-images/uploads/2022/01/movie-celebrity-1.png.webp"
                                    type="image/webp">
                                <img width="24" height="24" src="../content/uploads/2022/01/movie-celebrity-1.png"
                                     class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                     decoding="async" loading="lazy" title="Про компанію"></picture>
                        </div>
                        <div class="ourValues__contentText">Обізнаність</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourTeam">
        <div class="container">
            <div class="ourTeamInner">
                <div class="ourTeam__title title">Наша команда</div>
                <div class="ourTeam__content">
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/01/stas-shihov-1.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/01/stas-shihov-1.png"
                                         class="attachment-full size-full webpexpress-processed" alt="stas shihov ceo"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Stas Shivov</div>
                                <div class="ourTeam__contentPosition">CEO</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/stas-shihov-2b526450/original_referer=https%3A%2F%2Fitexpert.work%2FF"
                                    rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/01/nick-kliestov-1.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/01/nick-kliestov-1.png"
                                         class="attachment-full size-full webpexpress-processed" alt="nick-kliestov-CTO"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Nick Kliestov</div>
                                <div class="ourTeam__contentPosition">CTO</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/nicolas-klestov-8110b410a//" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/01/igor-shihov.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000" src="../content/uploads/2022/01/igor-shihov.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Igor Shihov</div>
                                <div class="ourTeam__contentPosition">HRD</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/igor-shihov/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/03/daria-ruda-photo.png.webp"
                                        type="image/webp">
                                    <img width="1838" height="1841"
                                         src="../content/uploads/2023/03/daria-ruda-photo.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Daria Ruda photo"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Daria Ruda</div>
                                <div class="ourTeam__contentPosition"> Business Development Manager</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/daria-ruda-5b5420265/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/tanya-vityr-business-development-manager-1.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/tanya-vityr-business-development-manager-1.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Tanya Vityr Business Development Manager (1)" decoding="async"
                                         loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Tanya Vityr</div>
                                <div class="ourTeam__contentPosition">Business Development Manager</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/tanya-vityr-3820b7205/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/irina-koczyura-itexpert.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/irina-koczyura-itexpert.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Irina Kotsuira Content Manager" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Iryna Kotsuira</div>
                                <div class="ourTeam__contentPosition">Content Manager</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/irinakotsuira/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/anya_r1.png.webp"
                                        type="image/webp">
                                    <img width="1200" height="1200" src="../content/uploads/2022/08/anya_r1.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Anna Reznikova Recruitment Team Lead" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Anna Reznikova</div>
                                <div class="ourTeam__contentPosition">Recruitment Team Lead</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/anna-reznikova/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/mariia-kutsevol-recruitment-team-lead.png.webp"
                                        type="image/webp">
                                    <img width="1200" height="1200"
                                         src="../content/uploads/2022/08/mariia-kutsevol-recruitment-team-lead.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Mariia Kutsevol Recruitment Team Lead" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Mariia Kutsevol</div>
                                <div class="ourTeam__contentPosition">Recruitment Team Lead</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/maria-kutsevol-36890215a//" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/nina-signaevskayarecruitment-team-lead.png.webp"
                                        type="image/webp">
                                    <img width="1200" height="1200"
                                         src="../content/uploads/2022/08/nina-signaevskayarecruitment-team-lead.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Nina Signaevskaya Recruitment Team Lead" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Nina Signaevskaya</div>
                                <div class="ourTeam__contentPosition">Recruitment Team Lead</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/nina-signaevskaya-241971159/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/marina-kosich-itexpert.png.webp"
                                        type="image/webp">
                                    <img width="1200" height="1200"
                                         src="../content/uploads/2022/08/marina-kosich-itexpert.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Maryna Kosich Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Maryna Kosich</div>
                                <div class="ourTeam__contentPosition">Recruitment Team Lead</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/marynakosich/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/maryna-olenychenko-recruitment-team-lead.png.webp"
                                        type="image/webp">
                                    <img width="1200" height="1200"
                                         src="../content/uploads/2022/08/maryna-olenychenko-recruitment-team-lead.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Maryna Olenychenko Recruitment Team Lead" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Maryna Olenychenko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/maryna-olenychenko-097462160/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/diana-1-4.png.webp"
                                        type="image/webp">
                                    <img width="1200" height="1200" src="../content/uploads/2022/08/diana-1-4.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Diana Savenko Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Diana Savenko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/dianasavenko/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/anya-paraskeeva-itexpert.png.webp"
                                        type="image/webp">
                                    <img width="1200" height="1200"
                                         src="../content/uploads/2022/08/anya-paraskeeva-itexpert.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Ann Paraskeeva Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Ann Paraskeeva</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/ann-paraskeeva-37413a15b/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/nadya-grebenik.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/nadya-grebenik.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Nadiia Hrebenyk Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Nadiia Hrebenyk</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/nadiia-hrebenyk-73055b1b9//" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/anya-vasilenko-itexpert-1.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/anya-vasilenko-itexpert-1.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Anna Vasilenko Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Anna Vasilenko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/annvaslnk/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/nastya-osadchuk.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/nastya-osadchuk.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Anastasia Osadchuk Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Anastasia Osadchuk</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/anastasia-osadchuk-4393551a8/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/lida.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000" src="../content/uploads/2022/08/lida.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Lidiia Kolodii Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Lidiia Kolodii</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/lidiia-kolodii-79a296200//" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/ksenia-tokar-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/ksenia-tokar-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Ksenia Tokar Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Ksenia Tokar</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/ksenia-tokar-77112b201/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/10/olha-chala-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="1834" height="1835"
                                         src="../content/uploads/2022/10/olha-chala-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Olha Chala - Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Olha Chala</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/olha-chala/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/10/liudmyla-stepanova-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="1836" height="1835"
                                         src="../content/uploads/2022/10/liudmyla-stepanova-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Liudmyla Stepanova - Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Liudmyla Stepanova</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/liudmyla-stepanova/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/svitlana-kuskova-1.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/svitlana-kuskova-1.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Svitlana Kuskova Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Svitlana Kuskova</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/svitlana-kuskova-836270207/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/inna-poremska-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/inna-poremska-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Inna Poremska</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/inna-poremska-3b1a7a213/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/dari-zubenko-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/dari-zubenko-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Dari Zubenko Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Dari Zubenko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/dari-zubenko-0aba0020b/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/diana-timchenko-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/diana-timchenko-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Diana Timchenko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/diana-timchenko-138462218/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/viktoria-yaroshuk-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/viktoria-yaroshuk-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Viktoria Yaroshuk</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/yaroshuk/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/olha-lutsenko_tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/olha-lutsenko_tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Olha Lutsenko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/olha-lutsenko-2a038ba6/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/tatyana-abramska-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/tatyana-abramska-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Tatyana Abramska</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/tatyana-abramska-031699217/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/oksana-rusavska-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/oksana-rusavska-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Oksana Rusavska Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Oksana Rusavska</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/oksana-rusavska-68709916b/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/10/svitlana-medvid-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="1836" height="1839"
                                         src="../content/uploads/2022/10/svitlana-medvid-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Svitlana Medvid - Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Svitlana Medvid</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/svitlana-medvid-160629222/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/olya-mytko-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/olya-mytko-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Olya Mytko Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Olya Mytko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/olya-mytko-95274322a/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/kateryna-korobchuk-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/kateryna-korobchuk-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Про компанію"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Kateryna Korobchuk</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/katerynakorobchuk/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/10/katerina-dzigovskaya-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="1838" height="1843"
                                         src="../content/uploads/2022/10/katerina-dzigovskaya-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Katerina Dzigovskaya - Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Katerina Dzigovskaya</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/katerina-dzigovskaya-b9a323229/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/nastya-liesnick-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/nastya-liesnick-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Nastya Liesnick Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Nastya Liesnik</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a href="https://www.linkedin.com/in/nastya-liesnick/"
                                                                   rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/10/tetiana-skuibida-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="1838" height="1839"
                                         src="../content/uploads/2022/10/tetiana-skuibida-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Tetiana Skuibida - Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Tatiana Skuibida</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/tetiana-skuibida-5b8179231/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/08/yulia-volovoduk-tech-recruiter.png.webp"
                                        type="image/webp">
                                    <img width="2000" height="2000"
                                         src="../content/uploads/2022/08/yulia-volovoduk-tech-recruiter.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Yulia Volovoduk Tech Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Yulia Volovoduk</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/yulia-volovoduk-3bb087232/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/10/yana-kateryniuk-administrative-assistant.png.webp"
                                        type="image/webp">
                                    <img width="1836" height="1838"
                                         src="../content/uploads/2022/10/yana-kateryniuk-administrative-assistant.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Yana Kateryniuk - Administrative Assistant" decoding="async"
                                         loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Yana Kateryniuk</div>
                                <div class="ourTeam__contentPosition">Administrative Assistant</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/yana-kateryniuk-b5a5b5252/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2022/10/anna-skalij-foto.png.webp"
                                        type="image/webp">
                                    <img width="1836" height="1836"
                                         src="../content/uploads/2022/10/anna-skalij-foto.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Anna Skalij Recruiter" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Anna Skalii</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/anna-skalii-2b1261212/" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/03/maryna-pavliuk-photo.png.webp"
                                        type="image/webp">
                                    <img width="1836" height="1836"
                                         src="../content/uploads/2023/03/maryna-pavliuk-photo.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Maryna Pavliuk photo" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Maryna Pavliuk</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/maryna-pavliuk-79ba71225" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/03/darina-gorbenko-photo.png.webp"
                                        type="image/webp">
                                    <img width="1836" height="1839"
                                         src="../content/uploads/2023/03/darina-gorbenko-photo.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Darina Gorbenko photo" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Darina Gorbenko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/darina-gorbenko-44b695250" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/03/yana-chyzh-photo.png.webp"
                                        type="image/webp">
                                    <img width="1836" height="1836"
                                         src="../content/uploads/2023/03/yana-chyzh-photo.png"
                                         class="attachment-full size-full webpexpress-processed" alt="Yana Chyzh photo"
                                         decoding="async" loading="lazy" title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Yana Chyzh</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/yana-chyzh-0995a9205" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/03/margarita-slyshko-photo.png.webp"
                                        type="image/webp">
                                    <img width="1838" height="1839"
                                         src="../content/uploads/2023/03/margarita-slyshko-photo.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Margarita Slyshko photo" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Margarita Slyshko</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/margarita-slyshko-6170b8250" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="ourTeam__contentItem">
                            <div class="ourTeam__contentImage">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/03/karina-lykholat-photo.png.webp"
                                        type="image/webp">
                                    <img width="1838" height="1839"
                                         src="../content/uploads/2023/03/karina-lykholat-photo.png"
                                         class="attachment-full size-full webpexpress-processed"
                                         alt="Karina Lykholat photo" decoding="async" loading="lazy"
                                         title="Про компанію"></picture>
                            </div>
                            <div class="ourTeam__contentData">
                                <div class="ourTeam__contentName">Karina Lykholat</div>
                                <div class="ourTeam__contentPosition">Tech Recruiter</div>
                            </div>
                            <div class="ourTeam__contentSocial"><a
                                    href="https://www.linkedin.com/in/karina-lykholat-a8ba44179" rel="nofollow">
                                    <svg width="26" height="26" viewbox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.7278 18.68V14.1351C19.7278 11.7 18.4278 10.5669 16.6947 10.5669C15.2962 10.5669 14.6694 11.3364 14.3202 11.8762V10.7531H11.6853C11.7202 11.497 11.6853 18.68 11.6853 18.68H14.3202V14.253C14.3202 14.0167 14.3373 13.78 14.4071 13.6108C14.5973 13.1374 15.0307 12.6473 15.7583 12.6473C16.7122 12.6473 17.0933 13.3741 17.0933 14.4393V18.6804H19.7278V18.68ZM8.90947 9.67123C9.82801 9.67123 10.4004 9.06197 10.4004 8.30099C10.3833 7.52371 9.82801 6.93192 8.92693 6.93192C8.02586 6.93192 7.4364 7.52332 7.4364 8.30099C7.4364 9.06197 8.0084 9.67123 8.89278 9.67123H8.90947ZM13.194 24.8358C6.76466 24.8358 1.55225 19.6234 1.55225 13.194C1.55225 6.76427 6.76466 1.55225 13.194 1.55225C19.6234 1.55225 24.8358 6.76427 24.8358 13.194C24.8358 19.6234 19.6234 24.8358 13.194 24.8358ZM10.2269 18.68V10.7531H7.5924V18.68H10.2269Z"
                                              fill="#FBFBFB"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactUs">
        <div class="container">
            <div class="contactUsInner">
                <div class="contactUs__text title"> Зв'яжіться з нами вже зараз</div>
                <div id="btn-for-modal" class="btn-for-modal">
                    <div class="btn"> Замовити консультацію
                        <svg width="24" height="18" viewbox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.5858 9.98304H1C0.447715 9.98304 0 9.53609 0 8.98474C0 8.43339 0.447715 7.98643 1 7.98643H20.5858L14.2929 1.70421C13.9024 1.31435 13.9024 0.682259 14.2929 0.292397C14.6834 -0.0974655 15.3166 -0.0974655 15.7071 0.292397L23.7071 8.27883C24.0976 8.66869 24.0976 9.30078 23.7071 9.69065L15.7071 17.6771C15.3166 18.0669 14.6834 18.0669 14.2929 17.6771C13.9024 17.2872 13.9024 16.6551 14.2929 16.2653L20.5858 9.98304Z"
                                fill="white"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="containerSmaller">
        <div class="footerInner">
            <div class="footerTop">
                <div class="footerItem">
                    <div class="footerItemTitle">ITExpert</div>
                    <ul id="menu-menu-urk-2" class="links">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-15 active">
                            <a href="/blog/index.php" aria-current="page">Блог</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a
                                href="../about/index.php">Про нас</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
                                href="../contacts/index.php">Контакти</a></li>
                    </ul>
                </div>
                <div class="footerItem">
                    <div class="footerItemTitle">Написати нам:</div>
                    <ul>
                        <li><a href="mailto:info@itexpert.work"><?= $user['email_site'] ?></a></li>
                    </ul>
                </div>
                <div class="footerItem">
                    <div class="footerItemTitle">Зателефонувати нам:</div>
                    <ul>
                        <li><a href="tel:<?= $user['phone_1'] ?> "><?= $user['phone_1'] ?> </a></li>
                        <li><a href="tel:<?= $user['phone_2'] ?>"><?= $user['phone_2'] ?></a></li>
                    </ul>
                </div>
                <div class="footerItem">
                    <div class="footerItemTitle">Прийти у гості:</div>
                    <ul>
                        <li>
                            <a href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%A0%D0%B0%D0%B8%D1%81%D1%8B+%D0%9E%D0%BA%D0%B8%D0%BF%D0%BD%D0%BE%D0%B9,+10a,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4482212,30.5879447,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4cfed0027bcd5:0x33efccd8deb227ea!8m2!3d50.4482178!4d30.5901334?hl=ru"
                               target="_blank" rel="nofollow">Ukraine, Kyiv, 10a Okipnoi Raisy Street</a></li>
                        <li>
                            <a href="https://www.google.com/search?q=ukraine+vinnytsia+2+gagarina&rlz=1C1IXYC_ruUA966UA966&sz=0&tbm=lcl&ei=8Ee1Y47ZDM2DqgGRpbqADQ&ved=0ahUKEwiOkcSHzq38AhXNgSoKHZGSDtAQ4dUDCAk&uact=5&oq=ukraine+vinnytsia+2+gagarina&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyBQghEKABMgUIIRCgAToFCAAQogQ6CggAEPEEEB4QogRQziNY6SRgzCZoAXAAeACAAakBiAGZBZIBAzAuNZgBAKABAcABAQ&sclient=gws-wiz-local#rlfi=hd:;si:979086179075004774;mv:[[49.23424148760309,28.458282386260997],[49.23192258369439,28.452810679870616],null,[49.233082049255664,28.455546533065807],18]"
                               target="_blank" rel="nofollow">Ukraine, Vinnytsia, 2 Gagarina square</a></li>
                    </ul>
                </div>
                <div class="footerItem">
                    <div class="footerItemTitle">Фолловити нас:</div>
                    <ul class="footer-social-media">
                        <li><a href="https://www.facebook.com/itexpert.work" rel="nofollow">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/01/vector-facebook.png.webp"
                                        type="image/webp">
                                    <img width="20" height="20" src="../content/uploads/2023/01/vector-facebook.png"
                                         class="attachment-full size-full webpexpress-processed" alt="icon facebook"
                                         decoding="async" loading="lazy"
                                         title="Як найняти Senior-фахівця? Поради з досвіду Technical Recruiter">
                                </picture>
                            </a></li>
                        <li><a href="https://t.me/ITExpert_Recruiting" rel="nofollow">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/01/vector-telegram.png.webp"
                                        type="image/webp">
                                    <img width="20" height="20" src="../content/uploads/2023/01/vector-telegram.png"
                                         class="attachment-full size-full webpexpress-processed" alt="icon telegram"
                                         decoding="async" loading="lazy"
                                         title="Як найняти Senior-фахівця? Поради з досвіду Technical Recruiter">
                                </picture>
                            </a></li>
                        <li><a href="https://www.linkedin.com/company/itexpert/" rel="nofollow">
                                <picture>
                                    <source
                                        srcset="../content/express/webp-images/uploads/2023/01/vector-linkedin.png.webp"
                                        type="image/webp">
                                    <img width="21" height="21" src="../content/uploads/2023/01/vector-linkedin.png"
                                         class="attachment-full size-full webpexpress-processed" alt="icon linkedin"
                                         decoding="async" loading="lazy"
                                         title="Як найняти Senior-фахівця? Поради з досвіду Technical Recruiter">
                                </picture>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="footerBottom">
                <div class="footerLeft">
                    <div class="footerLeftTitle"> © ITExpert, 2023</div>
                    <div class="footerLeftSubtitle"> ITExpert — це IT-рекрутингова агенція в Києві. IT-рекрутингова
                        компанія вже більше семи років на ринку. Ми займаємося пошуком IT-спеціалістів в Україні та в
                        усьому світі: від США до Ізраїля. Працюємо з продуктами та аутсорсами, підбираємо core team для
                        стартапів та шукаємо таланти для R&D-центрів. Ми допомагали з рекрутингом таким компаніям, як
                        3DLOOK, Rocket, Deloitte, Новая Почта, Нафтогаз Цифрові Технології, Nextiva, DMarket та іншим.
                        Закриваємо вакансії із різноманітним стеком, від Java до Ruby. Організовували процес рекрутингу
                        для E-commerce, Banking, Web3, IoT, Machine Learning, Healthcare та інших галузей. Наша база
                        охоплює фахівців у Києві, Львові, Харкові, Дніпрі, Одесі та інших містах України
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<span href="#" class="scrollup"><img src="../content/themes/itexpert/assets/images/arrow-up.svg" width="58"
                                     height="58" alt="up"></span>
<script id='wpml-cookie-js-extra'>var wpml_cookies = {
        "wp-wpml_current_language": {
            "value": "uk",
            "expires": 1,
            "path": "\/"
        }
    };
    var wpml_cookies = {"wp-wpml_current_language": {"value": "uk", "expires": 1, "path": "\/"}};</script>
<script
    id='picsprotect_js-js-extra'>var pp_plugin = {"blank_gif": "https:\/\/itexpert.work\/content\/plugins\/photo-protect\/blank.gif"};</script>
<script id='cf7-popups-frontend-js-extra'>var cf7_popups_val = {
        "msg1": "\u041f\u043e\u043c\u0438\u043b\u043a\u0430 \u0432\u0430\u043b\u0456\u0434\u0430\u0446\u0456\u0457",
        "msg2": "\u041e\u0434\u043d\u0430 \u0447\u0438 \u043a\u0456\u043b\u044c\u043a\u0430 \u043f\u043e\u043c\u0438\u043b\u043e\u043a",
        "msg3": "\u041f\u043e\u043c\u0438\u043b\u043a\u0430",
        "msg4": "\u041d\u0435 \u0432\u0434\u0430\u043b\u043e\u0441\u044f \u043d\u0430\u0434\u0456\u0441\u043b\u0430\u0442\u0438 \u0435\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u0438\u0439 \u043b\u0438\u0441\u0442, \u043e\u0441\u043a\u0456\u043b\u044c\u043a\u0438 \u0432\u0438\u044f\u0432\u043b\u0435\u043d\u043e \u043c\u043e\u0436\u043b\u0438\u0432\u0443 \u0441\u043f\u0430\u043c-\u0430\u043a\u0442\u0438\u0432\u043d\u0456\u0441\u0442\u044c.",
        "msg5": "\u041d\u0435 \u0432\u0434\u0430\u043b\u043e\u0441\u044f \u043d\u0430\u0434\u0456\u0441\u043b\u0430\u0442\u0438 \u0435\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u0438\u0439 \u043b\u0438\u0441\u0442.",
        "msg6": "\u041f\u043e\u0432\u0456\u0434\u043e\u043c\u043b\u0435\u043d\u043d\u044f \u043d\u0430\u0434\u0456\u0441\u043b\u0430\u043d\u0435",
        "msg7": "\u0414\u044f\u043a\u0443\u044e \u0437\u0430 \u0432\u0430\u0448\u0435 \u043f\u043e\u0432\u0456\u0434\u043e\u043c\u043b\u0435\u043d\u043d\u044f."
    };</script>
<script id='contact-form-7-js-extra'>var wpcf7 = {
        "api": {
            "root": "https:\/\/itexpert.work\/uk\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };</script>
<script id='rate-my-post-js-extra'>var rmp_frontend = {
        "admin_ajax": "https:\/\/itexpert.work\/wp-admin\/admin-ajax.php",
        "postID": "12",
        "noVotes": "\u041e\u0446\u0456\u043d\u043e\u043a \u043f\u043e\u043a\u0438 \u043d\u0435\u043c\u0430\u0454! \u0411\u0443\u0434\u044c\u0442\u0435 \u043f\u0435\u0440\u0448\u0438\u043c, \u0445\u0442\u043e \u043e\u0446\u0456\u043d\u0438\u0442\u044c \u0446\u044e \u043f\u0443\u0431\u043b\u0456\u043a\u0430\u0446\u0456\u044e.",
        "cookie": "You already voted! This vote will not be counted!",
        "afterVote": "\u0414\u044f\u043a\u0443\u0454\u043c\u043e \u0437\u0430 \u043e\u0446\u0456\u043d\u043a\u0443 \u0446\u044c\u043e\u0433\u043e \u043f\u043e\u0441\u0442\u0443!",
        "notShowRating": "1",
        "social": "1",
        "feedback": "1",
        "cookieDisable": "1",
        "emptyFeedback": "Please insert your feedback in the box above!",
        "hoverTexts": "1",
        "preventAccidental": "1",
        "grecaptcha": "1",
        "siteKey": "",
        "votingPriv": "1",
        "loggedIn": "",
        "positiveThreshold": "2",
        "ajaxLoad": "1",
        "disableClearCache": "1",
        "nonce": "8b14ad4dbc"
    };</script>
<script src='../content/cache/wpfc-minified/ee7e3k9p/h6utc.js'></script>
<script>document.createElement("picture");
    if (!window.HTMLPictureElement && document.addEventListener) {
        window.addEventListener("DOMContentLoaded", function () {
            var s = document.createElement("script");
            s.src = "https://itexpert.work/content/plugins/express/js/picturefill.min.js";
            document.body.appendChild(s);
        });
    }</script>
<script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
<script src="../jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="../npm/chart.js"></script>
<script src="../ajax/libs/slick-carousel/1.8.1/slick.js"
        integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src='../content/cache/wpfc-minified/12td4enq/h6utc.js'></script>
<script id='wp-postratings-js-extra'>var ratingsL10n = {
        "plugin_url": "https:\/\/itexpert.work\/content\/plugins\/wp-postratings",
        "ajax_url": "https:\/\/itexpert.work\/wp-admin\/admin-ajax.php",
        "text_wait": "Please rate only 1 item at a time.",
        "image": "stars",
        "image_ext": "gif",
        "max": "5",
        "show_loading": "1",
        "show_fading": "1",
        "custom": "0"
    };
    var ratings_mouseover_image = new Image();
    ratings_mouseover_image.src = "https://itexpert.work/content/plugins/wp-postratings/images/stars/rating_over.gif";
    ;</script>
<script defer="" src='../content/cache/wpfc-minified/eqgj8ddj/h8w7p.js'></script>
</body>
</html>