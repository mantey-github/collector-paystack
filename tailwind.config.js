const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: ['./resources/views/**/*.blade.php', './resources/js/**/*.{jsx,js}'],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
}
