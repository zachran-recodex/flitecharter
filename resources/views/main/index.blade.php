<x-layouts.main>
    <!-- Hero Section -->
    <div class="relative">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://picsum.photos/1920/1080" alt="Private Jet" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-1 flex flex-col items-center justify-center text-center h-screen text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold tracking-wide mb-8">
                EXCELLENCE IN<br>AVIATION
            </h1>
            <div class="w-full max-w-md">
                <button class="bg-white text-black px-8 py-3 rounded-md text-lg font-medium hover:bg-gray-200 transition duration-300">
                    DISCOVER MORE
                </button>
            </div>
        </div>
    </div>

    <!-- Booking Section -->
    <div class="py-16 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-8">BOOK A FLIGHT</h2>
            <p class="text-gray-600 text-center max-w-3xl mx-auto mb-8">
                From a quick 1 hour hop to an international flight to an exotic location, Flite Charter makes it easy to book your next journey for as low as $5,000 per hour.
            </p>

            <!-- Booking Form -->
            <div class="bg-white rounded-lg shadow-md p-8 max-w-5xl mx-auto">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-6">
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700 mb-1">From</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700 mb-1">To</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Depart</label>
                            <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Return</label>
                            <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Passengers</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5+</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-black text-white px-8 py-3 rounded-md font-medium hover:bg-gray-800 transition duration-300">
                            SEARCH
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Exploring the World Section -->
    <div class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-12">EXPLORING THE WORLD WITH YOU</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <img src="https://picsum.photos/1000" alt="Private Jet Stairs" class="w-full h-auto rounded-lg shadow-md">
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-gray-700 mb-6">
                        Travel in style with our fleet of luxury jets, available for charter to destinations worldwide. Our commitment to excellence ensures your journey is as exceptional as your destination. With Flite Charter, you'll experience the pinnacle of private aviation.
                    </p>
                    <p class="text-gray-700 mb-8">
                        From business travel to leisure escapes, our team ensures every detail is perfected. With a focus on safety, comfort, and personalized service, we deliver an unmatched flying experience tailored specifically to your needs.
                    </p>
                    <div>
                        <a href="#" class="bg-black text-white px-6 py-3 rounded-md font-medium inline-block hover:bg-gray-800 transition duration-300">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jet Card Program Section -->
    <div class="py-20 px-4 bg-black text-white text-center">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-sm font-medium tracking-wider uppercase mb-3">THE PINNACLE OF SMART JET TRAVEL</h3>
            <h2 class="text-3xl font-semibold mb-6">THE FLITE CHARTER ONE JETCARD PROGRAM</h2>
            <p class="text-gray-300 mb-8">
                Enjoy exclusive benefits, priority booking, and guaranteed availability with our premier membership program designed for frequent flyers.
            </p>
            <a href="#" class="border border-white text-white px-6 py-3 rounded-md font-medium inline-block hover:bg-white hover:text-black transition duration-300">
                LEARN MORE
            </a>
        </div>
    </div>

    <!-- Empty Leg Flights Section -->
    <div class="py-16 px-4 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-sm font-medium text-gray-500 tracking-wider uppercase mb-3">INCREDIBLE VALUE AT EXCEPTIONAL RATES</h3>
            <h2 class="text-3xl font-semibold mb-8">EMPTY LEG FLIGHTS</h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-12">
                Enjoy savings of up to 75% off standard charter rates when you book one of our available empty leg flights.
            </p>

            <!-- Carousel Indicators -->
            <div class="flex justify-center space-x-2 mb-8">
                <button class="w-2 h-2 rounded-full bg-blue-600"></button>
                <button class="w-2 h-2 rounded-full bg-gray-300"></button>
                <button class="w-2 h-2 rounded-full bg-gray-300"></button>
            </div>

            <!-- Empty Leg Card (just one shown as example) -->
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
                <!-- Empty leg flight details would go here -->
                <div class="grid grid-cols-3 gap-6 text-left">
                    <div>
                        <p class="text-gray-500 text-sm">From</p>
                        <p class="font-medium">New York (KTEB)</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">To</p>
                        <p class="font-medium">Miami (KFLL)</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Date</p>
                        <p class="font-medium">May 25, 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Global Experts Section -->
    <div class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl font-semibold mb-6">EXPERTS IN GLOBAL PRIVATE JET CHARTERS</h2>
                    <p class="text-gray-700 mb-6">
                        With over a decade in the aviation industry, our team combines expertise with a passion for exceptional service, ensuring your journey is seamless from takeoff to landing.
                    </p>
                    <p class="text-gray-700 mb-8">
                        Our global network and industry relationships allow us to offer unparalleled access to the finest aircraft and services worldwide.
                    </p>
                    <div>
                        <a href="#" class="bg-black text-white px-6 py-3 rounded-md font-medium inline-block hover:bg-gray-800 transition duration-300">
                            LEARN MORE
                        </a>
                    </div>
                </div>
                <div>
                    <img src="https://picsum.photos/1000" alt="Expert Aviation Team" class="w-full h-auto rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </div>

    <!-- Membership Section -->
    <div class="py-20 px-4 bg-black text-white text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-semibold mb-6">RESERVE MEMBERSHIP FOR ONLY $99 USD PER MONTH</h2>
            <p class="text-gray-300 mb-8">
                Join our exclusive membership program and access special rates, priority booking, and personalized travel planning services.
            </p>
            <a href="#" class="border border-white text-white px-6 py-3 rounded-md font-medium inline-block hover:bg-white hover:text-black transition duration-300">
                BECOME A MEMBER
            </a>
        </div>
    </div>

    <!-- Leading the Industry Section -->
    <div class="py-16 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <img src="https://picsum.photos/1000" alt="Jet Engine" class="w-full h-auto rounded-lg shadow-md">
                </div>
                <div class="flex flex-col justify-center">
                    <h3 class="text-sm font-medium text-gray-500 tracking-wider uppercase mb-3">A LEGACY OF EXCELLENCE</h3>
                    <h2 class="text-3xl font-semibold mb-6">LEADING THE INDUSTRY</h2>
                    <p class="text-gray-700 mb-6">
                        Since our founding, we've set the standard in private aviation, continuously innovating to deliver superior experiences for our discerning clients.
                    </p>
                    <p class="text-gray-700 mb-8">
                        Our commitment to safety, luxury, and personalized service has made us the preferred choice for business executives, celebrities, and travelers who demand the very best.
                    </p>
                    <div>
                        <a href="#" class="bg-black text-white px-6 py-3 rounded-md font-medium inline-block hover:bg-gray-800 transition duration-300">
                            READ MORE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Programs Section -->
    <div class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-12">OUR PROGRAMS</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Program Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://picsum.photos/1000" alt="Jet Card Program" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-xl mb-2">Jet Card Program</h3>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Learn More →</a>
                    </div>
                </div>

                <!-- Program Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://picsum.photos/1000" alt="Membership Benefits" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-xl mb-2">Membership Benefits</h3>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Learn More →</a>
                    </div>
                </div>

                <!-- Program Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://picsum.photos/1000" alt="Empty Leg Flights" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-xl mb-2">Empty Leg Flights</h3>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Learn More →</a>
                    </div>
                </div>

                <!-- Program Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://picsum.photos/1000" alt="Custom Charters" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-xl mb-2">Custom Charters</h3>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
