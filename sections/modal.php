<!-- Button to open modal -->
<button
  onclick="document.getElementById('myModal').classList.remove('hidden')"
  class="px-4 py-2 bg-blue-600 text-black rounded-lg">
  Open Modal
</button>

<!-- Modal -->
<div id="myModal" class="transition-all duration-1000 scale-100 hover:scale-120 fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl shadow-xl w-[90%] max-w-md p-6 relative">
    <!-- Close Button -->
    <button
      onclick="document.getElementById('myModal').classList.add('hidden')"
      class="absolute top-2 right-2 text-gray-400 hover:text-gray-800 text-xl"
    >
      &times;
    </button>

    <!-- Modal Content -->
    <h2 class="text-xl font-semibold mb-4">Modal Title</h2>
    <p class="text-gray-700 mb-6">
      This is a simple modal built with Tailwind CSS.
    </p>
    <button
      onclick="document.getElementById('myModal').classList.add('hidden')"
      class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
    >
      Close
    </button>
  </div>
</div>