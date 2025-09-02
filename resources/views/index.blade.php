@extends('layouts.app')

@section('content')
<!-- Navigation Bar -->
@include('components.navbar')

<!-- Hero Section -->
<header class="w-full bg-slate-900 text-white text-center rounded-b-[4rem] p-8 md:p-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 to-slate-800 opacity-90"></div>
    <div class="relative max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
        <!-- Left Side (Text Content) -->
        <div class="md:w-1/2 w-full text-center md:text-left space-y-4">
            <div
                class="inline-flex items-center space-x-2 px-3 py-1 bg-white/10 rounded-full text-xs font-semibold uppercase">
                <span class="text-yellow-400">Now</span>
                <span class="text-white">Best Sub to Unlock Service</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-3 h-3 text-yellow-400 animate-pulse">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.042 21.672 13.623 11.23a.75.75 0 0 1 .87-1.04l3.153 1.577a.75.75 0 0 0 1.04-.87L15.328 3.958a.75.75 0 0 0-1.04.87l1.419 10.442a.75.75 0 0 1-.87 1.04l-3.153-1.577a.75.75 0 0 0-1.04.87l1.672 3.344Z" />
                </svg>
            </div>


            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Monetize your content with Subsunlock</h1>
            <p class="text-gray-300 text-lg max-w-xl mx-auto md:mx-0">Turn your followers into subscribers with our sub
                to unlock system. Generate Subsunlock links that only open when users subscribe to your social media.
            </p>
            <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4 pt-4">
                <button
                    class="bg-blue-600 text-white px-6 py-3 rounded-md font-medium hover:bg-blue-700 transition-colors">Create
                    link</button>
                <a href="{{ route('login') }}"
                    class="bg-transparent border border-white text-white px-6 py-3 rounded-md font-medium hover:bg-white/10 transition-colors inline-block text-center">Join
                    now</a>
            </div>
        </div>

        <!-- Right Side (Mobile Mockup) -->
        <div class="md:w-1/2 w-full flex-shrink-0 flex justify-center mt-8 md:mt-0">
            <div
                class="phone-mockup relative w-full max-w-xs aspect-[9/18] bg-gray-900 rounded-[3rem] shadow-2xl p-4 overflow-hidden">
                <div class="absolute inset-x-0 top-2 h-4 bg-gray-800 rounded-full mx-auto w-24"></div>
                <div id="preview-content"
                    class="h-full w-full rounded-[2.5rem] flex flex-col p-3 space-y-2 overflow-y-auto bg-gradient-to-b from-gray-900 via-slate-900 to-black text-white">
                    <!-- Modern status bar -->
                    <div class="status-bar flex items-center justify-between text-[11px] text-gray-400 px-2 pt-1">
                        <div class="status-left">9:41</div>
                        <div class="status-center">LTE</div>
                        <div class="status-right flex items-center gap-2"><span
                                class="w-3 h-2 bg-green-400 rounded-sm"></span>100%</div>
                    </div>
                    <!-- App Header -->
                    <div class="flex items-center justify-between text-white mb-2">
                        <span class="font-bold text-sm">Subsunlock</span>
                        <div class="flex items-center bg-blue-600 px-3 py-1 rounded-full text-xs">
                            <a id="create-link-btn" href="#main-section" class="mr-1 cursor-pointer">+Create Link</a>
                        </div>
                    </div>

                    <!-- Unlock Section -->
                    <div class="flex-grow flex flex-col items-center justify-center p-2 text-white">
                        <div id="preview-title-container" class="text-center">
                            <h2 id="preview-title" class="font-semibold text-lg">Unlock Your Link</h2>
                            <p id="preview-subtitle" class="text-xs text-gray-400">Complete the actions and unlock the
                                link</p>
                        </div>
                        <div id="preview-buttons" class="mt-4 w-full space-y-2">
                            <button class="w-full bg-red-600 text-white rounded-full py-2 text-sm font-medium">
                                Subscribe on Youtube
                            </button>
                            <button class="w-full bg-red-600 text-white rounded-full py-2 text-sm font-medium">
                                Live Video on Youtube
                            </button>
                            <button class="w-full bg-green-600 text-white rounded-full py-2 text-sm font-medium">
                                Join Group on Whatsapp
                            </button>
                            <button class="w-full bg-blue-600 text-white rounded-full py-2 text-sm font-medium">
                                Join on Telegram
                            </button>
                            <button class="w-full bg-gray-700 text-white rounded-full py-2 text-sm font-medium">
                                Follow on Tiktok
                            </button>
                            <button class="w-full bg-purple-600 text-white rounded-full py-2 text-sm font-medium">
                                Follow on Instagram
                            </button>
                            <button class="w-full bg-blue-600 text-white rounded-full py-2 text-sm font-medium">
                                Follow on Facebook
                            </button>
                        </div>

                        <div class="w-full mt-4 text-xs text-gray-400 text-center">
                            <span id="preview-progress-text">Unlock Progress 0/7</span>
                            <div class="w-full bg-gray-700 rounded-full h-1 mt-1">
                                <div id="preview-progress-bar" class="bg-green-500 h-1 rounded-full w-[0%]"></div>
                            </div>
                        </div>

                        <button id="preview-unlock-btn"
                            class="w-full bg-gray-500 text-white rounded-full py-3 text-sm font-bold mt-4 cursor-not-allowed"
                            disabled>
                            Unlock Link
                        </button>
                    </div>

                    <!-- Footer -->
                    <div class="text-center text-xs text-gray-500 mt-4">
                        ©2023 - Made with <span class="font-bold">Subsunlock</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content Area (form section) -->
