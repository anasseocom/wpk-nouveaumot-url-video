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
        '100vh': '100vh',
      },
      width: {
        'majoruser': '85%',
        'title-video': '80%',
        'screen': "1280px",
        '100vw': "100vw",
      },
      maxWidth: {
        'lastnews': '15rem',
        'little-card': '75vw',
        'card': '18.2rem',
        'video-show': '22rem',
        'little-video-show': '60vw',
        'cardfirst': '36.4rem',
        'stories': '15.3rem',
        'screen-xxl': '1640px',
        'logo-large': "164px",
        'logo': "150px",
        '1/2': '50%',
        'article-default': 'calc(100% - 6rem)',
        'majoruserpage': '23rem',
        '85vw' : '85vw',
        '100vw' : 'calc(100vw - 2rem)',
        'screen-sm' : '720px',
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
        '13/10': '130%',
        '12/10': '120%',
        '1/2': '50%',
        '1/1': '100%',
        '1/10':  '10%',
        '55/100':  '55%',
      },
      lineHeight: {
        'number-stories': '6rem',
       },
      zIndex: {
        '100': 100,
        '-1': '-1',
        '1': 1,
        'infinite': 999999999,
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
