<template>
  <GuestLayout>
    <!-- component -->
    <div class="bg-base w-full h-full">
      <div class="container px-6 py-8 mx-auto">
        <div class="lg:flex lg:-mx-2">
          <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
            <a
              href="#"
              class="block font-medium text-blue-600 dark:text-blue-500 hover:underline"
              >Todo</a
            >
            <a href="#" class="block font-medium hover:underline">Caracteristicas</a>
            <a href="#" class="block font-medium hover:underline">Disponibilidad</a>
            <a href="#" class="block font-medium hover:underline">Tamaño</a>
          </div>

          <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5">
            <div
              class="flex max-md:flex-col max-md:space-y-4 items-center justify-between text-sm tracking-widest uppercase"
            >
              <div class="text-sm breadcrumbs">
                <ul v-for="(item,index) in crumbs()" :key="item">
                  <li v-if="index == 0"><a :href="route('public')">Home</a></li>
                  <li><a>{{item}}</a></li>
                </ul>
              </div>
              <p class="">{{ products.data.length }} Resultados</p>
              <div class="flex items-center">
                <p class="px-2">Orden</p>
                <select
                  class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none"
                >
                  <option value="#">Cualquiera</option>
                  <option value="#">Recomendado</option>
                 
                </select>
              </div>
            </div>

            <div
              class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
            >
           
              <div v-for="product in products.data" :key="product.id">
                <div
                  class="flex flex-col items-center justify-center w-full max-w-lg mx-auto"
                >
                  <img
                    class="object-cover w-full rounded-md h-72 xl:h-80"
                    :src="product.product_images[0].url"
                    :alt="product.slug"
                  />
                  <h4 class="mt-2 text-lg font-medium">{{ product.title }}</h4>
                  <p class="text-blue-500">${{ product.price }}</p>

                  <button
                    @click="add(product)"
                    class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 mx-1"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                      />
                    </svg>
                    <span class="mx-1">Añadir al carrito</span>
                  </button>
                </div>
              </div>
              <!-- 
                            <div class="flex flex-col items-center justify-center w-full max-w-lg mx-auto">
                                <img class="object-cover w-full rounded-md h-72 xl:h-80"
                                    src="https://images.unsplash.com/photo-1620799139507-2a76f79a2f4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80"
                                    alt="T-Shirt">
                                <h4 class="mt-2 text-lg font-medium text-gray-700 dark:text-gray-200"> Slub jersey T-shirt
                                </h4>
                                <p class="text-blue-500">$18.70</p>

                                <button
                                    class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                    <span class="mx-1">Add to cart</span>
                                </button>
                            </div>

                            <div class="flex flex-col items-center justify-center w-full max-w-lg mx-auto">
                                <img class="object-cover w-full rounded-md h-72 xl:h-80"
                                    src="https://images.unsplash.com/photo-1603320409990-02d834987237?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="T-Shirt">
                                <h4 class="mt-2 text-lg font-medium text-gray-700 dark:text-gray-200">T-shirt with a motif
                                </h4>
                                <p class="text-blue-500">$16.55</p>

                                <button
                                    class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                    <span class="mx-1">Add to cart</span>
                                </button>
                            </div>

                            <div class="flex flex-col items-center justify-center w-full max-w-lg mx-auto">
                                <img class="object-cover w-full rounded-md h-72 xl:h-80"
                                    src="https://images.unsplash.com/photo-1603320410149-db26b12d5c2b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
                                    alt="T-Shirt">
                                <h4 class="mt-2 text-lg font-medium text-gray-700 dark:text-gray-200">Art T-shirt</h4>
                                <p class="text-blue-500">$12.55</p>

                                <button
                                    class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                    <span class="mx-1">Add to cart</span>
                                </button>
                            </div> -->
            </div>

            <div class="join grid grid-cols-2 py-12">
              <a
                :href="products.links[0]['url'] ? products.links[0]['url'] : ''"
                class="join-item btn btn-outline"
                >Anterior page</a
              >
              <a
                :href="products.links[products.links.length - 1]['url']"
                class="join-item btn btn-outline"
                >Siguiente</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import axios from "axios";

export default {
  props: {
    products: { type: Object, required: true },
    search: { type: Object, default: { category: "Todo", genre: "Todo" } },
    routeName: { type: String, required: true },
    breadcrumb: { type: String, required: true },
    breadcrumb_type: { type: String, required: true },
  },
  data() {
    return {
      crumbs: () => {
        if (this.breadcrumb == "Todo") {
          return ["Todo"];
        } else if (this.breadcrumb_type == "Todo") {
          return [this.breadcrumb];
        } else {
          return [this.breadcrumb, this.breadcrumb_type];
       s }
      },
    };
  },
  components: {
    GuestLayout,
  },
  methods: {
    onChangeCategory() {},
    add(product) {
      console.log(product);
      axios.post(route("cart.add", product));
    },
  },
};
</script>
