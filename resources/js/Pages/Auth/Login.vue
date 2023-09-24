<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import LoginLayout from '@/Layouts/LoginLayout.vue';
import RegisterLayout from '@/Layouts/RegisterLayout.vue';
import { ref } from 'vue';

const props = defineProps({
    canResetPassword: Boolean,
    status: String,
    isLogin: { type: Boolean, default: true },
    isRegister: { type: Boolean, default: false },
});


const canLogin = ref(props.isLogin);
const canRegister = ref(props.isRegister);


const onLogIn = () => {
    canLogin.value = true;
    canRegister.value = false;
}

const onRegister = () => {
    canLogin.value = false;
    canRegister.value = true;
}

</script>

<template>
    <GuestLayout>

        <Head title="Incio de Sesion" />


        <LoginLayout v-if="canLogin" @onRegisterRequest="onRegister()"></LoginLayout>
        <RegisterLayout v-if="canRegister" @onLoginRequest="onLogIn()"></RegisterLayout>

        <!--   <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                    autocomplete="current-password" />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form> -->
    </GuestLayout>
</template>
