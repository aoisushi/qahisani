<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                red: 'var(--red)',
                black: 'var(--black)',
                white: 'var(--white)',
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
            }
        }
    }
</script>