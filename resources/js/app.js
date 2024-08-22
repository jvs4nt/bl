/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');

//HIDE PASSWORD - LOGIN
    document.addEventListener('DOMContentLoaded', function() {
        var showPasswordBtn = document.getElementById('show-password');
        if (showPasswordBtn) {
            document.getElementById('show-password').addEventListener('click', function() {
                var passwordInput = document.getElementById('password');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });
        }
    });

//PRINT BUTTON
    document.addEventListener('DOMContentLoaded', function() {
        var printBtn = document.getElementById('print-button');
        if (printBtn) {
            document.getElementById('print-button').addEventListener('click', function() {
                window.print();
            });
        }
    });

//GENERATE PASSWORD
    function generatePassword() {
        var length = 12,
            charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&",
            password = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            password += charset.charAt(Math.floor(Math.random() * n));
        }
        return password;
    }
    document.addEventListener('DOMContentLoaded', function() {
        var generatePasswordBtn = document.getElementById('gerar-senha');
        if (generatePasswordBtn) {
            document.getElementById('gerar-senha').addEventListener('click', function() {
                var passwordInput = document.getElementById('senha');
                var password = generatePassword();
                passwordInput.value = password;
            });
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        var showPasswordBtn = document.getElementById('show-generated-password');
        if (showPasswordBtn) {
            document.getElementById('show-generated-password').addEventListener('click', function() {
                var passwordInput = document.getElementById('senha');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });
        }
    });





