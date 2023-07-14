/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#26364b',
        secondary: '#f6b4ac',
        accent: '#79839C',
        faded: '#EBECF0',
      }, // Extend Tailwind's default colors
      fontSize: {
        '3xl': '3.125rem',
      },
      fontFamily: {
        primary: ['gelica', 'sans-serif'],
        secondary: ['semplicitapro', 'sans-serif'],
      },
    },
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '640px',
          },
          '@screen md': {
            maxWidth: '768px',
          },
          '@screen lg': {
            maxWidth: '1280px',
          },
          '@screen xl': {
            maxWidth: '1720px',
          },
        },
      });
    },
  ],
};

export default config;
