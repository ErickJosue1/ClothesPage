<template>
  <GuestLayout> <!-- Content -->
    <div class=" w-full h-full bg-black bg-opacity-90 overflow-y-auto overflow-x-hidden">
      <div class="w-full h-full overflow-x-hidden">
        <div class=" flex items-end lg:flex-row flex-col justify-center">
          <!-- Items -->
          <div
            class="w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-base-100 overflow-y-auto overflow-x-hidden lg:h-screen h-auto"
            id="scroll">
            <div class="flex items-center hover:text-gray-600 cursor-pointer" @click="checkoutHandler(false)">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="16"
                height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <polyline points="15 6 9 12 15 18" />
              </svg>
              <a :href="route('public')" class="text-sm pl-2 leading-none">Atras</a>
            </div>
            <p class="lg:text-4xl text-3xl font-black leading-10 py-3">Carrito</p>

            {{ totalPrice }}

            <div v-for="product in products">
              <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
                <div class="md:w-4/12 2xl:w-1/4 w-full">
                  <img src="https://i.ibb.co/SX762kX/Rectangle-36-1.png" alt="Black Leather Bag"
                    class="h-full object-center object-cover md:block hidden" />
                  <img src="https://i.ibb.co/g9xsdCM/Rectangle-37.pngg" alt="Black Leather Bag"
                    class="md:hidden w-full h-full object-center object-cover" />
                </div>
                <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                  <p class="text-xs leading-3 md:pt-0 pt-4">RF293</p>
                  <div class="flex items-center justify-between w-full pt-1">
                    <p class=" font-black leading-none">{{ product.title }}</p>
                    <select aria-label="Select quantity" class="py-2 px-1 border border-gray-200 mr-6 focus:outline-none">
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                    </select>
                  </div>
                  <p class="text-xs leading-3  pt-2">Height: 10 inches</p>
                  <p class="text-xs leading-3  py-4">Color: Black</p>
                  <p class="w-96 text-xs leading-3 ">Composition: 100% calf leather</p>
                  <div class="flex items-center justify-between pt-5">
                    <div class="flex itemms-center">
                      <p class="text-xs leading-3 underline cursor-pointer">Add to favorites</p>
                      <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</p>
                    </div>
                    <p class="text-base font-black leading-none">${{ product.price }}</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- 
            <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
              <div class="md:w-4/12 2xl:w-1/4 w-full">
                <img src="https://i.ibb.co/c6KyDXN/Rectangle-5-1.png" alt="Gray Sneakers"
                  class="h-full object-center object-cover md:block hidden" />
                <img src="https://i.ibb.co/yVSpYqx/Rectangle-6.png" alt="Gray Sneakers"
                  class="md:hidden w-full h-full object-center object-cover" />
              </div>
              <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                <p class="text-xs leading-3 md:pt-0 pt-4">RF293</p>
                <div class="flex items-center justify-between w-full pt-1">
                  <p class="text-base font-black leading-none">LW sneakers</p>
                  <select aria-label="Select quantity"
                    class="py-2 px-3 border bg-secondary-content border-gray-200 mr-6 focus:outline-none">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                  </select>
                </div>
                <p class="text-xs leading-3 pt-2">Height: 10 inches</p>
                <p class="text-xs leading-3 py-4">Color: Black</p>
                <p class="w-96 text-xs leading-3">Composition: 100% calf leather</p>
                <div class="flex items-center justify-between pt-5">
                  <div class="flex itemms-center">
                    <p class="text-xs leading-3 underline cursor-pointer">Add to favorites</p>
                    <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</p>
                  </div>
                  <p class="text-base font-black leading-none">$9,000</p>
                </div>
              </div>
            </div>


            <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
              <div class="md:w-4/12 2xl:w-1/4 w-full">
                <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png" alt="Black Leather Purse"
                  class="h-full object-center object-cover md:block hidden" />
                <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse"
                  class="md:hidden w-full h-full object-center object-cover" />
              </div>
              <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                <p class="text-xs leading-3 md:pt-0 pt-4">RF293</p>
                <div class="flex items-center justify-between w-full">
                  <p class="text-base font-black leading-none">Luxe card holder</p>
                  <select aria-label="Select quantity"
                    class="py-2 px-3 border bg-secondary-content border-gray-200 mr-6 focus:outline-none">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                  </select>
                </div>
                <p class="text-xs leading-3 pt-2">Height: 10 inches</p>
                <p class="text-xs leading-3 py-4">Color: Black</p>
                <p class="w-96 text-xs leading-3">Composition: 100% calf leather</p>
                <div class="flex items-center justify-between pt-5">
                  <div class="flex itemms-center">
                    <p class="text-xs leading-3 underline cursor-pointer">Add to favorites</p>
                    <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</p>
                  </div>
                  <p class="text-base font-black leading-none">$9,000</p>
                </div>
              </div>
            </div> -->

          </div>

          <!-- Total -->

          <div class="w-full bg-base-300 h-full">
            <div
              class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">
              <div>
                <p class="lg:text-4xl text-3xl font-black leading-9">Resumen</p>
                <div class="flex items-center justify-between pt-16">
                  <p class="text-base leading-none">Subtotal</p>
                  <p class="text-base leading-none">{{ totalPrice }}</p>
                </div>
                <div class="flex items-center justify-between pt-5">
                  <p class="text-base leading-none">Envio</p>
                  <p class="text-base leading-none">$100</p>
                </div>
                <div class="flex items-center justify-between pt-5">
                  <p class="text-base leading-none">IVA</p>
                  <p class="text-base leading-none">$35</p>
                </div>
              </div>
              <div>
                <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                  <p class="text-2xl leading-normal">Total</p>
                  <p class="text-2xl font-bold leading-normal text-right">{{ finalPrice }}</p>
                </div>
                <button onclick="checkoutHandler1(true)"
                  class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white">Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref } from "vue";

export default {
  name: "component",
  props: {
    products: { type: Object, required: true },
    cartItems: { type: Object, required: true },
    total: { type: Number, required: true },
  },
  data() {
    return {
      show: false,
      text: "Sort by",
      search: true,
      windowWidth: window.innerWidth,

    }
  },
  setup(props) {
    const totalPrice = ref(0);

    props.products.forEach(element => {
      totalPrice.value += props.cartItems[element.id].quantity * element.price;
      console.log(props.cartItems[element.id].quantity)
    });

    const finalPrice = ref(totalPrice.value + 100 + 25)
    
    totalPrice.value = parseFloat(totalPrice.value).toFixed(2)
    finalPrice.value = parseFloat(finalPrice.value).toFixed(2)


   

    return { totalPrice, finalPrice };
  },
  components: {
    GuestLayout
  },
};
</script>

<style>
/* width */

#scroll::-webkit-scrollbar {
  width: 1px;
}

/* Track */

#scroll::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */

#scroll::-webkit-scrollbar-thumb {
  background: rgb(133, 132, 132);
}
</style>