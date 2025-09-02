<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Follower Layout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f7f9fc;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, padding 0.3s ease-out;
    }

    .accordion-content.active {
        max-height: 200px;
        /* Adjust as needed */
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .accordion-item.active .accordion-icon {
        transform: rotate(180deg);
    }

    .selected-btn {
        background-color: #374151;
        /* A darker gray to indicate selection */
        color: white;
        border-color: #4B5563;
    }

    .selected-btn svg {
        fill: white;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-8px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .phone-mockup {
        animation: float 3s ease-in-out infinite;
    }

    .phone-mockup .button-group button {
        transition: all 0.2s ease-in-out;
        cursor: pointer;
    }

    .phone-mockup .button-group button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .hidden {
        display: none !important;
    }

    /* Fade-in animation for feature cards */
    .feature-card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .feature-card.animate-fade-in {
        opacity: 1;
        transform: translateY(0);
    }

    .feature-card.delay-100 {
        transition-delay: 100ms;
    }

    .feature-card.delay-200 {
        transition-delay: 200ms;
    }

    .feature-card.delay-300 {
        transition-delay: 300ms;
    }

    .feature-card.delay-400 {
        transition-delay: 400ms;
    }

    .feature-card.delay-500 {
        transition-delay: 500ms;
    }
    </style>
</head>

<body>
    @yield('content')
</body>

</html>