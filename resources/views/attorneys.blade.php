<x-NavBar-Layout>
    <section class="hero">
        <!-- Background Image -->
        <div class="hero-image"
            style="background-image: url('https://images.pexels.com/photos/48148/document-agreement-documents-sign-48148.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
            <!-- Overlay for text readability (adjust opacity as needed) -->
            <div class="overlay"></div>

            <!-- Content Container -->
            <div class="hero-content">
                <h1 class="hero-title">Experienced Attorneys at Your Service</h1>
                <p class="hero-subtitle">Your Trusted Legal Partners</p>
                <a href="#" class="cta-btn">Meet Our Attorneys</a>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-2xl font-semibold mb-6">Our Attorneys</h2>
            <!-- Container for Our Team -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Team Member Card 1 -->
                @foreach ($lawyers as $lawyer)
                    @if ($lawyer->type == 'lawyer')
                        <div
                            class="p-6 border rounded-lg bg-white shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                            <img src="https://www.svgrepo.com/show/513320/man.svg" alt="Team Member 1"
                                class="w-full pb-5 rounded-lg" style="height: 200px;">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $lawyer->name }}</h3>

                            <p class="text-gray-600 mt-2">Email: {{ $lawyer->email }}</p>
                            <p class="text-gray-600">Phone: {{ $lawyer->phoneNum }}</p>
                            <!-- Add more details about Team Member 1 here -->
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>

</x-NavBar-Layout>
