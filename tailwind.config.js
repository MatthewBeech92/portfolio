const colors = require('tailwindcss/colors');

module.exports = {
  purge: {
    enabled: false,
    content: ['./public/index.html'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      white: '#fff',
      grey: colors.trueGray,
      teal: colors.teal,
      blue: colors.lightBlue,
    },
    fontFamily: {
      nunito: ['Nunito', 'sans-serif'],
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
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
