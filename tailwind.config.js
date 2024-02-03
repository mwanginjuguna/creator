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
                'creator-primary': '#5c59c3',
                'creator-secondary': '#9ad3cc',
                'creator-tertiary': '#e8caa2',
                'creator-dark': '#222222',
                'creator-light': '#EEEDEA'
            },
            screens: {
                lg: '1050px',
                xl: '1500px'
            }
        },
    },

    plugins: [forms],
};
