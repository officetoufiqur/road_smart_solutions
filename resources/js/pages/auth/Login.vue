<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { EyeIcon, EyeOffIcon, LoaderCircle, MailIcon, LockIcon } from 'lucide-vue-next';
import { ref } from 'vue';

defineProps<{
  status?: string;
  canResetPassword: boolean;
}>();

const form = useForm({
  email: '',
  password: '',
  remember: false,
});

const showPassword = ref(false);

const togglePasswordVisibility = () => {
  showPassword.value = !showPassword.value;
};

const submit = () => {
  form.post(route('login'), {
    onFinish: () => form.reset('password'),
  });
};
</script>


<template>
  <AuthBase title="Administrator Log In">
    <Head title="Log in" />

    <div v-if="status" class="mb-4 text-center text-sm font-medium text-green-600">
      {{ status }}
    </div>

    <form @submit.prevent="submit" class="flex flex-col gap-6">
      <div class="grid gap-6">
        <!-- Email Input -->
        <div class="grid gap-2 relative">
          <Label for="email">Email address</Label>
          <div class="relative">
            <MailIcon class="absolute left-3 top-4 h-4.5 w-4.5 text-[#D93243]" />
            <Input
              id="email"
              type="email"
              required
              autofocus
              autocomplete="email"
              v-model="form.email"
              placeholder="email@example.com"
              :tabindex="1"
              class="pl-10"
            />
          </div>
          <InputError :message="form.errors.email" />
        </div>

        <!-- Password Input -->
        <div class="grid gap-2">
          <div class="flex items-center justify-between">
            <Label for="password">Password</Label>
          </div>
          <div class="relative">
            <LockIcon class="absolute left-3 top-4 h-4.5 w-4.5 text-[#D93243]" />
            <Input
              id="password"
              :type="showPassword ? 'text' : 'password'"
              required
              autocomplete="current-password"
              v-model="form.password"
              placeholder="Password"
              :tabindex="2"
              class="pl-10 pr-10"
            />
            <component
              :is="showPassword ? EyeIcon : EyeOffIcon"
              class="absolute right-3 top-3.5 h-4.5 w-4.5 text-gray-400 cursor-pointer"
              @click="togglePasswordVisibility"
            />
          </div>
          <InputError :message="form.errors.password" />
        </div>

        <!-- Remember + Forgot -->
        <div class="flex items-center justify-between">
          <Label for="remember" class="flex items-center space-x-1">
            <Checkbox id="remember" v-model="form.remember" :tabindex="3" />
            <span>Remember me</span>
          </Label>
          <TextLink
            v-if="canResetPassword"
            :href="route('password.request')"
            class="text-sm text-red-600"
            :tabindex="5"
          >
            Forgot password?
          </TextLink>
        </div>

        <!-- Submit Button -->
        <Button type="submit" class="mt-2 w-full" :tabindex="4" :disabled="form.processing">
          <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
          Log in
        </Button>
      </div>

      <!-- Signup Link -->
      <div class="text-center text-sm text-muted-foreground">
        Don't have an account?
        <TextLink :href="route('register')" :tabindex="5">Sign up</TextLink>
      </div>
    </form>
  </AuthBase>
</template>

