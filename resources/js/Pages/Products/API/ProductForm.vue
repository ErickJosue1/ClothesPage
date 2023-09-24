<template>
  <GuestLayout>
    <div class="relative flex flex-col justify-center h-full w-full overflow-scroll">
      <div class="w-full h-full p-6 m-auto bg-base-300 shadow-md ring-2 ring-gray-800/50 lg:max-w-4xl rounded-md my-2">
        <h1 class="text-3xl font-semibold text-center">Agregar nuevo producto</h1>
        <form class="space-y-4">
          <div>
            <label class="label">
              <span class="text-base label-text">Nombre del producto</span>
            </label>
            <input type="text" v-model="product.title" placeholder="Titulo/Nombre" class="w-full input  input-bordered input-secondary" />
          </div>

          <div>
            <label class="label">
              <span class="text-base label-text">Categoria del producto</span>
            </label>
            <select v-model="product.category" class="select select-secondary w-full ">
              <option disabled selected>Categorias</option>
              <option>Camisas</option>
              <option>Pantalones</option>
              <option>Calzado</option>
            </select>
          </div>

          <div>
            <label class="label">
              <span class="text-base label-text">Descripcion</span>
            </label>
            <input v-model="product.description" type="text" placeholder="Descripcion general del producto"
              class="w-full input input-bordered input-secondary" />
          </div>

          <div>
            <label class="label">
              <span class="text-base label-text">Precio $</span>
            </label>
            <input v-model="product.price" type="number" min="0" placeholder="Precio del producto"
              class="w-full input input-bordered input-secondary" />
          </div>

          <div>
            <label class="label">
              <span class="text-base label-text">General al que va dirigido producto</span>
            </label>
            <select v-model="product.genre" class="select select-secondary w-full ">
              <option disabled selected>Generos</option>
              <option>Hombres</option>
              <option>Mujeres</option>
              <option>Niños</option>
            </select>
          </div>

          <label class="label">
              <span class="text-base label-text">Seleccione una imagen para el producto</span>
            </label>
          <div class="flex py-2 items-center space-x-6 w-full">
            <div class="shrink-0">
              <img id='preview_img' class="h-16 w-16 object-cover rounded-full"
                src="https://lh3.googleusercontent.com/a-/AFdZucpC_6WFBIfaAbPHBwGM9z8SxyM1oV4wB4Ngwp_UyQ=s96-c"
                alt="Current profile photo" />
            </div>
            <label class="block">
              <span class="sr-only">Choose profile photo</span>
              <input type="file" @change="handleImageUpload" class="block w-full text-sm text-slate-500
                                                                          file:mr-4 file:py-2 file:px-4
                                                                          file:rounded-full file:border-0
                                                                          file:text-sm file:font-semibold
                                                                          file:bg-violet-50 file:text-violet-700
                                                                          hover:file:bg-violet-100" />
            </label>
          </div>

        </form>


      </div>
    </div>
    <!--     <div>
      <h2>Create a New Product</h2>
      <form @submit.prevent="submitProduct">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" v-model="product.title" required />
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea id="description" v-model="product.description"></textarea>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" id="price" v-model="product.price" required />
        </div>
        <div class="form-group">
          <label for="images">Images</label>
          <input type="file" id="images" ref="imageInput" @change="handleImageUpload" multiple accept="image/*" />
          <div v-if="product.images.length">
            <ul>
              <li v-for="(image, index) in images" :key="index">{{ image.name }}</li>
            </ul>
          </div>
        </div>
        <button type="submit">Create Product</button>
      </form>
    </div> -->
  </GuestLayout>
</template>

<script>
import { onMounted, ref } from 'vue'
import GuestLayout from '@/Layouts/GuestLayout.vue';


export default {
  components: {
    GuestLayout,
  },
  setup() {
    const loading = ref(false)

    const product = ref({
      title: '',
      images: [],
      description: '',
      price: 0,
      genre: '',
      category: ''
    })


    return { product }
  },

  methods: {
    handleImageUpload(e) {
      console.log(e)
      this.product.images.push(e.target.files[0]);
      console.log(this.product.images)

      /*    const imageInput = this.$refs.imageInput;
         this.images = Array.from(imageInput.files); */
    },
    async submitProduct() {
      const formData = new FormData();
      formData.append('title', this.product.title);
      formData.append('description', this.product.description);
      formData.append('price', this.product.price);
      formData.append('genre', this.product.genre);
      formData.append('category', this.product.category);



      this.images.forEach((image, index) => {
        formData.append(`images[${index}]`, image);
      });

      try {
        const response = await axios.post('/api/products', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });

        // Handle successful response here, e.g., show a success message or redirect
        console.log('Product created:', response.data);
      } catch (error) {
        // Handle errors, e.g., display error messages
        console.error('Error creating product:', error);
      }
    },
  }

};
</script>
