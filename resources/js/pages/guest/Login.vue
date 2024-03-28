<script setup>
import * as yup from 'yup';
import { useForm } from 'vee-validate';
import { useRouter } from 'vue-router';
import { useStore } from 'vuex';
import { useToast } from 'vue-toast-notification';
import useAuth from '@/composables/auth/user';
import useHelpers from '@/composables/helper';

const { login, logout } = useAuth();
const { setError } = useHelpers();
const router = useRouter();
const store = useStore();
const toast = useToast();

const { handleSubmit, defineField, isSubmitting, resetForm, errors } = useForm({
  validationSchema: yup.object({
    email: yup.string().email().required(),
    password: yup.string().required(),
  }),
});

const onLogin = handleSubmit.withControlled(async values => {
  try {
    const res = await login(values);
    toast.open({ message: res, type: 'success' });

    store.dispatch('auth/user/setAuth', true);
  } catch (err) {
    toast.open({ message: err, type: 'error' });
    return; 
  }

  router.push({ name: 'admin.dashboard' });
});
const [email, emailAttrs] = defineField('email');
const [password, passwordAttrs] = defineField('password');
</script>

<template>
	<section class="bg-dot login-content">
		<div class="form-login">
			<form @submit="onLogin">
	    	<p class="note">This system is for authorized users only. If you do not have an account, please contact the system administrator to request access.</p>

		    <div class="form-floating">
		      <input type="text" 
            class="form-control" 
            id="uid" 
            name="email"
            v-model="email"
            v-bind="emailAttrs"
            placeholder="admin@goldenminds.com"
            autocomplete="username"
          />
		      <label class="label" for="uid">Email ID</label>
          <span class="text-danger fw-bold">{{ setError(errors.email) }}</span>
		    </div>

		    <div class="form-floating mt-1">
		      <input type="password" 
            class="form-control" 
            id="pwd" 
            v-model="password"
            v-bind="passwordAttrs"
            placeholder="Password"
            autocomplete="password"
          />
		      <label class="label" for="pwd">Password</label>
          <span class="text-danger fw-bold">{{ setError(errors.password) }}</span>
		    </div>
		    <hr class="text-muted"/>
		    <button class="btn btn-ligth w-100 login-btn" type="submit" :disabled="isSubmitting">
          {{ isSubmitting ? 'Submitting...' : 'Log in' }}      
        </button>

	    	<p class="credit">Maintain and Manage by Information System<br/>&copy; 2024 - Golden Minds Bulacan</p>
	  	</form>
		</div>
	</section>
</template>

<style scoped>
.login-content {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 81vh;
} .form-login {
  max-width: 350px;
  padding: 1rem;
} .form-login .note {
	color: #000;
	opacity: .8;
	font-family: var(--app-font-nunito);
	font-size: 15px;
} .form-login .form-floating .label {
  font-size: 15px;
} .form-login .form-floating:focus-within {
  z-index: 2;
} .form-login input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  background: #fff!important;
} .form-login input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  background: #fff!important;
} .form-login input[type="text"]:focus,
	.form-login input[type="password"]:focus {
	border: 1px solid var(--app-light-brown)!important;
	box-shadow: none!important;
	opacity: .5;
}.form-login .login-btn {
	-webkit-box-shadow: none;
  box-shadow: none;
  background-image: unset;
  text-align: center;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 17px;
  font-family: var(--app-font-nunito);
  font-weight: 600;
  letter-spacing: -0.225px;
  position: relative;
  display: inline-block;
  -webkit-transition: all 300ms ease 0ms;
  transition: all 300ms ease 0ms;
  border-radius: 6px;
  min-height: 50px;
  min-width: 196px;
  padding: 18px 20px;
  border-width: 2px;
  border-style: solid;
  line-height: 1;

  background: #86643a!important;
  font-weight: bolder;
  color: #f3f3f3;
  opacity: .9;
  transition: .2s all ease;
} .form-login .login-btn:hover {
	transform: scale(1.02);
} .form-login .credit {
	color: #000;
	opacity: .7;
	font-family: var(--app-font-nunito);
	font-size: 14.2px;
	margin-top: 20px;
}
</style>