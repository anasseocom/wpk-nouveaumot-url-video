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
      fontFamily: {
        'sans': ['futura-pt', 'ui-sans-serif', 'system-ui']
              },
      height: {
        'bgmajorcard': '85%',
      },
      width: {
        'majoruser': '85%',
        'screen': "1280px",
      },
      maxWidth: {
        'lastnews': '12rem',
        'card': '18.25rem',
        'cardfirst': '36.5rem',
        'stories': '15.3rem',
        'screen-xxl': '1640px',
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
      spacing: {
        '16/9': '56.25%',
        'stories': '120%',
        'majoruser': '120%',
        '100-100': '100%',
        '10-100':  '10%',
      },
      lineHeight: {
        'number-stories': '6rem',
       },
      zIndex: {
        '100': 100,
        '-1': '-1',
        'infinite': 999999999,
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
