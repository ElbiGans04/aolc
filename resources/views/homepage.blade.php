<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AOLC Cirarab Christmas {{ date('Y') }} | Elbiworks</title>

        <meta name="description" content="Celebrate the true meaning of Christmas with AOLC! Join us in a celebration filled with joy, love, hope, and togetherness.">

        <meta name="robots" content="index, follow">
        <meta name="theme-color" content="#111111">

        <!-- Icons -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

        <!-- Canonical -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="AOLC Cirarab">
        <meta property="og:locale" content="id_ID">
        <meta property="og:title" content="AOLC Cirarab Christmas {{ date('Y') }}">
        <meta property="og:description" content="Celebrate the true meaning of Christmas with AOLC! Join us in a celebration filled with joy, love, hope, and togetherness.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/og-image.webp') }}">
        <meta property="og:image:alt" content="AOLC Cirarab Christmas Celebration">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">

        <!-- Twitter / X -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="AOLC Cirarab Christmas {{ date('Y') }}">
        <meta name="twitter:description" content="Celebrate the true meaning of Christmas with AOLC!">
        <meta name="twitter:image" content="{{ asset('images/og-image.webp') }}">
        <meta name="twitter:image:alt" content="AOLC Cirarab Christmas Celebration">

        <!-- QRCode.js for Dynamic Google Form QR Generation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

        @fonts


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */ @layer properties{@supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))){*,:before,:after,::backdrop{--tw-translate-x:0;--tw-translate-y:0;--tw-translate-z:0;--tw-rotate-x:initial;--tw-rotate-y:initial;--tw-rotate-z:initial;--tw-skew-x:initial;--tw-skew-y:initial;--tw-space-x-reverse:0;--tw-border-style:solid;--tw-leading:initial;--tw-font-weight:initial;--tw-tracking:initial;--tw-shadow:0 0 #0000;--tw-shadow-color:initial;--tw-shadow-alpha:100%;--tw-inset-shadow:0 0 #0000;--tw-inset-shadow-color:initial;--tw-inset-shadow-alpha:100%;--tw-ring-color:initial;--tw-ring-shadow:0 0 #0000;--tw-inset-ring-color:initial;--tw-inset-ring-shadow:0 0 #0000;--tw-ring-inset:initial;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-offset-shadow:0 0 #0000;--tw-blur:initial;--tw-brightness:initial;--tw-contrast:initial;--tw-grayscale:initial;--tw-hue-rotate:initial;--tw-invert:initial;--tw-opacity:initial;--tw-saturate:initial;--tw-sepia:initial;--tw-drop-shadow:initial;--tw-drop-shadow-color:initial;--tw-drop-shadow-alpha:100%;--tw-drop-shadow-size:initial;--tw-duration:initial;--tw-ease:initial;--tw-content:""}}}@layer theme{:root,:host{--font-sans:"Instrument Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";--font-serif:ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;--font-mono:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;--color-red-50:oklch(97.1% .013 17.38);--color-red-100:oklch(93.6% .032 17.717);--color-red-200:oklch(88.5% .062 18.334);--color-red-300:oklch(80.8% .114 19.571);--color-red-400:oklch(70.4% .191 22.216);--color-red-500:oklch(63.7% .237 25.331);--color-red-600:oklch(57.7% .245 27.325);--color-red-700:oklch(50.5% .213 27.518);--color-red-800:oklch(44.4% .177 26.899);--color-red-900:oklch(39.6% .141 25.723);--color-red-950:oklch(25.8% .092 26.042);--color-orange-50:oklch(98% .016 73.684);--color-orange-100:oklch(95.4% .038 75.164);--color-orange-200:oklch(90.1% .076 70.697);--color-orange-300:oklch(83.7% .128 66.29);--color-orange-400:oklch(75% .183 55.934);--color-orange-500:oklch(70.5% .213 47.604);--color-orange-600:oklch(64.6% .222 41.116);--color-orange-700:oklch(55.3% .195 38.402);--color-orange-800:oklch(47% .157 37.304);--color-orange-900:oklch(40.8% .123 38.172);--color-orange-950:oklch(26.6% .079 36.259);--color-amber-50:oklch(98.7% .022 95.277);--color-amber-100:oklch(96.2% .059 95.617);--color-amber-200:oklch(92.4% .12 95.746);--color-amber-300:oklch(87.9% .169 91.605);--color-amber-400:oklch(82.8% .189 84.429);--color-amber-500:oklch(76.9% .188 70.08);--color-amber-600:oklch(66.6% .179 58.318);--color-amber-700:oklch(55.5% .163 48.998);--color-amber-800:oklch(47.3% .137 46.201);--color-amber-900:oklch(41.4% .112 45.904);--color-amber-950:oklch(27.9% .077 45.635);--color-yellow-50:oklch(98.7% .026 102.212);--color-yellow-100:oklch(97.3% .071 103.193);--color-yellow-200:oklch(94.5% .129 101.54);--color-yellow-300:oklch(90.5% .182 98.111);--color-yellow-400:oklch(85.2% .199 91.936);--color-yellow-500:oklch(79.5% .184 86.047);--color-yellow-600:oklch(68.1% .162 75.834);--color-yellow-700:oklch(55.4% .135 66.442);--color-yellow-800:oklch(47.6% .114 61.907);--color-yellow-900:oklch(42.1% .095 57.708);--color-yellow-950:oklch(28.6% .066 53.813);--color-lime-50:oklch(98.6% .031 120.757);--color-lime-100:oklch(96.7% .067 122.328);--color-lime-200:oklch(93.8% .127 124.321);--color-lime-300:oklch(89.7% .196 126.665);--color-lime-400:oklch(84.1% .238 128.85);--color-lime-500:oklch(76.8% .233 130.85);--color-lime-600:oklch(64.8% .2 131.684);--color-lime-700:oklch(53.2% .157 131.589);--color-lime-800:oklch(45.3% .124 130.933);--color-lime-900:oklch(40.5% .101 131.063);--color-lime-950:oklch(27.4% .072 132.109);--color-green-50:oklch(98.2% .018 155.826);--color-green-100:oklch(96.2% .044 156.743);--color-green-200:oklch(92.5% .084 155.995);--color-green-300:oklch(87.1% .15 154.449);--color-green-400:oklch(79.2% .209 151.711);--color-green-500:oklch(72.3% .219 149.579);--color-green-600:oklch(62.7% .194 149.214);--color-green-700:oklch(52.7% .154 150.069);--color-green-800:oklch(44.8% .119 151.328);--color-green-900:oklch(39.3% .095 152.535);--color-green-950:oklch(26.6% .065 152.934);--color-emerald-50:oklch(97.9% .021 166.113);--color-emerald-100:oklch(95% .052 163.051);--color-emerald-200:oklch(90.5% .093 164.15);--color-emerald-300:oklch(84.5% .143 164.978);--color-emerald-400:oklch(76.5% .177 163.223);--color-emerald-500:oklch(69.6% .17 162.48);--color-emerald-600:oklch(59.6% .145 163.225);--color-emerald-700:oklch(50.8% .118 165.612);--color-emerald-800:oklch(43.2% .095 166.913);--color-emerald-900:oklch(37.8% .077 168.94);--color-emerald-950:oklch(26.2% .051 172.552);--color-teal-50:oklch(98.4% .014 180.72);--color-teal-100:oklch(95.3% .051 180.801);--color-teal-200:oklch(91% .096 180.426);--color-teal-300:oklch(85.5% .138 181.071);--color-teal-400:oklch(77.7% .152 181.912);--color-teal-500:oklch(70.4% .14 182.503);--color-teal-600:oklch(60% .118 184.704);--color-teal-700:oklch(51.1% .096 186.391);--color-teal-800:oklch(43.7% .078 188.216);--color-teal-900:oklch(38.6% .063 188.416);--color-teal-950:oklch(27.7% .046 192.524);--color-cyan-50:oklch(98.4% .019 200.873);--color-cyan-100:oklch(95.6% .045 203.388);--color-cyan-200:oklch(91.7% .08 205.041);--color-cyan-300:oklch(86.5% .127 207.078);--color-cyan-400:oklch(78.9% .154 211.53);--color-cyan-500:oklch(71.5% .143 215.221);--color-cyan-600:oklch(60.9% .126 221.723);--color-cyan-700:oklch(52% .105 223.128);--color-cyan-800:oklch(45% .085 224.283);--color-cyan-900:oklch(39.8% .07 227.392);--color-cyan-950:oklch(30.2% .056 229.695);--color-sky-50:oklch(97.7% .013 236.62);--color-sky-100:oklch(95.1% .026 236.824);--color-sky-200:oklch(90.1% .058 230.902);--color-sky-300:oklch(82.8% .111 230.318);--color-sky-400:oklch(74.6% .16 232.661);--color-sky-500:oklch(68.5% .169 237.323);--color-sky-600:oklch(58.8% .158 241.966);--color-sky-700:oklch(50% .134 242.749);--color-sky-800:oklch(44.3% .11 240.79);--color-sky-900:oklch(39.1% .09 240.876);--color-sky-950:oklch(29.3% .066 243.157);--color-blue-50:oklch(97% .014 254.604);--color-blue-100:oklch(93.2% .032 255.585);--color-blue-200:oklch(88.2% .059 254.128);--color-blue-300:oklch(80.9% .105 251.813);--color-blue-400:oklch(70.7% .165 254.624);--color-blue-500:oklch(62.3% .214 259.815);--color-blue-600:oklch(54.6% .245 262.881);--color-blue-700:oklch(48.8% .243 264.376);--color-blue-800:oklch(42.4% .199 265.638);--color-blue-900:oklch(37.9% .146 265.522);--color-blue-950:oklch(28.2% .091 267.935);--color-indigo-50:oklch(96.2% .018 272.314);--color-indigo-100:oklch(93% .034 272.788);--color-indigo-200:oklch(87% .065 274.039);--color-indigo-300:oklch(78.5% .115 274.713);--color-indigo-400:oklch(67.3% .182 276.935);--color-indigo-500:oklch(58.5% .233 277.117);--color-indigo-600:oklch(51.1% .262 276.966);--color-indigo-700:oklch(45.7% .24 277.023);--color-indigo-800:oklch(39.8% .195 277.366);--color-indigo-900:oklch(35.9% .144 278.697);--color-indigo-950:oklch(25.7% .09 281.288);--color-violet-50:oklch(96.9% .016 293.756);--color-violet-100:oklch(94.3% .029 294.588);--color-violet-200:oklch(89.4% .057 293.283);--color-violet-300:oklch(81.1% .111 293.571);--color-violet-400:oklch(70.2% .183 293.541);--color-violet-500:oklch(60.6% .25 292.717);--color-violet-600:oklch(54.1% .281 293.009);--color-violet-700:oklch(49.1% .27 292.581);--color-violet-800:oklch(43.2% .232 292.759);--color-violet-900:oklch(38% .189 293.745);--color-violet-950:oklch(28.3% .141 291.089);--color-purple-50:oklch(97.7% .014 308.299);--color-purple-100:oklch(94.6% .033 307.174);--color-purple-200:oklch(90.2% .063 306.703);--color-purple-300:oklch(82.7% .119 306.383);--color-purple-400:oklch(71.4% .203 305.504);--color-purple-500:oklch(62.7% .265 303.9);--color-purple-600:oklch(55.8% .288 302.321);--color-purple-700:oklch(49.6% .265 301.924);--color-purple-800:oklch(43.8% .218 303.724);--color-purple-900:oklch(38.1% .176 304.987);--color-purple-950:oklch(29.1% .149 302.717);--color-fuchsia-50:oklch(97.7% .017 320.058);--color-fuchsia-100:oklch(95.2% .037 318.852);--color-fuchsia-200:oklch(90.3% .076 319.62);--color-fuchsia-300:oklch(83.3% .145 321.434);--color-fuchsia-400:oklch(74% .238 322.16);--color-fuchsia-500:oklch(66.7% .295 322.15);--color-fuchsia-600:oklch(59.1% .293 322.896);--color-fuchsia-700:oklch(51.8% .253 323.949);--color-fuchsia-800:oklch(45.2% .211 324.591);--color-fuchsia-900:oklch(40.1% .17 325.612);--color-fuchsia-950:oklch(29.3% .136 325.661);--color-pink-50:oklch(97.1% .014 343.198);--color-pink-100:oklch(94.8% .028 342.258);--color-pink-200:oklch(89.9% .061 343.231);--color-pink-300:oklch(82.3% .12 346.018);--color-pink-400:oklch(71.8% .202 349.761);--color-pink-500:oklch(65.6% .241 354.308);--color-pink-600:oklch(59.2% .249 .584);--color-pink-700:oklch(52.5% .223 3.958);--color-pink-800:oklch(45.9% .187 3.815);--color-pink-900:oklch(40.8% .153 2.432);--color-pink-950:oklch(28.4% .109 3.907);--color-rose-50:oklch(96.9% .015 12.422);--color-rose-100:oklch(94.1% .03 12.58);--color-rose-200:oklch(89.2% .058 10.001);--color-rose-300:oklch(81% .117 11.638);--color-rose-400:oklch(71.2% .194 13.428);--color-rose-500:oklch(64.5% .246 16.439);--color-rose-600:oklch(58.6% .253 17.585);--color-rose-700:oklch(51.4% .222 16.935);--color-rose-800:oklch(45.5% .188 13.697);--color-rose-900:oklch(41% .159 10.272);--color-rose-950:oklch(27.1% .105 12.094);--color-slate-50:oklch(98.4% .003 247.858);--color-slate-100:oklch(96.8% .007 247.896);--color-slate-200:oklch(92.9% .013 255.508);--color-slate-300:oklch(86.9% .022 252.894);--color-slate-400:oklch(70.4% .04 256.788);--color-slate-500:oklch(55.4% .046 257.417);--color-slate-600:oklch(44.6% .043 257.281);--color-slate-700:oklch(37.2% .044 257.287);--color-slate-800:oklch(27.9% .041 260.031);--color-slate-900:oklch(20.8% .042 265.755);--color-slate-950:oklch(12.9% .042 264.695);--color-gray-50:oklch(98.5% .002 247.839);--color-gray-100:oklch(96.7% .003 264.542);--color-gray-200:oklch(92.8% .006 264.531);--color-gray-300:oklch(87.2% .01 258.338);--color-gray-400:oklch(70.7% .022 261.325);--color-gray-500:oklch(55.1% .027 264.364);--color-gray-600:oklch(44.6% .03 256.802);--color-gray-700:oklch(37.3% .034 259.733);--color-gray-800:oklch(27.8% .033 256.848);--color-gray-900:oklch(21% .034 264.665);--color-gray-950:oklch(13% .028 261.692);--color-zinc-50:oklch(98.5% 0 0);--color-zinc-100:oklch(96.7% .001 286.375);--color-zinc-200:oklch(92% .004 286.32);--color-zinc-300:oklch(87.1% .006 286.286);--color-zinc-400:oklch(70.5% .015 286.067);--color-zinc-500:oklch(55.2% .016 285.938);--color-zinc-600:oklch(44.2% .017 285.786);--color-zinc-700:oklch(37% .013 285.805);--color-zinc-800:oklch(27.4% .006 286.033);--color-zinc-900:oklch(21% .006 285.885);--color-zinc-950:oklch(14.1% .005 285.823);--color-neutral-50:oklch(98.5% 0 0);--color-neutral-100:oklch(97% 0 0);--color-neutral-200:oklch(92.2% 0 0);--color-neutral-300:oklch(87% 0 0);--color-neutral-400:oklch(70.8% 0 0);--color-neutral-500:oklch(55.6% 0 0);--color-neutral-600:oklch(43.9% 0 0);--color-neutral-700:oklch(37.1% 0 0);--color-neutral-800:oklch(26.9% 0 0);--color-neutral-900:oklch(20.5% 0 0);--color-neutral-950:oklch(14.5% 0 0);--color-stone-50:oklch(98.5% .001 106.423);--color-stone-100:oklch(97% .001 106.424);--color-stone-200:oklch(92.3% .003 48.717);--color-stone-300:oklch(86.9% .005 56.366);--color-stone-400:oklch(70.9% .01 56.259);--color-stone-500:oklch(55.3% .013 58.071);--color-stone-600:oklch(44.4% .011 73.639);--color-stone-700:oklch(37.4% .01 67.558);--color-stone-800:oklch(26.8% .007 34.298);--color-stone-900:oklch(21.6% .006 56.043);--color-stone-950:oklch(14.7% .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1 / .75);--text-sm:.875rem;--text-sm--line-height:calc(1.25 / .875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75 / 1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75 / 1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2 / 1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5 / 2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a, 0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a, 0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a, 0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a, 0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4, 0, 1, 1);--ease-out:cubic-bezier(0, 0, .2, 1);--ease-in-out:cubic-bezier(.4, 0, .2, 1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0, 0, .2, 1) infinite;--animate-pulse:pulse 2s cubic-bezier(.4, 0, .6, 1) infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16 / 9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4, 0, .2, 1);--default-font-family:var(--font-sans);--default-mono-font-family:var(--font-mono)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1}@supports (not ((-webkit-appearance:-apple-pay-button))) or (contain-intrinsic-size:1px){::placeholder{color:currentColor}@supports (color:color-mix(in lab,red,red)){::placeholder{color:color-mix(in oklab,currentcolor 50%,transparent)}}}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}::-webkit-calendar-picker-indicator{line-height:1}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){appearance:button}::file-selector-button{appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.fixed{position:fixed}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing) * 0)}.start{inset-inline-start:var(--spacing)}.top-0{top:calc(var(--spacing) * 0)}.right-0{right:calc(var(--spacing) * 0)}.container{width:100%}@media(min-width:40rem){.container{max-width:40rem}}@media(min-width:48rem){.container{max-width:48rem}}@media(min-width:64rem){.container{max-width:64rem}}@media(min-width:80rem){.container{max-width:80rem}}@media(min-width:96rem){.container{max-width:96rem}}.mx-auto{margin-inline:auto}.-mt-\[6\.6rem\]{margin-top:-6.6rem}.-mt-px{margin-top:-1px}.mt-2{margin-top:calc(var(--spacing) * 2)}.mt-4{margin-top:calc(var(--spacing) * 4)}.mt-6{margin-top:calc(var(--spacing) * 6)}.mt-8{margin-top:calc(var(--spacing) * 8)}.mr-2{margin-right:calc(var(--spacing) * 2)}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing) * 1)}.mb-2{margin-bottom:calc(var(--spacing) * 2)}.mb-4{margin-bottom:calc(var(--spacing) * 4)}.mb-6{margin-bottom:calc(var(--spacing) * 6)}.-ml-8{margin-left:calc(var(--spacing) * -8)}.-ml-px{margin-left:-1px}.ml-1{margin-left:calc(var(--spacing) * 1)}.ml-2{margin-left:calc(var(--spacing) * 2)}.ml-4{margin-left:calc(var(--spacing) * 4)}.ml-12{margin-left:calc(var(--spacing) * 12)}.contents{display:contents}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/364\]{aspect-ratio:335/364}.h-1{height:calc(var(--spacing) * 1)}.h-1\.5{height:calc(var(--spacing) * 1.5)}.h-2{height:calc(var(--spacing) * 2)}.h-2\.5{height:calc(var(--spacing) * 2.5)}.h-3{height:calc(var(--spacing) * 3)}.h-3\.5{height:calc(var(--spacing) * 3.5)}.h-5{height:calc(var(--spacing) * 5)}.h-8{height:calc(var(--spacing) * 8)}.h-14{height:calc(var(--spacing) * 14)}.h-14\.5{height:calc(var(--spacing) * 14.5)}.h-16{height:calc(var(--spacing) * 16)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing) * 1)}.w-1\.5{width:calc(var(--spacing) * 1.5)}.w-2{width:calc(var(--spacing) * 2)}.w-2\.5{width:calc(var(--spacing) * 2.5)}.w-3{width:calc(var(--spacing) * 3)}.w-3\.5{width:calc(var(--spacing) * 3.5)}.w-5{width:calc(var(--spacing) * 5)}.w-8{width:calc(var(--spacing) * 8)}.w-\[438px\]{width:438px}.w-auto{width:auto}.w-full{width:100%}.max-w-6xl{max-width:var(--container-6xl)}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.max-w-xl{max-width:var(--container-xl)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing) * 0);translate:var(--tw-translate-x) var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x,) var(--tw-rotate-y,) var(--tw-rotate-z,) var(--tw-skew-x,) var(--tw-skew-y,)}.cursor-default{cursor:default}.cursor-not-allowed{cursor:not-allowed}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.justify-items-center{justify-items:center}.gap-2{gap:calc(var(--spacing) * 2)}.gap-3{gap:calc(var(--spacing) * 3)}.gap-4{gap:calc(var(--spacing) * 4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing) * 1) * var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing) * 1) * calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-md{border-radius:var(--radius-md)}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-l-md{border-top-left-radius:var(--radius-md);border-bottom-left-radius:var(--radius-md)}.rounded-r-md{border-top-right-radius:var(--radius-md);border-bottom-right-radius:var(--radius-md)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-t{border-top-style:var(--tw-border-style);border-top-width:1px}.border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-gray-200{border-color:var(--color-gray-200)}.border-gray-300{border-color:var(--color-gray-300)}.border-gray-400{border-color:var(--color-gray-400)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-gray-100{background-color:var(--color-gray-100)}.bg-gray-200{background-color:var(--color-gray-200)}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing) * 6)}.px-2{padding-inline:calc(var(--spacing) * 2)}.px-4{padding-inline:calc(var(--spacing) * 4)}.px-5{padding-inline:calc(var(--spacing) * 5)}.px-6{padding-inline:calc(var(--spacing) * 6)}.py-1{padding-block:calc(var(--spacing) * 1)}.py-1\.5{padding-block:calc(var(--spacing) * 1.5)}.py-2{padding-block:calc(var(--spacing) * 2)}.py-4{padding-block:calc(var(--spacing) * 4)}.pt-8{padding-top:calc(var(--spacing) * 8)}.pb-6{padding-bottom:calc(var(--spacing) * 6)}.pb-12{padding-bottom:calc(var(--spacing) * 12)}.text-center{text-align:center}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-5{--tw-leading:calc(var(--spacing) * 5);line-height:calc(var(--spacing) * 5)}.leading-7{--tw-leading:calc(var(--spacing) * 7);line-height:calc(var(--spacing) * 7)}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.tracking-wider{--tw-tracking:var(--tracking-wider);letter-spacing:var(--tracking-wider)}.text-\[\#1B1B18\],.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F3BEC7\]{color:#f3bec7}.text-\[\#F8B803\]{color:#f8b803}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-gray-200{color:var(--color-gray-200)}.text-gray-300{color:var(--color-gray-300)}.text-gray-400{color:var(--color-gray-400)}.text-gray-500{color:var(--color-gray-500)}.text-gray-600{color:var(--color-gray-600)}.text-gray-700{color:var(--color-gray-700)}.text-gray-800{color:var(--color-gray-800)}.text-gray-900{color:var(--color-gray-900)}.text-white{color:var(--color-white)}.uppercase{text-transform:uppercase}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.mix-blend-color{mix-blend-mode:color}.mix-blend-darken{mix-blend-mode:darken}.mix-blend-hard-light{mix-blend-mode:hard-light}.mix-blend-multiply{mix-blend-mode:multiply}.shadow{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008), 0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.ring-gray-300{--tw-ring-color:var(--color-gray-300)}.filter{filter:var(--tw-blur,) var(--tw-brightness,) var(--tw-contrast,) var(--tw-grayscale,) var(--tw-hue-rotate,) var(--tw-invert,) var(--tw-saturate,) var(--tw-sepia,) var(--tw-drop-shadow,)}.transition{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,--tw-gradient-from,--tw-gradient-via,--tw-gradient-to,opacity,box-shadow,transform,translate,scale,rotate,filter,-webkit-backdrop-filter,backdrop-filter,display,content-visibility,overlay,pointer-events;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-200{transition-delay:.2s}.delay-300{transition-delay:.3s}.delay-400{transition-delay:.4s}.duration-150{--tw-duration:.15s;transition-duration:.15s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.ease-in-out{--tw-ease:var(--ease-in-out);transition-timing-function:var(--ease-in-out)}.\[--stroke-color\:\#1B1B18\]{--stroke-color:#1b1b18}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing) * 0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing) * 0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media(hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}.hover\:bg-gray-100:hover{background-color:var(--color-gray-100)}.hover\:text-gray-400:hover{color:var(--color-gray-400)}.hover\:text-gray-700:hover{color:var(--color-gray-700)}}.focus\:border-blue-300:focus{border-color:var(--color-blue-300)}.focus\:ring:focus{--tw-ring-shadow:var(--tw-ring-inset,) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color,currentcolor);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.focus\:outline-none:focus{--tw-outline-style:none;outline-style:none}.active\:bg-gray-100:active{background-color:var(--color-gray-100)}.active\:text-gray-500:active{color:var(--color-gray-500)}.active\:text-gray-700:active{color:var(--color-gray-700)}.active\:text-gray-800:active{color:var(--color-gray-800)}@media(min-width:40rem){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:flex-1{flex:1}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:justify-start{justify-content:flex-start}.sm\:gap-2{gap:calc(var(--spacing) * 2)}.sm\:px-6{padding-inline:calc(var(--spacing) * 6)}.sm\:pt-0{padding-top:calc(var(--spacing) * 0)}}@media(min-width:64rem){.lg\:mt-10{margin-top:calc(var(--spacing) * 10)}.lg\:mb-0{margin-bottom:calc(var(--spacing) * 0)}.lg\:mb-6{margin-bottom:calc(var(--spacing) * 6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing) * 0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing) * 8)}.lg\:p-20{padding:calc(var(--spacing) * 20)}.lg\:px-8{padding-inline:calc(var(--spacing) * 8)}.lg\:pb-10{padding-bottom:calc(var(--spacing) * 10)}}.rtl\:flex-row-reverse:where(:dir(rtl),[dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media(prefers-color-scheme:dark){.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:border-gray-600{border-color:var(--color-gray-600)}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:bg-gray-700{background-color:var(--color-gray-700)}.dark\:bg-gray-800{background-color:var(--color-gray-800)}.dark\:bg-gray-900{background-color:var(--color-gray-900)}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#4B0600\]{color:#4b0600}.dark\:text-\[\#391800\]{color:#391800}.dark\:text-\[\#733000\]{color:#733000}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:text-black{color:var(--color-black)}.dark\:text-gray-200{color:var(--color-gray-200)}.dark\:text-gray-300{color:var(--color-gray-300)}.dark\:text-gray-400{color:var(--color-gray-400)}.dark\:text-gray-600{color:var(--color-gray-600)}.dark\:mix-blend-hard-light{mix-blend-mode:hard-light}.dark\:mix-blend-normal{mix-blend-mode:normal}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:\[--stroke-color\:\#FF750F\]{--stroke-color:#ff750f}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media(hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-gray-900:hover{background-color:var(--color-gray-900)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}.dark\:hover\:text-gray-200:hover{color:var(--color-gray-200)}.dark\:hover\:text-gray-300:hover{color:var(--color-gray-300)}}.dark\:focus\:border-blue-700:focus{border-color:var(--color-blue-700)}.dark\:focus\:border-blue-800:focus{border-color:var(--color-blue-800)}.dark\:active\:bg-gray-700:active{background-color:var(--color-gray-700)}.dark\:active\:text-gray-300:active{color:var(--color-gray-300)}}@starting-style{.starting\:opacity-0{opacity:0}}@media(prefers-reduced-motion:no-preference){@starting-style{.motion-safe\:starting\:-translate-x-\[26px\]{--tw-translate-x: -26px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[51px\]{--tw-translate-x: -51px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[78px\]{--tw-translate-x: -78px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[102px\]{--tw-translate-x: -102px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:translate-y-6{--tw-translate-y:calc(var(--spacing) * 6);translate:var(--tw-translate-x) var(--tw-translate-y)}}}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false}@property --tw-rotate-y{syntax:"*";inherits:false}@property --tw-rotate-z{syntax:"*";inherits:false}@property --tw-skew-x{syntax:"*";inherits:false}@property --tw-skew-y{syntax:"*";inherits:false}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-tracking{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-drop-shadow-color{syntax:"*";inherits:false}@property --tw-drop-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-drop-shadow-size{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-ease{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}
            </style>
        @endif
    </head>
    <body class="bg-obsidian-950 text-slate-100 font-sans antialiased selection:bg-gold selection:text-obsidian-950 overflow-x-hidden">

        <!-- Top Navigation Bar -->
        <nav class="fixed top-0 left-0 w-full z-40 bg-obsidian-950/90 backdrop-blur-md border-b border-obsidian-700/60 transition-all">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-20 sm:h-24 flex items-center justify-between">
                <div class="flex">
                    <a href="https://www.instagram.com/gbicirarab/" class="flex items-center gap-2.5 group py-4 sm">
                        {{-- <div class="w-9 h-9 rounded-lg bg-gold flex items-center justify-center text-obsidian-950 font-black">
                            <i data-lucide="sparkle" class="w-5 h-5 fill-current"></i>
                        </div> --}}
                        <img src="/images/gbi.webp" class="w-[50px] h-[50px] sm:w-[60px] sm:h-[60px] object-contain" />
                        {{-- <span class="font-heading font-extrabold tracking-wider text-base sm:text-lg text-slate-100 group-hover:text-gold transition-colors">
                            AOLC <span class="text-gold">CIRARAB</span>
                        </span> --}}
                    </a>
                    <a href="https://www.instagram.com/arrowoflight.cirarab/" class="flex items-center gap-2.5 group py-4 sm">
                        {{-- <div class="w-9 h-9 rounded-lg bg-gold flex items-center justify-center text-obsidian-950 font-black">
                            <i data-lucide="sparkle" class="w-5 h-5 fill-current"></i>
                        </div> --}}
                        <img src="/images/aolc_logo.webp" class="w-[140px] h-[70px] sm:w-[210px] sm:h-[80px] object-contain" />
                        {{-- <span class="font-heading font-extrabold tracking-wider text-base sm:text-lg text-slate-100 group-hover:text-gold transition-colors">
                            AOLC <span class="text-gold">CIRARAB</span>
                        </span> --}}
                    </a>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8 text-xs font-semibold uppercase tracking-widest text-slate-300">
                    <a href="#about" class="hover:text-gold transition-colors">Tentang</a>
                    <a href="#details" class="hover:text-gold transition-colors">Lokasi</a>
                    <a href="#lineup" class="hover:text-gold transition-colors">Lineup</a>
                    <a href="#dresscode" class="hover:text-gold transition-colors">Dresscode</a>
                    <a href="#turut-mengundang" class="hover:text-gold transition-colors">Turut Mengundang</a>
                </div>

                <!-- Action Buttons (Music + RSVP CTA) -->
                <div class="flex items-center gap-3">
                    {{-- <button id="musicToggle" class="p-2.5 rounded-full bg-obsidian-800 border border-gold/30 text-gold hover:bg-gold hover:text-obsidian-950 transition-all" title="Toggle Ambient Music">
                        <i data-lucide="music" class="w-4 h-4"></i>
                    </button> --}}

                    <a href="#rsvp" class="btn-gold px-5 py-2.5 rounded-lg text-xs font-bold uppercase tracking-wider hidden sm:inline-block">
                        Daftar Sekarang
                    </a>

                    <button id="mobileMenuBtn" class="md:hidden p-2 text-slate-300 hover:text-gold">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div id="mobileMenu" class="hidden md:hidden bg-obsidian-900 border-b border-obsidian-800 px-6 py-4 space-y-3 text-sm">
                <a href="#about" class="block text-slate-300 hover:text-gold">Tentang</a>
                <a href="#details" class="block text-slate-300 hover:text-gold">Waktu & Tempat</a>
                <a href="#lineup" class="block text-slate-300 hover:text-gold">Pembicara & Guest Star</a>
                <a href="#dresscode" class="block text-slate-300 hover:text-gold">Dress Code</a>
                <a href="#turut-mengundang" class="block text-slate-300 hover:text-gold">Turut Mengundang</a>
                <a href="#rsvp" class="block w-full text-center btn-gold py-2.5 rounded-lg font-bold">Daftar Sekarang</a>
            </div>
        </nav>

        <!-- HERO SECTION -->
        <section id="about" class="relative isolate overflow-hidden min-h-screen flex items-center justify-center pt-28 pb-16 px-4 bg-obsidian-950">
            <!-- Minimal Grid Pattern Background -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#1a1d27_1px,transparent_1px),linear-gradient(to_bottom,#1a1d27_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-30"></div>

            <div class="max-w-4xl mx-auto text-center relative z-10">
                <!-- Dynamic Guest Greeting (Blade Friendly) -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-obsidian-900 border border-gold/40 text-gold text-xs font-medium uppercase tracking-widest mb-8">
                    <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                
                    {{-- <p>
                        Undangan Spesial Untuk:
                    </p> --}}
                    <span>Undangan Spesial Untuk: <strong>{{ $finalName }}</strong></span>
                </div>

                <h1 class="font-heading font-black text-4xl sm:text-6xl lg:text-7xl uppercase tracking-tight text-slate-100 leading-none mb-6">
                    Youth Christmas <br>
                    <span id="typing-text" class="text-gold font-serif italic font-normal capitalize">AOLC Celebration</span> 2026
                </h1>

                <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>

                <p data-blur-reveal class="max-w-2xl mx-auto text-slate-300 text-sm sm:text-base md:text-lg font-normal leading-relaxed mb-10">
                    "Terang itu bercahaya di dalam kegelapan dan kegelapan itu tidak menguasainya."
                    <span class="block mt-2 font-bold text-gold text-xs sm:text-sm tracking-wider uppercase">— Yohanes 1:5</span>
                </p>

                <div data-blur-reveal class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#rsvp" class="w-full sm:w-auto btn-gold px-8 py-4 rounded-xl font-extrabold text-sm uppercase tracking-wider flex items-center justify-center gap-2">
                        <i data-lucide="ticket" class="w-4 h-4"></i> Daftar Sekarang
                    </a>
                    <a href="#details" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-obsidian-900 border border-obsidian-700 text-slate-200 font-bold text-sm hover:border-gold transition-all flex items-center justify-center gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 text-gold"></i> Detail Acara
                    </a>
                </div>
            </div>
        </section>

        <!-- LIVE COUNTDOWN TIMER -->
        <section class="py-10 px-4 relative z-10 bg-obsidian-900 border-y border-obsidian-800">
            <div class="max-w-4xl mx-auto">
                <p class="text-center text-xs font-bold uppercase tracking-widest text-gold mb-6">
                    Hitung Mundur Acara Perayaan
                </p>
                
                <div class="grid grid-cols-4 gap-3 sm:gap-6 text-center">
                    <div data-reveal class="bg-obsidian-950 rounded-xl p-4 sm:p-6 border border-obsidian-800">
                        <span id="cd-days" class="font-heading font-black text-2xl sm:text-4xl text-gold block">00</span>
                        <span class="text-[10px] sm:text-xs text-slate-400 uppercase tracking-widest mt-1 block">Hari</span>
                    </div>
                    <div data-reveal class="bg-obsidian-950 rounded-xl p-4 sm:p-6 border border-obsidian-800">
                        <span id="cd-hours" class="font-heading font-black text-2xl sm:text-4xl text-gold block">00</span>
                        <span class="text-[10px] sm:text-xs text-slate-400 uppercase tracking-widest mt-1 block">Jam</span>
                    </div>
                    <div data-reveal class="bg-obsidian-950 rounded-xl p-4 sm:p-6 border border-obsidian-800">
                        <span id="cd-minutes" class="font-heading font-black text-2xl sm:text-4xl text-gold block">00</span>
                        <span class="text-[10px] sm:text-xs text-slate-400 uppercase tracking-widest mt-1 block">Menit</span>
                    </div>
                    <div data-reveal class="bg-obsidian-950 rounded-xl p-4 sm:p-6 border border-obsidian-800">
                        <span id="cd-seconds" class="font-heading font-black text-2xl sm:text-4xl text-gold block">00</span>
                        <span class="text-[10px] sm:text-xs text-slate-400 uppercase tracking-widest mt-1 block">Detik</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- EVENT DETAILS & LOCATION SECTION -->
        <section id="details" class="py-24 px-4 bg-obsidian-950">
            <div class="max-w-6xl mx-auto">
                <div data-reveal class="text-center mb-16">
                    <span class="text-gold text-xs font-bold uppercase tracking-widest">Informasi Penting</span>
                    <h2 class="font-heading font-black text-3xl sm:text-4xl text-slate-100 uppercase mt-2">Waktu & Tempat</h2>
                    <div class="w-12 h-1 bg-gold mx-auto mt-4"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Date & Time Info Card -->
                    <div data-reveal class="bg-obsidian-900 p-8 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all">
                        <div class="w-12 h-12 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold mb-6">
                            <i data-lucide="calendar" class="w-6 h-6"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-slate-100 mb-1">Jadwal Pelaksanaan</h3>
                        <p class="text-gold font-bold text-base mb-6">Minggu, 13 Desember 2026</p>

                        <ul class="space-y-4 text-sm text-slate-300">
                            <li class="flex items-center gap-3">
                                <i data-lucide="clock" class="w-4 h-4 text-gold"></i>
                                <span>Open Gate: <strong>16.30 WIB</strong></span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="flame" class="w-4 h-4 text-gold"></i>
                                <span>Ibadah & Main Event: <strong>17.00 - 20.00 WIB</strong></span>
                            </li>
                            {{-- <li class="flex items-center gap-3">
                                <i data-lucide="utensils" class="w-4 h-4 text-gold"></i>
                                <span>Youth Fellowship & Snack: <strong>20.30 WIB - Selesai</strong></span>
                            </li> --}}
                        </ul>
                    </div>

                    <!-- Venue Info Card -->
                    <div data-reveal class="bg-obsidian-900 p-8 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold mb-6">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <h3 class="font-heading font-bold text-xl text-slate-100 mb-1">Lokasi Acara</h3>
                            <p class="text-gold font-bold text-base mb-2">GBI CIRARAB</p>
                            <p class="text-slate-300 text-sm leading-relaxed mb-6">
                                Jl. H. Tabri No.8, Cirarab, Kec. Legok, Kabupaten Tangerang, Banten 15820
                            </p>
                        </div>

                        <a href="https://maps.app.goo.gl/TvnjaAZ5Tyb82ttg8" target="_blank" class="w-full btn-gold py-3 rounded-xl text-xs font-bold uppercase tracking-wider text-center flex items-center justify-center gap-2">
                            <i data-lucide="navigation" class="w-4 h-4"></i> Petunjuk Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SCHEDULE / EVENT RUNDOWN TIMELINE -->
        {{-- <section id="schedule" class="py-20 px-4 bg-obsidian-900 border-y border-obsidian-800">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-gold text-xs font-bold uppercase tracking-widest">Rangkaian Acara</span>
                    <h2 class="font-heading font-black text-3xl sm:text-4xl text-slate-100 uppercase mt-2">Event Rundown</h2>
                    <div class="w-12 h-1 bg-gold mx-auto mt-4"></div>
                </div>

                <!-- Timeline -->
                <div class="relative border-l-2 border-gold/30 ml-4 sm:ml-32 space-y-8">
                    <!-- Item 1 -->
                    <div class="relative pl-6 sm:pl-8 group">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-gold border-4 border-obsidian-900"></div>
                        <span class="sm:absolute sm:-left-32 sm:top-1 text-xs font-bold text-gold uppercase tracking-wider block sm:inline mb-1 sm:mb-0">16.30 - 17.30</span>
                        <div class="bg-obsidian-950 p-5 rounded-xl border border-obsidian-800">
                            <h4 class="font-heading font-bold text-slate-100 text-base">Registrasi & Welcoming Photo Booth</h4>
                            <p class="text-xs text-slate-400 mt-1">Penukaran E-Ticket RSVP, foto bersama di Wall of Fame Youth 2026.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="relative pl-6 sm:pl-8 group">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-gold border-4 border-obsidian-900"></div>
                        <span class="sm:absolute sm:-left-32 sm:top-1 text-xs font-bold text-gold uppercase tracking-wider block sm:inline mb-1 sm:mb-0">17.30 - 18.30</span>
                        <div class="bg-obsidian-950 p-5 rounded-xl border border-obsidian-800">
                            <h4 class="font-heading font-bold text-slate-100 text-base">Praise & Worship Session</h4>
                            <p class="text-xs text-slate-400 mt-1">Pujian penyembahan impak oleh Youth Worship Team & Special Band.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="relative pl-6 sm:pl-8 group">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-gold border-4 border-obsidian-900"></div>
                        <span class="sm:absolute sm:-left-32 sm:top-1 text-xs font-bold text-gold uppercase tracking-wider block sm:inline mb-1 sm:mb-0">18.30 - 19.30</span>
                        <div class="bg-obsidian-950 p-5 rounded-xl border border-obsidian-800">
                            <h4 class="font-heading font-bold text-slate-100 text-base">Christmas Message: "LUMINA"</h4>
                            <p class="text-xs text-slate-400 mt-1">Firman Tuhan inspiratif pembawa dampak bagi generasi muda oleh Ps. Daniel Hendra.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="relative pl-6 sm:pl-8 group">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-gold border-4 border-obsidian-900"></div>
                        <span class="sm:absolute sm:-left-32 sm:top-1 text-xs font-bold text-gold uppercase tracking-wider block sm:inline mb-1 sm:mb-0">19.30 - 20.30</span>
                        <div class="bg-obsidian-950 p-5 rounded-xl border border-obsidian-800">
                            <h4 class="font-heading font-bold text-slate-100 text-base">Youth Drama & Candle Light Celebration</h4>
                            <p class="text-xs text-slate-400 mt-1">Pertunjukan seni teater pemuda dan penyalaan lilin Natal bersama.</p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="relative pl-6 sm:pl-8 group">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-gold border-4 border-obsidian-900"></div>
                        <span class="sm:absolute sm:-left-32 sm:top-1 text-xs font-bold text-gold uppercase tracking-wider block sm:inline mb-1 sm:mb-0">20.30 - Selesai</span>
                        <div class="bg-obsidian-950 p-5 rounded-xl border border-obsidian-800">
                            <h4 class="font-heading font-bold text-slate-100 text-base">Fellowship, Dinner & Door Prize</h4>
                            <p class="text-xs text-slate-400 mt-1">Makan malam ramah tamah, pembagian hadiah door prize menarik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- LINEUP SHOWCASE -->
        <section id="lineup" class="py-24 px-4 bg-obsidian-950">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-gold text-xs font-bold uppercase tracking-widest">Pelayan Firman & Pujian</span>
                    <h2 class="font-heading font-black text-3xl sm:text-4xl text-slate-100 uppercase mt-2">Special Lineup</h2>
                    <div class="w-12 h-1 bg-gold mx-auto mt-4"></div>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div data-blur-reveal class="bg-obsidian-900 rounded-2xl overflow-hidden border border-obsidian-800 hover:border-gold transition-all group">
                        <div class="h-64 bg-obsidian-800 relative overflow-hidden">
                            <img loading="lazy" decoding="async" src="/images/pdt-pardjo.webp" alt="Speaker" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-obsidian-950 bg-gold px-2.5 py-1 rounded-md uppercase tracking-wider">Main Speaker</span>
                            <h3 class="font-heading font-bold text-lg text-slate-100 mt-3">Pdt. Supardjo, S.Th</h3>
                            <p class="text-xs text-slate-400 mt-1">Senior Pastor</p>
                        </div>
                    </div>

                    <!-- Card 1 -->
                    <div data-blur-reveal class="bg-obsidian-900 rounded-2xl overflow-hidden border border-obsidian-800 hover:border-gold transition-all group">
                        <div class="h-64 bg-obsidian-800 relative overflow-hidden">
                            <img loading="lazy" decoding="async" src="/images/pdt-tedi.jpg" alt="Speaker" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-obsidian-950 bg-gold px-2.5 py-1 rounded-md uppercase tracking-wider">Main Speaker</span>
                            <h3 class="font-heading font-bold text-lg text-slate-100 mt-3">Pdm. Tedi Agus Susanto, SPAK</h3>
                            <p class="text-xs text-slate-400 mt-1">Youth Pastor & Speaker</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div data-blur-reveal class="bg-obsidian-900 rounded-2xl overflow-hidden border border-obsidian-800 hover:border-gold transition-all group">
                        <div class="h-64 bg-obsidian-800 relative overflow-hidden">
                            <img loading="lazy" decoding="async" src="/images/aolc-worship.jpg" alt="Worship Leader" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale group-hover:grayscale-0 object-top">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-obsidian-950 bg-gold px-2.5 py-1 rounded-md uppercase tracking-wider">Worship Team</span>
                            <h3 class="font-heading font-bold text-lg text-slate-100 mt-3">AOLC Worship Team</h3>
                            <p class="text-xs text-slate-400 mt-1">Youth Praise Team</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    {{-- <div class="bg-obsidian-900 rounded-2xl overflow-hidden border border-obsidian-800 hover:border-gold transition-all group sm:col-span-2 lg:col-span-1">
                        <div class="h-64 bg-obsidian-800 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80" alt="Guest Star" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-obsidian-950 bg-gold px-2.5 py-1 rounded-md uppercase tracking-wider">Special Performance</span>
                            <h3 class="font-heading font-bold text-lg text-slate-100 mt-3">Lumina Youth Drama</h3>
                            <p class="text-xs text-slate-400 mt-1">Creative Arts Ministry</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- DRESS CODE SECTION WITH SOLID COLOR SWATCHES -->
        {{-- <section id="dresscode" class="py-20 px-4 bg-obsidian-900 border-y border-obsidian-800">
            <div class="max-w-4xl mx-auto text-center">
                <span class="text-gold text-xs font-bold uppercase tracking-widest">Panduan Busana</span>
                <h2 class="font-heading font-black text-3xl sm:text-4xl text-slate-100 uppercase mt-2">Dress Code</h2>
                <div class="w-12 h-1 bg-gold mx-auto mt-4 mb-8"></div>

                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-10">
                    Gunakan pakaian rapi & sopan (*Smart Casual / Semi-Formal*) dengan palet warna utama berikut:
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                    <!-- Color 1 -->
                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-[#FFFD74] border-2 border-slate-100 shadow-md mb-3"></div>
                        <span class="font-bold text-xs text-slate-200">Butter Yellow</span>
                        <span class="text-[10px] text-slate-500 mt-1">Warna Utama</span>
                    </div>

                    <!-- Color 2 -->
                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-[#FFFF00] border-2 border-slate-100 shadow-md mb-3"></div>
                        <span class="font-bold text-xs text-slate-200">Yellow</span>
                        <span class="text-[10px] text-slate-500 mt-1">Warna Lain</span>
                    </div>

                    <!-- Color 3 -->
                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-[#D4AF37] border-2 border-gold shadow-md mb-3"></div>
                        <span class="font-bold text-xs text-slate-200">Gold</span>
                        <span class="text-[10px] text-slate-500 mt-1">Warna Alternatif</span>
                    </div>

                    <!-- Color 4 -->
                    <div class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-[#12141C] border-2 border-gold shadow-md mb-3"></div>
                        <span class="font-bold text-xs text-slate-200">Obsidian Black</span>
                        <span class="text-[10px] text-slate-500 mt-1">Netral Gelap</span>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- DRESS CODE SECTION: UNIFIED 4-COLOR SWATCH PALETTE -->
        <section id="dresscode" class="py-20 px-4 bg-obsidian-900 border-y border-obsidian-800">
            <div class="max-w-4xl mx-auto text-center">
                <span class="text-gold text-xs font-bold uppercase tracking-widest">Panduan Busana</span>
                <h2 class="font-heading font-black text-3xl sm:text-4xl text-slate-100 uppercase mt-2">Color Palette</h2>
                <div class="w-12 h-1 bg-gold mx-auto mt-4 mb-6"></div>

                <p class="text-slate-300 text-sm max-w-xl mx-auto mb-10">
                    Padupadankan outfit terbaikmu menggunakan salah satu atau kombinasi dari warna Shades Of Yellow:
                </p>

                <!-- Unified Color Palette Card -->
                <div class="bg-obsidian-950 rounded-3xl border border-obsidian-800 overflow-hidden shadow-xl max-w-3xl mx-auto">
                    <!-- 4-Color Swatch Bar -->
                    <div class="grid grid-cols-2 sm:grid-cols-5">
                        <!-- Swatch 1: Solid Warm Gold -->
                        <div class="group flex flex-col">
                            <div class="h-28 sm:h-36 w-full bg-[#F9F7DC] transition-all duration-300 group-hover:brightness-105 flex items-end justify-between p-3">
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-obsidian-950/80 text-gold">01</span>
                            </div>
                            <div class="p-4 text-left border-b sm:border-b-0 sm:border-r border-obsidian-800">
                                {{-- <span class="font-heading font-bold text-xs sm:text-sm text-slate-100 block">Solid Warm Gold</span> --}}
                                <span class="font-mono text-[11px] text-gold mt-0.5 block">#F9F7DC</span>
                            </div>
                        </div>

                        <!-- Swatch 2: Matte Amber -->
                        <div class="group flex flex-col">
                            <div class="h-28 sm:h-36 w-full bg-[#F7EE9E] transition-all duration-300 group-hover:brightness-105 flex items-end justify-between p-3">
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-obsidian-950/80 text-gold">02</span>
                            </div>
                            <div class="p-4 text-left border-b sm:border-b-0 sm:border-r border-obsidian-800">
                                {{-- <span class="font-heading font-bold text-xs sm:text-sm text-slate-100 block">Matte Amber</span> --}}
                                <span class="font-mono text-[11px] text-gold mt-0.5 block">#F7EE9E</span>
                            </div>
                        </div>

                        <!-- Swatch 3: Clean Ivory White -->
                        <div class="group flex flex-col">
                            <div class="h-28 sm:h-36 w-full bg-[#F8E66B] transition-all duration-300 group-hover:brightness-105 flex items-end justify-between p-3">
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-obsidian-950/80 text-slate-100">03</span>
                            </div>
                            <div class="p-4 text-left border-r border-obsidian-800">
                                {{-- <span class="font-heading font-bold text-xs sm:text-sm text-slate-100 block">Clean Ivory White</span> --}}
                                <span class="font-mono text-[11px] text-slate-400 mt-0.5 block">#F8E66B</span>
                            </div>
                        </div>

                        <!-- Swatch 4: Obsidian Black -->
                        <div class="group flex flex-col">
                            <div class="h-28 sm:h-36 w-full bg-[#F7DC28] border-b border-obsidian-800/80 transition-all duration-300 group-hover:brightness-110 flex items-end justify-between p-3">
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-obsidian-900 border border-obsidian-700 text-slate-300">04</span>
                            </div>
                            <div class="p-4 text-left">
                                {{-- <span class="font-heading font-bold text-xs sm:text-sm text-slate-100 block">Obsidian Black</span> --}}
                                <span class="font-mono text-[11px] text-slate-400 mt-0.5 block">#F7DC28</span>
                            </div>
                        </div>

                        <!-- Swatch 5: Obsidian Black -->
                        <div class="group flex flex-col">
                            <div class="h-28 sm:h-36 w-full bg-[#FDD800] border-b border-obsidian-800/80 transition-all duration-300 group-hover:brightness-110 flex items-end justify-between p-3">
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-obsidian-900 border border-obsidian-700 text-slate-300">05</span>
                            </div>
                            <div class="p-4 text-left">
                                {{-- <span class="font-heading font-bold text-xs sm:text-sm text-slate-100 block">Obsidian Black</span> --}}
                                <span class="font-mono text-[11px] text-slate-400 mt-0.5 block">#FDD800</span>
                            </div>
                        </div>
                    </div>

                    <!-- Unified Styling Note Footer -->
                    <div class="bg-obsidian-900/70 border-t border-obsidian-800 px-6 py-4 flex flex-col sm:flex-row items-center justify-center gap-2 text-xs text-slate-300">
                        <div class="flex items-center gap-2 text-gold font-bold uppercase tracking-wider">
                            <i data-lucide="shirt" class="w-4 h-4"></i>
                            <span>Style Note:</span>
                        </div>
                        <span>Smart Casual / Semi-Formal Youth Outfit (Rapi, Nyaman & Modis)</span>
                    </div>
                </div>
            </div>
        </section>

         <!-- TURUT MENGUNDANG SECTION -->
        <section id="turut-mengundang" class="py-20 px-4 bg-obsidian-900 border-t border-obsidian-800">
            <div class="max-w-4xl mx-auto text-center">
                <span class="text-gold text-xs font-bold uppercase tracking-widest">Dengan Hormat & Kasih</span>
                <h2 class="font-heading font-black text-2xl sm:text-3xl text-slate-100 uppercase mt-2">Turut Mengundang</h2>
                <div class="w-12 h-1 bg-gold mx-auto mt-4 mb-10"></div>


                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 text-left">
                    {{-- <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Youth & Teens</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">GBI Cirarab</h4>
                        </div>
                    </div> --}}

                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Youth & Teens</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">GBI Bojong Kamal</h4>
                        </div>
                    </div>

                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Youth & Teens</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">GBI Sadangan</h4>
                        </div>
                    </div>

                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Youth & Teens</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">GBI Jagabaya</h4>
                        </div>
                    </div>

                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Youth & Teens</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">GBI Parung Panjang</h4>
                        </div>
                    </div>

                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Youth & Teens</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">GBI Milenium City</h4>
                        </div>
                    </div>

                    <div data-blur-reveal class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Youth & Teens</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">GBI Curug</h4>
                        </div>
                    </div>
                    {{-- <!-- Pihak 1: Gembala Sidang -->
                    <div class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="crown" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Gembala Sidang</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">Pdt. Andreas Wijaya, M.Th.</h4>
                        </div>
                    </div>

                    <!-- Pihak 2: Pembina Youth -->
                    <div class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="shield-check" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Pembina Youth</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">Ps. Daniel Hendra</h4>
                        </div>
                    </div>

                    <!-- Pihak 3: Ketua Youth -->
                    <div class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="award" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Ketua Pemuda & Remaja</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">Kevin Pratama</h4>
                        </div>
                    </div>

                    <!-- Pihak 4: Ketua Panitia -->
                    <div class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="star" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Ketua Panitia Natal 2026</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">Clarissa Tanuwijaya</h4>
                        </div>
                    </div>

                    <!-- Pihak 5: Koordinator Komsel -->
                    <div class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="users" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Koordinator Komsel Youth</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">Samuel & Tim Komsel</h4>
                        </div>
                    </div> --}}

                    <!-- Pihak 6: Seluruh Panitia -->
                    {{-- <div class="bg-obsidian-950 p-5 rounded-2xl border border-obsidian-800 hover:border-gold/50 transition-all flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold shrink-0 mt-0.5">
                            <i data-lucide="sparkles" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-gold uppercase tracking-wider block">Pelayan & Panitia</span>
                            <h4 class="font-heading font-bold text-slate-100 text-sm mt-0.5">Seluruh Panitia Lumina 2026</h4>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- COMMUNITY PARALLAX PHOTO SECTION -->
        {{-- <section class="relative min-h-[480px] sm:min-h-[560px] flex items-center justify-center parallax-bg border-y border-obsidian-800 my-0">
            <!-- Dark Gradient Overlay for High Contrast & Text Legibility -->
            <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/75 to-obsidian-950/80"></div>

            <div class="relative z-10 max-w-4xl mx-auto px-6 text-center py-16">
                <!-- Community Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-obsidian-950/90 border border-gold text-gold text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-md">
                    <i data-lucide="users" class="w-4 h-4"></i>
                    <span>Youth Community & Fellowship</span>
                </div>

                <!-- Big Impact Quote -->
                <h2 class="font-heading font-black text-3xl sm:text-5xl lg:text-6xl text-slate-100 uppercase tracking-tight leading-tight mb-6">
                    We Are One Family <br>
                    <span class="text-gold font-serif italic font-normal capitalize">Glorifying God Together</span>
                </h2>

                <div class="w-16 h-1 bg-gold mx-auto mb-6"></div>

                <p class="max-w-2xl mx-auto text-slate-300 text-sm sm:text-base font-normal leading-relaxed mb-8">
                    Natal bukan sekadar selebrasi tahunan, melainkan momen kita bersatu sebagai satu generasi muda yang berdampak dan memancarkan terang Kasih Kristus.
                </p>

                <div class="flex flex-wrap items-center justify-center gap-6 text-xs sm:text-sm font-semibold text-slate-300">
                    <span class="flex items-center gap-2 bg-obsidian-900/80 px-4 py-2 rounded-xl border border-obsidian-700 backdrop-blur-sm">
                        <i data-lucide="heart" class="w-4 h-4 text-gold"></i> Authentic Fellowship
                    </span>
                    <span class="flex items-center gap-2 bg-obsidian-900/80 px-4 py-2 rounded-xl border border-obsidian-700 backdrop-blur-sm">
                        <i data-lucide="sparkles" class="w-4 h-4 text-gold"></i> Impactful Ministry
                    </span>
                    <span class="flex items-center gap-2 bg-obsidian-900/80 px-4 py-2 rounded-xl border border-obsidian-700 backdrop-blur-sm">
                        <i data-lucide="smile" class="w-4 h-4 text-gold"></i> Warm Community
                    </span>
                </div>
            </div>
        </section> --}}

        <!-- RSVP FORM SECTION -->
        <!-- RESERVATION / RSVP SECTION (GOOGLE FORM LINK + SYNCED QR CODE) -->
        @php
            $rsvpFormUrl = 'https://docs.google.com/forms/d/e/1FAIpQLSdHCaV3pvk391ZXPpdvRGuSgubva8zwDKpWImxAvTuqswkVkA/viewform';
        @endphp
        <section id="rsvp" class="py-24 px-4 bg-obsidian-950 border-b border-obsidian-800 relative">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-14">
                    <span class="text-gold text-xs font-bold uppercase tracking-widest">Konfirmasi Kehadiran</span>
                    <h2 class="font-heading font-black text-3xl sm:text-4xl text-slate-100 uppercase mt-2">Reservasi Tempat</h2>
                    <div class="w-12 h-1 bg-gold mx-auto mt-4 mb-5"></div>
                    <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto leading-relaxed">
                        Pastikan kehadiranmu di perayaan Natal Youth AOLC Cirarab 2026 dengan mengisi formulir registrasi online atau memindai QR Code di bawah ini.
                    </p>
                </div>

                <div class="grid md:grid-cols-5 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Column: Direct Google Form CTA Card -->
                    <div class="md:col-span-3 max-w-100 sm:max-w-none bg-obsidian-900 p-7 sm:p-10 rounded-3xl border border-obsidian-800 hover:border-gold/50 transition-all flex flex-col justify-between shadow-2xl">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-gold/10 border border-gold/30 text-gold text-xs font-bold uppercase tracking-wider mb-6">
                                <i data-lucide="clipboard-check" class="w-3.5 h-3.5"></i>
                                <span>Registrasi Online</span>
                            </div>

                            <h3 class="font-heading font-black text-2xl sm:text-3xl text-xl text-slate-100 leading-snug mb-3">
                                Daftar Melalui Google Form
                            </h3>
                            <p class="text-slate-300 text-sm leading-relaxed mb-6">
                                Klik tombol di bawah untuk langsung membuka formulir pendaftaran resmi. Pengisian hanya membutuhkan waktu kurang dari 1 menit.
                            </p>

                            <ul class="space-y-3 text-xs sm:text-sm text-slate-300 mb-8">
                                <li class="flex items-center gap-3">
                                    <span class="w-5 h-5 rounded-full bg-gold/15 text-gold flex items-center justify-center shrink-0">
                                        <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                    </span>
                                    <span>Terbuka untuk seluruh Youth & Teens</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="w-5 h-5 rounded-full bg-gold/15 text-gold flex items-center justify-center shrink-0">
                                        <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                    </span>
                                    <span>Pendataan konsumsi & tempat duduk acara</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="w-5 h-5 rounded-full bg-gold/15 text-gold flex items-center justify-center shrink-0">
                                        <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                    </span>
                                    <span>Dapat diisi secara individu maupun rombongan gereja</span>
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-3 w-full max-w-100 sm:max-w-none">
                            <a id="rsvpDirectBtn" href="{{ $rsvpFormUrl }}" target="_blank" rel="noopener noreferrer"
                               class="w-full py-4 px-6 rounded-2xl bg-gold hover:bg-amber-400 active:scale-[0.99] text-obsidian-950 font-black text-xs sm:text-sm uppercase tracking-wider transition-all flex items-center justify-center gap-2.5 shadow-lg">
                                <span>Isi Google Form</span>
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>

                            <div class="flex items-center justify-between gap-2 bg-obsidian-950 px-4 py-2.5 rounded-xl border border-obsidian-800 overflow-hidden w-full">
                                <span id="rsvpUrlDisplay" class="hidden sm:inline-block text-xs font-mono text-slate-400 truncate">{{ $rsvpFormUrl }}</span>
                                <button type="button" onclick="copyRsvpLink()" id="copyRsvpBtn" class="shrink-0 inline-flex items-center gap-1.5 text-xs font-bold text-gold hover:text-amber-300 transition-colors px-2 py-1">
                                    <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                                    <span id="copyRsvpText">Salin Link</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: High-Contrast Synced QR Code Card -->
                    <div class="md:col-span-2 max-w-100 sm:max-w-none bg-obsidian-900 p-7 sm:p-8 rounded-3xl border border-obsidian-800 hover:border-gold/50 transition-all flex flex-col items-center justify-between text-center shadow-2xl">
                        <div class="w-full">
                            <span class="text-[11px] font-bold uppercase tracking-widest text-gold block">Scan QR Code</span>
                            <p class="text-xs text-slate-400 mt-1">Arahkan kamera HP untuk membuka link pendaftaran</p>
                        </div>

                        <!-- High-Contrast White Frame for Reliable Scanning -->
                        <div class="my-6 p-4 bg-white rounded-2xl border-4 border-gold shadow-xl inline-flex items-center justify-center relative group cursor-pointer" onclick="openQrModal()" title="Ketuk untuk memperbesar QR Code">
                            <div id="rsvpQrCode" class="w-[176px] h-[176px] flex items-center justify-center"></div>
                        </div>

                        <div class="w-full grid grid-cols-2 gap-2.5">
                            <button type="button" onclick="openQrModal()" class="py-2.5 px-3 rounded-xl bg-obsidian-950 border border-obsidian-700 hover:border-gold text-slate-200 hover:text-gold text-xs font-bold transition-all flex items-center justify-center gap-1.5">
                                <i data-lucide="maximize-2" class="w-3.5 h-3.5 text-gold"></i>
                                <span>Perbesar</span>
                            </button>
                            <button type="button" onclick="downloadQrCode()" class="py-2.5 px-3 rounded-xl bg-obsidian-950 border border-obsidian-700 hover:border-gold text-slate-200 hover:text-gold text-xs font-bold transition-all flex items-center justify-center gap-1.5">
                                <i data-lucide="download" class="w-3.5 h-3.5 text-gold"></i>
                                <span>Simpan QR</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LARAVEL BLADE INTEGRATION CODE MODAL / HELPER -->
        {{-- <section class="py-12 px-4 bg-obsidian-900 border-t border-obsidian-800">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 text-gold text-xs font-bold uppercase tracking-widest mb-3">
                    <i data-lucide="code" class="w-4 h-4"></i> Panduan Developer Laravel Blade
                </div>
                <p class="text-slate-400 text-xs leading-relaxed max-w-2xl mx-auto">
                    File HTML ini disiapkan agar langsung modular di Blade. Kamu dapat mengganti variabel penerima dengan 
                    <code class="text-gold font-mono">&amp;lbrace;&amp;lbrace; $guestName &amp;rbrace;&amp;rbrace;</code> dan menyimpannya di folder <code class="text-gold font-mono">resources/views/invitation.blade.php</code>.
                </p>
            </div>
        </section> --}}

        <div class="gallery-wrap">
            <div class="gallery gallery--bento gallery--switch" id="gallery-8">
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/carousel/IMG_6161.webp" alt="" />
                </div>
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/carousel/IMG_6160.JPG.webp" alt="" />
                </div>
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/carousel/IMG_6157.webp" alt="" />
                </div>
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/carousel/IMG_6159.webp" alt="" />
                </div>
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/carousel/IMG_6156.webp" alt="" />
                </div>
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/aolc.webp" alt="" />
                </div>
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/carousel/IMG_6158.webp" alt="" />
                </div>
                <div class="gallery__item">
                <img loading="lazy" decoding="async" src="/images/pdt-pardjo.webp" alt="" />
                </div>

            </div>
            </div>
            <div class="section">
                <div class="relative z-10 max-w-4xl mx-auto px-6 text-center py-16">
                    <!-- Community Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-obsidian-950/90 border border-gold text-gold text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-md">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>Youth Community & Fellowship</span>
                    </div>

                    <!-- Big Impact Quote -->
                    <h2 class="font-heading font-black text-3xl sm:text-5xl lg:text-6xl text-slate-100 uppercase tracking-tight leading-tight mb-6">
                        We Are One Family <br>
                        <span class="text-gold font-serif italic font-normal capitalize">Glorifying God Together</span>
                    </h2>

                    <div class="w-16 h-1 bg-gold mx-auto mb-6"></div>

                    <p class="max-w-2xl mx-auto text-slate-300 text-sm sm:text-base font-normal leading-relaxed mb-8">
                        Natal bukan sekadar selebrasi tahunan, melainkan momen kita bersatu sebagai satu generasi muda yang berdampak dan memancarkan terang Kasih Kristus.
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-6 text-xs sm:text-sm font-semibold text-slate-300">
                        <span class="flex items-center gap-2 bg-obsidian-900/80 px-4 py-2 rounded-xl border border-obsidian-700 backdrop-blur-sm">
                            <i data-lucide="heart" class="w-4 h-4 text-gold"></i> Authentic Fellowship
                        </span>
                        <span class="flex items-center gap-2 bg-obsidian-900/80 px-4 py-2 rounded-xl border border-obsidian-700 backdrop-blur-sm">
                            <i data-lucide="sparkles" class="w-4 h-4 text-gold"></i> Impactful Ministry
                        </span>
                        <span class="flex items-center gap-2 bg-obsidian-900/80 px-4 py-2 rounded-xl border border-obsidian-700 backdrop-blur-sm">
                            <i data-lucide="smile" class="w-4 h-4 text-gold"></i> Warm Community
                        </span>
                    </div>
                </div>
            </div>

        <!-- COMMUNITY PHOTO GALLERY SECTION (DITAMBAHKAN DI PALING BAWAH SEBELUM FOOTER) -->
        <section class="py-20 px-4 bg-obsidian-950 border-t border-obsidian-800 overflow-hidden">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-gold text-xs font-bold uppercase tracking-widest">DOCUMENTATION</span>
                    <h2 class="font-heading font-black text-2xl sm:text-3xl text-slate-100 uppercase mt-2">OUR CHRISTMAS JOURNEY</h2>
                    <div class="w-12 h-1 bg-gold mx-auto mt-4"></div>
                </div>

                <!-- Carousel 1.5 Column Wrapper -->
                <div class="relative">
                    <div id="communityCarousel" class="flex gap-6 overflow-x-auto no-scrollbar snap-x snap-mandatory scroll-smooth pb-4 px-2">
                        <!-- Slide 2 -->
                        <div class="min-w-[85%] sm:min-w-[65%] lg:min-w-[48%] snap-start aspect-video rounded-2xl overflow-hidden border border-obsidian-800 bg-obsidian-900 group cursor-pointer shadow-lg" onclick="openLightbox('/images/carousel/IMG_6161.webp')">
                            <img  
                                loading="lazy"
                                decoding="async" 
                                src="/images/carousel/IMG_6161.webp" alt="Gallery 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <!-- Slide 1 -->
                        <div class="min-w-[85%] sm:min-w-[65%] lg:min-w-[48%] snap-start aspect-video rounded-2xl overflow-hidden border border-obsidian-800 bg-obsidian-900 group cursor-pointer shadow-lg" onclick="openLightbox('/images/carousel/IMG_6160.JPG.webp')">
                            <img  loading="lazy" decoding="async" src="/images/carousel/IMG_6160.JPG.webp" alt="Gallery 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="min-w-[85%] sm:min-w-[65%] lg:min-w-[48%] snap-start aspect-video rounded-2xl overflow-hidden border border-obsidian-800 bg-obsidian-900 group cursor-pointer shadow-lg" onclick="openLightbox('/images/carousel/IMG_6159.webp')">
                            <img loading="lazy" decoding="async" src="/images/carousel/IMG_6159.webp" alt="Gallery 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <!-- Slide 1 -->
                        <div class="min-w-[85%] sm:min-w-[65%] lg:min-w-[48%] snap-start aspect-video rounded-2xl overflow-hidden border border-obsidian-800 bg-obsidian-900 group cursor-pointer shadow-lg" onclick="openLightbox('/images/carousel/IMG_6156.webp')">
                            <img  loading="lazy" decoding="async" src="/images/carousel/IMG_6156.webp" alt="Gallery 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <!-- Slide 2 -->
                        <div class="min-w-[85%] sm:min-w-[65%] lg:min-w-[48%] snap-start aspect-video rounded-2xl overflow-hidden border border-obsidian-800 bg-obsidian-900 group cursor-pointer shadow-lg" onclick="openLightbox('/images/carousel/IMG_6157.webp')">
                            <img  loading="lazy" decoding="async" src="/images/carousel/IMG_6157.webp" alt="Gallery 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <!-- Slide 3 -->
                        <div class="min-w-[85%] sm:min-w-[65%] lg:min-w-[48%] snap-start aspect-video rounded-2xl overflow-hidden border border-obsidian-800 bg-obsidian-900 group cursor-pointer shadow-lg" onclick="openLightbox('/images/carousel/IMG_6158.webp')">
                            <img  loading="lazy" decoding="async" src="/images/carousel/IMG_6158.webp" alt="Gallery 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <!-- Slide 4 -->
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="py-12 px-4 bg-obsidian-950 border-t border-obsidian-800 text-center">
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="flex justify-center items-center gap-2">
                    <i data-lucide="sparkle" class="w-5 h-5 text-gold fill-current"></i>
                    <span class="font-heading font-black text-lg tracking-wider text-slate-100">YOUTH CHRISTMAS AOLC CIRARAB 2026</span>
                </div>
                <p class="text-sm text-slate-500">Made With ❤️ By <a target="_blank" href="https://www.instagram.com/elbiworks/" class="underline hover:no-underline text-gold">Elbiworks</a></p>
                <p class="text-xs text-slate-600">&copy; {{ date('Y') }} Elbiworks. All Rights Reserved.</p>
            </div>
        </footer>

        <!-- RSVP CONFIRMATION MODAL -->
        <div id="rsvpModal" class="fixed inset-0 bg-obsidian-950/90 backdrop-blur-md z-50 hidden flex items-center justify-center p-4">
            <div class="bg-obsidian-900 border border-gold/40 p-8 rounded-3xl max-w-md w-full text-center space-y-4">
                <div class="w-14 h-14 bg-gold text-obsidian-950 rounded-full flex items-center justify-center mx-auto">
                    <i data-lucide="check-circle" class="w-8 h-8"></i>
                </div>
                <h3 class="font-heading font-bold text-xl text-slate-100">RSVP Berhasil Terkirim!</h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Terima kasih telah melakukan konfirmasi kehadiran. Tempat kamu telah terdata di sistem kami. Sampai jumpa di acara!
                </p>
                <button onclick="closeRsvpModal()" class="w-full btn-gold py-3 rounded-xl font-bold text-xs uppercase tracking-wider">
                    Tutup Window
                </button>
            </div>
        </div>

        {{-- Modal --}}
        <!-- Welcome Modal -->
        <div
            id="welcome-modal"
            class="fixed inset-0 z-[9999] flex items-center justify-center
                bg-[#111111] text-white"
        >
            <div class="relative z-10 mx-6 max-w-lg text-center">

                @if ($modalStatus === 'invitation')
                    @include('partials.modal-invitation')
                @elseif ($modalStatus === 'celebration')
                    @include('partials.modal-celebration')
                @else
                    @include('partials.modal-thankyou')
                @endif

                <button
                    id="enter-website"
                    class="rounded-full bg-amber-500 px-8 py-3
                        text-sm font-semibold uppercase tracking-widest
                        text-black transition hover:bg-amber-400
                        hover:scale-105"
                >
                    Buka {{ $modalStatus == "thankyou" ? "Website" : "Undangan" }}
                </button>

                <p class="mt-4 text-xs text-gray-500">
                    Click to enter with music
                </p>
            </div>
        </div>

        <!-- LIGHTBOX MODAL UNTUK ZOOM FOTO -->
        <div id="lightboxModal" class="fixed inset-0 z-50 bg-black/90 hidden flex items-center justify-center p-4">
            <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white text-3xl hover:text-gold z-50 focus:outline-none">
                <i data-lucide="x" class="w-8 h-8"></i>
            </button>
            <div class="relative max-w-5xl w-full max-h-[90vh] flex items-center justify-center overflow-hidden">
                <img id="lightboxImg" src="" alt="Zoomed Photo" class="max-h-[85vh] max-w-full object-contain rounded-xl transition-transform duration-300 scale-100 cursor-zoom-in shadow-2xl" onclick="toggleZoom(this)">
            </div>
        </div>
        

         <!-- ENLARGED QR CODE MODAL -->
        <div id="qrModal" class="fixed inset-0 bg-black/90 z-50 hidden flex items-center justify-center p-4" onclick="if(event.target === this) closeQrModal()">
            <div class="bg-obsidian-900 border border-gold/50 rounded-3xl p-6 sm:p-8 max-w-sm w-full text-center relative shadow-2xl">
                <button type="button" onclick="closeQrModal()" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-obsidian-800 hover:bg-gold hover:text-obsidian-950 text-slate-300 flex items-center justify-center transition-colors" aria-label="Tutup">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
                <span class="text-[11px] font-bold uppercase tracking-widest text-gold block">AOLC Cirarab Christmas 2026</span>
                <h3 class="font-heading font-black text-xl text-slate-100 mt-1 mb-5">Scan Untuk Reservasi</h3>

                <div class="p-5 bg-white rounded-2xl border-4 border-gold inline-flex items-center justify-center shadow-xl mx-auto">
                    <div id="rsvpQrCodeLarge" class="w-[240px] h-[240px] flex items-center justify-center"></div>
                </div>

                <p class="text-xs text-slate-400 mt-4 mb-5 break-all font-mono">{{ $rsvpFormUrl }}</p>

                <div class="grid grid-cols-2 gap-3">
                    <button type="button" onclick="downloadQrCode()" class="py-3 px-4 rounded-xl bg-gold hover:bg-amber-400 text-obsidian-950 font-extrabold text-xs uppercase tracking-wider flex items-center justify-center gap-1.5">
                        <i data-lucide="download" class="w-4 h-4"></i> Simpan QR
                    </button>
                    <a href="{{ $rsvpFormUrl }}" target="_blank" rel="noopener noreferrer" class="py-3 px-4 rounded-xl bg-obsidian-800 hover:bg-obsidian-700 text-slate-100 font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-1.5">
                        <i data-lucide="external-link" class="w-4 h-4 text-gold"></i> Buka Link
                    </a>
                </div>
            </div>
        </div>

        <audio id="bg-music" loop preload="none">
            <source src="{{ asset('audio/bg-song-2.mpeg') }}" type="audio/mpeg">
        </audio>

        <!-- JAVASCRIPT CODE -->
        <script>
            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');

            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Countdown Timer Logic (Dec 19, 2026 17:30:00 WIB)
            const targetEventDate = new Date("December 13, 2026 17:00:00").getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const diff = targetEventDate - now;

                if (diff > 0) {
                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                    document.getElementById('cd-days').innerText = days < 10 ? '0' + days : days;
                    document.getElementById('cd-hours').innerText = hours < 10 ? '0' + hours : hours;
                    document.getElementById('cd-minutes').innerText = minutes < 10 ? '0' + minutes : minutes;
                    document.getElementById('cd-seconds').innerText = seconds < 10 ? '0' + seconds : seconds;
                } else {
                    document.getElementById('cd-days').innerText = '00';
                    document.getElementById('cd-hours').innerText = '00';
                    document.getElementById('cd-minutes').innerText = '00';
                    document.getElementById('cd-seconds').innerText = '00';
                }
            }

            setInterval(updateCountdown, 1000);
            updateCountdown();

            // Synced Google Form QR Code & Clipboard/Download Helpers
            const rsvpFormUrl = document.getElementById('rsvpDirectBtn').getAttribute('href');

            function initRsvpQrCodes() {
                if (typeof QRCode === 'undefined') return;
                const qrSmallEl = document.getElementById('rsvpQrCode');
                const qrLargeEl = document.getElementById('rsvpQrCodeLarge');

                if (qrSmallEl) {
                    qrSmallEl.innerHTML = '';
                    new QRCode(qrSmallEl, {
                        text: rsvpFormUrl,
                        width: 176,
                        height: 176,
                        colorDark: '#161618',
                        colorLight: '#FFFFFF',
                        correctLevel: QRCode.CorrectLevel.H
                    });
                }
                if (qrLargeEl) {
                    qrLargeEl.innerHTML = '';
                    new QRCode(qrLargeEl, {
                        text: rsvpFormUrl,
                        width: 240,
                        height: 240,
                        colorDark: '#161618',
                        colorLight: '#FFFFFF',
                        correctLevel: QRCode.CorrectLevel.H
                    });
                }
            }
            initRsvpQrCodes();

            function copyRsvpLink() {
                const tempInput = document.createElement('input');
                tempInput.value = rsvpFormUrl;
                document.body.appendChild(tempInput);
                tempInput.select();
                tempInput.setSelectionRange(0, 99999);
                document.execCommand('copy');
                document.body.removeChild(tempInput);

                const copyText = document.getElementById('copyRsvpText');
                copyText.innerText = 'Tersalin!';
                setTimeout(() => {
                    copyText.innerText = 'Salin Link';
                }, 2000);
            }

            function openQrModal() {
                document.getElementById('qrModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeQrModal() {
                document.getElementById('qrModal').classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            function downloadQrCode() {
                const qrCanvas = document.querySelector('#rsvpQrCodeLarge canvas') || document.querySelector('#rsvpQrCode canvas');
                const qrImg = document.querySelector('#rsvpQrCodeLarge img') || document.querySelector('#rsvpQrCode img');
                const link = document.createElement('a');
                link.download = 'QR-Reservasi-AOLC-Christmas-2026.png';

                if (qrCanvas) {
                    link.href = qrCanvas.toDataURL('image/png');
                    link.click();
                } else if (qrImg && qrImg.src) {
                    link.href = qrImg.src;
                    link.click();
                }
            }

            // // Audio Ambient Sound Simulator Toggle
            // let isPlaying = false;
            // const musicToggle = document.getElementById('musicToggle');
            
            // musicToggle.addEventListener('click', () => {
            //     isPlaying = !isPlaying;
            //     if (isPlaying) {
            //         musicToggle.classList.add('bg-gold', 'text-obsidian-950');
            //         musicToggle.classList.remove('bg-obsidian-800', 'text-gold');
            //         console.log("Playing ambient Christmas music...");
            //     } else {
            //         musicToggle.classList.remove('bg-gold', 'text-obsidian-950');
            //         musicToggle.classList.add('bg-obsidian-800', 'text-gold');
            //         console.log("Paused ambient Christmas music.");
            //     }
            // });

            // // Form Submit & Modal
            // const rsvpForm = document.getElementById('rsvpForm');
            // const rsvpModal = document.getElementById('rsvpModal');

            // rsvpForm.addEventListener('submit', (e) => {
            //     e.preventDefault();
            //     rsvpModal.classList.remove('hidden');
            //     rsvpForm.reset();
            // });

            // function closeRsvpModal() {
            //     rsvpModal.classList.add('hidden');
            // }

            // Carousel
            // Auto-Slide Carousel 1.5 Kolom
            const carousel = document.getElementById('communityCarousel');
            let autoSlide = setInterval(() => {
                if (carousel) {
                    if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 10) {
                        carousel.scrollTo({ left: 0, behavior: 'smooth' });
                    } else {
                        carousel.scrollBy({ left: carousel.clientWidth * 0.6, behavior: 'smooth' });
                    }
                }
            }, 3500);

            // Pause auto-slide on hover/touch
            carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
            carousel.addEventListener('mouseleave', () => {
                autoSlide = setInterval(() => {
                    if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 10) {
                        carousel.scrollTo({ left: 0, behavior: 'smooth' });
                    } else {
                        carousel.scrollBy({ left: carousel.clientWidth * 0.6, behavior: 'smooth' });
                    }
                }, 3500);
            });

            // Lightbox Zoom Functions
            function openLightbox(src) {
                const modal = document.getElementById('lightboxModal');
                const img = document.getElementById('lightboxImg');
                img.src = src;
                img.classList.remove('scale-150');
                img.style.cursor = 'zoom-in';
                modal.classList.remove('hidden');
            }

            function closeLightbox() {
                document.getElementById('lightboxModal').classList.add('hidden');
            }

            function toggleZoom(img) {
                if (img.classList.contains('scale-150')) {
                    img.classList.remove('scale-150');
                    img.style.cursor = 'zoom-in';
                } else {
                    img.classList.add('scale-150');
                    img.style.cursor = 'zoom-out';
                }
            }
        </script>
    </body>
</html>
