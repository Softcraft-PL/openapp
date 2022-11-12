const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'white': '#fff',
      'black': '#393A3A',
      'grey': '#F2F3F2',
      'violet': '#6377FE',
      'red': '#F01414',
      'rose': '#FEE2E2',
      'indigo': '#6366F1',
      'blue': '#3B82F6',
      'cyan': '#A5F3FC',
      'green': '#32D64A',
      'primary': '#6377FE',
      'secondary': '#FDC10B',
      'text-color': '#393A3A'
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
      '2xl': '1480px',
    },
    fontFamily: {
      'source-sans-pro': ['Source Sans Pro'],
    },
    fontSize: {
      'sm': '0.875',      // 14px
      'base': '1rem',     // 16px
      'md': '1.125rem',   // 18px
      'lg': '1.375rem',   // 22px
      'xl': '1.5rem',     // 24px
      '2xl': '1.75rem',   // 28px
      '3xl': '2.25rem',   // 36px
      '4xl': '2.75rem',   // 44px
    },
    extend: {
      /*gap: {
        '30': '1.875rem',
      }*/
      fontFamily: {
        'sans': ['Source Sans Pro', ...defaultTheme.fontFamily.sans],
      },
      backgroundImage: {
        'screen5': "url('/wp-content/themes/openapp/img/screen_5.webp')",
        'about': "url('/wp-content/themes/openapp/img/about.webp')",
        'percent': "url('/wp-content/themes/openapp/img/percent.webp')",
        'grey-image': "url('/wp-content/themes/openapp/img/bg-grey-image.webp')",
        'grey-image-2': "url('/wp-content/themes/openapp/img/bg-grey-image-2.webp')",
        'gradient-image': "url('/wp-content/themes/openapp/img/bg-gradient.webp')",
      },
    },
  },
  plugins: [],
}