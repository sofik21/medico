/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['**/*.php'],
  theme: {
    fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
      'mukta': ['Mukta', 'sans-serif'],
      'fontawsome' : ["'Font Awesome 6 Free'"],
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1400px',
      'xl': '1580px',
    },
    container:{
      center:true,
    },
    extend: {
      boxShadow: {
        'shadows': '0px 60px 50px -10px rgba(0, 0, 0, 0.07)',
      },
      backgroundImage: {
        'linear': 'linear-gradient(180deg, rgba(23, 36, 48, 0) 31.34%, #172430 100%)',

      },
      colors: {
        'primary'         : '#172430',
        'secondery'       : '#C4161C',
        'background'      : '#5E0B0D',
        'gray'            : '#F8F8F9',
        'slate'           : '#EFEFEF',
        'milkwhite'       : '#EDEDED',
        'graytext'        : '#515A60',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),  
  ],
}

