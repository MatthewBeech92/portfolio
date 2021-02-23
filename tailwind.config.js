const colors = require('tailwindcss/colors');

module.exports = {
  purge: {
    enabled: false,
    content: ['./public/index.html'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '375px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
      '3xl': '1920px',
      '4xl': '2560px',
    },
    colors: {
      white: '#fff',
      grey: colors.trueGray,
      teal: colors.teal,
      blue: colors.lightBlue,
    },
    fontFamily: {
      nunito: ['Nunito', 'sans-serif'],
      caveat: ['Caveat', 'cursive'],
    },
    borderWidth: {
      DEFAULT: '1px',
      0: '0',
      2: '2px',
      3: '3px',
      4: '4px',
      6: '6px',
      8: '8px',
      24: '24px',
      48: '48px',
    },
    zIndex: {
      '-50': '-50',
      '-40': '-40',
      '-30': '-30',
      '-20': '-20',
      '-10': '-10',
      0: 0,
      10: 10,
      20: 20,
      30: 30,
      40: 40,
      50: 50,
      auto: 'auto',
    },
    extend: {
      backgroundImage: (theme) => ({
        'header-mobile': "url('/images/header-background-mobile.jpg')",
        'header-desktop': "url('/images/header-background-desktop.jpg')",
      }),
      maxWidth: {
        '3-1/2': '52rem',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/aspect-ratio')],
};
