<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
  products: { type: Object, required: true },
});
</script>

<template>
  <Head title="Inicio" />
  <GuestLayout>
    <!-- Content -->

    <div class="hero min-h-screen" style="background-image: url('/Img/BG1.jpg')">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold">Dispositivos de Diagnostico</h1>
          <p class="mb-5">La mejor calidad en laringoscopio y otros productos</p>
          <button class="btn btn-primary">Empecemos</button>
        </div>
      </div>
    </div>

    <div class="divider px-4 py-12">
      <a
        :href="route('products.index')"
        class="h-10 grow flex flex-row card bg-primary text-primary-content hover:bg-opacity-100 bg-opacity-80 rounded-full py-2 text-white px-5"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="yellow"
          class="w-6 h-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"
          />
        </svg>

        Echa un vistazo a nuestros productos!
      </a>
    </div>

    <div
      :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'"
      class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300"
    >
      <div class="flex items-center justify-between">
        <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
        <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
          <svg
            class="h-5 w-5"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <hr class="my-3" />
      <div class="flex justify-between mt-6">
        <div class="flex">
          <img
            class="h-20 w-20 object-cover rounded"
            src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
            alt=""
          />
          <div class="mx-3">
            <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
            <div class="flex items-center mt-2">
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                  ></path>
                </svg>
              </button>
              <span class="text-gray-700 mx-2">2</span>
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <span class="text-gray-600">20$</span>
      </div>
      <div class="flex justify-between mt-6">
        <div class="flex">
          <img
            class="h-20 w-20 object-cover rounded"
            src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
            alt=""
          />
          <div class="mx-3">
            <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
            <div class="flex items-center mt-2">
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                  ></path>
                </svg>
              </button>
              <span class="text-gray-700 mx-2">2</span>
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <span class="text-gray-600">20$</span>
      </div>
      <div class="flex justify-between mt-6">
        <div class="flex">
          <img
            class="h-20 w-20 object-cover rounded"
            src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
            alt=""
          />
          <div class="mx-3">
            <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
            <div class="flex items-center mt-2">
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                  ></path>
                </svg>
              </button>
              <span class="text-gray-700 mx-2">2</span>
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <span class="text-gray-600">20$</span>
      </div>
      <div class="mt-8">
        <form class="flex items-center justify-center">
          <input class="form-input w-48" type="text" placeholder="Add promocode" />
          <button
            class="ml-3 flex items-center px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
          >
            <span>Apply</span>
          </button>
        </form>
      </div>
      <a
        class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
      >
        <span>Checkout</span>
        <svg
          class="h-5 w-5 mx-2"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
      </a>
    </div>

    

    <main class="my-8">
      <div class="container mx-auto px-6">
        <div class="mt-16">
          <h3 class="text-2xl font-medium flex space-x-2">
            <span>Lo mas vendido</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"
              />
            </svg>
          </h3>
          <div class="carousel w-full">
            <!-- 1 -->
            <div
              v-for="(index, page) in products.links"
              :key="page"
              :id="'slide' + index"
              class="carousel-item relative w-full grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6"
            >
              <div
                class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
              >
                <a :href="products.links[0].url ? products.links[0].url: ''" class="btn btn-circle">❮</a>
                <a :href="products.links[products.links.length - 1].url ? products.links[products.links.length - 1].url: ''" class="btn btn-circle">❯</a>
              </div>

              <!-- Carrousel Content -->

              <div
                v-for="(item, index) in products.data"
                :key="index"
                class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden"
              >
                <div
                  class="flex items-end justify-end h-56 w-full bg-cover"
                  :style="
                    'background-image: url(' +  item.product_images[0].url + ')'
                  "
                >
                  <button
                    class="p-2 rounded-full bg-primary text-primary-content mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
                  >
                    <svg
                      class="h-5 w-5"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                      ></path>
                    </svg>
                  </button>
                </div>
                <div class="px-5 py-3">
                  <h3 class="uppercase">{{ item.title }}</h3>
                  <span class="text-info mt-2">${{ item.price }}</span>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      
      </div>
    </main>
  </GuestLayout>
</template>

<style>
.bg-dots-darker {
  background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-dots-lighter {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
  }
}
</style>
