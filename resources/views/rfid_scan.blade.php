<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scan') }}
        </h2>
    </x-slot>
    <div class="max-w-full">
        <form id="rfid-form" method="POST" action="{{ route('attendances.store') }}">
            @csrf
            <input type="text" id="student_no" name="student_no" placeholder="Scan your RFID" autofocus>
        </form>
    </div>
    <script>
        let inputTimer;
        const studentInput = document.getElementById('student_no');
        // Add event listener for input on the student_no field
        studentInput.addEventListener('input', function() {
            // Clear any previous timer to avoid multiple submissions
            clearTimeout(inputTimer);
            // Set a delay (to ensure the full ID is captured from the RFID reader)
            inputTimer = setTimeout(function() {
                if (studentInput.value.length > 0) {
                    document.getElementById('rfid-form').submit();
                }
            }, 300); // 300ms delay to wait for RFID input completion
        });
        // Optional: Automatically focus on the input field
        window.onload = function() {
            studentInput.focus();
        }
    </script>

</x-guest-layout>
