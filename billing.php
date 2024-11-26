
<?php include './Partials/header.php' ?>

      <!-- Billing Form Section -->
      <div class="w-full flex justify-center items-center p-8">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
          <h2 class="text-3xl font-semibold text-center text-blue-800 mb-6">
            Patient Billing Information
          </h2>
          <form action="#" method="POST">
            <!-- Patient Info -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
              <div>
                <label for="patientName" class="block text-gray-700"
                  >Patient Name</label
                >
                <input
                  type="text"
                  id="patientName"
                  name="patientName"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                  required
                />
              </div>
              <div>
                <label for="patientID" class="block text-gray-700"
                  >Patient ID</label
                >
                <input
                  type="text"
                  id="patientID"
                  name="patientID"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                  required
                />
              </div>
            </div>

            <!-- Billing Details -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
              <div>
                <label for="treatmentCost" class="block text-gray-700"
                  >Treatment Cost ($)</label
                >
                <input
                  type="number"
                  id="treatmentCost"
                  name="treatmentCost"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                  required
                />
              </div>
              <div>
                <label for="additionalCharges" class="block text-gray-700"
                  >Additional Charges ($)</label
                >
                <input
                  type="number"
                  id="additionalCharges"
                  name="additionalCharges"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                  required
                />
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
              <div>
                <label for="discount" class="block text-gray-700"
                  >Discount (%)</label
                >
                <input
                  type="number"
                  id="discount"
                  name="discount"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                  value="0"
                  min="0"
                  max="100"
                />
              </div>
              <div>
                <label for="totalAmount" class="block text-gray-700"
                  >Total Amount ($)</label
                >
                <input
                  type="text"
                  id="totalAmount"
                  name="totalAmount"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                  readonly
                />
              </div>
            </div>

            <div class="flex justify-end">
              <button
                type="button"
                onclick="calculateTotal()"
                class="bg-blue-600 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-700"
              >
                Calculate Total
              </button>
            </div>

            <!-- Payment Section -->
            <div class="mt-6">
              <label for="paymentMethod" class="block text-gray-700"
                >Payment Method</label
              >
              <select
                id="paymentMethod"
                name="paymentMethod"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
              >
                <option value="cash">Cash</option>
                <option value="credit">Credit Card</option>
                <option value="insurance">Insurance</option>
              </select>
            </div>

            <div class="flex justify-end mt-6">
              <button
                type="submit"
                class="bg-green-600 text-white px-6 py-2 rounded-md shadow-md hover:bg-green-700"
              >
                Generate Bill
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      // Calculate the total amount based on treatment cost, additional charges, and discount
      function calculateTotal() {
        let treatmentCost =
          parseFloat(document.getElementById("treatmentCost").value) || 0;
        let additionalCharges =
          parseFloat(document.getElementById("additionalCharges").value) || 0;
        let discount =
          parseFloat(document.getElementById("discount").value) || 0;

        // Calculate the total
        let totalAmount = treatmentCost + additionalCharges;
        let discountedAmount = totalAmount - totalAmount * (discount / 100);

        // Update the Total Amount field
        document.getElementById("totalAmount").value =
          discountedAmount.toFixed(2);
      }
    </script>
  </body>
</html>
