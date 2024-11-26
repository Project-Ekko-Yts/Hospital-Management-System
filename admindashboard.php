<?php include './Partials/header.php' ?>

        <!-- Dashboard Stats (Summary) -->
        <section
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8"
        >
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-700">Patients</h3>
            <p class="text-2xl text-blue-600">120 Active Patients</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-700">Appointments</h3>
            <p class="text-2xl text-blue-600">45 Pending Appointments</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-700">Doctors</h3>
            <p class="text-2xl text-blue-600">15 Available Doctors</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-700">Billing</h3>
            <p class="text-2xl text-blue-600">$15,200 Unpaid</p>
          </div>
        </section>

        <!-- Recent Activity (Converted to Table) -->
        <section class="mb-8">
          <h2 class="text-2xl font-semibold mb-4">Recent Activity</h2>
          <table class="min-w-full table-auto bg-white shadow-lg rounded-lg">
            <thead>
              <tr>
                <th class="px-4 py-2 border text-left">Activity</th>
                <th class="px-4 py-2 border text-left">Date</th>
                <th class="px-4 py-2 border text-left">Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="px-4 py-2 border">Patient John Doe admitted</td>
                <td class="px-4 py-2 border">October 15, 2024</td>
                <td class="px-4 py-2 border">Room 101</td>
              </tr>
              <tr>
                <td class="px-4 py-2 border">Appointment for Dr. Smith</td>
                <td class="px-4 py-2 border">October 15, 2024</td>
                <td class="px-4 py-2 border">2:00 PM today</td>
              </tr>
              <tr>
                <td class="px-4 py-2 border">
                  New bill generated for patient Jane Doe
                </td>
                <td class="px-4 py-2 border">October 14, 2024</td>
                <td class="px-4 py-2 border">Amount: $500</td>
              </tr>
              <tr>
                <td class="px-4 py-2 border">
                  Emergency case: Ambulance arriving
                </td>
                <td class="px-4 py-2 border">October 15, 2024</td>
                <td class="px-4 py-2 border">3:30 PM</td>
              </tr>
            </tbody>
          </table>
        </section>
      </div>
    </div>

    <!-- Modal Example (Diagnosis) -->
    <div
      id="diagnosisModal"
      class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center"
      aria-hidden="true"
    >
      <div class="bg-white p-8 rounded-lg shadow-lg w-3/4 max-w-3xl">
        <h2 class="text-2xl font-semibold mb-4">Diagnosis Information</h2>
        <table class="w-full table-auto mb-6">
          <thead>
            <tr>
              <th class="px-4 py-2 border">Patient Name</th>
              <th class="px-4 py-2 border">Diagnosis</th>
              <th class="px-4 py-2 border">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-2 border">John Doe</td>
              <td class="px-4 py-2 border">Flu</td>
              <td class="px-4 py-2 border">Completed</td>
            </tr>
            <tr>
              <td class="px-4 py-2 border">Jane Smith</td>
              <td class="px-4 py-2 border">Pneumonia</td>
              <td class="px-4 py-2 border">In Progress</td>
            </tr>
          </tbody>
        </table>
        <button
          onclick="toggleModal('diagnosisModal')"
          class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-500"
        >
          Close
        </button>
      </div>
    </div>
  </body>
</html>
