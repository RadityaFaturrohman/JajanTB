/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'white-main': '#F8FAFC',
        'blue-main': '#4B69FD',
        'grey-main': '#71717A',
        'blue-grey-main': '#94A3B8',
        'new-blue-main': '#2563EB',
        'new-grey-main': '#E4E4E7',
        'new-blue-grey-main': '#E2E8F0',
        'light-grey-main': '#6F6F6F',
        'light-blue-main': '#E4F1FF',
        'black-main': {
          100: '#181818',
          200: '#212121',
        },
      },
      spacing:{
        '1px': '0.063rem',
        '2px': '0.125rem',
        '3px': '0.188rem',
        '5px': '0.313rem',
        '50px': '3.563rem',
        '95px': '5.938rem',
        '260px': '16.25rem',
        '1190px': '74.375rem',
      },
      fontFamily:{
        'heebo': 'Heebo',
        'poppins': 'Poppins, sans-serif'
      },
      letterSpacing:{
        '2%': '2%',
        '5%': '5%',
      },
    },
  },
  plugins: [],
}
