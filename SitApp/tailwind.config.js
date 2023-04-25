/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],
  theme: {

    fontFamily:{
        'jose' : ['Josefin Sans', 'sans-serif']
      },
    extend: {},
  },
  plugins: [],
}
