<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { EyeIcon, EyeOffIcon, LoaderCircle, MailIcon, LockIcon, User2Icon } from 'lucide-vue-next';
import { ref } from 'vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const showPassword = ref(false);

const togglePasswordVisibility = () => {
    showPassword.value = !showPassword.value;
};

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <AuthBase title="Create an account" description="Enter your details below to create your account">

        <Head title="Register" />

        <form @submit.prevent="submit" class="flex flex-col gap-6">
            <div class="grid gap-4">
                <div class="grid gap-2">
                    <Label for="name">Name</Label>
                    <div class="relative">
                        <User2Icon class="absolute left-3 top-4 h-4.5 w-4.5 text-[#D93243]" />
                        <Input id="name" type="text" required autofocus :tabindex="1" autocomplete="name"
                        v-model="form.name" placeholder="Full name" class="pl-10" />
                    </div>
                    <InputError :message="form.errors.name" />
                </div>

                <div class="grid gap-2">
                    <Label for="email">Email address</Label>
                    <div class="relative">
                        <MailIcon class="absolute left-3 top-4 h-4.5 w-4.5 text-[#D93243]" />
                        <Input id="email" type="email" required autofocus autocomplete="email" v-model="form.email"
                            placeholder="email@example.com" :tabindex="1" class="pl-10" />
                    </div>
                    <InputError :message="form.errors.email" />
                </div>

                <div class="grid gap-2">
                    <Label for="password">Password</Label>
                    <div class="relative">
                        <LockIcon class="absolute left-3 top-4 h-4.5 w-4.5 text-[#D93243]" />
                        <Input id="password" :type="showPassword ? 'text' : 'password'" required
                            autocomplete="current-password" v-model="form.password" placeholder="Password" :tabindex="2"
                            class="pl-10 pr-10" />
                        <component :is="showPassword ? EyeIcon : EyeOffIcon"
                            class="absolute right-3 top-4 h-4.5 w-4.5 text-gray-400 cursor-pointer"
                            @click="togglePasswordVisibility" />
                    </div>
                    <InputError :message="form.errors.password" />
                </div>

                <div class="grid gap-2">
                    <Label for="password_confirmation">Confirm password</Label>
                    <div class="relative">
                        <LockIcon class="absolute left-3 top-4 h-4.5 w-4.5 text-[#D93243]" />
                        <Input id="password_confirmation" :type="showPassword ? 'text' : 'password'" required :tabindex="4"
                            autocomplete="new-password" v-model="form.password_confirmation"
                            placeholder="Confirm password" class="pl-10 pr-10" />
                        <InputError :message="form.errors.password_confirmation" />
                        <component :is="showPassword ? EyeIcon : EyeOffIcon"
                            class="absolute right-3 top-4 h-4.5 w-4.5 text-gray-400 cursor-pointer"
                            @click="togglePasswordVisibility" />
                    </div>
                </div>

                <Button type="submit" class="mt-2 w-full" tabindex="5" :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                    Create account
                </Button>
            </div>

            <div class="text-center text-sm text-muted-foreground">
                Already have an account?
                <TextLink :href="route('login')" class="underline underline-offset-4" :tabindex="6">Log in</TextLink>
            </div>
        </form>
    </AuthBase>
</template>
