@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

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
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #090c12}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#090c12;background-color:rgba(9,12,18,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#090c12;color:rgba(9,12,18,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#090c12;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#090c12;color:rgba(9,12,18,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#090c12;border-color:rgba(9,12,18,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#090c12;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-100 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    

                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 497.6 497.6" style="enable-background:new 0 0 497.6 497.6;" xml:space="preserve">
<path style="fill:#E8EFEE;" d="M51.8,448c-5.6,0-5.6-7.2-5.6-12V23.2c0-4.8,0-7.2,5.6-7.2h344.8c4.8,0,9.6,2.4,9.6,7.2V436
	c0,4.8-4.8,12-9.6,12H51.8z"/>
<path style="fill:#9AA5A4;" d="M390.2,32v400h-328V32H390.2 M396.6,0H51.8C37.4,0,30.2,9.6,30.2,23.2V436c0,13.6,7.2,28,21.6,28
	h344.8c13.6,0,25.6-14.4,25.6-28V23.2C422.2,9.6,410.2,0,396.6,0L396.6,0z"/>
<path style="fill:#FFFFFF;" d="M396.6,16H51.8c-5.6,0-5.6,2.4-5.6,7.2V436c0,3.2,0,5.6,1.6,7.2l356-425.6C401.4,16,399,16,396.6,16z
	"/>
<path style="fill:#B3BCBB;" d="M414.2,5.6C409.4,1.6,403,0,396.6,0H51.8C37.4,0,30.2,9.6,30.2,23.2V436c0,8,1.6,13.6,5.6,20
	l26.4-26.4V32h328v3.2L414.2,5.6z"/>
<g>
	<path style="fill:#E8EFEE;" d="M133.4,120h188.8c6.4,0,12-5.6,12-12s-5.6-12-12-12H133.4c-6.4,0-12,5.6-12,12S127,120,133.4,120z"
		/>
	<path style="fill:#E8EFEE;" d="M133.4,184h108.8c6.4,0,12-5.6,12-12s-4.8-12-11.2-12H133.4c-6.4,0-12,5.6-12,12S127,184,133.4,184z
		"/>
	<path style="fill:#E8EFEE;" d="M322.2,224H133.4c-6.4,0-12,9.6-12,16s5.6,16,12,16h188.8c6.4,0,12-9.6,12-16S329.4,224,322.2,224z"
		/>
	<path style="fill:#E8EFEE;" d="M243,296H133.4c-6.4,0-12,5.6-12,12s5.6,12,12,12h108.8c6.4,0,12-5.6,12-12
		C255,301.6,249.4,296,243,296z"/>
</g>
<g>
	<path style="fill:#B1BAB9;" d="M129.4,112h188.8c6.4,0,12-5.6,12-12s-4.8-12-12-12H129.4c-6.4,0-12,5.6-12,12S123,112,129.4,112z"
		/>
	<path style="fill:#B1BAB9;" d="M318.2,224H129.4c-6.4,0-12,5.6-12,12s5.6,12,12,12h188.8c6.4,0,12-5.6,12-12S325.4,224,318.2,224z"
		/>
</g>
<g>
	<path style="fill:#9AA5A4;" d="M239,288H129.4c-6.4,0-12,5.6-12,12s5.6,12,12,12h108.8c6.4,0,12-5.6,12-12
		C251,293.6,245.4,288,239,288z"/>
	<path style="fill:#9AA5A4;" d="M239,152H129.4c-6.4,0-12,5.6-12,12s5.6,12,12,12h108.8c6.4,0,12-5.6,12-12
		C251,157.6,245.4,152,239,152z"/>
	<circle style="opacity:0.3;fill:#9AA5A4;enable-background:new    ;" cx="358.2" cy="389.6" r="108"/>
</g>
<circle style="fill:#5AC117;" cx="344.6" cy="389.6" r="108"/>
<path style="fill:#44A307;" d="M344.6,281.6c60,0,108,48,108,108s-48,108-108,108"/>
<path style="fill:#4DB20D;" d="M268.6,313.6c42.4-42.4,110.4-42.4,152.8,0s42.4,110.4,0,152.8"/>
<path style="fill:#44A307;" d="M350.2,441.6c-3.2,0-5.6-0.8-8-3.2l-49.6-49.6c-4.8-4.8-4.8-12,0-16.8s12-4.8,16.8,0l41.6,41.6l96-96
	c4.8-4.8,12-4.8,16.8,0s4.8,12,0,16.8l-104,104C355.8,440.8,352.6,441.6,350.2,441.6z"/>
<path style="fill:#FFFFFF;" d="M345.4,428.8c-3.2,0-5.6-0.8-8-3.2L287,376c-4.8-4.8-4.8-12,0-16.8s12-4.8,16.8,0l41.6,41.6l96-96
	c4.8-4.8,12-4.8,16.8,0s4.8,12,0,16.8l-104,104C351,428,347.8,428.8,345.4,428.8z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

                <a href=""><h1>Ingeniería de sistemas</h1></a>
                   



                




                </div>
                

                

               
            </div>
        </div>
    </body>
</html>


    
@stop
