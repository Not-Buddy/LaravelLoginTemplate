<!DOCTYPE html>
<html>
 </body>
                <!-- Logged-in Message -->
                <!-- Logout Form -->
                <div class="absolute top-4 right-4 sm:right-6 md:right-8 lg:right-10">
                    <form action="/logout" method="POST">
                        @csrf 
                        <button class="w-full px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600">Log out</button>
                    </form>
                </div>

                <!-- Car Listings -->
    {{-- <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center mb-6">Available Cars for Rent</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($cars as $car)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ $car->image }}" alt="{{ $car->name }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">{{ $car->name }}</h2>
                        <p class="text-gray-600">Price: ${{ $car->price }}/day</p>
                        <form action="/rent/{{ $car->id }}" method="POST" class="mt-4">
                            @csrf
                            <button class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Rent</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
 </body>
</html>
