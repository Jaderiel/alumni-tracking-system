/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['poppins', 'sans-serif'],
      },
      colors: {
        'custom-blue': '#162F65',
        'custom-yellow': '#E8AF30',
        'custom-gray': '#757575',
      },
    },
  },
  plugins: [],
}

