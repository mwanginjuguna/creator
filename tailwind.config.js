import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                heading: ['Libre Baskerville', ...defaultTheme.fontFamily.serif],
                body: ['Josefin Sans', ...defaultTheme.fontFamily.sans],
                sans: ['Josefin Sans', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'creator-green': '#023F3A',
                'creator-green-light': '#075953',
                'creator-orange': '#F97316',
                'creator-dark': '#222222',
                'creator-light': '#F2EEE9'
            }
        },
    },

    plugins: [forms],
};
