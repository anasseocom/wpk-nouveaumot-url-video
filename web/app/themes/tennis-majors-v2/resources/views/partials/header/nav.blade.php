<div class="flex">
    @include('partials.header.nav.flash')
    @include('partials.header.nav.burger')
    <div id="menu" class="w-screen h-screen bg-black absolute left-0 top-0 px-4 hidden">
        <div class="flex h-20 flex-col max-w-screen-xl m-auto items-end">
            <div id="burger" class="h-20 w-16 ml-6 flex-row flex-grow cursor-pointer">
                <div class="flex h-20 w-16 relative">
                    <div class="w-12  h-1 bg-white absolute top-2/4 left-2/4 transform rotate-45  -translate-x-2/4 -translate-y-2/4"></div>
                    <div class="w-12  h-1 bg-white absolute top-2/4 left-2/4 transform -rotate-45 -translate-x-2/4 -translate-y-2/4"></div>
                </div>
            </div>
        </div>
    </div>
</div>