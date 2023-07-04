<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- PWA  -->
        <meta name="theme-color" content="#6777ef"/>
        <link rel="apple-touch-icon" href="{{ asset('app.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('backend/img/favicon.png')}}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>
            </div>
        </nav>
    </header>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Documentation</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laracasts</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laravel News</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="{{asset('backend/img/1.png')}}" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Tentang CepatTanggap
                    </h2>

                    <p class="about__description">
                        CepatTanggap merupakan inovasi dalam layanan kesehatan yang berfokus pada proses pemesanan
                        ambulans dan tenaga kesehatan secara online. CepatTanggap memungkinkan tiap pengguna nya untuk
                        dapat memesan ambulans yang terdekat dari lokasi nya, dan juga memungkinkan tiap pengguna untuk
                        meminta tenaga kesehatan datang ke rumah untuk melakukan pengecekan kesehatan, pemberian
                        obat-obatan, atau pemberian fasilitas kesehatan.
                    </p>
                </div>
            </div>
        </section>

        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="faqs">
            <h2 class="section__title-center questions__title container">
                Beberapa pertanyaan <br> Yang sering diajukan
            </h2>

            <div class="questions__container container grid">
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Berapa lama waktu yang dibutuhkan ambulans untuk sampai ke lokasi saya?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Karena berbasis lokasi, maka sistem akan mencarikan pusat kesehatan dengan layanan ambulans yang paling dekat dengan lokasi anda.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah ada batasan jarak atau area layanan ambulans online ini?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Karena sistem ini masih dalam tahap pengembangan, jadi untuk saat ini baru ada beberapa desa saja yang dapat kami layani.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah saya dapat meminta ambulans dengan fitur khusus, seperti defibrilator atau peralatan medis lainnya?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Tentu saja, pada saat pemesanan ambulans anda nantinya akan diberi opsi untuk meminta peralatan medis tertentu.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Bagaimana jika saya perlu membatalkan pemesanan ambulans?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Anda dapat menghubungi pusat bantuan untuk dapat melakukan pembatalan pemesanan.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah ada biaya yang harus dibayar untuk menggunakan layanan ambulans online ini?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Anda hanya perlu membayar biaya layanan ambulans secara normal, mengikuti peraturan & undang-undang yang berlaku tanpa ada biaya tambahan dari aplikasi.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah sistem ini menghubungkan langsung ke rumah sakit atau pusat kesehatan terdekat?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Benar, begitu anda menekan tombol 'Panggil Ambulans' maka secara otomatis sistem akan mengirim panggilan anda ke rumah sakit atau pusat kesehatan yang terdekat dari lokasi anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <img src="{{asset('backend/img/1.png')}}" alt="" width="140px" height="200px">
                </a>

                <h3 class="footer__title">
                    Inovasi Pelayanan Kesehatan
                </h3>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Alamat</h3>

                <ul class="footer__data">
                    <li class="footer__information">68487-Taman Suruh, Bangorejo, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Kontak</h3>

                <ul class="footer__data">
                    <li class="footer__information">+1 234 567 890</li>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; Aone. All rigths reserved</p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script>
        /*! @license ScrollReveal v4.0.9

	Copyright 2021 Fisssion LLC.

	Licensed under the GNU General Public License 3.0 for
	compatible open source projects and non-commercial use.

	For commercial sites, themes, projects, and applications,
	keep your source code private/proprietary by purchasing
	a commercial license from https://scrollrevealjs.org/
*/
        var ScrollReveal = function() {
            "use strict";
            var r = {
                delay: 0,
                distance: "0",
                duration: 600,
                easing: "cubic-bezier(0.5, 0, 0, 1)",
                interval: 0,
                opacity: 0,
                origin: "bottom",
                rotate: {
                    x: 0,
                    y: 0,
                    z: 0
                },
                scale: 1,
                cleanup: !1,
                container: document.documentElement,
                desktop: !0,
                mobile: !0,
                reset: !1,
                useDelay: "always",
                viewFactor: 0,
                viewOffset: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                afterReset: function() {},
                afterReveal: function() {},
                beforeReset: function() {},
                beforeReveal: function() {}
            };
            var n = {
                success: function() {
                    document.documentElement.classList.add("sr"), document.body ? document.body.style.height = "100%" : document.addEventListener("DOMContentLoaded", function() {
                        document.body.style.height = "100%"
                    })
                },
                failure: function() {
                    return document.documentElement.classList.remove("sr"), {
                        clean: function() {},
                        destroy: function() {},
                        reveal: function() {},
                        sync: function() {},
                        get noop() {
                            return !0
                        }
                    }
                }
            };

            function o(e) {
                return "object" == typeof window.Node ? e instanceof window.Node : null !== e && "object" == typeof e && "number" == typeof e.nodeType && "string" == typeof e.nodeName
            }

            function u(e, t) {
                if (void 0 === t && (t = document), e instanceof Array) return e.filter(o);
                if (o(e)) return [e];
                if (n = e, i = Object.prototype.toString.call(n), "object" == typeof window.NodeList ? n instanceof window.NodeList : null !== n && "object" == typeof n && "number" == typeof n.length && /^\[object (HTMLCollection|NodeList|Object)\]$/.test(i) && (0 === n.length || o(n[0]))) return Array.prototype.slice.call(e);
                var n, i;
                if ("string" == typeof e) try {
                    var r = t.querySelectorAll(e);
                    return Array.prototype.slice.call(r)
                } catch (e) {
                    return []
                }
                return []
            }

            function s(e) {
                return null !== e && e instanceof Object && (e.constructor === Object || "[object Object]" === Object.prototype.toString.call(e))
            }

            function f(n, i) {
                if (s(n)) return Object.keys(n).forEach(function(e) {
                    return i(n[e], e, n)
                });
                if (n instanceof Array) return n.forEach(function(e, t) {
                    return i(e, t, n)
                });
                throw new TypeError("Expected either an array or object literal.")
            }

            function h(e) {
                for (var t = [], n = arguments.length - 1; 0 < n--;) t[n] = arguments[n + 1];
                if (this.constructor.debug && console) {
                    var i = "%cScrollReveal: " + e;
                    t.forEach(function(e) {
                        return i += "\n — " + e
                    }), console.log(i, "color: #ea654b;")
                }
            }

            function t() {
                var n = this,
                    i = {
                        active: [],
                        stale: []
                    },
                    t = {
                        active: [],
                        stale: []
                    },
                    r = {
                        active: [],
                        stale: []
                    };
                try {
                    f(u("[data-sr-id]"), function(e) {
                        var t = parseInt(e.getAttribute("data-sr-id"));
                        i.active.push(t)
                    })
                } catch (e) {
                    throw e
                }
                f(this.store.elements, function(e) {
                    -1 === i.active.indexOf(e.id) && i.stale.push(e.id)
                }), f(i.stale, function(e) {
                    return delete n.store.elements[e]
                }), f(this.store.elements, function(e) {
                    -1 === r.active.indexOf(e.containerId) && r.active.push(e.containerId), e.hasOwnProperty("sequence") && -1 === t.active.indexOf(e.sequence.id) && t.active.push(e.sequence.id)
                }), f(this.store.containers, function(e) {
                    -1 === r.active.indexOf(e.id) && r.stale.push(e.id)
                }), f(r.stale, function(e) {
                    var t = n.store.containers[e].node;
                    t.removeEventListener("scroll", n.delegate), t.removeEventListener("resize", n.delegate), delete n.store.containers[e]
                }), f(this.store.sequences, function(e) {
                    -1 === t.active.indexOf(e.id) && t.stale.push(e.id)
                }), f(t.stale, function(e) {
                    return delete n.store.sequences[e]
                })
            }

            function N(e) {
                if (e.constructor !== Array) throw new TypeError("Expected array.");
                if (16 === e.length) return e;
                if (6 !== e.length) throw new RangeError("Expected array with either 6 or 16 values.");
                var t = z();
                return t[0] = e[0], t[1] = e[1], t[4] = e[2], t[5] = e[3], t[12] = e[4], t[13] = e[5], t
            }

            function z() {
                for (var e = [], t = 0; t < 16; t++) t % 5 == 0 ? e.push(1) : e.push(0);
                return e
            }

            function F(e, t) {
                for (var n = N(e), i = N(t), r = [], o = 0; o < 4; o++)
                    for (var s = [n[o], n[o + 4], n[o + 8], n[o + 12]], a = 0; a < 4; a++) {
                        var c = 4 * a,
                            l = [i[c], i[c + 1], i[c + 2], i[c + 3]],
                            d = s[0] * l[0] + s[1] * l[1] + s[2] * l[2] + s[3] * l[3];
                        r[o + c] = d
                    }
                return r
            }

            function D(e, t) {
                var n = z();
                return n[0] = e, n[5] = "number" == typeof t ? t : e, n
            }
            var S = function() {
                var n = {},
                    i = document.documentElement.style;

                function e(e, t) {
                    if (void 0 === t && (t = i), e && "string" == typeof e) {
                        if (n[e]) return n[e];
                        if ("string" == typeof t[e]) return n[e] = e;
                        if ("string" == typeof t["-webkit-" + e]) return n[e] = "-webkit-" + e;
                        throw new RangeError('Unable to find "' + e + '" style property.')
                    }
                    throw new TypeError("Expected a string.")
                }
                return e.clearCache = function() {
                    return n = {}
                }, e
            }();

            function p(e) {
                var t = window.getComputedStyle(e.node),
                    n = t.position,
                    i = e.config,
                    r = {},
                    o = (e.node.getAttribute("style") || "").match(/[\w-]+\s*:\s*[^;]+\s*/gi) || [];
                r.computed = o ? o.map(function(e) {
                    return e.trim()
                }).join("; ") + ";" : "", r.generated = o.some(function(e) {
                    return e.match(/visibility\s?:\s?visible/i)
                }) ? r.computed : o.concat(["visibility: visible"]).map(function(e) {
                    return e.trim()
                }).join("; ") + ";";
                var s, a, c, l, d, u, f, h, p, m, y, v, g, b = parseFloat(t.opacity),
                    w = isNaN(parseFloat(i.opacity)) ? parseFloat(t.opacity) : parseFloat(i.opacity),
                    E = {
                        computed: b !== w ? "opacity: " + b + ";" : "",
                        generated: b !== w ? "opacity: " + w + ";" : ""
                    },
                    j = [];
                if (parseFloat(i.distance)) {
                    var T = "top" === i.origin || "bottom" === i.origin ? "Y" : "X",
                        k = i.distance;
                    "top" !== i.origin && "left" !== i.origin || (k = /^-/.test(k) ? k.substr(1) : "-" + k);
                    var O = k.match(/(^-?\d+\.?\d?)|(em$|px$|%$)/g),
                        x = O[0];
                    switch (O[1]) {
                        case "em":
                            k = parseInt(t.fontSize) * x;
                            break;
                        case "px":
                            k = x;
                            break;
                        case "%":
                            k = "Y" === T ? e.node.getBoundingClientRect().height * x / 100 : e.node.getBoundingClientRect().width * x / 100;
                            break;
                        default:
                            throw new RangeError("Unrecognized or missing distance unit.")
                    }
                    "Y" === T ? j.push((c = k, (l = z())[13] = c, l)) : j.push((s = k, (a = z())[12] = s, a))
                }
                i.rotate.x && j.push((d = i.rotate.x, u = Math.PI / 180 * d, (f = z())[5] = f[10] = Math.cos(u), f[6] = f[9] = Math.sin(u), f[9] *= -1, f)), i.rotate.y && j.push((h = i.rotate.y, p = Math.PI / 180 * h, (m = z())[0] = m[10] = Math.cos(p), m[2] = m[8] = Math.sin(p), m[2] *= -1, m)), i.rotate.z && j.push((y = i.rotate.z, v = Math.PI / 180 * y, (g = z())[0] = g[5] = Math.cos(v), g[1] = g[4] = Math.sin(v), g[4] *= -1, g)), 1 !== i.scale && (0 === i.scale ? j.push(D(2e-4)) : j.push(D(i.scale)));
                var R = {};
                if (j.length) {
                    R.property = S("transform"), R.computed = {
                        raw: t[R.property],
                        matrix: function(e) {
                            if ("string" == typeof e) {
                                var t = e.match(/matrix(3d)?\(([^)]+)\)/);
                                if (t) return N(t[2].split(", ").map(parseFloat))
                            }
                            return z()
                        }(t[R.property])
                    }, j.unshift(R.computed.matrix);
                    var q = j.reduce(F);
                    R.generated = {
                        initial: R.property + ": matrix3d(" + q.join(", ") + ");",
                        final: R.property + ": matrix3d(" + R.computed.matrix.join(", ") + ");"
                    }
                } else R.generated = {
                    initial: "",
                    final: ""
                };
                var A = {};
                if (E.generated || R.generated.initial) {
                    A.property = S("transition"), A.computed = t[A.property], A.fragments = [];
                    var P = i.delay,
                        L = i.duration,
                        M = i.easing;
                    E.generated && A.fragments.push({
                        delayed: "opacity " + L / 1e3 + "s " + M + " " + P / 1e3 + "s",
                        instant: "opacity " + L / 1e3 + "s " + M + " 0s"
                    }), R.generated.initial && A.fragments.push({
                        delayed: R.property + " " + L / 1e3 + "s " + M + " " + P / 1e3 + "s",
                        instant: R.property + " " + L / 1e3 + "s " + M + " 0s"
                    }), A.computed && !A.computed.match(/all 0s|none 0s/) && A.fragments.unshift({
                        delayed: A.computed,
                        instant: A.computed
                    });
                    var I = A.fragments.reduce(function(e, t, n) {
                        return e.delayed += 0 === n ? t.delayed : ", " + t.delayed, e.instant += 0 === n ? t.instant : ", " + t.instant, e
                    }, {
                        delayed: "",
                        instant: ""
                    });
                    A.generated = {
                        delayed: A.property + ": " + I.delayed + ";",
                        instant: A.property + ": " + I.instant + ";"
                    }
                } else A.generated = {
                    delayed: "",
                    instant: ""
                };
                return {
                    inline: r,
                    opacity: E,
                    position: n,
                    transform: R,
                    transition: A
                }
            }

            function m(r, e) {
                e.split(";").forEach(function(e) {
                    var t = e.split(":"),
                        n = t[0],
                        i = t.slice(1);
                    n && i && (r.style[n.trim()] = i.join(":"))
                })
            }

            function y(e) {
                var i, r = this;
                try {
                    f(u(e), function(e) {
                        var t = e.getAttribute("data-sr-id");
                        if (null !== t) {
                            i = !0;
                            var n = r.store.elements[t];
                            n.callbackTimer && window.clearTimeout(n.callbackTimer.clock), m(n.node, n.styles.inline.generated), e.removeAttribute("data-sr-id"), delete r.store.elements[t]
                        }
                    })
                } catch (e) {
                    return h.call(this, "Clean failed.", e.message)
                }
                if (i) try {
                    t.call(this)
                } catch (e) {
                    return h.call(this, "Clean failed.", e.message)
                }
            }

            function v(n) {
                for (var e = [], t = arguments.length - 1; 0 < t--;) e[t] = arguments[t + 1];
                if (s(n)) return f(e, function(e) {
                    f(e, function(e, t) {
                        s(e) ? (n[t] && s(n[t]) || (n[t] = {}), v(n[t], e)) : n[t] = e
                    })
                }), n;
                throw new TypeError("Target must be an object literal.")
            }

            function g(e) {
                return void 0 === e && (e = navigator.userAgent), /Android|iPhone|iPad|iPod/i.test(e)
            }
            var e, b = (e = 0, function() {
                return e++
            });

            function w() {
                var n = this;
                t.call(this), f(this.store.elements, function(e) {
                    var t = [e.styles.inline.generated];
                    e.visible ? (t.push(e.styles.opacity.computed), t.push(e.styles.transform.generated.final), e.revealed = !0) : (t.push(e.styles.opacity.generated), t.push(e.styles.transform.generated.initial), e.revealed = !1), m(e.node, t.filter(function(e) {
                        return "" !== e
                    }).join(" "))
                }), f(this.store.containers, function(e) {
                    var t = e.node === document.documentElement ? window : e.node;
                    t.addEventListener("scroll", n.delegate), t.addEventListener("resize", n.delegate)
                }), this.delegate(), this.initTimeout = null
            }

            function c(e, t) {
                void 0 === t && (t = {});
                var n = t.pristine || this.pristine,
                    i = "always" === e.config.useDelay || "onload" === e.config.useDelay && n || "once" === e.config.useDelay && !e.seen,
                    r = e.visible && !e.revealed,
                    o = !e.visible && e.revealed && e.config.reset;
                return t.reveal || r ? function(e, t) {
                    var n = [e.styles.inline.generated, e.styles.opacity.computed, e.styles.transform.generated.final];
                    t ? n.push(e.styles.transition.generated.delayed) : n.push(e.styles.transition.generated.instant);
                    e.revealed = e.seen = !0, m(e.node, n.filter(function(e) {
                        return "" !== e
                    }).join(" ")), a.call(this, e, t)
                }.call(this, e, i) : t.reset || o ? function(e) {
                    var t = [e.styles.inline.generated, e.styles.opacity.generated, e.styles.transform.generated.initial, e.styles.transition.generated.instant];
                    e.revealed = !1, m(e.node, t.filter(function(e) {
                        return "" !== e
                    }).join(" ")), a.call(this, e)
                }.call(this, e) : void 0
            }

            function a(e, t) {
                var n = this,
                    i = t ? e.config.duration + e.config.delay : e.config.duration,
                    r = e.revealed ? e.config.beforeReveal : e.config.beforeReset,
                    o = e.revealed ? e.config.afterReveal : e.config.afterReset,
                    s = 0;
                e.callbackTimer && (s = Date.now() - e.callbackTimer.start, window.clearTimeout(e.callbackTimer.clock)), r(e.node), e.callbackTimer = {
                    start: Date.now(),
                    clock: window.setTimeout(function() {
                        o(e.node), e.callbackTimer = null, e.revealed && !e.config.reset && e.config.cleanup && y.call(n, e.node)
                    }, i - s)
                }
            }

            function l(e, t) {
                if (void 0 === t && (t = this.pristine), !e.visible && e.revealed && e.config.reset) return c.call(this, e, {
                    reset: !0
                });
                var n = this.store.sequences[e.sequence.id],
                    i = e.sequence.index;
                if (n) {
                    var r = new d(n, "visible", this.store),
                        o = new d(n, "revealed", this.store);
                    if (n.models = {
                            visible: r,
                            revealed: o
                        }, !o.body.length) {
                        var s = n.members[r.body[0]],
                            a = this.store.elements[s];
                        if (a) return j.call(this, n, r.body[0], -1, t), j.call(this, n, r.body[0], 1, t), c.call(this, a, {
                            reveal: !0,
                            pristine: t
                        })
                    }
                    if (!n.blocked.head && i === [].concat(o.head).pop() && i >= [].concat(r.body).shift()) return j.call(this, n, i, -1, t), c.call(this, e, {
                        reveal: !0,
                        pristine: t
                    });
                    if (!n.blocked.foot && i === [].concat(o.foot).shift() && i <= [].concat(r.body).pop()) return j.call(this, n, i, 1, t), c.call(this, e, {
                        reveal: !0,
                        pristine: t
                    })
                }
            }

            function E(e) {
                var t = Math.abs(e);
                if (isNaN(t)) throw new RangeError("Invalid sequence interval.");
                this.id = b(), this.interval = Math.max(t, 16), this.members = [], this.models = {}, this.blocked = {
                    head: !1,
                    foot: !1
                }
            }

            function d(e, i, r) {
                var o = this;
                this.head = [], this.body = [], this.foot = [], f(e.members, function(e, t) {
                    var n = r.elements[e];
                    n && n[i] && o.body.push(t)
                }), this.body.length && f(e.members, function(e, t) {
                    var n = r.elements[e];
                    n && !n[i] && (t < o.body[0] ? o.head.push(t) : o.foot.push(t))
                })
            }

            function j(e, t, n, i) {
                var r = this,
                    o = ["head", null, "foot"][1 + n],
                    s = e.members[t + n],
                    a = this.store.elements[s];
                e.blocked[o] = !0, setTimeout(function() {
                    e.blocked[o] = !1, a && l.call(r, a, i)
                }, e.interval)
            }

            function i(e, a, t) {
                var c = this;
                void 0 === a && (a = {}), void 0 === t && (t = !1);
                var l, d = [],
                    n = a.interval || r.interval;
                try {
                    n && (l = new E(n));
                    var i = u(e);
                    if (!i.length) throw new Error("Invalid reveal target.");
                    f(i.reduce(function(e, t) {
                        var n = {},
                            i = t.getAttribute("data-sr-id");
                        i ? (v(n, c.store.elements[i]), m(n.node, n.styles.inline.computed)) : (n.id = b(), n.node = t, n.seen = !1, n.revealed = !1, n.visible = !1);
                        var r = v({}, n.config || c.defaults, a);
                        if (!r.mobile && g() || !r.desktop && !g()) return i && y.call(c, n), e;
                        var o, s = u(r.container)[0];
                        if (!s) throw new Error("Invalid container.");
                        return s.contains(t) && (null === (o = function(t) {
                            var e = [],
                                n = arguments.length - 1;
                            for (; 0 < n--;) e[n] = arguments[n + 1];
                            var i = null;
                            return f(e, function(e) {
                                f(e, function(e) {
                                    null === i && e.node === t && (i = e.id)
                                })
                            }), i
                        }(s, d, c.store.containers)) && (o = b(), d.push({
                            id: o,
                            node: s
                        })), n.config = r, n.containerId = o, n.styles = p(n), l && (n.sequence = {
                            id: l.id,
                            index: l.members.length
                        }, l.members.push(n.id)), e.push(n)), e
                    }, []), function(e) {
                        (c.store.elements[e.id] = e).node.setAttribute("data-sr-id", e.id)
                    })
                } catch (e) {
                    return h.call(this, "Reveal failed.", e.message)
                }
                f(d, function(e) {
                    c.store.containers[e.id] = {
                        id: e.id,
                        node: e.node
                    }
                }), l && (this.store.sequences[l.id] = l), !0 !== t && (this.store.history.push({
                    target: e,
                    options: a
                }), this.initTimeout && window.clearTimeout(this.initTimeout), this.initTimeout = window.setTimeout(w.bind(this), 0))
            }
            var T, k = Math.sign || function(e) {
                    return (0 < e) - (e < 0) || +e
                },
                O = (T = Date.now(), function(e) {
                    var t = Date.now();
                    16 < t - T ? e(T = t) : setTimeout(function() {
                        return O(e)
                    }, 0)
                }),
                x = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || O;

            function R(e, t) {
                for (var n = t ? e.node.clientHeight : e.node.offsetHeight, i = t ? e.node.clientWidth : e.node.offsetWidth, r = 0, o = 0, s = e.node; isNaN(s.offsetTop) || (r += s.offsetTop), isNaN(s.offsetLeft) || (o += s.offsetLeft), s = s.offsetParent;);
                return {
                    bounds: {
                        top: r,
                        right: o + i,
                        bottom: r + n,
                        left: o
                    },
                    height: n,
                    width: i
                }
            }

            function q(e, t) {
                var i = this;
                void 0 === e && (e = {
                    type: "init"
                }), void 0 === t && (t = this.store.elements), x(function() {
                    var n = "init" === e.type || "resize" === e.type;
                    f(i.store.containers, function(e) {
                        n && (e.geometry = R.call(i, e, !0));
                        var t = function(e) {
                            var t, n;
                            return n = e.node === document.documentElement ? (t = window.pageYOffset, window.pageXOffset) : (t = e.node.scrollTop, e.node.scrollLeft), {
                                top: t,
                                left: n
                            }
                        }.call(i, e);
                        e.scroll && (e.direction = {
                            x: k(t.left - e.scroll.left),
                            y: k(t.top - e.scroll.top)
                        }), e.scroll = t
                    }), f(t, function(e) {
                        (n || void 0 === e.geometry) && (e.geometry = R.call(i, e)), e.visible = function(e) {
                            void 0 === e && (e = {});
                            var t = this.store.containers[e.containerId];
                            if (t) {
                                var n = Math.max(0, Math.min(1, e.config.viewFactor)),
                                    i = e.config.viewOffset,
                                    r = e.geometry.bounds.top + e.geometry.height * n,
                                    o = e.geometry.bounds.right - e.geometry.width * n,
                                    s = e.geometry.bounds.bottom - e.geometry.height * n,
                                    a = e.geometry.bounds.left + e.geometry.width * n,
                                    c = t.geometry.bounds.top + t.scroll.top + i.top,
                                    l = t.geometry.bounds.right + t.scroll.left - i.right,
                                    d = t.geometry.bounds.bottom + t.scroll.top - i.bottom,
                                    u = t.geometry.bounds.left + t.scroll.left + i.left;
                                return r < d && u < o && c < s && a < l || "fixed" === e.styles.position
                            }
                        }.call(i, e)
                    }), f(t, function(e) {
                        e.sequence ? l.call(i, e) : c.call(i, e)
                    }), i.pristine = !1
                })
            }
            var A, P, L, M, I, C, W, Y, $ = "4.0.9";

            function H(e) {
                var t;
                if (void 0 === e && (e = {}), void 0 === this || Object.getPrototypeOf(this) !== H.prototype) return new H(e);
                if (!H.isSupported()) return h.call(this, "Instantiation failed.", "This browser is not supported."), n.failure();
                try {
                    t = v({}, C || r, e)
                } catch (e) {
                    return h.call(this, "Invalid configuration.", e.message), n.failure()
                }
                try {
                    if (!u(t.container)[0]) throw new Error("Invalid container.")
                } catch (e) {
                    return h.call(this, e.message), n.failure()
                }
                return !(C = t).mobile && g() || !C.desktop && !g() ? (h.call(this, "This device is disabled.", "desktop: " + C.desktop, "mobile: " + C.mobile), n.failure()) : (n.success(), this.store = {
                    containers: {},
                    elements: {},
                    history: [],
                    sequences: {}
                }, this.pristine = !0, A = A || q.bind(this), P = P || function() {
                    var n = this;
                    f(this.store.elements, function(e) {
                        m(e.node, e.styles.inline.generated), e.node.removeAttribute("data-sr-id")
                    }), f(this.store.containers, function(e) {
                        var t = e.node === document.documentElement ? window : e.node;
                        t.removeEventListener("scroll", n.delegate), t.removeEventListener("resize", n.delegate)
                    }), this.store = {
                        containers: {},
                        elements: {},
                        history: [],
                        sequences: {}
                    }
                }.bind(this), L = L || i.bind(this), M = M || y.bind(this), I = I || function() {
                    var t = this;
                    f(this.store.history, function(e) {
                        i.call(t, e.target, e.options, !0)
                    }), w.call(this)
                }.bind(this), Object.defineProperty(this, "delegate", {
                    get: function() {
                        return A
                    }
                }), Object.defineProperty(this, "destroy", {
                    get: function() {
                        return P
                    }
                }), Object.defineProperty(this, "reveal", {
                    get: function() {
                        return L
                    }
                }), Object.defineProperty(this, "clean", {
                    get: function() {
                        return M
                    }
                }), Object.defineProperty(this, "sync", {
                    get: function() {
                        return I
                    }
                }), Object.defineProperty(this, "defaults", {
                    get: function() {
                        return C
                    }
                }), Object.defineProperty(this, "version", {
                    get: function() {
                        return $
                    }
                }), Object.defineProperty(this, "noop", {
                    get: function() {
                        return !1
                    }
                }), Y || (Y = this))
            }
            return H.isSupported = function() {
                return ("transform" in (t = document.documentElement.style) || "WebkitTransform" in t) && ("transition" in (e = document.documentElement.style) || "WebkitTransition" in e);
                var e, t
            }, Object.defineProperty(H, "debug", {
                get: function() {
                    return W || !1
                },
                set: function(e) {
                    return W = "boolean" == typeof e ? e : W
                }
            }), H(), H
        }();
    </script>

    <!--=============== MAIN JS ===============-->
    <script>
        /*=============== SHOW MENU ===============*/
        const navMenu = document.getElementById('nav-menu'),
            navToggle = document.getElementById('nav-toggle'),
            navClose = document.getElementById('nav-close')

        /*===== MENU SHOW =====*/
        /* Validate if constant exists */
        if (navToggle) {
            navToggle.addEventListener('click', () => {
                navMenu.classList.add('show-menu')
            })
        }

        /*===== MENU HIDDEN =====*/
        /* Validate if constant exists */
        if (navClose) {
            navClose.addEventListener('click', () => {
                navMenu.classList.remove('show-menu')
            })
        }

        /*=============== REMOVE MENU MOBILE ===============*/
        const navLink = document.querySelectorAll('.nav__link')

        function linkAction() {
            const navMenu = document.getElementById('nav-menu')
            // When we click on each nav__link, we remove the show-menu class
            navMenu.classList.remove('show-menu')
        }
        navLink.forEach(n => n.addEventListener('click', linkAction))

        /*=============== CHANGE BACKGROUND HEADER ===============*/
        function scrollHeader() {
            const header = document.getElementById('header')
            // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
            if (this.scrollY >= 80) header.classList.add('scroll-header');
            else header.classList.remove('scroll-header')
        }
        window.addEventListener('scroll', scrollHeader)

        /*=============== QUESTIONS ACCORDION ===============*/
        const accordionItems = document.querySelectorAll('.questions__item')

        accordionItems.forEach((item) => {
            const accordionHeader = item.querySelector('.questions__header')

            accordionHeader.addEventListener('click', () => {
                const openItem = document.querySelector('.accordion-open')

                toggleItem(item)

                if (openItem && openItem !== item) {
                    toggleItem(openItem)
                }
            })
        })

        const toggleItem = (item) => {
            const accordionContent = item.querySelector('.questions__content')

            if (item.classList.contains('accordion-open')) {
                accordionContent.removeAttribute('style')
                item.classList.remove('accordion-open')
            } else {
                accordionContent.style.height = accordionContent.scrollHeight + 'px'
                item.classList.add('accordion-open')
            }

        }

        /*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
        const sections = document.querySelectorAll('section[id]')

        function scrollActive() {
            const scrollY = window.pageYOffset

            sections.forEach(current => {
                const sectionHeight = current.offsetHeight,
                    sectionTop = current.offsetTop - 58,
                    sectionId = current.getAttribute('id')

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
                } else {
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
                }
            })
        }
        window.addEventListener('scroll', scrollActive)

        /*=============== SHOW SCROLL UP ===============*/
        function scrollUp() {
            const scrollUp = document.getElementById('scroll-up');
            // When the scroll is higher than 400 viewport height, add the show-scroll class to the a tag with the scroll-top class
            if (this.scrollY >= 400) scrollUp.classList.add('show-scroll');
            else scrollUp.classList.remove('show-scroll')
        }
        window.addEventListener('scroll', scrollUp)

        /*=============== DARK LIGHT THEME ===============*/
        const themeButton = document.getElementById('theme-button')
        const darkTheme = 'dark-theme'
        const iconTheme = 'ri-sun-line'

        // Previously selected topic (if user selected)
        const selectedTheme = localStorage.getItem('selected-theme')
        const selectedIcon = localStorage.getItem('selected-icon')

        // We obtain the current theme that the interface has by validating the dark-theme class
        const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
        const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

        // We validate if the user previously chose a topic
        if (selectedTheme) {
            // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
            document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
            themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
        }

        // Activate / deactivate the theme manually with the button
        themeButton.addEventListener('click', () => {
            // Add or remove the dark / icon theme
            document.body.classList.toggle(darkTheme)
            themeButton.classList.toggle(iconTheme)
            // We save the theme and the current icon that the user chose
            localStorage.setItem('selected-theme', getCurrentTheme())
            localStorage.setItem('selected-icon', getCurrentIcon())
        })

        /*=============== SCROLL REVEAL ANIMATION ===============*/
        const sr = ScrollReveal({
            origin: 'top',
            distance: '60px',
            duration: 2500,
            delay: 400,
            // reset: true
        })

        sr.reveal(`.home__data`)
        sr.reveal(`.home__img`, {
            delay: 500
        })
        sr.reveal(`.home__social`, {
            delay: 600
        })
        sr.reveal(`.about__img, .contact__box`, {
            origin: 'left'
        })
        sr.reveal(`.about__data, .contact__form`, {
            origin: 'right'
        })
        sr.reveal(`.steps__card, .product__card, .questions__group, .footer`, {
            interval: 100
        })
    </script>
        <script src="{{ asset('/sw.js') }}"></script>
        <script>
            if (!navigator.serviceWorker.controller) {
                navigator.serviceWorker.register("/sw.js").then(function (reg) {
                    console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>
    </body>
</html>
