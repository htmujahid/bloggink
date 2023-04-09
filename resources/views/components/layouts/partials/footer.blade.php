<footer class="">
    <div class="container mx-auto text-gray-600">
        <div class="space-y-6 sm:max-w-md sm:mx-auto sm:text-center">
            <x-application.logo />
            <p>
                Keep writing, sharing, and inspiring - happy blogging!
            </p>
            <div class="items-center gap-x-3 space-y-3 sm:flex sm:justify-center sm:space-y-0">
                <a href="" class="block py-2 px-4 text-center text-white font-medium bg-primary duration-150 hover:bg-opacity-80 active:bg-opacity-90 rounded-lg shadow-lg hover:shadow-none">
                    Let's get started
                </a>
                <a href="" class="flex items-center justify-center gap-x-2 py-2 px-4 text-gray-700 hover:text-gray-500 font-medium duration-150 active:bg-gray-100 border rounded-lg md:inline-flex">
                    About Us
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fillRule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clipRule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="mt-10 py-10 border-t items-center justify-between sm:flex">
            <p>© 2022 BloggInk. All rights reserved.</p>
            <ul class="flex flex-wrap items-center gap-4 mt-6 sm:text-sm sm:mt-0">
                <li class="text-gray-800 hover:text-gray-500 duration-150">
                    <a key={idx} href={item.href}>
                        Terms
                    </a>
                </li>
                <li class="text-gray-800 hover:text-gray-500 duration-150">
                    <a key={idx} href={item.href}>
                        Licence
                    </a>
                </li>
                <li class="text-gray-800 hover:text-gray-500 duration-150">
                    <a key={idx} href={item.href}>
                        Privacy
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>