<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ElevateX - Startup Registration</title>
  <link rel="stylesheet" href="../../output.css">
</head>

<body class="bg-black text-white min-h-screen flex flex-col relative">


  <!-- Header -->
  <header class="py-6 px-8 flex justify-between items-center relative z-10">
    <a href="../../Home/main.php" class="text-2xl font-bold text-white">ElevateX</a>
    <a href="../login/index.php" class="text-sm flex items-center">
      <span class="mr-2">Already have an account?</span>
      <span class="text-pink-500 flex items-center">Log In
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
      </span>
    </a>
  </header>

  <!-- Main Content -->
  <div class="flex-1 flex items-center justify-center px-4 relative z-10 py-8">
    <!-- Signup Card -->
    <div class="w-full max-w-2xl">
      <div class="bg-gradient-to-br from-gray-900 to-black backdrop-blur-sm rounded-xl p-8 shadow-lg border border-gray-800">


        <!-- Modified sections of the code - Replace the form section with this -->

        <div class="text-center mb-8">
          <h1 class="text-2xl font-bold mb-2">Investor Registration</h1>
          <p class="text-gray-400">Join ElevateX to discover and invest in promising startups</p>
        </div>

        <form id="signupForm" class="space-y-6" action="../../config/addInvestor.php" method="POST">
          <!-- Personal Information -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="fullName" class="block mb-2 font-medium">Full Name</label>
              <input type="text" id="fullName" name="full_name"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="John Smith" required />
            </div>

            <div>
              <label for="email" class="block mb-2 font-medium">Email Address</label>
              <input type="email" id="email" name="email"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="investor@example.com" required />
            </div>

            <div>
              <label for="password" class="block mb-2 font-medium">Password</label>
              <input type="password" id="password" name="password"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="••••••••" required />
              <input type="checkbox" onclick="togglePassword()"> Show Password<br>
            </div>

            <!-- <div>
              <label for="confirmPassword" class="block mb-2 font-medium">Confirm Password</label>
              <input type="password" id="confirmPassword"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="••••••••" required />
            </div> -->
          </div>

          <!-- Professional Information -->
          <div class="pt-4 border-t border-gray-800">
            <h2 class="text-xl font-medium mb-4">Professional Information</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="organization" class="block mb-2 font-medium">Organization/Firm</label>
                <input type="text" id="organization" name="organization"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="Venture Capital Firm Name" />
              </div>

              <div>
                <label for="position" class="block mb-2 font-medium">Position/Title</label>
                <input type="text" id="position" name="title"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="Managing Partner" required />
              </div>

              <div>
                <label for="investorType" class="block mb-2 font-medium">Investor Type</label>
                <select id="investorType" name="investor_type"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="" disabled selected>Select investor type</option>
                  <option value="angel">Angel Investor</option>
                  <option value="vc">Venture Capitalist</option>
                  <option value="pe">Private Equity</option>
                  <option value="corporate">Corporate Investor</option>
                  <option value="family-office">Family Office</option>
                  <option value="accelerator">Accelerator/Incubator</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div>
                <label for="linkedIn" class="block mb-2 font-medium">LinkedIn Profile</label>
                <input type="url" id="linkedIn" name="linkedin"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="https://linkedin.com/in/yourprofile" required />
              </div>
            </div>
          </div>

          <!-- Investment Preferences -->
          <div class="pt-4 border-t border-gray-800">
            <h2 class="text-xl font-medium mb-4">Investment Preferences</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="investmentStage" class="block mb-2 font-medium">Preferred Investment Stage</label>
                <select id="investmentStage" name="investment_stage"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="pre-seed">Pre-Seed</option>
                  <option value="seed">Seed</option>
                  <option value="series-a">Series A</option>
                  <option value="series-b">Series B</option>
                  <option value="series-c">Series C or later</option>
                  <option value="growth">Growth Stage</option>
                </select>
              </div>

              <div>
                <label for="investmentRange" class="block mb-2 font-medium">Typical Investment Range</label>
                <select id="investmentRange" name="investment_range"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="" disabled selected>Select range</option>
                  <option value="0-50k">$0 - $50K</option>
                  <option value="50k-250k">$50K - $250K</option>
                  <option value="250k-1m">$250K - $1M</option>
                  <option value="1m-5m">$1M - $5M</option>
                  <option value="5m+">$5M+</option>
                </select>
              </div>

              <div class="md:col-span-2">
                <label for="sectors" class="block mb-2 font-medium">Preferred Sectors</label>
                <select id="sectors" name="sectors"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="fintech">FinTech</option>
                  <option value="healthtech">HealthTech</option>
                  <option value="edtech">EdTech</option>
                  <option value="ecommerce">E-Commerce</option>
                  <option value="saas">SaaS</option>
                  <option value="ai-ml">AI/ML</option>
                  <option value="cleantech">CleanTech</option>
                  <option value="biotech">BioTech</option>
                  <option value="blockchain">Blockchain</option>
                  <option value="consumer">Consumer</option>
                  <option value="enterprise">Enterprise</option>
                </select>
              </div>

              <div class="md:col-span-2">
                <label for="investmentThesis" class="block mb-2 font-medium">Investment Thesis</label>
                <textarea id="investmentThesis" rows="3" name="thesis"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="Briefly describe your investment strategy and what you look for in startups..."
                  required></textarea>
              </div>
            </div>
          </div>

          <!-- Accreditation -->
          <div class="pt-4 border-t border-gray-800">
            <h2 class="text-xl font-medium mb-4">Accreditation</h2>

            <div class="space-y-4">
              <div class="flex items-start">
                <input type="checkbox" id="accredited" name="is_accredited"
                  class="mt-1 w-4 h-4 bg-gray-800 border-gray-700 rounded focus:ring-pink-500" required />
                <label for="accredited" class="ml-2 text-sm text-gray-300">
                  I confirm that I am an accredited investor as defined by SEC regulations
                </label>
              </div>
            </div>
          </div>

          <!-- Terms and Conditions -->
          <div class="flex items-start pt-4">
            <input type="checkbox" id="terms"
              class="mt-1 w-4 h-4 bg-gray-800 border-gray-700 rounded focus:ring-pink-500" required />
            <label for="terms" class="ml-2 text-sm text-gray-300">
              I agree to the <a href="#" class="text-pink-400 hover:underline">Terms of Service</a> and <a href="#"
                class="text-pink-400 hover:underline">Privacy Policy</a>
            </label>
          </div>

          <button type="submit"
            class="w-full py-3 px-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-medium rounded-lg flex items-center justify-center">
            Create Investor Account
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </form>

        <div class="mt-8 pt-6 border-t border-gray-800">
          <div class="text-center mb-4 text-sm text-gray-400">Or register with</div>
          <div class="grid grid-cols-2 gap-4">
            <button
              class="py-3 px-4 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
              </svg>
              GitHub
            </button>
            <button
              class="py-3 px-4 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                  fill="#4285F4" />
                <path
                  d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                  fill="#34A853" />
                <path
                  d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                  fill="#FBBC05" />
                <path
                  d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                  fill="#EA4335" />
                <path d="M1 1h22v22H1z" fill="none" />
              </svg>
              Google
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Corner geometric elements -->
  <div class="fixed top-0 right-0">
    <svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg"
      class="opacity-20">
      <path d="M0 0L250 0L250 250C111.929 250 0 138.071 0 0Z" fill="url(#corner-gradient)" />
      <defs>
        <linearGradient id="corner-gradient" x1="0" y1="0" x2="250" y2="250" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#9254e2" />
          <stop offset="1" stop-color="#ff4b93" />
        </linearGradient>
      </defs>
    </svg>
  </div>

  <div class="fixed bottom-0 left-0">
    <svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg"
      class="opacity-20">
      <path d="M250 250L0 250L0 0C138.071 0 250 111.929 250 250Z" fill="url(#corner-gradient-2)" />
      <defs>
        <linearGradient id="corner-gradient-2" x1="250" y1="250" x2="0" y2="0" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#9254e2" />
          <stop offset="1" stop-color="#ff4b93" />
        </linearGradient>
      </defs>
    </svg>
  </div>


  <script>
    function togglePassword() {
      var passwordField = document.getElementById("password");
      // Check the checkbox state
      if (passwordField.type === "password") {
        passwordField.type = "text"; // Show the password
      } else {
        passwordField.type = "password"; // Hide the password
      }
    }
  </script>
</body>

</html>