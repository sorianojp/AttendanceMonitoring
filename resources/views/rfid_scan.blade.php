<x-guest-layout>
    <div class="max-w-full h-screen overflow-hidden bg-blue-700">
        <div class="p-6">
            <h1 class="font-black text-xl text-white">ISUdD Attendance Monitoring</h1>
        </div>
        <div>
            <h1 class="text-center font-black text-5xl text-white" id="current-time">{{ $today }}</h1>
        </div>
        <div class="flex items-center justify-center h-screen">
            <div class="w-1/3 justify-center items-center p-4">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form id="rfid-form" method="POST" action="{{ route('attendances.store') }}"
                            class="w-full my-2">
                            @csrf
                            <x-text-input type="text" id="student_no" name="student_no" placeholder="Scan your RFID"
                                autofocus autocomplete="off" />
                        </form>
                        <x-auth-session-status :status="session('status')" class="my-2" />
                    </div>
                </div>
            </div>
            <div class="w-2/3 p-4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full shadow-sm text-md text-left rtl:text-right text-gray-900">
                        <thead class="uppercase bg-gray-300">
                            <tr>
                                <th scope="col" class="p-2">Name</th>
                                <th scope="col" class="p-2">Entry Time</th>
                                <th scope="col" class="p-2">Exit Time</th>
                                <th scope="col" class="p-2">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @if ($attendances->isEmpty())
                                <tr class="bg-white border-b">
                                    <td colspan="5" class="p-2">No attendance records found.</td>
                                </tr>
                            @else
                                @foreach ($attendances as $attendance)
                                    <tr class="bg-white border-b">
                                        <td class="p-2">{{ $attendance->student->full_name }}</td>
                                        <td class="p-2">
                                            {{ \Carbon\Carbon::parse($attendance->entry_time)->format('g:i:s A') }}
                                        </td>
                                        <td class="p-2">
                                            {{ $attendance->exit_time ? \Carbon\Carbon::parse($attendance->exit_time)->format('g:i:s A') : '--' }}
                                        </td>
                                        <td
                                            class="p-2 font-extrabold uppercase {{ $attendance->status === 'In' ? 'text-green-600' : ($attendance->status === 'Out' ? 'text-red-600' : '') }}">
                                            {{ $attendance->status }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
    <script>
        // Function to format the date and time
        function formatTime(date) {
            let options = {
                month: 'long',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            };
            return date.toLocaleString('en-US', options).replace(',', '');
        }

        // Function to update the time every second
        function updateTime() {
            let now = new Date();
            document.getElementById('current-time').textContent = formatTime(now);
        }

        // Call the updateTime function every 1 second (1000 milliseconds)
        setInterval(updateTime, 1000);

        // Set the initial time when the page loads
        updateTime();
    </script>
</x-guest-layout>