<main id="main-section" class="w-full max-w-7xl mx-auto flex flex-col items-center p-6 md:p-12 gap-8">
    <header class="text-center max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold">Grow Your Social Media Followers Organically.</h1>
        <p class="text-sm text-gray-400 mt-2">Subsunlock helps you convert your viewers into subscribers by requiring
            them to complete actions before unlocking your content.</p>
    </header>

    <!-- Form and Control Panel -->
    <div class="w-full flex flex-col md:flex-row items-start justify-center gap-8">

        <!-- Left Side (Mobile Mockup) -->
        <!-- Visible on md+ screens, hidden on small screens. Positioned to the left of the control panel. -->
        <div id="second-mockup-container" class="hidden md:flex md:w-1/2 flex-shrink-0 justify-center mt-8 md:mt-0">
            <div
                class="phone-mockup relative w-full max-w-xs aspect-[9/18] bg-gray-900 rounded-[3rem] shadow-2xl p-4 overflow-hidden">
                <div class="absolute inset-x-0 top-2 h-4 bg-gray-800 rounded-full mx-auto w-24"></div>
                <div id="second-preview-content"
                    class="h-full w-full rounded-[2.5rem] flex flex-col p-3 space-y-2 overflow-y-auto bg-gradient-to-b from-gray-900 via-slate-900 to-black text-white">
                    <!-- Modern status bar -->
                    <div class="status-bar flex items-center justify-between text-[11px] text-gray-400 px-2 pt-1">
                        <div class="status-left">9:41</div>
                        <div class="status-center">LTE</div>
                        <div class="status-right flex items-center gap-2"><span
                                class="w-3 h-2 bg-green-400 rounded-sm"></span>100%</div>
                    </div>
                    <!-- App Header -->
                    <div class="flex items-center justify-between text-white mb-2">
                        <span class="font-bold text-sm">Subsunlock</span>
                        <a id="mockup-create-link" href="#main-section"
                            class="flex items-center bg-blue-600 px-3 py-1 rounded-full text-xs cursor-pointer">
                            <span class="mr-1">+</span> Create Link
                        </a>
                    </div>

                    <!-- Unlock Section -->
                    <div class="flex-grow flex flex-col items-center justify-center p-2 text-white">
                        <div id="second-preview-title-container" class="text-center">
                            <h2 id="second-preview-title" class="font-semibold text-lg">Unlock Your Link</h2>
                            <p id="second-preview-subtitle" class="text-xs text-gray-400">Complete the actions and
                                unlock the link</p>
                        </div>
                        <div id="second-preview-buttons" class="mt-4 w-full space-y-2">
                            <!-- Preview buttons will be injected here by JS -->
                        </div>

                        <div class="w-full mt-4 text-xs text-gray-400 text-center">
                            <span id="second-preview-progress-text">Unlock Progress 0/7</span>
                            <div class="w-full bg-gray-700 rounded-full h-1 mt-1">
                                <div id="second-preview-progress-bar" class="bg-green-500 h-1 rounded-full w-[0%]">
                                </div>
                            </div>
                        </div>

                        <button id="second-preview-unlock-btn"
                            class="w-full bg-gray-500 text-white rounded-full py-3 text-sm font-bold mt-4 cursor-not-allowed"
                            disabled>
                            Unlock Link
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div id="Generate" class="w-full md:w-1/2 lg:w-1/2 bg-white rounded-lg shadow-lg p-6 space-y-6 self-start">
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="relative w-full sm:w-1/2">
                    <input id="title-input" type="text" placeholder=" "
                        class="peer w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 transition-colors">
                    <label
                        class="absolute left-3 -top-2 text-xs text-gray-500 bg-white px-1 pointer-events-none peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-500 transition-all">
                        Enter your title.. (optional)
                    </label>
                </div>
                <div class="relative w-full sm:w-1/2">
                    <input id="subtitle-input" type="text" placeholder=" "
                        class="peer w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 transition-colors">
                    <label
                        class="absolute left-3 -top-2 text-xs text-gray-500 bg-white px-1 pointer-events-none peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-500 transition-all">
                        Enter your sub title.. (optional)
                    </label>
                </div>
            </div>

            <!-- Social Media Buttons -->
            <div id="social-buttons" class="flex flex-wrap items-center gap-2">
                <button
                    class="social-btn bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-red-600" data-social="Youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <rect x="2" y="5" width="20" height="14" rx="4" stroke-width="1.5" class="text-white"></rect>
                        <path d="M10 8l6 4-6 4V8z" fill="currentColor"></path>
                    </svg>
                    <span>Youtube</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-red-600" data-social="Whatsapp">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <path d="M21 11.5A9 9 0 1 0 11.5 21L8 22l1.5-3.5A9 9 0 0 0 21 11.5z" stroke-width="1.2"></path>
                        <path
                            d="M15.5 14.5c-.5 0-1-.2-1.4-.3-.6-.2-1-.3-1.5.1-.4.4-1 .3-1.6-.3-.6-.6-1-1.6-1.3-2.1-.3-.5 0-1 .2-1.4.2-.4.5-.4.9-.4.4 0 .9 0 1.4.1.5.1 1 .1 1.4.1.5 0 .9-.1 1.3.3.4.4.6.9.6 1.4 0 .5-.1.9-.3 1.3-.2.4-.5.8-.9 1z"
                            fill="currentColor"></path>
                    </svg>
                    <span>Whatsapp</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-sky-500 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-sky-500" data-social="Telegram">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <path d="M22 3L2 12l5 2 2 5 13-16z" fill="currentColor"></path>
                    </svg>
                    <span>Telegram</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-black text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-black" data-social="TikTok">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <path d="M9 8v8a4 4 0 1 0 4-4V6" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" fill="currentColor"></path>
                    </svg>
                    <span>TikTok</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-purple-600" data-social="Website">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z" stroke-width="1.2"></path>
                        <path d="M2 12h20M12 2c2.2 3 2.2 9 0 12c-2.2-3-2.2-9 0-12z" stroke-width="1"></path>
                    </svg>
                    <span>Website</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-blue-600" data-social="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <rect x="3" y="3" width="18" height="18" rx="5" stroke-width="1.2"></rect>
                        <circle cx="12" cy="12" r="3" fill="currentColor"></circle>
                    </svg>
                    <span>Instagram</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-blue-800 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-blue-800" data-social="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <path d="M15 3h3v4h-3v14h-4V7H9V3h3V1.5C12 1 12.6 1 13 1h2v2z" fill="currentColor"></path>
                    </svg>
                    <span>Facebook</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-gray-400 text-black px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-gray-400" data-social="X">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <path d="M18 6L6 18M6 6l12 12" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span>X</span>
                    <span class="font-bold">+</span>
                </button>
                <button
                    class="social-btn bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-2"
                    data-color="bg-blue-600" data-social="Discord">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor">
                        <path
                            d="M21 16.5c-1.2 1-2.8 1.6-4.5 1.8-1 .1-2.1.1-3.5.1s-2.5 0-3.5-.1c-1.7-.2-3.3-.8-4.5-1.8V7c1.2-1 2.8-1.6 4.5-1.8 1-.1 2.1-.1 3.5-.1s2.5 0 3.5.1c1.7.2 3.3.8 4.5 1.8v9.5z"
                            stroke-width="0.8"></path>
                        <path d="M9 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"
                            fill="currentColor"></path>
                    </svg>
                    <span>Discord</span>
                    <span class="font-bold">+</span>
                </button>

            </div>

            <!-- Advanced Option Button -->
            <div class="text-center">
                <button id="advanced-option-toggle"
                    class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-300 transition-colors">
                    Advanced Option <span id="advanced-toggle-sign" class="ml-1 font-bold">+</span>
                </button>
            </div>

            <!-- Advanced Options Panel -->
            <div id="advanced-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden mt-4">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-gray-600">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        Advanced Options
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="password"
                        class="action-option bg-gray-300 text-gray-800 px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Password
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="not"
                        class="action-option bg-gray-300 text-gray-800 px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Not
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="expired"
                        class="action-option bg-gray-300 text-gray-800 px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Expired
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="thumbnail"
                        class="action-option bg-gray-300 text-gray-800 px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Thumbnail
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="advanced-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="password">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M12 1v4" stroke-width="1.2" stroke-linecap="round"></path>
                                <rect x="6" y="7" width="12" height="10" rx="2" stroke-width="1.2"></rect>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="not">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="expired">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M12 7v5l3 3" stroke-width="1.2" stroke-linecap="round"></path>
                                <circle cx="12" cy="12" r="9" stroke-width="1.2"></circle>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="thumbnail">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke-width="1.2"></rect>
                                <circle cx="9" cy="10" r="2" fill="currentColor"></circle>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons (shown when a social button is selected, e.g. Youtube) -->
            <div id="youtube-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-red-600">
                            <path
                                d="M12.75 1.5a.75.75 0 0 0-1.5 0V8.665c0 .245.215.445.46.445h.58a.45.45 0 0 0 .45-.445V1.5Z" />
                            <path fill-rule="evenodd"
                                d="M12.558 13.992a2.25 2.25 0 0 1 2.242 2.242v4.516a2.25 2.25 0 0 1-2.242 2.242h-1.516a2.25 2.25 0 0 1-2.242-2.242v-4.516a2.25 2.25 0 0 1 2.242-2.242h1.516Zm6.75-3.328a.75.75 0 0 0-1.5 0V15a.75.75 0 0 1-1.5 0v-4.336a.75.75 0 0 0-1.28-.528l-3.528 3.528a.75.75 0 0 0 0 1.06l3.528 3.528a.75.75 0 0 0 1.06-1.06l-3.265-3.265 3.265-3.265a.75.75 0 0 0-.232-1.28Zm-15 0a.75.75 0 0 0-1.5 0V15a.75.75 0 0 1-1.5 0v-4.336a.75.75 0 0 0-1.28-.528L3.66 14.772a.75.75 0 0 0 0 1.06l3.528 3.528a.75.75 0 0 0 1.06-1.06l-3.265-3.265 3.265-3.265a.75.75 0 0 0-.232-1.28Z"
                                clip-rule="evenodd" />
                        </svg>
                        Youtube
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="subscribe"
                        class="action-option bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Subscribe
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="subscribe2"
                        class="action-option bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Subscribe #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like"
                        class="action-option bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="comment"
                        class="action-option bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Comment
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like_comment"
                        class="action-option bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like + Comment
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>
                <!-- Inputs for selected actions (hidden by default) -->
                <div id="youtube-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="subscribe">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M10 14l-3-3a4 4 0 1 1 5.657-5.657l1.414 1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 10l3 3a4 4 0 1 1-5.657 5.657l-1.414-1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="subscribe2">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M10 14l-3-3a4 4 0 1 1 5.657-5.657l1.414 1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 10l3 3a4 4 0 1 1-5.657 5.657l-1.414-1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="like">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M10 14l-3-3a4 4 0 1 1 5.657-5.657l1.414 1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 10l3 3a4 4 0 1 1-5.657 5.657l-1.414-1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="comment">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M10 14l-3-3a4 4 0 1 1 5.657-5.657l1.414 1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 10l3 3a4 4 0 1 1-5.657 5.657l-1.414-1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="like_comment">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M10 14l-3-3a4 4 0 1 1 5.657-5.657l1.414 1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 10l3 3a4 4 0 1 1-5.657 5.657l-1.414-1.414" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Whatsapp Action Panel (sibling of youtube) -->
            <div id="whatsapp-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-red-600">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        Whatsapp
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="join"
                        class="action-option bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Join WhatsApp
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="join2"
                        class="action-option bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Join WhatsApp #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="whatsapp-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="join">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="join2">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Telegram Action Panel (sibling of youtube) -->
            <div id="telegram-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-sky-500">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        Telegram
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="join"
                        class="action-option bg-sky-500 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Join
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="join2"
                        class="action-option bg-sky-500 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Join #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="telegram-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="join">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="join2">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- TikTok Action Panel -->
            <div id="tiktok-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-gray-700">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        TikTok
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="follow"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="tiktok-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="follow">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter account URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="like">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter video URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Action Panel -->
            <div id="instagram-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-pink-500">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        Instagram
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="follow"
                        class="action-option bg-pink-500 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like"
                        class="action-option bg-pink-500 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="instagram-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="follow">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter account URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="like">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter post URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Facebook Action Panel -->
            <div id="facebook-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-blue-700">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        Facebook
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="follow1"
                        class="action-option bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow #1
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="follow2"
                        class="action-option bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="follow3"
                        class="action-option bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow #3
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like1"
                        class="action-option bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like #1
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like2"
                        class="action-option bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like3"
                        class="action-option bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like #3
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="facebook-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="follow1">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="follow2">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="follow3">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="like1">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="like2">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="action-input hidden" data-for="like3">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- X (Twitter) Action Panel -->
            <div id="x-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-gray-700">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        X
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="follow1"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow #1
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="follow2"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="follow3"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Follow #3
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like1"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like #1
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like2"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="like3"
                        class="action-option bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Like #3
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="x-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="follow1">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="action-input hidden" data-for="follow2">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="action-input hidden" data-for="follow3">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="action-input hidden" data-for="like1">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="action-input hidden" data-for="like2">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="action-input hidden" data-for="like3">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Discord Action Panel -->
            <div id="discord-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-indigo-600">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        Discord
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="join1"
                        class="action-option bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Join #1
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="join2"
                        class="action-option bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Join #2
                        <span class="ml-1 font-bold">+</span>
                    </button>
                    <button type="button" data-action="join3"
                        class="action-option bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Join #3
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="discord-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="join1">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="action-input hidden" data-for="join2">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="action-input hidden" data-for="join3">
                        <input type="text" placeholder="Enter URL"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Website Action Panel -->
            <div id="website-action-panel" class="bg-gray-100 rounded-lg p-4 space-y-4 hidden">
                <div class="flex items-center justify-between text-sm font-semibold text-gray-600">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 text-gray-600">
                            <path d="M12 1.5a10.5 10.5 0 1 0 0 21 10.5 10.5 0 0 0 0-21z" />
                        </svg>
                        Website
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" data-action="visit"
                        class="action-option bg-gray-200 text-gray-800 px-4 py-2 rounded-full text-sm font-medium flex items-center gap-1">
                        Visit Website
                        <span class="ml-1 font-bold">+</span>
                    </button>
                </div>

                <div id="website-action-inputs" class="mt-4 space-y-3">
                    <div class="action-input hidden" data-for="visit">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M3 12h18M12 3v18" stroke-width="1.2" stroke-linecap="round"></path>
                            </svg>
                            <input type="text" placeholder="Enter URL"
                                class="flex-1 border border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>


            <!-- Select and Action Buttons -->
            <div class="flex items-center justify-end gap-4 mt-6">
                <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                    @include('components.mockup-styles')
                </div>
                <button
                    class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md font-medium hover:bg-gray-300 transition-colors">
                    Generate
                </button>
                <button id="preview-btn"
                    class="bg-blue-600 text-white px-6 py-2 rounded-md font-medium hover:bg-blue-700 transition-colors">
                    Preview
                </button>
            </div>

        </div>
    </div>
