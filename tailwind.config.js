/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      screens: {
        'sm': '386px',
        'sm1':'752px',
        'sm2': '500px',
        'sm3': '600px',
        'sm4': '900px',
        'lg': '1200px',
        'lg1': '1000px',
      },
      margin: {
        '25': '25%',
        '90': '90px',
        '350': '350px'
      },
      width: {
        '100':'100%',
        '50':'50%',
        '600':'600px'
      },
      
    },
  },
  plugins: [],
};
