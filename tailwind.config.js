/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./"],
  theme: {
    extend: {
      colors: {
        customcolor: "#23242b",
      },

      fontFamily: {
        sans: [
          "ui-sans-serif",
          "system-ui",
          "sans-serif",
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
        monts: ["'Montserrat', sans-serif"],
        inter: ["'Inter', sans-serif"],
      },
    },
  },
  plugins: [],
};