</main>

<!-- Features Section -->
<section class="w-full max-w-7xl mx-auto p-6 md:p-12 text-center">
    <h2 class="text-3xl font-bold mb-4">Features of Subsunlock</h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-10">Subsunlock helps you grow your brand so you can focus on what
        matters, creating content.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Feature Card 1 -->
        <div
            class="feature-card bg-white rounded-lg p-6 shadow-md border border-gray-200 flex flex-col items-center text-center delay-100">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.42 15.17L17.25 21l2.58-2.58m-1.95-3.32h.008v.008h-.008Zm0 0-7.394 7.393M7.5 13.5v-.008h-.008V13.5H7.5Zm0 0-.102 1.638L16.273 1.26a.75.75 0 0 1 1.04 1.04l-14.75 14.75M16.273 1.26a.75.75 0 0 1 1.04 1.04L8.71 16.29a.75.75 0 0 0-.232 1.28L4.66 21.34a.75.75 0 0 1-1.06-1.06l3.528-3.528a.75.75 0 0 0 0-1.06L3.66 14.772a.75.75 0 0 1 1.28-.528L14.772 17.5a.75.75 0 0 0 1.06-1.06l-3.528-3.528a.75.75 0 0 1 .528-1.28Z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Free & Easy</h3>
            <p class="text-gray-500 text-sm">Subsunlock is completely free, just create a social key & share. take your
                content to the next level and reach a wider audience.</p>
        </div>
        <!-- Feature Card 2 -->
        <div
            class="feature-card bg-white rounded-lg p-6 shadow-md border border-gray-200 flex flex-col items-center text-center delay-200">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.555 1.76a.75.75 0 0 0-.75-.75h-2.55a.75.75 0 0 0-.75.75v3.185c0 .265.215.48.48.48H12a.75.75 0 0 0 .75-.75V1.5a.75.75 0 0 1 .75-.75h.51a.75.75 0 0 1 .75.75V4.74c0 .265.215.48.48.48h1.22c.265 0 .48-.215.48-.48V1.5c0-.414-.336-.75-.75-.75H13.5a.75.75 0 0 0-.75.75v3.24c0 .265.215.48.48.48h1.22c.265 0 .48-.215.48-.48V1.5c0-.414-.336-.75-.75-.75H13.5Z" />
                    <path fill-rule="evenodd"
                        d="M12 1.5a.75.75 0 0 0-.75-.75h-2.55a.75.75 0 0 0-.75.75v3.185c0 .265.215.48.48.48H12a.75.75 0 0 0 .75-.75V1.5a.75.75 0 0 1 .75-.75h.51a.75.75 0 0 1 .75.75V4.74c0 .265.215.48.48.48h1.22c.265 0 .48-.215.48-.48V1.5c0-.414-.336-.75-.75-.75H13.5a.75.75 0 0 0-.75.75v3.24c0 .265.215.48.48.48h1.22c.265 0 .48-.215.48-.48V1.5c0-.414-.336-.75-.75-.75H13.5Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Always Free Tool</h3>
            <p class="text-gray-500 text-sm">Subsunlock is completely free to use and we have always been able to keep
                it free and easy to use.</p>
        </div>
        <!-- Feature Card 3 -->
        <div
            class="feature-card bg-white rounded-lg p-6 shadow-md border border-gray-200 flex flex-col items-center text-center delay-300">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a3.75 3.75 0 0 1-5.303-5.303l1.5-1.5a2.25 2.25 0 0 1 3.182 0l1.5 1.5a.75.75 0 0 0 1.06-1.06l-1.5-1.5a3.75 3.75 0 0 0-5.303 0l-1.5 1.5a4.5 4.5 0 0 0 0 6.364l4.5 4.5a4.5 4.5 0 0 0 6.364 0l1.5-1.5a.75.75 0 0 0-1.06-1.06l-1.5 1.5a3.75 3.75 0 0 1-5.303 0l-4.5-4.5a3.75 3.75 0 0 1 0-5.303l1.5-1.5a2.25 2.25 0 0 0 0-3.182Z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Easy Shortlink Pages</h3>
            <p class="text-gray-500 text-sm">We provide simple short link pages so that your visitors can easily
                download/destination link.</p>
        </div>
        <!-- Feature Card 4 -->
        <div
            class="feature-card bg-white rounded-lg p-6 shadow-md border border-gray-200 flex flex-col items-center text-center delay-400">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18ZM15 9l-6 6M15 15l-6-6" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">No Click Manipulation</h3>
            <p class="text-gray-500 text-sm">We never Stop/Manipulate/Fake the number of clicks of our partners as
                others do.</p>
        </div>
        <!-- Feature Card 5 -->
        <div
            class="feature-card bg-white rounded-lg p-6 shadow-md border border-gray-200 flex flex-col items-center text-center delay-500">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21.75a9.75 9.75 0 1 0 0-19.5 9.75 9.75 0 0 0 0 19.5ZM12 6v6l4 2-1 3-3-4Z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Highest Rate</h3>
            <p class="text-gray-500 text-sm">We provide a $7 CPM for worldwide traffic, ensuring the best price for our
                publishers.</p>
        </div>
        <!-- Feature Card 6 -->
        <div
            class="feature-card bg-white rounded-lg p-6 shadow-md border border-gray-200 flex flex-col items-center text-center delay-100">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18ZM15 9l-6 6M15 15l-6-6" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Helping Creators</h3>
            <p class="text-gray-500 text-sm">You can use our services to increase your social media subscribers,
                Followers and more.</p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="w-full max-w-7xl mx-auto p-6 md:p-12">
    <header class="text-center mb-10">
        <h2 class="text-3xl font-bold mb-4">Frequently asked questions</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Turn fans into followers. Get the recognition you deserve by using
            social unlock to allow your fans to take action before unlocking your content.</p>
    </header>

    <div class="flex flex-col md:flex-row gap-6">
        <!-- FAQ Column 1 -->
        <div class="w-full md:w-1/2 space-y-4">
            <div class="accordion-item bg-white rounded-lg shadow-md border border-gray-200 p-4 cursor-pointer"
                onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-gray-800">What is Subsunlock / sub to unlock / sub for unlock?</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor"
                        class="accordion-icon w-5 h-5 text-gray-500 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="accordion-content">
                    <p class="text-sm text-gray-500">Use social unlocking to offer fans digital items such as
                        downloadable files, coupon codes, secret links, or YouTube streams. To unlock the digital item,
                        fans complete one or more actions that you customize.</p>
                </div>
            </div>
            <div class="accordion-item bg-white rounded-lg shadow-md border border-gray-200 p-4 cursor-pointer"
                onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-gray-800">How does Subsunlock work?</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor"
                        class="accordion-icon w-5 h-5 text-gray-500 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="accordion-content">
                    <p class="text-sm text-gray-500">Subsunlock works by generating a special link that requires users
                        to complete a specific action, such as subscribing to a YouTube channel or following a social
                        media page, before they can access the hidden content or link.</p>
                </div>
            </div>
            <div class="accordion-item bg-white rounded-lg shadow-md border border-gray-200 p-4 cursor-pointer"
                onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-gray-800">Is using this site safe or following community rules?</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor"
                        class="accordion-icon w-5 h-5 text-gray-500 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="accordion-content">
                    <p class="text-sm text-gray-500">Yes, our site is designed to be safe and to follow the community
                        rules of major social media platforms. We do not use any manipulative tactics and all actions
                        are performed by real users.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Column 2 -->
        <div class="w-full md:w-1/2 space-y-4">
            <div class="accordion-item bg-white rounded-lg shadow-md border border-gray-200 p-4 cursor-pointer"
                onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-gray-800">Subscribers provided by this website is real or fake?</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor"
                        class="accordion-icon w-5 h-5 text-gray-500 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="accordion-content">
                    <p class="text-sm text-gray-500">The subscribers provided by locked links will be 100% real because
                        they will be relevant to your channel and your videos and they will watch each of your videos
                        because the people who subscribe to you will be engaged with your content and they will follow
                        each of your videos.</p>
                </div>
            </div>
            <div class="accordion-item bg-white rounded-lg shadow-md border border-gray-200 p-4 cursor-pointer"
                onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-gray-800">Is there a limit to generating links?</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor"
                        class="accordion-icon w-5 h-5 text-gray-500 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="accordion-content">
                    <p class="text-sm text-gray-500">There are no limits to how many links you can generate. You can
                        create as many as you need to share your content and grow your audience.</p>
                </div>
            </div>
            <div class="accordion-item bg-white rounded-lg shadow-md border border-gray-200 p-4 cursor-pointer"
                onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-gray-800">What happened if users use adult type links?</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor"
                        class="accordion-icon w-5 h-5 text-gray-500 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="accordion-content">
                    <p class="text-sm text-gray-500">Adult links are strictly prohibited and will be banned. We have
                        automated systems in place to detect and remove such content to ensure a safe environment for
                        all users.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('components.footer')

