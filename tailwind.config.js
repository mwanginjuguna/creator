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
                heading: ['Public Sans', ...defaultTheme.fontFamily.sans],
                body: ['Public Sans', ...defaultTheme.fontFamily.sans],
                sans: ['Public Sans', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'primary': '#007BFF',
                'secondary': '#F2E300',
                'accent': '#38828f',
                'bg-dark': '#0f0f0f',
                'dark': '#0f0f0f',
                'bg-light': '#f0f0f0',
                'light': '#f0f0f0',
                'creator-primary': '#007BFF',
                'creator-secondary': '#F2E300',
                'creator-tertiary': '#38828f',
                'creator-dark': '#0f0f0f',
                'creator-light': '#f0f0f0'
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
    darkMode: "class",
};
