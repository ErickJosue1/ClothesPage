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
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    console.log(form.data());
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Registrarse" />

    <div class="flex flex-col w-full lg:flex-row border-y-2">
        <div class="grid flex-grow h-full w-full rounded-box place-items-center">
            <div class="hero min-h-screen">
                <div class="hero-content text-center ">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">¿Ya tienes una cuenta?</h1>
                        <p class="mb-5">Si ya tienes una cuenta mejor inica sesion!</p>
                        <button @click="$emit('onLoginRequest')" class="btn btn-primary">Iniciar Sesion</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider lg:divider-horizontal">OR</div>
        <div class="grid flex-grow h-full w-full card bg-base rounded-box place-items-center">
            <div class="hero min-h-screen">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div class="text-center lg:text-left">
                        <h1 class="text-5xl font-bold">Unte ahora!</h1>
                        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    </div>
                    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                        <div class="card-body">
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Nombre</span>
                                </label>
                                <input required autofocus autocomplete="name" v-model="form.name" type="text"
                                    placeholder="nombre" class="input input-bordered" />
                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Correo</span>
                                </label>
                                <input v-model="form.email" type="text" placeholder="ejemplo@correo.com"
                                    class="input input-bordered" />
                                <InputError class="mt-2" :message="form.errors.email" />

                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Contraseña</span>
                                </label>
                                <input required autocomplete="new-password" v-model="form.password" type="password"
                                    placeholder="******" class="input input-bordered" />
                                <InputError class="mt-2" :message="form.errors.password" />

                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Confirma tu Contraseña</span>
                                </label>
                                <input required autocomplete="new-password" v-model="form.password_confirmation"
                                    type="password" placeholder="******" class="input input-bordered" />
                                <InputError class="mt-2" :message="form.errors.password_confirmation" />
                            </div>
                            <div class="form-control mt-6">
                                <button @click="submit" class="btn btn-primary">Registrate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
