import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.jsx',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'semiBlack': '#06040E',
                'darkBlack': '#06040E',
                'blue1': '#145DA1'
              },
        },
    },
    plugins: [],
};
