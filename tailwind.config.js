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
                'text-dark': '#fbf4f4',
                'text-light': '#0b0404',
                'bg-dark': '#0f0f0f',
                'bg-light': '#f0f0f0',
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

    plugins: [
        forms,
        require('@tailwindcss/typography')
    ],
    darkMode: "class",
};
