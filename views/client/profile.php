<?php
require("header.php");
?>

<div class="font-std mb-10 w-full rounded-2xl bg-white p-10 font-normal leading-relaxed text-gray-900 shadow-xl">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/3 text-center mb-8 md:mb-0 ">
                <img src="https://i.pravatar.cc/300" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-indigo-800 transition-transform duration-300 hover:scale-105 ring ring-gray-300">
                <button class="mt-4 bg-indigo-800 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition-colors duration-300 ring ring-gray-300 hover:ring-indigo-300">Edit Profile</button>
                <button class="mt-4 bg-indigo-800 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition-colors duration-300 ring ring-gray-300 hover:ring-indigo-300 ml-2">lougout</button>
            </div>
            <div class="md:w-2/3 md:pl-8">
                <h1 class="text-2xl font-bold text-indigo-800 mb-2">John Doe</h1>
                <p class="text-gray-600 mb-6">Software Developer</p>

                <h2 class="text-xl font-semibold text-indigo-800 mb-4">Organization Information</h2>
                <p class="text-gray-700 mb-6">
                    Estep Bilişim / Software Developer
                </p>
              
                <h2 class="text-xl font-semibold text-indigo-800 mb-4">Contact Information</h2>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-800 " viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        john.doe@example.com
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-800" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        +1 (555) 123-4567
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-800 0" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        San Francisco, CAa
                    </li>
                </ul>
            </div>
        </div>

    </div>


<?php
require("./../footer.php");
?>