<div class="fixed w-full top-0 py-4 px-12 justify-between flex items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
        <a href="{{route('home')}}"><img width="100px" src="/img/logo.jpg" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=0">Land</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=2">{{__('Villa')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=1">Apartment</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page', 'about-us')}}">About Us</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page', 'contact-us')}}">Contact Us</a></li>
        </ul>
    </div>

    <div class="min-w-max text-3xl">
        <a href="">🚩</a>
        <a href="">🏴</a>
    </div>
</div>
