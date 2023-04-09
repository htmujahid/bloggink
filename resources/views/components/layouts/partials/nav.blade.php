<nav class="bg-white border-b w-full sm:static sm:text-sm sm:border-none">
    <div class="items-center container mx-auto flex flex-col sm:flex-row gap-3 py-4">
        <div class="flex items-center justify-between sm:block">
            <a href="/">
                <x-application.logo />
            </a>
        </div>
        <div class="flex-1">
            <ul class="justify-end items-center space-y-6 sm:flex sm:space-x-6">
                <div class='items-center gap-x-6 flex'>
                    @if ($role == 'user')
                        <li class="mt-0">
                            <a href="{{route('posts.create')}}" class="block py-2 px-2 hover:opacity-80 border border-black rounded-full" title="Write a Post">
                                <img src="/assets/icons/write.svg" alt="">
                            </a>
                        </li>
                        <li class="mt-0">
                            <a href="#" class="block py-2 px-2 hover:opacity-80 border border-black rounded-full" title="Notifications">
                                <img src="/assets/icons/notification.svg" alt="">
                            </a>
                        </li>                        
                    @elseif($role == 'author')
                        <li class="mt-0">
                            <button class="block py-2 px-2 hover:opacity-80 border border-black rounded-full" title="Save as draft">
                                <img src="/assets/icons/draft.svg" alt="">
                            </button>
                        </li>
                        <li class="mt-0">
                            <button type="submit" class="block py-2 px-2 hover:opacity-80 border border-black rounded-full bg-green-700" title="Publish">
                                <img src="/assets/icons/publish.svg" alt="">
                            </button>
                        </li>
                    @elseif($role == 'guest')
                        <li>
                            <a href="/auth/login" class="block py-3 px-4 text-center text-primary hover:opacity-80 border rounded-lg md:border-none">
                                Log in
                            </a>
                        </li>
                        <li>
                            <a href="/auth/signup" class="block py-3 px-4 font-medium text-center text-white bg-primary hover:bg-opacity-80 active:bg-opacity-70 active:shadow-none rounded-lg shadow md:inline">
                                Sign Up
                            </a>
                        </li>
                    @endif
                    <x-layouts.partials.profile-icon />
                </div>
            </ul>
        </div>
    </div>
</nav>
