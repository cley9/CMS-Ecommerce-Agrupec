/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  // mode: 'jit',
  // purge: [
  //   './index.html',
  //   './src/**/*.{vue,js,ts,jsx,tsx}',
  // ],
  // darkMode: false,
  content: [
    // Example content paths...
    './public/**/*.html',
    './src/**/*.{js,jsx,ts,tsx,vue}',
  ],
  theme: {
    // extend: {},
  },
  // variants: {},
  plugins: [
    // require('tailwindcss'),
    // require('autoprefixer'),
  ],
}

