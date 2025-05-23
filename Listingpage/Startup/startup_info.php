<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Information Portal</title>
    <link rel="stylesheet" href="../../output.css">
</head>

<body class="bg-black text-gray-200 flex h-screen overflow-hidden">
    <!-- Fixed Left Sidebar -->
    <div class="w-80 bg-black border-r border-gray-800 p-6 h-full overflow-y-auto fixed left-0 top-0">
        <!-- Back Link -->
        <a href="../Startup/startups.php" class="flex items-center text-gray-400 hover:text-white mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Startups
        </a>

        <!-- Company Logo -->
        <div class="w-14 h-14 bg-[#0A0A0A] rounded-xl flex items-center justify-center mb-5">
            <span class="text-2xl font-bold">AI</span>
        </div>

        <!-- Company Name and Description -->
        <h1 class="text-4xl font-bold mb-2">AlphaInsight</h1>
        <p class="text-gray-400 mb-8">AI-powered market intelligence for enterprise decisions</p>

        <!-- Company Details -->
        <div class="space-y-0">
            <div class="flex justify-between py-3 border-b border-gray-800">
                <div class="text-gray-400">Founded</div>
                <div class="text-white">2021</div>
            </div>

            <div class="flex justify-between py-3 border-b border-gray-800">
                <div class="text-gray-400">Headquarters</div>
                <div class="text-white">San Francisco, CA</div>
            </div>

            <div class="flex justify-between py-3 border-b border-gray-800">
                <div class="text-gray-400">Team Size</div>
                <div class="text-white">35 employees</div>
            </div>

            <div class="flex justify-between py-3 border-b border-gray-800">
                <div class="text-gray-400">Funding Stage</div>
                <div class="text-white">Series A</div>
            </div>

            <div class="flex justify-between py-3 border-b border-gray-800">
                <div class="text-gray-400">Total Funding</div>
                <div class="text-white">$18.5M</div>
            </div>

            <div class="flex justify-between py-3 border-b border-gray-800">
                <div class="text-gray-400">Revenue Model</div>
                <div class="text-white">SaaS Subscription</div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-3 mt-8">
            <button
                class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded font-medium transition-colors">
                Website
            </button>
            <button
                class="bg-transparent border border-gray-700 hover:border-gray-500 text-white px-6 py-2 rounded font-medium transition-colors">
                Project Repo
            </button>
        </div>
    </div>

    <!-- Scrollable Main Content -->
    <div class="flex-1 p-6 overflow-y-auto ml-80">

        <div class="w-[100%] h-100 bg-gradient-to-br from-gray-900 to-black rounded-lg mb-10 border border-gray-700 overflow-hidden">
            <!-- image div -->
             <img src="../../Images/events-06.jpg" alt="" class="w-full h-100 rounded-lg object-cover">

        </div>
        <!-- Metrics Cards -->
        <div class="grid grid-cols-3 gap-4 mb-8">
            <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg p-5 text-center border border-gray-700">
                <div class="text-2xl font-bold mb-1">$18.5M</div>
                <div class="text-gray-400 text-sm">Total Funding</div>
            </div>

            <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg p-5 text-center border border-gray-700">
                <div class="text-2xl font-bold mb-1">35</div>
                <div class="text-gray-400 text-sm">Team Members</div>
            </div>

            <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg p-5 text-center border border-gray-700">
                <div class="text-2xl font-bold mb-1">86%</div>
                <div class="text-gray-400 text-sm">YoY Growth</div>
            </div>
        </div>

        <!-- Overview Section -->
        <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg p-6 mb-6 border border-gray-700">
            <h3 class="text-lg font-semibold mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-purple-500" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 16H12V12H11M12 8H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Overview
            </h3>
            <p class="mb-4">
                AlphaInsight develops an AI-powered market intelligence platform that helps enterprises make data-driven
                decisions. Their proprietary algorithms analyze vast amounts of market data, competitor movements, and
                consumer behavior to provide actionable insights and predictions.
            </p>
            <p>
                The company's flagship product, InsightOS, integrates with existing business intelligence tools and
                offers real-time alerts, customizable dashboards, and automated reporting for executives and
                decision-makers.
            </p>
        </div>

        <!-- Technology Stack -->
        <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg p-6 mb-6 border border-gray-700">
            <h3 class="text-lg font-semibold mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-purple-500" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 20L14 4M18 8L22 12L18 16M6 16L2 12L6 8" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Technology Stack
            </h3>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">Python</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">TensorFlow</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">PyTorch</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">React</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">Node.js</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">GraphQL</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">AWS</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">Kubernetes</span>
            </div>
        </div>

        <!-- Industry & Tags -->
        <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg p-6 mb-6 border border-gray-700">
            <h3 class="text-lg font-semibold mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-purple-500" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 7H7.01M7 3H12C12.5523 3 13 3.44772 13 4V11H4V4C4 3.44772 4.44772 3 5 3H7ZM17 21H12C11.4477 21 11 20.5523 11 20V13H20V20C20 20.5523 19.5523 21 19 21H17ZM17 17H17.01M17 3H19C19.5523 3 20 3.44772 20 4V11H13V4C13 3.44772 13.4477 3 14 3H17Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Industry & Tags
            </h3>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-purple-900/50 text-purple-300 rounded-full text-sm">Artificial
                    Intelligence</span>
                <span class="px-3 py-1 bg-purple-900/50 text-purple-300 rounded-full text-sm">Business
                    Intelligence</span>
                <span class="px-3 py-1 bg-purple-900/50 text-purple-300 rounded-full text-sm">Data Analytics</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">SaaS</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">Enterprise</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">B2B</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">Market Intelligence</span>
                <span class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">Predictive Analytics</span>
            </div>
        </div>



        <!-- Team Section -->
        <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg p-6 mb-6 border border-gray-700">
            <h3 class="text-lg font-semibold mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-purple-500" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Leadership Team
            </h3>

            <div class="space-y-4">
                <!-- Team Member 1 -->
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full overflow-hidden mr-4">
                        <img src="../../Images/user-01.jpg" alt="Sarah Chen" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-medium">Sarah Chen</h4>
                        <p class="text-gray-400 text-sm">Co-Founder & CEO</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full overflow-hidden mr-4">
                        <img src="../../Images/user-01.jpg" alt="Michael Rodriguez" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-medium">Michael Rodriguez</h4>
                        <p class="text-gray-400 text-sm">Co-Founder & CTO</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full overflow-hidden mr-4">
                        <img src="../../Images/user-01.jpg" alt="Jessica Kim" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-medium">Jessica Kim</h4>
                        <p class="text-gray-400 text-sm">Chief Product Officer</p>
                    </div>
                </div>
            </div>
        </div>




    </div>
</body>

</html>