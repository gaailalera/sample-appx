<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <link rel="icon" href="prclogo.png" type="image/gif">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </head>
    <style>
                .sentence::after {
                content: '';
                position: absolute;   
                right: -20px;
                bottom: 6px;
                    width: 14px;
                    height: 2px;
                background-color: #DAFDBA;
                animation: normal 0.5s linear infinite;
                }

                    @keyframes normal {
                    0% {
                        opacity: 1;
                    }
                    100% {
                        opacity: 0;
                    }
              }
    </style>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow ">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
        
            <!-- Page Content -->
            <main>
                {{ $slot }}
                
            </main>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const sentences = [
                    'HELLO! WELCOME TO PRC INVENTORY MANAGEMENT SYSTEM.',
                    'SHESHHH',
                    'PRC ENSURES PROFESSIONAL STANDARDS WITH INTEGRITY.',
                    'UPHOLDING COMPETENCE, FOSTERING TRUST, SHAPING PROFESSIONAL FUTURES.',
                    'IN PRC, QUALITY STANDARDS MEET DEDICATION FOR PROFESSIONAL EXCELLENCE.',               
                    ];
                    
                                let currentIndex = 0;
                                let offset = 0;
                                const sentenceElement = document.querySelector('.sentence');
                                let forwards = true;
                                let skipCount = 0;
                                const skipDelay = 15;
                                const speed = 40;

                                const updateSentence = () => {
                                    sentenceElement.textContent = sentences[currentIndex].substring(0, offset);
                                };

                                const handleAnimation = () => {
                                    if (forwards) {
                                    if (offset >= sentences[currentIndex].length) {
                                        if (++skipCount === skipDelay) {
                                        forwards = false;
                                        skipCount = 0;
                                        }
                                    }
                                    } else if (offset === 0) {
                                    forwards = true;
                                    currentIndex = (currentIndex + 1) % sentences.length;
                                    }

                                    if (skipCount === 0) {
                                    forwards ? offset++ : offset--;
                                    }

                                    updateSentence();
                                };

                                setInterval(handleAnimation, speed);
                                });
                                </script>
                </body>
            </html>
