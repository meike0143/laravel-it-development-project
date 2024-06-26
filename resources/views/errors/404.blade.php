<x-guest-layout>
    <h1 class="font-semibold text-2xl text-gray-800 leading-tight">404</h1>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Oops, we lost this page!
    </h2>
    <br>
    <p> We are unable to find the page at this time. Our apologies for the inconvenience.</p>
    <br>
    <p>You might want to try the following things in for now:</p>
    <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
        <li>Check the url/page address in the Address bar for potential spelling errors.</li>
        <li>Click on the back button to return to the homepage of the website.</li>
    </ul>
    <br>
    <a type="button" href="{{ route('home') }}" class="bg-gray-200
        rounded-lg py-2 px-4 flex flex-col sm:justify-center items-center">Back to the homepage</a>
</x-guest-layout>
