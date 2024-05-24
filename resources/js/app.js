import './boostrap.js';
import { createApp } from 'vue';
import App from '../src/App.vue';

<<<<<<< HEAD
import { createApp } from "vue";
import TestComponent from "./Components/TestComponent.vue";
import RegisterForm from "./components/RegisterForm.vue";

const app = createApp({});

app.component("test-component", TestComponent);
app.component("register-form", RegisterForm);


app.mount("#app");
=======
createApp(App).mount("#app");
>>>>>>> 3d5c482c8d93a0bad2bfe5d3c210111356e72306
