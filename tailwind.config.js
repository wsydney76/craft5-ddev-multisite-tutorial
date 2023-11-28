/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./templates/**/*.{twig,svg}"
    ],
    theme: {
        extend: {

            colors: {
                brand: colors.slate,
                gray: colors.slate,
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
