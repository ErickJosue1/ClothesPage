<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<template>
  <Head title="Inicio" />
  <GuestLayout> <!-- Content -->

    <div class="hero min-h-screen" style="background-image: url('/Img/Main_bg.jpg')">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
          <p class="mb-5">
            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda
            excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a
            id nisi.
          </p>
          <button class="btn btn-primary">Get Started</button>
        </div>
      </div>
    </div>

    <div class="divider px-4 py-12"> <a :href="route('products.index')"
        class="h-10 grow flex flex-row card bg-primary hover:bg-opacity-100 bg-opacity-80 rounded-full py-2 text-white px-5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="yellow"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
        </svg>

        Echa un vistazo a nuestros productos!
      </a></div>

    <div class="mt-16 mx-12">
      <h3 class="text-gray-600 text-2xl font-medium">Lo ultimo!!</h3>
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
          <div class="flex items-end justify-end h-56 w-full bg-cover"
            style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
            <button
              class="p-2 rounded-full bg-primary text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
              <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>
            </button>
          </div>
          <div class="px-5 py-3">
            <h3 class="text-gray-700 uppercase">Chanel</h3>
            <span class="text-gray-500 mt-2">$12</span>
          </div>
        </div>
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
          <div class="flex items-end justify-end h-56 w-full bg-cover"
            style="background-image: url('https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
            <button
              class="p-2 rounded-full bg-primary text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
              <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>
            </button>
          </div>
          <div class="px-5 py-3">
            <h3 class="text-gray-700 uppercase">Man Mix</h3>
            <span class="text-gray-500 mt-2">$12</span>
          </div>
        </div>
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
          <div class="flex items-end justify-end h-56 w-full bg-cover"
            style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
            <button
              class="p-2 rounded-full bg-primary text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
              <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>
            </button>
          </div>
          <div class="px-5 py-3">
            <h3 class="text-gray-700 uppercase">Classic watch</h3>
            <span class="text-gray-500 mt-2">$12</span>
          </div>
        </div>
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
          <div class="flex items-end justify-end h-56 w-full bg-cover"
            style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=345&q=80')">
            <button
              class="p-2 rounded-full bg-primary text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
              <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>
            </button>
          </div>
          <div class="px-5 py-3">
            <h3 class="text-gray-700 uppercase">woman mix</h3>
            <span class="text-gray-500 mt-2">$12</span>
          </div>
        </div>
      </div>
    </div>

  </GuestLayout>






  <!--  <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
    <Link
     c
      :href="route('dashboard')"
      class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
      >Dashboard</Link
    >

    <template v-else>
      <Link
        :href="route('login')"
        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
        >Log in</Link
      >

      <Link
        v-if="canRegister"
        :href="route('register')"
        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
        >Register</Link
      >
    </template>
  </div> -->
</template>

<style>
.bg-dots-darker {
  background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-dots-lighter {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
  }
}</style>
