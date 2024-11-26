<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Sign Up - Hospital Info System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .social-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.75rem;
        border-radius: 0.375rem;
        font-size: 1rem;
        width: 100%;
      }

      .google-btn {
        background-color: #db4437;
        color: white;
      }

      .facebook-btn {
        background-color: #1877f2;
        color: white;
      }

      .google-btn:hover {
        background-color: #c1351d;
      }

      .facebook-btn:hover {
        background-color: #166fe5;
      }
    </style>
  </head>
  <body class="font-sans">
    <!-- Sign Up Container -->
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
      <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center mb-6">Sign Up</h2>
        <form action="./login.html" method="GET">
          <!-- Full Name -->
          <div class="mb-4">
            <label
              for="full-name"
              class="block text-sm font-medium text-gray-700"
              >Full Name</label
            >
            <input
              type="text"
              id="full-name"
              name="full-name"
              required
              class="w-full p-3 border border-gray-300 rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- Email Address -->
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700"
              >Email Address</label
            >
            <input
              type="email"
              id="email"
              name="email"
              required
              class="w-full p-3 border border-gray-300 rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- Password -->
          <div class="mb-4">
            <label
              for="password"
              class="block text-sm font-medium text-gray-700"
              >Password</label
            >
            <input
              type="password"
              id="password"
              name="password"
              required
              class="w-full p-3 border border-gray-300 rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- Confirm Password -->
          <div class="mb-4">
            <label
              for="confirm-password"
              class="block text-sm font-medium text-gray-700"
              >Confirm Password</label
            >
            <input
              type="password"
              id="confirm-password"
              name="confirm-password"
              required
              class="w-full p-3 border border-gray-300 rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- Submit Button -->
          <div class="mb-4">
            <button
              type="submit"
              class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-500"
            >
              Sign Up
            </button>
          </div>

          <!-- Social Media Sign-Up Buttons -->
          <div class="space-y-4">
            <!-- Google Sign Up -->
            <button type="button" class="social-btn google-btn">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 48 48"
                width="24"
                height="24"
              >
                <path
                  fill="#fff"
                  d="M23.49 12.3c0-.75-.08-1.47-.23-2.13H12v4.1h6.33c-.28 1.55-1.07 2.88-2.28 3.38v2.8h3.62c2.12-1.96 3.34-4.88 3.34-8.15z"
                />
                <path
                  fill="#fff"
                  d="M12 7.91c1.1 0 2.05.37 2.79.99l2.08-2.08C15.56 5.03 14.03 4 12 4c-2.69 0-4.98 1.02-6.7 2.7l2.91 2.29c.91-.6 2.04-.96 3.79-.96z"
                />
                <path
                  fill="#fff"
                  d="M12 2c1.57 0 2.92.53 4.02 1.42L18.88.58C17.43.07 15.77 0 14.02 0C9.85 0 6.35 2.06 4.64 4.96l2.91 2.29c.91-.6 2.04-.96 3.79-.96z"
                />
              </svg>
              <span>Sign Up with Google</span>
            </button>

            <!-- Facebook Sign Up -->
            <button type="button" class="social-btn facebook-btn">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="text-white"
              >
                <path
                  d="M10 0c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10zm1.65 10.75c0 .46-.28.84-.64.84h-1.47v2.92h-1.92v-2.92h-1.09v-1.57h1.09v-.91c0-1.07.61-1.74 1.61-1.74.47 0 .97.07 1.46.14v1.64h-.93c-.67 0-.97.34-.97.98v1.04h1.62l-.18 1.57h-1.45v2.92h1.92c.35 0 .64-.28.64-.64v-1.72h1.09v1.72c0 .35-.28.64-.64.64h-1.93v1.92h1.93c1.09 0 1.93-.84 1.93-1.93v-2.62h1.61c.38 0 .64-.28.64-.64v-.61z"
                />
              </svg>
              <span>Sign Up with Facebook</span>
            </button>
          </div>

          <!-- Redirect to Log In -->
          <p class="text-center text-sm text-gray-600 mt-4">
            Already have an account?
            <a href="login.html" class="text-blue-600 hover:underline"
              >Log In</a
            >
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
