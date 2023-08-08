/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{php,js}','./app/**/*.php'],
  theme: {
    extend: {
      colors: {
        red: 'var(--red)',
        black: 'var(--black)',
        white: 'var(--white)',
        gray: 'var(--gray)',
        galleryblack: 'var(--galleryblack)',
        },
        fontFamily: {
            'lora': ['Lora', 'serif'],
            'nunito': ['Nunito', 'sans-serif'],
        },
        fontSize: {
            // mobile
            h1: '28px',
            h2: '34px',
            h3: '24px',
            h4: '24px',
            p: '17px',
            // (mobile hamburger nav menu)
            hamtext: '34px',
            // body-medium (mobile food menu)
            menutext: '22px',
            // body-small (mobile footer)
            footertext: '16px',

            // desktop
            mdh1: '34px',
            mdh2: '60px',
            mdh3: '30px',
            mdh4: '28px',
            mdp: '24px',
            // body-small (desktop nav menu) 
            mdhamtext: '22px',
            // body-small (desktop food menu) 
            mdmenutext: '22px',
            // body-extra-small (desktop footer)
            mdfootertext: '16px',
        },
        spacing: {
            '400': '400px',
            '440': '440px',
            '500': '500px',
        },
        backgroundImage: {
            'menu-card': "url('/public/images/menucard.svg')",
        },
    },
  },
  plugins: [],
}