<script>
function toggleFAQ(element) {
    const content = element.querySelector('.accordion-content');
    const isActive = content.classList.contains('active');

    // Close all other active accordion items
    document.querySelectorAll('.accordion-content.active').forEach(item => {
        if (item !== content) {
            item.classList.remove('active');
            item.parentElement.classList.remove('active');
        }
    });

    // Toggle the clicked one
    content.classList.toggle('active');
    element.classList.toggle('active');
}

document.getElementById('preview-btn').addEventListener('click', function() {
    const title = document.getElementById('title-input').value || "Unlock Your Link";
    const subtitle = document.getElementById('subtitle-input').value ||
        "Complete the actions and unlock the link";

    // Show the second mockup
    const secondMockupContainer = document.getElementById('second-mockup-container');
    secondMockupContainer.classList.remove('hidden');

    document.getElementById('second-preview-title').textContent = title;
    document.getElementById('second-preview-subtitle').textContent = subtitle;

    const socialButtonsContainer = document.getElementById('social-buttons');
    const selectedButtons = socialButtonsContainer.querySelectorAll('.social-btn.selected');
    const previewButtonsContainer = document.getElementById('second-preview-buttons');
    previewButtonsContainer.innerHTML = '';

    if (selectedButtons.length > 0) {
        selectedButtons.forEach(button => {
            const socialName = button.getAttribute('data-social');
            const socialColor = button.getAttribute('data-color');

            // create modern card-like preview button
            const card = document.createElement('button');
            const color = socialColor || 'bg-gray-700';
            card.type = 'button';
            card.className =
                `${color} text-white w-full rounded-xl py-3 px-4 text-sm font-semibold shadow-md transform transition-all duration-150 hover:-translate-y-1 hover:shadow-lg flex items-center justify-between`;

            // label text
            let labelText = `Follow on ${socialName}`;
            if (socialName === 'Youtube') labelText = 'Subscribe on Youtube';
            if (socialName === 'Whatsapp') labelText = 'Join Group on Whatsapp';
            if (socialName === 'Telegram') labelText = 'Join on Telegram';
            if (socialName === 'Website') labelText = 'Visit Website';
            if (socialName === 'TikTok') labelText = 'Follow on TikTok';
            if (socialName === 'Instagram') labelText = 'Follow on Instagram';
            if (socialName === 'Facebook') labelText = 'Follow on Facebook';

            const label = document.createElement('span');
            label.textContent = labelText;

            // chevron icon
            const chevron = document.createElement('span');
            chevron.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 opacity-90"><path fill-rule="evenodd" d="M7.21 14.78a.75.75 0 0 1 0-1.06L10.94 10 7.21 6.28a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0z" clip-rule="evenodd"/></svg>';

            // Attempt to attach the first visible non-empty action input URL for this social
            try {
                const inputsContainer = document.getElementById(
                    `${socialName.toLowerCase()}-action-inputs`);
                if (inputsContainer) {
                    let url = '';
                    inputsContainer.querySelectorAll('.action-input').forEach(ai => {
                        if (!ai.classList.contains('hidden')) {
                            const inp = ai.querySelector('input');
                            if (inp && inp.value && !url) url = inp.value.trim();
                        }
                    });
                    if (url) card.setAttribute('data-url', url);
                }
            } catch (err) {
                // ignore if naming doesn't match or container missing
            }

            card.appendChild(label);
            card.appendChild(chevron);
            previewButtonsContainer.appendChild(card);
        });
    } else {
        // If no buttons are selected, show a placeholder
        const placeholder = document.createElement('div');
        placeholder.className = 'w-full text-center text-gray-500 text-sm italic';
        placeholder.textContent = 'Select social media to preview';
        previewButtonsContainer.appendChild(placeholder);
    }

    const totalSelected = selectedButtons.length;
    const progressText = document.getElementById('second-preview-progress-text');
    const progressBar = document.getElementById('second-preview-progress-bar');
    const unlockBtn = document.getElementById('second-preview-unlock-btn');

    if (totalSelected > 0) {
        progressText.textContent = `Unlock Progress 0/${totalSelected}`;
        progressBar.style.width = '0%';

        unlockBtn.classList.remove('bg-gray-500', 'cursor-not-allowed');
        unlockBtn.classList.add('bg-green-500');
        unlockBtn.disabled = false;
    } else {
        progressText.textContent = `Unlock Progress 0/0`;
        progressBar.style.width = '0%';

        unlockBtn.classList.add('bg-gray-500', 'cursor-not-allowed');
        unlockBtn.classList.remove('bg-green-500');
        unlockBtn.disabled = true;
    }
});

