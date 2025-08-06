/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./sections/**/*.{html,js,php}",
    // "!./sections/menu.php"
  ],
  plugins: [require("tailwindcss"), require("autoprefixer")],
  // Conflict with bootstrap menu collapse property, see;https://stackoverflow.com/questions/74520409/accordion-closing-imediately-after-opening-with-tailwind-css
  corePlugins: {
    visibility: false,
  },
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#f1f8f1",
          100: "#dfedde",
          200: "#bedcbe",
          300: "#93c296",
          400: "#73ab79",
          500: "#44854e",
          600: "#316a3a",
          700: "#275530",
          800: "#214428",
          900: "#1c3822",
          950: "#0f1f13",
        },
        secondary: "#AB73A5",
      },
    },
  },
};
