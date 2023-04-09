<div class="relative">
    <div class="w-10 h-10 outline-none rounded-full ring-offset-2 ring-gray-200 lg:focus:ring-2" id="user-profile">
        <img
            src="https://api.uifaces.co/our-content/donated/xZ4wg2Xj.jpg"
            class="w-full h-full rounded-full"
        />
    </div>
    <div class="hidden absolute right-0 z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
        <div class="px-4 py-3">
        <span class="block text-sm text-gray-900">Bonnie Green</span>
        <span class="block text-sm  text-gray-500 truncate">name@flowbite.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
        </li>
        </ul>
    </div>
</div>
<script>
    var userProfile = document.getElementById('user-profile');
    var userDropdown = document.getElementById('user-dropdown');
    userProfile.addEventListener('click', function(){
        userDropdown.classList.toggle('hidden')
    })
</script>