document.querySelectorAll('.social-btn').forEach(button => {
    button.addEventListener('click', function() {
        console.debug('social-btn clicked:', this.getAttribute('data-social'), 'selected=', this
            .classList.contains('selected'));
        this.classList.toggle('selected');

        // toggle plus/minus sign inside the button (assumes last child is + span)
        const plusSpan = this.querySelector('.font-bold');
        if (plusSpan) {
            plusSpan.textContent = this.classList.contains('selected') ? '-' : '+';
        }

        // Toggle colors based on selection
        if (this.classList.contains('selected')) {
            this.classList.remove('bg-red-600', 'bg-green-500', 'bg-sky-500', 'bg-black',
                'bg-purple-600', 'bg-blue-600', 'bg-blue-800', 'bg-gray-400');
            this.classList.add('bg-gray-800', 'text-white', 'hover:bg-gray-700');
        } else {
            const socialColor = this.getAttribute('data-color');
            this.classList.remove('bg-gray-800', 'text-white', 'hover:bg-gray-700');
            this.classList.add(socialColor);
            if (socialColor === 'bg-gray-400' || socialColor === 'bg-white') {
                this.classList.remove('text-white');
                this.classList.add('text-black');
            } else {
                this.classList.remove('text-black');
                this.classList.add('text-white');
            }
        }

        // Toggle action panel visibility for any social that follows the naming convention: {name}-action-panel
        const socialName = this.getAttribute('data-social');
        if (socialName) {
            const panelId = `${socialName.toLowerCase()}-action-panel`;
            const inputsId = `${socialName.toLowerCase()}-action-inputs`;
            const panel = document.getElementById(panelId);
            if (!panel) return;

            if (this.classList.contains('selected')) {
                panel.classList.remove('hidden');
            } else {
                panel.classList.add('hidden');
                // reset options (+) and hide inputs for this panel
                panel.querySelectorAll('.action-option').forEach(opt => {
                    opt.classList.remove('selected');
                    const s = opt.querySelector('.font-bold');
                    if (s) s.textContent = '+';
                });
                const inputsContainer = document.getElementById(inputsId);
                if (inputsContainer) {
                    inputsContainer.querySelectorAll('.action-input').forEach(ai => ai.classList.add(
                        'hidden'));
                    inputsContainer.querySelectorAll('input').forEach(i => i.value = '');
                }
            }
        }
    });
});

