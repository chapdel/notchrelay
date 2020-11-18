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
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <section class="relative bg-blue-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-32 pb-48 sm:pb-64 md:pt-40 md:pb-48 lg:pt-40 xl:pb-64 2xl:pt-56 2xl:pb-96 text-center sm:text-left">
      <div>
        <div class="relative w-full sm:w-2/3 lg:w-1/2 z-10">
          <h1 class="text-3xl lg:text-4xl xl:text-5xl leading-tight font-bold">Fair Rate lets you find the fairrest
            rate.</h1>
          <p class="text-base leading-snug text-gray-700 mt-4">Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <a href="#" class="w-full block sm:inline-block sm:w-auto px-6 py-4 bg-blue-600 text-white rounded-lg mt-8">Find the Fair Rate</a>
        </div>

        <div class="w-full absolute bottom-0 right-0">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1161.727 456.805">
            <defs>
              <clipPath id="a">
                <path d="M847.9,82.732c-35.467,16.382-70.248,7.339-114.45-22.181-130.3-87.026-222.523-75.217-343.934,3.359-25.868,16.742-67.626,44.576-137.624,24.769C149.45,59.69,44.091,89,0,169.643H1161.727c-33.066-63-156.751-159.454-313.828-86.911" transform="translate(0.044 0.729)" fill="none"></path>
              </clipPath>
              <linearGradient id="b" x1="0.966" y1="1.217" x2="0.09" y2="0.335" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#1c8eb8"></stop>
                <stop offset="1" stop-color="#c5f9ff"></stop>
              </linearGradient>
              <clipPath id="c">
                <path d="M0,93.453c5.066-9.4,30.388-27.88,62.525-22.872,35.079,5.468,42.787-6.458,57.249-11.417,26.478-9.079,46.914,20.875,56.065,1.869,11.685-24.264,30.654-36.258,88.5-12.391,13.739,5.669,12.8-6.891,19.051-14.225,12.145-14.242,26.853,12.047,33.6,10.6,7.663-1.639,5.324-12.829,9.811-22.411,9.349-19.964,25.484-1.2,36.607-2.849,11.075-1.639,17-23.612,29.543-19.169C419.738,10.08,411.33,65.861,409.673,78.3c7.619-10.618,21.033-18.416,21.033,15.149H0" transform="translate(0.189 0.248)" fill="none"></path>
              </clipPath>
              <linearGradient id="d" x1="0.597" y1="1.079" x2="0.333" y2="-0.021" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#0b5c79"></stop>
                <stop offset="1" stop-color="#3ec3d1"></stop>
              </linearGradient>
              <clipPath id="e">
                <path d="M1.971,52.2H131.918c6.753-26.83-19.77-13.415-19.77-13.415s10-28.222-.249-25.291C102,16.319,97.665,38.3,97.665,38.3S92.334,2.4,80.645.048c-7.588-1.528-1.633,34.134-1.633,34.134a18.746,18.746,0,0,0-10.92-3.908c-5.413-.082-4.1,6.882-4.1,6.882S52.7,14,46.819,14.3c-7.373.377.534,24.7.534,24.7S32.835,23.19,27.116,23.6c-7.948.575,5.909,23.161,5.909,23.161S22.5,40.429,9.967,41.475c-9.039.754-12.508,4.406-8,10.721" transform="translate(0.768 0.085)" fill="none"></path>
              </clipPath>
              <linearGradient id="f" x1="0.978" y1="1.271" x2="0.312" y2="0.481" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#3ec3d1"></stop>
                <stop offset="1" stop-color="#6ce2ef"></stop>
              </linearGradient>
              <clipPath id="g">
                <path d="M73.318,101.431c0,55.832-22.176,101.494-37.552,101.494S0,141.97,0,86.139,24.9-5.692,42.794.742C62.964,7.99,73.318,45.6,73.318,101.431" transform="translate(0.783 0.13)" fill="none"></path>
              </clipPath>
              <linearGradient id="h" x1="1.071" y1="0.925" x2="-0.013" y2="0.054" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#0a6373"></stop>
                <stop offset="1" stop-color="#3ed1d1"></stop>
              </linearGradient>
              <clipPath id="i">
                <path d="M118.71,200.784H0V81.857L59.353,0,118.71,81.857V200.784" transform="translate(0.112 0.432)" fill="none"></path>
              </clipPath>
              <linearGradient id="j" x1="0.021" y1="0.181" x2="0.787" y2="1.017" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#ffe8b8"></stop>
              </linearGradient>
              <clipPath id="k">
                <path d="M0,0H136.265V97.169H0Z" transform="translate(0.466 0.057)" fill="none"></path>
              </clipPath>
              <linearGradient id="l" x1="-0.238" y1="-0.291" x2="0.984" y2="1.019" xlink:href="#j"></linearGradient>
              <linearGradient id="m" x1="0.332" y1="1.492" x2="0.59" y2="-0.032" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#f7ce8f"></stop>
                <stop offset="1" stop-color="#d97d61"></stop>
              </linearGradient>
              <clipPath id="n">
                <path d="M0,0H140L199.35,81.857H59.356L0,0" transform="translate(0.53 0.432)" fill="none"></path>
              </clipPath>
              <linearGradient id="o" x1="0.447" y1="1.169" x2="0.574" y2="-0.426" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#d95e36"></stop>
                <stop offset="1" stop-color="#80331a"></stop>
              </linearGradient>
              <clipPath id="p">
                <path d="M38.59,0H0L38.59,56.221V0" transform="translate(0.695 0.511)" fill="none"></path>
              </clipPath>
              <linearGradient id="q" x1="0.194" y1="-0.251" x2="0.857" y2="0.366" xlink:href="#j"></linearGradient>
              <clipPath id="r">
                <path d="M144.375,47.135a24.824,24.824,0,0,0-17.241-10.894c-13.188-1.929-8.662-16.557-20.124-20.429C94.923,11.729,93.9,21.465,62.993,3.911,54.352-1,38.325-2.537,31.209,6.789c-4.165,5.459-5.185,13.4-3.962,20.007,1.176,6.361,5.929,15.542.764,21.258-4.9,5.429-13.531,3.711-19.505,7.158C2.437,58.713.1,65.791.005,72.458-.211,88.03,6.458,104.819,16.336,116.7c20.586,24.76,57.68,30.68,86.972,20.016a69.006,69.006,0,0,0,38.756-35.741c7.523-15.806,12.109-37.988,2.312-53.841" transform="translate(0.59 0.445)" fill="none"></path>
              </clipPath>
              <linearGradient id="s" x1="0.698" y1="0.98" x2="0.324" y2="0.098" xlink:href="#h"></linearGradient>
              <clipPath id="t">
                <path d="M98.471,14.737c-6.526.309-13.327,1.763-35.485-10.831C54.35-1,38.325-2.536,31.2,6.79c-4.159,5.459-5.183,13.4-3.957,20.007,1.173,6.356,5.929,15.542.757,21.258-4.9,5.426-13.531,3.707-19.5,7.157C2.436,58.715.09,65.787.005,72.452c-.224,15.575,6.45,32.367,16.323,44.245.949,1.143,1.93,2.244,2.954,3.3,37.179,20.264,10.257-41.52,22.667-52.737,7.859-7.1,23.223,2.959,30.186-2.029,3.475-2.489,3.2-7.414.49-11.163C64.266,42.521,50.832,30.226,57.475,23.24c3.55-3.738,10.62-1.688,23.937-1.644,15.386.043,23.318-3.931,17.06-6.858" transform="translate(0.594 0.446)" fill="none"></path>
              </clipPath>
              <linearGradient id="u" x1="0.731" y1="0.821" x2="0.286" y2="0.046" xlink:href="#f"></linearGradient>
              <clipPath id="v">
                <path d="M227.289,45.589c-3.879-9.4-23.249-27.88-47.826-22.872-26.838,5.468-32.731-6.458-43.8-11.417-20.249-9.079-30.224,13.446-42.882,1.869C75.1-3,60.783-4.644,49.365,10.252,32.951,31.672,6.043,7.953,0,45.589H227.289" transform="translate(0.194 0.524)" fill="none"></path>
              </clipPath>
              <linearGradient id="w" x1="0.501" y1="1.161" x2="0.484" y2="-0.939" xlink:href="#d"></linearGradient>
              <clipPath id="x">
                <path d="M102.381,47.328H0C.581,15.94,8.823,36.09,8.823,36.09s2.709-22.938,8.7-23.868c5.656-.879,8.321,22.5,8.321,22.5S31.992,1.318,40.129.029C47.272-1.1,41.66,30.99,41.66,30.99a19.212,19.212,0,0,1,10.2-3.545c6.694-.275,3.958,6.242,3.958,6.242s8.365-14.511,13.863-14.238c6.888.342,2.146,15.052,2.146,15.052s5.067-4.844,10.38-5.527c10.4-1.335-.642,11.992-.642,11.992s7.38-3.026,20.1-4.949c12.412-1.878,9.834,5.218.713,11.312" transform="translate(0.211 0.547)" fill="none"></path>
              </clipPath>
              <linearGradient id="y" x1="-0.027" y1="1.092" x2="0.759" y2="0.401" xlink:href="#f"></linearGradient>
              <clipPath id="z">
                <path d="M139.761,35.129c.308-18.657-16.264-24.525-32.335-19.316-12.157,3.94-13.142,5.652-43.929-11.9C54.894-1,38.876-2.537,31.689,6.789c-4.2,5.459-5.278,13.4-4.108,20.007,1.135,6.361,5.823,15.542.616,21.258-4.944,5.429-13.564,3.711-19.563,7.158-6.1,3.5-8.48,10.58-8.62,17.246C-.321,88.03,5.573,105.394,16.023,116.7c21.059,22.8,58.082,31.61,92.291,22.889,75.429-19.227,47.061-59.827,38.22-70.59-9.518-11.573-6.984-21.007-6.773-33.871" transform="translate(0.69 0.445)" fill="none"></path>
              </clipPath>
              <linearGradient id="aa" x1="0.737" y1="0.976" x2="0.277" y2="0.117" xlink:href="#h"></linearGradient>
              <clipPath id="ab">
                <path d="M108.365,15.538c-.308.086-.625.182-.932.278C95.276,19.747,94.291,21.467,63.5,3.906,54.892-1,38.883-2.536,31.7,6.79c-4.213,5.459-5.3,13.4-4.117,20.007,1.135,6.356,5.814,15.542.616,21.258C23.26,53.481,14.649,51.762,8.65,55.212c-6.1,3.5-8.488,10.575-8.638,17.24C-.314,88.027,6.231,104.819,16.03,116.7a59.878,59.878,0,0,0,4.082,4.487c33.778,20.563-1.346-23.852,26.539-42.194,13.784-9.08,40.393-18.619,28.808-33.07C67,35.354,60.575,31.241,63.161,25.431,64.577,22.225,68.72,19.213,81.8,21.6c17.892,3.269,30.954-3.087,26.565-6.057" transform="translate(0.683 0.446)" fill="none"></path>
              </clipPath>
              <linearGradient id="ac" x1="0.736" y1="0.722" x2="0.264" y2="0.157" xlink:href="#f"></linearGradient>
              <filter id="ad" x="830.456" y="132.5" width="90" height="90" filterUnits="userSpaceOnUse">
                <feOffset dy="5" input="SourceAlpha"></feOffset>
                <feGaussianBlur stdDeviation="3.5" result="ae"></feGaussianBlur>
                <feFlood flood-color="#a4a4a4" flood-opacity="0.216"></feFlood>
                <feComposite operator="in" in2="ae"></feComposite>
                <feComposite in="SourceGraphic"></feComposite>
              </filter>
              <filter id="af" x="615.956" y="118" width="101" height="101" filterUnits="userSpaceOnUse">
                <feOffset dy="6" input="SourceAlpha"></feOffset>
                <feGaussianBlur stdDeviation="4" result="ag"></feGaussianBlur>
                <feFlood flood-color="#a4a4a4" flood-opacity="0.216"></feFlood>
                <feComposite operator="in" in2="ag"></feComposite>
                <feComposite in="SourceGraphic"></feComposite>
              </filter>
              <filter id="ah" x="659.956" y="27" width="71.9" height="71.9" filterUnits="userSpaceOnUse">
                <feOffset dy="4" input="SourceAlpha"></feOffset>
                <feGaussianBlur stdDeviation="3" result="ai"></feGaussianBlur>
                <feFlood flood-color="#a4a4a4" flood-opacity="0.216"></feFlood>
                <feComposite operator="in" in2="ai"></feComposite>
                <feComposite in="SourceGraphic"></feComposite>
              </filter>
              <filter id="aj" x="720.956" y="73" width="80.37" height="80.37" filterUnits="userSpaceOnUse">
                <feOffset dy="4" input="SourceAlpha"></feOffset>
                <feGaussianBlur stdDeviation="3" result="ak"></feGaussianBlur>
                <feFlood flood-color="#a4a4a4" flood-opacity="0.216"></feFlood>
                <feComposite operator="in" in2="ak"></feComposite>
                <feComposite in="SourceGraphic"></feComposite>
              </filter>
              <filter id="al" x="818.956" y="47" width="80.37" height="80.37" filterUnits="userSpaceOnUse">
                <feOffset dy="4" input="SourceAlpha"></feOffset>
                <feGaussianBlur stdDeviation="3" result="am"></feGaussianBlur>
                <feFlood flood-color="#a4a4a4" flood-opacity="0.216"></feFlood>
                <feComposite operator="in" in2="am"></feComposite>
                <feComposite in="SourceGraphic"></feComposite>
              </filter>
              <filter id="an" x="781.956" y="0" width="72" height="72" filterUnits="userSpaceOnUse">
                <feOffset dy="4" input="SourceAlpha"></feOffset>
                <feGaussianBlur stdDeviation="3" result="ao"></feGaussianBlur>
                <feFlood flood-color="#a4a4a4" flood-opacity="0.216"></feFlood>
                <feComposite operator="in" in2="ao"></feComposite>
                <feComposite in="SourceGraphic"></feComposite>
              </filter>
            </defs>
            <g transform="translate(1950.456 5248.5)">
              <rect width="1" height="225" transform="translate(-1285.5 -5047.5)" fill="#dfe3e8"></rect>
              <rect width="1" height="225" transform="translate(-1255.5 -5167.5)" fill="#dfe3e8" opacity="0.5"></rect>
              <rect width="1" height="225" transform="translate(-1189.5 -5112.5)" fill="#dfe3e8"></rect>
              <rect width="1" height="225" transform="translate(-1091.5 -5138.5)" fill="#dfe3e8" opacity="0.5"></rect>
              <rect width="1" height="225" transform="translate(-1075.5 -5040.5)" fill="#dfe3e8"></rect>
              <rect width="1" height="225" transform="translate(-1132.5 -5189.5)" fill="#dfe3e8"></rect>
              <g transform="translate(-1950.5 -4962.067)">
                <path d="M847.9,82.732c-35.467,16.382-70.248,7.339-114.45-22.181-130.3-87.026-222.523-75.217-343.934,3.359-25.868,16.742-67.626,44.576-137.624,24.769C149.45,59.69,44.091,89,0,169.643H1161.727c-33.066-63-156.751-159.454-313.828-86.911" transform="translate(0.044 0.729)" fill="none"></path>
                <g clip-path="url(#a)">
                  <path d="M847.9,82.732c-35.467,16.382-70.248,7.339-114.45-22.181-130.3-87.026-222.523-75.217-343.934,3.359-25.868,16.742-67.626,44.576-137.624,24.769C149.45,59.69,44.091,89,0,169.643H1161.727c-33.066-63-156.751-159.454-313.828-86.911" transform="translate(0.044 0.729)" fill="url(#b)"></path>
                </g>
              </g>
              <g transform="translate(-1714.757 -4885.397)">
                <path d="M0,93.453c5.066-9.4,30.388-27.88,62.525-22.872,35.079,5.468,42.787-6.458,57.249-11.417,26.478-9.079,46.914,20.875,56.065,1.869,11.685-24.264,30.654-36.258,88.5-12.391,13.739,5.669,12.8-6.891,19.051-14.225,12.145-14.242,26.853,12.047,33.6,10.6,7.663-1.639,5.324-12.829,9.811-22.411,9.349-19.964,25.484-1.2,36.607-2.849,11.075-1.639,17-23.612,29.543-19.169C419.738,10.08,411.33,65.861,409.673,78.3c7.619-10.618,21.033-18.416,21.033,15.149H0" transform="translate(0.189 0.248)" fill="none"></path>
                <g clip-path="url(#c)">
                  <path d="M0,93.453c5.066-9.4,30.388-27.88,62.525-22.872,35.079,5.468,42.787-6.458,57.249-11.417,26.478-9.079,46.914,20.875,56.065,1.869,11.685-24.264,30.654-36.258,88.5-12.391,13.739,5.669,12.8-6.891,19.051-14.225,12.145-14.242,26.853,12.047,33.6,10.6,7.663-1.639,5.324-12.829,9.811-22.411,9.349-19.964,25.484-1.2,36.607-2.849,11.075-1.639,17-23.612,29.543-19.169C419.738,10.08,411.33,65.861,409.673,78.3c7.619-10.618,21.033-18.416,21.033,15.149H0" transform="translate(0.189 0.248)" fill="url(#d)"></path>
                </g>
              </g>
              <g transform="translate(-1597.766 -4843.978)">
                <path d="M1.971,52.2H131.918c6.753-26.83-19.77-13.415-19.77-13.415s10-28.222-.249-25.291C102,16.319,97.665,38.3,97.665,38.3S92.334,2.4,80.645.048c-7.588-1.528-1.633,34.134-1.633,34.134a18.746,18.746,0,0,0-10.92-3.908c-5.413-.082-4.1,6.882-4.1,6.882S52.7,14,46.819,14.3c-7.373.377.534,24.7.534,24.7S32.835,23.19,27.116,23.6c-7.948.575,5.909,23.161,5.909,23.161S22.5,40.429,9.967,41.475c-9.039.754-12.508,4.406-8,10.721" transform="translate(0.768 0.085)" fill="none"></path>
                <g clip-path="url(#e)">
                  <path d="M1.971,52.2H131.918c6.753-26.83-19.77-13.415-19.77-13.415s10-28.222-.249-25.291C102,16.319,97.665,38.3,97.665,38.3S92.334,2.4,80.645.048c-7.588-1.528-1.633,34.134-1.633,34.134a18.746,18.746,0,0,0-10.92-3.908c-5.413-.082-4.1,6.882-4.1,6.882S52.7,14,46.819,14.3c-7.373.377.534,24.7.534,24.7S32.835,23.19,27.116,23.6c-7.948.575,5.909,23.161,5.909,23.161S22.5,40.429,9.967,41.475c-9.039.754-12.508,4.406-8,10.721" transform="translate(0.768 0.085)" fill="url(#f)"></path>
                </g>
              </g>
              <g transform="translate(-1022.483 -5040.5)">
                <path d="M73.318,101.431c0,55.832-22.176,101.494-37.552,101.494S0,141.97,0,86.139,24.9-5.692,42.794.742C62.964,7.99,73.318,45.6,73.318,101.431" transform="translate(0.783 0.13)" fill="none"></path>
                <g clip-path="url(#g)">
                  <path d="M73.318,101.431c0,55.832-22.176,101.494-37.552,101.494S0,141.97,0,86.139,24.9-5.692,42.794.742C62.964,7.99,73.318,45.6,73.318,101.431" transform="translate(0.783 0.13)" fill="url(#h)"></path>
                </g>
              </g>
              <g transform="translate(-1316.282 -4992.912)">
                <path d="M118.71,200.784H0V81.857L59.353,0,118.71,81.857V200.784" transform="translate(0.112 0.432)" fill="none"></path>
                <g clip-path="url(#i)">
                  <path d="M118.71,200.784H0V81.857L59.353,0,118.71,81.857V200.784" transform="translate(0.112 0.432)" fill="url(#j)"></path>
                </g>
              </g>
              <path d="M0,118.927H139.994V0H0Z" transform="translate(-1197.461 -4910.623)" fill="#f7ce8f"></path>
              <g transform="translate(-1175.54 -4888.922)">
                <path d="M0,0H136.265V97.169H0Z" transform="translate(0.466 0.057)" fill="none"></path>
                <g clip-path="url(#k)">
                  <path d="M0,97.169H136.265V0H0Z" transform="translate(0.466 0.057)" fill="url(#l)"></path>
                </g>
              </g>
              <path d="M0,97.169H139.994V0H0Z" transform="translate(-1038.809 -4888.865)" fill="url(#m)"></path>
              <path d="M0,75.272H98.95V0H0Z" transform="translate(-1156.417 -4866.967)" fill="#9d9d9c"></path>
              <g transform="translate(-1257.346 -4992.912)">
                <path d="M0,0H140L199.35,81.857H59.356L0,0" transform="translate(0.53 0.432)" fill="none"></path>
                <g clip-path="url(#n)">
                  <path d="M0,0H140L199.35,81.857H59.356L0,0" transform="translate(0.53 0.432)" fill="url(#o)"></path>
                </g>
              </g>
              <path d="M0,75.272H5.779V0H0Z" transform="translate(-1156.417 -4866.967)" fill="#f7ce8f"></path>
              <path d="M0,1.648H93.171V0H0Z" transform="translate(-1150.638 -4866.967)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4860.832)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4854.696)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4848.561)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4842.426)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4836.29)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4830.155)" fill="#415680"></path>
              <path d="M0,1.646H93.171V0H0Z" transform="translate(-1150.638 -4824.019)" fill="#415680"></path>
              <path d="M0,1.646H93.171V0H0Z" transform="translate(-1150.638 -4817.883)" fill="#415680"></path>
              <path d="M0,1.646H93.171V0H0Z" transform="translate(-1150.638 -4811.748)" fill="#415680"></path>
              <path d="M0,1.646H93.171V0H0Z" transform="translate(-1150.638 -4805.612)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4799.478)" fill="#415680"></path>
              <path d="M0,1.647H93.171V0H0Z" transform="translate(-1150.638 -4793.343)" fill="#415680"></path>
              <path d="M0,75.271H24.968V0H0Z" transform="translate(-1291.092 -4888.865)" fill="#2e3e5c"></path>
              <path d="M0,75.271H5.776V0H0Z" transform="translate(-1291.092 -4888.865)" fill="#f7ce8f"></path>
              <path d="M0,97.169H24.97V0H0Z" transform="translate(-1247.509 -4888.865)" fill="#2e3e5c"></path>
              <path d="M0,97.169H5.775V0H0Z" transform="translate(-1247.509 -4888.865)" fill="#f7ce8f"></path>
              <path d="M0,56.221H42.2V0H0Z" transform="translate(-1148.57 -4966.844)" fill="#f7ce8f"></path>
              <path d="M0,40.527H24.964V0H0Z" transform="translate(-1139.95 -4951.149)" fill="#2e3e5c"></path>
              <path d="M0,40.527H5.858V0H0Z" transform="translate(-1120.844 -4951.149)" fill="#fff"></path>
              <g transform="translate(-1187.855 -4967.355)">
                <path d="M38.59,0H0L38.59,56.221V0" transform="translate(0.695 0.511)" fill="none"></path>
                <g clip-path="url(#p)">
                  <path d="M38.59,0H0L38.59,56.221V0" transform="translate(0.695 0.511)" fill="url(#q)"></path>
                </g>
              </g>
              <path d="M0,62.922H13.6V0H0Z" transform="translate(-1279.725 -4876.517)" fill="#36a9e1"></path>
              <path d="M0,84.821H13.608V0H0Z" transform="translate(-1236.147 -4876.517)" fill="#36a9e1"></path>
              <path d="M0,3.294H19.2V0H0Z" transform="translate(-1241.735 -4866.967)" fill="#fff"></path>
              <path d="M0,3.294H19.192V0H0Z" transform="translate(-1285.316 -4866.967)" fill="#fff"></path>
              <path d="M0,28.179H13.6V0H0Z" transform="translate(-1134.443 -4938.802)" fill="#36a9e1"></path>
              <path d="M2.468,26.83H0V0H3.938L2.468,26.83" transform="translate(-1382.756 -4818.526)" fill="#fff"></path>
              <path d="M6.6,26.83H4.261L0,0H3.939L6.6,26.83" transform="translate(-1371.965 -4818.526)" fill="#fff"></path>
              <path d="M6.646,0H4.582L0,22.966H3.939L6.646,0" transform="translate(-1371.965 -4841.492)" fill="#fff"></path>
              <path d="M0,4.985H14.73V0H0Z" transform="translate(-1382.756 -4818.526)" fill="#fff"></path>
              <path d="M0,4.985H10.791V0H0Z" transform="translate(-1375.248 -4818.526)" fill="#fff"></path>
              <path d="M2.468,26.83H0V0H3.937L2.468,26.83" transform="translate(-1446.35 -4818.526)" fill="#fff"></path>
              <path d="M6.6,26.83H4.26L0,0H3.938L6.6,26.83" transform="translate(-1435.559 -4818.526)" fill="#fff"></path>
              <path d="M6.646,0H4.582L0,22.966H3.938L6.646,0" transform="translate(-1435.559 -4841.492)" fill="#fff"></path>
              <path d="M0,4.985H14.73V0H0Z" transform="translate(-1446.35 -4818.526)" fill="#fff"></path>
              <path d="M0,4.985H76.547V0H0Z" transform="translate(-1451.794 -4818.526)" fill="#fff"></path>
              <path d="M0,4.985H76.546L77.449,0H.9L0,4.985" transform="translate(-1438.57 -4841.492)" fill="#fff"></path>
              <path d="M0,4.986H76.547L77.45,0H.9L0,4.986" transform="translate(-1439.958 -4833.837)" fill="#fff"></path>
              <g transform="translate(-1549.386 -5002.605)">
                <path d="M144.375,47.135a24.824,24.824,0,0,0-17.241-10.894c-13.188-1.929-8.662-16.557-20.124-20.429C94.923,11.729,93.9,21.465,62.993,3.911,54.352-1,38.325-2.537,31.209,6.789c-4.165,5.459-5.185,13.4-3.962,20.007,1.176,6.361,5.929,15.542.764,21.258-4.9,5.429-13.531,3.711-19.505,7.158C2.437,58.713.1,65.791.005,72.458-.211,88.03,6.458,104.819,16.336,116.7c20.586,24.76,57.68,30.68,86.972,20.016a69.006,69.006,0,0,0,38.756-35.741c7.523-15.806,12.109-37.988,2.312-53.841" transform="translate(0.59 0.445)" fill="none"></path>
                <g clip-path="url(#r)">
                  <path d="M144.375,47.135a24.824,24.824,0,0,0-17.241-10.894c-13.188-1.929-8.662-16.557-20.124-20.429C94.923,11.729,93.9,21.465,62.993,3.911,54.352-1,38.325-2.537,31.209,6.789c-4.165,5.459-5.185,13.4-3.962,20.007,1.176,6.361,5.929,15.542.764,21.258-4.9,5.429-13.531,3.711-19.505,7.158C2.437,58.713.1,65.791.005,72.458-.211,88.03,6.458,104.819,16.336,116.7c20.586,24.76,57.68,30.68,86.972,20.016a69.006,69.006,0,0,0,38.756-35.741c7.523-15.806,12.109-37.988,2.312-53.841" transform="translate(0.59 0.445)" fill="url(#s)"></path>
                </g>
              </g>
              <g transform="translate(-1549.386 -5002.605)">
                <path d="M98.471,14.737c-6.526.309-13.327,1.763-35.485-10.831C54.35-1,38.325-2.536,31.2,6.79c-4.159,5.459-5.183,13.4-3.957,20.007,1.173,6.356,5.929,15.542.757,21.258-4.9,5.426-13.531,3.707-19.5,7.157C2.436,58.715.09,65.787.005,72.452c-.224,15.575,6.45,32.367,16.323,44.245.949,1.143,1.93,2.244,2.954,3.3,37.179,20.264,10.257-41.52,22.667-52.737,7.859-7.1,23.223,2.959,30.186-2.029,3.475-2.489,3.2-7.414.49-11.163C64.266,42.521,50.832,30.226,57.475,23.24c3.55-3.738,10.62-1.688,23.937-1.644,15.386.043,23.318-3.931,17.06-6.858" transform="translate(0.594 0.446)" fill="none"></path>
                <g clip-path="url(#t)">
                  <path d="M98.471,14.737c-6.526.309-13.327,1.763-35.485-10.831C54.35-1,38.325-2.536,31.2,6.79c-4.159,5.459-5.183,13.4-3.957,20.007,1.173,6.356,5.929,15.542.757,21.258-4.9,5.426-13.531,3.707-19.5,7.157C2.436,58.715.09,65.787.005,72.452c-.224,15.575,6.45,32.367,16.323,44.245.949,1.143,1.93,2.244,2.954,3.3,37.179,20.264,10.257-41.52,22.667-52.737,7.859-7.1,23.223,2.959,30.186-2.029,3.475-2.489,3.2-7.414.49-11.163C64.266,42.521,50.832,30.226,57.475,23.24c3.55-3.738,10.62-1.688,23.937-1.644,15.386.043,23.318-3.931,17.06-6.858" transform="translate(0.594 0.446)" fill="url(#u)"></path>
                </g>
              </g>
              <path d="M16.281,130.828H8.658l-.308-50.2L0,2.537,2,0,12.881,76.209,20.63,26.051,22.5,28,14.883,85.055l1.4,45.773" transform="translate(-1483.255 -4922.524)" fill="#2e3e5c"></path>
              <path d="M17.77,1.035,0,27.295V25.132L16.76,0,17.77,1.035" transform="translate(-1464.931 -4901.648)" fill="#2e3e5c"></path>
              <path d="M15.139,21.486,0,.947.837,0l14.62,18.961-.318,2.525" transform="translate(-1493.268 -4901.648)" fill="#2e3e5c"></path>
              <path d="M5.462.31,1,25,0,22.565,4.443,0,5.462.31" transform="translate(-1479.856 -4924.213)" fill="#2e3e5c"></path>
              <g transform="translate(-1027.761 -4837.809)">
                <path d="M227.289,45.589c-3.879-9.4-23.249-27.88-47.826-22.872-26.838,5.468-32.731-6.458-43.8-11.417-20.249-9.079-30.224,13.446-42.882,1.869C75.1-3,60.783-4.644,49.365,10.252,32.951,31.672,6.043,7.953,0,45.589H227.289" transform="translate(0.194 0.524)" fill="none"></path>
                <g clip-path="url(#v)">
                  <path d="M227.289,45.589c-3.879-9.4-23.249-27.88-47.826-22.872-26.838,5.468-32.731-6.458-43.8-11.417-20.249-9.079-30.224,13.446-42.882,1.869C75.1-3,60.783-4.644,49.365,10.252,32.951,31.672,6.043,7.953,0,45.589H227.289" transform="translate(0.194 0.524)" fill="url(#w)"></path>
                </g>
              </g>
              <g transform="translate(-948.594 -4839.571)">
                <path d="M102.381,47.328H0C.581,15.94,8.823,36.09,8.823,36.09s2.709-22.938,8.7-23.868c5.656-.879,8.321,22.5,8.321,22.5S31.992,1.318,40.129.029C47.272-1.1,41.66,30.99,41.66,30.99a19.212,19.212,0,0,1,10.2-3.545c6.694-.275,3.958,6.242,3.958,6.242s8.365-14.511,13.863-14.238c6.888.342,2.146,15.052,2.146,15.052s5.067-4.844,10.38-5.527c10.4-1.335-.642,11.992-.642,11.992s7.38-3.026,20.1-4.949c12.412-1.878,9.834,5.218.713,11.312" transform="translate(0.211 0.547)" fill="none"></path>
                <g clip-path="url(#x)">
                  <path d="M102.381,47.328H0C.581,15.94,8.823,36.09,8.823,36.09s2.709-22.938,8.7-23.868c5.656-.879,8.321,22.5,8.321,22.5S31.992,1.318,40.129.029C47.272-1.1,41.66,30.99,41.66,30.99a19.212,19.212,0,0,1,10.2-3.545c6.694-.275,3.958,6.242,3.958,6.242s8.365-14.511,13.863-14.238c6.888.342,2.146,15.052,2.146,15.052s5.067-4.844,10.38-5.527c10.4-1.335-.642,11.992-.642,11.992s7.38-3.026,20.1-4.949c12.412-1.878,9.834,5.218.713,11.312" transform="translate(0.211 0.547)" fill="url(#y)"></path>
                </g>
              </g>
              <g transform="translate(-1000.492 -5002.605)">
                <path d="M139.761,35.129c.308-18.657-16.264-24.525-32.335-19.316-12.157,3.94-13.142,5.652-43.929-11.9C54.894-1,38.876-2.537,31.689,6.789c-4.2,5.459-5.278,13.4-4.108,20.007,1.135,6.361,5.823,15.542.616,21.258-4.944,5.429-13.564,3.711-19.563,7.158-6.1,3.5-8.48,10.58-8.62,17.246C-.321,88.03,5.573,105.394,16.023,116.7c21.059,22.8,58.082,31.61,92.291,22.889,75.429-19.227,47.061-59.827,38.22-70.59-9.518-11.573-6.984-21.007-6.773-33.871" transform="translate(0.69 0.445)" fill="none"></path>
                <g clip-path="url(#z)">
                  <path d="M139.761,35.129c.308-18.657-16.264-24.525-32.335-19.316-12.157,3.94-13.142,5.652-43.929-11.9C54.894-1,38.876-2.537,31.689,6.789c-4.2,5.459-5.278,13.4-4.108,20.007,1.135,6.361,5.823,15.542.616,21.258-4.944,5.429-13.564,3.711-19.563,7.158-6.1,3.5-8.48,10.58-8.62,17.246C-.321,88.03,5.573,105.394,16.023,116.7c21.059,22.8,58.082,31.61,92.291,22.889,75.429-19.227,47.061-59.827,38.22-70.59-9.518-11.573-6.984-21.007-6.773-33.871" transform="translate(0.69 0.445)" fill="url(#aa)"></path>
                </g>
              </g>
              <g transform="translate(-1000.492 -5002.605)">
                <path d="M108.365,15.538c-.308.086-.625.182-.932.278C95.276,19.747,94.291,21.467,63.5,3.906,54.892-1,38.883-2.536,31.7,6.79c-4.213,5.459-5.3,13.4-4.117,20.007,1.135,6.356,5.814,15.542.616,21.258C23.26,53.481,14.649,51.762,8.65,55.212c-6.1,3.5-8.488,10.575-8.638,17.24C-.314,88.027,6.231,104.819,16.03,116.7a59.878,59.878,0,0,0,4.082,4.487c33.778,20.563-1.346-23.852,26.539-42.194,13.784-9.08,40.393-18.619,28.808-33.07C67,35.354,60.575,31.241,63.161,25.431,64.577,22.225,68.72,19.213,81.8,21.6c17.892,3.269,30.954-3.087,26.565-6.057" transform="translate(0.683 0.446)" fill="none"></path>
                <g clip-path="url(#ab)">
                  <path d="M108.365,15.538c-.308.086-.625.182-.932.278C95.276,19.747,94.291,21.467,63.5,3.906,54.892-1,38.883-2.536,31.7,6.79c-4.213,5.459-5.3,13.4-4.117,20.007,1.135,6.356,5.814,15.542.616,21.258C23.26,53.481,14.649,51.762,8.65,55.212c-6.1,3.5-8.488,10.575-8.638,17.24C-.314,88.027,6.231,104.819,16.03,116.7a59.878,59.878,0,0,0,4.082,4.487c33.778,20.563-1.346-23.852,26.539-42.194,13.784-9.08,40.393-18.619,28.808-33.07C67,35.354,60.575,31.241,63.161,25.431,64.577,22.225,68.72,19.213,81.8,21.6c17.892,3.269,30.954-3.087,26.565-6.057" transform="translate(0.683 0.446)" fill="url(#ac)"></path>
                </g>
              </g>
              <path d="M10.7,134.745h7.626l-.669-50.2L19.282,2.537,17.311,0,13.159,80.126,1.882,30.889,0,32.835,11.092,88.972l-.4,45.773" transform="translate(-931.265 -4926.44)" fill="#2e3e5c"></path>
              <path d="M12.983,0,.026,19.36,0,23.221,14.329,1.156,12.983,0" transform="translate(-913.743 -4912.463)" fill="#2e3e5c"></path>
              <path d="M.862,0,6.536,11.517l-.018,2.488L0,.358.862,0" transform="translate(-920.894 -4919.823)" fill="#2e3e5c"></path>
              <path d="M.818,0l9.544,8.558.783,2.192L0,.6.818,0" transform="translate(-938.117 -4888.993)" fill="#2e3e5c"></path>
              <path d="M10.156,10.855C7.534,4.3,4.816-.493,2.6.041.409.567-.189,4.944.049,10.855H10.156" transform="translate(-963.79 -4802.551)" fill="#3fc3d1"></path>
              <path d="M16.3,5.433C12.456,2.927,8.365.393,4.829.033,1.188-.338.413,2.481,0,5.433H16.3" transform="translate(-986.181 -4797.129)" fill="#3fc3d1"></path>
              <path d="M15.007,5.28A14.817,14.817,0,0,0,5.306.032C1.663-.338-.8,2.564.241,5.28H15.007" transform="translate(-1613.921 -4796.976)" fill="#6ce3f0"></path>
              <g transform="translate(-1109.5 -5110.5)">
                <g transform="matrix(1, 0, 0, 1, -840.96, -138)" filter="url(#ad)">
                  <circle cx="34.5" cy="34.5" r="34.5" transform="translate(840.96 138)" fill="#fff"></circle>
                </g>
                <g transform="translate(17 19)">
                  <path d="M10,0,0,12H20L10,0" transform="translate(8)" fill="#b6eceb"></path><text transform="translate(18 28)" fill="#454f5b" font-size="17.28" font-family="ArialRoundedMTBold, Arial Rounded MT">
                    <tspan x="-17.647" y="0">25%</tspan>
                  </text></g>
              </g>
              <g transform="translate(-1322.5 -5124.5)">
                <g transform="matrix(1, 0, 0, 1, -627.96, -124)" filter="url(#af)">
                  <circle cx="38.5" cy="38.5" r="38.5" transform="translate(627.96 124)" fill="#fff"></circle>
                </g>
                <g transform="translate(19 21)">
                  <path d="M11,0,0,13H22L11,0" transform="translate(9)" fill="#007ace"></path><text transform="translate(20 31)" fill="#454f5b" font-size="19.2" font-family="ArialRoundedMTBold, Arial Rounded MT">
                    <tspan x="-19.608" y="0">30%</tspan>
                  </text></g>
              </g>
              <g transform="translate(-1281.5 -5216.5)" opacity="0.5">
                <g transform="matrix(1, 0, 0, 1, -668.96, -32)" filter="url(#ah)">
                  <circle cx="26.95" cy="26.95" r="26.95" transform="translate(668.96 32)" fill="#fff"></circle>
                </g>
                <g transform="translate(13.3 14.7)">
                  <path d="M7.7,0,0,9.1H15.4L7.7,0" transform="translate(6.3)" fill="#007ace"></path><text transform="translate(14 22.1)" fill="#454f5b" font-size="13.44" font-family="ArialRoundedMTBold, Arial Rounded MT">
                    <tspan x="-13.725" y="0">12%</tspan>
                  </text></g>
              </g>
              <g transform="translate(-1220.5 -5170.5)">
                <g transform="matrix(1, 0, 0, 1, -729.96, -78)" filter="url(#aj)">
                  <circle cx="31.185" cy="31.185" r="31.185" transform="translate(729.96 78)" fill="#fff"></circle>
                </g>
                <g transform="translate(15.39 16.01)">
                  <path d="M9,0,0,10H17L9,0" transform="translate(7.61 0.99)" fill="#ffc48b"></path><text transform="translate(16.2 26.53)" fill="#454f5b" font-size="15.552" font-family="ArialRoundedMTBold, Arial Rounded MT">
                    <tspan x="-15.882" y="0">18%</tspan>
                  </text></g>
              </g>
              <g transform="translate(-1122.5 -5196.5)" opacity="0.5">
                <g transform="matrix(1, 0, 0, 1, -827.96, -52)" filter="url(#al)">
                  <circle cx="31.185" cy="31.185" r="31.185" transform="translate(827.96 52)" fill="#fff"></circle>
                </g>
                <g transform="translate(15.39 16.01)">
                  <path d="M9,0,0,10H17L9,0" transform="translate(7.61 0.99)" fill="#ffc48b"></path><text transform="translate(16.2 26.53)" fill="#454f5b" font-size="15.552" font-family="ArialRoundedMTBold, Arial Rounded MT">
                    <tspan x="-15.882" y="0">12%</tspan>
                  </text></g>
              </g>
              <g transform="translate(-1159.5 -5243.5)">
                <g transform="matrix(1, 0, 0, 1, -790.96, -5)" filter="url(#an)">
                  <circle cx="27" cy="27" r="27" transform="translate(790.96 5)" fill="#fff"></circle>
                </g>
                <g transform="translate(13 15)">
                  <path d="M8,0,0,9H15L8,0" transform="translate(6)" fill="#95cdb1"></path><text transform="translate(14 22)" fill="#454f5b" font-size="13.44" font-family="ArialRoundedMTBold, Arial Rounded MT">
                    <tspan x="-13.725" y="0">10%</tspan>
                  </text></g>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </section>
    <section class="relative bg-gray-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-20 text-center">
      <div>
        <h2 class="text-3xl leading-tight font-bold">How FairRate works you ask?</h2>
      </div>

      <div class="flex flex-col md:flex-row items-start justify-between mt-12">
        <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4">
          <img src="images/icon-home-1.svg" alt="" class="mx-auto h-32">
          <h4 class="text-xl font-bold leading-tight mt-8">Apply with your home</h4>
          <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0">
          <img src="images/icon-home-2.svg" alt="" class="mx-auto h-32">
          <h4 class="text-xl font-bold leading-tight mt-8">Complete the form</h4>
          <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0">
          <img src="images/icon-home-3.svg" alt="" class="mx-auto h-32">
          <h4 class="text-xl font-bold leading-tight mt-8">Choose the fair rate</h4>
          <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div class="mt-12 md:mt-20 w-full md:max-w-3xl mx-auto">
        <p class="text-xl">“FairRate is beautiful, elegant and easy to apply. I’ve been able to apply for an
          amazing rate in just a minutes. Thank you very much for creating this impressive service!”</p>
        <p class="text-xl font-bold text-blue-600 mt-4">Valeria Boltneva</p>
        <p class="text-sm uppercase tracking-wider text-gray-700">Director of Adrian Stefan.Inc</p>
      </div>
    </section>
    </div>
    </body>
</html>
