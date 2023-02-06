
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
        barlow: ['Barlow', ...defaultTheme.fontFamily.sans],
        barlowCondensed: ['Barlow Condensed', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: {
          DEFAULT: '#E93C3D',
          dark: '#B51213',
        },
        secondary: '#2C75BC',
        black: '#111',
      }
    },
  },

  plugins: [],
}