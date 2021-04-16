module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {},
      fontSize: {
        'z': '0',
      },
      boxShadow: {
        header: '0px -5px 15px rgba(0, 0, 0, 0.1)',
        arrow: '0px 4px 15px #0000004f',
      },
      zIndex: {
        '100': 100,
      },
      spacing: {
        '16/9': '56.25%',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
