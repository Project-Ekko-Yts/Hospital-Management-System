
<?php include './Partials/header.php' ?>
    <!-- Main Content -->
    <div class="flex-1 p-8">
      <div class="w-full flex justify-center items-start">
        <div class="w-full max-w-4xl space-y-8">
          <!-- Treatment Form Section -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Treatment Information</h2>
            <form action="#" method="POST">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="patient_name" class="block text-gray-700"
                    >Patient Name</label
                  >
                  <input
                    type="text"
                    id="patient_name"
                    name="patient_name"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                  />
                </div>
                <div>
                  <label for="treatment_type" class="block text-gray-700"
                    >Treatment Type</label
                  >
                  <input
                    type="text"
                    id="treatment_type"
                    name="treatment_type"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                  />
                </div>
                <div>
                  <label for="start_date" class="block text-gray-700"
                    >Start Date</label
                  >
                  <input
                    type="date"
                    id="start_date"
                    name="start_date"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                  />
                </div>
                <div>
                  <label for="end_date" class="block text-gray-700"
                    >End Date</label
                  >
                  <input
                    type="date"
                    id="end_date"
                    name="end_date"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                  />
                </div>
                <div class="col-span-2">
                  <label for="notes" class="block text-gray-700">Notes</label>
                  <textarea
                    id="notes"
                    name="notes"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="4"
                  ></textarea>
                </div>
                <div class="col-span-2 text-center">
                  <button
                    type="submit"
                    class="mt-4 bg-blue-800 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                  >
                    Submit Treatment
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- Treatment History Table -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Treatment History</h2>
            <table class="min-w-full table-auto">
              <thead>
                <tr class="bg-gray-100 text-left">
                  <th class="py-3 px-6 text-gray-700">Patient Name</th>
                  <th class="py-3 px-6 text-gray-700">Treatment Type</th>
                  <th class="py-3 px-6 text-gray-700">Start Date</th>
                  <th class="py-3 px-6 text-gray-700">End Date</th>
                  <th class="py-3 px-6 text-gray-700">Notes</th>
                  <th class="py-3 px-6 text-gray-700">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b">
                  <td class="py-3 px-6">John Doe</td>
                  <td class="py-3 px-6">Physiotherapy</td>
                  <td class="py-3 px-6">2024-10-01</td>
                  <td class="py-3 px-6">2024-10-10</td>
                  <td class="py-3 px-6">Post-surgery recovery</td>
                  <td
                    class="py-3 px-6 text-blue-600 hover:underline cursor-pointer"
                  >
                    Edit
                  </td>
                </tr>
                <tr class="border-b">
                  <td class="py-3 px-6">Jane Smith</td>
                  <td class="py-3 px-6">Chemotherapy</td>
                  <td class="py-3 px-6">2024-09-15</td>
                  <td class="py-3 px-6">2024-10-15</td>
                  <td class="py-3 px-6">Cancer treatment</td>
                  <td
                    class="py-3 px-6 text-blue-600 hover:underline cursor-pointer"
                  >
                    Edit
                  </td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
