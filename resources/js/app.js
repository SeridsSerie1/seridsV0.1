import "./bootstrap";

import { createApp } from "vue";
import TestComponent from "./Components/TestComponent.vue";
import RegisterForm from "./components/RegisterForm.vue";

const app = createApp({});

app.component("test-component", TestComponent);
app.component("register-form", RegisterForm);


app.mount("#app");
