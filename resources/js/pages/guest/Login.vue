<script setup>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import { useStore } from 'vuex';
import { useToast } from 'vue-toast-notification';
import { useForm } from 'vee-validate';

import useError from '@/utilities/error';
import Section from '@/components/base/Section.vue';

const { setError } = useError();
const router = useRouter();
const store = useStore();
const toast = useToast();

const recaptchaResponse = ref(null);
const recaptchaKey = import.meta.env.VITE_GOOGLE_RECAPTCHA_CLIENT;
const userAccessType = ref('moderator');

const handleRecaptchaResponse = (response) => {
  recaptchaResponse.value = response;
};

const { handleSubmit, defineField, isSubmitting, resetForm, errors } = useForm({
  validationSchema: yup.object({
    email: yup.string().email().required(),
    password: yup.string().required()
  }),
});


const onLogin = handleSubmit.withControlled(async values => {
  try {
    const formData = { ...values, role: userAccessType.value, recaptcha: recaptchaResponse.value };
    const result = await store.dispatch('auth/user/onLogin', formData);

    toast.open({ message: result, type: 'success' });
    router.push({ name: 'u.dashboard', params: { role: formData.role }});
  } catch (error) {
    recaptchaResponse.value = '';
    grecaptcha.reset();
    toast.open({ message: error, type: 'error' });
    return;
  }
});

const [email, emailAttrs] = defineField('email');
const [password, passwordAttrs] = defineField('password');

const updateAccessType = (accesstype) => {
  userAccessType.value = accesstype;
};

onMounted(() => {
  const recaptchaElement = document.getElementById('recaptcha');
  if(recaptchaElement) {
    window.grecaptcha.render(recaptchaElement, {
      siteKey: recaptchaKey,
      callback: handleRecaptchaResponse,
    });
  }
});
</script>

<template>
	<Section className="bg-dot login-content">
    <div class="container login-box">
      <div class="card login-card">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <img src="@assets/images/852fpolicy.png" class="img-fluid login-hero" alt="login" loading="lazy"/>
            <p class="text-muted col-8 login-description">This system is for authorized users only. If you do not have an account, please contact the system administrator to request access.</p>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form @submit="onLogin" method="POST" class="login-form">
              <div class="user-type">
                <div class="row">
                  <div class="col-md-6 mb-1">
                    <span class="badge login-access-btn d-flex align-items-center justify-content-center p-3 pe-2 text-muted bg-light-subtle border subtle"
                      :class="{ active: userAccessType === 'moderator'}"
                      @click="updateAccessType('moderator')">
                      <img class="rounded-circle me-1" width="28" height="28" src="@assets/images/cms/icons/moderator.png" loading="lazy" alt="moderator"/>
                      Moderator
                    </span>
                  </div>
                  <div class="col-md-6 mb-1">
                    <span class="badge login-access-btn d-flex align-items-center justify-content-center p-3 pe-2 text-muted bg-light-subtle border subtle"
                      :class="{ active: userAccessType === 'admin'}"
                      @click="updateAccessType('admin')">
                      <img class="rounded-circle me-1" width="24" height="24" src="@assets/images/cms/icons/admin.png" loading="lazy" alt="admin"/>
                      Admin
                    </span>
                  </div>
                </div>
              </div>
              <hr class="my-4 text-muted">
              <div class="form-floating">
                <input type="text"
                  class="form-control"
                  id="uid"
                  name="email"
                  v-model="email"
                  v-bind="emailAttrs"
                  placeholder="accounts@goldenmindsbulacan.com"
                  autocomplete="on"
                />
                <label class="label" for="uid">Email ID</label>
                <span class="text-danger error-message">{{ setError(errors.email) }}</span>
              </div>

              <div class="form-floating mt-1">
                <input type="password"
                  class="form-control"
                  id="pwd"
                  v-model="password"
                  v-bind="passwordAttrs"
                  placeholder="Password"
                  autocomplete="off"
                />
                <label class="label" for="pwd">Password</label>
                <span class="text-danger error-message">{{ setError(errors.password) }}</span>
              </div>

              <div class="mb-2 d-flex justify-content-center align-items-center mt-2">
                <div class="g-recaptcha-widgets">
                  <div class="g-recaptcha"
                    id="recaptcha"
                    :data-sitekey="recaptchaKey"
                    >
                  </div>
                </div>
              </div>

              <hr class="my-4 text-muted">
              <button class="btn btn-ligth w-100 login-button" type="submit" :disabled="isSubmitting">
                {{ isSubmitting ? 'Submitting...' : 'Log in' }}
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
	</Section>
</template>

<style scoped>
.login-content {
  padding-bottom: 30px;
  max-width: 1000px;
  margin-left: 95px;
}
.login-box {
  margin-top: 40px;

}
.login-card {
  border: 0px;
}
.login-form {
  background: #f8f9fa;
  padding: 30px;
  border-radius: 15px;
}
.login-hero {
  pointer-events: none;
  margin-left: 120px;
  width: 400px;
  height: 450px;
}
.login-description {
  margin-left: 140px;
  text-align: justify;
  font-size: 15px;
  opacity: .9;
}
.login-access-btn {
  background: #fff;
  cursor: pointer;
  font-size: 15px;
  font-weight: bold;
} .login-access-btn:hover {
  transform: scale(1.02);
}
.login-access-btn.active {
  border: none!important;
  opacity: .8;
  background: #EEEEFA!important;
  color: #000!important;
}
.login-button {
  -webkit-box-shadow: none;
  box-shadow: none;
  background-image: unset;
  text-align: center;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: -0.225px;
  position: relative;
  display: inline-block;
  -webkit-transition: all 300ms ease 0ms;
  transition: all 300ms ease 0ms;
  border-radius: 6px;
  min-height: 54px;
  min-width: 196px;
  padding: 18px 20px;
  border-width: 2px;
  border-style: solid;
  line-height: 1;
  border: none;
  background: #86643a!important;
  font-weight: bolder;
  color: #f3f3f3;
  opacity: .9;
  transition: .5s all ease;
} .login-button:hover {
  transform: scale(1.02);
}
.login-form .form-floating:focus-within {
  z-index: 2;
}
.login-form .label {
  opacity: .8!important;
}
.login-form input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  background: #fff!important;
} .login-form input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  background: #fff!important;
} .login-form input[type="text"]:focus,
  .login-form input[type="password"]:focus {
  border: 1px solid var(--app-light-brown)!important;
  box-shadow: none!important;
  opacity: .5;
}
.error-message {
  font-weight: bold;
  font-size: 15px;
  text-indent: 15px;
  margin-top: 5px;
}
</style>