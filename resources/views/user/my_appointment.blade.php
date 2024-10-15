<x-layout>
    <div class="flex justify-center py-16">
        <table class="w-[90%] max-w-screen-lg bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-black">
                <tr>
                    <th class="text-left px-6 py-3 text-lg">Doctor Name</th>
                    <th class="text-left px-6 py-3 text-lg">Date</th>
                    <th class="text-left px-6 py-3 text-lg">Message</th>
                    <th class="text-left px-6 py-3 text-lg">Status</th>
                    <th class="text-left px-6 py-3 text-lg">Cancel Appointment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appoint as $appoints)
                    <tr class="border-b">
                        <td class="px-6 py-4">{{ $appoints->doctor }}</td>
                        <td class="px-6 py-4">{{ $appoints->date }}</td>
                        <td class="px-6 py-4">{{ $appoints->message }}</td>
                        <td class="px-6 py-4">
                          <span class="px-2 py-1 text-xs font-semibold rounded
                          {{ $appoints->status == 'In progress' ? 'bg-yellow-100 text-yellow-700' : ($appoints->status == 'Canceled' ? 'bg-red-100 text-red-700' : 'bg-green-100 text-green-700') }}">
                          {{ $appoints->status }}
                      </span>
                      
                        </td>
                        <td class="px-6 py-4">
                            <button class="inline-block bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700"
                                onclick="showModal({{ $appoints->id }})">
                                Cancel
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="confirmModal" class="fixed inset-0 bg-black bg-opacity-50 hidden"> <!-- No flex here -->
      <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 text-center"> 
          <h2 class="text-xl font-semibold mb-4">Are you sure you want to cancel this appointment?</h2>
          <div class="flex justify-center space-x-4">
              <button onclick="hideModal()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">No</button>
              <a id="confirmCancelLink" href="" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Yes, Cancel</a>
          </div>
      </div>
  </div>
  
  <!-- JavaScript for Modal -->
  <script>
      function showModal(appointId) {
          // Show the modal by removing 'hidden' and adding 'flex'
          const modal = document.getElementById('confirmModal');
          modal.classList.remove('hidden');
          modal.classList.add('flex', 'justify-center', 'items-center'); // Add 'flex' properties
  
          // Set the link for cancellation dynamically
          const cancelLink = `{{ url('myappointment') }}/${appointId}`;
          document.getElementById('confirmCancelLink').setAttribute('href', cancelLink);
      }
  
      function hideModal() {
          // Hide the modal by adding 'hidden' and removing 'flex'
          const modal = document.getElementById('confirmModal');
          modal.classList.add('hidden');
          modal.classList.remove('flex', 'justify-center', 'items-center'); // Remove 'flex' properties
      }
  </script>
</x-layout>
