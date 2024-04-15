/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            fontFamily: {
              JazminThin:["Jazmin-Thin", "Times New Roman", "Times", "serif"],
              JazminNormal:["Jazmin-ExtraLight", "Times New Roman", "Times", "serif"],
              AktivGrotesk:["AktivGrotesk", 'sans-serif']
            },
            colors: {
                primary:{
                    400:'#a4897c'
                },
                fontLight: "#fff",
                fontDark: "#000",
            },
        },
    },
    plugins: [],
};
