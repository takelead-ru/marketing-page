<section id="cta" class="bg-indigo-400 py-10">
    <div class="container">
        <div class="flex flex-col justify-center items-center | md:flex-row">
            <div class="text-center mb-4 | md:mb-0 md:mr-4">
                <h2 class="text-white text-2xl font-bold leading-tight">Sign up for our newsletter</h2>
                <p class="text-white">We'll e-mail you with the latest news.</p>
            </div>

            <form x-data="subscribeForm()" x-on:submit.prevent="submit" action="" method="post" class="relative | w-full max-w-sm">
                <div class="h-12 pl-5 pr-24 bg-white rounded-full | flex justify-between items-center">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email"
                           id="email"
                           class="text-indigo-700 text-lg leading-5 w-full pr-2 | focus:outline-none"
                           placeholder="your@email.com"
                           x-model="email"
                    >

                    <button class="absolute right-0 mr-1 | px-4 py-2 | text-white font-semibold rounded-full | focus:outline-none | disabled:opacity-75 disabled:cursor-not-allowed"
                            x-bind:disabled="sending || success"
                            x-bind:class="success ? 'bg-green-500' : 'bg-indigo-400 | hover:bg-indigo-500 | focus:bg-indigo-500'"
                    >
                        <template x-if="!sending && !success">
                            <span>Sign Up</span>
                        </template>
                        <template x-if="sending && !success">
                            <svg class="w-6 h-6 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </template>
                        <template x-if="success">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </template>
                    </button>
                </div>
        </div>
    </div>
    </div>
</section>
