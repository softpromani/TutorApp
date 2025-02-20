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
            screens: {
				'400': '400px',
				'420': '420px',
				'430px': '430px',
				'450': '450px',
				'500': '500px',
				'550': '550px',
				'600': '600px',
				'700': '700px',
				'768': '768px',
				'800': '800px',
				'xs850': '850px',
				'900': '900px',
				'950px': '950px',
				'1000': '1000px',
				'1050': '1050px',
				'1100': '1100px',
				'1150': '1150px',
				'1200': '1200px',
				'1250': '1250px',
				'1300': '1300px',
				'1325': '1325px',
				'xs1350': '1350px',
				'xs1400': '1400px',
				'xs1450': '1450px',
				'xs1480': '1480px',
				'1515': '1515px',
				'1550': '1550px',

				'688-less': { 'max': '688px' },
				'1024-less': { 'max': '1024px' },
				'1100-less': { 'max': '1100px' },
				'1200-less': { 'max': '1200px' },
                '1220-less': { 'max': '1220px' },
				'1450-less': { 'max': '1450px' }
			},
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
