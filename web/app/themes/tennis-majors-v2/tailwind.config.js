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
      height: {
        'bgmajorcard': '85%',
      },
      width: {
        'majoruser': '85%',
        'screen': "1280px",
      },
      maxWidth: {
        'lastnews': '12rem',
        'card': '20rem',
        'cardfirst': '35rem',
        'stories': '15.3rem',
      },
      maxHeight: {
        'card': '28rem',
      },
      minHeight: {
        '16': '4rem',
      },
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
        'stories': '120%',
        'majoruser': '120%',
        '100-100': '100%',
        '10-100':  '10%'
      },
      lineHeight: {
        'number-stories': '6rem',
       },
      zIndex: {
        '-1': '-1',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
