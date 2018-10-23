<nav class="bg-blue-darker py-3 mb-10">
    <ul class="list-reset flex justify-around">
        <li class="text-white {{ request()->path() !== 'table' ? 'font-bold' : '' }}"><a href="/" class="text-white no-underline">Search</a></li>
        <li class="text-white {{ request()->path() == 'table' ? 'font-bold' : '' }}"><a href="/table" class="text-white no-underline">Table overview</a></li>
    </ul>
</nav>
