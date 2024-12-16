/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./sections/**/*.{html,js,php}",
      '!./sections/**/menu.php',
  ],
  
  
  plugins: [     require("tailwindcss"),  require("autoprefixer") ],
   theme: {
   extend: {
    colors: {
     'primary': {
        '50': '#f1f8f1',
        '100': '#dfedde',
        '200': '#bedcbe',
        '300': '#93c296',
        '400': '#73ab79',
        '500': '#44854e',
        '600': '#316a3a',
        '700': '#275530',
        '800': '#214428',
        '900': '#1c3822',
        '950': '#0f1f13',
    },
      'secondary': '#AB73A5',
    },
  },
}
}

