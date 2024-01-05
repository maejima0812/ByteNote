const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
     
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
	'./resources/**/*.vue',
	"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
],


    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            }, colors: {
        'custom-blue': '#3490dc', // お好みの青色の HEX コードを使用します
      },
        },
    },

    plugins: [require('@tailwindcss/forms')],

  theme: {
    extend: {
     
    },
  },
  variants: {},
  plugins: [],

};
