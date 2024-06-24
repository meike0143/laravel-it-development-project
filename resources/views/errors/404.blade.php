<x-guest-layout>
    <h1 class="font-semibold text-2xl text-gray-800 leading-tight">404</h1>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Page not found
    </h2>
    <br>
    <p> We are unable to find the page at this time. There may be a couple of reasons for this:
    the page might have been removed, renamed or is currently unavailable. Our apologies for the inconvenience.</p>
    <br>
    <p>You might want to try the following things in for now:</p>
    <ul class="max-w-md space-y-1 text-black list-disc list-inside">
        <li>Check the url/page address in the Address bar for potential spelling errors.</li>
        <li>Click on the back button to return to the homepage of the website.</li>
    </ul>
    <br>
    <a type="button" href="{{ route('home') }}" class="bg-gray-200
        rounded-lg py-2 px-4 flex flex-col sm:justify-center items-center">Back to the homepage</a>
</x-guest-layout>
