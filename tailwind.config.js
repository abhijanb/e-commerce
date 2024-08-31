/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {colors: {
      green: '#34eb58',
      amazonColor: 'rgb(15, 17, 17)',
      navbarText: 'rgb(255, 255, 255'
    }},
  },
  plugins: [],
}
