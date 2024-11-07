<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <!-- Page Content -->
    <main>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-6">
                <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Privacy Policy</h1>

                <p class="text-gray-700 mb-4">At ISUdD, we are committed to protecting your privacy. This Privacy Policy
                    outlines how we collect, use, and protect the personal information of parents and students using the
                    ISUdD Attendance Monitoring System.</p>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">1. Information We Collect</h2>
                <ul class="list-disc pl-6 text-gray-700 mb-4">
                    <li><strong>Student Information</strong>: Student ID, name, and attendance data (in or out of campus
                        status).</li>
                    <li><strong>Guardian Information</strong>: Guardian’s name, contact information, and login
                        credentials
                        for accessing the system.</li>
                    <li><strong>Device and Log Data</strong>: Information related to the device used to access the
                        system,
                        including IP address, browser type, and log data about attendance events (entry/exit).</li>
                </ul>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">2. How We Use Your Information</h2>
                <ul class="list-disc pl-6 text-gray-700 mb-4">
                    <li>To track and display the student’s campus attendance status (in or out).</li>
                    <li>To provide parents with real-time updates about their child's attendance.</li>
                    <li>To improve the performance and functionality of the ISUdD Attendance Monitoring System.</li>
                </ul>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">3. Data Sharing</h2>
                <p class="text-gray-700 mb-4">We will not share, sell, or rent your personal information to third
                    parties,
                    except in the following cases:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-4">
                    <li>To comply with legal obligations or respond to lawful requests from public authorities.</li>
                    <li>To protect the rights, property, or safety of ISUdD, our users, or others.</li>
                </ul>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">4. Data Security</h2>
                <p class="text-gray-700 mb-4">We take reasonable measures to protect the personal information we
                    collect.
                    This includes using encryption and secure servers to store and transmit data.</p>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">5. Access and Control</h2>
                <p class="text-gray-700 mb-4">Parents can log in to their accounts to access and view the attendance
                    status
                    of their child. If you wish to update or delete your personal information, you can do so through
                    your
                    account settings or by contacting us directly.</p>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">6. Retention of Data</h2>
                <p class="text-gray-700 mb-4">We retain your personal information only for as long as necessary to
                    fulfill
                    the purposes outlined in this policy, unless a longer retention period is required by law.</p>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">7. Children’s Privacy</h2>
                <p class="text-gray-700 mb-4">The ISUdD Attendance Monitoring System is intended for use by parents and
                    students. We do not knowingly collect personal information from children under the age of 13.</p>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">8. Changes to This Privacy Policy</h2>
                <p class="text-gray-700 mb-4">We may update this Privacy Policy from time to time. Any changes will be
                    posted on this page with the updated effective date. We encourage you to review this policy
                    periodically.</p>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">9. Contact Us</h2>
                <p class="text-gray-700 mb-4">If you have any questions about this Privacy Policy or the ISUdD
                    Attendance
                    Monitoring System, please contact us at:</p>
                <ul class="text-gray-700 mb-4">
                    <li><strong>Email</strong>: iscdd@cdd.edu.ph</li>
                    <li><strong>Phone</strong>: (075) 523 0000</li>
                    <li><strong>Address</strong>: LEISURE COAST Compound 2400 Bonuan Binloc, Philippines</li>
                </ul>

                <p class="text-gray-700 mb-4">By using the ISUdD Attendance Monitoring System, you agree to the terms
                    outlined in this Privacy Policy.</p>
            </div>
        </div>
    </main>

</body>

</html>
