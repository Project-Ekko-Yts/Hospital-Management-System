<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register Patient - Hospital Information System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind CSS CDN -->
  </head>
  <body class=" font-sans antialiased">
    <!-- Main Container -->
    <div class="flex h-screen">
      <!-- Sidebar -->
      <nav class="w-64 bg-blue-800 text-white p-5">
        <div class="text-center text-xl font-semibold mb-8">
          <h2>Hospital Info System</h2>
        </div>
        <ul>
          <li class="mb-4">
            <a href="admindashboard.html" class="hover:text-blue-300"
              >Dashboard</a
            >
          </li>
          <li class="mb-4">
            <a href="registration.html" class="hover:text-blue-300"
              >Register Patient</a
            >
          </li>
          <li class="mb-4">
            <a href="doctorconsultation.html" class="hover:text-blue-300"
              >Doctor Consultation</a
            >
          </li>

          <li class="mb-4">
            <a href="treatment.html" class="hover:text-blue-300">Treatment</a>
          </li>
          <li class="mb-4">
            <a href="billing.html" class="hover:text-blue-300">Billing</a>
          </li>
          <li class="mb-4">
            <a href="employeedashboard.html" class="hover:text-blue-300"
              >Employee Dashboard</a
            >
          </li>
          <li class="mt-8">
            <a href="./login.html" class="hover:text-blue-300">Logout</a>
          </li>
        </ul>
      </nav>

      <div class="flex-1 p-6" style="background-image: url(https://content.presspage.com/uploads/2110/1920_mdrh-east.jpg?10000);">
        <!-- Header Section -->
        <header class="flex justify-between items-center mb-8">
          <a
            href="employeedashboard.html"
            class="flex justify-between items-center w-full"
          >
            <h1 class="text-3xl font-semibold"></h1>
            <div class="flex items-center space-x-4">
              <span class="text-lg">Welcome, Pat</span>
              <img
                src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t39.30808-1/427990154_3692324207668347_7927056567437163865_n.jpg?stp=dst-jpg_s200x200&_nc_cat=100&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeEcJQ4irZeZadRZD89lokol72tVYkrVVe_va1ViStVV76vyFRt4LCEEsb1lDLq-uf5IBF74sV_2FNckjFHmgDvO&_nc_ohc=e_FQr6jsSNcQ7kNvgH4hfMK&_nc_zt=24&_nc_ht=scontent.fmnl14-1.fna&_nc_gid=ALynKVOHfvrUKeN4hDHncQQ&oh=00_AYDkUli2WhQ3ZzB4xpngPEhlM2YSau6FJ8QFQP7P3TEJqg&oe=67312718"
                alt="User Avatar"
                class="w-10 h-10 rounded-full"
              />
            </div>
          </a>
        </header>

      <!-- Registration Form Area -->
      <div class="flex-1 p-6">
        <!-- Header Section -->
        <header class="mb-8">
          <h1 class="text-3xl font-semibold mb-4">Patient Registration</h1>
          <p class="text-lg text-gray-700">
            Please select the type of patient and fill in the required
            information.
          </p>
        </header>

        <!-- Registration Type Selection -->
        <div class="flex justify-center space-x-6 mb-6">
          <button
            class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-500"
            id="inpatientBtn"
          >
            Inpatient
          </button>
          <button
            class="bg-green-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-green-500"
            id="outpatientBtn"
          >
            Outpatient
          </button>
        </div>

        <!-- Registration Form -->
        <form id="registrationForm" class="space-y-6">
          <!-- Name -->
          <div>
            <label for="name" class="block text-lg font-medium text-gray-700"
              >Full Name</label
            >
            <input
              type="text"
              id="name"
              name="name"
              required
              class="w-full p-4 border border-gray-300 rounded-lg"
            />
          </div>

          <!-- Date of Birth -->
          <div>
            <label for="dob" class="block text-lg font-medium text-gray-700"
              >Date of Birth</label
            >
            <input
              type="date"
              id="dob"
              name="dob"
              required
              class="w-full p-4 border border-gray-300 rounded-lg"
            />
          </div>

          <!-- Contact Number -->
          <div>
            <label for="contact" class="block text-lg font-medium text-gray-700"
              >Contact Number</label
            >
            <input
              type="tel"
              id="contact"
              name="contact"
              required
              class="w-full p-4 border border-gray-300 rounded-lg"
            />
          </div>

          <!-- Address -->
          <div>
            <label for="address" class="block text-lg font-medium text-gray-700"
              >Address</label
            >
            <textarea
              id="address"
              name="address"
              rows="3"
              required
              class="w-full p-4 border border-gray-300 rounded-lg"
            ></textarea>
          </div>

          <!-- Type of Patient (Dynamic) -->
          <div id="additionalFields" class="hidden">
            <!-- Inpatient Fields (Only for Inpatients) -->
            <div id="inpatientFields" class="space-y-4">
              <div>
                <label
                  for="room"
                  class="block text-lg font-medium text-gray-700"
                  >Room Number
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
