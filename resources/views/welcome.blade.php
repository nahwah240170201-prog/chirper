<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="max-w-3xl mx-auto">

        <div class="card bg-base-100 shadow-md mt-8 mb-8 rounded-2xl">
            <div class="card-body text-center">

                <h1 class="text-3xl font-bold">
                    Welcome to Chirper!
                </h1>

                <p class="mt-4 text-base-content/60">
                    This is your brand new Laravel application.
                    Time to make it sing (or chirp)!
                </p>

                <div class="mt-8 flex justify-center gap-4">
                    <a href="#" class="btn btn-primary px-8 rounded-xl shadow-sm">
                        Start Chirping
                    </a>

                    <a href="#" class="btn btn-outline px-8 rounded-xl">
                        Explore More
                    </a>
                </div>

            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-4 mt-10">

            <div class="card bg-base-100 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title"> ✨ Easy to Use</h2>
                    <p class="text-sm text-base-content/70">
                        Share your thoughts quickly with a simple and clean interface.
                    </p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title"> 🤝 Connect</h2>
                    <p class="text-sm text-base-content/70">
                        Stay connected and interact with people around you.
                    </p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title"> 💡 Express Yourself</h2>
                    <p class="text-sm text-base-content/70">
                        Let your ideas be heard through short and meaningful posts.
                    </p>
                </div>
            </div>

        </div>

    </div>
</x-layout>