// Advanced Option toggle behavior: show/hide the advanced panel and reset state when hidden
const advToggle = document.getElementById('advanced-option-toggle');
if (advToggle) {
    advToggle.addEventListener('click', function() {
        const panel = document.getElementById('advanced-action-panel');
        const sign = document.getElementById('advanced-toggle-sign');
        if (!panel) return;
        panel.classList.toggle('hidden');
        if (sign) sign.textContent = panel.classList.contains('hidden') ? '+' : '-';

        // When hiding, reset any selected action options and clear inputs
        if (panel.classList.contains('hidden')) {
            panel.querySelectorAll('.action-option').forEach(opt => {
                opt.classList.remove('selected');
                const s = opt.querySelector('.font-bold');
                if (s) s.textContent = '+';
            });
            const inputs = document.getElementById('advanced-action-inputs');
            if (inputs) {
                inputs.querySelectorAll('.action-input').forEach(ai => ai.classList.add('hidden'));
                inputs.querySelectorAll('input').forEach(i => i.value = '');
            }
        } else {
            // Optionally focus first button when shown
            const firstBtn = panel.querySelector('.action-option');
            if (firstBtn) firstBtn.focus();
        }
    });
}

// Action option toggles inside action panels (youtube, whatsapp)
document.addEventListener('click', function(e) {
    const opt = e.target.closest('.action-option');
    if (!opt) return;
    console.debug('action-option clicked:', opt.getAttribute('data-action'));
    opt.classList.toggle('selected');
    const span = opt.querySelector('.font-bold');
    if (span) span.textContent = opt.classList.contains('selected') ? '-' : '+';

    // find nearest action panel (works for any panel with id ending in -action-panel)
    const panel = opt.closest('[id$="-action-panel"]');
    if (!panel) return;
    const inputsContainer = panel.querySelector('[id$="action-inputs"]');
    if (!inputsContainer) return;

    const action = opt.getAttribute('data-action');
    const targetInput = inputsContainer.querySelector(`.action-input[data-for="${action}"]`);
    if (!targetInput) return;

    if (opt.classList.contains('selected')) {
        targetInput.classList.remove('hidden');
        const input = targetInput.querySelector('input');
        if (input) input.focus();
    } else {
        targetInput.classList.add('hidden');
        const input = targetInput.querySelector('input');
        if (input) input.value = '';
    }
});

