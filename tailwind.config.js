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
                body: ['Public Sans', ...defaultTheme.fontFamily.sans],
                sans: ['Public Sans', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'creator-primary': '#5c59c3',
                'primary': '#3c83f6',
                'creator-secondary': '#9ad3cc',
                'secondary': '#87aae3',
                'creator-tertiary': '#e8caa2',
                'tertiary': '#ca8a04',
                'accent': '#ca8a04',
                'creator-dark': '#222222',
                'dark': '#222222',
                'creator-light': '#EEEDEA',
                'light': '#EEEDEA'
            },
            screens: {
                lg: '1050px',
                xl: '1500px'
            }
        },
    },

    plugins: [
        forms,
        require('@tailwindcss/typography')
    ],
    darkMode: "class"
};
