<?php include './Partials/header.php' ?>

      <!-- Main Content -->
      <div class="w-full flex justify-center items-start">
        <div class="w-full max-w-4xl space-y-8">
          <!-- Doctor Consultation Form -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Doctor Consultation</h2>
            <form action="#" method="POST">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="patient-name" class="block text-gray-700"
                    >Patient Name</label
                  >
                  <input
                    id="patient-name"
                    type="text"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter patient's name"
                    required
                  />
                </div>

                <div>
                  <label for="doctor" class="block text-gray-700"
                    >Assign Doctor</label
                  >
                  <select
                    id="doctor"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                  >
                    <option value="">Select Doctor</option>
                    <option value="dr-jones">Dr. Jones</option>
                    <option value="dr-smith">Dr. Smith</option>
                    <option value="dr-williams">Dr. Williams</option>
                  </select>
                </div>

                <div>
                  <label for="symptoms" class="block text-gray-700"
                    >Symptoms</label
                  >
                  <textarea
                    id="symptoms"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="4"
                    placeholder="Enter patient's symptoms"
                    required
                  ></textarea>
                </div>

                <div>
                  <label for="appointment-time" class="block text-gray-700"
                    >Appointment Time</label
                  >
                  <input
                    id="appointment-time"
                    type="datetime-local"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                  />
                </div>

                <div class="col-span-2 text-center">
                  <button
                    type="submit"
                    class="mt-4 bg-blue-800 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                  >
                    Schedule Consultation
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- Diagnosis Information Form -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Diagnosis Information</h2>
            <form action="#" method="POST">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label
                    for="diagnosis-patient-name"
                    class="block text-gray-700"
                    >Patient Name</label
                  >
                  <input
                    id="diagnosis-patient-name"
                    type="text"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter patient's name"
                    required
                  />
                </div>

                <div>
                  <label for="diagnosis" class="block text-gray-700"
                    >Diagnosis</label
                  >
                  <textarea
                    id="diagnosis"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="4"
                    placeholder="Enter diagnosis"
                    required
                  ></textarea>
                </div>

                <div>
                  <label for="status" class="block text-gray-700"
                    >Diagnosis Status</label
                  >
                  <select
                    id="status"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                  >
                    <option value="">Select Status</option>
                    <option value="completed">Completed</option>
                    <option value="pending">Pending</option>
                    <option value="in-progress">In Progress</option>
                  </select>
                </div>

                <div class="col-span-2">
                  <label for="treatment-plan" class="block text-gray-700"
                    >Treatment Plan</label
                  >
                  <textarea
                    id="treatment-plan"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="4"
                    placeholder="Enter the treatment plan"
                    required
                  ></textarea>
                </div>

                <div class="col-span-2 text-center">
                  <button
                    type="submit"
                    class="mt-4 bg-blue-800 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                  >
                    Save Diagnosis
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