// Intersection Observer for feature cards
const featureCards = document.querySelectorAll('.feature-card');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-in');
            observer.unobserve(entry.target); // Stop observing once animated
        }
    });
}, {
    threshold: 0.1 // Trigger when 10% of the item is visible
});

featureCards.forEach(card => {
    observer.observe(card);
});

// Delegated handler for clicks on dynamically created preview buttons in second mockup
document.getElementById('second-preview-buttons').addEventListener('click', function(e) {
    const btn = e.target.closest('button');
    if (!btn) return;
    const url = btn.getAttribute('data-url');
    if (url) {
        // open in new tab/window
        window.open(url, '_blank');
    } else {
        // small visual feedback if no URL
        btn.classList.add('ring-2', 'ring-white/30');
        setTimeout(() => btn.classList.remove('ring-2', 'ring-white/30'), 300);
    }
});

// Play demo: open second mockup, run preview logic and animate unlock progress automatically
function playDemo() {
    // trigger the Preview flow (copy of behaviors used in preview-btn)
    const previewBtn = document.getElementById('preview-btn');
    if (previewBtn) previewBtn.click();

    // After preview is shown, animate a faux progress over the available preview buttons
    const previewButtonsContainer = document.getElementById('second-preview-buttons');
    const progressBar = document.getElementById('second-preview-progress-bar');
    const progressText = document.getElementById('second-preview-progress-text');
    const unlockBtn = document.getElementById('second-preview-unlock-btn');

    // Wait a tick for preview to populate
    setTimeout(() => {
        const cards = previewButtonsContainer.querySelectorAll('button');
        const total = cards.length || 0;
        if (total === 0) return;

        let completed = 0;
        progressBar.style.width = '0%';
        progressText.textContent = `Unlock Progress 0/${total}`;
        unlockBtn.disabled = true;
        unlockBtn.classList.remove('bg-green-500');
        unlockBtn.classList.add('bg-gray-500', 'cursor-not-allowed');

        const interval = setInterval(() => {
            if (completed >= total) {
                clearInterval(interval);
                progressBar.style.width = '100%';
                progressText.textContent = `Unlock Progress ${total}/${total}`;
                unlockBtn.disabled = false;
                unlockBtn.classList.remove('bg-gray-500', 'cursor-not-allowed');
                unlockBtn.classList.add('bg-green-500');
                // briefly pulse the unlock button
                unlockBtn.classList.add('ring-4', 'ring-green-300/40');
                setTimeout(() => unlockBtn.classList.remove('ring-4', 'ring-green-300/40'), 600);
                return;
            }
            completed++;
            const pct = Math.round((completed / total) * 100);
            progressBar.style.width = `${pct}%`;
            progressText.textContent = `Unlock Progress ${completed}/${total}`;
            // highlight the corresponding card
            const card = cards[completed - 1];
            if (card) {
                card.classList.add('ring-2', 'ring-white/30');
                setTimeout(() => card.classList.remove('ring-2', 'ring-white/30'), 400);
            }
        }, 700);
    }, 150);
}

// Wire header and mockup create link anchors to playDemo
const headerCreate = document.getElementById('create-link-btn');
if (headerCreate) headerCreate.addEventListener('click', function(e) {
    e.preventDefault();
    playDemo();
});
const mockupCreate = document.getElementById('mockup-create-link');
if (mockupCreate) mockupCreate.addEventListener('click', function(e) {
    e.preventDefault();
    playDemo();
});
</script>
@endsection