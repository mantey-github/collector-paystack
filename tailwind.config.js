const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    important: true,
    i18n: {
        locales: ["en-US"],
        defaultLocale: "en-US",
    },
    content: ['./resources/views/**/*.blade.php'],
    plugins: [
        require('@tailwindcss/forms')
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ["checked"],
            borderColor: ["checked"],
            inset: ["checked"],
            zIndex: ["hover", "active"],
        },
    },
}
