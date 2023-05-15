<?php

if (empty($_GET['page'])) {
    $_GET['page'] = 1;
}
include "php/connect_db.php"

?>

<!doctype html>
<html lang="uk">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" href="content/themes/itexpert/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="ajax/libs/slick-carousel/1.8.1/slick.css"
          integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
    <link rel="preload" href="content/plugins/rate-my-post/public/css/fonts/ratemypost.ttf" type="font/ttf"
          as="font" crossorigin="anonymous">
    <title>IT-рекрутингова агенція ITExpert - пошук IT-фахівців по Україні</title>
    <meta name="description"
          content="Рекрутингова агенція в Києві по пошуку IT-фахівців по всій Україні ᐈ 7 років на ринку ᐈ База 130 000 ІТ-фахівців ᐈ Перший результат через 3-5 днів.">
    <link rel='stylesheet' id='block-library-css' href='content/cache/wpfc-minified/lwp0if1e/h6utc.css'
          media='all'>
    <style>
        .block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            ---preset--color--black: #000000;
            ---preset--color--cyan-bluish-gray: #abb8c3;
            ---preset--color--white: #ffffff;
            ---preset--color--pale-pink: #f78da7;
            ---preset--color--vivid-red: #cf2e2e;
            ---preset--color--luminous-vivid-orange: #ff6900;
            ---preset--color--luminous-vivid-amber: #fcb900;
            ---preset--color--light-green-cyan: #7bdcb5;
            ---preset--color--vivid-green-cyan: #00d084;
            ---preset--color--pale-cyan-blue: #8ed1fc;
            ---preset--color--vivid-cyan-blue: #0693e3;
            ---preset--color--vivid-purple: #9b51e0;
            ---preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            ---preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            ---preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            ---preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            ---preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            ---preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            ---preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            ---preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            ---preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            ---preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            ---preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            ---preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            ---preset--duotone--dark-grayscale: url('#duotone-dark-grayscale');
            ---preset--duotone--grayscale: url('#duotone-grayscale');
            ---preset--duotone--purple-yellow: url('#duotone-purple-yellow');
            ---preset--duotone--blue-red: url('#duotone-blue-red');
            ---preset--duotone--midnight: url('#duotone-midnight');
            ---preset--duotone--magenta-yellow: url('#duotone-magenta-yellow');
            ---preset--duotone--purple-green: url('#duotone-purple-green');
            ---preset--duotone--blue-orange: url('#duotone-blue-orange');
            ---preset--font-size--small: 13px;
            ---preset--font-size--medium: 20px;
            ---preset--font-size--large: 36px;
            ---preset--font-size--x-large: 42px;
            ---preset--spacing--20: 0.44rem;
            ---preset--spacing--30: 0.67rem;
            ---preset--spacing--40: 1rem;
            ---preset--spacing--50: 1.5rem;
            ---preset--spacing--60: 2.25rem;
            ---preset--spacing--70: 3.38rem;
            ---preset--spacing--80: 5.06rem;
            ---preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            ---preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            ---preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            ---preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            ---preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
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
            max-width: var(---style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignwide {
            max-width: var(---style--global--wide-size);
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

        :where(.block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(---preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(---preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(---preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(---preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(---preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(---preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(---preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(---preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(---preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(---preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(---preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(---preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(---preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(---preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(---preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(---preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(---preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(---preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(---preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(---preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(---preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(---preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(---preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(---preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(---preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(---preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(---preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(---preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(---preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(---preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(---preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(---preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(---preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(---preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(---preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(---preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(---preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(---preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(---preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(---preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(---preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(---preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(---preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(---preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(---preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(---preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(---preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(---preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(---preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(---preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(---preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(---preset--font-size--x-large) !important;
        }

        .block-navigation a:where(:not(.element-button)) {
            color: inherit;
        }

        :where(.block-columns.is-layout-flex) {
            gap: 2em;
        }

        .block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='wpml-blocks-css' href='content/cache/wpfc-minified/du4ijh0d/h6utc.css' media='all'>
    <style>
        #avatar-manager img {
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
        }
    </style>
    <link rel='stylesheet' id='sweetalert2-css' href='content/cache/wpfc-minified/l0zt3ndp/h6utc.css' media='all'>
    <style>
        .swal2-container.swal2-shown {
            z-index: 9999999;
        }
    </style>
    <style>
        .wpcf7 .screen-reader-response {
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

        .wpcf7 form.init .wpcf7-response-output,
        .wpcf7 form.resetting .wpcf7-response-output,
        .wpcf7 form.submitting .wpcf7-response-output {
            display: none;
        }

        .wpcf7 form.sent .wpcf7-response-output {
            border-color: #46b450;
        }

        .wpcf7 form.failed .wpcf7-response-output,
        .wpcf7 form.aborted .wpcf7-response-output {
            border-color: #dc3232;
        }

        .wpcf7 form.spam .wpcf7-response-output {
            border-color: #f56e28;
        }

        .wpcf7 form.invalid .wpcf7-response-output,
        .wpcf7 form.unaccepted .wpcf7-response-output,
        .wpcf7 form.payment-required .wpcf7-response-output {
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

        .wpcf7-list-item-label::before,
        .wpcf7-list-item-label::after {
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
        }
    </style>
    <style>
        .rmp-results-widget p:empty:before,
        .rmp-widgets-container p:empty:before,
        .widget_rate-my-post-top-rated-widget p:empty:before {
            display: none
        }

        @font-face {
            font-family: ratemypost;
            src: url(content/plugins/rate-my-post/public/css/fonts/ratemypost.eot);
            src: url(content/plugins/rate-my-post/public/css/fonts/ratemypost.eot) format('embedded-opentype'), url(content/plugins/rate-my-post/public/css/fonts/ratemypost.ttf) format('truetype'), url(content/plugins/rate-my-post/public/css/fonts/ratemypost.woff) format('woff'), url(content/plugins/rate-my-post/public/css/fonts/ratemypost.svg) format('svg');
            font-weight: 400;
            font-style: normal;
            font-display: block
        }

        [class*=" rmp-icon--"],
        [class^=rmp-icon--] {
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

        .rmp-widgets-container.rmp-plugin.rmp-main-container {
            text-align: center;
            margin: 1rem 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container p {
            margin: 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget--hidden {
            display: none
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__icons {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__icons-list {
            list-style-type: none;
            padding: 0;
            margin: 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__icons-list::before {
            content: ""
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__icons-list__icon {
            display: inline-block;
            margin: 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__hover-text {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__submit-btn {
            display: none
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__submit-btn--visible {
            display: inline-block
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__results {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__results--hidden {
            display: none;
            margin: 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__not-rated {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__not-rated--hidden {
            display: none;
            margin: 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__msg {
            margin: .4rem 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-rating-widget__msg--alert {
            color: #dc3545
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget {
            display: none
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget--visible {
            display: block
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__text {
            margin: 0 0 .4rem 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__input {
            display: block;
            margin-left: auto;
            margin-right: auto;
            min-width: 250px;
            max-width: 630px;
            margin-bottom: .4rem
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__msg--alert {
            color: #dc3545
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__loader {
            display: none;
            position: relative;
            width: 80px;
            height: 40px;
            left: 50%;
            transform: translateX(-50%)
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__loader--visible {
            display: block
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__loader div {
            display: inline-block;
            position: absolute;
            left: 8px;
            width: 16px;
            background: #ffcc36;
            -webkit-animation: rmp-feedback-widget__loader 1.2s cubic-bezier(0, .5, .5, 1) infinite;
            animation: rmp-feedback-widget__loader 1.2s cubic-bezier(0, .5, .5, 1) infinite
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__loader div:nth-child(1) {
            left: 8px;
            -webkit-animation-delay: -.24s;
            animation-delay: -.24s
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__loader div:nth-child(2) {
            left: 32px;
            -webkit-animation-delay: -.12s;
            animation-delay: -.12s
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-feedback-widget__loader div:nth-child(3) {
            left: 56px;
            -webkit-animation-delay: 0;
            animation-delay: 0
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-social-widget {
            display: none
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-social-widget--visible {
            display: block
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-social-widget a {
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

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-heading {
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

        .rmp-btn:focus,
        .rmp-btn:hover {
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

        .rmp-btn--large:focus,
        .rmp-btn--large:hover {
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

            100%,
            50% {
                top: 12px;
                height: 16px
            }
        }

        @keyframes rmp-feedback-widget__loader {
            0% {
                top: 4px;
                height: 32px
            }

            100%,
            50% {
                top: 12px;
                height: 16px
            }
        }

        .rmp-amp-results-widget .rmp-amp-results-widget__stars {
            display: inline
        }

        .rmp-amp-results-widget .rmp-amp-results-widget__average-rating,
        .rmp-amp-results-widget .rmp-amp-results-widget__vote-count {
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

        #rmp-amp-action,
        #rmp-amp-post-id {
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

        .rmp-amp-rating-widget__fieldset:not(:hover) > input:checked ~ label,
        .rmp-amp-rating-widget__fieldset > :hover,
        .rmp-amp-rating-widget__fieldset > :hover ~ label {
            color: transparent;
            cursor: inherit
        }

        .rmp-amp-rating-widget__fieldset:not(:hover) > input:checked ~ label:before,
        .rmp-amp-rating-widget__fieldset > :hover:before,
        .rmp-amp-rating-widget__fieldset > :hover ~ label:before {
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
        }
    </style>
    <style id='rate-my-post-inline-css'>
        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-heading--title {
            font-size: 18px;
        }

        .rmp-widgets-container p {
            font-size: 18px;
        }

        .rmp-widgets-container.rmp-plugin.rmp-main-container .rmp-heading.rmp-heading--title {
            margin-bottom: 30px;
        }
    </style>
    <style>
        .post-ratings {
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

        .post-ratings img,
        .post-ratings-loading img,
        .post-ratings-image img {
            border: 0;
            padding: 0;
            margin: 0;
        }

        .post-ratings-text {
        }

        .post-ratings-comment-author {
            font-weight: normal;
            font-style: italic;
        }
    </style>
    <style>
        .wpml-ls-legacy-list-vertical {
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
        }
    </style>
    <style>
        .wpcf7-spinner {
            display: none;
        }

        @media (max-width: 1024px) {
            form label[for="help"] textarea {
                height: 48px;
            }
        }
    </style>
    <link rel='stylesheet' id='common-style-css' href='content/cache/wpfc-minified/jme6c36e/h6utc.css'
          media='all'>
    <link rel='stylesheet' id='home-style-css' href='content/cache/wpfc-minified/qk4kvep0/h6utf.css' media='all'>
    <style>
        .main-button {
            position: relative;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
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
            padding: 0 45px;
            height: 72px;
            font-size: 24px;
            color: #fbfbfb;
            font-weight: 700;
            border: 0;
            border-radius: 50px;
            cursor: pointer
        }

        .main-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50px;
            padding: 3px;
            -webkit-mask: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff)) content-box, -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            mask-composite: exclude
        }

        .main-button:hover {
            color: #000;
            background: -moz-linear-gradient(200deg, #cfefab, #9ff89e, #8ae0df);
            background: linear-gradient(250deg, #cfefab, #9ff89e, #8ae0df)
        }

        .main-button:active path,
        .main-button:hover path {
            fill: #000
        }

        .main-button:active {
            color: #000;
            background: -moz-linear-gradient(20deg, #61d7d9, #68d663);
            background: linear-gradient(70deg, #61d7d9, #68d663)
        }

        .main-button:active::before {
            background: -moz-linear-gradient(40deg, #61d7d9, #68d663);
            background: linear-gradient(50deg, #61d7d9, #68d663)
        }

        .main-button svg {
            margin-left: 16px
        }

        .main-button.not-allowed {
            opacity: .3;
            cursor: not-allowed
        }

        .main-button,
        .main-button.not-allowed:active,
        .main-button.not-allowed:hover {
            background: 0 0
        }

        .main-button.not-allowed:active::before,
        .main-button::before {
            background: -moz-linear-gradient(200deg, #cfefab, #9ff89e, #8ae0df);
            background: linear-gradient(250deg, #cfefab, #9ff89e, #8ae0df)
        }

        @media screen and (max-width: 576px) {
            .main-button {
                width: 100%;
                padding: 0 35px;
                max-width: 100%;
                font-size: 20px;
                height: 62px
            }
        }

        @media screen and (max-width: 360px) {
            .main-button {
                font-size: 18px
            }
        }

        .HowWeWork {
            padding: 85px 0 147px
        }

        .HowWeWork__title {
            color: #cfefab
        }

        .HowWeWork__content,
        .HowWeWork__contentItem {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
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
            align-items: center
        }

        .HowWeWork__content {
            z-index: 0;
            margin-top: 26px;
            position: relative
        }

        .HowWeWork__content:after {
            position: absolute;
            top: 60px;
            display: block;
            content: "";
            width: 3px;
            height: 100%;
            background: #fff;
            z-index: 1
        }

        .HowWeWork__content .arrow {
            position: absolute;
            bottom: -65px;
            width: 10px;
            height: 10px;
            background: 0 0;
            border-top: 3px solid #fff;
            border-right: 3px solid #fff;
            -webkit-box-shadow: 0 0 0 #d3d3d3;
            box-shadow: 0 0 0 #d3d3d3;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            transition: all 200ms ease;
            -webkit-transform: translate3d(0, -50%, 0) rotate(135deg);
            -moz-transform: translate3d(0, -50%, 0) rotate(135deg);
            transform: translate3d(0, -50%, 0) rotate(135deg)
        }

        .HowWeWork__content .arrow:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-40%, -60%) rotate(45deg);
            -moz-transform: translate(-40%, -60%) rotate(45deg);
            -ms-transform: translate(-40%, -60%) rotate(45deg);
            transform: translate(-40%, -60%) rotate(45deg);
            width: 200%;
            height: 200%
        }

        .HowWeWork__contentItem {
            max-width: 100%;
            z-index: 2
        }

        .HowWeWork__contentItem:nth-child(2n) .HowWeWork__contentInfo {
            margin-left: -670px;
            margin-right: 0;
            text-align: right
        }

        .HowWeWork__contentNum,
        .HowWeWork__contentNum:after {
            background: -webkit-gradient(linear, right top, left top, from(#cfefab), color-stop(36.98%, #9ff89e), to(#8ae0df));
            background: -moz-linear-gradient(right, #cfefab 0, #9ff89e 36.98%, #8ae0df 100%);
            background: linear-gradient(270deg, #cfefab 0, #9ff89e 36.98%, #8ae0df 100%);
            border-radius: 100px
        }

        .HowWeWork__contentNum {
            margin: 56px 0;
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
            width: 45px;
            height: 45px;
            font-weight: 500;
            font-size: 22px;
            letter-spacing: .5px;
            position: relative;
            color: #000
        }

        .HowWeWork__contentNum:after {
            display: block;
            position: absolute;
            content: "";
            width: 77px;
            height: 77px;
            opacity: .27;
            z-index: -1
        }

        .HowWeWork__contentInfo {
            display: inline-block;
            width: 570px;
            margin-top: -100px;
            margin-right: -670px
        }

        .HowWeWork__contentTitle {
            color: #fbfbfb;
            letter-spacing: .25px;
            font-weight: 700;
            font-size: 24px
        }

        .HowWeWork__contentDescription {
            margin-top: 12px;
            font-size: 16px;
            line-height: 28px;
            color: #e7e7e7
        }

        @media screen and (max-width: 1249px) {
            .HowWeWork .HowWeWork__contentInfo {
                width: 300px;
                margin-right: -400px
            }

            .HowWeWork .HowWeWork__contentItem:nth-child(2n) .HowWeWork__contentInfo {
                margin-left: -400px;
                margin-right: 0
            }
        }

        @media screen and (max-width: 768px) {
            .HowWeWork {
                padding: 28px 0;
                background: #212121
            }

            .HowWeWork__title {
                color: #cfefab
            }

            .HowWeWork__content {
                margin-top: 0
            }

            .HowWeWork__contentItem:first-child .HowWeWork__contentNum {
                margin-top: 46px
            }

            .HowWeWork__contentDescription {
                font-size: 14px
            }

            .HowWeWork__contentItem {
                position: relative
            }

            .HowWeWork__contentItem:before {
                display: block;
                content: "";
                position: absolute;
                top: 15px;
                height: 60px;
                width: 3px;
                background: #fff
            }

            .HowWeWork__contentItem:first-child:before {
                display: none;
                height: 0
            }

            .HowWeWork__content .arrow,
            .HowWeWork__content:after {
                display: none
            }

            .HowWeWork__contentNum {
                margin: 110px 0 35px;
                position: relative
            }

            .HowWeWork__contentItem .HowWeWork__contentInfo {
                margin-left: 0 !important;
                margin-right: 0 !important;
                text-align: center !important
            }

            .HowWeWork__contentItem:nth-child(2n) {
                margin-right: 0 !important;
                margin-left: 0 !important;
                text-align: center !important
            }

            .HowWeWork__contentInfo {
                max-width: 313px;
                margin-top: 0;
                margin-right: 0;
                text-align: center
            }
        }
    </style>
    <link rel="https://api.w.org/" href="json/index.php">
    <meta name="generator" content="WPML ver:4.6.3 stt:1,45,54;">
    <link>
    <link rel="icon" href="content/uploads/2022/03/cropped-logo-itexpert-1-32x32.png" sizes="32x32">
    <link rel="icon" href="content/uploads/2022/03/cropped-logo-itexpert-1-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="content/uploads/2022/03/cropped-logo-itexpert-1-180x180.png">
    <meta name="msapplication-TileImage"
          content="https://itexpert.work/content/uploads/2022/03/cropped-logo-itexpert-1-270x270.png">
</head>

<body class="home blog hfeed">

<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="duotone-dark-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
        <filter id="duotone-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
        <filter id="duotone-purple-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
        <filter id="duotone-blue-red">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
        <filter id="duotone-midnight">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
        <filter id="duotone-magenta-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
        <filter id="duotone-purple-green">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
        <filter id="duotone-blue-orange">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
            </fecolormatrix>
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
                        <div class="logo light"><a href="index.php">
                            <picture>
                                <source
                                        srcset="admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                <img width="1370" height="277"
                                     src="admin/other/upload/<?= $user['logo'] ?>"
                                     class="attachment-full size-full webpexpress-processed" alt="Блог"
                                     decoding="async"
                                     loading="lazy" title="Блог"></picture>
                        </a></div>
                        <div class="logo dark"><a href="index.php">
                            <picture>
                                <source
                                        srcset="admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                <img width="1370" height="277"
                                     src="admin/other/upload/<?= $user['logo'] ?>"
                                     class="attachment-full size-full webpexpress-processed" alt="Блог"
                                     decoding="async"
                                     loading="lazy" title="Блог"></picture>
                        </a></div>
                        <ul id="menu-menu-urk" class="menu">
                            <li id="menu-item-15"
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-15 active">
                                <a href="blog/index.php" aria-current="page">Блог</a></li>
                            <li id="menu-item-16"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a
                                    href="about/index.php">Про нас</a></li>
                            <li id="menu-item-19"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
                                    href="contacts/index.php">Контакти</a></li>
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
                                        srcset="admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                <img width="1370" height="277"
                                     src="admin/other/upload/<?= $user['logo'] ?>"
                                     class="attachment-full size-full webpexpress-processed" alt="Блог"
                                     decoding="async"
                                     loading="lazy" title="Блог"></picture>
                        </a></div>
                        <div class="logo dark"><a href="index.php">
                            <picture>
                                <source
                                        srcset="admin/other/upload/<?= $user['logo'] ?>"
                                        type="image/webp">
                                <img width="1370" height="277"
                                     src="admin/other/upload/<?= $user['logo'] ?>"
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
                                    <div class="logo light"><a href="index.php">
                                        <picture>
                                            <source
                                                    srcset="admin/other/upload/<?= $user['logo'] ?>"
                                                    type="image/webp">
                                            <img width="1370" height="277"
                                                 src="admin/other/upload/<?= $user['logo'] ?>"
                                                 class="attachment-full size-full webpexpress-processed" alt="Блог"
                                                 decoding="async" loading="lazy" title="Блог"></picture>
                                    </a></div>
                                    <div class="logo dark"><a href="index.php">
                                        <picture>
                                            <source
                                                    srcset="admin/other/upload/<?= $user['logo'] ?>"
                                                    type="image/webp">
                                            <img width="1370" height="277"
                                                 src="admin/other/upload/<?= $user['logo'] ?>"
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
            <svg width="19" height="19" viewbox="0 0 19 19" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                        d="M11.5188 9.5L18.8813 16.8625C18.9406 16.9813 19 17.1 19 17.2188C19 17.3375 18.9406 17.4562 18.8813 17.5156L17.5156 18.8813C17.3969 19 17.2781 19 17.1594 19C17.0406 19 16.9219 19 16.8625 18.8813L9.5 11.5188L2.1375 18.8813C2.01875 19 1.9 19 1.78125 19C1.6625 19 1.54375 19 1.48438 18.8813L0.11875 17.5156C0 17.4562 0 17.3375 0 17.2188C0 17.1 0 16.9813 0.11875 16.8625L7.48125 9.5L0.11875 2.1375C0 2.07812 0 1.95938 0 1.84063C0 1.72187 0 1.60312 0.11875 1.48438L1.48438 0.11875C1.54375 0.059375 1.6625 0 1.78125 0C1.9 0 2.01875 0.059375 2.1375 0.11875L9.5 7.48125L16.8625 0.11875C16.9219 0.059375 17.0406 0 17.1594 0C17.2781 0 17.3969 0.059375 17.5156 0.11875L18.8813 1.48438C18.9406 1.60312 19 1.72187 19 1.84063C19 1.95938 18.9406 2.07812 18.8813 2.1375L17.6344 3.38438L11.5188 9.5Z"
                        fill="#212121"></path>
            </svg>
        </div>
        <div class="contacts-container">
            <div class="contactsInner">
                <p class="contacts__title title">
                    Замовити консультацію з IT-рекрутингу
                <p></p>
                <div class="contacts__content">
                    <aside id="secondary" class="widget-area">
                        <section id="block-3" class="widget widget_block">
                            <div class="block-group is-layout-flow">
                                <div class="block-group__inner-container">
                                    <p></p>
                                </div>
                            </div>
                        </section>
                        <section id="block-7" class="widget widget_block">
                            <p>
                            <div class="wpcf7 no-js" id="wpcf7-f139-o1" lang="uk" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="/uk/#wpcf7-f139-o1" method="post" class="wpcf7-form init"
                                      aria-label="Contact form" novalidate="novalidate" data-status="init">
                                    <div style="display: none;"><input type="hidden" name="_wpcf7" value="139">
                                        <input type="hidden" name="_wpcf7_version" value="5.7.5.1"> <input
                                                type="hidden" name="_wpcf7_locale" value="uk"> <input type="hidden"
                                                                                                      name="_wpcf7_unit_tag"
                                                                                                      value="wpcf7-f139-o1">
                                        <input type="hidden"
                                               name="_wpcf7_container_post" value="0"> <input type="hidden"
                                                                                              name="_wpcf7_posted_data_hash"
                                                                                              value=""></div>
                                    <div class="group-2"><label for="name"><span
                                            class="placeholder">Ім'я</span><span class="wpcf7-form-control-wrap"
                                                                                 data-name="text-171"><input size="40"
                                                                                                             class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                             id="name"
                                                                                                             aria-required="true"
                                                                                                             aria-invalid="false"
                                                                                                             value=""
                                                                                                             type="text"
                                                                                                             name="text-171"></span></label>
                                        <label
                                                for="phone"><span class="placeholder">Телефон</span><span
                                                class="wpcf7-form-control-wrap" data-name="tel"><input size="40"
                                                                                                       class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                                       id="phone"
                                                                                                       aria-required="true"
                                                                                                       aria-invalid="false"
                                                                                                       value=""
                                                                                                       type="tel"
                                                                                                       name="tel"></span></label>
                                    </div>
                                    <label
                                            for="email"><span class="placeholder">Email</span><span
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
                                                                                      name="_wpcf7_ak_js" value="243">
                                    </p>
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
<main class="home">
    <section class="hero">
        <div class="containerSmaller">
            <div class="heroInner">
                <h1 class="hero__title"><span>ITExpert</span> - Знайдіть свій найкращий технічний талант</h1>
                <div class="hero__subtitle"> IT-рекрутингова агенція, яка вже більше 7 років на ринку. Ми займаємося
                    пошуком IT-спеціалістів в Україні та в усьому світі: від США до Ізраїля. Працюємо з продуктами
                    та аутсорсами, підбираємо core team для стартапів та шукаємо таланти для R&D-центрів.
                </div>
                <button
                        class="main-button btn-for-modal">
                    Замовити консультацію
                    <svg width="30" height="23" viewbox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M25.7322 12.4788H1.25C0.559644 12.4788 0 11.9201 0 11.2309C0 10.5417 0.559644 9.98301 1.25 9.98301H25.7322L17.8661 2.13024C17.378 1.64291 17.378 0.852793 17.8661 0.365465C18.3543 -0.121862 19.1457 -0.121862 19.6339 0.365465L29.6339 10.3485C30.122 10.8358 30.122 11.626 29.6339 12.1133L19.6339 22.0963C19.1457 22.5836 18.3543 22.5836 17.8661 22.0963C17.378 21.609 17.378 20.8189 17.8661 20.3315L25.7322 12.4788Z"
                                fill="#FBFBFB"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="aboutInner">
                <h2 class="about__title title">Про нас</h2>
                <div class="about__items">
                    <div class="about__item">
                        <div class="about__itemIcon">40</div>
                        <div class="about__itemText">Inhouse рекрутерів</div>
                    </div>
                    <div class="about__item">
                        <div class="about__itemIcon">
                            <picture>
                                <source
                                        srcset="content/express/webp-images/uploads/2022/01/vector-6.png.webp"
                                        type="image/webp">
                                <img width="24" height="14"
                                     src="content/uploads/2022/01/vector-6.png"
                                     class="attachment-full size-full webpexpress-processed"
                                     alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                     decoding="async" loading="lazy"
                                     title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                            </picture>
                        </div>
                        <div class="about__itemText">Розробник у команді та технічна експертиза</div>
                    </div>
                    <div class="about__item">
                        <div class="about__itemIcon">200</div>
                        <div class="about__itemText">клієнтів із 17 країн</div>
                    </div>
                    <div class="about__item">
                        <div class="about__itemIcon">7</div>
                        <div class="about__itemText">років на ринку</div>
                    </div>
                    <div class="about__item">
                        <div class="about__itemIcon">3-5</div>
                        <div class="about__itemText">днів і ми покажемо вам першого кандидата</div>
                    </div>
                    <div class="about__item">
                        <div class="about__itemIcon">870+</div>
                        <div class="about__itemText">успішно закритих вакансій</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="WhenWeUseful">
        <div class="container">
            <div class="WhenWeUsefulInner">
                <h2 class="WhenWeUseful__title title">
                    Коли ми корисні </h2>
                <div class="WhenWeUseful__content">
                    <div class="WhenWeUseful__content-title"> <span class="home_when_we_useful_icon">
                                <picture>
                                    <source
                                            srcset="content/express/webp-images/uploads/2021/12/it-recriting.png.webp"
                                            type="image/webp"><img width="30" height="30"
                                                                   src="content/uploads/2021/12/it-recriting.png"
                                                                   class="attachment-full size-full webpexpress-processed"
                                                                   alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                                                   decoding="async" loading="lazy"
                                                                   title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                </picture>
                                <picture>
                                    <source
                                            srcset="content/express/webp-images/uploads/2022/01/team-approve-disapprove-1-1.png.webp"
                                            type="image/webp"><img width="52" height="52"
                                                                   src="content/uploads/2022/01/team-approve-disapprove-1-1.png"
                                                                   class="attachment-full size-full webpexpress-processed"
                                                                   alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                                                   decoding="async" loading="lazy"
                                                                   title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                </picture>
                                <picture>
                                    <source
                                            srcset="content/express/webp-images/uploads/2022/01/group-1124-1.png.webp"
                                            type="image/webp"><img width="58" height="58"
                                                                   src="content/uploads/2022/01/group-1124-1.png"
                                                                   class="attachment-full size-full webpexpress-processed"
                                                                   alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                                                   decoding="async" loading="lazy"
                                                                   title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                </picture>
                                <picture>
                                    <source
                                            srcset="content/express/webp-images/uploads/2022/01/group-91.png.webp"
                                            type="image/webp"><img width="55" height="56"
                                                                   src="content/uploads/2022/01/group-91.png"
                                                                   class="attachment-full size-full webpexpress-processed"
                                                                   alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                                                   decoding="async" loading="lazy"
                                                                   title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                </picture>
                                <picture>
                                    <source
                                            srcset="content/express/webp-images/uploads/2022/01/group-92-1.png.webp"
                                            type="image/webp"><img width="57" height="56"
                                                                   src="content/uploads/2022/01/group-92-1.png"
                                                                   class="attachment-full size-full webpexpress-processed"
                                                                   alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                                                   decoding="async" loading="lazy"
                                                                   title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                </picture>
                                <picture>
                                    <source
                                            srcset="content/express/webp-images/uploads/2022/01/direction-button-arrows-1.png.webp"
                                            type="image/webp"><img width="52" height="52"
                                                                   src="content/uploads/2022/01/direction-button-arrows-1.png"
                                                                   class="attachment-full size-full webpexpress-processed"
                                                                   alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                                                   decoding="async" loading="lazy"
                                                                   title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                </picture>
                                <picture>
                                    <source
                                            srcset="content/express/webp-images/uploads/2022/01/group-93-1-1.png.webp"
                                            type="image/webp"><img width="56" height="56"
                                                                   src="content/uploads/2022/01/group-93-1-1.png"
                                                                   class="attachment-full size-full webpexpress-processed"
                                                                   alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                                                   decoding="async" loading="lazy"
                                                                   title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                </picture>
                            </span> <span class="home_when_we_useful_items_title"></span></div>
                    <div class="WhenWeUseful__content-description">
                        <div class="WhenWeUseful__content-description-items">
                            <p>Наша IT-рекрутингова агенція вже більше 7 років допомагає успішно закривати позиції
                                для клієнтів у всьому світі. Ми шукаємо розробників, QA, DevOps, CTO для FinTech,
                                E-commerce, Web3, SaaS та PaaS-продуктів, Machine Learning і AI та інших сфер.
                                Працюємо з мовами від Java до Ruby. У середньому необхідно 6 резюме від наших
                                рекрутерів, щоб закрити позицію.</p>
                            <p>Пошук IT-фахівців — це довго. Потрібно узгодити вимоги, відфільтрувати резюме,
                                провести скринінг та технічну співбесіду… Щоб ви економили час, наш CTO налаштовує
                                точний пошук, організує рекрутинг-процес та консультує вас з технічних питань. Так
                                ви не займатиметеся узгодженнями деталей і отримаєте результат вже за 3-5 дні.</p>
                        </div>
                        <div class="WhenWeUseful__content-description-items">
                            <p>Наш CTO визначає ключові вимоги позиції, консультує по стеку технологій та місткості
                                ринку кандидатів, актуальним заробітним платам та іншому. Так ви отримаєте лише
                                релевантні CV.</p>
                            <p>Фахівці нашої IT-рекрутингової агенції допоможуть з формуванням сильних сторін
                                роботодавця, актуальним соц. пакетом та умовами роботи. Ми впевнені, що результат
                                рекрутингу — спільна робота внутрішньої команди та агенції. Тому допомагаємо з
                                будь-яким питанням.</p>
                        </div>
                        <div class="WhenWeUseful__content-description-items">
                            <p>Ми працювали з вакансіями Pixi Devolopers для gaming-сфери (таких фахівців лише
                                100-150 в Україні), успішно закривали Enterprise Architects-вакансії для відомої
                                державної компанії та займалися рекрутингом для Banking, DataScience та інших сфер.
                            </p>
                            <p>Усі наші рекрутери технічно підковані та знають, як шукати кандидатів навіть на
                                нішевих специфічних платформах. Ми покажемо результат навіть для позицій, які
                                складно закрити.</p>
                        </div>
                        <div class="WhenWeUseful__content-description-items">
                            <p>Ми маємо досвід підбору великих команд. Ми знаходили core team та формували команди з
                                понад 50 людей. Відбираємо тільки найталановитіших кандидатів для різних продуктів
                                та безкоштовно тестуємо їхню англійську мову. Наше IT-рекрутингове агентство гнучко
                                підлаштовується під бізнес-процеси та потреби клієнта.</p>
                        </div>
                        <div class="WhenWeUseful__content-description-items">
                            <p>Ми знайдемо для вас Support Representatives, Project Managers, Product Owners, Scrum
                                masters, Бізнес-аналітиків, UI/UX-дизайнерів та інших.</p>
                            <p>Глибоко розуміємо бізнес-процеси та потреби IT-компаній. Підбір персоналу в IT
                                зазвичай складніший: потрібно знаходити тільки топові таланти, відсікаючи безліч
                                нерелевантних CV. Досвід нашої команди допомагає відбирати лише відповідних
                                фахівців, фільтрувати їх за навичками та проєктами.</p>
                        </div>
                        <div class="WhenWeUseful__content-description-items">
                            <p>Наше IT-рекрутингове агентство складається з 40 рекрутерів. Ми легко зможемо надати
                                велику кількість релевантних резюме у найкоротші терміни. Оберемо найкращу стратегію
                                рекрутингу та швидко розпочнемо роботу. Ви отримаєте перше резюме вже за 3-5 дні.
                            </p>
                            <p>Наші рекрутери займатимуться сорсингом, оцінкою, відбором кандидатів та комунікацією.
                                У цей час ви зможете більше часу приділяти розвитку бізнесу, а не пошуку
                                спеціалістів та мікроменеджменту.</p>
                        </div>
                        <div class="WhenWeUseful__content-description-items">
                            <p>Надаємо професійних рекрутерів, які будуть працювати над відкритими позиціями у вашій
                                компанії. Так ви зможете заощадити час та ресурси на навчання та адаптацію
                                внутрішніх рекрутерів, але регулярно отримуватимете релевантні CV.</p>
                        </div>
                    </div>
                    <div class="WhenWeUseful__filter" id="filter-buttons">
                        <div class="WhenWeUseful__filterItem active">IT-рекрутинг</div>
                        <div class="WhenWeUseful__filterItem active">Технічні консультації</div>
                        <div class="WhenWeUseful__filterItem active">Пошук рідкісних IT-фахівців</div>
                        <div class="WhenWeUseful__filterItem active">Підбір core team для стартапів і талантів для
                            R&D-центрів
                        </div>
                        <div class="WhenWeUseful__filterItem active">Пошук фахівців для Non-Tech позицій в
                            IT-компаніях
                        </div>
                        <div class="WhenWeUseful__filterItem active">Швидке масштабування</div>
                        <div class="WhenWeUseful__filterItem active">Аутсорсинг рекрутингу</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="HowWeWork">
        <div class="container">
            <div class="HowWeWorkInner">
                <h2 class="HowWeWork__title title">Як ми працюємо</h2>
                <div class="HowWeWork__content">
                    <div class="HowWeWork__contentItem">
                        <div class="HowWeWork__contentNum"> 1</div>
                        <div class="HowWeWork__contentInfo">
                            <div class="HowWeWork__contentTitle"> Починаємо роботу</div>
                            <div class="HowWeWork__contentDescription"> Проводимо первинний аудит з урахуванням всіх
                                вимог. Організуємо процес рекрутингу.
                            </div>
                        </div>
                    </div>
                    <div class="HowWeWork__contentItem">
                        <div class="HowWeWork__contentNum"> 2</div>
                        <div class="HowWeWork__contentInfo">
                            <div class="HowWeWork__contentTitle"> Допомога CTO</div>
                            <div class="HowWeWork__contentDescription"> Технічний фахівець дізнається про вимоги
                                вакансії та потреби по hard skills, аналізує їх, дає оцінку ринку, а також
                                налаштовує точний пошук. Так ви отримуєте лише релевантні CV.
                            </div>
                        </div>
                    </div>
                    <div class="HowWeWork__contentItem">
                        <div class="HowWeWork__contentNum"> 3</div>
                        <div class="HowWeWork__contentInfo">
                            <div class="HowWeWork__contentTitle"> Перший кандидат</div>
                            <div class="HowWeWork__contentDescription"> Наша база на 130 000 IT-фахівців дозволяє
                                отримати перші резюме вже через 3-5 днів від початку роботи над вакансією.
                            </div>
                        </div>
                    </div>
                    <div class="HowWeWork__contentItem">
                        <div class="HowWeWork__contentNum"> 4</div>
                        <div class="HowWeWork__contentInfo">
                            <div class="HowWeWork__contentTitle"> Первинний скринінг та тестування англійської</div>
                            <div class="HowWeWork__contentDescription"> Ми проводимо перевірку кандидатів за вашими
                                побажаннями та безкоштовно тестуємо їхню англійську.
                            </div>
                        </div>
                    </div>
                    <div class="HowWeWork__contentItem">
                        <div class="HowWeWork__contentNum"> 5</div>
                        <div class="HowWeWork__contentInfo">
                            <div class="HowWeWork__contentTitle"> Технічний скринінг</div>
                            <div class="HowWeWork__contentDescription"> Наші рекрутери тестують фахівців по hard
                                skills, так ви отримаєте детальний опис результатів скринінгу та найрелевантніших
                                розробників.
                            </div>
                        </div>
                    </div>
                    <div class="HowWeWork__contentItem">
                        <div class="HowWeWork__contentNum"> 6</div>
                        <div class="HowWeWork__contentInfo">
                            <div class="HowWeWork__contentTitle"> Офер</div>
                            <div class="HowWeWork__contentDescription"> Супроводжуємо на етапі онбордингу та
                                адаптації.
                            </div>
                        </div>
                    </div>
                    <div class="HowWeWork__contentItem">
                        <div class="HowWeWork__contentNum"> 7</div>
                        <div class="HowWeWork__contentInfo">
                            <div class="HowWeWork__contentTitle"> Гарантія</div>
                            <div class="HowWeWork__contentDescription"> Якщо кандидат не проходить випробувальний
                                термін протягом 3 місяців, ми безкоштовно шукаємо для нього заміну.
                            </div>
                        </div>
                    </div>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="reviewsInner">
                <h2 class="reviews__title title">Відгуки про роботу з нами</h2>
                <div class="reviews__content">
                    <div class="reviews__contentItem">
                        <div class="reviews__contentItemInner">
                            <div class="reviews__contentTop">
                                <div class="reviews__contentText"> На додаток до своєї експертизи в ІТ-рекрутингу,
                                    агенція також продемонструвала винятковий професіоналізм та клієнтський сервіс.
                                    Їх СЕО Станіслав Шихов та СTO Микола Клєстов завжди були швидкими у спілкуванні
                                    та робили все можливе, щоб ми були задоволені їхніми послугами.
                                </div>
                                <div class="reviews__contentLink"><a
                                        href="https://drive.google.com/file/d/1gtvZsb_d9z5QmthOxOR2e1TN32DYcQrd/view?usp=sharing"
                                        target="_blank" rel="nofollow"> Рекомендаційний лист
                                    <svg width="15"
                                         height="12" viewbox="0 0 15 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M12.8661 6.2394H0.625C0.279822 6.2394 0 5.96005 0 5.61546C0 5.27087 0.279822 4.99152 0.625 4.99152H12.8661L8.93306 1.06513C8.68898 0.82147 8.68898 0.426412 8.93306 0.182748C9.17714 -0.0609159 9.57286 -0.0609159 9.81694 0.182748L14.8169 5.17427C15.061 5.41793 15.061 5.81299 14.8169 6.05665L9.81694 11.0482C9.57286 11.2918 9.17714 11.2918 8.93306 11.0482C8.68898 10.8045 8.68898 10.4095 8.93306 10.1658L12.8661 6.2394Z"
                                                fill="url(#paint0_linear_277_192)"></path>
                                        <defs>
                                            <lineargradient id="paint0_linear_277_192" x1="15" y1="5.54059"
                                                            x2="2.03266e-07" y2="5.54059"
                                                            gradientunits="userSpaceOnUse">
                                                <stop stop-color="#CFEFAB"></stop>
                                                <stop offset="0.369792" stop-color="#9FF89E"></stop>
                                                <stop offset="1" stop-color="#8AE0DF"></stop>
                                            </lineargradient>
                                        </defs>
                                    </svg>
                                </a></div>
                            </div>
                            <div class="reviews__contentBottom">
                                <div class="reviews__contentPicture">
                                    <picture>
                                        <source
                                                srcset="content/express/webp-images/uploads/2023/04/natalia-lukash.jpg.webp"
                                                type="image/webp">
                                        <img width="480" height="480"
                                             src="content/uploads/2023/04/natalia-lukash.jpg"
                                             class="attachment-full size-full webpexpress-processed"
                                             alt="Natalia Lukash photo" decoding="async" loading="lazy"
                                             title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                    </picture>
                                </div>
                                <div class="reviews__contentData">
                                    <div class="reviews__contentName"> Наталія Лукаш</div>
                                    <div class="reviews__contentPosition"> HRD в Metinvest Digital</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__contentItem">
                        <div class="reviews__contentItemInner">
                            <div class="reviews__contentTop">
                                <div class="reviews__contentText"> ITExpert показали кілька кандидатів вже в перший
                                    тиждень пошуку. З їхньою допомогою ми успішно найняли кілька
                                    iOS/MacOS-розробників, також успішно допомагали нам з пошуком Product Analyst.
                                    Дуже дякуємо агенції ITExpert за допомогу!
                                </div>
                                <div class="reviews__contentLink"><a
                                        href="https://drive.google.com/file/d/1AfJMlhFd6KNG2s5KYZ1zlTZ4gGY--amb/view?usp=sharing"
                                        target="_blank" rel="nofollow"> Рекомендаційний лист
                                    <svg width="15"
                                         height="12" viewbox="0 0 15 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M12.8661 6.2394H0.625C0.279822 6.2394 0 5.96005 0 5.61546C0 5.27087 0.279822 4.99152 0.625 4.99152H12.8661L8.93306 1.06513C8.68898 0.82147 8.68898 0.426412 8.93306 0.182748C9.17714 -0.0609159 9.57286 -0.0609159 9.81694 0.182748L14.8169 5.17427C15.061 5.41793 15.061 5.81299 14.8169 6.05665L9.81694 11.0482C9.57286 11.2918 9.17714 11.2918 8.93306 11.0482C8.68898 10.8045 8.68898 10.4095 8.93306 10.1658L12.8661 6.2394Z"
                                                fill="url(#paint0_linear_277_192)"></path>
                                        <defs>
                                            <lineargradient id="paint0_linear_277_192" x1="15" y1="5.54059"
                                                            x2="2.03266e-07" y2="5.54059"
                                                            gradientunits="userSpaceOnUse">
                                                <stop stop-color="#CFEFAB"></stop>
                                                <stop offset="0.369792" stop-color="#9FF89E"></stop>
                                                <stop offset="1" stop-color="#8AE0DF"></stop>
                                            </lineargradient>
                                        </defs>
                                    </svg>
                                </a></div>
                            </div>
                            <div class="reviews__contentBottom">
                                <div class="reviews__contentPicture">
                                    <picture>
                                        <source
                                                srcset="content/express/webp-images/uploads/2022/11/tetiana-hnatiuk-photo.png.webp"
                                                type="image/webp">
                                        <img width="2000" height="2000"
                                             src="content/uploads/2022/11/tetiana-hnatiuk-photo.png"
                                             class="attachment-full size-full webpexpress-processed"
                                             alt="Tetiana Hnatiuk" decoding="async" loading="lazy"
                                             title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                    </picture>
                                </div>
                                <div class="reviews__contentData">
                                    <div class="reviews__contentName"> Тетяна Гнатюк</div>
                                    <div class="reviews__contentPosition"> Head of HR в Skylum Software</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__contentItem">
                        <div class="reviews__contentItemInner">
                            <div class="reviews__contentTop">
                                <div class="reviews__contentText"> ITExpert змогли знайти iOS-інженера для нашої
                                    компанії в найкоротші терміни. Вони клієнтоорієнтовані, мають гарну репутацію на
                                    ринку та з ними приємно працювати! Я радо пораджу послуги компанії ITExpert для
                                    допомоги в рекрутингу.
                                </div>
                                <div class="reviews__contentLink"><a
                                        href="https://drive.google.com/file/d/1qAfbLhZB35BEbVI1HgxiNhCsgfylw8wG/view"
                                        target="_blank" rel="nofollow"> Рекомендаційний лист
                                    <svg width="15"
                                         height="12" viewbox="0 0 15 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M12.8661 6.2394H0.625C0.279822 6.2394 0 5.96005 0 5.61546C0 5.27087 0.279822 4.99152 0.625 4.99152H12.8661L8.93306 1.06513C8.68898 0.82147 8.68898 0.426412 8.93306 0.182748C9.17714 -0.0609159 9.57286 -0.0609159 9.81694 0.182748L14.8169 5.17427C15.061 5.41793 15.061 5.81299 14.8169 6.05665L9.81694 11.0482C9.57286 11.2918 9.17714 11.2918 8.93306 11.0482C8.68898 10.8045 8.68898 10.4095 8.93306 10.1658L12.8661 6.2394Z"
                                                fill="url(#paint0_linear_277_192)"></path>
                                        <defs>
                                            <lineargradient id="paint0_linear_277_192" x1="15" y1="5.54059"
                                                            x2="2.03266e-07" y2="5.54059"
                                                            gradientunits="userSpaceOnUse">
                                                <stop stop-color="#CFEFAB"></stop>
                                                <stop offset="0.369792" stop-color="#9FF89E"></stop>
                                                <stop offset="1" stop-color="#8AE0DF"></stop>
                                            </lineargradient>
                                        </defs>
                                    </svg>
                                </a></div>
                            </div>
                            <div class="reviews__contentBottom">
                                <div class="reviews__contentPicture">
                                    <picture>
                                        <source
                                                srcset="content/express/webp-images/uploads/2022/01/kira-rudik.jpg.webp"
                                                type="image/webp">
                                        <img width="150" height="150"
                                             src="content/uploads/2022/01/kira-rudik.jpg"
                                             class="attachment-full size-full webpexpress-processed"
                                             alt="Кира Рудик, отзыв," decoding="async" loading="lazy"
                                             title="ITExpert Named a Top HR Firm in Clutch’s 2019 Report">
                                    </picture>
                                </div>
                                <div class="reviews__contentData">
                                    <div class="reviews__contentName"> Кіра Рудик</div>
                                    <div class="reviews__contentPosition"> COO в Ring Ukraine</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__contentItem">
                        <div class="reviews__contentItemInner">
                            <div class="reviews__contentTop">
                                <div class="reviews__contentText"> Команда ITExpert — проактивна, лояльна, чесна та
                                    клієнтоорієнтована. Вони завжди готові обговорювати будь-які питання та
                                    знаходити рішення, які будуть вигідні для всіх сторін. Це робить нашу співпрацю
                                    приємною, успішною та довготривалою.
                                </div>
                                <div class="reviews__contentLink"><a
                                        href="https://drive.google.com/file/d/1TiFt9l5tu54hkyUq_R43Ra8Ba1kcjzJ0/view"
                                        target="_blank" rel="nofollow"> Рекомендаційний лист
                                    <svg width="15"
                                         height="12" viewbox="0 0 15 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M12.8661 6.2394H0.625C0.279822 6.2394 0 5.96005 0 5.61546C0 5.27087 0.279822 4.99152 0.625 4.99152H12.8661L8.93306 1.06513C8.68898 0.82147 8.68898 0.426412 8.93306 0.182748C9.17714 -0.0609159 9.57286 -0.0609159 9.81694 0.182748L14.8169 5.17427C15.061 5.41793 15.061 5.81299 14.8169 6.05665L9.81694 11.0482C9.57286 11.2918 9.17714 11.2918 8.93306 11.0482C8.68898 10.8045 8.68898 10.4095 8.93306 10.1658L12.8661 6.2394Z"
                                                fill="url(#paint0_linear_277_192)"></path>
                                        <defs>
                                            <lineargradient id="paint0_linear_277_192" x1="15" y1="5.54059"
                                                            x2="2.03266e-07" y2="5.54059"
                                                            gradientunits="userSpaceOnUse">
                                                <stop stop-color="#CFEFAB"></stop>
                                                <stop offset="0.369792" stop-color="#9FF89E"></stop>
                                                <stop offset="1" stop-color="#8AE0DF"></stop>
                                            </lineargradient>
                                        </defs>
                                    </svg>
                                </a></div>
                            </div>
                            <div class="reviews__contentBottom">
                                <div class="reviews__contentPicture">
                                    <picture>
                                        <source
                                                srcset="content/express/webp-images/uploads/2022/07/2.jpg.webp"
                                                type="image/webp">
                                        <img width="110" height="110"
                                             src="content/uploads/2022/07/2.jpg"
                                             class="attachment-full size-full webpexpress-processed"
                                             alt="HR Director в Betlab" decoding="async" loading="lazy"
                                             title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                    </picture>
                                </div>
                                <div class="reviews__contentData">
                                    <div class="reviews__contentName"> Юлія Котова</div>
                                    <div class="reviews__contentPosition"> HR Derector в Betlab</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__contentItem">
                        <div class="reviews__contentItemInner">
                            <div class="reviews__contentTop">
                                <div class="reviews__contentText"> ITExpert надіслали нам перші резюме дуже швидко.
                                    Ми отримали першого спеціаліста у найкоротші терміни, незважаючи на специфічний
                                    набір навичок. Неважливо, хто нам потрібен — .NET, FrontEnd, Python, спеціаліст
                                    з машинного навчання чи підтримки — ми отримували перші резюме за 1-3 дні.
                                </div>
                            </div>
                            <div class="reviews__contentBottom">
                                <div class="reviews__contentPicture">
                                    <picture>
                                        <source
                                                srcset="content/express/webp-images/uploads/2021/12/3.jpg.webp"
                                                type="image/webp">
                                        <img width="150" height="150"
                                             src="content/uploads/2021/12/3.jpg"
                                             class="attachment-full size-full webpexpress-processed"
                                             alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                             decoding="async" loading="lazy"
                                             title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                    </picture>
                                </div>
                                <div class="reviews__contentData">
                                    <div class="reviews__contentName"> Антон Кузьменко</div>
                                    <div class="reviews__contentPosition"> Digital Solution Lab Lead в Deloitte
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__contentItem">
                        <div class="reviews__contentItemInner">
                            <div class="reviews__contentTop">
                                <div class="reviews__contentText"> ITExpert запропонували величезну кількість
                                    відповідних кандидатів для різних технічних позицій, які були відкриті у нашій
                                    компанії. Рекрутери ITExpert завжди глибого аналізували вимоги та показували
                                    найкращих фахівців на ринку.
                                </div>
                            </div>
                            <div class="reviews__contentBottom">
                                <div class="reviews__contentPicture">
                                    <picture>
                                        <source
                                                srcset="content/express/webp-images/uploads/2021/12/4.jpg.webp"
                                                type="image/webp">
                                        <img width="150" height="150"
                                             src="content/uploads/2021/12/4.jpg"
                                             class="attachment-full size-full webpexpress-processed"
                                             alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                             decoding="async" loading="lazy"
                                             title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                    </picture>
                                </div>
                                <div class="reviews__contentData">
                                    <div class="reviews__contentName"> Крістіна Ернаїс-Ескорса</div>
                                    <div class="reviews__contentPosition"> HR Generalist в Lifestreet
                                        Corporation/RevJet
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__contentItem">
                        <div class="reviews__contentItemInner">
                            <div class="reviews__contentTop">
                                <div class="reviews__contentText"> ITExpert допомогли нам відкрити новий офіс у
                                    Києві, відібравши понад 65 спеціалістів у найкоротші терміни, і ми все ще
                                    продовжуємо працювати. Я б не роздумуючи порадив ITExpert будь-якій компанії,
                                    яка швидко зростає та шукає допомоги в рекрутингу талантів.
                                </div>
                                <div class="reviews__contentLink"><a
                                        href="https://drive.google.com/file/d/15kcYHyCXLQ5aE_E8tQ8T_h4Qm7VhXL0q/view"
                                        target="_blank" rel="nofollow"> Рекомендаційний лист
                                    <svg width="15"
                                         height="12" viewbox="0 0 15 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M12.8661 6.2394H0.625C0.279822 6.2394 0 5.96005 0 5.61546C0 5.27087 0.279822 4.99152 0.625 4.99152H12.8661L8.93306 1.06513C8.68898 0.82147 8.68898 0.426412 8.93306 0.182748C9.17714 -0.0609159 9.57286 -0.0609159 9.81694 0.182748L14.8169 5.17427C15.061 5.41793 15.061 5.81299 14.8169 6.05665L9.81694 11.0482C9.57286 11.2918 9.17714 11.2918 8.93306 11.0482C8.68898 10.8045 8.68898 10.4095 8.93306 10.1658L12.8661 6.2394Z"
                                                fill="url(#paint0_linear_277_192)"></path>
                                        <defs>
                                            <lineargradient id="paint0_linear_277_192" x1="15" y1="5.54059"
                                                            x2="2.03266e-07" y2="5.54059"
                                                            gradientunits="userSpaceOnUse">
                                                <stop stop-color="#CFEFAB"></stop>
                                                <stop offset="0.369792" stop-color="#9FF89E"></stop>
                                                <stop offset="1" stop-color="#8AE0DF"></stop>
                                            </lineargradient>
                                        </defs>
                                    </svg>
                                </a></div>
                            </div>
                            <div class="reviews__contentBottom">
                                <div class="reviews__contentPicture">
                                    <picture>
                                        <source
                                                srcset="content/express/webp-images/uploads/2021/12/5.jpg.webp"
                                                type="image/webp">
                                        <img width="150" height="150"
                                             src="content/uploads/2021/12/5.jpg"
                                             class="attachment-full size-full webpexpress-processed"
                                             alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати"
                                             decoding="async" loading="lazy"
                                             title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                                    </picture>
                                </div>
                                <div class="reviews__contentData">
                                    <div class="reviews__contentName"> Джошуа Лєсавой</div>
                                    <div class="reviews__contentPosition"> CIO в Nextiva</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourClients">
        <div class="container">
            <div class="ourClientsInner">
                <h2 class="ourClients__title title">Наші клієнти</h2>
                <div class="ourClients__content">
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2022/01/matrix24.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/matrix24.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/03/sony-logo-1.png.webp"
                                    type="image/webp">
                            <img width="450" height="180"
                                 src="content/uploads/2023/03/sony-logo-1.png"
                                 class="attachment-full size-full webpexpress-processed" alt="sony logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2022/01/deloitte.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/deloitte.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2022/09/depositphotos.png.webp"
                                    type="image/webp">
                            <img width="500" height="350"
                                 src="content/uploads/2022/09/depositphotos.png"
                                 class="attachment-full size-full webpexpress-processed" alt="Depositphotos logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/03/emerson-logo-2.png.webp"
                                    type="image/webp">
                            <img width="450" height="180"
                                 src="content/uploads/2023/03/emerson-logo-2.png"
                                 class="attachment-full size-full webpexpress-processed" alt="Emerson logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/03/bnp-paribas-logo-1.png.webp"
                                    type="image/webp">
                            <img width="450" height="180"
                                 src="content/uploads/2023/03/bnp-paribas-logo-1.png"
                                 class="attachment-full size-full webpexpress-processed" alt="BNP Paribas logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/01/bitfury-logo-2.png.webp"
                                    type="image/webp">
                            <img width="450" height="180"
                                 src="content/uploads/2023/01/bitfury-logo-2.png"
                                 class="attachment-full size-full webpexpress-processed" alt="bitfury logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/03/pocketbook-logo-1.png.webp"
                                    type="image/webp">
                            <img width="450" height="180"
                                 src="content/uploads/2023/03/pocketbook-logo-1.png"
                                 class="attachment-full size-full webpexpress-processed" alt="pocketbook logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source srcset="content/express/webp-images/uploads/2022/01/dmarket.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/dmarket.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2022/09/draftkings-logo.png.webp"
                                    type="image/webp">
                            <img width="500" height="350"
                                 src="content/uploads/2022/09/draftkings-logo.png"
                                 class="attachment-full size-full webpexpress-processed" alt="DraftKings logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source srcset="content/express/webp-images/uploads/2022/01/ring.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/ring.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source srcset="content/express/webp-images/uploads/2022/01/nextiva.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/nextiva.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2022/09/tunein-logo.png.webp"
                                    type="image/webp">
                            <img width="500" height="350"
                                 src="content/uploads/2022/09/tunein-logo.png"
                                 class="attachment-full size-full webpexpress-processed" alt="TuneIn logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2022/01/coralogix.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/coralogix.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/01/raiffeisen-bank-logo.png.webp"
                                    type="image/webp">
                            <img width="469" height="188"
                                 src="content/uploads/2023/01/raiffeisen-bank-logo.png"
                                 class="attachment-full size-full webpexpress-processed" alt="raiffeisen bank logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/01/verbit-logo.png.webp"
                                    type="image/webp">
                            <img width="469" height="188"
                                 src="content/uploads/2023/01/verbit-logo.png"
                                 class="attachment-full size-full webpexpress-processed" alt="verbit logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2022/01/edible_arrangement_logo.png.webp"
                                    type="image/webp">
                            <img width="200" height="60"
                                 src="content/uploads/2022/01/edible_arrangement_logo.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/01/walkme-logo.png.webp"
                                    type="image/webp">
                            <img width="469" height="188"
                                 src="content/uploads/2023/01/walkme-logo.png"
                                 class="attachment-full size-full webpexpress-processed" alt="walkme logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source
                                    srcset="content/express/webp-images/uploads/2023/03/argus-logo-1-1.png.webp"
                                    type="image/webp">
                            <img width="450" height="180"
                                 src="content/uploads/2023/03/argus-logo-1-1.png"
                                 class="attachment-full size-full webpexpress-processed" alt="argus logo"
                                 decoding="async" loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source srcset="content/express/webp-images/uploads/2022/01/comodo.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/comodo.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
                    </div>
                    <div class="ourClients__contentItem">
                        <picture>
                            <source srcset="content/express/webp-images/uploads/2022/01/revjet.png.webp"
                                    type="image/webp">
                            <img width="600" height="200"
                                 src="content/uploads/2022/01/revjet.png"
                                 class="attachment-full size-full webpexpress-processed"
                                 alt="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати" decoding="async"
                                 loading="lazy"
                                 title="Проєкт-менеджер в IT: хто це такий, що робить та як ним стати">
                        </picture>
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
                    <div class="btn" id="btn-for-modal"> Замовити консультацію
                        <svg width="24" height="18"
                             viewbox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <a href="index.php" aria-current="page">Блог</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a
                                href="about/index.php">Про нас</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
                                href="contacts/index.php">Контакти</a></li>
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
                                        srcset="content/express/webp-images/uploads/2023/01/vector-facebook.png.webp"
                                        type="image/webp">
                                <img width="20" height="20" src="content/uploads/2023/01/vector-facebook.png"
                                     class="attachment-full size-full webpexpress-processed" alt="icon facebook"
                                     decoding="async" loading="lazy"
                                     title="Як найняти Senior-фахівця? Поради з досвіду Technical Recruiter">
                            </picture>
                        </a></li>
                        <li><a href="https://t.me/ITExpert_Recruiting" rel="nofollow">
                            <picture>
                                <source
                                        srcset="content/express/webp-images/uploads/2023/01/vector-telegram.png.webp"
                                        type="image/webp">
                                <img width="20" height="20" src="content/uploads/2023/01/vector-telegram.png"
                                     class="attachment-full size-full webpexpress-processed" alt="icon telegram"
                                     decoding="async" loading="lazy"
                                     title="Як найняти Senior-фахівця? Поради з досвіду Technical Recruiter">
                            </picture>
                        </a></li>
                        <li><a href="https://www.linkedin.com/company/itexpert/" rel="nofollow">
                            <picture>
                                <source
                                        srcset="content/express/webp-images/uploads/2023/01/vector-linkedin.png.webp"
                                        type="image/webp">
                                <img width="21" height="21" src="content/uploads/2023/01/vector-linkedin.png"
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
<span href="#" class="scrollup"><img src="content/themes/itexpert/assets/images/arrow-up.svg" width="58"
                                     height="58" alt="up"></span>
<script id='wpml-cookie-js-extra'>var wpml_cookies = {
    "wpml_current_language": {
        "value": "uk",
        "expires": 1,
        "path": "\/"
    }
};
var wpml_cookies = {"wpml_current_language": {"value": "uk", "expires": 1, "path": "\/"}};</script>
<script
        id='picsprotect_js-js-extra'>var pp_plugin = {"blank_gif": "https:\/\/itexpert.work\/content\/plugins\/photo-protect\/blank.gif"};</script>
<script
        id='cf7-popups-frontend-js-extra'>var cf7_popups_val = {
    "msg1": "\u041f\u043e\u043c\u0438\u043b\u043a\u0430 \u0432\u0430\u043b\u0456\u0434\u0430\u0446\u0456\u0457",
    "msg2": "\u041e\u0434\u043d\u0430 \u0447\u0438 \u043a\u0456\u043b\u044c\u043a\u0430 \u043f\u043e\u043c\u0438\u043b\u043e\u043a",
    "msg3": "\u041f\u043e\u043c\u0438\u043b\u043a\u0430",
    "msg4": "\u041d\u0435 \u0432\u0434\u0430\u043b\u043e\u0441\u044f \u043d\u0430\u0434\u0456\u0441\u043b\u0430\u0442\u0438 \u0435\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u0438\u0439 \u043b\u0438\u0441\u0442, \u043e\u0441\u043a\u0456\u043b\u044c\u043a\u0438 \u0432\u0438\u044f\u0432\u043b\u0435\u043d\u043e \u043c\u043e\u0436\u043b\u0438\u0432\u0443 \u0441\u043f\u0430\u043c-\u0430\u043a\u0442\u0438\u0432\u043d\u0456\u0441\u0442\u044c.",
    "msg5": "\u041d\u0435 \u0432\u0434\u0430\u043b\u043e\u0441\u044f \u043d\u0430\u0434\u0456\u0441\u043b\u0430\u0442\u0438 \u0435\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u0438\u0439 \u043b\u0438\u0441\u0442.",
    "msg6": "\u041f\u043e\u0432\u0456\u0434\u043e\u043c\u043b\u0435\u043d\u043d\u044f \u043d\u0430\u0434\u0456\u0441\u043b\u0430\u043d\u0435",
    "msg7": "\u0414\u044f\u043a\u0443\u044e \u0437\u0430 \u0432\u0430\u0448\u0435 \u043f\u043e\u0432\u0456\u0434\u043e\u043c\u043b\u0435\u043d\u043d\u044f."
};</script>
<script
        id='contact-form-7-js-extra'>var wpcf7 = {
    "api": {
        "root": "https:\/\/itexpert.work\/uk\/json\/",
        "namespace": "contact-form-7\/v1"
    }
};</script>
<script
        id='rate-my-post-js-extra'>var rmp_frontend = {
    "admin_ajax": "https:\/\/itexpert.work\/admin\/admin-ajax.php",
    "postID": "26548",
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
<script src='content/cache/wpfc-minified/ee7e3k9p/h6utc.js'></script>
<script>document.createElement("picture");
if (!window.HTMLPictureElement && document.addEventListener) {
    window.addEventListener("DOMContentLoaded", function () {
        var s = document.createElement("script");
        s.src = "https://itexpert.work/content/plugins/express/js/picturefill.min.js";
        document.body.appendChild(s);
    });
}</script>
<script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
<script src="jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="npm/chart.js"></script>
<script src="ajax/libs/slick-carousel/1.8.1/slick.js"
        integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src='content/cache/wpfc-minified/12td4enq/h6utc.js'></script>
<script
        id='postratings-js-extra'>var ratingsL10n = {
    "plugin_url": "https:\/\/itexpert.work\/content\/plugins\/postratings",
    "ajax_url": "https:\/\/itexpert.work\/admin\/admin-ajax.php",
    "text_wait": "Please rate only 1 item at a time.",
    "image": "stars",
    "image_ext": "gif",
    "max": "5",
    "show_loading": "1",
    "show_fading": "1",
    "custom": "0"
};
var ratings_mouseover_image = new Image();
ratings_mouseover_image.src = "https://itexpert.work/content/plugins/postratings/images/stars/rating_over.gif";
;</script>
<script defer="" src='content/cache/wpfc-minified/8azr2xf7/h6utf.js'></script>
</body>

</html><!-- WP Fastest Cache file was created in 0.46735596656799 seconds, on 19-04-23 18:22:44 --><!-- via php -->