<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
    isLogin: { type: Boolean, default: true },
    isRegister: { type: Boolean, default: false },

});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Incio de Sesion" />

    <div class="flex flex-col w-full lg:flex-row border-y-2">
        <div class="grid flex-grow h-full w-full rounded-box place-items-center">
            <div class="hero min-h-screen">
                <div class="hero-content text-center ">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">¿No tienes un cuenta?</h1>
                        <p class="mb-5">Si aun no te has registrado, !Hazlo ahora!. Al registrarte tendras muchos mas
                            beneficios</p>
                        <button @click="$emit('onRegisterRequest')" class="btn btn-primary">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider lg:divider-horizontal">OR</div>
        <div class="grid flex-grow h-full w-full card bg-base rounded-box place-items-center">
            <div class="hero min-h-screen">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div class="text-center lg:text-left">
                        <h1 class="text-5xl font-bold">Login now!</h1>
                        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    </div>
                    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                        <div class="card-body">
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Correo</span>
                                </label>
                                <input required autofocus autocomplete="username" v-model="form.email" type="email"
                                    placeholder="ejemplo@correo.com" class="input input-bordered" />
                                <InputError class="mt-2" :message="form.errors.email" />

                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Contraseña</span>
                                </label>
                                <input required autocomplete="new-password" v-model="form.password" type="password"
                                    placeholder="******" class="input input-bordered" />
                                <InputError class="mt-2" :message="form.errors.password" />
                                <label class="label">
                                    <a href="#" class="label-text-alt link link-hover">¿Olvidaste tu contraseña?</a>
                                </label>
                            </div>
                            <div class="form-control mt-6">
                                <button @click="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



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
</template>
